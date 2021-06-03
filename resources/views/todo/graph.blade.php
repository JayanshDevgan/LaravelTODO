<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO-Graph</title>
    <script>

    </script>
    <style>
        * {
            color: white;
            margin: 0px;
            padding: 0px;
        }
        html, #container {
            height: 100%;     
        }
        body {
            font-family: sans-serif;
            font-size: 12px;
        }
        #container {
            background: rgba(255, 255, 255, 0.097);
        }
        a {
            color: black;
            text-align: center;
        }
        span #container{
            color: black;
            text-align: center;
            font-size: 11px;
        }
        .context-menu {
            width: 100px;
            height: auto;
            box-shadow: 0 0 20 0px #ccc;
            position: absolute;
            display: block;
            background-color: #ccc;
        }
        .context-menu ul {
            list-style: none;
            padding: 5px 0px 5px 0px;
        }
        .context-menu ul li:not(.separator){
            padding: 10px 5px 10px 5px;
            border-left: 4px solid transparent;
            cursor: pointer;
        }
        .context-menu ul li:hover {
            background: rgba(255, 255, 255, 0.22);
        }
        .separator {
            height: 1px;
            background: #dedede;
            margin: 2px 0px 2px 0px;
        }
    </style>
</head>
<body bgcolor=0f0f0f>
    <div id="container">
        <div id="contextMenu" class="context-menu">
            <ul>
                <span>Field</span>
                <li class="separator"></li>
                <li draggable="true" class="nodes" onClick="createNode()"><a>Task Field</a></li>
                <li draggable="true" class="nodes" onClick="createNode()"><a>Image Field</a></li>
                <li class="separator"></li>
                <span>another stuff</span>
                <li class="separator"></li>
            </ul>
        </div>
    </div>
</body>
</html>