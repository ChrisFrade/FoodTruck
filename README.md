#FoodTruck

    
### Project

This restaurant website, fastfood was made with Laravel Framework, it’s developed mainly for the back-end part, with the realization administration system.
The project is still under developement.
The design par was taken from a free template to save development time 
You can find [Free Template] (Corona Free) used for this project on https://www.bootstrapdash.com/

What interests me is to work on an administration interface initially coupled with a MYSQL database.


## How to run this project

1.	Download the project from Github
2.	Run composer update on your editor
3.	Rename .env.example file to .env . If you OS dont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env
4.	Run php artisan key : generate
5.	Create the database
6.	Run php artisan migrate
7.	Run php artisan serve
8.	Enjoy !!

    
## Language used in this project

- Laravel 8/9
- PHP
- Blade
- HTML / CSS
- JS
    

## Bugs and possible corrections made

In this project i used to perform my foreach @foreach($data as $data) ; 
For display my values and this is not a good practice, it overide the data and it’s not good. 

@foreach($array as $values) ; 
It’s better practice to access in my data in the table from my database.


## Security Vulnerabilities

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
