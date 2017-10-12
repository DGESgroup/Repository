<?php
  if (isset($_POST['search'])) {

      $valueToSearch = $_POST['valuetosearch'];
      $query = "SELECT * FROM `users` WHERE CONCAT(`user_id`, `user_first`, `user_last`,`user_email`,
                                                    `Country`, `grade`, `user_type`) LIKE '%".$valueToSearch."%'";
      $search_result = filterTable($query);

  } else {
    $query = "SELECT `user_id`, `user_first`, `user_last`, `user_email`,
                    `Country`, `grade`, `user_type` FROM `users`";
    $search_result = filterTable($query);

  }

  function filterTable($query) {

    $connect = mysqli_connect("localhost", "root", "", "dges");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
  }
?>

<!DOCTYPE HTML>

<html>

<head>

  <title>Search Page</title>

  <style>
    table, tr, th, td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
      <form action="filterdata.php" method="post">
        <input type="text" name="valuetosearch" placeholder="Search"><br><br>

        <input type="submit" name="search" value="Filter"><br><br>
        <table>
          <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Country</th>
            <th>Grade</th>
            <th>Type</th>


          </tr>
          <?php while ($row = mysqli_fetch_array($search_result)):?>
              <tr>
                <td><?php echo $row['user_id'];?></td>
                <td><?php echo $row['user_first'];?></td>
                <td><?php echo $row['user_last'];?></td>
                <td><?php echo $row['user_email'];?></td>
                <td><?php echo $row['Country'];?></td>
                <td><?php echo $row['grade'];?></td>
                <td><?php echo $row['user_type'];?></td>

              </tr>
          <?php endwhile;?>
        </table>
      </form>


</body>

</html>
