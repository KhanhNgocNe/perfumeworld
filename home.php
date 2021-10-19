<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta charset = " utf - 8 ">
    <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <?php
  session_start();
include_once("connection.php");
?>
  <body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="image/lebabo.discover.jpg" alt="Image">
          <div class="carousel-caption">
          </div>      
        </div>
  
        <div class="item">
          <img src="image/mcm.gif" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>

        <div class="item">
          <img src="image/louisvuitton.png" alt="Image">
          <div class="carousel-caption">
          </div>      
        </div>

        <div class="item">
          <img src="image/lv.gif" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div> 
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>

<div class="container-fluid bg-3 text-center">
  <div class="col-md-12">
    <div class="row">
    <div class="col-sm-3">
        <div class="product">
            <p>All Product</p>
            <img src="image/allproduct.jpg" class="image" style="width:100%" alt="Image">
            <div class="middle">
            <a href="?page=allproduct"><button class="btn">Shop Now</button></a>
            </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="product">
            <p>MCM</p>
            <img src="image/mcm.perfume.jpg" class="image" style="width:100%" alt="Image">
            <div class="middle">
            <a href="?page=mcm"><button class="btn">Shop Now</button></a>
            </div>
        </div>
      </div>
          <div class="col-sm-3">
            <div class="product">
            <p>Dior</p>
            <img src="image/dior.perfume.png" class="image" style="width:100%" alt="Image">
            <div class="middle">
            <a href="?page=dior"><button class="btn">Shop Now</button></a>
          </div>
          </div>
        </div>
          <div class="col-sm-3">
            <div class="product">
            <p>Gucci</p>
            <img src="image/gucci.perfume.jpg" class="image" style="width:100%" alt="Image">
            <div class="middle">
            <a href="?page=gucci"><button class="btn">Shop Now</button></a>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="product">
            <p>Louis Vuitton</p>
              <img src="image/lv.perfume.jpg"class="image" style="width:100%" alt="Image">
              <div class="middle">
              <a href="?page=lv"><button class="btn">Shop Now</button></a>
          </div>
        </div>
      </div>
          <div class="col-sm-3"> 
            <div class="product">
            <p>LeLaBo</p>
            <img src="image/lelabo.perfume.jpg" class="image" style="width:100%" alt="Image">
            <div class="middle">
            <a href="?page=lelabo"><button class="btn">Shop Now</button></a>
            </div>  
          </div>
        </div>
          <div class="col-sm-3">
            <div class="product">
            <p>Chanel</p>
            <img src="image/chanel.perfume.jpg" class="image" style="width:100%" alt="Image">
            <div class="middle">
            <a href="?page=chanel" ><button class="btn">Shop Now</button></a>
          </div>
        </div>
      </div>
        <div class="col-sm-3">
            <div class="product">
            <p>Orther Product</p>
            <img src="image/ortherproduct.jpg" class="image" style="width:100%" alt="Image">
            <div class="middle">
            <a href="?page=ortherproduct"><button class="btn">Shop Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
        <p class="brand">Shop by brand</p>
          <div class="row">
            <div class="col-sm-12">
              <div class="well well-sm" style="background: white;">
                <img src="image/lv.png"  style="width:5%" alt="Image">
                <img src="image/gucci.jpg"  style="width:5%" alt="Image"> 
                <img src="image/chanel.jpg"  style="width:5%" alt="Image">
                <img src="image/lebabo.jpg"  style="width:5%" alt="Image">
                <img src="image/mcm.jpg" style="width:3%" alt="Image">
              </div>
            </div>
          </div>
        </div>
</div>
</div>
<div class="bg-1">
    <div class="container">
      <div class="row text-center">
      <?php
                // 	include_once("database.php");
        $result = pg_query($conn, "SELECT * FROM product");
        
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
            <a href="?page=cart"><button class="btn">Buy Now</button></a>
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