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

<!-- end of body -->

<!-- footer -->
<?php 
	include_once 'footer.php';
?>