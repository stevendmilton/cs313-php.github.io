CREATE DATABASE library;

\c library

CREATE TABLE libraryUsers
(
	userId SERIAL NOT NULL PRIMARY KEY,
	userName VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	displayName VARCHAR(100) NOT NULL,
	userAccessRights VARCHAR(5) NOT NULL,
	dateAdded DATE NOT NULL,
	dateModified DATE NOT NULL
);


CREATE TABLE authors
(
	authorId SERIAL NOT NULL PRIMARY KEY,
	firstName VARCHAR(25),
	lastName VARCHAR(25) NOT NULL,
	dateAdded DATE NOT NULL,
	dateModified DATE NOT NULL,
	createdBy INT REFERENCES libraryUsers(userId) NOT NULL
);

CREATE TABLE books
(
	bookId SERIAL NOT NULL PRIMARY KEY,
	authorId INT REFERENCES authors(authorId) NOT NULL,
	title VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	createdBy INT REFERENCES libraryUsers(userId) NOT NULL,
	dateAdded DATE NOT NULL,
	dateModified DATE NOT NULL
);
