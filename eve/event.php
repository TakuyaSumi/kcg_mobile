<?php
require '../google-mobile-ana.php';
/* access log */
$data_path = '/var/www/html/mobile/w/';
$datafile  = $data_path . 'm' . date("Ym") . '.csv';
$fp        = fopen($datafile, "a");
fwrite($fp, '"' . $_SERVER["REMOTE_ADDR"] . '",');
fwrite($fp, '"' . $_SERVER["REQUEST_URI"] . '",');
fwrite($fp, '"' . $_SERVER["HTTP_USER_AGENT"] . '",');
fwrite($fp, '"' . $_SERVER['HTTP_REFERER'] . '",');
fwrite($fp, '"' . date("Y-m-d H:i:s") . '",');
fwrite($fp, '""' . "\n");
fclose($fp);
$file     = "../data/event_list.txt";
$text_arr = Get_Text($file);
for ($cnt = 0; $cnt < count($text_arr); $cnt++) {
    $buf        = $text_arr[$cnt];
    $buf        = trim($buf);
    $buf        = ereg_replace("\n", "<br>\r\n", $buf);
    $data[$cnt] = $buf;
}
Header("Content-Type: text/html;charset=euc-jp");
?>
<html>
<head>
<title>���Ԏ��ݎˎߎ������ر�mobile</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
</head>

<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/iPhone|Android/', $ua)) {
    echo '<body bgcolor="#ffffff" text="#505050" link="#0082fe" vlink="#0082fe" style="margin:0;padding:0">' . "\n";
} else {
    echo '<body bgcolor="#ffffff" text="#505050" link="#0082fe" vlink="#0082fe">' . "\n";
}
?>
<font size="1" color="#505050">

<a name="top"></a>
���ڤˡ����Ԏ��ݎˎߎ������ر����θ����褦!

<div align="center"><img src="../img/eve/ttl_eve00.jpg" alt="���٥�Ⱦ���"></div>
<div align="center">
<a href="#e01">�����̎ߎݎ����ݎʎߎ�</a>|
<a href="#e02">������ŵ</a>
</div>

<hr color="#002bae">

