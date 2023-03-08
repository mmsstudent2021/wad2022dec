#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (1, 'Laurie Feest', 'glover.rebeka@hotmail.com', 'female', '042 Vincenzo Trace\nNolanfurt, ND 77155-8107', '2006-11-29 03:04:02', '2008-11-01 16:36:30');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (2, 'Tanner Halvorson', 'mariane06@vonfahey.net', 'male', '3997 Annetta Port Apt. 107\nPort Lorenaland, MS 70746', '1971-12-14 17:19:28', '2013-12-24 16:22:23');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (3, 'Miss Marian Considin', 'shanahan.priscilla@hudson.com', 'male', '19662 Kreiger Rapid\nNorth Zeldamouth, AL 95614', '1978-11-29 19:46:57', '2010-08-05 23:56:52');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (4, 'Theodore Waelchi', 'ybauch@gerhold.info', 'male', '75864 Quinn Villages\nEast Lorenton, KY 75969-8485', '1994-02-21 09:17:01', '1970-03-23 20:22:08');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (5, 'Marcia Huels', 'franecki.julia@mayersimonis.com', 'male', '3671 Mayer Via\nNorth Melvinstad, FL 23271', '2007-05-08 01:26:08', '2009-03-25 22:13:49');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (6, 'Percival Padberg', 'dsauer@hotmail.com', 'male', '7479 Clark Field\nNorth Mose, CO 16512', '1977-03-31 09:55:17', '1996-07-03 20:28:14');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (7, 'Dr. Ibrahim Grady I', 'cronin.leonard@webermurphy.net', 'female', '954 Feeney Ports Apt. 298\nLake Rosario, AZ 70029-6038', '1989-09-22 16:37:27', '1973-10-31 06:31:48');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (8, 'Shanie Wolff V', 'wilderman.kamron@yahoo.com', 'male', '207 Coy Stravenue\nRunolfsdottirmouth, ID 15302-4955', '1970-06-18 19:15:01', '2021-09-29 23:34:52');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (9, 'Guido Kohler', 'muller.georgianna@koepp.net', 'male', '73923 Rigoberto Pine Suite 662\nSouth Stacey, AK 90425-9884', '1991-02-15 07:55:39', '1989-06-30 21:49:59');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (10, 'Prof. Celestine Ondr', 'israel.stanton@mertz.info', 'male', '75047 Rahsaan Turnpike Apt. 280\nNew Molliemouth, TX 17279-6738', '1995-09-25 03:43:32', '2004-03-14 16:17:14');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (11, 'Althea Waters', 'filomena16@koepp.net', 'male', '8526 Santa Greens Suite 330\nLake Davonte, WV 35447-7683', '2008-03-20 08:06:33', '2010-12-09 21:15:09');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (12, 'Dr. Efren Medhurst I', 'mmarks@stiedemann.com', 'male', '238 Luz Circle\nNorth Bernhardfurt, HI 82644', '1987-03-15 02:19:15', '1996-01-20 07:41:26');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (13, 'Prof. Morton Von', 'amari14@reichert.com', 'male', '74687 Steuber Expressway\nWest Granvillemouth, PA 89840', '2015-03-22 10:28:59', '2004-01-21 05:11:03');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (14, 'Cecelia O\'Kon', 'darrel19@hamill.net', 'female', '7926 Pagac Greens Apt. 577\nPort Adrielchester, MD 83415-0067', '1991-07-02 04:38:34', '2010-07-21 23:57:29');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (15, 'Kaci Schroeder', 'veffertz@rau.org', 'female', '4211 Bruce Road Apt. 578\nWest Albatown, ND 79632', '1998-12-08 02:26:06', '2020-09-17 04:12:18');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (16, 'Darby Williamson', 'margaretta.kihn@hoegerortiz.info', 'male', '768 Jones Points Suite 491\nWest Hattietown, TX 76280', '2021-12-09 22:08:56', '1984-03-07 05:31:22');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (17, 'Madeline Bashirian', 'creichel@hamillgraham.info', 'female', '625 Thompson Park Suite 581\nPort Lina, NM 47011', '1993-02-24 03:58:39', '1985-09-23 01:44:09');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (18, 'Darian Zulauf III', 'cassin.clovis@yahoo.com', 'male', '21110 Ewald Gardens\nZiemannstad, VA 47600-3868', '2009-02-25 08:01:21', '2017-08-24 06:46:29');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (19, 'Miss Kellie Kessler ', 'alden64@hotmail.com', 'female', '2706 Wyman Road Suite 628\nHeathcotestad, RI 95787-5512', '1989-09-04 06:22:30', '1997-03-29 14:04:03');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (20, 'Devon Daugherty', 'davis.lucius@gmail.com', 'female', '3976 Willms Ports Suite 501\nRatkeside, VA 89016', '2003-10-12 21:47:07', '2016-10-22 15:28:47');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (21, 'Felicia Olson', 'aruecker@kemmer.info', 'female', '182 Roel Springs\nTonymouth, NJ 77694-1257', '2004-09-28 10:18:42', '1974-09-27 06:13:48');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (22, 'Johan Rodriguez I', 'oheaney@gmail.com', 'female', '9698 Fisher Overpass Apt. 660\nEleanoreland, CA 33796-2372', '2011-07-22 14:07:34', '1989-10-30 06:22:17');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (23, 'Jarrett Gislason', 'donnelly.mara@millerschamberger.com', 'male', '30430 Jazmyne Springs Suite 137\nSouth Alexane, SD 24745', '2020-07-22 10:12:41', '2005-02-23 08:39:04');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (24, 'Winifred Will', 'zjohnston@hotmail.com', 'male', '11119 Tyler Vista Suite 359\nGottliebchester, WY 52936-4026', '2000-05-19 16:59:41', '2003-08-20 19:13:05');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (25, 'Adam Keebler', 'soledad10@hotmail.com', 'female', '4176 Kshlerin Extension\nLabadiemouth, FL 31104-7908', '2003-01-07 04:28:20', '2009-04-02 21:07:32');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (26, 'Mckenzie Larson', 'kreiger.brown@gmail.com', 'female', '1591 Dickens Avenue Apt. 181\nLake Donavonland, MD 15321-2284', '1992-06-08 05:51:00', '1983-10-12 07:38:55');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (27, 'Johann Cummings', 'cronin.stephen@hessel.com', 'male', '59742 Nolan Well Apt. 984\nNew Marilyneside, TN 53900-1677', '1975-04-23 14:36:25', '1998-05-31 22:01:25');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (28, 'Harvey Botsford MD', 'rachelle25@gmail.com', 'female', '967 Greyson Loaf\nWalshburgh, LA 95443-3802', '1985-07-22 14:16:53', '2009-10-11 09:47:52');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (29, 'Russ Keeling', 'obode@hotmail.com', 'male', '5994 Skye View\nToymouth, WV 74757-7198', '2015-07-04 04:27:55', '1971-06-15 23:05:14');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (30, 'Ibrahim Reichel', 'wolf.santos@yahoo.com', 'male', '37382 Hessel Circle Suite 551\nNorth Daphney, WI 60426-7469', '1970-08-06 06:04:04', '1991-01-19 06:15:27');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (31, 'Melisa Runolfsson', 'dubuque.corine@gmail.com', 'female', '41731 Luettgen Courts Apt. 580\nGreenholthaven, KS 59362-5805', '1991-06-26 23:18:28', '2020-08-03 00:49:13');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (32, 'Miss Amya Trantow', 'ally.kling@hotmail.com', 'female', '66278 Paucek Estates Apt. 496\nEast Valliehaven, SD 57149', '1981-10-31 06:38:58', '1996-06-28 09:32:39');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (33, 'Mrs. Aletha Murphy D', 'nora30@gmail.com', 'female', '26724 Kuphal Light Suite 979\nRatkeborough, RI 86379-9997', '2008-02-12 21:24:47', '1988-10-05 12:31:07');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (34, 'Madelynn VonRueden', 'keven.langosh@yahoo.com', 'male', '3152 Jailyn Estates Apt. 854\nWileyborough, OH 44458', '2008-05-20 14:10:38', '2021-05-08 02:59:01');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (35, 'Moises Stark', 'elouise93@yahoo.com', 'male', '8275 Jeanne Pike Apt. 635\nNorth Lorihaven, IA 59063', '2007-11-12 23:51:32', '2002-03-07 05:27:40');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (36, 'Kellie Murazik', 'lubowitz.myrna@stokes.com', 'female', '00578 Romaguera Manors Suite 592\nNorth Terrill, NE 06441-3002', '1972-05-27 17:45:24', '1979-05-21 20:55:33');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (37, 'Jace Barrows', 'langosh.aditya@hills.com', 'female', '70380 Alessandro Common Apt. 669\nBogisichchester, IA 94156', '1991-04-03 21:58:02', '2019-08-02 18:36:10');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (38, 'Lawson Mills', 'kiara99@yahoo.com', 'female', '626 Antonetta Valley Suite 047\nNorth Gabriel, ID 30675-0833', '1990-07-23 07:18:43', '2014-01-31 05:35:53');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (39, 'Kelvin Gaylord', 'eliane.rolfson@lynchgislason.org', 'male', '668 Jackie Glens\nMyrnashire, VA 17460', '1981-12-13 12:14:40', '1975-07-06 07:26:57');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (40, 'Miss Beverly Gibson ', 'ttorphy@yahoo.com', 'male', '63268 Stracke Springs Apt. 795\nEast Brendanmouth, WY 73929', '2014-02-04 13:39:16', '1981-09-09 18:15:19');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (41, 'Pearline Herman MD', 'kaylin.haley@gmail.com', 'female', '9517 Alessandra Via\nLynnmouth, DC 16138', '2018-08-01 07:08:50', '1997-07-24 01:00:29');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (42, 'Candice Abernathy Jr', 'macy15@mcdermottzboncak.com', 'female', '36418 Astrid Pine\nMurphyville, OK 00177', '2018-07-20 06:32:42', '1976-03-19 20:12:25');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (43, 'Daphne Ullrich DVM', 'murray.nicholaus@hansendouglas.com', 'female', '012 Veum Glens\nPort Cathrineside, NY 41823-3422', '2010-01-06 09:04:14', '2019-04-23 04:50:55');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (44, 'Maxine Stracke', 'pfeffer.mariana@blick.com', 'female', '707 Phyllis Forest\nNew Vladimirport, MN 05841', '2014-11-22 16:25:36', '1975-12-25 00:19:25');
INSERT INTO `users` (`id`, `name`, `email`, `gender`, `address`, `updated_at`, `created_at`) VALUES (45, 'Effie Muller Sr.', 'jimmie.luettgen@yahoo.com', 'male', '9455 Graham Square Suite 242\nWaldoborough, NM 68689-1093', '2007-01-17 10:01:09', '1978-07-16 19:24:32');


