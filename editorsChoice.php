<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Editor's Choice</title>
    <?php include 'menu.php'; ?>

</head>
<script>
    function getRecipes() {
        setTimeout(() => {
            readRecipe('recipes/cheesecake.txt', 'recipe1', 'one', 'RECIPE 1');
        }, 500)
        setTimeout(() => {
            readRecipe('recipes/matzahBalls.txt', 'recipe2', 'two', 'RECIPE 2');
        }, 500)
        setTimeout(() => {
            readRecipe('recipes/tzimmes.txt', 'recipe3', 'three', 'RECIPE 3');
        }, 500)
        setTimeout(() => {
            readRecipe('recipes/hamentashen.txt', 'recipe4', 'four', 'RECIPE 4');
        }, 500)
        setTimeout(() => {
            readRecipe('recipes/donuts.txt', 'recipe5', 'five', 'RECIPE 5');
        }, 500)
    }

    function readRecipe(daRecipe, daDiv, daHeader, daTitle) {
        let ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(daHeader).innerHTML = daTitle
                document.getElementById(daDiv).innerHTML = this.responseText
            }
        }
        ajax.open("POST", daRecipe, true)
        ajax.send();
    }
</script>

<body onload="getRecipes()">

    <h2>These are some of my favorite holiday recipies.</h2>
    <p>To add your own, head over to the <a class="a" href="userRecipies.php">USER RECIPES</a> page!</p>

    <br />
    <br />

    <div class="border">
        <h2 id="one"></h2>
        <div class="recipe1" id="recipe1"></div>
    </div>

    <br />
    <br />

    <div class="border">
        <h2 id="two"></h2>
        <div class="recipe2" id="recipe2"></div>
    </div>

    <br />
    <br />

    <div class="border">
        <h2 id="three"></h2>
        <div class="recipe3" id="recipe3"></div>
    </div>

    <br />
    <br />

    <div class="border">
        <h2 id="four"></h2>
        <div class="recipe4" id="recipe4"></div>
    </div>

    <br />
    <br />

    <div class="border">
        <h2 id="five"></h2>
        <div class="recipe5" id="recipe5"></div>
    </div>

    <br />
    <br />
    
    <a class="coolButton" href="home.php">Home</a>
</body>

</html>