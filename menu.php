<h2>Menu<h2>
<ul>

	<?php if($page_file_name == "home.php"){ ?>
	
		<li>Home</li>
		
	<?php }else{ ?>
		<li>
			<a href="home.php">Home</a>
		</li>
	<?php } ?>
	
	
	
	
	
	<?php
		if($page_file_name == "login.php"){
				echo '<li>Login</li>';
			}else{
				echo '<a href="login.php">Login</a>';
		}
	?>
	
</ul>	