
## Updating CiviCRM

1. Take a backup of the files, the database (and possibly email) using this guide: https://github.com/peoples-fund/peoples-fund/blob/master/docs/howto-manual-backup.md
2. Follow the steps here: https://wiki.civicrm.org/confluence/display/CRMDOC/Upgrading+CiviCRM+for+Drupal+7
    * Our path to the CiviCRM directory: `/www/www/sites/all/modules/civicrm`
    * For the update to be possible while in maintenance mode, it's nessacary to remove any custom text added to the drupal maintenance page (strange but true!) You can find the text for the maintenance page [here](https://github.com/peoples-fund/peoples-fund/blob/master/maintenance-page/maintenance-page-text.txt)

