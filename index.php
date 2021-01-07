<?php session_start(); 

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
      
      <script src="script.js" defer></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
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
                >About </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="contact.html">Contact <!--<span class="sr-only">(current)</span>--> </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="tools.html">Tools</a>
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
    </body>
</html>