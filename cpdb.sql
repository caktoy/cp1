-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2014 at 04:58 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `ID_AGENDA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_META` int(11) DEFAULT NULL,
  `NAMA_AGENDA` varchar(100) DEFAULT NULL,
  `TGL_AGENDA` date DEFAULT NULL,
  `KET_AGENDA` text,
  PRIMARY KEY (`ID_AGENDA`),
  KEY `FK_MEMILIKI_2` (`ID_META`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`ID_AGENDA`, `ID_META`, `NAMA_AGENDA`, `TGL_AGENDA`, `KET_AGENDA`) VALUES
(1, NULL, 'Agenda 1', '2014-08-05', 'Ada agenda pada tanggal tersebut.'),
(2, NULL, 'Agenda 2', '2014-08-06', 'Besoknya ada acara lagi.'),
(3, NULL, 'Pelatihan A', '2014-08-29', 'Pelatihan mengenai K3'),
(4, NULL, 'Pelatihan Permesinan', '2014-09-05', 'Pelatihan permesinan');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `ID_BERITA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_META` int(11) DEFAULT NULL,
  `JUDUL_BERITA` varchar(100) DEFAULT NULL,
  `TANGGAL_BERITA` date DEFAULT NULL,
  `ISI_BERITA` text,
  PRIMARY KEY (`ID_BERITA`),
  KEY `FK_MEMILIKI_4` (`ID_META`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`ID_BERITA`, `ID_META`, `JUDUL_BERITA`, `TANGGAL_BERITA`, `ISI_BERITA`) VALUES
