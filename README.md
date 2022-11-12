# CodeIgniter 4 Template Library

A library that will help you to create templates for your CodeIgniter 4 application.

## How To Install & Use
1. Copy the `app/Libraries/Template.php` file to your `app/Libraries` folder.
2. Copy the `app/Views/template.php` file to your `app/Views` folder.
   1. Create a folder named `home` in your `app/Views` folder.
   2. Create a folder named `layout` in your `app/Views` folder.
      1. Now create 2 files named `header.php` and `footer.php` in your `app/Views/layout` folder. 
3. Load the library in your controller: `use App\Libraries\Template;` before the controller class.
4. Now you can use the library in your controller like this:
   1.  `Template::Home("view_name")`
   2.  `Template::Home("view_name", $data)`
   3.  `Template::Home("view_name", $data, 'template_folder_name')` this will be the folder where you have `layout`
   4.  `Template::YouCustomFunction("view_name", $data)`

## Examples:
For the sack of example I have create a `Admin` function in the `Template.php` file. You can create your own functions and use them in your controller.

I have already created a folder in the view with the name of `admin_side`, and I use that folder in the `Admin` function.


> In Home controller you can see I covered all the examples.


> PS: You're free to use this library in your project, if you have any questions you can open an issue, also you can contribute to this library.