DROP TABLE IF EXISTS admin;
CREATE TABLE admin
(
	user_name		varchar(50) NOT NULL,
	password		varchar(50) NOT NULL,
	PRIMARY KEY		(user_name)
);

DROP TABLE IF EXISTS member;
CREATE TABLE member
(
	id				int unsigned NOT NULL auto_increment,
	id_anggota		varchar(50) NOT NULL,
	user_name		varchar(50) NOT NULL,
	email			varchar(50) NOT NULL,
	password		varchar(50) NOT NULL,
	nama_lengkap	varchar(50) NOT NULL,
	deskripsi		mediumtext NOT NULL,
	tgl_gabung		date NOT NULL,
	jual			int unsigned NOT NULL,
	beli			int unsigned NOT NULL,
	PRIMARY KEY		(id)
);

DROP TABLE IF EXISTS brg_jual;
CREATE TABLE brg_jual
(
	id				int unsigned NOT NULL auto_increment,
	id_member		int unsigned NOT NULL,
	id_kategori     int unsigned NOT NULL,
	nama_barang		varchar(50) NOT NULL,
	tgl_upload		date NOT NULL,
	deskripsi		longtext NOT NULL,
	status_lelang	varchar(50) NOT NULL,
	status_jual		varchar(50) NOT NULL,
	tawar			int unsigned NOT NULL,
	PRIMARY KEY		(id)
);

DROP TABLE IF EXISTS gambar;
CREATE TABLE gambar
(
	id				int unsigned NOT NULL auto_increment,
	id_barang		int unsigned NOT NULL,
	nama_file		varchar(50) NOT NULL,
	judul_gambar	varchar(50) NOT NULL,
	ukuran_file		int unsigned NOT NULL,
	tgl_unggah		date NOT NULL,
	PRIMARY KEY		(id)
);

DROP TABLE IF EXISTS kategori;
CREATE TABLE kategori
(
	id				int unsigned NOT NULL auto_increment,
	nama_kategori 	varchar(50) NOT NULL,
	deskripsi		text NOT NULL,
	PRIMARY KEY		(id)
);

DROP TABLE IF EXISTS lelang;
CREATE TABLE lelang
(
	id 				int unsigned NOT NULL auto_increment,
	id_barang		int unsigned NOT NULL,
	id_pemenang		int unsigned NOT NULL,
	deskripsi 		text NOT NULL,
	status 			varchar(50) NOT NULL,
	tgl_mulai		timestamp NOT NULL,
	tgl_berakhir	timestamp NOT NULL,
	PRIMARY KEY		(id)
);

DROP TABLE IF EXISTS transaksi;
CREATE TABLE transaksi
(
	id				int unsigned NOT NULL auto_increment,
	id_member		int unsigned NOT NULL,
	id_transaksi	varchar(50) NOT NULL,
	jenis_transaksi varchar(50) NOT NULL,
	bank			varchar(50) NOT NULL,	
	PRIMARY KEY		(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


