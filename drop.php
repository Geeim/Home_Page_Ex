<div class="row bg-dark p-2 bg-dark"> 
      <div class="col-12">
        <h3 class="Playfair p-5 text-center bg-dark text-white">Photo Gallery</h3>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

          <!-- Indicators / Dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="6" aria-label="Slide 7"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/Gallery1.jpg" class="d-block" alt="Gallery 1">
            </div>
            <div class="carousel-item">
              <img src="images/Gallery2.jpg" class="d-block" alt="Gallery 2">
            </div>
            <div class="carousel-item">
              <img src="images/Gallery3.jpg" class="d-block" alt="Gallery 3">
            </div>
            <div class="carousel-item active">
              <img src="images/Gallery4.jpg" class="d-block" alt="Gallery 4">
            </div>
            <div class="carousel-item">
              <img src="images/Gallery5.jpg" class="d-block" alt="Gallery 5">
            </div>
            <div class="carousel-item">
              <img src="images/Gallery6.jpg" class="d-block" alt="Gallery 6">
            </div>
            <div class="carousel-item">
              <img src="images/Gallery7.jpg" class="d-block" alt="Gallery 7">
            </div>
          </div>

          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>
    </div>

    #carouselExampleControls img {
        width: 100%;         
        max-height: 500px;    
        object-fit: cover;    
        border-radius: 10px; 
    }
 
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.7); /* semi-transparent black */
        border-radius: 50%;                  /* bilog na style */
        padding: 15px;                        /* dagdag padding para mas malaki */
        background-size: 50% 50%;             /* adjust arrow size */
    }

        /* Optional: hover effect para mas tumingkad */
    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: rgba(0, 0, 0, 0.9);
    }

