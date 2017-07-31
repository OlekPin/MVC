<?php include ROOT . '/views/layouts/header.php'?>
<section id="form" style="margin-top: 0px;"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1 padding-right">
                        <?php if ($result):?>
						<h2>Вы зарегестрированы!</h2>
                        <?php else: ?>
                            <?php if(isset($errors) && is_array($errors)):?>
                                <?php foreach ($errors as $error):?>
                                    <li><?php echo $error?></li>
                                <?php endforeach;?>
                            <?php endif; ?>
                        <div class="signup-form">   <!--sign up form-->
						<form action="#" method="post">
							<input type="text" name="name" placeholder="Name" value="<?php echo $name?>"/>
							<input type="email" name="email" placeholder="Email Address" value="<?php echo $email?>"/>
							<input type="password" name="password" placeholder="Password" value="<?php echo $password?>"/>
							<input type="submit" name="submit" class="btn btn-default">Signup</input>
						</form>
					    </div><!--/sign up form-->
                        <?php endif;?>
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php include ROOT . '/views/layouts/footer.php'?>