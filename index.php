<?php
$conn = mysqli_connect('localhost','root','','ecommerce') or die(mysqli_error($conn));
session_start();

if(empty($_SESSION['button'])){
  $_SESSION['button'] = false;
  $button = $_SESSION['button'];
}
else{
  $_SESSION['button'] = true;
  $button = $_SESSION['button'];
  $user = $_SESSION['user'];
}

$stmt = $conn->prepare("select * FROM produit where idProduit = 1");
$stmt->execute();
$result = $stmt->get_result();
$row    = $result->fetch_assoc();
// product-2 
$stmt = $conn->prepare("select * FROM produit where idProduit = 2");
$stmt->execute();
$result = $stmt->get_result();
$row2    = $result->fetch_assoc();
// product-3
$stmt = $conn->prepare("select * FROM produit where idProduit = 3");
$stmt->execute();
$result = $stmt->get_result();
$row3    = $result->fetch_assoc();
// product-4
$stmt = $conn->prepare("select * FROM produit where idProduit = 4");
$stmt->execute();
$result = $stmt->get_result();
$row4    = $result->fetch_assoc();
// product-5
$stmt = $conn->prepare("select * FROM produit where idProduit = 5");
$stmt->execute();
$result = $stmt->get_result();
$row5    = $result->fetch_assoc();
// product-6
$stmt = $conn->prepare("select * FROM produit where idProduit = 6");
$stmt->execute();
$result = $stmt->get_result();
$row6    = $result->fetch_assoc();
// product-7
$stmt = $conn->prepare("select * FROM produit where idProduit = 7");
$stmt->execute();
$result = $stmt->get_result();
$row7    = $result->fetch_assoc();

