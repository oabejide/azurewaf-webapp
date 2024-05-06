
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
              <h7> Command Execution Level 1 </h7>
            </a>
        </div></div></nav></body>             
<style type="text/css">
  .custom{
    width: 220px; !important;
  }
</style>

<html>
  <head>
    <title>CommandExec-1</title>
  </head>
  <body>
  
    <div style="background-color:#c9c9c9;padding:20px;">
      <br>      <br>
       <p><a class="btn btn-default custom" href="../index.php" role="button"> Main Page &raquo;</a></p>
      <p><a class="btn btn-primary custom" href="commandexec.html" role="button"> Home Page &raquo;</a></p>

      <h1 align="center">Login as Admin</h1>
    <form align="center" action="CommandExec-1.php" method="$_GET">
      <label align="center">Username:</label><br>
      <input align="center" type="text" name="username" value="Admin"><br>
      <label>Password:</label><br>
      <input align="center" type="password" name="password" value=""><br><br>
    <input align="center" type="submit" class="btn btn-success" value="Submit">

    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">
    <?php
    if(isset($_GET["username"])){
      echo shell_exec($_GET["username"]);
      if($_GET["username"] == "Admin" && $_GET["password"] == "ufoundmypassword")
        echo "WELLDONE";
    }
    ?>
  </div>
  </body>
</html>
