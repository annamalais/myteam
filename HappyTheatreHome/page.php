
<?php
	include("db.php");
	
	$prodID = $_GET['prodid'];

	if(!empty($prodID)){
        $sql = "select * from page where id = '$prodID'";
        $sqlSelectSpecProd = mysqli_query($connection,$sql);
		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd,MYSQLI_BOTH);
		$ptitle = $getProdInfo["title"];
		$pdes = $getProdInfo["description"];
		$pimg = $getProdInfo["imgUrl"];
				}
?>

<?php include('header.php'); ?>
<style>
<style>
ul.dropdown-menu.multi-column ul li a{
	transition:.3s ease-in;
	-webkit-transition:.3s ease-in;
	-moz-transition:.3s ease-in;
	-o-transition:.3s ease-in;
	-ms-transition:.3s ease-in;
}

ul.dropdown-menu.multi-column ul li{
    display:block;
	margin-bottom:.5em;
}
ul.dropdown-menu.multi-column ul li a{
	color:#212121;
}
ul.dropdown-menu.multi-column {
    width: 200px;
    left: 0;
    padding: 1em;
}
ul.dropdown-menu.multi-column ul li a:hover{
	color:#FF8D1B;
}

</style>
<body>

    <div class="container">

        <div class="masthead">
            <h3 class="text-muted">Happy Theatre</h3>
            <ul class="nav nav-justified">
                <li><a href="index.php">Home</a>
                </li>
                    <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genre <b class="caret"></b></a>
					<ul class="dropdown-menu multi-column columns-3">
						<li>
						
						<div class="col-sm-4">
							<ul class="multi-column-dropdown">
								<li><a href="genre.php?genre='animation'">Animation</a></li>
								<li><a href="genre.php?genre='fantasy'">Fantasy</a></li>
								<li><a href="genre.php?genre='horror'">Horror</a></li>
								<li><a href="genre.php?genre='scifi'">Sci_Fi</a></li>
								<li><a href="genre.php?genre='action'">Action</a></li>
								<li><a href="genre.php?genre='history'">History</a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
						</li>
					</ul>
					</li>
                
                <li><a href="fav.php">Favorites</a>
                </li>
                <li><a href="showtime.php">ShowTimes</a>
                </li>
                <li><a href="#">Offers</a>
                </li>
                <li><a href="/happytheatrehome/bookticket/login.php">Signup/Login</a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="well">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $pimg; ?>" alt="">

                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="thumbnail">

                        <div class="caption">
                            <h3><?php echo $ptitle; ?></h3> 
                            <p><?php echo $pdes; ?></p>
                            <p>
                              <a href="/happytheatrehome/bookticket/index.php" class="btn btn-primary">Book Ticket</a>  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>