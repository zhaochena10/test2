<?php
 /**
  * 抽象类似一种抽象的类，接口是一种特殊的抽象类，接口也是一种特殊特殊的类
  * 1.抽象类和接口中都有抽象方法
  * 2.抽象类和接口都不能创建实例对象
  * 3.抽象类和接口的使用意义也就是作用相同
  * 接口和抽象类项目，特殊在哪里
  * 1.接口中的方法，必须全要死抽象方法（不能用不抽象方法）
  * 所以在接口中的抽象方法不需要使用abstract，直接使用分号结束即可
  * 
  * 2.接口中的成员属性，必须是常量（不能有变量）
  * 3.所有的权限必须是公有的（public）
  * 4.声明接口不使用class,而使用interface
  * 接口应用的一些细节：
  * 1.可以使用extends让一个接口继承另一接口（接口和接口----只有扩展新抽象方法，没有覆盖的关系）
  * 2.可以使用一个类来实现接口中的全部方法，也可以使用一个抽象类，来实现接口中的部分方法
  * （类与接口，抽象类与接口--覆盖--重写，实现接口中的抽象方法）
  * 3就不要使用extends这个关键字，使用implements实现 implements 相当于 extends
  * extends 继承（扩展），这个在php中，一个类只能有一个父类
  * 4.一个类可以在继承另一个类的同时，使用implements实现一个接口（一定要先继承，再实现接口）
  * 55.实现多个接口，只需要逗号分隔
  */
 
 //声明一个接口使用interface
 interface Demo{
 	const NAME = "zhao";
 	const AGE = 30;

 	function test();
 	function test2();
 	function test3();
 }
interface Abc{
	function test6();
}

interface Test extends Demo{
	function test4();
}
class World{
	function test5(){

	}
}
class Hello extends World implements Test,Abc {
	function test(){

	}
	function test2(){
		echo "123123123";
	}
	function test3(){

	}
	function test4(){

	}
	function test5(){

	}
	function test6(){
		echo "s222222222";
	}
}
echo Demo::test();
$a = new Hello;
$a->test2();
