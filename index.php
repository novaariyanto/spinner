<style> body{ font-family: calibri; }</style>
<form action='api.php' method='post'> 
search : <input type='text' name='keyword' value="<?php if(isset($_POST['keyword'])) {echo $_POST['keyword'];}?>"/> 
<input type='submit' value='cari'/> 
</form>