<!-- Coded by ILGAZ -->
<!-- 01001110 01100101 00100000 01001101 01110101 01110100 01101100 01110101 00100000 01010100 01110101 01110010 01101011 01110101 01101101 00100000 01000100 01101001 01111001 01100101 01101110 01100101 00100001 -->


<?php
	
	$chatid = $_POST['chatid'];
	$token = $_POST['token'];
	$mesaj = $_POST['mesaj'];



$token = "$token";
 
$parametre= array(
'chat_id' => "$chatid",
'text' => "$mesaj",
	);
$ch = curl_init();
$url = "https://api.telegram.org/bot".$token."/sendmessage";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
header("Location:index.php");

?>