<!DOCTYPE HTML>
<?php 
	$pr_type = $_POST['pr_name'];
	$type = $_POST['type'];
	$user = $_POST['user'];
	$comment = $_POST['comment'];
?>
<html>
<head>

	<h1>Review</h1>

</head>

<body>
	<?php
	
	$servername = "localhost";
	$username = "exchange";
	$password = "mysql";
	$dbname = "exchange_now";
    
	$conn = new mysqli($servername, $username, $password, $dbname);
    
	if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
		
    }
	
	$sql = "INSERT INTO product_review(PR_NAME,TYPE,USERNAME,COMMENT) 
	        VALUES ('$pr_type','$type','$user','$comment')" ; 
	
	if ($conn->query($sql) === TRUE) {
			printf("Review added successfully");
		} 
	else {
			echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
		}
		
	
	$conn -> close();
	
	?>
	
	
	
	<br><a href= "index.php"> GO back to home page</a><br>
	<a href = "review.php"> Go back to main review page </a><br>



</body>
</html>