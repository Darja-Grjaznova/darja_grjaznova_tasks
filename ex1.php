<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Page</title>
</head>
<body>
    <h1>3.1 Write a simple PHP script</h1>
    <?php
    echo "Darja Grjaznova<br>";
    echo "BBCAP22";
    ?>
    <h1>3.2 Write PHP code to display </h1>
    <?php
    echo "Hello world! My name is \"Darja\"";
    ?>
    <h1>3.3 display the current date </h1>
    <?php
    echo date("d.m.Y")
    ?>
     <h1>3.4 Put this title </h1>
    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>"; 
    ?>
    <h1>3.5 HTML table </h1>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table> 
    <tr>
    <th> S.N </th><th> Name </th><th> Grade </th> 
    </tr>
    <tr>
    <td> 1 </th><th> Pekka </th><th> $g1 </td>
    </tr>
    <tr>
    <td> 2 </th><th> Johanna </th><th> $g2 </td>
    </tr>
    <tr>
    <td> 2 </th><th> John </th><th> $g3 </td>
    </tr>
    </table>";
    ?>
    <h1>Take a screenshot</h1>
    <img src="Screenshot.png" >

</body>
</html>
