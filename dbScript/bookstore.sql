-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 06:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `type`, `email`) VALUES
(1, 'admin', 'admin', 0, 'testadmin@gmail.com'),
(2, 'Testofuser', '0123456789nN@', 1, 'testuser@gmail.com'),
(3, 'user01', 'user01', 1, 'user01@gmail.com'),
(5, 'u02', 'u02', 1, 'u02@gmail.com'),
(6, 'u03', 'u03', 1, 'u03@mail.com'),
(7, 'u04', 'u04', 1, 'u04@mail.com'),
(25, 'u07', '1234', 1, 'u07@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ad_images`
--

CREATE TABLE `ad_images` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_images`
--

INSERT INTO `ad_images` (`id`, `book_id`, `image`) VALUES
(1, 1, 'https://product.hstatic.net/200000343865/product/nhung-nguoi-khon-kho_ea89f7947ec94041b2cfacbd3d2cbcc0_master.jpg'),
(2, 1, 'https://product.hstatic.net/200000343865/product/nhung-nguoi-khon-kho_ea89f7947ec94041b2cfacbd3d2cbcc0_master.jpg'),
(3, 1, 'https://product.hstatic.net/200000343865/product/nhung-nguoi-khon-kho_ea89f7947ec94041b2cfacbd3d2cbcc0_master.jpg'),
(50, 50, 'https://cdn0.fahasa.com/media/catalog/product/_/n/_nh_2_tr_n-l_n-m_i-nh_-_-kh_c.jpg'),
(51, 51, 'https://cdn0.fahasa.com/media/catalog/product/3/d/3d_dongchay.jpg?_gl=1*oxkq89*_ga*MjUwOTQ2NjA1LjE3MDQxMjUyMjQ.*_ga_460L9JMC2G*MTcxNDk4ODg0OC4xOS4xLjE3MTQ5ODkwNTguNTYuMC4yMTA3NTM0MDk2*_gcl_au*MjU2NDQ0MjUxLjE3MTM1MTc2Mjk.'),
(52, 52, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/can_bang_cam_xuc__ca_luc_bao_giong_tai_ban_2021/2023_03_21_16_15_22_6-390x510.jpg'),
(53, 53, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/tuoi_tre_dang_gia_bao_nhieu_tai_ban_2021/2021_09_29_08_49_04_2-390x510.jpg'),
(54, 54, 'https://cdn0.fahasa.com/media/catalog/product/_/m/_m_tr_i_d_ng_en_nh_2.jpg'),
(55, 55, 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935235226272_1.jpg'),
(56, 56, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/len_nhat_chuyen_doi/2023_02_01_09_29_58_6-390x510.jpg'),
(57, 57, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/lang_tu_gio/2023_10_13_16_42_44_5-390x510.jpg'),
(58, 58, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/nhung_ke_si_tinh/2021_01_13_10_32_27_8-390x510.jpg'),
(59, 59, 'https://cdn0.fahasa.com/media/catalog/product/t/h/tham_tham_mua_he_10_2018_11_13_10_20_22.JPG'),
(60, 60, 'https://sbooks.vn/wp-content/uploads/2023/09/24.jpeg'),
(61, 61, 'https://salt.tikicdn.com/cache/w1200/ts/product/95/2c/4b/b31456d1fdbd108493c173cca7e5afb9.jpg'),
(62, 62, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/ly_thuyet_tro_choi/2023_08_29_15_54_24_5-390x510.jpg'),
(63, 63, 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a_sau_15.jpg'),
(64, 64, 'https://cdn0.fahasa.com/media/catalog/product/k/i/kiep_nao_ta_cung_tim_thay_nhau_tai_ban_2022_1_2022_09_17_10_05_58.jpg'),
(65, 65, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/hanh_tinh_cua_mot_ke_nghi_nhieu/2023_03_13_11_48_44_2-390x510.jpg'),
(66, 66, 'https://eccthai.com/wp-content/uploads/2021/09/mat-day-tam-den.jpg'),
(67, 67, 'https://cdn0.fahasa.com/media/catalog/product/a/n/anh_sach_1.png'),
(68, 68, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/can_bang_cam_xuc__ca_luc_bao_giong_tai_ban_2021/2023_03_21_16_15_22_5-390x510.jpg'),
(69, 69, 'https://cdn0.fahasa.com/media/catalog/product/c/a/cang_ky_luat__cang_tu_do_12_2020_10_15_11_49_53.jpg'),
(70, 70, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/yeu_minh_du__ban_co_ca_the_gioi/2023_08_15_16_52_51_2-390x510.jpg'),
(71, 71, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/buiding_a_second_brain___thiet_lap_bo_nao_thu_hai/2024_04_23_17_03_54_3-390x510.jpg'),
(72, 72, 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-sau_1_6.jpg'),
(73, 73, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/the_secret___bi_mat___bia_cung_tai_ban_2023/2023_12_27_16_42_06_1-390x510.jpg'),
(74, 74, 'https://cdn0.fahasa.com/media/catalog/product/t/h/thong_tin_phat_hanh___dung_lua_chon_an_nhan_khi_con_tre.jpg'),
(75, 75, 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_-4_hoi_chung_nguoi_tu_te.jpg'),
(76, 76, 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia-4_-khi-chat-bao-nhieu-hanh-phuc-bay-nhieu.jpg'),
(77, 77, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/tro_ve_khong___trai_nghiem_hooponopono/2023_05_26_11_57_24_15-390x510.jpg'),
(78, 78, 'https://cdn0.fahasa.com/media/catalog/product/z/2/z2584656181116_ceca0a5b98564a289fd5cf8af7498a18_1.jpg'),
(79, 79, 'https://cdn0.fahasa.com/media/catalog/product/1/2/125984012_3298730730256528_3250640286392862967_o.jpg'),
(80, 80, 'https://cdn0.fahasa.com/media/catalog/product/_/b/_b_a_sau_l_m_sao_m_m_t_ch_nh_m.png'),
(81, 81, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/hay_khien_tuong_lai_biet_on_vi_hien_tai_ban_da_co_gang_het_minh/2021_05_10_08_57_22_7-390x510.jpg'),
(82, 82, 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a_4_-_khi_t_i_t_nh_gi_c.png'),
(83, 83, 'https://cdn0.fahasa.com/media/catalog/product/d/e/de_con_tu_hoc_-_bia_4.jpg'),
(84, 84, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/cau_chuyen_cocktail___bartenders_guide/2023_06_22_16_47_23_6-390x510.jpg'),
(85, 85, 'https://cdn0.fahasa.com/media/catalog/product/f/e/fear_-_so_hai_bia_4.jpg'),
(86, 86, 'https://cdn0.fahasa.com/media/catalog/product/r/e/reiki-bia-full.jpg'),
(87, 87, 'https://cdn0.fahasa.com/media/catalog/product/n/o/noiluc_gts.jpg'),
(88, 88, 'https://cdn0.fahasa.com/media/catalog/product/v/i/vien_thuoc_boc_duong_chi_danh_cho_tre_nho_5_2023_11_25_09_29_56.jpg'),
(89, 89, 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935325005220_11_1.jpg'),
(90, 90, 'https://cdn0.fahasa.com/media/catalog/product/b/o/bookmark_toi-khong-thich-on-ao.jpg'),
(91, 91, 'https://cdn0.fahasa.com/media/catalog/product/v/s/vstn2.jpg'),
(92, 92, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/tu_can_bang_giua_the_gioi_hon_don/2023_05_09_16_29_40_5-390x510.jpg'),
(93, 93, 'https://cdn0.fahasa.com/media/catalog/product/h/c/hc9.jpg'),
(94, 94, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/gui_ban_nguoi_co_trai_tim_vo_cung_nhay_cam/2023_10_05_10_08_11_8-390x510.jpg'),
(95, 95, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/dam_mo_lon__dung_hoai_phi_tuoi_tre_tai_ban/2023_02_06_17_08_29_5-390x510.jpg'),
(96, 96, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/doc_vi_con_nguoi_nhu_doc_mot_cuon_sach/2024_04_26_17_01_21_1-390x510.jpg'),
(97, 97, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/chua_lanh_bang_nang_luong/2023_06_22_08_38_51_4-390x510.jpg'),
(98, 98, 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/loi_song_toi_gian_cua_nguoi_nhat_tai_ban_2021/2022_09_16_15_35_52_3-390x510.gif'),
(99, 99, 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_toi-uoc-minh-chua-tung-duoc-sinh-ra_final2.jpg'),
(100, 100, 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-sau-ch_nh-ni_m.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `name`, `price`, `author`, `description`, `image`, `quantity`) VALUES
(1, '9786042261746', 'DANH TÁC THẾ GIỚI - NHỮNG NGƯỜI KHỐN KHỔ', 28000, NULL, 'Víchto Huygô (1802-1885) là đại văn hào Pháp, ông vừa là nhà thơ, nhà văn, nhà viết kịch vĩ đại sáng tác theo khuynh hướng lãng mạn. Các tác phẩm nổi tiếng của ông phải kể đến: vở hài kịch HECNANI, tiểu thuyết THẰNG GÙ NHÀ THỜ ĐỨC BÀ, NHỮNG NGƯỜI KHỐN KHỔ. Trong tác phẩm NHỮNG ...', 'https://product.hstatic.net/200000343865/product/nhung-nguoi-khon-kho_ea89f7947ec94041b2cfacbd3d2cbcc0_master.jpg', 10),
(2, '9786042312790', 'SỐ ĐỎ', 42000, NULL, 'Trong cái sống phải chăng của Phụng, có một cái phải chăng này đáng cảm động hơn hết. Là những thứ văn phong tứ bảo. Mực anh dùng viết là một thứ mực tím ít khi tươi màu, phần nhiều là loãng và luôn luôn là nhạt, là chết. Giấy anh dùng là thứ giấy sáu xu… Ngòi bút Phụng thích dùng nhất là thứ ngòi cái Incomparable, xu ba ngòi… Thế mà lời văn dùng bút ấy mà kí thác lên giấy ấy lại chẳng xoàng xĩnh chút nào…', 'https://product.hstatic.net/200000343865/product/so-do_bia-1_bc6f8b9559f54fd3b3b93c6962f89ab8_master.jpg', 10),
(3, '9786042372787', 'CÀ NÓNG CHU DU TRƯỜNG SA', 68600, NULL, 'Là một chiếc máy ảnh, Cà Nóng may mắn cùng cô chủ phóng viên tham gia chuyến hải trình đặc biệt: Đi thăm Trường Sa. Những ngày trên tàu rồi đặt chân lên các điểm đảo, Cà Nóng được sống một cuộc đời mà con người và máy ảnh đều ước mơ. ', 'https://product.hstatic.net/200000343865/product/ca-nong-chu-du-truong-sa_bia_tb-2024_34351ca6382842c4bcc1117b23ea8874_master.jpg', 10),
(4, '9780310087298', 'The Purple Book', 296000, 'Rice Broocks', 'What exactly is The Purple Book??\r\n\r\nThe Purple Book is a Bible study guide designed to help believers know and apply the essential beliefs of Christianity. From students and scholars to parents, kids, rock stars, and professional athletes, people all over the world are doing The Purple Book. And, it’s the book the Newsboys give away at every concert! Why? Because it gives new believers and longtime followers of Jesus the foundation they need to grow strong in the Christian life.', 'assets/img/purplebook.jpg', 10),
(5, '', 'Kỳ án ánh trăng', 160000, 'Quỷ Cổ Nữ', 'Đêm 16 tháng Sáu\r\n\r\nLuôn có người nhảy lầu… Đã mười sáu năm rồi, cứ vào nửa đêm 16 tháng Sáu là có người tới số, mụ mẫm trèo lên bậu cửa phòng 405, lao đầu xuống sân và chết.\r\n\r\nDù được di tản ra ngoài để tránh nạn thì vào thời khắc định mệnh đó, người tới số vẫn mò về, trèo lên bậu cửa phòng 405, lao đầu xuống sân và chết.\r\n\r\nDù được canh gác ngăn chặn thì vào thời khắc định mệnh đó, người tới số vẫn tìm cách lọt vào, trèo lên bậu cửa phòng 405, lao đầu xuống sân và chết.\r\n\r\nNgười tới số năm nay là Diệp Hinh. Không cam chịu lời nguyền trái ngang này, cô tìm gặp người duy nhất thoát nạn trong mười sáu năm qua để học hỏi kinh nghiệm, người ta liền trèo lên bậu cửa sổ ngay trước mắt cô, lao đầu xuống sân và chết.Đến lúc Diệp Hinh bế tắc buông tay, đã sẵn sàng cho việc trèo lên bậu cửa, thì một người khác lại tranh suất của cô, chuẩn bị lao đầu xuống sân để chết…\r\n\r\nNền sân, bậu cửa, và phòng 405… vì lẽ gì lại hút khách viếng thăm địa ngục tới vậy?', 'assets/img/biasach.jpg', 10),
(6, '8936024918095', 'Cá voi và hồ nước', 100000, 'Thái Trí Hằng', '“Nếu em là cá voi, anh nhất định phải là biển lớn” tôi nói. “Nếu em là cá voi, em sẽ ở lại hồ nước, chứ chẳng bơi ra biển lớn làm gì” em cười. “Bơi ra biển lớn sẽ có tự do, nhưng rời khỏi hồ nước thì rất cô đơn. Với em, tự do tuy cũng tốt đấy, nhưng cô đơn lại càng tệ hơn.” Chuyện kể rằng Cá voi và Hồ nước dù yêu nhau nhưng chẳng thể ở bên nhau, bởi sống trong Hồ nước, Cá voi rồi sẽ chết vì không đủ nước, còn Hồ nước cũng cạn đi vì nước tràn ra nhiều quá… Quen nhau qua cuộc bình chọn “Thập đại mỹ nữ” của trường đại học, ngay trong cuộc hẹn đầu tiên, Tú Cầu đã có cảm tình với Người đẹp số 6 thông minh, cởi mở lại hay có dự cảm bất ngờ. Một thời đại học qua đi, cho tới khi bước vào đời, giữa hai người luôn là sự thấu hiểu kỳ lạ cùng một cảm giác ngọt ngào mơ hồ ấm áp… Song câu chuyện về Cá voi và Hồ nước kia lại là lý do khiến Tú Cầu mãi không đủ can đảm bày tỏ lòng mình… Tình yêu chẳng nói thành lời đó, từ lãng mạn ban đầu tới đợi chờ nhớ mong hiện tại, được kể lại qua giọng văn hóm hỉnh nhẹ nhàng đặc trưng của Thái Trí Hằng, khiến ta thật sự mong rằng hạnh phúc sẽ là câu trả lời sau tất cả.', 'assets/img/cavoi.jpg', 10),
(7, NULL, 'Săn cá thần', 85000, 'Đặng Thiều Quang', 'Kịch tính, hoang đường, phiêu lưu và đượm chất kinh dị, Săn cá thần là kiểu tiểu thuyết mà khi cầm lên người ta phải đọc cho kỳ hết. Cuộc đi săn trưng ra một hiện thực cuộc sống trần trụi của tiền và dục vọng, của những con người hiện đại đầy tự tin, không sợ bất cứ điều gì, và muốn chiếm hữu những thứ “đỉnh” nhất. Đám người ấy cuối cùng cũng đã giáp mặt cá thần, nhưng chỉ để nhận về một nỗi khinh bỉ khôn cùng.\r\n\r\nNgõ hầu mỗi chúng ta, trong cuộc sống, chẳng phải đều đang đi săn một con cá thần nào đó của riêng ta, biến cuộc sống của ta thành một cuộc đuổi bắt ham hố nhọc nhằn, mà kết quả chỉ là nỗi nhục nhã bẽ bàng không thể gỡ gạc?\r\n\r\nNhưng rồi mọi thứ cũng qua đi, chỉ tình yêu và vẻ đẹp vĩnh hằng của tự nhiên là ở lại.', 'assets/img/fish.jpg', 10),
(8, '8936186540646', 'Điều bí mật', 80000, 'Yoru Sumino', 'Tác phẩm mới nhất đến từ Yoru Sumino – tác giả của cuốn tiểu thuyết ăn khách “Tớ muốn ăn tụy của cậu.”\r\nCuốn sách Điều Bí Mật được xuất bản tại Nhật tháng 3/2017, đã bán được hơn 300.000 bản. Hiện cuốn tiểu thuyết này đang được chuyển thể thành truyện tranh, tập 1 đã được xuất bản vào tháng 4/2019.\r\n\r\nChúng ta không nhớ những kỉ niệm mà nhớ chính mình trong đó. Một phiên bản tươi đẹp, nhiều mộng mơ và luôn giả vờ là mình đã lớn…\r\nĐiều bí mật như một cuốn nhật kí ghi lại những suy tư có phần ngây ngô của nhóm năm bạn học sinh cấp Ba – Kyou, Mikki, Para, Jika và Eru. Trong không khí căng thẳng của những kì thi nối tiếp nhau và tâm trạng buồn vui lẫn lộn khi sắp phải tạm biệt tuổi học trò, những cô cậu thiếu niên ấy vẫn tận hưởng trọn vẹn từng khoảnh khắc. Họ bận rộn với những hoạt động ngoại khóa và chí chóe với nhau suốt ngày, không phải vì họ ưa phá rối mà biết rằng chỉ còn mấy tháng nữa thôi là mỗi người một phương.\r\nMỗi chương sách là một mảnh kí ức của năm nhân vật xoay quanh những sự kiện bé xíu nhưng đời học sinh ai ai cũng từng trải qua – thích thầm và giận hờn vu vơ. Câu chuyện bắt đầu bằng những lời tâm sự của Kyou – chàng trai nhút nhát không dám bày tỏ với cô bạn mà mình quý mến bấy lâu. Chính điều đó đã kéo theo bao rắc rối to nhỏ trong nhóm bạn. Lật từng trang sách, độc giả nhiều khi phải bật cười vì mấy cô cậu ấy sao mà giống mình ngày xưa đến thế.\r\n\r\nDù bao nhiêu lớp người đã đi qua thì tuổi học trò vẫn mãi là quãng thời gian vô tư hồn nhiên nhất. Khi chúng ta còn trẻ dại, chúng ta luôn tự phức tạp hóa mọi chuyện trong cuộc sống thường ngày để rồi không tránh khỏi những trận cãi vã, xô xát không đáng có. Sau này nhìn lại, có lẽ sẽ nhiều sự nuối tiếc hơn là cáu kỉnh giận dỗi bởi vì không còn chúng ta của ngày xưa nữa rồi. Cô bạn Para trong cuốn tiểu thuyết này cũng thấu hiểu điều đó nên đã bày tỏ quyết tâm khép lại năm học cuối cấp bằng một vở kịch thật hoành tráng. Ban đầu, mọi người không mấy hào hứng, chỉ làm theo Para vì không có ý tưởng nào khác nhưng dần dà ai cũng bị lôi cuốn vào cuộc vui chung. Giây phút đứng trong cánh màn trước khi lên sân khấu, tất cả đều cảm thấy những nỗ lực mình đã bỏ ra hoàn toàn xứng đáng. Họ trân trọng vở kịch này vì nó chứa đựng những kỉ niệm cuối cùng, và vì thế mà đẹp nhất, trong đời học sinh của họ. Câu chuyện mở ra bằng những băn khoăn và kết lại bởi niềm tin mãnh liệt vào tương lai – tác giả không viết tiếp về kì thi đại học cam go hay chân dung của nhóm bạn khi đã ra trường hẳn là vì mong muốn lưu giữ khoảnh khắc rực rỡ nhất ấy.\r\n\r\nGấp lại Điều bí mật, mỗi độc giả sẽ mỉm cười vì “siêu năng lực” mà cả năm nhân vật nghĩ rằng chỉ mình sở hữu thật ra chẳng đáng kể so với con đường phía trước, chỉ là họ đang sống với niềm tin nhiệt thành của tuổi trẻ mà thôi. Dẫu vậy, đó lại là dư âm đậm nét nhất trong chúng ta – nỗi nhớ dịu dàng và trong sáng về tuổi mười tám đầy những âu lo tưởng chừng to tát, không lấn át được hoài bão dấn thân có phần nông nổi của những cô cậu thanh thiếu niên thuở ấy.\r\n\r\nMã hàng	8936186540646\r\nTên Nhà Cung Cấp	AZ Việt Nam\r\nTác giả	Yoru Sumino\r\nNgười Dịch	Đỗ Nguyên\r\nNXB	NXB Hà Nội\r\nNăm XB	2008\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	320\r\nKích Thước Bao Bì	20.5 x 14.5 x 0.5 cm\r\nSố trang	308\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nĐiều Bí Mật\r\n\r\nTác phẩm mới nhất đến từ Yoru Sumino – tác giả của cuốn tiểu thuyết ăn khách “Tớ muốn ăn tụy của cậu.”\r\nCuốn sách Điều Bí Mật được xuất bản tại Nhật tháng 3/2017, đã bán được hơn 300.000 bản. Hiện cuốn tiểu thuyết này đang được chuyển thể thành truyện tranh, tập 1 đã được xuất bản vào tháng 4/2019.\r\n\r\nChúng ta không nhớ những kỉ niệm mà nhớ chính mình trong đó. Một phiên bản tươi đẹp, nhiều mộng mơ và luôn giả vờ là mình đã lớn…\r\nĐiều bí mật như một cuốn nhật kí ghi lại những suy tư có phần ngây ngô của nhóm năm bạn học sinh cấp Ba – Kyou, Mikki, Para, Jika và Eru. Trong không khí căng thẳng của những kì thi nối tiếp nhau và tâm trạng buồn vui lẫn lộn khi sắp phải tạm biệt tuổi học trò, những cô cậu thiếu niên ấy vẫn tận hưởng trọn vẹn từng khoảnh khắc. Họ bận rộn với những hoạt động ngoại khóa và chí chóe với nhau suốt ngày, không phải vì họ ưa phá rối mà biết rằng chỉ còn mấy tháng nữa thôi là mỗi người một phương.\r\nMỗi chương sách là một mảnh kí ức của năm nhân vật xoay quanh những sự kiện bé xíu nhưng đời học sinh ai ai cũng từng trải qua – thích thầm và giận hờn vu vơ. Câu chuyện bắt đầu bằng những lời tâm sự của Kyou – chàng trai nhút nhát không dám bày tỏ với cô bạn mà mình quý mến bấy lâu. Chính điều đó đã kéo theo bao rắc rối to nhỏ trong nhóm bạn. Lật từng trang sách, độc giả nhiều khi phải bật cười vì mấy cô cậu ấy sao mà giống mình ngày xưa đến thế.', 'assets/img/secret.webp', 10),
(9, NULL, 'Đơn giản', 115200, 'Cơ Hiểu An', 'Dành tặng bạn, người đang vật lộn giữa một thế giới phức tạp, nhưng thâm tâm khao khát sự tự do giản đơn.\r\n\r\nThực ra trong thế giới phức tạp tràn đầy những logic đơn giản. Con người khác nhau ở chỗ có thể tìm thấy và nhận thức những logic này hay không.\r\n\r\nSống đơn giản không chỉ là “làm gọn” cuộc sống, mà còn phải “làm gọn” tâm hồn. Có lúc cuộc sống mệt mỏi với quá nhiều mâu thuẫn là do chúng ta nghĩ quá nhiều, làm quá ít, trái tim cố gắng, cơ thể lại không hành động. Hãy buông bỏ hết những gánh nặng suy nghĩ đó, tập trung làm việc, quy hoạch cho mình một tương lai tốt đẹp.\r\n\r\nCuốn sách này không bàn những lời vô nghĩa, chỉ viết về phương pháp, giúp bạn thật sự phát triển bản thân thông qua sáu góc độ lớn gồm nhận thức, tâm trí, thời gian, quan hệ, tâm lý, cuộc sống.', 'assets/img/simple.jpg', 10),
(50, '8935325015984', 'Trốn Lên Mái Nhà Để Khóc', 64600, 'Lam', 'Những cơn gió heo may len lỏi vào từng góc phố nhỏ, mùa thu về gợi nhớ bao yêu thương đong đầy, bao xúc cảm dịu dàng của ký ức. Đó là nỗi nhớ đau đáu những hương vị quen thuộc của đồng nội, là hoài niệm bất chợt khi đi trên con đường cũ in dấu bao kỷ niệm... để rồi ta ước có một chuyến tàu kỳ diệu trở về những năm tháng ấy, trở về nơi nương náu bình yên sau những tháng ngày loay hoay để học cách trở thành một người lớn. Bạn sẽ được đắm mình trong những cảm xúc đẹp đẽ xen lẫn những tiếc nuối đầy lắng đọng trong “Trốn lên mái nhà đẻ khóc” của Lam.\r\n\r\nCó nhiều câu chuyện luôn nằm trong khảm sâu của ký ức…\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a_1_tr_n-l_n-m_i-nh_-_-kh_c.jpg?_gl=1*sg0uxo*_ga*MjUwOTQ2NjA1LjE3MDQxMjUyMjQ.*_ga_460L9JMC2G*MTcxNDk4MzIzOS4xOC4xLjE3MTQ5ODM0NTQuNDYuMC43NzQ1NTI4NTQ.*_gcl_au*MjU2NDQ0MjUxLjE3MTM1MTc2Mjk.', 10),
(51, '8935086854792', 'Flow - Dòng Chảy', 155040, 'Mihaly Csikszentmihalyi', 'Có bao giờ bạn hoàn toàn chìm đắm vào một cuốn sách hay, một công việc, hay một buổi trình diễn đến mức không nhận thấy hàng giờ đồng hồ đã trôi qua, thậm chí bạn chẳng có ý niệm gì về mọi thứ xung quanh hay sự tồn tại của chính mình? Thời khắc ấy, một sự khoan khoái kỳ lạ tuôn chảy trong con người bạn, đến mức bạn không ngừng tìm kiếm để có lại những cảm giác tương tự, nhưng điều đó dường như là không thể, bởi bạn chưa thật sự hiểu cảm giác đó là gì, cũng như nguồn gốc hình thành nên trải nghiệm tuyệt vời ấy.\r\nCâu trả lời sẽ được tìm thấy trong “Dòng chảy” (Flow), cuốn sách tổng hợp công trình trọn đời của nhà tâm lý học người Mỹ gốc Hungary Mihaly Csikszentmihalyi - cây đại thụ của ngành Tâm lý học đương đại. Trạng thái dòng chảy (Flow) là trạng thái ý thức đạt trật tự hài hòa, “trong đó con người tham gia vào một hoạt động sâu sắc đến mức dường như chẳng còn điều gì khác là quan trọng”, người ta sẽ quyết tâm thực hiện hoạt động chỉ bởi lợi ích tự thân khi làm việc đó.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_244718_1_4401.jpg', 10),
(52, '8935325050237', 'Cân Bằng Cảm Xúc, Cả Lúc Bão Giông', 71400, 'Richard Nicholls', 'ĐỪNG ĐỂ CẢM XÚC LẤN ÁT VÀ BIẾN CUỘC ĐỜI BẠN THÀNH LẬN ĐẬN\r\nMột ngày, chúng ta có  khoảng 16 tiếng tiếp xúc với con người, công việc, các nguồn thông tin từ mạng xã hội, loa đài báo giấy… Việc này mang đến cho bạn vô vàn cảm xúc, cả tiêu cực lẫn tích cực.\r\n• Bạn có thể thấy vui khi nhìn một em bé đến trường nhưng 5 phút sau đã nổi cơn tam bành khi bị đứa trẻ con đi xe đạp đâm sầm vào lại còn ăn vạ.\r\n• Hoặc bạn rất dễ phát điên nếu như chỉ còn 5 giây nữa đèn giao thông chuyển từ đỏ sang xanh mà kẻ đi đằng sau bấm còi inh ỏi.\r\nHãy thừa nhận đi! Ai trong số chúng ta cũng sẽ trải qua những điều này. Và cuốn sách này dạy bạn cách làm hòa với chính những tiêu cực bên trong mình…\r\n', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_32561_1.jpg', 10),
(53, '8935235231115', 'Tuổi Trẻ Đáng Giá Bao Nhiêu ', 63000, 'Rosie Nguyễn', '“Bạn hối tiếc vì không nắm bắt lấy một cơ hội nào đó, chẳng có ai phải mất ngủ.\r\nBạn trải qua những ngày tháng nhạt nhẽo với công việc bạn căm ghét, người ta chẳng hề bận lòng.\r\nBạn có chết mòn nơi xó tường với những ước mơ dang dở, đó không phải là việc của họ.\r\nSuy cho cùng, quyết định là ở bạn. Muốn có điều gì hay không là tùy bạn.\r\nNên hãy làm những điều bạn thích. Hãy đi theo tiếng nói trái tim. Hãy sống theo cách bạn cho là mình nên sống.\r\nVì sau tất cả, chẳng ai quan tâm.”\r\n', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_239651.jpg', 10),
(54, '8935325011559', 'Đám Trẻ Ở Đại Dương Đen', 64350, 'Châu Sa Đáy Mắt', 'Đám trẻ ở đại dương đen là lời độc thoại và đối thoại của những đứa trẻ ở đại dương đen, nơi từng lớp sóng của nỗi buồn và tuyệt vọng không ngừng cuộn trào, lúc âm ỉ, khi dữ dội. Những đứa trẻ ấy phải vật lộn trong những góc tối tâm lý, với sự u uất đè nén từ tổn thương khi không được sinh ra trong một gia đình toàn vẹn, ấm êm, khi phải mang trên đôi vai non dại những gánh nặng không tưởng.\r\nSong song đó cũng là quá trình tự chữa lành vô cùng khó khăn của đám trẻ, cố gắng vươn mình ra khỏi đại dương đen, tìm cho mình một ánh sáng. Và chính những sự nỗ lực xoa dịu chính mình đó đã hóa thành những câu từ trong cuốn sách này, bất kể đau đớn thế nào.\r\n\r\n', 'https://cdn0.fahasa.com/media/catalog/product/_/m/_m_tr_i_d_ng_en_b_a_1.png', 10),
(55, '8935235226272', 'Nhà Giả Kim', 55300, 'Lê Chu Cầu', 'Tiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/nha_gia_kim_tai_ban_2020/2024_03_20_18_29_19_1-390x510.jpg', 0),
(56, '9786043651591', 'Lén Nhặt Chuyện Đời', 42500, 'Mộc Trầm', 'Đây chỉ là những câu chuyện, những suy nghĩ về cuộc đời của một người trẻ đang chông chênh. Đôi khi, tôi hóa thành một ông già của năm chục năm sau kể về những ký ức thời vụng dại. Chỉ mong sao, đọc Lén nhặt chuyện đời, người ta có thể tìm được đâu đó những viên charm phù hợp với bản thân mình. Quyển sách này sẽ là dấu ấn lớn nhất đối với cuộc đời của bản thân. Mỗi bài viết là một viên charm của Pandora Lén nhặt chuyện đời và Lén nhặt chuyện đời cũng sẽ là một viên charm lấp lánh trong sợi Pandora của cuộc đời tôi. Quyển sách này, xin được nhớ về những người Thầy của tôi, về Từ Quang, về gia đình, và tất cả những ai đã hiện diện trong thời thanh xuân của tôi. Để nhắc rằng, tôi đã từng có mặt trong cuộc đời của họ, và họ có mặt trong quyển sách này của tôi.', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/len_nhat_chuyen_doi/2023_02_01_09_29_58_1-390x510.jpg?_gl=1*odz8r0*_ga*MjUwOTQ2NjA1LjE3MDQxMjUyMjQ.*_ga_460L9JMC2G*MTcxNTAwNTE3My4yMS4xLjE3MTUwMDU3MjMuNTAuMC4zMTEwNjQyNjQ.*_gcl_au*MjU2NDQ0MjUx', 10),
(57, '9786043236996', 'Lãng Tử Gió', 85256, 'Hồng Sakura', 'Mong manh như một cơn gió, đến rồi đi lúc nào không biết làm cho ta có cảm giác như thực như không, thật khó nắm bắt. Những rung động đầu đời trong sáng, tinh khôi và thứ Chi cần, có lẽ chỉ là một cơn gió…\r\n\r\nDi là một kiểu người hoàn toàn xa lạ với Chi. Yêu một kẻ hoàn toàn xa lạ với mình, như thể bạn đang du hành ra vũ trụ, thấy hay ho thú vị lắm, nhưng không biết phía trước là gì, cái gì đang chờ đợi mình, liệu mình có chết ở đó không? Không có bản đồ, không có chỉ dẫn, một nơi chỉ để biết, để khám phá chứ không thể ở lại, xây nhà và sinh sống trọn đời.\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/lang_tu_gio/2023_10_13_16_42_44_1-390x510.jpg', 10),
(58, '9786043065138', 'Những Kẻ Si Tình', 60760, 'Hồng Sakura', 'Nhắc đến dòng văn học mạng thời kỳ 2005-2010, không thể bỏ sót Hồng Sakura dù chị ít ồn ào hơn những tác giả khác, với phong cách văn chương theo chị tự đánh giá là hơi đơn giản.\r\nSau hơn 8 năm ngưng viết, Hồng Sakura trở lại với “Những kẻ si tình” - một câu chuyện đan xen giữa quá khứ và hiện tại, giữa người cũ và người mới, cùng những cảm xúc được thể hiện bằng bút pháp khá hiền hòa nhưng lại cuốn hút cùng cực.\r\nVẫn dùng ngôi thứ nhất khi kể chuyện, Hồng Sakura vẽ nên bức tranh thanh xuân bình dị và đáng nhớ của nhân vật chính - là bãi cỏ ban chiều thơ mộng với những cánh diều lãng đãng như mối tình đầu, là cánh đồng quê yên ả dưới một bầu trời xa ngái, trong mùa hè khó quên nào đó của tuổi thiếu thời.\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/nhung_ke_si_tinh/2021_01_13_10_32_27_1-390x510.jpg', 200),
(59, '8935235218604', 'Thăm Thẳm Mùa Hè', 89700, 'Nguyễn Dương Quỳnh', 'Cô công chúa nhỏ ấy đã chết rồi. Tự sát ư? Xinh đẹp, thông minh, danh giá và một tương lai ngời ngời trước mặt, dường như cô chẳng có lý do gì để làm thế. Hay ai đã giết cô? Có thể lắm chứ, cha cô là một nhà chính trị và chắc hẳn không ít kẻ thù. Nhưng chẳng có gì trong những manh mối để lại cho thấy đó là một vụ giết người.\r\nVới Thăm thẳm mùa hè, Nguyễn Dương Quỳnh lần đầu tiên thách thức mình với trinh thám, một thể loại gần như còn trống vắng trong văn học Việt.', 'https://cdn0.fahasa.com/media/catalog/product/t/h/tham_tham_mua_he_1_2018_11_13_10_20_22.JPG', 5),
(60, '9786043946468', 'Chiến Thắng Con Quỷ Trong Bạn', 69000, 'Napoleon Hill', 'Napoleon Hill sẽ dẫn bạn đi vào vùng tối sâu thẳm của tâm thức, nơi những cuộc thú tội sẽ diễn ra, nơi Quý ngài Ác quỷ hả hê vì những trò tiêu khiển như buộc một con người trở nên yếu hèn và mê hoặc, cám dỗ bằng sự lười biếng, sự cuồng tín. Nhưng cũng từ trong cuộc đối thoại với cái ác, Napoleon Hill tiết lộ cho bạn biết bạn phải vận dụng nghịch cảnh như thế nào, xây dựng kỷ luật tự nhân và các đức tính quan trọng để làm chủ tốt bản thân mình.\r\nNhững con người buông thả là những con người cho phép mình bị ảnh hưởng và điều khiển bởi những hoàn cảnh bên ngoài tâm trí của họ. Đó là lời của Quý ngài Ác quỷ. Nếu không muốn bị Quý ngài này xâm chiếm cuộc sống của bạn suốt khoảng thời gian tồn tại trên đời, bạn cần phải bước vào cuộc chiến thực sự với phần “Con” của bản thân, dựa trên những hướng dẫn hữu ích từ Napoleon Hill.', 'https://cdn0.fahasa.com/media/catalog/product/c/h/chien-thang-con-quy-trong-ban-sbooks.jpg', 55),
(61, '9786043235722', 'Đừng Bao Giờ Lùi Bước', 59000, 'Dale Carnegie', 'ABRAHAM LINCOLN - NHÀ LÃNH ĐẠO THẾ KỶ, NGƯỜI ĐÃ SỐNG MỘT CUỘC ĐỜI PHI THƯỜNG\r\nMột ngôi nhà tự chia rẽ không thể đứng vững. Tôi tin rằng chính phủ này không thể tồn tại mãi mãi với nửa nô lệ và nửa tự do.\r\nTôi không mong đợi Liên minh bị giải tán - tôi không mong đợi ngôi nhà sẽ sụp đổ - nhưng tôi thực sự mong đợi nó sẽ không còn bị chia cắt.\r\n\r\n…\r\nĐã đến lúc sự thật này phải được nói ra và tôi quyết tâm không thay đổi cũng như không sửa đổi lời khẳng định của mình. Tôi sẵn sàng, nếu cần thiết, sẽ chết cùng nó. Nếu có quyết định rằng tôi phải đi xuống vì bài phát biểu này, thì hãy để tôi đi xuống với sự thật. Hãy để tôi chết trong việc ủng hộ những gì chính đáng và đúng đắn.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/9/7/9786043235722.jpg', 2),
(62, '8936066697088', 'Lý Thuyết Trò Chơi', 116350, 'Trần Phách Hàm', 'Đời người giống như trò chơi, mỗi bước đều phải cân nhắc xem đi như thế nào, đi về đâu, phải kết hợp nhiều yếu tố lại chúng ta mới có thể đưa ra được lựa chọn. Mà trong quá trình chọn lựa này các yếu tố khiến ta phải cân nhắc và những đường đi khác nhau sẽ ảnh hưởng trực tiếp đến kết quả.\r\nCuốn sách Lý thuyết trò chơi là bách khoa toàn thư về tâm lý học, về tẩy não và chống lại tẩy não, thao túng và chống lại thao túng, thống trị và chống lại thống trị. Cuốn sách giới thiệu công thức chiến thắng cho những “trò chơi” đấu trí giữa người với người trong cuộc sống hằng ngày; phân tách các khái niệm lý thuyết trò chơi vốn mơ hồ trở thành ngôn ngữ dễ hiểu và kết nối liền mạch với nghệ thuật tâm lý học; cho phép bạn nắm vững những bí ẩn của trò chơi tâm lý trong thời gian ngắn nhất.\r\n\r\n', 'https://pos.nvncdn.com/d8267c-94460/ps/20230826_s8RncZ6qKc.jpeg', 0),
(63, '8935325017353', 'Một Đời Được Mất', 90350, 'Vãn Tình', '- Mọi vấn đề khó quyết định trong cuộc đời này, đều có thể suy xét dưới góc nhìn “Được” và “Mất”.\r\n- Có những thứ bạn nghĩ mình “được”, nhưng thực chất chỉ là ảo mộng hão huyền. Cũng có những thứ bạn nghĩ mình “mất”, nhưng cuộc sống chắc chắn sẽ “trả lại” cho bạn dưới một hình thức khác.\r\n- Tất cả những điều ấy – đều không thể đoán trước được.\r\nBạn chỉ cần sống hiên ngang, tự tin – không thẹn với lòng mà thôi!\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a_1_m_t_i_c_m_t.png', 10),
(64, '8935280909854', 'Kiếp Nào Ta Cũng Tìm Thấy Nhau', 67320, 'Brian L Weiss', 'Kiếp nào ta cũng tìm thấy nhau là cuốn sách thứ ba của Brain L. Weiss – một nhà tâm thần học có tiếng. Trước đó ông đã viết hai cuốn sách: cuốn đầu tiên là Ám ảnh từ kiếp trước, cuốn sách mô tả câu chuyện có thật về một bệnh nhân trẻ tuổi cùng với những liệu pháp thôi miên về kiếp trước đã làm thay đổi cả cuộc đời tác giả lẫn cô ấy. Cuốn sách đã bán chạy trên toàn thế giới với hơn 2 triệu bản in và được dịch sang hơn 20 ngôn ngữ. Cuốn sách thứ hai Through Time into Healing (Đi qua thời gian để chữa lành), mô tả những gì tác giả đã học được về tiềm năng chữa bệnh của liệu pháp hồi quy tiền kiếp. Trong cuốn sách đều là những câu chuyện người thật việc thật. Nhưng câu chuyện hấp dẫn nhất lại nằm trong cuốn sách thứ ba.\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/kiep_nao_ta_cung_tim_thay_nhau_tai_ban_2022/2022_09_17_10_05_58_1-390x510.jpg', 50),
(65, '8935325005312', 'Hành Tinh Của Một Kẻ Nghĩ Nhiều', 55900, 'Amateur Psychology', '“Đó là mùa hè năm 2020, mùa hè của COVID-19 và một ngàn vạn khủng hoảng tuổi đôi mươi. Đó là mùa hè mình bắt chuyến bay sớm nhất có thể vào ngày 20 tháng 3 để chạy khỏi nước Anh đang bùng dịch, bị kẹt lại sân bay Bangkok trong 24 giờ đồng hồ vì chuyến bay quá cảnh về Sài Gòn bị huỷ..\r\nĐó là mỗi đêm mùa hè nằm trên giường stress chuyện deadline luận văn, stress chuyện thất nghiệp không kiếm ra tiền, stress chuyện bỏ lỡ cơ hội thực tập giúp ích cho sự nghiệp của mình, stress chuyện học hành dở dang - không biết bao giờ mới có thể quay lại Anh và hoàn thành tấm bằng đại học, stress chuyện tồn tại một cách mơ hồ, không biết mình là ai.”\r\nHành tinh của một kẻ nghĩ nhiều là hành trình khám phá thế giới nội tâm của một người trẻ. Đó là một hành tinh đầy hỗn loạn của những suy nghĩ trăn trở, những dằn vặt, những cuộc chiến nội tâm, những cảm xúc vừa phức tạp cũng vừa rất đỗi con người. Một thế giới quen thuộc với tất cả chúng ta. ', 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a_h_nh-tinh-c_a-m_t-k_-ngh_-nhi_u-tr_c-1-1.jpg', 10),
(66, '9786044773902', 'Mặt Dày Tâm Đen', 69000, 'Hàn Băng Vũ', 'Có người thường cho rằng nhân duyên trên đời này đều là do ngẫu nhiên mà có được. Thế nhưng nhân duyên là thứ có thể bồi dưỡng được nhờ nắm vững được Hậu Hắc. Chỉ một người có nhiều nhân duyên tốt thì mới có được nhiều cơ hội trong đời.\r\nĐể có được nhân duyên tốt, cần phải biết khoan dung, độ lượng. Cho dù gặp chuyện không vừa lòng, bực tức, khó chịu thì cũng nên khoan dung bỏ qua. Cần phải luyện được phần Hậu (mặt dày) và Hắc (tâm đen), một khi Hậu Hắc của bạn đủ thâm sâu thì bạn sẽ không còn cảm thấy quá khó chịu với những chuyện không vừa ý gặp phải mỗi ngày nữa.', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1629976164i/58860595.jpg', 0),
(67, '8935325018947', '再见了, 多年前的我', 53720, 'An.', 'Dành tặng bạn, những người muốn buông bỏ những “điều đã cũ” nhưng chưa đủ can đảm.\r\nDành tặng những ai đang khao khát được “chạm vào”, được vỗ về và thấu hiểu.\r\nDành tặng cho tất cả chúng ta, trong những năm tháng tươi đẹp nhất của thanh xuân, đang có một chốn để mơ về, có một ước mơ để theo đuổi và có một ai đó để da diết nhớ thương.\r\n“Tạm biệt tôi của nhiều năm về trước”  再见了，多年前的我  là ấn phẩm song ngữ Việt - Trung cũng như món quà tri ân dành tặng cho độc giả của An, chàng tác giả từng được biết tới với “cơn sốt” sách “Hẹn nhau phía sau tan vỡ” và “Tạm biệt tôi của nhiều năm về trước” (bản Tiếng Việt) - liên tục cháy hàng và chinh phục trái tim của hàng vạn độc giả trẻ.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/t/_/t_m_bi_t_t_i_c_a_nhi_u_n_m_v_tr_c_bia_1.png', 5),
(68, '8935325050237', 'Cân Bằng Cảm Xúc', 71400, 'Richard Nicholls', 'ĐỪNG ĐỂ CẢM XÚC LẤN ÁT VÀ BIẾN CUỘC ĐỜI BẠN THÀNH LẬN ĐẬN\r\nMột ngày, chúng ta có  khoảng 16 tiếng tiếp xúc với con người, công việc, các nguồn thông tin từ mạng xã hội, loa đài báo giấy… Việc này mang đến cho bạn vô vàn cảm xúc, cả tiêu cực lẫn tích cực.\r\nBạn có thể thấy vui khi nhìn một em bé đến trường nhưng 5 phút sau đã nổi cơn tam bành khi bị đứa trẻ con đi xe đạp đâm sầm vào lại còn ăn vạ.\r\nHãy thừa nhận đi! Ai trong số chúng ta cũng sẽ trải qua những điều này. Và cuốn sách này dạy bạn cách làm hòa với chính những tiêu cực bên trong mình…\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/can_bang_cam_xuc__ca_luc_bao_giong_tai_ban_2021/2023_03_21_16_15_22_1-390x510.jpg', 3),
(69, '8936186546945', 'Càng Kỷ Luật, Càng Tự Do', 76300, 'Ca Tây', 'KỶ LUẬT vốn là ván cờ bạn phải tự đấu với chính mình. Thắng - bạn sẽ có được “bản năng của người mạnh mẽ nhất”, đó là sự tự kiểm soát bản thân. Thua - bạn mãi sống trong cảm giác tạm bợ, nuối tiếc. Càng dễ dàng dung túng cho những thói quen trì hoãn bao nhiêu, cuộc sống của bạn sẽ đi càng nhanh tới sự mất kiểm soát và thiếu quy hoạch bấy nhiêu.\r\n\r\nCÀNG KỶ LUẬT, CÀNG TỰ DO - Mong rằng tại thời điểm kết thúc hành trình với cuốn sách, bạn đã là một phiên bản khác kỷ luật hơn, nhưng tự do hơn.\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/cang_ky_luat__cang_tu_do/2023_02_15_11_51_43_1-390x510.jpg', 10),
(70, '9786043973211', 'Yêu Mình Đủ, Bạn Có Cả Thế Giới', 214200, 'Nguyễn Hoàng Anh', 'Cuốn sách “Yêu mình đủ, bạn có cả thế giới” đã gỡ bỏ dần những nút thắt trong hành trình đi tìm hạnh phúc của mỗi người, để người đọc có thể tìm thấy niềm vui, sống hạnh phúc hơn\r\n\r\nTừng câu chữ được xuất phát từ nỗi trăn trở và biến cố của chính tác giả. Với vai trò là một nhà đào tạo, cô không muốn thêm bất kì ai phải đợi đến khi mất mát, đau khổ mới thay đổi mà hãy vì tình yêu thương dành cho bản thân để thay đổi, để tốt hơn chính mình mỗi ngày\r\n\r\nCuốn sách tập trung vào việc làm sao để có cơ thể tràn đầy năng lượng, sức khoẻ, nội tâm bình an và mở trí với phương châm “thân khoẻ, tâm an, trí sáng”.', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/yeu_minh_du__ban_co_ca_the_gioi/2023_08_15_16_52_51_1-390x510.jpg', 12),
(71, '8936066698665', 'Buiding A Second Brain', 151200, 'Tiago Forte', 'Sự phát triển mạnh mẽ của công nghệ thông tin đã tạo điều kiện thuận lợi cho chúng ta có thể truy cập tức thời vào kho tàng kiến ​​thức khổng lồ của thế giới. Chưa bao giờ chúng ta có điều kiện tốt hơn để học hỏi, đóng góp và cải thiện bản thân như bây giờ.\r\nTuy nhiên, thay vì cảm thấy được trao quyền, chúng ta thường cảm thấy choáng ngợp trước những dòng thông tin liên tục. Điều này, dẫn đến sự căng thẳng bởi quan điểm chúng ta sẽ không bao giờ biết hết hoặc nhớ đủ tất cả thông tin.\r\nTrong thế giới ngày càng phức tạp, việc quản lý thông tin cá nhân trở nên cực kỳ quan trọng. Second Brain được coi là nơi lưu trữ những thông tin, kiến thức, kinh nghiệm, … giúp bạn tổ chức, lưu trữ và sử dụng hiệu quả hơn.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/u/building_a_second_brain_b_a_1.jpg', 15),
(72, '8935325015427', 'Phiên Bản Giới Hạn', 61620, 'Khoai Tây Yêu Tiếng Trung', 'Nếu bạn đang cảm thấy chông chênh, lạc lõng khi tự so sánh bản thân mình với những người xung quanh, hãy để cuốn sách “Dẫu bình thường, bạn vẫn là phiên bản giới hạn” tiếp thêm động lực cho bạn nhé.\r\n- Cuốn sách là tập hợp 101 câu nói song ngữ Việt - Trung về các chủ đề yêu bản thân, hành trình trưởng thành, truyền cảm hứng giúp bạn trở thành “phiên bản giới hạn” của chính mình.\r\n- Mỗi câu nói đều bao gồm đầy đủ Hán tự, phiên âm và bản dịch, giúp bạn học thêm từ mới một cách thật dễ dàng.\r\n- Thiết kế sách đẹp lung linh với toàn bộ 120 trang in màu, đảm bảo sẽ tiếp thêm thật nhiều động lực cho bạn học tiếng Trung mỗi ngày.\r\nMong bạn đừng quên rằng dù thế nào, bạn vẫn là “phiên bản giới hạn” trong cuộc đời của chính mình. Hãy yêu bản thân bạn vì chính bạn, và sống thật hạnh phúc!', 'https://cdn0.fahasa.com/media/catalog/product/d/_/d_u-b_nh-th_ng_-b_n-v_n-l_-_phi_n-b_n-gi_i-h_n__1.jpg', 40),
(73, '9786043921533', 'The Secret', 268200, 'Rhonda Byrne', 'Liệu Luật hấp dẫn có thực sự là một bí mật? Bạn có thể nghĩ rằng nó chỉ là một thứ huyền bí vớ vẩn, nhưng trong sách Kinh thánh cũng có một câu nói rất kinh điển, “Người có ước mơ, luôn nhận được nhiều hơn”. Đó chính là tự cảm nhận sự đầy đủ ngay từ đầu, thì bạn sẽ hấp dẫn nhiều sự đầy đủ hơn nữa.\r\n\r\nNếu bạn luôn cảm thấy thiếu thì bạn luôn nhận được tác động tương tự. Tại sao điều này xảy ra luôn là một điều huyền bí? Nhưng nếu bạn có tin hay không đi nữa thì Luật hấp dẫn của Rhonda luôn tồn tại.', 'https://cdn0.fahasa.com/media/catalog/product/9/7/9786043452792_2.jpg', 10),
(74, '8935325001826', 'Đừng Lựa Chọn An Nhàn Khi Còn Trẻ', 64350, 'Cảnh Thiên', 'Đừng Lựa Chọn An Nhàn Khi Còn Trẻ\r\n\r\nTrong độ xuân xanh phơi phới ngày ấy, bạn không dám mạo hiểm, không dám nỗ lực để kiếm học bổng, không chịu tìm tòi những thử thách trong công việc, không phấn đấu hướng đến ước mơ của mình. Bạn mơ mộng rằng làm việc xong sẽ vào làm ở một công ty nổi tiếng, làm một thời gian sẽ thăng quan tiến chức. Mơ mộng rằng khởi nghiệp xong sẽ lập tức nhận được tiền đầu tư, cầm được tiền đầu tư là sẽ niêm yết trên sàn chứng khoán. Mơ mộng rằng muốn gì sẽ có đó, không thiếu tiền cũng chẳng thiếu tình, an hưởng những năm tháng êm đềm trong cuộc đời mình.\r\n\r\nNhưng vì sao bạn lại nghĩ rằng bạn chẳng cần bỏ ra chút công sức nào, cuộc sống sẽ dâng đến tận miệng những thứ bạn muốn? Bạn cần phải hiểu rằng: Hấp tấp muốn mau chóng thành công rất dễ khiến chúng ta đi vào mê lộ. Thanh xuân là khoảng thời gian đẹp đẽ nhất trong đời, cũng là những năm tháng then chốt có thể quyết định tương lai của một người. Nếu bạn lựa chọn an nhàn trong 10 năm, tương lai sẽ buộc bạn phải vất vả trong 50 năm để bù đắp lại. Nếu bạn bươn chải vất vả trong 10 năm, thứ mà bạn chắc chắn có được là 50 năm hạnh phúc. Điều quý giá nhất không phải là tiền mà là tiền bạc.\r\n\r\nThế nên, bạn à, đừng lựa chọn an nhàn khi còn trẻ.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/d/u/dung_lua_chon_an_nhan_khi_con_tre_tai_ban_.jpg', 12),
(75, '8935325019715', 'Hội Chứng “Người Tử Tế”', 95200, 'Hoàng Ngọc Linh', 'Cuốn sách này sẽ giúp bạn ngừng chiều lòng thiên hạ và sống tự tin với bốn giai đoạn:\r\n\r\n- Nhìn nhận giá trị của bản thân\r\n\r\n- Hiểu về nguyên do của sự chiều lòng người khác\r\n\r\n- Thoát ly những mối quan hệ thụ động\r\n\r\n- Phát triển khả năng tự chữa lành\r\n\r\nCHÚC BẠN CÓ SỨC MẠNH ĐỂ TẠO RA TÌNH YÊU VÀ BÌNH YÊN,\r\n\r\nCHÚC BẠN ĐẾN ĐƯỢC VỚI SỰ THẬT VÀ SỰ DŨNG CẢM BÊN TRONG MÌNH.', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_-1_hoi_chung_nguoi_tu_te.jpg', 5),
(76, '8935325004186', 'Khí Chất Bao Nhiêu, Hạnh Phúc Bấy Nhiêu', 97300, 'Vãn Tình', 'Khí Chất Bao Nhiêu Hạnh Phúc Bấy Nhiêu đã một lần nữa tái xuất trong một diện mạo hoàn toàn mới mẻ. Với diện mạo mới này, Bloom Books mong muốn đem đến cho độc giả những trải nghiệm chất lượng nhất từ nội dung đến hình thức: bìa thiết kế phủ nhũ, ruột in màu sắc nét.\r\n\r\nCó ai đó từng nói: “Hãy sống như một trái dứa: Đầu đội vương miện, dáng đứng hiên ngang – Bên ngoài gai góc, bên trong ngọt ngào.”\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia-1_khi-chat-bao-nhieu-hanh-phuc-bay-nhieu.jpg', 3),
(77, '8932000133773', 'Trở Về Không', 116070, 'Joe Vitale', 'Hầu hết chúng ta đều chẳng hạnh phúc, thanh thản, hoặc hài lòng…\r\n\r\nĐã đến lúc để bạn nắm bắt những bí mật cao thâm của Ho\'oponopono.\r\n\r\nĐã đến lúc bạn khai phóng chính mình để tỉnh thức, để được hạnh phúc, và cho phép Siêu nhiên (Zero) truyền hứng khởi hoặc thậm chí thức tỉnh bạn.\r\n\r\nHo\'oponopono đích thực là một phép mầu giúp ta đạt đến bình an. Thực hành Ho’oponopono là một cách để xóa tất cả các dữ liệu chặn giữa ta và Siêu nhiên. Mục đích của nó là dọn dẹp cỏ dại tinh thần và những ký ức tích tụ để Siêu nhiên sống trong ta với nhận thức và tình yêu. Nó giúp ta thanh lọc để có thể thức tỉnh với thực tại này. Để đạt đến đó, ta có rất nhiều việc phải làm, vì vậy, hãy thanh tẩy… không ngừng. Đây là chiếc vé để đạt đến sự viên mãn. Những lợi lạc khác sẽ đến cùng, hầu như một cách bí ẩn và siêu phàm.\r\n\r\nHãy tạo ra thực tại của chính mình!\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/tro_ve_khong___trai_nghiem_hooponopono/2023_05_26_11_57_24_1-390x510.jpg', 4),
(78, '8935325006845', 'Bạn Không Thông Minh Lắm Đâu', 90350, 'David McRaney', 'Cuốn sách này, dựa trên trang blog cùng tên, đã chỉ cho chúng ra thấy những điểm mù và những nhận định chỉ quan lẩn khuất trong cuộc sống hàng ngày, đồng thời, nó cũng giải thích những hành vi phức tạp của chúng ta bằng sự hài hước đầy sâu sắc.\" – Huffington Post \r\n\r\nMột cuốn sách đáng đọc (và đọc một cách cẩn thận). Dù bạn có là một người trong nghề (marketing và quảng cáo), một sinh viên tâm lý học, hay chỉ là một người yêu thích sự thú vị của hành vi con người, đây là cuốn sách sẽ thay đổi cách nghĩ của bạn mãi mãi. Bạn sẽ học được cách tự bắt bẻ mình, tự phản biện, và rèn luyện tư duy của mình trở nên sắc bén hơn.\" - Vlogger Giang ơi\r\n\r\n“Bạn không thông minh lắm đâu\" là một liều thuốc tâm lý được bọc trong những câu chuyện thú vị và hấp dẫn, giúp bạn hiểu rõ bản thân cũng như những người xung quanh mình. Hóa ra chúng ta phi lý hơn mình tưởng rất nhiều.” - Alexis Ohanian, nhà đồng sáng lập Reddit', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/ban_khong_thong_minh_lam_dau_tai_ban_2022/2022_12_30_11_29_15_1-390x510.jpg', 66),
(79, '8936186547614', 'Kỷ Luật Tự Giác', 57120, 'Tiểu Dã', 'TỰ GIÁC BAO NHIÊU, TỰ DO BẤY NHIÊU\r\n\r\nTheo bạn thì, thế nào là tự do?\r\n\r\nLà có thể nằm ườn trên ghế sô pha xem phim, ôm điện thoại lướt mạng cả ngày?\r\n\r\nHay là được ăn thoải mái các thể loại đồ ăn nhanh, trà sữa… bất chấp ảnh hưởng của chúng tới sức khỏe?\r\n\r\nTrời mưa thì tự cho phép bản thân nghỉ làm, thích đồ gì thì mua luôn đồ nấy, dù cho chưa đến cuối tháng đã hết sạch tiền?\r\n\r\nKÝ LUẬT TỰ GIÁC, cuốn sách đã thành công chỉnh đốn lối sống của hàng triệu người trẻ Trung Quốc, sẽ giúp bạn hiểu: “Tự do” thực sự không phải là tùy theo ý thích, mà là tự mình làm chủ.', 'https://cdn0.fahasa.com/media/catalog/product/k/y/kyluattugiac-bia1.png', 90),
(80, '8935325019630', 'Làm Thế Nào Để Ôm Một Chú Nhím?', 92800, 'Đoàn Hâm Tinh', 'Mỗi nhân cách là một phong cảnh bất đồng, mỗi người là một bông pháo hoa khác biệt, mỗi cặp tình nhân đều là một sự tồn tại đặc biệt. Khi hai con nhím đến gần nhau, làm thế nào để “vừa thân thiết nhưng vẫn có không gian riêng” là bài học cần thiết.\r\n\r\nTình yêu là thầy thuốc và chuyên gia dinh dưỡng. Một mối quan hệ tình cảm tích cực có thể giúp bạn buông tay để quá khứ không mấy vui vẻ bay theo gió, đồng thời mở ra một hành trình mới mẻ và hạnh phúc hơn trong đời. Ngược lại, một mối quan hệ tình cảm tiêu cực sẽ gây tổn thương, thậm chí hủy hoại các mối quan hệ xã hội và chính bản thân bạn. Hy vọng cuốn sách này có thể mang đến cho bạn một đôi mắt tinh tường để phân biệt những cạm bẫy trong tình cảm, tận hưởng sự tốt đẹp của tình yêu trọn vẹn hơn và cùng đối phương phát triển tích cực hơn.', 'https://cdn0.fahasa.com/media/catalog/product/_/b/_b_a_tr_c_l_m_sao_m_m_t_ch_nh_m.png', 55),
(81, '8936186549823', 'Hãy Khiến Tương Lai Biết Ơn Vì Hiện Tại Bạn Đã Cố Gắng Hết Mình', 64350, 'Bạch Tô', '- Cuốn sách dành cho những bạn trẻ chênh vênh và đầy hoang mang nhưng không ngừng theo đuổi sự nỗ lực\r\n\r\n- Từng được đón đọc bởi 1 triệu độc giả khắp Trung Quốc, 4 chương sách tổng hợp 50 lời khuyên chất lượng nhất dành cho thế hệ trẻ:\r\n\r\nVới sự nghiệp: Bạn hiểu rằng không ai cả đời thuận buồm xuôi gió, mỗi người ít nhiều đều gặp phải khó khăn trắc trở, việc bạn cần làm - là không đổ lỗi cho ngoại cảnh mà âm thầm nâng cao năng lực và rút ra bài học cho bản thân\r\n\r\nVới chính mình: Bạn hiểu rằng mình cần cải thiện rất nhiều nhưng sự đánh giá của người khác không quan trọng bằng sự ghi nhận của chính bản thân\r\n\r\nVới tình yêu: Khi ta là chính mình ở phiên bản tốt nhất, ta sẽ được ở cạnh sự lựa chọn tốt nhấ', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/hay_khien_tuong_lai_biet_on_vi_hien_tai_ban_da_co_gang_het_minh/2021_05_10_08_57_22_1-390x510.jpg', 99),
(82, '8935325019272', 'Khi “Tôi” Tỉnh Giấc', 87200, 'Linh Nguyễn', 'Khi “tôi” tỉnh giấc là cuốn tự truyện đầu tay của tác giả Linh Nguyễn kể về hành trình tâm linh có thật và nhiệm mầu mà tác giả đã đi qua, và càng đi, tác giả càng “vỡ” ra nhiều điều. Trên hành trình đó không thể thiếu bóng dáng của những “người thầy”, từ những bản thể lớn lao như Vũ Trụ, vị thầy bên trong đến những những bản thể nhỏ bé và gần gũi hơn như gia đình, những người mới quen và cả những chú chó của núi rừng, đồng nội. Mỗi sự xuất hiện và tồn tại của họ đều khiến cái hố đen sâu thẳm và trống rỗng bên trong tác giả được lấp đầy, khiến tác giả nhận ra những bài học sâu sắc về chính mình và về cuộc đời.\r\n\r\nCuốn sách này chắc chắn sẽ thay đổi suy nghĩ của bạn về tu tập, khiến bạn không khỏi đồng cảm trước những trải nghiệm vừa gần gũi vừa tâm linh. Cũng giống như tác giả Linh Nguyễn nói trong cuốn sách, rằng “Khi “tôi” tỉnh giấc - nhưng không có một cái tôi, một con người riêng biệt nào đang trải nghiệm những điều này cả. Là Vũ Trụ, là chính bạn đang trải nghiệm hành trình nhiệm mầu này thông qua một nhân vật tạm gọi là “tôi”.”', 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a_1_-_khi_t_i_t_nh_gi_c.png', 1000),
(83, '8935280916258', 'Để Con Tự Học', 89100, 'TS Nguyễn Thị Thu', 'Cuốn sách này được viết với mong muốn cung cấp cho các bạn những hướng dẫn cụ thể, gợi ý hay, giúp các bạn trang bị kỹ năng, thói quen và cách tư duy, cách tạo động lực và học tập một cách chủ động để bố mẹ chúng mình không còn phải thúc giục: “Con học bài đi!” nữa.\r\nCuốn sách này sẽ là “cứu tinh”để giúp cả bố mẹ và con cùng đạt được mong ước “tự giác học” trong hoà bình mà không cần phải gây căng thẳng cho nhau trong quá trình cùng nhau rèn thói quen tự học.\r\nBởi vì cuốn sách sẽ bắt đúng bệnh mà các bạn nhỏ thường gặp như tính lề mề, hay quên, hay trì hoãn, cẩu thả, chỉ thích làm việc mình thích cứ không muốn làm việc phải làm.\r\nKhi đọc cuốn sách này các bạn nhỏ sẽ được “hướng dẫn đúng cách” để giúp mình loại bỏ đi những rào cản cho việc tự giác và tự học, để khiến việc học tập trở nên dễ dàng hơn.', 'https://cdn0.fahasa.com/media/catalog/product/d/e/de_con_tu_hoc_-_bia_1.jpg', 7),
(84, '8936107813453', 'Câu Chuyện Cocktail', 149500, 'Conor Nguyen', 'Kiến thức về rượu và cocktail không chỉ dành riêng cho giới bartender, càng không phải đặc quyền của tầng lớp thượng lưu như nhiều người vẫn nghĩ. Xét về mặt lịch sử, cocktail đã tồn tại từ khi con người biết làm ra bia và rượu vang, mặc dù thời cổ đại người ta chỉ hay pha bia hoặc rượu vang với nước để uống. Khoảng hơn 120 năm trước, khi nước đá ra đời và được dùng phổ biến (nhờ thiết bị làm lạnh cao áp do kỹ sư người Đức Carl von Linde sáng chế), các loại cocktail mới bắt đầu được hình thành.\r\nMột ly cocktail ngon không chỉ có duy nhất một vị ngọt, hoặc có quá nhiều loại trái cây, quá gắt, quá béo ngậy hay quá nồng, mà nó phải đạt được sự cân bằng giữa các thành phần nguyên liệu trong công thức; kích thích mọi giác quan của con người.', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/cau_chuyen_cocktail___bartenders_guide/2023_06_22_16_47_23_1-390x510.jpg', 98),
(85, '8935280909212', 'Fear - Sợ Hãi', 74999, 'Thích Nhất Hạnh', 'Hầu hết chúng ta ai cũng đã trải qua những giây phút hạnh phúc lẫn khó khăn trong cuộc sống. Tuy nhiên có nhiều người ngay lúc đang vui sướng nhất mà lòng vẫn trĩu nặng lo sợ, sợ ngày vui sẽ qua mau, sợ không như mong cầu, sợ phải xa cách người thương và một nỗi sợ lớn nhất, sợ thân xác mình sẽ tàn hoại. Cho nên ngay lúc biết bao điều kiện của hạnh phúc có đó niềm vui vẫn không trọn vẹn.\r\nChúng ta cứ nghĩ rằng để được hạnh phúc thì phải tránh né hay quên đi lo sợ. Chúng ta không mấy thoải mái khi phải nghĩ đến những gì đã làm cho ta lo sợ, rồi chúng ta chối bỏ: “Thôi! Thôi! Tôi không muốn nghĩ tới chuyện đó!” Chúng ta nhắm mắt làm ngơ nhưng lo sợ vẫn còn đó trong ta.\r\nCách duy nhất để bớt đi lo sợ và thật sự hạnh phúc là nhận diện lo sợ và quán chiếu gốc rễ của lo sợ. Thay vì tránh né, ta sử dụng khả năng tỉnh giác và quán sát tinh tường.', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935280909212.jpg', 59),
(86, '8936066693912', 'Reiki - Nghệ Thuật Chữa Lành Bằng Năng Lượng', 137970, 'Lisa Campion', '“Reiki là một trong những phương pháp chữa lành bằng năng lượng đơn giản và mang tính trực giác nhất. Là kỹ thuật chữa lành bằng năng lượng mang tính thực hành, hiệu quả, nhẹ nhàng, có nguồn gốc từ Nhật Bản, và ai cũng có thể học được.”\r\n“Giúp khai phá và phát triển năng lực bí ẩn trong bạn, giúp chữa lành những tổn thương, cân bằng tâm trí và cảm xúc.”\r\nMọi người đều có trực giác, và nhiều người trong chúng ta có khả năng ngoại cảm. Chúng ta có thể phát triển những năng lực này nếu tập trung và hành động. Nếu bạn sở hữu tài năng tiềm tàng mạnh mẽ, đó sẽ là một phần mục đích sống của bạn và thật sáng suốt khi mài giũa chúng.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936066693912_1.jpg', 76),
(87, '8935086857830', 'Nội Lực - Chuyển Hóa Cuộc Đời Bằng Sức Mạnh Não Bộ', 107440, 'Tara Swart', 'Nhà khoa học thần kinh Tara Swart tin rằng tất cả chúng ta đều có khả năng sống cuộc đời mà mình mong muốn. Bởi vì những thứ mà chúng ta khát khao nhiều nhất – sức khỏe, hạnh phúc, tình yêu và sự giàu có – không chịu sự chi phối của một thế lực thần bí nào, mà chúng đến từ năng lực suy nghĩ, cảm nhận và hành động của chúng ta. Nói cách khác, bộ não của chúng ta mới là nhân tố quyết định.\r\n\r\nCuốn sách “Nội lực” được viết dựa trên tiến bộ đột phá mới nhất của khoa học thần kinh, nhằm giúp bạn giải phóng sức mạnh của một thứ vừa phức tạp vừa phi thường, não bộ của bạn. “Nội lực” của Tara Swart được trình bày một cách khoa học và có hệ thống về những điều trước nay vẫn bị gán cho cái “mác” thần bí, tâm linh hay bất cứ lý thuyết nào cho rằng “Khi bạn thực sự mong muốn một điều gì, cả vũ trụ sẽ hợp lại giúp bạn đạt được nó”.', 'https://cdn0.fahasa.com/media/catalog/product/n/o/noiluc-bia01_1.jpg', 222),
(88, '9786044785677', 'Viên Thuốc Bọc Đường Chỉ Dành Cho Trẻ Nhỏ', 63700, 'Phạm Thảo Ly', '- Cuốn sách giúp bạn thêm yêu thương và khao khát khám phá cuộc sống đầy màu sắc\r\n\r\n- Mong bạn sẵn sàng dùng mọi giác quan để đón nhận hết thảy niềm vui, nỗi buồn trên hành trình của mình\r\n\r\nCHÚNG TA KHÔNG ỔN VÀ ĐIỀU ĐÓ RẤT BÌNH THƯỜNG\r\n', 'https://cdn0.fahasa.com/media/catalog/product/v/i/vien_thuoc_boc_duong_chi_danh_cho_tre_nho_6_2023_11_25_09_29_56.jpg', 77),
(89, '8935325005220', 'Giới Hạn Của Bạn Chỉ Là Xuất Phát Điểm Của Tôi', 48950, 'Mèo Maverick', 'Giới hạn là gì?\r\n\r\nGiới hạn liệu có phải ranh giới an toàn của mỗi người?\r\n\r\nCó lẽ không, giới hạn là để phá bỏ.\r\n\r\nBởi giới hạn của bạn chỉ là xuất phát điểm của người khác.\r\n\r\nTôi tin rằng bạn có những ước mơ rất tuyệt vời, tôi cũng tin rằng bạn có thể thực hiện được nó. Nhưng ước mơ mà không hành động thì mãi mãi chỉ nằm trong mộng tưởng, hành trình dài mà không đi thì mãi mãi vẫn chẳng thể chạm đích. Giới hạn đặt ra để bứt phá, chứ không phải điểm tận cùng. Tôi hy vọng mỗi sáng đánh thức bạn dậy không phải là tiếng chuông đồng hồ mà là khát vọng lớn lao trong trái tim bạn.\r\n\r\nMỗi khi bạn cảm thấy những khó khăn hiện tại đã chạm đến giới hạn của mình… Hãy đọc cuốn sách này, nó sẽ giúp bạn biến giới hạn trở thành vạch xuất phát…\r\n', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935325005220_11.jpg', 65),
(90, '8935325050152', 'Tôi Không Thích Ồn Ào', 45000, 'Ashley Davis Bush', 'Đại bàng một mình bay lượn trên những tầng mây, lũ gà thì kêu quang quác dưới mặt đất.\r\n\r\nNhững tờ tiền giấy nhẹ bẫng nhưng mua được nhiều thứ hơn đống tiền xu leng keng.\r\n\r\nNhững người giản dị và khiêm tốn tạo ra nhiều giá trị xã hội hơn những kẻ ba hoa.\r\n\r\nỒn ào là âm thanh của cuộc sống hiện đại tôn sùng vật chất và hư danh. Sống giữa ồn ào, con người khó mà tĩnh lặng. Khi tâm trí xao động, hỗn loạn, con người sẽ dễ dàng nổi nóng, đưa ra những quyết định sai lầm, dễ sinh bệnh tật, tự tổn thương chính mình.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_toi-khong-thich-on-ao-tb2021.jpg', 45),
(91, '8935325018893', 'Vì Sao Thế Nhỉ? - Một Đứa Trẻ Đang Tìm Đường Về Nguồn', 95200, 'Thùy Linh', 'Chào bạn, hôm nay bạn có ổn không? Liệu có những nghĩ ngợi vẩn vơ không tìm ra đáp án, những băn khoăn trăn trở không biết tỏ cùng ai? Hãy cùng “Vì sao thế nhỉ?” bước vào chuyến du hành giữa các “vì sao”, truy đến tận cùng suy tư của ta nhé. Biết đâu chừng, những câu hỏi ấy lại chính là cầu nối mở ra những chân trời mới, hoặc đưa ta lại gần hơn với đứa trẻ bên trong mình.\r\n\r\nCuốn sách sẽ cùng bạn thử áp dụng Tư duy nguyên bản (First Principle Thinking) vào thế giới nội tâm để bóc tách từng cảm xúc, hành vi của chính mình. Hãy cùng quay ngược lại gốc rễ của những vấn đề đang tồn tại trong ta và giải quyết những điều bất ổn đó, bởi chính chúng ta, mỗi cá nhân đều là một nguyên bản.', 'https://cdn0.fahasa.com/media/catalog/product/v/s/vstn4.jpg', 24),
(92, '8938536458335', 'Tự Cân Bằng Giữa Thế Giới Hỗn Độn', 88000, 'Yang Jae Jin, Yang Je Woong', 'Liều thuốc tinh thần cứu cánh cho hàng triệu người đang rơi vào trạng thái khủng hoảng và bế tắc\r\n\r\nLà con người, ai cũng có những nỗi niềm băn khoăn của riêng mình.\r\n\r\nNhiều lúc tưởng rằng trên đời này chỉ một mình ta khổ, nhưng thực ra ai cũng ngổn ngang không ít trăn trở trong lòng.\r\n\r\nLòng tự tôn yếu kém, tương lai mờ mịt, bất hoà với gia đình, căng thẳng trong công việc, thương tổn trong tình yêu… đó là những vấn đề mà ai cũng đã từng ít nhất một lần trải qua.\r\n\r\nNhững cảm xúc ban đầu vốn tưởng vụn vặt, nhẹ nhàng nhưng trải qua thời gian, càng ngày càng chất đầy trong lồng ngực.\r\n\r\nCuối cùng chúng mưng mủ thành bệnh tật và cướp đi niềm vui sống của con người.\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/tu_can_bang_giua_the_gioi_hon_don/2023_05_09_16_29_40_1-390x510.jpg', 12),
(93, '9786043927351', 'Càng Hiểu Chuyện Càng Đau Lòng', 59800, 'Nguyễn Hoàng Long', '- Cuốn sách đầu tay của Life Coach Nguyễn Hoàng Long\r\n- Đồng hành cùng phụ nữ nâng cao giá trị bản thân\r\n- Giúp bạn có được cuộc đời KHÍ CHẤT nhất, ĐẮT GIÁ nhất\r\nPHỤ NỮ SỐNG TRÊN ĐỜI, THỨ KHÔNG CẦN THIẾT NHẤT CHÍNH LÀ QUÁ HIỂU CHUYỆN!\r\nCó một sự thật là: Phụ nữ càng kiên cường, càng không ai thương bởi họ nghĩ có khó khăn tới đâu, bạn đều chống đỡ được.', 'https://cdn0.fahasa.com/media/catalog/product/1/_/1_13_1.png', 54);
INSERT INTO `books` (`id`, `isbn`, `name`, `price`, `author`, `description`, `image`, `quantity`) VALUES
(94, '8938536458045', 'Gửi Bạn Người Có Trái Tim Vô Cùng Nhạy Cảm', 97000, 'Jeon Hong Jin', 'Câu chuyện về trái tim dưới góc nhìn khoa học não bộ và tâm thần học\r\n\r\nÔng nghiên cứu về sự khác biệt trong mô hình trầm cảm giữa người phương Tây và người Hàn Quốc, và đưa ra phương pháp thử nghiệm lâm sàng trong cuốn sách này, đây cũng là cuốn sách đầu tiên được xuất bản dưới dạng thực hành tự do cho công chúng.\r\n\r\nTrong cuốn sách này giáo sư Jeon Hong Jin muốn gửi gắm đến bạn đọc những người đem trong mình trái tim “vô cùng nhạy cảm” rằng:\r\n\r\nChúng ta đều sống chung trong một thế giới, nhưng mỗi người lại có một cuộc đời riêng và mang trong mình những câu chuyện riêng. Trong vai trò bác sĩ chuyên khoa sức khỏe tâm thần tại Bệnh viện Đại học, tôi đã có dịp gặp gỡ và trò chuyện với hàng chục ngàn người đến bệnh viện. Nhờ đó tôi mới biết được rằng có những câu chuyện còn li kì hơn cả phim điện ảnh, và có những câu chuyện khiến tôi mong đợi được tiếp tục lắng nghe hơn cả chờ một bộ phim truyền hình ra thêm tập mới. Tôi cũng nhận ra rằng trọng tâm của những câu chuyện ấy chính là ‘trái tim vô cùng nhạy cảm’. ', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/gui_ban_nguoi_co_trai_tim_vo_cung_nhay_cam/2023_10_05_10_08_11_1-390x510.jpg', 7),
(95, '8935325006951', 'Dám Mơ Lớn, Đừng Hoài Phí Tuổi Trẻ', 80000, 'Lư Tư Hạo', 'Những ngày mười tám đôi mươi ta đều mơ những giấc mơ lớn, đều khao khát đạp tung tất cả để bay ra khỏi vòng tay của gia đình, mẹ cha.\r\n\r\nNhững ngày hăm lăm nhìn lại hình như giấc mơ đã tiêu hao đi ít nhiều…\r\n\r\nTa chậm lại, bớt kì vọng hơn, cũng bớt nỗ lực hơn. Hình như ta không còn trẻ nữa.\r\n\r\nĐể rồi những bộn bề của cuộc sống cuốn giấc mơ của bạn đi như dòng nước hững hờ cuốn trôi chiếc lá. Cứ thế, bạn vội vã trưởng thành, vội vã yêu, vội vã sống, vội vã quên đi khát khao mình từng có. Ừ thì ta lớn rồi phải không?\r\n\r\nNhưng bạn biết không: Bung mình ra sống một đời nhiệt huyết rực rỡ hay thu mình lại bình bình yên yên nơi góc nhà…lựa chọn là ở bạn?\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_-dam-mo-lon-dung-phi-hoai-tuoi-tre-1.jpg', 444),
(96, '8935246939819', 'Đọc Vị Con Người Như Đọc Một Cuốn Sách', 118300, 'Patrick King', 'Họ đang nghĩ gì về bạn?\r\n\r\nThật là điên rồ khi bất cứ ai bạn gặp cũng là một bí ẩn đối với bạn. Làm sao chúng ta có thể thực sự biết được điều gì đang diễn ra trong cái đầu bé nhỏ của họ? Họ đang nghĩ gì, đang cảm thấy ra sao, đang ấp ủ điều gì? Làm sao chúng ta có thể hiểu được hành vi của họ hàm ý điều gì, tại sao họ lại có động cơ như thế,... Tất cả những gì ta có thể dựa vào đều nằm bên ngoài cái hộp đen đó - chính là nét mặt, ngôn ngữ cơ thể và hành động của họ, lịch sử mối quan hệ của chúng ta với họ, vẻ ngoài của họ, giọng điệu và chất giọng của họ, và còn nhiều điều nữa.\r\n\r\nCác mô hình khác nhau - không hề bài trừ lẫn nhau, mà đúng hơn chúng chỉ là những cách nhìn người khác nhau mà thôi. Khi kết hợp chúng lại với nhau, bạn sẽ có một cái nhìn mới mẻ về những người xung quanh. Khi bạn hiểu sự khác biệt đó để có thể vận dụng sự hiểu biết để làm những gì mình muốn, ví dụ như bồi dưỡng lòng cảm thông với người mà ta quan tâm, suôn sẻ trong công việc hoặc bất cứ nơi đâu cần hợp tác và đồng hành với mọi người khác nhau. Bạn hoàn toàn có thể vận dụng nó để nuôi dạy con tốt hơn hoặc trở thành người bạn đời lãng mạn hơn.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935246939819.jpg', 4444),
(97, '8938539539000', 'Chữa Lành Bằng Năng Lượng', 107506, 'Abby Wynne', 'Cuốn sách này dành cho:\r\n\r\n- Những người bị tổn thương và muốn được chữa lành\r\n\r\n- Những người đang ở vai trò là người chữa\r\n\r\n- Những người bắt đầu hoặc đang tìm hiểu về năng lượng và chữa lành\r\n\r\n- Những người ưa thích các phương pháp chữa lành thuận tự nhiên\r\n\r\n- Những người tin rằng bản thân có thể tự chữa lành mà không cần được đào tạo chính thức\r\n\r\nChữa lành là gì?\r\n\r\n- Chữa lành có nghĩa là sống đúng với chính mình trong mọi lú\r\n\r\n- Chữa lành có nghĩa là chân thực với chính mình ở mọi nơi\r\n\r\n- Chữa lành có nghĩa là nói “không” khi bạn cần nói không, nói “có” khi bạn cần nói có\r\n\r\n- Chữa lành là làm điều đúng đắn, bất kể khó khăn đến mức nào\r\n\r\n- Chữa lành có nghĩa là tha thứ cho người khác, ngay cả khi họ thực sự làm tổn thương bạn, học cách chấp nhận và chịu đựng điều đó, học cách đối mặt với nỗi đau và ở cạnh nó, thay vì chạy trốn khỏi nó\r\n\r\n- Chữa lành là buông bỏ nhu cầu kiểm soát mọi thứ, là mở rộng dòng chảy của cuộc sống và tin tưởng rằng tất cả sẽ được chăm sóc\r\n\r\n- Chữa lành là việc nhận chân bản chất sự việc, và tiếp nhận điều đó như chính nó, thay vì sử dụng suy luận của chúng ta để biến nó thành một thứ khác\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/chua_lanh_bang_nang_luong/2023_06_22_08_38_51_1-390x510.jpg', 333),
(98, '8935280908673', 'Lối Sống Tối Giản Của Người Nhật ', 89900, 'Sasaki Fumio', 'Lối sống tối giản là cách sống cắt giảm vật dụng xuống còn mức tối thiểu. Và cùng với cuộc sống ít đồ đạc, ta có thể để tâm nhiều hơn tới hạnh phúc, đó chính là chủ đề của cuốn sách này.\r\n\r\nChẳng có ai từ khi sinh ra đã có tài sản, đồ đạc gì trong tay. Vậy nên bất cứ ai khi mới chào đời đều là những người sống tối giản. Cứ mỗi lần bạn sở hữu trong tay những đồ dùng hơn mức cần thiết là một lần bạn lấy mất tự do của chính mình. Giá trị bản thân chúng ta không đo bằng những đồ dùng mà chúng ta sở hữu. Những đồ dùng này chỉ cho chúng ta một chút cảm giác hạnh phúc nhất thời mà thôi. Mang theo những đồ dùng hơn mức cần thiết sẽ lấy hết thời gian, năng lượng của bạn. Khi nhận ra được điều đó, tức là bạn đã bắt đầu trở thành một người sống tối giản.\r\n\r\nNhững người sống tối giản luôn cảm thấy vui vẻ, mới lạ mỗi ngày. Cái cảm giác này, tôi nghĩ bất cứ ai cũng có thể cảm nhận được, dù bạn có phải là một người sống tối giản hay không, bởi bất cứ ai.\r\n', 'https://cdn0.fahasa.com/media/flashmagazine/images/page_images/loi_song_toi_gian_cua_nguoi_nhat_tai_ban_2021/2022_09_16_15_35_52_1-390x510.gif', 78),
(99, '8935325006968', 'Tôi Ước Mình Chưa Từng Được Sinh Ra', 65700, 'Yim Minkyung', '\"T.ự T.ử\" gần đây đã trở thành một cùm từ được nhắc đến thường xuyên hơn bao giờ hết. Thật đau lòng khi nghe một ai đó lựa chọn rời bỏ thế gian này, nhưng chính chúng ta không biết tại sao họ lại đưa ra quyết định như vậy, cũng không biết họ đã trải qua những đấu tranh tâm lý đến nhường nào.\r\n\r\nLiệu chúng ta có thực sự hiểu về t.ự t.ử?\r\n\r\nTác giả của cuốn sách này, với vai trò là một chuyên gia về tâm lý học, sẽ giải đáp những câu hỏi xoay quanh tâm lý của những người có ý định t.ự s.á.t thông qua những \"trải nghiệm\" văn học. Một phương thức để \"hiểu đầy đủ về t.ự t.ử\" thông qua những nhân vật trong các cuốn tiểu thuyết kinh điển mà chúng ta có thể đã từng đọc qua. Những nhân vật được phân tích trong cuốn sách này là những người muốn hoặc đang cố gắng t.ự t.ử, thường xuyên nghĩ đến việc t.ự t.ử hoặc gây t.ổ.n h.ạ.i tới chính mình. Họ cũng là những người mắc chứng t.r.ầ.m c.ả.m, ảo tưởng thính giác hoặc nghiện ch.ấ.t k.í.c.h, liên tục tiến gần hơn tới việc t.ự s.á.t.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_toi-uoc-minh-chua-tung-duoc-sinh-ra_final.jpg', 888888),
(100, '8935325014277', 'Chánh Niệm - Nghi Thức Phục Hồi Tâm Trí', 65700, 'Akira Kugaya', '“Dù có ngủ 10 tiếng một ngày đi chăng nữa, mình vẫn thấy mệt mỏi.”\r\n\r\n“Lúc nào mình cũng bận rộn nghĩ ngợi một điều gì đó. Nằm trên giường một lúc lâu mà mình cũng chưa ngủ được vì mải suy nghĩ linh tinh.”\r\n\r\nTừ lâu giới “tinh hoa công sở” tại Mỹ đã áp dụng một phương pháp hiệu quả để đối phó với những phiền toái trên là: Thiền chánh niệm. “Ông lớn” Google đã tích hợp chương trình thiền có tên gọi “Tìm trong chính mình” vào hoạt động nội bộ của công ty. Các tập đoàn đa quốc gia nổi tiếng khác như Facebook, Cisco, Patagonia và Aetna cũng bắt đầu khuyến khích nhân sự áp dụng chánh niệm để giải tỏa căng thẳng trong công việc.\r\n', 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-tr_c-ch_nh-ni_m.jpg', 123);

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `book_id` int(11) NOT NULL,
  `genre_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`book_id`, `genre_id`) VALUES
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `favorite_book`
--

CREATE TABLE `favorite_book` (
  `book_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favorite_book`
--

INSERT INTO `favorite_book` (`book_id`, `account_id`) VALUES
(1, 2),
(1, 5),
(3, 2),
(5, 5),
(8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(5) NOT NULL,
  `genreName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genreName`) VALUES
(1, 'Văn hóa - xã hội'),
(2, 'Lịch sử'),
(3, 'Văn học viễn tưởng'),
(4, 'Thiếu nhi'),
(5, 'Tôn giáo'),
(6, 'Tâm lý - tình cảm'),
(7, 'Tiểu sử - tự truyện'),
(8, 'Kinh dị - bí ẩn'),
(9, 'Nấu ăn'),
(10, 'Khoa học - công nghệ'),
(11, 'Truyền cảm hứng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ad_images`
--
ALTER TABLE `ad_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `favorite_book`
--
ALTER TABLE `favorite_book`
  ADD PRIMARY KEY (`book_id`,`account_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ad_images`
--
ALTER TABLE `ad_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad_images`
--
ALTER TABLE `ad_images`
  ADD CONSTRAINT `ad_images_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `favorite_book`
--
ALTER TABLE `favorite_book`
  ADD CONSTRAINT `favorite_book_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorite_book_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
