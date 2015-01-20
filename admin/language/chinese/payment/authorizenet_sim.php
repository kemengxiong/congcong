<?php
// Heading
$_['heading_title']					= 'Authorize.Net (AIM)';//Authorize.Net (SIM)

// Text
$_['text_payment']					= '支付管理';//Payment
$_['text_success']					= '成功：您已修改Authorize.Net（AIM）帐户细节！';//Success: You have modified Authorize.Net (SIM) account details!
$_['text_edit']                     = '编辑授权。净(SIM)';//Edit Authorize.Net (SIM)
$_['text_authorizenet_sim']			= '<a onclick="window.open(\'http://reseller.authorize.net/application/?id=5561103\');"><img src="view/image/payment/authorizenet.png" alt="Authorize.Net" title="Authorize.Net" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant']				= '商家 ID：';//Merchant ID
$_['entry_key']						= '交易 Key：';//Transaction Key
$_['entry_callback']				= 'Relay Response URL：<br /><span class="help">请登入并设置了这个 <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>。</span>';//Relay Response URL
$_['entry_md5']						= 'MD5散列值';//MD5 Hash Value
$_['entry_test']					= '测试模式：';//Test Mode
$_['entry_total']					= '订单合计：<br /><span class="help">当结帐时订单合计必须大于此数置才可使用本支付方式。</span>';//Total
$_['entry_order_status']			= '订单状态：';//Order Status
$_['entry_geo_zone']				= '区域群组：';//Geo Zone
$_['entry_status']					= '状态：';//Status
$_['entry_sort_order']				= '排序：';//Sort Order

// Help
$_['help_callback']					= 'Please login and set this at <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.';
$_['help_md5']						= 'The MD5 Hash feature enables you to authenticate that a transaction response is securely received from Authorize.Net.Please login and set this at <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.(Optional)';
$_['help_total']					= '付款总订单必须达到在此之前付款方法变得活跃。';//The checkout total the order must reach before this payment method becomes active.

// Error
$_['error_permission']				= '警告： 您没有权限修改付款 Authorize.Net (AIM)！';//Warning: You do not have permission to modify payment Authorize.Net (SIM)!
$_['error_merchant']				= '商家 ID必填！';//Merchant ID Required!
$_['error_key']						= '交易钥匙必填！';//Transaction Key Required!
