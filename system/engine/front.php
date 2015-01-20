<?php
final class Front {
	private $registry;
	private $pre_action = array();
	private $error;

	public function __construct($registry) {
		$this->registry = $registry;
	}

	public function addPreAction($pre_action) {
		$this->pre_action[] = $pre_action;
	}
	//dispatch方法

    //整个程序也就调用3次dispatch方法（安装，前台，后台的控制器文件中）

    //dispatch方法把自己action数组里保存的Action对象一个一个拿出来给自己的execute方法执行，如果没有出错execute方法返回代码执行后的内容。

    //程序执行的核心就在这里，先把需要执行的类所在的文件名，类名（取名规则是Controller+目录名+文件名），方法名，参数确定下来。

    //然后用dispatch方法通过PHP的call_user_func_array函数一个一个执行类中指定的方法（默认调用index方法），在方法中通过Load对象读取插件等，通过Response对象的

    //setOutput方法把结果保存到Response对象的output变量中。最后一句$response->output();把output变量中的内容发送到客户端，即html。
	
	
	
	
	//Front->dispatch()会调用$this->execute()执行控制器 
	//execute()内部通过调用is_callable()判断控制器方法是否可以调用，
	//所以可以在子Controller中将index()定义为protected，
	//防止直接调用 
	////当直接调用时child Controller中的protected方法时，将会转到error/not_found  
	public function dispatch($action, $error) {
		$this->error = $error;

		foreach ($this->pre_action as $pre_action) {
			$result = $this->execute($pre_action);

			if ($result) {
				$action = $result;//重置

				break;
			}
		}

		while ($action) {
			$action = $this->execute($action);
		}
	}
	//  dispatch方法把自己action数组里保存的Action对象一个一个拿出来给自己的execute方法执行，
	//如果没有出错execute方法返回代码执行后的内容。
	private function execute($action) {
		$result = $action->execute($this->registry);

		if (is_object($result)) {
			$action = $result;
		} elseif ($result === false) {
			$action = $this->error;

			$this->error = '';
		} else {
			$action = false;
		}

		return $action;
	}
}