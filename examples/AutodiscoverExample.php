<?php
$email = '';
$password = '';
$auto = new EWSAutodiscover($email, $password);
//$auto->setCAInfo('/path/to/your/cacert.pem');
$ews = $auto->newEWS();