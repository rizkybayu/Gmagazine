/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : db_game

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-08-04 09:24:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(255) DEFAULT NULL,
  `email_admin` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tgl_jadi` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'Azka Bayu', 'rizkybayu6@gmail.com', 'riibay16', 'kiki456', '2015-07-10');
INSERT INTO `tbl_admin` VALUES ('2', 'Azka Bayu', 'rizkybayu6@gmail.com', 'riibay16', 'qwertyui', '2015-07-10');
INSERT INTO `tbl_admin` VALUES ('3', 'mmm', 'mm@mm.com', 'mmm', 'mmmmmmm', '2015-07-10');

-- ----------------------------
-- Table structure for tbl_game
-- ----------------------------
DROP TABLE IF EXISTS `tbl_game`;
CREATE TABLE `tbl_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `pembuat` varchar(255) DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `id_kategori` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_game
-- ----------------------------
INSERT INTO `tbl_game` VALUES ('52', 'Call of Duty: Black Ops 3 is confirmed', '<p>Call of duty black ops 3 dipastikan dan akan berikutnya dalam yang sangat diakui call of duty seri.Yang diumumkan minggu lalu oleh treyarch, black ops 3 itu merupakan yang ketiga edisi di black ops seri.Black ops adalah sebuah untuk aktivasi sub-series &#39;s gelar. call of dutyBanyak black ops memutar keluar dari sudut pandang militer ( ) operasi cia alex mason, hal tersebut terutama dilakukan melalui kilas balik.</p>\r\n\r\n<p>Dari yang pertama teaser, dirilis minggu lalu saya yang dipimpin langsung untuk meyakini bahwa kita mungkin dapat melihat suatu selamat datang kembali ke ladang dan hutan perang dunia 2.Pemain akan pimpinan melalui kampanye dengan cara yang sama seperti sebelumnya melalui flashback dari tukang batu relatif, kakek mungkin.Sayangnya, itu sekarang tampaknya bahwa kita ditakdirkan melakukan peperangan kita di call of duty: black ops 3, beberapa waktu di wilayah yang jauh depan.Kesan yang hampir cyberpunk, deus ex tema tampaknya berasal dari berbagai petunjuk. samarPerang dunia masih akan throwback nomor telepon saya satu pilihan tetapi black ops seri belum gagal saya belum.T</p>\r\n', 'Rizky Bayu', '2015-07-23', '#FPS #NEWGAMES #BESTGAME #COD', '2');
INSERT INTO `tbl_game` VALUES ('55', 'GEFORCE GTX TITAN BLACK ', '<p>Familiar dengan kata TITAN? TITAN menurut ilmu Astronomi merupakan bulan paling besar yang dimiliki oleh planet Saturnus. TITAN juga memiliki arti tersendiri dalam mitos Yunani, yaitu para penguasa bumi, anak dari dewa langit Uranus dan dewi bumi Gaia. Lalu, apa hubungannya dengan review graphics card kali ini? Semua yang memiliki gelar TITAN memiliki kesamaan, yaitu menjadi yang terkuat. Begitu juga di dunia graphics card, memulai debut semenjak tahun 2012, TITAN memang diciptakan untuk memberikan performa lebih dibandingkan dengan graphics card sekelasnya, yaitu graphics card untuk PC Desktop. Kemampuan tinggi keluarga TITAN membuat NVIDIA menempatkannya di kelas harga premium.<br />\r\n<br />\r\nSaat ini, TITAN sendiri sudah menginjak generasi ke 4. Setelah sebelumnya terdapat TITAN, TITAN BLACK, dan juga TITAN Z, NVIDIA baru saja memperkenalkan anggota paling baru dari keluarga TITAN, yaitu GeForce GTX TITAN X. Seperti TITAN pada umumnya, GeForce GTX TITAN X juga dirancang untuk menghadirkan pengalaman bermain game terbaik di resolusi Ultra HD/4K dengan pengaturan kualitas grafis &ldquo;rata kanan&rdquo;. Namun, tidak seperti keluarga TITAN yang biasanya mewarisi &ldquo;ilmu&rdquo; dari NVIDIA TESLA dengan kemampuan Double Precision sangat tinggi, TITAN X tampil berbeda. TITAN generasi sebelumnya memiliki kemampuan menggunakan 1/3 dari seluruh CUDA Core untuk melakukan komputasi Double Precision. Sementara TITAN X hanya mampu menggunakan 1/32 dari seluruh CUDA Core untuk melakukan komputasi Double Precision, seperti GeForce gaming umumnya. Walaupun begitu, TITAN X tetap mewarisi ciri khas TITAN dengan kapasitas memori sangat besar dimana kali ini sebesar 12GB!!!<br />\r\n<br />\r\nGeForce GTX TITAN X bisa dikatakan menjadi kompetitor dari Radeon R9 295 X2 karena memiliki rentang harga yang berdekatan. Menariknya, TITAN X ini hanya menggunakan satu chip GPU, sedangkan AMD R9 295X2 adalah graphics card dengan dual GPU. Lalu, apakah performa yang dihasilkan oleh TITAN X ini mampu mengalahkan R9 295 X2? Apakah harga premium pantas disematkan di graphcis card tersebut? Kami akan menjawabnya di artikel kami kali ini.</p>\r\n', 'Rizky Bayu', '2015-07-28', '#newVGA #titan #nvidia', '1');
INSERT INTO `tbl_game` VALUES ('57', 'Tips membeli nintendo 3DS!', '<p>Buat yang Bakal Beli Nintendo 3DS 3DS itu region locked. Maksudnya, game yang dirilis di region tertentu hanya bisa dimainkan di region 3DS yang sesuai. Ada 5 region 3DS: Jepang (JP), Asia (ASI), Amerika (US), Australia (AU), dan Eropa (EU). Kemudian ada 3 region game 3DS: Jepang (JP), Amerika (US), dan Eropa (EU). Game JP hanya bisa dimainkan di 3DS JP. Game US bisa dimainkan di 3DS US dan ASI. Game EU bisa dimainkan di 3DS EU dan AU. Interface 3DS JP berbahasa Jepang, sementara interface 3DS keempat region lainnya berbahasa Inggris.<br />\r\n<br />\r\n3DS kompatibel dengan game-game DS dan DSi. Jadi jangan mau kalau toko nawarin lo DS. Serius, mending nambah sejutaan, dapet 3DS. Nintendo bakal fokus ngerilis game-game anyar buat 3DS lho, bukan buat DS dan DSi.<br />\r\n<br />\r\n3DS sekarang ada 2 macem: 3DS biasa (berbentuk kotak seukuran DS Lite) dan 3DS XL (ujung-ujungnya bulet, ukurannya sedikit lebih gede). Kecuali lo sama gilanya kaya gue, mending beli XL deh. Fiturnya persis plek. Bedanya cuma ukuran lebih gede, alhasil monitor juga gede (sementara resolusi nggak berubah, tapi nggak pecah kok). Stamina baterai XL juga lebih awet. Dan posisi stylus bergeser ke samping. Stylus 3DS ada di atas, cukup awkward, hahaha&hellip;<br />\r\n<br />\r\nToko biasanya jual 3DS dan 3DS XL dalam 3 skema: Handheld doang tanpa game, handheld dengan 1 game (istilahnya bundle), dan limited edition. Bundle itu basically handheld biasa + 1 buah game, dan bisa lo beli dengan harga lebih murah dibandingkan beli keduanya secara terpisah. Misalnya bundle Mario Kart. Kalau lo nggak mau game-nya, ya udah, beli aja 3DS warna biru. Sementara limited edition itu ditandai dengan warna kover 3DS yang juga beda. Produksinya dalam jumlah terbatas, wajar kalau harganya makin lama makin naik. Misalnya 3DS Ocarina of Time dan 3DS XL Pikachu.<br />\r\n<br />\r\nPas artikel ini gue tulis, harga 3DS sekitar Rp 1,7 juta - Rp 1,8 juta, kecuali warna Flame Red yang nambah 50 rebuan. Harga 3DS XL Rp 2 juta - Rp 2,2 juta. Bundle 3DS XL biasanya Rp 2,4 juta. Dan gue beli 3DS XL Pikachu beberapa minggu lalu masih Rp 2,8 juta (di BEC Bandung, sementara di Mangdu Jakarta ada yang jual Rp 2,7 juta). Harga game fisik antara Rp 250 rebu - Rp 350 rebu. Kayanya ada deh yang nyampe Rp 400 rebu, tapi gue lupa apa aja. Harga game digital (bisa di-download dari eShop, aplikasi toko di dalem 3DS) macem-macem, mulai dari gratis sampe $20.<br />\r\n<br />\r\nGAME 3DS BLOM BISA DIBAJAK. Tapiii&hellip; Karena kompatibel dengan game DS, berarti kompatibel juga dengan flashcart DS. Iya, lo bisa main game DS bajakan di 3DS. Tapi ya gitu deh, jangan pernah update firmware sebelom lo pastikan flashcart udah updated sesuai versi firmware itu! Flashcart yang &ldquo;jodoh&rdquo; sama 3DS: Acekard 2i, Supercard DSTWO, R4idsn 3DS, dan Ezflash vi.<br />\r\n<br />\r\nRecommended sellers: Kalau di BEC Bandung, naik ke lantai tempat konsol dan game, trus cari toko Ultra (di pojokan, dengan kokoh owner yang ganteng). Kalau di Mangdu, gue lupa namanya -.- Kalau online, ya Drakuli. Kalau lo temen gue, tanya no. telp Kenken ke @ibnutri&ndash;ini langganan anak-anak Agate Studio, yang harga jualnya bisa murah amit-amit pake banget.<br />\r\n&nbsp;</p>\r\n', 'Rizky Bayu', '2015-07-22', '#nintendo #3ds #coeg', '1');
INSERT INTO `tbl_game` VALUES ('58', 'The Division di tunda !', '<p>The Division mengambil tempat di new york , dan pemain misinya adalah untuk memulihkan ketenangan oleh menyelidiki sumber virus .Pemain harus bergabung dengan agen kemajuan divisi lain sebagai mereka .Sebagai permainan yang ditetapkan dalam sebuah third-person perspektif , karakter model terlihat .Pemain bisa customize karakter mereka , ransel dan tingkat up senjata , gigi , dan keterampilan .Permainan fitur yang dinamis , waktu didasarkan sistem cuaca .Pemain bisa menggunakan ini untuk keuntungan strategis .</p>\r\n\r\n<p>3 dalam permainan , sebuah pandemik hitam yang menyebar pada jumat menyebabkan pemerintah amerika serikat untuk tumbang di lima hari; layanan dasar gagal satu per satu , dan tanpa akses terhadap makanan atau air , negara dengan cepat turun ke dalam kekacauan .Dalam rangka menyambut yang menghancurkan pandemik yang menyapu melalui kota-kota di seluruh negeri tersebut , termasuk new york city , hal ini menemukan bahwa penyebaran penyakit ini ditularkan melalui kuman pada banknotes .4 sebagai upaya terakhir , pemain merupakan bagian dari sebuah regu unit self-supported taktis usia ~</p>\r\n', 'Rizky Bayu', '2015-07-23', '#TheDivision', '3');
INSERT INTO `tbl_game` VALUES ('59', 'One piece warrior 3 Rilis !!', '<p>Kali ini sekitar, bajak laut prajurit 3 akan mencakup satu bagian dari awal dari manga, menampilkan total 37 playable karakter.Dalam kasus anda mereka khawatir, dua pemain kooperasi adalah dipertegas lagi di ps3 dan ps4, kedua offline dan -- online versi vita akan menampilkan ad hoc dan dukungan wi-fi.Pada pc, namun, offline kooperasi adalah sebuah pergi, tetapi &#39; online mungkin melewati &#39; menurut tecmo koei &#39;s hisashi koinuma.</p>\r\n\r\n<p>Meski demikian kenyataannya, omega force &#39; sangat senang dengan dinasti prajurit penjualan untuk pc, &#39; sehingga akan terus mendukung platform.Sesuatu yang mungkin.Koinuma menyatakan bahwa perubahan terbesar adalah gaya visual.Aku bertanya apa keuntungan yang untuk ps4 platform, untuk yang ia menjawab, yang &#39; ps4 toon shading sistem membuat terlihat dekat dengan asli manga atau anime, yang terbaik di ps4.Juga, yang dapat ps4 tuan rumah 200 musuh di layar sementara ps3 hanya bisa melakukan 100. &#39;Ini semakin gila dengan itu banyak musuh sekaligus, sejak karakter sekarang dapat melakukan quad-ally supers yang melibatkan seluruh tim anda.Bermain</p>\r\n', 'Rizky Bayu', '2015-07-23', '#ONEPIECE', '1');
INSERT INTO `tbl_game` VALUES ('60', 'Crisis 3', '<p>The hunted becomes the hunter in the CryEngine-powered open-world shooter Crysis 3! Players take on the role of &#39;Prophet&#39; as he returns to New York in the year in 2047, only to discover that the city has been encased in a Nanodome created by the corrupt Cell Corporation. The New York City Liberty Dome is a veritable urban rainforest teeming with overgrown trees, dense swamplands and raging rivers. Within the Liberty Dome, seven distinct and treacherous environments become known as the Seven Wonders. This dangerous new world demands advanced weapons and tactics. Prophet will utilize a lethal composite bow, an enhanced Nanosuit and devastating alien tech to become the deadliest hunter on the planet.</p>\r\n\r\n<p>Prophet is on a revenge mission after uncovering the truth behind Cell Corporation&#39;s motives for building the quarantined Nanodomes. The citizens were told that the giant citywide structures were resurrected to protect the population and to cleanse these metropolises of the remnants of Ceph forces. In reality, the Nanodomes are CELL&#39;s covert attempt at a land and technology grab in their quest for global domination. With Alien Ceph lurking around every corner and human enemies on the attack, nobody is safe in the path of vengeance. Everyone is a target in Prophet&#39;s quest for retribution.</p>\r\n', 'Rizky Bayu', '2015-07-22', '#CRISIS3 #GAMEOFTHEDAY #FPS', '3');
INSERT INTO `tbl_game` VALUES ('61', 'Meet Your Maker Bubar!', '<p><strong>IndoDota2&nbsp;</strong>&ndash; Meet Your Maker adalah salah satu tim Dota terbaik di dunia. Entah sudah berapa banyak piala yang mreka menangkan dari turnament besar yang diadakan di seluruh pelosok dunia. Gua sendiri sangat suka dengan cara khas bermain Maelk, sang kapten. Benar2 super jenius.</p>\r\n\r\n<p>Jadi ceritanya Meet Your Makers atau disingkat MYM dinyatakan bubar oleh Maelk sendiri setelah turnmanen Dota 2 International. Walaupun hasil yang mereka capai cukup memuaskan bagi tim dan juga para fans nya yaitu peringkat ke 4, tapi Maelk dan kawan2 tetap akan bubar juga.</p>\r\n\r\n<p>Menurut Maelk, setiap orang ingin menempuh jalannya masing2. Mungkin ada yang bergabung dengan tim besar lainnya, ada juga melanjutkan kehidupan nyata seperti bekerja dan kuliah. Tapi Maelk tidak menyinggung apapun tentang seseorang secara spesifik, ia hanya mengatakan bahwa masing2 dari mereka ingin masuk ke era baru dengan adanya game yang baru juga.</p>\r\n', 'Rizky Bayu', '2015-07-22', '#Dota2', '1');
INSERT INTO `tbl_game` VALUES ('62', 'Spongebob Rilis', '<p>Dikabarkan nickgelodion akan membuat game yang bertemakan sponegbob kembali dan akan membuat fitur game yang sangat bagus&nbsp;dan asik untuk dimanakan oleh anak anak bahkan hingga orang dewasa , game ini dikabarkan diliris pada akhir Desember&nbsp;tersedia di pc dan ps3 dan ps4 , game spongebob ini bertemakan open world sehingga pemain bisa sangat puas mengililingi&nbsp;kota bikini bottom dan pemain juga juga membunuh warga sekitar menarik bukan ? ayo kita lihat saja nanti pada akhir desember ! :)</p>\r\n', 'Rizky Bayu', '2015-08-03', '#SPONGEBOB', '1');

