

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO categories (id, category, created_at, updated_at) VALUES ('1','Саморазвитие / Личная эффективность','2022-07-02 13:22:18','2022-07-02 13:22:18');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('2','Деловые/Бизнес-процессы','2022-07-02 13:23:08','2022-07-02 13:23:08');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('3','Деловые/Найм','2022-07-02 13:23:17','2022-07-02 13:23:17');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('4','Деловые/Реклама','2022-07-02 13:23:23','2022-07-02 13:23:23');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('5','Деловые/Управление бизнесом','2022-07-02 13:23:28','2022-07-02 13:23:28');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('6','Деловые/Управление людьми','2022-07-02 13:23:34','2022-07-02 13:23:34');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('7','Деловые/Управление проектами','2022-07-02 13:23:41','2022-07-02 13:23:41');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('8','Детские/Воспитание','2022-07-02 13:23:46','2022-07-02 13:23:46');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('9','Дизайн/Общее','2022-07-02 13:23:52','2022-07-02 13:23:52');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('10','Дизайн/Logo','2022-07-02 13:23:58','2022-07-02 13:23:58');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('11','Дизайн/Web дизайн','2022-07-02 13:24:03','2022-07-02 13:24:03');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('12','Разработка/PHP','2022-07-02 13:24:09','2022-07-02 13:24:09');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('13','Разработка/HTML и CSS','2022-07-02 13:24:14','2022-07-02 13:24:14');

INSERT INTO categories (id, category, created_at, updated_at) VALUES ('14','Разработка/Проектирование','2022-07-02 13:24:19','2022-07-02 13:24:19');


CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `materials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO materials (id, type, category, name, author, description, created_at, updated_at) VALUES ('11','Книга','Саморазвитие / Личная эффективность','Путь джедая','Максим Дорофеев','Универсального рецепта успешной и продуктивной жизни для всех нет, не было и не будет. Нужно создавать свой. И единственный способ сделать это – проводить эксперименты над собой, – считает Максим Дорофеев, автор бестселлера «Джедайские техники». Здесь вы найдете инструменты самонаблюдения и конструирования личного рецепта успеха: мысли, однократные действия-«вакцины», регулярные практики и индикаторы, из комбинации которых и получится тот уникальный, подходящий именно вам метод продуктивности.','2022-07-06 00:56:29','2022-07-06 00:56:29');

INSERT INTO materials (id, type, category, name, author, description, created_at, updated_at) VALUES ('12','Сайт/Блог','Разработка/PHP','Руководство по PHP','Rasmus Lerdorf','PHP - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML.','2022-07-06 00:59:59','2022-07-06 00:59:59');

INSERT INTO materials (id, type, category, name, author, description, created_at, updated_at) VALUES ('13','Сайт/Блог','Разработка/PHP','Полное руководство по Yii 2.0','Александр Макаров','Yii – это высокопроизводительный компонентный PHP фреймворк.','2022-07-06 01:16:10','2022-07-06 01:16:10');

INSERT INTO materials (id, type, category, name, author, description, created_at, updated_at) VALUES ('14','Видео','Разработка/PHP','Релиз Laravel 9: обзор новых функций','Просто о Laravel. CutCode','Обзор долгожданного обновления Laravel 9, которое состоялось 8 февраля 2022 года. Проведем установку, посмотрим что поменялось в структуре. Гайдлайн изменений и нововведений.','2022-07-06 01:23:33','2022-07-06 01:23:33');


CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO migrations (id, migration, batch) VALUES ('1','2014_10_12_000000_create_users_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('2','2014_10_12_100000_create_password_resets_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('3','2019_08_19_000000_create_failed_jobs_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('4','2019_12_14_000001_create_personal_access_tokens_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('5','2022_07_02_025636_add_new_material','1');

INSERT INTO migrations (id, migration, batch) VALUES ('6','2022_07_02_130937_add_new_category','2');

INSERT INTO migrations (id, migration, batch) VALUES ('7','2022_07_02_131205_add_new_type','2');

INSERT INTO migrations (id, migration, batch) VALUES ('8','2022_07_02_140130_add_new_tag','3');

INSERT INTO migrations (id, migration, batch) VALUES ('9','2022_07_02_140550_add_new_tag_material','4');

INSERT INTO migrations (id, migration, batch) VALUES ('10','2022_07_03_142813_add_new_url','5');

INSERT INTO migrations (id, migration, batch) VALUES ('11','2014_10_12_200000_add_two_factor_columns_to_users_table','6');

INSERT INTO migrations (id, migration, batch) VALUES ('12','2020_05_21_100000_create_teams_table','6');

INSERT INTO migrations (id, migration, batch) VALUES ('13','2020_05_21_200000_create_team_user_table','6');

INSERT INTO migrations (id, migration, batch) VALUES ('14','2020_05_21_300000_create_team_invitations_table','6');

INSERT INTO migrations (id, migration, batch) VALUES ('15','2022_03_20_110659_create_sessions_table','6');

INSERT INTO migrations (id, migration, batch) VALUES ('16','2022_04_26_145947_create_login_securities_table','6');


CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tags (id, tag, created_at, updated_at) VALUES ('1','Продуктивность','2022-07-02 14:29:07','2022-07-05 02:06:01');

INSERT INTO tags (id, tag, created_at, updated_at) VALUES ('12','Личная эффективность','2022-07-02 22:50:11','2022-07-02 22:50:11');

INSERT INTO tags (id, tag, created_at, updated_at) VALUES ('15','Языки программирования','2022-07-06 01:04:22','2022-07-06 01:04:22');


CREATE TABLE `tag_material` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `material_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO tag_material (id, material_id, tag_id, created_at, updated_at) VALUES ('9','11','1','2022-07-06 01:03:20','2022-07-06 01:03:20');

