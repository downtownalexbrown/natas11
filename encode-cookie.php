<?php

// This function is directly out of the backend's source code
// The only change is the encryption key which was found using known-plaintext.php
function xor_encrypt($in) {
	$key = 'qw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jq';
	$text = $in;
	$outText = '';

	// Iterate through each character
    	for($i=0;$i<strlen($text);$i++) {  
		$outText .= $text[$i] ^ $key[$i % strlen($key)];
    	} 

	return $outText;
}

// Newdata is the new cookie with showpassword as true. Background color's value doesn't matter
$newdata = array( "showpassword"=>"yes", "bgcolor"=>"#ffffff");
echo base64_encode(xor_encrypt(json_encode($newdata)));

?>
