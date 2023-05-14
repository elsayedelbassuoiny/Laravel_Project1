<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('css/student.css')}}">

</head>
<body>
    <header>
        <a href="#" class="logooo"><i class='bx bxs-home'></i>FCI-Student Management System</a>
        <ul class="navlist1">
            <li><a href="" class="active">Home</a></li>
            <li><a href="" >About Us</a></li>
            <li><a href="" >Our Customer</a></li>
            <li><a href="" >Our Shop</a></li>
            <li><a href="/contact" >Contact Us</a></li>
            {{-- <li><a href="/login/confirm_subject" >Subscribe</a></li> --}}
        </ul>
    </header>

      <div class="slider">

            <div class="slides">
            <img src="{{asset('images/st1.jpg')}}" alt="Image 1">
            <img src="{{asset('images/st2.jpg')}}" alt="Image 2">
            <img src="{{asset('images/st3.jpg')}}" alt="Image 3">

            </div>

            <div class="title">
            <h1>Learning Today,</h1>
            <h1>Leading Tomorrow</h1>
            <h4 class="pragraph">Lorem i aliquid. Est similique fugit facilis quis que!<br>Lorem i aliquid. Est similique</h4>
            </div>


      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="main_container">
        <div class="card">
            <div class="container">
                <h3><b>Show Subject</b></h3>
                <p>All Available Subject</p>
                <a href="/confirm_subject"><button class="button button3">All Subjects</button></a>

            </div>
        </div>

        {{-- <div class="card">
            <div class="container">
                <h3><b>Download</b></h3>
                <p> All Pdfs</p>
                <a href=""><button class="button button3">All Pdfs</button></a>
            </div>
        </div> --}}
      </div>



<script src="{{asset('js/student.js')}}"></script>
</body>
</html>
