<?php
ini_set('display_errors', 1);
// add your include
$sql= "SELECT * FROM movies";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Content Management System</title>
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
        <h1>Content Management System</h1>
      </div>
    
    <div class="row">
            <div class="col-md-12">
            <p><a href="insert.php" class="btn btn-success">Add New Film</a></p>
              <table>
              		<thead>
                        <tr>
                            <th>Film</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>
                        </tr>
                    </thead>
					<?php 
					while($row = $stmt->fetchObject()){
						// amend with links to the relevant pages
								echo "<tr>";
								echo "<td>{$row->filmName}</td>";	
								echo "<td>Edit</td>";
								echo "<td>Delete</td>";
								echo "<td>View</td>";
								echo "</tr>";
					}
                    ?>
            </table>
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