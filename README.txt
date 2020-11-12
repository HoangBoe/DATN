
		(Requires internet connection)

1. Required Softwares:
	- Web Server -> WampServer (https://www.wampserver.com/en/#download-wrapper)
			or Xampp (https://www.apachefriends.org/download.html)

	- Composer..Dependency Manager
	https://getcomposer.org/download/

	- Editor -> any
	Recommended Sublime, PHPStorm.

2. Run Apache and MySql Server from Xampp control panel
3. Open Web Browser:
	- localhost/phpmyadmin
	- create a new DB with name "datn"
4. Go to the Folder application using cd
   On your cmd or Terminal:
	Run 'composer install'
 	Run 'php artisan key:generate'
 	Run 'php artisan migrate'
 	Run 'php artisan db:seed'
	Run 'composer require jrm2k6/cloudder'    (https://github.com/jrm2k6/cloudder)
	Run 'composer require snowfire/beautymail dev-master'   (https://github.com/Snowfire/Beautymail)
	Run 'php artisan vendor:publish --provider="Snowfire\Beautymail\BeautymailServiceProvider"'
 	Run 'php artisan serve'
5. Open Web Browser
	localhost:8000 (Home Page)
	localhost:8000/admin

**Account: admin01
**Password: admin01


