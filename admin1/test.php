<form action="save_product.php" method="post" enctype="multipart/form-data" media="all">

                
				<table>
				<tr>
				<td>Product Title</td>
				<td><input type="text" name="title" size="100%">
				<input type="text" name="employee_id" value="1">
				
				</td>
				</tr>

				
				<tr>
				<td>Product Category</td>
				<td>
				
				 <select name="parent_cat" id="parent_cat" class="form-control">


	<option>Select a Categories</option>  
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category_name']; ?></option>
        <?php endwhile; ?>
    </select>
				
				</td>
				</tr>
							
					<tr>
				<td>Product sub Category</td>
				<td>
				 <select name="sub_catrs" id="sub_cat" class="form-control">
<option>Select a sabCategories</option>

</select>
</td>	
</tr>
			
						<tr>
				<td>Product Material</td>

				
					<td>
				 <select name="material" class="form-control">
<option>Select Material </option>
<option><h1>paper Work</h1></option>
<option>Art Paper</option>


</select>
</td>	
				</tr>
				
				
				
						<tr>
				<td>Gm/brand</td>
				<td><input type="text" name="gsm" size="100%"></td>
				</tr>
				
				
						<tr>
				<td>Product Quntity</td>
				<td><input type="number" name="quintity" size="100%"></td>
				</tr>
				
					<tr>
				<td>Product Mrp</td>
				<td><input type="text" name="mrp" size="100%"></td>
				</tr>
				
				<tr>
				<td>Product Descount</td>
				<td><input type="text" name="descount" size="100%"></td>
				</tr>
				
				<tr>
				<td>Product in stock</td>
				<td><select name="stock">
				<option>Select In stock</option>
				<option>Yes</option>
				<option>Sold Out</option>
				</select></td>
				</tr>
				
					<tr>
				<td>Product Specification</td>
				<td><textarea name="specifaction"></textarea></td>
				</tr>
				
					<tr>
				<td>Upload Picture</td>
				<td>
		
				<input type="file" name="product_image" /></td>
				</tr>
				
				<tr>
				<td><input type="submit" name="submit" value="submit"/></td>
				</tr>
				</table>
                   
                   
                   
                
            </form>
