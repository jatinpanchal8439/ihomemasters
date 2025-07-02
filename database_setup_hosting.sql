-- ========================================
-- iHome Masters Database Setup for Hosting
-- ========================================

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS `ihome` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Use the database
USE `ihome`;

-- ========================================
-- TABLES CREATION
-- ========================================

-- Admin users table
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `role` enum('admin','manager','editor') DEFAULT 'admin',
  `status` enum('active','inactive') DEFAULT 'active',
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default admin user (password: admin123)
INSERT INTO `admin_users` (`username`, `password`, `email`, `full_name`, `role`) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@ihomemasters.com', 'Administrator', 'admin');

-- Contact form submissions
CREATE TABLE IF NOT EXISTS `contact_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text NOT NULL,
  `status` enum('new','read','replied','spam') DEFAULT 'new',
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Calculator submissions
CREATE TABLE IF NOT EXISTS `calculator_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `service_type` varchar(50) NOT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `requirements` text,
  `estimated_cost` decimal(10,2) DEFAULT NULL,
  `status` enum('new','processed','contacted','completed') DEFAULT 'new',
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `service_type` (`service_type`),
  KEY `status` (`status`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Blog posts
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `excerpt` text,
  `featured_image` varchar(255) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  `meta_title` varchar(200) DEFAULT NULL,
  `meta_description` text,
  `tags` varchar(500) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `published_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `status` (`status`),
  KEY `author_id` (`author_id`),
  KEY `created_at` (`created_at`),
  FOREIGN KEY (`author_id`) REFERENCES `admin_users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Portfolio projects
CREATE TABLE IF NOT EXISTS `portfolio_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `description` text,
  `category` varchar(100) NOT NULL,
  `client` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `budget` varchar(50) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `gallery_images` text,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  `featured` tinyint(1) DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `category` (`category`),
  KEY `status` (`status`),
  KEY `featured` (`featured`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `description` text,
  `content` longtext,
  `icon` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `price_range` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `features` text,
  `status` enum('active','inactive') DEFAULT 'active',
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `category` (`category`),
  KEY `status` (`status`),
  KEY `sort_order` (`sort_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_position` varchar(100) DEFAULT NULL,
  `client_company` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  `rating` int(1) DEFAULT 5,
  `client_image` varchar(255) DEFAULT NULL,
  `project_type` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `featured` tinyint(1) DEFAULT 0,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `featured` (`featured`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Team members
CREATE TABLE IF NOT EXISTS `team_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `bio` text,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `sort_order` (`sort_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Site settings
CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text,
  `setting_type` enum('text','textarea','number','boolean','json') DEFAULT 'text',
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_key` (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default site settings
INSERT INTO `site_settings` (`setting_key`, `setting_value`, `setting_type`, `description`) VALUES
('site_name', 'iHome Masters', 'text', 'Website name'),
('site_description', 'Professional Interior Design Services', 'textarea', 'Website description'),
('contact_email', 'info@ihomemasters.com', 'text', 'Contact email'),
('contact_phone', '+91 98765 43210', 'text', 'Contact phone'),
('contact_address', 'Mumbai, Maharashtra, India', 'textarea', 'Contact address'),
('social_facebook', '', 'text', 'Facebook URL'),
('social_instagram', '', 'text', 'Instagram URL'),
('social_twitter', '', 'text', 'Twitter URL'),
('social_linkedin', '', 'text', 'LinkedIn URL'),
('google_analytics_id', '', 'text', 'Google Analytics ID'),
('google_maps_api_key', '', 'text', 'Google Maps API Key'),
('maintenance_mode', '0', 'boolean', 'Maintenance mode'),
('maintenance_message', 'Website is under maintenance. Please check back soon.', 'textarea', 'Maintenance message');

-- ========================================
-- INDEXES FOR PERFORMANCE
-- ========================================

-- Add indexes for better performance
CREATE INDEX idx_contact_submissions_email ON contact_submissions(email);
CREATE INDEX idx_contact_submissions_created_at ON contact_submissions(created_at);
CREATE INDEX idx_calculator_submissions_email ON calculator_submissions(email);
CREATE INDEX idx_calculator_submissions_service_type ON calculator_submissions(service_type);
CREATE INDEX idx_blog_posts_status ON blog_posts(status);
CREATE INDEX idx_blog_posts_published_at ON blog_posts(published_at);
CREATE INDEX idx_portfolio_projects_category ON portfolio_projects(category);
CREATE INDEX idx_portfolio_projects_status ON portfolio_projects(status);
CREATE INDEX idx_services_category ON services(category);
CREATE INDEX idx_services_status ON services(status);
CREATE INDEX idx_testimonials_status ON testimonials(status);
CREATE INDEX idx_testimonials_featured ON testimonials(featured);
CREATE INDEX idx_team_members_status ON team_members(status);

-- ========================================
-- SAMPLE DATA (Optional)
-- ========================================

-- Sample services
INSERT INTO `services` (`name`, `slug`, `description`, `category`, `price_range`, `duration`, `status`, `sort_order`) VALUES
('Interior Design', 'interior-design', 'Complete interior design solutions for homes and offices', 'residential', '₹50,000 - ₹5,00,000', '2-8 weeks', 'active', 1),
('Kitchen Design', 'kitchen-design', 'Modern and functional kitchen designs', 'residential', '₹1,00,000 - ₹10,00,000', '3-6 weeks', 'active', 2),
('Office Interior', 'office-interior', 'Professional office interior design', 'commercial', '₹2,00,000 - ₹20,00,000', '4-12 weeks', 'active', 3),
('False Ceiling', 'false-ceiling', 'Beautiful false ceiling designs', 'both', '₹50,000 - ₹3,00,000', '1-3 weeks', 'active', 4);

-- Sample testimonials
INSERT INTO `testimonials` (`client_name`, `client_position`, `client_company`, `content`, `rating`, `project_type`, `status`, `featured`) VALUES
('Priya Sharma', 'Homeowner', '', 'Amazing work! They transformed our living room completely. Highly recommended!', 5, 'residential', 'active', 1),
('Rajesh Kumar', 'Business Owner', 'Tech Solutions Ltd', 'Professional service and excellent quality. Our office looks fantastic now.', 5, 'commercial', 'active', 1),
('Meera Patel', 'Homeowner', '', 'Great attention to detail and within budget. Very satisfied with the results.', 5, 'residential', 'active', 0);

-- Sample team members
INSERT INTO `team_members` (`name`, `position`, `bio`, `email`, `status`, `sort_order`) VALUES
('Arun Singh', 'Lead Designer', 'Experienced interior designer with 10+ years in the industry', 'arun@ihomemasters.com', 'active', 1),
('Neha Verma', 'Senior Designer', 'Specialized in modern and contemporary designs', 'neha@ihomemasters.com', 'active', 2),
('Vikram Mehta', 'Project Manager', 'Ensuring smooth project execution and client satisfaction', 'vikram@ihomemasters.com', 'active', 3);

-- ========================================
-- DATABASE OPTIMIZATION
-- ========================================

-- Optimize tables
OPTIMIZE TABLE admin_users;
OPTIMIZE TABLE contact_submissions;
OPTIMIZE TABLE calculator_submissions;
OPTIMIZE TABLE blog_posts;
OPTIMIZE TABLE portfolio_projects;
OPTIMIZE TABLE services;
OPTIMIZE TABLE testimonials;
OPTIMIZE TABLE team_members;
OPTIMIZE TABLE site_settings;

-- ========================================
-- SECURITY SETTINGS
-- ========================================

-- Create a backup user with limited privileges (optional)
-- CREATE USER 'ihome_backup'@'localhost' IDENTIFIED BY 'strong_backup_password';
-- GRANT SELECT, LOCK TABLES ON ihome.* TO 'ihome_backup'@'localhost';

-- ========================================
-- COMPLETION MESSAGE
-- ========================================

SELECT 'iHome Masters Database Setup Completed Successfully!' AS status;
SELECT COUNT(*) AS total_tables FROM information_schema.tables WHERE table_schema = 'ihome'; 