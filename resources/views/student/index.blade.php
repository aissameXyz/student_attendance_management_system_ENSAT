<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <body style="background-color: var(--bs-gray-200) ">



    <div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
        <center>
            <a class="btn action-button" style="background: var(--bs-red); color: white" role="button"  href="{{route('students.create')}}">
                Create Student
            </a>
        </center>
        <br><br>
        <div class="table-responsive table table-hover table-bordered results">
            <table class="table table-hover table-bordered">
                <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd-1" class="col-lg-1">First Name</th>
                    <th id="trs-hd-2" class="col-lg-2">Last Name</th>
                    <th id="trs-hd-3" class="col-lg-3">code_ap</th>
                    <th id="trs-hd-4" class="col-lg-2">Edit</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($student as $st)
                    <tr class="warning no-result">
                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                    <tr>
                        <td>{{ $st->firstName }}</td>
                        <td>{{ $st->lastName }}</td>
                        <td>{{ $st->code_ap }}</td>
                        <td>
                            <form class="px-4 py-2" method="POST" action="{{ route('students.destroy', $st->id) }}" onsubmit="return confirm('Are you sure?');">
                                <a href="{{ url('students/'.$st->id.'/edit')}}" class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></a>
                                        @csrf
                                        @method('DELETE')
                                <script>
                                    function ConfirmDelete() {return confirm("Are you sure you want to delete?");}
                                </script>
                                <button Onclick="return ConfirmDelete();" class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </body>
        </x-app-layout>
</center>



{{--    <tbody>
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
    </tbody>--}}
{{--
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
--}}
