<html><body><?php
    import_request_variables('p', 'p_');
    if ($p_seikyu == "on") {$seikyu = "ɬ��";}
    if ($p_bunri == "on") {$bunri = "ʬΥ";}
    if ($p_smoke == "on") {$smoke = "�ʱ�";}
    $data = q(date("YmdHi")) . ","
	. q($p_name) . ","
	. q($p_kana) . ","
	. q($p_sex) . ","
	. q($p_org) . ","
	. q($p_email) . ","
	. q($p_address) . ","
	. q($p_phone) . ","
	. q($p_kubun) . ","
	. q($p_ipsj) . ","
	. q($p_knum) . ","
	. q($p_pay) . ","
	. q($p_furikomibi) . ","
	. q($seikyu) . ","
	. q($p_atena) . ","
	. q($bunri) . ","
	. q($p_room) . ","
	. q($p_aite) . ","
	. q($smoke) . ","
	. q($p_sonota) . "\n";

    $file = fopen("regist.csv", "a");
    fwrite($file, e2s($data));
    fclose($file);

    $subject = "45th programming symposium registration";
    $message = e2j(
	"��45��ץ���ߥ󥰡�����ݥ�����λ��ÿ������ߤ�\n" .
	"�ʲ�����Ͽ���ƤǼ����դ��ޤ�����\n\n" .
	"��������      " . date(Yǯm��d��H��iʬ) . "\n" .
	"��̾          " . $p_name . "\n" .
	"���ʻ�̾      " . $p_kana . "\n" .
	"����          " . $p_sex . "\n" .
	"��°          " . $p_org . "\n" .
	"�Żҥ᡼��    " . $p_email . "\n" .
	"����          " . str_replace("\n", "\n              ",
			$p_address) . "\n" .
	"�����ֹ�      " . $p_phone . "\n" .
	"���û��      " . $p_kubun . "\n" .
	"��������ز�  " . $p_ipsj . "\n" .
	"����ֹ�      " . $p_knum . "\n" .
	"��ʧ��ˡ      " . $p_pay . "\n" .
	"������        " . $p_furikomibi . "\n" .
	"�������      " . $seikyu . "\n" .
	"���������̾  " . $p_atena . "\n" .
	"���ʬΥ      " . $bunri . "\n" .
	"����          " . $p_room . "̾1��\n" .
	"Ʊ�����      " . $p_aite . "\n" .
	"���Ф�        " . $smoke . "\n" .
	"����¾        " . $p_sonota . "\n\n" .
	"����������˾���줿���ʳ��ؤν����͹�����ѻߤ��ޤ�����\n" .
	"�����ˡ����ð�����Żҥ᡼���12���溢��ȯ��ͽ��Ǥ���\n" .
	"��Ͽ�����ѹ�������󥻥�Ϣ������¾���䤤��碌�ϡ�\n" .
	"prosym45@ipsj.or.jp �ޤǤ��ꤤ���ޤ���\n" .
	"����󥻥�δ��¤ϡ�12��19��(��)�Ǥ���" 
	);
    $headers = "From: prosym45@ipsj.or.jp";
    $parameters = "-f webmaster@bsis.brain.riken.jp";
    $ok = (
	"�����դ��ޤ�����<br>" . 
	"��Ͽ���Ƥ�᡼����������ޤ�����<br>" .
        "�᡼�뤬�Ϥ��ʤ�����" .
	"prosym45@ipsj.or.jp�ˤ��䤤��碌����������"
	);
    $ng = (
	"���餫�Υ��顼��ȯ�����ޤ�����<br>" .
	"prosym45@ipsj.or.jp�ˤ��䤤��碌����������"
	);
    if (mail($p_email, $subject, $message, $headers, $parameters)) {
        print($ok);
    } else {
        print($ng);
    }

    function e2s($string)
    { return(mb_convert_encoding($string, "SJIS", "EUC-JP")); }
    function s2e($string)
    { return(mb_convert_encoding($string, "EUC-JP", "SJIS")); }
    function e2j($string)
    { return(mb_convert_encoding($string, "ISO-2022-JP", "EUC-JP")); }
    function j2e($string)
    { return(mb_convert_encoding($string, "EUC-JP", "ISO-2022-JP")); }
    function j2s($string)
    { return(mb_convert_encoding($string, "SJIS", "ISO-2022-JP")); }
    function s2j($string)
    { return(mb_convert_encoding($string, "ISO-2022-JP", "SJIS")); }
    function q($string)
    { return("\"" . str_replace(",", "��", addcslashes($string, "\n\r")) . "\""); }

?></body></html>
