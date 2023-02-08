CREATE TABLE categories (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE expenses (
    id NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    category_id int NOT NULL,
    expense float(5,2) NOT NULL,
    date date NOT NULL,
    PRIMARY KEY (id)
    FOREIGN KEY (category_id) REFERENCES categories(id)
);