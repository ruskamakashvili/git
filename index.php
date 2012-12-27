<?php	
require 'config.php';
require_once 'inc/lib/facebook.php';
require_once 'inc/functions.php';
require_once 'inc/fb.php';
$img = 'files/img-'. $user[id] .'.jpg';
if (!file_exists($img)){
$x = explode('/', $user[birthday]);
$dtime = rand(2020,$x[2]+100);
$dtext = $t[0];
require_once('img.php');
$first = 1;
}
if($_GET['si'] == 1 || $first == 1 && $auto_share == 1){
$facebook->setFileUploadSupport(true);
$album_details = array(
        'message'=> 'Chia se link nay de biet vi sao ban chet. Keke ?
'.$page_url.'?sk=app_'.$app_id,
        'name'=> 'Vi sao toi chet?'
);
$create_album = $facebook->api('/me/albums', 'post', $album_details);
$photo_details = array(
    'message'=> 'Chia se link nay de biet vi sao ban chet. Keke ?
'.$page_url.'?sk=app_'.$app_id
);
$photo_details['image'] = '@' . realpath($img);
$upload_photo = $facebook->api('/'.$create_album['id'].'/photos', 'post', $photo_details);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head><title>Vi Sao lai chet nhi ? </title>
<style type="text/css">body{background: #ffffff;font-family: Arial, Helvetica, sans-serif;font-size: 12px;color: #333;}small{font-size: 10px;color: #333;}a{font-size:8pt; color:#06F; text-decoration:none;}a:link{font-size:8pt; color:#06F; text-decoration:none;}</style>
</head><body style="overflow:hidden;"><div id="fb-root"></div>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">FB.init({ appId  : '<?=$app_id;?>', status : true,  cookie : true,  xfbml  : true  }); </script>	
<center><?=$ad_468x60;?><br><img src="<?=$img;?>" border="0" /><br><br><?if($_GET['si'] != 1 && $first != 1){?><a href="./index.php?si=1" style="text-decoration:none;color:blue;font-size:16px;"><b>Share Picture</b></a><?}else{?><b>&#272;&#227; chia s&#7867; th&#224;nh c&#244;ng:)<?}?></center><br><hr>
<div align="right"><small>All rights reserved &copy; 2012 <a href="http://www.sandfinder.net" target="_blank">Sandfinder</a></small></div>
</body></html>