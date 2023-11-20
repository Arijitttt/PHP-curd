<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
<h2>Delete Record</h2>

<form method="post" action="delete.php">
  <tr>
    <td>Enter ID to delete: </td>
    <td><input type="text" name="id"></td>
  </tr>
  <tr>
    <td align="center" colspan="2">
      <input type="submit" name="submit" value="Delete">
    </td>
  </tr>
</form>

<?php include('connect.php'); ?>

<?php
if (isset($_REQUEST['submit'])) {
  $deleteId = $_POST['id'];

  if (mysqli_query($con, "DELETE FROM details WHERE ID = '$deleteId'")) {
    echo '<p style="color: green;">Record deleted successfully.</p>';
  } else {
    echo '<p style="color: red;">Error deleting record.</p>';
  }

  mysqli_close($con);
}
?>

<script>
  <?php
  if (isset($_REQUEST['submit'])) {
    if (mysqli_query($con, "DELETE FROM details WHERE ID = '$deleteId'")) {
      echo 'alert("Record deleted successfully.")';
    } else {
      echo 'alert("Error deleting record.")';
    }
  }
  ?>
</script>

</body>
</html>