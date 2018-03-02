<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from 2code.info/demo/html/ask-me-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2018 08:48:08 GMT -->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Code Change</title>
	<meta name="description" content="Ask me Responsive Questions and Answers Template">
	<meta name="author" content="2code.info">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="/css/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="/css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="/css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="/images/favicon.png">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	

	<header id="header">
		<section class="container clearfix">
			<div class="logo"><a href="index-2.html"><img alt="" src="/images/logo.png"></a></div>
			<nav class="navigation">
				<ul>
					<li class="current_page_item"><a href="index-2.html">Home</a>
						<ul>
							<li class="current_page_item"><a href="index-2.html">Home</a></li>
							<li><a href="index_2.html">Home 2</a></li>
							<li><a href="index_boxed_1.html">Home Boxed 1</a></li>
							<li><a href="index_boxed_2.html">Home Boxed 2</a></li>
							<li><a href="index_no_box.html">Home No Box</a></li>
						</ul>
					</li>
					<li class="ask_question"><a href="ask_question.html">Ask Question</a></li>
					<li><a href="cat_question.html">Questions</a>
						<ul>
							<li><a href="cat_question.html">Questions Category</a></li>
							<li><a href="single_question.html">Question Single</a></li>
							<li><a href="single_question_poll.html">Poll Question Single</a></li>
						</ul>
					</li>
					<li><a href="user_profile.html">User</a>
						<ul>
						@guest
							<li style="color: #000;"><a class="" href="{{ route('login') }}">Login</a></li>
                            <li><a class="" href="{{ route('register') }}">Register</a></li>
                        @else
                        <li><a class="dropdown-item" href="{{ route('profile')}}">Profile</a></li>
                        <li>
                        	<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                            </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>

                        @endguest
							
						</ul>
					</li>
					
				</ul>
			</nav>
		</section><!-- End container -->
	</header><!-- End header -->
	
	<div class="section-warp ask-me">
		<div class="container clearfix">
			
		</div><!-- End container -->
	</div><!-- End section-warp -->
	
	<section class="container main-content">
		<div class="row">
		 	@yield('content')

		 	@include('layouts.sidebar')
		</div>
	</section>
	
	<footer id="footer">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget widget_contact">
						<h3 class="widget_title">Where We Are ?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu.</p>
						
					</div>
				</div>
				<div class="col-md-2">
					<div class="widget">
						<h3 class="widget_title">Quick Links</h3>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Ask Question</a></li>
							<li><a href="#">About</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget">
						<h3 class="widget_title">Popular Questions</h3>
						<ul class="related-posts">
							<li class="related-item">
								<h3><a href="#">This is my first Question</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
								<div class="clear"></div><span>Feb 22, 2018</span>
							</li>
							
						</ul>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="widget widget_twitter">
						<h3 class="widget_title">Latest Tweets</h3>
						<div class="tweet_1"></div>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</footer><!-- End footer -->
	<footer id="footer-bottom">
		<section class="container">
			<div class="copyrights f_left">Copyright 2018 Ask me | <a href="#">Code Change</a></div>
			<div class="social_icons f_right">
				<ul>
					<li class="twitter"><a original-title="Twitter" class="tooltip-n" href="#"><i class="social_icon-twitter font17"></i></a></li>
					<li class="facebook"><a original-title="Facebook" class="tooltip-n" href="#"><i class="social_icon-facebook font17"></i></a></li>
					<li class="gplus"><a original-title="Google plus" class="tooltip-n" href="#"><i class="social_icon-gplus font17"></i></a></li>
					<li class="youtube"><a original-title="Youtube" class="tooltip-n" href="#"><i class="social_icon-youtube font17"></i></a></li>
					<li class="skype"><a original-title="Skype" class="tooltip-n" href="skype:#?call"><i class="social_icon-skype font17"></i></a></li>
					<li class="flickr"><a original-title="Flickr" class="tooltip-n" href="#"><i class="social_icon-flickr font17"></i></a></li>
					<li class="rss"><a original-title="Rss" class="tooltip-n" href="#"><i class="social_icon-rss font17"></i></a></li>
				</ul>
			</div><!-- End social_icons -->
		</section><!-- End container -->
	</footer><!-- End footer-bottom -->
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/js/jquery.easing.1.3.min.js"></script>
<script src="/js/html5.js"></script>
<script src="/js/twitter/jquery.tweet.js"></script>
<script src="/js/jflickrfeed.min.js"></script>
<script src="/js/jquery.inview.min.js"></script>
<script src="/js/jquery.tipsy.js"></script>
<script src="/js/tabs.js"></script>
<script src="/js/jquery.flexslider.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="/js/jquery.scrollTo.js"></script>
<script src="/js/jquery.nav.js"></script>
<script src="/js/tags.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<script src="/js/custom.js"></script>
<!-- End js -->

</body>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2018 08:48:34 GMT -->
</html>