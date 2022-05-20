
<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : $<?= $grand_total; ?></span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your phone number</span>
            <input type="text" placeholder="enter your phone number" name="phone number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on devlivery</option>
               <option value="credit cart">credit cart</option>
               <option value="paypal">paypal</option>
            </select>           
         </div>
         <div class="inputBox">
            <span>address line 1</span>
            <input type="text" placeholder="e.g. flat no." name="flat" required>
         </div>
         <div class="inputBox">
            <span>card number</span>
            <input type="text" placeholder="enter your card number" name="card number" >
         </div>
         <div class="inputBox">
            <span>address line 2</span>
            <input type="text" placeholder="e.g. street name" name="street" required>
         </div>
         <div class="inputBox">
               <span>Card CVC</span>
                <input type="tel" placeholder="Card CVC" name="card cvc">
            </div> 
            <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. Gaza" name="city" required>
         </div>
         <div class="inputBox">
            <span>card holder</span>
            <input type="text" placeholder="" name="card holder" >
         </div>

         <div class="input group">             
            <div class="inputBox">
               <span>Country</span>
               <select id="country" name="country">
               <option value="Palestine">Palestine</option>
               <option value="Afganistan">Afghanistan</option>
               <option value="Algeria">Algeria</option>
               <option value="Egypt">Egypt</option>
               <option value="Iraq">Iraq</option> 
               <option value="Jordan">Jordan</option>
               <option value="Kazakhstan">Kazakhstan</option>  
               <option value="Kuwait">Kuwait</option>   
               <option value="Lebanon">Lebanon</option>
               <option value="Libya">Libya</option>
               <option value="Luxembourg">Luxembourg</option>
               <option value="Madagascar">Madagascar</option>
               <option value="Malaysia">Malaysia</option>
               <option value="Morocco">Morocco</option>
               <option value="Oman">Oman</option>
               <option value="Pakistan">Pakistan</option>
               <option value="Qatar">Qatar</option>
               <option value="Saudi Arabia">Saudi Arabia</option> 
               <option value="AlAndalus">Spain</option>
               <option value="Sudan">Sudan</option>
               <option value="Syria">Syria</option>
               <option value="Tajikistan">Tajikistan</option>
               <option value="Turkey">Turkey</option>
               <option value="Turkmenistan">Turkmenistan</option>
               <option value="Turks & Caicos Is">Turks & Caicos Is</option>
               <option value="Uzbekistan">Uzbekistan</option>
               <option value="Yemen">Yemen</option>
               </select>
            </div>  
            <div class="inputBox">
                  <span>Expiration Month</span>
                  <select>
                  
                     <option value="month" selected disabled>month</option>
                     <option value="01">01</option>
                     <option value="02">02</option>
                     <option value="03">03</option>              
                     <option value="04">04</option>
                     <option value="05">05</option>
                     <option value="06">06</option>
                     <option value="07">07</option>
                     <option value="08">08</option>
                     <option value="09">09</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                  </select> 
            </div>
            <div class="inputBox">

                  <span>Expiration Year</span>
                     <select>
                     
                        <option value="year" selected disabled>year</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>              
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                     <option value="2030">2030</option>                
                  </select>  
            </div>   
         </div>
       
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>