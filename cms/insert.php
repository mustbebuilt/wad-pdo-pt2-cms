<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Insert Film</title>
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
        <h1>Insert Film</h1>
      </div>
    
    <div class="row">
            
            <form name="form1" method="post" action="process/insertRecord.php">
            <div class="form-group col-md-4">

                  	<label for="filmName">Film Title</label>
                    <input type="text" name="filmName" id="filmName"  class="form-control">
                  
           </div> 
           <div class="form-group col-md-4">      
                  
                    <label for="filmImage">Film Image</label>
                    <input type="text" name="filmImage" id="filmImage"  class="form-control">
                  
          </div> 
          <div class="form-group col-md-4">          
                 
                    <label for="filmPrice">Film Price</label>
                    <input type="text" name="filmPrice" id="filmPrice" class="form-control">
                  
           </div>
          <div class="form-group col-md-6">  
                  
                    <label for="filmDescription">Film Description</label>
                    <textarea name="filmDescription" id="filmDescription" class="form-control"  rows="5"></textarea>
                  
          </div> 
           
           <div class="form-group col-md-6">           
                  
                  <p class="myLabel">Star Rating</p>
                  <?php
				  // loop 5 star checkboxes
				  ?>  
                    
         	</div> 
           <div class="form-group col-md-12">             
                  <p>
                    <input type="submit" name="button" id="button" value="Add Film" class="btn btn-default">
                  </p>
         </div>
</form>
            
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2016 mustbebuilt.co.uk</p>
      </div>
</footer>
</body>
</html>