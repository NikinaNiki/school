

><?php
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
 
 $id=$_SESSION['id'];
 
$data=mysqli_query($con,"SELECT * from studentreg INNER join mark on studentreg.id=mark.student_id where student_id='$id'");
$row1=mysqli_fetch_assoc($data);
$a=$row1['class'];


if($a<5)
{
   header("location:result.php");
}
//else{
  // header("location:result.php");
   
//}
else{
   $data=mysqli_query($con,"SELECT * from studentreg INNER join mark on studentreg.id=mark.student_id where student_id='$id'");
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
    <style>
        table,tr,th,td{
            border:2px solid black;
            border-collapse:collapse;
        }
        </style>
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
					
					<li class="active"><a href="login.php">logout</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Progress Card</h1>
                   
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
                    
                    <table class="table table-bordered table-dark">
                    <?php
while($row=mysqli_fetch_assoc($data))
{
    ?>
                    <tr><th>id</th>
                    <th><?php echo $row['id'];?></th>
                    <tr> <th>name</th><th><?php echo $row['name'];?></th></tr>
                    <tr>  <th>class</th><th><?php echo $row['class'];?></th></tr>

                    <tr><th>division</th><th><?php echo $row['division'];?></th></tr>
                           

<tr>

    <th>subject</th>
    
    <th>total mark</th>
    <th>pass mark</th>
    <th>obtained mark</th>
    <th>grade</th>
    <th>result</th>
    </tr>
    <tr>
        <td>english</td>
        <td>100</td>
            <td>30</td>
            <td><?php echo $row['english'];?></td>
                <td><?php if($row['english']>=90 && $row['english']<=100  )
                 {
                    echo "A+";
                 }
                 else if($row['english']>=80 &&$row['english']<90 )
                 {
                    echo "A";
                 }
                 else if($row['english']>=70&&$row['english']<80)
                 {
                    echo "B+";
                 }
                 else if($row['english']>=60 &&$row['english']<70)
                 {
                    echo "B";
                 }
                 else if($row['english']>=50 &&$row['english']<60) 
                 {
                    echo "c+";
                 }
                 else if($row['english']>=40 &&$row['english']<50)
                 {
                    echo "c";
                 }
                 else if($row['english']>=30 &&$row['english']<40)
                 {
                    echo "D+";
                 }
                 else if($row['english']>=20 &&$row['english']<30)
                 {
                    echo "D";
                 }
                 else if($row['english']>=10 &&$row['english']<20)
                 {
                    echo "E+";
                 }
                 else if($row['english']>=0 &&$row['english']<10)
                 {
                    echo "E";
                 }
                ;?>
                </td>
                <td><?php  if($row['english']=='')
                {
                   echo "nil";
                }
                
                 else if($row['english']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td>
            
      
    </tr>

    <tr>
        <td>hindi</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['hindi'];?></td>
           
                <td><?php if($row['hindi']>=90 && $row['hindi']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['hindi']>=80 && $row['hindi']<90)
                 {
                    echo "A";
                 }
                 else if($row['hindi']>=70 && $row['hindi']<80)
                 {
                    echo "B+";
                 }
                 else if($row['hindi']>=60 && $row['hindi']<70)
                 {
                    echo "B";
                 }
                 else if($row['hindi']>=50 && $row['hindi']<60)
                 {
                    echo "c+";
                 }
                 else if($row['hindi']>=40 && $row['hindi']<50)
                 {
                    echo "c";
                 }
                 else if($row['hindi']>=30 && $row['hindi']<40)
                 {
                    echo "D+";
                 }
                 else if($row['hindi']>=20 && $row['hindi']<30)
                 {
                    echo "D";
                 }
                 else if($row['hindi']>=10 && $row['hindi']<20)
                 {
                    echo "E+";
                 }
                 else if($row['hindi']>=0&& $row['hindi']<10)
                 {
                    echo "E";
                 }
                ;?>
                </td>
                <td><?php  if($row['hindi']=='')
                {
                   echo "nil";
                }
                
                 else if($row['hindi']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td>
      
    </tr>
    <tr>
        <td>malayalam</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['malayalam'];?></td>
            <td><?php if($row['malayalam']>=90 && $row['malayalam']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['malayalam']>=80 && $row['malayalam']<90)
                 {
                    echo "A";
                 }
                 else if($row['malayalam']>=70 && $row['malayalam']<80)
                 {
                    echo "B+";
                 }
                 else if($row['malayalam']>=60 && $row['malayalam']<70)
                 {
                    echo "B";
                 }
                 else if($row['malayalam']>=50 && $row['malayalam']<60)
                 {
                    echo "c+";
                 }
                 else if($row['malayalam']>=40 && $row['malayalam']<50)
                 {
                    echo "c";
                 }
                 else if($row['malayalam']>=30 && $row['malayalam']<40)
                 {
                    echo "D+";
                 }
                 else if($row['malayalam']>=20 && $row['malayalam']<20)
                 {
                    echo "D";
                 }
                 else if($row['malayalam']>=10 && $row['malayalam']<10)
                 {
                    echo "E+";
                 }
                 else if($row['malayalam']>=0&& $row['malayalam']<=0)
                 {
                    echo "E";
                 }
                ;?>
                </td>
                <td><?php  if($row['malayalam']=='')
                {
                   echo "nil";
                }
                
                 else if($row['malayalam']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td>
      
            
      
    </tr>
    <tr><td>science</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['science'];?></td>
            <td><?php if($row['science']>=90 && $row['science']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['science']>=80 && $row['science']<90)
                 {
                    echo "A";
                 }
                 else if($row['science']>=70 && $row['science']<80)
                 {
                    echo "B+";
                 }
                 else if($row['science']>=60 && $row['science']<70)
                 {
                    echo "B";
                 }
                 else if($row['science']>=50 && $row['science']<60)
                 {
                    echo "c+";
                 }
                 else if($row['science']>=40 && $row['science']<50)
                 {
                    echo "c";
                 }
                 else if($row['science']>=30 && $row['science']<40)
                 {
                    echo "D+";
                 }
                 else if($row['science']>=20 && $row['science']<20)
                 {
                    echo "D";
                 }
                 else if($row['science']>=10 && $row['science']<10)
                 {
                    echo "E+";
                 }
                 else if($row['science']>=0&& $row['science']<=0)
                 {
                    echo "E";
                 }
                 else if($row['science']=='')
                 {
                    echo "nil";
                 }
                ;?>
                </td>
                <td><?php  if($row['science']=='')
                {
                   echo "nil";
                }
                
                 else if($row['science']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td></tr>


                <tr><td>physics</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['physics'];?></td>
            <td><?php if($row['physics']>=90 && $row['physics']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['physics']>=80 && $row['physics']<90)
                 {
                    echo "A";
                 }
                 else if($row['physics']>=70 && $row['physics']<80)
                 {
                    echo "B+";
                 }
                 else if($row['physics']>=60 && $row['physics']<70)
                 {
                    echo "B";
                 }
                 else if($row['physics']>=50 && $row['physics']<60)
                 {
                    echo "c+";
                 }
                 else if($row['physics']>=40 && $row['physics']<50)
                 {
                    echo "c";
                 }
                 else if($row['physics']>=30 && $row['physics']<40)
                 {
                    echo "D+";
                 }
                 else if($row['physics']>=20 && $row['physics']<20)
                 {
                    echo "D";
                 }
                 else if($row['physics']>=10 && $row['physics']<20)
                 {
                    echo "E+";
                 }
                 else if($row['physics']>=0&& $row['physics']<10)
                 {
                    echo "E";
                 }
                 
                ;?>
                </td>
                <td><?php  if($row['physics']=='')
                {
                   echo "nil";
                }
                
                 else if($row['physics']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td</tr>
                <tr><td>chemistry</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['chemistry'];?></td>
            <td><?php if($row['chemistry']>=90 && $row['chemistry']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['chemistry']>=80 && $row['chemistry']<90)
                 {
                    echo "A";
                 }
                 else if($row['chemistry']>=70 && $row['chemistry']<80)
                 {
                    echo "B+";
                 }
                 else if($row['chemistry']>=60 && $row['chemistry']<70)
                 {
                    echo "B";
                 }
                 else if($row['chemistry']>=50 && $row['chemistry']<60)
                 {
                    echo "c+";
                 }
                 else if($row['chemistry']>=40 && $row['chemistry']<50)
                 {
                    echo "c";
                 }
                 else if($row['chemistry']>=30 && $row['chemistry']<40)
                 {
                    echo "D+";
                 }
                 else if($row['chemistry']>=20 && $row['chemistry']<20)
                 {
                    echo "D";
                 }
                 else if($row['chemistry']>=10 && $row['chemistry']<20)
                 {
                    echo "E+";
                 }
                 else if($row['chemistry']>=0&& $row['chemistry']<10)
                 {
                    echo "E";
                 }
                 
                ;?>
                </td>
                <td><?php  if($row['chemistry']=='')
                {
                   echo "nil";
                }
                
                 else if($row['chemistry']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td</tr>
                <tr><td>biology</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['biology'];?></td>
            <td><?php if($row['biology']>=90 && $row['biology']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['biology']>=80 && $row['biology']<90)
                 {
                    echo "A";
                 }
                 else if($row['biology']>=70 && $row['biology']<80)
                 {
                    echo "B+";
                 }
                 else if($row['biology']>=60 && $row['biology']<70)
                 {
                    echo "B";
                 }
                 else if($row['biology']>=50 && $row['biology']<60)
                 {
                    echo "c+";
                 }
                 else if($row['biology']>=40 && $row['biology']<50)
                 {
                    echo "c";
                 }
                 else if($row['biology']>=30 && $row['biology']<40)
                 {
                    echo "D+";
                 }
                 else if($row['biology']>=20 && $row['biology']<20)
                 {
                    echo "D";
                 }
                 else if($row['biology']>=10 && $row['biology']<20)
                 {
                    echo "E+";
                 }
                 else if($row['biology']>=0&& $row['biology']<10)
                 {
                    echo "E";
                 }
                 
                ;?>
                </td>
                <td><?php  if($row['biology']=='')
                {
                   echo "nil";
                }
                
                 else if($row['biology']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td></tr>
                <tr><td>maths</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['maths'];?></td>
            <td><?php if($row['maths']>=90 && $row['maths']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['maths']>=80 && $row['maths']<90)
                 {
                    echo "A";
                 }
                 else if($row['maths']>=70 && $row['maths']<80)
                 {
                    echo "B+";
                 }
                 else if($row['maths']>=60 && $row['maths']<70)
                 {
                    echo "B";
                 }
                 else if($row['maths']>=50 && $row['maths']<60)
                 {
                    echo "c+";
                 }
                 else if($row['maths']>=40 && $row['maths']<50)
                 {
                    echo "c";
                 }
                 else if($row['maths']>=30 && $row['maths']<40)
                 {
                    echo "D+";
                 }
                 else if($row['maths']>=20 && $row['maths']<20)
                 {
                    echo "D";
                 }
                 else if($row['maths']>=10 && $row['maths']<20)
                 {
                    echo "E+";
                 }
                 else if($row['maths']>=0&& $row['maths']<10)
                 {
                    echo "E";
                 }
                 
                ;?>
                </td>
                <td><?php  if($row['maths']=='')
                {
                   echo "nil";
                }
                
                 else if($row['maths']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td></tr>
                <tr><td>social science</td>
        <td>100  </td>
            <td>30</td>
            <td><?php echo $row['socialscience'];?></td>
            <td><?php if($row['socialscience']>=90 && $row['socialscience']<=100)
                 {
                    echo "A+";
                 }
                 else if($row['socialscience']>=80 && $row['socialscience']<90)
                 {
                    echo "A";
                 }
                 else if($row['socialscience']>=70 && $row['socialscience']<80)
                 {
                    echo "B+";
                 }
                 else if($row['socialscience']>=60 && $row['socialscience']<70)
                 {
                    echo "B";
                 }
                 else if($row['socialscience']>=50 && $row['socialscience']<60)
                 {
                    echo "c+";
                 }
                 else if($row['socialscience']>=40 && $row['socialscience']<50)
                 {
                    echo "c";
                 }
                 else if($row['socialscience']>=30 && $row['socialscience']<40)
                 {
                    echo "D+";
                 }
                 else if($row['socialscience']>=20 && $row['socialscience']<20)
                 {
                    echo "D";
                 }
                 else if($row['socialscience']>=10 && $row['socialscience']<20)
                 {
                    echo "E+";
                 }
                 else if($row['socialscience']>=0&& $row['socialscience']<10)
                 {
                    echo "E";
                 }
                 
                ;?>
                </td>
                <td><?php  if($row['socialscience']=='')
                {
                   echo "nil";
                }
                
                 else if($row['socialscience']<30)
                 {
                    echo "fail";
                 }
            
            
                
                else{
                    echo "pass";
                 }
                 ;?></td></tr>
                
                
                
                
                
                


                          
<?php
}
?>
    </table>
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