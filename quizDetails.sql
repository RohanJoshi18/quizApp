CREATE DATABASE IF NOT EXISTS quizDetails;

DROP TABLE IF EXISTS quiz;
-- question table contains foreign key to specific quiz
DROP TABLE IF EXISTS question;
-- selected and correct answer tables contain 
-- foreign key to point to specific question
DROP TABLE IF EXISTS selected_answer;
DROP TABLE IF EXISTS correct_answer;


CREATE TABLE IF NOT EXISTS quiz {
    quiz_id SMALLINT NOT NULL UNIQUE,
    quiz_name VARCHAR(128),
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