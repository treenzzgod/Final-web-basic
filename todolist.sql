
CREATE TABLE tasks (
    id_task INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_task)
);
CREATE TABLE users (
    id_user INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_user)
);
-- insert user
INSERT INTO users (username, password)
VALUES ('admin', 'admin');
-- insert tasks
INSERT INTO tasks (title, description, status)
VALUES ('Task 1', 'Description 1', 'done');