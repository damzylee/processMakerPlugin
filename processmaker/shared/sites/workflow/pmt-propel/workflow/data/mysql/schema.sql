
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- PMT_CUSTOMERS
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `PMT_CUSTOMERS`;


CREATE TABLE `PMT_CUSTOMERS`
(
	`CUSTOMER_ID` VARCHAR(10)  NOT NULL,
	`FIRST_NAME` VARCHAR(50)  NOT NULL,
	`LAST_NAME` VARCHAR(50)  NOT NULL,
	PRIMARY KEY (`CUSTOMER_ID`)
)ENGINE=InnoDB  DEFAULT CHARSET='utf8';
# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
