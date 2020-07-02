

var booking_btn = document.querySelectorAll('.tab');

for( var i = 0; i< booking_btn.length; i++){
	booking_btn[i].addEventListener("click",function(){
		booking_btn[0].classList.remove("tab-active");
		booking_btn[1].classList.remove("tab-active");
		booking_btn[2].classList.remove("tab-active");
		this.classList.add("tab-active");
	});
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  
}