(1, 9, 'Bosan dengan Pekerjaan yang Monoton? Coba Ini!', '2014-08-18', '<p>Pekerjaan yang kita lakukan setiap harinya berujung pada kebutuhan untuk mencari nafkah.&nbsp;Kebanyakan orang, termasuk Anda, membangun karier yang solid dan menghabiskan sebagian besar hidup untuk bekerja. Bagi banyak orang, pekerjaan mereka mendefinisikan siapa mereka, terutama dalam hal prestasi.&nbsp;<br />\r\n<br />\r\nNamun ketika pekerjaan menjadi rutinitas harian, semua pasti akan terasa monoton. Akibatnya, produktivitas kita terganggu. Untuk mengubah keseharian yang terasa datar-datar saja di tempat kerja, ini yang bisa Anda lakukan:</p>\r\n\r\n<ul>\r\n	<li>Mintalah untuk diberi proyek yang menantang. Tugas sehari-hari yang sudah sangat Anda kuasai memang rentan membuat Anda bosan dengan pekerjaan Anda. Dari mengeluh setiap hari, lebih baik mengerjakan sesuatu yang baru. Sebuah proyek akan memberi Anda pengalaman baru, tanpa kehilangan tugas-tugas Anda yang lama.</li>\r\n	<li>Bantu tugas-tugas teman Anda. Anda tidak perlu mengambil alih peran mereka, cukup menawarkan bantuan untuk tugas-tugas yang belum Anda kuasai. Dengan demikian, ilmu Anda bertambah, dan Anda pun bisa mengerjakan sesuatu di luar rutinitas Anda.</li>\r\n	<li>Bosan dengan pekerjaan karena atasan atau rekan kerja Anda yang menyebalkan? Cara pertama yang dianjurkan sebenarnya adalah dengan tidak berfokus pada sisi negatif mereka, tetapi pada sisi positif mereka. Dari situ, mungkin Anda menemukan cara yang lebih baik untuk bekerja sama dengan mereka. Kalau masih gagal, cobalah berkomunikasi melalui <em>e-mail</em> atau <em>instant messenger</em> saja supaya tak perlu bertemu mereka secara langsung.</li>\r\n	<li>Tugas-tugas Anda begitu banyak sehingga terasa tak ada habisnya? Coba uraikan tugas-tugas Anda, dan buatlah <em>to-do-list</em> mengenai apa saja yang harus Anda lakukan. Centang setiap tugas yang sudah Anda selesaikan. Melihat daftar tugas yang semakin lama semakin berkurang akan membuat perasaan Anda lega, dan tugas-tugas yang bertumpuk pun berhasil Anda kuasai.</li>\r\n	<li>Bagaimana dengan kejenuhan di luar urusan pekerjaan itu sendiri? Ruang fisik tempat Anda bekerja mungkin memengaruhi pengalaman Anda bekerja.&nbsp;Meja kerja yang berantakan, penuh dengan alat tulis, kertas, dan <em>file</em> tidak membuat lingkungan kerja Anda kondusif. Bukan memberi kesegaran bagi otak, alih-alih hal ini justru hanya akan menimbulkan stres. Jadi, mulailah atur kerapian meja kerja Anda.&nbsp;</li>\r\n	<li>Bekerja selama berjam-jam membuat orang lelah secara mental. Oleh karena itu, setiap tiga sampai empat jam, coba berjalan-jalan cepat di sekitar gedung kantor Anda untuk memecahkan kejenuhan dan mendapatkan udara segar. Anda dapat bermain <em>game</em> di komputer atau mendengarkan musik selama 5 sampai 10 menit.&nbsp;</li>\r\n	<li>Sangat menyenangkan bisa memesan makanan dari restoran yang bagus seminggu sekali.&nbsp;Makan makanan enak akan meningkatkan <em>mood</em> Anda dan memberikan perubahan rutinitas yang membosankan dari bekerja. Gunakan kesempatan ini untuk menikmati <em>chatting</em> dengan rekan-rekan kerja Anda.&nbsp;Hal ini akan menjaga lingkungan kerja tetap ceria.</li>\r\n</ul>\r\n\r\n<p>Sumber: Kompas.com</p>\r\n'),
(2, 10, 'Dahlan: Anggaran Kementerian BUMN Kecil, Nggak Ngaruh', '2014-08-18', '<p>Menteri Negara Badan Usaha Milik Negara (BUMN), Dahlan Iskan tidak mempermasalahkan anggaran untuk kementerian yang dipimpinnya hanya mendapatkan jatah sebesar Rp 132 miliar. Bahkan menurut dia, anggaran tersebut tidak akan mempengaruhi kinerja Kementerian BUMN.<br />\r\n<br />\r\n&quot;Tidak ada kaitannya karena (Anggaran 2015 dengan kinerja Kementerian BUMN). Pertama anggarannya BUMN sekitar Rp 100 miliar tidak triliunan-triliunan itu aja <em>nggak</em> habis, <em>nggak</em> ada pengaruhnya, &quot; ujar Dahlan Iskan di Kantor Kementerian BUMN,Jakarta, Minggu (17/8/2014).<br />\r\n<br />\r\nDia menjelaskan, penyebab anggraan itu tidak terlalu berpengaruh kepada Kementerian BUMN karena penyerapan anggaran BUMN karya tidak terlalu besar. Menurut dia, BUMN karya yang dulunya adalah penyerap APBN terbesar di BUMN saat ini sudah bertekad semakin sedikit menggunakan APBN tersebut.</p>\r\n\r\n<p>Tahun ini saja, anggaran Rp 130 miliar untuk Kementerian BUMN masih tersisa. Hal tersebut mampu dilakukan Kementerian BUMN karena mampu menggunakan anggaran dengan efisien.</p>\r\n\r\n<p><img alt="Dahlan Iskan" src="http://assets.kompas.com/data/photo/2013/08/23/15331850000-dahlan-iskan780x390.jpg" style="height:240px; width:480px" /><br />\r\n&quot;BUMN karya sudah membatasi tidak boleh ikutan tender pekerjaan APBN yang dibawah Rp 25 miliar, harus Rp 25 miliar keatas. Sebetulnya kita mau naikkin diatas Rp 50 miliar tapi gak cukup kenapa saya lakukan? biar proyek-proyek di bawah Rp 25 miliar itu ditangani perusahaan kecil jangan dimakan oleh BUMN,&quot; tandas dia.</p>\r\n\r\n<p>Sumber: Kompas.com</p>\r\n'),
(3, 14, '6 Cara Meningkatkan Produktivitas di Hari Senin', '2014-08-18', '<p>Hari Senin adalah hari paling malas bekerja. Enggan bangun pagi, apalagi berangkat kerja. Namun demikian, jangan biarkan perasaan dan energi yang menurun mendominasi pikiran serta tubuh Anda. Bangkitkan semangat untuk mulai kembali produktif.</p>\r\n\r\n<p><strong>1. Hindari beraktivitas di media sosial saat bekerja</strong><br />\r\nSalah satu cara terbaik untuk meningkatkan produktivitas adalah dengan menghindari segala hal yang dapat menggangu fokus Anda. Salah satunya bersosialisasi di Facebook, Twitter, Instagram, atau Path. Sebab, seperti kita ketahui <em>chatting</em> dengan teman via media sosial sama menyenangkannya dengan bertemu langsung. Alhasil, tanpa Anda sadari, waktu berlalu begitu saja dan tumpukan pekerjaan masih menggunung.</p>\r\n\r\n<p><strong>2. Buat pembagian tugas</strong><br />\r\nWaktu terbaik untuk bekerja secara maksimal adalah sebelum makan siang. Bagilah tugas-tugas kantor Anda. Sebelum makan siang, selesaikan tugas paling mendesak. Sehabis makan siang, biasanya semangat bekerja menurun, lakukan tugas dengan tenggat jangka panjang. &nbsp;</p>\r\n\r\n<p><strong>3. Bertanggung jawab pada pekerjaan sendiri</strong><br />\r\nSebelum menyelesaikan tugas Anda sendiri, jangan berlagak jadi pahlawan kesiangan dengan menawarkan bantuan pada rekan kerja. Hal seperti ini hanya akan membuat beban kerja jadi terasa lebih berlipat-lipat dan membuat Anda sulit berkonsentrasi. &nbsp;</p>\r\n\r\n<p><strong>4. Rapikan meja kerja</strong><br />\r\nMeja kerja yang berantakan akan membuat Anda kesulitan mencari barang, dan hal ini justru akan membuang banyak waktu. Secara psikologis, meja yang berantakan juga akan membuat Anda menjadi tambah stres. Rapihkanlah meja Anda, jika perlu tambahkan hiasan yang membuat hati Anda bahagia.</p>\r\n\r\n<p><strong>5.Beristirahat</strong><br />\r\nJangan memaksa diri untuk terus bekerja saat badan telah merasa lelah. Luangkan waktu untuk merenggangkan punggung dan kaki selama 15 menit. Selain itu, hindari makan siang di meja kantor. Cobalah mencari udara segar dengan keluar dari ruangan dan menghirup udara bebas.</p>\r\n\r\n<p><strong>6.Jangan terus menerus periksa&nbsp;<em>email</em> atau pesan singkat</strong><br />\r\nKetika Anda terus menerus memeriksa <em>email</em> atau pesan di telepon genggam, ini akan membuat pekerjaan yang Anda prioritaskan tak kunjung usai dan membuat pikiran menjadi makin panik. Percaya saja, jika urusannya sangat mendesak, pasti orang tersebut akan menelpon Anda.</p>\r\n\r\n<p>Sumber: Kompas.com</p>\r\n'),
(4, 15, 'Tolak Kenaikan Harga BBM, Alasan Rasional ataukah Politis?', '2014-08-18', '<p>Pemerintahan baru akan menghadapi tantangan politik yang besar dalam menaikkan harga bahan bakar minyak (BBM) bersubsidi. Padahal, menurut Wakil Ketua Komisi XI DPR RI, Harry Azhar Aziz, menaikkan harga BBM bersubsidi relatif lebih tidak rumit ketimbang melakukan upaya pembatasan.</p>\r\n\r\n<p>Namun, menaikkan harga BBM bersubsidi masih sama tantangannya, yaitu ada di parlemen. &quot;Menaikkan harga tantangan politiknya besar. PDI-P dan PKS, apakah akan sama sikapnya seperti dulu?&quot; kata Harry kepada <em>Kompas.com</em>, akhir pekan lalu.</p>\r\n\r\n<p>Sekedar mengingatkan, Juni 2013 kedua fraksi di DPR, yakni Partai Demokrasi Indonesia Perjuangan (PDI-P) dan Partai Keadilan Sejahtera (PKS), dalam sidang Paripurna DPR, ngotot menolak kenaikan harga BBM bersubsidi.</p>\r\n\r\n<p>Saat itu, PDI-P diwaliki oleh Ketua Umum DPP PDIP Puan Maharani mengatakan dengan tegas sikap partainya untuk menolak kenaikan harga BBM bersubsidi. Puan menilai, kenaikan harga BBM bersubsidi hanyalah upaya pemerintah untuk dapat memperoleh dana Rp 42 triliun yang akan digunakan untuk program pencitraan seperti Bantuan Langsung Sementara Masyarakat (BLSM) dan bantuan sosial sebanyak Rp 30 triliun.</p>\r\n\r\n<p>Dari Fraksi PKS, anggota Komisi XI, Echy Awal Muharram mengatakan, fraksinya juga menolak kenaikan harga BBM bersubsidi. Sebab, kenaikan harga BBM tersebut hanya akan menambah angka pengangguran dan jumlah masyarakat miskin.</p>\r\n\r\n<p>Di sisi lain, Echy mengemukakan pandangan Fraksi PKS bahwa penyesuaian harga BBM akan menyebabkan kenaikan harga-harga barang yang akan berdampak langsung terhadap daya beli masyarakat.</p>\r\n\r\n<p>Dari pengalaman tersebut, Harry menduga, jika yang resmi menjadi Presiden adalah Joko Widodo, maka kemungkinan besar Fraksi PDI-P bakal mendukung kenaikan harga BBM bersubsidi. Sementara Fraksi PKS, mungkin juga kata dia ditambah Fraksi Gerindra akan tetap dalam posisi menolak.</p>\r\n\r\n<p>&quot;Kalaupun tidak setuju, Fraksi PDI-P akan diam saja. Ini dugaan saya. Berarti kalau begitu waktu PDI-P menolak dulu, bukan karena ideologis, tapi karena posisi,&quot; sindir politisi Partai Golkar itu.</p>\r\n\r\n<p>Sebaliknya, jika MK memutuskan Prabowo Subianto yang resmi menjadi Presiden, lanjut Harry, kemungkinan besar PDI-P akan berada pada sikap menolak kenaikan harga BBM bersubsidi. Untuk Fraksi PKS, Harry melihat akan ada dilema apakah tetap menolak atau berubah menjadi mendukung kenaikan. Sebab, PKS masuk dalam koalisi tenda besar, yang mengusung pasangan Prabowo Subianto-Hatta Rajasa.</p>\r\n\r\n<p>&quot;Yang menjadi dilema, PKS, apakah di posisi dulu atau dia tidak? Atau dia bersikap sama seperti itu atau berubah,&quot; tandas Harry.</p>\r\n\r\n<p>Dalam Rancangan Anggaran Pendapatan dan Belanja Negara (RAPBN) 2015, subsidi energi mendapatkan porsi sebesar Rp 363,5 triliun, sementara subsidi non energi hanya Rp 70 triliun. Padahal, subsidi energi ini telah banyak dikritik tak tepat sasaran. Lantas, siapapun yang terpilih nanti, akan seperti apa sikap fraksi-fraksi terkait subsidi? Sesuai ideologi atau sekadar posisi?</p>\r\n\r\n<p>Sumber: Kompas.com</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `ID_GAMBAR` int(11) NOT NULL AUTO_INCREMENT,
  `ISI_GAMBAR` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_GAMBAR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`ID_GAMBAR`, `ISI_GAMBAR`) VALUES
