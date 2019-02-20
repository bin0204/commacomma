<!DOCTYPE html>
<html>
<head>
  <title>우리가족을 위한 미세먼지 차단 생활용품숍</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/brand.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
require_once('lib/navigation.php');
?>
      <li><a href="index.php">Home</a></li>
      <li><a href="brandstory.php" class="active">About</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="https://smartstore.naver.com/commacommakr" data-toggle="tooltip" data-placement="bottom" title="네이버스토어 이동">Shop</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</div>
</nav>
<div class="container">
  <div class="sub-title"><span>Brandstory</span></div>
  <p class="brand-info"><b>엄마의 사랑과 손길</b>을 모티브로 한 <b>'꼼마꼼마'</b>는
  <br><b>사랑하는 가족을 위한</b> 제품을 선보이는 브랜드입니다.</p>
  <div class="row text-center">
    <div class="col-md-6 col-xs-12 paddingLeft">
      <div class="brandTwo">
        <img src="image/brandstoryCommaLeft.png" alt="left image">
      </div>
    </div>
    <div class="col-md-6 col-xs-12 paddingRight ">
      <div class="brandTwo">
        <img src="image/brandstoryCommaRight.png" alt="right image">
      </div>
    </div>
  </div>
  <p class="brand-bottom-info">엄마의 시선으로 고른 원료와 엄마의 마음으로 제작된 제품을 만나보세요.</p>
</div>
<footer>
  <div class="text-center">
    <a class="up-arrow" href="brandstory.php" data-toggle="tooltip" title="위로">
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
  $(".navbar a, footer a[href='brandstory.php']").on('click', function(event) {

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
