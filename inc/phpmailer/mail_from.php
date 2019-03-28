<form action="contact.php" method="POST">
	<table>
		<tr>
			<h2>Add a T-shirts</h2>
		</tr>
		<tr>
			<th><lable for="tshirt_pic">Upload image</lable></th>
			<td><input type="file" name="tshirt_pic" accept="image/*"></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name" placeholder="Long,red"></td>
		</tr>
		<tr>
			<th>Price</th>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<th>Sizes</th>
			<td align="left">Small<input type="checkbox" name="small" style="display:inline;">Medium<input type="checkbox" name="medium" style="display:inline;">Large<input type="checkbox" name="large" style="display:inline;">X-Large<input type="checkbox" name="x-large" style="display:inline;"></td>
		</tr>
	</table>
	<input type="submit" value="ADD" onclick="addShirt()">
	</script>
</form>'