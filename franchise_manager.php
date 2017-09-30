<?php
	include_once 'header.php';
	include_once 'franchise-navbar.php';
?>

<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div> 
 </div>
</nav>

<div class="banner-bg">
	<div class="container">
		<div class="banner-info">
			<h3>Welcome!</h3><h3><p><?php
										require 'includes/dbh-inc.php';
										$sql = "SELECT `first_name` FROM `franchisee_manager` WHERE `user_id`='".$_SESSION['id']."'";
										$temp = mysqli_query($connection, $sql);
										$row = $temp->fetch_assoc();
										echo "$row[first_name]";
									?></p></h3><br><br>
		    <a href="fm-courses.<?php  ?>"><i class="fa fa-thumbs-up icon_1" style="font-size: 10px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 10px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Details</a>
		</div>
	</div>
</div>

<?php 
	include_once 'footer.php';
?>