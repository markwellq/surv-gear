<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

docker-compose up -d --build

docker exec -it surv_gear_system bash

composer install
npm install
npm run dev

cp .env.example .env

php artisan key:generate
php artisan storage:link
php artisan migrate

<!-- Icons -->

composer require blade-ui-kit/blade-icons

composer require codeat3/blade-carbon-icons - <x-carbon-user />
composer require andreiio/blade-remix-icon - <x-ri-arrow-down-s-line />
composer require codeat3/blade-bytesize-icons - <x-bytesize-menu />

<!-- payment icons -->

composer require codeat3/blade-fontisto-icons <x-fontisto-apple-pay />
composer require codeat3/blade-fontisto-icons <x-fontisto-visa />
composer require codeat3/blade-fontisto-icons <x-fontisto-discover />, <x-fontisto-mastercard />

<!-- old -->

composer require andreiio/blade-remix-icon  <x-ri-visa-line />
composer require owenvoke/blade-fontawesome <x-fab-apple-pay />, <x-fab-google-pay />, <x-fab-cc-amazon-pay />
composer require codeat3/blade-fontisto-icons <x-fontisto-paypal />
composer require codeat3/blade-simple-icons <x-si-discover />
