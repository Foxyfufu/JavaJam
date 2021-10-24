create table salesTable
(
  `product_id` int(11) not null primary key,
  `date` date not null,
  `quantity` int(11) not null
);

insert into salesTable values
(1, '2021-10-05', 10),
(2, '2021-10-05', 15),
(3, '2021-10-05', 20),
(4, '2021-10-05', 5),
(5, '2021-10-05', 10);