$_SESSION['validate'] = false;
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div id="sideNav">
                <nav> 
                    <ul>
                        <div class="j">
                            <li class="h"><a href="form.php">Home</a></li>
                        </div>
                        <div class="j">
                            <li class="h"><a href="all.php">See All</a></li>
                        </div>
                        <div class="j">
                            <li class="h"><a href="index3.html">Activites</a></li>
                        </div>
                        <div class="j">
                            <li class="h"><a href="#">teachers</a></li>
                        </div>
                        <div class="j">
                            <li class="h"><a href="#contact">Contact</a></li>
                        </div>
        
                    </ul>
                </nav>
            </div>
            <div id="manuBtn">
                <img src="IMG/menu.png" id="menu">
            </div>
            <!--********************-->
                <div class="ul-1-2 ">
                    <ul class="ul1">
                        <li class="d-inline ">My Account</li>
                        <li class="d-inline ">My Wishlist</li>
                        <li class="d-inline ">Newsletter</li>
                        <li class="d-inline "><a href="logout.php" style="text-decoration:none;color:black;">Login</a> </li>
                        <li class="d-inline ">Contact</li>
                    </ul>
            
                    <ul class="ul2">
                        <li class="d-inline">Currency : <span class="deferent">USD</span>  <i class="fa-solid fa-angle-down"></i> </li>
                        <li class="d-inline">Language : <span class="deferent">ENG</span>  <i class="fa-solid fa-angle-down"></i></li>
                        <li class="d-inline"><i class="fa-brands fa-twitter font"></i></li>
                        <li class="d-inline"><i class="fa-brands fa-instagram font "></i></li>
                        <li class="d-inline"><i class="fa-brands fa-facebook-f font "></i></li>
                        <li class="d-inline"><i class="fa-brands fa-linkedin-in font "></i></li>
                    </ul>
                </div>
                <!--navbar bootstrap -->
                
                <nav class="navbar navbar-expand-md navbar-light bg fixed">
                    <div class="container-fluid">
                    <input type="searsh"class="serash" placeholder="Searsh"><i class="fa-solid fa-magnifying-glass "></i>
                    <h1>H - AIR SHOP</h1>
                        <div class="stor">
                            
                              
                              
                                  <a href="card.php"><i class="fa-solid fa-store"></i></a>
                                  
                                  <div class="popup" onclick="myFunction()">
                                    <div class="popuptext" id="myPopup">
                                      <div class="x-popup">
                                      <i class="fa-solid fa-x"></i>
                                      </div>
                                      <div class="lock-popup">
                                      <?php
                                          if ($_SESSION['button'] == true) :
                                          ?>
                                            <i style="color:green; margin-top:-30px"> <?php echo $user ?></i>
                                          <?php else : ?>
                                            <i class="fa-solid fa-lock"></i>
                                      <?php endif; ?>
                                      <?php
                                          if ($_SESSION['button'] == false) :
                                          ?>
                                            <div class="banner-btn8">
                                          <a href="sgin-in.php"><span></span> SIGN IN</a>
                                        </div>
                                        <div class="banner-btn9">
                                          <a href="sin-up.php"><span></span> SIGN UP</a>
                                        </div>
                                          <?php else : ?>
                                            <div class="banner-btn9">
                                          <a href="logout.php" style="margin-top:55px;"><span></span> LOG OUT</a>
                                        </div>
                                      <?php endif; ?>
                                        
                                        
                                          </div>
                                      
                                    </div>
                                <i class="fa-solid fa-bars"></i>
                              </div>
                        </div>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="border1"></div>
                        <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        <a class="nav-link" href="#">PAGES</a>
                        <a class="nav-link" href="#">CATEGORIES</a>
                        <a class="nav-link" href="#">BLOG</a>
                        <a class="nav-link" href="product.php">SHOP</a>
                        <a class="nav-link" href="#">ELEMENTS</a>
                        </div>
                
                    </div>
                    </div>
                </nav>
                <header class="container">
                    <img name="slide" />
                    <div class="title">
                        <h2>Collection 2017</h2>
                        <p>The best haircut with the best hair trimmer</p>
                    </div>
                    <div class="banner-btn1 header-shop">
                        <a href="#"><span></span> SHOP NOW</a>
                      </div>
                    
                </header>
                <div class="new-arrivals">
                    <h2 class="shadow-lg p-3 mb-5 bg-body rounded">NEW  ARRIVALS</h2>  
                </div>
                <!--*********card********-->
                <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xs-2 row-cols-sm-2 row-cols-sm-2 row-cols-lg-4 g-4 mt-5 border-none width1 ">
                    <div class="col ">
                      <div class="h-100 karim">
                          <div class="inner">
                        <a href="one-product.php?show=<?php echo $row['idProduit'];?>"><img src="IMG\<?php echo $row['image'] ?>.png" class="card-img-top  " alt="..."></a>
                    </div>
                        <div class="card-body text">
                          <p class="card-text"><?php echo $row['description'] ?></p>
                          <h5 class="card-title text-center">Prix : <?php echo $row['prix']?>.MAD</h5>
                          <div class="banner-btn">
                          <a href="card.php?add=<?php echo $row['idProduit'];?>"><span></span> ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class=" h-100">
                          <div class="inner">
                          <a href="one-product.php?show=<?php echo $row2['idProduit'];?>"><img src="IMG\<?php echo $row2['image'] ?>.png" class="card-img-top" alt="..."></a>
                    </div>
                        <div class="card-body">
                          <p class="card-title"><?php echo $row2['description'] ?></p>
                          <h5 class="card-text text-center mt-3">Prix : <?php echo $row2['prix']?>.MAD</h5>
                          <div class="banner-btn">
                          <a href="card.php?add=<?php echo $row2['idProduit'];?>"><span></span> ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class=" bg-image hover-zoom h-100 ">
                          <div class="inner">
                          <a href="one-product.php?show=<?php echo $row3['idProduit'];?>"><img src="IMG\<?php echo $row3['image'] ?>.png" class="card-img-top" alt="..."></a>
                    </div>
                        <div class="card-body">
                          <p class="card-title"><?php echo $row3['description'] ?></p>
                          <h5 class="card-text text-center">Prix : <?php echo $row3['prix']?>.MAD</h5>
                          <div class="banner-btn">
                            <a href="#"><span></span> ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class=" h-100 ">
                          <div class="inner">
                          <a href="one-product.php?show=<?php echo $row4['idProduit'];?>"><img src="IMG\<?php echo $row4['image'] ?>.png" class="card-img-top" alt="..."></a>
                         </div>  
                        <div class="card-body">
                          <p class="card-title"><?php echo $row4['description'] ?></p>
                          <h5 class="card-text text-center">Prix : <?php echo $row4['prix']?>.MAD</h5>
                          <div class="banner-btn">
                            <a href="#"><span></span>ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                

                  <!--************product5***********-->
                  <div class="container border-top mt-5  mb-5 ">
                    <div class="row row-cols-1 row-cols-md-2  bg-dark  fh ">
                      <div class="col text-light  col1">
                        <div class="inner">
                        <img src="IMG\<?php echo $row5['image'] ?>.png" alt="">
                      </div>
                      </div>
                      <div class="col text-light col2">
                        <p>All from 20% off Limited Time Offers</p> 
                        <div class="banner-btn5">
                          <a href="#"><span></span> ADD TO CART</a>
                        </div> 
                      </div>
                    </div>
                   <!--************product5***********-->
                   <div class="container  mb-5  ">
                    <div class="row row-cols-1 row-cols-md-2  bg-dark  fh  ">
                      <div class="col text-light  col2">
                        <p>All from 20% off Limited Time Offers</p> 
                        <div class="banner-btn5">
                          <a href="#"><span></span> ADD TO CART</a>
                        </div> 
                      </div>
                      <div class="col text-light col3">
                        <div class="inner">
                        <img src="IMG\<?php echo $row6['image'] ?>.png" alt="">
                      </div>
                      </div>
                    </div>
                    <!--************product5***********-->
                    <div class="container  ">
                      <div class="row row-cols-1 row-cols-md-2  bg-dark  fh ">
                        <div class="col text-light  col1">
                          <div class="inner">
                          <img src="IMG\<?php echo $row7['image'] ?>.png" alt="">
                        </div>
                        </div>
                        <div class="col text-light col2">
                          <p>All from 20% off Limited Time Offers</p> 
                          <div class="banner-btn5">
                            <a href="#"><span></span> ADD TO CART</a>
                          </div> 
                        </div>
                      </div>
                    </div>
                      <!--suscribe-->
                      <div class="container boredr-all">
                        <div class="row row-cols-1 row-cols-md-2">
                          <div class="col suscribe-searsh-2">
                            <p>SUBSCRIBE TO RECEIVE OUR UPDATES</p>
                          </div>
                          <div class="col suscribe-searsh">
                            <input type="searsh"class="d-inline">
                            <input type="button" value="SUBSCRIBE">
                          </div>
                        </div>
                      </div>    


                      <div class="new-arrivals">
                        <h3 class="shadow-lg p-3 mb-5 bg-body rounded">BEST SALES</h3>  
                    </div>
                    <!--*********card********-->
                    <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xs-2 row-cols-sm-2 row-cols-sm-2 row-cols-lg-4 g-4 mt-5 border-none width1 ">
                    <div class="col ">
                      <div class="h-100 karim">
                          <div class="inner">
                        <a href="one-product.php?show=<?php echo $row['idProduit'];?>"><img src="IMG\<?php echo $row['image'] ?>.png" class="card-img-top  " alt="..."></a>
                    </div>
                        <div class="card-body text">
                          <p class="card-text"><?php echo $row['description'] ?></p>
                          <h5 class="card-title text-center">Prix : <?php echo $row['prix']?>.MAD</h5>
                          <div class="banner-btn">
                            <a href="#"><span></span> ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class=" h-100">
                          <div class="inner">
                          <a href="one-product.php?show=<?php echo $row2['idProduit'];?>"><img src="IMG\<?php echo $row2['image'] ?>.png" class="card-img-top" alt="..."></a>
                    </div>
                        <div class="card-body">
                          <p class="card-title"><?php echo $row2['description'] ?></p>
                          <h5 class="card-text text-center mt-3">Prix : <?php echo $row2['prix']?>.MAD</h5>
                          <div class="banner-btn">
                            <a href="#"><span></span> ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class=" bg-image hover-zoom h-100 ">
                          <div class="inner">
                          <a href="one-product.php?show=<?php echo $row3['idProduit'];?>"><img src="IMG\<?php echo $row3['image'] ?>.png" class="card-img-top" alt="..."></a>
                    </div>
                        <div class="card-body">
                          <p class="card-title"><?php echo $row3['description'] ?></p>
                          <h5 class="card-text text-center">Prix : <?php echo $row3['prix']?>.MAD</h5>
                          <div class="banner-btn">
                            <a href="#"><span></span> ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class=" h-100 ">
                          <div class="inner">
                          <a href="one-product.php?show=<?php echo $row4['idProduit'];?>"><img src="IMG\<?php echo $row4['image'] ?>.png" class="card-img-top" alt="..."></a>
                         </div>  
                        <div class="card-body">
                          <p class="card-title"><?php echo $row4['description'] ?></p>
                          <h5 class="card-text text-center">Prix : <?php echo $row4['prix']?>.MAD</h5>
                          <div class="banner-btn">
                            <a href="#"><span></span>ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    <!-- footer -->
                    <footer>
                      <div class="footer">
                          <img src="img/footer.png"alt="">
                      </div>
                      <div class="footer">
                          <img src="img/footer-2.png" alt="">
                      </div>
                      <div class="footer">
                        <img src="img/footer-3.png" alt="">
                      </div>
                      <div class="footer">
                        <img src="img/footer-4.png" alt="">
                      </div>
                    </footer>
                    <!-- last footer -->
                    <div class="last-footer"> 
                      <div class="footer-colom1">
                        <ul class=" list-unstyled">
                          <li class="font">INFORMATION</li>
                          <li class="">Our stores</li>
                          <li class="">About us</li>
                          <li class="">Business with us</li>
                          <li class="">Delivery information</li>
                          <li class="">Terms & Conditions</li>
                        </ul>
                      </div>
                      <div class="footer-colom1">
                        <ul class=" list-unstyled">
                          <li class="font">INFORMATION</li>
                          <li class="">Our stores</li>
                          <li class="">About us</li>
                          <li class="">Business with us</li>
                          <li class="">Delivery information</li>
                          <li class="">Terms & Conditions</li>
                        </ul>
                      </div>
                      <div class="footer-colom1">
                        <ul class=" list-unstyled">
                          <li class="font">INFORMATION</li>
                          <li class="">Our stores</li>
                          <li class="">About us</li>
                          <li class="">Business with us</li>
                          <li class="">Delivery information</li>
                          <li class="">Terms & Conditions</li>
                        </ul>
                      </div>
                      <div class="footer-colom1">
                        <ul class=" list-unstyled">
                          <li class="font">INFORMATION</li>
                          <li class="">Our stores</li>
                          <li class="">About us</li>
                          <li class="">Business with us</li>
                          <li class="">Delivery information</li>
                          <li class="">Terms & Conditions</li>
                        </ul>
                      </div>
                      <div class="footer-colom1">
                        <ul class=" list-unstyled">
                          <li class="font">INFORMATION</li>
                          <li class="">Our stores</li>
                          <li class="">About us</li>
                          <li class="">Business with us</li>
                          <li class="">Delivery information</li>
                          <li class="">Terms & Conditions</li>
                        </ul>
                      </div>
                    </div>
                    <!-- copie right -->
                    <div class="copie-rieght">
                      <p>©2022 Aha Shop | Made by DeoThemes</p>
                    </div>
            <script src="main.js"></script>  
            
    </body>
    </html>
    