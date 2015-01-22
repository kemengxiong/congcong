<?php
// Heading
$_['heading_title']					= 'PayPal Express';//PayPal Express Checkout

// Text
$_['text_success']					= '成功：PayPal Express Checkout 快速结账帐户以更新！';//Success: You have modified PayPal Express Checkout account details!
$_['text_edit']                     = 'Edit PayPal Express Checkout';
$_['text_pp_express']				= '<a onclick="window.open('https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW');"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';//<a target="_BLANK" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>
$_['text_authorization']			= '授权';//Authorization
$_['text_sale']						= '销售';//Sale
$_['text_clear']					= 'Clear';//Clear
$_['text_browse']					= 'Browse';//Browse
$_['text_image_manager']			= 'Image manager';//Image manager
$_['text_ipn']						= 'IPN url<span class="help">Required for subscriptions</span>';//IPN url

// Entry
$_['entry_username']				= 'API 户名：';//API Username
$_['entry_password']				= 'API 密码：';//API Password
$_['entry_signature']				= 'API 签名：';//API Signature
$_['entry_test']					= '测试模式：';//Test (Sandbox) Mode
$_['entry_method']					= '交易方法：';//Transaction Method
$_['entry_geo_zone']				= 'Geo Zone:';//Geo Zone
$_['entry_status']					= '状态：';//Status
$_['entry_sort_order']				= '排序：';//Sort Order
$_['entry_icon_sort_order']			= 'Icon Sort Order:';//Icon Sort Order
$_['entry_debug']					= 'Debug logging:';//Debug logging
$_['entry_total']					= '订单合计：<br /><span class="help">当结帐时订单合计必须大于此数置才可使用本支付方式。</span>';//Total
$_['entry_currency']				= 'Default currency<span class="help">Used for transaction searches</span>';//Default currency
$_['entry_recurring_cancellation']	= 'Allow customers to cancel recurring payments';
$_['entry_canceled_reversal_status'] = 'Canceled Reversal Status:';//Canceled Reversal Status
$_['entry_completed_status']		= 'Completed Status:';//Completed Status
$_['entry_denied_status']			= 'Denied Status:';//Denied Status
$_['entry_expired_status']			= 'Expired Status:';//Expired Status
$_['entry_failed_status']			= 'Failed Status:';//Failed Status
$_['entry_pending_status']			= 'Pending Status:';//Pending Status
$_['entry_processed_status']		= 'Processed Status:';//Processed Status
$_['entry_refunded_status']			= 'Refunded Status:';//Refunded Status
$_['entry_reversed_status']			= 'Reversed Status:';//Reversed Status
$_['entry_voided_status']			= 'Voided Status:';//Voided Status
$_['entry_display_checkout']		= 'Display quick checkout icon:';//Display quick checkout icon
$_['entry_allow_notes']				= 'Allow notes:';//Allow notes
$_['entry_logo']					= 'Logo<span class="help">Max 750px(w) x 90px(h)<br />You should only use a logo if you have SSL set up.</span>';//Logo
$_['entry_border_colour']			= 'Header border colour:<span class="help">6 character HTML colour code</span>';//Header border colour
$_['entry_header_colour']			= 'Header background colour:<span class="help">6 character HTML colour code</span>';//Header background colour
$_['entry_page_colour']				= 'Page background colour:<span class="help">6 character HTML colour code</span>';//Page background colour

// Tab
$_['tab_general']					= 'General';//General
$_['tab_api_details']				= 'API details';//API details
$_['tab_order_status']				= 'Order status';//Order status
$_['tab_customise']					= 'Customise checkout';//Customise checkout

// Help
$_['help_ipn']						= 'Required for subscriptions';
$_['help_total']					= 'The checkout total the order must reach before this payment method becomes active';
$_['help_logo']						= 'Max 750px(w) x 90px(h)<br />You should only use a logo if you have SSL set up.';
$_['help_colour']					= '6 character HTML colour code';
$_['help_currency']					= 'Used for transaction searches';

// Error
$_['error_permission']				= '警告： 您没权限修改 PayPal Express Checkout！';//Warning: You do not have permission to modify payment PayPal Express Checkout!
$_['error_username']				= 'API 户名必填！';//API Username Required!
$_['error_password']				= 'API 密码必填！';//API Password Required!
$_['error_signature']				= 'API 签名必填！';//API Signature Required!
$_['error_data']					= 'Data missing from request';//Data missing from request
$_['error_timeout']					= 'Request timed out';//Request timed out