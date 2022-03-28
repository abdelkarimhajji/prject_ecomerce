<?php

$conn = mysqli_connect('localhost','root','','ecommerce') or die(mysqli_error($conn));
session_start();
if (isset($_GET['add'])){

    $id = $_GET['add'];
    $g = $conn->query("SELECT * FROM produit WHERE idProduit = $id") or die(mysqli_error($conn));
    $row = $g->fetch_array();
    // $libelle = $row['libelle'];
    // $prix = $row['prix'];
    // $description = $row['description'];
    // $image = $row['image'];
    if (isset($_GET['add'])&& !isset($_SESSION['card'])){
      $_SESSION['card'][]=$id;
      header("location: index.php");
      
    }
    if (isset($_GET['add'])&& isset($_SESSION['card'])){
      if(in_array($id,$_SESSION['card'])){
        header("location: index.php");
        
      }
      // else if(count($_SESSION['card'])==0){
      //   $_SESSION['card'][] = $id;    
      // }
      else{
        $_SESSION['card'][] = $id; 
        header("location: index.php");
      
      }
    }
      
    }
    if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      // unset($id);
      // $_SESSION['card']
      unset($_SESSION['card'][array_search($id , $_SESSION['card'])]);
  }   

  
  // echo "<pre>";

  // print_r($_SESSION['card']);

  // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style5.css"> 
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
                        
                          
                            
                              <a href="card.html"><i class="fa-solid fa-store"></i></a>
                              
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
        </div>
        <div class="new-arrivals container">
            <h2 class="shadow-lg p-3 mb-5 bg-body text-center rounded">SHOPPING CART</h2>  
        </div>
        <!-- tablo -->
        <table class="table container">
            <thead>
              <tr>
                <th scope="col">PRODUCT</th>
                <th scope="col">PRICE</th>
                <th scope="col">QUANTITY</th>
                <th scope="col">TOTAL</th>
                <th scope="col">DELLETE</th>
              </tr>
            </thead>
            <tbody>
                    <?php
                    if (isset($_SESSION['card'])) :
                      $total=0;
                      foreach ($_SESSION['card'] as $key => $value) :?>
                    
                    <?php 
                      
                      $stmt = $conn->prepare("select * FROM produit WHERE idProduit = '".$value."'");
                      $stmt->execute();
                      $result = $stmt->get_result();
                      $row    = $result->fetch_assoc();
                      
                      ?>
            <tr id="input_total">
                <th scope="row"><img src="img/<?php echo $row['image'] ?>.png" alt="" srcset="" width="150"></th>
                <td class="ptt_1"><p><?php echo $row['prix']?> DH</p></td>
                <td class="ptt_2"><button class="minus-comond all" onclick="minus(this)">-</button><input type="text" value="1" class="add-text-comond all" disabled id="id"><button class="add-comond all" onclick="add(this)"onclick="add2(this)">+</button></td>
                <td class="ptt_1"><p class="total2"style="display:inline"><?php echo $row['prix']?></p><span style="font-size:20px;">DH</span></td>
                <td class="ptt_1"><a href="card.php?delete=<?php echo $row['idProduit'];?>">delete</a></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>

            </tbody>
          </table>
          <!-- fin TOtal -->
          <div class="all-total container mt-5">
            <div class="all-total-1">
                <!-- firs cart-total -->
                
                <div class="col-sm-6 w-1001 espace-1">
                    <div class="card">
                        <div class="col suscribe-searsh-33">
                            <input type="searsh"class="d-inline" placeholder="coupon code">
                            <input type="button" value="APLLY">
                        </div>
                      <div class="card-body">
                        <h5 class="card-title text-center">CALCULATE SHIPPING</h5>
                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            <select name="cars"  id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            <div class="group-input">
                                <input type="text"placeholder="State / County">
                                <input type="text" placeholder="Postcode">
                            </div>
                        <button class="btn-fin-2">Update Total</button>
                      </div>
                    </div>
                  </div>
                  <!-- fin  -->
            </div>
            <div class="all-total-2">
                <!-- firs cart-total-2 -->
                <div class="col-sm-6 w-1001 espace-2">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title text-center">CART TOTALS</h6>
                        <div class="three-div three-div-1"><span>Cart Subtotal  </span><input disabled type="text" id="t2"style="text-align:center;background-color:white;width:13%;"></div>
                        <div class="three-div-2"><span>Shipping</span><input disabled type="text"value="0"style="text-align:center;background-color:white;width:13%;"></div>
                        <div class="three-div three-div-3 "><span>Order Total</span><input id="t" type="text" style="text-align:center;background-color:white;width:13%;"></div>
                        
                        <?php
                          if ($_SESSION['button'] == true) :
                          ?>
                            <button type="submit" name="submit-work" class="btn-fin-2" >BY NOW</button>  
                          <?php else : ?>
                            <a href="sin-up.php"><button type="submit" name="submit-not"class="btn-fin-2" >not work</button></a>
                          <?php endif; ?>
                        
                        
                      </div>
                    </div>
                  </div>
                  <!-- fin -->
            </div>
          </div>
          <!-- ! -->
          <div class="copie-rieght container" style="margin-bottom:50px">
            <p>©2022 Aha Shop | Made by DeoThemes</p>
          </div>
        
          <script>
              
              
              
              
              
              
                function add(btn) {
                
                  
                  var total2 = document.getElementsByClassName("total2")
                  
                  let afficher = btn.previousSibling;
                  afficher.value = Number(afficher.value) + 1;

                  var td = btn.parentElement.parentElement;
                  var p = td.childNodes[3]
                  
                  var input_afichage = btn.parentElement.nextElementSibling.firstChild;
                  
                  var sum = parseInt(p.firstChild.innerHTML)*afficher.value;
                  input_afichage.innerHTML = sum;
                  
                  var total=0; 
                  for (let i = 0; i < total2.length; i++) {
                    var k = Number(total2[i].innerHTML);
                    total += k;
                  }
                  document.getElementById("t").value = total+".DH";
                  document.getElementById("t2").value = total+".DH";
                  
                  console.log(total);
                }
                
                
                function minus(btn) {
                  var total2 = document.getElementsByClassName("total2")

                  let afficher = btn.nextSibling;
                  if( afficher.value>1){
                  afficher.value = Number(afficher.value) - 1;
                  }
                  var td = btn.parentElement.parentElement;
                  var p = td.childNodes[3]
                  // console.log(p.firstChild.innerHTML)
                  var input_afichage = btn.parentElement.nextElementSibling.firstChild;
                  console.log(input_afichage)
                  // var input = tdd.nextElementSibling.firstChild;
                  // console.log(input)
                  var sum = parseInt(p.firstChild.innerHTML)*afficher.value;
                  input_afichage.innerHTML = sum;
                  
                  var total=0; 
                  for (let i = 0; i < total2.length; i++) {
                    var k = Number(total2[i].innerHTML);
                    total += k;
                  }
                  document.getElementById("t").value = total+".DH";
                  document.getElementById("t2").value = total+".DH";
                  
                  console.log(total);
                }
                add(btn)
          </script>
           
          <script src="main2.js"></script>
</body>
</html>