
<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Module
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
    <h1>CREATE Module</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('Modules.store')}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="Designation" >Designation de la module</label>
    <input type="text" name="Designation" class="form-control" id="Designation" aria-describedby="emailHelp" placeholder="Designation">
  </div>

  <div class="form-group">
    <label for="filiere_id">Filiere id</label>
    <input type="text" name="filiere_id" class="form-control" id="filiere_id" placeholder="Password">
  </div>

  <button type="submit" value="creer un module" class="btn btn-primary">Submit</button>
</form>
</body>


</x-app-layout>
