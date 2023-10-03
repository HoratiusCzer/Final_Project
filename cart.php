
<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     
     <link rel="stylesheet" href="style.css">

</head>

<body>
     
      <section id="header">
         <a href="index.html"><img src="img/header/logo-removebg-preview.png" class="logo" alt="kombucha"  width="100" height="110"></a>
         
          <div>
               <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <?php 
                       if(isset($_SESSION['cart']))
                       {
                        $count=count($_SESSION['cart']);
                       }
                     ?>
                    <li><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>(<?php echo $count; ?>)</a></li> 
               </ul>
          </div>
      </section>

         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h1>MY CART</h1>
                     
                 </div>

                 <div class="col-lg-9">

                    <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">Serial No.</th>
                          <th scope="col">Item Name</th>
                          <th scope="col">price($)</th>
                          <th scope="col">Quantity</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart']))
                            {
                              foreach($_SESSION['cart'] as $key => $value) 
                              {
                                  $sr=$key+1;
                                  $total = $total + intval($value['Price']);
                                  echo"
                                     <tr>
                                          <td>$sr</td>   
                                          <td>$value[Item_Name]</td>
                                          <td>$value[Price]</td>
                                          <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                          <td>
                                              <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                              </form>
                                          </td>
                                     </tr>
                                 ";
                              }
                          }
 

                         ?>
                      </tbody>
                     </table>
                 </div> 
                   
                    <div class="col-lg-3">
                        <div class="border bg-light rounded p-4">
                            <h4>Total($):</h4>
                            <h3 class="text-center"><b><?php echo $total ?></b></h3>
                            <br>
                            <form>
                                 <div class="form-check">
                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                 <label class="form-check-label" for="flexRadioDefault2">Cash On Delivery</label>
                                </div>
                                <br>
                                <button class="btn btn-primary btn-block">Make Purchase</button>
                            </form>
                        </div>
                      
                    </div>         
               </div>

       </div>
</body>      

</html>  