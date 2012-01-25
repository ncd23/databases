# slides

!SLIDE left

# Databases - 7280



## Building Dynamic, Data-Driven Web Sites



### <loffelmr@newschool.edu> | @Loffelmr



!SLIDE

# Syllabus & Pre-requisites & Setup

## [The syllabus is available here](https://docs.google.com/document/pub?id=1vdSsIuqBSbMsENKgWvOUksY_BOv2srJ_3jj7iSDynEU)



!SLIDE left

## Poll

Which two are you most interested in, as far as APIs are concerned?

* [Google Charts](http://bit.ly/wkGtVT)
* [Tropo](http://bit.ly/ABWGVU)
* [Amazon](http://bit.ly/etBcpk)
* [Flickr](http://bit.ly/z0fZuD)
* [Facebook](http://bit.ly/AnPZGn)
* [Twitter](http://bit.ly/wosN5u)
* [FourSquare](http://bit.ly/AAt6uC)




!SLIDE left

## Web Architecture

Let's look at this slide deck. The hope is that these subjects are not completely unknown. 

[Web Architecture Slides](http://bit.ly/ygZ6Dy)



!SLIDE left

## Tools

* Accounts
* Text editors
* Applications
	* SSH Client
	* FTP Client
	* Git Client
	* Other


!SLIDE left

## Accounts

You will need to register for a couple of accounts...

We will be using Github, a fantastic resource. Delivery of source code for homework will be done through Git. You should sign up if you do not have an account already. [Signup over here](http://bit.ly/z3jxNb). 

Also sign up for [Amazon's AWS](http://bit.ly/etBcpk) product. We will be using AWS Elastic Cloud Computing offering for this class. You will post your finished work on the Amazon server.


!SLIDE left

## Text Editors

For Windows:

* [Notepad++](http://bit.ly/wFCHVl)

For Mac:

* [Textmate](http://bit.ly/xunWmr)
* [Coda](http://bit.ly/yd6ItR)

Cross Platform:

* [Vim](http://bit.ly/y0dlt4) with [Janus](http://bit.ly/yI7gGH)
* [Redcar](http://bit.ly/wIrm7k) - open-source version of Textmate, requires Ruby 
* [Dreamweaver](http://bit.ly/y00rfB)
* [Jedit](http://bit.ly/yTZgY7)



!SLIDE left

## Other applications: 

SSH Command Line Client:

* Terminal (Mac)
* PuTTy (Windows. Get the full suite of apps.)

FTP Client: 

* Cyberduck (Mac)
* Filezilla (cross-platform)

Git Client: 

* Github (Mac) 
* [msysgit](http://bit.ly/xVB4ML) (Windows)




!SLIDE

## Linux


!SLIDE left

### Why Linux?

1. In the form of Unix, it has been around for thirty years. 
1. This makes it reliable and predictable. There are no secrets as to how it works.
1. It is free and under no one person's control (any longer) soooooooo.
1. Thus Linux is a standard. The utility belt.

}}} images/batman.png




!SLIDE left

### Cheatsheet:

[Available for Download here](http://bit.ly/wlBG5l) as a Markdown file.

Markdown is nice. You should [learn a little about it](http://bit.ly/zNnBDH).

This [was cribbed from here](http://bit.ly/wyJTs3) with a few additions of my own




!SLIDE left

### Everything in Linux is a file, with few exceptions.

The filesystem starts here: `/`. This is called _root_. You can type `ls /` to view the contents.

A path in the Linux filesystem looks like `/home/ubuntu`. This particular path is the user "ubuntu"s home folder.

Mac works like this too. Windows not quite, but close. 



!SLIDE left

### Moving around in the file system

* `pwd`	"Print working directory" - show what dir you're in.
* `ls`	List the contents of a dir.
* `ls -l`	List the contents of a dir and show additional info of the files.
* `ls -a`	List all files, including hidden files.
* `cd`	Change directory.
* `cd ..`	Go to the parent directory.


!SLIDE left

### Examining files

* `file`	Determine the type of a file.
* `cat`	Concatenate a file.
* `less`	View text files and paginate them if needed.


!SLIDE left

### Manipulating files and directories

* `cp`	Copy a file.
* `cp -i`	Copy a file and ask before overwriting.
* `cp -r`	Copy a directory with its contents.
* `mv`	Move or rename a file.
* `mv -i`	Move or rename a file and ask before overwriting.
* `trash` Safely remove a file, moving it to ~/.Trash (requires install)
* `rm`	Remove a file. __Forever__
* `rm -r`	Remove a directory with its contents.
* `rm -i`	Ask before removing a file. Good to use with the -r option.
* `mkdir`	Make a directory.
* `rmdir`	Remove an empty directory.


!SLIDE left

### Wizardry

* `man` The built-in manual. Add any command after for more info. Example: `man chmod`
* `grep` Searches for a term that you pass. Can pipe input in or name a
  file (with wildcards). Example: `grep -r -i -n "needle" ./haystack/*`, searches all files under the ./haystack directory (-r or --recursive) for the string "needle", without regard to case (-i). Results show the line number (-n).
* `sudo` Run command as root user (Debian/Ubuntu)
* Job Control
  * `ps` List running processes
  * `Ctrl-z` Send process to the background
  * `fg` Bring background process to the front


!SLIDE left

### More Wizardry

* Input/Output
  * `>` Sends output of most any command to a file named after the `>`
  * '>>' Appends the output of previous command to a file named after
    the `>>`
  * `|` Pipes the output of one command into another. `cat some-file |
    grep 'search-term'` gets output of a file and sends it through grep



!SLIDE left

### Bash/Zsh - Arcane Incantations

If you want to learn more about Bash scripting you [should start
here](http://bit.ly/x13r6N).

Zsh (Zee Shell) is a more modern shell. There is a project called Oh-my-Zsh, I encourage you to install this wherever you use the terminal. The following command should perform the install:

`curl -L https://github.com/robbyrussell/oh-my-zsh/raw/master/tools/install.sh | sh`



!SLIDE

## Git 

### Distributed revision control.




!SLIDE left

### Why Git?

Never lose your work. Lets you roll back to an earlier state, in case you mess it up badly.

Created by Linus Torvalds, the original author of Linux.



!SLIDE left

### Clone 

For getting a local copy of a remote repository.

* `git clone https://github.com/h5bp/html5-boilerplate.git`

### Status

To see what files are dirty, which ones are staged for commit, and to find out what branch you are currently on

* `git status` 

### Help

Any command in git can be prefixed with "help" to read more info about usage. 

`git help branch`




!SLIDE left

### The Basics

For now, you will use a very small set of the Git commands. 

* `git init`
* `git add`
* `git commit -a`
* `git push origin master`

For more on Git read the [tutorial on Github](http://bit.ly/wtzUSa).

For _even more_ [read this](http://bit.ly/zM501l).



!SLIDE left

## Amazon EC2

* [Create keys](http://bit.ly/ztxmJb)
* Install the following
	* `sudo apt-get update`
	* `sudo tasksel` to install LAMP
	* `sudo apt-get install mongodb`
	* `sudo apt-get install ruby`
	* `sudo apt-get install git`
	* rm.sh and update your .bashrc to use the `trash` command




!SLIDE left

## Reading Assignment

* [HTML/CSS/Javascript Tutorial](http://bit.ly/yHDDH9)
* [Front End Code Standards & Best Practices](http://bit.ly/AtUbu0)

### Recommended Reading

* [In the Beginning Was the Command Line](http://bit.ly/wYwKi4) by Neal Stephenson