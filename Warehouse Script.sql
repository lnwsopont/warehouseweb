drop database warehouse;
create database warehouse;
use warehouse;

create table Zone(

	Zone_id varchar(20),
	Zone_name varchar(20),
	Sub_zone varchar(20),
	Zone_capacity int,
    Zone_description text,
	primary key(Zone_id) 
);
INSERT INTO Zone(Zone_id,Zone_name,Sub_zone,Zone_capacity, Zone_description ) 
VALUES ('Z001','A','A1','8','Delivery Goods');
INSERT INTO Zone(Zone_id,Zone_name,Sub_zone,Zone_capacity, Zone_description) 
VALUES ('Z002','A','A2','8','Delivery Goods');
INSERT INTO Zone(Zone_id,Zone_name,Sub_zone,Zone_capacity, Zone_description) 
VALUES ('Z003','A','A3','8','Self-Pickup');
INSERT INTO Zone(Zone_id,Zone_name,Sub_zone,Zone_capacity, Zone_description) 
VALUES ('Z004','B','B1','8','Short-Term Container Storage');
INSERT INTO Zone(Zone_id,Zone_name,Sub_zone,Zone_capacity, Zone_description) 
VALUES ('Z005','B','B2','8','Container Shipping');
INSERT INTO Zone(Zone_id,Zone_name,Sub_zone,Zone_capacity, Zone_description) 
VALUES ('Z006','B','B3','8','Long-Term Container Storage');




create table employee_info
(
	Employee_id varchar(5),
	Employee_name varchar(32),
	Employee_username varchar(50),
	Employee_pword varchar(50),
	Employee_phone int(10),
	Employee_email varchar(32),
	Employee_address longtext,
	Employee_level int(5),
    Zone_id varchar(20),
	PRIMARY KEY (Employee_id),
	constraint foreign key (Zone_id) references Zone (Zone_id)
    
);

INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E001','Sakol','SKB','sakol','0812384392','tarun151196@gmail.com','Bangkok','1','Z001');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E002','Sahib','SHB','sahib','0871249310','skysahib@gmail.com','Ubon','1','Z001');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E003','Soap','SPN','soap','0812525312','soap@gmail.com','Rayong','1','Z002');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E004','Radhika','RDK','radhika','0812388311','radhika@gmail.com','Bangkok','2','Z002');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E005','Queeny','QNY','queeny','0891024011','queeny@gmail.com','Chiang Mai','1','Z003');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E006','Nak','NKK','nak','0812334410','nak@gmail.com','Bangkok','2','Z004');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E007','Praew','PRW','praew','0819944661','praew@gmail.com','Bangkok','1','Z004');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E008','ThingThing','THG','thing','0813384011','thingthing@gmail.com','Bangkok','0','Z005');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E009','Jazz','JZZ','jazz','0882314692','jazz@gmail.com','Bangkok','2','Z006');
INSERT INTO employee_info(Employee_id,Employee_name,Employee_username,Employee_pword,Employee_phone,Employee_email,Employee_address,Employee_level,Zone_id)
VALUES ('E010','Sterling','SLG','sterling','0822444192','sterling@gmail.com','Manchester','3','Z006');



create table Blocks(

	Block_id varchar(20),
	Block_used int,
	Block_capacity int,
	Zone_id varchar(20),
	primary key(Block_id),
	constraint foreign key (Zone_id) references Zone (Zone_id)
);
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B001','1','4','Z001');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B002','0','4','Z001');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B003','0','4','Z002');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B004','1','4','Z002');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B005','0','4','Z003');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B006','0','4','Z003');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B007','1','4','Z004');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B008','1','4','Z004');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B009','0','4','Z005');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B010','0','4','Z005');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B011','0','4','Z006');
INSERT INTO Blocks(Block_id,Block_used,Block_capacity,Zone_id) 
VALUES ('B012','1','4','Z006');

create table Shelf(

	Shelf_id varchar(20),
	Shelf_capacity int,
	Shelf_used int,
	Block_id varchar(20),
	primary key(Shelf_id),
	constraint foreign key (Block_id) references Block (Block_id)
);
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S001','2','1','B001');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S002','2','0','B001');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S003','2','0','B002');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S004','2','0','B002');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S005','2','0','B003');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S006','2','0','B003');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S007','2','0','B004');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S008','2','1','B004');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S009','2','0','B005');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S010','2','0','B005');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S011','2','0','B006');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S012','2','0','B006');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S013','2','1','B007');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S014','2','0','B007');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S015','2','0','B008');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S016','2','1','B008');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S017','2','0','B009');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S018','2','0','B009');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S019','2','0','B010');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S020','2','0','B010');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S021','2','0','B011');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S022','2','0','B011');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S023','2','0','B012');
INSERT INTO Shelf(Shelf_id,Shelf_capacity,Shelf_used,Block_id)
VALUES ('S024','2','1','B012');

