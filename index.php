<?php
require(__DIR__.'/vendor/autoload.php');
use CoffeeCode\Cropper\Cropper;
use Faker\Factory;

$faker = Factory::create("pt-br");
$generate = true;

if(!$generate){
    for ($i = 0; $i < 3; $i++) {
       $faker->image(__DIR__.'/images',600,300);
    }
}
$c = new Cropper('images/cache');

for ($i = 1; $i < 4; $i++) { ?>
   <article>
       <h2>Imagem <?= $i ?></h2>
       <img src="images/<?= $i ?>.jpg" alt="">
       <img src="<?= $c->make('images/'.$i.'.jpg',150) ?>" alt="">
       <img src="<?= $c->make('images/'.$i.'.jpg',300,150) ?>" alt="">
<!--       <img src="--><?//= $c->make('images/'.$i.'.jpg',150) ?><!--" alt="">-->
   </article>
<?php }

//$c->flush();
