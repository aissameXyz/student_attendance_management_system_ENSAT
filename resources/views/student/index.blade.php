
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Students
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
    <div class="flex justify-end p-2">
                <a href="{{route('students.create')}}"
                    class="px-4 py-2 btn btn-success">Create Student</a>
            </div> <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="table">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="col">
                                                    First Name</th>
                                                <th>
                                                    Last Name</th>
                                                <th>
                                                    code_ap</th>
                                          
                                                <th>
                                                    Edit
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student as $st)
                                            <tr>
                                                <td >
                                                    <div class="flex items-center">
                                                        {{ $st->firstName }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        {{ $st->lastName }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        {{ $st->code_ap }}
                                                    </div>
                                                </td>
                                            
                                                <td>
                                                    <div class="flex justify-end">
                                                        <div class="flex space-x-2">
                                   
                                                            <a href="{{ url('students/'.$st->id.'/edit')}}"
                                                                class="px-4   btn btn-primary ">Update</a>
                                                            <form class="px-4 py-2 btn btn-danger" method="POST"
                                                                action="{{ route('students.destroy', $st->id) }}"
                                                                onsubmit="return confirm('Are you sure?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="px-4 py-2 btn btn-danger" type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </x-app-layout>


</center>
