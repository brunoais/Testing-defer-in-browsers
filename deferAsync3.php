<?php
// exit();
header('Content-Type:application/javascript', false, 304);
// exit();
header('Content-Type:application/javascript', true, 200);
// sleep(1);
?>
var arrayDefined3 = typeof array == 'object';
var inlineData3 = typeof inlineData == 'boolean';
var jjQuery3 = typeof window.jQuery == 'function';

if(typeof array == 'object'){
	array.push('3');
}
if(typeof arrayy == 'object'){
	arrayy.push('3');
}