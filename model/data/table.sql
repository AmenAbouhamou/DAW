CREATE TABLE USER (
                      ID INT NOT NULL AUTO_INCREMENT,
                      NOM VARCHAR(255) NOT NULL,
                      PRENOM VARCHAR(255) NOT NULL,
                      EMAIL VARCHAR(255) NULL,
                      GROUPE VARCHAR(15) NOT NULL,
                      NIVEAU INT NULL ,
                      USERNAME VARCHAR(255) NOT NULL,
                      PASSWORD VARCHAR(255) NOT NULL,
                      ROLE VARCHAR(255) NOT NULL,
                      CREATED_AT DATETIME NOT NULL,
                      PRIMARY KEY (ID)
);
CREATE TABLE COURSE (
                        ID INT NOT NULL AUTO_INCREMENT,
                        NAME VARCHAR(255) NOT NULL,
                        AUTHOR_ID INT NOT NULL,
                        FILE_PATH VARCHAR(255) NOT NULL,
                        DESCRIPTION VARCHAR(1000) NOT NULL,
                        CREATED_AT DATETIME NOT NULL,
                        PRIMARY KEY (ID),
                        FOREIGN KEY (AUTHOR_ID) REFERENCES USER(ID)
);

CREATE TABLE TEST (
                      ID INT NOT NULL AUTO_INCREMENT,
                      NAME VARCHAR(255) NOT NULL,
                      COURSE_ID INT NOT NULL,
                      CREATED_AT DATETIME NOT NULL,
                      PRIMARY KEY (ID),
                      FOREIGN KEY (COURSE_ID) REFERENCES COURSE(ID)
);

CREATE TABLE FOLLOWED_COURSE (
                                 ID INT NOT NULL AUTO_INCREMENT,
                                 USER_ID INT NOT NULL,
                                 COURSE_ID INT NOT NULL,
                                 PRIMARY KEY (ID),
                                 FOREIGN KEY (USER_ID) REFERENCES USER(ID),
                                 FOREIGN KEY (COURSE_ID) REFERENCES COURSE(ID)
);

CREATE TABLE FORUM_DISCUSSION (
                                  ID INT NOT NULL AUTO_INCREMENT,
                                  USER_ID INT NOT NULL,
                                  COURSE_ID INT NOT NULL,
                                  TITLE VARCHAR(255) NOT NULL,
                                  CREATED_AT DATETIME NOT NULL,
                                  PRIMARY KEY (ID),
                                  FOREIGN KEY (USER_ID) REFERENCES USER(ID),
                                  FOREIGN KEY (COURSE_ID) REFERENCES COURSE(ID)
);

CREATE TABLE FORUM_MESSAGE (
                               ID INT NOT NULL AUTO_INCREMENT,
                               USER_ID INT NOT NULL,
                               DISCUSSION_ID INT NOT NULL,
                               CONTENT VARCHAR(256) NOT NULL,
                               CREATED_AT DATETIME NOT NULL,
                               PRIMARY KEY (ID),
                               FOREIGN KEY (USER_ID) REFERENCES USER(ID),
                               FOREIGN KEY (DISCUSSION_ID) REFERENCES FORUM_DISCUSSION(ID)
);
