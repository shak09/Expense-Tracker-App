<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <title>Expense</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container">
        <h1>List of Expenses</h1>




        <div class="container">
		<form action="" method="POST">
			<div class="input-group">
				<input type="text" placeholder="Product Name" name="productname">
			</div>
			<div class="input-group">
            <input type="text" placeholder="Product Price" name="productprice">
			</div>
			<div class="input-group">
            <input type="date" placeholder="Date" name="Date">
			</div>
            <div class="input-group">
				<button name="submit" class="btn">Save Expense</button>
			</div>
		</form>
	</div>

</body>
</html>

<?php
	$productname = $_POST['productname'];
	$productprice = $_POST['productprice'];
    $Date = $_POST['Date'];

	// Database connection for saving expense
	$conn = new mysqli('localhost','root','','login3');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO expensetable(productname, productprice, Date) values(?, ?, ?)");
		$stmt->bind_param("sss", $productname, $productprice, $Date);
		$execval = $stmt->execute();
		$stmt->store_result();
		echo $execval;
		echo "Expense sent successfully...";
		$stmt->close();
		$conn->close();

	}
?>