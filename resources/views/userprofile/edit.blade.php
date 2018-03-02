@extends('layouts.app2')

@section('content')
<div class="col-md-9">
				<div class="page-content">
					<div class="boxedtitle page-title"><h2>Edit Profile</h2></div>
					
					<div class="form-style form-style-4">
						<form method="POST" action="/user/edit">
							@csrf
							<div class="form-inputs clearfix">
								<p>
									<label>First Name</label>
									<input type="text" name="first_name" value="{{ $user->first_name }}">
								</p>
								<p>
									<label>Last Name</label>
									<input type="text" name="last_name" value="{{ $user->last_name }}">
								</p>
								<p>
									<label class="required">E-Mail<span>*</span></label>
									<input type="email" readonly value="{{ $user->email }}">
								</p>
								<p>
									<label>Website</label>
									<input type="text" value="{{ $user->website }}">
								</p>
								<!-- <p>
									<label class="required">Password<span>*</span></label>
									<input value="" type="password">
								</p>
								<p>
									<label class="required">Confirm Password<span>*</span></label>
									<input value="" type="password">
								</p> -->
								<p>
									<label>Country</label>
									<select name="country">
										<option></option>
										@foreach($countries as $country)
											<option value="{{ $country->id }}"> {{ $country->name }} </option>
										@endforeach
									</select>
								</p>
							</div>
							<div class="form-style form-style-2">
								<div class="user-profile-img"><img src="/images/avatar.jpg" alt="admin"></div>
								<p class="user-profile-p">
									<label>Profile Picture</label>
									</p><div class="fileinputs">
										<input class="file" type="file">
										<div class="fakefile">
											<button type="button" class="button small margin_0" style="">Select file</button>
											<span><i class="icon-arrow-up"></i>Browse</span>
										</div>
									</div>
								<p></p>
								<div class="clearfix"></div>
								<p>
									<label>About Yourself</label>
									<textarea cols="58" rows="8" name="about_me">{{ $user->about_me }}</textarea>
								</p>
							</div>
							<div class="form-inputs clearfix">
								<p>
									<label>Facebook</label>
									<input type="text" name="facebook" value="{{ $user->facebook }}">
								</p>
								<p>
									<label>Twitter</label>
									<input type="text" name="twitter" value="{{ $user->twitter }}">
								</p>
								<p>
									<label>Linkedin</label>
									<input type="email" name="linkedin" value="{{ $user->linkedin }}">
								</p>
								<p>
									<label>Google plus</label>
									<input type="text" name="google_plus" value="{{ $user->google_plus }}">
								</p>
							</div>
							<p class="form-submit">
								<input value="Update" class="button color small login-submit submit" style="" type="submit">
							</p>
						</form>
					</div>
				</div><!-- End page-content -->
			</div>
	@endsection