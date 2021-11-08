      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> BarBie Doll ATN </title>
          <meta charset = " utf - 8 ">
          <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
        <?php
          session_start();
          include("connection.php");
      ?>
        <body>
        
          <nav class="navbar-inverse" style="background-color: black">
              <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
                  <a class="navbar-brand" href="?page=home">BarBie Doll ATN</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <form class="navbar-form navbar-left" action="index.php?page=search" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="txtSearch">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                  </ul>
                  <div class="header">
                    <div class="nav navbar-nav navbar-right">
                      <a href="https://www.facebook.com/perfumeworld.com.vn"><img class="img" src="image/fb.jpg"></a>
                      <a href="https://instagram.com/perfume.world.vn?igshid=ms1usprmap0e"><img class="img" src="image/ig.png"></a>
                      <a href="https://bitly.com.vn/dw5xt1"><img class="img" src="image/location.jpg"></a>
                  </div>
                  </div>
                  </form>
                  <br>
                  <br>
                <ul class="nav navbar-nav navbar-left">
                  <li class="active"><a href="?page=home">Home</a></li>
                  <li ><a href="?page=aboutus">About Us</a></li>
                  <li><a href="?page=contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php
              if(isset($_SESSION['us'])&& $_SESSION['us'] !=""){
              ?>
              <li><a href="?page=update_customer"><span class="glyphicon glyphicon-user"></span> Account</a></li>
              <li><a href="?page=logout"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
              <?php
              }
              else
              {
              ?>
              <li><a href="?page=register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <?php
              }
      ?>
      <li><a href="?page=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                  
                </ul>
              </div>
            </div>
          </nav>

          <div class="btn-group"style="background: #white;" >
          <a href="?page=allproduct"><button type="btn-group" class="btn btn-defaul">All Product</button></a>
          <a href="?page=fashiondoll"><button type="btn-group" class="btn btn-defaul">Fashion Dolls</button></a>
          <a href="?page=kendoll"><button type="btn-group" class="btn btn-defaul">Ken Dolls</button></a>
          <a href="?page=sisterpet"><button type="btn-group" class="btn btn-defaul">Sister & Pet Dolls</button></a>
          <a href="?page=careerdoll"><button type="btn-group" class="btn btn-defaul">Career Dolls</button></a>
          <a href="?page=magicdoll"><button type="btn-group" class="btn btn-defaul">Magic Dolls</button></a>
          <a href="?page=clothes"><button type="btn-group" class="btn btn-defaul">Doll Clothes</button></a>
          <a href="?page=playsets"><button type="btn-group" class="btn btn-defaul">Playsets</button></a>
          <a href="?page=category_management"><button type="btn-group" class="btn btn-defaul">Management Category</button></a>
          <a href="?page=product_management"><button type="btn-group" class="btn btn-defaul">Management Product</button></a>
          <br>
        </div>
      <br>
        
        <?php
    if(isset($_GET['page']))
      {
        $page = $_GET['page'];
          if($page=="home"){
            include_once("home.php");
          }
          else if($page=="aboutus"){
            include_once("aboutus.php");
          }
          else if($page=="contact"){
            include_once("contact.php");
          }
          else if($page=="cart"){
            include_once("cart.php");
          }
          else if($page=="register"){
            include_once("register.php");
          }
          else if($page=="login"){
            include_once("LoginJS1.php");
          }
          else if($page=="logout"){
            include_once("logout.php");
          }
          else if($page=="fashiondoll"){
            include_once("FashionDoll.php");
          }
          else if($page=="kendoll"){
            include_once("KenDoll.php");
          }
          else if($page=="siterpet"){
            include_once("SisterPet.php");
          }
          else if($page=="careerdoll"){
            include_once("CareerDoll.php");
          }
          else if($page=="magicdoll"){
            include_once("MagicDoll.php");
          }
          else if($page=="clothes"){
            include_once("Clothes.php");
          }
          else if($page=="allproduct"){
            include_once("allproduct.php");
          }
          else if($page=="playsets"){
            include_once("Playsets.php");
          }
          else if($page=="category_management"){
            include_once("Category_Management.php");
          }
          else if($page=="product_management"){
            include_once("Product_Management.php");
          }
          else if($page=="add_category"){
            include_once("Add_Category.php");
          }
          else if($page=="update_category"){
            include_once("Update_Category.php");
          }
          else if($page=="add_product"){
            include_once("Add_Product.php");
          }
          else if($page=="update_product"){
            include_once("Update_Product.php");
          }
          else if($page=="update_customer"){
            include_once("Update_customer.php");
          }
          else if($page=="update_customer"){
            include_once("Update_customer.php");
          }
          else if($page=="search"){
            include_once("search.php");
          }
        }
    else{
        include("home.php");
      }
            ?>


      <footer class="section footer-classic context-dark bg-image" style="background: black;">
              <div class="container">
                <div class="row row-30">
                  <div class="col-md-4 col-xl-5">
                  <br>
                   <h1> BarBie Doll ATN </h1>
                      
                      <!-- Rights-->
                      <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h5>Contacts</h5>
                    <dl class="contact-list">
                      <dt>Address:</dt>
                      <dd>70, Le Lai, An Phu, Can Tho</dd>
                    </dl>
                    <dl class="contact-list">
                      <dt>email:</dt>
                      <dd><a href="mailto:#">atncompany@gmail.com</a></dd>
                    </dl>
                    <dl class="contact-list">
                      <dt>phones:</dt>
                      <dd><a href="tel:#">0779814377</a> <span>or</span> <a href="tel:#">https://karosearch.com</a>
                      </dd>
                    </dl>
                  </div>
                  <div class="col-md-4 col-xl-3">
                    <h5>BarBie Doll ATN</h5>
                    <ul class="nav-list">
                      <li><a href="?=aboutus">About us</a></li>
                      <li><a href="?page=allproduct">Product</a></li>
                      <li><a href="#">Contacts</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row no-gutters social-container">
                <div class="col"><a class="social-inner" href="https://www.facebook.com/perfumeworld.com.vn"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
                <div class="col"><a class="social-inner" href="https://instagram.com/perfume.world.vn?igshid=ms1usprmap0e"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
                <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
                <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
              </div>
            </footer>
      </body>
      </html>