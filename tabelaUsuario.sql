create table tbl_clientes(

cli_codigo      int auto_increment primary key,
nome            varchar(40) not null,
email           varchar(80) not null,
login           varchar(50) not null,
senha           varchar(50) not null,

)