(1, 'produk_16072014_1405479776.jpg'),
(2, 'produk_16072014_1405479776.jpg'),
(3, 'produk_16072014_1405491337.PNG'),
(4, 'produk_17072014_1405565617.PNG'),
(7, 'produk_27082014_1409094903.JPG'),
(8, 'produk_27082014_1409095076.JPG'),
(9, 'produk_27082014_1409095101.JPG'),
(10, 'produk_27082014_1409095148.JPG'),
(11, 'produk_27082014_1409095167.JPG'),
(12, 'produk_27082014_1409095187.JPG'),
(13, 'produk_27082014_1409095217.JPG'),
(14, 'produk_27082014_1409095238.JPG'),
(15, 'produk_27082014_1409095289.JPG'),
(16, 'produk_27082014_1409095318.JPG'),
(17, 'produk_27082014_1409095343.JPG'),
(18, 'produk_27082014_1409095363.JPG'),
(19, 'produk_27082014_1409095396.JPG'),
(20, 'produk_27082014_1409095424.JPG'),
(21, 'produk_27082014_1409095446.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `ID_LAYANAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_META` int(11) DEFAULT NULL,
  `NAMA_LAYANAN` varchar(100) DEFAULT NULL,
  `DESKRIPSI_LAYANAN` text,
  PRIMARY KEY (`ID_LAYANAN`),
  KEY `FK_MEMILIKI_3` (`ID_META`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`ID_LAYANAN`, `ID_META`, `NAMA_LAYANAN`, `DESKRIPSI_LAYANAN`) VALUES
(1, 13, 'Layanan Dan Jasa', '<p><img alt="" src="http://localhost/cp1/assets/img/produk/produk_04082014_1407151724.png" style="height:200px; margin-left:5px; margin-right:5px; width:200px" /></p>\r\n\r\n<p>Kami menyediakan berbagai mesin untuk mendukung kegiatan kami. Antara lain sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li>Mesin las</li>\r\n	<li>Mesin pemotong mesin</li>\r\n	<li>Mesin pemipih pipa</li>\r\n	<li>Mesinnya mesin deh pokoknya</li>\r\n</ul>\r\n\r\n<p>Seperti itulah kami, apa adanya..</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE IF NOT EXISTS `meta` (
  `ID_META` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GAMBAR` int(11) DEFAULT NULL,
  `KEY_META` text,
  `DESC_META` text,
  PRIMARY KEY (`ID_META`),
  KEY `FK_BERISI` (`ID_GAMBAR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`ID_META`, `ID_GAMBAR`, `KEY_META`, `DESC_META`) VALUES
(1, 1, 'mencoba, latihan', 'mencoba posting'),
(2, 2, '0', 'memposting produk ke dua'),
(3, 3, 'produk, dua, latihan', 'memposting produk'),
(4, 4, 'produk, satu, indah', 'produk 1 dan hanya 1'),
(5, NULL, 'lancar jaya, industri, logam, besi', 'CV. Lancar Jaya bergerak dibidang industri logam dan besi.'),
(7, NULL, 'berita, satu.', 'isi berita 1.			'),
(8, NULL, 'berita, dua.', 'deskripsi berita dua.			'),
(9, NULL, 'pekerjaan, keseharian, kerja, alternatif', 'alternatif agar kerja tidak monoton			'),
(10, NULL, 'bumn, dahlan iskan, anggaran', 'Komentar Dahlan Iskan terhadap anggaran BUMN'),
(13, NULL, 'layanan, jasa, lancar jaya', 'layanan dan jasa lancar jaya.'),
(14, NULL, 'produktif, senin, motivasi, kerja', '6 cara meningkatkan produktivitas di hari senin.			'),
(15, NULL, 'kenaikan harga, bbm, politik', 'alasan penolakan kenaikan harga BBM'),
(16, 7, 'produk, lancar jaya.', 'produk lancar jaya.'),
(17, 8, 'produk, lancar jaya.', 'produk lancar jaya.'),
(18, 9, 'produk, lancar jaya', 'produk lancar jaya'),
(19, 10, 'produk, lancar jaya', 'produk lancar jaya'),
(20, 11, 'produk, lancar jaya', 'produk lancar jaya'),
(21, 12, 'produk, lancar jaya', 'produk lancar jaya'),
(22, 13, 'produk, lancar jaya', 'produk lancar jaya'),
(23, 14, 'produk, lancar jaya', 'produk lancar jaya'),
(24, 15, 'produk, lancar jaya', 'produk lancar jaya'),
(25, 16, 'produk, lancar jaya', 'produk lancar jaya'),
(26, 17, 'produk, lancar jaya', 'produk lancar jaya'),
(27, 18, 'produk, lancar jaya', 'produk lancar jaya'),
(28, 19, 'produk, lancar jaya', 'produk lancar jaya'),
(29, 20, 'produk, lancar jaya', 'produk lancar jaya'),
(30, 21, 'produk, lancar jaya', 'produk lancar jaya');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `ID_PRODUK` int(11) NOT NULL AUTO_INCREMENT,
  `ID_META` int(11) DEFAULT NULL,
  `NAMA_PRODUK` varchar(100) DEFAULT NULL,
  `DESKRIPSI_PRODUK` text,
  PRIMARY KEY (`ID_PRODUK`),
  KEY `FK_MEMILIKI_1` (`ID_META`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_PRODUK`, `ID_META`, `NAMA_PRODUK`, `DESKRIPSI_PRODUK`) VALUES
(3, 16, 'Produk A', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(4, 17, 'Produk B', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(5, 18, 'Produk C', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(6, 19, 'Produk D', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(7, 20, 'Produk E', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(8, 21, 'Produk F', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(9, 22, 'Produk G', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(10, 23, 'Produk H', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(11, 24, 'Produk I', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(12, 25, 'Produk J', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(13, 26, 'Produk K', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(14, 27, 'Produk L', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(15, 28, 'Produk M', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(16, 29, 'Produk N', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n'),
(17, 30, 'Produk O', '<p>Produk ini untuk uji coba semata, belum ada keterangan resminya, mohon bersabar</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `ID_PROFIL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_META` int(11) DEFAULT NULL,
  `NAMA_PERUSAHAAN` varchar(100) DEFAULT NULL,
  `PROFIL_PERUSAHAAN` text,
  PRIMARY KEY (`ID_PROFIL`),
  KEY `FK_MEMILIKI_5` (`ID_META`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`ID_PROFIL`, `ID_META`, `NAMA_PERUSAHAAN`, `PROFIL_PERUSAHAAN`) VALUES
(1, 5, 'CV. Lancar Jaya', '<p>Kami adalah perusahaan yang bergerak dibidang industri pengolahan besi dan logam. Kami menawarkan berbagai produk dan jasa dalam penyediaan produk-produk yang berbahan dasar besi dan logam.</p>\r\n\r\n<p>Sejak berdiri tahun 2006, kami terus berusaha bertahan dari tantangan-tantangan industri yang ada di Indonesia serta terus berusaha untuk meningkatkan inovasi kami dalam pelayanan kami. Hingga kini kami berhasil merangkul berbagai perusahaan untuk bekerja sama dengan kami sebagai mitra bisnis.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_NAMA` varchar(30) DEFAULT NULL,
  `USER_PASSWORD` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_NAMA`, `USER_PASSWORD`) VALUES
(1, 'admin', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `FK_MEMILIKI_2` FOREIGN KEY (`ID_META`) REFERENCES `meta` (`ID_META`);

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `FK_MEMILIKI_4` FOREIGN KEY (`ID_META`) REFERENCES `meta` (`ID_META`);

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `FK_MEMILIKI_3` FOREIGN KEY (`ID_META`) REFERENCES `meta` (`ID_META`);

--
-- Constraints for table `meta`
--
ALTER TABLE `meta`
  ADD CONSTRAINT `FK_BERISI` FOREIGN KEY (`ID_GAMBAR`) REFERENCES `gambar` (`ID_GAMBAR`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_MEMILIKI_1` FOREIGN KEY (`ID_META`) REFERENCES `meta` (`ID_META`);

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `FK_MEMILIKI_5` FOREIGN KEY (`ID_META`) REFERENCES `meta` (`ID_META`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
