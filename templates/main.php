<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
           <!--заполните этот список из массива категорий +++ -->
           <?php
           $categories = [
                'boards' => 'Доски и лыжи' ,
                'attachment' => 'Крепления' ,
                'boots' => 'Ботинки' ,
                'clothing' => 'Одежда' ,
                'tools' => 'Инструменты' ,
                'other' => 'Разное'
            ];
            ?>
            <?php foreach ($categories as $key => $category): ?>
                <li class="promo__item promo__item--<?= $key; ?>">
                <a class="promo__link" href="/pages/all-lots.html"><?= $category ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами +++ -->
            <?php
            $product = [
                [
                'title' => '2014 Rossignol District Snowboard' ,
                'category' => 'Доски и лыжи' ,
                'cost' => '10999' ,
                'url' => '../img/lot-1.jpg'
                ],

                [
                'title' => 'DC Ply Mens 2016/2017 Snowboard' ,
                'category' => 'Доски и лыжи' ,
                'cost' => '159999' ,
                'url' => '../img/lot-2.jpg'
                ],

                [
                'title' => 'Крепления Union Contact Pro 2015 года размер L/XL' ,
                'category' => 'Крепления' ,
                'cost' => '8000' ,
                'url' => '../img/lot-3.jpg'
                ],

                [
                'title' => 'Ботинки для сноуборда DC Mutiny Charocal' ,
                'category' => 'Ботинки' ,
                'cost' => '10999' ,
                'url' => '../img/lot-4.jpg'
                ],
                
                [
                'title' => 'Куртка для сноуборда DC Mutiny Charocal' ,
                'category' => 'Одежда' ,
                'cost' => '7500' ,
                'url' => '../img/lot-5.jpg'
                ],

                [
                'title' => 'Маска Oakley Canopy' ,
                'category' => 'Разное' ,
                'cost' => '5400' ,
                'url' => '../img/lot-6.jpg'
                ],

            ];
            ?>
            <?php foreach ($product as $key => $value): ?>
        
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $value['url']; ?>" width="350" height="260" alt="Тут должно быть фото">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $value['category']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= $value['title']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <!--Функция тут +++ -->
                            <span class="lot__cost"><?= lot_cost($value['cost']) ?></b></span>
                        </div>
                        <div class="lot__timer timer">
                            12:23
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>   