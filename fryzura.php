<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <article>
            <h1>Salon fryzerski</h1>
            <p>
                changes
            </p>
            <div class="imageContainer">
                <img src="./images/obraz2.jpg" />
            </div>
            <div class="contact">
                <h3>Kontakt: 198263192</h3>
            </div>
            <div class="prices" style="display: flex; flex-direction:column; width:50%;">
                <h2>Discount for hairwork</h2>
                <label><input type="radio" name="hairLength" value="25">short</label>
                <label><input type="radio" name="hairLength" value="30">medium</label>
                <label><input type="radio" name="hairLength" value="40">half long</label>
                <label><input type="radio" checked=true name="hairLength" value="50">long</label>
                <button id="ChangePrice" style="width:50%;">Show discount</button>
                
                <label>
                    Hair work price
                <div id="ShowingPrice">
                </div>
                </label>
                
            </div>

        </article>
        <nav>
            <div class="menu">
                <h1>
                    Menu
                </h1>
                <div class="list">
                    <ul>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div>
                <img src="./images/obraz1.jpg" />
            </div>
        </nav>
    </main>
    <footer>
        Author:00000000000
    </footer>

    <script src="./index.js"></script>
</body>

</html>