create table Sub_shelf(

	Sub_id varchar(20),
	Sub_status text,
	Shelf_id varchar(20),
	primary key(Sub_id),
	constraint foreign key (Shelf_id) references Shelf (Shelf_id)
);
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB001','Not Vacant','S001');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB002','Vacant','S001');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB003','Vacant','S002');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB004','Vacant','S002');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB005','Vacant','S003');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB006','Vacant','S003');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB007','Vacant','S004');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB008','Vacant','S004');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB009','Vacant','S005');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB010','Vacant','S005');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB011','Vacant','S006');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB012','Vacant','S006');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB013','Vacant','S007');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB014','Vacant','S007');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB015','Not Vacant','S008');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB016','Vacant','S008');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB017','Vacant','S009');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB018','Vacant','S009');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB019','Vacant','S010');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB020','Vacant','S010');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB021','Vacant','S011');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB022','Vacant','S011');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB023','Vacant','S012');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB024','Vacant','S012');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB025','Not Vacant','S013');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB026','Vacant','S013');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB027','Vacant','S014');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB028','Vacant','S014');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB029','Vacant','S015');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB030','Vacant','S015');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB031','Vacant','S016');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB032','Not Vacant','S016');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB033','Vacant','S017');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB034','Vacant','S017');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB035','Vacant','S018');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB036','Vacant','S018');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB037','Vacant','S019');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB038','Vacant','S019');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB039','Vacant','S020');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB040','Vacant','S020');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB041','Vacant','S021');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB042','Vacant','S021');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB043','Vacant','S022');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB044','Vacant','S022');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB045','Vacant','S023');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB046','Vacant','S023');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB047','Not Vacant','S024');
INSERT INTO Sub_shelf(Sub_id,Sub_status,Shelf_id)
VALUES ('SB048','Vacant','S024');




create table Container_price(

	Con_price_type varchar(30),
	Con_price int,
    Days int,
	primary key(Con_price_type)
);
INSERT INTO Container_price(Con_price_type,Con_price,Days)
VALUES('Long-term Storage','20000','45');
INSERT INTO Container_price(Con_price_type,Con_price,Days)
VALUES('Short-term Storage','25000','15');
INSERT INTO Container_price(Con_price_type,Con_price,Days)
VALUES('Shipping Container','30000','0');





create table Container_inventory(

	Serial_num varchar(20) PRIMARY KEY REFERENCES product(Serial_num),
	Con_size int,
	con_status text,
	Duration int,
	Con_price_type varchar(30),
	constraint foreign key (Con_price_type) references Container_price (con_price_type)
);

INSERT INTO Container_inventory(Serial_num,Con_size,con_status,Duration,Con_price_type)
VALUES ('C001','200000','In Warehouse','10','Short-Term Storage');
INSERT INTO Container_inventory(Serial_num,Con_size,con_status,Duration,Con_price_type)
VALUES ('C002','400000','In Warehouse','15','Short-Term Storage');
INSERT INTO Container_inventory(Serial_num,Con_size,con_status,Duration,Con_price_type)
VALUES ('C003','200000','In Warehouse','55','Long-Term Storage');
INSERT INTO Container_inventory(Serial_num,Con_size,con_status,Duration,Con_price_type)
VALUES ('C004','100000','Out for Delivery','8','Shipping');
INSERT INTO Container_inventory(Serial_num,Con_size,con_status,Duration,Con_price_type)
VALUES ('C005','300000','Recieved','9','Shipping');


create table Truck(

	Truck_id varchar(20),
	Truck_year year,
	Truck_price int,
	Truck_insurance text,
	Truck_Lastcheck DATETIME,
	Truck_status text,
	Employee_id varchar(5),
	primary key(Truck_id),
	constraint foreign key (Employee_id) references employee (Employee_id)
);
insert into Truck values ('T001','2002','1200000','Yes','12-04-17 16:00:00','Yes','E002');
insert into Truck values ('T002','2004','1200000','No','15-05-17 16:00:00','No','E003');
insert into Truck values ('T003','2008','1600000','Yes','11-08-17 16:00:00','No','E002');
insert into Truck values ('T004','2015','2000000','Yes','02-04-16 16:00:00','No','E005');
insert into Truck values ('T005','2010','1700000','Yes','03-01-17 16:00:00','No','E007');
insert into Truck values ('T006','2000','1000000','No','07-03-17 16:00:00','Yes','E003');
insert into Truck values ('T007','2005','1200000','Yes','22-02-17 16:00:00','Yes','E005');
insert into Truck values ('T008','2016','1900000','Yes','24-06-15 16:00:00','Yes','E002');
insert into Truck values ('T009','2007','1500000','Yes','6-03-16 16:00:00','No','E005');
insert into Truck values ('T010','2017','2000000','Yes','30-06-17 16:00:00','Yes','E007');