INSERT INTO tag_material (id, material_id, tag_id, created_at, updated_at) VALUES ('10','11','12','2022-07-06 01:03:25','2022-07-06 01:03:25');

INSERT INTO tag_material (id, material_id, tag_id, created_at, updated_at) VALUES ('11','12','15','2022-07-06 01:04:34','2022-07-06 01:04:34');

INSERT INTO tag_material (id, material_id, tag_id, created_at, updated_at) VALUES ('12','13','15','2022-07-06 01:16:24','2022-07-06 01:16:24');


CREATE TABLE `types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO types (id, type, created_at, updated_at) VALUES ('1','Книга','2022-07-02 13:25:14','2022-07-02 13:25:14');

INSERT INTO types (id, type, created_at, updated_at) VALUES ('2','Статья','2022-07-02 13:25:28','2022-07-02 13:25:28');

INSERT INTO types (id, type, created_at, updated_at) VALUES ('3','Видео','2022-07-02 13:25:33','2022-07-02 13:25:33');

INSERT INTO types (id, type, created_at, updated_at) VALUES ('4','Сайт/Блог','2022-07-02 13:25:38','2022-07-02 13:25:38');

INSERT INTO types (id, type, created_at, updated_at) VALUES ('5','Подборка','2022-07-02 13:25:44','2022-07-02 13:25:44');

INSERT INTO types (id, type, created_at, updated_at) VALUES ('6','Ключевые идеи книги','2022-07-02 13:25:51','2022-07-02 13:25:51');


CREATE TABLE `urls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `material_id` bigint(20) NOT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO urls (id, material_id, signature, url, created_at, updated_at) VALUES ('1','8','','tarek.comfd','2022-07-04 00:08:27','2022-07-04 14:28:13');

INSERT INTO urls (id, material_id, signature, url, created_at, updated_at) VALUES ('5','8','tarek','tarek.comaldsa','2022-07-04 01:33:37','2022-07-04 13:15:40');

INSERT INTO urls (id, material_id, signature, url, created_at, updated_at) VALUES ('6','8','tarek','tarek','2022-07-04 01:33:46','2022-07-04 01:40:20');

INSERT INTO urls (id, material_id, signature, url, created_at, updated_at) VALUES ('7','8','dsadf','http://carzoon.online/FlameNFTS/','2022-07-05 02:17:27','2022-07-05 02:17:36');

INSERT INTO urls (id, material_id, signature, url, created_at, updated_at) VALUES ('8','12','PHP','https://www.php.net/manual/ru/intro-whatis.php','2022-07-06 01:00:33','2022-07-06 01:00:33');

INSERT INTO urls (id, material_id, signature, url, created_at, updated_at) VALUES ('9','13','Yiico','https://yiico.ru/blog/551-polnoe-rukovodstvo-po-yii-20','2022-07-06 01:19:53','2022-07-06 01:20:04');

INSERT INTO urls (id, material_id, signature, url, created_at, updated_at) VALUES ('10','14','','https://www.youtube.com/watch?v=EMecJtEgttg','2022-07-06 01:23:52','2022-07-06 01:23:52');


CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

