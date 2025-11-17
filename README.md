<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

&nbsp; All images on google.drive (soon link)

&nbsp; - docker-compose up -d --build

&nbsp; - docker exec -it surv_gear_system bash

&nbsp; - composer install
&nbsp; - npm install
&nbsp; - npm run dev

&nbsp; - cp .env.example .env

&nbsp; - php artisan key:generate
&nbsp; - php artisan storage:link
&nbsp; - php artisan migrate

&nbsp; - Help commands

&nbsp; php artisan route:list
&nbsp; php artisan view:clear
&nbsp; php artisan config:clear
&nbsp; php artisan route:clear
&nbsp; php artisan cache:clear
&nbsp; php artisan storage:link

&nbsp; &nbsp; &nbsp; -ICONS-

&nbsp; - composer require blade-ui-kit/blade-icons

&nbsp; - composer require codeat3/blade-carbon-icons # <x-carbon-user /> &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon # <x-ri-arrow-down-s-line /> &nbsp;
&nbsp; - composer require codeat3/blade-bytesize-icons # <x-bytesize-menu /> &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons # <x-bi-x /> &nbsp;
&nbsp; - composer require codeat3/blade-microns # <x-microns-right /> &nbsp;
&nbsp; - composer require codeat3/blade-teeny-icons # <x-tni-left-small-o /> &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons # <x-bi-shield-fill /> &nbsp;
&nbsp; - composer require owenvoke/blade-entypo # <x-entypo-compass /> &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons # <x-bi-lightning-charge-fill /> &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon # <x-ri-tools-fill /> &nbsp;
&nbsp; - composer require secondnetwork/blade-tabler-icons # <x-tabler-tools /> &nbsp;
&nbsp; - composer require mallardduck/blade-boxicons # <x-bx-world /> &nbsp;
&nbsp; - composer require codeat3/blade-iconpark # <x-iconpark-tentbanner-o /> &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons # <x-bi-check /> &nbsp;
&nbsp; - composer require blade-ui-kit/blade-heroicons # <x-heroicon-o-plus /> &nbsp;
&nbsp; - composer require codeat3/blade-google-material-design-icons # <x-gmdi-local-shipping-r /> &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons # <x-bi-box-fill /> &nbsp;
&nbsp; - composer require codeat3/blade-ant-design-icons # <x-antdesign-safety-certificate /> &nbsp;
&nbsp; - blade-ui-kit/blade-heroicons # <x-heroicon-o-minus /> &nbsp;
&nbsp; - blade-ui-kit/blade-heroicons # <x-heroicon-s-star /> &nbsp;

&nbsp; -PAYMENT ICONS--

&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-apple-pay /> &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-visa /> &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-discover /> &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-mastercard /> &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon # <x-ri-visa-line /> &nbsp;
&nbsp; - composer require owenvoke/blade-fontawesome # <x-fab-apple-pay /> # <x-fab-google-pay /> # <x-fab-cc-amazon-pay /> &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons # <x-fontisto-paypal /> &nbsp;
&nbsp; - composer require codeat3/blade-simple-icons # <x-si-discover /> &nbsp;

&nbsp; -SOCIAL MEDIA ICONS-

&nbsp; - composer require owenvoke/blade-entypo # <x-entypo-facebook /> &nbsp;
&nbsp; - composer require codeat3/blade-forkawesome # <x-forkawesome-twitter-square /> &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon # <x-ri-instagram-fill /> &nbsp;

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

INSERT INTO products (category_id, name, slug, description, short_desc, short_desc_2, price, image, second_image, created_at, updated_at)
VALUES

(1, 'Fixed Blade Knife', 'fixed-blade-knife' 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
24.99, 'images/knives-hatchets/fixed-blade-knife.webp', '', NOW(), NOW()),
&nbsp;

(1, 'Utility Tool', 'utility-tool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
29.99, 'images/knives-hatchets/utility-tool.webp', 'utility-tool-info.webp', NOW(), NOW()),
&nbsp;

(3, 'Hiking Hydration 30L', 'hiking-hydration-30L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
59.99, 'images/backpacks/backpack-1.webp', 'backpack-1-info.webp', NOW(), NOW());
&nbsp;

(4, '1 Person Hiking tent', '1-person-hiking-tent', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
80, 'images/tents/1-person-hiking-tent.webp', '', NOW(), NOW());
&nbsp;

(1, 'Paracord Hatchet', 'paracord-hatchet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
29.99, 'images/knives-hatchets/paracord-hatchet.webp', '', NOW(), NOW());
&nbsp;

(2, 'Sleeping Bag', 'sleeping-bag', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
89.99, 'images/sleep/sleeping-bag-15.webp', '', NOW(), NOW());
&nbsp;

(5, 'Micro Sparker', 'micro-sparker', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
89.99, 'images/survival/micro-sparker.webp', '', NOW(), NOW());
&nbsp;

(1, 'Axe Multitool Hammer', 'axe-multitool-hammer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
45, 'images/knives-hatchets/axe-multitool.webp', '', NOW(), NOW());
&nbsp;

(1, 'Folding Blade Knife', 'folding-blade-knife', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
24.99, 'images/knives-hatchets/folding-blade.webp', '', NOW(), NOW());
&nbsp;

(3, 'Hiking Hydration 45L', 'hydration-45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur', 69.99, 'images/backpacks/backpack-2.webp', '', NOW(), NOW());
