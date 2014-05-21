
<!-- page content -->
<div id="pageFullWidth">
    <form id="loginForm" action="index.php?q=auth&a=processAuth" method="post">
    	<div class="login">
            <div class="error"><?php print $formError; ?></div>
    		<label>Username:</label>
    		<input type="text" id="userId" name="userId" />
    		<br />
    		<label>Password:</label>
    		<input type="text" id="password" name="password" />
    		<button id="login" name="login">Login</button>
    		<br class=" clear" />
    	</div>
    </form>
</div>
<!-- End page content -->