-- ========================================
-- iHome Master Interior Design Database Schema
-- ========================================

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS ihome CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ihome;

-- ========================================
-- CONTACT INQUIRIES TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS contact_inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    subject VARCHAR(200) DEFAULT NULL,
    message TEXT NOT NULL,
    service VARCHAR(100) DEFAULT NULL,
    budget VARCHAR(50) DEFAULT NULL,
    ip_address VARCHAR(45) DEFAULT NULL,
    status ENUM('new', 'contacted', 'qualified', 'converted', 'lost') DEFAULT 'new',
    notes TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_status (status),
    INDEX idx_created_at (created_at)
);

-- ========================================
-- USERS TABLE (for admin panel)
-- ========================================
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    role ENUM('admin', 'manager', 'designer') DEFAULT 'designer',
    is_active BOOLEAN DEFAULT TRUE,
    last_login TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_username (username),
    INDEX idx_email (email),
    INDEX idx_role (role)
);

-- ========================================
-- PROJECTS TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    category ENUM('residential', 'commercial', 'kitchen', 'bedroom', 'living_room', 'bathroom', 'office', 'restaurant', 'cafe') NOT NULL,
    client_name VARCHAR(100) DEFAULT NULL,
    location VARCHAR(200) DEFAULT NULL,
    area_sqft DECIMAL(10,2) DEFAULT NULL,
    budget DECIMAL(12,2) DEFAULT NULL,
    start_date DATE DEFAULT NULL,
    completion_date DATE DEFAULT NULL,
    status ENUM('planning', 'in_progress', 'completed', 'on_hold') DEFAULT 'planning',
    featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_category (category),
    INDEX idx_status (status),
    INDEX idx_featured (featured)
);

-- ========================================
-- PROJECT IMAGES TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS project_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    image_title VARCHAR(200) DEFAULT NULL,
    image_alt VARCHAR(200) DEFAULT NULL,
    is_primary BOOLEAN DEFAULT FALSE,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE,
    INDEX idx_project_id (project_id),
    INDEX idx_is_primary (is_primary)
);

-- ========================================
-- SERVICES TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    description TEXT,
    short_description VARCHAR(300) DEFAULT NULL,
    icon VARCHAR(100) DEFAULT NULL,
    image_path VARCHAR(255) DEFAULT NULL,
    price_range VARCHAR(100) DEFAULT NULL,
    duration VARCHAR(100) DEFAULT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_slug (slug),
    INDEX idx_is_active (is_active)
);

-- ========================================
-- TESTIMONIALS TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100) NOT NULL,
    client_designation VARCHAR(100) DEFAULT NULL,
    client_company VARCHAR(100) DEFAULT NULL,
    testimonial TEXT NOT NULL,
    rating INT DEFAULT 5 CHECK (rating >= 1 AND rating <= 5),
    client_image VARCHAR(255) DEFAULT NULL,
    project_type VARCHAR(100) DEFAULT NULL,
    is_featured BOOLEAN DEFAULT FALSE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_is_featured (is_featured),
    INDEX idx_is_active (is_active)
);

-- ========================================
-- TEAM MEMBERS TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS team_members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    designation VARCHAR(100) NOT NULL,
    bio TEXT,
    image_path VARCHAR(255) DEFAULT NULL,
    email VARCHAR(100) DEFAULT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    linkedin_url VARCHAR(255) DEFAULT NULL,
    instagram_url VARCHAR(255) DEFAULT NULL,
    experience_years INT DEFAULT NULL,
    specializations TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_is_active (is_active)
);

-- ========================================
-- BLOG POSTS TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    slug VARCHAR(200) UNIQUE NOT NULL,
    content LONGTEXT NOT NULL,
    excerpt TEXT,
    featured_image VARCHAR(255) DEFAULT NULL,
    author_id INT DEFAULT NULL,
    category VARCHAR(100) DEFAULT NULL,
    tags TEXT,
    meta_title VARCHAR(200) DEFAULT NULL,
    meta_description TEXT,
    is_published BOOLEAN DEFAULT FALSE,
    published_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL,
    INDEX idx_slug (slug),
    INDEX idx_is_published (is_published),
    INDEX idx_published_at (published_at)
);

-- ========================================
-- CALCULATOR QUOTES TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS calculator_quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    service_type VARCHAR(100) NOT NULL,
    area_sqft DECIMAL(10,2) NOT NULL,
    selected_options TEXT,
    estimated_cost DECIMAL(12,2) NOT NULL,
    estimated_cost DECIMAL(12,2) NOT NULL,
    additional_requirements TEXT,
    ip_address VARCHAR(45) DEFAULT NULL,
    status ENUM('new', 'contacted', 'converted') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_service_type (service_type),
    INDEX idx_status (status)
);

-- ========================================
-- GALLERY CATEGORIES TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS gallery_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    description TEXT,
    image_path VARCHAR(255) DEFAULT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_slug (slug),
    INDEX idx_is_active (is_active)
);

-- ========================================
-- GALLERY IMAGES TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS gallery_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT DEFAULT NULL,
    title VARCHAR(200) DEFAULT NULL,
    description TEXT,
    image_path VARCHAR(255) NOT NULL,
    thumbnail_path VARCHAR(255) DEFAULT NULL,
    alt_text VARCHAR(200) DEFAULT NULL,
    is_featured BOOLEAN DEFAULT FALSE,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES gallery_categories(id) ON DELETE SET NULL,
    INDEX idx_category_id (category_id),
    INDEX idx_is_featured (is_featured)
);

