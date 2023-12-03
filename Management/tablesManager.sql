CREATE TABLE IF NOT EXISTS users (
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
	remember_token VARCHAR(255) NULL,
	remember_token_created_at TIMESTAMP NULL
);