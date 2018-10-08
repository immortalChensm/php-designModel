<?php
	use Design\Command\Receiver;
use Design\Command\Invoker;
require 'CommandInterface.php';
	require 'Receiver.php';
	require 'HelloCommand.php';
	require 'DateTime.php';
	require 'Invoker.php';
	
	$receiver = new Receiver();
	$invoker = new Invoker();
	
	$invoker->setCmd(new Design\Command\HelloCommand($receiver));
	$invoker->run();
	
	echo $receiver->output();
	
	$invoker->setCmd(new Design\Command\DateTime($receiver));
	$invoker->run();
	
	echo $receiver->output();
	
	/**
	 * 命令行模式
	 * 命令接口【执行方法】
	 * hello具体命令类【执行方法】
	 * 接受命令类【接受参数，输入命令结果】
	 * 命令执行类【接受hello命令并运行】
	 * 
	 * 命令模式：接受命令【接受后是否对命令处理】，执行命令【对具体命令进行处理】，输入执行结果【命令执行结果输入格式处理】
	 * **/
?>