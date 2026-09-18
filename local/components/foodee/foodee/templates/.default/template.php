<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div id="fh5co-home" class="js-fullheight" data-section="home">

    <div class="flexslider">

        <div class="fh5co-overlay"></div>
        <div class="fh5co-text">
            <div class="container">
                <div class="row">
                    <h1 class="to-animate"><?= $arResult['TITLE'] ?></h1>
                    <h2 class="to-animate">Lovely Designed <span>by</span> <a href="<?= $arResult['LINK'] ?>"
                                                                              target="_blank"><?= $arResult['TEXT_LINK'] ?></a>
                    </h2>
                </div>
            </div>
        </div>
        <ul class="slides">
            <?
            foreach ($arResult['BG_IMAGES'] as $IMAGE): ?>
                <li style="background-image: url(<?= $IMAGE ?>);" data-stellar-background-ratio="0.5"></li>
            <?
            endforeach; ?>
        </ul>

    </div>

</div>












