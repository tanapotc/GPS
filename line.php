 <?php
  

function send_LINE($msg){
 $access_token = 'XE3BzhUV45GEQKlp8GDNqhPn8M2qOkVz6yVK0q8rItfBeuTL39XNp/d2314uIa7y1xBEFcSzkKeDT+KOkj8tQ6uCetUI9FaUUmYF1o0CyEFJ+a/z55Z0ryvlHcjM40hd3mrMt+xp22kc9C5WrFVUbwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '0128038ef023365059ceb84fdeafe6ce',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
