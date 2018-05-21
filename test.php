<?

date_default_timezone_set('Asia/Hong_Kong');
ini_set("display_errors", "On");
error_reporting(E_ALL && ~E_WARNING);
setlocale(LC_ALL, 'en_US.UTF-8'); //do not remove

require_once __DIR__ . "/vendor/autoload.php";

use R\Translate;

$t = new Translate;

//$str="HOSTLINK 的發展項目多元化，務求令我們每一位客戶都可以享用高質素的服務。其中重點包括在現有客戶的系統上不斷更新，我們深信科技的發展，是一日千里，而HOSTLINK的服務也是同樣作一個目標，這也是我們遠勝對手的原因。";

echo $t->translate("Hello","en","zh-TW");

//print_r($t->translate($str,"auto","en"));
//print_r($t->exec(,"zh-TW","en"));

