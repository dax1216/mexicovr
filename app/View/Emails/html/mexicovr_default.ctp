<p>Hello <?php echo $user['User']['first_name'] . ' ' . $user['User']['last_name'] . ','; ?></p>
<?php
$emailContent = explode('\n', $emailContent);

foreach ($emailContent as $line):
    echo '<p> ' . $line . "</p>";
endforeach;
?>
<br />
Regards,<br />
Admin
