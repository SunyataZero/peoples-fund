

We have added these lines to enforce https:

# Added by Sunyata for Peoples Fund to enforce https/ssl:
RewriteCond %{HTTPS} off [OR]
RewriteCond %{HTTP_HOST} ^www.peoplesfundglobal\.org*
RewriteRule ^(.*)$ https://peoplesfundglobal.org/$1 [L,R=301]

