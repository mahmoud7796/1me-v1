<!doctype html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	  <style type="text/css">
	  @import url("{{asset('assets/css/style.css')}}");

	  body {

}
      </style>
    <title>register Page</title>
  </head>

<body>
<section class="row">
	<div class="col col-sm ">
	</div>

  <div class="col col-sm ml-5 pl-5" id="col1" >
	<div class="container">
		<div class="row mt-5 pl-5 mb-5 pb-5">
            <a href="{{route('landingPage')}}">
                <img src="{{asset('assets/img/logo.png')}}" width="80" height="80" alt=""/>
            </a>		</div>
		<div class="row mt-5 mb-5 pb-5 ">
	  <img src="{{asset('assets/img/Sign in ~ Register Illustration.png')}}" width="263" height="241" alt=""/>
		</div>
		<div class="row mt-5 mb-5 pb-5 pr-5">
		<p class="font-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted" id="text1">1Me will Keep your Contacts Secured in our Data base</p>
		</div>

	  </div>
  </div>

	<div class="col col-8 ">

		 <div class="row ml-5 pl-5 pt-5 ">

		<div class="col d-flex justify-content-end pr-5 ">
			 <button type="button" class="btn btn-secondary"> AR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
</svg></button>
			</div>
		</div>

	    <div class="row ml-5 pl-5 ">

		<div class="col d-flex justify-content-center text-center ">
			<h5 class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo mt-5">Create a New Account</h5>
			</div>
		</div>

		<div class="row ml-5 pl-5">

		<div class="col d-flex justify-content-center text-center ">
			<p class="efont-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted">Keep Your Contacts in 1 Place. Access Them From Any Device</p>
			</div>
		</div>
<div style="text-align: center">
    @include('site.includes.alerts.errors')
    @include('site.includes.alerts.success')
</div>
		<div class="row pr-5">

		<div class="col pl-5 mt-5">
			<form action="{{route('site.register.create')}}">
                @csrf
			<div class="form-group">
    <label for="exampleFormControlInput1" class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo">Register by Email</label>

    <input type="text" name="firstName" class="form-control mt-3" id="exampleFormControlInput1" placeholder="First Name">
                @error('firstName')
                <span class="text-danger">{{$message}}</span>
                @enderror
  </div>
                <div class="form-group">
                    <input type="text" name="middleName" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Middle Name">
                    @error('middleName')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <input name="lastName" type="text" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Last Name">
                    @error('lastName')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">

    <input type="email" name="email" class="form-control " id="exampleFormControlInput2" placeholder="Email Address">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
  </div>

			<div class="form-group">

    <input type="password" name="password" class="form-control " id="exampleFormControlInput3" placeholder="Password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
  </div>

				 <div class="form-group">

    <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput4" placeholder="Confirm Password">

  </div>
                <button type="submit" class="btn btn-warning mr-2">Create Account</button>

			</form>

			</div>

            <div class="col d-flex justify-content-center">
                <form>

                    <div class="row d-flex justify-content-center">
                        <div class="col d-flex justify-content-center text-center ">
                            <h5 class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo ">OR</h5>
                        </div>
                    </div>

                    <div class="row  d-flex justify-content-center">

                        <div class="col d-flex justify-content-center text-center ">
                            <p class="efont-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted">Register with Social Media</p>
                        </div>
                    </div>

                    <div class="row  d-flex justify-content-center align-content-center">
                        <div class="col d-flex justify-content-center text-center ">
                            <a href="{{route('facebook.redirect','facebook')}}">
                                <button type="button" class="btn btn-outline-primary" id="btn-1"><span class="pr-3"><svg xmlns="http://www.w3.org/2000/svg" id="Facebook" width="22" height="22" viewBox="0 0 40 40">
  <circle id="Ellipse_7" data-name="Ellipse 7" cx="20" cy="20" r="20" fill="#3c5a9a"></circle>
  <path id="Path_9" data-name="Path 9" d="M337.926,92.677H333.5c-2.629,0-5.554,1.106-5.554,4.917.013,1.328,0,2.6,0,4.031H324.9v4.84h3.136V120.4H333.8V106.373h3.8l.344-4.762H333.7s.01-2.118,0-2.733c0-1.506,1.567-1.42,1.661-1.42.746,0,2.2,0,2.568,0V92.677h0Z" transform="translate(-311.423 -86.538)" fill="#fff"></path>
</svg></span>Continue with Facebook </button>
                            </a>
                        </div>
                    </div>

                    <div class="row  d-flex justify-content-center mt-3 align-content-center">
                        <div class="col d-flex justify-content-center text-center ">
                            <button type="button" class="btn btn-outline-info pl-4 pr-4 " id="btn-1"><span class="pr-3"><svg xmlns="http://www.w3.org/2000/svg" id="Twitter" width="22" height="22" viewBox="0 0 40 40">
  <circle id="Ellipse_22" data-name="Ellipse 22" cx="20" cy="20" r="20" fill="#2daae1"></circle>
  <path id="Path_29" data-name="Path 29" d="M257.762,145.789a10.5,10.5,0,0,1-3.022.829,5.277,5.277,0,0,0,2.313-2.911,10.511,10.511,0,0,1-3.342,1.277,5.264,5.264,0,0,0-9.1,3.6,5.321,5.321,0,0,0,.136,1.2,14.939,14.939,0,0,1-10.844-5.5,5.267,5.267,0,0,0,1.628,7.024,5.237,5.237,0,0,1-2.383-.658v.066a5.264,5.264,0,0,0,4.22,5.159,5.234,5.234,0,0,1-1.386.184,5.34,5.34,0,0,1-.99-.093,5.268,5.268,0,0,0,4.914,3.654,10.594,10.594,0,0,1-7.79,2.178,14.962,14.962,0,0,0,23.035-12.6q0-.342-.016-.681A10.72,10.72,0,0,0,257.762,145.789Z" transform="translate(-224.939 -133.745)" fill="#fff"></path>
