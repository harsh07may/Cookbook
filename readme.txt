create database called regis

run the following query under SQL in your db

CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL
)

CREATE TABLE Recipe (
   rid MEDIUMINT not null AUTO_INCREMENT,   
   username  varchar(40),
   rtitle varchar(100)not null,
   rServNum int default null,
   HCookTime varchar default null,  /*for hours*/
   MCookTime varchar default null,  /*for minutes*/
   rcategory varchar(255) not null,
   primary key (rid), 
   foreign key (username) references Users(username)
)

CREATE TABLE Ingredients (
   rid MEDIUMINT  not null,
   Ingredient TEXT not null,
   primary key (rid),
   foreign key (rid) references Recipe(rid)
)

CREATE TABLE Steps(   
   rid     MEDIUMINT  not null, 
   s_id    MEDIUMINT  not null,
   s_description TEXT not null,
   primary key (rid, step_id),
   foreign key (rid) references Recipe(rid),   
)

copy the folder and paste it in C:\xampp\htdocs\folder_name

start xamp and turn on apache and mysql server

go to browser and redirect to localhost/folder_name
