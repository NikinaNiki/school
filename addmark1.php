
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
//$email=$_SESSION['email'];
$id=$_SESSION['id'];
//$data=mysqli_query($con,"select * from studentreg where email='$email'");
$data1=mysqli_query($con,"select * from teacherreg where id='$id'");
$row1=mysqli_fetch_assoc($data1);
//$data2=mysqli_query($con,"select * from studentreg");
//$row2=mysqli_fetch_assoc($data2);
$id=$_GET['id'];

$data=mysqli_query($con,"select * from studentreg where id='$id'");
$row=mysqli_fetch_assoc($data);
if(isset($_POST['submit']))
{
   
    $student_id=$_POST['student_id'];
    $teacher_id=$_POST['teacher_id'];
   
    $english=$_POST['english'];
    $hindi=$_POST['hindi'];
    $malayalam=$_POST['malayalam'];
    $science=$_POST['science'];
    $physics=$_POST['physics']; 
    $chemistry=$_POST['chemistry'];
    $biology=$_POST['biology'];
    $maths=$_POST['maths'];
    $socialscience=$_POST['socialscience'];
    
$data=mysqli_query($con,"select * from studentreg where id='$student_id'");
$row=mysqli_fetch_assoc($data);
$class=$row['class'];
mysqli_query($con,"insert into mark(class,student_id,teacher_id,english,hindi,malayalam,science,physics,chemistry,biology,maths,socialscience)values('$class','$student_id','$teacher_id','$english','$hindi','$malayalam','$science','$physics','$chemistry','$biology','$maths','$socialscience')");


  


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
  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- And this one -->
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
                    <h1>mark</h1>
                   
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						
						
						<form class="form-light mt-20" role="form" method="post" enctype="multipart/form-data">
       
							
                         
                          
<div class="form-group">

                  </div>
                          <div class="form-group">
                          <label for="class">Class:</label>
                          <input type="text" id="class" name="class" value="<?php echo $row['class'];?>" readonly>
                                                      
                                        </div>
                                        <div class="form-group">
                          <label for="class">Name:</label>
                          <input type="text" id="name" name="name" value="<?php echo $row['name'];?>" readonly>
                                                      
                                        </div>
                                        <div class="form-group">
                          <label for="class">id</label>
                          <input type="text" id="id" name="student_id" value="<?php echo $row['id'];?>" readonly>
                                                      
                                        </div>



              <div class="form-group">
                            
              <label>teacher id</label>
              <input type="text" class="form-control" name="teacher_id"  value="<?php echo $row1['id'];?>" >
                          
                                        
                          </div>
                            <div class="form-group">
								<label>english</label>
								<input type="text" class="form-control"  name="english">
							</div>
                            <div class="form-group">
								<label>hindi</label>
								<input type="text" class="form-control"  name="hindi">
							</div>
                            <div class="form-group">
								<label>malyalam</label>
								<input type="text" class="form-control"  name="malayalam">
							</div>
                            
                            <div class="form-group">
								<label>science</label>
								<input type="text" class="form-control"  name="science">
							</div>
                            <div class="form-group">
								<label>physics</label>
								<input type="text" class="form-control"  name="physics">
							</div>
                            <div class="form-group">
								<label>chemistry</label>
								<input type="text" class="form-control"  name="chemistry">
							</div>
                            <div class="form-group">
								<label>biology</label>
								<input type="text" class="form-control"  name="biology">
							</div>
                            <div class="form-group">
								<label>maths</label>
								<input type="text" class="form-control"  name="maths">
							</div>
                            <div class="form-group">
								<label>socialscience</label>
								<input type="text" class="form-control"  name="socialscience">
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
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>

  <script>
  $(document).ready(function () {
    $("#stname").change(function () {
      var student_id = $(this).val();
      alert("Student ID: " + student_id); // Debug

      $.ajax({
        url: "get_class.php",
        method: "POST",
        data: { id: student_id },
        success: function (response) {
          $('#class').val(response);
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", error);
        }
      });
    });
  });
</script>
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