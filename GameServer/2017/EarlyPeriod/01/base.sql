-- 数値
-- 	整数
create table integer_1 (
  num tinyint -- -128～127
);
insert into integer_1 values(0);
insert into integer_1 values(-128);
insert into integer_1 values(127);
insert into integer_1 values(-129);
insert into integer_1 values(128);
select * from integer_1;

/*
SQL モード
SET SESSION sql_mode = 'STRICT_ALL_TABLES';
-- SET GLOBAL sql_mode = 'STRICT_ALL_TABLES';
SELECT @@SESSION.sql_mode;
-- SELECT @@GLOBAL.sql_mode;
SHOW VARIABLES LIKE 'sql_mode';
 */
-- モードを変えてから「範囲を超える値」をinsert
SET SESSION sql_mode = 'STRICT_ALL_TABLES';
insert into integer_1 values(-129);
insert into integer_1 values(128);
SET SESSION sql_mode = '';

create table integer_2 (
  num tinyint unsigned -- 0～255
);

create table integer_3 (
  num smallint -- -32768～32767
);

create table integer_4 (
  num smallint unsigned -- 0～65535
);

create table integer_5 (
  num int -- -2147483648～2147483647
);

create table integer_6 (
  num bigint unsigned -- 0～18446744073709551615
);


-- 	小数(浮動小数点型)
create table float_1 (
  num DOUBLE
);
insert into float_1 values(0);
insert into float_1 values(0.1);
insert into float_1 values(0.2);
insert into float_1 values(0.3);
select * from float_1;

-- 	小数(固定小数点型)
create table decimal_1 (
  num DECIMAL(5,2)
);
insert into decimal_1 values(0);
insert into decimal_1 values(0.1);
insert into decimal_1 values(0.12);
insert into decimal_1 values(0.123);
insert into decimal_1 values(10.12);
insert into decimal_1 values(210.12);
insert into decimal_1 values(3210.12);
select * from decimal_1;

/*
 */
-- 文字コードについて少し
show variables like "chara%";
SET NAMES utf8mb4;
show variables like "chara%";


