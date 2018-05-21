<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;

use R\Translate;

final class TranslateTest extends TestCase
{

    public function testTranslate()
    {
        $t=new Translate;
        print_r($t->translate("你好","auto","en"));
    }
}