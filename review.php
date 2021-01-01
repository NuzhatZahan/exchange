<!DOCTYPE HTML>
<HTML>
<head>
	<title>Exchange Now</title>
  <meta charset="UTF-8">

  <!-- Font awesome  -->
  <link rel="stylesheet" href="css/fontawesome.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive css -->
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/semantic.min.css">

</head>

<header class="header fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Brand -->
       <a class="navbar-brand" href="#"></span>Exchange Now</a>

      <!-- Toggler/collapsibe Button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
       </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link active" href="index.php"> Home</a>
         </li>
         
         <li class="nav-item">
           <a class="nav-link active" href="exchange.php"> Exchange</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="buynow.php"> Buy Now</a>
         </li>
		 
		 <li class="nav-item">
           <a class="nav-link active" href="login.php"> Login</a>
         </li>
         
        
       </ul>
      </div>
    </nav>

  </div>
</header>

	<!--<header>
		
		<h1> 
		
		Review Section
		 
		
		</h1>
		
		<h2>
		
		Before you purchase, why not look at what others have to say? 
		
		</h2>
	
	</header>!-->
	<body>
		<br><br><br>
    <div class="ui text container" style ="text-align: center;">
    <div style ="text-align: center; background-color: #9edd45; padding: 3% ">
    <h1> Review Section </h1>
    <p> Before you purchase, why not look at what others have to say? </p>
   </div>
   <br><br><br>

	<body>
	
	<div>
		<form action = "review_submit.php" method = "post">

		<div class="ui  text container" style= "text-align: center;">
        <div><h3>Product Name</h3></div>
        <div class="ui input">
        <input type="text" name="pr_name" placeholder= "Enter Product Name">
        </div>
        </div>
		<br><br>

		<div class="ui  text container" style= "text-align: center;">
        <div><h3>Product TYPE</h3></div>
        <div class="ui input">
        <input type="text" name="type" placeholder= "Enter Product Type">
        </div>
        </div>
        <br><br>

        <div class="ui  text container" style= "text-align: center;">
        <div><h3>UserName </h3></div>
        <div class="ui input">
        <input type="text" name="user" placeholder= "Enter Your Name">
        </div>
        </div>
        <br><br>
		
		
		<div class="ui  text container" style= "text-align: center;">
        <div><h3>Comment </h3></div>
        <div class="ui input">
        <input type="text" name="comment" placeholder= "Enter Your Comments">
        </div>
        </div>
        <br><br>
		

		<div class="ui  text container"style= "text-align: center;">
        <button class="ui red huge button"style= "text-align: center;"> Submit </button>
        </div>
        </div>
        <br><br>

		<!--<input type="submit" value="Add Review">-->
		
		</form>
	
		
	
	</div>
	
	<?php
	$servername="localhost";
	$username="exchange";
	$password="mysql";
	$dbname="exchange_now";
    
	$conn = new mysqli($servername, $username, $password, $dbname);
    
	if ($conn->connect_errno) {
          printf("Connect failed: %s\n", $conn->connect_error);
        exit();
		
    }

    $query = "SELECT * FROM `product_review` ";
    
    if ($result = $conn->query($query)) {
      printf('<div class="ui text container">');
      printf('<table class="ui unstackable table">');
      printf("<thead> <tr> <th>Product Name</th> <th>Type</th> <th>User</th> <th>Comment</th> </tr> </thead>");

      //$index = 1;
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
			//$something = $row["P_NAME"];
            printf ('<tr> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>  
			
			
            </tr>' ,$row["PR_NAME"], $row["TYPE"], $row["USERNAME"], $row["COMMENT"]);

            //$index++;
        }

        printf("</table>");
        printf("%d record(s) found!<br>", $result->num_rows);
      printf('</div>');

        $result->free(); //free result set
    }
    else
    {
      printf("No record found!");
    }
    
    $conn->close();
  ?>


	</body>

</HTML>