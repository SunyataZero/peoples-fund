
## Domain name

Moved from one.com (that we were using before) to the new host (CiviHosting)

## Hosting: CiviHosting

Home:
* 

Documentation:
* 

Support:
* 

CiviHosting was chosen because:
* CiviCRM requires a lot from the server. The server may not be able to run CiviCRM at all (like with one.com) or may not be supported. Also even if it does work there can be scaling issues in the future
* CiviHosting has a good reputation in the CiviCRM community

### Backup
Has automated backup:
> Do you make backups of my data?
> Yes, we run a full backup of your files and databases automatically every 24 hours. We store those on a physically separate server for 7 days. You thus have 7 full backups of your data. You have access to these backups to restore the data whenever you want.
> You can also create a Personal Backup whenever you want and download that to your PC.

(Source: https://civihosting.com/faq)

### ssh access

We have specifically asked for a server with ssh access

### Server location

Europe

### Control panel

TDB


## Web platform: Drupal 7

Support:
* http://drupal.stackexchange.com/ ([Tord](http://drupal.stackexchange.com/users/39244/sunyata))
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

#### Module z


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

### Stripe Payment Processor

***Please note: This is probably the weakest link in the website back-end***

Home:
* https://civicrm.org/extensions/stripe-payment-processor
* https://github.com/drastik/com.drastikbydesign.stripe
* https://drastikbydesign.com/blog-entry/civicrm-stripe-payment-processor

Documentation:
* The best documentation is in the github readme file: https://github.com/drastik/com.drastikbydesign.stripe

Support:
* Issues are listed here: https://github.com/drastik/com.drastikbydesign.stripe/issues
* Some comments can be found here: https://drastikbydesign.com/blog-entry/civicrm-stripe-payment-processor
* Questions about CiviCRM and stripe can be found here: http://civicrm.stackexchange.com/questions/tagged/stripe


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
