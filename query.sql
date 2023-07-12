
drop database music_application;
create database music_application;



create table users (
id int auto_increment,
user_name varchar(255),
password varchar (255),
is_premium int null,
is_admin int,
created_at timestamp ,
updated_at timestamp ,
primary key(id)
);


create table songs (
id int auto_increment,
name varchar(255),
song_path varchar (255),
song_image varchar(255),
playlist_id int null,
artists_id int,
created_at timestamp ,
updated_at timestamp ,
primary key(id)
);

create table artists(
id int auto_increment,
name varchar(255),
song_id int,
primary key (id),
created_at timestamp ,
updated_at timestamp ,
foreign key (song_id) references songs(id)

);

create table playList(
id int auto_increment,
name varchar(255),
created_at timestamp ,
updated_at timestamp ,
primary key (id)
)