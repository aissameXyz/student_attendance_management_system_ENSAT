

<x-app-layout>
    <x-slot name="header">
    </x-slot>
<div class="container-sm">
    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Code Apogée</label>
            <input id="name" name="code_ap" type="text" class="form-control" required>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">First name </label>
            <input id="name" name="firstName" type="text" class="form-control" required>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Last name</label>
            <div class="input-group has-validation">
                <input id="name" name="admissionNumber" type="text" class="form-control" aria-describedby="inputGroupPrepend" required>
            </div>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Admission Number </label>
            <input type="text" class="form-control" id="validationCustom03" required>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Filiere</label>
            <select name="filiere_Id" class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                @foreach($filiere as $fil)
                    <option value="{{$fil->id}}">{{$fil->Designation}}</option>
                @endforeach
            </select>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <a class="btn btn-primary" type="submit" href="{{ route('students.index') }}">Back</a>
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>
</div>


{{--<div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('students.index') }}" class="px-4 py-2 btn btn-success">Back</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST"class="px-4 py-2 btn " action="{{ route('students.store') }}">
                            @csrf
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Code Apogée </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="code_ap" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> First name </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="firstName" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Last name </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="lastName" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Admission Number </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="admissionNumber" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Filiere </label>
                          <div class="mt-1">
                              <select name="filiere_Id" class="form-select btn btn-secondary px-6 ">


@foreach($filiere as $fil)
    <option value="{{$fil->id}}">{{$fil->Designation}}</option>
@endforeach
    </select>
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                       <div class="sm:col-span-6 pt-5">
                            <button type="submit" class="px-4 py-2 btn btn-success">Create</button>
                          </div>
                        </form>
                      </div>
                </div>

            </div>
        </div>
    </div>--}}
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</x-app-layout>
