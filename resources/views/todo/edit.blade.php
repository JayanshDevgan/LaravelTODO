<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>TODO-edit</title>
    <script>
        function AlertHide() {
            setTimeout(function() {
                $('#alertH').fadeOut('fast');
            }, 2000);
        }
        AlertHide();
    </script>
    <style>
        body {
            font-family: sans-serif;
        }
        #arrow-Link {
            text-decoration: none;
            color: #4287f5;
            font-size: 2.5em;
            position: relative;
            top: -50px;
        }
        #InputField {
            position: relative;
            left: 28.8em;
            width: 20%;
        }
        #SubBtn {
            position: relative;
            top: -34px;
            left: 140px;
        }
    </style>
</head>
<body style="text-align:center">
    <h1>Edit TODO here</h1>
    <h3 id="alertH"><x-alert/></h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" id="InputField" class="form-control" autocomplete="OFF" value="{{$todo->title}}"/>
        <input style="display:none" type="number" name="id" value="{{$todo->id}}">
        <input type="submit" id="SubBtn" class="btn btn-info" value="Edit"/>
    </form>
    <br>
    <a id="arrow-Link" href="/">&#8592</a>
</body>
</html>