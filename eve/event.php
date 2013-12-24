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
<title>京都ｺﾝﾋﾟｭｰﾀ学院mobile</title>
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
気軽に、京都ｺﾝﾋﾟｭｰﾀ学院を体験しよう!

<div align="center"><img src="../img/eve/ttl_eve00.jpg" alt="イベント情報"></div>
<div align="center">
<a href="#e01">ｵｰﾌﾟﾝｷｬﾝﾊﾟｽ</a>|
<a href="#e02">参加特典</a>
</div>

<hr color="#002bae">

<a name="e01"></a>
<a name="oc"></a>
<font color="#002bae">&lt;&lt;ｵｰﾌﾟﾝｷｬﾝﾊﾟｽ&gt;&gt;</font><br>
<div align="center">----------------------</div>
<?php
echo $data[0];
?>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">ｲﾍﾞﾝﾄへ参加を申し込む→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="e02"></a>
<font color="#002bae">&lt;&lt;ｵｰﾌﾟﾝｷｬﾝﾊﾟｽ参加特典&gt;&gt;</font><br>
<div align="center">----------------------</div>
<?php
echo $data[1];
?>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">ｲﾍﾞﾝﾄへ参加を申し込む→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<?php
/*
<a name="e10"></a>
<font color="#002bae">&lt;&lt;アニメ，ゲーム，コスプレ，ファッション…　コンテンツビジネスを学ぼう！　一般公開講座を開講&gt;&gt;</font><br>
<div align="center">----------------------</div>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">ｲﾍﾞﾝﾄへ参加を申し込む→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="e03"></a>
<font color="#002bae">&lt;&lt;創立50周年記念講演会「ここ札幌から世界に発信しよう」&gt;&gt;</font><br>
「初音ﾐｸ」の開発を手がけるｸﾘﾌﾟﾄﾝ・ﾌｭｰﾁｬｰ・ﾒﾃﾞｨｱ（株）代表取締役の伊藤博之氏と北海道大学大学院情報科学研究科教授の山本強氏による講演です。お近くの方はぜひご参加ください！
<div align="center">----------------------</div>
<?php echo $data[2]?>
<div align="right"><a href="https://support.kcg.edu/50th/event_entry/">ｲﾍﾞﾝﾄへ参加を申し込む→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="e03"></a>
<font color="#002bae">&lt;&lt;大学生･大卒者向け入学説明会&gt;&gt;</font><br>
<div align="center">----------------------</div>
<?php echo $data[5]?>
<div align="right"><a href="https://support.kcg.edu/kcg/mobile/req/oc_form.php">ｲﾍﾞﾝﾄへ参加を申し込む→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="e05"></a>
<font color="#002bae">&lt;&lt;ｲﾝﾀｰﾈｯﾄ上の違法･有害情報対策ｾﾐﾅｰ　過去〜未来　〜児童ﾎﾟﾙﾉ対策を中心に&gt;&gt;</font><br>
社団法人日本ｲﾝﾀｰﾈｯﾄﾌﾟﾛﾊﾞｲﾀﾞｰ協会の｢ｲﾝﾀｰﾈｯﾄ上の違法･有害情報対策ｾﾐﾅｰ　過去〜未来　〜児童ﾎﾟﾙﾉ対策を中心に｣がKCGで開催されます｡興味のある方はご参加ください｡入場無料｡
<div align="center">----------------------</div>
日程：<br />
2月28日（木）、3月1日（金）<br />
<br />
会場：<br />
<a href="http://www.kcg.ac.jp/mobile/acc/acc_map03.html">京都ｺﾝﾋﾟｭｰﾀ学院 京都駅前校</a><br />
<?php echo $data[6]?>
<div align="right"><a href="http://www.jaipa.or.jp/topics/?p=558">詳細･お申込み→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="e04"></a>
<font color="#002bae">&lt;&lt;摩天楼ｵﾍﾟﾗ　彩雨ﾄｰｸﾗｲﾌﾞ&gt;&gt;</font><br>
<font color="#002bae">「私とIT　〜摩天楼ｵﾍﾟﾗ 彩雨式情報化社会と音楽について〜」</font><br>
<div align="center">----------------------</div>
日程：<br />
4月14日（日）<br />
<br />
時間：<br />
10:00開場<br />
10:30開演<br />
11:45終了予定<br />
<br />
学生無料<br />
※ 終了後，13:30からｵｰﾌﾟﾝｷｬﾝﾊﾟｽも開催します。この機会に，両方参加しちゃおう♪<br />
<div align="right"><a href="http://kcg.edu/50th/?p=1118">詳細･お申込み（PCｻｲﾄ）→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="e03"></a>
<font color="#002bae">&lt;&lt;創立50周年記念講演会&gt;&gt;</font><br>
<font color="#002bae">「ｽｰﾊﾟｰｺﾝﾋﾟｭｰﾀ『京』10ﾍﾟﾀﾌﾛｯﾌﾟｽへの挑戦」</font><br>
富士通株式会社 追永 勇次 氏によるｽｰﾊﾟｰｺﾝﾋﾟｭｰﾀ『京（けい）』の開発に関する講演です｡ぜひ、ご参加ください！<br>
<div align="center">----------------------</div>
日程：<br />
5月10日（金）<br />
<br />
時間：<br />
17:00開演<br />
18:30終了予定<br />
<br />
会場：<br />
<a href="http://www.kcg.ac.jp/mobile/acc/acc_map03.html">京都ｺﾝﾋﾟｭｰﾀ学院 京都駅前校</a><br />
<br />
<?php echo $data[4]?>
<div align="right"><a href="http://kcg.edu/50th/?p=848">詳細･お申込み（PCｻｲﾄ）→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="e04"></a>
<font color="#002bae">&lt;&lt;創立50周年記念ｲﾍﾞﾝﾄ&gt;&gt;</font><br>
<font color="#002bae">「ﾄｰｸﾗｲﾌﾞ「私とIT 〜ｱﾒﾘｶｻﾞﾘｶﾞﾆ平井のITって面白い!講座〜」</font><br>
日本ｹﾞｰﾑﾕｰｻﾞｰ協会会長・ｱﾒﾘｶｻﾞﾘｶﾞﾆの平井氏によるﾄｰｸﾗｲﾌﾞです。ぜひ、ご参加ください。<br>
<div align="center">----------------------</div>
日程：<br />
5月12日（日）<br />
<br />
13:00開演<br />
14:15終了予定<br />
ﾄｰｸﾗｲﾌﾞ終了後，ｵｰﾌﾟﾝｷｬﾝﾊﾟｽを開催します。<br />
<br />
会場：<br />
<a href="http://www.kcg.ac.jp/mobile/acc/acc_map03.html">京都ｺﾝﾋﾟｭｰﾀ学院 京都駅前校</a><br />
<br />
<?php echo $data[4]?>
<div align="right"><a href="http://kcg.edu/50th/?p=1324">詳細･お申込み（PCｻｲﾄ）→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

<a name="50th20131113"></a>
<font color="#002bae">&lt;&lt;京都情報大学院大学　ｽｺｯﾄ･ﾛｽ氏 特別公開講義&gt;&gt;</font><br>
<div align="center">----------------------</div>
日程：<br>
2013年11月13日（水）、14日（木）<br>
17:30〜（両日とも講演内容は同じです）<br>
講師：<br>
ｽｺｯﾄ･ﾛｽ氏（ﾃﾞｼﾞﾀﾙﾒﾃﾞｨｱのﾊﾟｲｵﾆｱの一人で， 米ﾃﾞｼﾞﾀﾙ･ﾄﾞﾒｲﾝ社の創設者・元CEO）

<div align="right"><a href="http://kcg.edu/50th/?p=3071">詳細･お申込み（PCｻｲﾄ）→</a></div>
<div align="right"><a href="#top">ﾍﾟｰｼﾞ上部へ▲</a></div>
<div align="center">======================</div>

*/
?>

<a name="etc"></a>
<font color="#002bae">&lt;&lt;お問い合わせ&gt;&gt;</font><br>
<div align="center">----------------------</div>
<font color="#002bae">【携帯電話から】</font><br>
［ﾒｰﾙ］<a href="mailto:hello@kcg.ac.jp">hello@kcg.ac.jp</a><br>
<br>
［電話］<a href="tel:0120988680">0120-988-680</a><br>
<br>

<font color="#002bae">【PCｻｲﾄから】</font><br>
　<a href="http://www.kcg.ac.jp/">http://www.kcg.ac.jp/</a><br>
<br>
<img src="../img/icon_memo.jpg"><a href="https://support.kcg.edu/kcg/mobile/req/req_form.php">資料請求</a><br>
<img src="../img/icon_mail.jpg"><a href="../cnt/contact.html">お問い合わせ</a>
	
<div align="center">======================</div>

<a href="../index.php">←KCG TOPへ</a><br>

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
        if (substr($rec, 0, 20) == "◆◆◆◆◆◆◆◆◆◆") {
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
