<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>User Additions</title>
    <?php include 'dbconnect.php' ?>
</head>
<body>
    

<form name="addRecipe" action="userRecipies.php" method="post" autocomplete="off" class="addRecipe">
    <fieldset>
        <legend>New Recipe</legend>
        <p>Title: <input type="text" name="title" style="margin-left:45px; width:90%" /></p>
        <p>Description: <input type="text" name="description" style="height:50;width:90%" /></p>
        <p>Ingredients: <input type="text" name="ingredients" style="height:150px;width:90%" /></p>
        <p>Directions: <input type="text" name="directions" style="height:150px;width:90%" /></p>
        <p><input class="coolButton" type="submit" name="submit" value="submit"/>  <a class="coolButton" type="button" href="userRecipies.php">Back</a></p>
    </fieldset>
</form>

</body>
</html>