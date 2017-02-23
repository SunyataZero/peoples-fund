

NEW: This is a better way to update core: https://www.drupal.org/docs/7/updating-your-drupal-site/updating-drupal-using-drush

TODO: Write a short guide on this alternative way to update

## Updating Drupal core (minor version update)

Please note that update is different from upgrade. Update is moving within the minor versions like 7.x or 7.0.x, where "x" is the value that is changing. (Upgrade is moving between major versions and is something that is a much bigger task and that we don't want to do without careful consideration)

***Please do not attempt this update if you are not sure of what you are doing*** And please make sure to do a backup of the files and database before updating the system

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

Here are the files/directories which we want to keep:

#### `sites` directory

#### `robots.txt`

..unless the Drupal release notes says that it needs to be updated, in which case we may also need to talk with the CiviHosting support (in case they have customized the file)

At the time of writing there are no known changes made for the `robots.txt` file

#### `.htaccess`
We have modified this file ourselves so we want to keep these changes

The changes that we have made can be found here:
https://github.com/peoples-fund/peoples-fund/blob/master/htaccess/htaccess-changes.md

Also as for `robots.txt` above there may be changes by the CiviHosting support

As for `robots.txt` we want to keep the file unless there are instructions in the Drupal release notes


## Updating CiviCRM


## Updating Drupal modules


