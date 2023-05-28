<?php require_once('include/navbar.php'); ?>

<div class="full-container">
  <div class="mySlides light">
    <img src="images/93ff74fe54c1fe85f0b52bed6f991ee8.jpeg" style="width:100%; height:103%;">
    <div class="text">Benjamin Mkapa Stadium</div>
  </div>
  <div class="mySlides light">
    <img src="images/1149d8f529112f71588e862fd2eceac0-1.jpg" style="width:100%; height:103%;">
    <div class="text">Our Stadium</div>
  </div>
  
  <div class="mySlides light">
    <img src="images/kiduchu-pic2-data.jpg" style="width:100%; height:103%;">
    <div class="text">Our Stadium</div>
  </div>

  <div class="mySlides light">
    <img src="images/1149d8f529112f71588e862fd2eceac0-1.jpg" style="width:100%; height:103%;">
    <div class="text">Our Stadium</div>
  </div>
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
  </div>
</div>
		
		
<script>
		let slideIndex = 0;
		showSlides();

		function showSlides() {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 6000); // Change image every 2 seconds
		}
</script>