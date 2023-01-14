<?php

session_start();

echo 'Your session variables:<br>';
echo 'username: ' . ((isset($_SESSION['username'])) ? $_SESSION['username'] : '&lt;empty&gt;') . '<br>' ;
echo 'session_id: ' . ((isset($_SESSION['session_id'])) ? $_SESSION['session_id'] : '&lt;empty&gt;') . '<br>' ;

?>
