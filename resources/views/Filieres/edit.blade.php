
<x-app-layout>

    <x-slot name="header">
    </x-slot>

    <div class="container-sm">
        <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('Filieres.update' , $filiere->id)}}">
            @csrf
            @method('PATCH')

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Designation de la filiere</label>
                <input name="Designation" type="text" class="form-control" value="{{$filiere->Designation}}" required id="Designation" aria-describedby="emailHelp" placeholder="Designation">
                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Teacher_id</label>
                <input name="teacher_id" value="{{$filiere->teacher_id}}" id="name" type="text" class="form-control" required>
                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>


            <div class="col-12">
                <a class="btn btn-primary" type="submit" href="{{ route('Filieres.index') }}">Back</a>
                <button class="btn btn-primary" type="submit">update</button>
            </div>
        </form>
    </div>







{{--


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
</form>--}}


</x-app-layout>
