# 🚀 iHome Masters - Hosting Deployment Guide

## 📋 Overview
This guide will help you deploy your iHome Masters interior design website to any web hosting service.

## 🎯 Quick Start

### 1. Database Setup
```sql
-- Create database
CREATE DATABASE ihome CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Import database
mysql -u username -p ihome < ihome.sql
```

### 2. File Upload
Upload all files to your hosting's `public_html` or `www` folder maintaining the folder structure.

### 3. Configuration
Update `config.php` with your hosting details:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'ihome');
define('SITE_URL', 'https://yourdomain.com');
```

## 📁 File Structure
```
📁 Root Directory
├── 📁 admin/           (Admin panel)
├── 📁 assets/          (CSS, JS, Images)
├── 📁 img/             (Website images)
├── 📁 css/             (Stylesheets)
├── 📁 js/              (JavaScript files)
├── 📁 uploads/         (User uploads)
├── 📄 index.php        (Homepage)
├── 📄 header.php       (Header template)
├── 📄 footer.php       (Footer template)
├── 📄 config.php       (Configuration)
├── 📄 connection.php   (Database connection)
├── 📄 robots.txt       (SEO)
├── 📄 sitemap.php      (Dynamic sitemap)
├── 📄 .htaccess        (Performance & Security)
└── 📄 analytics.php    (Google Analytics)
```

## 🔧 Configuration Files

### config.php
Main configuration file with database and site settings.

### connection.php
Database connection handler.

### .htaccess
Apache server configuration for performance and security.

## 📊 Database Tables
- `admin_users` - Admin panel users
- `contact_submissions` - Contact form data
- `calculator_submissions` - Calculator form data
- `blog_posts` - Blog articles
- `portfolio_projects` - Portfolio projects
- `services` - Service listings
- `testimonials` - Client testimonials
- `team_members` - Team information
- `site_settings` - Website settings

## 🔒 Security Features
- SQL injection protection
- XSS protection
- CSRF protection
- File upload validation
- Admin panel security
- SSL/HTTPS support

## 📧 Email Configuration
Update SMTP settings in `config.php`:
```php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
```

## 🚀 Performance Features
- Gzip compression
- Browser caching
- Image optimization
- Minified CSS/JS
- Database optimization

## 📱 Mobile Features
- Responsive design
- Touch-friendly interface
- Mobile-optimized images
- Fast loading times

## 🔍 SEO Features
- Clean URLs
- Meta tags
- Sitemap generation
- Robots.txt
- Schema markup
- Open Graph tags

## 🧪 Testing Checklist
- [ ] Database connection
- [ ] Contact forms
- [ ] Calculator functionality
- [ ] Image galleries
- [ ] Mobile responsiveness
- [ ] Email delivery
- [ ] Admin panel access
- [ ] SSL certificate
- [ ] Page load speed
- [ ] Cross-browser compatibility

## 🛠️ Troubleshooting

### Common Issues

**Database Connection Error**
```php
// Check these in config.php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'ihome');
```

**500 Internal Server Error**
- Check `.htaccess` syntax
- Verify PHP version (7.4+ recommended)
- Check file permissions

**Images Not Loading**
- Verify file paths
- Check file permissions (755 for folders, 644 for files)
- Ensure images are uploaded

**Forms Not Working**
- Check email configuration
- Verify form action URLs
- Test database connection

## 📞 Support
For hosting-related issues:
1. Check hosting provider documentation
2. Verify server requirements
3. Contact hosting support
4. Check error logs

## 🎉 Success!
Your iHome Masters website is now live! 

**Next Steps:**
1. Set up Google Analytics
2. Create social media accounts
3. Set up regular backups
4. Monitor performance
5. Update content regularly

---

## 📚 Additional Resources
- [PHP Documentation](https://www.php.net/docs.php)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [Apache .htaccess Guide](https://httpd.apache.org/docs/current/howto/htaccess.html)
- [SSL Certificate Setup](https://letsencrypt.org/docs/)

---

**Version:** 1.0  
**Last Updated:** 2024  
**Compatibility:** PHP 7.4+, MySQL 5.7+, Apache 2.4+ 