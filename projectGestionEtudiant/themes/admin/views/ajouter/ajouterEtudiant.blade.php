<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>projectGestionEtudiant</title>
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.min.css?h=cdc717bba6e32da6ffcf4cb1fb99a600')}}">
</head>
<body><!-- Start: Table With Search -->
<div class="col-md-12 search-table-col">
    <span class="counter pull-right"></span>
    <div class="table-responsive table table-hover table-bordered results">
    <center>
        <form action="{{ route('admin.store_student') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="nom" ><br>
            <input type="number" name="filiere" placeholder="filiere"><br>
            <input type="email" name="email" placeholder="email" ><br>
            <input type="text" name="password" placeholder="password" ><br>
            <button type="submit">Add</button>
        </form>
    </center>
    </div>
</div><!-- End: Table With Search -->
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/script.min.js?h=ba7db0644218991eaf10c85eb374a71e')}}"></script>
</body>
</html>
