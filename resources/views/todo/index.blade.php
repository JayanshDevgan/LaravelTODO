<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO-Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        #create-Link {
            text-decoration: none;
            color: #4287f5;
        }
        #create-Link:hover {
            color: #75aaff;
        }
        #listText {
            list-style: none;
            font-size: 1.5em;
            font-weight: bold;
        }
        #btn-Link {
            position: relative;
            left: 10px;
        }
        .graph-icon-link .graph-icon-img {
            position: relative;
            top: 3.5em;
            left: -30em;
            width: 2.5em;
            height: 2.5em;
        }
        .notes-icon-link .notes-icon-img {
            position: relative;
            top: 3.5em;
            left: -28em;
            width: 3em;
            height: 3em;
        }
        .card-icon-link .card-icon-img {
            position: relative;
            top: 3.5em;
            left: -26em;
            width: 3em;
            height: 3em;
        }
        .script-icon-link .script-icon-img {
            position: relative;
            top: 3.5em;
            left: -24em;
            width: 3em;
            height: 3em;
        }
    </style>
</head>
<body style="text-align:center">
    @php
        $isCompleted = "Completed";
    @endphp
    <h1>TODO List</h1>
    <h3><a href="/create" id="create-Link">Create</a></h3>
    <h3 id="alertH"><x-alert/></h3>
    @foreach($todos as $todo)
        <li id="listText" class="list-group-item">
            @if($todo->completed)
                <span style="text-decoration:line-through">{{$todo->title}}</span>
                @php
                    $isCompleted = "In-Completed";
                @endphp
            @else
                {{$todo->title}}
            @endif
            <br>
            <a id="btn-Link" class="btn btn-info stretched-link" href="{{asset('/'. $todo->id. '/edit')}}">Edit</a>
            <a id="btn-Link" class="btn btn-warning stretched-link" href="{{asset('/'. $todo->id. '/completed')}}">{{$isCompleted}}</a>
            <a id="btn-Link" class="btn btn-danger stretched-link" href="{{asset('/'. $todo->id. '/delete')}}">Remove</a>
        </li>
    @endforeach
</body>
</html>