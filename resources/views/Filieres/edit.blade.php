
<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create teacher
        </h2>
    </x-slot>

<style>
  body {



  background-size: cover; /* or contain depending on what you want */
  background-position: center center;
  background-repeat: no-repeat;
  text-align:center;
  margin:auto;
  padding:0;

}
</style>

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
</x-app-layout>
