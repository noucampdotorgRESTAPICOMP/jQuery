# jQuery Exercise 4

## Fetch latest Repository Branch

```
$ cd /DRIVE/xampp/htdocs/jQuery
$ git pull --no-edit https://github.com/noucampdotorgRESTAPICOMP/jQuery.git latest
$ git status

```


# Part 1 – Ajax get() Method

Using the HTML page [http://localhost/jQuery/HellojQueryAjax.html](http://localhost/jQuery/HellojQueryAjax.html) write event handlers to perform the following tasks (test one at a time):


1.	Examine and then run the code in [http://localhost/jQuery/AjaxGet.html](http://localhost/jQuery/AjaxGet.html) to demonstrate jQuery using the Ajax function ``get()``.

1.	Create a new file called ``MyAjaxData.txt`` and add some basic HTML tag data to it, e.g. a ``<ol>`` or ``<table>``.  Then modify the ``AjaxGet.js`` program to load and show it.
	
1.	Add to the HTML page ``DropdownjQueryAjax.html`` a dropdown box that has options for:

	```
	Choose type...
	Goalkeepers
	Defenders
	Midfielders
	Forwards 

	```

	Write the jQuery code in a JavaScript file ``DropdownjQueryAjax.js`` that retrieves the appropriate data for the player type selected from either of the corresponding files -- ``goalkeepers.txt``, ``defenders.txt``,
	``midfielders.txt`` and ``forwards.txt`` - and displays that data on the HTML page. 
	

1.	Push your code to **your private** repository on GitHub.  Type these commands into your *Git Bash* client:

	```
	$ git status
	$ git add .
	$ git commit -m "Exercise 3 - Part 1 DONE|PARTIAL|HELP"
	$ git push origin master
	$ git status

	```
