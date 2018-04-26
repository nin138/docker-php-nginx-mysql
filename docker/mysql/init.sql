CREATE DATABASE test;

grant select,update,insert on test.* to user;
use test;
CREATE TABLE test (
  id INT AUTO_INCREMENT primary key ,
  date DATETIME
);

