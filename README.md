<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
  Modern Laravel fullstack project • Portfolio showcase • Dockerized environment
</p>

## UI Preview

<p align="center">
  <img src="public/design.png" width="900" alt="Preview">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-Framework-red" />
  <img src="https://img.shields.io/badge/Docker-Environment-blue" />
  <img src="https://img.shields.io/badge/Status-Portfolio-success" />
</p>

---

## ⚠️ Disclaimer

This project was created for **portfolio/CV purposes only**.

All images, icons, and design resources used in this project belong to their respective owners  
and are used for **demonstration and educational purposes only**, not for commercial use.

If you are a rights holder and want any content removed, please contact me.

---

## Commands, mysql, other

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

&nbsp; - composer require codeat3/blade-carbon-icons ##
&nbsp; **x-carbon-user** &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon ##
&nbsp; **x-ri-arrow-down-s-line** &nbsp;
&nbsp; - composer require codeat3/blade-bytesize-icons ##
&nbsp; **x-bytesize-menu** &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons ##
&nbsp; **x-bi-x** &nbsp;
&nbsp; - composer require codeat3/blade-microns ##
&nbsp; **x-microns-right** &nbsp;
&nbsp; - composer require codeat3/blade-teeny-icons ##
&nbsp; **x-tni-left-small-o** &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons ##
&nbsp; **x-bi-shield-fill** &nbsp;
&nbsp; - composer require owenvoke/blade-entypo ##
&nbsp; **x-entypo-compass** &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons ##
&nbsp; **x-bi-lightning-charge-fill** &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon ##
&nbsp; **x-ri-tools-fill** &nbsp;
&nbsp; - composer require secondnetwork/blade-tabler-icons ##
&nbsp; **x-tabler-tools** &nbsp;
&nbsp; - composer require mallardduck/blade-boxicons ##
&nbsp; **x-bx-world** &nbsp;
&nbsp; - composer require codeat3/blade-iconpark ##
&nbsp; **x-iconpark-tentbanner-o** &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons ##
&nbsp; **x-bi-check** &nbsp;
&nbsp; - composer require blade-ui-kit/blade-heroicons ##
&nbsp; **x-heroicon-o-plus** &nbsp;
&nbsp; - composer require codeat3/blade-google-material-design-icons ##
&nbsp; **x-gmdi-local-shipping-r** &nbsp;
&nbsp; - composer require davidhsianturi/blade-bootstrap-icons ##
&nbsp; **x-bi-box-fill** &nbsp;
&nbsp; - composer require codeat3/blade-ant-design-icons ##
&nbsp; **x-antdesign-safety-certificate** &nbsp;
&nbsp; - blade-ui-kit/blade-heroicons ##
&nbsp;**x-heroicon-o-minus** &nbsp;
&nbsp; - blade-ui-kit/blade-heroicons ##
&nbsp; **x-heroicon-s-star** &nbsp;

&nbsp; -PAYMENT ICONS--

&nbsp; - composer require codeat3/blade-fontisto-icons ##
&nbsp; **x-fontisto-apple-pay** &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons ##
&nbsp; **x-fontisto-visa** &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons ## &nbsp;
&nbsp; **x-fontisto-discover** &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons ## &nbsp;
&nbsp; **x-fontisto-mastercard** &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon ## &nbsp;
&nbsp; **x-ri-visa-line** &nbsp;
&nbsp; - composer require owenvoke/blade-fontawesome ## &nbsp;
&nbsp; **x-fab-apple-pay** #, **x-fab-google-pay** #, **x-fab-cc-amazon-pay** &nbsp;
&nbsp; - composer require codeat3/blade-fontisto-icons ## &nbsp;
&nbsp; **x-fontisto-paypal** &nbsp;
&nbsp; - composer require codeat3/blade-simple-icons ## &nbsp;
&nbsp; **x-si-discover** &nbsp;

&nbsp; -SOCIAL MEDIA ICONS-

&nbsp; - composer require owenvoke/blade-entypo ## **x-entypo-facebook** &nbsp;
&nbsp; - composer require codeat3/blade-forkawesome ## **x-forkawesome-twitter-square** &nbsp;
&nbsp; - composer require andreiio/blade-remix-icon ## **x-ri-instagram-fill** &nbsp;

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

&nbsp;
&nbsp; [OLD COMMAND TO NEW COMMAND]!!!! Attention, At the stage after creating the database, I added discount, discount_price

INSERT INTO products
(category_id, name, slug, description, short_desc, short_desc_2, price, image, discount, discount_price, second_image, created_at, updated_at)
VALUES

&nbsp;&nbsp;

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
&nbsp;

(2,
'Sleeping Pad',
'sleeping-pad',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
39.99,
'images/sleep/inflatable-sleeping-pad.webp',
0,  
 0.00,
NULL,
NOW(), NOW());
&nbsp;

(2,
'Sleeping Pad',
'sleeping-pad',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
39.99,
'images/sleep/inflatable-sleeping-pad.webp',
0,  
 0.00,
NULL,
NOW(), NOW());
&nbsp;

(4,
'2 Person Hiking Tent',
'2-person-hiking-tent',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
99.99,
'images/sleep/inflatable-sleeping-pad.webp',
0,  
0.00,
NULL,
NOW(), NOW());
&nbsp;

(
4,
'4 Person Hiking Tent',
'4-person-hiking-tent',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
119.99,
'images/tents/4-person-tent.webp',
0,
0.00,
NULL,
NOW(),
NOW()
);
&nbsp;

(
4,
'2 Person Pop Up Tent',
'2-person-tent',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
79.99,
'images/tents/2-person-tent.webp',
0,
0.00,
NULL,
NOW(),
NOW()
);
&nbsp;

(
3,
'Hiking Hydration 65L',
'hiking-hydration-65',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et aliquam tellus, tincidunt feugiat arcu. Maecenas in felis nec est blandit vestibulum. Morbi at imperdiet nisi. Nam vitae sapien consequat, consequat turpis ut, consequat sapien. Aenean tempor iaculis magna, nec congue elit rhoncus id. Donec vel magna nisl. Duis et lectus a velit pulvinar vulputate.',
'Lorem ipsum dolor sit amet, consectetur',
'Lorem ipsum dolor sit amet, consectetur',
69.99,
'images/backpacks/backpack-3.webp',
0,
0.00,
NULL,
NOW(),
NOW()
);