-- ----------------------------
-- Table structure for tbl_games
-- ----------------------------
DROP TABLE IF EXISTS `tbl_games`;
CREATE TABLE `tbl_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_game` varchar(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `stok` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_games
-- ----------------------------
INSERT INTO `tbl_games` VALUES ('1', 'Dead Rising', '50000', '7');
INSERT INTO `tbl_games` VALUES ('2', 'Call of duty Black Ops', '90000', '26');
INSERT INTO `tbl_games` VALUES ('4', 'Assasin Creed 2', '51000', '12');
INSERT INTO `tbl_games` VALUES ('6', 'Ghost Buster', '10000', '5');
INSERT INTO `tbl_games` VALUES ('7', 'Battlefield 3', '90000', '50');
INSERT INTO `tbl_games` VALUES ('8', 'Sniper Ghost Warrior', '60000', '0');
INSERT INTO `tbl_games` VALUES ('9', 'Watchdogs', '120000', '42');
INSERT INTO `tbl_games` VALUES ('10', 'Grid 2', '57000', '19');

-- ----------------------------
-- Table structure for tbl_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kategori`;
CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_kategori
-- ----------------------------
INSERT INTO `tbl_kategori` VALUES ('1', 'Berita');
INSERT INTO `tbl_kategori` VALUES ('2', 'Hardware');
INSERT INTO `tbl_kategori` VALUES ('3', 'Spect');
INSERT INTO `tbl_kategori` VALUES ('4', 'Games');

-- ----------------------------
-- Table structure for tbl_slider
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider` (
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_slider
-- ----------------------------
INSERT INTO `tbl_slider` VALUES ('data1/tooltips/2.jpg');
INSERT INTO `tbl_slider` VALUES ('data1/tooltips/3.jpg');
INSERT INTO `tbl_slider` VALUES ('data1/tooltips/1.jpg');

-- ----------------------------
-- Table structure for tbl_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_transaksi`;
CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tgl_beli` datetime DEFAULT NULL,
  `jumlah_beli` int(255) DEFAULT NULL,
  `fk_game` int(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `stt` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_transaksi
-- ----------------------------
INSERT INTO `tbl_transaksi` VALUES ('24', 'Rizky Bayu', 'rizkybayu66@gmail.com', '2015-08-03 09:04:42', '1', '4', '087231871', '0');
INSERT INTO `tbl_transaksi` VALUES ('25', 'Purwa Darozatun', 'purwa@gmail.com', '2015-08-03 09:29:38', '2', '1', '0871562516', '1');
INSERT INTO `tbl_transaksi` VALUES ('26', 'Masashi Kishimoto', 'masahashi@gmail.com', '2015-08-04 01:54:33', '3', '9', '08716266212', '1');
INSERT INTO `tbl_transaksi` VALUES ('27', 'Jojon', 'jojon@gmail.com', '2015-08-04 01:56:30', '1', '10', '0872652652', '1');
INSERT INTO `tbl_transaksi` VALUES ('28', 'Nurohman', 'nurohman@gmail.com', '2015-08-04 02:22:26', '10', '8', '0897727637', '0');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'restu', 'restu@javan.co.id', '$2y$10$9DNKIUhH80mGqSVCtbvUp.984MCuF5bd4LZpkhje4IPAM/4VorStK', 'PFNm4gfyqVgGIJbifJV9h2lJmrNbbdwIZoSMNi5T6dbrc3kto6LRSifjnKO5', '2015-07-14 09:01:51', '2015-07-27 08:10:53');
INSERT INTO `users` VALUES ('2', 'Rizky Bayu', 'rizkybayu66@gmail.com', '$2y$10$qbwRMvXbVQclA6Z1R7WoAOWyx6RwP4OTf8BXe3LEuJd3w3Ae3dnuK', 'Fl2m3bwZlynGPCIYgojrtCibVJ5yugp4EPOY29a75VlyBxnW6tYb0vYZ84Uu', '2015-07-14 09:51:35', '2015-07-30 07:25:23');
