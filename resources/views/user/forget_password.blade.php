<!doctype html>
<html lang="en">
  <head>
  	<title>Smart Kolok: Lupa Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--====== FAVICON ICON =======-->
    <link rel="icon" href="{{asset('images/welcome/favicon.png')}}" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('css/forget-style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Reset Password</h3>
				@if (session('error'))
                <div class="text-danger my-2">{{session("error")}}</div>
                @endif
				<form action="" method="post" class="login-form">
                @csrf
		      		<div class="form-group">
		      			<input type="password" class="form-control rounded-left" placeholder="Password" required name="password">
		      		</div>
                    <div class="form-group d-flex">
                    <input type="password" class="form-control rounded-left" placeholder="Ketik ulang password" required name="confirm">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Reset</button>
                    </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

    <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/forget-main.js')}}"></script>

	</body>
</html>