-- 文字列
-- 	charとvarchar
create table char_1 (
   str char(8)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into char_1 values('abc');
insert into char_1 values('');
insert into char_1 values('あ');
insert into char_1 values('あいうえお');
insert into char_1 values('0123456789');
select * from char_1;

create table char_2 (
   str varchar(8)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into char_2 values('abc');

--
create table error_char_1 (
   str char(256)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- 比較にまつわる困りごと
select * from char_1 where str='abc';
select * from char_2 where str='abc';
select * from char_1 where str='abc ';
select * from char_2 where str='abc ';
select * from char_1 where str='ABC ';
select * from char_2 where str='ABC ';

-- 	binary
create table char_3 (
   str varbinary(8)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into char_3 values('abc');
insert into char_3 values('あ');
insert into char_3 values('あいうえお');
select * from char_3;
select * from char_3 where str='abc';
select * from char_3 where str='abc ';
select * from char_3 where str='ABC ';

-- 	textとblob
create table char_4 (
   str text -- 最大65535
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into char_4 values('abc');
select * from char_4 where str='ABC ';

create table char_5 (
   str blob -- 最大65535
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into char_5 values('abc');
select * from char_5 where str='ABC ';

--
create table char_6 (
   str longtext -- 最大4,294,967,295
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

create table char_7 (
   str longblob -- 最大4,294,967,295
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;


/*
 */
-- 日付型
--	date
create table datetime_1 (
   cal date
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into datetime_1 values('2016-10-1');
insert into datetime_1 values('1-1-1');
insert into datetime_1 values('9999-12-31');
insert into datetime_1 values('2016-10-32');
insert into datetime_1 values('10000-1-1');
insert into datetime_1 values('2016-10-1 10:22:33');
select * from datetime_1;

--	time
create table datetime_2 (
   cal time
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into datetime_2 values('00:00:00');
insert into datetime_2 values('23:59:59');
insert into datetime_2 values('23:59:60');
insert into datetime_2 values('24:00:00');
insert into datetime_2 values('28:00:00');
insert into datetime_2 values('2016-10-1 10:22:33');
select * from datetime_2;

--	datetime
create table datetime_3 (
   cal datetime
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into datetime_3 values('2016-10-1 10:22:33');
insert into datetime_3 values('2016-10-1');
insert into datetime_3 values('23:59:59');
select * from datetime_3;

--	timestamp
create table datetime_4 (
   cal timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into datetime_4 values('2016-10-1 10:22:33');
insert into datetime_4 values('2016-10-1');
insert into datetime_4 values('23:59:59');
insert into datetime_4 values('1970-1-1 00:00:01'); -- 協定世界時(UTC)での基準
insert into datetime_4 values('1970-1-1 09:00:01'); -- 日本時間での基準(+9)
insert into datetime_4 values('1970-1-1 09:00:00');
insert into datetime_4 values('2038-01-19 03:14:07'); -- 協定世界時(UTC)での基準
insert into datetime_4 values('2038-01-19 12:14:07'); -- 日本時間での基準(+9)
insert into datetime_4 values('2038-01-19 12:14:08');
select * from datetime_4;

-- 複数のカラムを持つテーブルの作成とinsert
create table multi_table (
    num int,
    str varchar(16),
    cal datetime
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into multi_table(num, str, cal) values(100, 'name', '2016-10-1 10:22:33');
insert into multi_table(num, str, cal) values(200, 'name2', now());
select * from multi_table;

---------------
-- 好きなゲームの「１人のPCを表す」テーブルを組んでみる

---------------
-- default
--	NULL
insert into multi_table(num) values(300);
select * from multi_table;

--	IS NOT NULL
create table multi_table_2 (
    num int not null,
    str varchar(16)  not null,
    cal datetime  not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into multi_table_2(num, str, cal) values(100, 'name', '2016-10-1 10:22:33');
insert into multi_table_2(num, str, cal) values(200, 'name2', now());
insert into multi_table_2(num) values(300);
select * from multi_table_2;
＞＞
mysql> insert into multi_table_2(num) values(300);
ERROR 1364 (HY000): Field 'str' doesn't have a default value
＜＜
--
SET SESSION sql_mode = 'STRICT_ALL_TABLES';
insert into multi_table_2(num) values(400);
select * from multi_table_2;
SET SESSION sql_mode = '';

--	特定の値
create table multi_table_3 (
    num int not null default 999,
    str varchar(16)  not null default 'hoge',
    cal datetime  not null default '1234-1-1 10:22:33'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into multi_table_3(num, str, cal) values(100, 'name', '2016-10-1 10:22:33');
insert into multi_table_3(num, str, cal) values(100, 'name222', '2016-10-1 10:22:33');
insert into multi_table_3(num) values(200);
insert into multi_table_3(str) values('name2');
select * from multi_table_3;


-- PK
create table multi_table_4 (
    num int not null default 0,
    str varchar(16)  not null default 'hoge',
    cal datetime  not null default '1234-1-1 10:22:33',
    PRIMARY KEY(num)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into multi_table_4(num, str, cal) values(100, 'name', '2016-10-1 10:22:33');
insert into multi_table_4(num, str, cal) values(100, 'name222', '2016-10-1 10:22:33');
select * from multi_table_4;

--	auto increment
create table multi_table_5 (
    num int not null auto_increment,
    str varchar(16)  not null default 'hoge',
    cal datetime  not null default '1234-1-1 10:22:33',
    PRIMARY KEY(num)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
insert into multi_table_5(str, cal) values('name', '2016-10-1 10:22:33');
insert into multi_table_5(str, cal) values('name222', '2016-10-1 10:22:33');
select * from multi_table_5;
--
insert into multi_table_5(num, str, cal) values(4, 'name333', '2016-10-1 10:22:33');
insert into multi_table_5(str, cal) values('name444', '2016-10-1 10:22:33');
select * from multi_table_5;

-- 実際によくあるauto increment
create table multi_table_6 (
    id bigint unsigned not null auto_increment, -- 負の値はいらない ＆ 大きいほうがとり回しがききやすい
    str varchar(16)  not null default 'hoge',
    PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;


-- index


---------------
好きなゲームの「１人のPCを表す」テーブルに、PKなどの必要な情報を組み込んでみる



