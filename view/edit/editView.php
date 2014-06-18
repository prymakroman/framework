
      <!-- page content -->
      <div id="pageFullWidth">
      	<h1>Edit Profile</h1>
		<div class="content">
			<form method="post">
				<p>
					<label class="labels" for="name">Full Name:</label>
					<input name="user_nicename" type="text" value="<?php echo $user->user_nicename; ?>" />
				</p>
				<p>
					<label class="labels" for="email">Email Address:</label>
					<input name="user_email" type="text" value="<?php echo $user->user_email; ?>" />
				</p>
				<p>
					<label class="labels" for="password">Password:</label>
					<input name="user_pass" type="password" value="<?php echo $user->user_pass; ?>" />
				</p>
				<p>
					<input type="submit" value="Submit" class="btn btn-inverse" />
					<a class="btn btn-inverse" href="index.php?q=view">View Profile</a>
				</p>
			</form>
		</div>
      </div>
      <!-- End page content -->