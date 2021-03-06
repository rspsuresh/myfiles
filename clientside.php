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
	
11. How to check both the arrays have same values or not in ts?

    var A=[1,2,3];
    var B=[3,2,1];
    A.every(e=>B.includes(e))
    // returns boolean
  
12. How to combine or merge objects in js?\
    
    const target = { a: 1, b: 2 };
    const source = { b: 4, c: 5 };

    const returnedTarget = Object.assign(target, source); //{a: 1, b: 4, c: 5}


  13. Why * is used in Angular 2+ ?
    
      https://angular.io/guide/structural-directives#asterisk
      
  14. Language	:	Javascript
	Concept	:	Swaping
	Example
	-------
	let a = 'world';
	let b = 'hello';
	[a, b] = [b, a]

	Output
	------
	console.log(a) // -> hello
	console.log(b) // -> world

  15. Best way of validation for checking array is valid or not

	let $array = [];
	if($array && $array.constructor === Array && $array.length === 0) 
      		// strictly an empty array
	else 
		// not an empty array

	Ref URL : https://www.quora.com/How-do-you-check-if-an-array-is-empty-in-JavaScript

 16. break ,continue ,return javascript foreach
   https://github.com/rspsuresh/myfiles

 17.https://dev.to/bettercodingacademy/functional-programming-all-you-need-to-know-about-currying-5k7

 18.const url = "https://jsonplaceholder.typicode.com/users";
    data = await fetch(url).then(resp => resp.json());
    console.table(data);

 19:back tik  --https://thebittheories.com/the-3-advantages-of-backtick-literals-in-javascript-f6beade4a9cf

 20.let myNaN = NaN; // or let myNan = Number.NaN
    console.log(typeof myNaN); // "number"
    console.log(myNaN == NaN); // false
    console.log(myNaN === NaN); // false

 21 data-pace-options
    https://stackoverflow.com/questions/26057017/how-to-stop-pace-js-plugin-to-run-on-page-load-i-want-to-fix-only-on-ajax-reque 

 22.https://dev.mysql.com/doc/refman/5.7/en/json.html

 23.const object = { x: 42, y: 50 };
	const entries = Object.entries(object);
	// → [['x', 42], ['y', 50]]

	const result = Object.fromEntries(entries);
	// → { x: 42, y: 50 }
 24.Configuring Environment as different level like qa,prod,dev
     https://medium.com/@balramchavan/configure-and-build-angular-application-for-different-environments-7e94a3c0af23

 25.Life cycle hooks order
	ngOnChanges()
	ngOnInit()
	ngDoCheck()
	ngAfterContentInit()
	ngAfterContentChecked()
	ngAfterViewInit()
	ngAfterViewChecked()
	ngOnDestroy()
  26.ng2 smart table
     https://akveo.github.io/ng2-smart-table/#/demo

  27.Angular Building Blocks
     Modules,Components,Templates,Metadata,Databinding,Services,Directives (Components Directive,Structural Directive,Attribute Directive),Dependency Injection 
 
  28.var a = 0;
	var b = 0;

	a || b;
	a && b;
	a ?? b;

	|| => it will return first truthy value otherwise return last false value

	&& => it will return first falsy value otherwise return last truthy value

	?? => if left value is not undefined or null then it will return left side value otherwise right side value return

  29.How to Deep Copy Objects and Arrays in JavaScript

	1. Shallow copy using With Spread operator (...)
		var orginalArray = ['santhosh','suresh','mani'];
		var copyWithEquals = orginalArray;
		var copyWithSpread = [];
		copyWithSpread = [...orginalArray];

		orginalArray[0] = 'santhosh_kumar';

		console.log(...orginalArray);
		console.log(...copyWithEquals);
		console.log(...copyWithSpread);
	2. Shallow copy useing with (.slice());
		var orginalArray = ['santhosh','suresh','mani'];
		var copyWithEquals = orginalArray;
		var copyWithSpread = [];
		copyWithSpread = orginalArray.slice();

		orginalArray[0] = 'santhosh_kumar';

		console.log(...orginalArray);
		console.log(...copyWithEquals);
		console.log(...copyWithSpread);
	3. Shallow copy useing with (.assign());
		var orginalArray = ['santhosh','suresh','mani'];
		var copyWithEquals = orginalArray;
		var copyWithSpread = [];
		Object.assign(copyWithSpread,orginalArray) // Object.assign(target,source)

		orginalArray[0] = 'santhosh_kumar';

		console.log(...orginalArray);
		console.log(...copyWithEquals);
		console.log(...copyWithSpread);
 30. Cookies Vs Local Storage Vs Session Storage
	       Cookies	Local Storage 	Session Storage
