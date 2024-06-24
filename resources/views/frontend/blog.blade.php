<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sacred Himalayan honey</title>
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/blog.css" />
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
            <a href="./catalog.html"><button class="cart">
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
  
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
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
                  <a class="nav-link active" href="#">Blog</a>
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
    <!-- ------------------------blog page start ---------------------------->
    <!-- hero section -->

    <section class="container">
      <div class="herosection row">
        <div class="herosection_image-container col-md-12">
          <img src="../image/about/contacthero.png" alt="" srcset="" />
        </div>
        <span class="section-overlay d-flex flex-column align-items-center">
          <h2>What are you searching for ?</h2>
          <h3>lets take you query !</h3>
          <span class="d-flex py-2 querytaking">
            <input type="text" name="" id="" />
            <input type="button" value="Click me" />
          </span>
        </span>
      </div>
    </section>


    <!-- card section  -->
    <section class="container">
      <div class="d-flex flex-column justify-content-center my-5">
        <span
          class="d-flex flex-column justify-content-center align-items-center containertitle"
        >
          <h2 class="d-flex justify-content-center">
            YOUR JOURENRY WITH OUR BLOG
          </h2>
          <img src="../image/banner.png" alt="" srcset="" />
        </span>
        <div id="cardsSectioncontent" class="d-flex justify-content-center">
          <script>
            const data = [
              {
                imageUrl: "../image/blog/blogcardimage.png",
                title:
                  "Some quick example text to build on the card title and make up ",
                bannerimg: "../image/banner.png",
                text: "In the serene dawn of a new day, where the sun casts its gentle rays upon tawakening the slumbering world, amidst the symphony chirping band rustling leaves, amidst the symphony chirpingd rustling leaves,amidst the symphony chirping.",
                buttonText: "Read More",
                buttonLink: "./blogpagedetail.html",
              },
              {
                imageUrl: "../image/blog/blogcardimage.png",
                title:
                  "Some quick example text to build on the card title and make up and make up",
                bannerimg: "../image/banner.png",
                text: "In the serene dawn of a new day, where the sun casts its gentle rays upon tawakening the slumbering world, amidst the symphony chirping band rustling leaves, amidst the symphony chirpingd rustling leaves,amidst the symphony chirping.",
                buttonText: "Read More",
                buttonLink: "#",
              },
              {
                imageUrl: "../image/blog/blogcardimage.png",
                title:
                  "Some quick example text to build on the card title and make up ",
                bannerimg: "../image/banner.png",
                text: "In the serene dawn of a new day, where the sun casts its gentle rays upon tawakening the slumbering world, amidst the symphony chirping band rustling leaves, amidst the symphony chirpingd rustling leaves,amidst the symphony chirping.",
                buttonText: "Read More",
                buttonLink: "#",
              },
            ];

            const cardsHtml = data
              .map(
                (item) => `
      <div class="card mx-4 cardcustom">
        <div class="cardimage">
          <img class="card-img-top" src="${item.imageUrl}" alt="Card image cap"/></div>
        <div class="card-body">
          <h5 class="card-title">${item.title}</h5>
          <img class="card-img-top my-3" src="${item.bannerimg}" alt="Card image cap"/>
          <p class="card-text ">${item.text}</p>
          <a href="${item.buttonLink}" class="btn  my-1">${item.buttonText}</a>
        </div>
      </div>
    `
              )
              .join("");

            document.getElementById("cardsSectioncontent").innerHTML +=
              cardsHtml;
          </script>
        </div>
      </div>
    </section>

    <!----------------------------------footer section ---------------------------------------------------------------------------------->
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
  </body>
</html>
