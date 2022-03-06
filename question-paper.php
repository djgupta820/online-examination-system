<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidepanel.css">
    <script type="text/javascript" scr="script/script.js"></script>
    <script>
        function addQuestion()
        {
            var ele = document.getElementById("quesp");
            const element = document.createElement("div");
            element.classList.add("card");
            element.style.marginTop = "10px";
            subelement = document.createElement("div");
            subelement.classList.add("card-body");
            for(var i=1; i<=4; i++)
            {
                var div = document.createElement("div");
                div.classList.add("input-group", "input-group-sm", "mb-3");
                var span = document.createElement("span");
                span.classList.add("input-group-text");
                var node = document.createTextNode("Question");
                span.appendChild(node);
                var input = document.createElement("input");
                input.setAttribute("type","text");
                input.setAttribute("name","option"+i);
                input.classList.add("form-control");
            }
            ele.appendChild(element);

        }
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Question Paper</title>
</head>
<body>
    <div class="container">
        <div id="quesp">
            <span><button class="btn btn-outline-primary" onclick="addQuestion();">Add Question</button></span>
            <span><button class="btn btn-outline-primary"> Upload</button></span>
            <div class="card" style="margin-top:10px;">
                <div class="card-body">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Question</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Option 1</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Option 2</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Option 3</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Option 4</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
