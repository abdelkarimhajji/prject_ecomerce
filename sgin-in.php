<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style.css">
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
                    
                      
                         
                          <i class="fa-solid fa-store"></i>
                          
                          <div class="popup" onclick="myFunction()">
                            <div class="popuptext" id="myPopup">
                              <div class="x-popup">
                                <i class="fa-solid fa-x"></i>
                              </div>
                              <div class="lock-popup">
                                <i class="fa-solid fa-lock"></i>
                                <div class="banner-btn8">
                                  <a href="sin-up.html"><span></span> SIGN IN</a>
                                </div>
                                <div class="banner-btn9">
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
        <!-- form -->
        <div class="new-arrivals">
          <h2 class="shadow-lg p-3 mb-5 bg-body rounded">SIGN UP</h2>  
      </div>
      <div class="img">
        <div class="form-horizontal">
            <i class="fa-solid fa-address-card add "></i>
            <p>SIGN UP</p>
            <form action="server.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                
               
                <div class="mb-3">
                    <i class="fa-solid fa-calendar-plus i date"></i>
                    <input type="email" class="col" name="email" placeholder="E-mail" value="">
                </div>
                
                <div class="mb-3 ">
                    <i class="fa-solid fa-hospital i"></i>
                    <input type="password" class="col" name="password" placeholder="Passwoerd" value="">
                </div>
                <?php
                    if (isset($_SESSION['validate_in'])) :
                    ?>
                    <span style="color:red;position:relative;top:-3px;display:block;">This email or password does not exist</span>
                    <?php else : ?>
                    <span></span>
                    <?php endif; ?>
                    
                    
                    
                    
                    <button type="submit" class="btn" name="save-in">Submit</button>
            </form>
        </div>
    </div>
    <!-- copie right -->

    <div class="copie-rieght2">
      <p>©2022 Aha Shop | Made by DeoThemes</p>
    </div>
    <script src="main.js"></script>
</body>
</html>