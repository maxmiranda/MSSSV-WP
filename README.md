[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

MSSSV Original Wordpress Theme
===

Hey, there! This was a Max-Miranda-original theme built with underscores’ open source starter theme. 

Some of the cool features you’ll find in this theme:
* Enabled business owner to automatically generate a new page for each added attorney on Wordpress backend.
	* Used Advanced Custom Fields Wordpress Plugin and overloaded my_acf_save_post in functions.php (line 138). Now this function serves to create an entirely new page each time a new attorney is added to the backend. 
	* If the page already exists, it updates the page rather than creating a new one, using wp_update_post(). 
* “Clients” page has a similar backend which enables business owner to add an image of their new clients and automatically updates that client to the page with a purposefully delayed fadeInDown effect from open-source animate.css (clients.php).
* Theme is mobile-responsive and tablet-responsive thanks to media queries located within style.css (mostly line 1624 and below).
* Main pages laid out on the website are:  
	* front-page.php (Home) 
	* about.php
	* practice.php
	* team.php
	* clients.php
	* index.php (News) which leads into page.php for individual stories
	* contact.php
* You can also check out my Javascript in the ‘js’ folder in a file titled navigation.js

Thanks for reading! 