create table Shipping(

	Shipping_id varchar(20),
	CV_Place varchar(20),
	Return_Place varchar(20),
	Ref_1 int,
	PI_NO int,
	Agent_sold_to varchar(50),
	Po_no int,
	Material_Description varchar(40),
	Ship_Line varchar(50),
	Ref_2 int,
	Vessel_name varchar(50),
	ETD Date,
	ETA Date,
	cy_date Date,
	Custom_broker varchar(20),
	cy_place varchar(20),
	Employee_id varchar(5),
	primary key(Shipping_id),
	constraint foreign key (Employee_id) references employee (Employee_id)
);

create table Registration 
(
	user_id varchar(5),
	username varchar (32),
	pword varchar(32),
	Business_name varchar(32),
	F_name varchar(50),
	L_name varchar(50),
	PostalCode int(10),
	Phone_num int(10),
	Fax_num int(14),
	Email varchar(32),
	PRIMARY KEY(user_id)
);

insert into Registration values ('U001','Thokester','FOREVER','3King-ltd','Thoke','Joke','34000','0866516660','045311635','lolhahaha200@gmail.com');
insert into Registration values ('U002','TunTun','TT','Lamester-ltd','Tarun','Bhu','10600','080000000','024123329','tarun123@gmail.com');
insert into Registration values ('U003','Tom&Jerry','Catch','Cartoon-ltd','Cat','Rat','19000','0844444444','024124377','Cartoon@gmail.com');
insert into Registration values ('U004','OnePiece','Grandline','Anime-ltd','Monkey','D-luffy','14000','085555777','028640047','Luffy@gmail.com');
insert into Registration values ('U005','Boruto','ninjutsu','Naruto-ltd','Sasuka','Uciha','10800','0866516660','024125347','Ninja@gmail.com');
insert into Registration values ('U006','Elsa','Frozen','Disney-ltd','Ice','Cream','39000','0899999999','045311149','LetItGo@gmail.com');
insert into Registration values ('U007','Minions','Yellow','Disney-ltd','Kevin','Yellow','45000','0888888888','041299121','Disney@gmail.com');
insert into Registration values ('U008','Toriko','Eat','Anime-ltd','Toriko','kokoko','12000','0800000000','024358818','Toriko@gmail.com');
insert into Registration values ('U009','Barbie','Pink','Girly-ltd','Ken','Dolls','36000','0811111111','123123','GirlieGirly@gmail.com');
insert into Registration values ('U010','Gal','WonderWomen','Bonita-ltd','Gal','Gadot','16800','0855555555','123131','WonderGirl@gmail.com');

create table price 
(
	Price_type varchar(20),
	Price int,
    
	PRIMARY KEY (Price_type)
);

Insert into price values ('Self-Pickup','0.44');
Insert into price values ('Delivery','0.75');


create table Inventory_detail
(
	Serial_num varchar(20) PRIMARY KEY REFERENCES product(Serial_num),
	Prod_weight varchar(10),
	Prod_size Varchar(20),
	Prod_sensitivity varchar(20),
	Prod_status varchar(20),
	Price_type varchar(20),
	constraint foreign key (Price_type) references price (Price_type)
);

insert into Inventory_detail values ('S001','120','10*5','fragile','Received','Self-Pickup');
insert into Inventory_detail values ('S002','56','20*30','fragile','Received','Self-Pickup');
insert into Inventory_detail values ('S003','69','3*8','-','Out-for-Delivery','Delivery');
insert into Inventory_detail values ('S004','72','6*12','-','Out-for-Delivery','Delivery');
insert into Inventory_detail values ('S005','560','7*24','fragile','Out-for-Delivery','Delivery');
insert into Inventory_detail values ('S006','220','9*26','-','Out-for-Delivery','Delivery');
insert into Inventory_detail values ('S007','115','12*19','-','Out-for-Delivery','Delivery');
insert into Inventory_detail values ('S008','76','12*35','-','Out-for-Delivery','Delivery');
insert into Inventory_detail values ('S009','99','50*8','-','In-Warehouse','Delivery');
insert into Inventory_detail values ('S010','35','10*10','-','In-Warehouse','Delivery');

