<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

[2017-03-02 18:10:30]	DEBUG :	Config Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:10:30]	DEBUG :	URI Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Router Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Output Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Input Class Initialized
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:30]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:10:30]	DEBUG :	Language Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Loader Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:10:30]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:10:30]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:10:30]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:10:30]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:10:30]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:10:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:30]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:10:30]	DEBUG :	Session Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:10:30]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:10:30]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:10:30]	DEBUG :	Session routines successfully run
[2017-03-02 18:10:30]	DEBUG :	Table Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:10:30]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Email Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:10:30]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Controller Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:10:30]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:10:30]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:10:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:30]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:10:30]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:10:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:10:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:10:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:10:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:10:30]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:10:30]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:10:30]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:10:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:10:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:10:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:10:30]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:10:30]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:10:30]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:10:30]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:10:30]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:10:30]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:10:30]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:10:30]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:10:30]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:10:30]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:10:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:10:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:10:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:10:30]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:10:30]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:10:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:30]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:10:30]	SQL :	SELECT fieldname,fieldid FROM 1_customfields WHERE modid='26' AND bid='1'
[2017-03-02 18:10:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:10:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:30]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:10:30]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:10:30]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:10:30]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:10:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:10:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:10:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:10:30]	DEBUG :	Final output sent to browser
[2017-03-02 18:10:30]	DEBUG :	Total execution time: 0.1017
[2017-03-02 18:10:53]	DEBUG :	Config Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:10:53]	DEBUG :	URI Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Router Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Output Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Input Class Initialized
[2017-03-02 18:10:53]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:53]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:53]	DEBUG :	XSS Filtering completed
[2017-03-02 18:10:53]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:10:53]	DEBUG :	Language Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Loader Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:10:53]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:10:53]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:10:53]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:10:53]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:10:53]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:10:53]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:53]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:10:53]	DEBUG :	Session Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:10:53]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:10:53]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:10:53]	DEBUG :	Session routines successfully run
[2017-03-02 18:10:53]	DEBUG :	Table Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:10:53]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Email Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:10:53]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Controller Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:10:53]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:10:53]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:10:53]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:53]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:10:53]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:10:53]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:10:53]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:10:53]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:10:53]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:10:53]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:10:53]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:10:53]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:10:53]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:10:53]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:10:53]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:10:53]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:10:53]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:10:53]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Model Class Initialized
[2017-03-02 18:10:53]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:10:53]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:10:53]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:10:53]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:10:53]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:10:53]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:10:53]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:10:53]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:10:53]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:10:53]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:10:53]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:10:53]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:10:53]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:10:53]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:10:53]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:10:53]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:10:53]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:10:53]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:10:53]	DEBUG :	Final output sent to browser
[2017-03-02 18:10:53]	DEBUG :	Total execution time: 0.0758
[2017-03-02 18:13:30]	DEBUG :	Config Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:13:30]	DEBUG :	URI Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Router Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Output Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Input Class Initialized
[2017-03-02 18:13:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:30]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:30]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:13:30]	DEBUG :	Language Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Loader Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:13:30]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:13:30]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:13:30]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:13:30]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:13:30]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:13:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:30]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:13:30]	DEBUG :	Session Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:13:30]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:13:30]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:13:30]	DEBUG :	Session routines successfully run
[2017-03-02 18:13:30]	DEBUG :	Table Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:13:30]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Email Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:13:30]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Controller Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:13:30]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:13:30]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:13:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:30]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:13:30]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:13:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:30]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:13:30]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:13:30]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:13:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:13:30]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:13:30]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:13:30]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:30]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:13:30]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:30]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:13:30]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:30]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:30]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:13:30]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:13:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:30]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:13:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:13:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:30]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:13:30]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:13:30]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:13:30]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:13:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:13:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:13:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:13:30]	DEBUG :	Final output sent to browser
[2017-03-02 18:13:30]	DEBUG :	Total execution time: 0.1005
[2017-03-02 18:13:32]	DEBUG :	Config Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:13:32]	DEBUG :	URI Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Router Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Output Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Input Class Initialized
[2017-03-02 18:13:32]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:32]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:32]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:32]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:13:32]	DEBUG :	Language Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Loader Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:13:32]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:13:32]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:13:32]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:13:32]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:13:32]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:13:32]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:32]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:13:32]	DEBUG :	Session Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:13:32]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:13:32]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:13:32]	DEBUG :	Session routines successfully run
[2017-03-02 18:13:32]	DEBUG :	Table Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:13:32]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Email Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:13:32]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Controller Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:13:32]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:13:32]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:13:32]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:32]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:13:32]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:13:32]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:32]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:32]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:32]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:32]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:32]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:13:32]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:13:32]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:13:32]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:32]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:32]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:32]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:13:32]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:13:32]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:13:32]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:32]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:13:32]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:13:32]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:32]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:13:32]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:13:32]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:32]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:32]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:32]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:32]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:32]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:32]	SQL :	SELECT e.empname,e.selfdisable,a.eid
							   FROM 1_leads_grpemp a
							   LEFT JOIN 1_employee e on a.eid=e.eid
							   WHERE a.gid=1 AND e.status = 1 AND a.status = 1 AND e.selfdisable = 0
							   ORDER BY e.`empname`
[2017-03-02 18:13:32]	DEBUG :	Final output sent to browser
[2017-03-02 18:13:32]	DEBUG :	Total execution time: 0.0818
[2017-03-02 18:13:40]	DEBUG :	Config Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:13:40]	DEBUG :	URI Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Router Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Output Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Input Class Initialized
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:40]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:13:40]	DEBUG :	Language Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Loader Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:13:40]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:13:40]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:13:40]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:13:40]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:13:40]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:13:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:40]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:13:40]	DEBUG :	Session Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:13:40]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:13:40]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:13:40]	DEBUG :	Session routines successfully run
[2017-03-02 18:13:40]	DEBUG :	Table Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:13:40]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Email Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:13:40]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Controller Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:13:40]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:13:40]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:13:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:40]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:13:40]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:13:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:40]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:40]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:40]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:40]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:40]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:13:40]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:13:40]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:13:40]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:40]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:40]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:40]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:13:40]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:13:40]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:13:40]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:40]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:13:40]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:13:40]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:40]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:13:40]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:13:40]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:40]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:40]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:40]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:40]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:40]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:40]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:13:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:40]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:13:40]	SQL :	SELECT fieldname,fieldid FROM 1_customfields WHERE modid='26' AND bid='1'
[2017-03-02 18:13:40]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:13:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:40]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:13:40]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:13:40]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:13:40]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:13:40]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:13:40]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:13:40]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:13:40]	DEBUG :	Final output sent to browser
[2017-03-02 18:13:40]	DEBUG :	Total execution time: 0.0586
[2017-03-02 18:13:51]	DEBUG :	Config Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:13:51]	DEBUG :	URI Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Router Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Output Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Input Class Initialized
[2017-03-02 18:13:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:51]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:13:51]	DEBUG :	Language Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Loader Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:13:51]	DEBUG :	Session Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:13:51]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:13:51]	DEBUG :	Session routines successfully run
[2017-03-02 18:13:51]	DEBUG :	Table Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:13:51]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Email Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:13:51]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Controller Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:13:51]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:13:51]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:13:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:51]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:13:51]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:13:51]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:13:51]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:51]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:13:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:51]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:13:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT m.* FROM module as m  JOIN  business_feature bf on bf.feature_id = m.feature_id  WHERE m.status=1 AND bf.bid = 1 UNION SELECT m.* FROM module as m  WHERE m.defualt_mod = 1 AND m.status = 1  ORDER BY modid ASC 
[2017-03-02 18:13:51]	SQL :	SELECT count(*) as cnt FROM prinumbers WHERE bid='1' AND status='0'
[2017-03-02 18:13:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:13:51]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:13:51]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:13:51]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:13:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:13:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_config.php
[2017-03-02 18:13:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:13:51]	DEBUG :	Final output sent to browser
[2017-03-02 18:13:51]	DEBUG :	Total execution time: 0.0582
[2017-03-02 18:13:51]	DEBUG :	Config Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:13:51]	DEBUG :	URI Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Router Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Output Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Input Class Initialized
[2017-03-02 18:13:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:51]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:13:51]	DEBUG :	Language Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Loader Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:13:51]	DEBUG :	Session Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:13:51]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:13:51]	DEBUG :	Session routines successfully run
[2017-03-02 18:13:51]	DEBUG :	Table Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:13:51]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Email Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:13:51]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Controller Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:13:51]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:13:51]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:13:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:51]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:13:51]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:13:51]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:13:51]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:13:51]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:13:51]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:51]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:13:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:51]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:13:51]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:13:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:51]	SQL :	select * from module where modid=1 AND status=1
[2017-03-02 18:13:51]	SQL :	SELECT m.* FROM module as m  JOIN  business_feature bf on bf.feature_id = m.feature_id  WHERE m.status=1 AND bf.bid = 1 UNION SELECT m.* FROM module as m  WHERE m.defualt_mod = 1 AND m.status = 1  ORDER BY modid ASC 
[2017-03-02 18:13:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:51]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='1'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='1') as t ORDER BY display_order ASC
[2017-03-02 18:13:51]	SQL :	SELECT add_custom FROM module WHERE modid = '1'
[2017-03-02 18:13:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view_settings.php
[2017-03-02 18:13:51]	DEBUG :	Final output sent to browser
[2017-03-02 18:13:51]	DEBUG :	Total execution time: 0.0651
[2017-03-02 18:13:56]	DEBUG :	Config Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:13:56]	DEBUG :	URI Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Router Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Output Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Input Class Initialized
[2017-03-02 18:13:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:13:56]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:13:56]	DEBUG :	Language Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Loader Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:13:56]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:13:56]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:13:56]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:13:56]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:13:56]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:13:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:56]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:13:56]	DEBUG :	Session Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:13:56]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:13:56]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:13:56]	DEBUG :	Session routines successfully run
[2017-03-02 18:13:56]	DEBUG :	Table Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:13:56]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Email Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:13:56]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Controller Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:13:56]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:13:56]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:13:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:56]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:13:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:13:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:13:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:13:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:13:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:13:56]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:13:56]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:13:56]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:13:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:13:56]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:13:56]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:13:56]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:13:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:13:56]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:13:56]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:13:56]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:56]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:13:56]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:13:56]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:13:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:13:56]	SQL :	select * from module where modid=26 AND status=1
[2017-03-02 18:13:56]	SQL :	SELECT m.* FROM module as m  JOIN  business_feature bf on bf.feature_id = m.feature_id  WHERE m.status=1 AND bf.bid = 1 UNION SELECT m.* FROM module as m  WHERE m.defualt_mod = 1 AND m.status = 1  ORDER BY modid ASC 
[2017-03-02 18:13:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:13:56]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:13:56]	SQL :	SELECT add_custom FROM module WHERE modid = '26'
[2017-03-02 18:13:56]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view_settings.php
[2017-03-02 18:13:56]	DEBUG :	Final output sent to browser
[2017-03-02 18:13:56]	DEBUG :	Total execution time: 0.0879
[2017-03-02 18:14:10]	DEBUG :	Config Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:14:10]	DEBUG :	URI Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Router Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Output Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Input Class Initialized
[2017-03-02 18:14:10]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:10]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:10]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:10]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:14:10]	DEBUG :	Language Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Loader Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:14:10]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:14:10]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:14:10]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:14:10]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:14:10]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:14:10]	DEBUG :	Session Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:14:10]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:14:10]	DEBUG :	Session routines successfully run
[2017-03-02 18:14:10]	DEBUG :	Table Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:14:10]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Email Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:14:10]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Controller Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:14:10]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:14:10]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:10]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:14:10]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:14:10]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:14:10]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:14:10]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:14:10]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:14:10]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:10]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:14:10]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:10]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:14:10]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:10]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:10]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:10]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:14:10]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.`leadid`
				FROM 1_leads a 
				LEFT JOIN 1_leads_groups d on a.gid=d.gid 
				LEFT JOIN 1_employee e on a.assignto=e.eid 
				LEFT JOIN 1_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN 1_employee e2 on a.convertedby=e2.eid 
				  
				WHERE a.status!='2'  AND a.lead_status = '1' ORDER BY   a.`leadid` DESC  LIMIT 0,30
