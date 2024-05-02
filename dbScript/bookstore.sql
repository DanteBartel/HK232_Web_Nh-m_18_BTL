-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 07:51 AM
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
(5, 'u02', 'u02', 1, 'u02@gmail.com');

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
(13, '', 'test02', 3000, '', 'test02', '', 4);

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
(5, 5),
(8, 5),
(13, 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

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
