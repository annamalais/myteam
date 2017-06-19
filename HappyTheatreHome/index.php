

<!-- Data Base Connection -->
<?php include('db.php'); ?>

<!-- Header Defualt Codes -->
<?php include('header.php');?> 
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
 <!--php starts here-->
<?php				
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$sql = "SELECT * FROM page where title like '%$filter%' or description like '%$filter%'";
                    $result = mysqli_query($connection,$sql);
				}
				else
				{
                    $sql = "SELECT * FROM page";
                    $result = mysqli_query($connection,$sql);
                }
					
				if($result){				
				while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){
					
				$prodID = $row["id"];	
					echo '<div class="col-sm-6 col-md-4">';
                    echo '<div class="thumbnail">';
                    echo '<img src="'.$row['imgUrl'].'" alt="item1">';
                    echo '<div class="caption">';
                    echo '<h3>'.$row['title'].'</h3>';
                    echo '<p>'.$row['description'].'</p>';
                    echo  '<p><a href="page.php?prodid='.$prodID.'" class="btn btn-primary" role="button">View More</a> 
                            <a href="addfav.php?prodid='.$prodID.'" class="btn btn-info" role="button">Favorite <span class="glyphicon glyphicon-heart"></span></a>
                            <a href="movieshowtime.php?prodid='.$prodID.'" class="btn btn-success" role="button">ShowTime <span class="glyphicon glyphicon-time"></span></a>
                            </p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    		
				}
				}
?>
 <!--php End here-->   
                
            </div>
        </div> 


<?php include('footer.php'); ?>