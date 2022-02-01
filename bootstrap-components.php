<?php
include"essentials/header.php";
?>
<!--Mobile contact-->
<div class="popup-modal1">
  <div class="modal" id="menu-popup">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="common-heading">
            <h4 class="mt0 mb0">Write a Message</h4>
          </div>
          <button type="button" class="closes" data-bs-dismiss="modal">
            &times;
          </button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-block fdgn2 mt10 mb10">
            <form action="#" method="post" name="feedback-form">
              <div class="fieldsets row">
                <div class="col-md-12">
                  <input type="text" placeholder="Full Name" name="name" />
                </div>
                <div class="col-md-12">
                  <input
                    type="email"
                    placeholder="Email Address"
                    name="email"
                  />
                </div>
                <div class="col-md-12">
                  <input
                    type="number"
                    placeholder="Contact Number"
                    name="phone"
                  />
                </div>
                <div class="col-md-12">
                  <input type="text" placeholder="Subject" name="subject" />
                </div>
                <div class="col-md-12">
                  <textarea placeholder="Message" name="message"></textarea>
                </div>
              </div>
              <div class="fieldsets mt20 pb20">
                <button
                  type="submit"
                  name="submit"
                  class="lnk btn-main bg-btn"
                  data-bs-dismiss="modal"
                >
                  Submit <i class="fas fa-chevron-right fa-icon"></i
                  ><span class="circle"></span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Mobile contact-->
<!--End Header -->
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-5">
  <div class="text-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 v-center">
          <div class="bread-inner">
            <div class="bread-title">
              <h2>Bootstrap Components</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Tabs-->
<section class="pad-tb">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt60">
        <h4 class="mb20">Tooltips</h4>

        <button
          type="button"
          class="btn btn-secondary"
          data-bs-toggle="tooltip"
          data-bs-placement="top"
          title="Tooltip on top"
        >
          Tooltip on top
        </button>
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-toggle="tooltip"
          data-bs-placement="right"
          title="Tooltip on right"
        >
          Tooltip on right
        </button>
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-toggle="tooltip"
          data-bs-placement="bottom"
          title="Tooltip on bottom"
        >
          Tooltip on bottom
        </button>
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-toggle="tooltip"
          data-bs-placement="left"
          title="Tooltip on left"
        >
          Tooltip on left
        </button>

        <h4 class="mt60 mb20">Badges</h4>
        <span class="badge bg-primary">Primary</span>
        <span class="badge bg-secondary">Secondary</span>
        <span class="badge bg-success">Success</span>
        <span class="badge bg-danger">Danger</span>
        <span class="badge bg-warning text-dark">Warning</span>
        <span class="badge bg-info text-dark">Info</span>
        <span class="badge bg-light text-dark">Light</span>
        <span class="badge bg-dark">Dark</span>

        <h4 class="mt60 mb20">Breadcrumb</h4>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>

        <h4 class="mt60 mb20">Bootstrap Carousel</h4>
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="images/hero/slider-1.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="images/hero/slider-2.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="images/hero/hero-creative-agenc1.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h4 class="mt60 mb20">Custom Checkbox</h4>
        <form>
          <div class="custom-control custom-checkbox">
            <input
              type="checkbox"
              class="custom-control-input"
              id="customCheck"
              name="example0"
            />
            <label class="custom-control-label" for="customCheck"
              >Check this custom checkbox</label
            >
          </div>
        </form>

        <h4 class="mt60 mb20">Custom Radio buttons</h4>
        <form>
          <div class="custom-control custom-radio custom-control-inline">
            <input
              type="radio"
              class="custom-control-input"
              id="customRadio"
              name="example"
              value="customEx"
            />
            <label class="custom-control-label" for="customRadio"
              >Custom radio 1</label
            >
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input
              type="radio"
              class="custom-control-input"
              id="customRadio2"
              name="example"
              value="customEx"
            />
            <label class="custom-control-label" for="customRadio2"
              >Custom radio 2</label
            >
          </div>
        </form>
        <h4 class="mt60 mb20">Floating labels Form</h4>

        <form>
          <div class="form-floating mb-3">
            <input
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
            />
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input
              type="password"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
            />
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <select
              class="form-select"
              id="floatingSelect"
              aria-label="Floating label select example"
            >
              <option selected>Select Option</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
          </div>

          <div class="mb-3">
            <input class="form-control" type="file" id="formFile" />
          </div>

          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              id="floatingTextarea2"
              style="height: 100px"
            ></textarea>
            <label for="floatingTextarea2">Enter Message</label>
          </div>

          <div class="col-md-6 mt20">
            <button type="button" class="btn-main bg-btn lnk">
              View Showcase <i class="fas fa-chevron-right fa-icon"></i
              ><span class="circle"></span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
include"essentials/footer.php";
?>
