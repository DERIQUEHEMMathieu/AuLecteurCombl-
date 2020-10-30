DROP DATABASE IF EXISTS librairie;
CREATE DATABASE librairie CHARACTER SET 'utf8';
USE librairie;

DROP USER IF EXISTS 'root'@'Localhost';
CREATE USER 'root'@'Localhost';
GRANT ALL PRIVILEGES ON librairie.* TO 'root'@'Localhost' IDENTIFIED BY '';

CREATE TABLE user(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    lastname VARCHAR(20) NOT NULL,
    firstname VARCHAR(20) NOT NULL,
    city_code CHAR(5) NOT NULL,
    city VARCHAR(50) NOT NULL,
    adress VARCHAR(100) NOT NULL,
    phone CHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL,
    subscriber_number SMALLINT(5) NOT NULL,
    PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(lastname, firstname, city_code, city, adress, phone, email, subscriber_number)
VALUES
("Deriquehem", "Mathieu", "76380", "Canteleu", "16 rue Chez Moi", "0235363636", "maththebest@gmail.com", 18610),
("Gossart", "Thomas", "27400", "Louviers", "Lycée Decrétot", "0235361010", "toto27@afpa.fr", 19202);

CREATE TABLE book(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    author VARCHAR(50) NOT NULL,
    resume TEXT(500) NOT NULL,
    date DATE NOT NULL,
    category VARCHAR(20) NOT NULL,
    user_id INT UNSIGNED,
    PRIMARY KEY(id),
    FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book(title, author, resume, date, category, user_id)
VALUES
("One Piece", "Eiichirō Oda", "L'histoire suit les aventures de Monkey D. Luffy, un garçon dont le corps a acquis les propriétés du caoutchouc après avoir mangé par inadvertance un fruit du démon. Avec son équipage de pirates, appelé l'équipage de Chapeau de paille, Luffy explore Grand Line à la recherche du trésor ultime connu sous le nom de « One Piece » afin de devenir le prochain roi des pirates.", "1998-12-24", "Manga", 1),
("Shining, l'enfant lumière", "Stephen King", "Jack Torrance est un homme instruit mais au tempérament colérique. Il tente de reconstruire sa vie et celle de sa famille après la perte de son emploi d’enseignant due à un élan de violence. Ayant arrêté de boire, il accepte un emploi de gardien dans un grand hôtel isolé dans les montagnes, et fermé en hiver. Il emménage dans l’hôtel Overlook - dans les montagnes du Colorado - avec sa femme Wendy et son fils Danny. Ce dernier possède des dons de médium - le shining du titre - et est sensible aux forces surnaturelles. Le jour de son arrivée à l'hôtel, Danny fait la connaissance de Dick Hallorann, le cuisinier de l'hôtel, qui possède lui aussi le shining mais à un degré bien moindre que le jeune garçon. Hallorann met en garde Danny contre les dangers de l'hôtel qui serait doté d'une conscience, et possédé par des esprits.", "1977-01-28", "Horreur", 2),
("Le roman familial des névrosés", "Sigmund Freud", "Le roman familial est une activité fantasmatique inconsciente qui se révèle à l'analyse et qui s'apparente au rêve diurne ; celui-ci, dit Freud « corrige l'existence » et vise deux objectifs, le désir et l'ambition, auxquels le roman familial satisfait lui-même.", "1953-01-01", "Philosophie", 2),
("Le Chien des Baskerville", "Arthur Conan Doyle", "Le docteur Mortimer rend visite à Sherlock Holmes et son ami le docteur Watson pour leur expliquer les circonstances étranges de la mort de son ami et patient, Sir Charles Baskerville. Le vieil homme au cœur fragile a succombé à une attaque cardiaque après une courte promenade nocturne dans les jardins du manoir, qui donne sur la lande brumeuse du Devonshire. Mortimer raconte à Holmes une légende vieille de plusieurs siècles qui court sur cette famille. Il lui montre un manuscrit daté de 1742 rapportant que Hugo Baskerville, un ancêtre cruel, aurait été égorgé par un chien démoniaque après avoir tenté de violer une jeune paysanne. Ce chien rôderait toujours sur la lande à la recherche des descendants des Baskerville.", "1902-01-01", "Roman", 1);