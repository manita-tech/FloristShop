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
