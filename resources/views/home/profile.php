<div class="row">
	<div class="container">
		<div class="row">
			<div class="col-lg">
					<div class="jumbotron mt-4 bg-transparent">
					    <h1 class="display-4">My Profile</h1>
					    <form action="" method="post" class="mt-4">
					    	<div class="form-group">
					            <label for="username">Username</label>
					            <input type="text" class="form-control" id="username" name="username" value="<?= $_SESSION['login']['username']; ?>">
					        </div>
					        <div class="form-group">
					            <label for="username">Email</label>
					            <input type="email" class="form-control" id="username" name="username" value="<?= $_SESSION['login']['email']; ?>">
					        </div>
					        <button type="submit" class="btn btn-primary mt-2">Change My Profile</button>
					    </form>
					</div>
			</div>
			<div class="col-lg">
						
			</div>
		</div>
	</div>
</div>