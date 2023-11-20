<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
<table align="center" bgcolor="#DDD">
	<form method="post" action="insert.php">
		<tr>
    		<td>Enter ID: </td>
        	<td><input type="text" name="id"></td>
    	</tr>
		<tr>
    		<td>Enter Name of the Product: </td>
        	<td><input type="text" name="name"></td>
    	</tr>
		<tr>
    		<td>Enetr Price of the product: </td>
        	<td><input type="text" name="price"></td>
    	</tr>
		<tr>
    		<td>Enter Discount: </td>
        	<td><input type="text" name="discount"></td>
    	</tr>
        <tr>
    		<td>Enter Category of the book: </td>
        	<td><input type="text" name="category"></td>
    	</tr>
		<tr>
        	<td align="center" colspan="2">
            	<input type="submit" name="submit" value="Enter">
            </td>
    	</tr>
   	</form>
</table>
<?php include('connect.php'); ?>
<?php
if(isset($_REQUEST['submit']))
{
	mysqli_query($con,"INSERT INTO details(ID,NAME,PRICE,DISCOUNT,CATEGORY)VALUES('$_POST[id]','$_POST[name]','$_POST[price]','$_POST[discount]','$_POST[category]')");
	mysqli_close($con);
}
?>

<script>
<?php
if(isset($_REQUEST['submit']))
{
  if(mysqli_query($con,"INSERT INTO details(ID,NAME,PRICE,DISCOUNT,CATEGORY)VALUES('$_POST[id]','$_POST[name]','$_POST[price]','$_POST[discount]','$_POST[category]')")) {
    echo 'alert("Data is inserted");';
  } else {
    echo 'alert("Error inserting data");';
  }
  mysqli_close($con);
}
?>
</script>

</body>
</html>