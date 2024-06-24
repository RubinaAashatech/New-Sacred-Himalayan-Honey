<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sacred Himalayan honey</title>
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/about.css" />
    <link rel="stylesheet" href="../css/title.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="../javascript/navactive.js"></script>
  </head>

  <body>
    <!----------------------------------nav section ---------------------------------------------------------------------------------->
    <section class="container">
      <div id="navsection">
        <div class="top-nav">
          <div class="icons-collection">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="authorization-section">
            <button class="register">Register</button>
            <button class="login">login</button>
            <a href="./pages/catalog.html"><button class="cart">
                <i class="fa-solid fa-cart-shopping"></i></button></a>
          </div>
        </div>
        <div class="spaceline"></div>
        <nav class="navbar navbar-expand-lg navbar-light navcustom">
          <div class="container-fluid">
            <span class="navbar-brand" href="#">
              <div class="logoimage">
                <img src="../image/bee (1).png" alt="" />
              </div>
  
              <div class="logo-text">
                <span class="sacred">Sacered</span>
                <span class="hh-text">himalayan</span>
                <span class="hh-text">Honey</span>
              </div>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../index.html">Home</a>
                </li>
  
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Introduction
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <a class="dropdown-item" href="./whyus.html">Why Us</a>
                    </li>
  
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="./about.html">About</a>
                    </li>
                  </ul>
                </li>
  
                <li class="nav-item">
                  <a class="nav-link" href="./product.html">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./blog.html">Blog</a>
                </li>
  
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Gallery
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <a class="dropdown-item" href="./imagegallery.html">Image</a>
                    </li>
  
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="./videogalley.html">Video</a>
                    </li>
                  </ul>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="./contact.html">Contact</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              </form>
            </div>
          </div>
        </nav>
      </div>
    </section>
    <!----------------------------------About PAge Start --------------------------------------------------------------------------->
    <!----------------------------------hero section --------------------------------------------------------------------------->

    <section class="container">
      <div class="aboutherosection">
        <div class="row customherosection">
          <div class="col-md-6 order-md-1 order-2 col-12">
            <h2>what we Give ?</h2>
            <p>
              embarking on an odyssey through the digital landscape of virtual
              reality, we are beckoned into a realm where pixels dance with
              possibility and imagination knows no bounds. But what is this
              elusive phenomenon that whispers promises of alternate realities
              and immersive experiences s and immersive experiences? Virtual
              reality, a symphony of code and creativity, transports us beyond
              the confines of the tangible world into a universe of endless
              potential. It's the artful fusion of technology and human
              curiosity, inviting us to explore realms both familiar and fan
            </p>
          </div>
          <div class="imagesection col-md-6 order-md-2 order-1 col-12">
            <img src="../image/about/heroimage.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!---------------------------------------------------------------------- our detail section --------------------------------------->

    <section class="container">
      <div class="companydetail">
        <div class="row d-flex py-4">
          <!-- left section -->
          <div class="leftcontent col-3" id="rightsite">
            <div
              class="circle d-flex flex-column justify-content-between align-items-center"
            >
              <span class="titledefine" id="mission" onclick="funDetail(this)">
                Mission
              </span>
              <img src="../image/about/Vector.png" alt="" srcset="" />
            </div>
            <div
              class="circle d-flex flex-column justify-content-between align-items-center"
            >
              <span class="titledefine" id="plan" onclick="funDetail(this)">
                plan
              </span>
              <img src="../image/about/Vector.png" alt="" srcset="" />
            </div>
            <div
              class="circle d-flex flex-column justify-content-between align-items-center"
            >
              <span class="titledefine" id="Vision" onclick="funDetail(this)">
                Vision
              </span>
              <img src="../image/about/Vector.png" alt="" srcset="" />
            </div>
            <div
              class="circle d-flex flex-column justify-content-between align-items-center"
            >
              <span class="titledefine" id="goal" onclick="funDetail(this)">
                goal</span
              >
            </div>
          </div>

          <!-- description section or right section -->

          <div class="col-6 description" id="companydescription">
            <h2 class="my-4">Company Description</h2>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <h5 class="highlightpoints px-3">Company Name :</h5>

              <span>Sacred Himalayan Honey</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <h5 class="highlightpoints px-3">Company Owner :</h5>
              <span>Sacred Himalayan Honey</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <h5 class="highlightpoints px-3">Established Date :</h5>
              <span>Hari Bahadur Thapa</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <h5 class="highlightpoints px-3">Company Name :</h5>
              <span>2002-september-29</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <h5 class="highlightpoints px-3">Company Name :</h5>
              <span>Sacred Himalayan Honey</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <h5 class="highlightpoints px-3">Company Name :</h5>
              <span>Sacred Himalayan Honey</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <h5 class="highlightpoints px-3">Company Name :</h5>
              <span>Sacred Himalayan Honey</span>
            </div>
          </div>

          <!-- mission description -->

          <div
            class="col-6 description description_particular"
            id="missiondescription"
          >
            <h2 class="my-4">Company Mission</h2>
            <div
              class="descriptiondetail d-flex align-items-center justify-content-start pb-2 my-4"
            >
              <i
                class="fa-regular fa-circle-check d-flex justify-content-start align-items-start text-start"
              ></i>
              <span
                >embarking on an odyssey through the digital landscape of
              </span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>2002-september-29 mbarking on an odyssey through the</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>Sacred Himalayan Hone y</span>
            </div>
          </div>

          <!-- plan description -->

          <div
            class="col-6 description description_particular"
            id="plandescription"
          >
            <h2 class="my-4">Company Plan</h2>
            <div
              class="descriptiondetail d-flex align-items-center justify-content-start pb-2 my-4"
            >
              <i
                class="fa-regular fa-circle-check d-flex justify-content-start align-items-start text-start"
              ></i>
              <span
                >embarking on an odyssey through the digital landscape of
              </span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>2002-september-29 mbarking on an odyssey through the</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>Sacred Himalayan Hone y</span>
            </div>
          </div>

          <!-- vision description -->

          <div
            class="col-6 description description_particular"
            id="visiondescription"
          >
            <h2 class="my-4">Company vision</h2>
            <div
              class="descriptiondetail d-flex align-items-center justify-content-start pb-2 my-4"
            >
              <i
                class="fa-regular fa-circle-check d-flex justify-content-start align-items-start text-start"
              ></i>
              <span
                >embarking on an odyssey through the digital landscape of
              </span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>2002-september-29 mbarking on an odyssey through the</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>Sacred Himalayan Hone y</span>
            </div>
          </div>

          <!-- goal description -->

          <div
            class="col-6 description description_particular"
            id="goaldescription"
          >
            <h2 class="my-4">Company Goal</h2>
            <div
              class="descriptiondetail d-flex align-items-center justify-content-start pb-2 my-4"
            >
              <i
                class="fa-regular fa-circle-check d-flex justify-content-start align-items-start text-start"
              ></i>
              <span
                >embarking on an odyssey through the digital landscape of
              </span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >embarking on an odyssey through the digital landscape of</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>2002-september-29 mbarking on an odyssey through the</span>
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span
                >Sacred Himalayan Honey mbarking on an odyssey through the</span
              >
            </div>
            <div
              class="descriptiondetail d-flex align-items-center text-center pb-2 my-4"
            >
              <i class="fa-regular fa-circle-check"></i>
              <span>Sacred Himalayan Hone y</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!----------------------------------branch section --------------------------------------------------------------------------->

    <section class="container py-5">
      <div class="row branchsection-custom-row">
        <span
          class="d-flex flex-column justify-content-center align-items-center containertitle mb-5"
        >
          <h2 class="d-flex justify-content-center">Our branch</h2>
          <img src="../image/banner.png" alt="" srcset="" />
        </span>
        <!-- col -->
        <div
          class="col-md-3 d-flex flex-column justify-content-between align-items-center py-4 custombranchcolumn"
        >
          <div class="branchimagesection">
            <img src="../image/about/chec.jpg" alt="" />
          </div>
          <div
            class="contentsection text-center align-items-center justify-content-between d-flex flex-column mt-5"
          >
            <div class="titlesection">
              <h4>Chabahil, Kathmandu</h4>
              <h4>Head Office</h4>
            </div>
            <div class="abouticoncollection">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-solid fa-envelope"></i>
            </div>
          </div>
        </div>
        <!-- col -->
        <div
          class="col-md-3 d-flex flex-column justify-content-between align-items-center py-4 custombranchcolumn"
        >
          <div class="branchimagesection">
            <img src="../image/about/branch.png" alt="" />
          </div>
          <div
            class="contentsection text-center align-items-center justify-content-between d-flex flex-column mt-5"
          >
            <div class="titlesection">
              <h4>Chabahil, Kathmandu</h4>
              <h4>Head Office</h4>
            </div>
            <div class="abouticoncollection">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-solid fa-envelope"></i>
            </div>
          </div>
        </div>
        <!-- col -->
        <div
          class="col-md-3 d-flex flex-column justify-content-between align-items-center py-4 custombranchcolumn"
        >
          <div class="branchimagesection">
            <img src="../image/about/branch.png" alt="" />
          </div>
          <div
            class="contentsection text-center align-items-center justify-content-between d-flex flex-column mt-5"
          >
            <div class="titlesection">
              <h4>Chabahil, Kathmandu</h4>
              <h4>Head Office</h4>
            </div>
            <div class="abouticoncollection">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-solid fa-envelope"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!----------------------------------footer section ---------------------------------------------------------------------------------->
    <footer class="container-fluid">
      <div class="footer-top d-flex flex-column container py-3">
        <div class="footersection row">
          <div class="footersection-col col-md-3 col-5 d-flex flex-column py-2">
            <h5>follow us</h5>
            <ul class="footer-nav-link">
              <li>Home</li>
              <li>Product</li>
              <li>Blog</li>
              <li>About</li>
              <li>Contact</li>
            </ul>
          </div>
          <div class="footersection-col col-md-3 col-6 d-flex flex-column py-2">
            <h5>Our Service</h5>
            <ul>
              <li>Website Development</li>
              <li>Mobile Application</li>
              <li>Mobile Application</li>
              <li>Graphics Design</li>
            </ul>
          </div>
          <div class="footersection-col col-md-3 col-12 py-2">
            <h5>Reach us</h5>
            <ul>
              <li>
                <span><i class="fa-solid fa-location-dot"></i></span
                ><span>Sinamangal,kathamandu</span>
              </li>
              <li>
                <span> <i class="fa-solid fa-phone"></i></span
                ><span>9800000000</span>
              </li>
              <li>
                <span> <i class="fa-solid fa-envelope"></i></span
                ><span>sacredhoney@gmail.com</span>
              </li>
            </ul>
          </div>
          <div class="footersection-col col-md-3 col-12 flex-column py-2">
            <div class="follow-section">
              <span>Our Service</span>
              <div class="footer-icons-collection">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-solid fa-envelope"></i>
              </div>
            </div>
            <div class="direction-section">
              <span>Our Direction</span>
              <div class="mapimage">
                <img src="../image/map.png" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="footerdivider"></div>
        <div
          class="d-flex justify-content-between container footerbottoncustom"
        >
          <span>Copyright @ 2081 aashatech </span>
          <span>we believed on your sucess</span>
        </div>
      </div>
    </footer>

    <script>
      const companydescription = document.getElementById("companydescription");
      const GoalDescription = document.getElementById("goaldescription");
      const missionDescription = document.getElementById("missiondescription");
      const planDescription = document.getElementById("plandescription");
      const visionDescription = document.getElementById("visiondescription");

      function funDetail(element) {
        if (element.id === "mission") {
          missionDescription.style.display = "block";
          GoalDescription.style.display = "none";
          companydescription.style.display = "none";
          planDescription.style.display = "none";
          visionDescription.style.display = "none";
        } else if (element.id === "plan") {
          planDescription.style.display = "block";
          GoalDescription.style.display = "none";
          companydescription.style.display = "none";
          missionDescription.style.display = "none";
          visionDescription.style.display = "none";
        } else if (element.id === "Vision") {
          visionDescription.style.display = "block";
          GoalDescription.style.display = "none";
          companydescription.style.display = "none";
          missionDescription.style.display = "none";
          planDescription.style.display = "none";
        } else if (element.id === "goal") {
          GoalDescription.style.display = "block";
          companydescription.style.display = "none";
          missionDescription.style.display = "none";
          planDescription.style.display = "none";
          visionDescription.style.display = "none";
        } else {
          companydescription.style.display = "block";
          GoalDescription.style.display = "none";
          missionDescription.style.display = "none";
          planDescription.style.display = "none";
          visionDescription.style.display = "none";
        }
      }
    </script>
  </body>
</html>
