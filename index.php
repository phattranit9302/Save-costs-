<?php
    $accessToken = "5gZQWeN7r4W76y0rDoTq1kmZKNe0AHqZCoN0qKKUpVRyTg1qYcDk+9uvFzT0wOC1T6YhxwQ6qdRd7ld6Nnf/VT6rhFuPKAXakQ2gQazw/rDdeEmMASmG0i0wxPq5J9mT0CB1EQy2A2p+Bra2ayaa/AdB04t89/1O/w1cDnyilFU=";
    
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "11538";
        $arrayPostData['messages'][1]['stickerId'] = "51626494";
        replyMsg($arrayHeader,$arrayPostData);
    }
    if($message == "เมนู"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "กรุณาพิมพ์ข้อความต่อไปนี้"."\n"." (1) เว็บไซต์ OTOP"."\n"." (2) พื้นที่ผิวที่น้อยที่น้อยที่สุดของปริซึมสี่เหลี่ยมมุมฉาก"."\n"." (3) พื้นที่ผิวที่น้อยที่น้อยที่สุดของทรงกระบอก"."\n"." (4) FB : ช่องทางการติดต่อ "."\n"." ;
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "1"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://www.thaitambon.com/province/%E0%B8%95%E0%B8%A3%E0%B8%B1%E0%B8%87"; 
        replyMsg($arrayHeader,$arrayPostData);
    }
 
else if($message == "2"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "กรุณากรอกปริมาตรตามต้องการ";
        $message name "$v" id "v"
        $w = pow(($v*3),0.33333)/2 ;
        $l = pow(($v*3),0.33333));
        $h = pow(($v/9),0.33333)*2; 
        $m = (($w**2)*4)+(6*$w*$h); 
        $arrayPostData['messages'][0]['text'] = "ปริมาตร = $v";
        $arrayPostData['messages'][0]['text'] = "กว้าง = $w";
        $arrayPostData['messages'][0]['text'] = "ยาว = $l";
        $arrayPostData['messages'][0]['text'] = "สูง = $้h";
        $arrayPostData['messages'][0]['text'] = "พื้นที่ผิวที่น้อยที่สุด = $m";

        replyMsg($arrayHeader,$arrayPostData);
    }
elseif ($message is_float or $message is_int){
    

}
  
 else if($message == "3"){
    $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
    $arrayPostData['messages'][0]['type'] = "text";
    $arrayPostData['messages'][0]['text'] = "กรุณากรอกปริมาตรตามต้องการ";
    $message name "$v" id "v"
    $r =pow((v/(2*3.14)),0.33333);
    $h2 =(2*r) ;
    $m2 =(6*3.14*(pow(r,2)) ;
    $arrayPostData['messages'][0]['text'] = "ปริมาตร = $v";
    $arrayPostData['messages'][0]['text'] = "รัศมี = $w";
    $arrayPostData['messages'][0]['text'] = "สูง = $l";
    $arrayPostData['messages'][0]['text'] = "พื้นที่ผิวที่น้อยที่สุด = $m";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "11538";
        $arrayPostData['messages'][1]['stickerId'] = "51626533";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Image"
    else if($message == "กิจกรรม"){
        $image_url = "https://sv1.picz.in.th/images/2019/09/19/c4kirP.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Location"
    else if($message == "3"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "location";
        $arrayPostData['messages'][0]['title'] = "OTOP จังหวัดตรัง";
        $arrayPostData['messages'][0]['address'] =   " 12.826338461123994, 101.13054852513119";
        $arrayPostData['messages'][0]['latitude'] = " 12.826338461123994";
        $arrayPostData['messages'][0]['longitude'] = " 101.13054852513119";
        replyMsg($arrayHeader,$arrayPostData);
    }
 else if($message == "6"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "location";
        $arrayPostData['messages'][0]['title'] = "โรงเรียนวิเชียรมาตุ";
        $arrayPostData['messages'][0]['address'] =   "7.504249, 99.629988 ";
        $arrayPostData['messages'][0]['latitude'] = "7.504249";
        $arrayPostData['messages'][0]['longitude'] ="99.629988 ";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Text + Sticker ใน 1 ครั้ง"
    else if($message == "ลาก่อน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อย่าทิ้งกันไป";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "1";
        $arrayPostData['messages'][1]['stickerId'] = "131";
        replyMsg($arrayHeader,$arrayPostData);
    }
 else  {
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีครับ ยินดีต้อนรับคุณเข้าสูู่ แอปของเรา."."\n". "กรุณาพิมพ์ [เมนู] เพื่อดูเมนูนะครับ 😊😊😊";
        replyMsg($arrayHeader,$arrayPostData);
    }
function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   echo "MAY";
?>
