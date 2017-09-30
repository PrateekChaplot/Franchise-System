<?php
    include_once 'header.php';
    include_once 'franchise-navbar.php';
?>

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
  		<h3>Courses</h3>
  		<p class="description">
             Our University offers wide range of courses in field of Computer Science.You can find these and their
             respective details(duration,start_date,description) here.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Courses</li>
            </ul>
        </div>
  	</div>
   </div>


<div class="details">
<div class="col-md-9" style="width: 100%;">
	<div class="course_list">
		<div table align="centre">
            <div class="table-header clearfix">
                	<div class="id_col">ID</div>
                	<div class="name_col">Course Name</div>
                    <div class="duration_col">Duration</div>
                    <div class="fee_col">Fee</div>
    		</div>
			<ul class="table-list">
                <?php
                    require 'includes/dbh-inc.php';
                    
                    $sql = "SELECT `franchisee_id` FROM `franchisee_manager` WHERE `user_id`='".$_SESSION['id']."'";
                    $temp = mysqli_query($connection, $sql);
                    $row = $temp->fetch_assoc();
                    
                    $sql = "SELECT `course_id` FROM `franchisee_payment_details` WHERE `franchisee_id`='".$row['franchisee_id']."'";
                    
                    if($result = mysqli_query($connection, $sql)) {
                        if($count = $result->num_rows) {
                            
                            while($row = $result->fetch_object()) {
                                // echo $row->course_id, '<br>';

                                $sql = "SELECT * FROM `course_details` WHERE `course_id`='".$row->course_id."'";
                                $temp = mysqli_query($connection, $sql);
                                $var = $temp->fetch_object();
                                
                                echo '
                                    <li class="clearfix">
                                        <div class="id_col">'.$var->course_id.'</div>
                                        <div class="name_col"><a href="course_detail.html">'.$var->course_name.'</a></div>
                                        <div class="duration_col">'.$var->course_duration.'</div>
                                        <div class="fee_col">'.$var->course_fee.'</div>
                                    </li>
                                ';
                            }
                        }
                    }
                ?>
                
    		</ul>   
				
		</div>
		    <div class="clearfix"> </div>
		
</div>

<?php 
    include_once 'footer.php';
?>