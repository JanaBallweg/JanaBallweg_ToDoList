<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>Hallo Jana!</title>
        </head>


        <body>
        <div class="container">
        <div class ="content">
        <h1>Meine To-Do-Liste</h1>
                <form method= "" action="POST"> 
                <div class="form-group">
                <label for="text">Trage eine neue Aufgabe ein:</label>
                <input type="text" class="form-control" id="Aufgabe" placeholder="Aufgabe" name="Aufgabe">
                </div>
               
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>

                <h2>Meine Aufgaben</h2>
                <p>Im folgenden können wichtige Aufgaben eingetragen und verwaltet werden:</p>            
                <table class="table">
                    <thead>
                    <tr>
                        <th>Aufgabe</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Einkaufen</td>
                        <td><a href="">Delete Task</a></td>
                    </tr>
                    <tr>
                        <td>Putzen</td>
                        <td><a href="">Delete Task</a></td>
                     
                    </tr>
                    <tr>
                        <td>Kochen</td>
                        <td><a href="">Delete Task</a></td>
                     
                    </tr>
                    </tbody>
                </table>
            </div>

            </div>
    </body>

    </style>
<body style="background-image: url('https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80;">
</html>
