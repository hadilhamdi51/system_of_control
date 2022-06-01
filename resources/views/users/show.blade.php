
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

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"  rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"  rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
	<title>Details</title>
<style>
	* {
    margin: 0;
    padding: 0
}

body {
    background-color: rgb(40, 43, 60);
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
#hadil{
	
}
</style>
	
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

	





	  <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
		   <div class="card p-4"> <div class=" image d-flex flex-column justify-content-center align-items-center"> 
			   <button class="btn btn-secondary"> 
				   <img src="{{ $user->image}}" height="100" width="100" /></button>
				    <span class="name mt-3">{{ $user->name }}</span>
					 <span class="idd">{{ $user->email }}</span> 
					 <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
						 <span class="idd1"></span> 
						 <span><i class=""></i>
						</span> </div> <div class="d-flex flex-row justify-content-center align-items-center mt-3">
							 <span class="number"> <span class="follow"></span>
							</span> </div> <div class=" d-flex mt-2">
								
								 </div> <div class="text mt-3">
									  <span><br><br>  </span> 
									</div>
									 <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
										  <span><i class="fa fa-twitter"></i>
										</span> 
										<span><i class="fa fa-facebook-f"></i></span> 
										<span><i class="fa fa-instagram"></i></span> 
										<span><i class="fa fa-linkedin"></i></span> </div> 
										<div class=" px-2 rounded mt-4 date "> 
											<span class="join">Joined {{$user->created_at}}</span> 
										</div>
									 </div> 
									</div>
</div>
































	

	<script src="js/app.js"></script>















	<script>

	</script>

</body>

</html>