Capacity	4KB	10MB	5MB
Browsers	HTML4 / HTML5	HTML5	HTML5
Accessible From	Any Window	Any Window	Same Tab
Expires	Manually Set	Never	On tab close
Storage Location	Browser and Server	Browser Only	Browser Only
Sent With Requests	Yes	No	No

 31.What is pure or impure pipe?

	In simple words,
	impure-pipe works for every change in the component
	pure-pipe works only when the component is loaded.

32.Difference between rxjs and ajax?
   rxjs ->we can break request call
   ajax ->cant break request call
33.Avoid using multiple IF in  js side
   var user={'name':'suresh'};
   const message =user && user.name && `Hello ,${user.name}`;
   console.log(message);

34.You can see two objects below, so i want access first object property and methods from second object, how can we achive this secnarios,

	   Solution:
	let obj1 = { 
		name: 'santhosh',
		getName(){ 
			alert("first Object getName called");
			}
		};
	let obj2 = {
			mobile: '9884937084',
			getMobile(){
				alert("seconde Object getMobile called");
			},
			__proto__: obj1
		};

	https://javascript.info/prototype-inheritance
   35.ES2015 a.k.a. ES6
      ES2016 a.k.a. ES7
      ES2017 a.k.a. ES8
      ES2018 a.k.a. ES9
      ES2019 a.k.a. ES10
      ES2020 a.k.a. ES11

36 .alternate way for arrow function(bind)
 this.moduleService.getModuleBasedAccess(this.formParms).subscribe(
        function(data){
          this.accessList = data['data'].data.moduleAccess;
          console.log(this.accessList);
        }.bind(this)
      )
37 .Function scoping

   Challange#1
===========
	const call = {
		caller: "mom", 
		says: function() {
			console.log(`Hey, ${this.caller} just called.`);
		}
	};

	call.says();

	Here we have a function declaration inside the call object. As a general rule, 'this' is determined by the object invoking a function. Therefore, when the call object invokes says function (call.says()), the 'this' keyword inside the says function refers to the call object, making this.caller equal to "mom".
	
Challange#2
===========
	const call = {
	  caller: "mom", 
	  says: () => {
		console.log(`Hey, ${this.caller} just called.`);
	  }
	};
39. InnerHtml and interpolation
     InnerHtml ==>display conversion html tag
     Interpolation=directily displays html tag as sting

	call.says();
	
	Arrow functions, as part of ES6 syntax, do NOT have their own 'this' keyword. Instead, they will use the 'this' keyword of whatever 'this' was outside the function when it was created.
	
	In other words, 'this' inside the arrow function is not bound to our call object, but instead is already bound to where the call object is being created originally

Challage#3
==========
	const call = {
		caller: "mom", 
		says: function() {
			console.log(`Hey, ${this.caller} just called.`);
		}
	};

	let newCall = call.says;

	newCall();
	
	Here, we assign a new variable to the says function inside the call object. And then we invoke the variable, which is a simple function call.

	Notice where we invoke the function. Is it inside the call object? No. We are invoking newCall() function globally, which in turn makes the 'this' keyword equal to the global object.

38: The toJSON method
	We have one method named toJSON which can be a part of any object as its property. JSON.stringify returns the result of this function and stringifies it instead of converting the whole object into the string. See this example.
	const user = {
	 firstName : "Prateek",
	 lastName : "Singh",
	 age : 26,
	 toJSON() {
	    return { 
	      fullName: `${this.firstName} + ${this.lastName}`
	    };
	}
	console.log(JSON.stringify(user));
	RESULT
	// "{ "fullName" : "Prateek Singh"}"

39 .var tt=1;
tt && testfun();
function testfun(){ alert('test');}

40 .Break privilages of file
	$oldmask = umask(0);
	mkdir("test", 0777);
	umask($oldmask);

41. assign
	let first = {name: 'Tony'};
	let last = {lastName: 'Stark'};
	let person = Object.assign(first, last);
	console.log(person);
	// {name: 'Tony', lastName: 'Stark'}
	console.log(first);
42. Difference between seal and freeze in javascript
    freeze->cannot add and alter object property
    seal->alter object property but not to add any new property into object

43.Purpose of preinit() in yii2
    
   preInit() is called, which configures some high priority application properties, such as basePath.

44.Speed up yarn install
   npm install => 121 sec
  yarn install => 73 sec
  npm set progress=off; npm install => 68 sec
  yarn install --prefer-offline => 47 sec

45. PEAR, PECL, and composer are PHP package managers.
