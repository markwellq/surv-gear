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
&nbsp; - composer require codeat3/blade-teeny-icons # <x-tni-left-small-o />

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

&nbsp;&nbsp;

INSERT INTO products (category_id, name, description, short_desc, short_desc_2, price, image, second_image, created_at, updated_at)
VALUES
(1, 'Fixed Blade Knife', 'Conquer any terrain with this fearless fixed blade knife! The half-serrated edge and drop point blade offer versatile cutting power, while the textured rubber grip ensures a steady hold. Equipped with a sheath and belt loop for easy carrying. Built with full tang construction for maximum durability. Go boldly where others fear to venture!',
'Total length: 9", Blade length 4.8"',
'Includes sheath with belt loop',
24.99, 'fixed-blade-knife.webp', '', NOW(), NOW()),

(1, 'Utility Tool', 'Take risks and tackle any challenge with our Utility Tool! This compact multitool includes a knife blade, saw, pliers, screwdrivers, files, and can opener. Conveniently carry it with you using the included sheath and belt loop. Be bold, be prepared, and be ready for anything!',
'Tools included: Knife Blade, Mini Saw, Needle Nose Pliers, Standard Pliers, Wire Cutters, Phillips Screwdriver, Large and Medium Flathead Screwdrivers, Two kinds of files, Can Opener',
'Made of 2CR13 steel tools and a sturdy aluminum frame.',
29.99, 'utility-tool.webp', 'utility-tool-info.webp', NOW(), NOW()),

(3, 'Hiking Hydration 30L', 'The Bear Grylls 30L Hiking Backpack is built for rugged outdoor adventures. Featuring a 2L hydration bladder, durable design, and an included rain cover, it keeps you ready for any trail or weather. Lightweight yet tough, this backpack is perfect for hiking, camping, or travel.',
'Includes 2L water bladder with tube, Rain Cover',
'Weight (with bladder) 2.3 lbs',
59.99, 'backpack-1.webp', 'backpack-1-info.webp', NOW(), NOW());
