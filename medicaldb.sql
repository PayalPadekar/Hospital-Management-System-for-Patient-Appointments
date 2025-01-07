-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 10:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutid` int(10) NOT NULL,
  `companyname` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `inserttime` datetime NOT NULL,
  `updatetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutid`, `companyname`, `description`, `image`, `inserttime`, `updatetime`) VALUES
(6, 'choose', 'With years of experience in [specific areas of law], we are well-equipped to handle a wide range of legal matters, including [specific practice areas]. Our team is comprised of [number] skilled attorneys who are dedicated to providing personalized attention and aggressive representation to each and every client.', 'aboutimg/277512024-03-01-09-30-33.jpg', '2024-03-01 09:30:33', '2024-03-01 09:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `adminid` int(10) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `otp` int(10) NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`adminid`, `username`, `password`, `otp`, `inserttime`) VALUES
(1, 'Diksha', 'diksha1234', 183512, '2024-03-01 09:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pphone` varchar(10) NOT NULL,
  `paadhar` varchar(12) NOT NULL,
  `page` int(3) NOT NULL,
  `pdistrict` varchar(100) NOT NULL,
  `ptaluka` varchar(100) NOT NULL,
  `pcity` varchar(100) NOT NULL,
  `pspeciality` varchar(100) NOT NULL,
  `pmessage` varchar(300) NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT current_timestamp(),
  `updatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pname`, `pphone`, `paadhar`, `page`, `pdistrict`, `ptaluka`, `pcity`, `pspeciality`, `pmessage`, `inserttime`, `updatetime`) VALUES
