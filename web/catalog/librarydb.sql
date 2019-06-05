CREATE DATABASE library;

\c library

CREATE TABLE authors
(
	authorId SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(50),
	dateAdded DATE NOT NULL,
	dateModified DATE NOT NULL
);

CREATE TABLE books
(
	bookId SERIAL NOT NULL PRIMARY KEY,
	authorId INT REFERENCES authors(authorId),
	title VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	dateAdded DATE NOT NULL,
	dateModified DATE NOT NULL
);
