<?php
// Heading 
$_['heading_title']        = 'OpenBay Pro'; 
// Buttons
$_['button_retry']						= '重试';
$_['button_faq_clear']					= '清除';
$_['button_update']						= '更新';
$_['button_patch']						= '补丁';
$_['button_ftp_test']					= '测试链接';
$_['button_faq']						= '查看FAQ主题';

// Tab
$_['tab_setting']						= '设置';
$_['tab_update']						= '软件更新';
$_['tab_update_v1']						= '轻松更新';
$_['tab_update_v2']						= '传统的更新';
$_['tab_patch']							= '补丁';
$_['tab_developer']						= '开发人员';

// Text
$_['text_dashboard']         			= '控制面板';
$_['text_success']         				= '成功：设定已保存';
$_['text_products']          			= '商品';
$_['text_orders']          				= '订单';
$_['text_manage']          				= '管理';
$_['text_help']                     	= '帮助';
$_['text_tutorials']                    = '教程';
$_['text_suggestions']                  = '想法';
$_['text_version_latest']               = '您使用的是最新版本';
$_['text_version_check']     			= '检查软件版本';
$_['text_version_installed']    		= '已安装版本';
$_['text_version_current']        		= '您的版本是';
$_['text_version_available']        	= '最新版本是';
$_['text_language']             		= 'API 接口接受语言';
$_['text_getting_messages']     		= '获取 OpenBay Pro 信息';
$_['text_complete']     				= '完成';
$_['text_test_connection']              = '测试FTP连接';
$_['text_run_update']           		= '更新';
$_['text_patch']            			= '更新补丁';
$_['text_patch_complete']           	= '补丁已经应用';
$_['text_connection_ok']				= '连接到服务器确定。发现OpenCart文件夹';
$_['text_updated']						= '模块已被更新到 (v.%s)';
$_['text_update_description']			= "升级工具会更改你的店铺的文件系统。确保你使用这个工具之前，有一个备份。";
$_['text_patch_description']			= '如果您手动上传更新文件，你需要运行该补丁，以完成更新。';
$_['text_clear_faq']                    = '清除隐藏弹出式窗口';
$_['text_clear_faq_complete']           = '现在通知会再次显示';
$_['text_install_success']              = '市场上已经安装';
$_['text_uninstall_success']            = '市场已被删除';
$_['text_title_messages']               = '信息 &amp; 通知';
$_['text_marketplace_shipped']			= '订单状态将更新到市场';
$_['text_action_warning']				= '这个动作很危险所以受密码保护。';
$_['text_check_new']					= '检查新版本';
$_['text_downloading']					= '下载更新文件';
$_['text_extracting']					= '解压文件';
$_['text_running_patch']				= '运行补丁文件';
$_['text_fail_patch']					= '无法提取更新文件';
$_['text_updated_ok']					= '更新完成，现在安装的版本是';
$_['text_check_server']					= '检查服务器的要求';
$_['text_version_ok']					= '软件已经是最新的，安装的版本是';
$_['text_remove_files']					= '删除不再需要的文件';
$_['text_confirm_backup']				= '确保您继续之前有一个完整备份';

// Column
$_['column_name']          = '插件名称';
$_['column_status']        = '状态';
$_['column_action']        = '管理';

// Entry
$_['entry_patch']            			= '手动更新补丁';
$_['entry_ftp_username']				= 'FTP 用户名';
$_['entry_ftp_password']				= 'FTP 密码';
$_['entry_ftp_server']					= 'FTP 服务器地址';
$_['entry_ftp_root']					= 'FTP 到服务器上的路径';
$_['entry_ftp_admin']            		= 'Admin目录';
$_['entry_ftp_pasv']                    = 'PASV 模式';
$_['entry_ftp_beta']             		= '使用测试版';
$_['entry_courier']						= '货运';
$_['entry_courier_other']           	= '其它货运';
$_['entry_tracking']                	= '跟踪号 #';
$_['entry_empty_data']					= '清空存储数据？';
$_['entry_password_prompt']				= '请输入数据擦除密码';
$_['entry_update']						= '轻松一点击更新';

// Error
$_['error_username']             		= 'FTP用户名必填';
$_['error_password']             		= 'FTP密码必填';
$_['error_server']               		= 'FTP服务器必填';
$_['error_admin']             			= 'Admin目录必填';
$_['error_no_admin']					= '连接正常，但没有找到您OpenCart admin目录';
$_['error_no_files']					= '连接正常但没有发现OpenCart文件夹！是你的根路径是否正确？';
$_['error_ftp_login']					= '无法与该用户登录';
$_['error_ftp_connect']					= '无法连接到服务器';
$_['error_failed']						= '加载失败，重试吗？';
$_['error_tracking_id_format']			= '您的跟踪ID不能包含字符>或<';
$_['error_tracking_courier']			= '如果你想添加一个跟踪号，你必须选择一个快递';
$_['error_tracking_custom']				= '请让快递领域的空白，如果你想使用自定义快递';
$_['error_permission']          = '警告：您无权限修改 eBay 扩展功能！';
$_['error_mkdir']						= 'PHP MKDIR功能被禁用，请联系您的主机供应商';
$_['error_file_delete']					= '无法删除这些文件，你需要手动删除';

// Help
$_['help_ftp_username']           		= '使用你主机的FTP用户名';
$_['help_ftp_password']           		= '使用你主机的FTP密码';
$_['help_ftp_server']      				= '为您的FTP服务器的IP地址或域名';
$_['help_ftp_root']           			= '(没有结尾的斜线例如的httpdocs/www)';
$_['help_ftp_admin']               		= '如果你改变了你的admin目录更新到新的位置';
$_['help_ftp_pasv']                    	= '改变你的FTP连接被动模式';
$_['help_ftp_beta']             		= '注意！测试版可能无法正常工作';
$_['help_clear_faq']					= '再次显示所有帮助通知';
$_['help_empty_data']					= '这可能会导致严重的损坏，如果你不知道它做什么，请不要使用它！';
$_['help_easy_update']					= '点击更新自动安装OpenBay Pro的最新版本';
$_['help_patch']						= '如果更新通过FTP文件，你需要运行补丁来完成更新';
$_['help_clear_faq']					= '再次显示所有的帮助信息';