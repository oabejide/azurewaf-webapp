


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
              <h7> Command Execution Level 4 </h7>
            </a>
        </div></div></nav></body>             
<style type="text/css">
  .custom{
    width: 220px; !important;
  }
</style>

<html>
  <head>
    <title>CommandExec-4</title>
  </head>
  <body>
  
    <div style="background-color:#c9c9c9;padding:1px;">
      <br>      <br><br>
       <p><a class="btn btn-default custom" href="../index.php" role="button"> Main Page &raquo;</a></p>
      <p><a class="btn btn-primary custom" href="commandexec.html" role="button"> Home Page &raquo;</a></p>
      </div>
 
 <div style="background-color:#c9c9c9;padding:1px;">
      <h3 align="center">Browse The Files!</h3> <br>
    <form align="center" action="CommandExec-4.php" method="$_GET">
      What's it:
      <input type="text" name="typeBox" value="">
      <input type="submit" value="Submit" class="btn btn-success"><br><br><br>
    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">
    <?php
    if(!file_exists(".hidden")){
      mkdir(".hidden");
      exec("echo \"flag:secret\" > .hidden/log4.txt");
      if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
        exec("attrib +h .hidden");
      }
    }
    if(isset($_GET["typeBox"])){
      $target =$_GET["typeBox"];
      $substitutions = array(
        '&&'=>'',
        '& ' => '',
        '&& ' => '',
        ';'  => '',
        '|' => '',
        '-'  => '',
        '$'  => '',
        '('  => '',
        ')'  => '',
        '`'  => '',
        '||' => ''
      );
      $target = str_replace(array_keys($substitutions),$substitutions,$target);
      echo shell_exec($target);
      if($_GET["typeBox"] == "secret")
        echo "You really found my secret!";
    }

    ?>

  </div>
  </body>
</html>

