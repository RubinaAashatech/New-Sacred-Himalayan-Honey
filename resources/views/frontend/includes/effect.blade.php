 <!-- effect of himalayan honey -->

 <section class="container">
  <div class="effectstart py-5">
    <div class="titlebannnersection">
      <span class="d-flex flex-column justify-content-center align-items-center containertitle">
        <h2 class="d-flex justify-content-center">
          Effect of Himalayan Honey
        </h2>
        <div class="titlelongerbanner">
          <p class="titleline"></p>
          <span class="titlebannertext">SACRED HIMALAYAN HONEY</span>
          <p class="titleline"></p>
        </div>
      </span>
    </div>
    <div class="effectcontainer row align-items-center">
      <div class="effectimagecontainer col-md-4">
        <div class="slider">
          <img src="./image/homeheroimage.png" alt="" />
          <img src="./image/gallery/image/six.png" alt="" />
          <img src="./image/gallery/image/first.png" alt="" />
        </div>
      </div>
      <div class="effectcontentdescription col-md-8">
        <p>
          Price: The monetary value assigned to the product, influencing
          consumer perception and affordability. Availability: The
          accessibility and distribution channels through which consumers
          can purchase the product. Warranty and Support: Assurance provided
          by the manufacturer regarding repair, replacement, or assistance
          for the product. Purpose: The intended use or application of the
          product, addressing specific consumer needs or solving problems
          Innovation: Unique features of a product, influencing consumer
          decisions and satisfaction.
        </p>
        <p>
          Price: The monetary value assigned to the product, influencing
          consumer perception and affordability. Availability: The
          accessibility and distribution channels through which consumers
          can purchase the product. Warranty and Support: Assurance provided
          by the manufacturer regarding repair, replacement, or assistance
          for the product. Purpose: The intended use or application of the
          product, addressing specific consumer needs or solving problems
          Innovation: Unique features of a product, influencing consumer
          decisions and satisfaction.
        </p>
        <p>
          Price: The monetary value assigned to the product, influencing
          consumer perception and affordability. Availability: The
          accessibility and distribution channels through which consumers
          can purchase the product. Warranty and Support: Assurance provided
          by the manufacturer regarding repair, replacement, or assistance
          for the product. Purpose: The intended use or application of the
          product, addressing specific consumer needs or solving problems
          Innovation: Unique features of a product, influencing consumer
          decisions and satisfaction.
        </p>
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = slider.querySelectorAll("img");
    const contentDescription = document.querySelector(
      ".effectcontentdescription"
    );
    let slideIndex = 0;

    // Show the first slide and content initially
    slides[slideIndex].classList.add("active");
    contentDescription.classList.add("active");

    // Set interval for image sliding
    setInterval(nextSlide, 3000); // Change slide every 3 seconds

    function nextSlide() {
      // Hide the current slide and content
      slides[slideIndex].classList.remove("active");
      contentDescription.classList.remove("active");

      slideIndex++;
      if (slideIndex >= slides.length) {
        slideIndex = 0;
      }

      // Show the next slide and content with animation
      slides[slideIndex].classList.add("active");
      contentDescription.classList.add("active");
    }
  });
</script>