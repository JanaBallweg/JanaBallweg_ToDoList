
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
                <form action="{{ route('createTask')}}" method= "POST"> 
                <div class="form-group">
                <label for="text">Trage eine neue Aufgabe ein:</label>
                <input type="text" class="form-control" id="task" placeholder="task" name="task">
                </div>
               
                <button type="submit" class="btn btn-success">Hinzufügen</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token"></input>
            </form>

                <h2>Meine Aufgaben</h2>
                <p>Im folgenden können wichtige Aufgaben eingetragen werden:</p>            
                <table class="table">
                    <thead>
                    <tr>
                        <th>Aufgabe</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->note }}</td>
                    
                        <td><button type="delete" class="btn btn-danger"> <a href="{{route('deleteTask',['task_id' => $task ->id]) }} ">Delete Task</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            </div>
    </body>

    </style>
<body style="background-image: url('https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80;">
</html>
@endsection