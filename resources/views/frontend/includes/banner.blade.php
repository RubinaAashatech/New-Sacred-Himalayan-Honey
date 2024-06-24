
  <!-- hersection -->
  <section class="container">
    <div class="herosectionindexpage d-flex justify-content-center align-items-center">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner py-2">
          <div class="carousel-item active">
            <div class="row py-3 px-5 align-items-center">
              <div class="col-md-7 d-flex justify-content-center align-items-center flex-column">
                <span class="d-flex justify-content-center align-items-start text-center col-md-8">
                  100% pure organic raw natural materials and himalayan
                </span>
                <button class="buynow">Buy Now</button>
              </div>
              <div class="col-md-5 heroimageindex">
                <img src="./image/homeheroimage.png" alt="" />
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="row py-3 px-5 align-items-center">
              <div class="col-md-7 d-flex justify-content-center align-items-center flex-column">
                <span class="d-flex justify-content-center align-items-start text-center col-md-8">
                  100% pure organic raw natural materials and himalayan
                </span>
                <button class="buynow">Buy Now</button>
              </div>
              <div class="col-md-5 heroimageindex">
                <img src="./image/gallery/image/first.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function () {
      $("#carouselExampleControls").carousel();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector('.slider');
    const slides = slider.querySelectorAll('img');
    const contentDescription = document.querySelector('.effectcontentdescription');
    let slideIndex = 0;
  
    // Show the first slide and content initially
    slides[slideIndex].classList.add('active');
    contentDescription.classList.add('active');
  
    // Set interval for image sliding
    setInterval(nextSlide, 3000); // Change slide every 3 seconds
  
    function nextSlide() {
      // Hide the current slide and content
      slides[slideIndex].classList.remove('active');
      contentDescription.classList.remove('active');
  
      slideIndex++;
      if (slideIndex >= slides.length) {
        slideIndex = 0;
      }
  
      // Show the next slide and content with animation
      slides[slideIndex].classList.add('active');
      contentDescription.classList.add('active');
    }
  });
  
  
  </script>