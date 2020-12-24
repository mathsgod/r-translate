<?php

date_default_timezone_set('Asia/Hong_Kong');
ini_set("display_errors", "On");
error_reporting(E_ALL && ~E_WARNING);
setlocale(LC_ALL, 'en_US.UTF-8'); //do not remove

require_once __DIR__ . "/vendor/autoload.php";

use R\Translate;

$t = new Translate;

$str = <<<EOT
<li>數據中心選擇：多達五個數據中心選擇，遍布香港九龍新界，恆溫操控環境，FM200氣體滅火系統和預作用式灑水系統</li>
<li>維修和保養：7x24小時緊急技術支援熱線</li>
<li>服務質素：特快交付服務，專人跟進處理</li>
EOT;


echo $t->translate($str, "auto", "en");

//print_r($t->translate($str,"auto","en"));
//print_r($t->exec(,"zh-TW","en"));
