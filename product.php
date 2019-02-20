<!DOCTYPE html>
<html>
<head>
  <title>우리가족을 위한 미세먼지 차단 생활용품숍</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/product.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
require_once('lib/navigation.php');
?>
      <li><a href="index.php">Home</a></li>
      <li><a href="brandstory.php">About</a></li>
      <li><a href="product.php" class="active">Products</a></li>
      <li><a href="https://smartstore.naver.com/commacommakr" data-toggle="tooltip" data-placement="bottom" title="네이버스토어 이동">Shop</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</div>
</nav>
<!-- <div class="container">

  <div class="container">

    <div class="cotainer firstSection">
      <div class="">
        <img class="left-column" src="image/productInfo.png" alt="product information">
      </div>
      <div class="">
        <img class="right-column" src="image/productMask.png" alt="product information">
      </div>
    </div>

    <div class="container secondSection">
      <img class="maskDes" src="image/maskDescription.png" alt="describe mask">
      <img class="fourElements" src="image/four.png" alt="four elements">
    </div>

    <div class="container thirdSection">
      <img class="certifi" src="image/certifi.png" alt="certifications">
    </div>
  </div>
</div> -->

<div id="section1" class="container-fluid">
  <div class="container img-responsive">
    <div class="sub-title"><span>Products</span></div>
    <!-- visible lg -->
    <div class="row">
      <div class="col-sm-4">
        <img class="left-column" src="image/productInfo.png" alt="product information">
      </div>
      <div class="col-sm-7 visible-lg">
        <img class="right-column" src="image/productMask.png" alt="product information">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <img class="maskDes img-responsive" src="image/maskDescription.png" alt="describe mask">
        <img class="fourElements img-responsive" src="image/four.png" alt="four elements">
      </div>
    </div>
    <!-- section 3 -->
    <div class="row">
      <div class="col-sm-12">
        <img class="certifi img-responsive" src="image/certifi.png" alt="certifications">
      </div>
    </div>
  </div>
</div>
<!-- section 2 -->
<div id="section2" class="container-fluid">
</div>
<!-- section 3 -->
<div id="section3" class="container-fluid">
</div>


<footer>
  <div class="text-center">
    <a class="up-arrow" href="product.php" data-toggle="tooltip" title="위로">
<?php
require_once('lib/footer.php');
 ?>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='product.php']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>
