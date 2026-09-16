<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="fh5co-featured" data-section="features" style="--bg-img: url(<?=$arResult['BACKGROUND']?>);">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate" style="--icon: url(<?=$arResult['ICON']?>);"><?=$arResult['TITLE']?></h2>
                <p class="sub-heading to-animate"><?=$arResult['PREVIEW_TEXT']?></p>
            </div>
        </div>

        <div class="row">
            <div class="fh5co-grid">
        <? foreach ($arResult['DISHES'] as $key => $DISHES):?>
            <? if($key == 'TOP_BIG'): ?>

            <div class="fh5co-v-half to-animate-2">
                    <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=$DISHES['PREVIEW_PICTURE']?>)"></div>
                    <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                        <h2><?=$DISHES['NAME']?></h2>
                        <span class="pricing">$<?= number_format((float)$DISHES['PRICE'], 2, '.', '') ?></span>
                        <p><?=$DISHES['PREVIEW_TEXT']?></p>
                    </div>
                </div>
            <? elseif($key == 'TOP_SMALL'): ?>

            <div class="fh5co-v-half">
                    <div class="fh5co-h-row-2 to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=$DISHES[0]['PREVIEW_PICTURE']?>)"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-left">
                            <h2><?=$DISHES[0]['NAME']?></h2>
                            <span class="pricing">$<?= number_format((float)$DISHES[0]['PRICE'], 2, '.', '') ?></span>
                            <p><?=$DISHES[0]['PREVIEW_TEXT']?>.</p>
                        </div>
                    </div>
                    <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=$DISHES[1]['PREVIEW_PICTURE']?>)"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-right">
                            <h2><?=$DISHES[1]['NAME']?></h2>
                            <span class="pricing">$<?= number_format((float)$DISHES[1]['PRICE'], 2, '.', '') ?></span>
                            <p><?=$DISHES[1]['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
                </div>
                <? elseif($key == 'BOTTOM_SMALL'): ?>
                <div class="fh5co-v-half">
                    <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=$DISHES[0]['PREVIEW_PICTURE']?>)"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-right">
                            <h2><?=$DISHES[0]['NAME']?></h2>
                            <span class="pricing">$<?= number_format((float)$DISHES[0]['PRICE'], 2, '.', '') ?></span>
                            <p><?=$DISHES[0]['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
                    <div class="fh5co-h-row-2 to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=$DISHES[1]['PREVIEW_PICTURE']?>)"></div>
                        <div class="fh5co-v-col-2 fh5co-text arrow-left">
                            <h2><?=$DISHES[1]['NAME']?></h2>
                            <span class="pricing">$<?= number_format((float)$DISHES[1]['PRICE'], 2, '.', '') ?></span>
                            <p><?=$DISHES[1]['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
                </div>
                <? elseif($key == 'BOTTOM_BIG'): ?>
                <div class="fh5co-v-half to-animate-2">
                    <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=$DISHES['PREVIEW_PICTURE']?>)"></div>
                    <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                        <h2><?=$DISHES['NAME']?></h2>
                        <span class="pricing">$<?= number_format((float)$DISHES['PRICE'], 2, '.', '') ?></span>
                        <p><?=$DISHES['PREVIEW_TEXT']?></p>
                    </div>
                </div>
                <? endif; ?>

        <? endforeach; ?>







            </div>
        </div>

    </div>
</div>

<?
/*foreach ($arResult['DISHES'] as $key => $DISH){
    if($key = 'TOP_BIG'){
        echo $key.'--'.$DISH['NAME'];
    } elseif ($key = 'TOP_SMALL'){
		echo $key.'--'.$DISH[0]['NAME'];
		echo $key.'--'.$DISH[1]['NAME'];
    } elseif ($key = 'BOTTOM_SMALL'){
		echo $key.'--'.$DISH[0]['NAME'];
		echo $key.'--'.$DISH[1]['NAME'];
    } elseif ($key =)
}*/

?>

<? debug($arResult); ?>










