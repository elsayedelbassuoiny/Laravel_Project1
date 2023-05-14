<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
  <div class="con">
        <nav class="navbar ">
            <div class="container">
            <a class="navbar-brand" href="#">
                <!-- <img src="./Images/Capture.PNG" alt="Logo" width="50" height="30" class="d-inline-block align-text-top"> -->
                FCI-Student Management System
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#"><p class="pp">Home</p></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link ">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ">Contact</a>
                </li>
            </ul>
            </div>
        </nav>

        <section class="adminHome">
            <div class="adminText">
                <h3><span>Controll,<span class="manage"> Manage</span> Student System</span></h3>
                <h3><span>Welcome To Admin Page</span></h3>
                <button type="button" class="btn btn-info">Start</button>
            </div>

            <div class="adminImg">
                <img src="{{asset('images/admin.jpg')}}" alt="">
            </div>

        </section>
    </div>
    <div class="con1">
        <br>
        <h3>Landing pages</h3>
        <h5>Choose from pre-built layouts of our unique landing pages</h5>
        <section class="adminControl">
          <a href="/login/adding_department">
            <div class="card" style="width: 18rem;height: 16rem;">
                <img src="{{asset('images/course.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-text">Adding Department</h4>

                </div>
              </div>
          </a>
          <a href="/subjects">
            <div class="card" style="width: 18rem;height: 16rem;">
                <img src="{{asset('images/subject.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Adding Subject</h4>

                </div>
              </div>
          </a>
          <a href="">
            <div class="card" style="width: 18rem; height: 16rem;">
                <img src="{{asset('images/attend.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-text">Adding Subject</h4>
                </div>
              </div>
          </a>

        </section>
        <section class="adminControl2">
            <a href="">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset('images/account.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">

                  </div>
                </div>
            </a>
            <a href="">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset('images/img.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">

                  </div>
                </div>
            </a>


          </section>
    </div>

</body>
</html>
