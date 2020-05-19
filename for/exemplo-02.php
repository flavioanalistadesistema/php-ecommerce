<?php
 echo "<select>";

for ($i=date("Y"); $i > date("Y")-10; $i--) { 

    if ($i < 2020 && $i > date("Y")-10) {        
        echo '<option value="'.$i.'">'.$i.'</options>';
    }   
}

echo "</select>";
?>

