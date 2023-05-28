<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Sign in</title>
</head>
<style>
    .center-nav {
        justify-content: center;
        margin-left: 400px;
    }

    nav li {
        padding-left: 30px;
    }



    li .navlink:hover {
        border-top: 3px solid red;
    }

    nav .active {
        color: rgb(255, 208, 0);
        border-top: 4px solid rgb(255, 208, 0);
    }

    nav .btn {

        margin-left: 20px;
        background: linear-gradient(to right, #2c75fc, #7ca1ee);
        color: white;
        border-radius: 20px;
    }

    .cont {
        background-color: rgb(247, 244, 244);
        background-size: 100% 100%;
        width: 100%;
        height: 125px;
    }

    .navbar {
        box-shadow: 0 0 15px 0 rgba(0, 0, 0, .25);
    }


    .cont2 {
        background-color: white;
        padding-top: 50px;
    }

    .cont2 h1 {
        margin-bottom: 30px;
    }

    .cont2 h1:before {
        content: "";
        display: block;

        width: 60px;
        padding-top: 20px;
        margin-bottom: 10px;
        border-bottom: 5px solid rgb(255, 208, 0);
    }

    .butto {
        background-color: rgb(255, 208, 0);
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 20px;
        width: 380px;
        margin-top: 10px;
        margin-bottom: 0%;
        box-shadow: 0 0 5px 0 rgb(255, 208, 0);
    }

    .cont4 {
        margin-top: 70px;
        margin-bottom: 20px;
        border-top: 1px solid rgb(241, 238, 238);
        border-bottom: 1px solid rgb(241, 238, 238);
        background-color: white;
        padding-left: 150px;
        padding-right: 50px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .cont4 ul {
        list-style-type: none;
    }

    .cont4 li {
        color: gray;
        padding-left: -20px;
    }

    .cont4 h4 {
        padding-left: 29px;
    }

    .cont4 h4:before {
        content: "";
        display: block;

        width: 40px;
        padding-top: 20px;
        margin-bottom: 10px;
        border-bottom: 5px solid rgb(255, 208, 0);
    }
</style>

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
    </div>
    <section>
    <div class="container cont2 justify-content-center" style="width: 400px;">
        <h1>UPDATE FORM</h1>
        <h3 class="pt-3 pb-5">
                Update user, {{$user->name}}
            </h3>
            {{-- Users Edit form --}}
        <form method="post" action="{{url('/updateUser')}}/{{$user->id}}" >
        @csrf
        <!-- @method('PUT') -->
        
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input required type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input required type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input required type="password" class="form-control" name="password" id="password" value="{{$user->password}}">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input required type="text" class="form-control" name="country" id="country" value="{{$user->country}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input required type="text" class="form-control" name="address" id="address" value="{{$user->address}}">
            </div>
            
            <button type="submit" class="btn butto">UPDATE</button>
            
        </form>
        {{-- End User Edit form --}}
    </div>
</section>
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

