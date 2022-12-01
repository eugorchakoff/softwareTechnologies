<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		// require_once($_SERVER['DOCUMENT_ROOT'] . './phpmailer/smtp.php');
		// const HOST = '';
		// const LOGIN = '';
		// const PASS = '';
		// const PORT = '';

		// *** /SMTP *** //
   
    const SENDER = 'irina.nov17@mail.ru';
    const CATCHER = 'eugenegorchakoff@gmail.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';