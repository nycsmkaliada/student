-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2026 at 03:29 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_ques1`
--

CREATE TABLE `add_ques1` (
  `id` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `opt1` varchar(60) NOT NULL,
  `opt2` varchar(60) NOT NULL,
  `opt3` varchar(60) NOT NULL,
  `opt4` varchar(60) NOT NULL,
  `ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_ques1`
--

INSERT INTO `add_ques1` (`id`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(18, 'CPU stands for ?', 'Comman Processing Unit', 'Control Processing Unit', 'Central Processing Unit', 'Central Problem Unit', 2),
(19, 'CU stands for ?', 'Control Unit', 'Combine Unit', 'Central Unit', 'Computer Unit', 0),
(20, 'CTRL + H used for___ ?', 'Hyperlink', 'Replace', 'Find', 'Go To', 1),
(21, 'CTRL + K used for____?', 'Hyperlink', 'Replace', 'Find', 'Go To', 0),
(22, 'Which Application Called Spreadsheet Application', 'MS WORD', 'MS EXCEL', 'MS POWER POINT', 'MS ACCESS', 1),
(23, 'How Much Digit in Binary ?', '1', '2', '3', '4', 1),
(24, '(111010101001)<sub>2</sub> Convert into Decimal ?', '3713<sub>10</sub>', '3953<sub>10</sub>', '3753<sub>10</sub>', '2753<sub>10</sub>', 2),
(25, '3562<sub>10</sub> Convert into Binary ?', '110111101010<sub>2</sub>', '110010101010<sub>2</sub>', '110100101010<sub>2</sub>', '111100101110<sub>2</sub>', 0),
(26, '4215 <sub>10</sub> Convert into Binary ?', '1010101010101 <sub>2</sub>', '1010101110111 <sub>2</sub>', '1011001110111 <sub>2</sub>', '1000001110111 <sub>2</sub>', 3),
(27, '1001010111001 <sub>2</sub> Convert into Decimal ?', '4773 <sub>10</sub>', '4193 <sub>10</sub>', '4793 <sub>10</sub>', '5793 <sub>10</sub>', 2),
(28, 'How to use SUM function in MS EXCEL ? ', 'sum=(number1,number2)', '=(number1,number2)sum', '=sum(number1,number2)', '(sum=number1,number2)', 2),
(29, 'How much sheet available in a default worksheet in excel ?', '1', '2', '3', '4', 2),
(30, 'Loan Amount 1,00000 in 3 years with 14% interest how much pay ?', '=pmt(14/12,3*12,100000)', '=pmt(14*12,3/12,100000)', 'pmt=(14/12,3*12,100000)', '=pmt(14/12,3,100000/12)', 0),
(35, 'Ctrl + F use in MS Word ?', 'Replace', 'Find', 'Hyperlink', 'Font', 1),
(36, 'Portrait and Landscape are', 'Page Orientation', 'Page Size', 'Page Layout', 'All of Above', 0),
(37, 'Who is the father of Computer ?', 'Jhon Mouchy', 'Prosper Ekerth', 'Charles Babbage', 'None of these', 2),
(38, 'Which Generation Used Vaccumtube Technology ?', '1st Gen', '2nd Gen', '3rd Gen', '4th Gen', 0),
(39, 'RAM stands For ?', 'Random Accessible Memory.', 'Read only Memory.', 'Random Access Memory.', 'None of These', 2),
(40, 'MS word is _____Application.', 'Application Software', 'Compiler', 'Operating System', 'System Software', 0),
(41, 'Pressing Ctrl + D keys invokes the _____dialog box in MS - WORD.', 'Find and Replace', 'Hyperlink', 'Font', 'Paragraph', 2),
(42, 'MD full form in command prompt ?', 'Made Directory', 'Make Directory', 'Make Discover', 'None of These', 1),
(43, 'Which command use for delete directory in cmd ?', 'del', 'md', 'rd', 'cd', 2),
(44, 'Make a Grade system which function use in Excel ?', '=if()', '=if(and())', '=if(or())', 'None of These', 0),
(45, 'How many type of Orientation in MS Word ?', '1', '2', '3', '4', 1),
(46, 'How much function key available in keyboard ?', '10', '11', '12', '13', 2),
(47, 'Normally How many type of case change in MS Word ?', '2', '3', '4', '5', 3),
(48, 'Which tool use for draw a line in notepad ?', 'Pen tool', 'Line tool', 'Curbed tool ', 'Eraser tool', 1),
(49, 'Symbol is available which tab in MS Word ? ', 'Home Tab', 'Insert Tab', 'Layout Tab', 'View Tab', 1),
(50, 'How Many Type of Digital Computer ?', '1', '2', '3', '4', 3),
(51, 'Which Computer based on signal ?', 'Digital Computer ', 'Hybrid Computer', 'Analog Computer', 'All of These', 2),
(52, 'Which is the Input Device ?', 'Keyboard', 'Monitor', 'Printer', 'Speaker', 0),
(53, 'What is the default file extension for a Word document?', '.pdf', '.docx', '.xls', '.txt', 1),
(54, 'Which tab contains the options to change the font and paragraph formatting in MS Word?', 'Insert', 'Review', 'View', 'Home', 3),
(55, 'Which of the following is NOT a text alignment option in MS Word?', 'Center', 'Right', 'Left', 'Bottom', 3),
(56, 'Which option allows you to add a watermark to a document?', 'Insert -> Header', 'Design -> Watermark', 'Review -> Watermark', 'Page Layout -> Watermark', 3),
(57, 'Which of the following options is used to add a header in MS Word?', 'Insert -> Header', 'View -> Header', 'Home -> Header', 'Page Layout -> Header', 0),
(58, 'What is the function of the ‘Ctrl + Z’ shortcut in MS Word?', 'To close the document', 'To redo an action', 'To undo an action', 'To save a document', 2),
(59, 'What is the Excel formula for multiplication?', '=A1+B1', '=A1*B1', '=A1-B1', '=A1/B1', 1),
(60, 'What is the purpose of the HLOOKUP function?', 'To search for data in columns', 'To search for data in rows', 'To create horizontal tables', 'To sort horizontal data', 1),
(61, 'Which function is used to find the largest value in a range?', 'MIN()', 'AVERAGE()', 'MAX()', 'LARGE()', 2),
(62, 'What is MS PowerPoint?', 'A video editing software', 'A spreadsheet software', 'A word processing software', 'A presentation software used to create slideshows', 3),
(63, 'What are some features of PowerPoint?', 'Animation effects', 'Text editing', 'Slide transitions', 'All of the mentioned', 3),
(64, 'What is a transition in PowerPoint?', 'A way to print the slides', 'A background color', 'A visual effect between slides', 'A type of font style', 2),
(65, 'Which of the following can be added to a PowerPoint slide?', 'Text', 'Images', 'Charts', 'All of the mentioned', 3),
(66, 'How do you Add a Table to a Slide in PowerPoint?', 'From the Insert tab by clicking Table', 'From the File menu', 'From the Home tab', 'From the View tab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_ques2`
--