[2017-03-02 18:14:10]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:14:10]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:14:10]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:10]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:14:10]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:10]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:14:10]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:10]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:14:10]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:14:10]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:14:10]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:10]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:14:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:14:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:10]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:14:10]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:14:10]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:14:10]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:14:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:14:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-03-02 18:14:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:14:10]	DEBUG :	Final output sent to browser
[2017-03-02 18:14:10]	DEBUG :	Total execution time: 0.2909
[2017-03-02 18:14:14]	DEBUG :	Config Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:14:14]	DEBUG :	URI Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Router Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Output Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Input Class Initialized
[2017-03-02 18:14:14]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:14]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:14]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:14]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:14:14]	DEBUG :	Language Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Loader Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:14:14]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:14:14]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:14:14]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:14:14]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:14:14]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:14:14]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:14]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:14:14]	DEBUG :	Session Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:14:14]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:14:14]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:14:14]	DEBUG :	Session routines successfully run
[2017-03-02 18:14:14]	DEBUG :	Table Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:14:14]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Email Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:14:14]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Controller Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:14:14]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:14:14]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:14:14]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:14]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:14:14]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:14:14]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:14]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:14]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:14:14]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:14:14]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:14:14]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:14:14]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:14:14]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:14:14]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:14]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:14:14]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:14]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:14:14]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:14]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:14]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:14]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:14]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:14:14]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:14:14]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:14]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:14]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:14]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:14:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:14:14]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:14]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:14:14]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:14:14]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:14:14]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:14:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:14:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:14:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:14:14]	DEBUG :	Final output sent to browser
[2017-03-02 18:14:14]	DEBUG :	Total execution time: 0.0762
[2017-03-02 18:14:16]	DEBUG :	Config Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:14:16]	DEBUG :	URI Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Router Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Output Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Input Class Initialized
[2017-03-02 18:14:16]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:16]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:16]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:16]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:14:16]	DEBUG :	Language Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Loader Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:14:16]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:14:16]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:14:16]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:14:16]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:14:16]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:14:16]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:16]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:14:16]	DEBUG :	Session Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:14:16]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:14:16]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:14:16]	DEBUG :	Session routines successfully run
[2017-03-02 18:14:16]	DEBUG :	Table Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:14:16]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Email Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:14:16]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Controller Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:14:16]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:14:16]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:14:16]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:16]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:14:16]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:14:16]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:16]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:16]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:16]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:16]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:16]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:14:16]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:14:16]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:14:16]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:16]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:16]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:16]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:14:16]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:14:16]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:14:16]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:16]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:14:16]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:14:16]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:16]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:14:16]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:14:16]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:16]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:16]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:16]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:16]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:16]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:16]	SQL :	SELECT e.empname,e.selfdisable,a.eid
							   FROM 1_leads_grpemp a
							   LEFT JOIN 1_employee e on a.eid=e.eid
							   WHERE a.gid=1 AND e.status = 1 AND a.status = 1 AND e.selfdisable = 0
							   ORDER BY e.`empname`
[2017-03-02 18:14:16]	DEBUG :	Final output sent to browser
[2017-03-02 18:14:16]	DEBUG :	Total execution time: 0.0545
[2017-03-02 18:14:24]	DEBUG :	Config Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:14:24]	DEBUG :	URI Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Router Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Output Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Input Class Initialized
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:24]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:14:24]	DEBUG :	Language Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Loader Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:14:24]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:14:24]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:14:24]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:14:24]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:14:24]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:14:24]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:24]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:14:24]	DEBUG :	Session Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:14:24]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:14:24]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:14:24]	DEBUG :	Session routines successfully run
[2017-03-02 18:14:24]	DEBUG :	Table Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:14:24]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Email Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:14:24]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Controller Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:14:24]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:14:24]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:14:24]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:24]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:14:24]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:14:24]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:24]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:24]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:24]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:24]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:24]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:14:24]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:14:24]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:14:24]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:24]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:24]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:24]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:14:24]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:14:24]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:14:24]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:24]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:14:24]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:14:24]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:24]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:14:24]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:14:24]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:24]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:24]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:24]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:24]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:24]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:24]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:24]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:14:24]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:24]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:14:24]	SQL :	SELECT fieldname,fieldid FROM 1_customfields WHERE modid='26' AND bid='1'
[2017-03-02 18:14:24]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:14:24]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:24]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:14:24]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:14:24]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:14:24]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:14:24]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:14:24]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:14:24]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:14:24]	DEBUG :	Final output sent to browser
[2017-03-02 18:14:24]	DEBUG :	Total execution time: 0.0766
[2017-03-02 18:14:39]	DEBUG :	Config Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:14:39]	DEBUG :	URI Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Router Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Output Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Input Class Initialized
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	XSS Filtering completed
[2017-03-02 18:14:39]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:14:39]	DEBUG :	Language Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Loader Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:14:39]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:14:39]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:14:39]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:14:39]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:14:39]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:14:39]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:39]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:14:39]	DEBUG :	Session Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:14:39]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:14:39]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:14:39]	DEBUG :	Session routines successfully run
[2017-03-02 18:14:39]	DEBUG :	Table Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:14:39]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Email Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:14:39]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Controller Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:14:39]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:14:39]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:14:39]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:39]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:14:39]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:14:39]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:39]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:39]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:39]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:39]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:39]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:14:39]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:14:39]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:14:39]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:39]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:39]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:14:39]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:14:39]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:14:39]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:14:39]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:39]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:14:39]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:14:39]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:39]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:14:39]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:14:39]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Model Class Initialized
[2017-03-02 18:14:39]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:14:39]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:14:39]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:14:39]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:14:39]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:14:39]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:14:39]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:14:39]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:14:39]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:14:39]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='229'
[2017-03-02 18:14:39]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='230'
[2017-03-02 18:14:39]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='231'
[2017-03-02 18:14:39]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:14:39]	SQL :	SELECT * FROM 1_customfields WHERE fieldid='4' AND modid='26'
[2017-03-02 18:14:39]	SQL :	SELECT group_rule as rule FROM 1_leads_groups WHERE gid='1'
[2017-03-02 18:14:39]	SQL :	SELECT ge.eid FROM 1_leads_grpemp ge LEFT JOIN 1_employee e ON ge.eid = e.eid WHERE ge.gid='1' AND ge.bid='1' AND ge.status = 1 AND e.status = 1 ORDER BY ge.counter ASC LIMIT 0,1
[2017-03-02 18:14:39]	SQL :	SELECT leadlimit as used,type FROM  business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:14:39]	SQL :	SELECT leadid,gid FROM 1_leads WHERE number='8553583089'
[2017-03-02 18:14:39]	SQL :	SELECT leadid,gid FROM 1_leads WHERE email='ashwini.naidu31@gmail.com'
[2017-03-02 18:14:39]	SQL :	SELECT COALESCE(MAX(`leadid`),0)+1 as id FROM 1_leads
[2017-03-02 18:14:39]	SQL :	DESC 1_leads
[2017-03-02 18:14:39]	SQL :	INSERT INTO `1_leads` (`gid`, `assignto`, `name`, `email`, `number`, `createdon`, `bid`, `enteredby`, `leadowner`, `convertedby`, `lastmodified`, `convertedon`, `lead_status`, `status`, `dis_type`, `duplicate`, `parentId`, `leadid`) VALUES (0, '1', 'ash', 'ashwini.naidu31@gmail.com', '8553583089', '2017-03-02 18:14:39', '1', '1', '1', '1', '2017-03-02 18:14:39', '2017-03-02 18:14:39', '1', 1, 2, 0, 0, '1')
[2017-03-02 18:15:19]	DEBUG :	Config Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:15:19]	DEBUG :	URI Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Router Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Output Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Input Class Initialized
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:19]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:15:19]	DEBUG :	Language Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Loader Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:15:19]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:15:19]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:15:19]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:15:19]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:15:19]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:15:19]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:19]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:15:19]	DEBUG :	Session Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:15:19]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:15:19]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:15:19]	DEBUG :	Session routines successfully run
[2017-03-02 18:15:19]	DEBUG :	Table Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:15:19]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Email Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:15:19]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Controller Class Initialized
[2017-03-02 18:15:19]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:15:20]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:15:20]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:15:20]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:15:20]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:15:20]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:15:20]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:15:20]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:15:20]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:15:20]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:15:20]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:15:20]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:15:20]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:15:20]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='229'
[2017-03-02 18:15:20]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='230'
[2017-03-02 18:15:20]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='231'
[2017-03-02 18:15:20]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_customfields WHERE fieldid='4' AND modid='26'
[2017-03-02 18:15:20]	SQL :	SELECT group_rule as rule FROM 1_leads_groups WHERE gid='1'
[2017-03-02 18:15:20]	SQL :	SELECT ge.eid FROM 1_leads_grpemp ge LEFT JOIN 1_employee e ON ge.eid = e.eid WHERE ge.gid='1' AND ge.bid='1' AND ge.status = 1 AND e.status = 1 ORDER BY ge.counter ASC LIMIT 0,1
[2017-03-02 18:15:20]	SQL :	SELECT leadlimit as used,type FROM  business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:15:20]	SQL :	SELECT leadid,gid FROM 1_leads WHERE number='8553583089'
[2017-03-02 18:15:20]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2017-03-02 18:15:20]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('3043', '1', '1', 'Leads', ' Leads are imported by ashwini.naidu@vmc.in')
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	DEBUG :	Config Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:15:20]	DEBUG :	URI Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Router Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Output Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Input Class Initialized
[2017-03-02 18:15:20]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:20]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:20]	DEBUG :	XSS Filtering completed
[2017-03-02 18:15:20]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:15:20]	DEBUG :	Language Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Loader Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:15:20]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:15:20]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:15:20]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:15:20]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:15:20]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:15:20]	DEBUG :	Session Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:15:20]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	DEBUG :	Session routines successfully run
[2017-03-02 18:15:20]	DEBUG :	Table Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:15:20]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Email Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:15:20]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Controller Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:15:20]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:15:20]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:15:20]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:15:20]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:15:20]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:15:20]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:15:20]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:15:20]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:15:20]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:15:20]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Model Class Initialized
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:15:20]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.`leadid`
				FROM 1_leads a 
				LEFT JOIN 1_leads_groups d on a.gid=d.gid 
				LEFT JOIN 1_employee e on a.assignto=e.eid 
				LEFT JOIN 1_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN 1_employee e2 on a.convertedby=e2.eid 
				  
				WHERE a.status!='2'  AND a.lead_status = '1' ORDER BY   a.`leadid` DESC  LIMIT 0,30
[2017-03-02 18:15:20]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT l.*,e1.empname as enteredempname,
						e2.empname as convertedemp,g.groupname,ls.type,l.duplicate,e3.empname as leadowner,e.empname as assignempname FROM 1_leads l 
						LEFT JOIN 1_employee e ON l.assignto = e.eid 
						LEFT JOIN 1_employee e1 ON l.enteredby = e1.eid 
						LEFT JOIN 1_employee e2 ON l.convertedby = e2.eid 
						LEFT JOIN 1_employee e3 ON l.leadowner = e3.eid 
						LEFT JOIN 1_leads_groups g ON l.gid = g.gid 
						LEFT JOIN 1_leads_status ls ON l.lead_status = ls.id 
						WHERE l.leadid='1'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='26'
				AND dataid='1'
