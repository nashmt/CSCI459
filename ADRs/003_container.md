# Choice of Virtualized System

# Status: accepted

# Context: 

An explanation of why we're using Docker containers for

1. Basic container operations
2. Having a full set of CRUD operations
3. Linking of Apache and MySQL containers

# Decision:

Docker containers are used in this project because of how easy packaging is inside a Docker
Container and the accessibility of another user to operate the project. Docker containers are
also substantially lighter than virtual machines. Docker containers use a host network stack and a host 
file system while VM's use a private network stack and private storage. With using MySQL and an Apache Webserver
it makes more sense to use a lighter and less isolated environment. 


# Consequences: 

Minimal effort is required to make the environment operational. Docker containers are easy to send to another user 
and they can easily operate the container. Docker containers are easier to run on your machine and you can store information
and processes inside of the containers. We can link the MySQL and Apache webserver easily with a DockerCompose File
resulting in the operational aspects of the project being less complicated. 
