# iHome Master Interior Design Website - Setup Instructions

## 🚀 Complete Setup Guide for SmarterASP.NET Hosting

### 📋 Prerequisites
- SmarterASP.NET hosting account
- Domain name (optional)
- FTP client (FileZilla, WinSCP, etc.)
- Database access (MySQL/MariaDB)

---

## 🔧 Step 1: Database Setup

### 1.1 Create Database
1. Login to SmarterASP.NET Control Panel
2. Go to **SQL Server** section
3. Click **New Database**
4. Note down:
   - Database name: `ihome`
   - Database username
   - Database password
   - Database host (usually `localhost`)

### 1.2 Import Database Schema
1. Go to **phpMyAdmin** or **Database Manager**
2. Select your database
3. Import `database_schema.sql` file
4. Verify all tables are created successfully

### 1.3 Update Database Configuration
Edit `config.php` file:
```php
define('DB_HOST', 'localhost');        // Your database host
define('DB_USER', 'your_username');    // Your database username
define('DB_PASS', 'your_password');    // Your database password
define('DB_NAME', 'ihome');            // Your database name
```

---

## 📁 Step 2: File Upload

### 2.1 Upload Files
1. Connect to your hosting via FTP
2. Navigate to `wwwroot` folder
3. Upload all files and folders:
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

### 2.2 Set Permissions
Set these folder permissions:
- `uploads/` - 755
- `logs/` - 755
- `admin/` - 755

---

## ⚙️ Step 3: Configuration

### 3.1 Update Site Settings
Edit `config.php`:
```php
// Update these values
define('SITE_URL', 'https://yourdomain.com');  // Your domain
define('ADMIN_EMAIL', 'your-email@domain.com'); // Your email
define('ENVIRONMENT', 'production');            // Set to production
define('DEBUG_MODE', false);                   // Disable debug in production
```

### 3.2 Email Configuration
Update SMTP settings in `config.php`:
```php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
```

### 3.3 Google Analytics Setup
1. Create Google Analytics account
2. Get your GA4 Measurement ID (G-XXXXXXXXXX)
3. Edit `analytics.php`:
```php
function getGoogleAnalyticsId() {
    return 'G-XXXXXXXXXX'; // Your actual GA4 ID
}
```

---

## 🔒 Step 4: Security Setup

### 4.1 SSL Certificate
1. In SmarterASP.NET Control Panel
2. Go to **SSL Manager**
3. Activate free SSL certificate
4. Force HTTPS in `.htaccess` (uncomment lines)

### 4.2 Admin Panel Security
1. Change default admin password:
   - Username: `admin`
   - Default password: `admin123`
   - Update in database or admin panel

### 4.3 File Protection
Verify `.htaccess` protects sensitive files:
- `config.php`
- `connection.php`
- `database_schema.sql`
- `*.log` files

---

## 📧 Step 5: Email Setup

### 5.1 Contact Form Testing
1. Test contact form on website
2. Check if emails are received
3. Verify auto-reply functionality

### 5.2 Email Templates
Customize email templates in:
- `contact_process.php` (Contact form emails)
- `calculator_backend.php` (Calculator emails)

---

## 🔍 Step 6: SEO Setup

### 6.1 Google Search Console
1. Add your website to Google Search Console
2. Submit sitemap: `https://yourdomain.com/sitemap.php`
3. Verify ownership

### 6.2 Meta Tags
Update meta tags in `header.php` for each page:
- Title tags
- Meta descriptions
- Open Graph tags
- Twitter Card tags

### 6.3 Local SEO
Update structured data in `header.php`:
- Business address
- Phone number
- Opening hours
- Service area

---

## 📱 Step 7: Mobile Optimization

### 7.1 Test Responsiveness
1. Test website on mobile devices
2. Check all pages are mobile-friendly
3. Verify touch targets are adequate

### 7.2 Page Speed
1. Test page speed on Google PageSpeed Insights
2. Optimize images if needed
3. Enable caching in `.htaccess`

---

## 🧪 Step 8: Testing

### 8.1 Functionality Testing
Test these features:
- ✅ Contact form submission
- ✅ Cost calculator
- ✅ Image gallery
- ✅ Navigation menu
- ✅ Mobile responsiveness
- ✅ Email notifications
- ✅ Database operations

### 8.2 Browser Testing
Test on:
- Chrome
- Firefox
- Safari
- Edge
- Mobile browsers

### 8.3 Performance Testing
- Page load speed
- Image optimization
- Database queries
- Email delivery

---

## 📊 Step 9: Analytics & Monitoring

### 9.1 Google Analytics
1. Verify tracking is working
2. Set up goals and conversions
3. Monitor user behavior

### 9.2 Error Monitoring
1. Check error logs in `logs/` folder
2. Monitor 404 errors
3. Set up error notifications

---

## 🚀 Step 10: Go Live Checklist

### ✅ Pre-Launch Checklist
- [ ] Database configured and tested
- [ ] All files uploaded correctly
- [ ] SSL certificate active
- [ ] Email functionality working
- [ ] Contact forms tested
- [ ] Calculator working
- [ ] Mobile responsive
- [ ] SEO meta tags updated
- [ ] Google Analytics tracking
- [ ] Error pages configured
- [ ] Admin panel accessible
- [ ] Backup system in place

### ✅ Post-Launch Tasks
- [ ] Submit sitemap to search engines
- [ ] Set up Google My Business
- [ ] Create social media accounts
- [ ] Monitor website performance
- [ ] Set up regular backups
- [ ] Monitor security logs

---

## 🔧 Troubleshooting

### Common Issues

#### Database Connection Error
```php
// Check database credentials in config.php
// Verify database exists and is accessible
```

#### Email Not Working
```php
// Check SMTP settings
// Verify email credentials
// Test with different email provider
```

#### 404 Errors
```php
// Check .htaccess file
// Verify file permissions
// Check URL rewriting
```

#### Slow Loading
```php
// Optimize images
// Enable caching
// Check database queries
```

---

## 📞 Support

### Contact Information
- **Technical Support**: Check SmarterASP.NET support
- **Website Issues**: Review error logs in `logs/` folder
- **Database Issues**: Check `connection.php` and database settings

### Useful Files
- `config.php` - Main configuration
- `connection.php` - Database connection
- `.htaccess` - Server configuration
- `database_schema.sql` - Database structure
- `logs/error.log` - Error logs

---

## 🎉 Congratulations!

Your iHome Master Interior Design website is now live and optimized for:
- ✅ SEO performance
- ✅ Mobile responsiveness
- ✅ Security
- ✅ Speed optimization
- ✅ Analytics tracking
- ✅ Email functionality
- ✅ Database management

**Next Steps:**
1. Start adding content
2. Upload project images
3. Configure admin panel
4. Monitor analytics
5. Regular maintenance

---

*Last Updated: January 2025*
*Version: 1.0* 