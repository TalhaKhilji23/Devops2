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
  <title>List a service</title>
</head>

<body>
  <div class="cont">
    <nav class="navbar fixed-top navbar-expand-lg" style="background-color: white;">
      <div class="container-fluid">
        <a class="navbar-brand mr-auto" style="color: black;" href="#"><img style="width: 40px; height: 40px;" src="./img/taskhivelogo.png"> HireMe</a>
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
  </div>
  <div class="container cont2 justify-content-center" style="width: 1000px;">
    <h1>Add Details</h1>
    <form>
      <div class="mb-3">
        <label for="title" class="form-label">TITLE</label>
        <input type="text" class="form-control" id="title">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">PRICE</label>
        <input type="text" class="form-control" id="price">
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">DESCRIPTION</label>
        <textarea class="form-control" id="desc" rows="4"></textarea>
      </div>
      <button type="submit" class="btn butto">Submit Request</button>

    </form>
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