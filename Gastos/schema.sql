CREATE TABLE categories (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL
     
);

CREATE TABLE expenses (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(255) NOT NULL,
    category_id int NOT NULL,
    expense float(5,2) NOT NULL,
    date date NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories (id)
);