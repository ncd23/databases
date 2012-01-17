# slides

!SLIDE

# Part 1: Web Architecture

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

DNS is what matches domain names such as [example.com](http://example.com) to IP addresses. 

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


!SLIDE

# Part 2: Linux


!SLIDE

## Why Linux?

1. In the form of Unix, it has been around for thirty years. 
1. This makes it reliable, there are no secrets as to how it works.
1. It is free and under no one person's control (any longer) soooooooo.
1. Linux is a de-facto standard.

The command line is more expressive. Developing software is largely
concerned with moving files around and editing them. There are things
you can do with files on a command line that are available through a
GUI. 

!NOTES

  * [In the Beginning Was the Command Line](http://www.cryptonomicon.com/beginning.html) by Neal Stephenson


!SLIDE

## Cheatsheet:

Available for Download here in these formats:
[Markdown](https://github.com/the0ther/databases/tree/master/week-1/linux-cheatsheet.md)

!NOTES
  * this [was cribbed from here](http://www.tuxfiles.org/linuxhelp/linuxcommands.html) with a few additions of my own


!SLIDE

### Moving around in the file system

* `pwd`	"Print working directory" - show what dir you're in.
* `ls`	List the contents of a dir.
* `ls -l`	List the contents of a dir and show additional info of the files.
* `ls -a`	List all files, including hidden files.
* `cd`	Change directory.
* `cd ..`	Go to the parent directory.


!SLIDE

### Examining files

* `file`	Determine the type of a file.
* `cat`	Concatenate a file.
* `less`	View text files and paginate them if needed.


!SLIDE

### Manipulating files and directories

* `cp`	Copy a file.
* `cp -i`	Copy a file and ask before overwriting.
* `cp -r`	Copy a directory with its contents.
* `mv`	Move or rename a file.
* `mv -i`	Move or rename a file and ask before overwriting.
* `srm` Safely remove a file, moving it to ~/.Trash (requires install)
* `rm`	Remove a file.
* `rm -r`	Remove a directory with its contents.
* `rm -i`	Ask before removing a file. Good to use with the -r option.
* `mkdir`	Make a directory.
* `rmdir`	Remove an empty directory.


!SLIDE

### Wizardry

* `grep` Searches for a term that you pass. Can pipe input in or name a
  file (with wildcars).
* `sudo` Run command as root user (Debian/Ubuntu)
* Job Control
  * `ps` List running processes
  * `Ctrl-z` Send process to the background
  * `fg` Bring background process to the front
* Input/Output
  * `>` Sends output of most any command to a file named after the `>`
  * '>>' Appends the output of previous command to a file named after
    the `>>`
  * `|` Pipes the output of one command into another. `cat some-file |
    grep 'search-term'` gets output of a file and sends it through grep



!SLIDE

### Bash/Zsh

If you want to learn more about Bash scripting you [should start
here](http://tldp.org/LDP/Bash-Beginners-Guide/html/Bash-Beginners-Guide.html).
