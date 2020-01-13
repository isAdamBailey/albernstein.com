<?php


function footerDate() {
	if (date('Y') == 2016) {
		echo date('Y');
	} else {
		echo '2016 - '.date('Y');
	}
}


// activate navbar
function echoActive($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'active';
}