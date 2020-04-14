-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 06:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `native`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(70) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_detail`, `file`, `date`) VALUES
(9, 'CSSGS is working in gis', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'efac_79fef81a3395cbe95fc8f2f7426e8bc0.jpg', '2020-02-14'),
(10, 'CSSGS is working in remote sensing', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'efac_25320779f5a5a26b47f31f79d52c6ef2.png', '2020-02-14'),
(11, 'CSSGS is working in disater', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 'efac_97bacf776b0d46910d62031c5e85a9ff.jpg', '2020-02-14'),
(12, 'CSSGS in gis field', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'efac_3c1581f09d74b71a23c42144d9a2d487.jpg', '2020-02-14'),
(13, 'CSSGS in photogrametry field', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 'efac_bf062cdae1ca9dac36b72b4adf1e2c43.png', '2020-02-14'),
(14, 'CSSGS in remote sensing field', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'efac_e4ef9a576a778717c8affd63e61fc8e2.jpg', '2020-02-14'),
(15, 'CSSGS is working in remote sensing', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'efac_416e64b39b467d161a07a8fcb7e45d57.jpg', '2020-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(70) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_name`, `client_detail`, `file`, `date`) VALUES
(1, 'Strider', '<p>working</p>\r\n', 'efac_40a8d862e441efcffbff777767e072d5.png', '2020-02-17'),
(2, 'Runtastic', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_97005f9b0cb0301398f89f555b273d30.png', '2020-02-18'),
(3, 'EditShare', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_6e7796eebca6c68100a60376f22ac041.png', '2020-02-18'),
(4, 'Infocus', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_d124903a2a472c78b43e4dfe4b51900a.png', '2020-02-18'),
(5, 'Gategroup', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_fa7b52cc44c79bdd09cd0cdd83547e1b.png', '2020-02-18'),
(6, 'Cadent', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_fc60c6851eb2cd4e0f0d46487d0870da.png', '2020-02-18'),
(7, 'ceph', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_d667835c7d32ae88fa9aa4486e10da52.png', '2020-02-18'),
(8, 'Alltalia', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_4ab18a45e0681182c3acc2b24e293704.png', '2020-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `excos`
--

CREATE TABLE `excos` (
  `id` int(11) NOT NULL,
  `person_name` varchar(75) NOT NULL,
  `designation` varchar(75) NOT NULL,
  `file` varchar(150) NOT NULL,
  `facebook` varchar(75) NOT NULL DEFAULT '#',
  `twitter` varchar(75) NOT NULL DEFAULT '#',
  `linkedin` varchar(75) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excos`
--

INSERT INTO `excos` (`id`, `person_name`, `designation`, `file`, `facebook`, `twitter`, `linkedin`) VALUES
(8, 'Dr.Krishna Pd. Bhandari', 'Director', 'efac_3f7f0d4c95e318f26063dd68d998c8df.png', '', '', ''),
(10, 'Kshitij Raj Sharma', 'Research Associate', 'efac_a1d8f4b1cd3c82ac72191b462a65d356.png', 'https://www.facebook.com/sharma.kshitizraj', 'https://twitter.com/sharma_kshitiz9', 'https://www.linkedin.com/in/kshitizraj-sharma-49225279/'),
(11, 'Surya Adhikari', 'GIS Analyst', 'efac_a5563e5e3244c47da31f54e2f88b5278.jpg', '', '', ''),
(12, 'Bandhu Raj Parajuli', 'Head Asistant', 'efac_0205add03bb6c90d89cfb43e4f69d783.jpg', '', '', ''),
(18, 'Saugat Nepal', 'GIS Analyst', 'efac_b4e2d86974c9c8c0fc628b5826dc34be.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(70) NOT NULL,
  `notice_title` varchar(200) NOT NULL,
  `notice_detail` varchar(5000) NOT NULL,
  `notice_link` varchar(500) DEFAULT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_title`, `notice_detail`, `notice_link`, `file`, `date`) VALUES
(1, 'CSSGS hiering new interns', '<p>lorem ipsum cssgs providing&nbsp;</p>\r\n', '', 'efac_b50a6f9370a35e990055cf0e8ed4715b.jpg', '2020-02-16'),
(2, 'CSSGS opening new job', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', 'efac_a278b50bcbca666a9e05a193a9bda1f0.jpg', '2020-02-17'),
(3, 'GIS Developer wanted', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'https://www.facebook.com/wrc.cssgs/', 'efac_c1beb5b79b1df5b74be6ae0a22c828e2.jpg', '2020-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(70) NOT NULL,
  `project_title` varchar(200) NOT NULL,
  `project_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `project_status` varchar(70) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_title`, `project_detail`, `file`, `project_status`, `date`) VALUES
(2, 'Remote sensing', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_ae6667b5a4b78f7e72d1a4e9cc06bfa3.jpg', 'completed', '2020-02-17'),
(3, 'Land use land cover', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu sem integer vitae justo eget magna. Scelerisque fermentum dui faucibus in. Malesuada proin libero nunc consequat interdum varius sit. Quis auctor elit sed vulputate mi sit amet mauris commodo. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Consequat interdum varius sit amet mattis. Platea dictumst quisque sagittis purus sit. Iaculis urna id volutpat lacus. Ultrices dui sapien eget mi proin sed libero enim sed. Amet nisl suscipit adipiscing bibendum. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam.</p>\r\n', 'efac_911880661f76f2a19ca4ce3ebf7494d5.jpg', 'ongoing', '2020-02-17'),
(4, 'Remote sensing', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_cd9eeca2b3871389d9d6679e9112cfd2.jpg', 'completed', '2020-02-17'),
(5, 'Land use land cover', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_60cb22c796eb21a1ea0a21784794ff29.jpg', 'ongoing', '2020-02-17'),
(6, 'Remote sensing', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'efac_b1790e2843fc67312f21353f081fc306.jpg', 'completed', '2020-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(70) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_title`, `service_detail`, `file`, `date`) VALUES
(1, 'Loreum Ipsum', '<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo</p>\r\n', 'efac_7bad3221b97441b3aafa82cf0e80b673.png', '2020-02-18'),
(4, 'Remote Sensing', '<p>Minim&nbsp;veniam,&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea&nbsp;commodo&nbsp;consequat&nbsp;tarad&nbsp;limino&nbsp;ata&nbsp;nodera&nbsp;clas.</p>\r\n', 'efac_abab614d12ae0f03f4e717b9a32ed90e.png', '2020-02-19'),
(5, 'Database Management', '<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>\r\n', 'efac_974595420fb53bda627c77ff585bb992.png', '2020-02-19'),
(8, 'Management', '<p>We provide management related services such as remote sensing, photogrametry. We also provide different other management related services.</p>\r\n', 'efac_2b6b4c746f9082662bca09480cd56bf8.png', '2020-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `site_title` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `site_desc` varchar(350) NOT NULL,
  `site_keyword` varchar(250) NOT NULL,
  `google_code` varchar(1000) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(34) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `email`, `site_desc`, `site_keyword`, `google_code`, `street`, `city`, `country`, `phone`, `facebook`, `twitter`, `linkedin`, `status`) VALUES
(1, 'CSSGS', 'CSSGS', 'kaditya9711@gmail.com', 'This is a new Blog and it is cool!', 'Search Engine Ready, Business and others', '', 'Aule', 'Pokhara', 'Nepal', '+234-8138652645', 'CSSGS', 'cssgs', '+234-8138652645', 'cssgs');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `caption` varchar(2000) NOT NULL,
  `file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `caption`, `file`) VALUES
(7, 'image1', 'church_e8d7c4a6364ba63994f704abfbaec2be.jpg'),
(8, 'image2', 'church_60f6a1ecc98573de82958a5f73b1378c.jpg'),
(9, 'image3', 'church_0bac5e99cd961fe07def81960b4a7540.jpg'),
(10, 'image4', 'church_509409d50e37539d36827c3031062bf6.jpg'),
(11, 'image5', 'church_3db4d850b182b302ce913e1b00a7ae48.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'Aditya Kushwaha', 'kaditya9711@gmail.com', 'admin', 'admin', ''),
(6, 'CSSGS', 'cssgs@gmail.com', 'cssgs', 'cssgs', 'efac_32be933e6fe63d9d70d7d10573e0a4f4.png'),
(7, 'Kshitij Raj Sharma', 'skshitizraj@gmail.com', 'kshitij', 'kshitij', 'efac_cc0aee155c63483b11b798ea1f7dfa90.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `body` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `body`) VALUES
(4, '<p>Save about us</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(70) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_designation` varchar(50) NOT NULL,
  `client_message` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `client_name`, `client_designation`, `client_message`, `file`, `date`) VALUES
(2, 'Saul Goodman', 'Ceo and Founder', '<p>Proin&nbsp;iaculis&nbsp;purus&nbsp;consequat&nbsp;sem&nbsp;cure&nbsp;digni&nbsp;ssim&nbsp;donec&nbsp;porttitora&nbsp;entum&nbsp;suscipit&nbsp;rhoncus.&nbsp;Accusantium&nbsp;quam,&nbsp;ultricies&nbsp;eget&nbsp;id,&nbsp;aliquam&nbsp;eget&nbsp;nibh&nbsp;et.&nbsp;Maecen&nbsp;aliquam,&nbsp;risus&nbsp;at&nbsp;semper.</p>\r\n', 'efac_c74010490ec6a66c48c741aa65966cd8.jpg', '2020-02-18'),
(3, 'Sara Wilsson', 'Designer', '<p>Export&nbsp;tempor&nbsp;illum&nbsp;tamen&nbsp;malis&nbsp;malis&nbsp;eram&nbsp;quae&nbsp;irure&nbsp;esse&nbsp;labore&nbsp;quem&nbsp;cillum&nbsp;quid&nbsp;cillum&nbsp;eram&nbsp;malis&nbsp;quorum&nbsp;velit&nbsp;fore&nbsp;eram&nbsp;velit&nbsp;sunt&nbsp;aliqua&nbsp;noster&nbsp;fugiat&nbsp;irure&nbsp;amet&nbsp;legam&nbsp;anim&nbsp;culpa.</p>\r\n', 'efac_229b84cba0fd522a8c4611d5959c449e.jpg', '2020-02-18'),
(4, 'Jena Karlis', 'Store Owner', '<p>Enim&nbsp;nisi&nbsp;quem&nbsp;export&nbsp;duis&nbsp;labore&nbsp;cillum&nbsp;quae&nbsp;magna&nbsp;enim&nbsp;sint&nbsp;quorum&nbsp;nulla&nbsp;quem&nbsp;veniam&nbsp;duis&nbsp;minim&nbsp;tempor&nbsp;labore&nbsp;quem&nbsp;eram&nbsp;duis&nbsp;noster&nbsp;aute&nbsp;amet&nbsp;eram&nbsp;fore&nbsp;quis&nbsp;sint&nbsp;minim.</p>\r\n', 'efac_ab7c7d42deed31a71296d5ca7d2f55b4.jpg', '2020-02-18'),
(5, 'Matt Brandon', 'Freelancer', '<p>Fugiat&nbsp;enim&nbsp;eram&nbsp;quae&nbsp;cillum&nbsp;dolore&nbsp;dolor&nbsp;amet&nbsp;nulla&nbsp;culpa&nbsp;multos&nbsp;export&nbsp;minim&nbsp;fugiat&nbsp;minim&nbsp;velit&nbsp;minim&nbsp;dolor&nbsp;enim&nbsp;duis&nbsp;veniam&nbsp;ipsum&nbsp;anim&nbsp;magna&nbsp;sunt&nbsp;elit&nbsp;fore&nbsp;quem&nbsp;dolore&nbsp;labore&nbsp;illum&nbsp;veniam.</p>\r\n', 'efac_3c2f89edd012a6dfda48c445fafc2425.jpg', '2020-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318);

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `body` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `body`) VALUES
(1, 'Lorem ipsum dolor sit amet, te eos aeque soluta, eros semper percipit te est. Ad eam ignota suavitate moderatius. Ne nam duis nemore, vel id vero congue, cum no labore inermis oportere. Te sit vocent inermis, mea ex dicta deleniti mediocrem. Ad pri graece appetere disputationi, omnesque maiestatis qui te, option recusabo torquatos an duo.Id eum vero iudico assueverit. Pro facer vidisse ex. Ius ad sumo magna praesent. Eu duo hinc dolorem phaedrum, at mel torquatos cotidieque, his te modo vitae forensibus.Quis vero audiam te est. Idque omnesque an eam, ei aliquam pertinax abhorreant sit, alienum tincidunt rationibus usu et. Id graeco propriae persecuti usu. Habeo melius singulis et his, quo ad laoreet efficiendi. In aliquid indoctum dissentiunt eos, per bonorum principes in. Convenire omittantur mea ad, duo at iusto postulant. Sea ne tibique scriptorem.Eam tollit albucius ad, sea solum justo rationibus ut, sed oratio explicari no. Regione instructior id vix, nec cu definiebas scripserit contentiones. Iriure lobortis pertinacia mel ut. Eam ea choro vituperata, recteque sapientem evertitur est an. Ne lucilius inimicus has, ea duo alia aliquid.Sit at aperiri indoctum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excos`
--
ALTER TABLE `excos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `excos`
--
ALTER TABLE `excos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
