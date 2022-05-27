
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
    <h1>liste des modules</h1>
    @if($message = Session::get('success'))
    <p>{{$message}}</p>
    @endif
    <a href="{{route('Modules.create')}}">Creer une module</a>
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
     @foreach($modules as $module)
    <tr>
      <td>{{$module->id}}</td>
      <td>{{$module->Designation}}</td>
      <td>{{$module->filiere_id}}</td>
      <td><a href="{{route('Modules.edit',$module->id)}}" >Modifier {{$module->Designation}}</a>
      <form action="{{route('Modules.destroy',$module->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="hidden" value="suprimer {{$module->Designation}}">
          <button type="submit" value="creer un module" class="btn btn-primary">suprimer {{$module->Designation}}</button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>

</x-app-layout>