<a name="e01"></a>
<a name="oc"></a>
<font color="#002bae">&lt;&lt;�����̎ߎݎ����ݎʎߎ�&gt;&gt;</font><br>
<div align="center">----------------------</div>
<?php
echo $data[0];
?>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">���͎ގݎĤػ��ä򿽤����ࢪ</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="e02"></a>
<font color="#002bae">&lt;&lt;�����̎ߎݎ����ݎʎߎ�������ŵ&gt;&gt;</font><br>
<div align="center">----------------------</div>
<?php
echo $data[1];
?>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">���͎ގݎĤػ��ä򿽤����ࢪ</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<?php
/*
<a name="e10"></a>
<font color="#002bae">&lt;&lt;���˥ᡤ�����ࡤ�����ץ졤�ե��å����ġ�����ƥ�ĥӥ��ͥ���ؤܤ��������̸����ֺ¤򳫹�&gt;&gt;</font><br>
<div align="center">----------------------</div>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">���͎ގݎĤػ��ä򿽤����ࢪ</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="e03"></a>
<font color="#002bae">&lt;&lt;��Ω50��ǯ��ǰ�ֱ��֤������ڤ���������ȯ�����褦��&gt;&gt;</font><br>
�ֽ鲻�Ў��פγ�ȯ��꤬���뎸�؎̎ߎĎݡ��̎������������ҎÎގ����ʳ�����ɽ������ΰ�ƣ��Ƿ����̳�ƻ�����ر�����ʳظ���ʶ����λ��ܶ���ˤ��ֱ�Ǥ������᤯�����Ϥ��Ҥ����ä���������
<div align="center">----------------------</div>
<?php echo $data[2]?>
<div align="right"><a href="https://support.kcg.edu/50th/event_entry/">���͎ގݎĤػ��ä򿽤����ࢪ</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="e03"></a>
<font color="#002bae">&lt;&lt;���������´�Ը�������������&gt;&gt;</font><br>
<div align="center">----------------------</div>
<?php echo $data[5]?>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">���͎ގݎĤػ��ä򿽤����ࢪ</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="e05"></a>
<font color="#002bae">&lt;&lt;���ݎ����Ȏ��ľ�ΰ�ˡ��ͭ�������к����ЎŎ�������̤�衡����Ƹ�Ύߎَ��к����濴��&gt;&gt;</font><br>
����ˡ�����܎��ݎ����Ȏ��Ď̎ߎێʎގ����ގ�����Ύ����ݎ����Ȏ��ľ�ΰ�ˡ��ͭ�������к����ЎŎ�������̤�衡����Ƹ�Ύߎَ��к����濴�ˎ���KCG�ǳ��Ť���ޤ�����̣�Τ������Ϥ����ä�������������̵����
<div align="center">----------------------</div>
������<br />
2��28�����ڡˡ�3��1���ʶ��<br />
<br />
��졧<br />
<a href="http://www.kcg.ac.jp/mobile/acc/acc_map03.html">���Ԏ��ݎˎߎ������ر� ���Ա�����</a><br />
<?php echo $data[6]?>
<div align="right"><a href="http://www.jaipa.or.jp/topics/?p=558">�َܺ��������ߢ�</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="e04"></a>
<font color="#002bae">&lt;&lt;��ŷϰ���͎ߎס��̱��Ď����׎��̎�&gt;&gt;</font><br>
<font color="#002bae">�ֻ��IT������ŷϰ���͎ߎ� �̱������󲽼Ҳ�Ȳ��ڤˤĤ��ơ���</font><br>
<div align="center">----------------------</div>
������<br />
4��14��������<br />
<br />
���֡�<br />
10:00����<br />
10:30����<br />
11:45��λͽ��<br />
<br />
����̵��<br />
�� ��λ�塤13:30���鎵���̎ߎݎ����ݎʎߎ��Ⳬ�Ť��ޤ������ε���ˡ�ξ�����ä����㤪����<br />
<div align="right"><a href="http://kcg.edu/50th/?p=1118">�َܺ��������ߡ�PC�����ġˢ�</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="e03"></a>
<font color="#002bae">&lt;&lt;��Ω50��ǯ��ǰ�ֱ��&gt;&gt;</font><br>
<font color="#002bae">�֎����ʎߎ����ݎˎߎ������ص���10�͎ߎ��̎ێ��̎ߎ��ؤ�ĩ���</font><br>
�ٻ��̳������ �ɱ� ͦ�� ��ˤ�뎽���ʎߎ����ݎˎߎ������ص��ʤ����ˡ٤γ�ȯ�˴ؤ���ֱ�Ǥ������ҡ������ä���������<br>
<div align="center">----------------------</div>
������<br />
5��10���ʶ��<br />
<br />
���֡�<br />
17:00����<br />
18:30��λͽ��<br />
<br />
��졧<br />
<a href="http://www.kcg.ac.jp/mobile/acc/acc_map03.html">���Ԏ��ݎˎߎ������ر� ���Ա�����</a><br />
<br />
<?php echo $data[4]?>
<div align="right"><a href="http://kcg.edu/50th/?p=848">�َܺ��������ߡ�PC�����ġˢ�</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="e04"></a>
<font color="#002bae">&lt;&lt;��Ω50��ǯ��ǰ���͎ގݎ�&gt;&gt;</font><br>
<font color="#002bae">�֎Ď����׎��̎ޡֻ��IT �����Ҏ؎����ގ؎��ގ�ʿ���IT�ä�����!�ֺ¡���</font><br>
���܎��ގ��юՎ����ގ������Ĺ�����Ҏ؎����ގ؎��ގƤ�ʿ���ˤ��Ď����׎��̎ޤǤ������ҡ������ä���������<br>
<div align="center">----------------------</div>
������<br />
5��12��������<br />
<br />
13:00����<br />
14:15��λͽ��<br />
�Ď����׎��̎޽�λ�塤�����̎ߎݎ����ݎʎߎ��򳫺Ť��ޤ���<br />
<br />
��졧<br />
<a href="http://www.kcg.ac.jp/mobile/acc/acc_map03.html">���Ԏ��ݎˎߎ������ر� ���Ա�����</a><br />
<br />
<?php echo $data[4]?>
<div align="right"><a href="http://kcg.edu/50th/?p=1324">�َܺ��������ߡ�PC�����ġˢ�</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

<a name="50th20131113"></a>
<font color="#002bae">&lt;&lt;���Ծ�����ر���ء��������Ď��ێ��� ���̸����ֵ�&gt;&gt;</font><br>
<div align="center">----------------------</div>
������<br>
2013ǯ11��13���ʿ�ˡ�14�����ڡ�<br>
17:30����ξ���Ȥ�ֱ����Ƥ�Ʊ���Ǥ���<br>
�ֻա�<br>
�������Ď��ێ���ʎÎގ��ގ��َҎÎގ����Ύʎߎ����Ǝ��ΰ�ͤǡ� �ƎÎގ��ގ��َ��ĎގҎ��ݼҤ����߼ԡ���CEO��

<div align="right"><a href="http://kcg.edu/50th/?p=3071">�َܺ��������ߡ�PC�����ġˢ�</a></div>
<div align="right"><a href="#top">�͎ߎ����޾����آ�</a></div>
<div align="center">======================</div>

*/
?>

