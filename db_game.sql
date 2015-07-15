/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : db_game

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-07-15 10:22:01
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
  `kategori` varchar(255) DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_game
-- ----------------------------
INSERT INTO `tbl_game` VALUES ('52', 'Call of Duty: Black Ops 3 is confirmed', 'Call Of Duty Black Ops 3 is confirmed and will be the next in the highly acclaimed Call of Duty series. Announced last week by Treyarch, Black Ops 3 will be the third edition in the Black Ops series. Black Ops is a sub-series to Activation\'s Call of Duty title.<br>\r\nMuch of Black Ops plays out through the eyes of military (CIA) operative Alex Mason, this is primarily done through flashbacks. From the first teaser, released last week I was lead to believe that we could potentially be seeing a welcome return to the fields and forests of World War 2. The player would be lead through the campaign in a similar way as before via flashback from a Mason relative, grandfather perhaps.<br>\r\nAlas, it now seems that we are destined to fight our battles in Call of Duty: Black Ops 3, some time in the distant future. An almost Cyberpunk, Deus Ex theme seems to be emanating from the various cryptic clues.<br>\r\n<br>\r\nA World War throwback would still be my number one choice but the Black Ops series has not failed me yet. The series is sharp and well executed, leading players to connect more with characters than they do in the alternate Call of Duty series. (Modern Warfare is the exception)', 'Rizky Bayu', 'Game', '2015-07-13', '#FPS #NEWGAMES #BESTGAME #COD');
INSERT INTO `tbl_game` VALUES ('55', 'GEFORCE GTX TITAN BLACK ', 'Familiar dengan kata TITAN? TITAN menurut ilmu Astronomi merupakan bulan paling besar yang dimiliki oleh planet Saturnus. TITAN juga memiliki arti tersendiri dalam mitos Yunani, yaitu para penguasa bumi, anak dari dewa langit Uranus dan dewi bumi Gaia. Lalu, apa hubungannya dengan review graphics card kali ini? Semua yang memiliki gelar TITAN memiliki kesamaan, yaitu menjadi yang terkuat. Begitu juga di dunia graphics card, memulai debut semenjak tahun 2012, TITAN memang diciptakan untuk memberikan performa lebih dibandingkan dengan graphics card sekelasnya, yaitu graphics card untuk PC Desktop. Kemampuan tinggi keluarga TITAN membuat NVIDIA menempatkannya di kelas harga premium.<br><br>\r\nSaat ini, TITAN sendiri sudah menginjak generasi ke 4. Setelah sebelumnya terdapat TITAN, TITAN BLACK, dan juga TITAN Z, NVIDIA baru saja memperkenalkan anggota paling baru dari keluarga TITAN, yaitu GeForce GTX TITAN X. Seperti TITAN pada umumnya, GeForce GTX TITAN X juga dirancang untuk menghadirkan pengalaman bermain game terbaik di resolusi Ultra HD/4K dengan pengaturan kualitas grafis “rata kanan”. Namun, tidak seperti keluarga TITAN yang biasanya mewarisi “ilmu” dari NVIDIA TESLA dengan kemampuan Double Precision sangat tinggi, TITAN X tampil berbeda. TITAN generasi sebelumnya memiliki kemampuan menggunakan 1/3 dari seluruh CUDA Core untuk melakukan komputasi Double Precision. Sementara TITAN X hanya mampu menggunakan 1/32 dari seluruh CUDA Core untuk melakukan komputasi Double Precision, seperti GeForce gaming umumnya. Walaupun begitu, TITAN X tetap mewarisi ciri khas TITAN dengan kapasitas memori sangat besar dimana kali ini sebesar 12GB!!!\r\n<br><br>\r\nGeForce GTX TITAN X bisa dikatakan menjadi kompetitor dari Radeon R9 295 X2 karena memiliki rentang harga yang berdekatan. Menariknya, TITAN X ini hanya menggunakan satu chip GPU, sedangkan AMD R9 295X2 adalah graphics card dengan dual GPU. Lalu, apakah performa yang dihasilkan oleh TITAN X ini mampu mengalahkan R9 295 X2? Apakah harga premium pantas disematkan di graphcis card tersebut? Kami akan menjawabnya di artikel kami kali ini.', 'Rizky Bayu', 'Hardware', '2015-07-13', '#newVGA #titan #nvidia');
INSERT INTO `tbl_game` VALUES ('57', 'Tips membeli nintendo 3DS!', 'Buat yang Bakal Beli Nintendo 3DS\r\n\r\n3DS itu region locked. Maksudnya, game yang dirilis di region tertentu hanya bisa dimainkan di region 3DS yang sesuai. Ada 5 region 3DS: Jepang (JP), Asia (ASI), Amerika (US), Australia (AU), dan Eropa (EU). Kemudian ada 3 region game 3DS: Jepang (JP), Amerika (US), dan Eropa (EU). Game JP hanya bisa dimainkan di 3DS JP. Game US bisa dimainkan di 3DS US dan ASI. Game EU bisa dimainkan di 3DS EU dan AU. Interface 3DS JP berbahasa Jepang, sementara interface 3DS keempat region lainnya berbahasa Inggris.<br><br>\r\n3DS kompatibel dengan game-game DS dan DSi. Jadi jangan mau kalau toko nawarin lo DS. Serius, mending nambah sejutaan, dapet 3DS. Nintendo bakal fokus ngerilis game-game anyar buat 3DS lho, bukan buat DS dan DSi.<br><br>\r\n3DS sekarang ada 2 macem: 3DS biasa (berbentuk kotak seukuran DS Lite) dan 3DS XL (ujung-ujungnya bulet, ukurannya sedikit lebih gede). Kecuali lo sama gilanya kaya gue, mending beli XL deh. Fiturnya persis plek. Bedanya cuma ukuran lebih gede, alhasil monitor juga gede (sementara resolusi nggak berubah, tapi nggak pecah kok). Stamina baterai XL juga lebih awet. Dan posisi stylus bergeser ke samping. Stylus 3DS ada di atas, cukup awkward, hahaha…<br><br>\r\nToko biasanya jual 3DS dan 3DS XL dalam 3 skema: Handheld doang tanpa game, handheld dengan 1 game (istilahnya bundle), dan limited edition. Bundle itu basically handheld biasa + 1 buah game, dan bisa lo beli dengan harga lebih murah dibandingkan beli keduanya secara terpisah. Misalnya bundle Mario Kart. Kalau lo nggak mau game-nya, ya udah, beli aja 3DS warna biru. Sementara limited edition itu ditandai dengan warna kover 3DS yang juga beda. Produksinya dalam jumlah terbatas, wajar kalau harganya makin lama makin naik. Misalnya 3DS Ocarina of Time dan 3DS XL Pikachu.<br><br>\r\nPas artikel ini gue tulis, harga 3DS sekitar Rp 1,7 juta - Rp 1,8 juta, kecuali warna Flame Red yang nambah 50 rebuan. Harga 3DS XL Rp 2 juta - Rp 2,2 juta. Bundle 3DS XL biasanya Rp 2,4 juta. Dan gue beli 3DS XL Pikachu beberapa minggu lalu masih Rp 2,8 juta (di BEC Bandung, sementara di Mangdu Jakarta ada yang jual Rp 2,7 juta). Harga game fisik antara Rp 250 rebu - Rp 350 rebu. Kayanya ada deh yang nyampe Rp 400 rebu, tapi gue lupa apa aja. Harga game digital (bisa di-download dari eShop, aplikasi toko di dalem 3DS) macem-macem, mulai dari gratis sampe $20.<br><br>\r\nGAME 3DS BLOM BISA DIBAJAK. Tapiii… Karena kompatibel dengan game DS, berarti kompatibel juga dengan flashcart DS. Iya, lo bisa main game DS bajakan di 3DS. Tapi ya gitu deh, jangan pernah update firmware sebelom lo pastikan flashcart udah updated sesuai versi firmware itu! Flashcart yang “jodoh” sama 3DS: Acekard 2i, Supercard DSTWO, R4idsn 3DS, dan Ezflash vi.<br><br>\r\nRecommended sellers: Kalau di BEC Bandung, naik ke lantai tempat konsol dan game, trus cari toko Ultra (di pojokan, dengan kokoh owner yang ganteng). Kalau di Mangdu, gue lupa namanya -.- Kalau online, ya Drakuli. Kalau lo temen gue, tanya no. telp Kenken ke @ibnutri–ini langganan anak-anak Agate Studio, yang harga jualnya bisa murah amit-amit pake banget.<br><br>', 'Rizky Bayu', 'Harga', '2015-07-13', '#nintendo #3ds');
INSERT INTO `tbl_game` VALUES ('58', 'The Division di tunda !', 'The Division takes place in mid-crisis New York, and the player\'s mission is to restore order by investigating the source of the virus. Players have to team up with other Division agents as they progress. As the game is set in a third-person perspective, the character model is visible. Players can customize their character, backpack and level up weapons, gear, and skills. The game features a dynamic, time based weather system. Players can use this for strategic advantage.[3]\r\n<br><br>In the game, a pandemic that spreads on Black Friday causes the United States Government to collapse in five days; basic services fail one by one, and without access to food or water, the country quickly descends into chaos. In the wake of the devastating pandemic that sweeps through cities across the country, including New York City, it is discovered that the spread of the disease is transmitted through germs on banknotes .[4] As a last resort, the player is part of a classified unit of self-supported tactical agents, known as the \"Strategic Homeland Division (SHD)\", or \"The Division\" for short. Leading seemingly ordinary lives among us, the agents are trained to operate independent of command when all else fails. This group was established to combat the threat brought about by the outbreak and are given direct authority by the President of the United States to do whatever it takes to prevent the fall of society and piece the city back together in a massive multiplayer online situation, putting them against AI-controlled enemies, as well as other players in the game. Throughout the game, the agents will find themselves caught in a worldwide conspiracy and will be forced to combat both the threats of the virus as well as those who unleashed it.<br>', 'Rizky Bayu', 'Game', '2015-07-13', '#TheDivision');
INSERT INTO `tbl_game` VALUES ('59', 'One piece warrior 3 Rilis !!', 'Gameplay is said to be similar to the first two installments, with slight improvements, like Luffy being able to use any Haki at a command, or Zoro being able to use however many swords he wants to use like his one sword style from the Alabasta Arc. Another new feature is the Kizuna Rush, which summons another character alongside the player in battle to perform a combination attack. Up to four players can be summoned at once this way, with the finishing attacks becoming more powerful as more characters join. In addition to the main story mode, there is also a \"Dream Log\" mode, in which characters and items are revealed and unlocked as the player progresses through the mode\'s battles. It also features fights against giant bosses. Unlike the second installment, it starts with the storyline of One Piece from the East Blue, the Grand Line, and the New World. It contains new adds and same chapters from the first installment.<br>', 'Rizky Bayu', 'Berita', '2015-07-13', '#ONEPIECE');
INSERT INTO `tbl_game` VALUES ('60', 'Crisis 3', 'tesett amamma', 'Rizky Bayu', 'Berita', '2015-07-14', '#cisi3');

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
INSERT INTO `users` VALUES ('1', 'restu', 'restu@javan.co.id', '$2y$10$9DNKIUhH80mGqSVCtbvUp.984MCuF5bd4LZpkhje4IPAM/4VorStK', 'gUT07mlfJEfS7oV709A2mGrVh6fef5YKHw2WJDAZFur04mvDYVS4nsczUsl9', '2015-07-14 09:01:51', '2015-07-14 10:13:04');
INSERT INTO `users` VALUES ('2', 'Rizky Bayu', 'rizkybayu66@gmail.com', '$2y$10$qbwRMvXbVQclA6Z1R7WoAOWyx6RwP4OTf8BXe3LEuJd3w3Ae3dnuK', '6sVHSQez3T9uirqQnMKJEFUuW4KEL7Q6T5tTCo6VU1SI37iEecIdz6agOmfz', '2015-07-14 09:51:35', '2015-07-15 03:16:52');
