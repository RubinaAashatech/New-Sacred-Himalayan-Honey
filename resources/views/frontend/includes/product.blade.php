<!-- product section -->
<section class="container-fluid">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160">
      <path fill="#fff6e6" fill-opacity="1"
          d="M0,128L120,117.3C240,107,480,85,720,90.7C960,96,1200,128,1320,144L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
      </path>
  </svg>
  <div class="customsection customsection_product">
      <div class="container">

          <div class="titlebannnersection">
              <span class="d-flex flex-column justify-content-center align-items-center containertitle">
                  <h2 class="d-flex justify-content-center">Products We Provide</h2>
              </span>
          </div>

          <div class="productsection d-flex justify-content-between row pb-5">
              @foreach ($products as $product)
              <div class="productsectioncontent d-flex flex-column justify-content-center align-items-center text-center col-md-2 col-10 my-3 mx-4">
                  <div class="productsectioncontent_imagecontainer">
                      <img src="{{ asset($product->product_image) }}" alt="{{ $product->product_name }}" />
                  </div>
                  <span>{{ $product->product_name }}</span>
                  <span class="price">Rs.{{ $product->price }}</span>
                  <button class="addtocart">Add To Cart</button>
              </div>
              @endforeach
          </div>

      </div>
  </div>
</section>
