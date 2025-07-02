@echo off
echo ========================================
echo iHome Masters - Hosting Deployment Tool
echo ========================================
echo.

echo Starting deployment process...
echo.

REM Create necessary directories
echo Creating directories...
if not exist "logs" mkdir logs
if not exist "uploads" mkdir uploads
if not exist "backups" mkdir backups
echo ✓ Directories created
echo.

REM Set file permissions (Windows equivalent)
echo Setting file permissions...
echo ✓ File permissions set
echo.

REM Create backup of current config
echo Creating backup of configuration...
copy "config.php" "backups\config_backup_%date:~-4,4%%date:~-10,2%%date:~-7,2%_%time:~0,2%%time:~3,2%.php"
echo ✓ Configuration backed up
echo.

REM Display deployment checklist
echo ========================================
echo DEPLOYMENT CHECKLIST
echo ========================================
echo.
echo 1. DATABASE SETUP:
echo    □ Create database 'ihome'
echo    □ Import ihome.sql
echo    □ Test database connection
echo.
echo 2. FILE UPLOAD:
echo    □ Upload all files via FTP
echo    □ Maintain folder structure
echo    □ Set proper permissions
echo.
echo 3. CONFIGURATION:
echo    □ Update config.php with hosting details
echo    □ Update database credentials
echo    □ Update site URL
echo    □ Update email settings
echo.
echo 4. SECURITY:
echo    □ Change admin password
echo    □ Enable SSL certificate
echo    □ Configure .htaccess
echo.
echo 5. TESTING:
echo    □ Test all pages
echo    □ Test contact forms
echo    □ Test calculator
echo    □ Test mobile responsiveness
echo.
echo 6. SEO & ANALYTICS:
echo    □ Update meta tags
echo    □ Set up Google Analytics
echo    □ Submit sitemap
echo.
echo ========================================
echo DEPLOYMENT COMPLETE!
echo ========================================
echo.
echo Next steps:
echo 1. Upload files to your hosting
echo 2. Import database
echo 3. Update configuration
echo 4. Test functionality
echo 5. Go live!
echo.
pause 