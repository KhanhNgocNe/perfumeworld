CREATE TABLE category (
  Cat_ID varchar(10) NOT NULL,
  Cat_Name varchar(30) NOT NULL,
  Cat_Des varchar(1000) DEFAULT NULL,
  PRIMARY KEY (Cat_ID)
) ;
CREATE TABLE customer (
  Username varchar(20) NOT NULL,
  Password varchar(40) NOT NULL,
  CustName varchar(30) NOT NULL,
  gender int NOT NULL,
  Address varchar(1000) NOT NULL,
  telephone varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  CusDate int NOT NULL,
  CusMonth int NOT NULL,
  CusYear int NOT NULL,
  SSN varchar(10) DEFAULT NULL,
  ActiveCode varchar(100) NOT NULL,
  state int NOT NULL,
	PRIMARY KEY (Username)
);
INSERT INTO customer (Username, Password, CustName, gender, Address, telephone, email, CusDate, CusMonth, CusYear, SSN, ActiveCode, state) VALUES
('kn040301', 'e10adc3949ba59abbe56e057f20f883e', 'Duong Khanh Ngoc', 0, '70 le lai street, An Phu, Ning Kieu, Can Tho city', '0779814377', 'knnn0400@gmail.com', 4, 3, 2001, '', '', 0),
('ngocdk', 'e10adc3949ba59abbe56e057f20f883e', 'Duong Khanh Ngoc', 1, 'Can Tho', '0779814377', 'ngocdk@gmail.com', 4, 3, 2001, '', '', 0);
CREATE TABLE product (
  Product_ID varchar(10) NOT NULL,
  Product_Name varchar(30) NOT NULL,
  Price bigint NOT NULL,
  DetailDesc text NOT NULL,
  ProDate timestamp(0) NOT NULL,
  Pro_qty int NOT NULL,
  Pro_image varchar(200) NOT NULL,
  Cat_ID varchar(10) NOT NULL,
	PRIMARY KEY (Product_ID),
	FOREIGN KEY (Cat_ID) REFERENCES category (Cat_ID)
) ;