# 🚀 iHome Masters - Hosting Setup Guide
# वेबसाइट को होस्टिंग पर डालने का पूरा गाइड

## 📋 Prerequisites / आवश्यकताएं
- Web hosting account (PHP + MySQL support)
- Domain name
- FTP client (FileZilla, WinSCP)
- Database access

---

## 🔧 Step 1: Database Setup / डेटाबेस सेटअप

### 1.1 Create Database / डेटाबेस बनाएं
1. होस्टिंग कंट्रोल पैनल में लॉगिन करें
2. **MySQL Databases** या **phpMyAdmin** में जाएं
3. नया डेटाबेस बनाएं: `ihome`
4. नोट करें:
   - Database name: `ihome`
   - Database username
   - Database password
   - Database host (usually `localhost`)

### 1.2 Import Database / डेटाबेस इम्पोर्ट करें
1. phpMyAdmin में जाएं
2. अपना डेटाबेस सेलेक्ट करें
3. `ihome.sql` फाइल इम्पोर्ट करें
4. सभी टेबल्स सही से बने हैं या नहीं चेक करें

---

## 📁 Step 2: File Upload / फाइल्स अपलोड करें

### 2.1 FTP से कनेक्ट करें
1. FileZilla या WinSCP खोलें
2. होस्टिंग के FTP डिटेल्स डालें:
   - Host: आपकी होस्टिंग का FTP address
   - Username: FTP username
   - Password: FTP password
   - Port: 21 (default)

### 2.2 Files Upload करें
`public_html` या `www` फोल्डर में ये फाइल्स अपलोड करें:

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

### 2.3 Folder Permissions सेट करें
इन फोल्डर्स के permissions 755 सेट करें:
- `uploads/` - 755
- `logs/` - 755
- `admin/` - 755

---

## ⚙️ Step 3: Configuration Update / कॉन्फ़िगरेशन अपडेट

### 3.1 config.php अपडेट करें
`config.php` फाइल में ये changes करें:

```php
// Database Configuration
define('DB_HOST', 'localhost');           // आपका database host
define('DB_USER', 'your_username');       // आपका database username
define('DB_PASS', 'your_password');       // आपका database password
define('DB_NAME', 'ihome');               // आपका database name

// Site Configuration
define('SITE_URL', 'https://yourdomain.com');  // आपका domain
define('ADMIN_EMAIL', 'your-email@domain.com'); // आपका email
define('ENVIRONMENT', 'production');            // production mode
define('DEBUG_MODE', false);                   // production में false

// Email Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
```

### 3.2 Email Setup / ईमेल सेटअप
Gmail के लिए:
1. Gmail में 2-factor authentication enable करें
2. App password generate करें
3. SMTP settings में app password डालें

---

## 🔒 Step 4: Security Setup / सुरक्षा सेटअप

### 4.1 SSL Certificate / SSL सर्टिफिकेट
1. होस्टिंग कंट्रोल पैनल में जाएं
2. **SSL Manager** में जाएं
3. Free SSL certificate activate करें
4. `.htaccess` में HTTPS force करें (uncomment lines)

### 4.2 Admin Panel Security / एडमिन पैनल सुरक्षा
1. Default admin password बदलें:
   - Username: `admin`
   - Default password: `admin123`
   - Database में या admin panel में update करें

---

## 📧 Step 5: Email Testing / ईमेल टेस्टिंग

### 5.1 Contact Form Test करें
1. वेबसाइट पर contact form test करें
2. Check करें कि emails आ रहे हैं या नहीं
3. Auto-reply functionality verify करें

---

## 🔍 Step 6: SEO Setup / SEO सेटअप

### 6.1 Google Search Console
1. Google Search Console में वेबसाइट add करें
2. Sitemap submit करें: `https://yourdomain.com/sitemap.php`
3. Ownership verify करें

### 6.2 Meta Tags Update करें
`header.php` में meta tags update करें:
- Title tags
- Meta descriptions
- Open Graph tags

---

## 📱 Step 7: Mobile Testing / मोबाइल टेस्टिंग

### 7.1 Responsive Design Test करें
1. मोबाइल devices पर वेबसाइट test करें
2. सभी pages mobile-friendly हैं या नहीं check करें
3. Touch targets adequate हैं या नहीं verify करें

---

## 🧪 Step 8: Final Testing / अंतिम टेस्टिंग

### 8.1 Functionality Testing
इन features को test करें:
- ✅ Contact form submission
- ✅ Cost calculator
- ✅ Image gallery
- ✅ Navigation menu
- ✅ Mobile responsiveness
- ✅ Email notifications
- ✅ Database operations

### 8.2 Browser Testing
इन browsers पर test करें:
- Chrome
- Firefox
- Safari
- Edge
- Mobile browsers

---

## 🚀 Step 9: Go Live Checklist / लाइव करने की चेकलिस्ट

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

## 🔧 Troubleshooting / समस्या समाधान

### Common Issues / सामान्य समस्याएं

**1. Database Connection Error**
- Check database credentials in `config.php`
- Verify database exists and is accessible
- Check database host address

**2. 500 Internal Server Error**
- Check `.htaccess` file syntax
- Verify PHP version compatibility
- Check file permissions

**3. Email Not Working**
- Verify SMTP settings
- Check Gmail app password
- Test with different email provider

**4. Images Not Loading**
- Check file paths
- Verify image files uploaded correctly
- Check file permissions

**5. Admin Panel Not Accessible**
- Verify admin credentials
- Check admin folder permissions
- Ensure database tables exist

---

## 📞 Support / सहायता

अगर कोई समस्या आए तो:
1. Error logs check करें
2. Database connection test करें
3. File permissions verify करें
4. Hosting provider से contact करें

---

## 🎉 Success! / सफलता!

आपकी iHome Masters वेबसाइट अब होस्टिंग पर live है! 🚀

**Next Steps:**
1. Domain को point करें
2. Google Analytics setup करें
3. Social media accounts बनाएं
4. Regular backups setup करें
5. Performance monitor करें 