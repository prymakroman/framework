
      <!-- page content -->
      <div id="pageFullWidth">
      	<h1>View Profile</h1>
		<div class="content">
			<p>Name: <?php echo $user->user_nicename; ?></p>
			<p>Email Address: <?php echo $user->user_email; ?></p>
			<?php if ( $mine ) : ?>
			<a class="btn btn-inverse" href="index.php?q=edit">Edit Profile</a>
			<?php endif; ?>
			<?php if ( !$mine ) : ?>
				<?php if ( !in_array($user_id, $friends) ) : ?>
					<p>
						<form method="post">
							<input name="user_id" type="hidden" value="<?php echo $logged_user_id; ?>" />
							<input name="friend_id" type="hidden" value="<?php echo $user_id; ?>" />
							<input name="type" type="hidden" value="add" />
							<input type="submit" value="Add as Friend" class="btn btn-inverse" />
						</form>
					</p>
				<?php else : ?>
					<p>
						<form method="post">
							<input name="user_id" type="hidden" value="<?php echo $logged_user_id; ?>" />
							<input name="friend_id" type="hidden" value="<?php echo $user_id; ?>" />
							<input name="type" type="hidden" value="remove" />
							<input type="submit" value="Remove Friend" class="btn btn-inverse" />
						</form>
					</p>
				<?php endif; ?>
			<?php endif; ?>
		</div>
      </div>
      <!-- End page content -->

      