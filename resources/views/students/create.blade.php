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

	<title>ADD Student</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
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
        <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;ADD Student
    </div>

    <div class="card-body">

<form action="{{route('students.store')}}" method="POST">
    <br>
    @csrf
    <label for="first_name">first name:</label>
    <input id="first_name" type="text" name="first_name">
    <br>
    <br>
    <label for="last_name">last_name</label>
    <input id="last_name" type="text" name="last_name">
    <br> <br>
    <label for="email">email</label>
    <input id="email" type="mail" name="email">
    <br> <br>
    <label for="department_id">department_id</label>
    <input id="department_id" type="text" name="department_id">
    <br>
    <br>
    <label for="class">class</label>
    <input id="class" type="text" name="class">
    <br> <br>
    <label for="state">state</label>
    <input id="state" type="text" name="state">
    <br>
    <br>

    <button type="submit"  value="add Student" class="btn btn-danger"><i class="bi bi-person-plus"></i>  ADD Student</button>

</form>
    </div>
</div>
</body></html>