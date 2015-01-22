<?php
// Heading
$_['heading_title']					= '第一个数据EMEA的Web服务API';//First Data EMEA Web Service API

// Text
$_['text_firstdata_remote']			= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment']					= '付款';//Payment
$_['text_success']					= '成功:你先修改数据帐户详细信息!';//Success: You have modified First Data account details!
$_['text_edit']                     = '编辑第一个数据EMEA Web服务API';//Edit First Data EMEA Web Service API
$_['text_card_type']				= '卡类型';//Card type
$_['text_enabled']					= '启用';//Enabled
$_['text_merchant_id']				= '存储ID';//Store ID
$_['text_subaccount']				= 'subaccount';//Subaccount
$_['text_user_id']					= '用户Id';//User ID
$_['text_capture_ok']				= '捕获成功';//Capture was successful
$_['text_capture_ok_order']			= '获取成功,订单状态更新成功,解决了';//Capture was successful, order status updated to success - settled
$_['text_refund_ok']				= '退款成功';//Refund was successful
$_['text_refund_ok_order']			= '退款成功,订单状态更新为退回';//Refund was successful, order status updated to refunded
$_['text_void_ok']					= '空虚是成功的,订单状态更新为空心';//Void was successful, order status updated to voided
$_['text_settle_auto']				= '出售';//Sale
$_['text_settle_delayed']			= '之前的身份验证';//Pre auth
$_['text_mastercard']				= '万事达卡';//Mastercard
$_['text_visa']						= '签证';//Visa
$_['text_diners']					= '用餐者';//Diners
$_['text_amex']						= '美国运通';//American Express
$_['text_maestro']					= '大师';//Maestro
$_['text_payment_info']				= '支付信息';//Payment information
$_['text_capture_status']			= '付款了';//Payment captured
$_['text_void_status']				= '付款有空间的';//Payment voided
$_['text_refund_status']			= '付款退还';//Payment refunded
$_['text_order_ref']				= '订单裁判';//Order ref
$_['text_order_total']				= '总授权';//Total authorised
$_['text_total_captured']			= '总了';//Total captured
$_['text_transactions']				= '交易';//Transactions
$_['text_column_amount']			= '量';//Amount
$_['text_column_type']				= '类型';//Type
$_['text_column_date_added']		= '创建';//Created
$_['text_confirm_void']				= '你确定你想要取消付款?';//Are you sure you want to void the payment?
$_['text_confirm_capture']			= '你确定你想捕捉到付款吗?';//Are you sure you want to capture the payment?
$_['text_confirm_refund']			= '你确定你想退还货款?';//Are you sure you want to refund the payment?

// Entry
$_['entry_certificate_path']		= '证书路径';//Certificate path
$_['entry_certificate_key_path']	= '私钥路径';//Private key path
$_['entry_certificate_key_pw']		= '私钥密码';//Private key password
$_['entry_certificate_ca_path']		= 'CA路径';//CA path
$_['entry_merchant_id']				= '存储ID';//Store ID
$_['entry_user_id']					= '用户Id';//User ID
$_['entry_password']				= '密码';//Password
$_['entry_total']					= '总';//Total
$_['entry_sort_order']				= '排序顺序';//Sort order
$_['entry_geo_zone']				= '地理区域';//Geo zone
$_['entry_status']					= '状态';//Status
$_['entry_debug']					= '调试日志';//Debug logging
$_['entry_auto_settle']				= '协议类型';//Settlement type
$_['entry_status_success_settled']	= '成功——定居';//Success - settled
$_['entry_status_success_unsettled'] = '成功——而不是解决';//Success - not settled
$_['entry_status_decline']			= '下降';//Decline
$_['entry_status_void']				= '有空间的';//Voided
$_['entry_status_refund']			= '退还';//Refunded
$_['entry_enable_card_store']		= 'tokens储存card Enable网页';//Enable card storage tokens
$_['entry_cards_accepted']			= '卡片类型接受';//Card types accepted

// Help
$_['help_total']					= '付款总订单必须达到在此之前付款方法变得活跃';//The checkout total the order must reach before this payment method becomes active
$_['help_certificate']				= '证书和私钥应该存储在你的公共网络文件夹';//Certificates and private keys should be stored outside of your public web folders
$_['help_card_select']				= '要求用户选择他们的卡片类型重定向';//Ask the user to choose thier card type before they are redirected
$_['help_notification']				= '你需要先提供这个URL数据付款通知';//You need to supply this URL to First Data to get payment notifications
$_['help_debug']					= '启用调试将敏感数据写入一个日志文件中。你应该禁用,除非另有指示。';//Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise .
$_['help_settle']					= '如果你使用pre-auth你3 - 5天内必须完成post-auth行动否则你的事务将被删除';//If you use pre-auth you must complete a post-auth action within 3-5 days otherwise your transaction will be dropped

// Tab
$_['tab_account']					= 'API的信息';//API info
$_['tab_order_status']				= '订单状态';//Order status
$_['tab_payment']					= '支付设置';//Payment settings

// Button
$_['button_capture']				= '捕获';//Capture
$_['button_refund']					= '退款';//Refund
$_['button_void']					= '无效';//Void

// Error
$_['error_merchant_id']				= '存储ID是必需的';//Store ID is required
$_['error_user_id']					= '用户ID是必需的';//User ID is required
$_['error_password']				= '密码是必需的';//Password is required
$_['error_certificate']				= '证书路径是必需的';//Certificate path is required
$_['error_key']						= '关键是需要证书';//Certificate key is required
$_['error_key_pw']					= 'Certificate key password是必需的';//Certificate key password is required
$_['error_ca']						= '证书颁发机构(CA)是必需的';//Certificate Authority (CA) is required
