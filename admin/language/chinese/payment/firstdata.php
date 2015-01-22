<?php
// Heading
$_['heading_title']					= '第一个数据EMEA连接(3 dsecure启用)';//First Data EMEA Connect (3DSecure enabled)

// Text
$_['text_payment']					= '付款';//Payment
$_['text_success']					= '成功:你先修改数据帐户详细信息!';//Success: You have modified First Data account details!
$_['text_edit']                     = '编辑第一个数据EMEA连接(3 dsecure启用)';//Edit First Data EMEA Connect (3DSecure enabled)
$_['text_notification_url']			= '通知地址';//Notification URL
$_['text_live']						= '生活';//Live
$_['text_demo']						= '演示';//Demo
$_['text_enabled']					= '启用';//Enabled
$_['text_merchant_id']				= '存储ID';//Store ID
$_['text_secret']					= '共享的秘密';//Shared secret
$_['text_capture_ok']				= '捕获成功';//Capture was successful
$_['text_capture_ok_order']			= '获取成功,订单状态更新成功,解决了';//Capture was successful, order status updated to success - settled
$_['text_void_ok']					= '空虚是成功的,订单状态更新为空心';//Void was successful, order status updated to voided
$_['text_settle_auto']				= '出售';//Sale
$_['text_settle_delayed']			= '之前的身份验证';//Pre auth
$_['text_success_void']				= '交易已被废弃的';//Transaction has been voided
$_['text_success_capture']			= '交易已被抓获';//Transaction has been captured
$_['text_firstdata']				= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment_info']				= '支付信息';//Payment information
$_['text_capture_status']			= '付款了';//Payment captured
$_['text_void_status']				= '付款有空间的';//Payment voided
$_['text_order_ref']				= '订单裁判';//Order ref
$_['text_order_total']				= '总授权';//Total authorised
$_['text_total_captured']			= '总了';//Total captured
$_['text_transactions']				= '交易';//Transactions
$_['text_column_amount']			= '量';//Amount
$_['text_column_type']				= '类型';//Type
$_['text_column_date_added']		= '创建';//Created
$_['text_confirm_void']				= '你确定你想要取消付款?';//Are you sure you want to void the payment?
$_['text_confirm_capture']			= '你确定你想捕捉到付款吗?';//Are you sure you want to capture the payment?

// Entry
$_['entry_merchant_id']				= '存储ID';//Store ID
$_['entry_secret']					= '共享的秘密';//Shared secret
$_['entry_total']					= '总';//Total
$_['entry_sort_order']				= '排序顺序';//Sort order
$_['entry_geo_zone']				= '地理区域';//Geo zone
$_['entry_status']					= '状态';//Status
$_['entry_debug']					= '调试日志';//Debug logging
$_['entry_live_demo']				= '生活/演示';//Live / Demo
$_['entry_auto_settle']				= '协议类型';//Settlement type
$_['entry_card_select']				= '选择卡';//Select card
$_['entry_tss_check']				= 'TSS检查';//TSS checks
$_['entry_live_url']				= '现场连接URL';//Live connection URL
$_['entry_demo_url']				= '演示连接URL';//Demo connection URL
$_['entry_status_success_settled']	= '成功——定居';//Success - settled
$_['entry_status_success_unsettled'] = '成功——而不是解决';//Success - not settled
$_['entry_status_decline']			= '下降';//Decline
$_['entry_status_void']				= '有空间的';//Voided
$_['entry_enable_card_store']		= 'tokens储存card Enable网页';//Enable card storage tokens

// Help
$_['help_total']					= '付款总订单必须达到在此之前付款方法变得活跃';//The checkout total the order must reach before this payment method becomes active
$_['help_notification']				= '你需要先提供这个URL数据付款通知';//You need to supply this URL to First Data to get payment notifications
$_['help_debug']					= '启用调试将敏感数据写入一个日志文件中。你应该禁用,除非另有指示';//Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise
$_['help_settle']					= '如果你使用pre-auth你3 - 5天内必须完成post-auth行动否则你的事务将被删除';//If you use pre-auth you must complete a post-auth action within 3-5 days otherwise your transaction will be dropped

// Tab
$_['tab_account']					= 'API的信息';//API info
$_['tab_order_status']				= '订单状态';//Order status
$_['tab_payment']					= '支付设置';//Payment settings
$_['tab_advanced']					= '先进的';//Advanced

// Button
$_['button_capture']				= '捕获';//Capture
$_['button_void']					= '无效';//Void

// Error
$_['error_merchant_id']				= '存储ID是必需的';//Store ID is required
$_['error_secret']					= '共享密钥是必需的';//Shared secret is required
$_['error_live_url']				= '生活需要URL';//Live URL is required
$_['error_demo_url']				= '演示网址是必需的';//Demo URL is required
$_['error_data_missing']			= '数据丢失';//Data missing
$_['error_void_error']				= '不能取消交易';//Unable to void transaction
$_['error_capture_error']			= '无法捕捉事务';//Unable to capture transaction
