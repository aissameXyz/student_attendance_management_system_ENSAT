
<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create filiere
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
    <h1>Editer la module</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('Modules.update' , $module->id)}}" method="POST">
        @csrf
        @method('PATCH')
  <div class="form-group">
    <label for="Designation" >Designation de la module</label>
    <input type="text" name="Designation" value="{{$module->Designation}}" class="form-control" id="Designation" aria-describedby="emailHelp" placeholder="Designation">
  </div>

  <div class="form-group">
    <label for="filiere_id">filiere_id</label>
    <input type="text" name="filiere_id" value="{{$module->filiere_id}}" class="form-control" id="filiere_id" placeholder="Password">
  </div>

  <button type="submit" value="Modifier la module" class="btn btn-primary">Submit</button>
</form>
</x-app-layout>
