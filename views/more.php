<?php

include '../components/header.php'; ?>
<link rel="stylesheet" href="../css/slider.css" />

<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="../fotot/firstpic.jpeg" style="width:100%">
    <div class="text">Mountain</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="../fotot/secdpic.jpeg" style="width:100%">
    <div class="text">Beach</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="../fotot/thirdpic.jpeg" style="width:100%">
    <div class="text">Forest</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="../fotot/fourthpic.jpeg" style="width:100%">
    <div class="text">Desert</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

  </body>
<script src="../js/style.js"></script>
</html>