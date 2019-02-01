<?php include "config.php";?>
<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Savory <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
						<li class="has-dropdown">
							<a href="">Menu</a>
							<ul class="dropdown">
                            <?php 
							$sql="select * from category_tbl";
							$rs=mysqli_query($con,$sql);
							while($d=mysqli_fetch_array($rs))
							{
							
							?>
								<li><a href="pizza_detail.php?id=<?php echo $d['categoryid'];?>"><?php echo $d['categoryname'];?></a></li>
								<?php
							}
							?>
							</ul>
						</li>
						
					
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
