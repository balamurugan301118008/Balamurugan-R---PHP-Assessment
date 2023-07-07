
drop database music_application;
create database music_application;

create table admin(
id int not null AUTO_INCREMENT,
name varchar(255),
email varchar(255),
password varchar (255),
deleted_at timestamp,
created_at timestamp,
updated_at timestamp,
PRIMARY key(id)
);

create table users(
id int not null AUTO_INCREMENT,
admin_id int,
user_name varchar(255),
deleted_at timestamp,
created_at timestamp,
updated_at timestamp,
PRIMARY key(id),
foreign key(admin_id) references users(id)
);
create table songs(
id int not null AUTO_INCREMENT,
user_id int,
song_name varchar(255),
artist_name varchar(255),
deleted_at timestamp,
created_at timestamp,
updated_at timestamp,
PRIMARY key(id)
);

INSERT INTO songs (user_id, song_name, artist_name)
VALUES (value1, value2, value3, ...);