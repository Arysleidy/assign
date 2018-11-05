# MSI DDSS - Database with SQLite


The code and resources available in this repository are to be used in the scope of the *DDSS* course.

**Important:** the sources provided are merely suggestions of implementations. 
You should modify everything you deem as necessary and be responsible for all the content that is delivered.
 
 
## Contents

The examples available in the repository already contain the database configured and ready to use.

They also contain examples of code on how to perform simple queries in the database.

* [DB Browser for SQLite](https://sqlitebrowser.org) - nice, simple and easy to use tool to explore the contents of the database


Details about the contents of the table users: 

* user: `nuno` 
* pass: `nunopass`
* Passwords hashed with SHA-256(saltpasspepper)
	* Pepper: `ddss_peper`
	* [Quick read about salt and pepper](https://blog.filippo.io/salt-and-pepper/)



## Why are we using SQLite

**From [sqlite.org](https://www.sqlite.org/about.html):** *"`SQLite` is an in-process library that implements a self-contained, serverless, zero-configuration, transactional SQL database engine. (...) SQLite is the most widely deployed database in the world with more applications than we can count, including several high-profile projects.*

*`SQLite` is an embedded `SQL` database engine. Unlike most other SQL databases, SQLite does not have a separate server process."*

Using `SQLite` spares us from the need to be configuring one database server.
`SQLite` is more than enough for the tasks required by the DDSS Assignment.


## Can we use other DBMS?

Yes, if *(1) it is embedded on you application*, or *(2) you provide a docker container that automatically have everything necessary configured*.
In both cases you are responsible for the correct data migration. 


There are many other embedded databases. 
The other two most famous examples are: 

* [`Berkeley DB`](https://www.oracle.com/database/berkeley-db/db.html)
* [`hsqldb`](http://hsqldb.org/)

