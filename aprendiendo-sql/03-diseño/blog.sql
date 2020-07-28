

CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(100) not null,
    email       varchar(255) not null,
    password    varchar(255) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id          int(255) auto_increment not null,
    nombre      varchar(100),
    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id              int(255) auto_increment not null,
    usuario_id      varchar(255) not null,
    categoria_id    varchar(255) not null,
    titulo          varchar(255) not null,
    descripcion     MEDIUMTEXT,
    fecha           date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

#cuanod se elimine el dato, tmb se borrara el dato al que esta conectado
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE

#si se cambia este dato, tambien se cambiara a donde apunta
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON UPDATE CASCADE

#CUANDO BORRE LA TABLA CATEGORIAS, SE PONDRA EN NULL ESTE DATO
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE SET NULL
