<?php
include_once ("Spintax.php");
$kalimat = "<head>judule</head> satu dua tiga empat lima";
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


// $text = '{re|ar} {test|as} is a {lot of fun|rewarding experience}.' . "\n";

print '<p><strong>Test spintax:</strong> ' . $data . '</p>';
print '<p style="color: green"><strong>Result:</strong> ' . Spintax::Parse($data) . '</p>';

// array(5) {
// [0]=> string(4) "satu" [1]=> string(3) "dua"
// [2]=> string(4) "tiga" [3]=> string(5) "empat"
// [4]=> string(4) "lima"
// }
?>
