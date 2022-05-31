
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	
	<link rel="shortcut icon" href="../img/icons/iset.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">


	<title>Details</title>

	
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

	<section class="vh-100" style="background-color: #eee;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-md-12 col-xl-4">
	  
			  <div class="card" style="border-radius: 15px;">
				<div class="card-body text-center">
				  <div class="mt-3 mb-4">
					<img src="{{ $user->image }}"
					  class="rounded-circle img-fluid" style="width: 100px;" />
				  </div>
				  <h4 class="mb-2">{{ $user->name }}</h4>
				  <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
					  href="#!">mdbootstrap.com</a></p>
				  <div class="mb-4 pb-2">
					<button type="button" class="btn btn-outline-primary btn-floating">
					  <i class="fab fa-facebook-f fa-lg"></i>
					</button>
					<button type="button" class="btn btn-outline-primary btn-floating">
					  <i class="fab fa-twitter fa-lg"></i>
					</button>
					<button type="button" class="btn btn-outline-primary btn-floating">
					  <i class="fab fa-skype fa-lg"></i>
					</button>
				  </div>
				  <button type="button" class="btn btn-primary btn-rounded btn-lg">
					Message now
				  </button>
				  <div class="d-flex justify-content-between text-center mt-5 mb-2">
					<div>
					  <p class="mb-2 h5">8471</p>
					  <p class="text-muted mb-0">Wallets Balance</p>
					</div>
					<div class="px-3">
					  <p class="mb-2 h5">8512</p>
					  <p class="text-muted mb-0">Income amounts</p>
					</div>
					<div>
					  <p class="mb-2 h5">4751</p>
					  <p class="text-muted mb-0">Total Transactions</p>
					</div>
				  </div>
				</div>
			  </div>
	  
			</div>
		  </div>
		</div>
	  </section>













































	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Details Users</h1>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form  method="post">
                                        @csrf
										<div class="mb-3">
										<label class="h3">Name</label>

    
                 <h5 class="card-title">{{ $user->name }}</h5>
                  
                        </div>
                        <div>
                        <label class="h3">Email</label>
                 <h5 class="card-title">{{ $user->email }}</h5><br>
      
                         </div>
                           </div>
										<div class="text-center mt-3">
												<!-- <button type="submit" class="btn btn-outline-danger">BACK</button>
											<button type="submit" class="btn btn-outline-success">DONE</button>
										<button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
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


