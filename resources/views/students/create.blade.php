<h1>ADD Student</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

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
    <input type="submit" value="add Student">
</form>
