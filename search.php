<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercise 1 </title>
    <meta charset = " utf - 8 ">
    <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
    <h1><u>All Product</u></h1>
</div>
<div class="container">
    <?php
    include_once("connection.php");
    if (isset($_POST["txtSearch"])) {
        $data = $_POST['txtSearch'];
          if($data=="")
          {
            echo "<script>alert('Please Enter Data!')</script>";
            echo '<meta http-equiv="refresh" content="0;URL=index.php">';
          }
         else {
      $result = pg_query($conn, "SELECT * FROM product where product_id like '%".$data."%' or product_name like '%".$data."%'");
if(pg_num_rows($result)==0)
{
echo  "<script>alert('No find data. Please Enter Again!')</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
else {
if (!$result) { //add this check.
die('Invalid query: ' . mysqli_error($conn));
}
else {
while($row = pg_fetch_array($result, Null, PGSQL_ASSOC)){
?>
    <!--Display product-->
    <div class="col-sm-3">
          <div class="thumbnail" style="background: #F2F2F2;">
          <img src="product-imgs/<?php echo $row['pro_image']?>" alt="product" width="400" height="300">
            <p><strong><?php echo  $row['product_name']?></strong></p>
            <p>$<?php echo  $row['price']?></p>
            <a href="?page=cart"><button class="btn">Buy Now</button><a href="?page=cart">
          </div>
        </div>
    <?php
				}
      }
    }
  }
}
?>
</div>
</body>
</html>