-- ========================================
-- SETTINGS TABLE
-- ========================================
CREATE TABLE IF NOT EXISTS settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(100) UNIQUE NOT NULL,
    setting_value TEXT,
    setting_type ENUM('text', 'textarea', 'number', 'boolean', 'json') DEFAULT 'text',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_setting_key (setting_key)
);

-- ========================================
-- INSERT DEFAULT DATA
-- ========================================

-- Insert default admin user (password: admin123)
INSERT INTO users (username, email, password, full_name, role) VALUES 
('admin', 'admin@ihomemasters.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator', 'admin');

-- Insert default services
INSERT INTO services (name, slug, description, short_description, icon, price_range, duration) VALUES
('Modular Kitchen Design', 'modular-kitchen', 'Complete modular kitchen design and installation services', 'Professional modular kitchen design with modern appliances', 'kitchen-icon', '₹50,000 - ₹5,00,000', '4-8 weeks'),
('Bedroom Interior Design', 'bedroom-interior', 'Custom bedroom interior design and furniture', 'Transform your bedroom with our expert design services', 'bedroom-icon', '₹30,000 - ₹3,00,000', '3-6 weeks'),
('Living Room Design', 'living-room', 'Modern living room interior design solutions', 'Create stunning living spaces with our design expertise', 'living-room-icon', '₹40,000 - ₹4,00,000', '4-6 weeks'),
('Office Interior Design', 'office-interior', 'Professional office interior design services', 'Boost productivity with our office design solutions', 'office-icon', '₹1,00,000 - ₹10,00,000', '6-12 weeks'),
('Bathroom Design', 'bathroom-design', 'Complete bathroom renovation and design', 'Modern bathroom designs with premium fixtures', 'bathroom-icon', '₹25,000 - ₹2,50,000', '3-5 weeks');

-- Insert default settings
INSERT INTO settings (setting_key, setting_value, setting_type, description) VALUES
('site_name', 'iHome Master Interior Designers', 'text', 'Website name'),
('site_description', 'Professional interior design and modular kitchen services in Noida', 'textarea', 'Website description'),
('contact_email', 'info@ihomemasters.com', 'text', 'Primary contact email'),
('contact_phone', '+91-9876543210', 'text', 'Primary contact phone'),
('contact_address', 'Sector 62, Noida, Uttar Pradesh 201301', 'textarea', 'Business address'),
('social_facebook', 'https://www.facebook.com/ihomemasters', 'text', 'Facebook page URL'),
('social_instagram', 'https://www.instagram.com/ihomemasters', 'text', 'Instagram profile URL'),
('social_linkedin', 'https://www.linkedin.com/company/ihomemasters', 'text', 'LinkedIn company page URL'),
('google_analytics_id', '', 'text', 'Google Analytics tracking ID'),
('google_maps_api_key', '', 'text', 'Google Maps API key');

-- Insert sample testimonials
INSERT INTO testimonials (client_name, client_designation, testimonial, rating, project_type, is_featured) VALUES
('Rahul Sharma', 'Homeowner', 'iHome Master transformed our kitchen completely. The design is modern and functional. Highly recommended!', 5, 'Modular Kitchen', TRUE),
('Priya Patel', 'Business Owner', 'Professional team, excellent work quality, and timely delivery. Our office looks amazing now!', 5, 'Office Interior', TRUE),
('Amit Kumar', 'Property Developer', 'Outstanding interior design services. They delivered beyond our expectations.', 5, 'Residential Project', TRUE);

-- Insert sample team members
INSERT INTO team_members (name, designation, bio, experience_years, specializations) VALUES
('Arun Singh', 'Lead Interior Designer', '10+ years of experience in residential and commercial interior design', 10, 'Modular Kitchens, Living Rooms, Office Design'),
('Neha Gupta', 'Senior Designer', 'Expert in modern and contemporary interior design styles', 8, 'Bedroom Design, Bathroom Design, Space Planning'),
('Rajesh Verma', 'Project Manager', 'Ensures smooth project execution and client satisfaction', 12, 'Project Management, Client Coordination');

-- ========================================
-- CREATE VIEWS FOR EASY DATA ACCESS
-- ========================================

-- View for active projects
CREATE VIEW active_projects AS
SELECT * FROM projects WHERE status IN ('planning', 'in_progress');

-- View for completed projects
CREATE VIEW completed_projects AS
SELECT * FROM projects WHERE status = 'completed';

-- View for featured projects
CREATE VIEW featured_projects AS
SELECT p.*, pi.image_path as primary_image
FROM projects p
LEFT JOIN project_images pi ON p.id = pi.project_id AND pi.is_primary = TRUE
WHERE p.featured = TRUE;

-- View for recent testimonials
CREATE VIEW recent_testimonials AS
SELECT * FROM testimonials 
WHERE is_active = TRUE 
ORDER BY created_at DESC;

-- ========================================
-- CREATE INDEXES FOR BETTER PERFORMANCE
-- ========================================

-- Composite indexes for better query performance
CREATE INDEX idx_projects_category_status ON projects(category, status);
CREATE INDEX idx_contact_inquiries_status_created ON contact_inquiries(status, created_at);
CREATE INDEX idx_blog_posts_published_category ON blog_posts(is_published, category);
CREATE INDEX idx_gallery_images_category_featured ON gallery_images(category_id, is_featured);

-- ========================================
-- END OF SCHEMA
-- ======================================== 