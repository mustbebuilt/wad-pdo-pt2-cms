<?php
ini_set('display_errors', 1);
// add your include
$sql= "SELECT * FROM movies WHERE filmID LIKE :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT); 
$stmt->execute();
$row = $stmt->fetchObject();
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title><?php echo $row->filmName;?></title>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    
    
     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
    </ul>
    
    <form class="navbar-form navbar-right" role="login" method="post" action="cms/cms.php">
    	<div class="form-group">
    		<input type="text" class="form-control" placeholder="login">
  		</div>
  		<div class="form-group">
    		<input type="password" class="form-control" placeholder="password">
  		</div>
  		<button type="submit" class="btn btn-default">Submit</button>
	</form>	

  </div>
</nav>
    
    
    
    
      <div class="page-header">
        <h1><?php echo $row->filmName;?> <small><?php echo $row->filmCertificate;?></small></h1>
      </div>
    
    <div class="row">
    	<div class="col-md-4">
					<?php 
					// add image here
                    ?>
            </div>
            <div class="col-md-8">
					<?php
					// format the date output
					echo "<p>$row->filmDescription</p>";
					echo "<p>Release Date: $row->releaseDate</p>";
					echo "<p>Price: &pound;$row->filmPrice</p>";
                    ?>
            </div>
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2016 mustbebuilt.co.uk</p>
      </div>
</footer>
</body>
</html>