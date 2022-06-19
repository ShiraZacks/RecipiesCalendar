<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>User Recipes</title>
    <?php include "menu.php";
    include "dbconnect.php"
    ?>
</head>

<body>
    <h2>Add your own recipies to our Database! Who knows, maybe yours will end up in the editor's choice list!</h2>
    <?php
    // select all tasks if page is visited or refreshed

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        echo "Title: " . $title . "<br />";
        $description = $_POST['description'];
        echo "Description: " . $description . "<br />";
        $ingredients = $_POST['ingredients'];
        echo "Ingredients: " . $ingredients . "<br />";
        $directions = $_POST['directions'];
        echo "Instructions: " . $directions . "<br />";
    } else {
        echo "No recipies have been submitted yet from the users! Be the first!<br/>";
    }
    ?>
    </tbody>

    <a class="coolButton" href="addRecipie.php">Add Recipe</a>
    <a class="coolButton" href="home.php">Home</a>

</body>

</html>