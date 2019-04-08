<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  include('header.php');
  ?>
     <div class="container-fluid" style="margin-top: 10px" >
        <div class="row">

          <div class="col-sm-3">
            
          </div>
    <form action="insert_post.php" method="Post"> 
           <div class="col-sm-6 breadcrumb">
            <input type="text" class="form-control" placeholder="Title" name="title">
            <input type="text" class="form-control"style="margin-top: 10px" placeholder="Category name" name="category">
            <h4 style="margin-top: 10px">Content :</h4>
            <textarea name="content" style="margin-top: 10px"class="form-control">
                   
            </textarea>
            <input type="text" class="form-control"style="margin-top: 10px" placeholder="Blogger Name" name="bloggername">
            
            <input type="submit" style="margin-top: 10px" class="btn btn-primary " name="submit" value="Post">

          </div>
    </form>
          <div class="col-xs-3">     
          </div>
        </div>
       
</body>
</html>