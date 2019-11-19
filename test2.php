<?php
// example of how to use advanced selector features
include('simple_html_dom.php');
include_once ("Spintax.php");
// -----------------------------------------------------------------------------
// descendant selector
// $str = <<<HTML 
$str = <<<HTML
<blockquote class="messageText SelectQuoteContainer ugc baseHtml">
Assalamualaikum..<br />
<br />
Ijin sharing lagi gan..<br />
<br />
Kali ini, saya mau share website spinner artikel bahasa indonesia geratis.<br />
<br />
Spin artikel tujuannya biar artikel yang kita copas jadi unik gan, walaupun bahasa pasti acak-acakan karena memang tujuan spin ya seperti itu, mengambil sinonim dari kata tersebut.<br />
<br />
Spin artikel sangat cocok sekali untuk blog dummy, daripada pusing bikin artikel mending pake artikel hasil spin kan?<br />
<br />
Biasanya spinner tersedia buat bahasa inggris aja, kali ini ada 2 website spinner khusus bahasa indonesia.<br />
<br />
<b>1. TheArticleSpinner.com (bayar, 100rb/th)</b><br />
<br />
Ane suka banget pake the article spinner, hasil spinnya masih readable walaupun ya agak aneh kalo dibaca. Kalo diedit-edit dikit bisa jadi artikel readable yang 100% unik!<br />
<br />
<b>2. IndoSpinner.Com (FREE)</b><br />
<br />
Cukup daftar jadi member, agan bisa menikmati fasilitas indo spinner. Indo spinner enak banget dipake dan artikel yang agan spin dijamin unik karena memiliki banyak sekali sinonim.<br />
<br />
Silahkan dicoba sendiri ya gan, mohon maaf kalo agan udah tau <img src="styles/default/xenforo/clear.png" class="mceSmilieSprite mceSmilie8" alt=":D" title="Big Grin    :D" /><br />
<br />
HTML;

// -----------------------------------------------------------------------------
// parsing checkbox
// $str = <<<HTML
// <form name="form1" method="post" action="">
//     <input type="checkbox" name="checkbox1" value="checkbox1" checked>item1<br>
//     <input type="checkbox" name="checkbox2" value="checkbox2">item2<br>
//     <input type="checkbox" name="checkbox3" value="checkbox3" checked>item3<br>
// </form>
// HTML;

$html = str_get_html($str);
print_r($html->saveHTML());

// $kalimat = "<head>judule</head> satu dua tiga empat lima";
$kalimat = $html;
$arr_kalimat = explode (" ",$kalimat);
$data =[];
foreach ($arr_kalimat as $key => $value) {
    $value = str_get_html($value);
    if($value == "satu"){
        $value = "{".$value."|one|setunggal|siji}";
    }else if($value == "judule"){
        $value = "{segawan|kejarkoding|jajanan}";
    }else{
        $value = $value;
    }
    $data[] =$value;
}

$data = (implode(' ',$data));


print '<h1>Test Spintax class</h1>';
?>