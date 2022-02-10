CREATE DATABASE IF NOT EXISTS quizDetails;


DROP TABLE IF NOT EXISTS userDetails;
DROP TABLE IF EXISTS quiz;
-- question table contains foreign key to specific quiz
DROP TABLE IF EXISTS question;
-- selected and correct answer tables contain
-- foreign key to point to specific question
DROP TABLE IF EXISTS selected_answer;
DROP TABLE IF EXISTS correct_answer;

-- SQL create table statements

CREATE TABLE IF NOT EXISTS userDetails {
    id BIGINT NOT NULL UNIQUE 0-65536,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
};

CREATE TABLE IF NOT EXISTS quiz {
    quiz_id SMALLINT NOT NULL UNIQUE,
    quiz_name VARCHAR(255),
    available CHECK(available),
    PRIMARY KEY (quiz_id)
};

CREATE TABLE IF NOT EXISTS question {
    question_id SMALLINT NOT NULL UNIQUE,
    question_name VARCHAR(255),
    quiz_assoc SMALLINT NOT NULL,
    PRIMARY KEY (question_id),
    FOREIGN KEY (quiz_assoc) REFERENCES quiz(quiz_id)
};

CREATE TABLE IF NOT EXISTS selected_answer {
    answer_id INT NOT NULL UNIQUE,
    question_id SMALLINT NOT NULL,
    PRIMARY KEY (answer_id),
    FOREIGN KEY (question_id) REFERENCES question(question_id)
};

CREATE TABLE IF NOT EXISTS correct_answer {
    answer_id INT NOT NULL UNIQUE,
    question_id SMALLINT NOT NULL,
    PRIMARY KEY (answer_id),
    FOREIGN KEY (question_id) REFERENCES question(question_id)
};

-- SQL queries for database