<?php
include_once 'header.php';
 ?>

    <!-- Focus this part only -->
    <div class="body">
      <div class="product-container">
        <div class="product-image-container">
          <div class="product-preview">
            <img src="css/images/shirt7-front.jpg" id="women" name="womenshirt" alt="Women's Brown Oversized Top">
            <img src="css/images/shirt7-back.jpg" id="women" name="womenshirt" alt="Women's Brown Oversized Top">
          </div>
        </div>
        <div class="product-pricing-container">
          <div class="product-pricing">
            <h2 class="product-banner">Women's Brown Oversized Top</h2> <hr id="product-line">
            <p class="prodPrice" >Price: RM 39.99</p>
            <form class="addToCart" action="cart.php" method="post">
              <select class="size-select" name="size">
                <option>-- Select Size --</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
              <label class="labelQuan" for="prodQuan">Quantity</label>
              <input type="number" min="1" max="100" class="product-quantity" id="prodQuan" name="qty">
              <input type="hidden" name="prodID" value="24">
              <input type="hidden" name="prodName" value="Women's Brown Oversized Top">
              <input type="hidden" name="prodPrice" value="39.99">
              <input type="hidden" name="memberNUM" value="<?php echo ".$profileID.";?>">
              <input type="hidden" name="prodImg" value="<img class='cart-item' src='css/images/shirt7-front.jpg' alt='item24'>">
              <br>
                <button id="addCart-button" type="submit" name="addCart">ADD TO CART</button>
            </form>
          </div>
          <div class="product-information">
            <p class="prodInformation" >This flowy, oversized top will be a staple for your everyday-wear due to its comfort and quality. The top's cut makes it suitable for anyone of different body shapes.</p>
            <ul>
              <li>100% cotton</li>
              <li>Signature logo patch</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->

    <div class="footer">
      <div class="information9">
        <div class="about-us">
          <a class="footer-link" id="about" href="aboutus.php">About Us</a>
        </div>
        <div class="faq">
          <a class="footer-link" id="faq" href="faq.php">FAQ</a>
        </div>
        <div class="policy">
          <a class="footer-link" id="policy" href="policy.php">Return Policy</a>
        </div>
      </div>
      <div class="social-media">
        <h3 class="follow-header" >Follow us on</h3>
        <div class="media-links">
          <div class="facebook">
            <a class="facebook-link" href="https://www.facebook.com/profile.php?id=100070298860230"></a>
          </div>
          <div class="instagram">
            <a class="instagram-link" href="https://instagram.com/ultidry?utm_medium=copy_link"></a>
          </div>
          <div class="twitter">
            <a class="twitter-link" href="https://twitter.com/ultidry"></a>
          </div>
        </div>
      </div>
      <div class="copyright-section">
        <div class="copyright-words">
          <small class="copyright">&#169;2021 Ulti-Dry Malaysia, Inc.- All rights reserved.</small>
        </div>
      </div>
    </div>
  </body>
</html>