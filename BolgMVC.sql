-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2021 at 01:36 PM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BolgMVC`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` int(100) NOT NULL,
  `value` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `age`, `email`, `account`, `password`, `value`) VALUES
(1, 'Chung', 30, 'Chunghv.tny@gmail.com', 'Chung', 123456, 1),
(3, 'Hung', 22, 'HungND@gmail.com', 'Hung', 123456, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Blog`
--

CREATE TABLE `Blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `teaser` text NOT NULL,
  `content` text NOT NULL,
  `created` date NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `author_id` int(15) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Blog`
--

INSERT INTO `Blog` (`id`, `title`, `teaser`, `content`, `created`, `category_id`, `author_id`, `image`) VALUES
(1, 'Review tour du lịch Hà Giang 2 ngày', 'Hà Giang là một vùng đất tuyệt vời để khám phá trên những cung đường thiên nhiên hùng vĩ. Mình đã có cơ hội tới Hà Giang trong các chuyến đi tự túc, tuy nhiên lần này mình quyết định chọn dịch vụ tour của Hà Giang Trẻ để có thêm trải nghiệm và chia sẻ từ những người địa phương, giúp mình hiểu sâu sắc hơn về văn hóa, phong tục của Hà Giang.', 'Trải nghiệm độc đáo trong chuyến đi Điểm thăm quan đặc sắc, tiêu biểu cho vẻ đẹp của thiên nhiên và con người Hà Giang Hướng dẫn viên bản địa am hiểu phong tục tập quán địa phương Những ưu điểm của tour du lịch Hà Giang so với đi tự túc Không phải tự lái xe căng thẳng trên đường đèo dốc Tiết kiệm chi phí (vì tour đã được sắp xếp tối ưu) Tiết kiệm thời gian chuẩn bị lịch trình ăn ở đi lại cho chuyến đi Lịch trình 2 ngày hợp lý với những người bận rộn, chỉ sắp xếp đi được vào cuối tuần Hướng dẫn viên giới thiệu chi tiết về các điểm đến, lịch sử, văn hóa vùng miền Được giao lưu kết bạn với nhiều người mới Tại sao mình chọn Hà Giang Trẻ Sau quá trình tìm hiểu mình đã quyết định chọn tour của Hà Giang Trẻ vì những thông điệp bảo vệ môi trường, bảo vệ văn hóa bản địa, cũng như các hướng dẫn viên người dân tộc được Hà Giang Trẻ đào tạo theo hướng chuyên nghiệp.', '2008-11-11', 1, 1, 'Upload/review-ha-giang-tour.jpg'),
(9, 'Hít thở như thế nào cho đúng trong tập luyện Yoga?', 'Cách hít thở là một phần vô cùng quan trọng trong Yoga. Việc kết nối bài tập bằng tâm trí và cơ thể đều là thông qua việc hơi thở.  Khi bạn hít vào bạn thấy không khí được đưa vào sâu bên trong cơ thể, bạn thấy được sự an bình và sự sống ngay thời khắc đó và khi bạn thở ra, bạn biết không khí được đẩy ra và bạn đang ở trong những giây phút tập luyện, thiền định và kết nối với bản thân mình.  Khi bạn bắt đầu luyện tập, có thể giáo viên hướng dẫn đã chỉ dẫn bạn rất chi tiết việc kiểm soát hơi thở.  Nhưng khi bạn tự tập luyện, bạn chưa nhận được sự điều chỉnh cần thiết cho việc hít thở hiệu quả. Vậy với bài viết này, bọn mình hy vọng nó có ích cho bạn, cho quá trình luyện tập của bạn.', 'Tác dụng của việc hít thở trong Yoga Hít thở như thế nào cho đúng trong tập luyện Yoga  Khi bạn tập Yoga, đừng ngạc nhiên khi luôn được nhắc phải chú ý đến hơi thở, bởi việc hít thở trong Yoga quan trọng giống y như thực hành đúng các động tác vậy.  Việc hít thở đúng cách  cùng với việc thực hiện  các động tác trong Yoga giúp cho khí huyết lưu thông và cơ thể trở nên khoẻ mạnh hơn.  Những lúc bạn thấy thấy áp lực và căng thẳng trong cuộc sống, hoặc cơ thể bạn rã rời, chỉ cần bạn ngồi yên tĩnh dành ra từ 3-5 phút hít thở thật sâu, điều này sẽ giúp bạn lấy lại sự cân bằng cho cơ thể và tâm trí.  Ngoài ra, hít thở đúng và sâu trong lúc tập luyện Yoga sẽ cung cấp nhiều Oxy hơn giúp phòng tránh các bệnh liên quan đến đường hô hấp.  Thiền định là linh hồn khi tập luyện Yoga, việc kiểm soát được hơi thở của bạn là vô cùng quan trọng. Nếu bạn chỉ chăm chú tập luyện sao cho đúng các động tác mà quên đi nhịp thở thì tất cả đều trở nên vô ích. Thậm chí nhiều trường hợp còn có tác động xấu ngược lại với sức khỏe của người tập.', '2021-05-11', 2, 3, 'Upload/Hithoi.jpg'),
(11, 'Ẩm thực Nhật Bản qua các món ăn đường phố', 'Ẩm thực Nhật Bản vốn nổi tiếng bởi sự cầu kỳ, kỹ lưỡng, luôn luôn thỏa mãn cả vị giác lẫn thị giác của những du khách  sành ăn . Ẩm thực đường phố của Nhật Bản cũng không ngoại lệ và bên cạnh đó còn mang những nét đặc trưng rất riêng. Khác với những món ăn được trang trí, bày biện tỉ mỉ trong các nhà hàng sang trọng, ẩm thực đường phố mang hơi thở của cuộc sống bình dị của người dân địa phương xứ sở hoa anh đào. Chính điều đó sẵn sàng làm xiêu lòng bất cứ vị khách nào mỗi khi rảo bước qua các con phố. Ở bài viết này,Toidi sẽ giới thiệu một số món ăn đường phố đáng thử khi bạn đến Nhật Bản, cùng tìm hiểu nét văn hóa ẩm thực qua những món ăn đó. Hãy cùng Toidi khám phá ngay nhé!', 'Bạn có thể thưởng thức món này ở bất cứ con phố nào ở Nhật Bản, nhưng nếu có thể, hãy tìm đến khu Dobontori, Osaka – quê hương của Takoyaki để trải nghiệm Takoyaki tuyệt nhất.  2. Yakitori Yakitori là những miếng thịt gà được cắt nhỏ, xiên lại bằng que tre cùng một số loại rồi nướng trên bếp than củi. Thịt gà được tẩm ướp kĩ càng với nước sốt đặc trưng bao gồm rượu sake, mirin, nước tương và đường. Bên cạnh đó, phần làm nên sự hấp dẫn của món ăn này chính là gia vị. Có rất nhiều các loại gia vị bạn có thể yêu cầu người bán thêm vào như sansho (tiêu Nhật), shichimi togarashi (ớt bảy vị), và ichimi togarashi (ớt một vị).  Món ăn hoàn hảo cho một ngày đông se lạnh, mùi vị đậm đà cùng chút tiêu cay nồng chắc chắn sẽ thỏa mãn chiếc bụng của bạn.  Gợi ý: Hãy đến Omoide Yokocho (Memory Lane hoặc Piss Alley) ở Shinjuku, Tokyo, ở đây có nhiều hàng bán yakitori cực kì ngon.', '2021-05-07', 1, 1, 'Upload/takoyaki-2.jpg'),
(17, 'Tập GYM tăng cân dễ như trở bàn tay với những cách này', 'Chắc chắn không ít người nghĩ rằng một ai đó đang có dáng người gầy tự nhiên là điều hạnh phúc. Tuy nhiên, không như bạn nghĩ đâu, người gầy vẫn có thể tự ti với những số đo trên cơ thể mình. Quá gầy khiến việc chọn lựa quần áo phù hợp cũng là một điều khó khăn. Mong muốn vóc dáng đầy đặn hơn thông qua việc tập GYM chính là mục đích mà người gầy hướng đến. Với những hướng dẫn được “bật mí” ở bài viết này, chắc chắn rằng bạn sẽ có thể đạt được kết quả bất ngờ nếu tuân thủ nghiêm túc. Đừng bỏ qua nếu muốn quá trình tập luyện của bạn đạt hiệu suất một cách tốt nhất nhé !', 'Nhiều bạn nghĩ rằng đối với người gầy cần tăng cân thì thời gian tập GYM có thể ít đi, chỉ cần ăn nhiều là đủ ? Tuy nhiên, suy nghĩ này hoàn toàn chưa phải là đúng. Người gầy muốn tăng cân cần có lịch tập GYM đều đặn và thường xuyên hơn bao giờ hết. Đương nhiên là tập luyện các bài tập tăng cân sẽ mang lại hiệu quả cao hơn. Khi cơ thể thích nghi với mật độ tập luyện hằng ngày, đó cũng là lúc chất dinh dưỡng từ thức ăn sẽ hấp thụ một cách tốt nhất vào cơ thể của bạn. Từ đó, chúng hỗ trợ cho việc tăng cân của bạn nhanh chóng đạt được kết quả.  Nếu bạn quá bận rộn cho việc đến phòng GYM, thì giải pháp cho bạn chính là tập GYM tại nhà. Những dụng cụ hỗ trợ như: thảm tập GYM, tạ,… cũng là những vật dụng không quá khó để tìm mua. Do đó, tập GYM tăng cân không quan trọng bạn tập ở đâu, mà vấn đề lớn nhất chính là quyết tâm của bạn lớn như thế nào.', '2021-04-27', 2, 1, 'Upload/Tap-gym-tang-can-de-nhu-tro-ban-tay-voi-nhung-cach-nay-1.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `Bloglist`
-- (See below for the actual view)
--
CREATE TABLE `Bloglist` (
`id` int(11)
,`title` varchar(100)
,`teaser` text
,`content` text
,`created` date
,`name` varchar(100)
,`category_name` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Du lich'),
(2, 'The thao');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ViewList`
-- (See below for the actual view)
--
CREATE TABLE `ViewList` (
`id` int(11)
,`title` varchar(100)
,`teaser` text
,`content` text
,`created` date
,`image` varchar(100)
,`category_name` varchar(200)
,`name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `Bloglist`
--
DROP TABLE IF EXISTS `Bloglist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`phpmyadmin`@`localhost` SQL SECURITY DEFINER VIEW `Bloglist`  AS  select `B`.`id` AS `id`,`B`.`title` AS `title`,`B`.`teaser` AS `teaser`,`B`.`content` AS `content`,`B`.`created` AS `created`,`A`.`name` AS `name`,`C`.`category_name` AS `category_name` from ((`Blog` `B` join `author` `A` on(`B`.`category_id` = `A`.`id`)) join `category` `C` on(`B`.`category_id` = `C`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `ViewList`
--
DROP TABLE IF EXISTS `ViewList`;

CREATE ALGORITHM=UNDEFINED DEFINER=`phpmyadmin`@`localhost` SQL SECURITY DEFINER VIEW `ViewList`  AS  select `B`.`id` AS `id`,`B`.`title` AS `title`,`B`.`teaser` AS `teaser`,`B`.`content` AS `content`,`B`.`created` AS `created`,`B`.`image` AS `image`,`C`.`category_name` AS `category_name`,`A`.`name` AS `name` from ((`Blog` `B` join `category` `C` on(`B`.`category_id` = `C`.`id`)) join `author` `A` on(`B`.`author_id` = `A`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Blog` (`category_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Blog`
--
ALTER TABLE `Blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Blog`
--
ALTER TABLE `Blog`
  ADD CONSTRAINT `Blog` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `Blog_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
