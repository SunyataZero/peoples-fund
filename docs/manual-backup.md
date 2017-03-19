

### Background and context

There are automated backups taken by CiviHosting, for more info please see:
https://github.com/peoples-fund/peoples-fund/blob/master/docs/for-web-gurus/technical-overview.md#backup


### Scheduling a reminder to remember to take a manual backup

TODO: How often do we want to take a manual backup?


### Procedure

1. Log in to the control panel for our site (https://cp.s801.sureserver.com)

2. Click on "Backup"

3. Tick the checkboxes for **"MySQL5"** and **"Files"** (and "Mail" if this is needed also)

4. Click on "Backup Now"

5. Wait (backup will take maybe one or two minutes, although later on this could be longer if we add much data like images to the website)

6. Click on "Download backups"

7. Now you will see a couple of download links, click on these to download (they have to be downloaded separately)

8. Verify that you now have `files.tar.gz` and `mysql5.tar.gz` (and other files if you chose to backup mail as well) on your local computer




