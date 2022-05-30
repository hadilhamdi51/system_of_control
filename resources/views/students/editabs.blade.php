
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
    <link rel="stylesheet" href="css/style.css">

	<title>Edit Student</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('students') }}
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
<div class="card shadow-lg  rounded">
    <div class="card-header shadow-lg bg-dark text-white">
        <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;Edit Student
    </div>

    <div class="card-body">



    <form action="{{ route('students.editeabs', $student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        @method('PUT')
                


                            <div class="form-group mb-3">
                                <label for="state" class="form-label">state</label>
                                <input type="text" name="state" value="{{ old('state') ?? $student->state }}" class="form-control @error('state') is-invalid @enderror" id="state" aria-describedby="emailHelp">
                                @error('state')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>





                            <button type="submit" class="btn btn-danger"><i class="fas fa-edit"></i>Modifier</button>
                
                
            <button type="reset" class="btn btn-secondary"><i class="bi bi-x-circle-fill"></i>&nbsp;&nbsp;cancel</button>
        </form>
    </div>
</div>
</body></html>