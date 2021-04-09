-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 05:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dances_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dances`
--

CREATE TABLE `dances` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `did_you_know` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL COMMENT 'classical, folk, other',
  `state_name` varchar(25) DEFAULT NULL,
  `key_words` varchar(500) DEFAULT NULL COMMENT 'any key words separate by comma',
  `status` varchar(25) NOT NULL DEFAULT 'proposed' COMMENT 'proposed, approved, writeup_done, art_work_done, designed, completed',
  `image_url` varchar(100) NOT NULL,
  `notes` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dances`
--
ALTER TABLE `dances`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dances`
--
ALTER TABLE `dances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

--
-- Dumping data for table `dances`
--

INSERT INTO `dances` (`name`, `description`, `did_you_know`, `type`, `state_name`, `key_words`, `status`, `image_url`, `notes`) VALUES
('Kuchipudi ', 'Kuchipudi is one of the eight major Indian classical dances. It originated in a village named Kuchipudi in the Indian state of Andhra Pradesh', ' Kuchipudi is the only Indian classical dance form that takes its name from the village of its origin', 'Classical', 'Andhra Pradesh', 'Kuchipudi, Classical, Andhra Pradesh', 'write_up_done', 'kuchipudi.jpg', ''),
('Kathakali', 'Kathakali is a major form of Indian classical dance. It is a \"story play\" genre of dance and is distuinguished by the colorful costumes and makeup worn by the dancers.', 'The Kathakali dances are performed by males, including the female roles! ', 'Classical', 'Kerala', 'Kathakali, Classical, Kerala', 'write_up_done', 'kathakali.jpg', ''),
('Jawara', 'Jawara is a folk danceperformed by the peasants of Bundelkhand region in, celebration of prosperity, upon the reaping of harvest. Jawara is performed by both men and women in colorful costumes and orginated in Madya Pradesh.', 'Jawara is also called The Harvest Dance as it celebrates the harvest reaping of the people of Madya Pradesh.', 'Folk', 'Madya Pradesh', 'Jawara, Folk, Prosperity', 'write_up_done', 'jawara.jpg', ''),
('Lavani', 'Lavani is a combination of traditional song and dance and is particularlly performed to the beats of Dholki, a percussion instrument. Lavani is noted for its powerful rhythm', 'Lavani worked as a morale booster in the 18th century.', 'Folk', 'Maharastra', 'Lavani, Traditional, Percussion', 'write_up_done', 'lavani.jpg', ''),
('Laihaoroba', 'Laiharaoba is a major form of Indian classical dance and is named after its region of origin, Manipur. The people of Manipur danced to please the gods in the festival of Lai Haraoba.', 'The dance shows the formation of earth and life, and there are 364 hand gestures used to show this!', 'Classical', 'Manipur', 'Laiharaoba, Classical,  the festival Lai Haraoba', 'write_up_done', 'laiharaoba.jpg', ''),
('Khoria', 'The Khoria Dance form is inspired from the Jhumar Dance, presented by the women of Haryana. This dance form is most popular in the central part of the state. It depicts the daily chores performed in the fields by the Haryanvi people.  This dance is performed as a mime during the wedding ceremonies, while the men are away and the women keep guard all night singing and dancing.', 'Women wear gold-work skirts, colorful chunris and traditional rustic jewellery at the time of the performance.', 'Folk', 'Haryana', 'Khoria Dance, Haryana, Indian Folk Dances.', 'write_up_done', 'khoria.jpg', ''),
('Nati', 'Nati is the most famous dance of Himachal Pradesh.  It mainly originated from Kullu and Shimla district and became popular across the state and in Chandigarh where Himachali youth performed this on cultural programmes in colleges and universities.', 'The Nati Dance is listed in the Guinness world record book as the largest folk dance.', 'Folk', 'Himachal Pradesh', 'Nati, Himachal Pradesh, Folk', 'write_up_done', 'nati.jpg', ''),
('Karma', 'Karma dance or Karma Naach is a traditional dance of central and Eastern India annually performed during the karma festival. Karma is a famous autumnal festival, it starts from the 11th day of the bright fortnight of the month of Bhadrab. ', 'This dance is typically performed by tribal groups like Gonds, the Baigas and Oraons in Chhattisgarh.', 'Folk', 'Chhattisgarh', 'Karma, Chhattisgarh, Folk', 'write_up_done', 'karma.jpg', ''),
('Maruni', 'The Maruni dance is one of the oldest dances in Sikkim performed by the Nepalis. This dance is performed in the Tihar festival by the Nepali community as well on family occasions like marriages and births. The dance celebrates the concept of the victory of good over evil.', 'It is the oldest and most popular Nepalese dance but it is in danger of going extinct due only a few people learning it', 'Folk', 'Sikkim', 'Maruni, Sikkim, Folk', 'write_up_done', 'maruni.jpg', ''),
('Bharatanatyam', 'Bharatanatyam is a dance of Tamil Nadu in southern India. It traces its origins back to the Natyashastra, an ancient treatise on theatre written by the mythic priest Bharata. Originally a temple dance for women, bharatanatyam often is used to express Hindu religious stories and devotions.', 'Bharatanatyam was banned by the colonial British in 1910, but the Indain community protested aganist it and expanded it by the 20th century', 'Classical', 'Tamil Nadu', 'Bharatanatyam, Tamil Nadu, Classical', 'write_up_done', 'bharatanatyam.jpg', ''),
('Hodaigri', 'Hodaigri is a folk dance, performed in the state of Tripura, India by the Bru people one of the Tripuri clan. It is performed by women and young girls, about 4 to 6 members in a team, singing, balancing on an earthen pitcher and managing other props such as a bottle on the head and earthen lamp on the hand.', 'One has to undergo an extensive training and rehearsal for slow hip and waist maneuvering.', 'Folk', 'Tripura', 'Hodaigri, Tripura, Folk', 'write_up_done', 'hodaigri.jpg', ''),
('Choliya', 'Chholiya is a dance form practised in the Kumaun region of Uttarakhand. It is basically a sword dance accompanying a marriage procession but now it is performed on many auspicious occasions. This form of dance is very famous in the region of Bageshwar, Kumaon, Pithoragarh, Almora, and Champawat.', 'The dance is meant to depict the martial art traditions of the Kumaoni tribe.', 'Folk/Sword', 'Uttaranchal', 'Choliya, Uttranchal, Folk', 'write_up_done', 'choliya.jpg', ''),
('Phag', 'This is a seasonal dance performed by the farmers in the Phalgun months. This dance form derives its name from the word ‘Phag’ which means the shades of the colors of the festival of Holi! It is a group dance; therefore both men and women are seen participating in it. All of the people are dressed in traditional outfits, along with colorful head gear. Sometimes this art form is performed only by men of the region also.', 'The musical instruments accompanying the Phag Dance are Tasha, Nagada and Dhol.', 'Folk', 'Haryana', 'Phag, Haryana, Folk', 'write_up_done', 'phag.jpg', ''),
('Loor', 'The name ‘loor’ is given to this dance form as it means a girl in the Bangar region of the state. The Loor Dance is performed by the unmarried Haryanvi girls at the onset of the spring season in the state. The festival of colors ‘Holi’ is a significant part of the spring season; hence, the girls play with colors and perform the loor dance, celebrating this festival. Also, the sowing of the rabi crops also brings rejoice to the locals at this time.', 'The format of the songs on which the girls perform is in a question and answer form, which proves to be quite interesting for the listeners!', 'Folk', 'Haryana', 'Loor, Haryana, Folk', 'write_up_done', 'loor.jpg', ''),
('Kayang Mala', 'Kayang Mala is a dance form in which dancers form a garland-like pattern by weaving each others arms and becoming beads of the garland. Every performer is well dressed and heavily decorated with jewellery.', 'Before commencing the dance, they are supposed to drink Chhang, which is a local drink.', 'Folk', 'Himachal Pradesh', 'Kayang Mala, Himachal Pradesh, Folk', 'write_up_done', 'kayangmala.jpg', ''),
('Salia', 'The dance form from Chhattisgarh is performed by young men after the reaping season. This stick-move includes the young men who move in different styles as they strike their stick against the stick of the individual remaining by them. The individuals who take an interest in the move are given paddy by the townspeople as an indication of appreciation. ', 'The peak of this interesting move structure is normally a Snake Dance!', 'Folk', 'Chhattisgarh', 'Salia, Chhattisgarh, Folk', 'write_up_done', 'saila.jpg', ''),
('Kathak', 'Kathak is one of the eight major forms of Indian classical dance. The origin of Kathak is traditionally attributed to the traveling bards of ancient northern India known as Kathakars or storytellers. The term Kathak is derived from the Vedic Sanskrit word Katha which means \"story\", and Kathakar which means \"the one who tells a story\", or \"to do with stories\".', 'This dance form was primarily a temple ritual but was later altered to the royal court entertainment by the Persian and Mughal influences', 'classical ', 'Uttar Pradesh', 'Classical, traditional, ritual', 'write_up_done', 'kathak.jpg', ''),
('Gaarudi Gombe', 'Gaarudi Gombe is a folk dance in which dancers dress in suits made of bamboo sticks. The karaga, in a dance performed by the Thigalas, is a metal pot on which stands a tall, floral pyramid and which is balanced on the carriers head. Pata Kunitha in Karnataka is a popular folk-dance form extremely popular among the inhabitants of the Mysore region. Pata Kunitha of Karnataka is an extremely colorful dance form and provides great visual delight.', ' Dancers adorn themselves with giant doll-suits made of bamboo sticks. The term Gaarudi-Gombe means magical-doll in the native language, Kannada', 'folk ', 'Karnataka', 'Folk, popular, colorful', 'write_up_done', 'gaarudigombe.jpg', ''),
('Derogata', 'In the Derogata Dance, women have the challenge of knocking down multicolor turbans worn by the male dancers. It seems to be an easy task, but there is a catch. The women are forbidden from using any appendage or part of their body in this endeavor except their heads.', 'This dance is like a challenge, and is not choreographed or planned.', 'folk', 'Meghalaya', 'folk, turbans, heads', 'write_up_done', 'derogata.jpg', ''),
('Ghoomar', 'The dance involves graceful moves like clapping & swaying the hands and twirling around. It originated from Bhil community and mainly performed as entertainment for Kings in ancient times. Now, it is performed for festivals and social events. Women wear colorful ghagra choli and odhani (veil) and make coordinated dance steps to popular traditional musical instruments.', 'It was Bhil tribe who performed it to worship Goddess Sarasvathi, and was later embraced by other Rajasthani communites.', 'folk', 'Rajastan', 'folk, ghagra, choli', 'write_up_done', 'ghoomar.jpg', ''),
('Raut Nacha', 'The dance is performed during Dev Uthani Ekadashi – the day of awakening of the Gods after the 11th day of Diwali – as symbolic devotion to Lord Krishna.', 'This dance is known as the dance of the cowherds', 'folk', 'Chhattisgarh', 'folk, raut nacha, chhattisgarh', 'write_up_done', 'rautnacha.jpg', ''),
('Jhumair', 'Jhumair is a community dance performed during the harvest season and festivals. The dance is mostly performed in open places. Traditional Musical instruments generally used are Dhol, Mandar, Bansi, Nagara, Dhak and Shehnai etc.', 'The lyrics of Jhumair are built on day-to-day languages and mostly depict love or pleasures and pains of day-to-day life.', 'folk', 'Chhattisgarh', 'folk, jhumair, chattisgarh', 'write_up_done', 'jhumair.jpg', ''),
('Cheraw', 'Cheraw is performed with 6-8 men each holding two bamboo sticks. The women then dance around the bamboo sticks in complex ways.', 'A Guiness World Record was made when many dancers all performed the same Cheraw dance.', 'Folk', 'Mizoram', 'Folk, bamboo, Mizorarm ', 'write_up_done', 'cheraw.jpg', ''),
('Zeliang', 'The Zeliang dance is a war dance performed in Nagaland. It originates from the Zeliangrong group triad from the groups Zeme, Liangmai, and Rongmei.', '', 'Folk', 'Nagaland', '', 'write_up_done', 'zeliang.jpg', ''),
('Butta Bomalu', 'A typical dance form popular in Tanaku of West Godovari Desert Each dancer wears a different mask enlarging the scope of performers and dances to a non verbal rythm which adds color to the movements', 'Butta Bomalu which means baskets of wood-husk,dry grass,and cow dung', 'Folk', 'Andhra Pradesh', 'Folk,Bomalu,Andhra Pradesh', 'write_up_done', 'buttabommalu.jpg', ''),
('Bagurumba', 'Is a folk dance which is performed by the Bodos and is practiced during Bwisagu a Bodo Festival', 'Bwisagu begins with cow worship then young people respect their elders', 'Folk', 'Assam', 'Folk,Bwisagu,Bodos,Assam', 'write_up_done', 'bagurumba.jpg', ''),
('Bardo Chham', 'Is a folk dance of Sherdukpens a small community of West Kameng district of Arunachal Pradesh', 'Bardo Chham is based on the stories of good and evil', 'Folk', 'Arunachal Pradesh', 'Folk,Good and Evil,Arunachal Pradesh', 'write_up_done', 'bardochham.jpg', ''),
('Bidesia', 'Is a poular folk dance of bihar it is a folk theater form that is prevelant in the Bhojpuri speaking sections of bihar', 'Bihari Thakur is believed to be the father of this dance form', 'Folk', 'Bihar', 'Folk,Cast System,Bihar', 'write_up_done', 'bidesia.jpg', ''),
('Dhalo', 'Is one of most Goas famous rural dances which is performed by women on a december moonlight night', 'A dozen women assemble in the courtyard of a house in the night', 'Folk', 'Goa', 'Folk,Night,Goa', 'write_up_done', 'dhalo.jpg', ''),
('Gugga', 'The Gugga dance is dedicated to Gugga Pir by his ardent devotees. This dance festival is celebrated in the month of Bhadon. The five Bhagats are the main dancers during the occasion and the dance itself is very simple in nature. It is an exclusively male dance form and is very popular throughout the northern parts of India. Gugga Kicchari or long bamboo sticks are taken out during the procession, which are decorated with garlands, fans and colourful pieces of clothes.', 'The musical instruments accompanying the dance performance are Deru, Manjira, Dholak, Chimta and Cymbals.', 'Folk', 'Haryana', 'Folk, Gugga, Haryana', 'write_up_done', 'gugga.jpg', '');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
