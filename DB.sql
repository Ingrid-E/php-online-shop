CREATE DATABASE family_shop;

CREATE TABLE family_shop.client (
	id_client INTEGER auto_increment,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(200) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    img BLOB NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(30) NULL,
    PRIMARY KEY (id_client)
);

CREATE TABLE family_shop.cart (
	id_cart INTEGER AUTO_INCREMENT,
	fk_client INTEGER NULL,
    total DECIMAL(10,2) NULL,
    address VARCHAR(200) NULL,
    is_dispatched BOOLEAN NOT NULL DEFAULT false,
    PRIMARY KEY (id_cart),
    FOREIGN KEY(fk_client) REFERENCES client(id_client)
);

CREATE TABLE family_shop.product (
	id_product INTEGER AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    img BLOB NOT NULL,
    is_available BOOLEAN NOT NULL DEFAULT true,
    PRIMARY KEY (id_product)
);

CREATE TABLE family_shop.cart_has_product (
	id_cart_has_product INTEGER AUTO_INCREMENT,
	fk_product INTEGER NOT NULL,
	fk_cart INTEGER NOT NULL,
    PRIMARY KEY (id_cart_has_product),
	FOREIGN KEY(fk_product) REFERENCES product(id_product),
    FOREIGN KEY(fk_cart) REFERENCES cart(id_cart)
);

CREATE TABLE family_shop.administrator (
	id_administrator INTEGER auto_increment,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(200) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    admin_type ENUM('supervisor', 'manager'),
    PRIMARY KEY (id_administrator)
);

