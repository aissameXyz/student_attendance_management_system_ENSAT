
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
      <td><a href="{{route('Filieres.edit',$filiere->id)}}" >Modifier {{$filiere->Designation}}</a>
      <form action="{{route('Filieres.destroy',$filiere->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" value="suprimer {{$filiere->Designation}}">
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>

</x-app-layout>