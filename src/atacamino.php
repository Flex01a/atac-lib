<?php

function atacsid($sid)
{

   if ($sid === ""){
   echo "sid required!";
   }
else{
    if ($api === ""){
        echo "q2m lib has an error";
    }
    elseif ($api === "send message"){
        
        
                                                         
                                                















































































































}

function TypeMessage($Type){
 


function message($message){


function ndcid($com){

function chat($chat){


$time = time()*1000;



$url = "https://service.narvii.com/api/v1/$com/s/chat/thread/$chat/message";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
  "NDCAUTH:$sid",
"NDCDEVICEID:3271883BA66CFFC6D8D50118C22A8CD78F61E09B6369890162712A89979426EDE144127A98BFAD4D2E",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{"type":$Type,"content":"$message","clientRefId":912612485,"attachedObject":null,"timestamp":$time}
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

}
}

}
}
}

        
        
        
    }



?>
