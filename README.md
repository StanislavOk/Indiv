# symfony-individual


# db creation
```
create database stas_db;
use stas_db;
create table member(
    id int not null AUTO_INCREMENT primary key,
    name nvarchar(255) not null,
    age int null, 
    description text null,
    member_id int null
);
create table memberType(
    id int not null AUTO_INCREMENT primary key,
    name nvarchar(255) not null,
    age int null, 
    description text null,
    warranty int null 
);
```
