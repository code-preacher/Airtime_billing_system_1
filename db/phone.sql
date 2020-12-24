

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passkey` varchar(200) NOT NULL
);



INSERT INTO `admin` (`id`, `email`, `passkey`) VALUES
(1, 'a@a.com', '123456');


CREATE TABLE `balance` (
  `id` int(30) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `bal` double NOT NULL
) ;



CREATE TABLE `browsing` (
  `id` int(30) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `charge` double NOT NULL,
  `ibalance` double NOT NULL,
  `cbalance` double NOT NULL,
  `date` varchar(200) NOT NULL
) ;


INSERT INTO `browsing` (`id`, `mobile`, `website`, `duration`, `charge`, `ibalance`, `cbalance`, `date`) VALUES
(1, '800', 'g.com', '2', 1, 560, 558, '10-09-18 @ 9:18 AM'),
(2, '800', 'd.com', '4', 1, 558, 554, '10-09-18 @ 9:29 AM'),
(3, '800', 'lo.ml', '10', 10, 554, 544, '10-09-18 @ 9:44 AM'),
(4, '800', 'www.abeg.com', '20', 20, 540, 520, '12-09-18 @ 5:33 PM'),
(5, '800', 'g.com', '10', 10, 516, 506, '12-09-18 @ 6:38 PM'),
(6, '800', 'ko.com', '10', 10, 506, 496, '12-09-18 @ 6:39 PM'),
(7, '800', 'j.com', '6', 6, 496, 490, '12-09-18 @ 6:40 PM');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(30) NOT NULL,
  `digit` varchar(200) NOT NULL,
  `amount` int(30) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `digit`, `amount`, `status`) VALUES
(3, '699706207012', 100, 'used'),
(4, '6997062070129', 100, 'used'),
(5, '835903012554', 100, 'used'),
(7, '996522057053', 400, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `complian`
--

CREATE TABLE `complian` (
  `id` int(30) NOT NULL,
  `chat` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
);



CREATE TABLE `history` (
  `id` int(30) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `contactno` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `charge` double NOT NULL,
  `ibalance` double NOT NULL,
  `cbalance` double NOT NULL,
  `date` varchar(200) NOT NULL
);

CREATE TABLE `recharge` (
  `id` int(30) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `card` varchar(200) NOT NULL,
  `amount` int(30) NOT NULL,
  `balance` double NOT NULL,
  `date` varchar(200) NOT NULL
) ;


CREATE TABLE `sms` (
  `id` int(30) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `contactno` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `charge` double NOT NULL,
  `ibalance` double NOT NULL,
  `cbalance` double NOT NULL,
  `date` varchar(200) NOT NULL
) ;


CREATE TABLE `user_data` (
  `id` int(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `passkey` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ;


CREATE TABLE `user_no` (
  `id` int(30) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `plan` varchar(200) NOT NULL
);



ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `browsing`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `complian`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `recharge`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_no`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `balance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `browsing`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `card`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `complian`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `history`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `recharge`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sms`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user_data`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user_no`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
