<style>
img { vertical-align: middle; }

/* Slideshow container */
.slideshow-container {
  position: relative;
  border: 2px solid black;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background: rgba(0,0,0,0.8);
}
/*=================================*/
/* Caption text */
.text {
  color: white;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: white;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background: #717171;
}

.caption {
  text-align: center;
  background: #222;
  padding:  16px 2px;
  color: white;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next, .text {font-size: 11px}
}

/*==============================*/
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 10; /* Sit on top */
  padding-top: 10%;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  background: black; 
}

/* Add Animation */
.zoom {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  cursor: pointer;
}
</style>

<div class="slideshow-container">
  
  @for ($i = 0; $i < $slides; $i++)
  <?php $slide = "imgs.slideshow".".$slideshow".".$i"; ?>

  <div class="mySlides fade">
    <div class="numbertext">{{ $i+1 }} / {{ $slides }}</div>
    <img src=" @include($slide) " alt="{{ $alt[$i] }}" style="width:100%" onclick="showModal(this);">
  </div>
  @endfor
  
  <a class="prev" onclick="plusSlides(-2)">&#8678;</a>
  <a class="next" onclick="plusSlides(2)">&#8680;</a>

</div>

<div id="caption" class="caption"></div>
<br>

<div style=" text-align:center; ">
  @for ($i = 0; $i < $slides; $i++)
  <span class="dot" onclick="currentSlide( {{ $i+1 }} )"></span>
  @endfor
</div>

<!-- The Modal -->
<div id="modal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img id="img01" class="zoom" style="width:100%;">
  <div id="caption"></div>
</div>

<script>
var slideIndex = 1;

function plusSlides(x) {
  slideIndex += x;
  showSlides();
}

function currentSlide(x) {
  slideIndex = x;
  showSlides();
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  /* DEFAULT */
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  /* RESET */
  if(slideIndex > slides.length) {slideIndex = 1} 
  if(slideIndex < 1) {slideIndex = slides.length} 
  /* SHOW */
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  document.getElementById("caption").textContent = 
  slides[slideIndex-1].children[1].alt;
  slideIndex++;
} showSlides(slideIndex);
setInterval(showSlides, 2000);
/*===================================*/
function showModal(x){
  document.getElementById("modal").style.display = "block";
  document.getElementById("img01").src = x.src;
  document.getElementById("caption").textContent = x.alt;
}
function closeModal() { 
  document.getElementById("modal").style.display = "none";
}
</script>