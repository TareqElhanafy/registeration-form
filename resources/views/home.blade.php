<html>
    <head>
        <title>Home</title>
          <!--Bootstrap-->
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--Jquery-->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    </head>


    <body>
        <div class="container">
            <br>
            <br>
<div class="row d-flex justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">
<div class="card-body">
Welcome {{auth()->user()->name}}
<br>
<br>
<form action="{{route('logout')}}" method="POST">
    @csrf 
    <button type="submit" class="btn btn-danger">Logout</button>

</form>
</div>
</div>
</div>
</div>
</div>
        </div>
    </body>
</html>