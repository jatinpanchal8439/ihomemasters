@echo off
echo ========================================
echo    iHome Web - Server Startup Script
echo ========================================
echo.

echo Starting XAMPP Control Panel...
start "" "C:\xampp\xampp-control.exe"
echo ✅ XAMPP Control Panel started
echo.

echo Starting Python Web Server...
echo Server will be available at: http://192.168.1.11:8000
echo Mobile access: http://192.168.1.11:8000
echo.
echo Press Ctrl+C to stop the web server
echo.

python -m http.server 8000 --bind 0.0.0.0

pause 