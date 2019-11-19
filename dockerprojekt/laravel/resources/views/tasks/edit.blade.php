
 @extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

       <title>To-Do-Liste!</title>
       </head>
       <body>
       <div class="container">
       <div class ="content">
       <h1>Meine To-Do-Liste</h1>
       </div>
       </div>



<div class="container">
  <div class="row">
    <div class="col-lg">
     
      <form action="{{route('updateTask', [$taskUnderEdit->id]) }}>" method='POST'>
      {{csrf_field()}}
      <input type ="hidden" name='_method' value='POST'>
    <div class="form-group">
    <input type="text" name='updatedTaskName'class='form-control input-lg' value='{{ $taskUnderEdit->note}}'>
    </div>

    <div class="form-group">
    <input type ="submit" value='Save Changes' class='btn btn-success'>
    <a href="http://localhost:8080/"class='btn btn-danger pull-right'>Go Back</a>
    </div>
    </form>
    </div>
    </div>

    <div class="col-lg">
    </div>

    <div class="col-lg">

    </div>
  </div>
</div>



    <div class="row">
    <div class="col-sm">
      
    

   </body>

   </style>
<body style="background-image: url('https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80;">




</html>
@endsection