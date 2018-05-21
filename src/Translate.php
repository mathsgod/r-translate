<?
namespace R;

class Translate
{

    public function translate($text, $from, $to)
    {

        //replace \n to space
        $text=str_replace("\n"," ",$text);

        //remove \r
        $text=str_replace("\r","",$text);

        if (strrpos($text, "。") === false) {

            return $this->exec($text, $from, $to);
        }

        $ret = [];
        $ss = explode("。", $text);
        foreach ($ss as $s) {
            if ($s == "") continue;
            $str = $s . "。";
            $ret[] = $this->exec($str, $from, $to);
        }
        return implode(" ", $ret);
    }

    public function exec($text, $from, $to)
    {
        if ($text == "") return "";
        $p = [];
        $p["client"] = "gtx";
        $p["sl"] = $from;
        $p["tl"] = $to;
        $p["dt"] = "t";
        $p["q"] = $text;
        $p["ie"] = "UTF-8";
        $p["oe"] = "UTF-8";

        $options = [
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
                "header" => "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36"
            ]
        ];

        $resp = file_get_contents("https://translate.googleapis.com/translate_a/single?" . http_build_query($p), false, stream_context_create($options));
        $resp = json_decode($resp, true);

        return $resp[0][0][0];
    }
}