<?php
	require 'Record.php';
	require 'RecordProxy.php';
	
	$record = new Design\Proxy\RecordProxy(['a'=>'1','b'=>2]);
	
	echo $record->a;
	echo $record->isDirty();
?>