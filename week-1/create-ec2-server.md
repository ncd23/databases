# Signup for AWS

1) Visit the URL [http://aws.amazon.com] (aws.amazon.com) in your browser. 



# Create a new instance

10) After you have signed up, go to [http://alestic.com] (alestic.com) and click on "us-east-1" under the _Ubuntu AMIs_ header. 

11) Select the _Ubuntu 11.10 Oneiric EBS boot_ instance by clicking [aws-launch-13x15.png](the orange triangle), which will open a link in AWS launching a new instance.

12) Select Continue

13) Select _Micro (t1.micro, 613 MB)_ from the __Instance Type__ dropdown. No preference for __Availability Zone__. Select Continue.

14) In this next step be sure to check the checkbox next to __Termination Protection__. This will prevent you from accidentally deleting your server irretrievably. Take the default settings for everything else on this step.

15) Click Continue again. This step is optional.

16) Select __Create a new Keypair__

17) Enter a name for the new key pair. Click __Create & Download your Key Pair__. Save this file, and __Make a Backup__ on Dropbox or send yourself an email with this file.

18) Using the keyfile differs depending on your OS. On Mac you can pass an argument to ssh. The same is true for Linux. On Windows you will need to use Pageant and PuTTy.

19) Now create a new Security Group by clicking the __Create a new Security Group__ radio button. This is how you can open up different TCP ports, allowing your webserver to be visible to the internet. 

20) You will repeat this next sequence of instructions multiple times. You will pick the following from the __Create a new rule__ dropdown, and click __Add Rule__ after each of these: _SSH_, _SMTP_, _HTTP_, _HTTPS_, _SMTPS_. Give this new Security Group a name, description, and click Continue. 

21) Finally, click Launch. 

22) After clearing the popup dialog, you will be taken to the _AWS Management Console_. From here you can control all aspects of your new server. 


There is now a button on alestic.com which launches an instance for you on amazon.

