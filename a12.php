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
    $start = 1;
    $end  = 30;

    echo "<table>";//make the html ul
    for($i = 1; $i < $end; $i++){
        echo "<tr>$i";
        for ($j = 1; $j < $end; $j++){
            echo "<td>",$i*$j,"</td>";//make the html ul
        }
        echo "</tr>";
    }    
  
    echo "<ul>";//make the html ul
  ?>
</body>

</html>