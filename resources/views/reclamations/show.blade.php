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

	<title>Details</title>

	<link href="../css/app1.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>













































	
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Details</h1>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form  method="post">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Professor Name</label>
											<h5 class="card-title"> {{ $reclamations->id }}</h5>
										</div>
					
										<div class="mb-3">
											<label class="form-label">Descreption</label>
											<h5 class="card-title">{{ $reclamations->description }}</h5>
										</div>
										<div class="mb-3">
											<label class="form-label">Created_at</label>
											<h5 class="card-title">{{ $reclamations->created_at }}</h5>
											<h5 class="card-title">{{ $reclamations->updated_at }}</h5>
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-outline-danger"><a href="{{ route('reclamations.index') }}"></a>BACK</button>
											<button class="btn btn-outline-success" type="submit" ><a href="{{ route('reclamations.updateEtat', $reclamations->id) }}">DONE</a></button>
											
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

	<script src="js/app1.js"></script>

</body>

</html>