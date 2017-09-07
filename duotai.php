<?php
/**
 * 多太特性
 * 1.程序扩展准备
 * 技术：1必须有继承关系，父类最好是接口或是抽象类
 */
//USB接口
interface USB {
	const WIDTH = 12;
	const HEIGHT = 3;

	function load();
	function run();
	function stop();
}
//电脑类
class Cumputer {
	function useUSB(USB $usb){
		$usb->load();
		$usb->run();
		$usb->stop();
	}
}