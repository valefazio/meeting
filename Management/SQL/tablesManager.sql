CREATE TABLE IF NOT EXISTS users (
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL PRIMARY KEY,
    pass_hash VARCHAR(255) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT FALSE,
	remember_token VARCHAR(255) NULL,
	remember_token_created_at TIMESTAMP NULL
);

CREATE TABLE IF NOT EXISTS Managers (
    manager_name VARCHAR(255) DEFAULT NULL,
    manager_email VARCHAR(255) NOT NULL PRIMARY KEY,
    manager_phone VARCHAR(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS Countries (
    CountryCode CHAR(3) PRIMARY KEY,
    FullName VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS Eap (
	CountryCode VARCHAR(255) PRIMARY KEY,
    FullName VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS Athletes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    category CHAR(1) NOT NULL,
    birthdate DATE,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    citizenship VARCHAR(255) NOT NULL,
    eap VARCHAR(255),
    manager_email VARCHAR(255) DEFAULT NULL,
    IRC_certificate VARCHAR(255),
    stato CHAR(1) NOT NULL,	--codice da una lettera A: Accettato, D: DaDecidere, R: Rifiutato, W: Waitlist
	registration_date DATE NOT NULL DEFAULT CURRENT_DATE,
    FOREIGN KEY (manager_email) REFERENCES Managers(manager_email) ON DELETE SET NULL,
	FOREIGN KEY (eap) REFERENCES Eap(CountryCode),
    FOREIGN KEY (citizenship) REFERENCES Countries(CountryCode)
);

CREATE TABLE IF NOT EXISTS Competitions (
    id INT NOT NULL PRIMARY KEY,    --id dell'atleta
    comp1 VARCHAR(255) NOT NULL,
    pts1 INT,
    comp2 VARCHAR(255),
    pts2 INT,
    link VARCHAR(255),
    FOREIGN KEY (id) REFERENCES Athletes(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Org_details (
    id INT NOT NULL PRIMARY KEY,    --id dell'atleta
    note_atle VARCHAR(500),
	note VARCHAR(500),
	arrivo DATE,
	ora_arrivo TIMESTAMP NULL,
	partenza DATE,
	ora_partenza TIMESTAMP NULL,
	paghiamo BOOLEAN DEFAULT 0,
	richieste_alloggio VARCHAR(500),
	pahiamo_soloCibo BOOLEAN DEFAULT 0,
	ingaggio INT,
    FOREIGN KEY (id) REFERENCES Athletes(id) ON DELETE CASCADE
)
