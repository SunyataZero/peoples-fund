
## Intro

### Different types of updates
Please note that a "minor version update" is different from an "upgrade". When doing a minor version update we are moving within the minor versions like 7.x or 7.0.x, where "x" is the value that is changing. (Upgrade is moving between major versions and is something that is a much bigger task and that we don't want to do without careful consideration)

There are also updates to Drupal modules and Drupal themes

Updates of CiviCRM is outside the scope of this document


## Updating Drupal core (minor version update)


***Please do not attempt this update if you are not sure of what you are doing*** And please make sure to do a backup of the files and database before updating the system

1. Read the release notes for this update. The release notes for Drupal versions can be found here: https://www.drupal.org/project/drupal/releases (it's possible that you need to read several in case more than one update has been made to the major version of Drupal since the last time you made a minor version update)
2. Backup files, database (and possibly email) using this guide: https://github.com/peoples-fund/peoples-fund/blob/master/docs/howto-manual-backup.md
3. Extract the relevant files after reading ["Which files to keep"](#which-files-to-keep) locally to a separate directory so that they are easily available to restore later on
4. Follow these instructions: https://www.drupal.org/node/1223018

### .. using drush (prefered)

Alternatively instead of the last step above ("follow these instructions") we can do this:

1. Log in to peoplesfundglobal.org through `ssh`, for example by using putty, OpenSSH, or just ssh-ing in via the command line `ssh _username_@peoplesfundglobal.org` (you will need the user name and password)
2. Change directory to the installation directory for Drupal: `cd www/www/`
3. Follow the instructions here: https://www.drupal.org/docs/7/updating-your-drupal-site/updating-drupal-using-drush (Please note: I (Tord) have not tried updating using drush)


## Updating Drupal modules

1. Backup files, database (and possibly email) using this guide: https://github.com/peoples-fund/peoples-fund/blob/master/docs/howto-manual-backup.md
2. Put the site into maintanance mode: http://peoplesfundglobal.org/admin/config/development/maintenance
3. Go to https://peoplesfundglobal.org/admin/reports/updates/update
4. Select all modules by clicking on the checkbox in the upper left corner
5. Click on "Download these updates"
6. Click on "Continue"
7. Click on "Run database updates"
8. Click on "Continue"
9. Take the site out of maintanence mode: https://peoplesfundglobal.org/admin/config/development/maintenance


## Which files to keep

About the robots.txt and .htaccess files the CiviHosting support says this:
> We don't normally edit those files, but sometimes our Support Team does. There is
generally no reason to overwrite them in reality.

There may be other files that we have added that we may want to keep (like a favicon file for example)

Here are the files/directories which we want to keep:

### `sites` directory

### `robots.txt`

..unless the Drupal release notes says that it needs to be updated, in which case we may also need to talk with the CiviHosting support (in case they have customized the file)

At the time of writing there are no known changes made for the `robots.txt` file

### `.htaccess`
We have modified this file ourselves so we want to keep these changes

The changes that we have made can be found here:
https://github.com/peoples-fund/peoples-fund/blob/master/htaccess/htaccess-changes.md

Also as for `robots.txt` above there may be changes by the CiviHosting support

As for `robots.txt` we want to keep the file unless there are instructions in the Drupal release notes
