CREATE TABLE online_test.question
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    question VARCHAR(500),
    type INT,
    subject VARCHAR(50),
    dfficultyLevel INT
);