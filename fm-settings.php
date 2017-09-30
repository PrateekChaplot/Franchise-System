<!-- header -->
<?php
	include_once 'header.php';
	include_once 'franchise-navbar.php';
?>
<!-- body -->
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
   <!--Brand and toggle get grouped for better mobile display--> 
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div> 
    <!--Collect the nav links, forms, and other content for toggling--> 
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
    		<li><a href="services.html">Services</a></li>
            <li class="last"><a href="contact.html">Contacts</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
   </div>
</nav>

<!-- banner -->
<div class="courses_banner">
	<div class="container">
		<h3>Settings</h3>
		<div class="breadcrumb1"><br><br>
	        <ul>
	            <li class="icon6"><a href="franchise_manager.php">&nbsp; &nbsp; Franchise Manager</a></li>
	            <li class="current-page">Settings</li>
	        </ul>
    	</div>
	</div>
</div>
<!-- //banner -->

<div class="courses_box1">
   <div class="container">
   	  <form action="includes/fm-chane-inc.php" method="POST">
        <p class="lead">Account Settings</p>
        
        <!-- First Name -->
        <div class="form-group">
            Name:	<?php
            			require 'includes/dbh-inc.php';

            			$sql = "SELECT `first_name` FROM `franchisee_manager` WHERE `user_id`='".$_SESSION['id']."'";
            			$temp = mysqli_query($connection, $sql);
            			$row = $temp->fetch_assoc();
            			echo $row['first_name'];
            			?>
            <input type="text" name="new-fname" autocomplete="off" placeholder="First Name *" value="">
        </div>
        
        <!-- Last Name -->
        <div class="form-group">
        	Last Name: <?php
	            			require 'includes/dbh-inc.php';

	            			$sql = "SELECT `last_name` FROM `franchisee_manager` WHERE `user_id`='".$_SESSION['id']."'";
	            			$temp = mysqli_query($connection, $sql);
	            			$row = $temp->fetch_assoc();
	            			echo $row['last_name'];
	            			?>
            <input type="text" name="new-lname" placeholder="Last Name *" value="">
        </div>
        
        <!-- Phone Number -->
        <div class="form-group">
            Phone Number:	<?php
		            			require 'includes/dbh-inc.php';

		            			$sql = "SELECT `phone_number` FROM `franchisee_manager` WHERE `user_id`='".$_SESSION['id']."'";
		            			$temp = mysqli_query($connection, $sql);
		            			$row = $temp->fetch_assoc();
		            			echo $row['phone_number'];
		            			?>
            <input type="number" name="new-phone" placeholder="Phone Number *" value="">
        </div>
        <div class="form-group">
            New Password: <input type="password" name="new-pwd" placeholder="New Password *">
        </div>
        <div class="form-group">
            Old Password: <input type="password" name="old-pwd" placeholder="Old Password *">
        </div>
        <button type="submit" name="submit">Apply Changes!</button>
        </form>
   </div>
</div>
<!-- end of body -->

<!-- footer -->
<?php 
	include_once 'footer.php';
?>