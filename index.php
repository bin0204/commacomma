<!DOCTYPE html>
<html>
<head>
  <title>우리가족을 위한 미세먼지 차단 생활용품숍</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php
require_once('lib/navigation.php');
?>
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="brandstory.php">About</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="https://smartstore.naver.com/commacommakr" data-toggle="tooltip" data-placement="bottom" title="네이버스토어 이동">Shop</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</div>
</nav>
<section class="visible-md visible-lg visible-sm">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img id="mobile1" src="image/mainpage01.jpeg" alt="ocean image">
        </div>
        <div class="item">
          <img id="mobile2" src="image/mainpage02.jpeg" alt="mask image">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</section>

<!-- Only images are visible on small and x-small screens. -->
<section class="visible-xs">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img id="mobile1" src="image/mobile01.jpeg" alt="ocean image">
        </div>
        <div class="item">
          <img id="mobile2" src="image/mobile02.jpeg" alt="mask image">
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</section>

<!-- main page bestseller -->

<div class="container">
  <div class="best-title"
       style="font-weight: bold;
              font-size: 35px;
              font-weight: bold;
              /* text-align: left; */
              padding-bottom: 5px;">
  <span>Bestseller</span>
  </div>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="https://smartstore.naver.com/commacommakr/products/4069309201">
          <img src="image/pink-small.jpg" class="mask" alt="black-big mask">
          <div class="caption">
            <p>꼼마꼼마황사마스크_KF94_소형_핑크색_1매입</p>
            <p><strong>3000원 -> 2790원</strong></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="https://smartstore.naver.com/commacommakr/products/4069285517">
          <img src="image/white-small.jpg" class="mask" alt="black-big mask">
          <div class="caption">
            <p>꼼마꼼마황사마스크_KF94_소형_흰색_1매입</p>
            <p><strong>2500원 -> 2320원</strong></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="https://smartstore.naver.com/commacommakr/products/4069344938">
          <img src="image/yellow-small.jpg" class="mask" alt="black-big mask">
          <div class="caption">
            <p>꼼마꼼마황사마스크_KF94_소형_노랑색_1매입</p>
            <p><strong>3000원 -> 2790원</strong></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- main images  -->
<div class="visible-md visible-sm visible-lg">
  <div class="section2">
    <a href="brandstory.php"><img class="img-responsive" src="image/main01.png" alt="3가지 마스크 이미지"></a>
  </div>
  <div class="section3">
    <img class="img-responsive" src="image/main02.png" alt="자세히 보기 이미지">
  </div>
</div>

<footer>
  <div class="text-center">
    <a class="up-arrow" href="index.php" data-toggle="tooltip" title="위로">
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
  $(".navbar a, footer a[href='index.php']").on('click', function(event) {

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
