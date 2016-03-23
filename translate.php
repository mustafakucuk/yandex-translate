<?php
/* Use Yandex.ru translation to translate tags
 * Template Name: Yandex
 * Since 1.0
 */
class yandex {
	private $APIkey = "<api-key>"; //See http://api.yandex.com/translate/doc/dg/reference/translate.xml
	public function translate ($text,$lang) {
	  $t 			= urlencode($text);
	  $url 			= "https://translate.yandex.net/api/v1.5/tr/translate?key=";
	  $url			.= "{$this->APIkey}&format=html&lang={$lang}&text={$t}";
	  if ($xml = simplexml_load_file($url)) {
		return $xml;
	  }
	  else return false;
	} // yandex_trans
}
$ya 	= new yandex();
$txt 	=  $_POST["ttext"];
$lang	= "tr";
$trans 	= $ya->translate($txt, $lang);
echo $trans->text;
?>
