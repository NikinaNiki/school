
<?php
include 'connection.php';
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies
if(!isset($_SESSION['id']))
{
header("location:Login.php");
exit();
}

$id=$_GET['student_id'];
$data=mysqli_query($con,"select * from mark where student_id='$id'");
$row=mysqli_fetch_assoc($data);

if(isset($_POST['submit']))
{
    
  
    $class=$_POST['class'];
    $student_id=$_POST['student_id'];
    $english=$_POST['english'];
    $hindi=$_POST['hindi'];
    $malayalam=$_POST['malayalam'];
    $science=$_POST['science'];
    $physics=$_POST['physics']; 
    $chemistry=$_POST['chemistry'];
    $biology=$_POST['biology'];
    $maths=$_POST['maths'];
    $socialscience=$_POST['socialscience'];
  
 
mysqli_query($con,"update mark set class='$class',student_id='$student_id',english='$english',hindi='$hindi',malayalam='$malayalam',science='$science',physics='$physics',chemistry='$chemistry',biology='$biology',maths='$maths',socialscience='$socialscience'  where student_id='$id'");




}
?>
<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>free-educational-responsive-web-template-webEdu</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					
        <li class="active"><a href="logout.php">logout</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Add mark</h1>
                   
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						
					
						
                    <form class="form-light mt-20" role="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>class</label>
                                <select name="class">
                                <option value="0">select</option>
							                	<option value="1" <?php if($row['class']=='1') echo 'selected="selected"'; ?> >1</option>
                                <option value="2" <?php if($row['class']=='2') echo 'selected="selected"'; ?>> 2</option>
                                <option value="3" <?php if($row['class']=='3') echo 'selected="selected"'; ?>>3</option>
                                <option value="4" <?php if($row['class']=='4') echo 'selected="selected"'; ?>>4</option>
                                <option value="5" <?php if($row['class']=='5') echo 'selected="selected"'; ?>>5</option>
                                <option value="6"<?php if($row['class']=='6') echo 'selected="selected"'; ?>>6</option>
                                <option value="7" <?php if($row['class']=='7') echo 'selected="selected"'; ?>>7</option>
                                <option value="8" <?php if($row['class']=='8') echo 'selected="selected"'; ?>>8</option>
                                <option value="9"<?php if($row['class']=='9') echo 'selected="selected"'; ?>>9</option>
                                <option value="10" <?php if($row['class']=='10') echo 'selected="selected"'; ?>>10</option>
                               
</select>
							</div>
                            <div class="form-group">
                            
								<label>student_id</label>
								<input type="text" class="form-control"  name="student_id" value="<?php echo $row['student_id'];?>">
							
                            
							</div>
                            <div class="form-group">
								<label>english</label>
								<input type="text" class="form-control"  name="english" value="<?php echo $row['english'];?>">
							</div>
                            <div class="form-group">
								<label>hindi</label>
								<input type="text" class="form-control"  name="hindi" value="<?php echo $row['hindi'];?>">
							</div>
                            <div class="form-group">
								<label>malyalam</label>
								<input type="text" class="form-control"  name="malayalam" value="<?php echo $row['malayalam'];?>">
							</div>
                            
                            <div class="form-group">
								<label>science</label>
								<input type="text" class="form-control"  name="science" value="<?php echo $row['science'];?>">
							</div>
                            <div class="form-group">
								<label>physics</label>
								<input type="text" class="form-control"  name="physics" value="<?php echo $row['physics'];?>">
							</div>
                            <div class="form-group">
								<label>chemistry</label>
								<input type="text" class="form-control"  name="chemistry" value="<?php echo $row['chemistry'];?>">
							</div>
                            <div class="form-group">
								<label>biology</label>
								<input type="text" class="form-control"  name="biology" value="<?php echo $row['biology'];?>">
							</div>
                            <div class="form-group">
								<label>maths</label>
								<input type="text" class="form-control"  name="maths" value="<?php echo $row['maths'];?>">
							</div>
                            <div class="form-group">
								<label>socialscience</label>
								<input type="text" class="form-control"  name="socialscience" value="<?php echo $row['socialscience'];?>">
							</div>
                            
                            
                            
                            
                          
                            
                            
                            
                            
								
							
                            
							
							<button type="submit" class="btn btn-two" name="submit">add mark</button><p><br/></p>
						</form>
					</div>
					
			</div>
	<!-- /container -->

	 <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Course Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                List of Technology 
              </a>
            </li>
            <li><a href="#">
                List of Business
              </a>
            </li>
            <li><a href="#">
                List of Photography
              </a>
            </li>
            <li><a href="#">
               List of Language
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Products Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="#">
                Individual Plans  </a>
            </li>
            <li><a href="#">
                Business Plans
              </a>
            </li>
            <li><a href="#">
                Free Trial
              </a>
            </li>
            <li><a href="#">
                Academic
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                All Courses
              </a>
            </li>
            <li> <a href="#">
                All Instructors
              </a>
            </li>
            <li><a href="#">
                All Members
              </a>
            </li>
            <li>
              <a href="#">
                All Groups
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Kerniles 416  - United Kingdom<br>
            <i class="fa fa-phone"></i>+00 123 156 711 <br>
             <i class="fa fa-envelope-o"></i> youremail@email.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">About</a> |
								<a href="courses.html">Courses</a> |
								<a href="price.html">Price</a> |
								<a href="videos.html">Videos</a> |
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2014. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
</script>