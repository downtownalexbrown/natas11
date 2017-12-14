<?php
$cookie = 'ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw';
// Response cookie given by array("showpassword"=>"no", "bgcolor"=>"#ffffff") 

function xor_prepare($input) {
	$yes = base64_decode($input);
	echo "base64 decoded cookie: " . $yes . "\n\n";
	return $yes;
}

function xor_decode($input) {
	// The array in $key is the default cookie values, as seen in backend.php
	$key = json_encode(array("showpassword"=>"no", "bgcolor"=>"#ffffff"));
	$text = xor_prepare($input);
	$outText='';

	// Iterate over each character for the xor
	for($i=0;$i<strlen($text);$i++) {
		$outText .= $text[$i] ^ $key[$i % strlen($key)];
	}

	return $outText;
}

echo "xor encryption key: " . xor_decode($cookie) . "\n\n";


?>
