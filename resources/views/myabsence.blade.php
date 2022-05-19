    <!DOCTYPE html>
<html>
<head>
    <title>MyInfo</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>
<body>
<center> 
    
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Back</a>
                </div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Filiere</th>
      <th scope="col">Séance</th>
      <th scope="col">Module</th>
      <th scope="col">Présent</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <form action="{{route('presence')}}" method="POST">
    @csrf
      <th scope="row">1</th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->filiere}}</td>
      <td>

    
            <select name="seance" class="form-select btn btn-secondary ">
   



    <option value="1">Séance 1</option>
    <option value="2">Séance 2</option>
    <option value="3">Séance 3</option>
    <option value="4">Séance 4</option>
    <option value="5">Séance 5</option>
    <option value="6">Séance 6</option>
    <option value="7">Séance 7</option>

    </select>

            

            
       </td>
<td>

    
            <select name="module" class="form-select btn btn-secondary ">
   



    <option value="1">Module 1</option>
    <option value="2">Module 2</option>
    <option value="3">Module 3</option>
    <option value="4">Module 4</option>
    <option value="5">Module 5</option>
    <option value="6">Module 6</option>
    <option value="7">Module 7</option>

    </select>

            

            
       </td>
       <td>
            <input class="form-check-input" name="present" type="checkbox" value="{{ $student->code }}" id="flexSwitchCheckDefault">
       </td>


       <input type="hidden" value="{{ $student->id}}" name="student_id">
 <button type="submit" class="px-4 py-2 btn btn_success">Mark Present !</button>
       </form>