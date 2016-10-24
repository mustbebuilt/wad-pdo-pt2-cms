<?php
ini_set('display_errors', 1);
// add your includes for connections and functions
// make sure the path is correct
$sFilmID = safeInt($_GET['filmID']);
$sql= "SELECT * FROM movies WHERE filmID LIKE :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmID', $sFilmID, PDO::PARAM_INT); 
$stmt->execute();
$row = $stmt->fetchObject();
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Edit <?php echo $row->filmName; ?></title>
          <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
          <nav class="navbar navbar-default">
              <div class="container-fluid">
                <ul class="nav navbar-nav">
                  <li><a href="cms.php">CMS Home</a></li>
                </ul>
                <p class="nav navbar-nav navbar-right">
                  		<a class="btn btn-danger navbar-btn" href="../index.php" role="button">Log Out</a>
                </p>
              </div>
		</nav>
      <div class="page-header">
        <h1>Edit <?php echo $row->filmName; ?></h1>
      </div>
    
    <div class="row">
            <div class="col-md-12 form-group">
            	<p>
                Are you sure you wish to delete <?php echo $row->filmName; ?>?
                </p>
          		<form name="form1" method="post" action="process/deleteRecord.php" class="form-inline">
                	<!-- Add the filmID as a hidden field -->
                	<input type="submit" value="Delete" class="btn btn-danger">
                    <a href="cms.php">Save</a>
                </form>
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