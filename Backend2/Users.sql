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

CREATE TABLE food_types (
	food_type VARCHAR(255) NOT NULL PRIMARY KEY
);

CREATE TABLE rest_types (
	rest_type VARCHAR(255) NOT NULL PRIMARY KEY
);

CREATE TABLE restaurants (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    rest_type VARCHAR(255) NOT NULL,
    food_type VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    rating VARCHAR(3) NOT NULL,
    address VARCHAR(255) NOT NULL,
    zip_ VARCHAR(5) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(id),
    FOREIGN KEY(food_type) REFERENCES food_types(food_type),
	FOREIGN KEY(rest_type) REFERENCES rest_types(rest_type)
);

CREATE TABLE bookmarks (
	rest_id INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY(rest_id) REFERENCES restaurants(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE review (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    rate VARCHAR(3) NOT NULL,
    message VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    rest_id INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(id),
    FOREIGN KEY(rest_id) REFERENCES restaurants(id)
);

CREATE TABLE thread (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    message VARCHAR(2000) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    thread_id INT NOT NULL,
    message VARCHAR(2000) NOT NULL,
    created_at DATETIME  DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(id),
    FOREIGN KEY(thread_id) REFERENCES thread(id)
);