CREATE TABLE daftar_swab (
    id_form              INTEGER NOT NULL,
    nama                 VARCHAR(100) NOT NULL,
    nik                  INTEGER NOT NULL,
    j_kelamin            VARCHAR(1) NOT NULL,
    tgl_lahir            DATE NOT NULL,
    foto                 VARCHAR(200) NOT NULL,
    alamat               VARCHAR(200) NOT NULL,
    email                VARCHAR(255) NOT NULL,
    no_ponsel            INTEGER NOT NULL,
    no_wa                INTEGER,
    tujuan               VARCHAR(255) NOT NULL,
    jns_periksa          VARCHAR(255) NOT NULL,
    gejala               VARCHAR(255) NOT NULL,
    tgl_genjala          VARCHAR(255) NOT NULL,
    status               VARCHAR(20) NOT NULL,
    alsn_tolak           TEXT,
    waktu_tes            DATE,
    user_username        VARCHAR(50) NOT NULL,
    tempat_tes_id_tempat INTEGER NOT NULL
);

ALTER TABLE daftar_swab ADD CONSTRAINT daftar_swab_pk PRIMARY KEY ( id_form );

CREATE TABLE data_covid (
    id         INTEGER NOT NULL,
    kabupaten  VARCHAR(50) NOT NULL,
    suspek     INTEGER NOT NULL,
    positif    INTEGER NOT NULL,
    sembuh     INTEGER NOT NULL,
    dirawat    INTEGER NOT NULL,
    meninggal  INTEGER NOT NULL,
    updated_at DATE NOT NULL
);

ALTER TABLE data_covid ADD CONSTRAINT data_covid_pk PRIMARY KEY ( id );

CREATE TABLE isoman (
    id_petunjuk   INTEGER NOT NULL,
    teks_petunjuk TEXT NOT NULL
);

ALTER TABLE isoman ADD CONSTRAINT isoman_pk PRIMARY KEY ( id_petunjuk );

CREATE TABLE rs_rujukan (
    id          INTEGER NOT NULL,
    rumah_sakit VARCHAR(200) NOT NULL,
    kabupaten   VARCHAR(50) NOT NULL,
    alamat      VARCHAR(200) NOT NULL,
    kapasitas   INTEGER NOT NULL,
    kontak      INTEGER NOT NULL
);

ALTER TABLE rs_rujukan ADD CONSTRAINT rs_rujukan_pk PRIMARY KEY ( id );

CREATE TABLE tempat_tes (
    id_tempat     INTEGER NOT NULL,
    tempat_tes    VARCHAR(200) NOT NULL,
    harga_tes     VARCHAR(50) NOT NULL,
    kontak        INTEGER NOT NULL,
    durasi        VARCHAR(100) NOT NULL,
    stok          INTEGER NOT NULL,
    w_operasional VARCHAR(255) NOT NULL
);

ALTER TABLE tempat_tes ADD CONSTRAINT tempat_tes_pk PRIMARY KEY ( id_tempat );

CREATE TABLE user (
    username    VARCHAR(50) NOT NULL,
    no_telepon  INTEGER NOT NULL,
    j_kelamin   VARCHAR(1) NOT NULL,
    alamat      VARCHAR(200) NOT NULL,
    password    VARCHAR(50) NOT NULL,
    tgl_lahir   DATE NOT NULL,
    tmpt_llahir VARCHAR(20) NOT NULL,
    nik         INTEGER NOT NULL
);

ALTER TABLE user ADD CONSTRAINT user_pk PRIMARY KEY ( username );

CREATE TABLE z_wilayah (
    id_status INTEGER NOT NULL,
    kabupaten VARCHAR(100) NOT NULL,
    zona      VARCHAR(50) NOT NULL,
    tanggal   DATE NOT NULL
);

ALTER TABLE z_wilayah ADD CONSTRAINT z_wilayah_pk PRIMARY KEY ( kabupaten,
                                                                id_status );

ALTER TABLE daftar_swab
    ADD CONSTRAINT daftar_swab_tempat_tes_fk FOREIGN KEY ( tempat_tes_id_tempat )
        REFERENCES tempat_tes ( id_tempat );

ALTER TABLE daftar_swab
    ADD CONSTRAINT daftar_swab_user_fk FOREIGN KEY ( user_username )
        REFERENCES "user" ( username );