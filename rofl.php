<?php
$output = shell_exec("ping google.com > /dev/null 2>/dev/null &");
echo "<pre>$output</pre>";
echo "hallo welt!";