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
                <form> 
                <div class="form-group">
                <label for="text">Trage eine neue Aufgabe ein:</label>
                <input type="text" class="form-control" id="Aufgabe" placeholder="Aufgabe" name="Aufgabe">
                </div>
               
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>

                <h2>Meine Aufgaben</h2>
                <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
                <table class="table">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            </div>
    </body>
</html>
