/** Create Database Table **/
create database projects;

use projects;

CREATE TABLE `row`(
    `id` int(11) NOT NULL auto_increment,
    `index` varchar(125),
    `name` varchar(125),
    `program`  varchar(125),
    `semester` varchar(125),
    `mobile` varchar(125),
    `classDate` date,
    `lecturer`  varchar(125),
    `course`  varchar(125),
    PRIMARY KEY (`id`)
);
