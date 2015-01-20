<?php
class Language {
	private $default = 'english';
	private $directory;
	private $data = array();
	//构造函数初始化
	public function __construct($directory = '') {
		$this->directory = $directory;
	}

	public function get($key) {
		return (isset($this->data[$key]) ? $this->data[$key] : $key);
	}
	//装载语言文件
	public function load($filename) {
		$_ = array();
		//找到文件路径（目前只有英文文件包）
		$file = DIR_LANGUAGE . $this->default . '/' . $filename . '.php';
		//载入该文件
		if (file_exists($file)) {
			require($file);
		}
		
		$file = DIR_LANGUAGE . $this->directory . '/' . $filename . '.php';

		if (file_exists($file)) {
			require($file);
		}
		//将数据合并入数组data中
		$this->data = array_merge($this->data, $_);

		return $this->data;
	}
}