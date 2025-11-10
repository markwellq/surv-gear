<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

&nbsp; - docker-compose up -d --build

&nbsp; - docker exec -it surv_gear_system bash

&nbsp; - composer install
&nbsp; - npm install
&nbsp; - npm run dev

&nbsp; - cp .env.example .env

&nbsp; - php artisan key:generate
&nbsp; - php artisan storage:link
p&nbsp; - php artisan migrate

&nbsp; &nbsp; &nbsp; -ICONS-

&nbsp; - composer require blade-ui-kit/blade-icons

&nbsp; - composer require codeat3/blade-carbon-icons # <x-carbon-user />
&nbsp; - composer require andreiio/blade-remix-icon # <x-ri-arrow-down-s-line />
&nbsp; - composer require codeat3/blade-bytesize-icons # <x-bytesize-menu />
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons # <x-bi-x />
&nbsp; - composer require codeat3/blade-microns # <x-microns-right />

&nbsp; -PAYMENT ICONS--

&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-apple-pay />
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-visa />
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-discover />
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-mastercard />
&nbsp; - composer require andreiio/blade-remix-icon # <x-ri-visa-line />
&nbsp; - composer require owenvoke/blade-fontawesome # <x-fab-apple-pay /> # <x-fab-google-pay /> # <x-fab-cc-amazon-pay />
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-paypal />
&nbsp; - composer require codeat3/blade-simple-icons # <x-si-discover />

&nbsp; -SOCIAL MEDIA ICONS-

&nbsp; - composer require owenvoke/blade-entypo # <x-entypo-facebook />
&nbsp; - composer require codeat3/blade-forkawesome # <x-forkawesome-twitter-square />
&nbsp; - composer require andreiio/blade-remix-icon # <x-ri-instagram-fill />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

-DATABASE SQL-

INSERT INTO categories (id, name, slug, created_at, updated_at)
VALUES
(1, 'Knives & Hatchets', 'knives-hatchets', NOW(), NOW()),
(2, 'Sleep', 'sleep', NOW(), NOW()),
(3, 'Packs', 'packs', NOW(), NOW()),
(4, 'Tents', 'tents', NOW(), NOW()),
(5, 'Fire & Survival', 'fire-survival', NOW(), NOW());
