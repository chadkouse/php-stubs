from http://youtrack.jetbrains.net/issue/WI-174:

STUBS are normal, syntactically correct PHP files that contain function & class signatures, constant definitions, etc. for all built in PHP stuff and most standard extensions. Stubs need to include complete PHPDOC, especially proper @return annotations

IDE need them for completion, code inspection, type inference, doc popups, etc. Quality of most of this services depend on quality of the stubs (basically their PHPDOC @annotations).

Exactly the same kind of stubs is used for similar purposes by NetBeans PHP and Eclipse PDT.

Stubs are currently located in
/plugins/php/lib/php.jar/com/jetbrains/php/lang/psi/stubs/data/ within PhpStorm distribution. Don't forget to invalidate caches if you update anything there.

It seems that there's no reliable automatic way to generate stubs from PHP sources/docs. Perhaps crowdsourcing is the solution.

As for organisation of the process and tools involved I think its too early to start something big.
At the moment everyone can look into what IS documented just by peeking into distribution. If anybody actually started work on some extension - just create a separate ticket and attach a file to it. I'll look into it and merge into the distro.

If you had some generation tools or scripts or just insights to share - do not hesitate to drop a message.
I will cleanup the thread if it gets too big and we will change process to something more appropriate if there will be some significant activity here.

Legal notice: we do accept stub patches along with link to publicly available source of information used to make them. i.e. you prepare them (basically transform to appropriate form) from official (and public) documentation.

Steps to update php.jar:
find php.jar.  This should be inside your PhpStorm installation folder.  The following steps are for mac but should be pretty close on linux/windows.
1. cd /Applications/PhpStorm.app/plugins/php/lib/
2. backup php.jar: cp php.jar php_backup.jar
3. extract the php jar to a new folder
  * mkdir php
  * cd php
  * jar xf ../php.jar
4. change the stubs directory
  * pushd com/jetbrains/php/lang/psi/stubs/data
5. copy the stubs you want into this directory
  * cp /path/to/your/stub/file .
6. go back to the php directory
  * popd
7. create a new jar
  * jar cf0 php.jar .
8. move the new jar into the appropriate place
  * mv php.jar ..
9. clean up
  * cd ..
  * rm -Rf php
10. go into phpstorm and select file->invalidate caches -- it will instruct you to restart PhpStorm

**if something goes wrong, you can restore the backup php.jar file you made in step 2**


