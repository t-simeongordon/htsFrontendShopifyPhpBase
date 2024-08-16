<?php

$_API_KEY='';
$_NGROK_URL='https://4530-2a02-c7c-a460-e000-e9d7-294a-8fe-2d03.ngrok-free.app';
$shop=$_GET['shop'];
$scopes='read_products,write_products,read_orders,write_orders';
$redirect_uri=$_NGROK_URL . '/php-app/token.php'

echo $shop