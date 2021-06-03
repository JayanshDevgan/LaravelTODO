<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO-Notes</title>
    <style>
        body {
            background-color: rgba(255, 166, 0, 0.535);
        }
        .notebook-page {
            background-color: #ffe082cd;
            width: 500px;
            margin: 0 auto;
            padding: 0;
            border-radius: 22px 100px 22px 22px;
        }
        .list-page {
            color: #555;
            font-size: 22px;
            padding: 0 !important;
            width: 500px;
            font-family: courier, monospace;
            border: 1px solid #dedede;
            border-radius: 22px 100px 22px 22px;
        }
        .list-page li {
            list-style: none;
            border-bottom: 1px dotted #ccc;
            text-indent: 25px;
            height: 2em;
            padding: 5px;
            text-transform: capitalize;
        }
        .notebook-page:hover {
            background-color: #FFE082;
            -webkit-transition: all 0.2s;
            -moz-transition:    all 0.2s;
            -ms-transition:     all 0.2s;
            -o-transition:      all 0.2s;
        }
        .Title {
            position: relative;
            text-align: center;
            width: 90%;
        }
        p {
            outline: none;
        }
    </style>
</head>
<body>
    <form method="GET">
        <div class="notebook-page">
            <ul class="list-page">
                <li><p contentEditable="true" class="Title" name="notesTitle">Title</p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
                <li><p contentEditable="true" name="note"></p></li>
            </ul>
        </div>
    </form>
</body>
</html>