


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
              <h7> SQL Injection Level 3 </h7>
            </a>
        </div></div></nav></body>             
<style type="text/css">
  .custom{
    width: 220px; !important;
  }
</style>

<html>
  <head>
    <title>SQLi-3</title>
  </head>
  <body>
  
    <div style="background-color:#c9c9c9;padding:20px;">
      <br>      <br>
       <p><a class="btn btn-default custom" href="../index.php" role="button"> Main Page &raquo;</a></p>
      <p><a class="btn btn-primary custom" href="sqlmainpage.html" role="button"> Home Page &raquo;</a></p>
      
<!--Start Module-->

 <div align="center">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" >
		<p>Give me book's number and I give you...</p>
		Book's number : <input type="text" name="number">
		<input type="submit" name="submit" value="Submit">
	</form>
	</div></div>
	  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">

	<!--Admin password is in the secret table. I hope, anyone doesn't see it.-->

<?php
	$servername = "mysql-container";
	$username = "root";
	$password = "";
	$db = "1ccb8097d0e9ce9f154608be60224c7c";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	$source = "";
	if(isset($_GET["submit"])){
		$number = $_GET['number'];
		$query = "SELECT bookname,authorname FROM books WHERE number = '$number'";
		$result = mysqli_query($conn,$query);
		$row = @mysqli_num_rows($result);
		echo "<hr>";
		if($row > 0){
			echo "<pre>There is a book with this index.</pre>";
		}else{
			echo "Not found!";
		}
	}

?> 

<!--End Module-->

  </div>
  </body>
</html>



