
<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
    
    <p><?php echo PerchLang::get('You can add user accounts and assign a role.'); ?></p>
    
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
    
<?php include ('_subnav.php'); ?>


	   <h1><?php echo PerchLang::get('Adding a New User Account'); ?></h1>


    <?php echo $Alert->output(); ?>

    <h2><?php echo PerchLang::get('User details'); ?></h2>

    <form action="<?php echo PerchUtil::html($fCreateUser->action()); ?>" method="post" class="sectioned" autocomplete="off">
		
        <div class="field <?php echo $fCreateUser->error('userUsername', false);?>">
            <?php echo $fCreateUser->label('userUsername', 'Username'); ?>
            <?php echo $fCreateUser->text('userUsername', $fCreateUser->get(false, 'userUsername'), ''); 

            if (PERCH_PARANOID) {
            	echo $fCreateUser->hint(PerchLang::get('Usernames are case-sensitive'));
            }

            ?>
        </div>
        
        <div class="field <?php echo $fCreateUser->error('userGivenName', false);?>">
            <?php echo $fCreateUser->label('userGivenName', 'First name'); ?>
            <?php echo $fCreateUser->text('userGivenName', $fCreateUser->get(false, 'userGivenName'), ''); ?>
        </div>
		
		<div class="field <?php echo $fCreateUser->error('userFamilyName', false);?>">
			<?php echo $fCreateUser->label('userFamilyName', 'Last name'); ?>
			<?php echo $fCreateUser->text('userFamilyName', $fCreateUser->get(false, 'userFamilyName'), ''); ?>
		</div>
		
		<div class="field <?php echo $fCreateUser->error('userEmail', false);?>">
			<?php echo $fCreateUser->label('userEmail', 'Email'); ?>
			<?php echo $fCreateUser->email('userEmail', $fCreateUser->get(false, 'userEmail'), 'autocomplete="off"'); ?>
		</div>
		<?php
			if (!PERCH_PARANOID) {
		?>
		<div class="field <?php echo $fCreateUser->error('userPassword', false);?>">
			<?php echo $fCreateUser->label('userPassword', 'Password'); ?>
			<?php echo $fCreateUser->password('userPassword', $fCreateUser->get(false, 'userPassword'), ''); ?>
		</div>

		<div class="field <?php echo $fCreateUser->error('userPassword2', false);?>">
			<?php echo $fCreateUser->label('userPassword2', 'Repeat the password'); ?>
			<?php echo $fCreateUser->password('userPassword2', $fCreateUser->get(false, 'userPassword2'), ''); ?>
		</div>
		<?php } // !PARANOID ?>
		
		<div class="field <?php echo $fCreateUser->error('roleID', false);?>">
			<?php echo $fCreateUser->label('roleID', 'Role'); ?>
			<?php 
			    $opts = array();
			    
				$selection = false;
			
			    if (PerchUtil::count($roles)) {
                    foreach($roles as $Role) {
                        $opts[] = array('label'=>$Role->roleTitle(), 'value'=>$Role->id());
						if (!$selection && !$Role->roleMasterAdmin()) {
							$selection = $Role->id();
						}
                    }
                }
			    
			    echo $fCreateUser->select('roleID', $opts, $fCreateUser->get(false, 'roleID', $selection), ''); ?>
		</div>

		<?php
			if (!PERCH_PARANOID) {
		?>
        <div class="field">
			<?php echo $fCreateUser->label('sendEmail', 'Send welcome email'); ?>
			<?php echo $fCreateUser->checkbox('sendEmail', '1', '1'); ?>
		</div>

		<?php } // !PARANOID ?>


		<?php
			if (PERCH_PARANOID) {
		?>
		<h2><?php echo PerchLang::get('Authenticate'); ?></h2>
		<div class="field <?php echo $fCreateUser->error('currentPassword', false);?>">
			<?php echo $fCreateUser->label('currentPassword', 'Your password'); ?>
			<?php echo $fCreateUser->password('currentPassword', $fCreateUser->get(false, 'currentPassword'), ''); ?>
		</div>

		<?php } // PARANOID ?>

		<p class="submit">
			<?php 		
				echo $fCreateUser->submit('submit', 'Create user', 'button');
				echo ' ' . PerchLang::get('or') . ' <a href="'.PERCH_LOGINPATH.'/core/users">' . PerchLang::get('Cancel'). '</a>'; 
			?>
		</p>
	</form>


<?php include (PERCH_PATH.'/core/inc/main_end.php'); ?>