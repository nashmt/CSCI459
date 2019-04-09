# Application Use and Function

The point of this is to explain what the application will do. 

## Function

The application will be a database that agents in the real estate business can use to
list houses. They will have the ability to add new houses with primary key ID's. The agents can also
edit houses if there is a price change or other changes. The application will support a full set
of CRUD operations. You will be able to sort through the different housing options based off of
multiple variables including price or size. 

## Team members

Austin Rahman, Jose Chiriboga, Matt Nash, and Rhone Findlay

## Sprint 1

Architectural decision records for the project, as of 2/28/2019, can be found within the directory titled
'ADRs'. These records explain our selection of web server, database, and development environment. 
We have also provided a static webpage to show what a user might expect to see when using the
application. Simply view 'index.html' in your preferred browser.  

## Sprint 2
For Sprint 2, we have created the framework for a web application with basic CRUD capabilities. 

### Files

- `run.sh`

  This shell script:

    1. Builds the mysql container
    2. Runs the container
    3. Waits for the database to start
    4. Creates a mysql user
    5. Creates and loads the sample database
    6. Runs a command to print the database contents
    7. Builds the webserver container
    8. Runs the webserver container

### Directories


#### mysql

This directory contains the files necessary to build the Docker container for the mysql database.

The actual database commands are in two files:

- `createuser.sql`

  This file contains the sql necessary to create a non-root user.

- `createdata.sql`

  This file contains the commands required to create a sample database and a table withing the database. It further inserts a couple of records into the database.

#### webserver

This directory contains the files necessary to build the Docker container for the web server.

- `index.php`

  A simple application where you can do all CRUD with a simple database

-'add.html'

  The form to add the infomration for a house 

-'add.php'

  The actual functionallity that adds the house to the database

-'config.php'
  
  A file that creates the connection to the db

-'delete.php'

  The functionallity to delete a house

-'edit.php'

  The functionallity to edit a house's information
