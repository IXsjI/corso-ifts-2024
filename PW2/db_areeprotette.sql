-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 16, 2024 alle 18:06
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_areeprotette`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `areas`
--

CREATE TABLE `areas` (
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `a_nome` varchar(50) NOT NULL,
  `a_immagine` text NOT NULL,
  `a_descrizione` text NOT NULL,
  `a_tipo_ambiente` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `areas`
--

INSERT INTO `areas` (`area_id`, `a_nome`, `a_immagine`, `a_descrizione`, `a_tipo_ambiente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Secche della Meloria', 'https://www.gareremierelivorno.it/wp-content/uploads/2017/04/meloria-alto.jpg', 'I fondali delle Secche delle Meloria sono costituiti da un mosaico di habitat diversi, quali praterie di fanerogame marine, formazioni rocciose, distese di sedimenti sabbiosi e concrezioni a coralligeno.\r\nL\'elemento predominante è costituito dalle vaste praterie di Posidonia oceanica, estese fino alla batimetrica dei 30 metri, che ospitano una biodiversità elevatissima e fanno da nursery a numerose specie di pesci di elevata importanza commerciale.', 'Mare', NULL, NULL, NULL),
(2, 'Dolomiti Bellunesi', 'https://www.veneto.info/wp-content/uploads/sites/114/dolomiti-bellunesi-laghi-dei-piani.jpg', 'Siamo nella parte sud-orientale delle Dolomiti: le altezze vanno da dolci rilievi a vette oltre i 2000 metri, gli ambienti spaziano dai prati del fondo valle alle vertiginose pareti rocciose passando per praterie, boschi e foreste. Pochi i centri abitati: qui l’uomo è ancora l’ospite, è la natura a trionfare.', 'Montagna', NULL, NULL, NULL),
(3, 'Foreste Casentinesi', 'https://www.parcoforestecasentinesi.it/sites/default/files/prato%20alla%20penna%202%20%281%29_0.jpg', 'Il Parco nazionale delle Foreste Casentinesi, Monte Falterona e Campigna è un parco nazionale istituito nel 1993[2], situato nell\'Appennino tosco-romagnolo, lungo il confine delle regioni Emilia-Romagna e Toscana, a cavallo tra le province di Forlì-Cesena, Arezzo e Firenze.', 'Foresta', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_16_084308_create_areas_table', 1),
(6, '2024_07_16_084331_create_species_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `species`
--

CREATE TABLE `species` (
  `specie_id` bigint(20) UNSIGNED NOT NULL,
  `s_nome` varchar(50) NOT NULL,
  `s_immagine` text NOT NULL,
  `s_descrizione` text NOT NULL,
  `s_stato_conservazione` varchar(50) NOT NULL,
  `s_area_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `species`
--

INSERT INTO `species` (`specie_id`, `s_nome`, `s_immagine`, `s_descrizione`, `s_stato_conservazione`, `s_area_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Barbastello', 'https://biodiversita.parcoforestecasentinesi.it/media/Barbastello_Kc3wzTO.jpg', 'Specie selettiva nella scelta dell’habitat, il Barbastello predilige boschi maturi e vetusti, con alberi di grandi dimensioni e caratterizzati da un elevato grado di naturalità, mentre è più raro nelle zone con un maggiore presenza umana. Questa specie utilizza come rifugi proprio gli alberi più grandi e vecchi, oppure marcescenti o morti in piedi, comunque caratterizzati dalla presenza di buchi (ad esempio vecchi nidi di picchi), cavità e scollature della corteccia. Presente in quasi tutta Europa, compresa buona parte dell’area mediterranea, è una specie rara e fortemente minacciata, complessivamente in declino. Nel Parco Nazionale, tuttavia, risulta tra i Chirotteri più diffusi e rappresenta in questo senso un\'icona dellìarea protetta, testimone delle buone pratiche di gestione degli ambienti forestali.', 'Prossimo alla minaccia (In diminuzione)', 3, NULL, NULL, NULL),
(2, 'Falco pellegrino', 'https://biodiversita.parcoforestecasentinesi.it/media/Falco_pellegrino_Gellini_TChZVAK.jpeg', 'Rapace sedentario, presente in 6 siti riproduttivi, tutti in pareti rocciose, 5 dei quali nel versante romagnolo. Due siti sono frequentati con regolarità: nel territorio di Ridracoli dal 1995 (dove è stato riscontrato il primo caso riproduttivo) nella vallata del Montone dal 2001; un altro sito, sempre nella vallata del Montone, è stato utilizzato nel 2014-15; in altri due siti, nelle vallate del Bidente di Corniolo e del Rabbi, la riproduzione deve considerarsi probabile per la presenza, riscontrata più volte, della coppia. Il sito toscano, a monte di Stia, è risultato frequentato nel 2016. La specie è in aumento nel Parco, fenomeno che rientra nella generale fase di espansione in atto a livello nazionale.', 'Minima preoccupazione (Stabile)', 3, NULL, NULL, NULL),
(3, 'Cincia dal ciuffo', 'https://biodiversita.parcoforestecasentinesi.it/media/cincia_da_ciuffo_G_Amadori_ktOYiCQ.jpg', 'Specie sedentaria, di recente insediamento nel Parco. La prima osservazione è del 18/6/2008 in una pineta presso Sambuchelli (Stia); da allora si è verificata un’espansione che ha interessato prima il versante toscano e successivamente anche quello romagnolo. Si tratta di una specie alpina che ha colonizzato progressivamente tutto l’Appennino settentrionale dalla Liguria verso Est nel corso degli ultimi decenni fino a raggiungere solo recentemente il Casentino e la Romagna. Localmente il fenomeno appare di grande intensità, tale da interessare in pochi anni già oltre un quarto del territorio. L’habitat è rappresentato dai boschi di conifere, in particolare le pinete, mentre vengono evitate in genere le formazioni forestali più fitte.', 'Minima preoccupazione (In diminuzione)', 3, NULL, NULL, NULL),
(4, 'Medusa luminosa', 'https://statickodami.akamaized.net/wp-content/uploads/sites/31/2022/07/Pelagia-noctiluca.jpg', 'La Pelagia noctiluca, o meglio nota come la medusa luminosa, è una specie della famiglia Pelagiidae. Famosa perché considerata la medusa che si illumina di notte, la Pelagia noctiluca è comune nel Mar Mediterraneo e nell’Oceano Atlantico orientale fino al Mare del Nord', 'non valutato (NE)', 1, NULL, NULL, NULL),
(5, 'Cormorano comune', 'https://scontent.cdninstagram.com/v/t39.30808-6/443718283_839593424859982_4820927331902332329_n.jpg?stp=dst-jpg_e15&efg=eyJ2ZW5jb2RlX3RhZyI6ImltYWdlX3VybGdlbi4yMDQ4eDEzNjUuc2RyLmYzMDgwOCJ9&_nc_ht=scontent.cdninstagram.com&_nc_cat=110&_nc_ohc=ReGOIAIx22QQ7kNvgHSHw_4&edm=APs17CUAAAAA&ccb=7-5&ig_cache_key=MzM3NDk3OTA0ODgzNDA0NTM1OQ%3D%3D.2-ccb7-5&oh=00_AYDRyR90NRox_aP7GFzanUnwKrXoIy3dAYDu6roODQdPeg&oe=66965F9B&_nc_sid=10d13b', 'Il cormorano comune (Phalacrocorax carbo Linnaeus, 1758) è un uccello acquatico della famiglia dei Falacrocoracidi diffuso in tutta l\'Eurasia e l\'Australasia, nonché nelle regioni nord-orientali dell\'America Settentrionale e in quelle settentrionali dell\'Africa.', 'Minima preoccupazione (In aumento)', 1, NULL, NULL, NULL),
(6, 'Cernia bruna', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Epinephelus_marginatus_%28Lowe%2C_1834%29_1.jpg/1200px-Epinephelus_marginatus_%28Lowe%2C_1834%29_1.jpg', 'Fra le otto specie di cernie che popolano il Mediterraneo, comprese due provenienti da mari stranieri, la cernia bruna Epinephelus marginatus è la più grande. Pesce dal corpo robusto slanciato, piuttosto compresso, testa grossa con bocca molto grande, più sporgente nella parte inferiore (mandibola) rispetto alla superiore (mascella); su entrambe, è presente una fila esterna di denti anteriori caniniformi ed inclinati, seguiti da serie più interne di denti mobili e depressibili.', 'In pericolo (In diminuzione) ', 1, NULL, NULL, NULL),
(7, 'Camoscio alpino', 'https://upload.wikimedia.org/wikipedia/commons/6/69/Altenfelden_Chamois_Rupicapra_rupicapra-2074.jpg', 'È un tipico ungulato alpino, perfettamente adattato a moversi in ambiente roccioso. La pelliccia è marrone chiaro durante l’estate e diviene più scura d’inverno. Le femmine e i giovani vivono in gruppi che in inverno possono raggiungere anche le 100 unità; i maschi adulti si uniscono al branco solo nella stagione degli amori, durante la quale si affrontano l’un l’altro innalzando i peli scuri del dorso.', 'Minima preoccupazione', 2, NULL, NULL, NULL),
(8, 'Gatto selvatico', 'https://usercontent.one/wp/antropocene.it/wp-content/uploads/2020/03/Felis_silvestris-800x445.jpg?media=1719063527', 'Il gatto selvatico è un piccolo felino, suddiviso in varie sottospecie, che occupa aree vastissime, comprendenti gran parte di Africa, Europa e Asia sud-occidentale e centrale, fino a India, Cina e Mongolia. È un cacciatore di piccoli mammiferi, uccelli e altre creature di piccole dimensioni.', 'Minima preoccupazione (In diminuzione)', 2, NULL, NULL, NULL),
(9, 'Ermellino', 'https://live.staticflickr.com/8894/28419635571_73750ca879_b.jpg', 'È solitario o vive in gruppi familiari; è caratterizzato da dorso marrone-rossastro e ventre bianco con la punta della coda nera. D’inverno diviene bianco, tranne la punta della coda che rimane scura.', 'Minima preoccupazione (Stabile)', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`specie_id`),
  ADD KEY `species_s_area_id_foreign` (`s_area_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `species`
--
ALTER TABLE `species`
  MODIFY `specie_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `species`
--
ALTER TABLE `species`
  ADD CONSTRAINT `species_s_area_id_foreign` FOREIGN KEY (`s_area_id`) REFERENCES `areas` (`area_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
