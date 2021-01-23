<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Введите имя: </label>
    <input type="text" name="name" oninput="showNames(this.value)">
    <div id="res"></div>
    <script>
        async function showNames(val){
            let response = await fetch("ajax.php?name="+val, {method: "GET"});
            if(response.ok === true){
                let content = await response.text();
                console.log(content);
                let resDiv = document.getElementById("res");
                resDiv.innerHTML = content;
            }
        }
    </script>
</body>
</html>