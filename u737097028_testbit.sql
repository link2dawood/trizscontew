-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2025 at 03:55 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u737097028_testbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'bitmadmin@bitsm.com', 'Mu78wsqBvX-#1@2'),
(2, 'BitMerchants', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `mode` varchar(50) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `upload` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `encrypt`
--

CREATE TABLE `encrypt` (
  `id` int(1) NOT NULL,
  `passkey` varchar(900) NOT NULL,
  `userid` varchar(50) DEFAULT '',
  `new` varchar(50) DEFAULT NULL,
  `ann` varchar(50) DEFAULT NULL,
  `bck` varchar(100) DEFAULT '',
  `bcktime` varchar(100) DEFAULT '',
  `protect` varchar(100) DEFAULT '',
  `thms` varchar(2000) NOT NULL,
  `prctcount` varchar(10) NOT NULL,
  `provider` varchar(200) NOT NULL,
  `auto` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `encrypt`
--

INSERT INTO `encrypt` (`id`, `passkey`, `userid`, `new`, `ann`, `bck`, `bcktime`, `protect`, `thms`, `prctcount`, `provider`, `auto`) VALUES
(1, '************************', '', '5.0.0', '', '', '', '', 'CryptiloBlueMGMBaseHorizonRefresh', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `account` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `repayment` varchar(100) NOT NULL,
  `purpose` varchar(800) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_from_user`
--

CREATE TABLE `message_from_user` (
  `id` int(255) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(255) NOT NULL,
  `merchant` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `tx_ref` varchar(100) NOT NULL,
  `flw_ref` varchar(100) NOT NULL,
  `order_ref` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `amount_settled` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(255) NOT NULL,
  `token` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `plan_name` varchar(45) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `rate` varchar(10) DEFAULT NULL,
  `rate_interval` varchar(100) DEFAULT NULL,
  `plan_duration` varchar(100) DEFAULT NULL,
  `roi` varchar(11) DEFAULT NULL,
  `progression` varchar(11) NOT NULL DEFAULT '0',
  `date_created` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `id` int(255) NOT NULL,
  `name` varchar(400) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `logo_width` varchar(10) NOT NULL,
  `name_header` varchar(10) NOT NULL,
  `logo_header` varchar(10) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `license_body` varchar(200) NOT NULL,
  `license_num` varchar(100) NOT NULL,
  `domain_url` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(150) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `plans` varchar(90) NOT NULL,
  `plan_interval` varchar(100) NOT NULL,
  `plan_span` varchar(100) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `growthcoin` varchar(60) NOT NULL,
  `btc` varchar(50) NOT NULL,
  `eth` varchar(50) NOT NULL,
  `usdt` varchar(50) NOT NULL,
  `bnb` varchar(50) NOT NULL,
  `referral` varchar(50) NOT NULL,
  `refinstance` varchar(50) NOT NULL,
  `dep` varchar(10) NOT NULL,
  `withd` varchar(10) NOT NULL,
  `inv` varchar(10) NOT NULL,
  `l_chat` varchar(700) NOT NULL,
  `start_pos` varchar(10) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `interest` varchar(50) NOT NULL,
  `management` varchar(50) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `penal` varchar(50) NOT NULL,
  `investment` varchar(5) NOT NULL,
  `loan` varchar(5) NOT NULL,
  `buysell` varchar(5) NOT NULL,
  `p2psend` varchar(5) NOT NULL,
  `bank` varchar(5) NOT NULL,
  `coinpayments` varchar(5) NOT NULL,
  `flutterwave` varchar(5) NOT NULL,
  `coingate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id`, `name`, `logo`, `logo_width`, `name_header`, `logo_header`, `parent`, `license_body`, `license_num`, `domain_url`, `email`, `number`, `address`, `country`, `lang`, `currency`, `plans`, `plan_interval`, `plan_span`, `fee`, `growthcoin`, `btc`, `eth`, `usdt`, `bnb`, `referral`, `refinstance`, `dep`, `withd`, `inv`, `l_chat`, `start_pos`, `icon`, `interest`, `management`, `insurance`, `penal`, `investment`, `loan`, `buysell`, `p2psend`, `bank`, `coinpayments`, `flutterwave`, `coingate`) VALUES
(1, '<span class=\"theme-secondary-color\">Bit</span><span class=\"theme-primary-color\">Merchants</span>', 'upload/1754664119.png', '43', 'showy', 'hido', 'a', 'a', 'a', 'bitmerchants.group', 'support@bitmerchants.group', 'a', 'a', 'a', 'en', 'USD', '1000-10000-1.5|10001-50000-2|50001-100000-2.5|100001-1000000-3', '1-hours|1-days|1-days|1-days', '4-hours|1-months|1-months|1-months', '1', 'BTC', '+57591.73', '+2185.86', '0', '+305.37', '2', 'all', 'no', 'no', 'no', '', 'right', 'upload/17546641205.png', '1.5', '0.01', '0.1', '1', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `id` int(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `refuser` varchar(50) DEFAULT NULL,
  `refemail` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `asset` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` int(255) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(100) NOT NULL,
  `host` varchar(100) NOT NULL,
  `auth` varchar(90) NOT NULL,
  `security` varchar(20) NOT NULL,
  `port` varchar(20) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `username`, `password`, `host`, `auth`, `security`, `port`, `adminemail`, `name`) VALUES
(1, 'support@bitmerchants.group', '~LIei:m3)v&+8N', 'smtp.titan.email', 'true', 'ssl', '465', 'admin@bitmerchants.group', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `token` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `priority` varchar(11) NOT NULL,
  `details` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reply` text DEFAULT NULL,
  `date_replied` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'open',
  `cust_reply` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(255) NOT NULL,
  `name` varchar(99) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  `script` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `name`, `img`, `data`, `script`) VALUES
(1, 'Cryptilo Blue', 'cryptiloblue.jpg', 'cryptilobluev5.0.0.css', 'AppScripts500');

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(255) NOT NULL,
  `token` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `avatar` varchar(50) NOT NULL DEFAULT 'bundle/account/avatars/err.png',
  `fname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `issued_country` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `deposit` varchar(50) DEFAULT '0',
  `profit` varchar(10) DEFAULT '0',
  `bonus` varchar(10) DEFAULT '0',
  `ref_bonus` varchar(10) DEFAULT '0',
  `crypto_btc` varchar(50) DEFAULT '0',
  `message` varchar(255) DEFAULT NULL,
  `ref_code` varchar(30) DEFAULT NULL,
  `refered_by` varchar(100) DEFAULT NULL,
  `doc_type` varchar(50) DEFAULT NULL,
  `first_doc` varchar(500) DEFAULT NULL,
  `second_doc` varchar(500) DEFAULT NULL,
  `verif_status` varchar(50) DEFAULT NULL,
  `verif_complete` varchar(50) DEFAULT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_addr` varchar(32) DEFAULT 'USD',
  `otp_2fa` varchar(10) NOT NULL,
  `crypto_eth` varchar(50) DEFAULT '0',
  `crypto_bnb` varchar(50) DEFAULT '0',
  `crypto_usdt` varchar(50) DEFAULT '0',
  `crypto_doge` varchar(100) NOT NULL,
  `crypto_xlm` varchar(100) NOT NULL,
  `crypto_xrp` varchar(100) NOT NULL,
  `crypto_usdc` varchar(100) NOT NULL,
  `crypto_sol` varchar(100) NOT NULL,
  `crypto_trx` varchar(100) NOT NULL,
  `crypto_ltc` varchar(100) NOT NULL,
  `crypto_paxg` varchar(100) NOT NULL,
  `crypto_ton` varchar(100) NOT NULL,
  `crypto_shib` varchar(100) NOT NULL,
  `crypto_ada` varchar(100) NOT NULL,
  `crypto_avax` varchar(100) NOT NULL,
  `crypto_flr` varchar(100) NOT NULL,
  `crypto_link` varchar(100) NOT NULL,
  `crypto_wbtc` varchar(100) NOT NULL,
  `crypto_bch` varchar(100) NOT NULL,
  `crypto_gno` varchar(100) NOT NULL,
  `crypto_woo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `fname`, `lname`, `mname`, `email`, `phone`, `age`, `dob`, `country`, `nationality`, `issued_country`, `city`, `zip_code`, `address`, `password`, `deposit`, `profit`, `bonus`, `ref_bonus`, `crypto_btc`, `message`, `ref_code`, `refered_by`, `doc_type`, `first_doc`, `second_doc`, `verif_status`, `verif_complete`, `date_registered`, `ip_addr`, `otp_2fa`, `crypto_eth`, `crypto_bnb`, `crypto_usdt`, `crypto_doge`, `crypto_xlm`, `crypto_xrp`, `crypto_usdc`, `crypto_sol`, `crypto_trx`, `crypto_ltc`, `crypto_paxg`, `crypto_ton`, `crypto_shib`, `crypto_ada`, `crypto_avax`, `crypto_flr`, `crypto_link`, `crypto_wbtc`, `crypto_bch`, `crypto_gno`, `crypto_woo`) VALUES
(38, 'bundle/account/avatars/err.png', 'Ward', 'Wally', 'Was', 'wardwally12@gmail.com', '', '33', '1991-06-12', 'Algeria', 'Algeria', 'Algeria', 'Alaska', '00789', 'North Dakota Street', '1234Mmmmm', '0:0:0', '0', 'USDC', '0', '0.30887', '', 'wardwally12141', '', 'government-issued-iD', 'uploads/1724847785.png', 'uploads/17248477875.png', 'yes', 'yes', '2024-08-28 12:20:51', 'USD', 'yes', '0.0642', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_detail`
--

CREATE TABLE `user_account_detail` (
  `id` int(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `bank_name` varchar(30) NOT NULL DEFAULT 'Not specified',
  `account_name` varchar(30) NOT NULL DEFAULT 'Not specified',
  `account_number` varchar(20) NOT NULL DEFAULT 'Not specified',
  `routing_number` varchar(100) DEFAULT NULL,
  `bitcoin` varchar(100) NOT NULL DEFAULT 'Not specified',
  `ethereum` varchar(100) DEFAULT 'Not specified',
  `litecoin` varchar(100) DEFAULT 'Not specified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_address`
--

CREATE TABLE `wallet_address` (
  `id` int(10) NOT NULL,
  `bitcoin` varchar(100) DEFAULT NULL,
  `ethereum` varchar(100) DEFAULT NULL,
  `bitcoin_cash` varchar(100) DEFAULT NULL,
  `litecoin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wallet_address`
--

INSERT INTO `wallet_address` (`id`, `bitcoin`, `ethereum`, `bitcoin_cash`, `litecoin`) VALUES
(2, '1E9m6Y8yhELgK5T9Uk5zSVf2GGXqoxrE4K', '0xc94b9cd7e123b67cb0b6265bc15e37e5437e08af', '0xc94b9cd7e123b67cb0b6265bc15e37e5437e08af', 'TMg5YUtJ9BK72XSmHrEtQFk1V1zJgpnm4L');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal_request`
--

CREATE TABLE `withdrawal_request` (
  `id` int(255) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `amount` varchar(11) DEFAULT NULL,
  `with_type` varchar(30) DEFAULT NULL,
  `wal_address` varchar(100) NOT NULL DEFAULT '-',
  `acc_name` varchar(30) NOT NULL DEFAULT '-',
  `bank_name` varchar(30) NOT NULL DEFAULT '-',
  `acc_number` varchar(20) NOT NULL DEFAULT '-',
  `rou_number` varchar(20) NOT NULL DEFAULT '-',
  `status` varchar(15) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `paypal` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encrypt`
--
ALTER TABLE `encrypt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_from_user`
--
ALTER TABLE `message_from_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ref_code` (`ref_code`);

--
-- Indexes for table `user_account_detail`
--
ALTER TABLE `user_account_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `wallet_address`
--
ALTER TABLE `wallet_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal_request`
--
ALTER TABLE `withdrawal_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `encrypt`
--
ALTER TABLE `encrypt`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `message_from_user`
--
ALTER TABLE `message_from_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `user_account_detail`
--
ALTER TABLE `user_account_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `wallet_address`
--
ALTER TABLE `wallet_address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `withdrawal_request`
--
ALTER TABLE `withdrawal_request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