[2017-03-02 18:15:20]	SQL :	SELECT count(callid) as cnt FROM `1_callhistory` WHERE leadid='1'
[2017-03-02 18:15:20]	SQL :	SELECT lc.remark FROM 1_leads_remarks lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:15:20]	SQL :	SELECT lc.comment FROM 1_leads_comments lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:15:20]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:15:20]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:15:20]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:15:20]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:15:20]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:15:20]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:15:20]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:15:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:15:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:15:20]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:15:20]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:15:20]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:15:20]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:15:20]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:15:20]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:15:20]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:15:20]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:15:20]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-03-02 18:15:20]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:15:20]	DEBUG :	Final output sent to browser
[2017-03-02 18:15:20]	DEBUG :	Total execution time: 0.4435
[2017-03-02 18:18:54]	DEBUG :	Config Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:18:54]	DEBUG :	URI Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Router Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Output Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Input Class Initialized
[2017-03-02 18:18:54]	DEBUG :	XSS Filtering completed
[2017-03-02 18:18:54]	DEBUG :	XSS Filtering completed
[2017-03-02 18:18:54]	DEBUG :	XSS Filtering completed
[2017-03-02 18:18:54]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:18:54]	DEBUG :	Language Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Loader Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:18:54]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:18:54]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:18:54]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:18:54]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:18:54]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:18:54]	DEBUG :	Session Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:18:54]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:18:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:18:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:18:54]	DEBUG :	Session routines successfully run
[2017-03-02 18:18:54]	DEBUG :	Table Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:18:54]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Email Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:18:54]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Controller Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:18:54]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:18:54]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:18:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:18:54]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:18:54]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:18:54]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:18:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:18:54]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:18:54]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:18:54]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:18:54]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:18:54]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:18:54]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:18:54]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Model Class Initialized
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:18:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:18:54]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:18:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:18:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:18:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:18:54]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.`leadid`
				FROM 1_leads a 
				LEFT JOIN 1_leads_groups d on a.gid=d.gid 
				LEFT JOIN 1_employee e on a.assignto=e.eid 
				LEFT JOIN 1_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN 1_employee e2 on a.convertedby=e2.eid 
				  
				WHERE a.status!='2'  AND a.lead_status = '1' ORDER BY   a.`leadid` DESC  LIMIT 0,30
[2017-03-02 18:18:54]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT l.*,e1.empname as enteredempname,
						e2.empname as convertedemp,g.groupname,ls.type,l.duplicate,e3.empname as leadowner,e.empname as assignempname FROM 1_leads l 
						LEFT JOIN 1_employee e ON l.assignto = e.eid 
						LEFT JOIN 1_employee e1 ON l.enteredby = e1.eid 
						LEFT JOIN 1_employee e2 ON l.convertedby = e2.eid 
						LEFT JOIN 1_employee e3 ON l.leadowner = e3.eid 
						LEFT JOIN 1_leads_groups g ON l.gid = g.gid 
						LEFT JOIN 1_leads_status ls ON l.lead_status = ls.id 
						WHERE l.leadid='1'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='26'
				AND dataid='1'
[2017-03-02 18:18:54]	SQL :	SELECT count(callid) as cnt FROM `1_callhistory` WHERE leadid='1'
[2017-03-02 18:18:54]	SQL :	SELECT lc.remark FROM 1_leads_remarks lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:18:54]	SQL :	SELECT lc.comment FROM 1_leads_comments lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:18:54]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:18:54]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:18:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:18:54]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:18:54]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:18:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:18:54]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:18:54]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:18:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:18:54]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:18:54]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:18:54]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:18:54]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:18:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:18:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:18:54]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:18:54]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:18:54]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:18:54]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:18:54]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:18:54]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:18:54]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:18:54]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:18:54]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-03-02 18:18:54]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:18:54]	DEBUG :	Final output sent to browser
[2017-03-02 18:18:54]	DEBUG :	Total execution time: 0.3468
[2017-03-02 18:19:06]	DEBUG :	Config Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:19:06]	DEBUG :	URI Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Router Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Output Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Input Class Initialized
[2017-03-02 18:19:06]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:06]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:06]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:06]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:19:06]	DEBUG :	Language Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Loader Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:19:06]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:19:06]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:19:06]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:19:06]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:19:06]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:19:06]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:06]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:19:06]	DEBUG :	Session Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:19:06]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:19:06]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:19:06]	DEBUG :	Session routines successfully run
[2017-03-02 18:19:06]	DEBUG :	Table Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:19:06]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Email Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:19:06]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Controller Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:19:06]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:19:06]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:19:06]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:06]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:19:06]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:06]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:06]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:06]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:06]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:06]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:19:06]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:19:06]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:19:06]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:06]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:06]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:19:06]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:06]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:19:06]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:06]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:19:06]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:06]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:06]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:06]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:06]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:06]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:06]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:06]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:19:06]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:06]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:06]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:06]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:06]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:06]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:07]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2017-03-02 18:19:07]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.`leadid`
				FROM 1_leads a 
				LEFT JOIN 1_leads_groups d on a.gid=d.gid 
				LEFT JOIN 1_employee e on a.assignto=e.eid 
				LEFT JOIN 1_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN 1_employee e2 on a.convertedby=e2.eid 
				  
				WHERE a.status!='2'  AND a.lead_status = '1' ORDER BY   a.`leadid` DESC  LIMIT 0,30
[2017-03-02 18:19:07]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:07]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:07]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:19:07]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:07]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:07]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:19:07]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:07]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:07]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:07]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:07]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:07]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:07]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:07]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:07]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:07]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:19:07]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:19:07]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:07]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:07]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:19:07]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:07]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:19:07]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:19:07]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:07]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:19:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-03-02 18:19:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:19:07]	DEBUG :	Final output sent to browser
[2017-03-02 18:19:07]	DEBUG :	Total execution time: 0.2661
[2017-03-02 18:19:08]	DEBUG :	Config Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:19:08]	DEBUG :	URI Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Router Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Output Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Input Class Initialized
[2017-03-02 18:19:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:08]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:19:08]	DEBUG :	Language Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Loader Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:19:08]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:19:08]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:19:08]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:19:08]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:19:08]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:19:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:08]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:19:08]	DEBUG :	Session Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:19:08]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:19:08]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:19:08]	SQL :	DELETE FROM `call_sessions`
WHERE `last_activity` < 1488451748
[2017-03-02 18:19:08]	DEBUG :	Session garbage collection performed.
[2017-03-02 18:19:08]	DEBUG :	Session routines successfully run
[2017-03-02 18:19:08]	DEBUG :	Table Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:19:08]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Email Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:19:08]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Controller Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:19:08]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:19:08]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:19:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:08]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:19:08]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:08]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:19:08]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:19:08]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:19:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:08]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:08]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:19:08]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:08]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:19:08]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:08]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:19:08]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:08]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:08]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:19:08]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:08]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:19:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:08]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:19:08]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:19:08]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:08]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:19:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:19:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:19:08]	DEBUG :	Final output sent to browser
[2017-03-02 18:19:08]	DEBUG :	Total execution time: 0.0851
[2017-03-02 18:19:10]	DEBUG :	Config Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:19:10]	DEBUG :	URI Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Router Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Output Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Input Class Initialized
[2017-03-02 18:19:10]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:10]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:10]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:10]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:19:10]	DEBUG :	Language Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Loader Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:19:10]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:19:10]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:19:10]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:19:10]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:19:10]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:19:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:10]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:19:10]	DEBUG :	Session Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:19:10]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:19:10]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:19:10]	DEBUG :	Session routines successfully run
[2017-03-02 18:19:10]	DEBUG :	Table Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:19:10]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Email Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:19:10]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Controller Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:19:10]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:19:10]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:19:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:10]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:19:10]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:10]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:19:10]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:19:10]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:19:10]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:10]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:10]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:10]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:10]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:10]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:19:10]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:10]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:19:10]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:19:10]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:10]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:19:10]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:19:10]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:10]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:10]	SQL :	SELECT e.empname,e.selfdisable,a.eid
							   FROM 1_leads_grpemp a
							   LEFT JOIN 1_employee e on a.eid=e.eid
							   WHERE a.gid=1 AND e.status = 1 AND a.status = 1 AND e.selfdisable = 0
							   ORDER BY e.`empname`
[2017-03-02 18:19:10]	DEBUG :	Final output sent to browser
[2017-03-02 18:19:10]	DEBUG :	Total execution time: 0.0478
[2017-03-02 18:19:17]	DEBUG :	Config Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:19:17]	DEBUG :	URI Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Router Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Output Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Input Class Initialized
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:17]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:19:17]	DEBUG :	Language Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Loader Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:19:17]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:19:17]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:19:17]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:19:17]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:19:17]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:19:17]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:17]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:19:17]	DEBUG :	Session Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:19:17]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:19:17]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:19:17]	DEBUG :	Session routines successfully run
[2017-03-02 18:19:17]	DEBUG :	Table Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:19:17]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Email Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:19:17]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Controller Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:19:17]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:19:17]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:19:17]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:17]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:19:17]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:17]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:17]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:17]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:17]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:17]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:17]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:19:17]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:19:17]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:19:17]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:17]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:17]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:17]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:17]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:17]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:19:17]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:17]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:19:17]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:19:17]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:17]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:19:17]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:19:17]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:17]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:17]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:17]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:17]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:17]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:17]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:17]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:19:17]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:17]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:19:17]	SQL :	SELECT fieldname,fieldid FROM 1_customfields WHERE modid='26' AND bid='1'
[2017-03-02 18:19:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:19:17]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:17]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:19:17]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:19:17]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:17]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:19:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:19:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:19:17]	DEBUG :	Final output sent to browser
[2017-03-02 18:19:17]	DEBUG :	Total execution time: 0.0604
[2017-03-02 18:19:29]	DEBUG :	Config Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:19:29]	DEBUG :	URI Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Router Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Output Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Input Class Initialized
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:19:29]	DEBUG :	Language Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Loader Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:19:29]	DEBUG :	Session Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:19:29]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:19:29]	DEBUG :	Session routines successfully run
[2017-03-02 18:19:29]	DEBUG :	Table Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:19:29]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Email Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:19:29]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Controller Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:19:29]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:19:29]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:29]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:29]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:19:29]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:29]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:29]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:29]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:19:29]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:29]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:19:29]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:29]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:29]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:19:29]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:19:29]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:19:29]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='229'
[2017-03-02 18:19:29]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='230'
[2017-03-02 18:19:29]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='231'
[2017-03-02 18:19:29]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_customfields WHERE fieldid='4' AND modid='26'
[2017-03-02 18:19:29]	SQL :	SELECT group_rule as rule FROM 1_leads_groups WHERE gid='1'
[2017-03-02 18:19:29]	SQL :	SELECT ge.eid FROM 1_leads_grpemp ge LEFT JOIN 1_employee e ON ge.eid = e.eid WHERE ge.gid='1' AND ge.bid='1' AND ge.status = 1 AND e.status = 1 ORDER BY ge.counter ASC LIMIT 0,1
[2017-03-02 18:19:29]	SQL :	SELECT leadlimit as used,type FROM  business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:29]	SQL :	SELECT leadid,gid FROM 1_leads WHERE number='8553583089'
[2017-03-02 18:19:29]	SQL :	SELECT leadid,gid FROM 1_leads WHERE email='ashwini.naidu31@gmail.com'
[2017-03-02 18:19:29]	SQL :	SELECT COALESCE(MAX(`leadid`),0)+1 as id FROM 1_leads
[2017-03-02 18:19:29]	SQL :	DESC 1_leads
[2017-03-02 18:19:29]	SQL :	INSERT INTO `1_leads` (`gid`, `assignto`, `name`, `email`, `number`, `createdon`, `bid`, `enteredby`, `leadowner`, `convertedby`, `lastmodified`, `convertedon`, `lead_status`, `status`, `dis_type`, `duplicate`, `parentId`, `leadid`) VALUES (0, '1', 'ash', 'ashwini.naidu31@gmail.com', '8553583089', '2017-03-02 18:19:29', '1', '1', '1', '1', '2017-03-02 18:19:29', '2017-03-02 18:19:29', '1', 1, 2, 0, 0, '1')
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_employee WHERE eid='1'
[2017-03-02 18:19:29]	SQL :	SELECT empname FROM 1_employee WHERE eid='1'
[2017-03-02 18:19:29]	DEBUG :	Email class already loaded. Second attempt ignored.
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/mcnew/system/libraries/Email.php 1662
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fsockopen(): Failed to enable crypto /var/www/html/mcnew/system/libraries/Email.php 1662
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fsockopen(): unable to connect to ssl://smtp.gmail.com:25 (Unknown error) /var/www/html/mcnew/system/libraries/Email.php 1662
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:19:29]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:19:29]	ERROR :	Mail-log: The following SMTP error was encountered: 0 <br />Unable to send data: AUTH LOGIN<br />Failed to send AUTH LOGIN command. Error: <br />Unable to send data: MAIL FROM:<noreply@mcube.com><br /><pre>from: </pre>The following SMTP error was encountered: <br />Unable to send data: RCPT TO:<ashwini.naidu@vmc.in><br /><pre>to: </pre>The following SMTP error was encountered: <br />Unable to send data: DATA<br /><pre>data: </pre>The following SMTP error was encountered: <br />Unable to send data: From: "MCube" <noreply@mcube.com>
Return-Path: <noreply@mcube.com>
To: ashwini.naidu@vmc.in
Subject: =?utf-8?Q?Assigned_New_Lead_details?=
Reply-To: "noreply@mcube.com" <noreply@mcube.com>
X-Sender: noreply@mcube.com
X-Mailer: CodeIgniter
X-Priority: 3 (Normal)
Message-ID: <58b814d938d42@mcube.com>
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary="B_ALT_58b814d938d87"

