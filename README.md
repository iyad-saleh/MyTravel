### Setup
---
Clone the repo and follow below steps.
git clone https://github.com/iyad-saleh/MyTravel.git
1. Run `composer install`
2. Copy `.env.example` to `.env` Example for linux users : `cp .env.example .env`
3. Set valid database credentials of env variables `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`
4. Run `php artisan key:generate` to generate application key
5. Run `php artisan migrate`
6. Run `php artisan db:seed` to seed your database



Thats it... Run the command `php artisan serve` and cheers, you are good to go with your new **Laravel Admin Panel** application.
