<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2 text-align: left; >Welcome</h2>
		<?php
			if (isset($_SESSION['u_id'])) {
				phpAlert("Login Successful");
			}
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>

<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>