<?php
    $accessToken = "5gZQWeN7r4W76y0rDoTq1kmZKNe0AHqZCoN0qKKUpVRyTg1qYcDk+9uvFzT0wOC1T6YhxwQ6qdRd7ld6Nnf/VT6rhFuPKAXakQ2gQazw/rDdeEmMASmG0i0wxPq5J9mT0CB1EQy2A2p+Bra2ayaa/AdB04t89/1O/w1cDnyilFU=";//copy Channel access token ในไลน์มาใส่
    
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
        replyMsg($arrayHeader,$arrayPostData);
    }
    if($message == "เมนู"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "กรุณาพิมพ์ข้อความต่อไปนี้"."\n"." (1)  เว็บไซต์ OTOP"."\n"." (2) บรรจุภัณฑ์ส่วนใหญ่ตามท้องตลาดจะมีลักษณะอย่างไร"."\n"." (3)  ราคาบรรจุัณฑ์"."\n"." (4) พื้นที่ผิวที่น้อยที่สุดของปริซึมสี่เหลี่ยมมุนฉาก"."\n"." (5) พื้นที่ผิวที่น้อยที่สุดของทรงกระบอก"."\n"." (6) พิกัด OTOP จังหวัดตรัง;
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "1"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://www.thaitambon.com/province/%E0%B8%95%E0%B8%A3%E0%B8%B1%E0%B8%87"; //เว็บไซต์ OTOP ที่น้องจะใส่นะ
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "2"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "บรรจุภัณฑ์ส่วนใหญ่จะมีลักษณะเป็นปรึซึมสี่เหลี่ยมมุมฉากและทรงกระบอก"; //ข้อมูลเกี่ยวกับบบรจุภัณฑ์ที่น้องจะใส่
        replyMsg($arrayHeader,$arrayPostData);
    }
     else if($message == "3"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ราคาจะค่อนข้างจะสูง"; //ข้อมูลเกี่ยวกับราคาบบรจุภัณฑ์ ถ้าเป็นตารางน้องเอาลง google drive นะเซฟเป็น exel ละวางลิ้งตรงนี้
        replyMsg($arrayHeader,$arrayPostData);
    }
     else if($message == "4"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://drive.google.com/open?id=1PgwQTQGe472nqx02jUhm00J4jaZjnOsp"; //ข้อมูลเกี่ยวกับราคาบบรจุภัณฑ์ ถ้าเป็นตารางน้องเอาลง google drive นะเซฟเป็น exel ละวางลิ้งตรงนี้
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "5"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "https://drive.google.com/open?id=1PgwQTQGe472nqx02jUhm00J4jaZjnOsp"; //ข้อมูลเกี่ยวกับราคาบบรจุภัณฑ์ที่ถูกสุด ถ้าเป็นตารางน้องเอาลง google drive นะเซฟเป็น exel ละวางลิ้งตรงนี้
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Image"
    else if($message == "รูปน้องแมว"){
        $image_url = "https://i.pinimg.com/originals/cc/22/d1/cc22d10d9096e70fe3dbe3be2630182b.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Location"
    else if($message == "พิกัด OTOP จังหวัดตรัง"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "location";
        $arrayPostData['messages'][0]['title'] = "OTOP จังหวัดตรัง";
        $arrayPostData['messages'][0]['address'] =   " 12.826338461123994, 101.13054852513119";
        $arrayPostData['messages'][0]['latitude'] = " 12.826338461123994";
        $arrayPostData['messages'][0]['longitude'] = " 101.13054852513119";
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
 else {
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
