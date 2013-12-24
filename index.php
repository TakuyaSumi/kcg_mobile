<?php
require 'common.inc';
require 'google-mobile-ana.php';
// トップロゴ設定
$carryer   = Get_MobileCarryer($generation);
$flash_flg = Get_MobileFlash($carryer, $generation);
// What's Newの文章設定
$str_news  = 'News';
$rec       = '';
$file      = '../kblog/index.i.html';
$fno       = fopen($file, 'r');
while (!feof($fno)) {
    $rec .= fgets($fno, 32000);
}
fclose($fno);
$rec     = mb_convert_encoding($rec, "EUC-JP", "SJIS");
$rec     = ereg_replace("\r", "", $rec);
$rec     = ereg_replace("\n", "", $rec);
$rec_arr = preg_split("(<h3>|</h3>)", $rec);
if ($rec_arr[1] != '') {
    $buf      = $rec_arr[1];
    $str_news = '';
    $flg      = TRUE;
    for ($cnt = 0; $cnt < strlen($buf); $cnt++) {
        $buf2 = substr($buf, $cnt, 1);
        if ($buf2 == '<') {
            $flg = FALSE;
        } elseif ($buf2 == '>') {
            $flg = TRUE;
        } else {
            if ($flg)
                $str_news .= $buf2;
        }
    }
    $str_news = mb_convert_kana($str_news, 'ak', 'EUC-JP');
}
Header("Content-Type: text/html;charset=euc-jp");
?>
<html>
<head>
<title>京都コンピュータ学院mobile kcg.edu 携帯サイト</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<meta name="viewport" content="width=240px">
</head>

<body bgcolor="#ffffff" text="#505050" link="#000000" vlink="#000000" style="margin:0;padding:0;">
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/iPhone|Android/', $ua)) {
    $flag = false;
    if(isset($_COOKIE['kcg_sppc_toggle'])){
      if($_COOKIE['kcg_sppc_toggle'] == "on") $flag = true;
    }
    if($flag){
        echo '<div style="text-align:center;"><a href="http://www.kcg.ac.jp/">PC版トップページへ</a></div>';    
    }else{
        echo '<div style="text-align:center;"><a href="http://www.kcg.ac.jp/">スマートフォン版トップページへ</a></div>';
    }
}
?>
<font size="1" color="#505050">

<div align="center">
<img src="img/topimg.gif" alt="KCG">
</div>

<div align="center">
<img src="img/title_01.jpg" alt="What's New">
</div>

<br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="eve/event.php"><font size="1">ｲﾍﾞﾝﾄ情報</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="eve/event.php#01"><font size="1">12月21日(土)にｵｰﾌﾟﾝｷｬﾝﾊﾟｽを開催します。</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="http://www.kcg.ac.jp/kblog/index.i.html"><font size="1">KCG NEWS</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="http://www.kcg.ac.jp/mobile/skillup/index.php"><font size="1">大学生･大卒者向けｺｰｽ</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="http://www.kcg.ac.jp/mobile/magazine/"><font size="1">KCG MOBILE通信</font></a><br clear="all">

<div align="center">
<img src="img/title_02.jpg" alt="KCGのここがすごい!">
</div>
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="fea/feature.html"><font size="1">KCGのここがすごい!</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="fea/0930/"><font size="1">授業開始時間9:30へ</font></a><br clear="all">

<div align="center">
<img src="img/title_03.jpg" alt="学科紹介">
</div>
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="dep/become.html"><font size="1">「なりたい自分」で選ぶ</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="dep/graduate.html"><font size="1">活躍する卒業生を見る</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="dep/department.html"><font size="1">学科一覧から選ぶ</font></a><br clear="all">

<div align="center">
<img src="img/title_05.jpg">
</div>
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="eve/event.php"><font size="1">ｲﾍﾞﾝﾄ情報</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="https://support.kcg.edu/kcg/mobile/req/req_form.php"><font size="1">資料請求</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="acc/access.html"><font size="1">ｱｸｾｽMAP</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="https://king.kcg.ac.jp/campus/k/"><font size="1">在学生専用ﾍﾟｰｼﾞ(KING-LMS)</font></a><br clear="all">
<img src="img/icon_tri_r.jpg" align="left" style="padding-left:5px;"><a href="cnt/contact.html"><font size="1">お問い合わせ</font></a><br clear="all">
<br />
<div align="center">
<a href="tel:0120988680"><img src="img/freecalltel.gif"></a>
</div>
<br />
<div>
専修学校 京都コンピュータ学院は日本最初のコンピュータ専門学校です。創立<?php
$r = localtime();
echo (1900 + $r[5]) - 1963;
?>年の伝統と実績に支えられ就職率95.8％達成！京都駅前校は駅から徒歩7分で通学にも便利。
</div>

<br/>
<div style="background-color:#ebf1f1;">
	<div align="center">
	<img src="img/title_06.jpg"><br />
	(C) Kyoto Computer Gakuin.
	</div>
</div>

</font>

<?php
$googleAnalyticsImageUrl = googleAnalyticsGetImageUrl();
echo '<img src="' . $googleAnalyticsImageUrl . '" />';
?></body>
</html>
