ALTER TABLE `account_settings` ADD `lead_sms` TINYINT(2) NOT NULL AFTER `del_notify`;
ALTER TABLE `account_settings` ADD `textto_cust` VARCHAR(250) NOT NULL AFTER `lead_sms`;

ALTER TABLE `user` ADD `mtdebug` TINYINT(4) NOT NULL AFTER `mcubecalls`;
