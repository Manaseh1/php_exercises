<!DOCTYPE html>
<html>
<head>
    <title>This is multiplication table</title>
</head>    
<?php 
$start = 1;// draw out the limmits
$end = 10;
?>
<body>
    <table border="1">
        <?php
        echo '<tr>';//row 1
        print("<th></th>");
        for($count = $start;$count <= $end;$count++){
            echo("<th>".$count."</th>");
        }
        
        echo '</tr>';// end of row 1
        for($count = $start;$count <= $end;$count++){
            echo("<tr><th>".$count."</th>");//tr
            for($count2 = $start; $count2 <= $end; $count2++) 
            {//count is column count 2 is column
              $result = $count * $count2; 
              printf("<td>$result</td>");
            }
            print("</tr> ");//tr
        }
        
         ?>
    </table>
    
</body>

</html>
