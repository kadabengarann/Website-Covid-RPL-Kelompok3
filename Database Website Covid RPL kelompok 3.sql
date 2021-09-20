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

CREATE TABLE IF NOT EXISTS `data_covid` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kabupaten_kota` varchar(50) DEFAULT NULL,
  `positif` int(11) DEFAULT NULL,
  `sembuh` int(11) DEFAULT NULL,
  `dirawat` int(11) DEFAULT NULL,
  `meninggal` int(11) DEFAULT NULL,
  `suspek` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

CREATE TABLE isoman (
    id_petunjuk   INTEGER NOT NULL,
    teks_petunjuk TEXT NOT NULL
);

ALTER TABLE isoman ADD CONSTRAINT isoman_pk PRIMARY KEY ( id_petunjuk );

CREATE TABLE pengguna (
    username    VARCHAR(50) NOT NULL,
    no_telepon  INTEGER NOT NULL,
    j_kelamin   VARCHAR(1) NOT NULL,
    alamat      VARCHAR(200) NOT NULL,
    password    VARCHAR(50) NOT NULL,
    tgl_lahir   DATE NOT NULL,
    tmpt_llahir VARCHAR(20) NOT NULL,
    nik         INTEGER NOT NULL
);

ALTER TABLE pengguna ADD CONSTRAINT user_pk PRIMARY KEY ( username );

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
        REFERENCES pengguna ( username );

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admins` (`admin_id`, `password`) VALUES
	('admin1', 'password');
INSERT INTO `data_covid` (`id`, `nama_kabupaten_kota`, `positif`, `sembuh`, `dirawat`, `meninggal`, `suspek`, `updated_at`) VALUES
	(0, 'Tanah Laut', 8007, 7641, 135, 231, 0, NULL),
	(1, 'Kotabaru', 3175, 2965, 74, 136, 70, '2021-09-19 17:09:34'),
	(3, 'Banjar', 5929, 5578, 190, 161, 2, NULL),
	(5, 'Barito Kuala', 4616, 4392, 63, 161, 9, '2021-02-19 16:11:03'),
	(6, 'Tapin', 2447, 2330, 20, 97, 0, NULL),
	(8, 'Hulu Sungai Selatan', 2200, 2116, 11, 73, 0, NULL),
	(9, 'Hulu Sungai Tengah', 3205, 2919, 128, 158, 0, '2021-03-19 16:03:10'),
	(10, 'Kotabuuru', 6336, 5578, 235, 523, 523, NULL),
	(11, 'haiii', 260, 12, 124, 124, 4124, '2021-09-19 23:11:01');

create table `form_vaksinasi` (
	`Nama` varchar (150),
	`NIK` int (20),
	`Jenis_Kelamin` varchar (30),
	`Tanggal_Lahir` date ,
	`No_Telp` int (20),
	`provinsi_daftar` varchar (150),
	`kota_daftar` varchar (150)
); 
