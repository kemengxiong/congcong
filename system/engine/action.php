<?php
//
//Action对象是调度器，是控制器（Front对象）的秘书，
//得到控制器传过来的命令确定要执行的文件名，类名，方法名，参数。
//然后通过Front对象的dispatch方法执行
final class Action {
	private $file;
	private $class;
	private $method;
	private $args = array();

	public function __construct($route, $args = array()) {
		$path = '';

		// Break apart the route
		$parts = explode('/', str_replace('../', '', (string)$route));

		foreach ($parts as $part) {
			$path .= $part;
			//define('DIR_APPLICATION', 'C:\xampp\htdocs\opencart\upload/admin/');
			if (is_dir(DIR_APPLICATION . 'controller/' . $path)) {
				$path .= '/';

				array_shift($parts);

				continue;
			}
			//找到执行文件
			$file = DIR_APPLICATION . 'controller/' . str_replace(array('../', '..\\', '..'), '', $path) . '.php';
			//如果文件存在
			if (is_file($file)) {
				$this->file = $file;
				//找到相关的类名，比如：在/index.php?route=account/login中
				//根据这个route，op的框架会找到Controller下的Account里的Login.php, 
				//注意login.php的类名一定是这种格式的ControllerAccoutLogin{...}
				$this->class = 'Controller' . preg_replace('/[^a-zA-Z0-9]/', '', $path);

				array_shift($parts);

				break;
			}
		}

		if ($args) {
			$this->args = $args;
		}
		//找到对应的方法
		$method = array_shift($parts);

		if ($method) {
			$this->method = $method;
		} else {
			$this->method = 'index';
		}
	}
	//执行
	public function execute($registry) {
		// Stop any magical methods being called
		if (substr($this->method, 0, 2) == '__') {
			return false;
		}

		if (is_file($this->file)) {
			include_once($this->file);

			$class = $this->class;

			$controller = new $class($registry);
			//is_callable — Verify that the contents of a variable can be called as a function 
			if (is_callable(array($controller, $this->method))) {
				//call_user_func — Call the callback given by the first parameter
				//调用类内部的函数需要使用数组方式 array(类名，方法名) 
				//通过call_user_func_array函数执行指定文件，把结果返回到传递过来的Action对象中
				return call_user_func(array($controller, $this->method), $this->args);
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}