CREATE TABLE `add_ques2` (
  `id` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `opt1` varchar(60) NOT NULL,
  `opt2` varchar(60) NOT NULL,
  `opt3` varchar(60) NOT NULL,
  `opt4` varchar(60) NOT NULL,
  `ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_ques2`
--

INSERT INTO `add_ques2` (`id`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(4, 'HTML stands for ?', 'Hyper text mark up Language', 'Hypertext Markup Language', 'Hype Textorial make Language', 'None of these', 1),
(5, 'Which tag are empty tag ?', 'p tag', 'br tag', 'tr tag', 'font tag', 1),
(6, 'Sum is _______function in Excel ?', 'Additional ', 'Division', 'Substrac', 'Multification', 0),
(7, 'Which is the correct ?', '=sum', '=average()', '=sum(if)', '=and', 1),
(8, 'Which tag use name value ?', 'Checkbox', 'Radio', 'Button', 'Input', 1),
(9, 'Excel is ___ Application ?', 'Writer Application', 'Spread Sheet Application', 'Accounting Application', 'Editing Application', 1),
(10, 'Which HTML tag is used to insert an image?', 'img url=”htmllogo.jpg” ', 'img alt=”htmllogo.jpg” ', ' img src=”htmllogo.jpg” ', ' img link=”htmllogo.jpg” ', 2),
(11, 'Which of the following HTML tag is used to add a row in a table?', 'th', 'td', 'tr', 'tt', 2),
(12, 'Which tag is used to create a numbered list in HTML?', 'ol', 'ul', 'li', 'll', 0),
(13, 'What is the select tag used for?', 'Create a combo box', 'Select some attributes and change their style', 'Change text font', 'None of the above', 0),
(14, 'What is the smallest header in HTML by default?', 'h1', 'h2', 'h6', 'h4', 2),
(15, 'What is meant by an empty tag in HTML?', 'There is no such concept of an  empty tag in HTML', 'An empty tag does not require a closing tag', 'An empty tag cannot have any content within it', 'None of the above', 1),
(16, 'Which of the following is true about HTML tags?', 'Are case sensitive', 'Are not case sensitive', 'Are in upercase', 'Are in lowercase', 1),
(17, 'Which of the following tags doesn’t require a closing tag?', 'br', 'hr', 'Both A and B', 'None of the above', 2),
(18, 'Which of the following things are necessary to create an HTML page?', 'A text editor', 'Web Browser', 'Both A and B', 'None of the above', 2),
(19, 'Which property is used to set border colors in HTML?', 'border-color', 'border', 'Both A and B', 'None of the Above', 1),
(20, '  How to display preformatted text in HTML?', 'p', 'pre', 'hr', 'All of the above', 1),
(21, 'HTML files are saved by default with the extension?', '.html', '.h', '.ht', 'None of the above', 0),
(22, 'We enclose HTML tags within?', '{}', '< >', '!!', 'None of the above', 1),
(23, 'What are the types of unordered lists in HTML?', 'Circle, Square, Disc.', 'Circle, Square, Triangle.', 'Triangle, Circle, Square.', 'All of the above', 0),
(24, 'Which tag is used to create a hyperlink in HTML?', 'link', 'a', 'href', 'hyperlink', 2),
(25, 'Which HTML tag is used to define an internal style sheet?', 'css', 'style', 'script', 'link', 1),
(26, 'What is the correct HTML element for inserting a line break?', 'ib', 'break', 'br', 'line', 2),
(27, 'Which tag is used to display a table in HTML?', 'Table', 'tr', 'td', 'th', 0),
(28, ' What is the default value of the position property in CSS?', 'Static', 'Relative', 'Absolute', 'Fixed', 0),
(29, ' How can you include a CSS file in an HTML document?', 'Style', 'link', 'css', 'script', 1),
(30, 'How can we change the text color of an element?', 'background-color', 'color', 'Both A and B', 'None of the above', 1),
(31, 'In how many ways can CSS be written in?', '1', '2', '3', '4', 2),
(32, 'How can we select an element with a specific ID in CSS?', '#', '.', '^', ':', 0),
(33, 'How can we select an element with a specific Class in CSS?', '#', '.', '^', ':', 1),
(34, 'The CSS property used to specify the transparency of an element is?', 'opacity', 'visibility', 'filter', 'None of the above', 0),
(35, 'How can we specify the spacing between each letter in a text in CSS?', 'alpha-spacing', 'letter-spacing', 'character-spacing', 'None', 1),
(36, 'Which of the following is the correct way to select all h1 headers in a div element?', 'div h1', 'div-h1', 'h1', 'None', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_stu`
--

CREATE TABLE `add_stu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_stu`
--

INSERT INTO `add_stu` (`id`, `name`, `reg`) VALUES
(1, '$name', '$reg'),
(2, 'asdfasdfas', 'dfasdfasdf'),
(3, 'asdfasdf', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'Satyajitmodak234', 'Satyajitmodak234'),
(3, 'SatyajitModak', 'SatyajitModak'),
(4, 'ApurbaMandal', 'ApurbaMandal'),
(5, 'Apurbamandal', 'Apurbamandal');

-- --------------------------------------------------------

--
-- Table structure for table `new_add`
--

CREATE TABLE `new_add` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `mob` int(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `gander` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `high` varchar(30) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `cat` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `rightis` int(11) NOT NULL,
  `worng` int(11) NOT NULL,
  `no_ans` int(11) NOT NULL,
  `sem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user`, `rightis`, `worng`, `no_ans`, `sem`) VALUES
(1, 'root', 0, 2, 19, ''),
(2, 'admin', 0, 2, 19, ''),
(3, 'admin', 2, 0, 19, 'semester 1'),
(4, 'admin', 2, 0, 19, 'semester 1'),
(5, 'admin', 0, 7, 24, 'semester 1'),
(6, 'admin', 0, 8, 23, 'semester 1'),
(7, 'admin', 1, 10, 20, 'semester 1'),
(8, 'admin', 1, 7, 23, 'semester 1'),
(9, 'admin', 1, 7, 23, 'semester 1'),
(10, 'admin', 1, 7, 23, 'semester 1'),
(11, 'admin', 1, 7, 23, 'semester 1'),
(12, 'admin', 1, 7, 23, 'semester 1'),
(13, 'admin', 1, 7, 23, 'semester 1'),
(14, 'admin', 1, 7, 23, 'semester 1'),
(15, 'admin', 1, 7, 23, 'semester 1'),
(16, 'admin', 1, 7, 23, 'semester 1'),
(17, 'admin', 1, 7, 23, 'semester 1'),
(18, 'admin', 1, 7, 23, 'semester 1'),
(19, 'admin', 1, 7, 23, 'semester 1'),
(20, 'admin', 1, 7, 23, 'semester 1'),
(21, 'admin', 1, 7, 23, 'semester 1'),
(22, 'admin', 1, 7, 23, 'semester 1'),
(23, 'admin', 1, 7, 23, 'semester 1'),
(24, 'MOU MANDAL', 5, 11, 15, 'semester 1'),
(25, 'GANESH MAHATO', 17, 14, 0, 'semester 1'),
(26, 'SOUVIK PRAMANIK', 16, 15, 0, 'semester 1'),
(27, 'TANMOY MANDAL', 23, 8, 0, 'semester 1'),
(28, 'MOU MANDAL', 17, 14, 0, 'semester 1'),
(29, 'MANDIRA TUDU', 16, 14, 1, 'semester 1'),
(30, 'AMAL MANDAL', 18, 13, 0, 'semester 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `m_name` varchar(25) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `mob` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  `serial` bigint(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `course` varchar(20) NOT NULL,
  `admission_fees` int(11) NOT NULL,
  `Registration_fees` int(11) NOT NULL,
  `Tuituion_fees` int(11) NOT NULL,
  `Late_fees` int(11) NOT NULL,
  `Exam_fees` int(11) NOT NULL,
  `Maintain_fees` int(11) NOT NULL,
  `other_fees` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `f_name`, `m_name`, `dob`, `mob`, `file`, `status`, `serial`, `date`, `course`, `admission_fees`, `Registration_fees`, `Tuituion_fees`, `Late_fees`, `Exam_fees`, `Maintain_fees`, `other_fees`, `total`) VALUES
(33, 'KOUSHIK GORAI', 'INDWB2300106', 'GOBARDHAN GORAI', '', '2023-09-06', 0, 'img258.jpg', 0, 747819, '2023-09-06', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(35, 'UMAPADA MANDI', 'INDWB2201644', 'LAKHIKANTA MANDI', '', '2023-09-09', 2147483647, 'FB_IMG_1690336448559.jpg', 0, 0, '2023-09-09', '', 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'UMAPADA MANDI', 'INDWB2201644', 'LAKHIKANTA MANDI', '', '2023-09-09', 2147483647, 'FB_IMG_1690336448559.jpg', 0, 198407, '2023-09-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(37, 'PAPIYA MANDAL', 'INDWB2300109', 'FATIK CHANDRA MANDAL', '', '2023-09-09', 0, '', 0, 75791, '2023-09-09', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(39, 'AMAL MANDAL', 'INDWB2301256', 'BAIDYANATH MANDAL', '', '2023-09-06', 0, 'img576.jpg', 1, 974302, '2023-09-06', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(40, 'SUSMITA MURMU', 'INDWB2101503', 'DURGADAS MURMU', '', '2023-09-10', 0, 'img491.jpg', 0, 385839, '2023-09-10', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(41, 'TANMOY MANDAL', 'INDWB2300687', 'RANJIT MANDAL', '', '2023-09-11', 0, '', 1, 692689, '2023-09-11', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(42, 'DURBARAJ MURMU', 'INDWB2300427', 'KARNA MURMU', 'PRATIMA MURMU', '2023-09-12', 2147483647, '1698814130086.jpg', 0, 150988, '2023-09-12', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(43, 'BISWAJIT KISKU', 'INDWB2300428', 'MATILAL KISKU', 'UPASI KISKU', '2023-09-12', 2147483647, '1689652195348-01.jpeg', 0, 209249, '2023-09-12', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(44, 'MANDIRA TUDU', 'INDWB2300254', 'JAYANTA TUDU', '', '2023-09-14', 0, '', 1, 452093, '2023-09-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(45, 'MOU MANDAL', 'INDWB2300107', 'SIMANTA MANDAL', '', '2023-09-15', 0, 'img394.jpg', 1, 256286, '2023-09-15', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(46, 'PUJA MANDAL', 'INDWB2201526', 'SHANTAMOY MANDAL', '', '2023-09-16', 0, 'img237.jpg', 0, 596236, '2023-09-16', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(47, 'SOUVIK PRAMANIK', 'INDWB2300688', 'AMARESH PRAMANIK', '', '2023-09-17', 0, '', 1, 629354, '2023-09-17', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(48, 'MALLIKA MURMU', 'INDWB2201645', 'DURJYODHAN MURMU', '', '2023-09-19', 0, '', 0, 162477, '2023-09-19', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(49, 'PRIYA MANDAL', 'INDWB2300118', 'NIMAI MANDAL', '', '2023-09-24', 0, '', 0, 173626, '2023-09-24', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(50, 'TANMOY MANDAL', 'INDWB2300687', 'RANJIT MANDAL', '', '2023-10-11', 0, '', 0, 193197, '2023-10-11', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(51, 'SOUVIK PRAMANIK', 'INDWB2300688', 'AMARESH PRAMANIK', '', '2023-10-11', 0, '', 0, 440546, '2023-10-11', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(52, 'GANESH MAHATO', 'INDWB2301258', 'BHOLANATH MAHATO', '', '2023-10-11', 0, '', 1, 209090, '2023-10-11', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(53, 'AVISHEK MURMU', 'INDWB2300429', 'KALIDAS MURMU', '', '2023-10-11', 0, '', 0, 298943, '2023-10-11', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(54, 'MANDIRA TUDU', 'INDWB2300254', 'JAYANTA TUDU', '', '2023-10-12', 0, '', 0, 561604, '2023-10-12', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(55, 'MOU MANDAL', 'INDWB2300107', 'SIMANTA MANDAL', '', '2023-10-14', 0, '', 0, 273885, '2023-10-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(56, 'DURBARAJ MURMU', 'INDWB2300427', 'KARNA MURMU', 'PRATIMA MURMU', '2023-09-12', 2147483647, '1698814130086.jpg', 0, 295081, '2023-10-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(57, 'AMAL MANDAL', 'INDWB2301256', 'BAIDYANATH MANDAL', '', '2023-10-15', 0, '', 0, 605956, '2023-10-15', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(58, 'BISWAJIT KISKU', 'INDWB2300428', 'MATILAL KISKU', 'UPASI KISKU', '2023-09-12', 2147483647, '1689652195348-01.jpeg', 0, 728107, '2023-10-19', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(59, 'SANAT MURMU', 'INDWB2101492', 'NARESH CHANDRA MURMU', 'JALESHWARI MURMU', '2005-07-19', 2147483647, '1685186855405_1.jpg', 0, 889318, '2023-11-02', 'DCA', 0, 0, 900, 0, 0, 0, 0, 900),
(60, 'PAPIYA MANDAL', 'INDWB2300109', 'FATIK CHANDRA MANDAL', '', '2023-11-05', 0, '', 0, 26530, '2023-11-05', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(61, 'TANMOY MANDAL', 'INDWB2300687', 'RANJIT MANDAL', '', '2023-11-05', 0, '', 0, 220949, '2023-11-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(62, 'PRIYA MANDAL', 'INDWB2300118', 'NIMAI MANDAL', '', '2023-11-05', 0, '', 0, 606547, '2023-11-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(63, 'GANESH MAHATO', 'INDWB2301258', 'BHOLANATH MAHATO', '', '2023-11-07', 0, '', 0, 145761, '2023-11-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(64, 'DURBARAJ MURMU', 'INDWB2300427', 'KARNA MURMU', 'PRATIMA MURMU', '2023-09-12', 2147483647, '1698814130086.jpg', 0, 408649, '2023-11-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(65, 'MOU MANDAL', 'INDWB2300107', 'SIMANTA MANDAL', '', '2023-11-10', 0, '', 0, 391369, '2023-11-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(66, 'PUJA MANDAL', 'INDWB2201526', 'SHANTAMOY MANDAL', '', '2023-11-19', 0, '', 0, 583172, '2023-11-19', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(67, 'KRISHNA MANDI', 'INDWB2301666', 'GOUR MANDI', 'ARATI MANDI ', '2006-11-27', 2147483647, 'IMG_20231221_052708_496.jpg', 0, 673560, '2023-11-24', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(68, 'ARNAB SING SARDAR', 'INDWB2301665', 'KAILASH SING SARDAR', 'TAPATI SING SARDAR', '2007-01-31', 2147483647, 'img688.jpg', 0, 992619, '2023-11-24', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(69, 'PRIYA MANDAL', 'INDWB2300118', 'NIMAI MANDAL', '', '2023-11-26', 0, '', 0, 611759, '2023-11-26', 'DCA', 0, 0, 0, 0, 0, 0, 0, 0),
(70, 'AMAL MANDAL', 'INDWB2301256 ', 'BAIDYANATH MANDAL', '', '2023-11-27', 0, '', 0, 111671, '2023-11-27', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(71, 'PAPIYA MANDAL', 'INDWB2300109 ', 'FATIK CHANDRA MANDAL', '', '2023-12-01', 0, '', 0, 518885, '2023-12-01', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(72, 'MANDIRA TUDU', 'INDWB2300254', 'JAYANTA TUDU', '', '2023-12-01', 0, '', 0, 457048, '2023-12-01', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(73, 'MALLIKA MURMU', 'INDWB2201645', 'DURJYODHAN MURMU', '', '2023-12-02', 0, '', 0, 541235, '2023-12-02', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(74, 'AVISHEK MURMU', 'INDWB2300429', 'KALIDAS MURMU', '', '2023-12-10', 0, '', 0, 914713, '2023-12-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(75, 'SOUVIK PRAMANIK', 'INDWB2300688', 'AMARESH PRAMANIK', '', '2023-12-10', 0, '', 0, 99143, '2023-12-02', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(76, 'GANESH MAHATO', 'INDWB2301258', 'BHOLANATH MAHATO', '', '2023-12-10', 0, '', 0, 944039, '2023-12-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(77, 'TANMOY MANDAL', 'INDWB2300687', 'RANJIT MANDAL', '', '2023-12-10', 0, '', 0, 836098, '2023-12-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(78, 'AMAL MANDAL', 'INDWB2301256 ', 'BAIDYANATH MANDAL', '', '2023-12-10', 0, '', 0, 958182, '2023-12-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(79, 'SUCHITRA MURMU', 'INDWB2301664', 'DURGADAS MURMU', 'BALIKA MURMU', '2023-12-13', 2147483647, 'IMG-20240110-WA0004.jpg', 0, 610758, '2023-12-13', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(80, 'MOU MANDAL', 'INDWB2300107', 'SIMANTA MANDAL', '', '2023-12-17', 0, '', 0, 808261, '2023-12-17', 'DCA', 0, 0, 30, 0, 0, 0, 0, 30),
(81, 'MALLIKA MURMU', 'INDWB2201645 ', 'DURJYODHAN MURMU', '', '2024-01-06', 0, '', 0, 693884, '2024-01-06', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(82, 'GANESH MAHATO', 'INDWB2301258', 'BHOLANATH MAHATO', '', '2024-01-08', 0, '', 0, 787378, '2024-01-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(83, 'TANMOY MANDAL', 'INDWB2300687', 'RANJIT MANDAL', '', '2024-01-08', 0, '', 0, 212696, '2024-01-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(84, 'ARNAB SING SARDAR', 'INDWB2301665', 'KAILASH SING SARDAR', 'TAPATI SING SARDAR', '2007-01-31', 2147483647, 'img688.jpg', 0, 130755, '2024-01-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(85, 'SOUVIK PRAMANIK', 'INDWB2300688 ', 'AMARESH PRAMANIK', '', '2024-01-17', 0, '', 0, 226770, '2024-01-17', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(86, 'SUCHITRA MURMU', 'INDWB2301664', 'DURGADAS MURMU', 'BALIKA MURMU', '2023-12-13', 2147483647, 'IMG-20240110-WA0004.jpg', 0, 225646, '2024-01-21', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(87, 'AMAL MANDAL', 'INDWB2301256 ', 'BAIDYANATH MANDAL', '', '2024-01-21', 0, '', 0, 289466, '2024-01-21', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(88, 'MALLIKA MURMU', 'INDWB2201645', 'DURJYODHAN MURMU', '', '2024-01-21', 0, '', 0, 376612, '2024-01-21', 'DCA', 0, 600, 0, 0, 0, 0, 0, 600),
(89, 'MOU MANDAL', 'INDWB2300107', 'SIMANTA MANDAL', '', '2024-01-22', 0, '', 0, 715153, '2024-01-22', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(90, 'DURBARAJ MURMU', 'INDWB2300427', 'KARNA MURMU', '', '2024-01-22', 0, '', 0, 826125, '2024-01-22', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(91, 'KRISHNA MANDI', 'INDWB2301666 ', 'GOUR MANDI', '', '2024-02-02', 0, '', 0, 529144, '2024-02-02', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(92, 'TANMOY MANDAL', 'INDWB2300687', 'RANJIT MANDAL', '', '2024-02-04', 0, '', 0, 408702, '2024-02-04', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(93, 'GANESH MAHATO', 'INDWB2301258 ', 'BHOLANATH MAHATO', '', '2024-02-04', 0, '', 0, 555180, '2024-02-04', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(94, 'PRIYA MANDAL', 'INDWB2300118', 'NIMAI MANDAL', '', '2024-02-09', 0, '', 0, 718154, '2024-02-09', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(95, 'MANDIRA TUDU', 'INDWB2300254', 'JAYANTA TUDU', '', '2024-02-09', 0, '', 0, 816489, '2024-02-09', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(96, 'SOUVIK PRAMANIK', 'INDWB2300688', 'AMARESH PRAMANIK', '', '2024-02-09', 0, '', 0, 115742, '2024-02-09', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(97, 'RIMPA MANDAL', 'INDWB2400021', 'NITAI CHANDRA MANDAL', '', '2024-02-09', 0, '', 0, 834658, '2024-02-02', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(98, 'RIMPA MANDAL', 'INDWB2400021 ', 'NITAI CHANDRA MANDAL', '', '2024-02-09', 0, '', 0, 191149, '2024-01-01', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(99, 'MOU MANDAL', 'INDWB2300107', 'SIMANTA MANDAL', '', '2024-02-10', 0, '', 0, 145530, '2024-02-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(100, 'ARNAB SING SARDAR', 'INDWB2301665 ', 'KAILASH SING SARDAR', '', '2024-02-11', 0, '', 0, 678565, '2024-02-11', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(101, 'DEB MODAK', 'INDWB2400290', 'PRADIP MODAK', '', '2024-02-22', 0, '', 0, 317783, '2024-02-22', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(102, 'SOUMEN MONDAL', 'INDWB2400296', 'UTTAM MONDAL', '', '2024-02-22', 0, '', 0, 254756, '2024-02-22', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(103, 'AMAL MANDAL', 'INDWB2301256 ', 'BAIDYANATH MANDAL', '', '2024-02-25', 0, '', 0, 107320, '2024-02-25', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(104, 'IMAN GORAI', 'INDWB2301721', 'TARANI GORAI', '', '2024-03-01', 0, '', 0, 272014, '2024-03-01', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(105, 'PAPIYA MANDAL', 'INDWB2300109', 'FATIK CHANDRA MANDAL', '', '2024-03-01', 0, '', 0, 662027, '2024-03-01', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(106, 'PAPIYA MANDAL', 'INDWB2300109', 'FATIK CHANDRA MANDAL', '', '2024-03-03', 0, '', 0, 971940, '2024-03-03', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(107, 'TANMOY MANDAL', 'INDWB2300687 ', 'RANJIT MANDAL', '', '2024-03-08', 0, '', 0, 247674, '2024-03-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(108, 'GANESH MAHATO', 'INDWB2301258 ', 'BHOLANATH MAHATO', '', '2024-03-08', 0, '', 0, 717051, '2024-03-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(109, 'NAYAN MAHATO', 'INDWB2400849', 'BIDHAN CHANDRA MAHATO', '', '2024-03-08', 0, '', 0, 589340, '2024-03-08', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(110, 'SIDDHARTHA SHANKAR DAS', 'INDWB2400291', 'BUDDHESWAR DAS', '', '2024-03-08', 0, '', 0, 966633, '2024-03-08', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(111, 'SOURAV MONDAL', 'INDWB2400042', 'KARNA MANDAL', 'LATE TULSI MONDAL', '2024-01-19', 2147483647, '', 0, 475629, '2024-01-19', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(112, 'SOUVIK PRAMANIK', 'INDWB2300688', 'AMARESH PRAMANIK', '', '2024-03-10', 0, '', 0, 262065, '2024-03-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(113, 'SANCHITA CHELL', 'INDWB2400294', 'ADITYA CHELL', '', '2024-03-10', 0, '', 0, 823422, '2024-03-08', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(114, 'PAPIYA CHEL', 'INDWB2400295', 'PRASHANTA KUMAR CHEL', '', '2024-03-10', 0, '', 0, 859007, '2024-03-08', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(115, 'TANIMA CHELL', 'INDWB2400293', 'ADITYA CHELL', '', '2024-03-10', 0, '', 0, 888710, '2024-03-08', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(116, 'SHATABDI CHELL', 'INDWB2400298', 'RAMESH CHELL', '', '2024-03-10', 0, '', 0, 203258, '2024-03-10', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(117, 'ARNAB SING SARDAR', 'INDWB2301665', 'KAILASH SING SARDAR', '', '2024-03-14', 0, '', 0, 958477, '2024-03-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(118, 'SUCHITRA MURMU', 'INDWB2301664', 'DURGADAS MURMU', '', '2024-03-14', 0, '', 0, 247635, '2024-03-14', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(119, 'SOURAV MONDAL', 'INDWB2400042 ', 'KARNA MANDAL', 'LATE TULSI MONDAL', '2024-01-19', 2147483647, '', 0, 772946, '2024-03-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(120, 'RAKI MANDAL', 'INDWB2400043', 'GOUTAM MANDAL', '', '2024-03-14', 0, 'download.jpg', 0, 505939, '2024-03-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(121, 'MANDIRA TUDU', 'INDWB2300254 ', 'JAYANTA TUDU', '', '2024-03-18', 0, '', 0, 125169, '2024-03-17', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(122, 'KRISHNA MANDI', 'INDWB2301666 ', 'GOUR MANDI', '', '2024-03-18', 0, '', 0, 163651, '2024-03-18', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(123, 'PRIYA MANDAL', 'INDWB2300118', 'NIMAI MANDAL', '', '2024-03-23', 0, '', 0, 458593, '2024-03-23', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(124, 'ISHA DEOGHARIA', 'INDWB2400292', 'SADANANDA DEOGHARIA', '', '2024-04-05', 0, '', 0, 756115, '2024-02-01', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(125, 'ISHA DEOGHARIA', 'INDWB2400292', 'SADANANDA DEOGHARIA', '', '2024-04-05', 0, '', 0, 846818, '2024-04-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(126, 'DEB MODAK', 'INDWB2400290', 'PRADIP MODAK', '', '2024-04-05', 0, '', 0, 535396, '2024-04-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(127, 'SOUVIK PRAMANIK', 'INDWB2300688', 'AMARESH PRAMANIK', '', '2024-04-08', 0, '', 0, 136318, '2024-04-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(128, 'TANIMA CHELL', 'INDWB2400293', 'ADITYA CHELL', '', '2024-04-08', 0, '', 0, 271145, '2024-04-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(129, 'PAPIYA CHEL', 'INDWB2400295', 'PRASHANTA KUMAR CHEL', '', '2024-04-08', 0, '', 0, 39761, '2024-04-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(130, 'SANCHITA CHELL', 'INDWB2400294', 'ADITYA CHELL', '', '2024-04-08', 0, '', 0, 633386, '2024-04-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(131, 'NANDINI CHAKRABORTY', 'INDWB2400704', 'NARAN CHAKRABORTY', '', '2024-04-09', 0, '', 0, 7815, '2024-04-09', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(132, 'BABITA DEOGHARIA', 'INDWB2400746', 'ASHOK DEOGHARIA', '', '2024-04-11', 0, '', 0, 771960, '2024-03-06', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(133, 'BABITA DEOGHARIA', 'INDWB2400746', 'ASHOK DEOGHARIA', '', '2024-04-11', 0, '', 0, 987958, '2024-04-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(134, 'ARNAB SING SARDAR', 'INDWB2301665', 'KAILASH SING SARDAR', '', '2024-04-15', 0, '', 0, 466404, '2024-04-15', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(135, 'SARASWATI MODAK', 'INDWB2400711', 'SRISTIDHAR MODAK', '', '2024-04-16', 0, '', 0, 841912, '2024-03-07', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(136, 'SARASWATI MODAK', 'INDWB2400711', 'SRISTIDHAR MODAK', '', '2024-04-16', 0, '', 0, 438363, '2024-04-16', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(137, 'SHILABATI MAHATO', 'INDWB2400707', 'KANTIRAM MAHATO', '', '2024-04-16', 0, '', 0, 421838, '2024-03-10', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(138, 'SHILABATI MAHATO', 'INDWB2400707', 'KANTIRAM MAHATO', '', '2024-04-16', 0, '', 0, 503007, '2024-04-16', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(139, 'DURBARAJ MURMU', 'INDWB2300427', 'KARNA MURMU', '', '2024-04-16', 0, '', 0, 574057, '2024-04-16', 'DCA', 0, 0, 1200, 0, 0, 0, 0, 1200),
(140, 'NAYAN MAHATO', 'INDWB2400849', 'BIDHAN CHANDRA MAHATO', '', '2024-04-23', 0, '', 0, 70610, '2024-04-23', 'DCA', 0, 0, 0, 0, 0, 0, 0, 0),
(141, 'GANESH MAHATO', 'INDWB2301258', 'BHOLANATH MAHATO', '', '2024-04-28', 0, '', 1, 700976, '2024-04-28', 'DCA', 0, 0, 900, 0, 600, 0, 0, 1500),
(142, 'TANMOY MANDAL', 'INDWB2300687 ', 'RANJIT MANDAL', '', '2024-04-28', 0, '', 1, 796837, '2024-04-28', 'DCA', 0, 0, 600, 0, 600, 0, 0, 1200),
(143, 'SOUVIK PRAMANIK', 'INDWB2300688 ', 'AMARESH PRAMANIK', '', '2024-04-28', 0, '', 1, 630819, '2024-04-28', 'DCA', 0, 0, 300, 0, 600, 0, 0, 900),
(144, 'AMAL MANDAL', 'INDWB2301256  ', 'BAIDYANATH MANDAL', '', '2024-04-28', 0, '', 1, 439337, '2024-04-28', 'DCA', 0, 600, 600, 0, 0, 0, 0, 1200),
(145, 'SUMITA SAREN', 'INDWB2400041', 'RAMNATH SAREN', '', '2024-05-03', 0, '', 0, 226893, '2024-02-01', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(146, 'SUMITA SAREN', 'INDWB2400041', 'RAMNATH SAREN', '', '2024-05-03', 0, '', 0, 500972, '2024-05-03', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(147, 'TANMOY TUDU', 'INDWB2400297', 'KRISHNA PADA TUDU', '', '2024-05-03', 0, '', 0, 187136, '2024-02-02', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(148, 'TANMOY TUDU', 'INDWB2400297', 'KRISHNA PADA TUDU', '', '2024-05-03', 0, '', 0, 418498, '2024-05-03', 'DCA', 0, 0, 600, 0, 0, 0, 0, 500),
(149, 'AVISHEK MURMU', 'INDWB2300429', 'KALIDAS MURMU', '', '2024-05-03', 0, '', 0, 541536, '2024-05-03', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(150, 'SIDDHARTHA SHANKAR DAS', 'INDWB2400291', 'BUDDHESWAR DAS', '', '2024-05-06', 0, '', 0, 436242, '2024-05-06', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(151, 'ARNAB SING SARDAR', 'INDWB2301665', 'KAILASH SING SARDAR', '', '2024-05-06', 0, '', 0, 361068, '2024-05-06', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(152, 'RUBI MODAK', 'INDWB2400710', 'GOUTAM MODAK', '', '2024-05-07', 0, '', 0, 158883, '2024-02-01', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(153, 'RUBI MODAK', 'INDWB2400710', 'GOUTAM MODAK', '', '2024-05-07', 0, '', 0, 545698, '2024-05-07', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(154, 'SHILPA MANDAL', 'INDWB2400709', 'BOMKESH MANDAL', '', '2024-05-07', 0, '', 0, 224523, '2024-02-02', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(155, 'SHILPA MANDAL', 'INDWB2400709', 'BOMKESH MANDAL', '', '2024-05-07', 0, '', 0, 535630, '2024-05-07', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(156, 'BABITA DEOGHARIA', 'INDWB2400746', 'ASHOK DEOGHARIA', '', '2024-05-10', 0, '', 0, 511612, '2024-05-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(157, 'DEB MODAK', 'INDWB2400290', 'PRADIP MODAK', '', '2024-05-10', 0, '', 0, 700980, '2024-05-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(158, 'ISHA DEOGHARIA', 'INDWB2400292', 'SADANANDA DEOGHARIA', '', '2024-05-10', 0, '', 0, 237154, '2024-05-10', 'DCA', 0, 300, 0, 0, 0, 0, 0, 300),
(159, 'NANDINI CHAKRABORTY', 'INDWB2400704 ', 'NARAN CHAKRABORTY', '', '2024-05-10', 0, '', 0, 909011, '2024-02-02', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(160, 'NANDINI CHAKRABORTY', 'INDWB2400704 ', 'NARAN CHAKRABORTY', '', '2024-05-10', 0, '', 0, 19589, '2024-05-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(161, 'SOURAV MONDAL', 'INDWB2400042 ', 'KARNA MANDAL', 'LATE TULSI MONDAL', '2024-01-19', 2147483647, '', 1, 852582, '2024-05-12', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(162, 'BRISTI MANDAL', 'INDWB2400706', 'KIYANANDA MANDAL', '', '2024-05-14', 0, '', 0, 917173, '2024-03-08', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(163, 'BRISTI MANDAL', 'INDWB2400706', 'KIYANANDA MANDAL', '', '2024-05-14', 0, '', 0, 263917, '2024-05-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(164, 'RAKI MANDAL', 'INDWB2400043', 'GOUTAM MANDAL', '', '2024-03-14', 0, 'download.jpg', 0, 109521, '2024-01-03', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(165, 'RAKI MANDAL', 'INDWB2400043', 'GOUTAM MANDAL', '', '2024-03-14', 0, 'download.jpg', 1, 986281, '2024-05-14', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(166, 'KRISHNA MANDI', 'INDWB2301666', 'GOUR MANDI', '', '2024-05-16', 0, '', 0, 54922, '2024-05-16', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(167, 'SARASWATI MODAK', 'INDWB2400711', 'SRISTIDHAR MODAK', '', '2024-05-17', 0, '', 0, 915582, '2024-05-17', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(168, 'RUDRA CHATTERJEE', 'INDWB2401020', 'BISHNUPADA CHATTERJEE', '', '2024-05-19', 0, '', 1, 955384, '2024-05-19', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(169, 'DEBASISH MAN DAL', 'NA', 'DINABANDHU MANDAL', '', '2024-05-28', 0, '', 0, 681293, '2024-05-28', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(170, 'SHILABATI MAHATO', 'INDWB2400707', 'KANTIRAM MAHATO', '', '2024-06-04', 0, '', 0, 542533, '2024-06-04', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(171, 'NANDINI CHAKRABORTY', 'INDWB2400704', 'NARAN CHAKRABORTY', '', '2024-06-04', 0, '', 0, 771313, '2024-06-04', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(172, 'PRADIP MODAK', 'INDWB2400044', 'NIMAI MODAK', '', '2024-06-06', 0, '', 0, 618909, '2024-02-01', 'DCA', 300, 0, 0, 0, 0, 0, 0, 300),
(173, 'PRADIP MODAK', 'INDWB2400044', 'NIMAI MODAK', '', '2024-06-06', 0, '', 0, 836750, '2024-04-04', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(174, 'PRADIP MODAK', 'INDWB2400044', 'NIMAI MODAK', '', '2024-06-06', 0, '', 1, 56314, '2024-06-06', 'DCA', 0, 0, 600, 0, 0, 0, 0, 600),
(175, 'SARASWATI MODAK', 'INDWB2400711', 'SRISTIDHAR MODAK', '', '2024-06-14', 0, '', 0, 53754, '2024-06-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(176, 'KRISHNA MANDI', 'INDWB2301666', 'GOUR MANDI', '', '2024-06-14', 0, '', 0, 796303, '2024-06-14', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(177, 'RUBI MODAK', 'INDWB2400710', 'GOUTAM MODAK', '', '2024-06-18', 0, '', 0, 322796, '2024-06-18', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(178, 'ISHA DEOGHARIA', 'INDWB2400292', 'SADANANDA DEOGHARIA', '', '2024-06-18', 0, '', 0, 182403, '2024-06-18', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(179, 'PENAMI TUDU', 'NA', 'KAMALAKANTA TUDU', '', '2025-02-28', 0, '', 0, 839024, '2025-02-28', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(180, 'ANITA MURMU', 'NA', 'SHYAMAPADA MURMU', '', '2025-02-28', 0, '', 0, 754974, '2025-02-28', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(181, 'TRISHANJIT BESRA', 'NA', 'TARAPADA BESRA', '', '2025-02-28', 0, '', 0, 883411, '2025-02-28', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(182, 'JHARNA HANSDA', 'NA', 'SIDDHESWAR HANSDA', '', '2025-03-01', 0, '', 0, 600548, '2025-03-01', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(183, 'SOMNATH MANDAL', 'NA', 'KANAILAL MANDAL', '', '2025-03-04', 0, '', 0, 956358, '2025-03-04', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(184, 'SANCHITA MANDAL', 'NA', 'TARAPADA MANDAL', '', '2025-03-05', 0, '', 0, 886070, '2025-03-05', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(185, 'PRADIP MANDAL', 'NA', 'DEBABRATA MANDAL', '', '2025-03-10', 0, '', 0, 576372, '2025-03-10', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(186, 'ANIMA TUDU', 'NA', 'JOGESWAR TUDU', '', '2025-03-10', 0, '', 0, 603627, '2025-03-10', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(187, 'SUBHAJIT KUMBHAKAR', 'NA', 'BISHNUPADA KUMBHAKAR', '', '2025-03-12', 0, '', 0, 428735, '2025-03-12', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(188, 'JAYANTA MANDAL', 'NA', 'DHARANI MANDAL', '', '2025-03-12', 0, '', 0, 969519, '2025-03-12', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(189, 'BINA MURMU', 'NA', 'PRAMATHA NATH MURMU', '', '2025-03-12', 0, '', 0, 254298, '2025-03-12', 'DCA', 499, 0, 0, 0, 0, 0, 0, 499),
(190, 'KUNAMI HANSDA', 'NA', 'RAM HANSDA', '', '2025-03-25', 0, '', 0, 529124, '2025-03-25', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(191, 'ANIMA HEMBRAM ', 'NA', 'SAHADEB HEMBRAM', '', '2025-03-29', 0, '', 0, 756506, '2025-03-29', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(192, 'PINKI HANSDA', 'NA', 'MAHADEB HANSDA', '', '2025-04-02', 0, '', 0, 851049, '2025-04-02', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(193, 'SASTI BAURI', 'NA', 'KRISHNAPADA BAURI', '', '2025-04-03', 0, '', 0, 875723, '2025-04-03', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(194, 'PENAMI TUDU', 'NA', 'KAMALAKANTA TUDU', '', '2025-04-03', 0, '', 0, 130429, '2025-04-03', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(195, 'ANITA MURMU', 'NA', 'SHYAMAPADA MURMU', '', '2025-04-03', 0, '', 0, 200362, '2025-04-03', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(196, 'PRADIP MANDAL', 'NA', 'DEBABRATA MANDAL', '', '2025-04-07', 0, '', 0, 97034, '2025-04-07', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(197, 'SUBHAJIT KUMBHAKAR', 'NA', 'BISHNUPADA KUMBHAKAR', '', '2025-04-07', 0, '', 0, 642404, '2025-04-07', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(198, 'JHARNA HANSDA', 'NA', 'SIDDHESWAR HANSDA', '', '2025-04-08', 0, '', 0, 181622, '2025-04-08', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(199, 'SOMNATH MANDAL', 'NA', 'KANAILAL MANDAL', '', '2025-04-09', 0, '', 0, 45330, '2025-04-09', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(200, 'SANCHITA MANDAL', 'NA', 'TARAPADA MANDAL', '', '2025-04-10', 0, '', 0, 696511, '2025-04-17', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(201, 'SAYAN MANDAL', 'NA', 'UJJAL MANDAL', '', '2025-05-01', 0, '', 0, 669457, '2025-05-01', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(202, 'PENAMI TUDU', 'NA', 'KAMALAKANTA TUDU', '', '2025-05-01', 0, '', 0, 658549, '2025-05-01', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(203, 'ANITA MURMU', 'NA', 'SHYAMAPADA MURMU', '', '2025-05-01', 0, '', 0, 677145, '2025-05-01', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(204, 'PINKI HANSDA', 'NA', 'MAHADEB HANSDA', '', '2025-05-02', 0, '', 0, 374369, '2025-05-02', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(205, 'SOMNATH MANDAL', 'NA', 'KANAILAL MANDAL', '', '2025-05-05', 0, '', 0, 681397, '2025-05-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(206, 'ANIMA HEMBRAM', 'NA', 'SAHADEB HEMBRAM', '', '2025-05-06', 0, '', 0, 410588, '2025-05-06', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(207, 'SANCHITA MANDAL', 'NA', 'TARAPADA MANDAL', '', '2025-05-20', 0, '', 0, 647644, '2025-05-20', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(208, 'KUNAMI HANSDA', 'NA', 'RAM HANSDA', '', '2025-05-20', 0, '', 0, 459946, '2025-05-20', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(209, 'JHARNA HANSDA', 'NA', 'SIDDHESWAR HANSDA', '', '2025-05-20', 0, '', 0, 155287, '2025-05-20', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(210, 'SASTI BAURI', 'NA', 'KRISHNAPADA BAURI', '', '2025-05-21', 0, '', 0, 917287, '2025-05-21', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(211, 'PRADIP MANDAL', 'NA', 'DEBABRATA MANDAL', '', '2025-05-21', 0, '', 0, 235178, '2025-05-21', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(212, 'SUBHAJIT KUMBHAKAR', 'NA', 'BISHNUPADA KUMBHAKAR', '', '2025-05-21', 0, '', 0, 598214, '2025-05-21', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(213, 'SOMNATH MANDAL', 'NA', 'KANAILAL MANDAL', '', '2025-05-30', 0, '', 0, 289104, '2025-06-03', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(214, 'PENAMI TUDU', 'NA', 'KAMALAKANTA TUDU', '', '2025-06-03', 0, '', 0, 378989, '2025-06-03', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(215, 'ANITA MURMU', 'NA', 'SHYAMAPADA MURMU', '', '2025-06-03', 0, '', 0, 499335, '2025-06-03', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(216, 'PINKI HANSDA', 'NA', 'MAHADEB HANSDA', '', '2025-06-04', 0, '', 0, 449666, '2025-06-04', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(217, 'SANCHITA MANDAL', 'NA', 'TARAPADA MANDAL', '', '2025-06-05', 0, '', 0, 854315, '2025-06-05', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(218, 'SAYAN MANDAL', 'NA', 'UJJAL MANDAL', '', '2025-06-07', 0, '', 0, 927361, '2025-06-07', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(219, 'ANIMA HEMBRAM', 'NA', 'SAHADEB HEMBRAM', '', '2025-06-07', 0, '', 0, 117107, '2025-06-07', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(220, 'JHARNA HANSDA', 'NA', 'SIDDHESWAR HANSDA', '', '2025-06-10', 0, '', 0, 17055, '2025-06-10', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(221, 'ANIMA TUDU', 'NA', 'JOGESWAR TUDU', '', '2025-06-12', 0, '', 0, 501949, '2025-06-12', 'DCA', 0, 0, 900, 0, 0, 0, 0, 900),
(222, 'KUNAMI HANSDA', 'NA', 'RAM HANSDA', '', '2025-06-12', 0, '', 0, 293644, '2025-06-12', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(223, 'SASTI BAURI', 'NA', 'KRISHNAPADA BAURI', '', '2025-06-13', 0, '', 0, 745811, '2025-06-13', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(224, 'SAYAN MANDAL', 'NA', 'UJJAL MANDAL', '', '2025-09-13', 0, '', 0, 567697, '2025-09-13', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(225, 'ANIMA HEMBRAM', 'NA', 'SAHADEB HEMBRAM', '', '2025-09-25', 0, '', 0, 411805, '2025-09-25', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(226, 'KUNAMI HANSDA', 'NA', 'RAM HANSDA', '', '2025-10-07', 0, '', 0, 947013, '2025-10-07', 'DCA', 0, 0, 300, 0, 0, 0, 0, 300),
(227, 'ASTAMI BASKEY', 'NA', 'ANANTA BASKEY', '', '2026-02-17', 0, '', 0, 517755, '2026-02-17', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(228, 'SUJOY MANDAL', 'NA', 'ASHOK MANDAL', '', '2026-02-21', 0, '', 0, 89687, '2026-02-21', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(229, 'ARUP MANDAL', 'NA', 'LAKSHMIKANTA MANDAL', '', '2026-02-21', 0, '', 0, 699418, '2026-02-21', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(230, 'SHUVENDU MANDAL', 'NA', 'JHANTU MANDAL', '', '2026-02-21', 0, '', 0, 27469, '2026-02-21', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(231, 'AJOY MODAK', 'NA', 'DEBASHISH MODAK', '', '2026-02-24', 0, '', 0, 349412, '2026-02-24', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(232, 'SUJATA MANDAL', 'NA', 'NIRMAL MANDAL', '', '2026-02-26', 0, '', 0, 697435, '2026-02-26', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(233, 'SACHIN MANDAL', 'NA', 'HARADHAN MANDAL', '', '2026-03-04', 0, '', 0, 196178, '2026-03-04', 'DCA', 498, 0, 0, 0, 0, 0, 0, 498),
(234, 'KISHOR MANDAL', 'NA', 'SIDDHESHWAR MANDAL', '', '2026-03-04', 0, '', 0, 768961, '2026-03-04', 'DCA', 497, 0, 0, 0, 0, 0, 0, 497),
(235, 'ABHIJIT MANDAL', 'NA', 'LAMBODHAR MANDAL', '', '2026-03-04', 0, '', 0, 258254, '2026-03-04', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500),
(236, 'BASANTI MANDI', 'NA', 'RAM RATAN MANDI', '', '2026-03-04', 0, '', 0, 756106, '2026-03-04', 'DCA', 500, 0, 0, 0, 0, 0, 0, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_ques1`
--
ALTER TABLE `add_ques1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_ques2`
--
ALTER TABLE `add_ques2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_stu`
--
ALTER TABLE `add_stu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_add`
--
ALTER TABLE `new_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_ques1`
--
ALTER TABLE `add_ques1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `add_ques2`
--
ALTER TABLE `add_ques2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `add_stu`
--
ALTER TABLE `add_stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_add`
--
ALTER TABLE `new_add`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