This is a multi-part message in MIME format.
Your email application may not support this format.

--B_ALT_58b814d938d87
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit

1800-419-2202

&nbsp;
Hi Ashwini Naidu

New Leads have been assigned to you.Please check with your login.Assigned
leads Count : 1Assigned By : Ashwini Naidu

Regards, 
Mcube Team 

VMC Technologies


--B_ALT_58b814d938d87
Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: quoted-printable


		<html><head>
		</head>
			<body style=3D"margin:0 auto; padding: 0;width:600px;">
			<table style=3D"margin:0px;width:100%;font-family: Helvetica Neue, Arial=
, Helvetica, Geneva, sans-serif;font-size:14px;" cellpadding=3D"0" cellspac=
ing=3D"0">
			<tr><td style=3D"background:#000; width:100%;height:80px;float:left;
			-webkit-border-top-left-radius: 10px;-webkit-border-top-right-radius: 10=
px;
			-moz-border-radius-topleft: 10px;-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;border-top-right-radius: 10px;overflow:hidd=
en;
			color:#000;">
					<table cellpadding=3D"0" cellspacing=3D"0" border=3D"0" style=3D"width=
:100%">
					<tr>
						<td align=3D"left"><img src=3D"http://mcube.vmc.in/qrcode/company_log=
os/856265314vmclogo.gif" style=3D"margin-top:-20px;"></td><td align=3D"righ=
t"><img src=3D"http://mcube.vmc.in/system/application/img/mcubeicn.jpg" sty=
le=3D"margin-top:15px;margin-right:20px;"><br/><div style=3D"color: #FF9900=
;font-size: 18px;font-weight: bold;margin-right:10px;"><img src=3D"http://m=
cube.vmc.in/system/application/img/phoneicon.gif" >1800-419-2202</div></td>=
	=09
					</tr>
					</table>
		=09
		=09
			</td></tr>
			<tr><td style=3D"background:#FFF;width:100%;color:#000;border:1px solid =
#000;height:300px;vertical-align:top;padding:10px;">
				<p>&nbsp;</p>
				<p style=3D"font-size: 18px; line-height:24px; color: #b0b0b0; font-wei=
ght:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, =
Arial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;" align=3D"left"><si=
ngleline label=3D"Title">Hi Ashwini Naidu</singleline></p>
				<div style=3D"font-size: 13px; line-height: 18px; color: #444444; margi=
n-top: 0px; margin-bottom: 18px; font-family: Helvetica Neue, Arial, Helvet=
ica, Geneva, sans-serif; text-indent:1cm;" align=3D"left">
												=09
													<multiline label=3D"Description">New Leads have been assigned =
to you.Please check with your login.<br/><br/>Assigned leads Count : 1<br/>=
Assigned By : Ashwini Naidu
					</div>
				<p style=3D"font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;"><singleline label=3D=
"Title">Regards, </singleline></p>								=09
				<p style=3D"font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;"><singleline label=3D=
"Title">Mcube Team </singleline></p>								=09
											=09

			</td></tr>
			<tr><td style=3D"background:#000;width:100%;height:40px;
			-webkit-border-bottom-left-radius: 10px;-webkit-border-bottom-right-radi=
us: 10px;
			-moz-border-radius-bottomleft: 10px;-moz-border-radius-bottomright: 10px=
;
			border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
			color:#fff;padding:10px;font-size:12px;font-weight:bold;text-align:right=
;"><a href=3D"http://mcube.vmc.in/" style=3D"color:#FFF;text-decoration:non=
e;">VMC Technologies</a></td></tr>
			</table>
			</body></html>

--B_ALT_58b814d938d87--<br />Unable to send data: .<br /><br />The following SMTP error was encountered: <br />Unable to send email using PHP SMTP.  Your server might not be configured to send mail using this method.<br /><pre>From: "MCube" <noreply@mcube.com>
Return-Path: <noreply@mcube.com>
To: ashwini.naidu@vmc.in
Subject: =?utf-8?Q?Assigned_New_Lead_details?=
Reply-To: "noreply@mcube.com" <noreply@mcube.com>
X-Sender: noreply@mcube.com
X-Mailer: CodeIgniter
X-Priority: 3 (Normal)
Message-ID: <58b814d938d42@mcube.com>
Mime-Version: 1.0


Content-Type: multipart/alternative; boundary=&quot;B_ALT_58b814d938d87&quot;

This is a multi-part message in MIME format.
Your email application may not support this format.

--B_ALT_58b814d938d87
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit

1800-419-2202

&amp;nbsp;
Hi Ashwini Naidu

New Leads have been assigned to you.Please check with your login.Assigned
leads Count : 1Assigned By : Ashwini Naidu

Regards, 
Mcube Team 

VMC Technologies


--B_ALT_58b814d938d87
Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: quoted-printable


		&lt;html&gt;&lt;head&gt;
		&lt;/head&gt;
			&lt;body style=3D&quot;margin:0 auto; padding: 0;width:600px;&quot;&gt;
			&lt;table style=3D&quot;margin:0px;width:100%;font-family: Helvetica Neue, Arial=
, Helvetica, Geneva, sans-serif;font-size:14px;&quot; cellpadding=3D&quot;0&quot; cellspac=
ing=3D&quot;0&quot;&gt;
			&lt;tr&gt;&lt;td style=3D&quot;background:#000; width:100%;height:80px;float:left;
			-webkit-border-top-left-radius: 10px;-webkit-border-top-right-radius: 10=
px;
			-moz-border-radius-topleft: 10px;-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;border-top-right-radius: 10px;overflow:hidd=
en;
			color:#000;&quot;&gt;
					&lt;table cellpadding=3D&quot;0&quot; cellspacing=3D&quot;0&quot; border=3D&quot;0&quot; style=3D&quot;width=
:100%&quot;&gt;
					&lt;tr&gt;
						&lt;td align=3D&quot;left&quot;&gt;&lt;img src=3D&quot;http://mcube.vmc.in/qrcode/company_log=
os/856265314vmclogo.gif&quot; style=3D&quot;margin-top:-20px;&quot;&gt;&lt;/td&gt;&lt;td align=3D&quot;righ=
t&quot;&gt;&lt;img src=3D&quot;http://mcube.vmc.in/system/application/img/mcubeicn.jpg&quot; sty=
le=3D&quot;margin-top:15px;margin-right:20px;&quot;&gt;&lt;br/&gt;&lt;div style=3D&quot;color: #FF9900=
;font-size: 18px;font-weight: bold;margin-right:10px;&quot;&gt;&lt;img src=3D&quot;http://m=
cube.vmc.in/system/application/img/phoneicon.gif&quot; &gt;1800-419-2202&lt;/div&gt;&lt;/td&gt;=
	=09
					&lt;/tr&gt;
					&lt;/table&gt;
		=09
		=09
			&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td style=3D&quot;background:#FFF;width:100%;color:#000;border:1px solid =
#000;height:300px;vertical-align:top;padding:10px;&quot;&gt;
				&lt;p&gt;&amp;nbsp;&lt;/p&gt;
				&lt;p style=3D&quot;font-size: 18px; line-height:24px; color: #b0b0b0; font-wei=
ght:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, =
Arial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;&quot; align=3D&quot;left&quot;&gt;&lt;si=
ngleline label=3D&quot;Title&quot;&gt;Hi Ashwini Naidu&lt;/singleline&gt;&lt;/p&gt;
				&lt;div style=3D&quot;font-size: 13px; line-height: 18px; color: #444444; margi=
n-top: 0px; margin-bottom: 18px; font-family: Helvetica Neue, Arial, Helvet=
ica, Geneva, sans-serif; text-indent:1cm;&quot; align=3D&quot;left&quot;&gt;
												=09
													&lt;multiline label=3D&quot;Description&quot;&gt;New Leads have been assigned =
to you.Please check with your login.&lt;br/&gt;&lt;br/&gt;Assigned leads Count : 1&lt;br/&gt;=
Assigned By : Ashwini Naidu
					&lt;/div&gt;
				&lt;p style=3D&quot;font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;&quot;&gt;&lt;singleline label=3D=
&quot;Title&quot;&gt;Regards, &lt;/singleline&gt;&lt;/p&gt;								=09
				&lt;p style=3D&quot;font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;&quot;&gt;&lt;singleline label=3D=
&quot;Title&quot;&gt;Mcube Team &lt;/singleline&gt;&lt;/p&gt;								=09
											=09

			&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td style=3D&quot;background:#000;width:100%;height:40px;
			-webkit-border-bottom-left-radius: 10px;-webkit-border-bottom-right-radi=
us: 10px;
			-moz-border-radius-bottomleft: 10px;-moz-border-radius-bottomright: 10px=
;
			border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
			color:#fff;padding:10px;font-size:12px;font-weight:bold;text-align:right=
;&quot;&gt;&lt;a href=3D&quot;http://mcube.vmc.in/&quot; style=3D&quot;color:#FFF;text-decoration:non=
e;&quot;&gt;VMC Technologies&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;
			&lt;/table&gt;
			&lt;/body&gt;&lt;/html&gt;

--B_ALT_58b814d938d87--</pre>
[2017-03-02 18:19:29]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2017-03-02 18:19:29]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('3044', '1', '1', 'Leads', ' Leads are imported by ashwini.naidu@vmc.in')
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	DEBUG :	Config Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:19:29]	DEBUG :	URI Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Router Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Output Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Input Class Initialized
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	XSS Filtering completed
[2017-03-02 18:19:29]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:19:29]	DEBUG :	Language Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Loader Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:19:29]	DEBUG :	Session Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:19:29]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	DEBUG :	Session routines successfully run
[2017-03-02 18:19:29]	DEBUG :	Table Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:19:29]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Email Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:19:29]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Controller Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:19:29]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:19:29]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:29]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:29]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:19:29]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:19:29]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:29]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:29]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:29]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:19:29]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:29]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:19:29]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Model Class Initialized
[2017-03-02 18:19:29]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:29]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:29]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:29]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:29]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:19:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:30]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:19:30]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2017-03-02 18:19:30]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.`leadid`
				FROM 1_leads a 
				LEFT JOIN 1_leads_groups d on a.gid=d.gid 
				LEFT JOIN 1_employee e on a.assignto=e.eid 
				LEFT JOIN 1_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN 1_employee e2 on a.convertedby=e2.eid 
				  
				WHERE a.status!='2'  AND a.lead_status = '1' ORDER BY   a.`leadid` DESC  LIMIT 0,30
[2017-03-02 18:19:30]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT l.*,e1.empname as enteredempname,
						e2.empname as convertedemp,g.groupname,ls.type,l.duplicate,e3.empname as leadowner,e.empname as assignempname FROM 1_leads l 
						LEFT JOIN 1_employee e ON l.assignto = e.eid 
						LEFT JOIN 1_employee e1 ON l.enteredby = e1.eid 
						LEFT JOIN 1_employee e2 ON l.convertedby = e2.eid 
						LEFT JOIN 1_employee e3 ON l.leadowner = e3.eid 
						LEFT JOIN 1_leads_groups g ON l.gid = g.gid 
						LEFT JOIN 1_leads_status ls ON l.lead_status = ls.id 
						WHERE l.leadid='1'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='26'
				AND dataid='1'
