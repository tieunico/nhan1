//This is the current format of our tables.
/* If you want to creates these tables. You must use sql editor inside
myphpadmin. Remember to erase all the comments line when you are in sql editor.
*/
CREATE TABLE breaker1 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker2 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker3 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker4 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker5 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker6 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker7 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker_8_9 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker_tie (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker_aux (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker_m1 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
);
CREATE TABLE breaker_m2 (
    ID          int AUTO_INCREMENT PRIMARY KEY,
    Status      bit         NOT NULL,
    Voltage     FLOAT(10,3) NOT NULL,
    Current     FLOAT(10,3) NOT NULL,
    Power       FLOAT(10,3) NOT NULL,
    Reg_time    TIMESTAMP
)
