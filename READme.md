=======
Software Requirements:
-Xampp with PHP 7.1
-MongoDB
-MongoDB PHP Driver
-Composer

====================================================================ATTENTION==================================================================================
If you have the above software requirements met there is a startApplication.bat to begin the application. If for any reason it doesn't work follow these steps
1. Open Xampp and start the Apache server
2. Open a command line prompt and type "mongod". Keep this prompt open at all times while running this application.
3. Open a browser, like Chrome, and go to localhost/TwitterFingerz/TwitterFingers/main.html
===============================================================================================================================================================

Xampp Installation
1. Download and Install Xampp for Windows and choose the one with PHP version 7.1

MongoDB Installation
Follow these instructions to successfully setup MongoDB and the MongoDB-PHP Driver

1. Download and install the latest version of MongoDB Community Server (Currently 3.4.4) - https://www.mongodb.com/download-center?jmp=nav#community
	Once installed create a new folder in the C:\ drive and name it "data". Within the "data" folder create another folder named "db".
2. Download the latest MongoDB-PHP driver. This PHP Driver must match the PHP version of your Xampp install. It is also dependent on the version of MongoDB 
	that is installed on your machine. For a full compatibility list visit: https://docs.mongodb.com/ecosystem/drivers/php/#compatibility
	Since we are using MongoDB version 3.4 and PHP version 7.1 our MongoDB-PHP driver should be a minimum of version 1.2 
	We will be using version 1.3.1 found here: http://pecl.php.net/package/mongodb
3. Click on the MongoDB-PHP driver that is compatible and navigate to 'DLL' list. There are 4 downloads for each version of PHP, categorized by your operating system's
	architecture and whether or not your version of PHP utilizes thread safety. To find this information:
	3a. Open Xampp and start the Apache server.
	3b. Go to your web browser and in the address bar type: 'localhost/dashboard/phpinfo.php'.
	'Ctrl-F' searching for "Thread Safety" to determine whether it is enabled or disabled. If it is enabled choose a MongoDB-PHP driver link that contains "(TS)" and if your
	installation of Windows is 32-bit make sure that it also contains "x86".
4. The downloaded zip file will contain a dll file "php_mongodb.dll" which should be placed within your Xampp install folder. 
	Ex. "C:\xampp\php\ext"
5. Next add the extension to Xampp by going to "C:\xampp\php" and opening "php.ini", 'Ctrl-F' to search for "extension=" and add this line within the extension section:
	"extension=php_mongodb.dll"
6. Modify the PATH variables for both MongoDB and the MongoDB-PHP driver. Go to control panel, and open system settings. Click on the 'Advanced' tab and then click on 'Environment Variables'
	at the bottom on the window. Find the System Variable "Path" and click edit. To add a new variable semicolon after each path and add the following paths:
	Xampp: Ex. "C:\xampp\php"
	MongoDB: Ex. "C:\Program Files\mongodb\Server\3.4\bin"
7. To verify successful installation restart the Apache server and in the address bar type: 'localhost/phpinfo.php'. 'Ctrl-F' to search for "mongo" and there should be a new section that
	now shows your version of the MongoDB-PHP driver.


	Create a MongoDB database
	Follow these instructions to successfully setup MongoDB database

	1. After MongoDB is installed open a command prompt window and type "mongod".
		Let the window load the server you will see "waiting for connection on port 27017". 
		***LEAVE THIS WINDOW OPEN WHILE RUNNING THE DATABASE.***
	2. Open another command prompt window and type "mongo"
	3. In the command prompt type use Tweetdemo 
		This will create the database and switch to the Tweetdemo database.
	4. In the command prompt type db.createCollection('tweetfeed')
		This will create the collection to database to hold the tweets.
	

Composer Installation
Follow these instructions to install Composer. Composer adds most of the remaining PHP libraries needed to run this web application

1. Download and run the Composer Windows installer - https://getcomposer.org/download/
2. Once installed open the Windows command line.
3. Navigate to the working directory for Xampp using cd.
	Ex. cd xampp\htdocs
4. Type "composer require mongodb/mongodb=^1.0.0 --ignore-platform-reqs"
		"composer require dannyben/php-quandl"
	Composer and all the necessary PHP libraries required for this application should now be installed in this folder.


Web Application Installation
Follow these instructions to successfully run the Finance It All site via your localhost.

1. Open your bash to run Git from your command line and cd to your XAMPP htdocs folder. 
	Ex. cd xampp/htdocs
2. Git clone the repository www.github.com/wmbrown18/TwitterFingerz.git
3. Open the XAMPP control panel and ensure the Apache server is running. 
4. In your web browser's address bar, enter "localhost/" plus 
	the path to your 'TwitterFingerz.php' file: 'localhost/TwitterFingerz/TwitterFingers/main.html'.
5. The website should open to a heading with all of the team members names, and begin the stream of tweets


Software Description
-The page will constantly update with tweets. Tweets are displayed in string JSON format and converted and displayed nicely.
-This stream is streaming all of the tweets that are from the Twitter Account of several finincial tweeters given to us.
-Right now the stream returns 

	Tweets created by the user 
	Manual replies, created without pressing a reply button (e.g. “@twitterapi I agree”).
	Stock symbols associated with tweets

****NOTES****
Note: Adding users to our account list needs to be fixed
	  Stream will print empty tweets on occasion
	