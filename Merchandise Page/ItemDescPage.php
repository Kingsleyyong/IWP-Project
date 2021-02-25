<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Item Description Page</title>
</head>
<body>
    <div id="logoGroup">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="main.php">PANDEMONIUM-19</a>
            <a href="CartPage.php"><img src="" alt="Cart"></a>
        </ul>
    </div>

    <div id="picGroup">
        <div id="multiPic">
            <ul>
                <li class="picSelection"><img src="" alt=""></li>
                <li class="picSelection"><img src="" alt=""></li>
                <li class="picSelection"><img src="" alt=""></li>
            </ul>
        </div>
        <div id="mainPic"><img src="images/cloth mask.png" alt=""></div>
    </div>

    <div id="descriptionGroup">
        <h1>Cotton Mask</h1>
        <p id="itemPrice">RM 5</p>
        <p id="itemDescription">Here is the item description.</p>
        <br>
        <label for="stockLeft">Stock Left: </label>

        <form action="">
            <label for="choices">Color: </label>
            <select name="maskChoices" id="choice">
                <option value=""></option>
            </select>
        </form>

        <label for="quantity">Quantity: </label>
        <button onclick="minus()">-</button>
        <span id="quantityValue"></span>
        <button onclick="plus()">+</button>
        <br>

        <input type="submit" value="Add To Cart">
    </div>
    
    <script>
        var value=0;
        document.getElementById("quantityValue").innerHTML=value;
        function minus(){
            if(value!=0){
                value -= 1;
                document.getElementById("quantityValue").innerHTML=value;
            }
        }
        function plus(){
            value += 1;
            document.getElementById("quantityValue").innerHTML=value;
        }
    </script>
</body>
</html>