# Day 1 Reflection 

## What I Did
- Forked and cloned Laravel scaffold project 
- Installed dependencies using composer install 
- Switched PHP version to 8.3 for compatibility 
- Configured .env file
- Connected MySQL database
- Ran migrations successfully
- Installed npm packages
- Ran Vite using npm run dev
- Successfully launched project in browser

## Problems Faced
- Composer package compatibility with PHP 8.4
- Vite manifest missing issue

## How I Solved Them
- Changed PHP version to 8.3
- Ran npm install and npm run dev

## What I Learned
- Laravel setup process
- Artisan commands
- Database migration
- Frontend asset compilation with Vite

## 5 Things in PHP That Surprised Me as a JS Dev

1. Every variable starts with `$`  
   In JavaScript we write `let name = "Hemanth"` but in PHP it becomes `$name = "Hemanth"`.

2. Variables can be used directly inside HTML files  
   PHP mixes backend logic with HTML easily using Blade templates.

3. Arrays are more flexible  
   PHP arrays can work like normal arrays and also like objects/maps with key-value pairs.

4. Semicolons are compulsory almost everywhere  
   Similar to JavaScript, but PHP is stricter in many places.

5. Backend runs directly with built-in server  
   Using `php artisan serve` was simple compared to setting up some JS backend frameworks.

## Setup Gotchas I Hit

1. Composer install failed because PHP 8.4 was incompatible with some locked packages.  
   Fixed by switching to PHP 8.3.

2. `copy .env.example .env` did not work in Git Bash.  
   Fixed by using `cp .env.example .env`.

3. Laravel migration first tried to use default database `laravel`.  
   Fixed by updating `.env` with correct DB name.

4. Vite manifest error happened when opening app in browser.  
   Fixed by running `npm install` and `npm run dev`.

5. Needed both servers running:
   - `php artisan serve`
   - `npm run dev`

