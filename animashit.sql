-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Des 2023 pada 09.23
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
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` char(150) NOT NULL,
  `email` char(250) NOT NULL,
  `country` int NOT NULL,
  `subject` char(250) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('new','read','replied') NOT NULL DEFAULT 'new'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `country`, `subject`, `message`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Taofik Basuki', 'nietaldarkopik@gmail.com', 360, 'sdf asdf asd', 'sd sdf sd f', '2023-11-27 02:54:56', '2023-11-27 09:54:56', 'new'),
(2, 'Taofik Basuki', 'nietaldarkopik@gmail.com', 360, 'sdf asdf asd', 'sd sdf sd f', '2023-11-27 02:57:45', '2023-11-27 09:57:45', 'new'),
(3, 'Taofik Basuki', 'nietaldarkopik@gmail.com', 360, 'sdf asdf asd', 'sd sdf sd f', '2023-11-27 02:58:49', '2023-11-27 09:58:49', 'new'),
(4, 'asd fasd f', 'asd fasd fas', 12, 'f asd f', 'sdf asd fa', '2023-11-27 03:20:43', '2023-11-27 10:20:43', 'new');

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
(6, 'IDLE ANIMATION', 6, '<p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Introducing IDLE ANIMATION for Engaging Visual Flourish!</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Elevate User Experience: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Make every moment count with IDLE ANIMATION – where your brand comes to life, even in moments of stillness. Transform idle screens, waiting pages, and static interfaces into dynamic, engaging experiences that captivate your audience and leave a lasting impression.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Dynamic Brand Personality: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Your brand has a personality that deserves to shine, even during idle moments. Our IDLE ANIMATION services breathe life into your brand with subtle yet captivating animations that reflect your unique identity, creating a memorable and immersive user experience.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Seamless Integration: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Seamlessly integrate IDLE ANIMATION across various platforms and interfaces. Whether it\'s a website, app, or digital display, our animations are designed to enhance user engagement, making every interaction with your brand a visually delightful experience.</span></p><div><br></div>', NULL, '2023-12-02 08:12:07'),
(5, 'MUSIC', 5, '<p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Introducing Our Music Builder for Melodic Brilliance!</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Unleash Your Creativity: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Ready to bring your musical vision to life? Our Music Builder is your gateway to composing melodic masterpieces that resonate with emotion, captivate audiences, and stand the test of time. Dive into a world of limitless possibilities where your musical imagination knows no bounds.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Intuitive Interface, Infinite Potential: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Our Music Builder boasts an intuitive interface designed to empower both seasoned composers and aspiring musicians. Craft melodies effortlessly, experiment with harmonies, and arrange compositions seamlessly – the power to create is at your fingertips.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Diverse Sound Libraries: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Explore a vast array of high-quality sound libraries that cater to every genre and mood. From orchestral grandeur to electronic beats, our Music Builder provides an extensive palette of musical elements, ensuring that your compositions are as unique as your artistic fingerprint.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Dynamic Arrangement: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Take control of your musical narrative with dynamic arrangement tools. Build tension, create climaxes, and guide listeners through an immersive journey. Our Music Builder empowers you to shape your compositions with precision and emotion, leaving a lasting impact on your audience.</span></p><div><br></div>', NULL, '2023-12-02 08:10:34'),
(4, 'OVERLAY', 4, '<p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-family: Oswald; font-size: 30px;\">Introducing Our Overlay Designer for a Touch of Graphics Glamour!</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-family: Oswald; font-size: 32px;\"><b>Immerse Your Content: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-family: Oswald; font-size: 30px;\">Transform your streams, videos, or presentations into captivating experiences with our Overlay Designer. We specialize in crafting visually stunning overlays that seamlessly blend with your content, enhancing the viewer\'s engagement and creating a lasting impression.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-family: Oswald; font-size: 32px;\"><b>Aesthetic Excellence: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-family: Oswald; font-size: 30px;\">Our Overlay Designer brings a keen eye for design, ensuring that each overlay is a masterpiece in its own right. From sleek and professional layouts to vibrant and dynamic designs, we tailor overlays to reflect your brand identity and capture your audience\'s attention.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-family: Oswald; font-size: 32px;\"><b>Multi-Platform Brilliance: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-family: Oswald; font-size: 30px;\">Whether you\'re a streamer, content creator, or business professional, our overlays are designed for multi-platform versatility. Enhance your Twitch streams, YouTube videos, or virtual meetings with overlays that look flawless across various devices and screen sizes.</span></p><div><br></div>', NULL, '2023-12-02 08:07:09');
INSERT INTO `gigs` (`id`, `title`, `sort`, `description`, `created_at`, `updated_at`) VALUES
(3, 'RIGGING ANIMATION', 3, '<p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Elevate Your Creations with Our Rigging Mastery!</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Dive into the World of Seamless Motion: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Ready to take your animations to the next level? Our Rigging services redefine movement, ensuring your characters and creatures move with unparalleled fluidity and realism. Elevate your storytelling with animations that captivate and engage.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 30px; font-family: Oswald;\"><b><span style=\"font-size: 32px;\">Precision in Every Joint:</span></b> </span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Our Rigging Masters meticulously craft digital skeletons, breathing life into your characters. With precision in every joint and an understanding of anatomy and movement, we create rigs that allow for seamless animation, from subtle facial expressions to dynamic action sequences.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Dynamic Characters, Dynamic Results: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Dynamic characters demand dynamic results. Our rigging expertise extends beyond the basics – we specialize in creating rigs that adapt to the unique personality and narrative of each character. Watch as your creations come to life with personality and charm.</span></p><div><br></div>', NULL, '2023-12-02 08:05:07'),
(2, 'CHARACTER DESIGN', 2, '<p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Are you seeking to breathe life into your brand or project? Look no further! Our Character Designer is poised to transform your concepts into captivating personas that resonate with your audience.</span></p><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Crafting Unique Identities: </b></span></p><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Our Character Designer possesses the rare skill of turning imagination into reality. From mascots that embody your brand spirit to memorable characters that tell your story, we specialize in creating unique, compelling identities that leave a lasting impression.</span></p>', NULL, '2023-12-02 07:59:17'),
(7, 'VTUBBER BUNDLE', 7, NULL, NULL, '2023-11-09 21:33:14'),
(8, 'VTUBBER PREMIUM', 8, NULL, NULL, '2023-11-09 21:33:14'),
(1, 'ILLUSTRATION', 1, '<h2 class=\"section-title\"><span style=\"font-family: Handlee; font-size: 35px; color: rgb(55, 65, 81); white-space-collapse: preserve; text-align: var(--bs-body-text-align);\"><span style=\"font-size: 30px; font-family: Oswald;\">Are you ready to transform your ideas into visual masterpieces that speak louder than words? Look no further! Our Illustration Designer is here to bring your visions to life with a touch of enchantment.</span></span><br></h2><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Immerse Your Audience: </b></span></p><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">Our illustration design service is more than just graphics; it\'s an immersive experience. With a keen eye for detail and a passion for storytelling, our designers craft visuals that draw your audience into a world of creativity and imagination.</span></p><h2 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Elevate Your Brand: </b></span></h2><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">In a sea of ordinary, be extraordinary! Our Illustration Designer specializes in creating unique, tailor-made illustrations that set your brand apart. Whether it\'s a logo, social media content, or marketing collateral, we ensure your brand is remembered long after the first glance.</span></p><h3 style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\" class=\"\"><span style=\"font-size: 32px; font-family: Oswald;\"><b>Versatility at its Best: </b></span></h3><p style=\"border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"><span style=\"font-size: 30px; font-family: Oswald;\">No vision is too big or too small for us! From whimsical illustrations to sleek and modern designs, our team adapts to your style, ensuring that each piece resonates with your brand identity. Let your creativity run wild, and we\'ll bring it to life!</span></p><div><br></div>', NULL, '2023-12-02 08:02:57');

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
  `media` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `type` varchar(26) DEFAULT NULL,
  `display` char(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `gig_medias`
--

INSERT INTO `gig_medias` (`id`, `gig_id`, `title`, `description`, `media`, `type`, `display`, `created_at`, `updated_at`) VALUES
(23, 1, '1234', '54321', 'uploads/gigs/animashit-upload_image-1-51261.jpg', 'upload_image', 'thumbnail', '2023-12-02 04:23:56', '2023-12-02 11:23:56'),
(24, 1, 'asdf', 'asdfsaf', 'uploads/gigs/animashit-upload_video-1-52266.mp4', 'upload_video', 'background', '2023-12-02 09:17:57', '2023-12-02 16:17:58'),
(25, 1, 'sdf as f', 's fas fs f', 'https://www.youtube.com/watch?v=9LTitkyM8e8', 'embed_video', 'background', '2023-12-02 09:24:01', '2023-12-02 16:24:01'),
(22, 1, 'a sdfasd fasd', 'fasd fas df', 'uploads/gigs/animashit-upload_image-1-32428.jpg', 'upload_image', 'background', '2023-12-02 04:17:48', '2023-12-02 11:17:48'),
(21, 2, 'sdf asfas', 'fas fas df', 'uploads/gigs/animashit-upload_image-2-6041.jpg', 'upload_image', 'thumbnail', '2023-12-02 04:17:00', '2023-12-02 11:17:00'),
(26, 1, 'dfsfds', 'sd fs fsd', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9LTitkyM8e8?si=umj16m76eH3edzWa\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'embed_video', 'background', '2023-12-02 09:24:57', '2023-12-02 16:24:57');

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
(3, 60, 3, 10, '4', '2023-11-20', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(4, 49, 6, 10, '5', '2023-10-26', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(5, 50, 9, 10, '4', '2023-10-25', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(6, 63, 12, 10, '1', '2023-11-25', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(7, 47, 15, 10, '1', '2023-07-10', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(8, 60, 18, 10, '2', '2023-11-14', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(9, 61, 4, 10, '3', '2023-08-18', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(10, 47, 16, 10, '6', '2023-03-09', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(11, 59, 1, 10, '2', '2023-09-28', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(12, 62, 5, 10, '3', '2023-04-27', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(13, 60, 8, 10, '6', '2023-05-09', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(14, 55, 10, 10, '1', '2023-03-09', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(15, 47, 11, 10, '1', '2023-10-30', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(16, 63, 13, 10, '2', '2023-08-09', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(17, 47, 14, 10, '6', '2023-06-13', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(18, 46, 7, 10, '2', '2023-09-11', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(19, 55, 17, 20, '4', '2023-08-06', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04'),
(20, 61, 2, 20, '3', '2023-12-05', '', '2023-11-27 14:22:23', '2023-11-27 21:30:04');

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
(2, 'Unsent', 'Belum Dikirim / Unsent ,Invoice yang telah dibuat tetapi belum dikirim kepada pelanggan.', '#ffda0e', '#000000', 3),
(3, 'Unpaid', 'Belum Dibayar / Unpaid ,Invoice yang telah dikirim kepada pelanggan tetapi belum dibayar.', '#ffe65f', '#000000', 10),
(4, 'In Progress', 'Dalam Proses / In Progress ,Invoice yang sedang dalam proses peninjauan atau persetujuan sebelum dikirim ke pelanggan.', '#ffef96', '#000000', 4),
(5, 'In Payment', 'Dalam Pembayaran / In Payment ,Invoice yang sedang dalam proses pembayaran oleh pelanggan.', '#fff5be', '#000000', 11),
(6, 'Paid', 'Telah Dibayar / Paid ,Invoice yang telah dibayar oleh pelanggan.', '#00ff42', '#000000', 12),
(7, 'Overdue', 'Terlambat / Overdue ,Invoice yang lewat jatuh tempo dan belum dibayar oleh pelanggan.', '#77ff9a', '#000000', 6),
(8, 'Cancelled', 'Dibatalkan / Cancelled ,Invoice yang telah dibatalkan oleh entitas pengirim atau pelanggan.', '#a4ffbc', '#000000', 7),
(9, 'In Delivery', 'Dalam Pengiriman / In Delivery ,Invoice yang telah dibayar dan sedang dalam proses pengiriman barang atau layanan.', '#caffd8', '#000000', 13),
(10, 'Under Review', 'Dalam Peninjauan / Under Review ,Invoice yang sedang dalam peninjauan atau audit oleh departemen keuangan atau tim yang bertanggung jawab.', '#0075ff', '#000000', 5),
(11, 'Completed', 'Selesai / Completed ,Invoice yang telah selesai dan telah diarsipkan atau dicatat.', '#3d96ff', '#000000', 16),
(12, 'Rejected', 'Ditolak / Rejected ,Invoice yang telah ditolak oleh pelanggan atau entitas yang menerimanya.', '#81bbff', '#000000', 8),
(13, 'On Hold', 'Dalam Gantung / On Hold ,Invoice yang ditunda atau diberhentikan sementara untuk beberapa alasan tertentu.', '#add3ff', '#000000', 1),
(14, 'In Approval', 'Dalam Persetujuan / In Approval ,Invoice yang sedang menunggu persetujuan dari pihak yang berwenang sebelum bisa dibayar.', '#7c2cff', '#000000', 2),
(15, 'In Refund Process', 'Dalam Proses Pengembalian / In Refund Process ,Invoice yang sedang dalam proses pengembalian uang atau kredit kepada pelanggan.', '#9351ff', '#000000', 14),
(16, 'In Exchange', 'Dalam Pertukaran / In Exchange ,Invoice yang sedang dalam proses pertukaran barang atau layanan.', '#a36aff', '#000000', 15),
(17, 'In Collection', 'Dalam Penagihan / In Collection ,Invoice yang masih belum dibayar dan sudah masuk ke proses penagihan.', '#b78bff', '#000000', 9);

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
(6, 'contact-us', 'Contact Us', 'We\'re open for any suggestion or just to have a chat\n\n', 'publish', 'contact-us', 5, '2023-10-23 05:41:55', '2023-11-27 17:07:11'),
(7, 'thanks-contact', 'Thanks for Contact Us!', 'Thanks for Contact Us!', 'private', 'contact-us', 5, '2023-10-23 05:41:55', '2023-11-18 20:51:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `page_medias`
--

CREATE TABLE `page_medias` (
  `id` int NOT NULL,
  `page_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `media` char(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `type` varchar(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `page_medias`
--

INSERT INTO `page_medias` (`id`, `page_id`, `title`, `description`, `media`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(2, 2, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(3, 3, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(4, 4, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(6, 6, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'video', '2023-11-19 14:20:56', '2023-11-19 22:07:14'),
(55, 1, '', '', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(56, 2, '', '', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(57, 3, '', '', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(58, 4, '', '', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25'),
(60, 6, '', '', 'frontend/animashit/assets/images/cool-anime-video-music-album-cover-design-template-70bf413b3c1cf99db9e7a40aec385183_screen (1).jpg', 'image', '2023-11-19 14:20:56', '2023-11-19 22:02:25');

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
(82, 'sanctum.csrf-cookie', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(83, 'ignition.healthCheck', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(84, 'ignition.executeSolution', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(85, 'ignition.updateConfig', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(86, 'front.services.get_countries_list', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(87, 'front.services.get_gigs_list', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(88, 'front.services.get_gig_features_list', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(89, 'front.services.get_gig_medias_list', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(90, 'front.services.get_gig_packages_list', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(91, 'front.services.get_gig_package_extras_list', 'web', '2023-12-04 09:57:23', '2023-12-04 09:57:23'),
(92, 'front.services.get_gig_package_features_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(93, 'front.services.get_gig_package_head_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(94, 'front.services.get_gig_package_medias_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(95, 'front.services.get_packages_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(96, 'front.services.get_pages_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(97, 'front.services.get_portfolios_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(98, 'front.services.get_portfolio_medias_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(99, 'front.services.get_profiles_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(100, 'front.services.get_schedules_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(101, 'front.services.get_schedule_items_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(102, 'front.services.get_schedule_item_types_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(103, 'front.services.get_schedule_status_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(104, 'front.services.get_settings_list', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(105, 'front.services.get_youtube_url', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(106, 'front.services.get_countries_detail', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(107, 'front.services.get_gigs_detail', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(108, 'front.services.get_gig_features_detail', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(109, 'front.services.get_gig_medias_detail', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(110, 'front.services.get_gig_packages_detail', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(111, 'front.services.get_gig_package_extras_detail', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(112, 'front.services.get_gig_package_features_detail', 'web', '2023-12-04 09:57:24', '2023-12-04 09:57:24'),
(113, 'front.services.get_gig_package_head_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(114, 'front.services.get_gig_package_medias_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(115, 'front.services.get_packages_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(116, 'front.services.get_pages_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(117, 'front.services.get_portfolios_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(118, 'front.services.get_portfolio_medias_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(119, 'front.services.get_profiles_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(120, 'front.services.get_schedules_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(121, 'front.services.get_schedule_items_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(122, 'front.services.get_schedule_item_types_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(123, 'front.services.get_schedule_status_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(124, 'front.services.get_settings_detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(125, 'front.home', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(126, 'front.artist.detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(127, 'contact.send', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(128, 'contact.thanks', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(129, 'modal.artist.detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(130, 'modal.artist.portfolios', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(131, 'modal.portfolio.detail', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(132, 'admin.dashboard0dashboard', 'web', '2023-12-04 09:57:25', '2023-12-04 09:57:25'),
(133, 'services.features', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(134, 'services.gigpackages', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(135, 'profile.edit', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(136, 'profile.update', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(137, 'profile.destroy', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(138, 'admin.dashboard', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(139, 'admin.portfolio.package', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(140, 'admin.account.settings', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(141, 'admin.account.password', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(142, 'admin.gigmedias.bygig', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(143, 'admin.gigmedias.bygigpost', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(144, 'admin.gigfeatures.post', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(145, 'admin.gigpackages.post', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(146, 'admin.portfolios.store', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(147, 'admin.roles.index', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(148, 'admin.roles.create', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(149, 'admin.roles.store', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(150, 'admin.roles.show', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(151, 'admin.roles.edit', 'web', '2023-12-04 09:57:26', '2023-12-04 09:57:26'),
(152, 'admin.roles.update', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(153, 'admin.roles.destroy', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(154, 'admin.users.index', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(155, 'admin.users.create', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(156, 'admin.users.store', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(157, 'admin.users.show', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(158, 'admin.users.edit', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(159, 'admin.users.update', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(160, 'admin.users.destroy', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(161, 'admin.gigs.index', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(162, 'admin.gigs.create', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(163, 'admin.gigs.store', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(164, 'admin.gigs.show', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(165, 'admin.gigs.edit', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(166, 'admin.gigs.update', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(167, 'admin.gigs.destroy', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(168, 'admin.gigmedias.index', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(169, 'admin.gigmedias.create', 'web', '2023-12-04 09:57:27', '2023-12-04 09:57:27'),
(170, 'admin.gigmedias.store', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(171, 'admin.gigmedias.show', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(172, 'admin.gigmedias.edit', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(173, 'admin.gigmedias.update', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(174, 'admin.gigmedias.destroy', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(175, 'admin.gigpackages.index', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(176, 'admin.gigpackages.create', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(177, 'admin.gigpackages.store', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(178, 'admin.gigpackages.show', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(179, 'admin.gigpackages.edit', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(180, 'admin.gigpackages.update', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(181, 'admin.gigpackages.destroy', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(182, 'admin.gigfeatures.index', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(183, 'admin.gigfeatures.create', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(184, 'admin.gigfeatures.store', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(185, 'admin.gigfeatures.show', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(186, 'admin.gigfeatures.edit', 'web', '2023-12-04 09:57:28', '2023-12-04 09:57:28'),
(187, 'admin.gigfeatures.update', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(188, 'admin.gigfeatures.destroy', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(189, 'admin.artists.index', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(190, 'admin.artists.create', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(191, 'admin.artists.store', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(192, 'admin.artists.show', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(193, 'admin.artists.edit', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(194, 'admin.artists.update', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(195, 'admin.artists.destroy', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(196, 'admin.artistmedias.index', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(197, 'admin.artistmedias.create', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(198, 'admin.artistmedias.store', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(199, 'admin.artistmedias.show', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(200, 'admin.artistmedias.edit', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(201, 'admin.artistmedias.update', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(202, 'admin.artistmedias.destroy', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(203, 'admin.orders.index', 'web', '2023-12-04 09:57:29', '2023-12-04 09:57:29'),
(204, 'admin.orders.create', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(205, 'admin.orders.store', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(206, 'admin.orders.show', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(207, 'admin.orders.edit', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(208, 'admin.orders.update', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(209, 'admin.orders.destroy', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(210, 'admin.customers.index', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(211, 'admin.customers.create', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(212, 'admin.customers.store', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(213, 'admin.customers.show', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(214, 'admin.customers.edit', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(215, 'admin.customers.update', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(216, 'admin.customers.destroy', 'web', '2023-12-04 09:57:30', '2023-12-04 09:57:30'),
(217, 'admin.schedules.index', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(218, 'admin.schedules.create', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(219, 'admin.schedules.store', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(220, 'admin.schedules.show', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(221, 'admin.schedules.edit', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(222, 'admin.schedules.update', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(223, 'admin.schedules.destroy', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(224, 'admin.pages.index', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(225, 'admin.pages.create', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(226, 'admin.pages.store', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(227, 'admin.pages.show', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(228, 'admin.pages.edit', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(229, 'admin.pages.update', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(230, 'admin.pages.destroy', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(231, 'admin.siteconfigs.index', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(232, 'admin.siteconfigs.create', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(233, 'admin.siteconfigs.store', 'web', '2023-12-04 09:57:31', '2023-12-04 09:57:31'),
(234, 'admin.siteconfigs.show', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(235, 'admin.siteconfigs.edit', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(236, 'admin.siteconfigs.update', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(237, 'admin.siteconfigs.destroy', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(238, 'admin.portfolios.index', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(239, 'admin.portfolios.create', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(240, 'admin.portfolios.show', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(241, 'admin.portfolios.edit', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(242, 'admin.portfolios.update', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(243, 'admin.portfolios.destroy', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(244, 'admin.portfoliomedias.index', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(245, 'admin.portfoliomedias.create', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(246, 'admin.portfoliomedias.store', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(247, 'admin.portfoliomedias.show', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(248, 'admin.portfoliomedias.edit', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(249, 'admin.portfoliomedias.update', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(250, 'admin.portfoliomedias.destroy', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(251, 'register', 'web', '2023-12-04 09:57:32', '2023-12-04 09:57:32'),
(252, 'login', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(253, 'password.request', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(254, 'password.email', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(255, 'password.reset', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(256, 'password.store', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(257, 'verification.notice', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(258, 'verification.verify', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(259, 'verification.send', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(260, 'password.confirm', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(261, 'password.update', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33'),
(262, 'logout', 'web', '2023-12-04 09:57:33', '2023-12-04 09:57:33');

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
  `status` enum('publish','private') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `portfolios`
--

INSERT INTO `portfolios` (`id`, `gig_package_id`, `gig_id`, `artist_id`, `customer_id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 36, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(2, 2, 7, 45, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(3, 3, 5, 29, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(4, 4, 3, 34, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(5, 5, 6, 37, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(6, 6, 4, 28, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(7, 7, 5, 43, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(8, 8, 7, 38, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(9, 9, 6, 30, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(10, 10, 1, 39, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(11, 11, 2, 40, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(12, 12, 7, 31, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(13, 13, 3, 41, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(14, 14, 4, 42, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(15, 15, 1, 32, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(16, 16, 4, 35, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(17, 17, 6, 44, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(18, 18, 2, 33, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(19, 19, 5, 29, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(20, 20, 4, 28, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(21, 21, 6, 30, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(22, 22, 5, 36, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(23, 23, 7, 31, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(24, 24, 4, 35, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(25, 25, 1, 32, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(26, 26, 2, 33, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(27, 27, 6, 37, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(28, 28, 3, 41, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(29, 29, 1, 39, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(30, 30, 4, 42, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(31, 31, 7, 38, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(32, 32, 5, 43, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(33, 33, 6, 44, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(34, 34, 2, 40, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(35, 35, 7, 45, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(36, 36, 3, 34, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(37, 37, 2, 40, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(38, 38, 4, 35, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(39, 39, 5, 36, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(40, 40, 3, 41, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(41, 41, 6, 30, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(42, 42, 5, 29, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(43, 43, 4, 42, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(44, 44, 4, 28, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(45, 45, 7, 38, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(46, 46, 5, 43, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(47, 47, 7, 31, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(48, 48, 6, 37, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(49, 49, 6, 44, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(50, 50, 1, 32, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(51, 51, 1, 39, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(52, 52, 7, 45, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(53, 53, 2, 33, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(54, 54, 3, 34, 46, '', '', 'publish', '2023-11-19 14:17:24', '0000-00-00 00:00:00'),
(55, 19, 5, NULL, 48, 'Title', 'Description', 'publish', '2023-11-28 04:59:44', '2023-11-28 11:59:44'),
(56, 45, 7, NULL, 50, 'sad fas df', 'a fas fd', 'publish', '2023-11-28 05:00:56', '2023-11-28 12:00:56'),
(57, 45, 7, NULL, 50, 'sad fas df', 'a fas fd', 'publish', '2023-11-28 05:04:49', '2023-11-28 12:04:49'),
(58, 45, 7, NULL, 50, 'sad fas df', 'a fas fd', 'publish', '2023-11-28 05:05:08', '2023-11-28 12:05:08'),
(59, 45, 7, NULL, 50, 'sad fas df', 'a fas fd', 'publish', '2023-11-28 05:05:33', '2023-11-28 12:05:33'),
(60, 45, 7, NULL, 50, 'sad fas df', 'a fas fd', 'publish', '2023-11-28 05:05:51', '2023-11-28 12:05:51'),
(61, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:09:04', '2023-11-28 12:09:04'),
(62, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:36:14', '2023-11-28 12:36:14'),
(63, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:36:29', '2023-11-28 12:36:29'),
(64, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:37:11', '2023-11-28 12:37:11'),
(65, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:37:27', '2023-11-28 12:37:27'),
(66, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:37:32', '2023-11-28 12:37:32'),
(67, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:37:41', '2023-11-28 12:37:41'),
(68, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:37:54', '2023-11-28 12:37:54'),
(69, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:38:10', '2023-11-28 12:38:10'),
(70, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:38:55', '2023-11-28 12:38:55'),
(71, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:40:18', '2023-11-28 12:40:18'),
(72, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:40:26', '2023-11-28 12:40:26'),
(73, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:41:00', '2023-11-28 12:41:00'),
(74, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:41:13', '2023-11-28 12:41:13'),
(75, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:41:52', '2023-11-28 12:41:52'),
(76, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:46:56', '2023-11-28 12:46:56'),
(77, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:48:38', '2023-11-28 12:48:38'),
(78, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:48:52', '2023-11-28 12:48:52'),
(79, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:49:03', '2023-11-28 12:49:03'),
(80, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:50:39', '2023-11-28 12:50:39'),
(81, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:51:31', '2023-11-28 12:51:31'),
(82, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:51:56', '2023-11-28 12:51:56'),
(83, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:53:24', '2023-11-28 12:53:24'),
(84, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:54:55', '2023-11-28 12:54:55'),
(85, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:57:27', '2023-11-28 12:57:27'),
(86, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:57:47', '2023-11-28 12:57:47'),
(87, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 05:59:36', '2023-11-28 12:59:36'),
(88, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 06:00:05', '2023-11-28 13:00:05'),
(89, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 06:00:59', '2023-11-28 13:00:59'),
(90, 20, 4, NULL, 50, 'sda fdas f', 'das fdas fdas f', 'publish', '2023-11-28 06:01:10', '2023-11-28 13:01:10'),
(91, 25, 1, 32, 64, 'test2asd fasd fasdf as sd f', 'test2asd fasd fasdf as sd f', 'publish', '2023-12-04 18:49:21', '2023-12-05 04:04:36'),
(92, 25, 1, 32, 64, 'test2', 'test2', 'publish', '2023-12-04 19:15:49', '2023-12-05 04:14:13'),
(93, 25, 1, 32, 64, 'test2', 'test2', 'publish', '2023-12-04 19:18:15', '2023-12-05 02:18:15'),
(94, 25, 1, 32, 64, 'test2', 'test2', 'publish', '2023-12-04 19:20:56', '2023-12-05 02:20:56'),
(95, 17, 6, 44, 52, 'Test', '<p>Test&nbsp;<br></p>', 'publish', '2023-12-05 00:04:06', '2023-12-05 07:04:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio_medias`
--

CREATE TABLE `portfolio_medias` (
  `id` int NOT NULL,
  `portfolio_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `media` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `type` enum('upload_image','upload_video','url_image','embed_video') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'upload_image',
  `sort` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `portfolio_medias`
--

INSERT INTO `portfolio_medias` (`id`, `portfolio_id`, `title`, `description`, `media`, `type`, `sort`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:02:42'),
(2, 2, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(3, 3, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(4, 4, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(5, 5, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(6, 6, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(7, 7, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(8, 8, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(9, 9, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(10, 10, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(11, 11, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(12, 12, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(13, 13, '', '', 'frontend/animashit/assets/videos/LIVE2D Showcase Coco Moka.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(14, 14, '', '', 'frontend/animashit/assets/videos/video1.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(15, 15, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(16, 16, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(17, 17, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(18, 18, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(19, 19, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(20, 20, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(21, 21, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(22, 22, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(23, 23, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(24, 24, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(25, 25, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(26, 26, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(27, 27, '', '', 'frontend/animashit/assets/videos/LIVE2D Showcase Coco Moka.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(28, 28, '', '', 'frontend/animashit/assets/videos/video1.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(29, 29, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(30, 30, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(31, 31, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(32, 32, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(33, 33, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(34, 34, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(35, 35, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(36, 36, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(37, 37, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(38, 38, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(39, 39, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(40, 40, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(41, 41, '', '', 'frontend/animashit/assets/videos/LIVE2D Showcase Coco Moka.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(42, 42, '', '', 'frontend/animashit/assets/videos/video1.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(43, 43, '', '', 'frontend/animashit/assets/videos/000 velorina v2 .mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(44, 44, '', '', 'frontend/animashit/assets/videos/001 omis v2.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(45, 45, '', '', 'frontend/animashit/assets/videos/002 brighter-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(46, 46, '', '', 'frontend/animashit/assets/videos/003 bad queen.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(47, 47, '', '', 'frontend/animashit/assets/videos/004 denzio.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(48, 48, '', '', 'frontend/animashit/assets/videos/005 dtype.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(49, 49, '', '', 'frontend/animashit/assets/videos/006 lil_ren.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(50, 50, '', '', 'frontend/animashit/assets/videos/008 Project Beyond-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(51, 51, '', '', 'frontend/animashit/assets/videos/009 skeith.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(52, 52, '', '', 'frontend/animashit/assets/videos/010 Cutedog-.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(53, 53, '', '', 'frontend/animashit/assets/videos/011 Curro.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(54, 54, '', '', 'frontend/animashit/assets/videos/012 Korshal Valent.mp4', 'upload_video', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(55, 1, '', '', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(56, 2, '', '', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(57, 3, '', '', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(58, 4, '', '', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(59, 5, '', '', 'frontend/animashit/assets/images/Banner_July_2022.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(60, 6, '', '', 'frontend/animashit/assets/images/cool-anime-video-music-album-cover-design-template-70bf413b3c1cf99db9e7a40aec385183_screen (1).jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(61, 7, '', '', 'frontend/animashit/assets/images/Dandi.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(62, 8, '', '', 'frontend/animashit/assets/images/dota2-antimage.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(63, 9, '', '', 'frontend/animashit/assets/images/dota2-bs.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(64, 10, '', '', 'frontend/animashit/assets/images/dota2-chen.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(65, 11, '', '', 'frontend/animashit/assets/images/dota2-cm.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(66, 12, '', '', 'frontend/animashit/assets/images/dota2-kunka.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(67, 13, '', '', 'frontend/animashit/assets/images/dota2-luna.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(68, 14, '', '', 'frontend/animashit/assets/images/dota2-pa.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(69, 15, '', '', 'frontend/animashit/assets/images/dota2-pl.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(70, 16, '', '', 'frontend/animashit/assets/images/dota2-riki.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(71, 17, '', '', 'frontend/animashit/assets/images/dota2-shaman.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(72, 18, '', '', 'frontend/animashit/assets/images/dota2-sky.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(73, 19, '', '', 'frontend/animashit/assets/images/dota2-zeus.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(74, 20, '', '', 'frontend/animashit/assets/images/dota2heroes.png', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(75, 21, '', '', 'frontend/animashit/assets/images/earthmalik_2.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(76, 22, '', '', 'frontend/animashit/assets/images/earthmalik_3.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(77, 23, '', '', 'frontend/animashit/assets/images/HD-wallpaper-anime-anime-girls-digital-art-artwork-2d-portrait-display-vertical-qtian-short-hair-redhead.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(78, 24, '', '', 'frontend/animashit/assets/images/hero.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(79, 25, '', '', 'frontend/animashit/assets/images/kizunaai_animeillustration-1-scaled-e1668157274531.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(80, 26, '', '', 'frontend/animashit/assets/images/logo.png', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(81, 27, '', '', 'frontend/animashit/assets/images/logodark.png', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(82, 28, '', '', 'frontend/animashit/assets/images/logolight.png', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(83, 29, '', '', 'frontend/animashit/assets/images/Lyart.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(84, 30, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 110601.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(85, 31, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 111833.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(86, 32, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 111951.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(87, 33, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112107.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(88, 34, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112336.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(89, 35, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112411.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(90, 36, '', '', 'frontend/animashit/assets/images/Screenshot 2023-08-03 112449.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(91, 37, '', '', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(92, 38, '', '', 'frontend/animashit/assets/images/81m6eNdRWwL.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(93, 39, '', '', 'frontend/animashit/assets/images/artworks-000482429877-fpqzie-t500x500.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(94, 40, '', '', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(95, 41, '', '', 'frontend/animashit/assets/images/Banner_July_2022.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(96, 42, '', '', 'frontend/animashit/assets/images/cool-anime-video-music-album-cover-design-template-70bf413b3c1cf99db9e7a40aec385183_screen (1).jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(97, 43, '', '', 'frontend/animashit/assets/images/Dandi.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(98, 44, '', '', 'frontend/animashit/assets/images/dota2-antimage.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(99, 45, '', '', 'frontend/animashit/assets/images/dota2-bs.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(100, 46, '', '', 'frontend/animashit/assets/images/dota2-chen.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(101, 47, '', '', 'frontend/animashit/assets/images/dota2-cm.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(102, 48, '', '', 'frontend/animashit/assets/images/dota2-kunka.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(103, 49, '', '', 'frontend/animashit/assets/images/dota2-luna.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(104, 50, '', '', 'frontend/animashit/assets/images/dota2-pa.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(105, 51, '', '', 'frontend/animashit/assets/images/dota2-pl.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(106, 52, '', '', 'frontend/animashit/assets/images/dota2-riki.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(107, 53, '', '', 'frontend/animashit/assets/images/dota2-shaman.jpeg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(108, 54, '', '', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', 'upload_image', 0, '2023-11-19 14:20:56', '2023-11-28 20:03:05'),
(109, NULL, 'sda fdas fdas', 'fdas fdas f', 'uploads/portfolios/animashit-upload_image-88-0.jpg', 'upload_image', 0, '2023-11-28 06:00:05', '2023-11-28 13:00:05'),
(110, NULL, 'adf s fasd f', 'asd fas fdas f', 'uploads/portfolios/animashit-upload_video-88-1.jpg', 'upload_video', 1, '2023-11-28 06:00:05', '2023-11-28 13:00:05'),
(111, 89, 'sda fdas fdas', 'fdas fdas f', 'uploads/portfolios/animashit-upload_image-89-0.jpg', 'upload_image', 0, '2023-11-28 06:00:59', '2023-11-28 13:00:59'),
(112, 89, 'adf s fasd f', 'asd fas fdas f', 'uploads/portfolios/animashit-upload_video-89-1.jpg', 'upload_video', 1, '2023-11-28 06:00:59', '2023-11-28 13:00:59'),
(113, 90, 'sda fdas fdas', 'fdas fdas f', 'uploads/portfolios/animashit-upload_image-90-0.jpg', 'upload_image', 0, '2023-11-28 06:01:10', '2023-11-28 13:01:10'),
(114, 90, 'adf s fasd f', 'asd fas fdas f', 'uploads/portfolios/animashit-upload_video-90-1.jpg', 'upload_video', 1, '2023-11-28 06:01:10', '2023-11-28 13:01:10'),
(125, 92, 'sda fasf sdaf', 'as fas f', NULL, 'upload_video', 1, '2023-12-04 21:14:13', '2023-12-05 04:14:13'),
(124, 92, 'sdaf asdf', 'as fasd fasd f', NULL, 'upload_image', 0, '2023-12-04 21:14:13', '2023-12-05 04:14:13'),
(141, 91, 'fdas fdas fds f', 'asd fdas fdas', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BadB1z-V_qU?si=O1DIrhL58hTXxf4E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'embed_video', 3, '2023-12-05 00:09:31', '2023-12-05 07:09:31'),
(140, 95, 'df adfdasf', 'das fdas f', 'uploads/portfolios/animashit-upload_image-95-1-20231205070406.jpg', 'upload_image', 1, '2023-12-05 00:04:06', '2023-12-05 07:04:06'),
(138, 91, 'das fdas f', 'a fad fdasf', 'uploads/portfolios/animashit-upload_video-91-0-20231205070224.mp4', 'upload_video', 0, '2023-12-04 23:59:22', '2023-12-05 07:02:24'),
(139, 95, 'as dad as das d', 'dsf asdf das f', 'uploads/portfolios/animashit-upload_video-95-0-20231205070406.mp4', 'upload_video', 0, '2023-12-05 00:04:06', '2023-12-05 07:04:06'),
(135, 91, 'fasd fdas', 'fdsa fsda fdas f', 'uploads/portfolios/animashit-upload_video-91-2-20231205065546.mp4', 'upload_video', 1, '2023-12-04 23:55:47', '2023-12-05 07:02:24'),
(134, 91, 'dsf asd fdsf', 'ds fds f', 'uploads/portfolios/animashit-upload_image-91-1-20231205065546.jpg', 'upload_image', 2, '2023-12-04 23:55:46', '2023-12-05 07:02:24');

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
(44, 'MUSICER 3', 'musicer_3', '1701763913.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 08:11:53'),
(45, 'IDLE ANIMATOR 3', 'idle_animator_3', '1701763898.jpeg', NULL, 'idle_animator_3@animashit.com', '1234', '1234', '1234', '1234', '1234', '4', NULL, '2023-11-19 10:48:39', '2023-12-05 08:11:38'),
(43, 'OVERLAYER 3', 'overlayer_3', '1701763927.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 08:12:07'),
(42, 'RIGGING ANIMATOR 3', 'rigging_animator_3', '1701763937.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 08:12:17'),
(36, 'RIGGING ANIMATOR 2', 'rigging_animator_2', '1701774443.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:07:23'),
(37, 'OVERLAYER 2', 'overlayer_2', '1701774438.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:07:18'),
(38, 'MUSICER 2', 'musicer_2', '1701774433.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:07:13'),
(39, 'IDLE ANIMATOR 2', 'idle_animator_2', '1701774426.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:07:06'),
(40, 'ILLUSTRATOR 3', 'illustrator_3', '1701774421.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:07:01'),
(41, 'CHARACTER DESIGNER 3', 'character_designer_3', '1701763947.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 08:12:27'),
(35, 'CHARACTER DESIGNER 2', 'character_designer_2', '1701774471.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:07:51'),
(34, 'ILLUSTRATOR 2', 'illustrator_2', '1701774476.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:07:56'),
(33, 'IDLE ANIMATOR 1', 'idle_animator_1', '1701774481.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:08:01'),
(32, 'MUSICER 1', 'musicer_1', '1701774487.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:08:07'),
(31, 'OVERLAYER 1', 'overlayer_1', '1701774492.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:08:12'),
(30, 'RIGGING ANIMATOR 1', 'rigging_animator_1', '1701774497.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:08:17'),
(29, 'CHARACTER DESIGNER 1', 'character_designer_1', '1701774502.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:08:22'),
(28, 'ILLUSTRATOR 1', 'illustrator_1', '1701774507.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, '2023-11-19 10:48:39', '2023-12-05 11:08:27'),
(46, 'CUSTOMER 1', 'customer_1', 'frontend/animashit/assets/images/3decfe73-0a61-4518-a8dc-dcac19c4d40c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-19 10:48:39', '2023-11-19 17:56:14'),
(47, 'MUSIC 29', 'music 29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(48, 'OVERLAY 28', 'overlay 28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(49, 'IDLE ANIMATION 30', 'idle animation 30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(50, 'VTUBBER BUNDLE 31', 'vtubber bundle 31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(51, 'ILLUSTRATION 32', 'illustration 32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(52, 'CHARACTER DESIGN 33', 'character design 33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(53, 'RIGGING ANIMATION 34', 'rigging animation 34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(54, 'OVERLAY 35', 'overlay 35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(55, 'MUSIC 36', 'music 36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(56, 'IDLE ANIMATION 37', 'idle animation 37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(57, 'VTUBBER BUNDLE 38', 'vtubber bundle 38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(58, 'ILLUSTRATION 39', 'illustration 39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(59, 'CHARACTER DESIGN 40', 'character design 40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(60, 'RIGGING ANIMATION 41', 'rigging animation 41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(61, 'OVERLAY 42', 'overlay 42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(62, 'MUSIC 43', 'music 43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(63, 'IDLE ANIMATION 44', 'idle animation 44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '0000-00-00 00:00:00'),
(64, 'VTUBBER BUNDLE 45', 'vtubber bundle 45', '1702023892.jpeg', '0', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, '2023-11-24 07:05:26', '2023-12-08 08:24:52'),
(65, 'Administrator', 'admin', 'frontend/animashit/assets/images/Banner_BGM-New_resize2.jpg ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 3, '2023-11-19 10:48:39', '2023-11-19 17:56:23');

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
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(100, 2),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(106, 2),
(107, 2),
(108, 2),
(109, 2),
(110, 2),
(111, 2),
(112, 2),
(113, 2),
(114, 2),
(115, 2),
(116, 2),
(117, 2),
(118, 2),
(119, 2),
(120, 2),
(121, 2),
(122, 2),
(123, 2),
(124, 2),
(125, 2),
(126, 2),
(127, 2),
(128, 2),
(129, 2),
(130, 2),
(131, 2),
(132, 2),
(133, 2),
(134, 2),
(135, 2),
(136, 2),
(137, 2),
(138, 2),
(139, 2),
(140, 2),
(141, 2),
(142, 2),
(143, 2),
(144, 2),
(145, 2),
(146, 2),
(147, 2),
(148, 2),
(149, 2),
(150, 2),
(151, 2),
(152, 2),
(153, 2),
(154, 2),
(155, 2),
(156, 2),
(157, 2),
(158, 2),
(159, 2),
(160, 2),
(161, 2),
(162, 2),
(163, 2),
(164, 2),
(165, 2),
(166, 2),
(167, 2),
(168, 2),
(169, 2),
(170, 2),
(171, 2),
(172, 2),
(173, 2),
(174, 2),
(175, 2),
(176, 2),
(177, 2),
(178, 2),
(179, 2),
(180, 2),
(181, 2),
(182, 2),
(183, 2),
(184, 2),
(185, 2),
(186, 2),
(187, 2),
(188, 2),
(189, 2),
(190, 2),
(191, 2),
(192, 2),
(193, 2),
(194, 2),
(195, 2),
(196, 2),
(197, 2),
(198, 2),
(199, 2),
(200, 2),
(201, 2),
(202, 2),
(203, 2),
(204, 2),
(205, 2),
(206, 2),
(207, 2),
(208, 2),
(209, 2),
(210, 2),
(211, 2),
(212, 2),
(213, 2),
(214, 2),
(215, 2),
(216, 2),
(217, 2),
(218, 2),
(219, 2),
(220, 2),
(221, 2),
(222, 2),
(223, 2),
(224, 2),
(225, 2),
(226, 2),
(227, 2),
(228, 2),
(229, 2),
(230, 2),
(231, 2),
(232, 2),
(233, 2),
(234, 2),
(235, 2),
(236, 2),
(237, 2),
(238, 2),
(239, 2),
(240, 2),
(241, 2),
(242, 2),
(243, 2),
(244, 2),
(245, 2),
(246, 2),
(247, 2),
(248, 2),
(249, 2),
(250, 2),
(251, 2),
(252, 2),
(253, 2),
(254, 2),
(255, 2),
(256, 2),
(257, 2),
(258, 2),
(259, 2),
(260, 2),
(261, 2),
(262, 2);

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
(4, 4, 4, 28, 49, '2023-10-26', '2023-11-30', '5', '2023-11-24 07:33:46', '2023-11-27 21:16:22'),
(3, 3, 5, 29, 60, '2023-11-20', '2023-12-04', '4', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(5, 5, 6, 30, 50, '2023-10-25', '2023-11-01', '4', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(6, 6, 7, 31, 63, '2023-11-25', '2023-12-30', '2', '2023-11-24 07:33:46', '2023-12-08 08:57:52'),
(7, 7, 1, 32, 47, '2023-07-10', '2023-07-31', '1', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(8, 8, 2, 33, 60, '2023-11-14', '2023-11-28', '2', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(9, 9, 3, 34, 61, '2023-08-18', '2023-09-01', '3', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(10, 10, 4, 35, 47, '2023-03-09', '2023-04-06', '6', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(11, 11, 5, 36, 59, '2023-09-28', '2023-10-12', '2', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(12, 12, 6, 37, 62, '2023-04-27', '2023-05-18', '3', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(13, 13, 7, 38, 60, '2023-05-09', '2023-05-30', '6', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(14, 14, 1, 39, 55, '2023-03-09', '2023-04-13', '1', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(15, 15, 2, 40, 47, '2023-10-30', '2023-11-06', '1', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(16, 16, 3, 41, 63, '2023-08-09', '2023-09-06', '2', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(17, 17, 4, 42, 47, '2023-06-13', '2023-07-04', '6', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(18, 18, 5, 43, 46, '2023-09-11', '2023-09-25', '2', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(19, 19, 6, 44, 55, '2023-08-06', '2023-08-13', '4', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(20, 20, 7, 45, 61, '2023-12-05', '2023-12-19', '3', '2023-11-24 07:33:46', '2023-11-27 21:16:38'),
(21, 3, 6, 44, 48, '2023-12-13', '2023-12-12', '1', '2023-12-08 01:55:33', '2023-12-08 08:55:33');

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

--
-- Dumping data untuk tabel `schedule_items`
--

INSERT INTO `schedule_items` (`id`, `schedule_id`, `schedule_item_type_id`, `color`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 26, NULL, '2023-11-20', '2023-12-04', '4', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(2, 4, 21, NULL, '2023-10-26', '2023-11-30', '5', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(3, 5, 31, NULL, '2023-10-25', '2023-11-01', '4', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(4, 6, 36, NULL, '2023-11-25', '2023-12-30', '1', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(5, 7, 6, NULL, '2023-07-10', '2023-07-31', '1', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(6, 8, 11, NULL, '2023-11-14', '2023-11-28', '2', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(7, 9, 16, NULL, '2023-08-18', '2023-09-01', '3', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(8, 10, 21, NULL, '2023-03-09', '2023-04-06', '6', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(9, 11, 26, NULL, '2023-09-28', '2023-10-12', '2', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(10, 12, 31, NULL, '2023-04-27', '2023-05-18', '3', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(11, 13, 36, NULL, '2023-05-09', '2023-05-30', '6', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(12, 14, 6, NULL, '2023-03-09', '2023-04-13', '1', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(13, 15, 11, NULL, '2023-10-30', '2023-11-06', '1', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(14, 16, 16, NULL, '2023-08-09', '2023-09-06', '2', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(15, 17, 21, NULL, '2023-06-13', '2023-07-04', '6', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(16, 18, 26, NULL, '2023-09-11', '2023-09-25', '2', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(17, 19, 31, NULL, '2023-08-06', '2023-08-13', '4', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(18, 20, 36, NULL, '2023-12-05', '2023-12-19', '3', '2023-11-26 11:00:52', '0000-00-00 00:00:00'),
(19, 3, 26, NULL, '2023-11-20', '2023-12-04', '3', '2023-11-26 11:00:52', '0000-00-00 00:00:00');

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

--
-- Dumping data untuk tabel `schedule_item_types`
--

INSERT INTO `schedule_item_types` (`id`, `gig_id`, `title`, `description`) VALUES
(6, 1, 'Done', NULL),
(7, 1, 'Revision', NULL),
(8, 1, 'Review', NULL),
(9, 1, 'In Progress', NULL),
(10, 1, 'On Hold', NULL),
(11, 2, 'Done', NULL),
(12, 2, 'Revision', NULL),
(13, 2, 'Review', NULL),
(14, 2, 'In Progress', NULL),
(15, 2, 'On Hold', NULL),
(16, 3, 'Done', NULL),
(17, 3, 'Revision', NULL),
(18, 3, 'Review', NULL),
(19, 3, 'In Progress', NULL),
(20, 3, 'On Hold', NULL),
(21, 4, 'Done', NULL),
(22, 4, 'Revision', NULL),
(23, 4, 'Review', NULL),
(24, 4, 'In Progress', NULL),
(25, 4, 'On Hold', NULL),
(26, 5, 'Done', NULL),
(27, 5, 'Revision', NULL),
(28, 5, 'Review', NULL),
(29, 5, 'In Progress', NULL),
(30, 5, 'On Hold', NULL),
(31, 6, 'Done', NULL),
(32, 6, 'Revision', NULL),
(33, 6, 'Review', NULL),
(34, 6, 'In Progress', NULL),
(35, 6, 'On Hold', NULL),
(36, 7, 'Done', NULL),
(37, 7, 'Revision', NULL),
(38, 7, 'Review', NULL),
(39, 7, 'In Progress', NULL),
(40, 7, 'On Hold', NULL),
(41, 8, 'Done', NULL),
(42, 8, 'Revision', NULL),
(43, 8, 'Review', NULL),
(44, 8, 'In Progress', NULL),
(45, 8, 'On Hold', NULL);

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
(3, 'backend', 'fdsfdsfasdf', 'dasfdasf', 'asdfasdf', 'dasfdasf'),
(4, 'contact', 'Facebook', 'facebook', 'animashitstudio', ''),
(5, 'contact', 'Twitter', 'twitter', 'animashitstudio', ''),
(6, 'contact', 'Instagram', 'instagram', 'animashitstudio', ''),
(7, 'contact', 'Youtube', 'youtube', 'animashitstudio', ''),
(8, 'contact', 'Discord', 'discord', 'animashitstudio', '');

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
(3, 'Admin istrator', 'nietaldarkopik@gmail.com', NULL, '$2y$10$kqBh6D4VtMwojNQgVqLV0e3/NAvYDWRX7RxgkVlaSXi3bKkKGmMki', '7db5h918AjtWsGXf71W6URrIupTxkdB8VrSzxFJ7atA0NlS2HggFVmxBskuP', '2023-10-19 09:47:30', '2023-10-19 09:47:30'),
(4, 'test', 'nietaldarkopik2@gmail.com', NULL, '$2y$10$6PeEabvMP3vv9rKQVbLTS.aWFp5C2NcHz86NhufHY6l4Kdicv7QaG', NULL, '2023-10-21 10:24:57', '2023-10-21 10:24:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `page_medias`
--
ALTER TABLE `page_medias`
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
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `page_medias`
--
ALTER TABLE `page_medias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `portfolio_medias`
--
ALTER TABLE `portfolio_medias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `schedule_items`
--
ALTER TABLE `schedule_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `schedule_item_types`
--
ALTER TABLE `schedule_item_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `schedule_status`
--
ALTER TABLE `schedule_status`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
