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

<h1>A Fancy Table</h1>
@php
$number=1;
@endphp
<table id="customers">
  <tr>
  <th >#</th>
  <th >state</th>
  <th >department_id</th>
  <th >classe</th>
  </tr>


    @foreach($students as $student)
        <tr>
            <td>{{$number}}<td>
            <td >{{$student->state}}</td>
            <td >{{$student->department_id}}</td>
            <td >{{$student->class}}</td>
         </tr>
    @endforeach
</table>

</body>
</html>
    