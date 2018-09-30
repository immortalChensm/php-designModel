<?php
	//use Design\FlyWeight\FlyWeightFactory;
require 'FlyWeightInterface.php';
	require 'CharacterFlyWeight.php';
	require 'FlyWeightFactory.php';
	
	$characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];
    
    $factory = new Design\FlyWeight\FlyWeightFactory();
    foreach ($characters as $char){
        foreach ($fonts as $font){
            $charFlyweight = $factory->get($char);
            echo $charFlyweight->render($font);
        }
    }
    /**
     * 为了节约内存的使用，享元模式会尽量使类似的对象共享内存。在大量类似对象被使用的情况中这是十分必要的。常用做法是在外部数据结构中保存类似对象的状态，并在需要时将他们传递给享元对象。
     * 享元模式
     * 
     * **/
?>