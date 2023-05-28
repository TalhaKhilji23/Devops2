<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="./css/style.css" rel="stylesheet">
  <title>Services</title>
</head>

<body>
  <div class="cont">
  <nav class="navbar fixed-top navbar-expand-lg" style="background-color: white;">
            <div class="container-fluid" >
              <a class="navbar-brand mr-auto" style="color: black;" href="#"><img style="width: 40px; height: 40px;"src="./img/taskhivelogo.png"> HireMe</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 justify-content-center center-nav text-secondary">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" onMouseOver="this.style.color='rgb(255, 208, 0)'" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: gray;" onMouseOut="this.style.color='gray'" onMouseOver="this.style.color='rgb(255, 208, 0)'" href="/services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: gray;" onMouseOut="this.style.color='gray'" onMouseOver="this.style.color='rgb(255, 208, 0)'" href="/request">Requests</a>
                  </li>
                  
                  
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color: gray;" onMouseOut="this.style.color='gray'" onMouseOver="this.style.color='rgb(255, 208, 0)'" href="/signinpage"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: gray;" onMouseOut="this.style.color='gray'" onMouseOver="this.style.color='rgb(255, 208, 0)'" href="/signup"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign up</a>
                    </li>
                    <button class="btn"><a href="/adddetails" style="color: white; text-decoration:none;"> Post a Request</a></button>
                    <button class="btn">List a Service</button>
                    
                </ul>
              </div>
            </div>
        </nav>

    <div class="container con20">
      <form class='d-flex flex-sm-row flex-column'>
        <input type="text" class='border-0 form-control mt-2 mt-sm-0 d-inline' placeholder="keywords" style="width: 1000px; height: 60px; box-shadow: 0 0 5px 0 rgba(0,0,0, .25);">
        <button class='btn  mr-sm-1 mt-4 mt-sm-0  d-inline' style="width: 120px; height: 60px; background-color: rgb(255, 208, 0); color: white;">Search</button>
      </form>
    </div>


  </div>

  <div class="container con21">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-lg-3 d-flex flex-column justify-content-center con22">
        <img src="./img/image1.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-2-150x150.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Michelles Foster</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>4.3</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Soundtrack & commercial jingles composition</h5>
        </div>
        <div class="container con25">
          <h5>$32.00</h5>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-3 offset-lg-1 d-flex flex-column justify-content-center con22">
        <img src="./img/img2.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-1.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Thomas Hinton</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>4.2</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Engaging and share-worthy Facebook posts & articles</h5>
        </div>
        <div class="container con25">
          <h5>$68.00</h5>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-3 offset-lg-1 d-flex flex-column justify-content-center con22">
        <img src="./img/image-3-400x300.jpg.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-3-150x150.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Brian Peterson</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>3.7</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Custom typography t-shirt & apparel printing design</h5>
        </div>
        <div class="container con25">
          <h5>$38.00</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="container con21">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-lg-3 d-flex flex-column justify-content-center con22">
        <img src="./img/image-5-400x300.jpg.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-4-150x150.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Raymond Settle</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>3.7</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Creative & professional business card design</h5>
        </div>
        <div class="container con25">
          <h5>$77.00</h5>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-3 offset-lg-1 d-flex flex-column justify-content-center con22">
        <img src="./img/image-7-400x300.jpg.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-5.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Mark Z</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>4.5</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Express Facebook cover & profile picture design</h5>
        </div>
        <div class="container con25">
          <h5>$92.00</h5>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-3 offset-lg-1 d-flex flex-column justify-content-center con22">
        <img src="./img/image-10-400x300.jpg.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-6.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Sammy Lithr</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>3.7</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Creative and professional blog posts or articles</h5>
        </div>
        <div class="container con25">
          <h5>$78.00</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="container con21">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-lg-3 d-flex flex-column justify-content-center con22">
        <img src="./img/image-12-400x300.jpg.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-2-150x150.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Richa Gil</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>4.7</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Premium mobile application UI design & development</h5>
        </div>
        <div class="container con25">
          <h5>$98.00</h5>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-3 offset-lg-1 d-flex flex-column justify-content-center con22">
        <img src="./img/image-15-400x300.jpg.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-1.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Rainas Bishfall</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>4.0</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Original blog, article and newsletter writing</h5>
        </div>
        <div class="container con25">
          <h5>$28.00</h5>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-3 offset-lg-1 d-flex flex-column justify-content-center con22">
        <img src="./img/image-20-400x300.jpg.webp">
        <div class="container con23 justify-content-between justify-content-center">
          <div class="row">
            <div class="col-3">
              <img src="./img/avatar-3-150x150.png.webp" class="rounded">
            </div>
            <div class="col-6 padd1">
              <h6>Harry Clint</h6>
            </div>
            <div class="col-3 padd1 colo">
              <h6>4.3</h6>
            </div>
          </div>

        </div>
        <div class="container con24 d-flex aligns-items-center justify-content-center">
          <h5>Complete iOS mobile app to website conversion</h5>
        </div>
        <div class="container con25">
          <h5>$30.00</h5>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid cont4">
    <div class="row">
      <div class="col-md-3">
        <p><img src="./img/taskhivelogo.png" style="width: 60px; height: 60px;"><span style="font-size: 24px;">HireMe</span></p>
        <p style="font-size: 18px; color: gray;">More than 10,000 freelancers to perform your any kind of task.</p>
      </div>
      <div class="col-md-3">
        <h4>Services</h4>
        <ul>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i></i> Design & Graphics</li>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Digital Marketing</li>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Tech & Programming</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4>Blog</h4>
        <ul>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Community</li>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Inspiration</li>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Tips & Tricks</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4>Social</h4>
        <ul>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Facebook</li>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Twitter</li>
          <li><i class="fa fa-angle-right" style="font-size:24px"></i> Linkdln</li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>