# admin-panel
oop

attempting to reduce the project from procedural to object-oriented

For mail function changes in ini files:
sendamail.ini:
[sendamil]
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=youremail@gmail.com
auth_password=youremailpass
hostname=localhost

php.ini:
[mail function]
SMTP=smtp.gmail.com
smtp_port= 587
sendmail_from =youremail@gmail.com
sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t"

allow access to your G account, less secure applications.