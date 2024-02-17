
<?php
session_start();
?>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> grocery-paybill-form  </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="payment.css">

</head>
<!-- header section starts  -->
<body>
<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>grocery</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
   </div>

        <div class="header-2">

            <div id="menu-bar" class="fas fa-bars"></div>
    
            <nav class="navbar">
               <a href="index.php" target="_blank">Home</a>
                <a href="index.php" target="_blank">category</a>
                <a href="index.php" target="_blank">product</a>
                <a href="index.php" target="_blank">contact</a>
                <a href="Aboutus.html" target="_blank">About us</a>
                
            </nav>

           
        </div>

</header> 
 
    <h2 class="H2">Responsive Checkout Form</h2>
    <div class="row">
      <div class="col-75">
        <div class="container">
          <form action="payment.php" method="POST">
          
            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i></i> Full Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Frist Name" required>
                <label for="email"><i></i> Email</label>
                <input type="text" id="email" name="email" placeholder="example@mail.com" required>
                <label for="adr"><i class=""></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="Address" required>
                <label for="city"><i class=""></i> City</label>
                <input type="text" id="city" name="city" placeholder="City" required>
    
                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" placeholder="NY" required>
                  </div>
                  <div class="col-50">
                    <label for="zip">Zip</label>
                    <input type="text" id="zip" name="zip" placeholder="PostCode" required>
                  </div>
                </div>
              </div>
    
              <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fab fa-cc-visa"style="color:navy;" ></i>
                  <i class="fab fa-cc-amex"style="color:blue;"></i>
                  <i class="fab fa-cc-mastercard"style="color:red;"></i>
                  <i class="fab fa-cc-discover"style="color:orange;"></i>
                </div>
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname" placeholder="Card Name " required>
                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                <label for="expmonth">Exp Month</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="Card Expire Date" required>
                <div class="row">
                  <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" placeholder="Card Expire Year" required>
                  </div>
                  <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352" required>
                  </div>
                </div>
              </div>
              
            </div>

            <p style="font-size: 30px"> Total = $<?php
              
                  if (isset($_SESSION['cart2'])) {
                    $total=0;
                    foreach ($_SESSION['cart2'] as $key => $value) {
                      $total=$total+$value['item_id']*$value['itm_qty'];
                      
                    }}
                   if(isset($total)){
                    echo $total;
                 }else{
                 echo "0";
               }
                      ?></p>
                   

             <!-- <input type="text" id="totam" name="totam" required>  -->
             <button type="submit" class="btn"formaction="index.php" onclick="checkValidation()">Continue to checkout</button>

            
          </form>
        </div>
      </div>
     
    </div>
    
    <script lang="Javascript">
      function checkValidation()
      {            var quantity= document.getElementById("quantity").value;
                   var tot=10.50 * quantity ;
                   document.write("totam").value =tot; 

                  var fname = document.getElementById("fname").value;
                  var email = document.getElementById("email").value;
                  var address = document.getElementById("adr").value;
                  var city = document.getElementById("city").value;
                  var state= document.getElementById("state").value;
                  var zip = document.getElementById("zip").value;
                  var cardname = document.getElementById("cname").value;
                  var cardnumber= document.getElementById("ccnum").value;
                  var expmonth= document.getElementById("expmonth").value;
                  var expyear= document.getElementById("expyear").value;
                  var cvv= document.getElementById("cvv").value;


                  if (fname.lenght == null || fname.lenght == "") {
                      alert("Please enter the Name.");
                      return false;
                  }
                  
                  if (mail.lenght== null ||mail.lenght== "") {
                      alert("Please enter the email.");
                      return false;
                  }
                 
                   if (address.lenght== null ||address.lenght== "") {
                      alert("Please enter the address .");
                      return false;
                  }
                 
                    if (city.lenght== null || city.lengh== "") {
                      alert("Please enter the city.");
                      return false;
                  }
                 
                  if (state.lenght== null || state.lengh== "") {
                      alert("Please enter the state.");
                      return false;
                  }
                  
      
                  if (!isNaN(zip)) {
                      alert("Please enter the zip.");
                      return false;
                  }
                 
                  if (cardname.lenght== null || cardname.lengh== "") {
                      alert("Please enter the cardname.");
                      return false;
                  }
                  if (!isNaN(cardnumber)) {
                      alert("Please enter the cardnumber.");
                      return false;
                  }
                
                  if (expmonth.lenght== null || expmonth.lengh== "") {
                      alert("Please enter the expmonth.");
                      return false;
                  }
              
                 if (expyear.lenght== null || expyear.lengh== "") {
                      alert("Please enter the expyear.");
                      return false;
                  }
              
                 if (cvv.lenght== null || cvv.lengh== "") {
                      alert("Please enter the cvv.");
                      return false;
                  }
                 
                  alert(' payment successful');
                  
             
      }
      
      </script>

     
    </body>
    </html>