[2017-03-02 18:19:30]	SQL :	SELECT count(callid) as cnt FROM `1_callhistory` WHERE leadid='1'
[2017-03-02 18:19:30]	SQL :	SELECT lc.remark FROM 1_leads_remarks lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:19:30]	SQL :	SELECT lc.comment FROM 1_leads_comments lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:19:30]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:19:30]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:30]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:30]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:30]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:30]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:30]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:30]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:19:30]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:19:30]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:19:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:19:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:19:30]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:19:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:19:30]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:19:30]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:19:30]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:19:30]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:30]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:19:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:19:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-03-02 18:19:30]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:19:30]	DEBUG :	Final output sent to browser
[2017-03-02 18:19:30]	DEBUG :	Total execution time: 0.4198
[2017-03-02 18:20:58]	DEBUG :	Config Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:20:58]	DEBUG :	URI Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Router Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Output Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Input Class Initialized
[2017-03-02 18:20:58]	DEBUG :	XSS Filtering completed
[2017-03-02 18:20:58]	DEBUG :	XSS Filtering completed
[2017-03-02 18:20:58]	DEBUG :	XSS Filtering completed
[2017-03-02 18:20:58]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:20:58]	DEBUG :	Language Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Loader Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:20:58]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:20:58]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:20:58]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:20:58]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:20:58]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:20:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:58]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:20:58]	DEBUG :	Session Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:20:58]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:20:58]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:20:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:20:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:20:58]	DEBUG :	Session routines successfully run
[2017-03-02 18:20:58]	DEBUG :	Table Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:20:58]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Email Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:20:58]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Controller Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:20:58]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:20:58]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:20:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:58]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:20:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:20:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:20:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:20:58]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:20:58]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:20:58]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:20:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:20:58]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:20:58]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:20:58]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:20:58]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:20:58]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:20:58]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:20:58]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:20:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:20:58]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:20:58]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:20:58]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:20:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:20:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:20:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:20:58]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:20:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:20:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:58]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:20:58]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:20:58]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:20:58]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:20:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:20:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:20:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:20:58]	DEBUG :	Final output sent to browser
[2017-03-02 18:20:58]	DEBUG :	Total execution time: 0.1467
[2017-03-02 18:20:59]	DEBUG :	Config Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:20:59]	DEBUG :	URI Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Router Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Output Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Input Class Initialized
[2017-03-02 18:20:59]	DEBUG :	XSS Filtering completed
[2017-03-02 18:20:59]	DEBUG :	XSS Filtering completed
[2017-03-02 18:20:59]	DEBUG :	XSS Filtering completed
[2017-03-02 18:20:59]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:20:59]	DEBUG :	Language Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Loader Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:20:59]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:20:59]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:20:59]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:20:59]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:20:59]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:20:59]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:59]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:20:59]	DEBUG :	Session Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:20:59]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:20:59]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:20:59]	DEBUG :	Session routines successfully run
[2017-03-02 18:20:59]	DEBUG :	Table Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:20:59]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Email Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:20:59]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Controller Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Model Class Initialized
[2017-03-02 18:20:59]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:20:59]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:20:59]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:20:59]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:59]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:20:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:20:59]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:20:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:20:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:20:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:20:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:20:59]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:20:59]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:20:59]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:20:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:20:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:20:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:20:59]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:20:59]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:20:59]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:20:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:20:59]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:20:59]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:20:59]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:20:59]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:20:59]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:21:00]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:00]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:00]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:00]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:00]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:00]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:00]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:00]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:00]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:00]	SQL :	SELECT e.empname,e.selfdisable,a.eid
							   FROM 1_leads_grpemp a
							   LEFT JOIN 1_employee e on a.eid=e.eid
							   WHERE a.gid=1 AND e.status = 1 AND a.status = 1 AND e.selfdisable = 0
							   ORDER BY e.`empname`
[2017-03-02 18:21:00]	DEBUG :	Final output sent to browser
[2017-03-02 18:21:00]	DEBUG :	Total execution time: 0.0596
[2017-03-02 18:21:08]	DEBUG :	Config Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:21:08]	DEBUG :	URI Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Router Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Output Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Input Class Initialized
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:08]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:21:08]	DEBUG :	Language Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Loader Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:21:08]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:21:08]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:21:08]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:21:08]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:21:08]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:21:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:08]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:21:08]	DEBUG :	Session Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:21:08]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:21:08]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:21:08]	SQL :	DELETE FROM `call_sessions`
WHERE `last_activity` < 1488451868
[2017-03-02 18:21:08]	DEBUG :	Session garbage collection performed.
[2017-03-02 18:21:08]	DEBUG :	Session routines successfully run
[2017-03-02 18:21:08]	DEBUG :	Table Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:21:08]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Email Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:21:08]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Controller Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:21:08]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:21:08]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:21:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:08]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:21:08]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:08]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:21:08]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:21:08]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:21:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:08]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:21:08]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:21:08]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:21:08]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:08]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:21:08]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:21:08]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:08]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:21:08]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:21:08]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:08]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:08]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:21:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:08]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:21:08]	SQL :	SELECT fieldname,fieldid FROM 1_customfields WHERE modid='26' AND bid='1'
[2017-03-02 18:21:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:21:08]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:08]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:21:08]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:21:08]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:21:08]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:21:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:21:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:21:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:21:08]	DEBUG :	Final output sent to browser
[2017-03-02 18:21:08]	DEBUG :	Total execution time: 0.0676
[2017-03-02 18:21:31]	DEBUG :	Config Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:21:31]	DEBUG :	URI Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Router Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Output Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Input Class Initialized
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:31]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:21:31]	DEBUG :	Language Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Loader Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:21:31]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:21:31]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:21:31]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:21:31]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:21:31]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:21:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:31]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:21:31]	DEBUG :	Session Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:21:31]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:21:31]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:21:31]	DEBUG :	Session routines successfully run
[2017-03-02 18:21:31]	DEBUG :	Table Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:21:31]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Email Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:21:31]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Controller Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:21:31]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:21:31]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:21:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:31]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:21:31]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:31]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:21:31]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:21:31]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:21:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:31]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:21:31]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:21:31]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:21:31]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:31]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:21:31]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:21:31]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:31]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:21:31]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:21:31]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:31]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:31]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:21:31]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:21:31]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:21:31]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='229'
[2017-03-02 18:21:31]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='230'
[2017-03-02 18:21:31]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='231'
[2017-03-02 18:21:31]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:21:31]	SQL :	SELECT * FROM 1_customfields WHERE fieldid='4' AND modid='26'
[2017-03-02 18:21:31]	SQL :	SELECT group_rule as rule FROM 1_leads_groups WHERE gid='1'
[2017-03-02 18:21:31]	SQL :	SELECT ge.eid FROM 1_leads_grpemp ge LEFT JOIN 1_employee e ON ge.eid = e.eid WHERE ge.gid='1' AND ge.bid='1' AND ge.status = 1 AND e.status = 1 ORDER BY ge.counter ASC LIMIT 0,1
[2017-03-02 18:21:51]	DEBUG :	Config Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:21:51]	DEBUG :	URI Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Router Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Output Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Input Class Initialized
[2017-03-02 18:21:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:51]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:21:51]	DEBUG :	Language Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Loader Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:21:51]	DEBUG :	Session Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:21:51]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:21:51]	DEBUG :	Session routines successfully run
[2017-03-02 18:21:51]	DEBUG :	Table Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:21:51]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Email Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:21:51]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Controller Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:21:51]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:21:51]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:51]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:21:51]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:21:51]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:21:51]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:51]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:21:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:51]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:21:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:51]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:21:51]	ERROR :	Severity: Notice  --> Undefined index: filename /var/www/html/mcnew/system/application/controllers/leads.php 1054
[2017-03-02 18:21:51]	ERROR :	Severity: Notice  --> Undefined index: filename /var/www/html/mcnew/system/application/controllers/leads.php 1055
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:5:\"error\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:5:\"error\";s:13:\"flash:new:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	DEBUG :	Config Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:21:51]	DEBUG :	URI Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Router Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Output Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Input Class Initialized
[2017-03-02 18:21:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:51]	DEBUG :	XSS Filtering completed
[2017-03-02 18:21:51]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:21:51]	DEBUG :	Language Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Loader Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:21:51]	DEBUG :	Session Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:21:51]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:5:\"error\";s:13:\"flash:new:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";s:14:\"flash:old:msgt\";s:5:\"error\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";s:14:\"flash:old:msgt\";s:5:\"error\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";s:14:\"flash:old:msgt\";s:5:\"error\";s:13:\"flash:old:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:5:\"error\";s:13:\"flash:old:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	DEBUG :	Session routines successfully run
[2017-03-02 18:21:51]	DEBUG :	Table Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:21:51]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Email Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:21:51]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Controller Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:21:51]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:21:51]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:21:51]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:5:\"error\";s:13:\"flash:old:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:51]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:21:51]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:21:51]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:21:51]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:21:51]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:51]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:21:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:51]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:21:51]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Model Class Initialized
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:51]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:21:51]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:21:51]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:21:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:21:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:21:51]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:21:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:21:51]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:21:51]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:21:51]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:21:51]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:21:51]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:21:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:21:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:21:51]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:21:51]	DEBUG :	Final output sent to browser
[2017-03-02 18:21:51]	DEBUG :	Total execution time: 0.2861
[2017-03-02 18:22:50]	DEBUG :	Config Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:22:50]	DEBUG :	URI Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Router Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Output Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Input Class Initialized
[2017-03-02 18:22:50]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:50]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:50]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:50]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:22:50]	DEBUG :	Language Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Loader Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:22:50]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:22:50]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:22:50]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:22:50]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:22:50]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:22:50]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:50]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:22:50]	DEBUG :	Session Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:22:50]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:22:50]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:22:50]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:72:\"Please upload the .csv format file. <br/>Please Select Group from list. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:22:50]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:22:50]	DEBUG :	Session routines successfully run
[2017-03-02 18:22:50]	DEBUG :	Table Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:22:50]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Email Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:22:50]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Controller Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:22:50]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:22:50]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:22:50]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:50]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:22:50]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:22:50]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:50]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:22:50]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:22:50]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:22:50]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:22:50]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:22:50]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:22:50]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:22:50]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:22:50]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:22:50]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:22:50]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:22:50]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:22:50]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:22:50]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:22:50]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:22:50]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:22:50]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:22:50]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:22:50]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:22:50]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:50]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:50]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:22:50]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:22:50]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:22:50]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:22:50]	SQL :	SELECT e.empname,e.selfdisable,a.eid
							   FROM 1_leads_grpemp a
							   LEFT JOIN 1_employee e on a.eid=e.eid
							   WHERE a.gid=1 AND e.status = 1 AND a.status = 1 AND e.selfdisable = 0
							   ORDER BY e.`empname`
