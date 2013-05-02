<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BogiMailer
 *
 * @author Kaia Ibrahim
 */
class BogiMailer {
    public static function sendEmail($to, $subject, $message, $additional_headers = null, $additional_parameters = null){                
        /*
		$smtpServer = exitConfig::APP_MAIL_SERVER;
		$config = array(
            'auth' => exitConfig::APP_MAIL_AUTH,
            'username' => exitConfig::APP_MAIL_USRNM,
            'password' => exitConfig::APP_MAIL_PASSW,
            'port' => exitConfig::APP_MAIL_PORT
        );
		$transport = new Zend_Mail_Transport_Smtp($smtpServer,$config);
		*/

		$config = array(
			'name' => 'exitpoint.hu',
			'host' => 'localhost',
			'port' => 25,
		);
		$transport = new Zend_Mail_Transport_Smtp('localhost',$config);

		/*
		// Setup SMTP transport using LOGIN authentication
		
		$config = array(
			'auth' => 'login',
			'username' => 'david@port.hu',
			'password' => 'Naszta82',
			'ssl'      => 'tls',
			'port'     => 587,
		);
		$transport = new Zend_Mail_Transport_Smtp('mail.port.hu',$config);      
		*/
        Zend_Mail::setDefaultTransport($transport);
        
        $mail = new Zend_Mail('utf-8');
        $fileContents = file_get_contents('http://exitpoint.hu/exitsite/images/exitpoint_logo.jpg');
        $at = new Zend_Mime_Part($fileContents);
        $at->type        = 'image/jpg';
        $at->disposition = Zend_Mime::DISPOSITION_INLINE;
        $at->encoding    = Zend_Mime::ENCODING_BASE64;
        $at->filename    = 'exitpoint_logo.jpg';

        $mail->addAttachment($at);
        
        
        
        $mail->setHeaderEncoding(Zend_Mime::ENCODING_QUOTEDPRINTABLE);
        $mail->addTo($to);
        $mail->setFrom($config['username'], "Info");
        $mail->setSubject($subject);
        // $mail->setBodyText();
        $mail->setBodyHtml(self::exitPointMessage($message));
        $mail->send();
        
        return true;
    }
    
    public static function exitPointMessage($message){
        
        $email = <<<MAIL
<style type="text/css">
* {margin:0px; padding:0px; border:none; border-style:none;}
table.exitPointGamesTableClass {
	width:480px;
	height:0px;
	background: #060606;
}
table.exitPointGamesTableClass .separatorClass {
	margin:0px 10px 0px 10px;
	max-height:2px;
	height:2px;
	background: #C3FF05;
	overflow:hidden;
}
table.exitPointGamesTableClass .contentClass, table.exitPointGamesTableClass .footerClass {
	vertical-align:top;
	padding:10px;
	height:400px;
	min-height:400px;
}
table.exitPointGamesTableClass .footerClass {
	height:0px;
}
table.exitPointGamesTableClass h1, table.exitPointGamesTableClass p, table.exitPointGamesTableClass .parClass, table.exitPointGamesTableClass .valClass {
	font-family: 'DINNextLTProLight', 'Arial', Sans-serif;
}
table.exitPointGamesTableClass h1 {
	margin-bottom: 8px;
	color:#C3FF05;
	text-transform: uppercase;
	font-size: 15px;
	letter-spacing: 2px;
}
table.exitPointGamesTableClass p {
	font-size: 13px;
	color: #fff;
	font-weight: bold;
}
table.exitPointGamesTableClass .parClass, table.exitPointGamesTableClass .valClass {
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
}
table.exitPointGamesTableClass .valClass, table.exitPointGamesTableClass .valClass a {
	text-decoration:none;
	color:#C3FF05;
}
table.exitPointGamesTableClass .valClass a:hover {
	color:#7DAF10;
}
</style>
<table class="exitPointGamesTableClass" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    
        <a target="_blank" class="e" download_url="image/jpeg:exitpoint_logo.jpg:https://mail.google.com/mail/u/0/?ui=2&amp;ik=6a18858ac1&amp;view=att&amp;th=13dd56d5df5cad62&amp;attid=0.1&amp;disp=safe&amp;realattid=2e8e324648ea1f98_0.1&amp;zw" title="KattintÃ¡ssal megtekintheti VAGY hÃºzÃ¡ssal az asztalra mentheti" href="">
        
        <img alt="" src="data:image/png;base64,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" />
        
        </a>
    
    </td>
  </tr>
  <tr>
    <td>
    	<div class="separatorClass"></div>
    </td>
  </tr>
  <tr>
    <td class="contentClass">
MAIL;
        $email .= $message;
        $email .= <<<MAIL
    </td>
  </tr>
  <tr>
    <td>
    	<div class="separatorClass"></div>
    </td>
  </tr>
  <tr>
    <td class="footerClass">
    	<p>
        	<span class="parClass">Cím:</span><span class="valClass"><a href="http://exitpoint.hu">1073 Bp, Akácfa u. 49. Fogas kert</a></span>
        </p>
        <p>
        	<span class="parClass">Email:</span><span class="valClass">info@exitpoint.hu</span>
        </p>
        <p>
        	<span class="parClass">Telefon:</span><span class="valClass">0620/3755-055</span>
        </p>
    </td>
  </tr>
</table>
MAIL;

        return $email;
    }
}

?>
