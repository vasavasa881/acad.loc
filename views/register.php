<?php include_once ROOT.'/views/layot/header.php'; ?>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<?php if(isset($errors)&& is_array($errors)):?>
				<ul>
					<?php foreach ($errors as $error): ?>
					<li> - <?php echo $error; ?> </li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>


				<div id="content">
					<div class="signup-form">
						<h2> Регистрация на сайте</h2>
						<form action="#" method="post">
							<input type="text" placeholder="Имя" name="name" value="<?php echo $name; ?> "/>
							<input type="email" placeholder="e-mail" name="email" value="<?php echo $email; ?>" />
							<input type="password" placeholder="Пароль" name="password"/>
							<input type="submit" name="submit" class="btn-default" value="Регистрация"/>
							<br>
							<p><a href='/' > Back to HomePage</a></p>
						</form>

						</div>
					</div>

				</div>
				<!-- end #content -->

			</div>

		</div>
	</div>
	<!-- end #page -->
</div>
<?php include_once ROOT.'/views/layot/footer.php'; ?>
<!-- end #footer -->
</body>
</html>
