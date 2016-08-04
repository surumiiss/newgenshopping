-- 04/08/2016 
-- added by Aathira


--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1= buyer , 2= merchant',
  `email` varchar(320) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `password` int(25) NOT NULL,
  `activation_link` int(100) NOT NULL COMMENT 'for email verification',
  `verification_code` int(10) NOT NULL COMMENT 'for mobile verification',
  `user_status` int(11) NOT NULL COMMENT '1 = activation pending, 2 = payment pending, 3 = activated, 4 = admin disabled, 5 = user locked, 6 = password locked',
  `bad_attempts` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `field1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `merchant`
  DROP `email`,
  DROP `phone_number`,
  DROP `password`,
  DROP `confirm`,
  DROP `verification_code`,
  DROP `email_verification`,
  DROP `status`,
  DROP `last_login`,
  DROP `bad_attempts`;

ALTER TABLE `merchant` CHANGE `field1` `user_id` INT(11) NOT NULL;

ALTER TABLE `merchant` ADD INDEX(`user_id`);

ALTER TABLE `merchant` ADD FOREIGN KEY (`user_id`) REFERENCES `newgen_shopping`.`user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- Change name of "merchant" to "merchant_details"

ALTER TABLE `buyer_details` DROP `email`, DROP `phone_no_1`, DROP `password`, DROP `confirm`, DROP `verification_code`, DROP `email_verification`, DROP `status`, DROP `bad_attempts`, DROP `last_login`;

ALTER TABLE `buyer_details` CHANGE `field1` `user_id` INT(11) NOT NULL AFTER `id`;

ALTER TABLE `buyer_details` ADD INDEX(`user_id`);

ALTER TABLE `buyer_details` ADD FOREIGN KEY (`user_id`) REFERENCES `newgen_shopping`.`user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

RENAME TABLE `newgen_shopping`.`make_payment` TO `newgen_shopping`.`make_product_payment`;

ALTER TABLE `make_product_payment` ADD FOREIGN KEY (`userid`) REFERENCES `newgen_shopping`.`user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `make_product_payment` ADD `product_id` INT NOT NULL AFTER `userid`, ADD INDEX (`product_id`) ;

ALTER TABLE `make_product_payment` ADD FOREIGN KEY (`product_id`) REFERENCES `newgen_shopping`.`products`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `wallet_history` ADD FOREIGN KEY (`user_id`) REFERENCES `newgen_shopping`.`user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `user_address` ADD INDEX(`userid`);
LTER TABLE `user_address` ADD INDEX(`district`);
ALTER TABLE `user_address` ADD INDEX(`country`);
ALTER TABLE `user_address` ADD INDEX(`state`);
ALTER TABLE `user_address` ADD FOREIGN KEY (`userid`) REFERENCES `newgen_shopping`.`user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `user_address` ADD FOREIGN KEY (`district`) REFERENCES `newgen_shopping`.`districts`(`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `user_address` ADD FOREIGN KEY (`country`) REFERENCES `newgen_shopping`.`countries`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `user_address` ADD FOREIGN KEY (`state`) REFERENCES `newgen_shopping`.`states`(`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `order` DROP FOREIGN KEY `order_ibfk_1`; ALTER TABLE `order` ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `newgen_shopping`.`user`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;



