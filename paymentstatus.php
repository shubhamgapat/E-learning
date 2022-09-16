   <!-- Including Header Starts -->
       <?php
         include('./header.php');
       ?>
   <!-- Including Header Ends -->


        <div class="container-fluid remove-marg">
            <div class="row vid-parent">
              <video muted autoplay loop >
                <source src="./video/banvid.mp4" type="video/mp4"> 
              </video>
              <div class="overlay"></div>
              <div class="vid-content">
                <h1>Payment Status</h1>
              </div>
            </div>
        </div>
        
        <div class=" payment-container">
            <form action="" method="POST">
                <div class="payment-content">
                  <label>Order ID:</label>
                  <input type="text"  >
                  <input type="submit" class="signinbutton" value="View" >
                </div>
            </form>
        </div>


   <!-- Including Footer Starts -->
        <?php
          include('./footer.php');
        ?>
  <!-- Including Footerr Ends -->

