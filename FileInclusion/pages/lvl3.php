
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Vulnerable Web App</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bank.css" rel="stylesheet">
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
              <h7> File Inclusion Level 3 </h7>
            </a>
        </div></div></nav></body>             
<style type="text/css">
  .custom{
    width: 220px; !important;
  }
</style>

<html>
  <head>
    <title>FileInc-3</title>
  </head>
  <body>
  
    <div style="background-color:#c9c9c9;padding:20px;">
      <br>      <br>
       <p><a class="btn btn-default custom" href="../../index.php" role="button"> Main Page &raquo;</a></p>
      <p><a class="btn btn-primary custom" href="fileinc.html" role="button"> Home Page &raquo;</a></p>
      
<!--Start Module-->
  
      <div align="center"><b><h3>This is Level 3</h3></b></div> 
      <div align="center">
      <a href=lvl3.php?file=1><button class="btn btn-success">Button</button></a>
      <a href=lvl3.php?file=2><button class="btn btn-warning">The Other Button!</button></a>
      </div></div>
<div style="background-color:#ecf2d0;padding:5px;border-radius:0px 0px 20px 10px" align="center">
      
      <?php
        echo "</br></br>";
        
        if (isset( $_GET[ 'file' ]))        
        {
          $secure3=$_GET[ 'file' ];
          $secure3=strtolower($secure3);
          
          $secure3=str_replace( array("http://", "https://") ,"" , $secure3);
          $secure3=str_replace (array ( ":" , "/" , "..\\", "../" ), "" ,  $secure3);

          if (isset($secure3)) 
            {        
              include($secure3.".php");
            }
        }
      ?>

<!--End Module-->

  </div>
  </body>
</html>










