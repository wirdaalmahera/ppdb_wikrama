<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}" />
</head>
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="/"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="POST" action="{{route('login.auth')}}">
						@csrf
						<h3>Login</h3>
						<input type="text" placeholder="USERNAME">
						<input type="text" placeholder="PASSWORD">
						<button class="submit">Login</button>
					</form>
				</div>
			</div>
				<div class="right-inductor"><img src="{{asset('assets/img/halaman.jpg')}}" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>