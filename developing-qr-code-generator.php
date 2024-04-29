<?php 
require_once 'vendor/autoload.php';

use chillerlan\QRCode\{QRCode, QROptions};

/**
* Plugin Name: Developing QR Code generator
* Author: Developing
* Version: 1.0 
* Description: Maak eenvoudig een QR code aan.
*/


add_shortcode('mq_qr_code', function () {

  if (!isset($_GET['gebruiker']) || empty ($_GET['gebruiker'])):
    return; 
  endif;

  $gebruiker = sanitize_text_field($_GET['gebruiker']);

  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

  echo '<img src="'.(new QRCode)->render($url).'" class = "mq-qr-code" width = "250px" />';
});
