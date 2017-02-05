

## Option 1: The easy way

1. Open the page editor for one of the site pages

2. Change from "Full HTML" to "Plain text" (can be done at the bottom of the editing window:


Please make sure that the page is not broken after you are done, in other words please check that things are working ok

## Option 2: The nerdy way

1. Upload the file
  * Using and FTP client or
  * Using the cpanel interface
to this directory: `/www/www/sites/default/files/home/peoplesfund/`

2. Open the page editor for one of our web pages
  * and make sure we are in html editing mode

3. Add the following html code

`<img alt="" src="/sites/default/files/home/peoplesfund/{name of the file}" />`

Please note that the `/www/www` has been left out


