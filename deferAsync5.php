<?php
// exit();
header('Content-Type:application/javascript', false, 304);
// exit();
header('Content-Type:application/javascript', true, 200);
sleep(1);
?>
var arrayDefined5 = typeof array == 'object';
var inlineData5 = typeof inlineData == 'boolean';

if(typeof array == 'object'){
	array.push('5');
}
if(typeof arrayy == 'object'){
	arrayy.push('5');
}