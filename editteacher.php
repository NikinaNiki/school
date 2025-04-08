 <?php
include 'connection.php';
$id=$_GET['id'];

$data=mysqli_query($con,"select * from teacherreg where id='$id'");
$row=mysqli_fetch_assoc($data);
$data1=mysqli_query($con,"select * from login where id='$id' and type='teacher'");
$row1=mysqli_fetch_assoc($data1);
if(isset($_POST['submit']))
{
    
  
  $name=$_POST['name'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $class=$_POST['class'];
  $division=$_POST['division'];
  $password=$_POST['password'];
  $id=$_POST['id'];
  $pic=$_FILES['f1']['name'];
  
  if($pic!="")
  {
	  $filearray=pathinfo($_FILES['f1']['name']);
	  $file1=rand();
	  $file_ext=$filearray["extension"];
	  $filenew=$file1 .".".$file_ext;
	 // move_uploaded_file($_FILES['f1']['tmp_name'],"~/images/".$filenew);
	 $uploadDir = "image/"; // Make sure this directory exists
$uploadFile = $uploadDir . basename($_FILES["f1"]["name"]);
$filename= basename($_FILES["f1"]["name"]);

 
mysqli_query($con,"update teacherreg set name='$name' ,dob='$dob', gender='$gender',email='$email',phone='$phone',address='$address',class='$class',division='$division',file='$filename' where id='$id' ");
mysqli_query($con,"update login set email='$email' ,password='$password' where id='$id'");
echo "<script>alert('update successfully')</script>";
echo "<script>window.location.href='viewteacherregistration.php';</script>";


}
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
					
					<li class="active"><a href="">Rgistration</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Teacher Registration</h1>
                   
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						
						
						<form class="form-light mt-20" role="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"  required>
							</div>
                            <div class="form-group">
								<label>DOB</label>
								<input type="date" class="form-control" placeholder="Your name" value="<?php echo $row['dob'];?>" name="dob" required>
							</div>
                            <div class="form-group">
                            <label>Gender</label> 
                        <select name="gender" class="form-control" value="<?php echo $row['gender'];?>"  id="exampleSelectGender" required>
                          <option value="Male"  >Male</option>
                          <option value="Female" >Female</option>
                        </select>
                        </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<input type="text"  value="<?php echo $row1['password'];?>" class="form-control" name="password" >
									</div>
								</div>

							</div>

                            <div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" value="<?php echo $row['phone'];?>"  name="phone" required>
							</div>
                            <div class="form-group">
								<label>Address</label>
								<textarea class="form-control" id="message" style="height:100px;" value=""  name="address" required ><?php echo $row['address'];?></textarea>
							</div>
							<div class="form-group">
								<label>class</label>
								<input type="text" class="form-control" value="<?php echo $row['class'];?>" name="class" required>
							</div>
                            <div class="form-group">
								<label>Division</label>
								<input type="text" class="form-control" name="division"  value="<?php echo $row['division'];?>" >
							</div>
                            <div>
                    <img src="image/<?php echo $row['file'] ;?>" height="100" width="200" id="new">
                       </div>
					   <div >
                        
                        <input type="file"  name="f1" placeholder="image" id="imageInput" accept="image/*" onchange="previewImage(event)">

                         
                       <img id="preview" src="" alt="Image Preview" style="max-width: 300px; display: none;">

                      </div>
							<div class="form-group">
							

								<label>id</label>
								<input type="hidden" class="form-control" name="id"  value="<?php echo $row['id'];?>" >
							</div>
                            
							
							<button type="submit" class="btn btn-two" name="submit">Update</button><p><br/></p>
						</form>

						<script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            document.getElementById("new").style.display="none";
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>
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
