<?php 
include('db_con1.php');

$parent_cat = $_GET['parent_cat'];

$query = mysql_query("SELECT * FROM vender_product WHERE cat_id= {$parent_cat}");
while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[s_id]'>$row[sab_title]</option>";
}
?>
