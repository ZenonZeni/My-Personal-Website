create table Account(userID INTEGER NOT NULL AUTO_INCREMENT, firstName varchar(50), lastName varchar(50), username varchar(50) NOT NULL, userpassword varchar(50) NOT NULL, privillege varchar(3),
email varchar(50), phoneNum varchar(50), birthDate Date, secondEmail varchar(50), secureQuestion varchar(50), secureAnswer varchar(50),
PRIMARY KEY userID
);

create table Booking();