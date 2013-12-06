<p>Hello <?php echo $user['User']['first_name'] . ' ' . $user['User']['last_name'] . ','; ?></p>
<p>This email was sent to recover your password. We created a temporary password for your account. Please <a href="<?php echo $login_url; ?>">log-in</a> and change this as soon as possible.</p>

<p>New Password: <?php echo $temp_password; ?></p>
<br />
Regards,<br />
Admin