<?php
if(isset($_POST['ad']) && isset($_POST['eposta']) && isset($_POST['konu']) && isset($_POST['mesaj'])) {
    if(empty($_POST['ad']) || empty($_POST['eposta']) || empty($_POST['konu']) || empty($_POST['mesaj'])) {
       echo 'Lütfen boş yer bırakmayın!';
    } else {
       $ad = strip_tags($_POST['ad']);
       $eposta = strip_tags($_POST['eposta']);
       $konu = strip_tags($_POST['konu']);
       $mesaj = strip_tags($_POST['mesaj']);
       $icerik = 'Ad: ' . $ad . '<br/>E-Posta: '. $eposta . '<br/>' . $mesaj;
       mail('ukeskin2626@gmail.com', $konu, $icerik);
       echo 'Mesajınız Gönderildi! Teşekkürler.';
    }
 } else {
    echo 'Lütfen Formu Kullanın!';
 }

 $headers  = 'MIME-Version: 1.0' . "rn";
$headers .= 'Content-type: text/html; charset=utf-8' . "rn";
$headers .= 'To: Alıcı 1 <alici1@adres.com>, Alıcı 2 <alici2@adres.com>' . "rn";
$headers .= 'From: Yollayan <yollayan@adres.com>' . "rn";
$headers .= 'Reply-To: Yanit <yanit@adres.com>' . "rn";
$headers .= 'X-Mailer: PHP/' . phpversion() . "rn";
$headers .= 'Cc: diger-gonderilecek@adres.com' . "rn";
$headers .= 'Bcc: gizli-gonderilecek@adres.com' . "rn";
 
$eposta = 'alici1@adresi.com';
$konu = 'HTML kodlu e-posta gönderme';
$mesaj = '<b><i>Kalın ve italik bir yazı gönderiyoruz</i></b>';
mail($eposta, $konu, $mesaj, $headers);
?>