-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Nov 2023 pada 18.27
-- Versi server: 8.0.27
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animashit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `geo_countries`
--

CREATE TABLE `geo_countries` (
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `abv` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '' COMMENT 'ISO 3661-1 alpha-2',
  `abv3` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'ISO 3661-1 alpha-3',
  `abv3_alt` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'ISO 3661-1 numeric',
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `geo_countries`
--

INSERT INTO `geo_countries` (`name`, `abv`, `abv3`, `abv3_alt`, `code`, `slug`) VALUES
('Afghanistan', 'AF', 'AFG', NULL, '4', 'afghanistan'),
('Aland Islands', 'AX', 'ALA', NULL, '248', 'aland-islands'),
('Albania', 'AL', 'ALB', NULL, '8', 'albania'),
('Algeria', 'DZ', 'DZA', NULL, '12', 'algeria'),
('American Samoa', 'AS', 'ASM', NULL, '16', 'american-samoa'),
('Andorra', 'AD', 'AND', NULL, '20', 'andorra'),
('Angola', 'AO', 'AGO', NULL, '24', 'angola'),
('Anguilla', 'AI', 'AIA', NULL, '660', 'anguilla'),
('Antigua and Barbuda', 'AG', 'ATG', NULL, '28', 'antigua-and-barbuda'),
('Argentina', 'AR', 'ARG', NULL, '32', 'argentina'),
('Armenia', 'AM', 'ARM', NULL, '51', 'armenia'),
('Aruba', 'AW', 'ABW', NULL, '533', 'aruba'),
('Australia', 'AU', 'AUS', NULL, '36', 'australia'),
('Austria', 'AT', 'AUT', NULL, '40', 'austria'),
('Azerbaijan', 'AZ', 'AZE', NULL, '31', 'azerbaijan'),
('Bahamas', 'BS', 'BHS', NULL, '44', 'bahamas'),
('Bahrain', 'BH', 'BHR', NULL, '48', 'bahrain'),
('Bangladesh', 'BD', 'BGD', NULL, '50', 'bangladesh'),
('Barbados', 'BB', 'BRB', NULL, '52', 'barbados'),
('Belarus', 'BY', 'BLR', NULL, '112', 'belarus'),
('Belgium', 'BE', 'BEL', NULL, '56', 'belgium'),
('Belize', 'BZ', 'BLZ', NULL, '84', 'belize'),
('Benin', 'BJ', 'BEN', NULL, '204', 'benin'),
('Bermuda', 'BM', 'BMU', NULL, '60', 'bermuda'),
('Bhutan', 'BT', 'BTN', NULL, '64', 'bhutan'),
('Bolivia', 'BO', 'BOL', NULL, '68', 'bolivia'),
('Bosnia and Herzegovina', 'BA', 'BIH', NULL, '70', 'bosnia-and-herzegovina'),
('Botswana', 'BW', 'BWA', NULL, '72', 'botswana'),
('Brazil', 'BR', 'BRA', NULL, '76', 'brazil'),
('British Virgin Islands', 'VG', 'VGB', NULL, '92', 'british-virgin-islands'),
('Brunei Darussalam', 'BN', 'BRN', NULL, '96', 'brunei-darussalam'),
('Bulgaria', 'BG', 'BGR', NULL, '100', 'bulgaria'),
('Burkina Faso', 'BF', 'BFA', NULL, '854', 'burkina-faso'),
('Burundi', 'BI', 'BDI', NULL, '108', 'burundi'),
('Cambodia', 'KH', 'KHM', NULL, '116', 'cambodia'),
('Cameroon', 'CM', 'CMR', NULL, '120', 'cameroon'),
('Canada', 'CA', 'CAN', NULL, '124', 'canada'),
('Cape Verde', 'CV', 'CPV', NULL, '132', 'cape-verde'),
('Cayman Islands', 'KY', 'CYM', NULL, '136', 'cayman-islands'),
('Central African Republic', 'CF', 'CAF', NULL, '140', 'central-african-republic'),
('Chad', 'TD', 'TCD', NULL, '148', 'chad'),
('Chile', 'CL', 'CHL', 'CHI', '152', 'chile'),
('China', 'CN', 'CHN', NULL, '156', 'china'),
('Colombia', 'CO', 'COL', NULL, '170', 'colombia'),
('Comoros', 'KM', 'COM', NULL, '174', 'comoros'),
('Congo', 'CG', 'COG', NULL, '178', 'congo'),
('Cook Islands', 'CK', 'COK', NULL, '184', 'cook-islands'),
('Costa Rica', 'CR', 'CRI', NULL, '188', 'costa-rica'),
('Cote d\'Ivoire', 'CI', 'CIV', NULL, '384', 'cote-divoire'),
('Croatia', 'HR', 'HRV', NULL, '191', 'croatia'),
('Cuba', 'CU', 'CUB', NULL, '192', 'cuba'),
('Cyprus', 'CY', 'CYP', NULL, '196', 'cyprus'),
('Czech Republic', 'CZ', 'CZE', NULL, '203', 'czech-republic'),
('Democratic Republic of the Congo', 'CD', 'COD', NULL, '180', 'democratic-republic-of-congo'),
('Denmark', 'DK', 'DNK', NULL, '208', 'denmark'),
('Djibouti', 'DJ', 'DJI', NULL, '262', 'djibouti'),
('Dominica', 'DM', 'DMA', NULL, '212', 'dominica'),
('Dominican Republic', 'DO', 'DOM', NULL, '214', 'dominican-republic'),
('Ecuador', 'EC', 'ECU', NULL, '218', 'ecuador'),
('Egypt', 'EG', 'EGY', NULL, '818', 'egypt'),
('El Salvador', 'SV', 'SLV', NULL, '222', 'el-salvador'),
('Equatorial Guinea', 'GQ', 'GNQ', NULL, '226', 'equatorial-guinea'),
('Eritrea', 'ER', 'ERI', NULL, '232', 'eritrea'),
('Estonia', 'EE', 'EST', NULL, '233', 'estonia'),
('Ethiopia', 'ET', 'ETH', NULL, '231', 'ethiopia'),
('Faeroe Islands', 'FO', 'FRO', NULL, '234', 'faeroe-islands'),
('Falkland Islands', 'FK', 'FLK', NULL, '238', 'falkland-islands'),
('Fiji', 'FJ', 'FJI', NULL, '242', 'fiji'),
('Finland', 'FI', 'FIN', NULL, '246', 'finland'),
('France', 'FR', 'FRA', NULL, '250', 'france'),
('French Guiana', 'GF', 'GUF', NULL, '254', 'french-guiana'),
('French Polynesia', 'PF', 'PYF', NULL, '258', 'french-polynesia'),
('Gabon', 'GA', 'GAB', NULL, '266', 'gabon'),
('Gambia', 'GM', 'GMB', NULL, '270', 'gambia'),
('Georgia', 'GE', 'GEO', NULL, '268', 'georgia'),
('Germany', 'DE', 'DEU', NULL, '276', 'germany'),
('Ghana', 'GH', 'GHA', NULL, '288', 'ghana'),
('Gibraltar', 'GI', 'GIB', NULL, '292', 'gibraltar'),
('Greece', 'GR', 'GRC', NULL, '300', 'greece'),
('Greenland', 'GL', 'GRL', NULL, '304', 'greenland'),
('Grenada', 'GD', 'GRD', NULL, '308', 'grenada'),
('Guadeloupe', 'GP', 'GLP', NULL, '312', 'guadeloupe'),
('Guam', 'GU', 'GUM', NULL, '316', 'guam'),
('Guatemala', 'GT', 'GTM', NULL, '320', 'guatemala'),
('Guernsey', 'GG', 'GGY', NULL, '831', 'guernsey'),
('Guinea', 'GN', 'GIN', NULL, '324', 'guinea'),
('Guinea-Bissau', 'GW', 'GNB', NULL, '624', 'guinea-bissau'),
('Guyana', 'GY', 'GUY', NULL, '328', 'guyana'),
('Haiti', 'HT', 'HTI', NULL, '332', 'haiti'),
('Holy See', 'VA', 'VAT', NULL, '336', 'holy-see'),
('Honduras', 'HN', 'HND', NULL, '340', 'honduras'),
('Hong Kong', 'HK', 'HKG', NULL, '344', 'hong-kong'),
('Hungary', 'HU', 'HUN', NULL, '348', 'hungary'),
('Iceland', 'IS', 'ISL', NULL, '352', 'iceland'),
('India', 'IN', 'IND', NULL, '356', 'india'),
('Indonesia', 'ID', 'IDN', NULL, '360', 'indonesia'),
('Iran', 'IR', 'IRN', NULL, '364', 'iran'),
('Iraq', 'IQ', 'IRQ', NULL, '368', 'iraq'),
('Ireland', 'IE', 'IRL', NULL, '372', 'ireland'),
('Isle of Man', 'IM', 'IMN', NULL, '833', 'isle-of-man'),
('Israel', 'IL', 'ISR', NULL, '376', 'israel'),
('Italy', 'IT', 'ITA', NULL, '380', 'italy'),
('Jamaica', 'JM', 'JAM', NULL, '388', 'jamaica'),
('Japan', 'JP', 'JPN', NULL, '392', 'japan'),
('Jersey', 'JE', 'JEY', NULL, '832', 'jersey'),
('Jordan', 'JO', 'JOR', NULL, '400', 'jordan'),
('Kazakhstan', 'KZ', 'KAZ', NULL, '398', 'kazakhstan'),
('Kenya', 'KE', 'KEN', NULL, '404', 'kenya'),
('Kiribati', 'KI', 'KIR', NULL, '296', 'kiribati'),
('Kuwait', 'KW', 'KWT', NULL, '414', 'kuwait'),
('Kyrgyzstan', 'KG', 'KGZ', NULL, '417', 'kyrgyzstan'),
('Laos', 'LA', 'LAO', NULL, '418', 'laos'),
('Latvia', 'LV', 'LVA', NULL, '428', 'latvia'),
('Lebanon', 'LB', 'LBN', NULL, '422', 'lebanon'),
('Lesotho', 'LS', 'LSO', NULL, '426', 'lesotho'),
('Liberia', 'LR', 'LBR', NULL, '430', 'liberia'),
('Libyan Arab Jamahiriya', 'LY', 'LBY', NULL, '434', 'libyan-arab-jamahiriya'),
('Liechtenstein', 'LI', 'LIE', NULL, '438', 'liechtenstein'),
('Lithuania', 'LT', 'LTU', NULL, '440', 'lithuania'),
('Luxembourg', 'LU', 'LUX', NULL, '442', 'luxembourg'),
('Macao', 'MO', 'MAC', NULL, '446', 'macao'),
('Macedonia', 'MK', 'MKD', NULL, '807', 'macedonia'),
('Madagascar', 'MG', 'MDG', NULL, '450', 'madagascar'),
('Malawi', 'MW', 'MWI', NULL, '454', 'malawi'),
('Malaysia', 'MY', 'MYS', NULL, '458', 'malaysia'),
('Maldives', 'MV', 'MDV', NULL, '462', 'maldives'),
('Mali', 'ML', 'MLI', NULL, '466', 'mali'),
('Malta', 'MT', 'MLT', NULL, '470', 'malta'),
('Marshall Islands', 'MH', 'MHL', NULL, '584', 'marshall-islands'),
('Martinique', 'MQ', 'MTQ', NULL, '474', 'martinique'),
('Mauritania', 'MR', 'MRT', NULL, '478', 'mauritania'),
('Mauritius', 'MU', 'MUS', NULL, '480', 'mauritius'),
('Mayotte', 'YT', 'MYT', NULL, '175', 'mayotte'),
('Mexico', 'MX', 'MEX', NULL, '484', 'mexico'),
('Micronesia', 'FM', 'FSM', NULL, '583', 'micronesia'),
('Moldova', 'MD', 'MDA', NULL, '498', 'moldova'),
('Monaco', 'MC', 'MCO', NULL, '492', 'monaco'),
('Mongolia', 'MN', 'MNG', NULL, '496', 'mongolia'),
('Montenegro', 'ME', 'MNE', NULL, '499', 'montenegro'),
('Montserrat', 'MS', 'MSR', NULL, '500', 'montserrat'),
('Morocco', 'MA', 'MAR', NULL, '504', 'morocco'),
('Mozambique', 'MZ', 'MOZ', NULL, '508', 'mozambique'),
('Myanmar', 'MM', 'MMR', 'BUR', '104', 'myanmar'),
('Namibia', 'NA', 'NAM', NULL, '516', 'namibia'),
('Nauru', 'NR', 'NRU', NULL, '520', 'nauru'),
('Nepal', 'NP', 'NPL', NULL, '524', 'nepal'),
('Netherlands', 'NL', 'NLD', NULL, '528', 'netherlands'),
('Netherlands Antilles', 'AN', 'ANT', NULL, '530', 'netherlands-antilles'),
('New Caledonia', 'NC', 'NCL', NULL, '540', 'new-caledonia'),
('New Zealand', 'NZ', 'NZL', NULL, '554', 'new-zealand'),
('Nicaragua', 'NI', 'NIC', NULL, '558', 'nicaragua'),
('Niger', 'NE', 'NER', NULL, '562', 'niger'),
('Nigeria', 'NG', 'NGA', NULL, '566', 'nigeria'),
('Niue', 'NU', 'NIU', NULL, '570', 'niue'),
('Norfolk Island', 'NF', 'NFK', NULL, '574', 'norfolk-island'),
('North Korea', 'KP', 'PRK', NULL, '408', 'north-korea'),
('Northern Mariana Islands', 'MP', 'MNP', NULL, '580', 'northern-mariana-islands'),
('Norway', 'NO', 'NOR', NULL, '578', 'norway'),
('Oman', 'OM', 'OMN', NULL, '512', 'oman'),
('Pakistan', 'PK', 'PAK', NULL, '586', 'pakistan'),
('Palau', 'PW', 'PLW', NULL, '585', 'palau'),
('Palestine', 'PS', 'PSE', NULL, '275', 'palestine'),
('Panama', 'PA', 'PAN', NULL, '591', 'panama'),
('Papua New Guinea', 'PG', 'PNG', NULL, '598', 'papua-new-guinea'),
('Paraguay', 'PY', 'PRY', NULL, '600', 'paraguay'),
('Peru', 'PE', 'PER', NULL, '604', 'peru'),
('Philippines', 'PH', 'PHL', NULL, '608', 'philippines'),
('Pitcairn', 'PN', 'PCN', NULL, '612', 'pitcairn'),
('Poland', 'PL', 'POL', NULL, '616', 'poland'),
('Portugal', 'PT', 'PRT', NULL, '620', 'portugal'),
('Puerto Rico', 'PR', 'PRI', NULL, '630', 'puerto-rico'),
('Qatar', 'QA', 'QAT', NULL, '634', 'qatar'),
('Reunion', 'RE', 'REU', NULL, '638', 'reunion'),
('Romania', 'RO', 'ROU', 'ROM', '642', 'romania'),
('Russian Federation', 'RU', 'RUS', NULL, '643', 'russian-federation'),
('Rwanda', 'RW', 'RWA', NULL, '646', 'rwanda'),
('Saint Helena', 'SH', 'SHN', NULL, '654', 'saint-helena'),
('Saint Kitts and Nevis', 'KN', 'KNA', NULL, '659', 'saint-kitts-and-nevis'),
('Saint Lucia', 'LC', 'LCA', NULL, '662', 'saint-lucia'),
('Saint Pierre and Miquelon', 'PM', 'SPM', NULL, '666', 'saint-pierre-and-miquelon'),
('Saint Vincent and the Grenadines', 'VC', 'VCT', NULL, '670', 'saint-vincent-and-grenadines'),
('Saint-Barthelemy', 'BL', 'BLM', NULL, '652', 'saint-barthelemy'),
('Saint-Martin', 'MF', 'MAF', NULL, '663', 'saint-martin'),
('Samoa', 'WS', 'WSM', NULL, '882', 'samoa'),
('San Marino', 'SM', 'SMR', NULL, '674', 'san-marino'),
('Sao Tome and Principe', 'ST', 'STP', NULL, '678', 'sao-tome-and-principe'),
('Saudi Arabia', 'SA', 'SAU', NULL, '682', 'saudi-arabia'),
('Senegal', 'SN', 'SEN', NULL, '686', 'senegal'),
('Serbia', 'RS', 'SRB', NULL, '688', 'serbia'),
('Seychelles', 'SC', 'SYC', NULL, '690', 'seychelles'),
('Sierra Leone', 'SL', 'SLE', NULL, '694', 'sierra-leone'),
('Singapore', 'SG', 'SGP', NULL, '702', 'singapore'),
('Slovakia', 'SK', 'SVK', NULL, '703', 'slovakia'),
('Slovenia', 'SI', 'SVN', NULL, '705', 'slovenia'),
('Solomon Islands', 'SB', 'SLB', NULL, '90', 'solomon-islands'),
('Somalia', 'SO', 'SOM', NULL, '706', 'somalia'),
('South Africa', 'ZA', 'ZAF', NULL, '710', 'south-africa'),
('South Korea', 'KR', 'KOR', NULL, '410', 'south-korea'),
('South Sudan', 'SS', 'SSD', NULL, '728', 'south-sudan'),
('Spain', 'ES', 'ESP', NULL, '724', 'spain'),
('Sri Lanka', 'LK', 'LKA', NULL, '144', 'sri-lanka'),
('Sudan', 'SD', 'SDN', NULL, '729', 'sudan'),
('Suriname', 'SR', 'SUR', NULL, '740', 'suriname'),
('Svalbard and Jan Mayen Islands', 'SJ', 'SJM', NULL, '744', 'svalbard-and-jan-mayen-islands'),
('Swaziland', 'SZ', 'SWZ', NULL, '748', 'swaziland'),
('Sweden', 'SE', 'SWE', NULL, '752', 'sweden'),
('Switzerland', 'CH', 'CHE', NULL, '756', 'switzerland'),
('Syrian Arab Republic', 'SY', 'SYR', NULL, '760', 'syrian-arab-republic'),
('Tajikistan', 'TJ', 'TJK', NULL, '762', 'tajikistan'),
('Tanzania', 'TZ', 'TZA', NULL, '834', 'tanzania'),
('Thailand', 'TH', 'THA', NULL, '764', 'thailand'),
('Timor-Leste', 'TP', 'TLS', NULL, '626', 'timor-leste'),
('Togo', 'TG', 'TGO', NULL, '768', 'togo'),
('Tokelau', 'TK', 'TKL', NULL, '772', 'tokelau'),
('Tonga', 'TO', 'TON', NULL, '776', 'tonga'),
('Trinidad and Tobago', 'TT', 'TTO', NULL, '780', 'trinidad-and-tobago'),
('Tunisia', 'TN', 'TUN', NULL, '788', 'tunisia'),
('Turkey', 'TR', 'TUR', NULL, '792', 'turkey'),
('Turkmenistan', 'TM', 'TKM', NULL, '795', 'turkmenistan'),
('Turks and Caicos Islands', 'TC', 'TCA', NULL, '796', 'turks-and-caicos-islands'),
('Tuvalu', 'TV', 'TUV', NULL, '798', 'tuvalu'),
('U.S. Virgin Islands', 'VI', 'VIR', NULL, '850', 'us-virgin-islands'),
('Uganda', 'UG', 'UGA', NULL, '800', 'uganda'),
('Ukraine', 'UA', 'UKR', NULL, '804', 'ukraine'),
('United Arab Emirates', 'AE', 'ARE', NULL, '784', 'united-arab-emirates'),
('United Kingdom', 'UK', 'GBR', NULL, '826', 'united-kingdom'),
('United States', 'US', 'USA', NULL, '840', 'united-states'),
('Uruguay', 'UY', 'URY', NULL, '858', 'uruguay'),
('Uzbekistan', 'UZ', 'UZB', NULL, '860', 'uzbekistan'),
('Vanuatu', 'VU', 'VUT', NULL, '548', 'vanuatu'),
('Venezuela', 'VE', 'VEN', NULL, '862', 'venezuela'),
('Viet Nam', 'VN', 'VNM', NULL, '704', 'viet-nam'),
('Wallis and Futuna Islands', 'WF', 'WLF', NULL, '876', 'wallis-and-futuna-islands'),
('Western Sahara', 'EH', 'ESH', NULL, '732', 'western-sahara'),
('Yemen', 'YE', 'YEM', NULL, '887', 'yemen'),
('Zambia', 'ZM', 'ZMB', NULL, '894', 'zambia'),
('Zimbabwe', 'ZW', 'ZWE', NULL, '716', 'zimbabwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gigs`
--

CREATE TABLE `gigs` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sort` int NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `gigs`
--

INSERT INTO `gigs` (`id`, `title`, `sort`, `description`, `created_at`, `updated_at`) VALUES
(6, 'IDLE ANIMATION', 6, NULL, NULL, '2023-11-09 21:33:14'),
(5, 'MUSIC', 5, NULL, NULL, '2023-11-09 21:33:14'),
(4, 'OVERLAY', 4, NULL, NULL, '2023-11-09 21:33:14'),
(3, 'RIGGING ANIMATION', 3, NULL, NULL, '2023-11-09 21:33:14'),
(2, 'CHARACTER DESIGN', 2, NULL, NULL, '2023-11-09 21:33:04'),
(7, 'VTUBBER BUNDLE', 7, NULL, NULL, '2023-11-09 21:33:14'),
(8, 'VTUBBER PREMIUM', 8, NULL, NULL, '2023-11-09 21:33:14'),
(1, 'ILLUSTRATION', 1, '<h2 class=\"section-title\">About this gig</h2>\n<p>Hello there!</p>\n<p>Please do contact us with the details of your project before making an order. By having this discussion\nbefore making an order will ensure you to get the best result possible from your request.</p>\n<p>I will draw a high quality anime style character as previewed in the gallery for you either it\'s for your\npersonal or commercial use. Heres the detail for my drawing gigs commission catalogue:</p>\n<ul>\n<li>Illustration, Fanart, Original Character, Concept Art.</li>\n<li>Any other Idea you might have.</li>\n<li>If you want an additional background/scene, or revision you can add in the extra gig&nbsp;option.</li>\n</ul>\n<p>Thank you and looking forward to work with you.</p>', NULL, '2023-11-09 23:04:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gig_features`
--

CREATE TABLE `gig_features` (
  `id` int NOT NULL,
  `gig_id` int DEFAULT NULL,
  `sort` int DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `input_type` enum('text','checkbox') NOT NULL DEFAULT 'text',
  `type` enum('default','extra') NOT NULL DEFAULT 'default',
  `unit` char(30) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `gig_features`
--

INSERT INTO `gig_features` (`id`, `gig_id`, `sort`, `title`, `input_type`, `type`, `unit`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'High Quality', 'checkbox', 'default', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(2, 2, 2, 'Detailed Character Design', 'checkbox', 'default', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(3, 2, 3, 'Full body', 'checkbox', 'default', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(4, 2, 4, 'Full Color', 'checkbox', 'default', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(5, 2, 5, 'Expressions', 'text', 'default', 'expressions', 'CHARACTER DESIGN', NULL, '2023-11-03 22:42:22'),
(6, 2, 6, 'Revisions', 'text', 'default', 'x Revisions', 'CHARACTER DESIGN', NULL, '2023-11-03 22:42:28'),
(7, 2, 7, 'Delivery', 'text', 'default', 'days Delivery', 'CHARACTER DESIGN', NULL, '2023-11-03 22:42:33'),
(8, 2, 8, 'Extra Expressions $10', 'text', 'extra', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(9, 2, 9, 'Alternate Outfit $50-$70', 'text', 'extra', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(10, 2, 10, 'Alternate Hands $20', 'text', 'extra', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(11, 2, 11, 'Alternate Hairstyle $30-$50', 'text', 'extra', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(12, 2, 12, 'Alternate Tail $10', 'text', 'extra', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(13, 2, 13, 'Wings $20-$50', 'text', 'extra', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(14, 2, 14, 'Pet $20 - $50', 'text', 'extra', '', 'CHARACTER DESIGN', NULL, '0000-00-00 00:00:00'),
(15, 3, 1, 'Head XYZ', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(16, 3, 2, 'Eyes Physics', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(17, 3, 3, 'Mouth Movement (with chin)', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(18, 3, 4, 'Mouth X', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(19, 3, 5, 'Full Physics', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(20, 3, 6, 'Breath', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(21, 3, 7, 'Full Upper Body Movement XY', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(22, 3, 8, 'Full Lower Body Movement XY', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(23, 3, 9, 'Body Z', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(24, 3, 10, 'Hips ZY', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(25, 3, 11, 'Rig 5 Expressions', 'checkbox', 'default', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(26, 3, 12, 'Extra Expressions $20', 'text', 'extra', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(27, 3, 13, 'Rig Alternate Outfit $100-$300', 'text', 'extra', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(28, 3, 14, 'Rig Alternate Hands $20', 'text', 'extra', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(29, 3, 15, 'Rig Alternate Hairstyle $50', 'text', 'extra', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(30, 3, 16, 'Rig Alternate Tail $10', 'text', 'extra', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(31, 3, 17, 'Rig Wings $50', 'text', 'extra', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(32, 3, 18, 'Rig Pet $50 - $100', 'text', 'extra', '', 'RIGGING ANIMATION', NULL, '0000-00-00 00:00:00'),
(33, 5, 1, 'Unlimited instruments', 'checkbox', 'default', '', 'MUSIC', NULL, '0000-00-00 00:00:00'),
(34, 5, 2, 'Duration', 'text', 'default', 'seconds', 'MUSIC', NULL, '2023-11-03 22:42:51'),
(35, 5, 3, 'Revisions', 'text', 'default', 'revisions', 'MUSIC', NULL, '2023-11-03 22:42:56'),
(36, 5, 4, 'Delivery', 'text', 'default', 'days Delivery', 'MUSIC', NULL, '2023-11-03 22:43:00'),
(37, 5, 5, 'Separated Tracks/Stems', 'checkbox', 'default', '', 'MUSIC', NULL, '0000-00-00 00:00:00'),
(38, 5, 6, 'Commercial use', 'checkbox', 'default', '', 'MUSIC', NULL, '0000-00-00 00:00:00'),
(39, 1, 1, 'HIGH QUALITY', 'checkbox', 'default', '', 'ILLUSTRATION', NULL, '0000-00-00 00:00:00'),
(40, 1, 2, 'CLOSE UP HEAD SHOT', 'checkbox', 'default', '', 'ILLUSTRATION', NULL, '0000-00-00 00:00:00'),
(41, 1, 3, '3/4 HALF BODY SHOT', 'checkbox', 'default', '', 'ILLUSTRATION', NULL, '0000-00-00 00:00:00'),
(42, 1, 4, 'FULL BODY', 'checkbox', 'default', '', 'ILLUSTRATION', NULL, '0000-00-00 00:00:00'),
(43, 1, 5, 'FULL COLOR', 'checkbox', 'default', '', 'ILLUSTRATION', NULL, '0000-00-00 00:00:00'),
(44, 1, 6, 'SOURCE FILE INC', 'checkbox', 'default', '', 'ILLUSTRATION', NULL, '0000-00-00 00:00:00'),
(45, 1, 7, 'Revisions', 'text', 'default', 'revisions', 'ILLUSTRATION', NULL, '2023-11-03 22:43:08'),
(46, 1, 8, 'Delivery', 'text', 'default', 'days Delivery', 'ILLUSTRATION', NULL, '2023-11-03 22:43:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gig_medias`
--

CREATE TABLE `gig_medias` (
  `id` int NOT NULL,
  `gig_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `media` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `type` varchar(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `gig_medias`
--

INSERT INTO `gig_medias` (`id`, `gig_id`, `title`, `description`, `media`, `type`, `created_at`, `updated_at`) VALUES
(1, 6, 'IDLE ANIMATION', NULL, 'frontend/animashit/assets/images/dota2-antimage.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:14:46'),
(2, 5, 'MUSIC', NULL, 'frontend/animashit/assets/images/dota2-bs.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:14:46'),
(3, 4, 'OVERLAY', NULL, 'frontend/animashit/assets/images/dota2-chen.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:14:46'),
(4, 3, 'RIGGING ANIMATION', NULL, 'frontend/animashit/assets/images/dota2-cm.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:14:46'),
(5, 2, 'CHARACTER DESIGN', NULL, 'frontend/animashit/assets/images/dota2-kunka.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:14:46'),
(6, 7, 'VTUBBER BUNDLE', NULL, 'frontend/animashit/assets/images/dota2-luna.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:14:46'),
(7, 8, 'VTUBBER PREMIUM', NULL, 'frontend/animashit/assets/images/dota2-pa.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:14:46'),
(8, 1, 'ILLUSTRATION', '', 'frontend/animashit/assets/images/dota2-pl.jpeg', 'image', '2023-11-19 10:09:24', '2023-11-19 17:15:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gig_packages`
--

CREATE TABLE `gig_packages` (
  `id` int NOT NULL,
  `gig_id` int DEFAULT NULL,
  `package_id` int DEFAULT NULL,
  `gig_package_head_id` int NOT NULL,
  `sort` varchar(26) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price` varchar(26) DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `image` varchar(26) DEFAULT NULL,
  `video` varchar(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `gig_packages`
--

INSERT INTO `gig_packages` (`id`, `gig_id`, `package_id`, `gig_package_head_id`, `sort`, `title`, `price`, `description`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 11, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(2, 7, 1, 20, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(3, 5, 1, 4, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(4, 3, 1, 9, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(5, 6, 1, 12, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(6, 4, 1, 3, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(7, 5, 1, 18, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(8, 7, 1, 13, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(9, 6, 1, 5, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(10, 1, 1, 14, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(11, 2, 1, 15, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(12, 7, 1, 6, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(13, 3, 1, 16, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(14, 4, 1, 17, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(15, 1, 1, 7, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(16, 4, 1, 10, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(17, 6, 1, 19, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(18, 2, 1, 8, '1', 'Basic', '10', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(19, 5, 2, 4, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(20, 4, 2, 3, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(21, 6, 2, 5, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(22, 5, 2, 11, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(23, 7, 2, 6, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(24, 4, 2, 10, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(25, 1, 2, 7, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(26, 2, 2, 8, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(27, 6, 2, 12, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(28, 3, 2, 16, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(29, 1, 2, 14, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(30, 4, 2, 17, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(31, 7, 2, 13, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(32, 5, 2, 18, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(33, 6, 2, 19, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(34, 2, 2, 15, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(35, 7, 2, 20, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(36, 3, 2, 9, '2', 'Standard', '20', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(37, 2, 3, 15, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(38, 4, 3, 10, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(39, 5, 3, 11, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(40, 3, 3, 16, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(41, 6, 3, 5, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(42, 5, 3, 4, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(43, 4, 3, 17, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(44, 4, 3, 3, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(45, 7, 3, 13, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(46, 5, 3, 18, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(47, 7, 3, 6, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(48, 6, 3, 12, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(49, 6, 3, 19, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(50, 1, 3, 7, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(51, 1, 3, 14, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(52, 7, 3, 20, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(53, 2, 3, 8, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04'),
(54, 3, 3, 9, '3', 'Premium', '30', NULL, NULL, NULL, '2023-11-19 11:35:51', '2023-11-19 21:14:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gig_package_extras`
--

CREATE TABLE `gig_package_extras` (
  `id` int NOT NULL,
  `gig_id` int DEFAULT NULL,
  `gig_package_head_id` int NOT NULL,
  `gig_feature_id` int DEFAULT NULL,
  `value` char(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gig_package_features`
--

CREATE TABLE `gig_package_features` (
  `id` int NOT NULL,
  `gig_id` int DEFAULT NULL,
  `gig_package_head_id` int NOT NULL,
  `gig_package_id` int DEFAULT '0',
  `gig_feature_id` int DEFAULT NULL,
  `value` char(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `gig_package_features`
--

INSERT INTO `gig_package_features` (`id`, `gig_id`, `gig_package_head_id`, `gig_package_id`, `gig_feature_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 15, 39, '0', '2023-11-22 08:29:13', '2023-11-22 15:58:51'),
(2, 1, 7, 15, 40, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(3, 1, 7, 15, 41, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(4, 1, 7, 15, 42, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(5, 1, 7, 15, 43, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(6, 1, 7, 15, 44, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(7, 1, 7, 15, 45, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(8, 1, 7, 15, 46, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(9, 1, 7, 25, 39, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(10, 1, 7, 25, 40, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(11, 1, 7, 25, 41, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(12, 1, 7, 25, 42, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(13, 1, 7, 25, 43, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(14, 1, 7, 25, 44, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(15, 1, 7, 25, 45, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(16, 1, 7, 25, 46, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(17, 1, 7, 50, 39, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(18, 1, 7, 50, 40, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(19, 1, 7, 50, 41, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(20, 1, 7, 50, 42, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(21, 1, 7, 50, 43, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(22, 1, 7, 50, 44, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(23, 1, 7, 50, 45, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(24, 1, 7, 50, 46, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(25, 1, 14, 10, 39, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(26, 1, 14, 10, 40, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(27, 1, 14, 10, 41, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(28, 1, 14, 10, 42, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(29, 1, 14, 10, 43, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(30, 1, 14, 10, 44, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(31, 1, 14, 10, 45, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(32, 1, 14, 10, 46, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(33, 1, 14, 29, 39, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(34, 1, 14, 29, 40, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(35, 1, 14, 29, 41, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(36, 1, 14, 29, 42, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(37, 1, 14, 29, 43, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(38, 1, 14, 29, 44, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(39, 1, 14, 29, 45, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(40, 1, 14, 29, 46, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(41, 1, 14, 51, 39, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(42, 1, 14, 51, 40, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(43, 1, 14, 51, 41, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(44, 1, 14, 51, 42, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(45, 1, 14, 51, 43, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(46, 1, 14, 51, 44, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(47, 1, 14, 51, 45, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(48, 1, 14, 51, 46, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(49, 2, 8, 18, 1, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(50, 2, 8, 18, 2, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(51, 2, 8, 18, 3, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(52, 2, 8, 18, 4, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(53, 2, 8, 18, 5, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(54, 2, 8, 18, 6, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(55, 2, 8, 18, 7, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(56, 2, 8, 18, 8, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(57, 2, 8, 18, 9, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(58, 2, 8, 18, 10, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(59, 2, 8, 18, 11, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(60, 2, 8, 18, 12, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(61, 2, 8, 18, 13, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(62, 2, 8, 18, 14, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(63, 2, 8, 26, 1, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(64, 2, 8, 26, 2, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(65, 2, 8, 26, 3, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(66, 2, 8, 26, 4, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(67, 2, 8, 26, 5, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(68, 2, 8, 26, 6, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(69, 2, 8, 26, 7, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(70, 2, 8, 26, 8, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(71, 2, 8, 26, 9, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(72, 2, 8, 26, 10, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(73, 2, 8, 26, 11, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(74, 2, 8, 26, 12, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(75, 2, 8, 26, 13, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(76, 2, 8, 26, 14, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(77, 2, 8, 53, 1, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(78, 2, 8, 53, 2, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(79, 2, 8, 53, 3, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(80, 2, 8, 53, 4, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(81, 2, 8, 53, 5, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(82, 2, 8, 53, 6, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(83, 2, 8, 53, 7, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(84, 2, 8, 53, 8, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(85, 2, 8, 53, 9, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(86, 2, 8, 53, 10, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(87, 2, 8, 53, 11, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(88, 2, 8, 53, 12, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(89, 2, 8, 53, 13, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(90, 2, 8, 53, 14, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(91, 2, 15, 11, 1, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(92, 2, 15, 11, 2, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(93, 2, 15, 11, 3, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(94, 2, 15, 11, 4, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(95, 2, 15, 11, 5, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(96, 2, 15, 11, 6, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(97, 2, 15, 11, 7, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(98, 2, 15, 11, 8, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(99, 2, 15, 11, 9, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(100, 2, 15, 11, 10, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(101, 2, 15, 11, 11, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(102, 2, 15, 11, 12, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(103, 2, 15, 11, 13, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(104, 2, 15, 11, 14, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(105, 2, 15, 34, 1, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(106, 2, 15, 34, 2, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(107, 2, 15, 34, 3, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(108, 2, 15, 34, 4, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(109, 2, 15, 34, 5, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(110, 2, 15, 34, 6, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(111, 2, 15, 34, 7, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(112, 2, 15, 34, 8, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(113, 2, 15, 34, 9, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(114, 2, 15, 34, 10, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(115, 2, 15, 34, 11, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(116, 2, 15, 34, 12, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(117, 2, 15, 34, 13, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(118, 2, 15, 34, 14, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(119, 2, 15, 37, 1, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(120, 2, 15, 37, 2, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(121, 2, 15, 37, 3, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(122, 2, 15, 37, 4, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(123, 2, 15, 37, 5, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(124, 2, 15, 37, 6, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(125, 2, 15, 37, 7, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(126, 2, 15, 37, 8, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(127, 2, 15, 37, 9, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(128, 2, 15, 37, 10, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(129, 2, 15, 37, 11, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(130, 2, 15, 37, 12, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(131, 2, 15, 37, 13, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(132, 2, 15, 37, 14, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(133, 3, 9, 4, 15, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(134, 3, 9, 4, 16, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(135, 3, 9, 4, 17, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(136, 3, 9, 4, 18, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(137, 3, 9, 4, 19, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(138, 3, 9, 4, 20, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(139, 3, 9, 4, 21, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(140, 3, 9, 4, 22, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(141, 3, 9, 4, 23, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(142, 3, 9, 4, 24, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(143, 3, 9, 4, 25, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(144, 3, 9, 4, 26, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(145, 3, 9, 4, 27, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(146, 3, 9, 4, 28, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(147, 3, 9, 4, 29, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(148, 3, 9, 4, 30, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(149, 3, 9, 4, 31, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(150, 3, 9, 4, 32, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(151, 3, 9, 36, 15, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(152, 3, 9, 36, 16, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(153, 3, 9, 36, 17, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(154, 3, 9, 36, 18, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(155, 3, 9, 36, 19, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(156, 3, 9, 36, 20, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(157, 3, 9, 36, 21, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(158, 3, 9, 36, 22, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(159, 3, 9, 36, 23, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(160, 3, 9, 36, 24, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(161, 3, 9, 36, 25, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(162, 3, 9, 36, 26, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(163, 3, 9, 36, 27, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(164, 3, 9, 36, 28, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(165, 3, 9, 36, 29, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(166, 3, 9, 36, 30, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(167, 3, 9, 36, 31, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(168, 3, 9, 36, 32, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(169, 3, 9, 54, 15, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(170, 3, 9, 54, 16, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(171, 3, 9, 54, 17, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(172, 3, 9, 54, 18, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(173, 3, 9, 54, 19, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(174, 3, 9, 54, 20, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(175, 3, 9, 54, 21, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(176, 3, 9, 54, 22, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(177, 3, 9, 54, 23, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(178, 3, 9, 54, 24, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(179, 3, 9, 54, 25, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(180, 3, 9, 54, 26, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(181, 3, 9, 54, 27, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(182, 3, 9, 54, 28, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(183, 3, 9, 54, 29, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(184, 3, 9, 54, 30, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(185, 3, 9, 54, 31, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(186, 3, 9, 54, 32, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(187, 3, 16, 13, 15, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(188, 3, 16, 13, 16, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(189, 3, 16, 13, 17, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(190, 3, 16, 13, 18, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(191, 3, 16, 13, 19, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(192, 3, 16, 13, 20, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(193, 3, 16, 13, 21, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(194, 3, 16, 13, 22, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(195, 3, 16, 13, 23, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(196, 3, 16, 13, 24, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(197, 3, 16, 13, 25, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(198, 3, 16, 13, 26, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(199, 3, 16, 13, 27, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(200, 3, 16, 13, 28, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(201, 3, 16, 13, 29, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(202, 3, 16, 13, 30, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(203, 3, 16, 13, 31, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(204, 3, 16, 13, 32, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(205, 3, 16, 28, 15, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(206, 3, 16, 28, 16, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(207, 3, 16, 28, 17, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(208, 3, 16, 28, 18, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(209, 3, 16, 28, 19, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(210, 3, 16, 28, 20, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(211, 3, 16, 28, 21, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(212, 3, 16, 28, 22, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(213, 3, 16, 28, 23, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(214, 3, 16, 28, 24, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(215, 3, 16, 28, 25, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(216, 3, 16, 28, 26, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(217, 3, 16, 28, 27, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(218, 3, 16, 28, 28, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(219, 3, 16, 28, 29, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(220, 3, 16, 28, 30, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(221, 3, 16, 28, 31, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(222, 3, 16, 28, 32, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(223, 3, 16, 40, 15, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(224, 3, 16, 40, 16, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(225, 3, 16, 40, 17, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(226, 3, 16, 40, 18, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(227, 3, 16, 40, 19, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(228, 3, 16, 40, 20, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(229, 3, 16, 40, 21, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(230, 3, 16, 40, 22, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(231, 3, 16, 40, 23, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(232, 3, 16, 40, 24, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(233, 3, 16, 40, 25, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(234, 3, 16, 40, 26, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(235, 3, 16, 40, 27, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(236, 3, 16, 40, 28, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(237, 3, 16, 40, 29, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(238, 3, 16, 40, 30, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(239, 3, 16, 40, 31, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(240, 3, 16, 40, 32, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(241, 5, 4, 3, 33, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(242, 5, 4, 3, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(243, 5, 4, 3, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(244, 5, 4, 3, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(245, 5, 4, 3, 37, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(246, 5, 4, 3, 38, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(247, 5, 4, 19, 33, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(248, 5, 4, 19, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(249, 5, 4, 19, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(250, 5, 4, 19, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(251, 5, 4, 19, 37, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(252, 5, 4, 19, 38, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(253, 5, 4, 42, 33, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(254, 5, 4, 42, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(255, 5, 4, 42, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(256, 5, 4, 42, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(257, 5, 4, 42, 37, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(258, 5, 4, 42, 38, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(259, 5, 11, 1, 33, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(260, 5, 11, 1, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(261, 5, 11, 1, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(262, 5, 11, 1, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(263, 5, 11, 1, 37, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(264, 5, 11, 1, 38, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(265, 5, 11, 22, 33, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(266, 5, 11, 22, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(267, 5, 11, 22, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(268, 5, 11, 22, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(269, 5, 11, 22, 37, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(270, 5, 11, 22, 38, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(271, 5, 11, 39, 33, '0', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(272, 5, 11, 39, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(273, 5, 11, 39, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(274, 5, 11, 39, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(275, 5, 11, 39, 37, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(276, 5, 11, 39, 38, '0', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(277, 5, 18, 7, 33, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(278, 5, 18, 7, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(279, 5, 18, 7, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(280, 5, 18, 7, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(281, 5, 18, 7, 37, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(282, 5, 18, 7, 38, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(283, 5, 18, 32, 33, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(284, 5, 18, 32, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(285, 5, 18, 32, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(286, 5, 18, 32, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(287, 5, 18, 32, 37, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(288, 5, 18, 32, 38, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(289, 5, 18, 46, 33, '1', '2023-11-22 08:29:13', '2023-11-22 16:08:31'),
(290, 5, 18, 46, 34, '2', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(291, 5, 18, 46, 35, '3', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(292, 5, 18, 46, 36, '1', '2023-11-22 08:29:13', '2023-11-22 15:48:04'),
(293, 5, 18, 46, 37, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09'),
(294, 5, 18, 46, 38, '1', '2023-11-22 08:29:13', '2023-11-22 15:59:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gig_package_head`
--

CREATE TABLE `gig_package_head` (
  `id` int NOT NULL,
  `gig_id` int DEFAULT NULL,
  `profile_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `gig_package_head`
--

INSERT INTO `gig_package_head` (`id`, `gig_id`, `profile_id`, `created_at`, `updated_at`) VALUES
(4, 5, 29, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(3, 4, 28, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(5, 6, 30, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(6, 7, 31, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(7, 1, 32, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(8, 2, 33, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(9, 3, 34, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(10, 4, 35, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(11, 5, 36, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(12, 6, 37, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(13, 7, 38, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(14, 1, 39, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(15, 2, 40, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(16, 3, 41, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(17, 4, 42, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(18, 5, 43, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(19, 6, 44, '2023-11-19 11:10:23', '2023-11-19 19:07:46'),
(20, 7, 45, '2023-11-19 11:10:23', '2023-11-19 19:07:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gig_package_medias`
--

CREATE TABLE `gig_package_medias` (
  `id` int NOT NULL,
  `gig_package_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `media` varchar(26) DEFAULT NULL,
  `type` varchar(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_19_163555_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_id` int DEFAULT NULL,
  `gig_package_id` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `status` varchar(26) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `gig_package_id`, `price`, `status`, `date`, `note`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 32323, '14', '2023-10-18', '', '2023-10-21 06:37:03', '2023-10-21 14:14:04'),
(3, 7, 1, 232323, '6', '2023-10-18', 'testd fsdf s fd', '2023-10-21 09:19:02', '2023-10-21 16:22:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_status`
--

CREATE TABLE `order_status` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text NOT NULL,
  `bg` char(10) NOT NULL,
  `color` char(10) NOT NULL,
  `sorting` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `order_status`
--

INSERT INTO `order_status` (`id`, `title`, `description`, `bg`, `color`, `sorting`) VALUES
(2, 'Unsent', 'Belum Dikirim / Unsent ,Invoice yang telah dibuat tetapi belum dikirim kepada pelanggan.', '#ffda0e', '#000000', 0),
(3, 'Unpaid', 'Belum Dibayar / Unpaid ,Invoice yang telah dikirim kepada pelanggan tetapi belum dibayar.', '#ffe65f', '#000000', 0),
(4, 'In Progress', 'Dalam Proses / In Progress ,Invoice yang sedang dalam proses peninjauan atau persetujuan sebelum dikirim ke pelanggan.', '#ffef96', '#000000', 0),
(5, 'In Payment', 'Dalam Pembayaran / In Payment ,Invoice yang sedang dalam proses pembayaran oleh pelanggan.', '#fff5be', '#000000', 0),
(6, 'Paid', 'Telah Dibayar / Paid ,Invoice yang telah dibayar oleh pelanggan.', '#00ff42', '#000000', 0),
(7, 'Overdue', 'Terlambat / Overdue ,Invoice yang lewat jatuh tempo dan belum dibayar oleh pelanggan.', '#77ff9a', '#000000', 0),
(8, 'Cancelled', 'Dibatalkan / Cancelled ,Invoice yang telah dibatalkan oleh entitas pengirim atau pelanggan.', '#a4ffbc', '#000000', 0),
(9, 'In Delivery', 'Dalam Pengiriman / In Delivery ,Invoice yang telah dibayar dan sedang dalam proses pengiriman barang atau layanan.', '#caffd8', '#000000', 0),
(10, 'Under Review', 'Dalam Peninjauan / Under Review ,Invoice yang sedang dalam peninjauan atau audit oleh departemen keuangan atau tim yang bertanggung jawab.', '#0075ff', '#000000', 0),
(11, 'Completed', 'Selesai / Completed ,Invoice yang telah selesai dan telah diarsipkan atau dicatat.', '#3d96ff', '#000000', 0),
(12, 'Rejected', 'Ditolak / Rejected ,Invoice yang telah ditolak oleh pelanggan atau entitas yang menerimanya.', '#81bbff', '#000000', 0),
(13, 'On Hold', 'Dalam Gantung / On Hold ,Invoice yang ditunda atau diberhentikan sementara untuk beberapa alasan tertentu.', '#add3ff', '#000000', 0),
(14, 'In Approval', 'Dalam Persetujuan / In Approval ,Invoice yang sedang menunggu persetujuan dari pihak yang berwenang sebelum bisa dibayar.', '#7c2cff', '#000000', 0),
(15, 'In Refund Process', 'Dalam Proses Pengembalian / In Refund Process ,Invoice yang sedang dalam proses pengembalian uang atau kredit kepada pelanggan.', '#9351ff', '#000000', 0),
(16, 'In Exchange', 'Dalam Pertukaran / In Exchange ,Invoice yang sedang dalam proses pertukaran barang atau layanan.', '#a36aff', '#000000', 0),
(17, 'In Collection', 'Dalam Penagihan / In Collection ,Invoice yang masih belum dibayar dan sudah masuk ke proses penagihan.', '#b78bff', '#000000', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packages`
--

CREATE TABLE `packages` (
  `id` int NOT NULL,
  `sort` varchar(26) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `packages`
--

INSERT INTO `packages` (`id`, `sort`, `title`, `created_at`, `updated_at`) VALUES
(1, '1', 'Basic', '2023-11-03 10:53:08', '2023-11-03 10:52:32'),
(2, '2', 'Standard', '2023-11-03 10:53:08', '2023-11-03 17:53:20'),
(3, '3', 'Premium', '2023-11-03 10:53:15', '2023-11-03 17:53:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `slug` varchar(26) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `status` varchar(26) DEFAULT NULL,
  `template` char(30) NOT NULL,
  `sort` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `description`, `status`, `template`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home', '\n                    <h1 class=\"text1 text-dark text-outline2 mb-0 pb-0 size1\">WELCOME TO</h1>\n                    <h2 class=\"text1 text-dark text-outline2 mb-0 pb-0\">ANIMASHIT CREATIVE STUDIO</h2>\n                    <h4 class=\"text1 text-dark text-outline2 mb-0 pb-0\">\n                        Hi there !\n                    </h4>\n                    <p class=\"text-dark text-outline2\">\n                        We are a team of professional illustrator and concept artist from Indonesia. Our field of\n                        expertise include making both digital and traditional illustration.\n                    </p>\n                    <p class=\"text-dark text-outline2\">\n                        We live in Indonesia and our local time-zone is GMT+7. Pardon us if we reply your message a\n                        little bit late but we\'ll get to it as soon as we are online.\n                    </p>\n                    <p class=\"text-dark text-outline2\">\n\n                        Thank you and have a good day.\n                    </p>', 'publish', 'home', 1, '2023-10-23 05:41:55', '2023-11-18 20:51:48'),
(2, 'our-gigs', 'Our Gigs', 'our-gigs', 'publish', 'our-gigs', 2, '2023-10-23 05:41:55', '2023-11-18 20:51:50'),
(3, 'our-artists', 'Our Artists', 'our-artists', 'publish', 'our-artists', 3, '2023-10-23 05:41:55', '2023-11-18 20:51:53'),
(4, 'schedules', 'Schedules', 'schedules', 'publish', 'schedules', 4, '2023-10-23 05:41:55', '2023-11-18 20:51:55'),
(6, 'contact-us', 'Contact Us', 'contact-us', 'publish', 'contact-us', 5, '2023-10-23 05:41:55', '2023-11-18 20:51:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(27, 'artist-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(28, 'customer-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(29, 'dashboard-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(30, 'gig-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(31, 'order-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(32, 'page-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(33, 'profile-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(34, 'role-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(35, 'schedule-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(36, 'siteconfig-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(37, 'user-list', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(38, 'artist-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(39, 'customer-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(40, 'dashboard-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(41, 'gig-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(42, 'order-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(43, 'page-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(44, 'profile-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(45, 'role-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(46, 'schedule-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(47, 'siteconfig-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(48, 'user-create', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(49, 'artist-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(50, 'customer-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(51, 'dashboard-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(52, 'gig-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(53, 'order-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(54, 'page-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(55, 'profile-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(56, 'role-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(57, 'schedule-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(58, 'siteconfig-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(59, 'user-edit', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(60, 'artist-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(61, 'customer-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(62, 'dashboard-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(63, 'gig-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(64, 'order-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(65, 'page-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(66, 'profile-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(67, 'role-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(68, 'schedule-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(69, 'siteconfig-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(70, 'user-delete', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int NOT NULL,
  `gig_package_id` int DEFAULT NULL,
  `gig_id` int DEFAULT NULL,
  `artist_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `portfolios`
--

INSERT INTO `portfolios` (`id`, `gig_package_id`, `gig_id`, `artist_id`, `customer_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 36, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(2, 2, 7, 45, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(3, 3, 5, 29, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(4, 4, 3, 34, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(5, 5, 6, 37, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(6, 6, 4, 28, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(7, 7, 5, 43, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(8, 8, 7, 38, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(9, 9, 6, 30, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(10, 10, 1, 39, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(11, 11, 2, 40, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(12, 12, 7, 31, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(13, 13, 3, 41, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(14, 14, 4, 42, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(15, 15, 1, 32, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(16, 16, 4, 35, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(17, 17, 6, 44, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(18, 18, 2, 33, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(19, 19, 5, 29, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(20, 20, 4, 28, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(21, 21, 6, 30, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(22, 22, 5, 36, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(23, 23, 7, 31, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(24, 24, 4, 35, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(25, 25, 1, 32, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(26, 26, 2, 33, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(27, 27, 6, 37, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(28, 28, 3, 41, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(29, 29, 1, 39, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(30, 30, 4, 42, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(31, 31, 7, 38, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(32, 32, 5, 43, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(33, 33, 6, 44, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(34, 34, 2, 40, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(35, 35, 7, 45, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(36, 36, 3, 34, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(37, 37, 2, 40, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(38, 38, 4, 35, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(39, 39, 5, 36, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(40, 40, 3, 41, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(41, 41, 6, 30, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(42, 42, 5, 29, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(43, 43, 4, 42, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(44, 44, 4, 28, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(45, 45, 7, 38, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(46, 46, 5, 43, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(47, 47, 7, 31, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(48, 48, 6, 37, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(49, 49, 6, 44, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(50, 50, 1, 32, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(51, 51, 1, 39, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(52, 52, 7, 45, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(53, 53, 2, 33, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(54, 54, 3, 34, 46, '', '', '2023-11-19 14:17:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio_medias`
--

CREATE TABLE `portfolio_medias` (
  `id` int NOT NULL,
  `portfolio_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `media` char(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `type` varchar(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `portfolio_medias`
--

INSERT INTO `portfolio_medias` (`id`, `portfolio_id`, `title`, `description`, `media`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(2, 2, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(3, 3, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(4, 4, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(5, 5, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(6, 6, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(7, 7, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(8, 8, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(9, 9, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(10, 10, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(11, 11, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(12, 12, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(13, 13, '', '', 'frontend/animashit/assets/videos/LIVE2D Showcase Coco Moka.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(14, 14, '', '', 'frontend/animashit/assets/videos/video1.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(15, 15, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(16, 16, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(17, 17, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(18, 18, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(19, 19, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(20, 20, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(21, 21, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(22, 22, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(23, 23, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(24, 24, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(25, 25, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(26, 26, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(27, 27, '', '', 'frontend/animashit/assets/videos/LIVE2D Showcase Coco Moka.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(28, 28, '', '', 'frontend/animashit/assets/videos/video1.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(29, 29, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(30, 30, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(31, 31, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(32, 32, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(33, 33, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(34, 34, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(35, 35, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(36, 36, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(37, 37, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(38, 38, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(39, 39, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(40, 40, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(41, 41, '', '', 'frontend/animashit/assets/videos/LIVE2D Showcase Coco Moka.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(42, 42, '', '', 'frontend/animashit/assets/videos/video1.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(43, 43, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(44, 44, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(45, 45, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(46, 46, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(47, 47, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(48, 48, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(49, 49, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(50, 50, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(51, 51, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(52, 52, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(53, 53, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(54, 54, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(55, 1, '', '', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(56, 2, '', '', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(57, 3, '', '', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(58, 4, '', '', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(59, 5, '', '', 'frontend/animashit/assets/images/Banner_July_2022.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(60, 6, '', '', 'frontend/animashit/assets/images/cool-anime-video-music-album-cover-design-template-70bf413b3c1cf99db9e7a40aec385183_screen (1).jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(61, 7, '', '', 'frontend/animashit/assets/images/Dandi.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(62, 8, '', '', 'frontend/animashit/assets/images/dota2-antimage.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(63, 9, '', '', 'frontend/animashit/assets/images/dota2-bs.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(64, 10, '', '', 'frontend/animashit/assets/images/dota2-chen.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(65, 11, '', '', 'frontend/animashit/assets/images/dota2-cm.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(66, 12, '', '', 'frontend/animashit/assets/images/dota2-kunka.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(67, 13, '', '', 'frontend/animashit/assets/images/dota2-luna.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(68, 14, '', '', 'frontend/animashit/assets/images/dota2-pa.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(69, 15, '', '', 'frontend/animashit/assets/images/dota2-pl.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(70, 16, '', '', 'frontend/animashit/assets/images/dota2-riki.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(71, 17, '', '', 'frontend/animashit/assets/images/dota2-shaman.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(72, 18, '', '', 'frontend/animashit/assets/images/dota2-sky.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(73, 19, '', '', 'frontend/animashit/assets/images/dota2-zeus.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(74, 20, '', '', 'frontend/animashit/assets/images/dota2heroes.png', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(75, 21, '', '', 'frontend/animashit/assets/images/earthmalik_2.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(76, 22, '', '', 'frontend/animashit/assets/images/earthmalik_3.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(77, 23, '', '', 'frontend/animashit/assets/images/HD-wallpaper-anime-anime-girls-digital-art-artwork-2d-portrait-display-vertical-qtian-short-hair-redhead.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(78, 24, '', '', 'frontend/animashit/assets/images/hero.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(79, 25, '', '', 'frontend/animashit/assets/images/kizunaai_animeillustration-1-scaled-e1668157274531.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(80, 26, '', '', 'frontend/animashit/assets/images/logo.png', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(81, 27, '', '', 'frontend/animashit/assets/images/logodark.png', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(82, 28, '', '', 'frontend/animashit/assets/images/logolight.png', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(83, 29, '', '', 'frontend/animashit/assets/images/Lyart.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(84, 30, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 110601.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(85, 31, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 111833.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(86, 32, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 111951.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(87, 33, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112107.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(88, 34, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112336.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(89, 35, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112411.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(90, 36, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112449.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(91, 37, '', '', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(92, 38, '', '', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(93, 39, '', '', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(94, 40, '', '', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(95, 41, '', '', 'frontend/animashit/assets/images/Banner_July_2022.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(96, 42, '', '', 'frontend/animashit/assets/images/cool-anime-video-music-album-cover-design-template-70bf413b3c1cf99db9e7a40aec385183_screen (1).jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(97, 43, '', '', 'frontend/animashit/assets/images/Dandi.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(98, 44, '', '', 'frontend/animashit/assets/images/dota2-antimage.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(99, 45, '', '', 'frontend/animashit/assets/images/dota2-bs.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(100, 46, '', '', 'frontend/animashit/assets/images/dota2-chen.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(101, 47, '', '', 'frontend/animashit/assets/images/dota2-cm.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(102, 48, '', '', 'frontend/animashit/assets/images/dota2-kunka.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(103, 49, '', '', 'frontend/animashit/assets/images/dota2-luna.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(104, 50, '', '', 'frontend/animashit/assets/images/dota2-pa.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(105, 51, '', '', 'frontend/animashit/assets/images/dota2-pl.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(106, 52, '', '', 'frontend/animashit/assets/images/dota2-riki.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(107, 53, '', '', 'frontend/animashit/assets/images/dota2-shaman.jpeg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(108, 54, '', '', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `country` varchar(26) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ig` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_type` varchar(26) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `nickname`, `avatar`, `country`, `email`, `phone`, `twitter`, `ig`, `facebook`, `youtube`, `user_type`, `user_id`, `created_at`, `updated_at`) VALUES
(44, 'MUSICER 3', 'musicer_3', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:14'),
(45, 'IDLE ANIMATOR 3', 'idle_animator_3', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(43, 'OVERLAYER 3', 'overlayer_3', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(42, 'RIGGING ANIMATOR 3', 'rigging_animator_3', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(36, 'RIGGING ANIMATOR 2', 'rigging_animator_2', 'frontend/animashit/assets/images/Banner_July_2022.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(37, 'OVERLAYER 2', 'overlayer_2', 'frontend/animashit/assets/images/cool-anime-video-music-album-cover-design-template-70bf413b3c1cf99db9e7a40aec385183_screen (1).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(38, 'MUSICER 2', 'musicer_2', 'frontend/animashit/assets/images/Dandi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(39, 'IDLE ANIMATOR 2', 'idle_animator_2', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(40, 'ILLUSTRATOR 3', 'illustrator_3', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(41, 'CHARACTER DESIGNER 3', 'character_designer_3', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(35, 'CHARACTER DESIGNER 2', 'character_designer_2', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(34, 'ILLUSTRATOR 2', 'illustrator_2', 'frontend/animashit/assets/images/Banner_July_2022.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(33, 'IDLE ANIMATOR 1', 'idle_animator_1', 'frontend/animashit/assets/images/cool-anime-video-music-album-cover-design-template-70bf413b3c1cf99db9e7a40aec385183_screen (1).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(32, 'MUSICER 1', 'musicer_1', 'frontend/animashit/assets/images/Dandi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(31, 'OVERLAYER 1', 'overlayer_1', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(30, 'RIGGING ANIMATOR 1', 'rigging_animator_1', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(29, 'CHARACTER DESIGNER 1', 'character_designer_1', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(28, 'ILLUSTRATOR 1', 'illustrator_1', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:23'),
(46, 'CUSTOMER 1', 'customer_1', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(3, 'Operator', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(4, 'Artist', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(5, 'Customer', 'web', '2023-10-19 09:47:30', '2023-10-19 09:47:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `gig_id` int DEFAULT NULL,
  `artist_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `start_date` varchar(10) DEFAULT NULL,
  `end_date` varchar(10) DEFAULT NULL,
  `status` varchar(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id`, `order_id`, `gig_id`, `artist_id`, `customer_id`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 7, 9, '2023-10-26', '2023-10-19', '6', '2023-10-23 09:51:00', '2023-10-23 17:15:24'),
(2, 1, 3, 7, 9, '2023-10-26', '2023-10-19', '2', '2023-10-23 09:51:11', '2023-10-23 17:15:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule_items`
--

CREATE TABLE `schedule_items` (
  `id` int NOT NULL,
  `schedule_id` int DEFAULT NULL,
  `schedule_item_type_id` int DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start_date` varchar(10) DEFAULT NULL,
  `end_date` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule_item_types`
--

CREATE TABLE `schedule_item_types` (
  `id` int NOT NULL,
  `gig_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule_status`
--

CREATE TABLE `schedule_status` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text NOT NULL,
  `bg` char(10) NOT NULL,
  `color` char(10) NOT NULL,
  `sorting` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `schedule_status`
--

INSERT INTO `schedule_status` (`id`, `title`, `description`, `bg`, `color`, `sorting`) VALUES
(1, 'Waiting List', 'Waiting List', '#cccccc', '#000000', 1),
(2, 'In Progress', 'In Progress', '#00ff00', '#000000', 2),
(3, 'Finish', 'Finish', '#0000ff', '#000000', 3),
(4, 'Unfinished', 'Unfinished', '#ffff00', '#000000', 4),
(5, 'Cancel', 'Cancel', '#000000', '#ffffff', 5),
(6, 'Overdue', 'Overdue', '#ff0000', '#000000', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `type` varchar(26) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `keyword` varchar(26) DEFAULT NULL,
  `value` varchar(26) DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `type`, `title`, `keyword`, `value`, `description`) VALUES
(1, 'frontend', 'sd fsdf sd f', 'fs fsd fs f', 'sdf sdfs f', 'sd sdf s df'),
(2, 'global', 'aaaaaa2', 'bbbbbb2222222222222', 'ccccccccc2222222222222', 'dddddddddd2222222222'),
(3, 'backend', 'fdsfdsfasdf', 'dasfdasf', 'asdfasdf', 'dasfdasf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `description` text NOT NULL,
  `media` text NOT NULL,
  `type` char(250) NOT NULL,
  `button_url` tinytext NOT NULL,
  `button_text` char(250) NOT NULL,
  `sort` int NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `description`, `media`, `type`, `button_url`, `button_text`, `sort`, `status`) VALUES
(1, 'BE STRONG TRAINING HARD', 'SHAPE YOUR BODY', 'You’ll find a plethora of images, quotes, articles, and videos that insist that you’re not really training until you’ve puked, blacked out, or have left blood on the bar.\r\n\r\nTraining through pain, lifting when you’re sick, and stopping at absolutely nothing for your gains are just the things some people need to hear to get pumped to train. \r\n\r\n', 'frontend/animashit/assets/videos/004 denzio.mp4', 'video', '', '', 0, 1),
(2, 'Welcome! Let\'s work together to learn and grow.', 'We\'re thrilled to have you here and eager to share our knowledge and expertise. ', 'You’ll find a plethora of images, quotes, articles, and videos that insist that you’re not really training until you’ve puked, blacked out, or have left blood on the bar.\r\n\r\nTraining through pain, lifting when you’re sick, and stopping at absolutely nothing for your gains are just the things some people need to hear to get pumped to train. \r\n\r\n', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'video', '#', '', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin istrator', 'nietaldarkopik@gmail.com', NULL, '$2y$10$kqBh6D4VtMwojNQgVqLV0e3/NAvYDWRX7RxgkVlaSXi3bKkKGmMki', 'IxniPNwHWvLy4fYdXQBWMI5a6VPr0jFuZFAMarOiE8HkCx5oPo2PsnBLIQJB', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(4, 'test', 'nietaldarkopik2@gmail.com', NULL, '$2y$10$6PeEabvMP3vv9rKQVbLTS.aWFp5C2NcHz86NhufHY6l4Kdicv7QaG', NULL, '2023-10-21 10:24:57', '2023-10-21 10:24:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `geo_countries`
--
ALTER TABLE `geo_countries`
  ADD PRIMARY KEY (`abv`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indeks untuk tabel `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gig_features`
--
ALTER TABLE `gig_features`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gig_medias`
--
ALTER TABLE `gig_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gig_packages`
--
ALTER TABLE `gig_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gig_package_extras`
--
ALTER TABLE `gig_package_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gig_package_features`
--
ALTER TABLE `gig_package_features`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gig_package_head`
--
ALTER TABLE `gig_package_head`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gig_package_medias`
--
ALTER TABLE `gig_package_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`title`);

--
-- Indeks untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio_medias`
--
ALTER TABLE `portfolio_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `schedule_items`
--
ALTER TABLE `schedule_items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `schedule_item_types`
--
ALTER TABLE `schedule_item_types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `schedule_status`
--
ALTER TABLE `schedule_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`title`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gigs`
--
ALTER TABLE `gigs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gig_features`
--
ALTER TABLE `gig_features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `gig_medias`
--
ALTER TABLE `gig_medias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `gig_packages`
--
ALTER TABLE `gig_packages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `gig_package_extras`
--
ALTER TABLE `gig_package_extras`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gig_package_features`
--
ALTER TABLE `gig_package_features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT untuk tabel `gig_package_head`
--
ALTER TABLE `gig_package_head`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `gig_package_medias`
--
ALTER TABLE `gig_package_medias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `portfolio_medias`
--
ALTER TABLE `portfolio_medias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `schedule_items`
--
ALTER TABLE `schedule_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `schedule_item_types`
--
ALTER TABLE `schedule_item_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `schedule_status`
--
ALTER TABLE `schedule_status`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
