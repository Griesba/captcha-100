SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

PURGE RECYCLEBIN;
 
DROP TABLE image CASCADE CONSTRAINT PURGE;
DROP TABLE question CASCADE CONSTRAINT PURGE;
DROP TABLE couple CASCADE CONSTRAINT PURGE;

DROP SEQUENCE SeqImage;
DROP SEQUENCE SeqQuestion;
DROP SEQUENCE SeqCouple;
CREATE SEQUENCE SeqImage;
CREATE SEQUENCE SeqQuestion;
CREATE SEQUENCE SeqCouple;

CREATE TABLE image (
IdImage INTEGER,
LienImage VARCHAR2(100) NOT NULL
);

CREATE TABLE question (
IdQuestion INTEGER,
IntituleQuestion VARCHAR2(100) NOT NULL
);

CREATE TABLE couple (
IdCouple INTEGER,
IdImage INTEGER,
IdQuestion INTEGER,
Reponse VARCHAR2(100)
);

ALTER TABLE image
ADD CONSTRAINT PK_image_IdImage
PRIMARY KEY (IdImage); 

ALTER TABLE question
ADD CONSTRAINT PK_question_IdQuestion
PRIMARY KEY (IdQuestion); 

ALTER TABLE couple
ADD CONSTRAINT PK_couple_IdCouple
PRIMARY KEY (IdCouple);

ALTER TABLE couple
ADD CONSTRAINT FK_couple_IdImage
FOREIGN KEY (IdImage) REFERENCES image(IdImage) ON DELETE CASCADE;

ALTER TABLE couple
ADD CONSTRAINT FK_couple_IdQuestion
FOREIGN KEY (IdQuestion) REFERENCES question(IdQuestion) ON DELETE CASCADE;

INSERT INTO image(IdImage, LienImage)
VALUES (SeqImage.nextval, '/img/image1');

INSERT INTO question(IdQuestion, IntituleQuestion)
VALUES (SeqQuestion.nextval, 'Sélectionnez les coeurs sur cette image');

--INSERT INTO couple(IdCouple, IdImage, IdQuestion, Reponse)
--VALUES (SeqCouple.nextval, 1, 1, A DEFINIR (voir JSON));



