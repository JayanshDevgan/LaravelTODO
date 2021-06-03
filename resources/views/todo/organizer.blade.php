<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO-Organizer</title>
    <script>
        function newCollection() {
            var br = document.createElement("br");
            var span = document.createElement("span");
            var DocInput = document.createElement("input");
            var AddBtn = document.createElement("button");
            var image = document.createElement("img");
            DocInput.placeholder = "Document: "
            span.innerHTML += "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
            AddBtn.classList.add("add-btn");
            image.src = "images/trash.png";
            document.body.appendChild(br);
            document.body.appendChild(span);
            document.body.appendChild(DocInput);
            document.body.appendChild(AddBtn.appendChild(image));
        }
        function removeDocument() {
            alert("Element Removed");
        }
    </script>
    <style>
        body, input {
            font-family: 'Courier New', Courier, monospace;
        }
        input {
            font-weight: bold;
        }
        .add-btn {
            background-color: transparent;
            outline: none;
            border: none;
            position: relative;
            top: .4em;
            left: -1em;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;" id="alertH"><x-alert/></h3>
    @csrf
    <form method="get" action="#" autocomplete="off">
        <input id="TF" placeholder="Collection: "/>
        <button class="add-btn" onClick="newCollection()"><img class="add-img" src="images/plus.png"/></button>
    </form>
    </body>
</html>