[2017-03-02 18:22:50]	DEBUG :	Final output sent to browser
[2017-03-02 18:22:50]	DEBUG :	Total execution time: 0.1815
[2017-03-02 18:22:56]	DEBUG :	Config Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:22:56]	DEBUG :	URI Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Router Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Output Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Input Class Initialized
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	XSS Filtering completed
[2017-03-02 18:22:56]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:22:56]	DEBUG :	Language Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Loader Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:22:56]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:22:56]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:22:56]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:22:56]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:22:56]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:22:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:56]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:22:56]	DEBUG :	Session Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:22:56]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:22:56]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:22:56]	DEBUG :	Session routines successfully run
[2017-03-02 18:22:56]	DEBUG :	Table Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:22:56]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Email Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:22:56]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Controller Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:22:56]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:22:56]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:22:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:56]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:22:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:22:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:22:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:22:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:22:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:22:56]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:22:56]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:22:56]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:22:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:22:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:22:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:22:56]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:22:56]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:22:56]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:22:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:22:56]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:22:56]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:22:56]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:22:56]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:22:56]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:22:56]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Model Class Initialized
[2017-03-02 18:22:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:22:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:22:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:22:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:22:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:22:56]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:22:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:56]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:22:56]	SQL :	SELECT fieldname,fieldid FROM 1_customfields WHERE modid='26' AND bid='1'
[2017-03-02 18:22:56]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:22:56]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:22:56]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:22:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:22:56]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:22:56]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:22:56]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:22:56]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:22:56]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:22:56]	DEBUG :	Final output sent to browser
[2017-03-02 18:22:56]	DEBUG :	Total execution time: 0.0653
[2017-03-02 18:23:03]	DEBUG :	Config Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:23:03]	DEBUG :	URI Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Router Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Output Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Input Class Initialized
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:03]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:23:03]	DEBUG :	Language Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Loader Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:23:03]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:23:03]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:23:03]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:23:03]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:23:03]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:23:03]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:03]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:23:03]	DEBUG :	Session Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:23:03]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:23:03]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:23:03]	DEBUG :	Session routines successfully run
[2017-03-02 18:23:03]	DEBUG :	Table Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:23:03]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Email Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:23:03]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Controller Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:23:03]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:23:03]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:23:03]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:03]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:23:03]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:23:03]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:03]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:03]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:03]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:03]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:03]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:23:03]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:23:03]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:23:03]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:03]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:03]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:03]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:23:03]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:23:03]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:23:03]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:03]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:23:03]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:23:03]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:03]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:23:03]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:23:03]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:03]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:03]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:03]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:03]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:03]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:03]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:03]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:23:31]	DEBUG :	Config Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:23:31]	DEBUG :	URI Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Router Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Output Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Input Class Initialized
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:31]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:23:31]	DEBUG :	Language Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Loader Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:23:31]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:23:31]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:23:31]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:23:31]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:23:31]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:23:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:31]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:23:31]	DEBUG :	Session Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:23:31]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:23:31]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:23:31]	DEBUG :	Session routines successfully run
[2017-03-02 18:23:31]	DEBUG :	Table Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:23:31]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Email Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:23:31]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Controller Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:23:31]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:23:31]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:23:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:31]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:23:31]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:23:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:31]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:23:31]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:23:31]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:23:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:31]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:23:31]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:23:31]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:23:31]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:31]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:23:31]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:23:31]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:31]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:23:31]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:23:31]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:31]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:31]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:31]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:23:44]	DEBUG :	Config Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:23:44]	DEBUG :	URI Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Router Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Output Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Input Class Initialized
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:44]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:23:44]	DEBUG :	Language Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Loader Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:23:44]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:23:44]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:23:44]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:23:44]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:23:44]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:23:44]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:44]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:23:44]	DEBUG :	Session Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:23:44]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:23:44]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:23:44]	DEBUG :	Session routines successfully run
[2017-03-02 18:23:44]	DEBUG :	Table Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:23:44]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Email Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:23:44]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Controller Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:23:44]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:23:44]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:23:44]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:44]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:23:44]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:23:44]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:44]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:44]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:44]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:44]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:44]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:23:44]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:23:44]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:23:44]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:44]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:44]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:44]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:23:44]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:23:44]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:23:44]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:44]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:23:44]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:23:44]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:44]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:23:44]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:23:44]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:44]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:44]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:44]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:44]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:44]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:44]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:44]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:23:44]	ERROR :	Severity: Notice  --> Undefined variable: fname /var/www/html/mcnew/system/application/controllers/leads.php 1220
[2017-03-02 18:23:57]	DEBUG :	Config Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:23:57]	DEBUG :	URI Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Router Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Output Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Input Class Initialized
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:23:57]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:23:57]	DEBUG :	Language Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Loader Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:23:57]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:23:57]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:23:57]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:23:57]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:23:57]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:23:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:57]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:23:57]	DEBUG :	Session Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:23:57]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:23:57]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:23:57]	DEBUG :	Session routines successfully run
[2017-03-02 18:23:57]	DEBUG :	Table Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:23:57]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Email Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:23:57]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Controller Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:23:57]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:23:57]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:23:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:57]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:23:57]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:23:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:57]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:57]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:57]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:57]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:57]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:23:57]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:23:57]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:23:57]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:57]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:57]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:23:57]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:23:57]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:23:57]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:23:57]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:57]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:23:57]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:23:57]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:57]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:23:57]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:23:57]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:23:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:23:57]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:23:57]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:23:57]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:23:57]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:23:57]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:23:57]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:23:57]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:24:15]	DEBUG :	Config Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:24:15]	DEBUG :	URI Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Router Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Output Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Input Class Initialized
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:15]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:24:15]	DEBUG :	Language Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Loader Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:24:15]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:24:15]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:24:15]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:24:15]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:24:15]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:24:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:24:15]	DEBUG :	Session Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:24:15]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:24:15]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:24:15]	DEBUG :	Session routines successfully run
[2017-03-02 18:24:15]	DEBUG :	Table Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:24:15]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Email Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:24:15]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Controller Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:24:15]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:24:15]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:24:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:24:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:24:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:24:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:24:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:24:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:24:15]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:24:15]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:24:15]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:24:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:15]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:24:15]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:24:15]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:24:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:24:15]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:24:15]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:24:15]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:24:15]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:24:15]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:24:15]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:24:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:24:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:24:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:24:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:24:15]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:24:15]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:24:15]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:24:15]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:24:34]	DEBUG :	Config Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:24:34]	DEBUG :	URI Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Router Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Output Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Input Class Initialized
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:34]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:24:34]	DEBUG :	Language Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Loader Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:24:34]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:24:34]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:24:34]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:24:34]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:24:34]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:24:34]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:34]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:24:34]	DEBUG :	Session Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:24:34]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:24:34]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:24:34]	DEBUG :	Session routines successfully run
[2017-03-02 18:24:34]	DEBUG :	Table Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:24:34]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Email Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:24:34]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Controller Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:24:34]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:24:34]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:24:34]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:34]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:24:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:24:34]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:24:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:24:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:24:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:24:34]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:24:34]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:24:34]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:24:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:34]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:24:34]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:24:34]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:24:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:24:34]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:24:34]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:24:34]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:24:34]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:24:34]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:24:34]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:34]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:24:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:24:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:24:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:24:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:24:34]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:24:34]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:24:34]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:24:34]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:24:52]	DEBUG :	Config Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:24:52]	DEBUG :	URI Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Router Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Output Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Input Class Initialized
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	XSS Filtering completed
[2017-03-02 18:24:52]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:24:52]	DEBUG :	Language Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Loader Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:24:52]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:24:52]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:24:52]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:24:52]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:24:52]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:24:52]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:52]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:24:52]	DEBUG :	Session Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:24:52]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:24:52]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:24:52]	DEBUG :	Session routines successfully run
[2017-03-02 18:24:52]	DEBUG :	Table Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:24:52]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Email Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:24:52]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Controller Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:24:52]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:24:52]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:24:52]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:52]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:24:52]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:24:52]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:24:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:24:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:24:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:24:52]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:24:52]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:24:52]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:24:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:24:52]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:24:52]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:24:52]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:24:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:24:52]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:24:52]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:24:52]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:24:52]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:24:52]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:24:52]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Model Class Initialized
[2017-03-02 18:24:52]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:24:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:24:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:24:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:24:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:24:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:24:52]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:24:52]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:24:52]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:24:52]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:24:52]	SQL :	SELECT * FROM 1_customfields WHERE fieldid='4' AND modid='26'
[2017-03-02 18:25:34]	DEBUG :	Config Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:25:34]	DEBUG :	URI Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Router Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Output Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Input Class Initialized
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:34]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:25:34]	DEBUG :	Language Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Loader Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:25:34]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:25:34]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:25:34]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:25:34]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:25:34]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:25:34]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:34]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:25:34]	DEBUG :	Session Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:25:34]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:25:34]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:25:34]	SQL :	DELETE FROM `call_sessions`
WHERE `last_activity` < 1488452134
[2017-03-02 18:25:34]	DEBUG :	Session garbage collection performed.
[2017-03-02 18:25:34]	DEBUG :	Session routines successfully run
[2017-03-02 18:25:34]	DEBUG :	Table Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:25:34]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Email Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:25:34]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Controller Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:34]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:25:34]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:25:34]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:25:34]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:34]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:25:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:34]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:34]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:25:34]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:25:34]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:25:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:34]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:34]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:34]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:25:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:34]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:25:34]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:25:34]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:34]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:25:34]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:25:34]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:35]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:25:35]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:25:35]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:25:35]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:25:35]	SQL :	SELECT leadlimit as used,type FROM  business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:35]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2017-03-02 18:25:35]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('3045', '1', '1', 'Leads', ' Leads are imported by ashwini.naidu@vmc.in')
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	DEBUG :	Config Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:25:35]	DEBUG :	URI Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Router Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Output Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Input Class Initialized
[2017-03-02 18:25:35]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:35]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:35]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:35]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:25:35]	DEBUG :	Language Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Loader Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:25:35]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:25:35]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:25:35]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:25:35]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:25:35]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:25:35]	DEBUG :	Session Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:25:35]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	DEBUG :	Session routines successfully run
[2017-03-02 18:25:35]	DEBUG :	Table Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:25:35]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Email Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:25:35]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Controller Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:25:35]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:25:35]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:25:35]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:25:35]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:25:35]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:35]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:35]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:25:35]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:35]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:25:35]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:35]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:25:35]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:35]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.`leadid`
				FROM 1_leads a 
				LEFT JOIN 1_leads_groups d on a.gid=d.gid 
				LEFT JOIN 1_employee e on a.assignto=e.eid 
				LEFT JOIN 1_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN 1_employee e2 on a.convertedby=e2.eid 
				  
				WHERE a.status!='2'  AND a.lead_status = '1' ORDER BY   a.`leadid` DESC  LIMIT 0,30
[2017-03-02 18:25:35]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:25:35]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:25:35]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:35]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:35]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:35]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:25:35]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:25:35]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:35]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:25:35]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:35]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:25:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:25:35]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:35]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:25:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-03-02 18:25:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:25:35]	DEBUG :	Final output sent to browser
[2017-03-02 18:25:35]	DEBUG :	Total execution time: 0.3804
[2017-03-02 18:25:38]	DEBUG :	Config Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:25:38]	DEBUG :	URI Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Router Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Output Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Input Class Initialized
[2017-03-02 18:25:38]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:38]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:38]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:38]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:25:38]	DEBUG :	Language Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Loader Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:25:38]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:25:38]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:25:38]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:25:38]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:25:38]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:25:38]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:38]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:25:38]	DEBUG :	Session Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:25:38]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:25:38]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:25:38]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:38]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:38]	DEBUG :	Session routines successfully run
[2017-03-02 18:25:38]	DEBUG :	Table Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:25:38]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Email Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:25:38]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Controller Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:25:38]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:25:38]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:25:38]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:38]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:25:38]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:38]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:38]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:38]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:25:38]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:25:38]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:25:38]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:38]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:38]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:25:38]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:38]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:25:38]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:38]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:25:38]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:38]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:38]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:38]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:38]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:25:38]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:38]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:38]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:38]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:38]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:25:38]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:38]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:25:38]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:25:38]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:38]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:25:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:25:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:25:38]	DEBUG :	Final output sent to browser
[2017-03-02 18:25:38]	DEBUG :	Total execution time: 0.1750
[2017-03-02 18:25:40]	DEBUG :	Config Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:25:40]	DEBUG :	URI Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Router Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Output Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Input Class Initialized
[2017-03-02 18:25:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:40]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:40]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:25:40]	DEBUG :	Language Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Loader Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:25:40]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:25:40]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:25:40]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:25:40]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:25:40]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:25:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:40]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:25:40]	DEBUG :	Session Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:25:40]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:25:40]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:25:40]	DEBUG :	Session routines successfully run
[2017-03-02 18:25:40]	DEBUG :	Table Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:25:40]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Email Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:25:40]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Controller Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:25:40]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:25:40]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:25:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:40]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:25:40]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:40]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:40]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:40]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:40]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:40]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:25:40]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:25:40]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:25:40]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:40]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:40]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:40]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:40]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:40]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:25:40]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:40]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:25:40]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:25:40]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:40]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:25:40]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:25:40]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:40]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:40]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:40]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:40]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:40]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:40]	SQL :	SELECT e.empname,e.selfdisable,a.eid
							   FROM 1_leads_grpemp a
							   LEFT JOIN 1_employee e on a.eid=e.eid
							   WHERE a.gid=1 AND e.status = 1 AND a.status = 1 AND e.selfdisable = 0
							   ORDER BY e.`empname`
