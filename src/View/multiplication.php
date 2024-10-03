<!-- 7th -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
  </head>
<body>
    
    <?php
        multiplicationTable();
        function multiplicationTable(){
            echo "<table>";
 
            for ($num = 1; $num <= 10; $num++){
                echo "<th> $num </th>";
            }

            for ($num = 1; $num <= 10; $num++){
                echo "<tr>";
                for($i= 1; $i<= 10; $i++){
                    $res = $num * $i;
                    echo "<td>$res &nbsp </td>";
                }
                echo "<br>";
                echo "</tr>";
            }

            echo "</table>";
        }
    
    ?>

</body>
</html>