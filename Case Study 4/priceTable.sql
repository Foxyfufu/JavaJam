create table priceTable
( id int unsigned not null auto_increment primary key,
  coffeename char(50) not null,
  price decimal(10,2) not null
);

insert into priceTable values
  (1, "Just Java", 2.00),
  (2, "Cafe-S", 2.00),
  (3, "Cafe-D", 3.00),
  (4, "Cappu-S", 4.75),
  (5, "Cappu-D", 5.75);