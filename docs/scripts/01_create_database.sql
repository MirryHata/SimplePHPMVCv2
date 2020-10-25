CREATE SCHEMA `nw202003` ;
CREATE USER 'demouser'@'%' IDENTIFIED BY 'tecnaFOT';
GRANT ALL ON nw202003.* TO 'demouser'@'%';
