create table priceTable
( `id` int unsigned not null auto_increment primary key,
  `coffeename` char(50) not null,
  `type` text not null,
  `price` decimal(10,2) not null
);

insert into priceTable values
  (1, "Just Java", "Endless Cup", 2.00),
  (2, "Cafe", "Single", 2.00),
  (3, "Cafe", "Double", 3.00),
  (4, "Cappu", "Single", 4.75),
  (5, "Cappu", "Double", 5.75);