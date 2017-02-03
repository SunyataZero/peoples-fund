
## Important admin pages


## Updating modules

## Updating Drupal core
(Minor version update)

***Please do not attempt this update without having consulted with a tech nerd first*** If you do please make sure to take a backup first, as described below

*After having read the notes below in this section,* please follow these instructions: **https://www.drupal.org/node/1223018**

The release notes for Drupal versions can be found here:
https://www.drupal.org/project/drupal/releases

Use this page to backup: the files and database:
https://cp.s801.sureserver.com/archive/index.php

Maintanence mode:
http://peoplesfundglobal.org/admin/config/development/maintenance

### Which files to keep

About the robots.txt and .htaccess files the CiviHosting support says this:
> We don't normally edit those files, but sometimes our Support Team does. There is
generally no reason to overwrite them in reality.

There may be other files that we have added that we may want to keep (like a favicon file for example)

Here is a complete list of files/directories which we want to keep:
* `sites` directory
* robots.txt unless the Drupal release notes says that it needs to be updated, in which case we may also need to talk with the CiviHosting support (in case they have customized the file)
* .htaccess - as for robots.txt above


## System status

### Logs

Logs for drupal:
http://civicrm-drupal.ihavearrived.org/?q=admin/reports/dblog

Logs for civicrm:

