CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone INT NOT NULL,
    zip VARCHAR(255) NOT NULL,
    upgraded BOOL NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE restaurants (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    restaurant_type VARCHAR(255) NOT NULL,
    food_type VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    rating VARCHAR(3) NOT NULL,
    address VARCHAR(255) NOT NULL,
    zip_ VARCHAR(5) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id) REFERENCES users(id)
);

CREATE TABLE thread (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    message VARCHAR(2000) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id) REFERENCES users(id)
);

CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(2000) NOT NULL,
    created_at DATETIME  DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id) REFERENCES users(id),
    FOREIGN KEY(id) REFERENCES thread(id)
);