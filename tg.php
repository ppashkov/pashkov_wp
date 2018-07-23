<?php 
	class tg_message{
		public static function sendNotif($email,$message,$file){
			$botToken="566386213:AAE6orgGRUZ-WvV6yqk2L7wVrpWgNPyu08g";
			$website="https://api.telegram.org/bot".$botToken;
			$chatId= "-263971574";  //Receiver Chat Id 
			$params=[
                'chat_id' => $chatId,
                'parse_mode' => 'html',
                'text' => implode(PHP_EOL, array(
                    "<b>E-mail:</b> ". $email,
                    "<b>Сообщение:</b>  ".  $message,
                    "Скриншот: "  . 'http://pashkov.p/formimg/'.$file,
                  ) )
                
                ];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
		}
	}