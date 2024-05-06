


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
              <h7> File Inclusion Level 4 </h7>
            </a>
        </div></div></nav></body>             
<style type="text/css">
  .custom{
    width: 220px; !important;
  }
</style>

<html>
  <head>
    <title>FileInc-4</title>
  </head>
  <body>
  
    <div style="background-color:#c9c9c9;padding:20px;">
      <br>      <br>
       <p><a class="btn btn-default custom" href="../../index.php" role="button"> Main Page &raquo;</a></p>
      <p><a class="btn btn-primary custom" href="fileinc.html" role="button"> Home Page &raquo;</a></p>
      
<!--Start Module-->
   <div align="center"><b><h3>This is Level 4</h3></b></div>
      <div align="center">
      <a href=lvl4.php?file=1.php><button class="btn btn-success">Button</button></a>
      <a href=lvl4.php?file=2.php><button class="btn btn-warning">The Other Button!</button></a>
      </div></div>
      <div style="background-color:#ecf2d0;padding:5px;border-radius:0px 0px 20px 10px" align="center">

      
      <?php     
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) 
        {
          $secure4 = $_GET[ 'file' ];
         
            if ($secure4!="1.php" && $secure4!="2.php") 
            {
              $secure4=substr($secure4, 0,-4);
            }
            
            if (isset($secure4)) 
            {        
              include($secure4);              
            }
        }              
      ?>

<!--End Module-->

  </div>
  </body>
</html>












