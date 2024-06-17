-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2024 at 08:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minilik`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `academic_year_id` int(11) NOT NULL,
  `year_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`academic_year_id`, `year_name`) VALUES
(1, '2016');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `profile_picture` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `profile_picture`) VALUES
(1, 'Mohammed', 'Sisay', 'mame', 'mam', '../pages/profile/divi-transformed (9).png');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `title` varchar(400) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `sent_date` date DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `title`, `content`, `sent_date`, `admin_id`) VALUES
(16, 'semister brake ', 'grade repoertdklfkjknsdaklsd', '2024-06-16', 1),
(17, 'good journey', 'dkndfklanflkanmflksksdla', '2024-06-16', 1),
(22, 'Well Come to 2024 Educarion Caricullum.', ' i want to say for all of you well come to the new calander and registraation began in 2024 february .', '2024-06-16', 1),
(23, ' filling cost sharing form ', 'cost sharing form.msjkslskh;lsuwil;krffmnkljkwe', '2024-06-16', 1),
(24, 'teacher for grade report statements.', 'snnskjhafdj;aiueyjhdsjkldnbnkdc', '2024-06-16', 1),
(25, 'hey', 'nsnsmsmsmsm', '2024-06-16', 1),
(26, 'teacher', 'nsjsjsksk', '2024-06-16', 1),
(27, 'stud and teacher ', 'sjskkskka', '2024-06-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcements_student`
--

CREATE TABLE `announcements_student` (
  `id` int(11) NOT NULL,
  `announcement_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `is_read` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements_student`
--

INSERT INTO `announcements_student` (`id`, `announcement_id`, `student_id`, `is_read`) VALUES
(16, 17, 2, 'seen'),
(17, 17, 3, 'seen'),
(18, 17, 5, 'seen'),
(19, 17, 6, 'seen'),
(20, 17, 7, 'seen'),
(26, 22, 2, '0'),
(27, 22, 3, '0'),
(28, 22, 5, '0'),
(29, 22, 6, '0'),
(30, 22, 7, '0'),
(31, 23, 2, '0'),
(32, 23, 3, '0'),
(33, 23, 5, '0'),
(34, 23, 6, '0'),
(35, 23, 7, '0'),
(36, 25, 2, '0'),
(37, 25, 3, '0'),
(38, 25, 5, '0'),
(39, 25, 6, '0'),
(40, 25, 7, '0'),
(41, 27, 2, '0'),
(42, 27, 3, '0'),
(43, 27, 5, '0'),
(44, 27, 6, '0'),
(45, 27, 7, '0');

-- --------------------------------------------------------

--
-- Table structure for table `announcements_teacher`
--

CREATE TABLE `announcements_teacher` (
  `id` int(11) NOT NULL,
  `announcement_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `is_read` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements_teacher`
--

INSERT INTO `announcements_teacher` (`id`, `announcement_id`, `teacher_id`, `is_read`) VALUES
(3, 16, 1, 'seen'),
(5, 22, 1, 'seen'),
(6, 24, 1, '0'),
(7, 26, 1, '0'),
(8, 27, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `file_location` varchar(2500) DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `dessc` varchar(200) DEFAULT NULL,
  `uploaded_date` date DEFAULT NULL,
  `uploadedby` varchar(50) DEFAULT NULL,
  `duedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `title`, `file_location`, `subject_id`, `section_id`, `grade_id`, `teacher_id`, `dessc`, `uploaded_date`, `uploadedby`, `duedate`) VALUES
(4, 'kjkkl', '../uploads/10.jpg', 1, 1, 1, 1, 'jkdhkfjalkkjieoipw', '2024-06-14', 'tamrat tsegaye', '2024-06-13'),
(5, 'sdnmdmsan', '../uploads/11.jpg', 1, 2, 1, 1, 'dfkdll;amndjkd', '2024-06-14', 'tamrat tsegaye', '2024-06-19'),
(6, ',dldmdkjnadfkl', '../uploads/HCI unit7( 1st  final).pdf', 3, 1, 1, 1, 'dfmnnekwldneiwolkmnsd ', '2024-06-14', 'tamrat tsegaye', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `course_material`
--

CREATE TABLE `course_material` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `file_location` varchar(5000) DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `dessc` varchar(300) DEFAULT NULL,
  `uploaded_date` date DEFAULT NULL,
  `uploadedby` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_material`
--

INSERT INTO `course_material` (`id`, `title`, `file_location`, `subject_id`, `section_id`, `grade_id`, `teacher_id`, `dessc`, `uploaded_date`, `uploadedby`) VALUES
(3, 'chapter 9', '../uploads/9.jpg', 1, 1, 1, 1, 'do it', '2024-06-15', 'tamrat tsegaye'),
(4, 'chapter 9', '../uploads/9.jpg', 1, 2, 1, 1, 'do it', '2024-06-15', 'tamrat tsegaye'),
(7, 'grade 9', '../uploads/10.jpg', 2, 2, 2, 1, 'ddmd,', '2024-06-15', 'tamrat tsegaye');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `grade_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `grade_name`) VALUES
(1, 9),
(2, 10),
(3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `academic_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `profile_picture` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`, `address`, `sex`, `birth_date`, `grade_id`, `academic_id`, `section_id`, `stream`, `profile_picture`) VALUES
(2, 'sufyan', 'Hamid', 'suf@gmail.com', '0973088317', 'suf', 'suf', ' siltess', 'Male', '2024-06-19', 1, 1, 1, 'Natural', '../pages/profile/sufyan.jpg'),
(3, 'maru', 'mengistu', 'maru@gmail.com', '904040', 'maru', 'marumaru', ' ksklkjfdkagfeohfpawiwe', 'Female', '2024-06-12', 1, 1, 1, 'Natural', '../pages/profile/userprofile.png'),
(5, 'nahom', 'alism', 'nahomewerko@gmail.com', '94894', 'nao', 'nahom', ' dkdflasdl;;hfdapowakkhdffhkdoieiue', 'Male', '2024-06-17', 1, 1, 2, 'Natural', '../pages/profile/userprofile.png'),
(6, 'sosi', 'mihret', 'sosi0117@gmail.com', '490982390', 'sosi', 'sosna', ' dkjfdjehwiuewpoewuq jhdfkjkjkf', 'Female', '2024-06-04', 2, 1, 1, 'Natural', '../pages/profile/userprofile.png'),
(7, 'negash', 'Israel', 'negu@gmail.com', '0483908390', 'negash', 'negash', ' ddkfkhdfjsa;lkhfdeidfndk', 'Male', '2024-06-18', 2, 1, 1, 'Natural', '../pages/profile/userprofile.png');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(20) DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `grade_id`) VALUES
(1, 'History grade 9', 2),
(2, 'Historygrade10 textb', 2),
(3, 'English grade_9', 1),
(4, 'maths grade_10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `submitted_assignments`
--

CREATE TABLE `submitted_assignments` (
  `id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_location` varchar(1000) DEFAULT NULL,
  `submission_date` datetime DEFAULT NULL,
  `grade_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitted_assignments`
--

INSERT INTO `submitted_assignments` (`id`, `assignment_id`, `student_id`, `file_location`, `submission_date`, `grade_id`, `section_id`, `subject_id`) VALUES
(4, 4, 2, '../uploads/10.jpg', '2024-06-14 21:52:56', 1, 1, 1),
(5, 5, 5, '../uploads/19.jpg', '2024-06-14 21:55:11', 1, 2, 1),
(6, 4, 3, '../uploads/HCI unit 5(part II s final).pdf', '2024-06-14 23:14:47', 1, 1, 1),
(7, 6, 2, '../uploads/HCI unit 6(  final).pdf', '2024-06-14 23:20:41', 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `academic_id` int(11) DEFAULT NULL,
  `profile_picture` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`, `address`, `sex`, `academic_id`, `profile_picture`) VALUES
(1, 'tamrat', 'tsegaye', 'tamrat@gmail.com', '973088317', 'tame', 'tame', ' gitin', 'Female', 1, '../pages/profile/image-600x600 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject_grade_section`
--

CREATE TABLE `teacher_subject_grade_section` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_subject_grade_section`
--

INSERT INTO `teacher_subject_grade_section` (`id`, `teacher_id`, `subject_id`, `grade_id`, `section_id`) VALUES
(1, 1, 1, 1, 1),
(3, 1, 1, 1, 2),
(4, 1, 2, 2, 2),
(5, 1, 3, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`academic_year_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `announcements_student`
--
ALTER TABLE `announcements_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `announcements_teacher`
--
ALTER TABLE `announcements_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `course_material`
--
ALTER TABLE `course_material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `academic_id` (`academic_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `grade_id` (`grade_id`);

--
-- Indexes for table `submitted_assignments`
--
ALTER TABLE `submitted_assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignment_id` (`assignment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `grade_id` (`grade_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `academic_id` (`academic_id`);

--
-- Indexes for table `teacher_subject_grade_section`
--
ALTER TABLE `teacher_subject_grade_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `grade_id` (`grade_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `academic_year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `announcements_student`
--
ALTER TABLE `announcements_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `announcements_teacher`
--
ALTER TABLE `announcements_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `course_material`
--
ALTER TABLE `course_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submitted_assignments`
--
ALTER TABLE `submitted_assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_subject_grade_section`
--
ALTER TABLE `teacher_subject_grade_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `announcements_student`
--
ALTER TABLE `announcements_student`
  ADD CONSTRAINT `announcements_student_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`),
  ADD CONSTRAINT `announcements_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `announcements_teacher`
--
ALTER TABLE `announcements_teacher`
  ADD CONSTRAINT `announcements_teacher_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`),
  ADD CONSTRAINT `announcements_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`),
  ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `assignment_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `assignment_ibfk_4` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`);

--
-- Constraints for table `course_material`
--
ALTER TABLE `course_material`
  ADD CONSTRAINT `course_material_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `course_material_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`),
  ADD CONSTRAINT `course_material_ibfk_3` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`),
  ADD CONSTRAINT `course_material_ibfk_4` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`academic_id`) REFERENCES `academic_year` (`academic_year_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`);

--
-- Constraints for table `submitted_assignments`
--
ALTER TABLE `submitted_assignments`
  ADD CONSTRAINT `submitted_assignments_ibfk_1` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`id`),
  ADD CONSTRAINT `submitted_assignments_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `submitted_assignments_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`),
  ADD CONSTRAINT `submitted_assignments_ibfk_4` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `submitted_assignments_ibfk_5` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`academic_id`) REFERENCES `academic_year` (`academic_year_id`);

--
-- Constraints for table `teacher_subject_grade_section`
--
ALTER TABLE `teacher_subject_grade_section`
  ADD CONSTRAINT `teacher_subject_grade_section_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`),
  ADD CONSTRAINT `teacher_subject_grade_section_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `teacher_subject_grade_section_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `teacher_subject_grade_section_ibfk_4` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`grade_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
