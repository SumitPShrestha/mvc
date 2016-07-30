CREATE TABLE online_test.options
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `option` VARCHAR(200),
    isAnswer BOOLEAN,
    question_id INT
