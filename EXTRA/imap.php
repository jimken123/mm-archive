<?php

#error_reporting(E_ALL^E_NOTICE);
#error_reporting(E_ALL);
#ini_set("display_errors", 1);
#ini_set("display_startup_errors", 1);

$authhost="{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX";
$user="dargleg@googlemail.com";

$user="dargleg";
$pass="gargle2gauge";

if ($mbox=imap_open( $authhost, $user, $pass ))
        {
         echo "<h1>Connected</h1>\n";
         imap_close($mbox);
        } else
        {
         echo "<h1>FAIL!</h1>\n";
        }

?>
