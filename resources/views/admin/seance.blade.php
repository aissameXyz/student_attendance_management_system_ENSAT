<x-app-layout>


<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>







<div class="py-12 w-full">
    
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
               
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
                                                <th >
                                                Last Name</th>
                                                <th >
                                                Code Apogée</th>
                                                <th >
                                                Absent</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody> <form
                                                                class="px-4 py-2 btn"
                                                                method="POST"
                                                                action="{{ route('admin.absence.store') }}">
                                                                
                                                                {{ csrf_field() }}

                                                                
                                                              
                                        @foreach ($student as $t)
                                        {{-- @if("{{strtolower($student->code_filiere)}}"=="{{strtolower($t->filiere)}}") --}}
                                            <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $t->first_name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $t->last_name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $t->code }}
                                                    </div>
                                                </td>
                                                
                                                <td class="d-flex justify-content-center whitespace-nowrap">
   <div class="form-check form-switch">
                                                <input class="form-check-input" name="absent[]" type="checkbox" value="{{ $t->id }}" id="flexSwitchCheckDefault">
  </div> 

  <input type="hidden" value="{{ $t->id }}" name="ids[]">
  {{-- <div class="form-check form-switch">
  <input class="form-check-input" name="absent[]" type="checkbox" id="flexSwitchCheckDefault">
  
</div> --}}
                {{-- <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">

</div>
</td>
<td>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

</div>                                 --}}
 
                                                </td>
                                                
                                                
                                            </tr>
                                            {{-- @endif --}}
                                    @endforeach
                                    <input type="hidden" value="{{ $seance_id }}" name="seance">
                                      
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>
                </div>
            <center>
            <br>
                <button class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md" type="submit">Submit</button>
                                                            </form>
</center>
            </div>
        </div>
    </div>
    
</x-app-layout>