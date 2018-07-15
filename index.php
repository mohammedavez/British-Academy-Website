<!DOCTYPE html>
<html>
<head>
	<title>British Academy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
   
<div class="nav">
     <a href="index.php">
         <div class="logo">
        <img src="images/logo.png">
        <span>Navin's</span>
        <h1 class="british">BRITISH</h1>
        <h1 class="academy">ACADEMY</h1>
    </div>
            </a>
    <ul>
      
        <li><a href="#">Home</a></li>
        
        <li><a href="#">IELTS</a>
            <ul>
                <li><a href="#">PTE</a></li>
                
                <li><a href="#">Video Production</a></li>
                
                <li><a href="#">Web Development</a></li>
            </ul>
        </li>
        
        <li><a href="#">PTE</a></li>
        <li><a href="#">GRE</a></li>
        <li><a href="#">Spoken English</a></li>
        
        <li><a href="#">Interview SKills</a></li>
        <li><a href="#">Personality Developement</a></li>
    </ul>    
</div>
<div class="image-slide">
    <div id="arrow-left" class="arrow"></div>
    <div id="slider">
    
    <div class="slide slide1">
        <div class="slide-content">
        <span>Image one</span>
        </div>
    </div>
    <div class="slide slide2">
        <div class="slide-content">
        <span>Image Two</span>
        </div>
    </div>
    <div class="slide slide3">
        <div class="slide-content">
        <span>Image Three</span>
        </div>
    </div>
    </div>
    <div id="arrow-right" class="arrow"></div>
</div>
    <script>
    
   let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;

// Clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}

// Init slider
function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
}

// Show prev
function slideLeft() {
  reset();
  sliderImages[current - 1].style.display = "block";
  current--;
}

// Show next
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  current++;
}

// Left arrow click
arrowLeft.addEventListener("click", function() {
  if (current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});

// Right arrow click
arrowRight.addEventListener("click", function() {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});

startSlide();

    </script>
</body>
</html>