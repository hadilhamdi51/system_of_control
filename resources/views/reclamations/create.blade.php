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

	<title>Reclamation</title>

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
							<h1 class="h2">Reclamation</h1>
							
						</div>
                        <form  class="m-sm-4" action="{{ route('reclamations.store') }}"  method="post" enctype="multipart/form-data">
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form  method="post">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Description</label>
											<label for="date" value="description">Description</label>
                                   <textarea class="form-control form-control-user" id="description" name="description"
                                       placeholder="" required> </textarea>
										</div>
					
										<div class="mb-3">
                                        <label for="date" value="description">id user</label>
						   <select  class="form-control form-control-user" id="user_id" name="user_id"
                                       required>
									   @foreach($users as $user)
									   <option value={{ $user->id }} >{{ $user->name }}</option>
                                @endforeach
									</select>
                                </div>
										<div class="mb-3">
                                        <label for="number" value="user_id">composant </label>
                                   <select  class="form-control form-control-user" id="composant_id" name="composant_id"
                                       required>
									   @foreach($composants as $composant)
									   <option value={{ $composant->id }} >{{ $composant->name }}</option>
                                @endforeach
									</select>
                                </div>
                                <div class="mb-3">
                                <label for="number" value="user_id">Classroom </label>
                                   <select  class="form-control form-control-user" id="classroom_id" name="classroom_id"
                                       required>
									   @foreach($classes as $classe)
									   <option value={{ $classe->id }} >{{ $classe->name }}</option>
									   @endforeach
									</select>
                                </div>

										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                                            <button type="submit" class="btn btn-lg btn-primary">Annuler</button>
                                        </div>
                       </form>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>