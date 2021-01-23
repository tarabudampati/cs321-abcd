CREATE TABLE dances (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(500) NOT NULL,
    did_you_know VARCHAR(255)  NOT NULL,
    type VARCHAR(25) NOT NULL COMMENT 'classical, folk, other',
    state_name VARCHAR(25) DEFAULT NULL,
    key_words VARCHAR(500) DEFAULT NULL COMMENT 'any key words separate by comma',
    status VARCHAR(25) NOT NULL  DEFAULT 'proposed' COMMENT 'proposed, approved, writeup_done, art_work_done, designed, completed',
    image_url VARCHAR(100) NOT NULL,
    notes VARCHAR(500)
);