<?php
// exit();
header('Content-Type:application/javascript', false, 304);
// exit();
header('Content-Type:application/javascript', true, 200);
// sleep(1);
?>
var arrayDefined2 = typeof array == 'object';
var inlineData2 = typeof inlineData == 'boolean';

var arrayy = [];

if(typeof array == 'object'){
	array.push('2');
}