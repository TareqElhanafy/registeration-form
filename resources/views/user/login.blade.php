<html>
    <head>
        <title>Login</title>
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
<br>  <h1 class="text-center">Login </h1>
<hr>
<br>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">

	<form action="{{route('doLogin')}}" method="POST">
        @csrf
<!--Errors alert-->

        @if($errors->any())
        <div class="alert alert-danger">
<ul class="list-group">
    @foreach($errors->all() as $error)
<li class="list-group-item">
{{$error}}
</li>
@endforeach
</ul>
        </div>
        @endif
<!--Success alert-->
        @if(session()->has('success'))
        <div class="alert alert-success">
         {{session()->get('success')}}
        </div>
        @endif

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Enter password" type="password">
    </div> <!-- form-group// -->

  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Sign in  </button>
    </div> <!-- form-group// -->   
    
    
    <p class="text-center">create new account? <a href="{{route('usersRegister')}}">Register</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

    </body>
</html>





