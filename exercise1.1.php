<!DOCTYPE html>
<html>
<head>
    <title>This is multiplication table</title>
</head>    
<?php 
$start = 1;
$end = 10;
?>
<body>
    <table border="1">
        <?php
        echo '<tr>';
        print("<th></th>");
        for($count = $start;$count <= $end;$count++){
            echo("<th>".$count."</th>");
        }
        
        echo '</tr>';
        for($count = $start;$count <= $end;$count++){
            echo("<tr><th>".$count."</th>");//tr
            for($count2 = $start; $count2 <= $end; $count2++) 
            {//count is column count 2 is column
              $result = $count * $count2; 
              printf("<td>$result</td>");
            }
            print("</tr> \n");//tr
        }
        
         ?>
    </table>
    
</body>

</html>
