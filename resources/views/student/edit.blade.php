
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Student Update
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

<center>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('students.index') }}" class="px-4 py-2 btn btn-success">Back</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ url('students/'.$student->id) }}">
                            @csrf
                            @method('PUT')
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
                            <label for="name" class="block text-sm font-medium text-gray-700"> Admission Number </label>
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
                            <button type="submit" class="px-4 py-2 btn btn-success">Update</button>
                          </div>
                        </form>
                      </div>
                      
                </div>
  
            </div>
        </div>
    </div>

      </x-app-layout>