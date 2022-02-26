<?php



function ndcauth($ndcuath){
    
}

function send($type,$message,$ndcid,$chatid){
    
   
    $arr = array(
        
        "type"=>$type,
        "content"=>"$message",
        "clientRefId"=>585718302,
        "attachedObject"=>null,
        "timestamp"=>time()*1000
        
        
        
    
        
);
$jso = json_encode($arr);

$sors = hash_hmac('sha1',"fbf98eb3a07a9042ee5593b10ce9f3286a69d4e2",$jso,true);
echo base64_encode(hex2bin("32").$sors);

$url = "https://service.narvii.com/api/v1/$ndcid/s/chat/thread/$chatid/message";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
 "NDCAUTH:$ndcuath",
"NDCDEVICEID:3271883BA66CFFC6D8D50118C22A8CD78F61E09B6369890162712A89979426EDE144127A98BFAD4D2E",
"NDC-MSG-SIG:$sors", 
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
$jso
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
}


