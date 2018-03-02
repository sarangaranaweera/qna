@extends('layouts.app2')

@section('content')


			<div class="col-md-9">
				<div class="row">
					<div class="user-profile">
						<div class="col-md-12">
							<div class="page-content">
								<h2>About {{Auth::user()->name}}</h2>
								<div class="user-profile-img"><img src="../ask-me/images/demo/admin.jpg" alt="admin" width="60" height="60"></div>
								<div class="ul_list ul_list-icon-ok about-user">
									<ul>
										<li><i class="icon-plus"></i>Registerd : <span>Jan 10, 2014</span></li>
										<li><i class="icon-map-marker"></i>Country : <span>Egypt</span></li>
										<li><i class="icon-globe"></i>Website : <a target="_blank" href="https://2code.info/">view</a></li>
									</ul>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada .</p>
								<div class="clearfix"></div>
								<span class="user-follow-me">Follow Me</span>
								<a href="#" original-title="Facebook" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#3b5997" span_hover="#2f3239" style="height: 30px; width: 30px; font-size: 15px; line-height: 30px; background-color: rgb(59, 89, 151); border-style: solid;">
											<i class="social_icon-facebook"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Twitter" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#00baf0" span_hover="#2f3239" style="height: 30px; width: 30px; font-size: 15px; line-height: 30px; background-color: rgb(0, 186, 240); border-style: solid;">
											<i class="social_icon-twitter"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Linkedin" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#006599" span_hover="#2f3239" style="height: 30px; width: 30px; font-size: 15px; line-height: 30px; background-color: rgb(0, 101, 153); border-style: solid;">
											<i class="social_icon-linkedin"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Google plus" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#c43c2c" span_hover="#2f3239" style="height: 30px; width: 30px; font-size: 15px; line-height: 30px; background-color: rgb(196, 60, 44); border-style: solid;">
											<i class="social_icon-gplus"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Email" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#000" span_hover="#2f3239" style="height: 30px; width: 30px; font-size: 15px; line-height: 30px; background-color: rgb(0, 0, 0); border-style: solid;">
											<i class="social_icon-email"></i>
										</span>
									</span>
								</a>
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
						<div class="col-md-12">
							<div class="page-content page-content-user-profile">
								<div class="user-profile-widget">
									<h2>User Stats</h2>
									<div class="ul_list ul_list-icon-ok">
										<ul>
											<li><i class="icon-question-sign"></i><a href="user_questions.html">Questions<span> ( <span>30</span> ) </span></a></li>
											<li><i class="icon-comment"></i><a href="user_answers.html">Answers<span> ( <span>10</span> ) </span></a></li>
											<li><i class="icon-star"></i><a href="user_favorite_questions.html">Favorite Questions<span> ( <span>3</span> ) </span></a></li>
											<li><i class="icon-heart"></i><a href="user_points.html">Points<span> ( <span>20</span> ) </span></a></li>
											<li><i class="icon-asterisk"></i>Best Answers<span> ( <span>2</span> ) </span></li>
										</ul>
									</div>
								</div><!-- End user-profile-widget -->
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
					</div><!-- End user-profile -->
				</div><!-- End row -->
				<div class="clearfix"></div>
				<div class="page-content">
					<div class="user-stats">
						<div class="user-stats-head">
							<div class="block-stats-1 stats-head">#</div>
							<div class="block-stats-2 stats-head">Today</div>
							<div class="block-stats-3 stats-head">Month</div>
							<div class="block-stats-4 stats-head">Total</div>
						</div>
						<div class="user-stats-item">
							<div class="block-stats-1">Questions</div>
							<div class="block-stats-2">5</div>
							<div class="block-stats-3">20</div>
							<div class="block-stats-4">100</div>
						</div>
						<div class="user-stats-item">
							<div class="block-stats-1">Answers</div>
							<div class="block-stats-2">30</div>
							<div class="block-stats-3">150</div>
							<div class="block-stats-4">1000</div>
						</div>
						<div class="user-stats-item user-stats-item-last">
							<div class="block-stats-1">Visitors</div>
							<div class="block-stats-2">100</div>
							<div class="block-stats-3">3000</div>
							<div class="block-stats-4">5000</div>
						</div>
					</div><!-- End user-stats -->
				</div><!-- End page-content -->
			</div><!-- End main -->


			
		

@endsection