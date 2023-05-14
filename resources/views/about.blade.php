<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>FCI-Student Management System </title>
    <meta name="keywords" content="FCI Management System">
    <meta name="description" content="Student Management System For All Level And Doctors">
    <meta name="author" content="ElSayed ElBassuoiny">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/logo2.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('images/logo2.png')}}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- Pogo Slider CSS -->
    {{-- <link rel="stylesheet" href="{{asset('css/pogo-slider.min.css')}}" /> --}}
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{asset('images/loader.gif')}}" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo2.png')}}" alt="image"></a>
								STUDENT MANAGEMENT SYSTEM

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="/studentwelcome">Home</a></li>
                        <li><a class="nav-link" href="#">Categories</a></li>
                        <li><a class="nav-link" href="#">Categories</a></li>
                        <li><a class="nav-link" href="/about">About</a></li>
						<li><a class="nav-link" href="/contact">Contact us</a></li>
						<li><a class="nav-link" href="#">Login</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="{{asset('images/search_icon.png')}}" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

	<!-- section -->

	<section class="inner_banner">
	  <div class="container">
	      <div class="row">
		      <div class="col-12">
			     <div class="full">
				     <h3>About Site</h3>
				 </div>
			  </div>
		  </div>
	  </div>
	</section>

	<!-- end section -->

	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Welcome To</span> FCI Community </h2>
                        </div>
						<div class="full">
						  <p>Faculty of Computers and Informations FCI <br>
						     Menofia University President of the University, Dr. Ahmed Al-Qasid<br>
							 Dean of the College, Dr. Hatem El-Sayed <br>
							 Vice Dean for Community Service, Dr. Ashraf El-Sisi <br>
							 Welcom to our Faculty
						  </p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="#">About more</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="{{asset('images/img2.png')}}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Popular </span>Categories</h2>
                        </div>
					  </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive" src="{{asset('images/p1.png')}}" alt="#" />
					   <h4>Course Registration</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{asset('images/p2.png')}}" alt="#" />
						<h4>Courses Assessment</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{asset('images/p3.png')}}" alt="#" />
						<h4>Cumulative appreciation</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">

		   <div class="row">

		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="{{asset('images/logo2.png')}}" alt="#" />
					 </div>
					 <div class="full white_fonts">

					 </div>
				 </div>
			  </div>

			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Quick links</h3>
						    <ul>
							  <li><a href="#">> Join Us</a></li>
							  <li><a href="#">> Maintenance</a></li>
							  <li><a href="#">> Language Packs</a></li>
							  <li><a href="#">> LearnPress</a></li>
							  <li><a href="#">> Release Status</a></li>
							</ul>
						 </div>
				 </div>

				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Newsletter</h3>
							 <p>Faculty of Computers and Informations FCI</p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					</div>

			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contact us</h3>
							 <ul class="full">
							   <li><img src="{{asset('images/i5.png')}}"><span>Shepin El-Kom<br>Menofia</span></li>
							   <li><img src="{{asset('images/i6.png')}}"><span>FCI@gmail.com</span></li>
							   <li><img src="{{asset('images/i7.png')}}"><span>048/22@@@@@</span></li>
							 </ul>
						 </div>
					</div>

		   </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2019 design by html.design</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
	<script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.pogo-slider.min.js')}}"></script>
    <script src="{{asset('js/slider-index.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/images-loded.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>
