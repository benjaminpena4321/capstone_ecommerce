<?php session_start(); ?>
<?php include 'partials/header.php' ?>

<body style=" background-color: #c4c4c4;">

 <?php include 'partials/navigation.php' ?> 

	

<div class="container col-lg-12" id="slidePics">
    <div class="slideshow-container">
        <div style="" class="mySlides" id="fade">
            <!-- <div class="number">1 / 4</div> -->
            <div><img  src="assets/images/youth_series.jpg" style="width:100%; height:500px;"></div>
            <!-- <div >Casio logo</div> -->
        </div>
        <div class="mySlides" id="fade">
            <div>2 / 4</div>
            <div><img src="assets/images/sliding_sport_watch.jpg" style="width:100%; height:500px;"></div>
            <div>Caption 2</div>
        </div>
        <div class="mySlides" style="display:block;"  id="fade">
            <!-- <div>3 / 4</div> -->
            <div><img src="assets/images/retro_series.jpeg" style="width:100%; height:500px;"></div>
            <!-- <div>Caption 3</div> -->
        </div>
        <div class="mySlides" id="fade">
            <div>4 / 4</div>
            <div><img  src="assets/images/analog_slide.jpg" style="width:100%; height:500px;"></div>
            <div>Caption 4</div>
        </div>
        <!-- <center>
            <a class="prev" onclick="plusIndex(+1)">&#10094;</a>
            
             <a class="next" onclick="plusIndex(-1)">&#10095;</a>
        </center> -->
    </div>
        <br/>

     <!-- <div style="text-align: center;">
         <span class="dots"></span>
         <span class="dots"></span>
         <span class="dots"></span>
         <span class="dots"></span>
     </div> -->
  </div>



	
  <div class="row">
    <div class="col-lg-12">
      <div style="width" class="categories_style col-lg-3">
       <h3><a href="products.php?category=sports">Sports</a> <i class="fas fa-football-ball"></i></h3> 
      </div>
      <div class="categories_style col-lg-3">
        <h3><a href="products.php?category=casual">Casual</a>  <i class="fas fa-glasses"></i></h3> 
      </div>
      <div class="categories_style col-lg-3">
        <h3> <a href="products.php?category=analog">Analog</a></h3><i class="far fa-clock"></i>
      </div>
      <div class="categories_style col-lg-3">
        <h3> <a href="products.php?category=digital">Digital</a> <i class="fas fa-digital-tachograph"></i></h3> 
      </div>
    </div>
  </div> <br>

  <div class="row">
    <div class="container">
        <h3>Most Popular</h3>
        
    </div> <br>
    <div class=" container">
        <div class="popular_div wire col-lg-3">
          <img class="popular" src="assets/images/most_popular1.jpg">
          <div class="overlay">
            <div class="text">View Info</div>
          </div>
        </div>

         <div class="popular_div wire col-lg-3">
          <img class="popular" src="assets/images/most_popular2.jpg">
          <div class="overlay">
            <div class="text">View Info</div>
          </div>
        </div>
        
         <div class="popular_div wire col-lg-3">
          <img class="popular" src="assets/images/most_popular3.jpg">
          <div class="overlay">
            <div class="text">View Info</div>
          </div>
        </div>

         <div class="popular_div wire col-lg-3">
          <img class="popular" src="assets/images/most_popular4.jpg">
          <div class="overlay">
            <div class="text">View Info</div>
          </div>
        </div>
    </div>
  </div> <br>
    










































<?php include 'partials/footer.php' ?>




  

</body>
</html>