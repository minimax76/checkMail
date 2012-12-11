<?php
$email = 'me@email.com';
!preg_match("/^[-0-9A-Z_.]{1,50}@([-0-9A-Z_.]+.){1,50}([0-9A-Z]){2,4}$/i", $email);

?>