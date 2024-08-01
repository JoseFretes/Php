create database bd_pedidos;

create table cliente(
    cedula int, 
    nombre apellido varchar(50),
    telefono varchar(11),
    primary key (cedula)
)

    create table Pedido(
        ID INT AUTO_INCREMENT,
        fecha date,
        clientecedula int,
        total int,
        estado varchar(15),
        primary key (ID)

    );
alter table Pedido add constraint 
foreign key (clientecedula) references cliente(cedula);

create table Producto(
ID int,
descripcion varchar(200),
total int,
primary key(ID)
);
create table pedidodetalle(
    pedidoid int,
    productoid int,
    cantidad int,
    totalparcial int,
    primary key (pedidoid, productoid)
);

alter table pedidodetalle add constraint
foreign key (pedidoid) references pedido(ID);


alter table pedidodetalle add constraint
foreign key (productoid) references producto(ID);