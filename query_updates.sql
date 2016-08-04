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