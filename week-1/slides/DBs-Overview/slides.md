# DBs-Overview

!SLIDE

# DBs Overview

## loffelmr@newschool.edu



!SLIDE left

## What is a Database

It is _not_ a Database Management System!

### So what is it exactly?

The actual data. An instance. Often identified and accessed by a URL.



!SLIDE left


## Database Management Systems

A _DBMS_ is the implementation of a database. A _DBMS_ is the system which supports all aspects of database usage. 

}}} images/mysql-administrator-1.jpg




To make discussion of the topic easier, the two terms are often rolled up into the single term _database_.





!SLIDE left

## What is in a database?

What do you want it to contain? You can put nearly anything in a database. 

But some things are better suited to DB storage than others. And it depends on which Database you're using.

Databases most often contain discrete particles of information, numbers and pieces of text, URLs,  

Some DBs store binary data as well, such as pictures and audio/video files. The new-wave no-SQL databases in particular (MongoDB, or CouchDB).



!SLIDE left

## What does it do?

The full scope and lifecycle of a database often involves all of the following:

* Data modeling
* Lookup/Query (with a _query language_ eg: SQL)
* Storage/Retrieval of raw bytes from disk/memory/_anywhere_
* Security
* Building/Maintainence/Tuning



!SLIDE left long-list

## Modeling

Today there are two main types of models which are followed

* Relational
* Object

The relational style is dominant and ubiquitous. Databases in this style include all the major databases:




!SLIDE

# Relational DBs

* [MySQL](http://mysql.com)
* [MS SQL Server](http://microsoft.com/sqlserver)
* [SQLLite](http://sqlite.org)
* [DB2](http://ibm.com/db2)
* [Oracle](http://oracle.com)
* [Postgre SQL](http://postgresql.org)

If you want to read more about the origin of the Relational Model, there is [a famous academic paper by E.F. Codd](http://www.seas.upenn.edu/~zives/03f/cis550/codd.pdf).


!SLIDE left

### Object model

The original idea was that an object-modeled database would be a closer fit for object-oriented programming languages. Using object-model databases would streamline workflow. 



!SLIDE left

### Database Languages

SQL is the 2000 pound gorilla. 

```
SELECT firstName, lastName FROM Persons WHERE lastName LIKE 'Smi%';
```

}}} images/grape-ape.jpg



!SLIDE left

## Further Info

* [Database - Wikipedia](http://en.wikipedia.org/wiki/Database)
* 