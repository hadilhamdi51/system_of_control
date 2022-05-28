<h1>ADD User</h1>
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
    <label for="name">name:</label>
    <input id="name" type="text" name="name">
    <br>
    <br>
    <label for="password">password</label>
    <input id="password" type="password" name="password">
    <br> <br>
    <label for="email">email</label>
    <input id="email" type="mail" name="email">
    <br> <br>
   
    
    <input type="submit" value="add User">
    
</form>