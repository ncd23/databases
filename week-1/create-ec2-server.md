# Signup for AWS

1) Visit the URL [http://aws.amazon.com] (aws.amazon.com) in your browser. 



# Create a new instance

10) After you have signed up, go to [http://alestic.com] (alestic.com) and click on "us-east-1" under the _Ubuntu AMIs_ header. 

11) Select the _Ubuntu 10.04 LTS Lucid EBS boot_ instance by clicking [aws-launch-13x15.png](the orange triangle), which will open a link in AWS launching a new instance.

12) Select Continue

13) Select _Micro (t1.micro, 613 MB)_ from the __Instance Type__ dropdown. No preference for __Availability Zone__. Select Continue.

14) In this next step be sure to check the checkbox next to __Termination Protection__. This will prevent you from accidentally deleting your server irretrievably. Take the default settings for everything else on this step.

15) Click Continue again. This step is optional.

16) Select __Create a new Keypair__

17) Enter a name for the new key pair. Click __Create & Download your Key Pair__. Save this file (with file extension _.pem_), and __Make a Backup__ on Dropbox or send yourself an email with this file.

18) Using the keyfile differs depending on your OS. On Mac you can pass an argument to ssh. The same is true for Linux. On Windows you will need to use Pageant and PuTTy.

19) Now create a new Security Group by clicking the __Create a new Security Group__ radio button. This is how you can open up different TCP ports, allowing your webserver to be visible to the internet. 

20) You will repeat this next sequence of instructions multiple times. You will pick the following from the __Create a new rule__ dropdown, and click __Add Rule__ after each of these: _SSH_, _SMTP_, _HTTP_, _HTTPS_, _SMTPS_. Give this new Security Group a name, description, and click Continue. 

21) Finally, click Launch. 

22) After clearing the popup dialog, you will be taken to the _AWS Management Console_. From here you can control all aspects of your new server. 

# Login and Setup

1) Use the key file you generated to connect using SSH. You will at some point be asked to accept the key from the server, say yes.

2) `sudo apt-get update`

3) `sudo tasksel` This starts a program which will walk you through installing LAMP. You will first use the arrow keys to move down to the entry for _LAMP Server_, hit the spacebar, hit Tab, and then Enter. You will be prompted to create a password for the root MySQL user. Enter a password, press Enter, then confirm the password and press Enter again.

4) You will now be able to contact your server through your browser. Enter the IP for the instance into a browser and confirm that you have the Apache default page...__It works!__. The webroot is `/var/www`, and you can modify the index.html file with the nano editor using `sudo nano /var/www/index.html` and making a change, saving, and refreshing your browser.

5) `sudo apt-get install ubuntu-desktop –no-install-recommends`. This installs basic desktop GUI support.

6) `sudo apt-get install indicator-applet-complete indicator-applet`

7) `sudo apt-get install chromium-browser`

6) `sudo add-apt-repository ppa:freenx-team`

7) `sudo sed -i 's/natty/lucid/g' /etc/apt/sources.list.d/freenx-team-ppa-natty.list`

8) `sudo apt-get update`

7) `sudo apt-get install freenx`

8) `wget https://bugs.launchpad.net/freenx-server/+bug/576359/+attachment/1378450/+files/nxsetup.tar.gz`

9) `tar -xvf nxsetup.tar.gz`

10) `sudo cp nxsetup /usr/lib/nx/nxsetup`

11) `sudo /usr/lib/nx/nxsetup --install`. Select No when asked if you want to use custom keys. _Note_: this is a less-secure option, but for our purposes is probably sufficient.

12) `sudo nano /etc/ssh/sshd_config` and add the following to the top:
"AllowUser root ubuntu nx", and set ChallengeResponseAuthentication to
yes. Then restart the ssh server with `sudo service ssh
restart`

13) Change the password for the ubuntu user: `sudo passwd ubuntu`.
Follow the prompts.

8) `sudo apt-get install git-core curl build-essential openssl libssl-dev`

8) `sudo apt-get install slocate`

# Connect to your server with remote desktop client (No Machine)

1) Download the No Machine client for your OS.

2) Run the _NX Connection Wizard_.

3) Name the _Session_ and when asked for your _Host_, provide your server's IP address.

4) Select _Unix_, then select __Custom__ from the dropdowns. In the __Settings__ dialog, provide the following text for __Run the following command__ `gnome-session --session=2d-gnome`. Click through the last step.

5) You'll get a dialog box asking you for _Login_ and _Password_. For _Login_ use nx, and use your key file password for password.

# Notes
For help with multiple ssh keys, [http://www.karan.org/blog/index.php/2009/08/25/multiple-ssh-private-keys] (see here).
