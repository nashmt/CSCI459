# Choice of Database Management System

# Status: accepted

# Context: 

A  simple example of Docker containers is needed that will show:

1. Basic container operations
2. Use of multiple containers
3. Linking of Apache and MySQL containers
4. Full set of CRUD operations for the MySQL container

# Decision:

MySQL Docker containers are readily available in the Docker Hub. MySQL is easy to link with files in
PHP and there are many tutorials on linking the Apache server to a MySQL Database. We are using CRUD operations in this
database to be able to create, read or list, update, and delete units to my database. These operations help to manage the
database, without using these there would be no way to alter the database. 

We are supporting the CRUD operations with multiple PHP files. These files will list the products in the MySQL container,
which in this case is a guitar shop database. The code for the product, the name and the price are listed. 
You can edit the guitar files in this data, delete them and add a new product to the database. We are supporting this
method to allow my users to change the database for new products that may be sold out and needs to be deleted, 
a price change, or simply adding a new product. 


# Consequences: 

Minimal effort is required to make the environment operational. In using MySQL with the Apache server
inside of a Docker container we can send a zip file that is automatically operational to another user. With the adding of
the CRUD operations, the user can now alter the database by changing units inside of it. This makes changing the database
easier and more efficient. It's necessary to support all of the CRUD operations becuause without a one the whole system
will not flow and be as easy to use as it could be with all the operations. 

