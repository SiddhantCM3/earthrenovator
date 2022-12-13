<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
      .container{
        margin-top:30px;
         border:3px;
         border-radius:10px;
         border-style:solid;
         width:500px;
      }
      .btn-success{
        margin-bottom:20px;
      }    
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TEST.PHP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Index.php">Home</a></li>
      <li><a href="About.php">About Us</a></li>
      <li><a href="Contact.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
    </ul>
        </div>
      </div>
</nav>
<div class="container">  
  <div class="text-center"><h2>LOGIN FORM</h2></div>

  <form class="col-sm-12">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <center>
    <button type="submit" class="btn btn-success">Submit</button>
    </center>
  </form>
</body> 
</html>
