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
    include 'chef_magic.php';
    include 'chef_magic_call.php';
    include 'chef_helper.php';
    include 'chef_factory.php';

    echo Chef::$staticAttribute."<br>";

    $chef = new Chef("Hank", 30) ;
    //$chef->new(['name'=>'frank', 'age'=> 50]);
    $chef->makeSpecialDish();
    $chef->name = "Frank";
    echo $chef->name;
    echo "<br>";
    $italianChef = new ItalianChef("Massimo Bottura", 55, "Italy");
    echo $italianChef->age;
    $italianChef->makeSpecialDish();
    $italianChef->makeOldSpecialDish2();
  ?>
</body>

</html>