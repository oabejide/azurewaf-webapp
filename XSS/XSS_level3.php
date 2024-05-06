


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Vulnerable Web App</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bank.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
              <h7> XSS Level 3 </h7>
            </a>
        </div></div></nav></body>             
<style type="text/css">
  .custom{
    width: 220px; !important;
  }
</style>

<html>
  <head>
    <title>XSS-3</title>
  </head>
  <body>
  
    <div style="background-color:#c9c9c9;padding:20px;">
      <br>      <br>
       <p><a class="btn btn-default custom" href="../index.php" role="button"> Main Page &raquo;</a></p>
      <p><a class="btn btn-primary custom" href="xssmainpage.html" role="button"> Home Page &raquo;</a></p>
      
<!--Start Module-->

<div align="center">
<form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="submit" value="Submit" class="btn btn-success">
</form>
	</div></div>
	     <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">

<?php 
if (isset($_GET["username"])) {
	$user = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_GET["username"]);
	echo "Your name is "."$user";
}
 ?>


<!--End Module-->

  </div>
  </body>
</html>


