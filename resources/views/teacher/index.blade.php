
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <body style="background-color: var(--bs-gray-200) ">
    <div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
        <center>
            <a class="btn action-button" style="background: var(--bs-red); color: white" role="button"  href="{{route('teacher.create')}}">
                Create Teacher
            </a>
        </center>
        <br><br>
        <div class="table-responsive table table-hover table-bordered results">
            <table class="table table-hover table-bordered">
                <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd-1" class="col-lg-1">First Name</th>
                    <th id="trs-hd-2" class="col-lg-2">Last Name</th>
                    <th id="trs-hd-3" class="col-lg-3">teacher id</th>
                    <th id="trs-hd-4" class="col-lg-2">Edit</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($teacher as $t)
                    <tr class="warning no-result">
                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                    <tr>
                        <td>{{ $t->firstName }}</td>
                        <td>{{ $t->lastName }}</td>
                        <td>{{ $t->user_id }}</td>
                        <td>
                            <form class="px-4 py-2" method="POST" action="{{ route('teacher.destroy', $t->id) }}" onsubmit="return confirm('Are you sure?');">
                                <a href="{{ url('teacher/'.$t->id.'/edit')}}" class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></a>
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
