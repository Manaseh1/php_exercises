<?php  
	$start  = 1;
	$end = 10;
?>
<html>
 <head>
	<title>A divison table in PHP</title>
 </head>
 <body>
	<table border="1">
	<?php
		print("<tr>");// table row 
		print("<th></th>");//table head
		for($count = $start; $count <= $end; $count++) //count is equal to start  when count is less than or equal to end count ++ 
		print("<th>".$count."</th>");//print the count which is 0 1 - 10
		print("</tr>");//close table row
		
		for($count = $start; $count <= $end; $count++) 
		{
		  print("<tr><th>".$count."</th>");
		  for($count2 = $start; $count2 <= $end; $count2++) 
		  {
			$result = $count / $count2; 
			printf("<td>%.f</td>", $result);
		  }
		  print("</tr> \n");
		}	
	?>
	</table>
 </body>
</html>