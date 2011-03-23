# Notes

## Not sure why I wasn't able to get $.parseJSON() working and had to use eval.

Here are some of the notes for working on the problem above. 

These are variables from  jquery.js that determine what is valid JSON. My JSON strings that validate in 
http://jsonlint.com/. Strings like [{"Color":{"id":"3","name":"Black","value":"bk"}}].


rvalidchars: /^[\[\],:{}\s]*$/
rvalidescape: /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g
rvalidtokens: /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g
rvalidbraces: /(?:^|:|,)(?:\s*\[)+/g

rvalidchars.test(data.replace(rvalidescape, "@").replace(rvalidtokens, "]").replace(rvalidbraces, ""))

Here is the output of data.replace().replace().replace() calls above:
<code>
[{]:{]:],]:],]:]}}]
</code> 

This is the validity check in jquery 1.4.1:
/^[\],:{}\s]*$/.test(data.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, "@")
499 .replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, "]")
500 .replace(/(?:^|:|,)(?:\s*\[)+/g, "")) 