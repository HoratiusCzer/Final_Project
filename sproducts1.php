

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kombucha Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>



    <link rel="stylesheet" href="style.css">
</head>

<body>
     
      <section id="header">
         <a href="index.html"><img src="img/header/logo-removebg-preview.png" class="logo" alt="kombucha"  width="100" height="110"></a>
         
          <div>
               <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a class="active" href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li> 
               </ul>
          </div>
      
        </section>
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="img/product/p1/4.webp" width="100%" id="MainImg" alt="">
               
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/product/p1/4.webp" width="100%" class="small-img" alt="">
                    </div>
                   
                    <div class="small-img-col">
                        <img src="img/sproduct/p1/1.webp" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="img/sproduct/p1/2.webp" width="100%" class="small-img" alt="">
                    </div>
                
                </div>
            </div>
            <div class="single-pro-details">
               <h6>Home / Element</h6>
            <form action="manage_cart.php" method="POST">  
               <h4>JASMINE HIBISCUS KOMBUCHA</h4>
                <h2>$19</h2>
                <select>
                    <option>Select Size</option>
                    <option>1 Li</option>
                    <option>2 Li</option>
                    <option>2.25 Li</option>
                </select> 
                <input type="number" value="1">
                <button type="submit" name="Add_To_Cart" class="normal">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="JASMINE HIBISCUS KOMBUCHA">
                <input type="hidden" name="Price" value="19">
            </form>
                <h4>Product Details</h4>
                <span>
                    This tasty kombucha is perfect for every occasion. 
                    Brewed with a blend of jasmine green tea and hibiscus petals, 
                    it is full of Vitamin C and antioxidants. The hibiscus compliments
                     the citrusy flavor of the jasmine with a tart floral flavor.
                  <p>Certified Organic</p>
                </span> 
            </div>
            
        </section>
        
        <section id="product1" class="section-p1">
            <h2>SYNERGY KOMBUCHA</h2>
            <p><b>Summer's Special</b></p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/product/p2/1.webp">
                    <div class="des">
                        <span>Synergy</span>
                        <h5>Mystic Mango</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
  
                        </div>
                            <h4>$22</h4>
                      </div>
                               <div class="cart">
                                  <a href="#"><i class="fa-solid fa-cart-shopping "></i></a>
                              </div>
                        
                 </div>
                        <div class="pro">
                            <img src="img/product/p2/2.webp">
                            <div class="des">
                                <span>Synergy</span>
                                <h5>Gingerberry</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
        
                                </div>
                                    <h4>$22</h4>
                            </div>
                                    <div class="cart">
                                        <a href="#"><i class="fa-solid fa-cart-shopping "></i></a>
                                    </div>
                                
                 </div>
                        <div class="pro">
                            <img src="img/product/p2/3.webp">
                            <div class="des">
                                <span>Synergy</span>
                                <h5>Lemon Berry</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
        
                                </div>
                                    <h4>$21</h4>
                            </div>
                                    <div class="cart">
                                        <a href="#"><i class="fa-solid fa-cart-shopping "></i></a>
                                    </div>
                                
                        </div>
                                <div class="pro">
                                    <img src="img/product/p2/4.webp">
                                    <div class="des">
                                        <span>Synergy</span>
                                        <h5>Sublime Lime</h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                
                                        </div>
                                            <h4>$22</h4>
                                    </div>
                                            <div class="cart">
                                                <a href="#"><i class="fa-solid fa-cart-shopping "></i></a>
                                            </div>
                                        
                                </div>
            </div>
        </section>
        <section id="newsletter" class="section-p1">
            <div class="newstext">
                <h4>Sign Up For Newsletter</h4>
                <p>Get E-mail updates about our latest products and <span>Special Offers</span></p>
             </div>

            <div class="form">
               <input type="text" placeholder="Your Email address">
               <button class="normal">Sign Up</button>
            </div> 
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/header/logo-removebg-preview.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong> Sathdobato -04 , Lalitpur-Nepal</p>
                <p><strong>Phone:</strong> +01 2222 234 / (+977) 98 4637 0063</p>
                <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>

                </div>
            </div>

             <div class="col">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>

            <div class="col install">
                    <h4>Install App</h4>
                    <p>From App Store or Google Play</p>
                    <div class="row">
                            <img src="img/footer/1.png" alt="app">
                            <img src="img/footer/2.png" alt="google">
                    </div>
                   <p>Secured Payment Gateways </p>
                   <img src="img/footer/card.png" alt="">
            </div>
             
            <div class="copyright">
                <p>© 2023, Kombucha Website - HTML CSS Ecommerce Website</p>
            </div>
        </footer>
       
        <script>
            var MainImg = document.getElementById("MainImg");
            var smallimg = document.getElementsByClassName("small-img");
  
            smallimg[0].onclick = function(){
              MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function(){
              MainImg.src = smallimg[1].src;
            }
            smallimg[2].onclick = function(){
              MainImg.src = smallimg[2].src;
            }
          
         </script>

      <script src="script.js"></script>
</body>      

</html> 