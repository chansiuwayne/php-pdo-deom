create database blog;

use blog;

CREATE TABLE posts(
    id int auto_increment primary key,
    title varchar(255) not null,
    body TEXT not null,
    create_at TIMESTAMP default current_timestamp
);


show tables; 

INSERT into posts (title, body) value ('post one', 'this is post one');
INSERT into posts (title, body) value ('post two', 'this is post two');
INSERT into posts (title, body) value ('post three', 'this is post three');
INSERT into posts (title, body) value ('post four', 'this is post four');


SELECT * FROM posts;
SELECT title, body FROM posts;


select * from posts where title = "post one";


SELECT * FROM users WHERE location='Massachusetts';
SELECT * FROM users WHERE location='Massachusetts' AND dept='sales';
SELECT * FROM users WHERE is_admin = 1;
SELECT * FROM users WHERE is_admin > 0;


update posts set body = 'this is the update posts' where id = 2;