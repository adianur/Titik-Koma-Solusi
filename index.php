<?php
// get json file
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn01.rumahweb.com/under-construction/panduan.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$links = json_decode(curl_exec($ch));
curl_close($ch);
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Selamat, website <?php echo $_SERVER['HTTP_HOST'];?> telah aktif!</title>
<meta name="description" content="Gerbang Anda untuk mendunia telah terbuka. Segera buat website dan email <?php echo $_SERVER['HTTP_HOST'];?> dan mulai perjalanan bisnis Anda.">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
<link href="https://cdn01.rumahweb.com/under-construction/style.css" rel="stylesheet">
</head>
<body>
	<h1>tes project</h1>
</body>
    <script type="text/javascript" src="https://chat.rumahweb.com/js/resource.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $(document).on('click', '.livechat', function(x) {
            if($('.rwlivechat-area').css('display') == 'none'){
                document.getElementById("rwlivechat-check").checked = true;
            }
            else{
                document.getElementById("rwlivechat-check").checked = false;
            }
            $('.livechatbanner').hide();
            $('.livechat-btn').show();
            x.preventDefault();
        });
    });
    </script>
</html>
