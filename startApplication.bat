@echo off

tasklist /FI "IMAGENAME eq xampp-control.exe" | findstr /I "xampp-control.exe" && (
    cd "C:\xampp"
    call apache_stop.bat
    taskkill /f /IM xampp-control.exe
    start C:\xampp\xampp-control.exe
    cd "C:\Program Files (x86)\Google\Chrome\Application"
    start chrome.exe http://localhost/TwitterFingerz/TwitterFingers/TwitterFingerz.php
    mongod
) || (
    start C:\xampp\xampp-control.exe
    cd "C:\Program Files (x86)\Google\Chrome\Application"
    start chrome.exe http://localhost/TwitterFingerz/TwitterFingers/TwitterFingerz.php
    mongod
)

exit