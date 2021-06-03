<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>TODO-create</title>
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
        }
        #InputField {
            position: relative;
            left: 28.8em;
            width: 20%;
        }
        #TextAreaId {
            position: relative;
            left: 250px;
            width: 50%;
        }
    </style>
</head>
<body style="text-align:center">
    <h1>Create TODO</h1>
    <h3 id="alertH"><x-alert/></h3>
    <form action="/upload" method="post">
        @csrf
        <input type="text" id="InputField" class="form-control" placeholder="Enter TODO" autocomplete="OFF" name="title"/>
        <br>
        <input type="submit" class="btn btn-info" value="Create"/>
    </form>
    <a id="arrow-Link" href="/">&#8592</a>
</body>
</html>