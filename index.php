<?php 
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    $a = date ("H");
    if (($a>=07) && ($a<=17)){include "buka/o_disnaker-buka.php";}
	else {include "tutup/o_disnaker-tutup.php";}
?>