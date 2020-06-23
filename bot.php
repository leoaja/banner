<?php
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOQRSTUVWXYZ';
$permitted_chars2 = '0123456789abcdefghijklmnopqrstuvwxyz';
$permitted_chars4 = '0123456789';
$permitted_chars1 = '0123456789';
$permitted_chars3 = '0123456789';
$permitted_chars5 = '0123456789';
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];                                                                                   $random_string .= $random_character;
    }

    return $random_string;
}system('clear');

echo"\n\n";
$reff=readline(" # enter your user id or your refferal = ");
file_put_contents("reff.txt",$reff);
$jlah=readline(" # how many referrals do you want      = ");
$time=readline(" # the time needed for the next reff   = ");
$p=file_get_contents("git.txt");
system('clear');
echo $p;
for($bpk=$jlah;$bpk--;){
 $bbz=generate_string($permitted_chars, 28);
$bb=generate_string($permitted_chars4, 6);
$bbb=generate_string($permitted_chars2, 32);
$kok=generate_string($permitted_chars1, 12);
$mail=$kok;
$bsb=generate_string($permitted_chars5, 3);
$er=generate_string($permitted_chars3, 1);
file_put_contents('uid.txt',$bbz);
file_put_contents('imei.txt',$bbb);

$mp=file_get_contents('uid.txt');
$pm=file_get_contents('imei.txt');
$ogt=file_get_contents('reff.txt');
$url='https://us-central1-crypto-space-58d63.cloudfunctions.net/GetNotifi?uid='.$mp;
$bm='https://us-central1-crypto-space-58d63.cloudfunctions.net/CheckSecurity?imei='.$pm.'&uid='.$mp.'&email='.$mail.'@gmail.com';
$re='https://us-central1-crypto-space-58d63.cloudfunctions.net/RewardAfiliate?my_uid='.$mp.'&refer_uid='.$ogt.'&my_imei='.$pm;
$hs=array();
$hs[] = 'X-Unity-Version: 2018.4.23f1';
$hs[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 8.'.$er.'.0; CPH1'.$bsb.' Build/OPM1.'.$bb.'.026)';
$hs[] = 'Host: us-central1-crypto-space-58d63.cloudfunctions.net';
$hs[] = 'Connection: Keep-Alive';

$cm = curl_init();
curl_setopt($cm, CURLOPT_PORT,443);
curl_setopt($cm, CURLOPT_URL,$url);                                                                                                          curl_setopt($cm, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cm, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($cm, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_2_0);
curl_setopt($cm, CURLOPT_COOKIEJAR,"coo.txt");
curl_setopt($cm, CURLOPT_COOKIEFILE,"coo.txt");
curl_setopt($cm, CURLOPT_TIMEOUT,30);
curl_setopt($cm, CURLOPT_CUSTOMREQUEST,"GET");
curl_setopt($cm, CURLOPT_REFERER, true);
curl_setopt($cm, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($cm, CURLOPT_HTTPHEADER, $hs);
$resul = curl_exec($cm);


$cm = curl_init();
curl_setopt($cm, CURLOPT_PORT,443);
curl_setopt($cm, CURLOPT_URL,$bm);
curl_setopt($cm, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cm, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($cm, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_2_0);
curl_setopt($cm, CURLOPT_COOKIEJAR,"coo.txt");
curl_setopt($cm, CURLOPT_COOKIEFILE,"coo.txt");
curl_setopt($cm, CURLOPT_TIMEOUT,30);
curl_setopt($cm, CURLOPT_CUSTOMREQUEST,"GET");
curl_setopt($cm, CURLOPT_REFERER, true);
curl_setopt($cm, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($cm, CURLOPT_HTTPHEADER, $hs);
$resul = curl_exec($cm);
var_dump($resul);
$pkl=json_decode($resul);

echo " # Created New Refferal = •   ";sleep(1);
echo "\r                                       \r";
echo " # Created New Refferal = ••  ";sleep(1);
echo "\r                                       \r";
echo " # Created New Refferal = ••• ";sleep(2);
echo "\r                                       \r";
echo " # Created New Refferal = ".$pkl->message."\n";
$cm = curl_init();
curl_setopt($cm, CURLOPT_PORT,443);
curl_setopt($cm, CURLOPT_URL,$re);
curl_setopt($cm, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cm, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($cm, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_2_0);
curl_setopt($cm, CURLOPT_COOKIEJAR,"coo.txt");
curl_setopt($cm, CURLOPT_COOKIEFILE,"coo.txt");
curl_setopt($cm, CURLOPT_TIMEOUT,30);
curl_setopt($cm, CURLOPT_CUSTOMREQUEST,"GET");
curl_setopt($cm, CURLOPT_REFERER, true);
curl_setopt($cm, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($cm, CURLOPT_HTTPHEADER, $hs);
$result = curl_exec($cm);
$oiu=json_decode($result);
echo " # Submit Your Code Reff = •   ";sleep(1);
echo "\r                                       \r";
echo " # Submit Your Code Reff = ••  ";sleep(1);
echo "\r                                       \r";
echo " # Submit Your Code Reff = ••• ";sleep(2);
echo "\r                                       \r";
echo " # Submit Your Code Reff = ".$oiu->msg."\n";
echo " # ".$bpk." references left\n\n";
for($koy=$time;$koy--;){
echo " # Wait For Next Submit Auto Refferall in ".$koy." Seconds ";sleep(1);

}
}
?>
