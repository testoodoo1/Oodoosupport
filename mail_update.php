<?php
include ('/var/www/config/heing_local.php');
$date = date('YmdHis');
echo "\n$date:Mail Script Started\n";

require 'vendor/autoload.php';

define('APPLICATION_NAME', 'Gmail API PHP Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/gmail-php-quickstart.json');
define('CLIENT_SECRET_PATH', 'client_secret.json');
define('SCOPES', implode(' ', array(
  Google_Service_Gmail::MAIL_GOOGLE_COM)
));

$client =getClient();
$service = new Google_Service_Gmail($client);
$userId='me';
$list = $service->users_messages->listUsersMessages($userId,['maxResults' => 1000]);
$messageList = $list->getMessages();

foreach($messageList as $mlist){

	$idChecks =Database::prepare("select * from create_mail_table where message_id='$mlist->id'");
    $idChecks->execute();
    $idCheck = $idChecks->fetch(PDO::FETCH_ASSOC);
	

    if(!$idCheck){
			    $optParamsGet2['format'] = 'full';
			    $single_message = $service->users_messages->get('me',$mlist->id, $optParamsGet2);
			    #var_dump($single_message->getPayload()->getFilename());die;
			    #$raw = $single_message->getRaw();  // while using $optParamsGet2 "format" is "raw" instead of "full"
			    $messageId = $single_message->getId();
			    $threadId = $single_message->getThreadId();
			    $historyId = $single_message->getHistoryId();
			    $labelIds = $single_message->getLabelIds();
			    #var_dump(json_decode(json_encode($labelIds))); die;

		    	$headers = $single_message->getPayload()->getHeaders();
		        foreach ($headers as $header) {
		            if ($header->getName() == 'Subject') {
		                $subject = $header->getValue();
		            }else{
		            	$subject = 'Unknown';
		            }
		            if($header->getName() == 'From'){
		                $from = $header->getValue();
		            }
		            if($header->getName() == 'To'){
		                $to = $header->getValue();
		                #var_dump($to); die;
		            }else{
		            	$to = 'Unknown';
		            }
		            if ($header->getName() == 'Date') {
		                $message_date = $header->getValue();
		                $time = date('Y-m-d H:i:s', strtotime($message_date));
		            }
		    	}

			    $prefix = array("Re: ", "Fwd: ");
			    $new_subject = str_replace($prefix, "", $subject);

$fromChecks =Database::prepare("select count(*) as count from create_mail_table where from_mail='$from'");
    $fromChecks->execute();
    $fromCheck = $fromChecks->fetch(PDO::FETCH_ASSOC);

$subjectChecks =Database::prepare("select count(*) as count,thread_id  from create_mail_table where from_mail='$from'");
    $subjectChecks->execute();
    $subjectCheck = $subjectChecks->fetch(PDO::FETCH_ASSOC);

    if($fromCheck['count'] > 0 && $subjectCheck['count'] > 0){
        $old_thread_id = $subjectCheck['thread_id'];
        $single_message->setThreadId($old_thread_id);
        $threadId = $single_message->getThreadId();
    }

					    /*  body message   */
					    $body = $single_message->getPayload()->getBody();

					    #var_dump(decode_body("PGRpdiBkaXI9Imx0ciI-dW5yZWFkIG1lc3NhZ2UgYm9keTwvZGl2Pg0K")); die;
					    $body_new = decode_body($body['data']);
					    #var_dump($body_new); die;
					    #var_dump($single_message->getPayload()->getParts()); die;
					    if(!$body_new){
					        $parts = $single_message->getPayload()->getParts();
					        foreach($parts as $part){
					                if($part['body']) {
					                $body_new = decode_body($part['body']->data);
					                if($body_new === true){
					                    break;
					                }
					            }
					            if($part['parts'] && !$body_new) {
					                foreach ($part['parts'] as $p) {
					                    if($p['mimeType'] === 'text/plain' && $p['body']) {
					                        $body_new = decode_body($p['body']->data);
					                        break;
					                    }
					                }
					            }
					            if($body_new) {
					                break;
					            }
					        }
					    }

					    $body = $body_new;

					    //attachment success
					    unset($attachment);
					    $parts = $single_message->getPayload()->getParts();
					    foreach ($parts as $part ) {
					        if ($part->getFilename() != null && strlen($part->getFilename())   > 0) {
					            $filename = $part->getFilename();
					            $attId = $part->getBody()->getAttachmentId();
					            $attachPart = $service->users_messages_attachments->get($userId, $messageId, $attId);
					            $attachPart = strtr($attachPart->getData() , "-_" , "+/" );
					            $code_base64 = $attachPart;
					            $code_binary = base64_decode($code_base64);
					            $file_ext = new SplFileInfo($filename);
					            $file_ext = $file_ext->getExtension();
					            $file_hash = hash('sha256', $attId);
					            $file_location = dirname(__FILE__).'/attachId/';
					            #var_dump($file_ext); die;
					            file_put_contents($file_location, $code_binary);
					            #echo "Your attachment ". $filename." with id ".$attId." saved succesfully at ".$file_location;
					            $attachment[] = array(
					            'filename' => $filename,
					            'attachmentId' => $attId,
					            'filelocation' => $file_location
					            );
					            // $image= imagecreatefromstring($code_binary);
					            // header('Content-Type: image/jpeg');
					            // imagejpeg($image);
					            // imagedestroy($image);
					        }
					    }
					/* remove re and fwd from subject
					    $subject = preg_replace('/^Re: /', '', $subject);
					    $subject = preg_replace('/^Fwd: /', '', $subject);*/
						$thread_ids =Database::prepare("select * from create_mail_table where thread_id='$threadId'");
					    $thread_ids->execute();
					    $thread_id = $thread_ids->fetch(PDO::FETCH_ASSOC);

					    $ticket =Database::prepare("select * from tickets where thread_id='$threadId'");
					    $ticket->execute();
					    $tickets = $ticket->fetch(PDO::FETCH_ASSOC);

					    if(!$thread_id && $labelIds['0'] == 'INBOX'){
					        autoMessage($from, $to, $subject, 123, 'test', 123,$threadId);
					    }

				        $message_id = $mlist->id;
				        $thread_id = $threadId;
				        $history_id = $historyId;
				        if(isset($labelIds['0'])){
				            $label = $labelIds['0'];
				        }else{
				        	$label=NULL;
				        }
				        $subject = $subject;
				        $from_mail = $from;
				        $to_mail = $to;
				        $body = $body;
				        if(isset($attachment)){
				            $attachment = json_encode($attachment);
				        }else{
				        	$attachment = 0;
				        }
				        $time = $time;

					$temp_insert =Database::prepare("INSERT INTO `create_mail_table` (`message_id`,`thread_id`,`history_id`,`label`,`subject`,`from_mail`,`to_mail`,`body`,`attachment`,`time`,`created_at`,`updated_at`) 
                        VALUES (:message_id,:thread_id
                        	,:history_id,:label,:subject,:from_mail,:to_mail,:body,:attachment,:time,:created_at,:updated_at)");
                            
					$temp_inserts = array('message_id'=>$message_id,'thread_id'=>$thread_id,
						'history_id'=>$history_id,'label'=>$label,'subject'=>$subject,
						'from_mail'=>$from_mail,'to_mail'=>$to_mail,'body'=>$body,
						'attachment'=>$attachment,'time'=>$time,
						'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"));
        
                    $temp_insert = $temp_insert->execute($temp_inserts);
                    var_dump('mani');
}   

}

///////////////////////////////////////////////////////////////

function decode_body($body) {
    $rawData = $body;
    $sanitizedData = strtr($rawData,'-_', '+/');
    $decodedMessage = base64_decode($sanitizedData);
    if(!$decodedMessage){
        $decodedMessage = FALSE;
    }
    return $decodedMessage;

}	

///////////////////////////
function getClient() {
		$client = new Google_Client();
		$client->setApplicationName(APPLICATION_NAME);
		$client->setScopes(SCOPES);
		$client->setAuthConfigFile(CLIENT_SECRET_PATH);
		$client->setAccessType('offline');

		$credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
		if (file_exists($credentialsPath)) {
			$accessToken = file_get_contents($credentialsPath);
		} else {
			$authUrl = $client->createAuthUrl();
			printf("Open the following link in your browser:\n%s\n", $authUrl);
			print 'Enter verification code: ';
			$authCode = trim(fgets(STDIN));
			$accessToken = $client->authenticate($authCode);
			if(!file_exists(dirname($credentialsPath))) {
				mkdir(dirname($credentialsPath), 0700, true);
			}
			file_put_contents($credentialsPath, $accessToken);
			printf("Credentials saved to %s\n", $credentialsPath);
		}
		$client->setAccessToken($accessToken);
		if ($client->isAccessTokenExpired()) {
			$client->getRefreshToken();
			file_put_contents($credentialsPath, $client->getAccessToken());
		}
		return $client;
	}
/////////////////////////////////////////////////////////////
function expandHomeDirectory($path) {
  $homeDirectory = getenv('HOME');
  if (empty($homeDirectory)) {
    $homeDirectory = getenv("HOMEDRIVE") . getenv("HOMEPATH");
  }
  return str_replace('~', realpath($homeDirectory), $path);
}
///////////////////////////////////////////////////
function autoMessage($from, $to, $subject, $ticket_no, $body, $assigned_to,$thread_id){

        $client = getClient();
        $service = new Google_Service_Gmail($client);
        $userId='me';
        $label = 'ACK';
        if($subject != "Ticket Raised"){
        	$subject = "Ticket Received - ".$subject."";
        	$body = "Dear ".$from.",\n\nWe would like to acknowledge that we have received your request and a ticket has been created.A support representative will be reviewing your request and will send you a personal response in a short time.\n\nThank you for your patience.\n\nSincerely,\nOODOO Fiber Support Team";
        }else{
            $label = 'SENT';
            $body = "Dear ".$from.",\n\nTicket No: ".$ticket_no." \n\nWe would like to acknowledge that we have received your request and a ticket has been created.A support representative will be reviewing your request and will send you a personal response in a short time.\n\n".$body."\n\nThank you for your patience.\n\nSincerely,\n".Auth::employee()->get()->name."\nOODOO Fiber Support Team";
        }


	    $message = new Google_Service_Gmail_Message();
    	$text = 'From: '.$to.'To: '.$from.'Subject:'.$subject.''.$body.'';

        $encoded_message = rtrim(strtr(base64_encode($text), '+/', '-_'), '=');
        $message->setRaw($encoded_message);

        $message = $service->users_messages->send($userId, $message);
        $thread = $message->setThreadId($thread_id);

        //ticket insert.......
        $today_tickets = Database::prepare("SELECT * FROM tickets where DATE(created_at) = DATE(NOW())");
        $today_tickets->execute();
        $tickets = $today_tickets->fetchAll(PDO::FETCH_ASSOC);
        $count = strval(count($tickets));
        $ticket_no = sprintf("%02s", date('d')). sprintf("%02s", date('m')) .  date('y') . sprintf("%04s", $count);

    	$ticket_insert=Database::prepare("INSERT INTO `tickets` (`ticket_no`,`account_id`,`name`,`email`,`address`,`area`,`mobile`,`city_id`,`ticket_type_id`,`status_id`,`created_at`,`updated_at`,`requirement`,`thread_id`)
	    VALUES(:ticket_no,:account_id,:name,:email,:address,:area,:mobile,:city_id,:ticket_type_id,:status_id,:created_at,:updated_at,:requirement,:thread_id)");

	    $ticket_inserts=array('ticket_no'=> $ticket_no,'account_id'=>'' ,'name' =>'Unknown','email' =>$from,'address'=>'Not Found','area' =>'Not Found','mobile'=>'9999999999','city_id'=>'','ticket_type_id'=>4444,
	            'status_id'=>3,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'requirement'=>'First Mail','thread_id'=>$thread_id);


	    $ticket_insert_count = $ticket_insert->execute($ticket_inserts);

	    //status insert.......
	    $ticket_det =Database::prepare("select * from tickets where ticket_no='$ticket_no' ORDER BY id DESC");
	    $ticket_det->execute();
	    $ticket = $ticket_det->fetch(PDO::FETCH_ASSOC);

	    $status_id =3;
	    $object_type = "ticket";
	    $object_id = $ticket['id'];

	    $status_insert=Database::prepare("INSERT INTO `status` (`status_id`,`created_at`,`updated_at`,`object_id`,`object_type`)
	            VALUES(:status_id,:created_at,:updated_at,:object_id,:object_type)");
	    $status_inserts=array('status_id'=>$status_id,'created_at'=>date("Y-m-d H:i:s"),
	                        'updated_at'=>date("Y-m-d H:i:s"),'object_id'=>$object_id,'object_type'=>$object_type);
	    $status_insert_count = $status_insert->execute($status_inserts);                    

                    
	    //mail inbox....
        $message_id = $message->getId();
        $thread_id = $message->getThreadId();
        $history_id = 2222;
        $label = $label;
        $subject = $subject;
        $from_mail = $from;
        $to_mail = $to;
        $body = $body;
   		if(isset($attachment)){
    		$attachment = json_encode($attachment);
    	}else{
        	$attachment = 0;
        }
        $time = Date("Y-m-d H:i:s");

        $temp_insert =Database::prepare("INSERT INTO `create_mail_table` (`message_id`,`thread_id`,`history_id`,`label`,`subject`,`from_mail`,`to_mail`,`body`,`attachment`,`time`,`created_at`,`updated_at`) 
                        VALUES (:message_id,:thread_id
                        	,:history_id,:label,:subject,:from_mail,:to_mail,:body,:attachment,:time,:created_at,:updated_at)");
                            
		$temp_inserts = array('message_id'=>$message_id,'thread_id'=>$thread_id,
			'history_id'=>$history_id,'label'=>$label,'subject'=>$subject,
			'from_mail'=>$from_mail,'to_mail'=>$to_mail,'body'=>$body,
			'attachment'=>$attachment,'time'=>$time,
			'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"));

        $temp_insert = $temp_insert->execute($temp_inserts);   

        var_dump('replay'); 
    }
///////////////////////////////////////////////////////////////


    