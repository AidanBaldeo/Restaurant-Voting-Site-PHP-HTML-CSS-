<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restirate</title>
    <link rel="stylesheet" href="main.css">
	</head>
		<body>
			<?php include "nav.php"; ?>
			
			<form method="post" action="logincheck.php">
				<div class="bideshi">
					<div>
						<label for="a">
						    <input type="radio" required name="Voteres" value="1" id="a" />
						    <div class="button">
						    	<img width="500" src="kfc.png" alt="kfc" class="image">
						    	<div class="overlay">
						      		<div class="text">Click to Vote</div>
						 		</div>
						 	</div>
						</label>
					</div>
					<label for="b">
					    <input type="radio" name="Voteres" value="5" id="b" />
					    <div class="button">
					    	<img width="500" src="bk.jpg" alt="bk" class="image">
					    	<div class="overlay">
				    	     	<div class="text">Click to Vote</div>
				    		</div>
					   	</div>
					</label>
					<label for="c">
					    <input type="radio" name="Voteres" value="4" id="c" />
					    <div class="button">
					    	<img width="500" src="mcdonalds.png" alt="md" class="image">
					    	<div class="overlay">
				    	     	<div class="text">Click to Vote</div>
				    		</div>
					    </div>
					</label>
					<label for="d">
					    <input type="radio" name="Voteres" value="3" id="d" />
					    <div class="button">
					    	<img width="500" src="wendys.png" alt="wd" class="image">
					    	<div class="overlay">
				    	     	<div class="text">Click to Vote</div>
				    		</div>
					    </div>
					</label>
					<div id="logincontent">
						<div class="loginform">
							<div id="login">Login</div>
							<div class="linputs">
								<input type="text" name="uname" required>
								<span>Username</span>
							</div>
							<div class="linputs">
								<input type="password" name="pword" required>
								<span>Password</span>
							</div>
							<button type="submit" name="votesubmit">Vote</button>
						</div>	
					</div>	
					<label for="e">
					    <input type="radio" name="Voteres" value="2" id="e" />
					    <div class="button">
					    	<img width="500" src="dominoes.png" alt="dm" class="image">
					    	<div class="overlay">
				    	     	<div class="text">Click to Vote</div>
				    		</div>
					    </div>
					</label>
				</div>
			</form>
		</body>
	</html>
