CREATE TABLE Batches
(
  Delivered_time DATE NOT NULL,
  Delivered_date DATE NOT NULL,
  No_of_flowers INT NOT NULL,
  Batch__id INT NOT NULL,
  PRIMARY KEY (Batch__id)
);

CREATE TABLE Customers
(
  Customer_Name VARCHAR(40) NOT NULL,
  Flowers_Ordered INT NOT NULL,
  Customer_id INT NOT NULL,
  PRIMARY KEY (Customer_id)
);

CREATE TABLE Flower_for_sale
(
  Type_of_flower VARCHAR(40) NOT NULL,
  Flower_id INT NOT NULL,
  Price INT NOT NULL,
  PRIMARY KEY (Flower_id)
);

CREATE TABLE Selects
(
  Flower_id INT NOT NULL,
  Customer_id INT NOT NULL,
  PRIMARY KEY (Flower_id, Customer_id),
  FOREIGN KEY (Flower_id) REFERENCES Flower_for_sale(Flower_id),
  FOREIGN KEY (Customer_id) REFERENCES Customers(Customer_id)
);

CREATE TABLE have
(
  Flower_id INT NOT NULL,
  Batch__id INT NOT NULL,
  PRIMARY KEY (Flower_id, Batch__id),
  FOREIGN KEY (Flower_id) REFERENCES Flower_for_sale(Flower_id),
  FOREIGN KEY (Batch__id) REFERENCES Batches(Batch__id)
);

INSERT INTO Batches (Delivered_time,Delivered_date,No_of_flowers,Batch__id) VALUES ("2020-07-11 18:44:23","2020-07-11 16:53:48",324,34),("2020-07-18 01:09:42","2020-07-18 16:41:19",567,45),("2020-07-22 03:16:54","2020-07-22 06:15:49",800,22);

INSERT INTO Customers (Customer_Name,Flowers_Ordered,Customer_id) VALUES ("Talon","244","14"),("Bianca","459","27"),("Aphrodie","361","80") ;

INSERT INTO Flower_for_sale (Type_of_flower,Flower_id,Price) VALUES ("White Lotus",20,"73.97"),("Red Roses",49,"87.48"),(" Yellow Daffodils ",17,"63.66");

INSERT INTO Selects (Flower_id,Customer_id) VALUES (20,14),(49,27),(17,80);

INSERT INTO have (Flower_id,Batch__id) VALUES (20,34),(49,45),(17,22),




