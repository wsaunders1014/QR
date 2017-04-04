<?php

/*
 * What protocol to use?
 * mail, sendmail, smtp

$config['protocol'] = 'mail';

/*
 * SMTP server address and port

$config['smtp_host'] = '';
$config['smtp_port'] = '';
 */
/*
 * SMTP username and password.

$config['smtp_user'] = '';
$config['smtp_pass'] = '';
 */
/*
 * Heroku Sendgrid information.
 */
/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.sendgrid.net';
$config['smtp_port'] = 587;
$config['smtp_user'] = $_SERVER['SENDGRID_USERNAME'];
$config['smtp_pass'] = $_SERVER['SENDGRID_PASSWORD'];
*/ 


$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.mailgun.org';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'postmaster@setmedialab.com';
$config['smtp_pass'] = 'Peanut777';
$config['smtp_timeout'] = '4';
$config['crlf'] = '\n';
$config['newline'] = '\r\n';

  