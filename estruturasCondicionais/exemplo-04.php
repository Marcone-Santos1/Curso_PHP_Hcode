<?php 

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-20 ; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

?>