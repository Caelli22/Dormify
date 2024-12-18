-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 12:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dormify`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beds`
--

CREATE TABLE `tbl_beds` (
  `id` int(11) NOT NULL,
  `bed_uid` int(11) NOT NULL,
  `bed_name` varchar(100) NOT NULL,
  `bed_room` varchar(10) NOT NULL,
  `bed_details` text NOT NULL,
  `bed_status` varchar(10) NOT NULL,
  `bed_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_beds`
--

INSERT INTO `tbl_beds` (`id`, `bed_uid`, `bed_name`, `bed_room`, `bed_details`, `bed_status`, `bed_added`) VALUES
(15, 1, 'King Size', '1', '', '1', '2024-11-25 08:07:01'),
(16, 2, 'Queen Size', '2', '', '0', '2024-11-25 08:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bed_assign`
--

CREATE TABLE `tbl_bed_assign` (
  `id` int(11) NOT NULL,
  `ten_uid` varchar(25) NOT NULL,
  `room_uid` varchar(25) NOT NULL,
  `bed_uid` varchar(25) NOT NULL,
  `total_amnt` float(10,2) NOT NULL,
  `lease_from` date NOT NULL,
  `lease_to` date NOT NULL,
  `assigned_on` datetime NOT NULL,
  `is_retrived` varchar(1) NOT NULL,
  `retrived_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_bed_assign`
--

INSERT INTO `tbl_bed_assign` (`id`, `ten_uid`, `room_uid`, `bed_uid`, `total_amnt`, `lease_from`, `lease_to`, `assigned_on`, `is_retrived`, `retrived_on`) VALUES
(1, '1', '1', '1', 2000.00, '2024-09-01', '2024-09-30', '2024-09-12 15:54:43', '', '0000-00-00 00:00:00'),
(2, '2', '2', '3', 3000.00, '2024-09-01', '2024-09-30', '2024-09-12 15:55:46', '', '0000-00-00 00:00:00'),
(3, '3', '3', '4', 4000.00, '2024-09-01', '2024-09-30', '2024-09-12 15:56:16', '', '0000-00-00 00:00:00'),
(4, '3', '3', '4', 4000.00, '2024-10-21', '2024-11-21', '2024-10-21 06:44:39', '', '0000-00-00 00:00:00'),
(0, '1', '1', '1', 2000.00, '2024-10-22', '2024-11-22', '2024-10-22 07:21:45', '', '0000-00-00 00:00:00'),
(0, '4', '5', '7', 5000.00, '2024-10-22', '2024-11-22', '2024-10-22 07:52:21', '', '0000-00-00 00:00:00'),
(0, '1', '1', '1', 2000.00, '2024-11-01', '2024-12-01', '2024-11-25 07:22:22', '', '0000-00-00 00:00:00'),
(0, '2', '2', '3', 3000.00, '2024-11-02', '2024-12-02', '2024-11-25 07:22:41', '', '0000-00-00 00:00:00'),
(0, '1', '1', '1', 4000.00, '2024-12-07', '2025-01-07', '2024-12-04 12:26:20', '', '0000-00-00 00:00:00'),
(0, '2', '2', '2', 5000.00, '2024-12-01', '2025-01-01', '2024-12-04 12:29:46', '', '0000-00-00 00:00:00'),
(0, '3', '1', '1', 4000.00, '2024-12-07', '2025-01-07', '2024-12-06 11:11:32', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `blog_title`, `blog_image`, `blog_content`, `blog_date`) VALUES
(2, 'Effective Dormitory Management: Key Practices for a Smooth Experience', '25028-blog-1.jpg', '<p>Managing a dormitory comes with its own set of unique challenges. From ensuring a safe and clean environment to fostering a sense of community among residents, effective dormitory management requires a combination of organization, communication, and problem-solving skills. Here are some key practices to ensure smooth operations</p>\r\n', '2024-09-12 15:08:33'),
(3, 'Fostering Community in Dormitory Living', '6dcb9-blog-2.jpg', '<p>A successful dormitory is more than just a place to stay; it&rsquo;s a community that fosters personal growth and connection. Encouraging engagement through events, study groups, or casual gatherings helps students feel connected and supported. It&rsquo;s also important to have clear conflict resolution mechanisms in place, such as accessible resident advisors who can mediate disputes promptly and fairly. By building a sense of belonging, dormitory managers can significantly enhance the overall student living experience.</p>\r\n', '2024-09-12 15:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branches`
--

CREATE TABLE `tbl_branches` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_address` text NOT NULL,
  `branch_contact` varchar(10) NOT NULL,
  `branch_currency` varchar(10) NOT NULL,
  `branch_currency_symbol` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_branches`
--

INSERT INTO `tbl_branches` (`id`, `branch_name`, `branch_address`, `branch_contact`, `branch_currency`, `branch_currency_symbol`) VALUES
(1, 'Head Branch', 'Cabanatuan City, Nueva Ecija, 3100', '9876543210', 'PHP', '₱');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaints`
--

CREATE TABLE `tbl_complaints` (
  `id` int(11) NOT NULL,
  `complaint_title` varchar(255) NOT NULL,
  `complaint_text` text NOT NULL,
  `complaint_cat` varchar(10) NOT NULL,
  `complaint_tenant_uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint_cat`
--

CREATE TABLE `tbl_complaint_cat` (
  `id` int(11) NOT NULL,
  `complaint_cat_name` varchar(250) NOT NULL,
  `complaint_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_complaint_cat`
--

INSERT INTO `tbl_complaint_cat` (`id`, `complaint_cat_name`, `complaint_cat_desc`) VALUES
(1, 'Noise', ''),
(2, 'Fix/Repair', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dhpms_options`
--

CREATE TABLE `tbl_dhpms_options` (
  `id` int(11) NOT NULL,
  `opt_key` varchar(255) NOT NULL,
  `opt_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_dhpms_options`
--

INSERT INTO `tbl_dhpms_options` (`id`, `opt_key`, `opt_value`) VALUES
(1, 'dhp_name', 'Dormify'),
(2, 'app_footer', 'Dormify © 2024'),
(8, 'app_version', '1.0.0'),
(9, 'tid_start', '1'),
(10, 'currency_code', 'PHP'),
(11, 'currency_symbol', '₱'),
(12, 'rid_start', '1'),
(13, 'contact_no', '9876543210'),
(14, 'email', 'dormify.services@gmail.com'),
(15, 'country', 'Philippines'),
(16, 'state', 'Nueva Ecija'),
(17, 'city', 'Cabanatuan'),
(18, 'address', 'Burgos'),
(19, 'bid_start', '1'),
(31, 'smtp_host', 'smtp.gmail.com'),
(32, 'smtp_username', 'dormify.services@gmail.com'),
(33, 'smtp_pass', 'sjya depc oplu ebdr'),
(34, 'smtp_port', '465'),
(36, 'app_logo', 'b75f492a32c6ea4e1e5f3a487c03af8b.png'),
(39, 'lang', 'english'),
(42, 'invoice_footer', 'This is invoice footer, you can edit this from configurations.'),
(47, 'enable_registration', 'true'),
(48, 'enable_room_change_request', 'true'),
(49, 'url_rewrite', 'true'),
(50, 'web_template', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_templates`
--

CREATE TABLE `tbl_email_templates` (
  `id` int(11) NOT NULL,
  `email_tpl_name` varchar(250) NOT NULL,
  `email_tpl_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_email_templates`
--

INSERT INTO `tbl_email_templates` (`id`, `email_tpl_name`, `email_tpl_content`) VALUES
(1, 'email_tenant_create', '<p>Hello {{ten_name}},</p>\n\n<p>Your account is successfully created in {{dhpm_name}} - system.<br />\nYou can log in now with bellow credentials:</p>\n\n<p>Email: {{ten_email}}</p>\n\n<p>Password: {{ten_email}}<br />\n<br />\nYou can change your password by logging into your account.</p>\n\n<p>&nbsp;</p>\n\n<p>Thank You,</p>\n\n<p>{{dhpm_name}}&nbsp;</p>\n'),
(2, 'room_asigned', '<p>Hello {{ten_name}},</p>\n\n<p>Please find below details about your accommodation at {{dhpm_name}},</p>\n\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td>Room Name</td>\n			<td>{{room_name}}</td>\n		</tr>\n		<tr>\n			<td>Bed Name</td>\n			<td>{{bed_name}}</td>\n		</tr>\n		<tr>\n			<td>Total Amount</td>\n			<td>{{total_amount}}</td>\n		</tr>\n		<tr>\n			<td>Invoice Status</td>\n			<td>{{invoice_status}}</td>\n		</tr>\n	</tbody>\n</table>\n\n<p><br />\nPlease log in to your account for invoice details.</p>\n\n<p>&nbsp;</p>\n\n<p>Thank You,</p>\n\n<p>{{dhpm_name}}&nbsp;</p>\n'),
(3, 'es_assigned', '<p>Hello {{ten_name}},</p>\n\n<p>Please find below details about your extra service at {{dhpm_name}},</p>\n\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td>Extra Service Name</td>\n			<td>{{es_name}}</td>\n		</tr>\n		<tr>\n			<td>Total Amount</td>\n			<td>{{total_amount}}</td>\n		</tr>\n		<tr>\n			<td>Invoice Status</td>\n			<td>{{invoice_status}}</td>\n		</tr>\n	</tbody>\n</table>\n\n<p><br />\nPlease log in to your account for invoice details.</p>\n\n<p>&nbsp;</p>\n\n<p>Thank You,</p>\n\n<p>{{dhpm_name}}&nbsp;</p>\n'),
(4, 'add_payment', '<p>Hello {{ten_name}},<br />\n&nbsp;</p>\n\n<p>We have received a payment of {{pay_amnt}} against the Invoice no. {{inv_number}} on {{pay_date}}.</p>\n\n<p>Please log in to your account for invoice details.</p>\n\n<p>&nbsp;</p>\n\n<p>Thank You,</p>\n\n<p>{{dhpm_name}}&nbsp;</p>\n'),
(5, 'email_tenant_update', '<p>Hello {{ten_name}},</p>\n\n<p>Your account is successfully <strong>updated/activated</strong> in {{dhpm_name}} - DHPMS system.<br/>\n</p>\n<p>Thank You,</p>\n\n<p>{{dhpm_name}}&nbsp;</p>\n'),
(6, 'reject_request', '<p>Hello {{ten_name}}, &nbsp; \n\nWe regret to inform you that your recent request has been reviewed and cannot be accommodated at this time. For further information or clarification regarding this matter, we kindly advise you to consult with your current administrator, who will be best positioned to assist you. \n\nThankyou for understanding, \n{{dhpm_name}}&nbsp;</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_es_assign`
--

CREATE TABLE `tbl_es_assign` (
  `id` int(11) NOT NULL,
  `ten_uid` varchar(55) NOT NULL,
  `es_id` varchar(55) NOT NULL,
  `total_amnt` float(10,2) NOT NULL,
  `dt_from` date NOT NULL,
  `dt_to` date NOT NULL,
  `assigned_on` datetime NOT NULL,
  `retrived_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_es_assign`
--

INSERT INTO `tbl_es_assign` (`id`, `ten_uid`, `es_id`, `total_amnt`, `dt_from`, `dt_to`, `assigned_on`, `retrived_on`) VALUES
(1, '3', '4', 50.00, '2024-10-26', '2024-10-27', '2024-10-26 13:12:52', '0000-00-00 00:00:00'),
(2, '2', '5', 500.00, '2024-10-26', '2024-10-26', '2024-10-26 14:26:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expenses`
--

CREATE TABLE `tbl_expenses` (
  `id` int(11) NOT NULL,
  `exp_name` varchar(255) NOT NULL,
  `exp_category` varchar(10) NOT NULL,
  `exp_amnt` float(10,2) NOT NULL,
  `exp_customer_details` text NOT NULL,
  `exp_payment_method` varchar(10) NOT NULL,
  `exp_ref_no` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `exp_receipt` varchar(255) NOT NULL,
  `exp_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_expenses`
--

INSERT INTO `tbl_expenses` (`id`, `exp_name`, `exp_category`, `exp_amnt`, `exp_customer_details`, `exp_payment_method`, `exp_ref_no`, `exp_date`, `exp_receipt`, `exp_note`) VALUES
(1, 'November Bill', '2', 4000.00, 'Celcor', 'Cash', '1231232131', '2024-11-01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exp_cat`
--

CREATE TABLE `tbl_exp_cat` (
  `id` int(11) NOT NULL,
  `exp_cat_name` varchar(250) NOT NULL,
  `exp_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_exp_cat`
--

INSERT INTO `tbl_exp_cat` (`id`, `exp_cat_name`, `exp_cat_desc`) VALUES
(2, 'Electricity', 'Electricity Bill\r\n'),
(3, 'Water ', 'Water Bill\r\n'),
(4, 'Internet', 'Internet or Wifi Bill\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_extra_services`
--

CREATE TABLE `tbl_extra_services` (
  `id` int(11) NOT NULL,
  `es_name` varchar(255) NOT NULL,
  `es_price` varchar(25) NOT NULL,
  `es_details` text NOT NULL,
  `es_branch` varchar(10) NOT NULL,
  `es_added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_extra_services`
--

INSERT INTO `tbl_extra_services` (`id`, `es_name`, `es_price`, `es_details`, `es_branch`, `es_added_date`) VALUES
(2, 'Repair', '0', 'Basic Repair', '1', '2024-11-29 12:15:23'),
(3, 'Other', '0', 'Other services that is not on the list', '1', '2024-12-04 11:39:59'),
(4, 'Laundry', '0', '', '1', '2024-12-04 11:41:00'),
(5, 'Plumbing Services', '0', '', '1', '2024-12-04 11:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `gal_img` varchar(255) NOT NULL,
  `gal_title` varchar(255) NOT NULL,
  `gal_slider_img` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `gal_img`, `gal_title`, `gal_slider_img`) VALUES
(1, '8ff14-apartment-1.jpg', 'Welcome to Dormify', 1),
(2, '12c84-apartment-2.jpg', 'An all in one residential rental solutions', 1),
(3, '81497-apartment-3.jpg', '', 1),
(5, 'a2639-apartment-4.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `inv_id` varchar(125) NOT NULL,
  `inv_for` varchar(125) NOT NULL,
  `inv_status` varchar(125) NOT NULL,
  `inv_amnt` float(10,2) NOT NULL,
  `inv_total` float(10,2) NOT NULL,
  `inv_ten_uid` varchar(55) NOT NULL,
  `inv_due_date` date NOT NULL,
  `inv_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `inv_id`, `inv_for`, `inv_status`, `inv_amnt`, `inv_total`, `inv_ten_uid`, `inv_due_date`, `inv_created`) VALUES
(1, '00001', 'Room / Bed Booking', 'PAID', 2000.00, 2000.00, '1', '0000-00-00', '2024-11-25'),
(2, '00002', 'Room / Bed Booking', 'PAID', 3000.00, 3000.00, '2', '0000-00-00', '2024-11-25'),
(3, '00003', 'Room / Bed Booking', 'PAID', 4000.00, 4000.00, '1', '0000-00-00', '2024-12-04'),
(4, '00004', 'Room / Bed Booking', 'PARTIALLY PAID', 5000.00, 5000.00, '2', '0000-00-00', '2024-12-04'),
(5, '00005', 'Room / Bed Booking', 'UNPAID', 4000.00, 4000.00, '3', '0000-00-00', '2024-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_items`
--

CREATE TABLE `tbl_invoice_items` (
  `id` int(11) NOT NULL,
  `inv_id` varchar(125) NOT NULL,
  `item_id` varchar(125) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` text NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_type` varchar(125) NOT NULL,
  `item_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_invoice_items`
--

INSERT INTO `tbl_invoice_items` (`id`, `inv_id`, `item_id`, `item_name`, `item_desc`, `item_price`, `item_type`, `item_added`) VALUES
(14, '00001', '3157840547', 'Room / Bed Booking', 'Room Name: Room 1 | Bed Name: King Size', 2000.00, 'Room / Bed', '2024-11-25'),
(15, '00002', '4164307222', 'Room / Bed Booking', 'Room Name: Room 2 | Bed Name: Double Deck', 3000.00, 'Room / Bed', '2024-11-25'),
(16, '00003', '825657453', 'Room / Bed Booking', 'Room Name: Room 1 | Bed Name: King Size', 4000.00, 'Room / Bed', '2024-12-04'),
(17, '00004', '187284479', 'Room / Bed Booking', 'Room Name: Room 2 | Bed Name: Queen Size', 5000.00, 'Room / Bed', '2024-12-04'),
(18, '00005', '398707825', 'Room / Bed Booking', 'Room Name: Room 1 | Bed Name: King Size', 4000.00, 'Room / Bed', '2024-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_payments`
--

CREATE TABLE `tbl_invoice_payments` (
  `id` int(11) NOT NULL,
  `inv_id` varchar(125) NOT NULL,
  `payment_id` varchar(125) NOT NULL,
  `payment_method` varchar(125) NOT NULL,
  `payment_trans_id` varchar(255) NOT NULL,
  `payment_amnt` float(10,2) NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_status` varchar(125) NOT NULL,
  `payment_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_invoice_payments`
--

INSERT INTO `tbl_invoice_payments` (`id`, `inv_id`, `payment_id`, `payment_method`, `payment_trans_id`, `payment_amnt`, `payment_date`, `payment_status`, `payment_details`) VALUES
(1, '00001', '624001817', 'cash', 'd1edc3538a7497b3114db5c67d23cbca', 2000.00, '2024-11-25 07:22:22', 'success', 'paid while booking'),
(2, '00002', '4284189967', 'cash', '2ebf8d8098c789c2b9a7a23b2c705484', 3000.00, '2024-11-25 07:22:41', 'success', 'paid while booking'),
(3, '00003', '924065642', 'cash', 'd794d815e957ae8bbe29aa69e3da63c0', 2000.00, '2024-12-04 12:26:35', 'success', ''),
(4, '00003', '3515690045', 'cash', 'cb7a0912d8bbc525bfd64e9aef1f8835', 2000.00, '2024-12-04 12:28:48', 'success', ''),
(5, '00004', '3419436264', 'cash', '5789616380be7c625a532112318a0bdd', 1000.00, '2024-12-04 12:29:55', 'success', ''),
(6, '00004', '459159831', 'cash', 'b69e8a1b58124c9401a9e597d1ca155e', 1000.00, '2024-12-04 12:31:10', 'success', 'partial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE `tbl_languages` (
  `id` int(11) NOT NULL,
  `lang_name` varchar(150) NOT NULL,
  `lang_abbr` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`id`, `lang_name`, `lang_abbr`) VALUES
(1, 'English', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notices`
--

CREATE TABLE `tbl_notices` (
  `id` int(11) NOT NULL,
  `notice_title` varchar(250) NOT NULL,
  `notice_details` text NOT NULL,
  `notice_branch` varchar(10) NOT NULL,
  `notice_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requests`
--

CREATE TABLE `tbl_requests` (
  `id` int(11) NOT NULL,
  `request_type` varchar(50) NOT NULL,
  `request_ten_uid` varchar(10) NOT NULL,
  `request_bed_uid` varchar(10) NOT NULL,
  `request_room_uid` varchar(10) NOT NULL,
  `request_es_uid` varchar(10) NOT NULL,
  `request_create_date` datetime NOT NULL,
  `request_update_date` datetime NOT NULL,
  `request_status` varchar(10) NOT NULL,
  `request_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_requests`
--

INSERT INTO `tbl_requests` (`id`, `request_type`, `request_ten_uid`, `request_bed_uid`, `request_room_uid`, `request_es_uid`, `request_create_date`, `request_update_date`, `request_status`, `request_notes`) VALUES
(1, 'EXTRA SERVICE', '3', '', '', '2', '2024-12-06 11:45:57', '2024-12-06 12:10:03', 'REJECTED', ''),
(2, 'EXTRA SERVICE', '3', '', '', '4', '2024-12-06 12:10:41', '2024-12-06 12:10:48', 'REJECTED', 'palaba'),
(3, 'EXTRA SERVICE', '5', '', '', '5', '2024-12-06 12:18:45', '2024-12-06 12:18:51', 'REJECTED', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `id` int(11) NOT NULL,
  `room_uid` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_details` text NOT NULL,
  `room_branch` varchar(5) NOT NULL,
  `room_price` float(10,2) NOT NULL,
  `room_status` varchar(2) NOT NULL,
  `room_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `room_uid`, `room_name`, `room_details`, `room_branch`, `room_price`, `room_status`, `room_added`) VALUES
(6, 1, 'Room 1', '', '1', 4000.00, '', '2024-11-25 08:06:41'),
(7, 2, 'Room 2', '', '1', 5000.00, '', '2024-11-25 08:06:54'),
(8, 3, 'Room 3', '', '1', 3000.00, '', '2024-12-05 14:38:46'),
(9, 4, 'Room 4', '', '1', 7000.00, '', '2024-12-05 14:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tenants`
--

CREATE TABLE `tbl_tenants` (
  `id` int(11) NOT NULL,
  `ten_name` varchar(155) NOT NULL,
  `ten_email` varchar(155) NOT NULL,
  `ten_pass` varchar(155) NOT NULL,
  `ten_uid` int(11) NOT NULL,
  `ten_gender` varchar(10) NOT NULL,
  `ten_dob` date NOT NULL,
  `ten_address` varchar(255) NOT NULL,
  `ten_contact` varchar(15) NOT NULL,
  `ten_pic` varchar(155) NOT NULL,
  `ten_emc_name` varchar(100) NOT NULL,
  `ten_emc_contact` varchar(50) NOT NULL,
  `ten_room` varchar(10) NOT NULL,
  `ten_bed` varchar(10) NOT NULL,
  `ten_branch` varchar(10) NOT NULL,
  `ten_months_lease` varchar(10) NOT NULL,
  `ten_deposite_amnt` float(10,2) NOT NULL,
  `ten_rent` float(10,2) NOT NULL,
  `ten_comments` text NOT NULL,
  `ten_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ten_lastlogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ten_isactive` varchar(10) NOT NULL,
  `ten_pass_changed` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_tenants`
--

INSERT INTO `tbl_tenants` (`id`, `ten_name`, `ten_email`, `ten_pass`, `ten_uid`, `ten_gender`, `ten_dob`, `ten_address`, `ten_contact`, `ten_pic`, `ten_emc_name`, `ten_emc_contact`, `ten_room`, `ten_bed`, `ten_branch`, `ten_months_lease`, `ten_deposite_amnt`, `ten_rent`, `ten_comments`, `ten_add_date`, `ten_lastlogin`, `ten_isactive`, `ten_pass_changed`) VALUES
(22, 'Joshua Federico', 'joshua.federico@example.com', '968fb7c3c27c07d872db2f231d4be9de', 1, 'M', '1999-07-15', 'Cabanatuan City, Nueva Ecija', '09171234567', 'f5482b2c7d18253a6039f3447d44ca11.jpg', 'Maria Federico', '09238247834', '', '', '1', '', 0.00, 0.00, '', '2024-12-05 06:33:03', '2024-12-05 13:33:03', '1', ''),
(23, 'Maria Jemia Daniela Palma', 'maria.jemia@example.com', '3e044808069839444a4e340a4af2e339', 2, 'F', '2000-06-22', 'Burgos, Cabanatuan City', '09272345678', '4143896a083bcd2ba60a4a0f3dca607c.jpg', 'Daniel Palma', '09272345678', '', '', '1', '', 0.00, 0.00, '', '2024-12-05 06:33:51', '2024-12-05 13:33:51', '1', ''),
(24, 'Dave Bryan', 'dave.bryan@example.com', 'f5f53313c0651ca9b45b7fb60189580e', 3, 'M', '1999-06-30', 'Mabini, Cabanatuan City', '09254567890', '18119d832c8512041a990c6315a5bd19.jpg', 'Michael Ico', '09254567890', '1', '1', '1', '', 0.00, 0.00, '', '2024-12-06 10:11:32', '2024-12-06 10:11:32', '1', ''),
(26, 'Elijah Joshua Dimaculangan', 'elijah.joshua@example.com', '7ef4692d10774c1e8d1dd4f55bbb6da7', 5, 'M', '1999-06-30', 'Zulueta, Cabanatuan City', '9515941044', 'ab512e031774ad2da7345283cd55d961.png', 'Sarah Dimaculangan', '9519241044', '', '', '1', '', 0.00, 0.00, '', '2024-12-05 06:37:34', '2024-12-05 13:37:34', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_email` varchar(155) NOT NULL,
  `user_joindate` date NOT NULL,
  `user_lastlogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_name` varchar(155) NOT NULL,
  `user_pass` varchar(155) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `user_branch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_email`, `user_joindate`, `user_lastlogin`, `user_name`, `user_pass`, `user_type`, `user_branch`) VALUES
(2, 'super@admin.com', '2023-02-17', '2024-10-22 05:12:36', 'Super Administrator', '21232f297a57a5a743894a0e4a801fc3', 'super_admin', '1'),
(8, 'admin@admin.com', '2023-02-23', '2024-10-22 05:12:46', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_pages`
--

CREATE TABLE `tbl_web_pages` (
  `id` int(11) NOT NULL,
  `web_page_name` varchar(250) NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `web_page_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_web_pages`
--

INSERT INTO `tbl_web_pages` (`id`, `web_page_name`, `show_in_menu`, `web_page_content`) VALUES
(1, 'Home Page', 1, '<h2>Effortless Dormitory Management at Your Fingertips</h2>\n\n<p>Welcome to our Dormitory Management System, a comprehensive platform designed to revolutionize the way dormitories and student accommodations are managed. Whether you&#39;re a dorm administrator, staff member, or resident, our system provides the tools you need to create a streamlined, efficient, and enjoyable living environment. Gone are the days of juggling spreadsheets, paperwork, and manual processes&mdash;our solution brings everything together in one easy-to-use interface.</p>\n\n<h2>Streamline Operations and Enhance Communication</h2>\n\n<p>Our Dormitory Management System automates every aspect of dorm management, from room assignments and occupancy tracking to maintenance requests and payment processing. With a centralized dashboard, administrators can manage all dormitory operations in real-time, reducing the workload and ensuring that everything runs smoothly. Residents can easily access important information, submit requests, and communicate with management, fostering a connected and responsive community.</p>\n\n<h2>A Better Living Experience for Everyone</h2>\n\n<p>Our system is not just about management; it&#39;s about creating a better living experience. With automated processes, instant communication, and real-time insights, administrators can focus more on enhancing the quality of dorm life. Residents enjoy a more organized, responsive, and hassle-free environment, where their needs are met promptly and efficiently.</p>\n\n<p>Experience the future of dormitory management today. Transform your dormitory into a well-organized, digitally managed community that thrives on efficiency and convenience.</p>\n'),
(4, 'Rooms', 1, '<h2>Room 1</h2>\r\n\r\n<p><a href=\"https://images.pexels.com/photos/1669799/pexels-photo-1669799.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1\" target=\"_self\"><img alt=\"\" src=\"https://images.pexels.com/photos/1669799/pexels-photo-1669799.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1\" /></a></p>\r\n\r\n<h2>Room 2</h2>\r\n\r\n<p><img alt=\"\" src=\"https://images.pexels.com/photos/3773582/pexels-photo-3773582.png?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1\" style=\"height:750px; width:1125px\" /></p>\r\n\r\n<h2>Room 3</h2>\r\n\r\n<p><img alt=\"\" src=\"https://images.pexels.com/photos/8031955/pexels-photo-8031955.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1\" /></p>\r\n\r\n<h2>Room 4</h2>\r\n\r\n<p><img alt=\"\" src=\"https://images.pexels.com/photos/7027989/pexels-photo-7027989.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1\" /></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_beds`
--
ALTER TABLE `tbl_beds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_complaints`
--
ALTER TABLE `tbl_complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_complaint_cat`
--
ALTER TABLE `tbl_complaint_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dhpms_options`
--
ALTER TABLE `tbl_dhpms_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_es_assign`
--
ALTER TABLE `tbl_es_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exp_cat`
--
ALTER TABLE `tbl_exp_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_extra_services`
--
ALTER TABLE `tbl_extra_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice_items`
--
ALTER TABLE `tbl_invoice_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice_payments`
--
ALTER TABLE `tbl_invoice_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notices`
--
ALTER TABLE `tbl_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_requests`
--
ALTER TABLE `tbl_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tenants`
--
ALTER TABLE `tbl_tenants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ten_uid` (`ten_uid`) USING BTREE;

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web_pages`
--
ALTER TABLE `tbl_web_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_beds`
--
ALTER TABLE `tbl_beds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_complaints`
--
ALTER TABLE `tbl_complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_complaint_cat`
--
ALTER TABLE `tbl_complaint_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_dhpms_options`
--
ALTER TABLE `tbl_dhpms_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_es_assign`
--
ALTER TABLE `tbl_es_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_exp_cat`
--
ALTER TABLE `tbl_exp_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_extra_services`
--
ALTER TABLE `tbl_extra_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_invoice_items`
--
ALTER TABLE `tbl_invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_invoice_payments`
--
ALTER TABLE `tbl_invoice_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_notices`
--
ALTER TABLE `tbl_notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_requests`
--
ALTER TABLE `tbl_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_tenants`
--
ALTER TABLE `tbl_tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_web_pages`
--
ALTER TABLE `tbl_web_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
