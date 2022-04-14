<?php

session_start();

session_destroy();

header('../../app/index.html');

?>