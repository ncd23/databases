# slides

!SLIDE

# Web Architecture

## loffelmr@newschool.edu


!SLIDE

## How the WWW Works


### There can be only one (acronym)!


!NOTES

 * a note



!SLIDE

## The core

* HTTP
* URI

These are pervasive standards, used by all of the web. Except for
(most) streaming content. Flash uses these, serving up images uses
these. Serving text and PDFs too.

}}} images/test.png


!SLIDE

## The helpers

* DNS
* TCP/IP

DNS is what matches domain names such as [example.com]
(http://example.com) to IP addresses. 

!NOTES

  * given a domain name you can use ping or tracert to determine it's IP
    address.


!SLIDE

## HTTP

A language which acts through object (URI) and verb pairings.


!SLIDE

### The HTTP Verbs

* GET (read)
* POST (write)
* DELETE (as advertised)
* PUT (ignore for now)


(Capitalization optional, in some contexts. Usually they're printed this
way)


!SLIDE

GET and POST should be familiar to most. DELETE is more obscure.


