-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 02:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=visible,1=hidden,2=deleted',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `create_at`) VALUES
(1, 'PHP', 'php-tutorial', 'PHP', 'PHP', 'PHP', 'PHP', 0, 0, '2025-03-08 15:05:03'),
(2, 'Technology', 'technology', 'All about the latest in tech.', 'Technology News and Trends', 'Explore the latest technology trends and innovations.', 'technology, tech news, gadgets', 0, 0, '2025-03-10 13:06:35'),
(3, 'Travel', 'travel', 'Discover amazing travel destinations.', 'Travel the World', 'Tips and guides for your next adventure.', 'travel, adventure, destinations', 0, 0, '2025-03-10 13:06:35'),
(4, 'Health', 'health', 'Your guide to a healthy life.', 'Health & Wellness', 'Practical advice for your health.', 'health, wellness, fitness', 0, 0, '2025-03-10 13:06:35'),
(5, 'Lifestyle', 'lifestyle', 'Trends and tips for better living.', 'Lifestyle Insights', 'All about fashion, beauty, and more.', 'lifestyle, fashion, beauty', 0, 0, '2025-03-10 13:06:35'),
(6, 'Food', 'food', 'Delicious recipes and restaurant reviews.', 'Foodie Adventures', 'From home recipes to dining out.', 'food, recipes, restaurants', 0, 0, '2025-03-10 13:06:35'),
(7, 'Education', 'education', 'Resources for lifelong learning.', 'Learning Never Stops', 'Tips and tools for education enthusiasts.', 'education, learning, resources', 0, 0, '2025-03-10 13:06:35'),
(8, 'Finance', 'finance', 'Master your personal finances.', 'Smart Money Tips', 'Financial planning made easy.', 'finance, money, savings', 0, 0, '2025-03-10 13:06:35'),
(9, 'Sports', 'sports', 'All the latest in the sports world.', 'Game On!', 'Sports updates and analysis.', 'sports, games, players', 0, 0, '2025-03-10 13:06:35'),
(10, 'Entertainment', 'entertainment', 'Movies, music, and more.', 'Lights, Camera, Action!', 'Stay up-to-date with entertainment news.', 'entertainment, movies, music', 0, 0, '2025-03-10 13:06:35'),
(11, 'Parenting', 'parenting', 'Tips for modern parents.', 'Parenting Made Easier', 'Navigate parenting with confidence.', 'parenting, kids, advice', 0, 0, '2025-03-10 13:06:35'),
(12, 'DIY', 'diy', 'Do-it-yourself projects and tutorials.', 'DIY Mastery', 'Step-by-step guides for creative projects.', 'diy, projects, crafts', 0, 0, '2025-03-10 13:06:35'),
(13, 'Science', 'science', 'Exploring the wonders of science.', 'Discover Science', 'In-depth articles on scientific discoveries.', 'science, research, exploration', 0, 0, '2025-03-10 13:06:35'),
(14, 'Politics', 'politics', 'Insights into global politics.', 'Global Affairs', 'Updates on political trends.', 'politics, government, news', 0, 0, '2025-03-10 13:06:35'),
(15, 'Environment', 'environment', 'Green living and sustainability tips.', 'Save the Planet', 'Your guide to eco-friendly living.', 'environment, sustainability, green', 0, 0, '2025-03-10 13:06:35'),
(16, 'Business', 'business', 'News and insights about businesses.', 'Entrepreneurial Insights', 'Support and stories for business owners.', 'business, startups, economy', 0, 0, '2025-03-10 13:06:35'),
(17, 'History', 'history', 'Unveiling the past.', 'History Revisited', 'Dive deep into historical events.', 'history, events, past', 0, 0, '2025-03-10 13:06:35'),
(18, 'Gaming', 'gaming', 'Level up with gaming news and tips.', 'Game Zone', 'Everything about games and consoles.', 'gaming, video games, consoles', 0, 0, '2025-03-10 13:06:35'),
(19, 'Fashion', 'fashion', 'Stay stylish with these updates.', 'Runway Highlights', 'Latest trends in fashion.', 'fashion, trends, style', 0, 0, '2025-03-10 13:06:35'),
(20, 'Culture', 'culture', 'Exploring diverse cultures around the globe.', 'Cultural Insights', 'Learn about traditions, people, and more.', 'culture, diversity, global', 0, 0, '2025-03-10 13:06:35'),
(21, 'Fitness', 'fitness', 'Your fitness journey begins here.', 'Fit and Fabulous', 'Workouts, tips, and more.', 'fitness, exercise, gym', 0, 2, '2025-03-10 13:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(1, 7, 'How to Master Python Programming', 'how-to-master-python-programming', '<h3>Learn the best practices to become a Python expert with this comprehensive guide.</h3><p><b><br></b></p><p><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Python&nbsp;</span><b></b></p>', '1744771013.jpeg', 'Master Python Programming: A Complete Guide', 'Learn Python programming in-depth with our step-by-step guide.', 'python, programming, guide, tutorial', 0, '2025-03-10 13:26:31'),
(2, 2, 'The Future of Artificial Intelligence', 'the-future-of-artificial-intelligence', 'Artificial Intelligence is revolutionizing industries. Discover its future potential and challenges.', '1744775650.png', 'The Future of AI: Trends and Predictions', 'Explore the evolving field of AI and its impact on the future of technology.', 'AI, future, technology, innovation', 0, '2025-03-10 13:26:31'),
(3, 3, '10 Tips for Effective Time Management', '10-tips-for-effective-time-management', 'Learn simple yet effective strategies to manage your time and increase productivity.', '1744775714.png', 'Time Management Tips: Boost Your Productivity', 'Discover tips and techniques for mastering time management in your daily life.', 'time management, productivity, tips, efficiency', 0, '2025-03-10 13:26:31'),
(4, 4, 'Top 5 Healthy Eating Habits', 'top-5-healthy-eating-habits', 'Adopting healthy eating habits is crucial for a balanced lifestyle. Here are 5 essential habits to follow.', '1744775744.jpeg', 'Healthy Eating Habits for a Better Life', 'Improve your health with these 5 simple eating habits.', 'healthy eating, diet, nutrition, habits', 0, '2025-03-10 13:26:31'),
(5, 5, 'Exploring the Wonders of Space Travel', 'exploring-the-wonders-of-space-travel', 'Space travel has fascinated humanity for decades. Let’s take a closer look at the future of space exploration.', '1744775781.jpg', 'Space Travel: The Final Frontier', 'Explore the amazing possibilities of space travel and the future of human exploration.', 'space travel, exploration, future, technology', 0, '2025-03-10 13:26:31'),
(6, 7, 'Ultimate Guide to Web Development', 'ultimate-guide-to-web-development', 'This ultimate guide walks you through every step of becoming a successful web developer in today’s world.', '1744775817.jpg', 'Web Development Guide: From Beginner to Pro', 'Learn everything you need to know about web development and building websites.', 'web development, programming, coding, tutorial', 0, '2025-03-10 13:26:31'),
(7, 8, 'Understanding the Basics of Financial Management', 'understanding-the-basics-of-financial-management', 'Learn how to manage personal finances, create budgets, and grow your wealth with these essential tips.', '1744775840.jpg', 'Financial Management: Tips for Financial Success', 'Master the art of managing money and planning your financial future.', 'financial management, money, budgeting, wealth', 0, '2025-03-10 13:26:31'),
(8, 8, 'The Rise of Remote Work in 2025', 'the-rise-of-remote-work-in-2025', 'Remote work is transforming the way we live and work. Discover the trends and future of remote jobs.', '1744775874.webp', 'The Future of Remote Work: Trends in 2025', 'Explore the growth of remote work and how it will evolve in the coming years.', 'remote work, jobs, trends, work from home', 0, '2025-03-10 13:26:31'),
(9, 7, 'Building a Strong Personal Brand Online', 'building-a-strong-personal-brand-online', 'Creating a personal brand online is crucial for success in today’s digital age. Learn how to establish your brand.', '1744775925.png', 'Personal Branding: How to Stand Out Online', 'Discover tips on building a personal brand that helps you get noticed online.', 'personal brand, online marketing, career, success', 0, '2025-03-10 13:26:31'),
(10, 4, 'The Importance of Mental Health Awareness', 'the-importance-of-mental-health-awareness', 'Mental health awareness is vital for a healthy society. Learn why it’s important and how to promote mental well-being.', '1744775968.jpeg', 'Mental Health Awareness: Breaking the Stigma', 'Understanding the importance of mental health and how to raise awareness about it.', 'mental health, awareness, well-being, support', 0, '2025-03-10 13:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `create_at`) VALUES
(1, 'Jack', 'Oliver', 'gamehero315@gmail.com', '12345678', 0, 0, '2025-03-08 14:59:59'),
(2, 'makara', 'meng', 'mengmakara@gmail.com', '1234', 0, 0, '2025-03-08 15:19:39'),
(3, 'SOKCHHENG', 'VANG', 'sokchheng802@gmail.com', '1234', 1, 0, '2025-03-26 02:42:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `create_at` (`create_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
