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

    <div class="bg-1">
    <div class="container">
      <div class="row text-center">
      <?php
      $servername='localhost';
      $username='root'; // User mặc định là root
      $password='';
      $dbname = "data"; // Cơ sở dữ liệu
      $conn=pg_connect($servername,$username,$password,$dbname);
      if(!$conn){
      die('Không thể kết nối Database:' .mysql_error());
      }
          if(ISSET($_POST['submit'])){
              $keyword = $_POST['search'];
      ?>
      <div>
          <h2>Kết quả</h2>
          <?php
      
                // 	include_once("database.php");
        $result = pg_query($conn, "SELECT * FROM product where title LIKE %$keyword%  ORDER BY title")or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
            ?>
        <?php echo $fetch['title']?>
        <p><?php echo substr($fetch['content'], 0, 100)?>...</p>
    <?php
        }
        
          if (!$result) { //add this check.
            die('Invalid query: ' . pg_error($conn));
                        }
          while($row = pg_fetch_array($result,Null, PGSQL_ASSOC)){
        ?>
        <div class="col-sm-3">
          <div class="thumbnail" style="background: #F2F2F2;">
          <img src="product-imgs/<?php echo $row['pro_image']?>" alt="Product" width="400" height="300">
            <p><strong><?php echo  $row['product_name']?></strong></p>
            <p>$<?php echo  $row['price']?></p>
            <button class="btn">Buy Now</button>
          </div>
        </div>
        <?php
				}
				?>
        </div>
    </div>
</div>

</body>
</html>