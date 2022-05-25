<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body>
    <h1>afficher une filiere</h1>
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
    <tr>
      <td>{{$filiere->id}}</td>
      <td>{{$filiere->Designation}}</td>
      <td>{{$filiere->teacher_id}}</td>
      <td><a href="{{route('Filieres.edit',$filiere->id)}}" >Modifier {{$filiere->Designation}}</a>
      <form action="{{route('Filieres.destroy',$filiere->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" value="suprimer {{$filiere->Designation}}">
      </form>
    </td>
    </tr>
  </tbody>
</table>
</body>
</html>

