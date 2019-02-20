<!DOCTYPE html>
<html>
<head>
  <title>우리가족을 위한 미세먼지 차단 생활용품숍</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
require_once('lib/navigation.php');
?>
      <li><a href="index.php">Home</a></li>
      <li><a href="brandstory.php">About</a></li>
      <li><a href="product.php" >Products</a></li>
      <li><a href="https://smartstore.naver.com/commacommakr" data-toggle="tooltip" data-placement="bottom" title="네이버스토어 이동">Shop</a></li>
      <li><a href="contact.php" class="active">Contact</a></li>
    </ul>
  </div>
</div>
</nav>
<div class="container">
  <div class="sub-title"><span>Contact us</span></div>
</div>
<div class="container">
  <form action="action.php" method="post">
    <input type="text" name="name" placeholder="이름" required>
    <input type="text" name="mail" placeholder="이메일" required>
    <input type="text" name="subject" placeholder="제목" required>
    <input type="text" name="telephone" name="telephone" placeholder="전화번호">
    <textarea name="message" rows="4" placeholder="내용을 입력하세요." required></textarea>
    <button type="submit" name="submit">SEND</button>
  </form>
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


<!-- Contact Section -->
<!-- <div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
</div> -->

<!-- Image of location/map -->
<!-- <img src="map.jpg" class="img-responsive" style="width:100%"> -->
