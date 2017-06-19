<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
</head>
<?php
include('db.php');
?>
<body>

            <?php
            
        $prodid = $_GET['prodid'];
        if(!empty($prodid)){
        $sql = "DELETE from page where id = $prodid";
        $result = mysqli_query($connectionpage,$sql);
		echo "<div class='alert alert-success'>Movie delete from database. You will be automatically redirected after 3 seconds.</div>";
            header('refresh: 3; login.php');  	
        }
            ?>
            

</body>