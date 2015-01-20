<?php
// Heading
$_['heading_title']                     = '项目导入';//Item import
$_['text_openbay']                      = 'OpenBay职业';//OpenBay Pro
$_['text_ebay']                         = '易趣';//eBay

// Text
$_['text_sync_import_line1']            = '<strong>Caution!</strong> This will import all of your eBay products and build a category structure in your store. It is advised that you delete all categories and products before you run this option. <br />The category structure is from the normal eBay categories, not your shop categories (if you have an eBay shop). You can rename, remove and edit the imported categories without affecting your eBay products.';
$_['text_sync_import_line3']            = '您需要确保您的服务器可以接受和处理大型POST数据大小。1000年eBay项目约40 mb,您将需要计算你需要的东西。如果你调用失败,那么它可能是你的设置是太小了。PHP需要大约128 mb内存限制。';//You need to ensure your server can accept and process large POST data sizes. 1000 eBay items is about 40Mb in size, you will need to calculate what you require. If your call fails then it is likely your setting is too small. Your PHP memory limit needs to be about 128Mb.
$_['text_sync_server_size']             = '目前您的服务器可以接受:';//Currently your server can accept: 
$_['text_sync_memory_size']             = 'PHP内存限制:';//Your PHP memory limit: 
$_['text_import_confirm']				= '这将导入所有eBay项目作为新产品,你确定吗?这个不能回复!确保你有一个先备份!';//This will import all of your eBay items as new products, are you sure? This CAN NOT be undone! ENSURE you have a backup first!
$_['text_import_notify']				= '导入请求已经发送进行处理。导入需要大约1小时每1000件。';//Your import request has been sent for processing. An import takes about 1 hour per 1000 items.
$_['text_import_images_msg1']           = '图像是等待从eBay进口/复制。刷新这个页面,如果数量不减少';//images are pending import/copy from eBay. Refresh this page, if the number does not decrease then
$_['text_import_images_msg2']           = '点击这里';//click here
$_['text_import_images_msg3']           = 'and wait. More information about why this happened can be found <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">here</a>';

// Entry
$_['entry_import_item_advanced']        = '乘坐advanced数据';//Get advanced data
$_['entry_import_categories']         	= '进口的类别';//Import categories
$_['entry_import_description']			= 'Import item查对';//Import item descriptions
$_['entry_import']						= '进口易趣物品';//Import eBay items

// Buttons
$_['button_import']						= '进口';//Import

// Help
$_['help_import_item_advanced']        	= '需要10倍的时间才能进口物品。进口重量、大小、ISBN和更多的如果可用';//Will take up to 10 times longer to import items. Imports weights, sizes, ISBN and more if available
$_['help_import_categories']         	= '构建一个从eBay商店类别分类结构';//Builds a category structure in your store from the eBay categories
$_['help_import_description']         	= '这将导入的一切包括HTML、访问计数器等';//This will import everything including HTML, visit counters etc

// Error
$_['error_import']                   	= '未能加载';//Failed to load
$_['error_maintenance']					= '你的商店在维护模式。导入失败!';//Your store is in maintenance mode. Importing will fail!
$_['error_ajax_load']					= '无法连接到服务器';//Failed to connect to server
$_['error_validation']					= '你需要注册你的API令牌和启用模块。';//You need to register for your API token and enable the module.
