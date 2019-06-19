<?php

$banner = "

\033[0;31m                FREE XRP RIPPLE
\033[0;31m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 \033[1;31mCREATED BY  \033[1;31m   : \033[1;\033[1;32mMr.ADx52\033[1;30m          | \033[1;31mFree XRP
 \033[1;31mSUMATRA BARAT \033[1;31m :\033[1;\033[1;32m PASAMAN CITY\033[1;30m      | \033[1;31mBOT XRP
 \033[1;31mWhatsApp \033[1;31m      :\033[1;32m 081256796517\033[1;30m      | \033[1;31mTuyuLers
\033[1;33m
\033[0;31m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;30m             Mr.ADx52_MCA_Black_Hat
\033[0;31m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;32m             •Bahagia kan Orang Tua
\033[1;32m             •Jangan Lupa BerSyukur
\033[1;32m             •Jangan Lupa BerTerimakasih
\033[1;33m
\033[0;31m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;31m               W A R N I N G !!
\033[1;31m       kalau sudah nuyul lu harus tobat!!
\033[1;31m              lu pikir ini Halal ??
\033[1;31m             tidak semudah itu,Goblok !!

\033[0;31m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;36m               Nggk usah Deg_Deggan
\033[1;36m           Ngeteh dulu Biar Relaxs🍵😎

\033[0;31m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━


";


echo $banner;
echo "\033[1;31mMasukkan Bareer\033[1;31m :\033[1;0m ";
$barr = trim(fgets(STDIN));
echo "\033[1;31mMasukan x-api-key\033[1;31m :\033[1;0m ";
$token = trim(fgets(STDIN));
sleep(2);
system("clear");
echo $banner;
echo "\033[1;33mMasuk ";
sleep(1);
echo "\033[1;0m•";
sleep(1);
echo "\033[1;0m•";
// Cek Ballance
$link = "https://ryci6v44ge.execute-api.us-east-1.amazonaws.com/prod/v1/me/balance";
$ua = array("authorization: ".$barr,"x-api-key: ".$token,"user-agent: okhttp/3.10.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
$respon = curl_exec($ch);
curl_close($ch);
$json = json_decode($respon, true);
if ($json["coins"] == true){
   sleep(1);
   echo "\033[1;0m•";
   sleep(1);
   echo "\033[1;0m•\n";
   echo "\033[1;31mBerhasiL Masuk\n";
   echo "\033[1;31mCoin\033[1;31m  : \033[1;0m".$json["coins"]." Ripple 💎😎\n";
   echo "\033[1;31mPower\033[1;31m : \033[1;0m".$json["power"]."\n";
}else{
   sleep(1);
   echo "\033[1;0m•";
   sleep(1);
   echo "\033[1;0m•\n";
   echo "\n";
   echo "\033[1;31mLogin Filed\033[1;0m\n               \033[1;36mIsi Datanya Dengan Benar KONTOL!!!\n";
   exit();
}

echo "\n\n\n\033[1;33mMengambiL Xrp,Tunggu Sebentar,SABARR.....!\n";
while(True){
     $play = "https://ryci6v44ge.execute-api.us-east-1.amazonaws.com/prod/v1/letsplay";
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $play);
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
     $res = curl_exec($ch);
     curl_close($ch);
     $jsn = json_decode($res, true);
     if ($jsn["noEnergy"] == true){
        echo "\033[1;31mEnergy habis!!!\n";
        break;
     }
     sleep(10);
     $data = array("hash" => $jsn["uuid"],"timetoplay" => $jsn["timetoplay"]);
     $data1 = json_encode($data, true);
     $confirm = "https://ryci6v44ge.execute-api.us-east-1.amazonaws.com/prod/v1/letsplay/confirmed";
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $confirm);
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json, text/plain, */*","authorization: ".$barr,"x-api-key: ".$token,"content-type: application/json;charset=utf-8","user-agent: okhttp/3.10.0"));
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
     $result = curl_exec($ch);
     curl_close($ch);
     $js = json_decode($result, true);
     if($js["success"] == true){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
        $respon = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($respon, true);
        if ($json["power"] < 1000){
           echo "\033[1;31mmendapat ⏩\033[1;0m ".$jsn["amount"]." \033[1;31m=>\033[1;0m ".$json["coins"]." Ripple 💎😎\n";
           echo "\033[1;31mEnergy habis!!\n";
           cash($ua);
        }else{
           echo "\033[1;31mmendapat ⏩\033[1;0m ".$jsn["amount"]." \033[1;31m=>\033[1;0m ".$json["coins"]." Ripple 💎😎\n";
           sleep(20);
        }

     }

}


function cash($ua){
 $k = 0;
 while(True){
    $k++;
    $url = "https://ryci6v44ge.execute-api.us-east-1.amazonaws.com/prod/v1/letsplay/bonus";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result."\n";
    if ($k == 2){
       break;
    }
    sleep(30);
 }
}
