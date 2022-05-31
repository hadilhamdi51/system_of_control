<html>
    <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/iset.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Create</title>
    
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

                    <h1>Ajouter Reclam</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
								<form action="{{route('reclamations.store')}}" method="POST">
								@csrf
                                    <div class="mb-3">
                                    <label for="user_id">user_id</label>
    <input id="user_id" type="text" name="user_id">
										</div>
                                        <div class="mb-3">
                                        <label for="composant_id">composant_id</label>
    <input id="composant_id" type="text" name="composant_id">
										</div>
                                        <div class="mb-3">
                                        <label for="classroom_id">classroom_id</label>
    <input id="classroom_id" type="text" name="classroom_id">
										</div>
										<div class="mb-3">
                                        <label for="etat">etat</label>
    <input id="etat" type="text" name="etat">
										</div>
										<div class="mb-3">
                                        <label for="description">Description</label>
                     <textarea id="description" type="text" name="description" row="4"></textarea>
										</div>
										
										
										<div class="text-center mt-3">
                                        <input type="submit" value="Ajouter" class="btn btn-outline-warning float-center">
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
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



