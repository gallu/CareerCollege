・いくつかselect文
	単純にall
select * from char_1;
select * from multi_table;
select num, str, cal from multi_table;
select str, cal, num from multi_table;
select str, cal from multi_table;

	１key指定
select * from multi_table where num = 100;
select * from multi_table where num = 0;

	数値で以上とか以下とか
select * from integer_1;
select * from integer_1 where num > 0;
select * from integer_1 where num < 0;

	BETWEEN
select * from integer_1 where num between 0 and 100;
--
select * from datetime_1;
select * from datetime_1 where cal between '2016-1-1' and '2017-1-1';

	LIKE句
select * from char_1;
insert into char_1 values('a');
insert into char_1 values('abcxyz');
select * from char_1 where str LIKE 'a%';
select * from char_1 where str LIKE 'a__';
select * from char_1 where str LIKE '%';

	ORDER BY
select * from integer_1;
select * from integer_1 ORDER BY num;
select * from integer_1 ORDER BY num DESC;
select * from char_1;
select * from char_1 ORDER BY str;

	LIMIT
select * from char_1 ORDER BY str LIMIT 0, 2;
select * from char_1 ORDER BY str LIMIT 2, 2;

・insert文のset系
insert multi_table set  num=300, str='hoge', cal=now();
select * from multi_table;

・trancate table文

