<?php 
$CONFIG['company_name'] = "Vulnerable Web App";
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Vulnerable Web App</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bank.css" rel="stylesheet">


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
            <a class="navbar-brand" href="/"><?php echo($CONFIG['company_name']); ?></a>
        </div></div></nav></body>
    

           
<style type="text/css">
  .custom{
    width: 170px; !important;
  }

</style>

    <div class="jumbotron">
      <div class="container">


        <p></p>
     <center>   <p><a class="btn btn-primary custom" href="CommandExecution/commandexec.html" role="button">Command Execution &raquo;</a></p> </center>

     <center>   <p><a class="btn btn-success custom" href="SQL/sqlmainpage.html" role="button"> SQL Injection &raquo;</a></p> </center>

      <center>   <p><a class="btn btn-danger custom" href="XSS/xssmainpage.html" role="button"> XSS &raquo;</a></p> </center>

      <center>   <p><a class="btn btn-warning custom" href="FileInclusion/pages/fileinc.html" role="button"> File Inclusion &raquo;</a></p> </center>

       <center>   <p><a class="btn btn-info custom" href="FileUpload/fileupl.html" role="button"> File Upload &raquo;</a></p> </center>
       
       <center>   <p><a class="btn btn-default custom" href="homepage.php" role="button"> Setup &raquo;</a></p> </center>



      </div>
    </div>


      <hr>
           
    </div> 