(1, 'Padekar Payal', '9209111630', '871632970229', 20, 'ahmednagar', 'Sangamner', 'Bota', 'general-medicine', 'Cough & Cold', '2024-01-12 01:16:49', '2024-01-12 13:16:49'),
(4, 'Shelke Vaishnavi', '7895412589', '741258741258', 21, 'ahmednagar', 'Sangamner', 'Bota', 'general-medicine', 'Cough', '2024-01-12 06:25:48', '2024-01-12 18:25:48'),
(8, 'Padekar Payal Dilip', '9209111630', '871632970229', 20, 'ahmednagar', 'Sangamner', 'Bota', 'general-medicine', 'Cold & Cough', '2024-01-14 12:25:42', '2024-01-14 12:25:42'),
(9, 'Padekar Shrikant', '8262822663', '894518726305', 19, 'ahmednagar', 'Sangamner', 'Bota', 'general-medicine', 'dfghjkl', '2024-01-14 12:27:06', '2024-01-14 12:27:06'),
(10, 'Padekar Pratibha', '9584201630', '852741096385', 35, 'ahmednagar', 'Sangamner', 'Bota', 'general-medicine', 'Cold & Cough', '2024-01-27 07:09:54', '2024-01-27 19:09:54'),
(14, 'Shrikant', '9373638350', '981827737450', 26, 'ahmednagar', 'Sangamner', 'Sangamner', 'general-surgeons', 'gsldaskdao;l.k', '2024-03-03 09:58:34', '2024-03-03 21:58:34'),
(15, 'payal padekAR', '8521470528', '758410368501', 20, 'ahmednagar', 'SANGAMNER', 'BOTA', 'general-medicine', 'COUGH', '2024-04-06 11:03:53', '2024-04-06 11:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `femail` varchar(100) NOT NULL,
  `fmobile` varchar(10) NOT NULL,
  `fsubject` varchar(300) NOT NULL,
  `fmassege` varchar(300) NOT NULL,
  `updatetime` datetime NOT NULL DEFAULT current_timestamp(),
  `inserttime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `femail`, `fmobile`, `fsubject`, `fmassege`, `updatetime`, `inserttime`) VALUES
(37, 'Payal Padekar', 'payal@gmail.com', '9209111630', 'Appointment', 'ghjk', '2024-01-14 12:21:56', '2024-01-14 12:21:56'),
(38, 'Vaishnavi Shelke', 'vaishnavi@gmail.com', '1236547890', 'rgthj', 'ghjkl', '2024-01-14 12:22:17', '2024-01-14 12:22:17'),
(39, 'Ashvini Shinde', 'ashvini@gmail.com', '9874445532', 'Appointment', 'dfghjkl', '2024-01-14 12:22:36', '2024-01-14 12:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `dimuser`
--

CREATE TABLE `dimuser` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dimuser`
--

INSERT INTO `dimuser` (`id`, `username`, `password`, `otp`, `inserttime`) VALUES
(1, 'admin', 'admin123', '876174', '2024-01-02 11:00:39'),
(3, 'Payal', '7979', '727802', '2024-01-12 11:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblaboutus`
--

CREATE TABLE `tblaboutus` (
  `idabout` int(10) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `companydesc` longtext NOT NULL,
  `companylogo` varchar(256) NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT current_timestamp(),
  `updatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaboutus`
--

INSERT INTO `tblaboutus` (`idabout`, `companyname`, `companydesc`, `companylogo`, `inserttime`, `updatetime`) VALUES
(3, 'Shree Hospital', '<h5>\r\n                <p>Shree Hospital is a globally recognised healthcare brand with operations in 12 countries: Germany, Sweden,\r\n                    Poland, Turkey, Belarus, Bulgaria, Georgia, Hungary, Romania, Serbia, Moldova, Ukraine, and India.\r\n                </p>\r\n\r\n                <p> Shree Hospital is a leading Multispecialty Hospital chain with a significant presence in India. We\r\n                    provide a broad spectrum of health care services and have an extensive network of clinics,\r\n                    hospitals, specialty care facilities, Fertility Centers, and diagnostic labs.</p>\r\n\r\n                <p> Shree Hospitals is spread across the three states of Telangana, Andhra Pradesh, and Maharashtra\r\n                    treating millions of patients every year with a focus on augmenting healthcare standards in India.\r\n                    We have renowned medical teams who work with the greatest technologies and international\r\n                    evidence-based protocols which offer the most comprehensive treatment across all specialties of\r\n                    medicines.</p>\r\n            </h5>', 'aboutusimg/4535352024-02-15-21-26-42.jpg', '2024-02-13 19:52:45', '2024-02-15 21:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `idblog` int(10) NOT NULL,
  `blogtitle` varchar(256) NOT NULL,
  `blogdesc` longtext NOT NULL,
  `blogimg` varchar(1000) NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT current_timestamp(),
  `updatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`idblog`, `blogtitle`, `blogdesc`, `blogimg`, `inserttime`, `updatetime`) VALUES
(1, 'Docpulse Hospital Management Software helps Secure Patient Data', 'B-The fast-paced advancement of healthcare technology in India demands adaptability which means the hospital, clinics,  pathology or radiology laboratories, pharmacies, health care centres and almost every other healthcare facility needs to adopt the Digital Healthcare solutions that will help deliver a higher quality of patient care.', 'blogsimg/9973952024-01-09-12-24-40.webp', '2024-01-09 12:08:57', '2024-01-11 21:41:28'),
(2, 'Track your Patients health with Digital Healthcare software', 'While pen and paper have been traditional methods for managing patient medical records, they come with several potential drawbacks, which has created the need for electronic medical records software (EMRs).', 'blogsimg/6066512024-01-09-12-26-24.jpg', '2024-01-09 12:10:51', '2024-01-11 21:28:51'),
(3, 'Hospital Appointment Scheduling Software technique', 'A healthcare scheduling application is known to simplify workflows and save time for the administrative staff at hospitals. Such a solution helps them do more with the same resources and improve the patient experience.', 'blogsimg/3571632024-01-09-12-28-53.jpg', '2024-01-09 12:28:53', '2024-01-11 21:36:57'),
(4, 'Hospital Patient Flow Management Secrets Every Healthcare', 'Hospital Patient flow management is a subject that often receives less attention than it deserves. However, it is one of the key areas that influence patient satisfaction. More importantly, a well-planned and effective patient flow management strategy.', 'blogsimg/6192082024-01-09-12-31-26.webp', '2024-01-09 12:31:26', '2024-01-11 21:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctor`
--

CREATE TABLE `tbldoctor` (
  `iddoctor` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `doctorname` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `experience` longtext NOT NULL,
  `languagesspoken` varchar(100) NOT NULL,
  `professionalmemberships` longtext NOT NULL,
  `contactnow` varchar(10) NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT current_timestamp(),
  `updatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldoctor`
--

INSERT INTO `tbldoctor` (`iddoctor`, `category`, `doctorname`, `education`, `experience`, `languagesspoken`, `professionalmemberships`, `contactnow`, `inserttime`, `updatetime`) VALUES
(1, 'cardiology', 'Dr. Suresh Mandelecha', 'MBBS , General Physician', '12 years as specialist (8 years as specialist)', 'Hindi, English, Marathi', 'Indian Society of Nephrology (ISN),', '9819782875', '2024-01-10 11:04:56', '2024-02-23 19:33:38'),
(2, 'cardiology', 'Dr. Abhishek Ketan Shah', 'MS - Orthopaedics, MBBS.', '23 Years Experience Overall  (18 years as specialist)', 'Hindi, English', 'International Society of Cardiology (ISC)', '011 4117 1', '2024-01-10 11:15:06', '2024-01-10 11:24:46'),
(3, 'cardiology', 'Dr. Sunil Ghodke', 'DHMS (Diploma in Homeopathic Medicine and Surgery)', '23 Years Experience', 'Hindi, English', 'Indian Society of Cardiology (ISC),', '020 7117 7', '2024-01-10 11:17:57', '2024-01-10 11:25:59'),
(4, 'cardiology', 'Dr. Krishna Lakhe', 'MS - Orthopaedics, MBBS. Medicine and Surgery', '12 years as specialist', 'English', '...', '9487251634', '2024-01-10 11:20:36', '2024-02-23 19:34:08'),
(5, 'nephrology', 'Dr. Manish Mali', 'MBBS, MD - Pediatrics, DNB - Nephrology  Nephrologist/Renal Specialist', '19 Years Experience Overall', 'Hindi, English', 'Peritoneal Dialysis Society of India (PDSI) , American Society of Nephrology International Pediatric Nephrology Association (IPNA),  International Society of Nephrology (ISN)', '020 7117 7', '2024-01-10 11:23:21', '2024-02-23 19:31:32'),
(6, 'nephrology', 'Dr. Saurabh Khiste', 'MBBS, DNB - General Medicine, DNB - Nephrology  Nephrologist/Renal Specialist', '9 Years Experience', 'Hindi, English', 'Association of Physicians of India (API) Indian Society of Nephrology (ISN) Indian Society of Organ Transplantation (ISOT)', '9352461870', '2024-01-10 11:29:45', '2024-01-10 11:29:45'),
(7, 'nephrology', 'Dr. Sandeep S Morkhandikar', 'MBBS, DM - Nephrology  Nephrologist/Renal Specialist', '19 Years Experience Overall (15 years as specialist)', 'Hindi, English, Marathi', 'Indian Society of Nephrology (ISN)', '9487251634', '2024-01-10 11:31:35', '2024-01-10 11:31:35'),
(8, 'nephrology', 'Dr. Avinash Ignatius', 'MBBS, MD - General Medicine, DM - Nephrology  Nephrologist/Renal Specialist', '22 Years Experience Overall', 'Hindi, English, Marathi', 'Indian Society of Nephrology (ISN) Indian Society of Organ Transplantation (ISOT) Indian Cardio-Renal Society Association of Physicians of India European Renal Association (ERA)', '9209111630', '2024-01-10 11:34:08', '2024-02-23 19:32:44'),
(9, 'gastroenterology', 'Dr. Rahul Kothari', 'MBBS, MD - General Medicine, DM - Gastroenterology (UK) General Surgeon Gastroenterologist', '12 years as specialist', 'Hindi, English, Marathi', 'Indian Society of Gastroenterology Deccan Society of GI Endoscopy', '9632587410', '2024-01-10 11:37:02', '2024-02-23 19:29:39'),
(10, 'gastroenterology', 'Dr. Nitin Pai', 'MBBS, MD - General Medicine, DM - Gastroenterology  Gastroenterologist', '29 Years Experience Overall  (19 years as specialist)', 'Hindi, English', 'Indian Society of Gastroenterology Indian National Association for Study of the Liver', '9452187634', '2024-01-10 11:38:33', '2024-01-10 11:39:55'),
(11, 'gastroenterology', 'Dr. Sanjay Kolte', 'MBBS, DNB - General Surgery, MRCS (UK) General Surgeon,', '26 Years Experience Overall  (21 years as specialist)', 'Hindi, English', 'Maharastra Medical Council Association of Surgeons of India (ASI),  Association of Minimal Access Surgeons of India (AMASI)', '011 4117 1', '2024-01-10 11:42:22', '2024-02-23 19:30:22'),
(12, 'gastroenterology', 'Dr. Sunil Pawar', 'MBBS, DNB - General Surgery, MRCS (UK) General Surgeon,', '12 Years Experience Overall  (7 years as specialist)', 'Hindi, English, Marathi', 'Maharastra Medical Council Indian Society of Gastroenterology', '9819782875', '2024-01-10 11:44:08', '2024-01-10 11:44:08'),
(13, 'oncology', 'Dr Yogesh Kulkarni', 'Surgical Oncologist Consultant MBBS, MD, DNB, Fellowship,', '27 Years Experience Overall  (24 years as specialist)', 'Hindi, English', 'Indian Society of Nephrology (ISN),  Peritoneal Dial American Society of International Pediatric Oncology Association (IPNA),  I', '9632584569', '2024-01-10 11:47:33', '2024-01-10 11:47:33'),
(14, 'oncology', 'Prof. Dr. Suresh H. Advani', 'MBBS, DM - Oncology  Medical Oncologist', '23 Years Experience Overall  (18 years as specialist)', 'Hindi, English, Marathi', 'Indian Society of Oncology (ISO) Medical and Pediatric Oncology Society Secretary, Indian Journal of Haematology and Blood Transfusion', '9874521452', '2024-01-10 11:49:07', '2024-01-10 11:49:07'),
(15, 'oncology', 'Dr Rajesh Mistry', 'Surgical Oncologist Director MBBS, MBBS, MS', 'experience of 33+ years', 'Surgical Oncologist Director MBBS, MBBS, MS,', 'Association of Surgeons of India,  Indian Society of Oncology Indian Society of Medical Ethics', '9584632879', '2024-01-10 12:03:01', '2024-01-10 12:03:01'),
(16, 'oncology', 'Dr. Tanveer Abdul Majeed', 'Surgical Oncologist Consultant MBBS, MS, DNB,', '25 years of experience (18 years as specialist)', 'Hindi, English', 'Maharastra Medical Council National Academy of Medical Sciences - New Delhi Royal College of Physician & Surgeons (Glasgow)', '9487251634', '2024-01-10 12:08:24', '2024-02-23 19:28:17'),
(17, 'pediatrics', 'Dr. Sachin Palwe', 'MBBS, Diploma in Child Health (DCH)', '14 Years Experience Overall (11 years as specialist)', 'Hindi, English, Marathi', 'Maharastra Medical Council', '020 7117 7', '2024-01-10 12:10:16', '2024-02-23 19:27:07'),
(18, 'pediatrics', 'Dr. V.K Kadam', 'MBBS, MD - Pediatrics  Pediatrician', '44 Years Experience Overall  (36 years as specialist)', 'Hindi, English, Marathi', 'Indian Society of Pediatrics (ISP),', '9654182253', '2024-01-10 12:15:04', '2024-01-10 12:15:04'),
(19, 'pediatrics', 'Dr. Rafi Meman', 'MBBS, MD - Pediatrics Pediatrician', '16 Years Experience Overall (12 years as specialist)', 'Hindi, English', '.', '7418529638', '2024-01-10 12:19:35', '2024-01-10 12:19:35'),
(20, 'pediatrics', 'Dr. Deepak Lohiya', 'MBBS, Diploma in Child Health (DCH) Pediatrician', '23 Years Experience Overall', 'Hindi, English, Marathi', 'Indian Medical Association (IMA)', '9874563215', '2024-01-10 12:21:14', '2024-01-10 12:21:14'),
(21, 'kidneytransplantation', 'Dr. Himesh Gandhi', 'MCh - Urology, MS - General Surgery, MBBS Urologist,Urological Surgeon', '16 Years Experience Overall (8 years as specialist)', 'Hindi, English', 'American Urological Association (AUA) Urological Society of India (USI) Singapore Urological Association Singapore Medical Council Medical Council of India (MCI)', '9384762587', '2024-01-10 12:23:40', '2024-01-10 12:23:40'),
(22, 'kidneytransplantation', 'Dr. Gopal Rathi', 'MBBS, MS - General Surgery, DNB - Urology/Genito - Urinary Surgery  Urological Surgeon,Andrologist,U', 'Surgeon,Andrologist,Urologist 16 Years Experience Overall', 'Hindi, English, Marathi', 'Urology Society Of India', '9874528636', '2024-01-10 12:26:47', '2024-02-23 19:26:15'),
(23, 'kidneytransplantation', 'Dr. Mahesh Rokade', 'MBBS, MD - Medicine, DNB - Nephrology Nephrologist/Renal Specialist', '25 Years Experience Overall (13 years as specialist)', 'Hindi, English, Marathi', 'Indian Society of Nephrology (ISN)', '9819782875', '2024-01-10 12:28:26', '2024-01-10 12:28:26'),
(24, 'kidneytransplantation', 'Dr. Sachin Patil', 'MD - General Medicine, DM - Nephrology, MBBS Nephrologist/Renal Specialist', '19 Years Experience Overall (15 years as specialist)', 'Hindi, English, Marathi', 'Maharastra Medical Council Indian Society of Nephrology (ISN) International Society of Nephrology (ISN) Indian society of NEPHROLOGY West zone', '9487251634', '2024-01-10 12:30:40', '2024-01-10 12:30:40'),
(25, 'livertransplantation', 'Dr Swapnil Sharma', 'Liver, Pancreas, Intestine Transplant Program & HPB Surgery', '19 Years Experience Overall (10 years as specialist)', 'Hindi, English, Marathi', 'International Hepato-Pancreato-Biliary Association (IHPBA)', '020 7117 7', '2024-01-10 12:32:17', '2024-01-10 12:32:17'),
(26, 'livertransplantation', 'Dr Gaurav Chaubal', 'Liver, Pancreas, Intestine Transplant Program & HPB Surgery.', '19 Years Experience Overall (15 years as specialist)', 'Hindi, English, Marathi', 'Maharastra Medical Council Indian Medical Association (IMA)', '9874258744', '2024-01-10 12:34:09', '2024-01-10 12:34:09'),
(27, 'livertransplantation', 'Dr. Anurag Shrimal', 'Liver, Pancreas, Intestine Transplant Program & HPB Surgery.', '23 Years Experience Overall  (18 years as specialist)', 'Hindi, English, Marathi', 'Maharastra Medical Council', '9763547215', '2024-01-10 12:36:08', '2024-01-10 12:36:08'),
(28, 'livertransplantation', 'Dr. Sudeep R Shah', 'Liver, Pancreas, Intestine Transplant Program & HPB Surgery.', '23 Years Experience (18 years as specialist)', 'Hindi, English, Marathi', 'Indian Medical Association (IMA)', '011 4117 1', '2024-01-10 12:38:40', '2024-02-23 19:25:29'),
(29, 'more', 'Dr. Mitali Joshi', 'MBBS Bachelor of Medicine and Bachelor of Surgery, MD,C. Diabetology,', '12 years as specialist', 'Hindi, English, Marathi', 'Indian Medical Association (IMA)', '9819782875', '2024-01-10 12:40:45', '2024-02-23 19:21:19'),
(30, 'more', 'Dr Sushant Gite', 'MBBS. DNB (Internal Medicine) Consultant Physician specialties in medicine', '23 Years Experience', 'Hindi, English, Marathi', 'Indian Medical Association (IMA)', '6548725895', '2024-01-10 12:43:32', '2024-02-23 19:24:03'),
(31, 'more', 'Dr. Nagesh Aghor', 'MBBS, MD - General Medicine, DNB - Nephrology Nephrologist/Renal Specialist', '12 years as specialist', 'Hindi, English, Marathi', 'Indian Medical Association (IMA)', '011 4117 1', '2024-01-10 12:44:52', '2024-01-10 12:44:52'),
(32, 'more', 'Dr. Arunima Singh', 'MBBS Bachelor of Medicine and Bachelor of Surgery Agra', '23 Years Experience Overall  (18 years as specialist)', 'Hindi, English, Marathi', 'Maharastra Medical Council', '9574821466', '2024-01-10 12:46:13', '2024-01-10 12:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `id` int(10) NOT NULL,
  `logo` varchar(3000) NOT NULL,
  `documentry` mediumtext NOT NULL,
  `category` varchar(3000) NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT current_timestamp(),
  `updatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`id`, `logo`, `documentry`, `category`, `inserttime`, `updatetime`) VALUES
(11, 'galleryimage/4786502024-01-10-13-16-51.png', '', 'image', '0000-00-00 00:00:00', '2024-01-10 13:16:51'),
(12, 'galleryimage/5322852024-01-10-13-17-43.jpg', '', 'image', '0000-00-00 00:00:00', '2024-01-10 13:17:43'),
(13, 'galleryimage/2341042024-01-10-13-17-59.jpg', '', 'image', '0000-00-00 00:00:00', '2024-01-10 13:17:59'),
(14, 'galleryimage/1176042024-01-10-13-18-21.png', '', 'image', '0000-00-00 00:00:00', '2024-01-10 13:18:21'),
(15, 'galleryimage/2918482024-01-10-13-18-43.png', '', 'image', '0000-00-00 00:00:00', '2024-01-10 13:18:43'),
(16, 'galleryimage/4674502024-01-10-13-19-59.jpg', '', 'image', '0000-00-00 00:00:00', '2024-01-10 13:19:59'),
(17, '', 'https://www.youtube.com/embed/mCNTtJDfMgQ?si=IHC3y1Rj2qQWJyxs', 'video', '0000-00-00 00:00:00', '2024-01-12 13:21:20'),
(18, '', 'https://www.youtube.com/embed/s_JiJtnmn2o?si=bL5RmOiHcSuej8At', 'video', '0000-00-00 00:00:00', '2024-01-12 13:23:04'),
(19, '', 'https://www.youtube.com/embed/bZ_qaNp29E0?si=CmqBAXVSu_q8SD5e', 'video', '0000-00-00 00:00:00', '2024-01-12 13:23:20'),
(20, '', 'https://www.youtube.com/embed/mCNTtJDfMgQ?si=xVGb-cyXjbthu2G4', 'video', '0000-00-00 00:00:00', '2024-01-12 13:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblspecialties`
--

CREATE TABLE `tblspecialties` (
  `id` int(10) NOT NULL,
  `specialtiestitle` varchar(100) NOT NULL,
  `specialtiesdesc` longtext NOT NULL,
  `specialtiesimg` longtext NOT NULL,
  `inserttime` datetime NOT NULL DEFAULT current_timestamp(),
  `updatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblspecialties`
--

INSERT INTO `tblspecialties` (`id`, `specialtiestitle`, `specialtiesdesc`, `specialtiesimg`, `inserttime`, `updatetime`) VALUES
(1, 'Cardiology', 'At Medicover Hospitals, our expert heart specialists treat all kinds of severe heart problems, from infants to old age adults. Our cardiology specialists are highly skilled and experienced, and they will perform various types of cardiology procedures like Cardiac Resynchronization Therapy, Coronary Angioplasty and stent insertion, Heart Transplant, etc.', 'specialtiesimg/1256172024-01-09-13-51-43.jpg', '2024-01-09 13:51:43', '2024-01-09 13:51:43'),
(2, 'Nephrology', 'Orthopedics is a medical specialty focused on preventing, diagnosing, and treating musculoskeletal disorders and injuries. The musculoskeletal system includes bones, joints, muscles, tendons, and ligaments. Orthopedic specialists are trained to evaluate, diagnose and treat various conditions affecting the musculoskeletal system, from minor sprains.', 'specialtiesimg/1245922024-01-09-13-56-27.webp', '2024-01-09 13:56:27', '2024-01-09 13:56:27'),
(3, 'Gastroenterology', 'Gastroenterology is the treatment of illnesses and disorders of the digestive system, which includes the stomach, esophagus, small intestine, pancreas, large intestine, liver, and gallbladder. Gastroenterologists are specialists who specialize in the diagnosis and treatment of abnormalities of the digestive system.', 'specialtiesimg/1358942024-01-09-14-02-50.jpg', '2024-01-09 14:02:50', '2024-01-09 14:02:50'),
(4, 'Oncology', 'Oncology is the study of cancer. An oncologist is a doctor who treats cancer and provides medical care for a person diagnosed with cancer. An oncologist may also be called a cancer specialist. The field of oncology has 3 major areas based on treatments: medical oncology, radiation oncology, and surgical oncology. Oncology is the branch of medicine that researches, identifies and treats cancer. A physician who works in the field of oncology is an oncologist. Oncologists must first diagnose a cancer, which is usually carried out via biopsy, endoscopy, X-ray, CT scanning, MRI, PET scanning, ultrasound or other radiological methods. Nuclear medicine can also be used to diagnose cancer, as can blood tests or tumor markers. Oncology is often linked with hematology, which is the branch of medicine that deals with blood and blood-related disorders.', 'specialtiesimg/5865412024-01-09-14-05-44.png', '2024-01-09 14:05:44', '2024-01-09 14:05:44'),
(5, 'Pediatrics', 'Pediatrics is the branch of medicine dealing with the health and medical care of infants, children, and adolescents from birth up to the age of 18. The word paediatrics means healer of children; they are derived from two Greek words: (pais = child) and (iatros = doctor or healer). Paediatrics is a relatively new medical specialty, developing only in the mid-19th century. Abraham Jacobi (1830–1919) is known as the father of paediatrics.', 'specialtiesimg/9994962024-01-09-14-39-49.jpg', '2024-01-09 14:39:49', '2024-01-09 14:39:49'),
(6, 'Kidney Transplantation', 'A kidney transplant is a surgery to place a healthy kidney from a living or deceased donor into a person whose kidneys no longer function properly. The kidneys are two bean-shaped organs located on each side of the spine just below the rib cage. Each is about the size of a fist. Their main function is to filter and remove waste, minerals and fluid from the blood by producing urine. When kidneys lose this filtering ability, harmful levels of fluid and waste accumulate in the body, which can raise blood pressure and result in kidney failure (end-stage renal disease). End-stage renal disease occurs when the kidneys have lost about 90% of their ability to function normally. End-stage renal disease occurs when the kidneys have lost about 90% of their ability to function normally.', 'specialtiesimg/3694722024-01-09-14-47-13.jpeg', '2024-01-09 14:47:13', '2024-01-09 14:47:13'),
(7, 'Liver Transplantation', 'A liver transplant is a surgery that removes a liver that no longer functions properly (liver failure) and replaces it with a healthy liver from a deceased donor or a portion of a healthy liver from a living donor. Liver transplant is usually reserved as a treatment option for people who have significant complications due to end-stage chronic liver disease. Liver transplant may also be a treatment option in rare cases of sudden failure of a previously healthy liver. The number of people waiting for a liver transplant greatly exceeds the number of available deceased-donor livers. Receiving a portion of a liver from a living donor is an alternative to waiting for a deceased-donor liver to become available. Living-donor liver transplant is possible because the human liver regenerates and returns to its normal size shortly after surgical removal of part of the organ. In 2018, about 8,200 liver transplants were performed in the U.S. among adults and children.', 'specialtiesimg/2762202024-01-09-14-50-55.webp', '2024-01-09 14:50:55', '2024-01-09 14:50:55'),
(8, 'Emergency Medicine', 'Various models for emergency medicine exist internationally. In countries following the Anglo-American model, emergency medicine initially consisted of surgeons, general practitioners, and other generalist physicians. However, in recent decades it has become recognised as a speciality in its own right with its training programmes and academic posts, and the speciality is now a popular choice among medical students and newly qualified medical practitioners.', 'specialtiesimg/4198062024-01-11-21-21-59.jpg', '2024-01-11 21:21:59', '2024-01-11 21:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimuser`
--
ALTER TABLE `dimuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblaboutus`
--
ALTER TABLE `tblaboutus`
  ADD PRIMARY KEY (`idabout`);

--
-- Indexes for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`idblog`);

--
-- Indexes for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  ADD PRIMARY KEY (`iddoctor`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblspecialties`
--
ALTER TABLE `tblspecialties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `dimuser`
--
ALTER TABLE `dimuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblaboutus`
--
ALTER TABLE `tblaboutus`
  MODIFY `idabout` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblblog`
--
ALTER TABLE `tblblog`
  MODIFY `idblog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  MODIFY `iddoctor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblspecialties`
--
ALTER TABLE `tblspecialties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
