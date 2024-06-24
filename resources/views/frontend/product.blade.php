@extends('frontend.layouts.master')

@section('content')
    <!----------------------------------product section ----------->


    <!-- herosection -->

    <section class="container">
      <div class="bestproduct d-flex justify-content-between mt-4 row">
        <div class="titlebannnersection">
          <span class="d-flex flex-column justify-content-center align-items-center containertitle">
            <h2 class="d-flex justify-content-center">Sub categories </h2>
          </span>
        </div>
        <!-- navbar -->
        <div class="bestproduct_navsection  ">
          <ul class="px-1 row">
            <li class="productnav-items m-md-2 col-md-2">
              <i class="fa-solid fa-bottle-droplet"></i>
              <a class="productnav-items_atag" href="./productcategories/items1.html">HoneyGlow Harve</a>
            </li>
           
            <li class="productnav-items m-md-2 col-md-2">
              <i class="fa-solid fa-bottle-droplet"></i>
              <a class="productnav-items_atag" href="">Whysssssus honey</a>
            </li>
            <li class="productnav-items m-md-2 col-md-2">
              <i class="fa-solid fa-bottle-water"></i>
              <a class="productnav-items_atag" href="">GoldenHarvest Honey</a>
            </li>
            <li class="productnav-items m-md-2 col-md-2">
              <i class="fa-solid fa-bottle-water"></i>

              <a class="productnav-items_atag" href="">HoneyCrafters Col</a>
            </li>
            <li class="productnav-items m-md-2 col-md-2">
              <i class="fa-solid fa-bottle-water"></i>
              <a class="productnav-items_atag" href="">Whysssssus honey</a>
            </li>
            <li class="productnav-items m-md-2 col-md-2">
              <i class="fa-solid fa-bottle-water"></i>
              <a class="productnav-items_atag" href="">Whysssssus honey</a>
            </li>
            
          </ul>
        </div>
        <!-- best product -->
        <!-- <div class="bestproduct_itemssection d-flex flex-column align-items-center">
          <h2 class="">our Best product </h2>
          <div class="bestproduct_itemssection_item_allproduct row d-flex justify-content-center">
          <a href="./productcategories/itemsdetail.html" class="bestproduct_itemssection_item text-center col-md-2 col-12 d-flex flex-column justify-content-center align-items-center my-1">
            <div class="bestproduct_itemssection_item_image ">
              <img src="../image/productpage/item1.png" alt="">
            </div>
            <h6>product name</h6>
          </a>
          <a href="./productcategories/itemsdetail.html" class="bestproduct_itemssection_item text-center col-md-2 d-flex flex-column justify-content-center align-items-center my-">
            <div class="bestproduct_itemssection_item_image ">
              <img src="../image/productpage/item3.png" alt="">
            </div>
            <h6>product name</h6>
          </a>
          <a href="./productcategories/itemsdetail.html" class="bestproduct_itemssection_item text-center col-md-2 d-flex flex-column justify-content-center align-items-center my-1">
            <div class="bestproduct_itemssection_item_image ">
              <img src="../image/productpage/item2.png" alt="">
            </div>
            <h6>product name</h6>
          </a>
          <a href="./productcategories/itemsdetail.html" class="bestproduct_itemssection_item text-center col-md-2 d-flex flex-column justify-content-center align-items-center my-1">
            <div class="bestproduct_itemssection_item_image ">
              <img src="../image/productpage/item3.png" alt="">
            </div>
            <h6>product name</h6>
          </a>
          <a href="./productcategories/itemsdetail.html" class="bestproduct_itemssection_item text-center col-md-2 d-flex flex-column justify-content-center align-items-center my-1">
            <div class="bestproduct_itemssection_item_image ">
              <img src="../image/productpage/item2.png" alt="">
            </div>
            <h6>product name</h6>
          </a>
        </div>

        </div> -->
    
      </div>
    </section>

