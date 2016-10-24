<?php
ini_set('display_errors', 1);
// add your include
$sql= "SELECT * FROM movies WHERE filmName LIKE :filmName";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmName', $_GET['filmName'], PDO::PARAM_STR); 
$stmt->execute();
$totalnoFilms = $stmt->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>SEARCH / MULTIPLE RESULTS Query Using a prepare statement</title>
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
        <h1>Search Page</h1>
      </div>
    <div class="row">
        <div class="col-md-12">
            <form id="form1" name="form1" method="get" action=""class="form-inline">
             <div class="form-group">
             		<p><label for="filmName">Film Name</label>: 
                    <input name="filmName" type="text" id="filmName" class="form-control">
                    <input type="submit" name="submit" class="btn btn-default">
                 	</p>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12">
					<?php 
					if($totalnoFilms == 0){
						echo "<p class=\"bg-danger\">Sorry No Results.";	
					}else{
						// connection and query logic
						if(isset($_GET['filmName'])){
							echo "<p class=\"bg-success\">We found $totalnoFilms film(s).";	
							while($row = $stmt->fetchObject()){
								echo "<p>{$row->filmName}</p>";	
							}
						}
					}
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