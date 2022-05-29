
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">


	<title>Ajouter</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
                    <div class="text-center mt-4">
                    <h1 class="h2">ADD User</h1></div>
                    <div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									
										<div class="mb-3">
                                        <div class="card shadow-lg  rounded">
    <div class="card-header shadow-lg bg-dark text-white" >
        Add User
    </div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<form action="{{route('users.store')}}" method="POST">
    <br>
    @csrf
    <strong><label for="name">Name:</label></strong>
    <input id="name" type="text" name="name">
    <br>
    <br>
    <strong><label for="password">Password</label></strong>
    <input id="password" type="password" name="password">
    <br> <br>
    <strong><label for="email">Email</label></strong>
    <input id="email" type="email" name="email">
    <br> <br>
   
    
    <input class="card-header shadow-lg bg-dark text-white" type="submit" style="float: right;"  value="Back ">
    <input class="card-header shadow-lg bg-dark text-white" type="submit" value="add ">
    </div>
    
   

    
    
</form>
</div>
</div>
</div>
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






























