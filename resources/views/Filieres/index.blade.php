
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <body style="background-color: var(--bs-gray-200) ">
        <div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
        <center>
            <a class="btn action-button" style="background: var(--bs-red); color: white" role="button"  href="{{route('Filieres.create')}}">
                Create Stream
            </a>
        </center>
        <br><br>
        <div class="table-responsive table table-hover table-bordered results">
            <table class="table table-hover table-bordered">
                <thead class="bill-header cs">
                <tr >
                    <th id="trs-hd-1" class="col-lg-1">id</th>
                    <th id="trs-hd-2" class="col-lg-2">Designation</th>
                    <th id="trs-hd-3" class="col-lg-3">Teacher_id</th>
                    <th id="trs-hd-4" class="col-lg-2">Operation</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($filieres as $filiere)
                    <tr class="warning no-result">
                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                    <tr>
                        <td>{{$filiere->id}}</td>
                        <td>{{$filiere->Designation}}</td>
                        <td>{{$filiere->teacher_id}}</td>
                        <td>
                            <form class="px-4 py-2" method="POST" action="{{route('Filieres.destroy',$filiere->id)}}" onsubmit="return confirm('Are you sure?');">
                                <a href="{{route('Filieres.edit',$filiere->id)}}" class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></a>
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



{{--<x-slot name="header">
</x-slot>
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
</body>--}}

</x-app-layout>
