
## Domain name

peoplesfundglobal.org

Moved from one.com (that we were using before) to the new host (CiviHosting)

Alternate URL: http://peoplesfund.s801.sureserver.com


## Hosting: CiviHosting

Home:
* https://civihosting.com/

Support:
* Support can be reached on `help (at) [their domain name]`

CiviHosting was chosen because:
* CiviCRM requires a lot from the server. The server may not be able to run CiviCRM at all (like with one.com) or may not be supported. Also even if it does work there can be scaling issues in the future
* CiviHosting has a good reputation in the CiviCRM community

### Backup

Has automated backup:
> Do you make backups of my data?
> Yes, we run a full backup of your files and databases automatically every 24 hours. We store those on a physically separate server for 7 days. You thus have 7 full backups of your data. You have access to these backups to restore the data whenever you want.
> You can also create a Personal Backup whenever you want and download that to your PC.

Source: https://civihosting.com/faq

### Server location

Europe

### Admin access

For login info, please ask Tord or Frederik

#### ftp

Yes

#### ssh

Yes. (We have specifically asked for a server with ssh access)

#### Control panel

They have a control panel for the website, please contact Tord or Frederik for the URL and login information


## Web platform: Drupal 7

Support:
* http://drupal.stackexchange.com/ ([Tord's profile](http://drupal.stackexchange.com/users/39244/sunyata))
* https://www.drupal.org/support
* https://www.drupal.org/forum/18

### Version
We are using version 7 (rather than 8) for two reasons:
* CiviCRM doesn't work with 8
* 8 does not have all the modules that we want

### Modules

Drupal 7 is built so that the base is lean, so many modules are installed to get some important functionality

#### Module x

#### Module y


### Version Control of texts

Html for pages are version controlled inside Drupal 7. One exception is the footer which is not version controlled since the html for the footer is placed inside its own block. Instead we have the version control for the html of the footer inside this github repo


## CiviCRM

Home:
* https://civicrm.org/

Documentation:
* https://civicrm.org/documentation
* https://wiki.civicrm.org/
  * Installing for Drupal 7: https://wiki.civicrm.org/confluence/display/CRMDOC/Installing+CiviCRM+for+Drupal+7
* https://github.com/civicrm/civicrm-docs/
* User and Administrator Guide: https://docs.civicrm.org/user/en/stable/

Support:
* http://civicrm.stackexchange.com/ ([Tord](http://civicrm.stackexchange.com/users/3776/sunyata))
* https://forum.civicrm.org/


## Front-end framework
*Bootstrap* through the *drupal-bootstrap* theme

### Bootstrap

Home:
* http://getbootstrap.com

Documentation:
* http://getbootstrap.com/getting-started/


### drupal-bootstrap

Home:
* https://www.drupal.org/project/bootstrap

Documentation:
* http://drupal-bootstrap.org/api/bootstrap/7
* 

Support: 
* 


## Icons/Glyphs and fonts
* Using icons from AwesomeFonts from a cdn at the moment. We may want to move thes unto our own server
* Are also using the bootstrap glyps

It may be best not to mix these two above since they have a different system for their sizes