<!-- our offer product -->
<!-- <section class="container">
  <div class="offercustomsection py-4 my-5">
    <div class="titlebannnersection">
      <span class="d-flex flex-column justify-content-center align-items-center containertitle">
        <h2 class="d-flex justify-content-center">Why sacred himalyan honey </h2>
        <div class="titlelongerbanner">
          <p class="titleline"></p>
          <span class="titlebannertext">SACRED HIMALAYAN HONEY</span>
          <p class="titleline"></p>
        </div>
      </span>
    </div>
    <div class="offerproductsection row mx-4 align-items-center">
      <a href="./productcategories/itemsdetail.html" class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2 ">quality & Purity</h6>
        <span class="price">Rs.400</span>
        <button class="addtocart">Add To Cart</button>
      </a>
      <a href="./productcategories/itemsdetail.html" class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2 ">quality & Purity</h6>
      </a>
      <a href="./productcategories/itemsdetail.html" class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2 ">quality & Purity</h6>
      </a>
      <a href="./productcategories/itemsdetail.html" class="col-md-2 align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2 ">quality & Purity</h6>
      </a>
      <a href="./productcategories/itemsdetail.html" class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2 ">quality & Purity</h6>
      </a>
      <a href="./productcategories/itemsdetail.html" class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2 ">quality & Purity</h6>
      </a>
    <a href="./productcategories/itemsdetail.html" class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2 ">quality & Purity</h6>
      </a>
      <div class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2">quality & Purity</h6>
      </div>
      <div class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem2.png" alt="" srcset="">
        </div>
        <h6 class="py-2">quality & Purity</h6>
      </div>

      <div class="col-md-2  align-items-center d-flex flex-column offerproduct_item m-3 py-2">
        <div class="offerproductsection_image">
          <img src="../image/productpage/offeritem1.png" alt="" srcset="">
        </div>
        <h6 class="py-2">quality & Purity</h6>
      </div>
    </div>
  </div>
  </div>
</section> -->
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


  <!-- most sell product -->
   <!-- <section class="container">
  <div class="bestproduct_itemssection d-flex flex-column align-items-center py-5">
    <h2 class="my-2">most sell Product</h2>
    <div class="bestproduct_itemssection_item_allproduct d-flex ">
    
    <a href="./productcategories/itemsdetail.html"   class="bestproduct_itemssection_item text-center my-1">
      <div class="bestproduct_itemssection_item_image">
        <img src="../image/productpage/item1.png" alt="">
      </div>
      <h6>product name</h6>
    </a>
    <a href="./productcategories/itemsdetail.html"   class="bestproduct_itemssection_item text-center my-1">
      <div class="bestproduct_itemssection_item_image">
        <img src="../image/productpage/item4.png" alt="">
      </div>
      <h6>product name</h6>
    </a>
    <a href="./productcategories/itemsdetail.html"   class="bestproduct_itemssection_item text-center my-1">
      <div class="bestproduct_itemssection_item_image">
        <img src="../image/productpage/item3.png" alt="">
      </div>
      <h6>product name</h6>
    </a>
    <a href="./productcategories/itemsdetail.html"   class="bestproduct_itemssection_item text-center my-1">
      <div class="bestproduct_itemssection_item_image">
        <img src="../image/productpage/item2.png" alt="">
      </div>
      <h6>product name</h6>
    </a>
    <a href="./productcategories/itemsdetail.html"   class="bestproduct_itemssection_item text-center my-1">
      <div class="bestproduct_itemssection_item_image">
        <img src="../image/productpage/item1.png" alt="">
      </div>
      <h6>product name</h6>
      <a href="./productcategories/itemsdetail.html"   class="bestproduct_itemssection_item text-center my-1">
        <div class="bestproduct_itemssection_item_image">
          <img src="../image/productpage/item2.png" alt="">
        </div>
        <h6>product name</h6>
      </a>
 
  </div>

  </div>
</section> -->

<!-- <section class="container">
      <div class="catalogsectionstart d-flex">
        <div class="catalogsectionstartduplicated p-1">
          <div class="catalogsectioncontainer_left ">
            <div class=" d-flex justify-content-between align-items-end">
              <img src="../image/productpage/honeybottle.png" alt="" class="col-md-1" />
              <div class=" custom4 mx-2">
                <h5 class="text-center">Product name</h5>
                <div class=" d-flex">
                  <span class="col-md-6">Quantity</span>
                  <i class="fa-solid fa-plus col-md-3"></i>
                  <span class="col-md-2" id="increaseQuality">0</span>
                  <i class="fa-solid fa-minus col-md-3"></i>
                </div>
              </div>
              <div class="col-3">
                <span>confirm QTY:</span>
                <span>04</span>
              </div>
              <span class="col-md-1">Rs:30</span>
              <div class="col-md-1">
                <i class="fa-solid fa-trash-can col-md-1"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="catalogsectioncontainer_right p-4">
          <h4 class="">Order Summary</h4>
          <span class="summaryline" py-2></span>
          <div class="d-flex col-md-12 d-flex justify-content-between py-2">
            <h5>items Charge</h5>
            <h5>400</h5>
          </div>
          <div class="d-flex col-12 d-flex justify-content-between">
            <h5>items Charge</h5>
            <h5>400</h5>
          </div>
          <div class="d-flex col-md-12 d-flex justify-content-between py-2">
            <h5>items Charge</h5>
            <h5>400</h5>
          </div>
          <button type="button" class="buybutton col-md-12">Buy now</button>
        </div>
      </div>
    </div>
    </section> -->
    @endsection
