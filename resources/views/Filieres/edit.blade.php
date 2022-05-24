<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body>
    <h1>Editer la filiere</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('Filieres.update' , $filiere->id)}}" method="POST">
        @csrf
        @method('PATCH')
  <div class="form-group">
    <label for="Designation" >Designation de la filiere</label>
    <input type="text" name="Designation" value="{{$filiere->Designation}}" class="form-control" id="Designation" aria-describedby="emailHelp" placeholder="Designation">
  </div>

  <div class="form-group">
    <label for="teacher_id">Teacher_id</label>
    <input type="text" name="teacher_id" value="{{$filiere->teacher_id}}" class="form-control" id="teacher_id" placeholder="Password">
  </div>

  <button type="submit" value="Modifier la filiere" class="btn btn-primary">Submit</button>
</form>
</body>
</html>