create table check_in
(
	checkin_id varchar(20),
	date_time datetime, 
	Employee_ID varchar(5),
	PRIMARY KEY (checkin_id),
	constraint foreign key (Employee_ID) references employee (Employee_ID)
);

insert into check_in values ('CI001','12-08-17 10:06:00','E001');
insert into check_in values ('CI002','18-08-17 12:07:00','E001');
insert into check_in values ('CI003','19-08-17 13:09:00','E004');
insert into check_in values ('CI004','19-08-17 11:01:00','E004');
insert into check_in values ('CI005','17-08-17 9:06:00','E001');
insert into check_in values ('CI006','18-08-17 8:09:00','E004');
insert into check_in values ('CI007','20-08-17 17:06:00','E004');
insert into check_in values ('CI008','22-08-17 16:47:00','E004');
insert into check_in values ('CI009','23-08-17 13:52:00','E001');
insert into check_in values ('CI010','23-08-17 12:59:00','E001');
insert into check_in values ('CI011','23-08-17 12:25:00','E001');
insert into check_in values ('CI012','20-08-17 18:12:00','E004');
insert into check_in values ('CI013','21-08-17 15:19:00','E001');
insert into check_in values ('CI014','6-08-17 14:18:00','E004');
insert into check_in values ('CI015','5-08-17 13:25:00','E001');

create table check_out
(
	checkout_id varchar(20),
	date_time datetime, 
	Employee_ID varchar(5),
	PRIMARY KEY (checkout_id),
	constraint foreign key (Employee_ID) references employee (Employee_ID)
);

insert into check_out values ('CO001','14-08-17 11:05:00','E009');
insert into check_out values ('CO002','20-08-17 11:15:00','E006');
insert into check_out values ('CO003','21-08-17 11:46:00','E009');
insert into check_out values ('CO004','21-08-17 11:38:00','E009');
insert into check_out values ('CO005','19-08-17 11:59:00','E009');
insert into check_out values ('CO006','20-08-17 11:01:00','E006');
insert into check_out values ('CO007','22-08-17 11:34:00','E006');
insert into check_out values ('CO008','24-08-17 11:25:00','E006');
insert into check_out values ('CO009','22-08-17 11:45:00','E006');
insert into check_out values ('CO010','9-08-17 11:26:00','E006');
insert into check_out values ('CO011','7-08-17 11:37:00','E006');


Create table product(
	Serial_num varchar(20),
	Product_Cate varchar(20),
	user_id varchar(5),
	Zone_id varchar(20),
    Sub_id varchar(20),
	checkin_id varchar(20),
	checkout_id varchar(20),
	Shipping_id varchar(20),
	Truck_id varchar(20),
	Primary key(Serial_num),
	constraint foreign key (user_id) references Registration(user_id),
	constraint foreign key (Zone_id) references Zone (Zone_id),
    constraint foreign key (Sub_id) references Sub_Shelf (Sub_id),
	constraint foreign key (checkin_id) references check_in (checkin_id),
	constraint foreign key (checkout_id) references check_out (checkout_id),
	constraint foreign key (shipping_id) references Shipping (shipping_id),
	constraint foreign key (Truck_id) references Truck (Truck_id)
    
    
);

insert into product values('P001','Electronics','U001','-','-','CI002','CO002','-','T001');
insert into product values('P002','Cloth','U002','-','-','CI004','CO004','-','T005');
insert into product values('P003','Accessories','U005','-','-','CI008','CO008','-','T007');
insert into product values('P004','Electronics','U004','-','-','CI007','CO007','-','T008');
insert into product values('P005','Cloth','U002','-','-','CI006','CO006','-','T009');
insert into product values('P006','Accessories','U006','-','-','CI001','CO001','-','T006');
insert into product values('P007','Cloth','U005','-','-','CI003','CO003','-','T008');
insert into product values('P008','Accessoriess','U010','-','-','CI005','CO005','-','T002');
insert into product values('P009','Cloth','U008','Z001','SB001','CI010','','-','-');
insert into product values('P010','Electronics','U008','Z002','SB015','CI009','','-','-');
insert into product values('C001','Autos','U007','Z004','SB025','CI011','','-','');
insert into product values('C002','Machinery','U009','Z004','SB032','CI012','','-','');
insert into product values('C003','Accessories','U007','Z006','SB047','CI013','','-','');
insert into product values('C004','Electronics','U009','-','-','CI014','CO010','-','');
insert into product values('C005','Autos','U007','-','-','CI015','CO011','-','');














