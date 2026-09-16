<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? use Bitrix\Main\Page\Asset; ?>

</div>

<div id="fh5co-footer">
	<div class="container">
		<div class="row row-padded">
			<div class="col-md-12 text-center">
				<p class="to-animate">&copy; 2016 Foodee Free HTML5 Template. <br> Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://pexels.com/" target="_blank">Pexels</a> <br> Tasty Icons Free <a href="http://handdrawngoods.com/store/tasty-icons-free-food-icons/" target="_blank">handdrawngoods</a>
				</p>
				<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<ul class="fh5co-social">
					<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
					<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
					<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.min.js") ?>
<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.easing.1.3.js") ?>
<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.min.js") ?>
<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/moment.js") ?>
<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap-datetimepicker.min.js") ?>
<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.waypoints.min.js") ?>
<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.stellar.min.js") ?>
<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.flexslider-min.js") ?>

<script>
    $(function () {
        $('#date').datetimepicker();
    });
</script>

<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js") ?>

</body>
</html>
