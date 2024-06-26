-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 17 2024 р., 19:54
-- Версія сервера: 5.7.39
-- Версія PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `comics_db`
--

-- --------------------------------------------------------

--
-- Структура таблиці `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `characters`
--

INSERT INTO `characters` (`id`, `name`) VALUES
(1, 'Бетмен'),
(2, 'Месники'),
(4, 'Шазам'),
(5, 'Капітан Марвел '),
(6, 'Аквамен'),
(7, 'Капітан Америка');

-- --------------------------------------------------------

--
-- Структура таблиці `comics`
--

CREATE TABLE `comics` (
  `id` int(11) NOT NULL,
  `name` varchar(75) DEFAULT NULL,
  `publisher_id` int(11) NOT NULL,
  `cover_type` varchar(20) DEFAULT NULL,
  `release_date` year(4) DEFAULT NULL,
  `pages` int(5) DEFAULT NULL,
  `format` varchar(7) DEFAULT NULL,
  `language_id` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `description` text,
  `count` int(4) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recomended` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `comics`
--

INSERT INTO `comics` (`id`, `name`, `publisher_id`, `cover_type`, `release_date`, `pages`, `format`, `language_id`, `character_id`, `description`, `count`, `price`, `is_new`, `is_recomended`) VALUES
(1, 'Нові Месники. Том 1. Все помирає\n', 1, 'Твердий', 2019, 156, '16x24', 2, 2, 'Найсильніша та найрозумніша команда Всесвіту Марвел: Чорна Пантера, Залізна Людина, Доктор Стрендж, Капітан Америка, Чорний Грім, Містер Фантастик, Немор та Звір озброєні Каменями Нескінченності. Але чи достатньо цього, коли їх суперник — самі закони всесвіту? Чи здатні вони залишити позаду образи, брехню та ненависть між ними, щоб зупинити знищення світів та скористатися Каменями Нескінченності? І що буде, коли вони дізнаються, що Земля є причиною гибелі Всесвіту, а її знищення може все виправити? Чи зможуть Ілюмінати прийняти на себе долю Галактуса та зробити немислиме? \n\nТаємна організація знову вершить долю людства…\n\nДжонатан Гікмен та Стів Ептінг перетворять Нових Месників на епічну історію життя та смерті всього живого.', 10, '200.00', 0, 0),
(2, 'Doomsday Clock #1', 2, 'Твердий', 2019, 38, '17x26', 1, 3, 'Всесвіт DC стикається з найбільшою загрозою - професором Манхеттеном.\n\nАле ніщо не приховано від Манхеттена, і секрети минулого, сьогодення та майбутнього здригають саму основу всесвіту DC.\n\nDC Comics представляє серію з 12 випусків від найбільших комікс-авторів: Джеффа Джонса та Гері Френка.', 10, '140.00', 1, 1),
(3, 'Бетмен. Повернення темного лицаря', 2, 'Твердий', 2016, 264, '21х28', 2, 1, 'Шедевр сучасного графічного роману, на сторінках якого оживають світ темряви та людина, у чиїй душі панує темрява ще густіша. Письменник і художник Френк Міллер спільно з контурувальником Клаусом Янсеном і колористкою Лінн Варлі наново, з чистого аркуша створює легенду про Бетмена у своїй сазі про місто Готем, який у найближчому майбутньому, через десять років після того, як Бетмен пішов від справ, прийшов у повний занепад. На вулицях пишним кольором розцвіла злочинність, а того, хто був Бетменом, як і раніше, мучать спогади про загибель батьків.\n\nГромадянське суспільство руйнується на очах, і тоді Брюс Уейн, який так довго пригнічував у собі порив вийти на захист мирних жителів, скидає нарешті кайдани, в які сам себе закував. Темний Лицар повертається в сліпучому ореолі люті, він протистоїть абсолютно новому поколінню злочинців і не поступається їм жорстокістю.\n\nНезабаром до нього приєднується Робін нового покоління — дівчинка на ім\'я Кері Келлі, яка доводить, що незамінна так само, як і її попередники. Однак чи зуміють Бетмен і Робін подолати небезпеки, які приготували для них смертельні вороги після декількох років ізоляції від суспільства, що перетворила їх на формених психопатів? А головне — чи залишиться хоч хтось живий після неоголошеної війни, яка ось-ось вибухне між наддержавами — як і після сутички між тими, хто колись був найбільшими героями на світі?\n\nЗ першої публікації графічного роману «Бетмен. Повернення «Темного Лицаря» минуло вже п\'ятнадцять років, проте він залишається безперечною класикою і входить до канону світу коміксів.\n\nУ видання входять всі наявні на сьогоднішній день матеріали з цього комікса: 3 передмови, одна від Алана Мура до найпершого видання та два ювілейні від Френка Міллера до видань 1996 та 2006 років; два робочих сценарію (перший є швидше початкову заявку створення коміксу, а другий, більш опрацьований, детальний, де простежується створення образів); велика кількість скетчів; галерея обкладинок та фото атрибутики за мотивами коміксу.\nГражданское общество рушится на глазах, и тогда Брюс Уэйн, так долго подавлявший в себе порыв выйти на защиту мирных жителей, сбрасывает наконец оковы, в которые сам себя заковал. Темный Рыцарь возвращается в ослепительном ореоле ярости, он противостоит совершенно новому поколению преступников и не уступает им в жестокости. \n\nВскоре к нему присоединяется Робин нового поколения — девочка по имени Кэрри Келли, которая доказывает, что незаменима точно так же, как и ее предшественники. Однако сумеют ли Бэтмен и Робин преодолеть опасности, которые уготовили для них самые смертельные враги после нескольких лет изоляции от общества, превратившей их в форменных психопатов? А главное — останется ли хоть кто-нибудь в живых после необъявленной войны, которая вот-вот разразится между сверхдержавами — как и после стычки между теми, кто когда-то был величайшими героями на свете? \n\nС момента первой публикации графического романа «Бэтмен. Возвращение Темного Рыцаря» прошло уже пятнадцать лет, однако он остается бесспорной классикой и входит в канон мира комиксов.\n\nВ издание входят все имеющиеся на сегодняшний день материалы по этому комиксу: 3 предисловия, одно от Алана Мура к самому первому изданию и два юбилейных от Фрэнка Миллера к изданиям 1996 и 2006 годов; два рабочих сценария (первый представляет собой скорее первоначальную заявку на создание комикса, а второй, более проработанный, детальный, где прослеживается создание образов); большое количество скетчей; галерея обложек и фото атрибутики по мотивам комикса.', 5, '440.00', 0, 1),
(4, 'Вартові', 3, 'Твердий', 2018, 523, '16,5х25', 3, 8, 'Один із головних бестселерів світу коміксів. Єдиний комікс у списку ста найбільших романів за версією журналу Time. Комікс, який поставив крапку у вивченні та деконструкції супергероїв і над яким десятки років чаклували різні кінорежисери і продюсери (підсумком чого стала екранізація 2009 року). Останній комікс великого Алана Мура для видавництва DC. «Охоронці» (Watchmen) нарешті знову вийшли російською мовою.\n\nДія коміксу відбувається у світі, дуже схожому на наш; відмінність лише тому, що у цьому світі існували супергерої. Але у 1985 році вони під забороною; більшість захисників правосуддя вийшли на пенсію. Лише всесильний Доктор Манхеттен продовжує символізувати могутність США, порушуючи тендітний баланс Холодної Війни. Світ на межі катастрофи — і в цей момент чомусь починається полювання на колишніх героїв та грандіозна історія Алана Мура та Дейва Гіббонса про війну, мир, справедливість, людяність, жорстокість, і, звичайно, людей у масках та плащах.\n\nВидання українською мовою!\n\n«Один із 100 найкращих англомовних романів із 1923 року до наших днів… Шедевр».\n- Time\n\n«Хранителі» воістину не мають аналогів».\n- The Rolling Stone\n\n\"Класика\".\n- New York Post', 5, '495.00', 0, 1),
(5, 'Шазам!', 2, 'Твердий', 2019, 200, '17х26', 2, 4, 'Біллі Бетсон, простий підліток із Філадельфії, нічого не знає про магію та героїв, і його життя навряд чи можна назвати чарівним. Але одного разу, спустившись у метро, він опиняється на Скелі Вічності, де стає Шазамом – магічним воїном та спадкоємцем трону у Раді Вічності.\n\nОсь тільки Біллі не є зразковою дитиною — вона груба, зарозуміла і озлоблена, а Шазамом може бути тільки той, хто чистий душею. Тим часом на волі виявляється й інший претендент на цю магічну силу — нещодавно звільнений із багатовікового ув\'язнення Чорний Адам. Жорстокий і жорстокий, він готовий знищити нашу цивілізацію… Після того, як знищить Біллі Бетсона.\n\nНа боці Чорного Адама могутні союзники, а Біллі може покладатися тільки на себе і свою сім\'ю — але чи є в нього сім\'я?', 10, '405.00', 0, 0),
(6, 'Життя Капітана Марвел', 1, 'М\'який', 2019, 128, '16х27', 3, 5, 'Вона одна з найсильніших героїнь не лише на Землі, а й у всій Галактиці! Дізнайтеся, як Керол Денверс стала жінкою, якою вона є, у коміксі про походження Капітана Марвела!\n\nКоли раптові, болючі панічні атаки вибивають її з колії посеред вируючого бою, у неї у свідомості з\'являються спогади про життя, яке вона хотіла б забути. Ви не можете втекти від свого коріння - і іноді вам доводиться повертатися додому. Але коли Керол бере тимчасову відпустку, щоб розібратися у своєму минулому, неприємності самі приходять до неї. Зброя була приведена в бойову готовність і тихе прибережне місто Керол ось-ось стане центром цього світу. Але в шафі Капітана Марвел є кістяки. І те, що вона виявить - змінить її життя!\n\nДо збірки входить: The Life of Captain Marvel №1-5 (2018).', 5, '200.00', 0, 0),
(7, 'Аквамен. Книга 2. Інші', 2, 'Твердий', 2019, 160, '16,5х25', 3, 6, 'На думку MTV Geek, «Історія Аквамена, як і раніше, нагадує американські гірки…», і це справді так. Видатний ворог Аквамена відкрив полювання на його колишню суперкоманду!\n\nВони називають себе іншими: п\'ять видатних особистостей, озброєних могутніми артефактами атлантів. Багато років тому, коли Артур Каррі ще не прославився як Аквамен, Інші — Оперативник, Ветеран, Явара, Схід-10 і провидиця Кахіна — боролися пліч-о-пліч з ним. Тепер пам\'ять про них загубилася, і навіть дружина Аквамена Мера ніколи не чула про інших.\n\nАле давні соратники Аквамена ось-ось знову увірвуться у його життя. Чорна Манта, найстаріший і найнебезпечніший ворог Артура, вистежує членів команди одного за одним, вбиває їх та викрадає реліквії атлантів. Колишнім друзям доведеться знову об\'єднати зусилля, щоб урятувати своє життя і завадити Чорній Манті досягти головної мети: знищення Аквамена та всього, що йому дорого!\n\nНад книгою працювала блискуча команда: архітектор Всесвіту DC Джефф Джонс та художник «Найтемнішої ночі» Іван Рейс.', 5, '250.00', 0, 1),
(8, 'Капітан Америка. Смерть Капітана Америка', 1, 'Твердий', 2019, 572, '17x26', 1, 1, 'Він був кумиром мільйонів, прикладом для наслідування всіх збройних сил Америки та втіленням головних цінностей свого народу. Він жив заради своєї країни - і зараз, застрелений холоднокровним вбивцею, до кінця, без залишку віддав себе коханій вітчизні.\r\n\r\nПомститися за смерть Кепа — ось що тепер стало головним завданням його старого напарника Сокола. Шерон Картер все більше втрачає владу над собою, перетворюючись на маріонетку посіпак Червоного Черепа. А Бакі Барнс, Зимовий Солдат, має знайти спосіб примирити своє ганебне минуле із закликом стати новим Капітаном Америка!', 5, '695.00', 0, 0),
(9, 'Batman Secret Files #1', 2, 'М\'який', 2018, 39, '17х25', 1, 1, 'Пориньте в раніше невідомі розслідування Бетмена від зіркових авторів!\n\nКоманда з Тома Кінга та Мікеля Жаніна підготувала захоплюючі історії, щоб ви змогли поглянути на Бет-тайни з минулого та сьогодення.', 5, '145.00', 0, 1),
(10, 'Бетмен. Проклятий\r\n', 2, 'Твердий', 2019, 159, '23,4х30', 1, 1, 'Джокер помер.\r\n\r\nЦе поза сумнівом. Та чи це Бетмену урвався терпець, чи якась інша таємнича сутність скрутила йому шию — залишається загадкою. Річ у тім, що Бетмен не може пригадати... і що глибше він занурюється у цю заплутану справу, то більше сумнівається у кожному доказі. \r\n\r\nА хто ж зможе йому допомогти краще за... Джона Константина? Щоправда, єдине, що він любить більше за добру загадку — це гратися людьми. Тож удвох із Константином Бетмен занурюється в прогнилі нутрощі Ґотема, женучись за вибуховою правдою: хто ж все-таки вбив Джокера? \r\n\r\n«Бетмен. Проклятий» (Batman Damned) — історія про жахи й надприродне, створена двома з найкращих сучасних коміксистів.', 5, '750.00', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `comics_order`
--

CREATE TABLE `comics_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` int(30) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comics` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `comics_order`
--

INSERT INTO `comics_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `comics`, `status`) VALUES
(1, 'Тест', 990999999, 'ТЕСТОВЕ ПОВІДОМЛЕННЯ', 1, '2024-05-18 11:09:18', '{\"2\":1}', 1),
(2, 'Тест', 990999999, 'test', 1, '2024-05-18 12:23:06', '{\"2\":1}', 1),
(3, 'Юра', 665656565, 'test', 1, '2024-05-18 11:03:06', '{\"1\":1}', 1),
(4, 'ТЕСТ', 737373737, 'ТЕСТУЄМО ВІДПРАВЛЕННЯ ЗАМОВЛЕННЯ', 1, '2024-05-19 07:32:26', '{\"8\":1,\"7\":1}', 1),
(5, 'Тест', 1111111111, 'тест', 9, '2024-05-18 16:24:04', '{\"9\":2,\"8\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(1, 'English'),
(3, 'Українська '),
(4, 'Японська');

-- --------------------------------------------------------

--
-- Структура таблиці `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `publisher`
--

INSERT INTO `publisher` (`id`, `name`) VALUES
(1, 'MARVEL'),
(2, 'DC'),
(3, 'Vertigo');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(9, 'admin', 'admin@gmail.com', '123456', 'admin'),
(10, 'test', 'test@gmail.com', '123456', ''),
(11, 'test', 'testtest@test.test', 'testtest', '');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `comics_order`
--
ALTER TABLE `comics_order`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `comics_order`
--
ALTER TABLE `comics_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
