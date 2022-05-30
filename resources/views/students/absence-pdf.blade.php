<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1> Liste des etudiants</h1>
<h5><div class="card-header mt-9">

										<!--<span class="badge rounded-pill bg-warning text-dark" id="nb_etudiants">< ?= cou nt( $stud ents); ?> etudiants</span>-->
                    <br>
                    <?php

echo "today is " .date("l").":".date("Y-m-d h:i:sa");
?>	
								</div></h5>

<table id="customers">
  <tr>
  <th >first_name</th>
  <th >last_name</th>
  <th >department_id</th>
  <th >classe</th>
  <th >state</th>
  </tr>


    @foreach($students as $student)
        <tr>
            <td >{{$student->first_name}}</td>
            <td >{{$student->last_name}}</td>
            <td >{{$student->department_id}}</td>
            <td >{{$student->class}}</td>
            <td >{{$student->state}}</td>
         </tr>
    @endforeach
</table>

</body>
</html>
    