<a name="etc"></a>
<font color="#002bae">&lt;&lt;���䤤��碌&gt;&gt;</font><br>
<div align="center">----------------------</div>
<font color="#002bae">�ڷ������ä����</font><br>
�ΎҎ��١�<a href="mailto:hello@kcg.ac.jp">hello@kcg.ac.jp</a><br>
<br>
�����á�<a href="tel:0120988680">0120-988-680</a><br>
<br>

<font color="#002bae">��PC�����Ĥ����</font><br>
��<a href="http://www.kcg.ac.jp/">http://www.kcg.ac.jp/</a><br>
<br>
<img src="../img/icon_memo.jpg"><a href="https://support.kcg.edu/kcg/mobile/req/req_form.php">��������</a><br>
<img src="../img/icon_mail.jpg"><a href="../cnt/contact.html">���䤤��碌</a>
	
<div align="center">======================</div>

<a href="../index.php">��KCG TOP��</a><br>

<hr color="#002bae">

<div align="center">
(C) Kyoto Computer Gakuin.
</div>

</font>
<?php
$googleAnalyticsImageUrl = googleAnalyticsGetImageUrl();
echo '<img src="' . $googleAnalyticsImageUrl . '" />';
?>
</body>
</html>
<?php
function Get_Text($file)
{
    $read_fld = 0;
    $text_cnt = -1;
    $text     = "";
    if (!($fno = fopen($file, 'r')))
        die;
    while (!feof($fno)) {
        $rec = fgets($fno, 32000);
        $rec = mb_convert_encoding($rec, "EUC-JP", "SJIS");
        $rec = ereg_replace("\r\n", "\n", $rec);
        $rec = ereg_replace("\r", "\n", $rec);
        if (substr($rec, 0, 20) == "��������������������") {
            if ($read_fld == 0) {
                $read_fld = 1;
            } else {
                $text_arr[$text_cnt] = $text;
            }
            $text_cnt++;
            $text = "";
        } else {
            if ($read_fld == 1) {
                $text .= $rec;
            }
        }
    }
    $text_arr[$text_cnt] = $text;
    fclose($fno);
    return $text_arr;
}
?>
