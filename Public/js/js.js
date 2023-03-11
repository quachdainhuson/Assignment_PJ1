
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

// Lấy các phần tử HTML cần sử dụng
var minusButton = document.querySelector(".minus");
var plusButton = document.querySelector(".plus");
var quantityInput = document.querySelector(".quantity-input");

// Xử lý sự kiện click cho nút minus
minusButton.addEventListener("click", function() {
  var currentValue = parseInt(quantityInput.value);
  if(currentValue > 1) {
    quantityInput.value = currentValue - 1;
  }
});

// Xử lý sự kiện click cho nút plus
plusButton.addEventListener("click", function() {
  var currentValue = parseInt(quantityInput.value);
  quantityInput.value = currentValue + 1;
});
