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
(13, '<img src="images/200_tulips_watering_can_155465445.jpg" alt="Tulips in Watering Can" />', '<h3>Morning in the Garden</h3>', '<h4>&#36;29.95</h4>', '<p>A silver watering can overflowing with red and yellow tulips. What a way to say "Top of the morning to you!"</p>'),
(14, '<img src="images/200_birthday_163167595.jpg" alt="Orchid Bouquet" />', '<h3>Orchids for the Table</h3>', '<h4>&#36;35.95</h4>', '<p>This is one for formal occasions, or to spoil someone who''s really special. An exotic array of orchids in a deep red square vase.</p>'),
(15, '<img src="images/200_red_yellow_roses_119752732.jpg" alt="Red and Yellow Roses" />', '<h3>Classic Rose Bouquet</h3>', '<h4>&#36;49.95</h4>', '<p>For that special occasion, say it with roses. I love you. Happy anniversary. Congratulations. Whatever you want to say, roses are the perfect choice.</p>'),
(16, '<img src="images/200_white_lily_pink_daisy_92493508.jpg" alt="Lilies and Roses" />', '<h3>Evening Surprise</h3>', '<h4>&#36;29.95</h4>', '<p>An unconventional mix of lilies, roses, and crysanthemums. Surprise your loved one with this unique arrangement.</p>'),
(17, '<img src="images/200_carnations_daisies_92007328.jpg" alt="Carnations and Daisies" />', '<h3>Cheer Up!</h3>', '<h4>&#36;19.95</h4>', '<p>Carnations, daisies, and splashes of greenery&mdash;the perfect pick-me-up for someone feeling under the weather or just down in the dumps.</p>'),
(18, '<img src="images/200_purple_daisy_rose104274224.jpg" alt="Daisy Bouquet" />', '<h3>Purple Galore</h3>', '<h4>&#36;21.95</h4>', '<p>A vibrant mix of purple and white daisies, topped off with red roses. Delivered in a matching purple mosaic vase.</p>'),
(19, '<img src="images/200_colorful_gerbera_119722776.jpg" alt="Mixed Gerbera Daisies" />', '<h3>Dotted Daisies</h3>', '<h4>&#36;25.95</h4>', '<p>This fun arrangement of gerbera daisies in round red vase with white polka dots is bound to brighten up anyone''s day.</p>'),
(20, '<img src="images/200_yellow_white_mums_147664285.jpg" alt="Daisy Mix" />', '<h3>Patio Picnicking</h3>', '<h4>&#36;19.95</h4>', '<p>A simple, yet delightful arrangement of daisies and crystanthemums, just like a breath of fresh air. Ideal for the patio table or to bring the joys of nature indoors.</p>'),
(21, '<img src="images/200_tulips_daffodils2_153986183.jpg" alt="Mixed Tulips" />', '<h3>Box of Happiness</h3>', '<h4>&#36;29.95</h4>', '<p>An explosion of color, with daffs and tulips in a yellow vase with a mosaic pattern. Sure to bring a happy smile to anyone''s face.</p>'),
(22, '<img src="images/200_butterflies_120624479.jpg" alt="Daisies and Butterflies" />', '<h3>Bounty of Butterflies</h3>', '<h4>&#36;25.95</h4>', '<p>We supply the flowers, and the butterflies are sure to gather round this delightful mix of wild flowers. Just like an English country garden in an elegant vase.</p>'),
(23, '<img src="images/200_tulips_irises_121357306.jpg" alt="Irises and Tulips" />', '<h3>Mardi Gras Mambo</h3>', '<h4>&#36;29.95</h4>', '<p>A flamboyant mix of irises and yellow tulips, this arrangement will set your table dancing to a whole new rhythm.</p>'),
(24, '<img src="images/200_tulips_daffodils4_160232631.jpg" alt="Mixed Bulbs" />', '<h3>Cascade of Color</h3>', '<h4>&#36;32.95</h4>', '<p>Gorgeous, exuberant, a riot of color... Go completely wild with this stunning arrangement of flowers in season.</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
