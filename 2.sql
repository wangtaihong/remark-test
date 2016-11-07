---
-- 2、SQL语句撰写 有如下数据表， 表名User
--     Name        Tel                  Content        Date
--     张三     13333663366            大专毕业       2006-10-11
--     张三     13612312331            本科毕业       2006-10-15
--     张四    021-55665566            中专毕业       2006-10-15

-- (a) 有一新记录(小王 13254748547 高中毕业 2007-05-06)要插入数据表，请写出SQL语句 
-- (b) 请用SQL语句把张三的时间更新成为当前系统时间

drop table if exists User;
create table User(
    id mediumint unsigned auto_increment comment "用户ID", 
    name varchar(15) not null comment '用户名',
    tel varchar(15) not null default '' comment "联系电话",
    Content varchar(15) not null default '' comment "学历",
    `date` datetime not null comment '日期',
	primary key(id),
	index name(name)
)engine innodb default charset utf8;

---(a) 有一新记录(小王 13254748547 高中毕业 2007-05-06)要插入数据表
insert into User(name,tel,Content,`date`) 
	values('小王','13254748547','高中毕业','2007-05-06');

--- (b) 请用SQL语句把张三的时间更新成为当前系统时间
update User set `date`=now() where name='张三';
