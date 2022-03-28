<?php
$conn = mysqli_connect('localhost','root','','ecommerce') or die(mysqli_error($conn));
session_start();
  if (isset($_GET['show'])){
    $id = $_GET['show'];
    $g = $conn->query("SELECT * FROM produit WHERE idProduit = $id") or die(mysqli_error($conn));
    $row = $g->fetch_array();
    $libelle = $row['libelle'];
    $prix = $row['prix'];
    $description = $row['description'];
    $image = $row['image'];

  }
$stmt = $conn->prepare("select * FROM produit WHERE idProduit IN (1,2,3,4) ");
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <li class="d-inline ">Login</li>
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
                                    <i class="fa-solid fa-lock"></i>
                                    <div class="banner-btn9-one">
                                      <a href="sin-up.html"><span></span> SIGN IN</a>
                                    </div>
                                    <div class="banner-btn8-one">
                                      <a href="sin-up.html"><span></span> SIGN UP</a>
                                    </div>
                                  </div>
                                  
                                </div>
                            <i class="fa-solid fa-bars"></i>
                          </div>
                    </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="border1"></div>
                    <div class="navbar-nav border-bottom">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    <a class="nav-link" href="#">PAGES</a>
                    <a class="nav-link" href="#">CATEGORIES</a>
                    <a class="nav-link" href="#">BLOG</a>
                    <a class="nav-link" href="#">SHOP</a>
                    <a class="nav-link" href="#">ELEMENTS</a>
                    </div>
                </div>
                </div>
            </nav>
           
            <!-- one-product -->

             <div class="one-product-html">
                 <!-- img-product -->
                <div class="one-product1">
                    <img src="img/<?php echo $image ?>.png" alt="">
                </div>
                <!-- fin -->
                <!-- information-product -->
                <div class="one-product2">
                    <div class="one-product2-info">
                        <!-- title -->
                        <div class="one-product2">
                            <h6><?php echo $libelle ?></h6>
                        </div>
                        <!-- starts -->
                        <div class="start">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <!-- prix -->
                        <div class="prix">
                            <del><?php echo $prix+200 ?>.MAD</del><span><?php echo $prix ?>.MAD</span>
                        </div>
                        <!-- desc -->
                        <div class="desc">
                            <p><?php echo $description?></p>
                            <p>Reduce Costs With Factory Direct Sourcing. Low MOQ, OEM/ODM Available. </p>
                        </div>
                        <!-- flex-btn -->
                        <div class="flex-btn">
                            <div class="banner-btn-one">
                                <a href="#"><span></span> ADD TO CART</a>
                            </div>
                            <div class="banner-btn-icon">
                                <a href="#"><span></span> <i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                        <!-- fin flex-btn -->
                        <!-- category -->
                            <div class="category">
                                <p><span>SKU : </span>111763</p>
                                <p><span>Category : </span>Accessories</p>
                                <p><span>Tags : </span> Elegant, Bag</p>
                                <p></p>
                            </div>
                        <!-- fin-category -->
                    </div>
                    
                </div>
            </div> 
            <div class="new-arrivals">
                <h2 class="shadow-lg p-3 mb-5 bg-body rounded">NEW  ARRIVALS</h2>  
            </div>
            <!--*********card********-->
            <div class="container">
                  <div class="row row-cols-1 row-cols-md-2 row-cols-xs-2 row-cols-sm-2 row-cols-sm-2 row-cols-lg-4 g-4 mt-5 border-none width1 ">
                  <?php 
                    while($row = $result->fetch_assoc()):?>
                    <div class="col">
                      <div class=" h-100 ">
                          <div class="inner">
                          <a href="one-product.php?show=<?php echo $row['idProduit'];?>"><img src="IMG\<?php echo $row['image'] ?>.png" class="card-img-top" alt="..."style="width:280px;height:300px;"></a>
                         </div>  
                        <div class="card-body">
                          <p class="card-title"><?php echo $row['description'] ?></p>
                          <h5 class="card-text text-center">Prix : <?php echo $row['prix']?>.MAD</h5>
                          <div class="banner-btn">
                            <a href="#"><span></span>ADD TO CART</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endwhile; ?>
                  </div>
                </div>
            <!-- <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xs-2 row-cols-sm-2 row-cols-sm-2 row-cols-lg-4 g-4 mt-5 border-none width1 ">
                <div class="col ">
                  <div class="h-100 karim">
                      <div class="inner">
                    <a href="one-product.html"><img src="IMG\product1.png" class="card-img-top  " alt="..."></a>
                </div>
                    <div class="card-body text">
                      <p class="card-text">2021 USB Electric Hair Clippers Re.....</p>
                      <h5 class="card-title text-center">Prix : 114.MAD</h5>
                      <div class="banner-btn">
                        <a href="#"><span></span> ADD TO CART</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class=" h-100">
                      <div class="inner">
                    <img src="IMG\product2.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                      <p class="card-title">2021 USB Electric Hair Clippers Re.....</p>
                      <h5 class="card-text text-center mt-3">Prix : 150.MAD</h5>
                      <div class="banner-btn">
                        <a href="#"><span></span> ADD TO CART</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class=" bg-image hover-zoom h-100 ">
                      <div class="inner">
                    <img src="IMG\product3.png" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                      <p class="card-title">2021 USB Electric Hair Clippers Re.....</p>
                      <h5 class="card-text text-center">Prix : 159.MAD</h5>
                      <div class="banner-btn">
                        <a href="#"><span></span> ADD TO CART</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class=" h-100 ">
                      <div class="inner">
                    <img src="IMG\product4.png" class="card-img-top" alt="...">
                     </div>  
                    <div class="card-body">
                      <p class="card-title">2021 USB Electric Hair Clippers Re.....</p>
                      <h5 class="card-text text-center">Prix : 189.MAD</h5>
                      <div class="banner-btn">
                        <a href="#"><span></span> ADD TO CART</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- copie right -->
            <div class="copie-rieght right-one">
                <p>©2022 Aha Shop | Made by DeoThemes</p>
              </div>
 <script src="main.js"></script>
</body>
</html>