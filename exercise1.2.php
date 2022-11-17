<html>
    <head>Addition table upto 10</head>
    <?php
    $start =1;
    $end =10; 
    ?>
    <body>
        <table border='1'>
        <?php
        echo '<tr>';
        echo '<th></th>';
        for($count=1;$count<=$end;$count++){    
            echo "<th>$count</th>";
        }
        echo '</tr>' ?>
        <?php
       
        for($count =1 ;$count <=$end;$count++){
            echo "<tr>";
            for($count2 =0 ;$count2 <=$end;$count2++){
                $result = $count +$count2;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        ?>
        </table>
        
    </body>
</html>