[2017-03-02 18:25:40]	DEBUG :	Final output sent to browser
[2017-03-02 18:25:40]	DEBUG :	Total execution time: 0.0648
[2017-03-02 18:25:45]	DEBUG :	Config Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:25:45]	DEBUG :	URI Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Router Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Output Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Input Class Initialized
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:45]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:25:45]	DEBUG :	Language Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Loader Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:25:45]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:25:45]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:25:45]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:25:45]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:25:45]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:25:45]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:45]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:25:45]	DEBUG :	Session Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:25:45]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:25:45]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:25:45]	DEBUG :	Session routines successfully run
[2017-03-02 18:25:45]	DEBUG :	Table Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:25:45]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Email Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:25:45]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Controller Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:25:45]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:25:45]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:25:45]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:45]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:25:45]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:45]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:45]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:45]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:45]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:45]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:45]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:25:45]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:25:45]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:25:45]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:45]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:45]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:45]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:45]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:45]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:25:45]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:45]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:25:45]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:25:45]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:45]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:25:45]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:25:45]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:45]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:45]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:45]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:45]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:45]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:45]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:45]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:25:45]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:45]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:25:45]	SQL :	SELECT fieldname,fieldid FROM 1_customfields WHERE modid='26' AND bid='1'
[2017-03-02 18:25:45]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:25:45]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:45]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:25:45]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:25:45]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:45]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:45]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:25:45]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-03-02 18:25:45]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:25:45]	DEBUG :	Final output sent to browser
[2017-03-02 18:25:45]	DEBUG :	Total execution time: 0.0616
[2017-03-02 18:25:57]	DEBUG :	Config Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:25:57]	DEBUG :	URI Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Router Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Output Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Input Class Initialized
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:25:57]	DEBUG :	Language Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Loader Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:25:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:57]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:25:57]	DEBUG :	Session Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:25:57]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:25:57]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:25:57]	DEBUG :	Session routines successfully run
[2017-03-02 18:25:57]	DEBUG :	Table Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:25:57]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Email Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:25:57]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Controller Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:25:57]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:25:57]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:25:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:57]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:25:57]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:57]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:57]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:57]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:57]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:57]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:25:57]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:25:57]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:25:57]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:57]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:57]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:57]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:57]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:57]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:25:57]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:57]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:25:57]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:25:57]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:57]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:25:57]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:25:57]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:57]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:57]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:57]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:57]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:57]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:57]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:25:57]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='227'
[2017-03-02 18:25:57]	SQL :	SELECT e.eid FROM 1_employee e WHERE (e.empemail='Mukesh'  OR e.empname LIKE 'Mukesh') AND e.status='1'
[2017-03-02 18:25:57]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='229'
[2017-03-02 18:25:57]	SQL :	SELECT fieldname as fname FROM systemfields WHERE fieldid='230'
[2017-03-02 18:25:57]	SQL :	SELECT field_key as fname FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:25:57]	SQL :	SELECT * FROM 1_customfields WHERE fieldid='39' AND modid='26'
[2017-03-02 18:25:57]	SQL :	SELECT group_rule as rule FROM 1_leads_groups WHERE gid='1'
[2017-03-02 18:25:57]	SQL :	SELECT ge.eid FROM 1_leads_grpemp ge LEFT JOIN 1_employee e ON ge.eid = e.eid WHERE ge.gid='1' AND ge.bid='1' AND ge.status = 1 AND e.status = 1 ORDER BY ge.counter ASC LIMIT 0,1
[2017-03-02 18:25:57]	SQL :	SELECT leadlimit as used,type FROM  business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:57]	SQL :	SELECT leadid,gid FROM 1_leads WHERE email='ashwini.naidu31@gmail.com'
[2017-03-02 18:25:57]	SQL :	SELECT COALESCE(MAX(`leadid`),0)+1 as id FROM 1_leads
[2017-03-02 18:25:57]	SQL :	DESC 1_leads
[2017-03-02 18:25:57]	SQL :	INSERT INTO `1_leads` (`gid`, `assignto`, `name`, `email`, `c_39`, `createdon`, `bid`, `enteredby`, `leadowner`, `convertedby`, `lastmodified`, `convertedon`, `lead_status`, `status`, `dis_type`, `number`, `duplicate`, `parentId`, `leadid`) VALUES (0, '1', 'ash', 'ashwini.naidu31@gmail.com', 'test custom', '2017-03-02 18:25:57', '1', '1', '1', '1', '2017-03-02 18:25:57', '2017-03-02 18:25:57', '1', 1, 2, '', 0, 0, '1')
[2017-03-02 18:25:57]	SQL :	SELECT * FROM 1_employee WHERE eid='1'
[2017-03-02 18:25:57]	SQL :	SELECT empname FROM 1_employee WHERE eid='1'
[2017-03-02 18:25:57]	DEBUG :	Email class already loaded. Second attempt ignored.
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/mcnew/system/libraries/Email.php 1662
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fsockopen(): Failed to enable crypto /var/www/html/mcnew/system/libraries/Email.php 1662
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fsockopen(): unable to connect to ssl://smtp.gmail.com:25 (Unknown error) /var/www/html/mcnew/system/libraries/Email.php 1662
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1805
[2017-03-02 18:25:57]	ERROR :	Severity: Warning  --> fgets() expects parameter 1 to be resource, boolean given /var/www/html/mcnew/system/libraries/Email.php 1828
[2017-03-02 18:25:57]	ERROR :	Mail-log: The following SMTP error was encountered: 0 <br />Unable to send data: AUTH LOGIN<br />Failed to send AUTH LOGIN command. Error: <br />Unable to send data: MAIL FROM:<noreply@mcube.com><br /><pre>from: </pre>The following SMTP error was encountered: <br />Unable to send data: RCPT TO:<ashwini.naidu@vmc.in><br /><pre>to: </pre>The following SMTP error was encountered: <br />Unable to send data: DATA<br /><pre>data: </pre>The following SMTP error was encountered: <br />Unable to send data: From: "MCube" <noreply@mcube.com>
Return-Path: <noreply@mcube.com>
To: ashwini.naidu@vmc.in
Subject: =?utf-8?Q?Assigned_New_Lead_details?=
Reply-To: "noreply@mcube.com" <noreply@mcube.com>
X-Sender: noreply@mcube.com
X-Mailer: CodeIgniter
X-Priority: 3 (Normal)
Message-ID: <58b8165d8022c@mcube.com>
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary="B_ALT_58b8165d80271"

This is a multi-part message in MIME format.
Your email application may not support this format.

--B_ALT_58b8165d80271
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit

1800-419-2202

&nbsp;
Hi Ashwini Naidu

New Leads have been assigned to you.Please check with your login.Assigned
leads Count : 1Assigned By : Ashwini Naidu

Regards, 
Mcube Team 

VMC Technologies


--B_ALT_58b8165d80271
Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: quoted-printable


		<html><head>
		</head>
			<body style=3D"margin:0 auto; padding: 0;width:600px;">
			<table style=3D"margin:0px;width:100%;font-family: Helvetica Neue, Arial=
, Helvetica, Geneva, sans-serif;font-size:14px;" cellpadding=3D"0" cellspac=
ing=3D"0">
			<tr><td style=3D"background:#000; width:100%;height:80px;float:left;
			-webkit-border-top-left-radius: 10px;-webkit-border-top-right-radius: 10=
px;
			-moz-border-radius-topleft: 10px;-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;border-top-right-radius: 10px;overflow:hidd=
en;
			color:#000;">
					<table cellpadding=3D"0" cellspacing=3D"0" border=3D"0" style=3D"width=
:100%">
					<tr>
						<td align=3D"left"><img src=3D"http://mcube.vmc.in/qrcode/company_log=
os/856265314vmclogo.gif" style=3D"margin-top:-20px;"></td><td align=3D"righ=
t"><img src=3D"http://mcube.vmc.in/system/application/img/mcubeicn.jpg" sty=
le=3D"margin-top:15px;margin-right:20px;"><br/><div style=3D"color: #FF9900=
;font-size: 18px;font-weight: bold;margin-right:10px;"><img src=3D"http://m=
cube.vmc.in/system/application/img/phoneicon.gif" >1800-419-2202</div></td>=
	=09
					</tr>
					</table>
		=09
		=09
			</td></tr>
			<tr><td style=3D"background:#FFF;width:100%;color:#000;border:1px solid =
#000;height:300px;vertical-align:top;padding:10px;">
				<p>&nbsp;</p>
				<p style=3D"font-size: 18px; line-height:24px; color: #b0b0b0; font-wei=
ght:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, =
Arial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;" align=3D"left"><si=
ngleline label=3D"Title">Hi Ashwini Naidu</singleline></p>
				<div style=3D"font-size: 13px; line-height: 18px; color: #444444; margi=
n-top: 0px; margin-bottom: 18px; font-family: Helvetica Neue, Arial, Helvet=
ica, Geneva, sans-serif; text-indent:1cm;" align=3D"left">
												=09
													<multiline label=3D"Description">New Leads have been assigned =
to you.Please check with your login.<br/><br/>Assigned leads Count : 1<br/>=
Assigned By : Ashwini Naidu
					</div>
				<p style=3D"font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;"><singleline label=3D=
"Title">Regards, </singleline></p>								=09
				<p style=3D"font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;"><singleline label=3D=
"Title">Mcube Team </singleline></p>								=09
											=09

			</td></tr>
			<tr><td style=3D"background:#000;width:100%;height:40px;
			-webkit-border-bottom-left-radius: 10px;-webkit-border-bottom-right-radi=
us: 10px;
			-moz-border-radius-bottomleft: 10px;-moz-border-radius-bottomright: 10px=
;
			border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
			color:#fff;padding:10px;font-size:12px;font-weight:bold;text-align:right=
;"><a href=3D"http://mcube.vmc.in/" style=3D"color:#FFF;text-decoration:non=
e;">VMC Technologies</a></td></tr>
			</table>
			</body></html>

--B_ALT_58b8165d80271--<br />Unable to send data: .<br /><br />The following SMTP error was encountered: <br />Unable to send email using PHP SMTP.  Your server might not be configured to send mail using this method.<br /><pre>From: "MCube" <noreply@mcube.com>
Return-Path: <noreply@mcube.com>
To: ashwini.naidu@vmc.in
Subject: =?utf-8?Q?Assigned_New_Lead_details?=
Reply-To: "noreply@mcube.com" <noreply@mcube.com>
X-Sender: noreply@mcube.com
X-Mailer: CodeIgniter
X-Priority: 3 (Normal)
Message-ID: <58b8165d8022c@mcube.com>
Mime-Version: 1.0


Content-Type: multipart/alternative; boundary=&quot;B_ALT_58b8165d80271&quot;

This is a multi-part message in MIME format.
Your email application may not support this format.

--B_ALT_58b8165d80271
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit

1800-419-2202

&amp;nbsp;
Hi Ashwini Naidu

New Leads have been assigned to you.Please check with your login.Assigned
leads Count : 1Assigned By : Ashwini Naidu

Regards, 
Mcube Team 

VMC Technologies


--B_ALT_58b8165d80271
Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: quoted-printable


		&lt;html&gt;&lt;head&gt;
		&lt;/head&gt;
			&lt;body style=3D&quot;margin:0 auto; padding: 0;width:600px;&quot;&gt;
			&lt;table style=3D&quot;margin:0px;width:100%;font-family: Helvetica Neue, Arial=
, Helvetica, Geneva, sans-serif;font-size:14px;&quot; cellpadding=3D&quot;0&quot; cellspac=
ing=3D&quot;0&quot;&gt;
			&lt;tr&gt;&lt;td style=3D&quot;background:#000; width:100%;height:80px;float:left;
			-webkit-border-top-left-radius: 10px;-webkit-border-top-right-radius: 10=
px;
			-moz-border-radius-topleft: 10px;-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;border-top-right-radius: 10px;overflow:hidd=
en;
			color:#000;&quot;&gt;
					&lt;table cellpadding=3D&quot;0&quot; cellspacing=3D&quot;0&quot; border=3D&quot;0&quot; style=3D&quot;width=
