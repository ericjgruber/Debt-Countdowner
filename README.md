# Debt-Countdowner

This application is for visualizing the progress of a debt as it progresses to zero.

## About this app

This app was made because I wanted to have a visual representation of our student loan debt while we pay it down. Since late 2016, my wife and I have been aggressively paying down our student loans. I wanted to have a place to show the progress represented through a dynamic chart.

### Technology
The app uses the following technologies:

- PHP
- MySQL database
- Chart.js, a JavaScript charting library

## Installation

To get started, place the files in a directory on your web server. There's a base level assumption that you know how to get things on a web server, and how to connect your web server's database with a database user and password.

Once the files are on your server, visit the install.php file in your browser, for example: [http://example.com/install.php](http://example.com/install.php). Then enter the following into the fields:

- database name (which you will create on your web server)
- database username (you will need to create this on your own)
- database password (be sure to make it hard for security reasons)

With the information supplied in the fields, press the submit button. This will create the tables in the database name you supplied. Check your database to ensure the tables were created.

When you are ready to get started with the app, delete the install.php file from your web server to keep the app secure.

## Creating an admin user

To be continued ...
