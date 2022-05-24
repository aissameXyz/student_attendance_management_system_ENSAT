<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body>
    <h1>liste des filieres</h1>
    @if($message = Session::get('success'))
    <p>{{$message}}</p>
    @endif
    <a href="{{route('Filieres.create')}}">Creer une filiere</a>
    <table class="table table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Designation</th>
      <th scope="col">Teacher_id</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
     @foreach($filieres as $filiere)
    <tr>
      <td>{{$filiere->id}}</td>
      <td>{{$filiere->Designation}}</td>
      <td>{{$filiere->teacher_id}}</td>
      <td><a href="{{route('Filieres.show', $filiere->id)}}">afficher {{$filiere->Designation}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
