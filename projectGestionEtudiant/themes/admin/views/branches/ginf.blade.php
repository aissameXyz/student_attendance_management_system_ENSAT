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
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs">
            <tr>
                <th id="trs-hd-1" class="col-lg-1">Nom</th>
                <th id="trs-hd-3" class="col-lg-3">Gmail</th>
                <th id="trs-hd-4" class="col-lg-2">filiere</th>
                <th id="trs-hd-5" class="col-lg-2">created at</th>
                <th id="trs-hd-6" class="col-lg-2">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $ginf as $gf )
                <tr>
                    <td>{{$gf->name}}</td>
                    <td>{{$gf->email}}</td>
                    <td>{{$gf->label}}</td>
                    <td>{{$gf->created_at}}</td>
                    <td style="align-items: center">
                        <a href="{{ route('admin.delete_student' , ['id' => $gf->id]) }}" class="btn btn-danger" style="margin-left: 54px;" type="submit">
                            <i  class="fa fa-trash" style="font-size: 15px;text-align: center;"  ></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div><!-- End: Table With Search -->
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/script.min.js?h=ba7db0644218991eaf10c85eb374a71e')}}"></script>
</body>
</html>

