<style> body{ font-family: calibri; }</style>
<form action='' method='post'> 
search : <input type='text' name='keyword' value="<?php if(isset($_POST['keyword'])) {echo $_POST['keyword'];}?>"/> 
<input type='submit' value='cari'/> 
</form>
<?php
$replaceThis = Array( 
'tutorial' => 'cara', 
'lengkap' => 'tuntas', 
'bagaimana' => 'mengenai', 
'cara' => 'langkah', 
'agar' => 'supaya', 
'sobat' => 'anda', 
'lebih' => 'bisa', 
'supaya' => 'agar', 
'oleh' => 'dengan', 
'jika' => 'kalau', 
'blog' => 'web', 
'web' => 'blog', 
'otomatis' => 'secara sendirinya', 
'pasti' => 'mau', 
'diberi' => 'diberikan', 
'ranking' => 'peringkat', 
'udah' => 'sudah', 
'Jika' => 'kalau', 
'akan' => 'pasti', 
'maka' => 'sepatutnya', 
'pengunjung' => 'visitor', 
'meningkat' => 'bertambah', 
'visitor' => 'pengunjung', 
'nggak' => 'tidak', 
'tidak' => 'nggak', 
'bisa' => 'dapat', 
'kepengen' => 'ingin', 
'kepengin' => 'ingin', 
'ingin' => 'mau', 
'apalagi' => 'terlebih lagi', 
'bagi' => 'kepada', 
'sedang' => 'saatini', 
'langsung' => 'segera', 
'postingan' => 'artikel', 
'ini' => 'berikut', 
'beberapa' => 'sekelumit', );
$keyword = str_get_html($_POST['keyword']);
$originalText = preg_replace('/[^a-zA-Z0-9]/', ' ', $keyword);
$replacedText = str_replace(array_keys($replaceThis), $replaceThis,$originalText);
echo $replacedText;
?>