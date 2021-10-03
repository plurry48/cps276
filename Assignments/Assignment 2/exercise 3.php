<?php
    
    //number of rows
    $numOfRowsVal = 15;
    
    //number of cells
    $numOfCellsVal = 5;

    
    $tableMarkup= "<table border= '1'>";

    
    
    for($i = 1; $i <= $numOfRowsVal; $i++) {
        $tableMarkup = $tableMarkup."<tr>";
    
        
        
        for($j = 1; $j <= $numOfCellsVal; $j++) {
            $tableMarkup=$tableMarkup."<td> Row".$i." Cell".$j."</td>";
        }
    }

    // Row ended
    $tableMarkup = $tableMarkup."</tr>";

    // Table ended
    $tableMarkup = $tableMarkup."</table>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Table</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
     
    <!-- display the remaining HTML string via a variable in the echo statement within the body element -->
    <?php 
        if(isset($tableMarkup)) {
           echo $tableMarkup; 
        }
    ?>

    </body>
</html>