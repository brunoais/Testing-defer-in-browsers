<?php
// exit();
header('Content-Type:application/javascript', false, 304);
// exit();
header('Content-Type:application/javascript', true, 200);
sleep(2);
?>
var arrayDefined4 = typeof array == 'object';
var inlineData4 = typeof inlineData == 'boolean';
var jjQuery4 = typeof window.jQuery == 'function';

if(typeof array == 'object'){
	array.push('4');
}
if(typeof arrayy == 'object'){
	arrayy.push('4');
}