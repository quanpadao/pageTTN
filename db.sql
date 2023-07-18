CREATE TABLE `User` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `username` varchar,
  `password` varchar,
  `created_at` timestamp
);

CREATE TABLE `Student` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(255),
  `last_name` varchar(255) NOT NULL,
  `DOB` integer,
  `type` integer
);

CREATE TABLE `Video` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `url_video` varchar(255),
  `note` varchar(255)
);

CREATE TABLE `Class` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `note` varchar(255)
);


