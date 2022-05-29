<h1>Add Reclam</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<form action="{{route('reclamations.store')}}" method="POST">
    <br>
    @csrf
   
    <label for="description">Description</label>
    <input id="description" type="text" name="description">
    <br> <br>
	<label for="user_id">user_id</label>
    <input id="user_id" type="text" name="user_id">
    <br>
    <br>
    <label for="composant_id">composant_id</label>
    <input id="composant_id" type="text" name="composant_id">
    <br> <br>
    <label for="classroom_id">classroom_id</label>
    <input id="classroom_id" type="text" name="classroom_id">
    <br>
    <br>
    
    <input type="submit" value="add reclam">
</form>