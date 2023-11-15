<!doctype html>
<html lang="en">
  <head>
  	<title>Smart Kolok: Lupa Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== FAVICON ICON =======-->
    <link rel="icon" href="{{asset('images/welcome/favicon.png')}}" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="{{asset('css/forget-style.css')}}">

    <style>
        .bounce {
        animation: bounce 2s ease;
        }
        @keyframes bounce {
            0% {
                opacity: 0;
                transform: scale(.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% { transform: scale(.9); }
            100% { transform: scale(1); }
        }
    </style>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon bounce  d-flex align-items-center justify-content-center">
                  <i class="fas fa-check text-white"></i>
		      	</div>
		      	<h3 class="text-center mb-4">Reset Password Sukses</h3>
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

