
<x-app-layout>

    <x-slot name="header">
    </x-slot>

    <div class="container-sm">
        <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('Filieres.store')}}">
            @csrf
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Designation de la filiere</label>
                <input id="Designation" name="Designation" type="text" class="form-control" required>
                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Teacher_id</label>
                <input id="teacher_id" name="teacher_id" type="text" class="form-control" required>
                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <a class="btn btn-primary" type="submit" href="/Filieres">Back</a>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </form>
    </div>









{{--<body>
    <h1>CREATE Filiere</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('Filieres.store')}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="Designation" >Designation de la filiere</label>
    <input type="text" name="Designation" class="form-control" id="Designation" aria-describedby="emailHelp" placeholder="Designation">
  </div>

  <div class="form-group">
    <label for="teacher_id">Teacher_id</label>
    <input type="text" name="teacher_id" class="form-control" id="teacher_id" placeholder="Password">
  </div>

  <button type="submit" value="creer une filiere" class="btn btn-primary">Submit</button>
</form>
</body>--}}


</x-app-layout>
