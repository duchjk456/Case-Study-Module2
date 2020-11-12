-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2020 at 09:55 AM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WebSale`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int NOT NULL,
  `adminName` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `pass`) VALUES
(1, 'vietduc', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` int NOT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `customerName`, `address`, `phone`) VALUES
(35, 'Nguyễn Việt Đức', 'Hà Nội', '0975816829');

-- --------------------------------------------------------

--
-- Table structure for table `menuColumn`
--

CREATE TABLE `menuColumn` (
  `id` int NOT NULL,
  `menuName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menuColumn`
--

INSERT INTO `menuColumn` (`id`, `menuName`) VALUES
(1, 'Sữa rửa mặt'),
(2, 'Tẩy da chết'),
(3, 'Nước hoa hồng'),
(4, 'Serum'),
(5, 'Kem dưỡng'),
(6, 'Mặt nạ'),
(7, 'Máy rửa mặt'),
(8, 'Kem trị mụn');

-- --------------------------------------------------------

--
-- Table structure for table `menuHomePage`
--

CREATE TABLE `menuHomePage` (
  `id` int NOT NULL,
  `menuName` varchar(255) DEFAULT NULL,
  `menuContent` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menuHomePage`
--

INSERT INTO `menuHomePage` (`id`, `menuName`, `menuContent`) VALUES
(4, 'Trang chủ', ''),
(5, 'Giới thiệu', '<h1>Giới thiệu về thương hiệu SK-II</h1> <br><br>\r\n<br><br>\r\nThương hiệu SK-II là hãng mỹ phẩm cao cấp đến từ Nhật Bản được thành lập vào năm 1980, thuộc tập đoàn Procter & Gamble (P&G). Các sản phẩm làm đẹp của SK-II ngay từ ban đầu đã hướng đến mục tiêu hoàn thiện vẻ đẹp làn da của người phụ nữ, không chỉ ở trên lớp biểu bì mà thẩm thấu vào tận sâu bên trong, hỗ trợ điều trị tận gốc các vấn đề và nuôi dưỡng giúp cấu tạo làn da được khỏe đẹp hơn từng ngày.<br><br>\r\n<br><br>\r\nTừ lâu những người phụ nữ Nhật Bản đã được biến đến với phương pháp làm đẹp và chăm sóc da tự nhiên, họ chăm chút cho làn từng chút một từ những chi tiết nhỏ nhất. Và hãng mỹ phẩm SK-II đã hội tụ lại những tinh hoa đó đưa vào trong từng sản phẩm để mang đến phục vụ cho phụ nữ trên toàn thế giới.<br><br>\r\n<br><br>\r\nĐánh giá mỹ phẩm SK-II có tốt không?<br><br>\r\n<br><br>\r\n<br><br>\r\nMỹ phẩm SK-II là cái tên không còn xa lại với bất cứ tín đồ làm đẹp nào, tuy nhiên với mức giá khá cao nên nhiều người vẫn e ngại rằng không biết mỹ phẩm SK-II có tốt không và có xứng đáng để mua dùng? Câu trả lời hoàn hoàn toàn CÓ. Và lời giải đáp chi tiết ngay sau đây.<br><br>\r\n<br><br>\r\nThành phần của mỹ phẩm SK-II<br><br>\r\nThành phần chính của mỹ phẩm SK-II chính là tinh chất Pitera, đây là kết quả của hàng loạt cuộc nghiên cứu với hơn 350 chủng loại nấm men khác nhau để có được một loại chất lỏng chứa rất nhiều dưỡng chất có lợi gồm vitamin, amino axit, khoáng chất được sinh ra trong quá trình lên men rượu sake –loại rượu truyền thống của Nhật Bản.<br><br>\r\n<br><br>\r\nThành phần này rất tốt cho da, giúp ngăn chặn và xóa mờ đi các dấu hiệu lão hóa, giúp da căng mịn bóng mượt tự nhiên, đồng thời thúc đẩy tuần hoàn tự nhiên của da đẩy nhanh quá trình đào thải và bóng tróc tế bào chết, trả lại làn da như được thay mới, sáng khỏe và mịn màng.<br><br>\r\n<br><br>\r\nNguồn gốc tinh chất Pitera của SK-II được hình thành sau khi một nhà khoa học Nhật Bản đã theo dõi những người phụ nữ Nhật làm rượu sake, bởi dù da mặt xuất hiện những vết nhăn và già đi nhưng đôi bàn tay trong xưởng sản xuất rượu vẫn căng bóng mượt mà. Bởi vậy mà đã nghiên cứu và cho ra đời các dòng sản phẩm làm đẹp “thần kỳ” SK-II như ngày nay.<br><br>\r\n<br><br>\r\n<br><br>\r\n<br><br>\r\nMỹ phẩm SK-II phù hợp với mọi làn da<br><br>\r\nTinh chất Pitera có trong các sản phẩm SK-II được nghiên cứu và chứng mình rằng rất an toàn và lành tính, phù hợp cho mọi làn da từ da dầu, da khô, da nhạy cảm hay có mụn…Mỹ phẩm SK-II không chứa chất bảo quản, chất tạo mùi, không hóa học…bởi vậy mà dù bạn thuộc loại da nào đang gặp vấn đề ra sao vẫn có thể yên tâm sử dụng mỹ phẩm SK-II.<br><br>\r\n<br><br>\r\nĐược khách hàng tin tưởng và đánh giá cao<br><br>\r\nVà câu trả lời chính xác nhất cho câu hỏi mỹ phẩm SK-II có tốt không chính là từ ý kiến của những người đã sử dụng sản phẩm. Trải qua hơn 40 năm hình thành và phát triển, mỹ phẩm SK-II vẫn luôn đứng vị trí số 1 trong lòng phái đẹp, theo khảo sát của những khách hàng đã sử dụng SK-II thì đều nhận được đánh giá ở mức hài lòng cao nhất.<br><br>\r\n\r\nKhông chỉ vậy có những khách hàng đã đồng hành và sử dụng sản phẩm của SK-II trong suốt vài chục năm ngay từ những ngày đầu thành lập. Điều đó đã là minh chứng rõ ràng nhất cho chất lượng và hiệu quả mà thương hiệu mỹ phẩm Nhật Bản cao cấp này mang tới.\r\n\r\nMỹ phẩm SK-II chính hãng giá bao nhiêu?\r\n\r\n\r\nCác sản phẩm SK-II là dòng mỹ phẩm cao cấp bởi vậy mà giá không hề rẻ, cho đến hiện tại thì hãng đã cho ra mắt hơn 10 dòng bộ mỹ phẩm khác nhau với những công dụng riêng biệt nhằm đáp ứng nhu cầu riêng của từng làn da.\r\n\r\nVới mỗi sản phẩm sẽ có mức giá khác nhau tùy vào bạn mua lẻ, mua bộ sản phẩm, thuộc dòng nào, dung tích, thời điểm và cửa hàng bán. Nhìn chung, giá mỹ phẩm SK-II chính hãng dao động khoảng từ 600.000 – 45.000.000VNĐ.'),
(7, 'Liên hệ', 'Số điện thoại liên hệ: 0975816829. <br><br>\r\nTập đoàn mỹ phẩm Procter & Gamble (P&G)  chi nhánh Việt Nam. <br><br>\r\nVăn phòng đại diện: Tầng 50-Tòa Nhà Keang Nam-Hà Nội.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `quantity` int DEFAULT '0',
  `phone` varchar(255) NOT NULL,
  `orderDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `productName`, `quantity`, `phone`, `orderDate`) VALUES
(36, 'Sữa rửa mặt SK-II Men', 3, '0975816829', '2020-11-12'),
(37, 'Sữa rửa mặt SK-II 20g', 1, '0975816829', '2020-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `productName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `belongToMenu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `price`, `image`, `content`, `belongToMenu`) VALUES
(1, 'Sữa Rửa Mặt Dưỡng Da SK-II Facial', 1500000, 'suaruamat1', '<h3>1. Giới Thiệu Sản Phẩm:</h3> <br><br>\r\nSữa rửa mặt SK-II Nhật Bản có tác dụng làm sạch bụi bẩn và thấm sâu vào bên trong da, diệt khuẩn và lấy đi tế bào chết, chất nhờn.<br><br>\r\n<br><br>\r\nRửa mặt là một bước không thể thiếu trong việc chăm sóc da mặt, nó giúp làm sạch da, tẩy tế bào chết, sạch nhờn và bụi bẩn, giảm đi sự hình thành của mụn giúp da trắng sáng và khỏe mạnh hơn. Sản phẩm Sữa Rửa Mặt Dưỡng Da SK-II Facial Treatment Gentle Cleanser được các chị em trên toàn thế giới ưa chuộng và sử dụng rộng rãi trên toàn thế giới<br><br>\r\n<br><br>\r\nSản phẩm Sữa Rửa Mặt Dưỡng Da SK-II Facial Treatment Gentle Cleanser được nghiên cứu từ các nhà khoa học, họ khám phá từ một vùng đất nhỏ sản xuất rượu sake tại Nhật Bản,các phụ nữ lớn tuổi làm việc tại đây đều có nếp nhăn do lão hóa tự nhiên tuy nhiên ai cũng có đôi bàn tay mịn màng, săn chắc và tươi trẻ.<br><br>\r\n<h3>2. Thành Phần Có Trong Sữa Rửa Mặt Dưỡng Da SK-II Facial Treatment Gentle Cleanser:</h3><br><br>\r\n- Pitera,hỗn hợp vitamin, axiteamin, khoáng chất và acid hữu cơ thúc đẩy quá trình trẻ hóa da một cách tự nhiên, tăng cường làm mới, tái tạo lớp da bên ngoài <br><br>\r\n<br><br>\r\n- Nước, Sodium Lauroyl Glutamate, Propylene Glycol, PEG-150 Stearate, Saccharomycopsis Ferment Filtrate, Sodium PCA, Glycol Stearate, Butylene Glycol, Saccharomyces Cerevisiae Extract, Glycolamide Stearate, Hydrolyzed Linseed Extract, Rosa Canina Fruit Extract, Phenethyl Alcohol, Cocamide MEA, Dipotassium Glycyrrhizate, Triclosan, Phenoxyethanol, Butylparaben, Ethylparaben, Methylparaben, Propylparaben<br><br>\r\n<h3>3. Sữa Rửa Mặt Dưỡng Da SK-II Facial Treatment Gentle Cleanser có tốt không?</h3><br><br>\r\nSản phẩm Sữa Rửa Mặt Dưỡng Da SK-II Facial Treatment Gentle Cleanser được các chị em trên toàn thế giới ưa chuộng và sử dụng rộng rãi trên toàn thế giới.\r\n<br><br>', 1),
(5, 'Sữa rửa mặt SK-II 20g', 160000, 'suaruamat2', 'Sữa rửa mặt SK-II Facial Treatment Gentle Cleanser lấy cảm hứng từ việc nghiên cứu ở các phụ nữ lớn tuổi làm việc trong ngành sản xuất rượu sake, những người có đôi bàn tay cực kỳ mịn màng và tươi trẻ. Các nhà khoa học rất ngạc nhiên khi quan sát thấy rất nhiều phụ nữ tại đây có gương mặt với nhiều nếp nhăn do lão hóa tự nhiên, tuy nhiên da tay họ lại vẫn rất săn chắc và mịn màng.<br><br>\r\nCông dụng: <br><br>\r\nGiúp chăm sóc làm sạch làn da bạn. Sản phẩm có chứa Pitera đậm đặc và Mild Treatment Essence (tinh chất dưỡng dịu nhẹ), giữ ẩm cho làn da bạn tới 30 phút sau khi rửa mặt. Đánh bông sữa rửa mặt và tận hưởng hương thơm hoa hồng nhẹ nhàng.Đem lại làn da căng mịn, săn chắc, xóa mờ nếp nhăn, làm sáng da và làm mờ các vết thâm.Hạn chế tình trang dầu thừa trên da, ngăn ngừa mụn xuất hiện.', 1),
(6, 'Sữa rửa mặt SK-II Men', 1700000, 'suaruamat3', 'Hỗ trợ làm sạch sâu hiệu quả các vấn đề về bã nhờn, đánh bay bụi bẩn ở lỗ chân lông trả lại làn da sạch sẽ. <br><br>\r\nDưỡng ẩm cho làn da. <br> <br>\r\nLoại trừ cả những mụn đầu đen cứng đầu. <br> <br>\r\nVới các thành phần: kem dưỡng ẩm và tinh chất đặc trưng của các sản phẩm SK-II là PITERA, làn da của nam giới luôn được chăm sóc kĩ càng, cung cấp độ ẩm cần thiết, duy trì vẻ phong độ của phái mạnh.\r\n', 1),
(7, 'Gel tẩy tế bào chết SK-II Skin Rebooster 75g', 1990000, 'taydachet3', 'SK-II Skin Rebooster sẽ dưỡng ẩm cho làn da, giúp da bạn trắng sáng và rạng rỡ. Với hệ thống gel thấm cực nhanh, giúp các dưỡng chất thấm sâu, cung cấp độ ẩm vào sâu trong da, mang đến cho bạn cảm giác tươi mới sảng khoái, giúp làn da trở nên căng mịn.', 2),
(8, 'Nước Thần SK-II Facial Treatment Essence 2018', 1990000, 'nuochoahong1', 'Nước Thần SK-II Facial Treatment Essence là sản phẩm được yêu thích nhất trong số đông các sản phẩm của hãng và được trao giải Best Seller SK-II chính vì lí do đó mà chất lượng của sản phẩm là thứ không thể bàn cãi.', 3),
(28, 'KEM CHỐNG LÃO HÓA SK-II R.N.A POWER RADICAL NEW AGE 80G', 3300000, 'kem1', 'Kem RNA Power Radical New  Age 80g làm trẻ hóa làn da của bạn với các thành phần đặc biệt, giúp phục hồi độ mềm và độ đàn hồi của da, xóa nếp nhăn và làm khỏe da từ sâu bên trong với khả năng hydrat hóa mạnh mẽ.', 5),
(29, 'TINH CHẤT SERUM DƯỠNG TRẮNG SK-II GENOPTICS AURA ESSENCE 75ML', 5900000, 'serum1', 'GenOptics Aura Essence đã được bình chọn serum làm sáng da tốt nhất của SK-II, được thiết kế để làm giảm các đốm đen cho ánh sáng rực rỡ và làn da rạng rỡ hơn. Tiếp xúc với tia UV và các tác nhân gây hại từ môi trường khác tạo thành những đốm nâu và nhìn thấy được, còn được gọi là các mảng nám, dẫn đến màu da không đều màu. <br><br>Công thức mạnh mẽ này giúp giảm thiểu sự xuất hiện của các đốm tuổi và da bị bóng mờ thông qua việc chiết xuất prunus và Pitera ™, một thành phần độc quyền cho SK-II và chứa các vitamin, khoáng chất và axit hữu cơ. Các thành phần làm sáng hoạt động giải quyết các đốm và các mảng nám lớn trước khi lên bề mặt, các chất chống oxy hoá và chất làm ướt giúp bảo vệ và hydrat hóa da, tiết lộ làn da sáng hơn, mượt mà hơn và khỏe mạnh hơn.', 4),
(30, 'SK-II Facial Treatment Mask ', 2450000, 'matna1', 'Mặt nạ SK-II Facial Treatment Mask được ngâm trong tinh chất Pitera độc quyền dạng đậm đặc gấp 10 lần so với “Nước thần”, giúp mang đến bạn sự hồi sinh thần kỳ. Sau khi sử dụng mặt nạ dưỡng trắng SK-II, bạn sẽ cảm nhận làn da căng mịn, hồng hào kéo dài đến cả hôm sau.', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `menuColumn`
--
ALTER TABLE `menuColumn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuHomePage`
--
ALTER TABLE `menuHomePage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `phone` (`phone`),
  ADD KEY `productName` (`productName`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productName` (`productName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `menuColumn`
--
ALTER TABLE `menuColumn`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `menuHomePage`
--
ALTER TABLE `menuHomePage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`phone`) REFERENCES `customers` (`phone`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productName`) REFERENCES `products` (`productName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