</svg></span>Continue with Twitter </button>
                        </div>
                    </div>

                    <div class="row  d-flex justify-content-center mt-3 align-content-center">
                        <div class="col d-flex justify-content-center text-center ">
                            <button type="button" class="btn btn-outline-danger pl-4 pr-4" id="btn-1"><span class="pr-3"><svg xmlns="http://www.w3.org/2000/svg" id="Gmail" width="22" height="22" viewBox="0 0 40 40">
  <circle id="Ellipse_23" data-name="Ellipse 23" cx="20" cy="20" r="20" fill="#9aa5b1"></circle>
  <g id="gmail-2" data-name="gmail" transform="translate(5.5 4.5)">
    <path id="Path_10" data-name="Path 10" d="M15.015,18.459,3.736,10.768a2.98,2.98,0,0,1-.818-3.944A2.563,2.563,0,0,1,6.6,5.947l8.275,5.643L22.3,6.017a2.556,2.556,0,0,1,3.714.7,2.989,2.989,0,0,1-.656,3.979Z" transform="translate(0 0)" fill="#ea4435"></path>
    <path id="Path_11" data-name="Path 11" d="M1.778,0H5.333V17.143A2.767,2.767,0,0,1,2.667,20h0A2.767,2.767,0,0,1,0,17.143V1.9A1.845,1.845,0,0,1,1.778,0Z" transform="translate(26.5 25.5) rotate(180)" fill="#00ac47"></path>
    <path id="Path_12" data-name="Path 12" d="M28.794,7.944c-.008-.057-.007-.116-.018-.173-.017-.087-.049-.168-.073-.253a2.938,2.938,0,0,0-.085-.285c-.018-.045-.045-.085-.065-.129a2.9,2.9,0,0,0-.191-.366c-.036-.055-.08-.1-.119-.155a2.839,2.839,0,0,0-.218-.271c-.059-.062-.126-.113-.191-.169a2.717,2.717,0,0,0-.213-.177c-.07-.049-.148-.087-.222-.129a2.591,2.591,0,0,0-.237-.127,2.543,2.543,0,0,0-.246-.082,2.4,2.4,0,0,0-.25-.074,2.54,2.54,0,0,0-.317-.034c-.067-.005-.134-.018-.2-.017a2.476,2.476,0,0,0-.375.04c-.05.008-.1.007-.15.018q-.252.082-.5.17c-.046.021-.086.052-.13.076A2.786,2.786,0,0,0,23.5,8.357v5.488L27.7,10.7a2.837,2.837,0,0,0,1.1-2.755Z" transform="translate(-2.333 0)" fill="#ffba00"></path>
    <path id="Path_13" data-name="Path 13" d="M5.167,5.5h0A2.767,2.767,0,0,1,7.833,8.357V25.5H4.278A1.845,1.845,0,0,1,2.5,23.6V8.357A2.767,2.767,0,0,1,5.167,5.5Z" transform="translate(0 0)" fill="#4285f4"></path>
    <path id="Path_14" data-name="Path 14" d="M2.539,7.944c.008-.057.007-.116.018-.173.017-.087.049-.168.073-.253a2.937,2.937,0,0,1,.085-.285c.018-.045.045-.085.065-.129a2.893,2.893,0,0,1,.191-.366c.036-.055.08-.1.119-.155a2.838,2.838,0,0,1,.218-.271c.059-.062.126-.113.191-.169a2.7,2.7,0,0,1,.213-.177c.07-.049.148-.087.222-.129a2.579,2.579,0,0,1,.237-.127,2.56,2.56,0,0,1,.246-.082,2.4,2.4,0,0,1,.25-.074,2.542,2.542,0,0,1,.317-.034c.068-.005.134-.018.2-.017a2.475,2.475,0,0,1,.375.04c.05.008.1.007.15.018a2.458,2.458,0,0,1,.254.085,2.469,2.469,0,0,1,.248.085c.046.021.086.052.13.076a2.6,2.6,0,0,1,.333.2A2.915,2.915,0,0,1,7.833,8.357v5.488L3.638,10.7A2.839,2.839,0,0,1,2.539,7.944Z" transform="translate(0 0)" fill="#c52528"></path>
  </g>
</svg></span>Continue with Gmail</button>
                        </div>
                    </div>




                </form>

            </div>

	</div>


		<div class="row ml-5 pl-5 mt-5 ">
		<div class="col d-flex justify-content-center text-center ">
			<p class="font-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted">

			Already Have an Account ?
			<a href="{{route('site.login')}}">Sign in</a>

			</p>
			</div>
		</div>

	</div>





	</section>








<script src="js/bootstrap.js"></script>

</body>
</html>
