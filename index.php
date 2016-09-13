<?php
set_time_limit(60);
date_default_timezone_set('Asia/Tehran');
header('Content-type: application/json');
    $update = json_decode(file_get_contents('php://input'), true);
    $message = $update["message"];
    $telegram_id = $message['from']['id'];
    $userInput = $message['text'];
    $replyText = 'سلام به بازی حدس اعداد خوش آمدید لطفا یک عدد از بین ده تا بیست انتخاب کنید و بعد از آن yes را بزنید';
	 $replyText2='آیا عدد شما کمتر از ده است؟';
	  $replyText3='آیا عدد شما کتر از پنج است؟';
	   $replyText4='آیا عدد شما کمتر از سه است؟';
	   $replyText5='آیا عدد شما بیشتر از یک است؟';
	    $replyText6='عدد شما دو است ';
    $reply = [
        'method' => 'sendMessage',
        'chat_id' => $message['chat']['id'],
        'text' => $replyText,
    ];
    echo json_encode($reply);
	if( $message=="yes"){
		 $reply2 = [
        'method' => 'sendMessage',
        'chat_id' => $message['chat']['id'],
        'text' => $replyText2,
    ];
	 echo json_encode($reply2);
	}

