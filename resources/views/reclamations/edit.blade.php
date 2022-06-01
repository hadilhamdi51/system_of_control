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

	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">


	<title>Edit</title>

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
                    <h1 class="h2">Edit Complaint</h1></div>
                    <div class="card">
							<div class="card-body">
								<div class="m-sm-4">
							
										<div class="mb-3">
                                        <div class="card text-center">
    <div class="card-header  bg-grey text-dark" class="card-header" >
        Edit My complaint
    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('reclamations') }}
        </h2>
    </x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="{{ route('reclamations.update', $reclamations->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <strong><label for="description" class="form-label">description</label></strong>
          <textarea type="text" name="description" value="{{ old('description') ?? $reclamations->description }}" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
          @error('description')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
        <strong><label for="etat" class="form-label">Etat</label><strong>
          <input type="text" name="etat" value="{{ old('etat') ?? $reclamations->etat }}" class="form-control @error('etat') is-invalid @enderror" id="etat" >
          @error('etat')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        
        </div>
        
       
        
       <div class="card-footer text-muted">
        <input class="card-header shadow-lg bg-danger text-white" type="submit" value="Edit ">
        <input class="card-header shadow-lg bg-info text-white" type="submit"  value="Back ">
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