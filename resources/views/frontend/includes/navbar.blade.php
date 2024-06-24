  <!----------------------------------nav section ---------------------------------------------------------------------------------->

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
                <a class="nav-link active" aria-current="page" href="{{ route('Index') }}">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Introduction
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="./pages/whyus.html">Why Us</a>
                  </li>

                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="./pages/about.html">About</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('Product') }}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/blog.html">Blog</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Gallery
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="./pages/imagegallery.html">Image</a>
                  </li>

                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="./pages/videogalley.html">Video</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('Contact') }}">Contact</a>
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