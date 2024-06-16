drop table users;
create table users (
	login varchar(16) primary key,
	pass varchar(32)
);

insert into users (login, pass) values
('jean', 'azerty123'),
('jacques', 'qwerty412'),
('patrick', 'password');
