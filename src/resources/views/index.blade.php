<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <title>Home</title>
    <style>
        .center-nav{
        justify-content: center;
        margin-left: 400px;
        }

        nav li {
            padding-left: 30px;
        }

        

        li .navlink:hover {
            border-top: 3px solid red;
        }

        nav .active{
            color: rgb(255, 208, 0);
            border-top: 4px solid rgb(255, 208, 0);
        }
        nav .btn{
            
            margin-left: 20px;
            background: linear-gradient(to right, #2c75fc, #7ca1ee);
            color: white;
            border-radius: 20px;
        }

        .bgimg{
            background-image: url(./img/background-2.png.webp);
            background-size: 100% 100%;
            
            width: 100%;
            height: 650px;
        }

        .navbar {
            box-shadow: 0 0 15px 0 rgba(0,0,0, .25);
        }

        .headerset{
            padding-top: 250px;
        }

        .headerset h1{
            font-size: 50px;
        }

        .headerset span{
            color: rgb(255, 208, 0);
        }

        .headerset img{
            width: 30px;
            height: 30px;
            margin-bottom: 30px;
        }
        
        .headerset h4{
            color: gray;
            padding-top: 10px;
            padding-bottom: 30px;
        }

        .cont-1{
            margin-top: 150px;
            width: 100%;
            height: 300px;
            box-shadow: 0 0 5px 0 rgba(0,0,0, .25);
            background-color: white;
            margin-bottom: 100px;
        }

        .col-cont1{
            padding: 55px;
        }

        .col-cont1 img{
            height: 150px;
            padding-left: 40px;
        }

        .col-cont1 p{
            padding: 20px;
            font-size: 24px;
            padding-left: 60px;
        }

        .cont-2{
            text-align: center;
            height: 70px;
            margin-top: 300px;
            margin-bottom: 100px;
        }

    .cont-2:before {
    content: "";  
    display: block; 
    margin: 0 auto; 
    width: 80px; 
    padding-top: 20px;
    margin-bottom: 20px; 
    border-bottom: 5px solid rgb(255, 208, 0);
}

.cont-2 h4{
    color: gray;
}


.cont-3{
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: white;
}

.col-cont3{
    margin-left: 20px;
    margin-right: 20px;
    box-shadow: 0 0 5px 0 rgba(0,0,0, .25);
    background-color: white;
    width: 290px;
    justify-items: center;
    justify-content: center;
    align-items: center;
    padding-top: 10px;
    padding-left: 40px;
}

.col-cont3 img {
    width: 200px;
    height: 200px;
    
    justify-items: center;
}

.col-cont3 h4{
    margin-left: 10px;
    margin-top: 0;
    margin-bottom: 50px;
    justify-content: center;
    align-content: center;
}

.col-cont3:hover{
    
transform: scale(1.04);

    
    border-top: 5px solid rgb(255, 208, 0);
}

.cont4{
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

.cont4 ul{
    list-style-type: none;
}

.cont4 li{
    color: gray;
    padding-left: -20px;
}

.cont4 h4{
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
</head>

<body>
    <header class="header">
        <div class="bgimg">
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
                   @auth
                   <form method="post" action="/logout">
                    @csrf
                   <li class="nav-item">
                        <button class="nav-link bg-transparent " style="border: none;" type="submit" style="color: gray;" onMouseOut="this.style.color='gray'" onMouseOver="this.style.color='rgb(255, 208, 0)'">Logout</button>
                    </li>
                    </form>
                   @else
                   <li class="nav-item">
                        <a class="nav-link" style="color: gray;" onMouseOut="this.style.color='gray'" onMouseOver="this.style.color='rgb(255, 208, 0)'" href="/signinpage"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
                    </li>
                   @endauth
                    <li class="nav-item">
                        <a class="nav-link" style="color: gray;" onMouseOut="this.style.color='gray'" onMouseOver="this.style.color='rgb(255, 208, 0)'" href="/signup"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign up</a>
                    </li>
                    <button class="btn"><a href="/adddetails" style="color: white; text-decoration:none;"> Post a Request</a></button>
                    <button class="btn"><a href="/myprofile" style="color: white; text-decoration:none;"> Add a service</a></button>
                    
                    
                </ul>
              </div>
            </div>
        </nav>
          <div class="container headerset">
              <h1>Get the job <span>done</span><img src="./img/icon-4.png"> </h1>
              <h4>More than 10,000 freelancers to perform your any kind of task.</h4>
              <form class='d-flex flex-sm-row flex-column'>
                <input type="text" class='border-0 form-control mt-2 mt-sm-0 d-inline' placeholder="keywords" style="width: 500px; height: 60px; box-shadow: 0 0 5px 0 rgba(0,0,0, .25);">
                <button class='btn  mr-sm-1 mt-4 mt-sm-0  d-inline' style="width: 100px; height: 60px; background-color: rgb(255, 208, 0); color: white;">Search</button>
            </form>

          </div>

          <div class="container cont-1">
            <div class="row">
                <div class="col-md-4 col-cont1">
                    <img src="./img/icon-1.png.webp">
                    <p>Find a Freelancer</p>
                </div>
                <div class="col-md-4 col-cont1">
                    <img src="./img/icon-2.png.webp">
                    <p>Check the Reviews</p>
                </div>
                <div class="col-md-4 col-cont1">
                    <img src="./img/icon-3.png.webp">
                    <p>Pay with Confidence</p>
                </div>
            </div>
          </div>
        </div>
    </header>
    <div class="cont-2">
        <h2>Top Categories</h2>
        <h4>Explore the most popular service categories.</h4>
    </div> 
    <div class="container cont-3">
        <div class="row">
            <div class="col-md-3 col-cont3 hover-zoom">
                <img src="./img/icon-8.png">
                <h4>Design & Graphics</h4>
            </div>
            <div class="col-md-3 col-cont3">
                <img src="./img/icon-7.png">
                <h4>Digital Marketing</h4>
            </div>
            <div class="col-md-3 col-cont3">
                <img src="./img/icon-6.png">
                <h4 class="justify-content-center">Programming</h4>
            </div>
            <div class="col-md-3 col-cont3">
                <img src="./img/icon-5.png">
                <h4>Video & Animation</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 col-cont3 hover-zoom">
                <img src="./img/icon-4-1.png">
                <h4>Music & Audio</h4>
            </div>
            <div class="col-md-3 col-cont3">
                <img src="./img/icon-9.png">
                <h4>Translation</h4>
            </div>
            <div class="col-md-3 col-cont3">
                <img src="./img/icon-10.png">
                <h4 class="justify-content-center">Social Media</h4>
            </div>
            <div class="col-md-3 col-cont3">
                <img src="./img/icon-11.png">
                <h4>Mobile & Apps</h4>
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