:100%&quot;&gt;
					&lt;tr&gt;
						&lt;td align=3D&quot;left&quot;&gt;&lt;img src=3D&quot;http://mcube.vmc.in/qrcode/company_log=
os/856265314vmclogo.gif&quot; style=3D&quot;margin-top:-20px;&quot;&gt;&lt;/td&gt;&lt;td align=3D&quot;righ=
t&quot;&gt;&lt;img src=3D&quot;http://mcube.vmc.in/system/application/img/mcubeicn.jpg&quot; sty=
le=3D&quot;margin-top:15px;margin-right:20px;&quot;&gt;&lt;br/&gt;&lt;div style=3D&quot;color: #FF9900=
;font-size: 18px;font-weight: bold;margin-right:10px;&quot;&gt;&lt;img src=3D&quot;http://m=
cube.vmc.in/system/application/img/phoneicon.gif&quot; &gt;1800-419-2202&lt;/div&gt;&lt;/td&gt;=
	=09
					&lt;/tr&gt;
					&lt;/table&gt;
		=09
		=09
			&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td style=3D&quot;background:#FFF;width:100%;color:#000;border:1px solid =
#000;height:300px;vertical-align:top;padding:10px;&quot;&gt;
				&lt;p&gt;&amp;nbsp;&lt;/p&gt;
				&lt;p style=3D&quot;font-size: 18px; line-height:24px; color: #b0b0b0; font-wei=
ght:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, =
Arial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;&quot; align=3D&quot;left&quot;&gt;&lt;si=
ngleline label=3D&quot;Title&quot;&gt;Hi Ashwini Naidu&lt;/singleline&gt;&lt;/p&gt;
				&lt;div style=3D&quot;font-size: 13px; line-height: 18px; color: #444444; margi=
n-top: 0px; margin-bottom: 18px; font-family: Helvetica Neue, Arial, Helvet=
ica, Geneva, sans-serif; text-indent:1cm;&quot; align=3D&quot;left&quot;&gt;
												=09
													&lt;multiline label=3D&quot;Description&quot;&gt;New Leads have been assigned =
to you.Please check with your login.&lt;br/&gt;&lt;br/&gt;Assigned leads Count : 1&lt;br/&gt;=
Assigned By : Ashwini Naidu
					&lt;/div&gt;
				&lt;p style=3D&quot;font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;&quot;&gt;&lt;singleline label=3D=
&quot;Title&quot;&gt;Regards, &lt;/singleline&gt;&lt;/p&gt;								=09
				&lt;p style=3D&quot;font-size: 18px; line-height:24px; color: #0004; font-weigh=
t:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Ar=
ial, Helvetica, Geneva, sans-serif;text-indent:0.5cm;&quot;&gt;&lt;singleline label=3D=
&quot;Title&quot;&gt;Mcube Team &lt;/singleline&gt;&lt;/p&gt;								=09
											=09

			&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td style=3D&quot;background:#000;width:100%;height:40px;
			-webkit-border-bottom-left-radius: 10px;-webkit-border-bottom-right-radi=
us: 10px;
			-moz-border-radius-bottomleft: 10px;-moz-border-radius-bottomright: 10px=
;
			border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
			color:#fff;padding:10px;font-size:12px;font-weight:bold;text-align:right=
;&quot;&gt;&lt;a href=3D&quot;http://mcube.vmc.in/&quot; style=3D&quot;color:#FFF;text-decoration:non=
e;&quot;&gt;VMC Technologies&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;
			&lt;/table&gt;
			&lt;/body&gt;&lt;/html&gt;

--B_ALT_58b8165d80271--</pre>
[2017-03-02 18:25:57]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2017-03-02 18:25:57]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('3046', '1', '1', 'Leads', ' Leads are imported by ashwini.naidu@vmc.in')
[2017-03-02 18:25:57]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:57]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:57]	DEBUG :	Config Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:25:57]	DEBUG :	URI Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Router Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Output Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Input Class Initialized
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	XSS Filtering completed
[2017-03-02 18:25:57]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:25:57]	DEBUG :	Language Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Loader Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:25:57]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:57]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:25:57]	DEBUG :	Session Class Initialized
[2017-03-02 18:25:57]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:25:57]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:25:57]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:25:57]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:57]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:34:\"Imported Leads Successfully Done. \";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:58]	DEBUG :	Session routines successfully run
[2017-03-02 18:25:58]	DEBUG :	Table Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:25:58]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Email Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:25:58]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Controller Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:25:58]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:25:58]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:58]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:25:58]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:25:58]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:25:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:58]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:58]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:25:58]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:58]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:25:58]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:58]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:25:58]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Model Class Initialized
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:58]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:25:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM business where pid='1'
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1488455789', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:25:58]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.`leadid`
				FROM 1_leads a 
				LEFT JOIN 1_leads_groups d on a.gid=d.gid 
				LEFT JOIN 1_employee e on a.assignto=e.eid 
				LEFT JOIN 1_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN 1_employee e2 on a.convertedby=e2.eid 
				  
				WHERE a.status!='2'  AND a.lead_status = '1' ORDER BY   a.`leadid` DESC  LIMIT 0,30
[2017-03-02 18:25:58]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT l.*,e1.empname as enteredempname,
						e2.empname as convertedemp,g.groupname,ls.type,l.duplicate,e3.empname as leadowner,e.empname as assignempname FROM 1_leads l 
						LEFT JOIN 1_employee e ON l.assignto = e.eid 
						LEFT JOIN 1_employee e1 ON l.enteredby = e1.eid 
						LEFT JOIN 1_employee e2 ON l.convertedby = e2.eid 
						LEFT JOIN 1_employee e3 ON l.leadowner = e3.eid 
						LEFT JOIN 1_leads_groups g ON l.gid = g.gid 
						LEFT JOIN 1_leads_status ls ON l.lead_status = ls.id 
						WHERE l.leadid='1'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='26'
				AND dataid='1'
[2017-03-02 18:25:58]	SQL :	SELECT count(callid) as cnt FROM `1_callhistory` WHERE leadid='1'
[2017-03-02 18:25:58]	SQL :	SELECT lc.remark FROM 1_leads_remarks lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:25:58]	SQL :	SELECT lc.comment FROM 1_leads_comments lc
			  WHERE lc.leadid='1' ORDER BY lc.cdate DESC LIMIT 0,1
[2017-03-02 18:25:58]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='26') as t ORDER BY display_order ASC
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:25:58]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:58]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:58]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:58]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:58]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:58]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:58]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='46'
[2017-03-02 18:25:58]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_leads_groups WHERE status=1
[2017-03-02 18:25:58]	SQL :	select eid,empname from 1_employee WHERE status=1 ORDER BY empname
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:25:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:25:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:25:58]	SQL :	SELECT eid,empname FROM 1_employee WHERE status = '1' ORDER BY empname
[2017-03-02 18:25:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-03-02 18:25:58]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:25:58]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-03-02 18:25:58]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-03-02 18:25:58]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:58]	ERROR :	Severity: Notice  --> Use of undefined constant php - assumed 'php' /var/www/html/mcnew/system/application/views/leftsidebar.php 238
[2017-03-02 18:25:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-03-02 18:25:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-03-02 18:25:58]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-03-02 18:25:58]	DEBUG :	Final output sent to browser
[2017-03-02 18:25:58]	DEBUG :	Total execution time: 0.3816
[2017-03-02 18:27:15]	DEBUG :	Config Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:27:15]	DEBUG :	URI Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Router Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Output Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Input Class Initialized
[2017-03-02 18:27:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:27:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:27:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:27:15]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:27:15]	DEBUG :	Language Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Loader Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:27:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:27:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:27:15]	DEBUG :	Session Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:27:15]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:27:15]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'e293416a9483633f2242c87d2a16468d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-03-02 18:27:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1488459435, `session_id` = '7af1650abff9a7fecfb51f0d8b9eebf3' WHERE session_id = 'e293416a9483633f2242c87d2a16468d'
[2017-03-02 18:27:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1488459435, `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:34:\"Imported Leads Successfully Done. \";}' WHERE `session_id` = '7af1650abff9a7fecfb51f0d8b9eebf3'
[2017-03-02 18:27:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1488459435, `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '7af1650abff9a7fecfb51f0d8b9eebf3'
[2017-03-02 18:27:15]	DEBUG :	Session routines successfully run
[2017-03-02 18:27:15]	DEBUG :	Table Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:27:15]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Email Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:27:15]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Controller Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:27:15]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-03-02 18:27:15]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-03-02 18:27:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:27:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-03-02 18:27:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1488459435, `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:8:\"deviceid\";s:17:\"1.1.d886b8e8a0615\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '7af1650abff9a7fecfb51f0d8b9eebf3'
[2017-03-02 18:27:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:27:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-03-02 18:27:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-03-02 18:27:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-03-02 18:27:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-03-02 18:27:15]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:27:15]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:27:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:27:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:27:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-03-02 18:27:15]	SQL :	SELECT id,type FROM 1_leads_status
[2017-03-02 18:27:15]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-03-02 18:27:15]	SQL :	SELECT sid,status FROM 1_support_status
[2017-03-02 18:27:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-03-02 18:27:15]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-03-02 18:27:15]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-03-02 18:27:15]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:27:15]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-03-02 18:27:15]	SQL :	SELECT action,IF(module_name='Report','Report',(IF(module_name='Group Module','Group',(IF(module_name='Employee Module','Employee',''))))) as module_name
		,uid FROM 1_activitylog WHERE module_name IN('Report','Employee Module','Group Module') AND action LIKE '%delete%' AND DATE(date_time)=CURDATE() ORDER BY date_time DESC
[2017-03-02 18:27:15]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-03-02 18:27:15]	DEBUG :	Validation Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Form_validation class already loaded. Second attempt ignored.
[2017-03-02 18:27:15]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2017-03-02 18:27:15]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('3047', '1', '1', 'User', 'ashwini.naidu@vmc.in Logged out at 2017-03-02 18:27:15')
[2017-03-02 18:27:15]	SQL :	DELETE FROM `call_sessions`
WHERE `session_id` = '7af1650abff9a7fecfb51f0d8b9eebf3'
[2017-03-02 18:27:15]	DEBUG :	Config Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Hooks Class Initialized
[2017-03-02 18:27:15]	DEBUG :	URI Class Initialized
[2017-03-02 18:27:15]	DEBUG :	No URI present. Default controller set.
[2017-03-02 18:27:15]	DEBUG :	Router Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Output Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Input Class Initialized
[2017-03-02 18:27:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:27:15]	DEBUG :	XSS Filtering completed
[2017-03-02 18:27:15]	DEBUG :	Global POST and COOKIE data sanitized
[2017-03-02 18:27:15]	DEBUG :	Language Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Loader Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: url_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: form_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: html_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: email_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: ckeditor_helper
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: mcube_helper
[2017-03-02 18:27:15]	DEBUG :	Database Driver Class Initialized
[2017-03-02 18:27:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-03-02 18:27:15]	DEBUG :	Session Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Helper loaded: string_helper
[2017-03-02 18:27:15]	DEBUG :	Encrypt Class Initialized
[2017-03-02 18:27:15]	DEBUG :	A session cookie was not found.
[2017-03-02 18:27:15]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('068b142e06c477e5c49b217c806477a9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1488459435)
[2017-03-02 18:27:15]	DEBUG :	Session routines successfully run
[2017-03-02 18:27:15]	DEBUG :	Table Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Pagination Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-03-02 18:27:15]	DEBUG :	Form Validation Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Email Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-03-02 18:27:15]	DEBUG :	Calendar Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Controller Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Model Class Initialized
[2017-03-02 18:27:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-03-02 18:27:15]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-03-02 18:27:15]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-03-02 18:27:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid=''
[2017-03-02 18:27:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid=''
[2017-03-02 18:27:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid=''
[2017-03-02 18:27:15]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/siteheader1.php
[2017-03-02 18:27:15]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/login.php
[2017-03-02 18:27:15]	DEBUG :	Final output sent to browser
[2017-03-02 18:27:15]	DEBUG :	Total execution time: 0.0379
