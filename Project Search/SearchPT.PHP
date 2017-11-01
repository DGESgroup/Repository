<?php

if(isset($_POST['search']))
{
    $skillToSearch =   $_POST['skillsList.value'];
    $difficultyToSearch = $_POST['difficultyList.value'];
    $preRequisiteToSearch = $_POST['preRequisiteList.value'];
    // search in all table columns
    // using concat mysql function
    $query = $pdo->prepare("SELECT * FROM `projects` WHERE CONCAT(`projects_skills`, `project_prerequisite`, `project_difficulty`) LIKE '%".$skillToSearch. "%','%".$difficultyToSearch."%','%".$preRequisiteToSearch."%' ");
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `projects`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "dges");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
      <form action="SearchPT.php" method="post">
      <select name="skillsList" form="skillsForm" >
        <<option value="Marketing" <?php if($start=='Marketing'){echo 'selected';}?>>Marketing</option>
        <option value="Accounting"<?php if($start=='Accounting'){echo 'selected';}?> >Accounting</option>
        <option value="Programming"<?php if($start=='Programming'){echo 'selected';}?> >Programming</option>
        <option value="Finance" <?php if($start=='Finance'){echo 'selected';}?>>Finance</option>
        <option value="SQL" <?php if($start=='SQL'){echo 'selected';}?>>SQL</option>
      </select>
      <select name="difficultyList" form="DifficultyForm">
          <option value="Entry Level"<?php if($start=='Entry Level'){echo 'selected';}?> >Entry Level</option>
          <option value="Medium"<?php if($start=='Medium'){echo 'selected';}?> >Medium</option>
          <option value="Hard" <?php if($start=='Hard'){echo 'selected';}?>>Hard</option>
      </select>
      <select name="preRequisiteList" form="preRequisiteForm" >
            <option value="Yes"<?php if($start=='Yes'){echo 'selected';}?> >Yes</option>
            <option value="None" <?php if($start=='None'){echo 'selected';}?>>None</option>
      </select>
      <input type="submit" name="search" value="Filter"><br><br>

            <table>
                <tr>
                    <th>Title</th>
                    <th>Skills</th>
                    <th>Difficulty</th>
                    <th>Prerequisite</th>
                    <th>Description</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['projects_title'];?></td>
                    <td><?php echo $row['projects_skills'];?></td>
                    <td><?php echo $row['project_difficulty'];?></td>
                    <td><?php echo $row['project_prerequisite'];?></td>
                    <td><?php echo $row['project_description'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>

</html>
