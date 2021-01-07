<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='ssherikar2005@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Message From WEBSITE From User'.$name;
		$message=.$msg;
		$headers="From: ".$email;

		mail($to, $subject, $message, $headers);
		header("location:done.html");
	}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
      
      <script src="script2.js" defer></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
      <title>Tools</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">TOOLS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="about.html"
                >About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="contact.html">Contact <!--<span class="sr-only">(current)</span>--> </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="tools.html">Tools  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout </a>
            </li>
         </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>
      <div id="nav">
        Navbar
    </div>
    <div id="title">
        <h1 style="padding-top: 30px;">CONTACT</h1>
    </div>
    <hr>
    <div id="sub_title">
    <h4>We'd <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
          </svg> to help!</h4>
    </div>
    <div id="sub_title_2">
        <h6>We like to create things with fun, open-minded people. Feel free to say hello!</h6>
    </div>
    <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 20px;" id="card_1">
                    
                    <div class="form-group col-md-8">
                    <form action="" method="post" id="form">
                        <input type="text" name="msg" class="form-control" id="name" placeholder="Your Name">
                        <br>
                        <input type="email" name="email"class="form-control" id="mail" placeholder="Email">
                        <br>
                        <textarea class="form-control" name="msg"id="textarea" rows="6" placeholder="Message" cols="100"></textarea>
                        <br>
                        <div id="btn_container">
                        <button type="submit" id="btn_main" style="padding: 5px 100px;" class="btn btn-outline-success" name="submit">Send</button>
                    </div>
                    </form>
                
                </div>
                    
            
                    
                </div>
                <div class="col-md-6" id="card_2" style="text-align: center;margin-top: 20px;">
                    <i class="fa fa-envelope" aria-hidden="true" class="logo" style="float: left;"></i>ssherikar2005@gmail.com
                    <br>
                    <br>
                    <hr>
                    <!-- Add here your SOCIAL MEDIA links using "a" before the icons -->
                    <a href="https://www.facebook.com" target="_blank" class="a_social_media"><i class="fa fa-facebook-square" aria-hidden="true" style="padding: 20px;"></i></a>
                    <a href="https://www.linkedin.com" target="_blank" class="a_social_media"><i class="fa fa-linkedin" aria-hidden="true"style="padding: 20px;"></i></a>
                    <a href="https://www.twitter.com" target="_blank" class="a_social_media"><i class="fa fa-twitter" aria-hidden="true" style="padding: 20px;"></i></a>
                    <a href="https://www.gmail.com" target="_blank" class="a_social_media"><i class="fa fa-google" aria-hidden="true" style="padding: 20px;"></i></a>
                    <a href="#" target="_blank" class="a_social_media"><i class="fa fa-wifi" aria-hidden="true" style="padding: 20px; "></i></a>
                </div>
            </div>
        </div>
    </body>
</html>