CREATE TABLE games (
       id INT AUTO_INCREMENT PRIMARY KEY,
       tour INT NOT NULL
);

CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       email VARCHAR(255) NOT NULL,
       password VARCHAR(255) NOT NULL,
       created DATETIME,
       modified DATETIME
);

CREATE TABLE sheets (
       id INT AUTO_INCREMENT PRIMARY KEY,
       cases VARCHAR(255) DEFAULT '-1,-1,0,0,0,-1,0,0,0,0,0,0|-1,0,0,0,0,0,-1,0,0,0,0,-1|0,0,0,0,-1,0,0,0,0,0,-1,-1',
       nb_croix ENUM('0', '1', '2', '3', '4') NOT NULL,
       num_joueur INT NOT NULL,
       game_id INT NOT NULL,
       user_id INT NOT NULL,
       FOREIGN KEY game_key(game_id) REFERENCES games(id),
       FOREIGN KEY user_key(user_id) REFERENCES users(id)     
);
