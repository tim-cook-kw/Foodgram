-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 12:51 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfoodgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `title` varchar(40) NOT NULL,
  `slug` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `ingredient` text,
  `direction` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_category`, `title`, `slug`, `description`, `created_at`, `updated_at`, `created_by`, `image`, `ingredient`, `direction`) VALUES
(1, 4, 'Sate Padang', 'food', 'Sate Padang adalah sebutan untuk tiga jenis varian sate di Sumatra Barat, yaitu Sate Padang, Sate Padang Panjang dan Sate Pariaman.\r\n\r\nSate Padang memakai bahan daging sapi, lidah, atau jerohan (jantung, usus, dan tetelan)[1] dengan bumbu kuah kacang kental (mirip bubur) ditambah cabai yang banyak sehingga rasanya pedas.\r\n\r\nSate Padang Panjang dibedakan dengan kuah sate nya yang berwarna kuning sedangkan sate Pariaman kuahnya berwarna merah. Rasa kedua jenis sate ini juga berbeda. Sedangkan sate Padang mempunyai bermacam rasa perpaduan kedua jenis varian sate di atas.', '2019-07-22 18:17:59', '2019-07-26 09:17:05', 1, 'imagearticle/sate-padang.jpg', NULL, NULL),
(2, 4, 'Sate Ayam', 'food', 'Sate Ayam adalah makanan khas Indonesia. Sate Ayam dibuat dari daging ayam. Pada umumnya sate ayam dimasak dengan cara dipanggang dengan menggunakan arang dan disajikan dengan pilihan bumbu kacang atau bumbu kecap. Sate ini biasanya disajikan bersama dengan lontong atau nasi.', '2019-07-22 18:19:46', '2019-07-22 18:19:46', 1, 'imagearticle/sate-ayam.jpg', NULL, NULL),
(4, 4, 'Sup Ayam', 'food', 'Sup ayam spesial untuk buka puasa sudah selesai dibuat. Kuah yang gurih dan hangat berkolaborasi dengan ayam  dan aneka sayuran menjadikan sajian semakin spesial.  Sajikan selagi hangat dengan nasi hangat . Agar sup terasa semakin lezat, anda bisa menaburkan bawang merah goreng di atasnya.', '2019-07-22 18:22:40', '2019-07-22 18:22:40', 1, 'imagearticle/a6b31465-018b-48d4-a20d-14e7139f6ce7.jpg', NULL, NULL),
(5, 4, 'Es Teler', 'beverage', 'Es teler adalah minuman yang berisi berbagai macam bahan. Ada potongan alpukat, nangka, kelapa muda dan berbagai macam bahan lain yang tiap pedagang pasti memiliki resep yang berbeda. Kuah dari es teler biasanya terbuat dari santan encer yang ditambahkan permanis berupa susu kental manis dan sirup.', '2019-07-22 18:24:28', '2019-07-22 18:24:28', 1, 'imagearticle/es-teler_20180519_061524.jpg', NULL, NULL),
(6, 4, 'Summer Fruit Daiquiris', 'beverage', 'Nama Daiquiries diambil dari nama pantai Daiquiri di Kuba. Minuman ini sejenis dengan koktail berbahan dasar white rum, dengan campuran gula dan perasan lemon. Diciptakan oleh Jenning Fox, seorang insinyur pertambangan, pada masa perang antar Amerika – Spanyol, minuman ini sangat menyegarkan dan sangat zesty (mengandung sitrus) sehingga cocok jika diminum di musim panas siang hari yang terik. Sesuai sekali dengan namanya.\n\nKamu juga bisa membuat sendiri minuman menyegarkan ini, tentunya tanpa white rhum yaa, sehingga tidak mengandung alkohol dan aman diminum oleh anak-anak sekalipun.', '2019-07-22 18:25:57', '2019-07-22 18:25:57', 1, 'imagearticle/Q2faFYiqAF.jpg', NULL, NULL),
(7, 4, 'Dendeng Gepuk', 'food', 'Gepuk adalah makanan khas sunda Jawa Barat yang terbuat dari daging sapi,terasa sedikit manis dan gurih. Biasanya gepuk dibuat dengan daging sapi,yang diiris searah dengan serat daging dan direbus setengah mateng, kemudian di pukul pukul hingga agak empuk.', '2019-07-22 18:26:51', '2019-07-22 18:27:32', 1, 'imagearticle/072542400_1543328464-resep-cara-membuat-empal-gepuk-sapi-empuk-sedap-dan-gurih.jpg', NULL, NULL),
(8, 4, 'Ikan Bakar', 'food', 'Ikan bakar adalah hidangan ikan yang dibakar atau dipanggang di atas api atau bara api. Hidangan ikan yang dibakar, muncul secara universal di berbagai belahan dunia.[1] Akan tetapi secara khusus di dunia internasional, istilah \"ikan bakar\" merujuk kepada ikan bakar khas Indonesia dan Malaysia berupa ikan atau boga bahari lain yang dipanggang di atas arang atau bara api. Ikan bakar adalah salah satu hidangan klasik Indonesia.', '2019-07-22 18:29:28', '2019-07-22 18:29:28', 1, 'imagearticle/Ikan-Bakar-Feature-Image.png', NULL, NULL),
(9, 4, 'Kembang Tahu', 'beverage', 'Wedang Tahu adalah minuman yang beromakan jahe dan berisi kembang tahu yang terbuat dari sari kedelai. Minuman ini berkhasiat sebagai penghangat tubuh dan sangat cocok bila dinikmati pada musim hujan, pada pagi ataupun sore hari.\n\nWedang Tahu terbuat dari susu kedelai yang dicampur dengan air garam, dan bubuk agar-agar yang dimasak sehingga menjadi kembang tahu atau tahu sutera, yang akan dijadikan sebagai isi dari wedang Tahu tersebut.\n\nAda kesamaan rasa dalam kuah wedang tahu ini dengan wedang ronde, hanya saja yang membedakan adalah wedang ronde terdiri dari beberapa macam komposisi yang penuh warna sedang wedang tahu sendiri hanya minimal warna saja. namun soal rasa tak beda jauh. Penjual wedang tahu biasa menjajakannya dengan pikulan atau berada di pinggir jalan dan untuk menarik perhatian para calon pembeli, mereka membunyikan peranti musik teng-teng berukuran mini dengan pemukul dari kayu.\n\nWedang Tahu konon berasal dari negeri Tiongkok yang dibawa ke Indonesia pada akhir abad ke-19, oleh seorang imigran dari negeri tersebut sehingga menjadi minuman khas Semarang.', '2019-07-22 18:30:51', '2019-07-22 18:30:51', 1, 'imagearticle/wedang-tahu.jpg', NULL, NULL),
(10, 4, 'Pepes Ikan', 'food', 'Pepes atau Pais merupakan suatu cara khas dari Jawa Barat untuk mengolah bahan makanan dengan bantuan daun pisang untuk membungkus ikan beserta bumbunya. Cara membuatnya adalah bumbu dan rempah dihaluskan dan ditambah daun kemangi, tomat, dan cabai dibalur/dibalut bersama ikan mas yang sudah dibersihkan.', '2019-07-22 18:32:06', '2019-07-22 18:32:06', 1, 'imagearticle/pepes-ikan-kerapu-50321411.jpg', NULL, NULL),
(11, 4, 'Nasi Lengko', 'food', 'Sega lengko (nasi lengko dalam bahasa Indonesia) adalah makanan khas masyarakat pantai utara (Tegal dan sekitarnya). Makanan khas yang sederhana ini sarat akan protein dan karbohidrat serta rendah kalori karena bahan-bahan yang digunakan adalah 100% non-hewani. Bahan-bahannya antara lain: nasi putih (panas-panas lebih baik), tempe goreng, tahu goreng, mentimun (mentah segar, dicacah), tauge (direbus), daun kucai (dipotong kecil-kecil), bawang goreng, bumbu kacang (seperti bumbu rujak, pedas atau tidak, tergantung selera), dan kecap manis. Dan, umumnya kecap manis yang dipergunakan adalah kecap manis encer, bukan yang kental. Disiramkan ke atas semua bahan.\r\n\r\nTempe dan tahu goreng dipotong-potong kecil dan diletakkan di atas sepiring nasi. Mentimun dicacah, lalu ditaburi pula di atasnya, juga toge rebus, serta disiram bumbu kacang di atasnya, dan potongan daun kucai, lalu diberi kecap secukupnya sampai kecoklatan, dan di taburi bawang goreng. Dan sekeping kerupuk aci yang putih, yang bundar atau kotak, menjadi kondimennya. Sebagian orang suka melumuri kerupuknya dengan kecap, sebelum mulai dimakan. Beberapa orang suka meminta nasi lengkonya diberi seujung sutil atau dua minyak yang dipakai untuk menggoreng tempe dan tahu.', '2019-07-23 06:00:00', '2019-07-23 06:00:00', 1, 'imagearticle/nasilengko.jpg', NULL, NULL),
(12, 4, 'Docang', 'food', 'Docang dari bahasa Cirebon singkatan dari dua kata yaitu; Bodo (baceman) dari oncom dage + Kacang Hijau yang dijadikan Toge. Lagi pula Docang bisa jadi masuk kuliner Nasional makanan khas Cirebon, yang merupakan perpaduan dari lontong, daun singkong, toge, dan kerupuk, yang berkolaborasi sayur Oncom Dage/Oncom Gembos yang terbuat dari ampas tahu dicampur sedikit bungkil kacang tanah (sisa perasan dijadikan minyak) yang disebut gempa (yang dihancurkan) serta dikombinasikan dengan parutan kelapa muda.\r\n\r\nMakanan ini mempunyai rasa khas yang gurih dan nikmat apabila disajikan dalam keadaan panas/hangat dan untuk harga relatif terjangkau semua kalangan. Docang yang merupakan makanan asli Cirebon, bisa jadi lambat laun dengan segala kemajuan zaman dan perkembangan makanan cepat saji, docang mulai bergeser dan lambat laun jarang ditemui. Tetapi harapan dalam melestarikan budaya, Docang akan tetap eksis karena masih ada generasi penerus untuk melestarikan khas Cirebon dengan dikenal sebagai Kota Wali.', '2019-07-23 07:00:00', '2019-07-23 07:00:00', 1, 'imagearticle/docang.jpg', NULL, NULL),
(22, 4, 'Tumis Buncis', 'food', 'Konsumsi sayuran sangat penting dilakukan agar kebutuhan nutrisi dalam tubuh terpenuhi dengan baik. Ada beragam sayuran yang bisa diolah menjadi masakan super lezat dan menggugah selera. Salah satu sayur tersebut adalah sayur buncis. \n\nRasanya yang khas, teksturnya yang lembut dan segar dan aromanya yang wangi, menjadikan buncis sebagai salah satu sayur favorit. Terlebih lagi, ketika buncis dimasak tumis dengan resep sederhana yang enaknya juara, menggugah selera dan tiada duanya. \n\nBerikut resep cara membuat tumis buncis yang enaknya juara, pedas dan gurih. \n\nBahan\n\n200 gram buncis (siangi, potong serong sesuai selera)\n3 siung bawang putih (memarkan, cincang halus)\n2 siung bawang merah (cincang halus)\n7 buah cabai rawit merah (iris serong)\nGaram (secukupnya)\nGula (secukupnya)\nKaldu ayam bubuk (secukupnya)\nMinyak goreng (secukupnya)\nCara Membuat\nPanaskan minyak kemudian tumis bawang putih dan bawang merah hingga harum.\nMasukkan cabai rawit dan sayur buncis, aduk rata. \nTambahkan garam, gula dan kaldu ayam bubuk, aduk rata sambil terus masak menggunakan api kecil. \nKoreksi rasa, jika sudah matang segera angkat dan sajikan.\nSajian ini akan semakin nikmat jika disajikan bersama taburan bawang merah goreng dan nasi putih hangat. Well, tertarik membuat sayur praktis ini di rumah? Selamat mencoba resep ini dan semoga keluarga di rumah suka.', '2019-07-23 00:22:37', '2019-07-23 00:22:37', 1, 'imagearticle/tumis-bunciss.jpg', NULL, NULL),
(24, 2, 'Dimsum', 'food', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '2019-07-26 10:17:57', '2019-07-26 10:17:57', 1, 'imagearticle/20180328170610-1-ilustrasi-shumai-001-tantri-setyorini.jpg', NULL, NULL),
(26, 4, 'Dimsum', 'food', '<p><strong>Dim sum</strong>adalah istilah dari <a href=\"https://id.wikipedia.org/wiki/Bahasa_Kantonis\" title=\"Bahasa Kantonis\">bahasa Kantonis</a> dan artinya adalah &quot;makanan kecil&quot;. Biasanya dim sum dimakan sebagai <a href=\"https://id.wikipedia.org/wiki/Sarapan\" title=\"Sarapan\">sarapan</a> atau <em><a href=\"https://id.wikipedia.org/wiki/Brunch\" title=\"Brunch\">brunch</a></em>. Namun karena dimsum populer ke dunia dari <a href=\"https://id.wikipedia.org/wiki/Hongkong\" title=\"Hongkong\">Hongkong</a> maka istilah <strong>dimsum</strong> lebih populer dibandingkan <strong>dianxin</strong>.</p><p>Dimsum terdiri dari berbagai macam penganan kecil-kecil yang biasanya merupakan makanan bersama teh. Orang Kanton sendiri sangat mementingkan acara minum teh yang disebut <strong>yamcha</strong>&nbsp;</p>', '2019-07-26 10:19:16', '2019-07-26 10:19:16', 1, 'imagearticle/20180328170610-1-ilustrasi-shumai-001-tantri-setyorini.jpg', NULL, NULL),
(27, 4, 'Yogurt', 'beverage', '<p><strong>Yoghurt</strong> atau<strong>&nbsp;yogurt</strong> adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Susu\" title=\"Susu\">susu</a> yang dibuat melalui&nbsp;<a href=\"https://id.wikipedia.org/wiki/Fermentasi\" title=\"Fermentasi\">fermentasi</a> <a href=\"https://id.wikipedia.org/wiki/Bakteri\" title=\"Bakteri\">bakteri</a>. Yoghurt dapat dibuat dari susu apa saja, termasuk&nbsp;<a href=\"https://id.wikipedia.org/w/index.php?title=Susu_kacang_kedelai&action=edit&redlink=1\" title=\"Susu kacang kedelai (halaman belum tersedia)\">sari kacang kedelai</a>. Produksi modern saat ini didominasi&nbsp;<a href=\"https://id.wikipedia.org/wiki/Susu_sapi\" title=\"Susu sapi\">susu sapi</a>. Fermentasi gula susu (<a href=\"https://id.wikipedia.org/wiki/Laktosa\" title=\"Laktosa\">laktosa</a>) menghasilkan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Asam_laktat\" title=\"Asam laktat\">asam laktat</a>yang berperan dalam&nbsp;<a href=\"https://id.wikipedia.org/wiki/Protein\" title=\"Protein\">protein</a> susu untuk menghasilkan tekstur seperti gel dan aroma unik pada yoghurt. Yoghurt tersedia dalam beraneka macam rasa, rasa alami, rasa buah, rasa vanilla, atau rasa cokelat juga populer. </p>', '2019-07-26 10:24:02', '2019-07-26 10:24:02', 1, 'imagearticle/Coconut-yogurt-07-720x540.jpg', NULL, NULL),
(28, 2, 'Pengganti Bumbu Masakan', 'Tezt', '<p><strong>Tepung roti</strong></p><p>Foodgramers tidak memiliki tepung roti? Jangan khawatir, kamu bisa menggantinya dengan oatmeal atau cracker asin yang dihancurkan. Remah cracker dan oatmeal ini bisa menjadi pengganti tepung roti sebagai baluran makanan yang akan digoreng.</p><p>&nbsp;</p><p><strong>Tepung maizena</strong></p><p>Kehabisan tepung maizena untuk mengentalkan masakan? bukan masalah. Gantikan saja 1 sdm maizena dengan tepung terigu. Masakan akan tetap menjadi kental dan gurih, jangan lupa sesuaikan takaran penggantinya yah! 1:1.</p><p>&nbsp;</p><p><strong>Kecap Jepang</strong></p><p>Memakan masakan jepang pasti terasa ada yang kurang jika kita tidak memiliki Shoyu (kecap asin jepang). Nah, untuk mengakalinya, kita bisa menggantinya dengan kecap asin biasa yang diberi sedikit air.</p><p>&nbsp;</p><p><strong>Bumbu Szechuan</strong></p><p>Bumbu masakan Szechuan ini berasal dari negeri cina dan terdiri dari campuran rempah-rempah dan cabe khas szechuan. Bumbu ini memberikan citarasa pedas serta menggugah selera dan biasanya sudah dijual dalam bentuk kemasan siap pakai.</p><p>Tetapi Foodgramers juga bisa membuat bumbu Szechuan sendiri lho, caranya adalah sediakan &nbsp;60 gram jintan, 3 sdm cabai kering, 2 sdm merica, 1 sdm bubuk jahe, 1 sdm bawang putih bubuk, 1 1/2 sdm bubuk cabe, dan 1 1/2 sdm garam. Tumbuk jadi satu dan gunakan sesuai selera.</p><p>&nbsp;</p><p><strong>Allspice</strong></p><p>Dalam pembuatan kue-kue manis, biasanya kita membutuhkan Allspice ini untuk memberikan aroma yang nikmat. Nah, jika kita tidak memilikinya, kita dapat menggantinya dengan bubuk kayu manis yang dicampur dengan pala bubuk serta cengkeh bubuk.</p><p>&nbsp;</p><p><strong>Madu</strong> (250 ml)</p><p>Cairan lengket yang memiliki rasa manis ini ternyata bisa digantikan dengan campuran gula pasir dan air lho, meskipun rasa yang dihasilkan nantinya sedikit berbeda, namun tetap saja akan membuat citarasa manis yang khas. Ingat! Jangan gunakan gula yang terlalu banyak, karena gula memiliki rasa manis yang lebih kuat daripada madu.</p>', '2019-07-26 10:31:23', '2019-07-26 10:31:23', 1, 'imagearticle/kesulitan-cari-bumbu-masakan-gantikan-dengan-bahan-bahan-ini.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Food', '', 'imagecategory/1817334_a0e85f31-cc69-47fd-a6c2-dc5cf6b72ade_2003_2003.jpg', '2019-07-18 02:13:57', '2019-07-18 02:27:59'),
(3, 'Beverages', '', 'default.png', NULL, NULL),
(4, 'Resep', 'food', 'imagecategory/unnamed.png', '2019-07-24 03:18:32', '2019-07-26 03:06:12'),
(5, 'Blog', 'blog', 'imagecategory/blog.jpg', '2019-07-26 03:05:03', '2019-07-26 03:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_21_145313_create_roles_table', 1),
(4, '2018_04_24_134132_create_tags_table', 1),
(5, '2018_04_26_144755_create_categories_table', 1),
(6, '2018_04_30_163457_create_posts_table', 1),
(7, '2018_04_30_163658_create_category_post_table', 1),
(8, '2018_04_30_163710_create_post_tag_table', 1),
(9, '2018_06_07_054134_create_subscribers_table', 1),
(10, '2018_06_13_082204_create_jobs_table', 1),
(11, '2018_07_12_154144_create_post_user_table', 1),
(12, '2018_07_18_142248_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Author', 'author', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `about` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `image`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gmail.com', '$2y$10$C8xhtMsfzju7qix/aMKiye3mO2dRNOyba3RVhnIsvgSPpt/qDPcRy', 'default.png', NULL, 'urfq1PJpxIUBBVJofIrMtyczK3RG73IjPUyChTsleIJJBc26Uq8rT0Eh7VF8', NULL, NULL),
(2, 2, 'author', 'author@gmail.com', '$2y$10$XdiVm.EUcv83qNuMiPC91e98i64EvFaCycGbr9v06/.roZm2kR6sq', 'default.png', NULL, NULL, NULL, NULL),
(3, 1, 'Reezky Illma', 'reezkyillmaa@gmail.com', '$2y$10$83IpEQuHPv1ixPVt6nv.puWUTEfSd7iaDBpMuT2DsTUGcpJV35K/S', 'users/WhatsApp Image 2019-07-26 at 14.12.54.jpeg', NULL, NULL, '2019-07-25 23:18:34', '2019-07-26 00:13:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
