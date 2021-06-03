<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO-Script</title>
    <style>
        body {
            margin: 0px;
            color: white;
        }
        .FileManager {
            width: 1px;
            height: 31em;
            padding: 5em;
            background-color: whitesmoke;
        }
        .NewFile {
            background-color: transparent;
            outline: none;
            border: none;
            position: relative;
            top: -5em;
            left: 3em;
            opacity: 0%;
        }
        .FileManager:hover .NewFile {
            opacity: 100%;
        }
        span {
            color: rgb(95, 93, 93);
            font-family: sans-serif;
            position: relative;
            top: -3em;
            left: -5em;
        }
        .FileManager:hover span {
            opacity: 100%;
        }
        .uFile-Img {
            position: relative;
            top: -2em;
            left: -5em;
        }
        .file-Span {
            position: relative;
            top: -3.1em;
            left: -3.5em;
        }
        #arrow-Link {
            text-decoration: none;
            color: #4287f5;
            font-size: 2.5em;
            position: relative;
            top: 10em;
            left: -.8em;
        }
    </style>
</head>
<body>
    <div class="FileManager">
        <span class="TEXT">SCRIPTS</span>
        <img class="uFile-Img" src="images/uFile.png"/><span class="file-Span">script.u</span>
        <a id="arrow-Link" href="/TODO-Script/convert">&#x2192;</a>
    </div>
</body>
</html>