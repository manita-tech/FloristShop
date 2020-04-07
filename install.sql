CREATE TABLE Employee
(
  Employee_Name VARCHAR(40) NOT NULL,
  DOB DATE NOT NULL,
  SSN INT NOT NULL,
  Check_in_time DATE NOT NULL,
  Check_out_time DATE NOT NULL,
  PRIMARY KEY (SSN)
);

CREATE TABLE Customers
(
  Customer_Name VARCHAR(40) NOT NULL,
  Flowers_Ordered INT NOT NULL,
  Selling_price INT NOT NULL,
  Customer_id INT NOT NULL,
  PRIMARY KEY (Customer_id)
);

CREATE TABLE Supplier
(
  Shop_name VARCHAR(40) NOT NULL,
  Supplier_Id INT NOT NULL,
  Address VARCHAR(40) NOT NULL,
  Telephone__No VARCHAR(40) NOT NULL,
  Email_Address VARCHAR(40) NOT NULL,
  Bulk_Price INT NOT NULL,
  PRIMARY KEY (Supplier_Id)
);

CREATE TABLE Flower_for_sale
(
  Date_purchased VARCHAR(40) NOT NULL,
  Date_sold VARCHAR(40) NOT NULL,
  Flower_id INT NOT NULL,
  Customer_id INT NOT NULL,
  PRIMARY KEY (Flower_id),
  FOREIGN KEY (Customer_id) REFERENCES Customers(Customer_id)
);

CREATE TABLE Sells
(
  Flower_id INT NOT NULL,
  SSN INT NOT NULL,
  PRIMARY KEY (Flower_id, SSN),
  FOREIGN KEY (Flower_id) REFERENCES Flower_for_sale(Flower_id),
  FOREIGN KEY (SSN) REFERENCES Employee(SSN)
);

CREATE TABLE Batches
(
  Delivered_time DATE NOT NULL,
  Delivered_date DATE NOT NULL,
  No_of_flowers INT NOT NULL,
  Batch__id INT NOT NULL,
  Type_of_flower VARCHAR(40) NOT NULL,
  Supplier_Id INT NOT NULL,
  PRIMARY KEY (Batch__id),
  FOREIGN KEY (Supplier_Id) REFERENCES Supplier(Supplier_Id)
);

CREATE TABLE Have
(
  Flower_id INT NOT NULL,
  Batch__id INT NOT NULL,
  PRIMARY KEY (Flower_id, Batch__id),
  FOREIGN KEY (Flower_id) REFERENCES Flower_for_sale(Flower_id),
  FOREIGN KEY (Batch__id) REFERENCES Batches(Batch__id)
);

INSERT INTO Employee (Employee_Name,DOB,SSN,Check_in_time,Check_out_time) VALUES ("Demetrius","2019-07-23 ", 1602," 2020-03-08 "," 2020-07-07 "),("Quynn","2019-12-05 ",3499," 2019-05-19 "," 2019-07-28"),("Raphael","2019-09-20 ",6160," 2019-02-08 ","2019-03-08 ");
INSERT INTO Customers (Customer_Name,Flowers_Ordered,Selling_price,Customer_id) VALUES ("Talon","24","41","14"),("Bianca","59","81","27"),("Aphrodie","61","80","91") ;
INSERT INTO Supplier (Shop_Name,Supplier_Id,Address,Telephone__No,Email_Adress,Bulk_Price) VALUES ("Fleur Co ",150," 5606 Ornare Avenue"," 1-313-315-5141"," fleurco@ipsum.us",7),(" Nature beauty.",204," 2432 Lacus. Rd.."," | 1-669-428-7183 "," Nature.enim@eratvel.org ",34),(" Floral Creations",230," 7128 Aenean Rd. "," 1-208-161-8863 "," floral.elit@etrisusQuisque.co.us",13);
INSERT INTO Flower_for_sale (Date_purchased,Date_sold,Flower_id,Customer_id) VALUES ("2019-01-27 14:42:27 "," 2019-01-30 01:37:36 ", 464, 29),(" 2019-01-31 06:43:21 "," 2020-05-23 23:33:15 ", 480, 60),(" 2019-12-05 01:03:47" , "2019-02-05 11:15:59 ",487,57);
INSERT INTO Sells (Flower_id,SSN) VALUES (371,2519),(393,4484),(469,6228);
INSERT INTO Batches (Delivered_time,Delivered_date,No_of_flowers,Batch__id,Type_of_flower,Supplier_Id) VALUES ("2019-03-15 "," 2019-05-22  ", 1536, 48," Yellow Daffodils",141),(" 2020-06-12  "," 2019-08-12 ", 1755, 124," White Lotus",228),(" 2020-01-26 "," 2020-05-18 ",998, 173," Red Roses ",162);
INSERT INTO Have (Flower_id,Batch__Id) VALUES (371,208),(393,224),(469,275);
