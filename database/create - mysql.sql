CREATE TABLE tb_innovation_area (
  innovation_area_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  innovation_area_description VARCHAR(255)  NOT NULL    ,
PRIMARY KEY(innovation_area_id));


INSERT INTO tb_innovation_area(innovartion_area_id, innovation_area_description) 
VALUES (1,'Produto')

INSERT INTO tb_innovation_area(innovartion_area_id, innovation_area_description)  
VALUES (2,'Processo')

INSERT INTO tb_innovation_area(innovartion_area_id, innovation_area_description)  
VALUES (3,'Organizacional')

INSERT INTO tb_innovation_area(innovartion_area_id, innovation_area_description)  
VALUES (4,'Marketing')

INSERT INTO tb_innovation_area(innovartion_area_id, innovation_area_description)  
VALUES (5,'Modelo de Negócio')




CREATE TABLE tb_user (
  user_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  user_login VARCHAR(255)  NOT NULL  ,
  user_password VARCHAR(45)  NOT NULL  ,
  user_fisrt_name VARCHAR(45)  NOT NULL  ,
  user_last_name VARCHAR(45)  NOT NULL  ,
  user_date_time_register TIMESTAMP  NULL  ,
  user_is_active BOOL  NULL  ,
  user_job_title VARCHAR(45)  NULL    ,
PRIMARY KEY(user_id));



CREATE TABLE tb_company (
  company_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  company_name VARCHAR(255)  NOT NULL  ,
  company_email VARCHAR(255)  NOT NULL  ,
  company_password VARCHAR(45)  NULL  ,
  company_is_active BOOL  NULL    ,
PRIMARY KEY(company_id));



CREATE TABLE tb_notification (
  notification_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  user_id INTEGER UNSIGNED  NOT NULL  ,
  notification_msg VARCHAR(255)  NULL  ,
  notification_create_at TIMESTAMP  NULL  ,
  notification_is_read BOOL  NULL    ,
PRIMARY KEY(notification_id)  ,
INDEX tb_notification_FKIndex1(user_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE tb_challenge (
  challenge_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  tb_company_company_id INTEGER UNSIGNED  NOT NULL  ,
  challenge_title VARCHAR(45)  NOT NULL  ,
  challenge_description VARCHAR(255)  NOT NULL  ,
  challenge_create_at TIMESTAMP  NOT NULL    ,
PRIMARY KEY(challenge_id)  ,
INDEX tb_challenge_FKIndex1(tb_company_company_id),
  FOREIGN KEY(tb_company_company_id)
    REFERENCES tb_company(company_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE tb_idea (
  idea_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  challenge_id INTEGER UNSIGNED  NOT NULL  ,
  user_id INTEGER UNSIGNED  NOT NULL  ,
  innovation_area_id INTEGER UNSIGNED  NULL  ,
  idea_title VARCHAR(45)  NOT NULL  ,
  idea_decription VARCHAR(255)  NOT NULL  ,
  idea_date_time TIMESTAMP  NOT NULL  ,
  idea_is_public BOOL  NULL    ,
PRIMARY KEY(idea_id)  ,
INDEX tb_idea_FKIndex1(innovation_area_id)  ,
INDEX tb_idea_FKIndex2(user_id)  ,
INDEX tb_idea_FKIndex3(challenge_id),
  FOREIGN KEY(innovation_area_id)
    REFERENCES tb_innovation_area(innovation_area_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(challenge_id)
    REFERENCES tb_challenge(challenge_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE tb_project (
  project_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  idea_id INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(project_id)  ,
INDEX tb_porject_FKIndex1(idea_id),
  FOREIGN KEY(idea_id)
    REFERENCES tb_idea(idea_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE tb_team (
  user_id INTEGER UNSIGNED  NOT NULL  ,
  project_id INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(user_id, project_id)  ,
INDEX tb_user_has_tb_porject_FKIndex1(user_id)  ,
INDEX tb_user_has_tb_porject_FKIndex2(project_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(project_id)
    REFERENCES tb_project(project_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE tb_comment (
  comment_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  user_id INTEGER UNSIGNED  NOT NULL  ,
  idea_id INTEGER UNSIGNED  NOT NULL  ,
  comment_description INTEGER UNSIGNED  NULL  ,
  comment_create_at TIMESTAMP  NULL    ,
PRIMARY KEY(comment_id)  ,
INDEX tb_comment_FKIndex1(idea_id)  ,
INDEX tb_comment_FKIndex2(user_id),
  FOREIGN KEY(idea_id)
    REFERENCES tb_idea(idea_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE tb_like_idea (
  like_idea_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  user_id INTEGER UNSIGNED  NOT NULL  ,
  idea_id INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(like_idea_id)  ,
INDEX tb_like_idea_FKIndex1(idea_id)  ,
INDEX tb_like_idea_FKIndex2(user_id),
  FOREIGN KEY(idea_id)
    REFERENCES tb_idea(idea_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);




