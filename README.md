# Debt-Countdowner

This application is for visualizing the progress of a debt as it progresses to zero.

## About this app

This app came to be because I wanted to have a visual representation of our student loan debt while we pay it down. Since late 2016, my wife and I have aggressively been paying down our student loan debt. I wanted to have a place to show the progress, respresented through a dynamic chart.

### Technology
The app uses the following technolgies:

- PHP
- MySQL backend
- JavaScript charting library (probably Chart.js)

## Installation

To get started, you'll need to place the files from this directory on your web server. There's a base level assumption that you know how to get things on a web server, and how to contact your web server's database with a database user and password.

Once the files are on your server, visit load the install.php file in your browser, for example: [http://example.com/install.php](http://example.com/install.php). Once your there, enter the following information into the fields:

- database name (which you will create on your web server)
- database username (you will need to create this on your own)
- database password (be sure to make it hard for security reasons)

Once all the fields are filled out, press the submit button. This will create the tables in the database name you supplied. Check your database to ensure the tables were created.

When you're ready to get started with the app, delete the install.php file from your web server to keep the app secure.

## Creating an admin user

To be continued ...
