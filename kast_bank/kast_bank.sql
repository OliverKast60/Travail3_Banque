create table if not exists clients(
    num_client int not null AUTO_INCREMENT,
    nom_client varchar(50) not null,
    prenom_client varchar(50) not null,
    sexe varchar(50) not null,
    adresse_client varchar(50) not null,
    code_poste int not null,
    num_tel_client varchar(50) not null,
    date_naiss date not null,
    e_mail_client varchar(50) not null,
    image_client varchar(255) not null,
    primary key (num_client)
);

create table if not exists comptes(
    num_compte int not null AUTO_INCREMENT,
    date_creation date not null,
    etat varchar(50) not null,
    num_client int not null,
    solde int not null,
    type_compte varchar(50) not null,
    primary key (num_compte),
    foreign key (num_client) references clients (num_client)
);

create table if not exists depots(
    num_depot int not null auto_increment,
    date_depot date not null,
    montant int not null,
    num_client int not null,
    num_compte int not null,
    primary key (num_depot),
    foreign key (num_client) references clients (num_client),
    foreign key (num_compte) references comptes (num_compte)
);

create table if not exists retraits(
    num_retrait int not null auto_increment,
    date_retrait date not null,
    montant int not null,
    num_client int not null,
    num_compte int not null,
    primary key (num_retrait),
    foreign key (num_client) references clients (num_client),
    foreign key (num_compte) references comptes (num_compte)
);

create table if not exists users(
    id int not null AUTO_INCREMENT,
    username varchar(50) not null,
    password varchar(50) not null,
    primary key (id)
);
