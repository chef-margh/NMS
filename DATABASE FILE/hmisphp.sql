-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 06:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmisphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `his_accounts`
--

CREATE TABLE `his_accounts` (
  `acc_id` int(200) NOT NULL,
  `acc_name` varchar(200) DEFAULT NULL,
  `acc_desc` text,
  `acc_type` varchar(200) DEFAULT NULL,
  `acc_number` varchar(200) DEFAULT NULL,
  `acc_amount` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_accounts`
--

INSERT INTO `his_accounts` (`acc_id`, `acc_name`, `acc_desc`, `acc_type`, `acc_number`, `acc_amount`) VALUES
(1, 'Individual Retirement Account', '<p>IRA&rsquo;s are simply an account where you stash your money for retirement. The concept is pretty simple, your account balance is not taxed UNTIL you withdraw, at which point you pay the taxes there. This allows you to grow your account with interest without taxes taking away from the balance. The net result is you earn more money.</p>', 'Payable Account', '518703294', '25000'),
(2, 'Equity Bank', '<p>Find <em>bank account</em> stock <em>images</em> in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new</p>', 'Receivable Account', '753680912', '12566'),
(3, 'Test Account Name', '<p>This is a demo test</p>', 'Payable Account', '620157843', '1100');

-- --------------------------------------------------------

--
-- Table structure for table `his_admin`
--

CREATE TABLE `his_admin` (
  `ad_id` int(20) NOT NULL,
  `ad_fname` varchar(200) DEFAULT NULL,
  `ad_lname` varchar(200) DEFAULT NULL,
  `ad_email` varchar(200) DEFAULT NULL,
  `ad_pwd` varchar(200) DEFAULT NULL,
  `ad_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_admin`
--

INSERT INTO `his_admin` (`ad_id`, `ad_fname`, `ad_lname`, `ad_email`, `ad_pwd`, `ad_dpic`) VALUES
(1, 'System', 'Administrator', 'admin@mail.com', '4c7f5919e957f354d57243d37f223cf31e9e7181', 'doc-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `his_assets`
--

CREATE TABLE `his_assets` (
  `asst_id` int(20) NOT NULL,
  `asst_name` varchar(200) DEFAULT NULL,
  `asst_desc` longtext,
  `asst_vendor` varchar(200) DEFAULT NULL,
  `asst_status` varchar(200) DEFAULT NULL,
  `asst_dept` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_docs`
--

CREATE TABLE `his_docs` (
  `doc_id` int(20) NOT NULL,
  `doc_fname` varchar(200) DEFAULT NULL,
  `doc_lname` varchar(200) DEFAULT NULL,
  `doc_email` varchar(200) DEFAULT NULL,
  `doc_pwd` varchar(200) DEFAULT NULL,
  `doc_dept` varchar(200) DEFAULT NULL,
  `doc_number` varchar(200) DEFAULT NULL,
  `doc_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_docs`
--

INSERT INTO `his_docs` (`doc_id`, `doc_fname`, `doc_lname`, `doc_email`, `doc_pwd`, `doc_dept`, `doc_number`, `doc_dpic`) VALUES
(5, 'Aletha', 'White', 'aletha@mail.com', 'dce0b27ba675df41e9cc07af80ec59c475810824', 'Laboratory', 'BKTWQ', 'defaultimg.jpg'),
(6, 'Bryan', 'Arreola', 'bryan@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', 'Surgery | Theatre', 'YDS7L', 'user-default-2-min.png'),
(12, 'Jessica', 'Spencer', 'jessica@mail.com', 'dce0b27ba675df41e9cc07af80ec59c475810824', 'Accounting', '5VIFT', 'usric.png');

-- --------------------------------------------------------



-- Table structure for table `his_laboratory`
--

CREATE TABLE `his_laboratory` (
  `lab_id` int(20) NOT NULL,
  `lab_pat_name` varchar(200) DEFAULT NULL,
  `lab_pat_number` varchar(200) DEFAULT NULL,
  `lab_pat_tests` varchar(200) DEFAULT NULL,
  `lab_pat_results` varchar(200) DEFAULT NULL,
  `lab_number` varchar(200) DEFAULT NULL,
  `lab_date_rec` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_laboratory`
--

INSERT INTO `his_laboratory` (`lab_id`, `lab_pat_name`,`lab_pat_number`, `lab_pat_tests`, `lab_pat_results`, `lab_number`, `lab_date_rec`) VALUES
(1, 'Lorem Ipsum ',  '7EW0L', '<ul><li><a href=\"https://www.medicalnewstoday.com/articles/179211.php\">Non-steroidal anti-inflammatory drugs</a> (NSAIDs) such as <a href=\"https://www.medicalnewstoday.com/articles/161255.php\">aspirin</a> or ibuprofen can help bring a fever down. These are available to purchase over-the-counter or <a target=\"_blank\" href=\"https://amzn.to/2qp3d0b\">online</a>. However, a mild fever may be helping combat the bacterium or virus that is causing the infection. It may not be ideal to bring it down.</li><li>If the fever has been caused by a bacterial infection, the doctor may prescribe an <a href=\"https://www.medicalnewstoday.com/articles/10278.php\">antibiotic</a>.</li><li>If a fever has been caused by a cold, which is caused by a viral infection, NSAIDs may be used to relieve uncomfortable symptoms. Antibiotics have no effect against viruses and will not be prescribed by your doctor for a viral infection.</li></ul>', '<ul><li>If the fever has been caused by a bacterial infection, the doctor may prescribe an <a href=\"https://www.medicalnewstoday.com/articles/10278.php\">antibiotic</a>.</li><li>If a fever has been caused by a cold, which is caused by a viral infection, NSAIDs may be used to relieve uncomfortable symptoms. Antibiotics have no effect against viruses and will not be prescribed by your doctor for a viral infection.</li></ul>', 'K67PL', '2020-01-12 13:32:07'),
(2, 'Mart Developers',  '6P8HJ', '<ul><li>Body temperature</li><li>Blood</li><li>Stool</li><li>Urine</li></ul>', '<ul><li>Body Temperature 67 Degree Celcious(Abnormal)</li><li>Blood - Malaria Bacterial Tested Postive</li><li>Stool - Mucus tested postive</li><li>Urine -Urea Level were 20% higher than normal</li></ul><p><strong>Fever Tested Positive</strong></p>', '9DMN5', '2020-01-12 13:41:07'),
(3, 'John Doe',  'RAV6C', '<p><strong>Pain areas: </strong>in the abdomen or muscles</p><p><strong>Whole body: </strong>chills, fatigue, fever, night sweats, shivering, or sweating</p><p><strong>Gastrointestinal: </strong>diarrhoea, nausea, or vomiting</p><p><strong>Also common: </strong>fast heart rate, headache, mental confusion, or pallor</p>', '<p><strong>Pain areas: </strong>in the abdomen or muscles -Tested Positive</p><p><strong>Whole body: </strong>chills, fatigue, fever, night sweats, shivering, or sweating - Tested Positive</p><p><strong>Gastrointestinal: </strong>diarrhoea, nausea, or vomiting - Tested Positive</p><p>&nbsp;</p>', '90ZNX', '2020-01-13 12:31:48'),
(4, 'Cynthia Connolly',  '3Z14K', '<p>demo demo demo demo</p>', '<p>54545</p>', 'G0VZU', '2022-10-20 17:48:05'),
(5, 'Christine Moore',  '4TLG0', '<ol><li>Test One</li><li>Test Two</li><li>Test Three</li><li>Test Four</li><li>Test Five</li></ol>', '<ol><li>Result One</li><li>Result Two</li><li>Result Three</li></ol>', 'RA4UM', '2022-10-22 11:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `his_medical_records`
--

CREATE TABLE `his_medical_records` (
  `mdr_id` int(20) NOT NULL,
  `mdr_number` varchar(200) DEFAULT NULL,
  `mdr_pat_name` varchar(200) DEFAULT NULL,
  `mdr_pat_adr` varchar(200) DEFAULT NULL,
  `mdr_pat_age` varchar(200) DEFAULT NULL,
  `mdr_pat_ailment` varchar(200) DEFAULT NULL,
  `mdr_pat_number` varchar(200) DEFAULT NULL,
  `mdr_pat_prescr` longtext,
  `mdr_date_rec` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_medical_records`
--

INSERT INTO `his_medical_records` (`mdr_id`, `mdr_number`, `mdr_pat_name`, `mdr_pat_adr`, `mdr_pat_age`, `mdr_pat_ailment`, `mdr_pat_number`, `mdr_pat_prescr`, `mdr_date_rec`) VALUES
(1, 'ZNXI4', 'John Doe', '12 900 Los Angeles', '35', 'Malaria', 'RAV6C', '<ul><li>Combination of atovaquone and proguanil (Malarone)</li><li>Quinine sulfate (Qualaquin) with doxycycline (Vibramycin, Monodox, others)</li><li>Mefloquine.</li><li>Primaquine phosphate.</li></ul>', '2020-01-11 15:03:05.9839'),
(2, 'MIA9P', 'Cynthia Connolly', '9 Hill Haven Drive', '22', 'Demo Test', '3Z14K', NULL, '2022-10-18 17:07:46.7306'),
(3, 'F1ZHQ', 'Michael White', '60 Radford Street', '30', 'Demo Test', 'DCRI8', NULL, '2022-10-18 17:08:35.7938'),
(4, 'ZLN0Q', 'Lawrence Bischof', '82 Bryan Street', '32', 'Demo Test', 'ISL1E', '<ol><li>sample</li><li>sampl</li><li>sample</li><li>sample</li></ol>', '2022-10-20 17:22:15.7034');

-- --------------------------------------------------------

--
-- Table structure for table `his_patients`
--

CREATE TABLE `his_patients` (
  `pat_id` int(20) NOT NULL,
  `pat_fname` varchar(200) DEFAULT NULL,
  `pat_lname` varchar(200) DEFAULT NULL,
  `pat_dob` varchar(200) DEFAULT NULL,
  `pat_age` varchar(200) DEFAULT NULL,
  `pat_number` varchar(200) DEFAULT NULL,
  `pat_addr` varchar(200) DEFAULT NULL,
  `pat_phone` varchar(200) DEFAULT NULL,
  `pat_type` varchar(200) DEFAULT NULL,
  `pat_date_joined` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `pat_ailment` varchar(200) DEFAULT NULL,
  `pat_discharge_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_patients`
--

INSERT INTO `his_patients` (`pat_id`, `pat_fname`, `pat_lname`, `pat_dob`, `pat_age`, `pat_number`, `pat_addr`, `pat_phone`, `pat_type`, `pat_date_joined`, `pat_ailment`, `pat_discharge_status`) VALUES
(8, 'Michael', 'White', '02/02/1992', '30', 'DCRI8', '60 Radford Street', '1458887854', 'InPatient', '2022-10-18 16:28:51.469431', 'Demo Test', NULL),
(9, 'Lawrence', 'Bischof', '01/19/1990', '32', 'ISL1E', '82 Bryan Street', '7412225698', 'InPatient', '2022-10-18 16:53:26.210951', 'Demo Test', NULL),
(10, 'Cynthia', 'Connolly', '10/11/2000', '22', '3Z14K', '9 Hill Haven Drive', '1478885458', 'InPatient', '2022-10-18 16:54:53.104490', 'Demo Test', NULL),
(11, 'Helen', 'Macdougall', '01/01/1980', '42', 'KU8W4', '28 Holly Street', '1458889655', 'OutPatient', '2022-10-20 17:26:45.256878', 'Test Test', NULL),
(12, 'Christine', 'Moore', '11/06/1994', '28', '4TLG0', '117 Bleecker Street', '7412569698', 'InPatient', '2022-10-22 10:38:30.937516', 'Demo Test', NULL);

-- --------------------------------------------------------

-- --------------------------------------------------------

--


--
-- Table structure for table `his_pharmaceuticals`
--

CREATE TABLE `his_pharmaceuticals` (
  `phar_id` int(20) NOT NULL,
  `phar_name` varchar(200) DEFAULT NULL,
  `phar_bcode` varchar(200) DEFAULT NULL,
  `phar_desc` longtext,
  `phar_qty` varchar(200) DEFAULT NULL,
  `phar_cat` varchar(200) DEFAULT NULL,
  `phar_vendor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_pharmaceuticals`
--

INSERT INTO `his_pharmaceuticals` (`phar_id`, `phar_name`, `phar_bcode`, `phar_desc`, `phar_qty`, `phar_cat`, `phar_vendor`) VALUES
(1, 'Paracetamol', '134057629', '<ul><li><strong>Paracetamol</strong>, also known as <strong>acetaminophen</strong> and <strong>APAP</strong>, is a medication used to treat <a href=\"https://en.wikipedia.org/wiki/Pain\">pain</a> and <a href=\"https://en.wikipedia.org/wiki/Fever\">fever</a>. It is typically used for mild to moderate pain relief. There is mixed evidence for its use to relieve fever in children.&nbsp; It is often sold in combination with other medications, such as in many <a href=\"https://en.wikipedia.org/wiki/Cold_medication\">cold medications</a> Paracetamol is also used for severe pain, such as <a href=\"https://en.wikipedia.org/wiki/Cancer_pain\">cancer pain</a> and pain after surgery, in combination with <a href=\"https://en.wikipedia.org/wiki/Opioid_analgesic\">opioid pain medication</a>. It is typically used either by mouth or <a href=\"https://en.wikipedia.org/wiki/Rectally\">rectally</a>, but is also available by <a href=\"https://en.wikipedia.org/wiki/Intravenous\">injection into a vein</a>. Effects last between two and four hours.</li><li>Paracetamol is generally safe at recommended doses.The recommended maximum daily dose for an adult is three to four grams. Higher doses may lead to toxicity, including <a href=\"https://en.wikipedia.org/wiki/Liver_failure\">liver failure</a> Serious skin rashes may rarely occur. It appears to be safe during <a href=\"https://en.wikipedia.org/wiki/Pregnancy\">pregnancy</a> and when <a href=\"https://en.wikipedia.org/wiki/Breastfeeding\">breastfeeding</a>.In those with liver disease, it may still be used, but in lower doses. It is classified as a mild <a href=\"https://en.wikipedia.org/wiki/Analgesic\">analgesic</a>. It does not have significant <a href=\"https://en.wikipedia.org/wiki/Anti-inflammatory\">anti-inflammatory</a> activity. How it works is not entirely clear.</li><li>Paracetamol was first made in 1877. It is the most commonly used medication for pain and fever in both the United States and Europe. It is on the <a href=\"https://en.wikipedia.org/wiki/World_Health_Organization%27s_List_of_Essential_Medicines\">World Health Organization&#39;s List of Essential Medicines</a>, the safest and most effective medicines needed in a <a href=\"https://en.wikipedia.org/wiki/Health_system\">health system</a>.<a href=\"https://en.wikipedia.org/wiki/Paracetamol#cite_note-WHO21st-24\">[24]</a> Paracetamol is available as a <a href=\"https://en.wikipedia.org/wiki/Generic_medication\">generic medication</a> with trade names including <a href=\"https://en.wikipedia.org/wiki/Tylenol_(brand)\">Tylenol</a> and <a href=\"https://en.wikipedia.org/wiki/Panadol_(brand)\">Panadol</a>, among others.The wholesale price in the <a href=\"https://en.wikipedia.org/wiki/Developing_world\">developing world</a> is less than US$0.01 per dose. In the United States, it costs about US$0.04 per dose. In 2019, it was the 17th most prescribed medication in the United States, with more than 29&nbsp;million prescriptions.</li></ul>', '500', 'Antipyretics', 'Dawa Limited Kenya'),
(2, 'Aspirin', '452760813', '<ul><li><strong>Aspirin</strong>, also known as <strong>acetylsalicylic acid</strong> (<strong>ASA</strong>), is a <a href=\"https://en.wikipedia.org/wiki/Medication\">medication</a> used to reduce <a href=\"https://en.wikipedia.org/wiki/Pain\">pain</a>, <a href=\"https://en.wikipedia.org/wiki/Fever\">fever</a>, or <a href=\"https://en.wikipedia.org/wiki/Inflammation\">inflammation</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> Specific inflammatory conditions which aspirin is used to treat include <a href=\"https://en.wikipedia.org/wiki/Kawasaki_disease\">Kawasaki disease</a>, <a href=\"https://en.wikipedia.org/wiki/Pericarditis\">pericarditis</a>, and <a href=\"https://en.wikipedia.org/wiki/Rheumatic_fever\">rheumatic fever</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> Aspirin given shortly after a <a href=\"https://en.wikipedia.org/wiki/Myocardial_infarction\">heart attack</a> decreases the risk of death.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> Aspirin is also used long-term to help prevent further heart attacks, <a href=\"https://en.wikipedia.org/wiki/Ischaemic_stroke\">ischaemic strokes</a>, and <a href=\"https://en.wikipedia.org/wiki/Thrombus\">blood clots</a> in people at high risk.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> It may also decrease the risk of certain types of <a href=\"https://en.wikipedia.org/wiki/Cancer\">cancer</a>, particularly <a href=\"https://en.wikipedia.org/wiki/Colorectal_cancer\">colorectal cancer</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-6\">[6]</a> For pain or fever, effects typically begin within 30 minutes.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> Aspirin is a <a href=\"https://en.wikipedia.org/wiki/Nonsteroidal_anti-inflammatory_drug\">nonsteroidal anti-inflammatory drug</a> (NSAID) and works similarly to other NSAIDs but also suppresses the normal functioning of <a href=\"https://en.wikipedia.org/wiki/Platelet\">platelets</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a></li><li>One common <a href=\"https://en.wikipedia.org/wiki/Adverse_effect\">adverse effect</a> is an <a href=\"https://en.wikipedia.org/wiki/Upset_stomach\">upset stomach</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> More significant side effects include <a href=\"https://en.wikipedia.org/wiki/Stomach_ulcer\">stomach ulcers</a>, <a href=\"https://en.wikipedia.org/wiki/Stomach_bleeding\">stomach bleeding</a>, and worsening <a href=\"https://en.wikipedia.org/wiki/Asthma\">asthma</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> Bleeding risk is greater among those who are older, drink <a href=\"https://en.wikipedia.org/wiki/Alcohol_(drug)\">alcohol</a>, take other NSAIDs, or are on other <a href=\"https://en.wikipedia.org/wiki/Anticoagulants\">blood thinners</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> Aspirin is not recommended in the last part of <a href=\"https://en.wikipedia.org/wiki/Pregnancy\">pregnancy</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> It is not generally recommended in children with <a href=\"https://en.wikipedia.org/wiki/Infection\">infections</a> because of the risk of <a href=\"https://en.wikipedia.org/wiki/Reye_syndrome\">Reye syndrome</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a> High doses may result in <a href=\"https://en.wikipedia.org/wiki/Tinnitus\">ringing in the ears</a>.<a href=\"https://en.wikipedia.org/wiki/Aspirin#cite_note-AHSF2016-5\">[5]</a></li></ul>', '500', 'Analgesics', 'Cosmos Kenya Limited'),
(3, 'Test Pharma', '465931288', '<p>This is a demo test.&nbsp;This is a demo test.&nbsp;This is a demo test.</p>', '36', 'Antibiotics', 'Cosmos Pharmaceutical Limited');

-- --------------------------------------------------------

--
-- Table structure for table `his_pharmaceuticals_categories`
--

CREATE TABLE `his_pharmaceuticals_categories` (
  `pharm_cat_id` int(20) NOT NULL,
  `pharm_cat_name` varchar(200) DEFAULT NULL,
  `pharm_cat_vendor` varchar(200) DEFAULT NULL,
  `pharm_cat_desc` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_pharmaceuticals_categories`
--

INSERT INTO `his_pharmaceuticals_categories` (`pharm_cat_id`, `pharm_cat_name`, `pharm_cat_vendor`, `pharm_cat_desc`) VALUES
(1, 'Antipyretics', 'Cosmos Kenya Limited', '<ul><li>An <strong>antipyretic</strong> (<a href=\"https://en.wikipedia.org/wiki/Help:IPA/English\">/ËŒ&aelig;ntipaÉªËˆrÉ›tÉªk/</a>, from <em>anti-</em> &#39;against&#39; and <em><a href=\"https://en.wiktionary.org/wiki/pyretic\">pyretic</a></em> &#39;feverish&#39;) is a substance that reduces <a href=\"https://en.wikipedia.org/wiki/Fever\">fever</a>. Antipyretics cause the <a href=\"https://en.wikipedia.org/wiki/Hypothalamus\">hypothalamus</a> to override a <a href=\"https://en.wikipedia.org/wiki/Prostaglandin\">prostaglandin</a>-induced increase in <a href=\"https://en.wikipedia.org/wiki/Thermoregulation\">temperature</a>. The body then works to lower the temperature, which results in a reduction in fever.</li><li>Most antipyretic medications have other purposes. The most common antipyretics in the United States are <a href=\"https://en.wikipedia.org/wiki/Ibuprofen\">ibuprofen</a> and <a href=\"https://en.wikipedia.org/wiki/Aspirin\">aspirin</a>, which are <a href=\"https://en.wikipedia.org/wiki/Nonsteroidal_anti-inflammatory_drugs\">nonsteroidal anti-inflammatory drugs</a> (NSAIDs) used primarily as <a href=\"https://en.wikipedia.org/wiki/Analgesics\">analgesics</a> (pain relievers), but which also have antipyretic properties; and <a href=\"https://en.wikipedia.org/wiki/Acetaminophen\">acetaminophen</a> (paracetamol), an analgesic with weak anti-inflammatory properties.<a href=\"https://en.wikipedia.org/wiki/Antipyretic#cite_note-2\">[2]</a></li></ul>'),
(2, 'Analgesics', 'Dawa Limited Kenya', '<ul><li><p>An <strong>analgesic</strong> or <strong>painkiller</strong> is any member of the group of <a href=\"https://en.wikipedia.org/wiki/Pharmaceutical_drug\">drugs</a> used to achieve analgesia, relief from <a href=\"https://en.wikipedia.org/wiki/Pain\">pain</a>.</p><p>Analgesic drugs act in various ways on the <a href=\"https://en.wikipedia.org/wiki/Peripheral_nervous_system\">peripheral</a> and <a href=\"https://en.wikipedia.org/wiki/Central_nervous_system\">central</a> nervous systems. They are distinct from <a href=\"https://en.wikipedia.org/wiki/Anesthetic\">anesthetics</a>, which temporarily affect, and in some instances completely eliminate, <a href=\"https://en.wikipedia.org/wiki/Sense\">sensation</a>. Analgesics include <a href=\"https://en.wikipedia.org/wiki/Paracetamol\">paracetamol</a> (known in North America as <a href=\"https://en.wikipedia.org/wiki/Acetaminophen\">acetaminophen</a> or simply APAP), the <a href=\"https://en.wikipedia.org/wiki/Nonsteroidal_anti-inflammatory_drug\">nonsteroidal anti-inflammatory drugs</a> (NSAIDs) such as the <a href=\"https://en.wikipedia.org/wiki/Salicylate\">salicylates</a>, and <a href=\"https://en.wikipedia.org/wiki/Opioid\">opioid</a> drugs such as <a href=\"https://en.wikipedia.org/wiki/Morphine\">morphine</a> and <a href=\"https://en.wikipedia.org/wiki/Oxycodone\">oxycodone</a>.</p></li></ul>'),
(3, 'Antibiotics', 'Cosmos Kenya Limited', '<p>Antibiotics</p>');

-- --------------------------------------------------------

--
-- Table structure for table `his_prescriptions`
--


--
-- Table structure for table `his_pwdresets`
--

CREATE TABLE `his_pwdresets` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Indexes for dumped tables
--

--
-- Indexes for table `his_accounts`
--
ALTER TABLE `his_accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `his_admin`
--
ALTER TABLE `his_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `his_assets`
--
ALTER TABLE `his_assets`
  ADD PRIMARY KEY (`asst_id`);

--
-- Indexes for table `his_docs`
--
ALTER TABLE `his_docs`
  ADD PRIMARY KEY (`doc_id`);


--
-- Indexes for table `his_laboratory`
--
ALTER TABLE `his_laboratory`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `his_medical_records`
--
ALTER TABLE `his_medical_records`
  ADD PRIMARY KEY (`mdr_id`);

--
-- Indexes for table `his_patients`
--
ALTER TABLE `his_patients`
  ADD PRIMARY KEY (`pat_id`);


--
-- Indexes for table `his_pharmaceuticals`
--
ALTER TABLE `his_pharmaceuticals`
  ADD PRIMARY KEY (`phar_id`);

--
-- Indexes for table `his_pharmaceuticals_categories`
--
ALTER TABLE `his_pharmaceuticals_categories`
  ADD PRIMARY KEY (`pharm_cat_id`);

--

-- Indexes for table `his_pwdresets`
--
ALTER TABLE `his_pwdresets`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `his_accounts`
--
ALTER TABLE `his_accounts`
  MODIFY `acc_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `his_admin`
--
ALTER TABLE `his_admin`
  MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `his_assets`
--
ALTER TABLE `his_assets`
  MODIFY `asst_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `his_docs`
--
ALTER TABLE `his_docs`
  MODIFY `doc_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `his_equipments`
--

ALTER TABLE `his_laboratory`
  MODIFY `lab_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `his_medical_records`
--
ALTER TABLE `his_medical_records`
  MODIFY `mdr_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `his_patients`
--
ALTER TABLE `his_patients`
  MODIFY `pat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--

-- AUTO_INCREMENT for table `his_pharmaceuticals`
--
ALTER TABLE `his_pharmaceuticals`
  MODIFY `phar_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `his_pharmaceuticals_categories`
--
ALTER TABLE `his_pharmaceuticals_categories`
  MODIFY `pharm_cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--

-- AUTO_INCREMENT for table `his_pwdresets`
--
ALTER TABLE `his_pwdresets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
