# client-server-week02-laravel-setup
1. Project Title

Professional Laravel Development Environment Setup

2. Introduction
   
Overview of Laravel

Laravel is an open-source PHP web application framework developed to make modern web development more efficient and organized. It is built on the Model-View-Controller (MVC) architectural pattern, which separates the application's business logic, user interface, and data handling into distinct components for better structure and maintainability. Laravel also provides built-in features such as routing, database migrations, authentication, middleware, and the Blade templating engine, enabling developers to create secure, scalable, and maintainable web applications with greater ease.
Importance of Client-Server Technologies

Client-server technology forms the backbone of modern web applications by enabling communication between users and servers. In this architecture, the client, typically a web browser, sends requests to the server, which processes the requests, interacts with the database when necessary, and returns the appropriate response to the user. As a server-side framework, Laravel handles the application's business logic, manages database interactions, and helps facilitate secure, efficient, and reliable communication between the client and the server.


Purpose of the Project

The purpose of this project is to set up a complete Laravel development environment and verify that it functions correctly by creating and testing a simple homepage. This provides hands-on experience in installing the required development tools, configuring Laravel, understanding its project structure, and preparing an environment suitable for future web application development.

3. Objectives
   
After completing this activity, the following objectives were achieved:
Install and configure PHP, Composer, Git, MySQL, and Laravel.
Create a new Laravel project using Composer.
Understand the basic folder structure of a Laravel application.
Successfully launch the Laravel development server.
Verify the installation by displaying a simple homepage in the browser.
Gain practical experience using Visual Studio Code for Laravel development.

4. Development Environment

Component
Version
Operating System
Windows 11
PHP
(PHP 8.5.9)
Laravel
(Laravel 5.31.1)
Composer
(Composer 2.10.2)
Git
(2.51.0)
MySQL
(9.5.0)
Visual Studio Code
(1.105.0)


5. Installation Steps
   
Install PHP and verify the installation using php -v.
![Laravel Homepage Screenshot](Screenshots/php-version.png)
Install Composer and verify using composer -V.
Install Git and verify using git --version.
Install MySQL and ensure the database service is running.
Open Visual Studio Code.

Create a new Laravel project:

composer create-project laravel/laravel hello-laravel

Navigate to the project folder:

cd hello-laravel

Start the Laravel development server:

php artisan serve

Open http://127.0.0.1:8000 in your web browser to verify that the Laravel homepage is displayed successfully.

6. Project Structure

app/

Contains the core application logic, including controllers, models, middleware, and other classes responsible for handling the application's functionality.

routes/

Stores all route definitions. The web.php file contains routes for web pages, while api.php is used for API endpoints.

resources/

Contains Blade templates, CSS, JavaScript, images, and other front-end resources used by the application.


public/

Serves as the public entry point of the application. It contains the index.php file, compiled assets, and publicly accessible files.

config/

Stores configuration files for the application, including database settings, mail configuration, caching, sessions, and other environment settings.

database/

Contains database migrations, seeders, and factories used to create and populate the application's database.

7. Problems Encountered
   
During the setup process, several issues were encountered:
Missing PHP extensions required by Laravel.
Database driver configuration issues.
Environment variables not configured correctly in the .env file.
Composer dependency installation errors.
Difficulty connecting Laravel to the database during the initial setup.

8. Solutions
    
The encountered problems were resolved through the following solutions:
Enabled the required PHP extensions in the php.ini file.
Correctly configured the database connection settings in the .env file.
Installed missing Composer dependencies and updated packages.
Verified that MySQL services were running before connecting Laravel.
Cleared Laravel configuration and cache using Artisan commands whenever configuration changes were made.

9. Reflection
    
This activity provided valuable hands-on experience in setting up a professional Laravel development environment from scratch. Before starting this project, I had only a basic understanding of Laravel and the tools required to develop web applications using the framework. Through this activity, I learned how PHP, Composer, Git, MySQL, and Visual Studio Code work together to create an efficient and organized development environment. I also became familiar with Laravel's basic folder structure and understood the purpose of its core directories, such as app, routes, resources, public, config, and database, which play important roles in organizing and maintaining the application.
One of the biggest challenges I encountered was configuring the development environment correctly. During the installation process, I experienced issues related to missing PHP extensions and database driver configuration, which prevented Laravel from functioning properly. I also encountered errors while connecting the application to the database and configuring the .env file. Troubleshooting these problems required patience, careful reading of error messages, and researching possible solutions from the official Laravel documentation and online resources. Although these challenges were frustrating at first, successfully resolving them improved my problem-solving skills and gave me a better understanding of how Laravel and its supporting tools work together. This experience also taught me the importance of carefully following installation procedures and verifying software configurations before starting a development project.
Laravel is an important framework in client-server development because it provides a structured, secure, and efficient way to build dynamic web applications. It simplifies common development tasks such as routing, database management, authentication, middleware, and security, allowing developers to focus more on implementing application features rather than writing repetitive code. By following the Model-View-Controller (MVC) architecture, Laravel encourages organized and maintainable code, making projects easier to manage, test, and expand as they become more complex. In addition, Laravel includes many built-in tools that help improve development speed and overall application reliability, making it one of the most widely used PHP frameworks today.
The knowledge gained from this activity will be valuable in my future software development projects. Understanding how to install and configure a Laravel environment gives me a strong foundation for developing more advanced web applications. I also gained confidence in using essential development tools, managing project files, and troubleshooting installation and configuration issues. These skills will help me work more efficiently in future academic projects and professional software development environments. Overall, this activity strengthened my understanding of modern web development practices and emphasized the importance of proper planning, configuration, and continuous learning when developing client-server applications.




Reference:

Laravel. (2025). Laravel documentation. https://laravel.com/docs
Mozilla. (n.d.). Client-server overview. MDN Web Docs. https://developer.mozilla.org/en-US/docs/Learn/Server-side/First_steps/Client-Server_overview
The PHP Group. (2025). PHP: Hypertext Preprocessor. https://www.php.net


