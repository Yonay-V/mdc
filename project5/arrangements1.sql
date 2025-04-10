-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2013 at 11:16 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hanselandpetal`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrangements`
--

CREATE TABLE IF NOT EXISTS `arrangements` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `image` text(50) NOT NULL,
  `title` text(100) NOT NULL,
  `price` text(6) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `arrangements`
--

INSERT INTO `arrangements` (`id`, `image`, `title`, `price`, `description`) VALUES
(1, '<img src="images/200_arrangement_yellow_tulip.jpg" alt="Yellow Tulips" />', '<h3>Burst of Yellow</h3>', '<h4>&#36;19.95</h4>', '<p>This simple, yet stunning arrangement brims with exuberance. Yellow tulips in a contrasting container.</p>'),
(2, '<img src="images/200_arrangement_163066655.jpg" alt="Mixed Mums" />', '<h3>Polka Dot Pail</h3>', '<h4>&#36;25.95</h4>', '<p>Mum''s the word. She''ll go dotty over this arrangement of mixed crysanthemums in a rad pail with white polka dots.</p>'),
(3, '<img src="images/200_tulips_daffodils_139756476.jpg" alt="Mixed Tulips" />', '<h3>Green Thumb</h3>', '<h4>&#36;22.95</h4>', '<p>You can tell spring''s in the air when the daffodils and tulips are in full bloom. Blow away your winter blues with this fresh arrangement.</p>'),
(4, '<img src="images/200_bouquet_watering_can_orange_163066621.jpg" alt="Watering Can with Mums" />', '<h3>It&apos;s Raining Flowers</h3>', '<h4>&#36;19.95</h4>', '<p>April showers or autumn downpours won''t dampen your spirits with this arrangement in a bright, orange watering can. Fill it with tulips and daffs in spring, or crystanthemums in late summer and autumn.</p> '),
(5, '<img src="images/200_carnations_basket_92246977.jpg" alt="Basket of Carnations" />', '<h3>Get Well Soon</h3>', '<h4>&#36;19.95</h4>', '<p>What better way to lift the spirits of someone feeling under the weather than with this wicker basket filled with flowers. This example is filled with carnations, but choose the patient''s favorite flowers to say "Get well soon."</p>'),
(6, '<img src="images/200_lilacs_tulips_157045915.jpg" alt="Tulips and Lilac" />', '<h3>Bon Anniversaire!</h3>', '<h4>&#36;25.95</h4>', '<p>Say happy birthday to that special woman in your life with this pretty pink arrangement of lilac and tulips. It comes in a white container all wrapped up with a pink bow.</p>'),
(7, '<img src="images/200_sunflowers_146748795.jpg" alt="Sunflowers" />', '<h3>Brighten Any Day</h3>', '<h4>&#36;22.95</h4>', '<p>Inspired by Vincent van Gogh, this arrangement of sunflowers will brighten anyone&apos;s day. It comes in an elegant turquoise stemmed vase.</p>'),
(8, '<img src="images/200_white_tulip_163199928.jpg" alt="White Tulips" />', '<h3>Purely Beautiful</h3>', '<h4>&#36;19.95</h4>', '<p>Pure white flowers in a glass bowl. Simply elegant, simply beautiful, simply delightful.</p>'),
(9, '<img src="images/200_tulips_daffodils_153986115.jpg" alt="Mixed Tulips" />', '<h3>Tea for Two</h3>', '<h4>&#36;15.95</h4>', '<p>A fun arrangement of spring flowers in two milk jugs. What a nice way to wish all the best to a happy couple on their engagement or wedding.</p>'),
(10, '<img src="images/200_arrangement_94972439.jpg" alt="Mixed Bouquet" />', '<h3>Thinking of You</h3>', '<h4>&#36;35.95</h4>', '<p>A luxurious arrangement of flowers and greenery in a superior quality square vase. The perfect way to tell someone special that you''re thinking of them.</p>'),
(11, '<img src="images/200_irises_lilies_87478811.jpg" alt="Irises and Lilies" />', '<h3>Simply Elegant</h3>', '<h4>&#36;22.95</h4>', '<p>Irises and lilies are among the most elegant of flowers. Add some ferns for extra greenery, and you have a simply elegant arrangement at a very affordable price.</p>'),
(12, '<img src="images/200_pink_white_daisies_146806077.jpg" alt="Pink and White Mums" />', '<h3>Blush and Bashful</h3>', '<h4>&#36;19.95</h4>', '<p>Not quite sure how to say "Sorry"? Or maybe "I love you"? Save your blushes with this simple arrangement of pink and white crysanthemums.</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
