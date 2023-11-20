<!doctype html>
<html>
<head>
<style>
    #result-table {
      opacity: 0; 
      transition: opacity 0.5s ease-in-out;
    }
  </style>
<title>Home</title>
</head>
<body>
    <h2>e-cart information :-</h2>
    <button id="show-results-button">Show Results</button>
	<table id="result-table" align="center" border="1" bgcolor="YELLOW" padding="10px">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
            <th>DISCOUNT</th>
			<th>CATEGORY</th>
		</tr>
	<?php include('connect.php');?>
	<?php
	$query="SELECT ID,NAME,PRICE,DISCOUNT,CATEGORY FROM details";
	$data=mysqli_query($con,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
		while($result=mysqli_fetch_assoc($data))
		{
			echo ("<tr align='center'>
					<td>".$result['ID']."</td>
					<td>".$result['NAME']."</td>
					<td>".$result['PRICE']."</td>
					<td>".$result['DISCOUNT']."</td>
                    <td>".$result['CATEGORY']."</td>
				</tr>" );
		}
	}
	mysqli_close($con);
	?>
	</table>


    <script>
    const showResultsButton = document.getElementById('show-results-button');
    const resultTable = document.getElementById('result-table');

    let isVisible = false;

    showResultsButton.addEventListener('click', () => {
        isVisible = !isVisible; 

if (isVisible) {
  resultTable.style.opacity = 1; 
  showResultsButton.textContent = 'Hide Results';
} else {
  resultTable.style.opacity = 0; 
  showResultsButton.textContent = 'Show Results';
}
    });
  </script>
</body>
</html>