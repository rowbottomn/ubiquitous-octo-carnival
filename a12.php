<!-- 
    Name data purpose
-->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>w1</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php 
    include 'chef.php';
    include 'italian_chef.php';

    echo Chef::$staticAttribute."<br>";
    $chef = new Chef("Gordon Ramsay",50);
    $chef->makeSpecialDish();
    echo "<br>";
    $italianChef = new ItalianChef("Massimo Bottura", 55, "Italy");
    echo $italianChef->age;
    $italianChef->makeSpecialDish();
  ?>
</body>

</html>