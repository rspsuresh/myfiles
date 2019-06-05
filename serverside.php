1.Composer ?

    Composer is an application-level package manager for the PHP programming language that provides a standard format for managing dependencies of PHP software and required libraries.It also provides autoload capabilities for libraries that specify autoload information to ease usage of third-party code.
    Composer is a dependency manager for PHP

    Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.	
	
	composer install
	
	require: add the library in parameter to the file composer.json, and install it.
    install: install all libraries from composer.json. It's the command to use to download all PHP repository dependencies.
    update: update all libraries from composer.json, according to the allowed versions mentioned into it.
    remove: uninstall a library and remove it from composer.json.
	
2.Purpose of Composer lock file?

   Lock files always contain exact version numbers, and are useful to communicate the version you tested with to colleagues or when publishing an application. For libraries the dependency information in composer.json is all that matters.
   
   composer install

		Check for composer.lock file
		If not, auto generate composer.lock file (Using composer update)
		Install the specified versions recorded in the composer.lock file
		
   composer update

		Go through the composer.json file
		Check availability of newer (latest) versions, based on the version criteria mentioned (e.g. 1.12.*)
		Install the latest possible (according to above) versions
		Update composer.lock file with installed versions
		
		
3. Dependency Injection?

   In software engineering, dependency injection is a technique whereby one object (or static method) supplies the dependencies of another object. A dependency is an object that can be used (a service).

   https://medium.freecodecamp.org/a-quick-intro-to-dependency-injection-what-it-is-and-when-to-use-it-7578c84fa88f    
   
   
4. Difference between namespace and Use?

   Simply, namespaces are like the place of the current class.You can imagine namespace as in which directory your class is located, you can’t have multiple classes with the same same in the same namespace. It’s basically prevent your code to have name conflict with other codes
   
   And that will be use App\Person. It will load that class to your current file
   
5. Why laravel framework is best?

    1) Authorization Technique: PHP framework:
    2) Object-Oriented Libraries:
    3) Artisan:
        Laravel provides a built-in tool for command-line called Artisan.

6. PHP is synchronus or Asynchronus?

   Synchronous – You are in a Bus stop. When bus arrived, people will enter in a bus one by one. You cannot get into the bus until everybody in front of you gets in. and the same concept applies to the people standing behind you. This is Synchronous.

   Asynchronous – Take household chores as an example. You put clothes to get washed and dry in a washer and dryer. Then you bake pizza in a oven. Meanwhile you are cutting veggies for salad. In this situation, couple of tasks are getting done at the same time. When the task is done. It will simply report back. This is asynchronous.
   
   http://www.phpmind.com/blog/2017/05/synchronous-and-asynchronous/

   php  -> synchronus
   node js,js ->asynchronus
   
7. Difference between for and foreach?

   foreach being used to iterate arrays and nothing else.Also foreach loop is used to iterate only arrays and objects.
   
   for is the general purpose counter-based loop
   
8. Singleton class ?

   The singleton pattern is used to restrict the instantiation of a class to a single object, which can be useful when only one object is required across the system.
   
9 .Design pattern ?


10. Garbage Collection ?

    Garbage Collection (GC) in PHP can have a serious impact on memory and performance.performance consideratios.
	
11.     Language 	: PHP
	Topic    	: Array
	Function 	: Compact()
	Description : Create array containing variables and their values 
	Example 
	-------
	<?php
	$city  = "San Francisco";
	$state = "CA";
	$event = "SIGGRAPH";

	$location_vars = array("city", "state");

	$result = compact("event", "nothing_here", $location_vars);
	print_r($result);
	?>

	Output
	------
	Array
	(
	    [event] => SIGGRAPH
	    [city] => San Francisco
	    [state] => CA
	)
       
  
     

      
      

      


   
   
   
	
