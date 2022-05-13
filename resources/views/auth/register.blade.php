<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/icons/iset.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Signup</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				
					<div class="d-table-cell align-middle">
					@if(Session::get('success'))
             <div  class="alert alert-success" role="alert">
                {{ Session::get('success') }}
             </div>
           @endif

           @if(Session::get('fail'))
             <div class="alert alert-danger" role="alert">
                {{ Session::get('fail') }}
             </div>
           @endif
						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							
						</div>
						

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="{{route('auth.save')}}" method="post">
								

                                        @csrf
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" value="{{old('name')}}" />
											<span class="text-danger">@error('name'){{$message}}@enderror</span>
										</div>
					
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" value="{{old('email')}}" />
											<span class="text-danger">@error('email'){{$message}}@enderror</span>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password"   />
											<span class="text-danger">@error('password'){{$message}}@enderror</span>
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign up</button>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>