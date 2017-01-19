<!DOCTYPE html>
<?php 
if(isset($_GET["lang"])){
	$lang =htmlspecialchars($_GET["lang"]);
}
else{
	$lang="ru";
}
if($lang=="ru")
include 'ru.php';
else
include 'en.php';
?>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Test Project</title>
<base href="http://testhotel.kara-yazilim.com" />
<meta name="description" content="test before interview" />
<meta name="keywords" content= "test" />
<script src="jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="scss.css" rel="stylesheet">

</head>
<body>
<div class="col-sm-12" id="main">
<div class="col-md-12" id="header">
<div class="col-xs-12 col-sm-12 col-md-3" id="logo"> 
	<a href="http://testhotel.kara-yazilim.com">Logotype</a>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="menu">
	<div class="col-xs-3 col-sm-3 col-md-3"><a href="http://testhotel.kara-yazilim.com"><?php echo $menu1; ?></a></div>
	<div class="col-xs-3 col-sm-3 col-md-3"><a href="http://testhotel.kara-yazilim.com"><?php echo $menu2; ?></a></div>
	<div class="col-xs-3 col-sm-3 col-md-3"><a href="http://testhotel.kara-yazilim.com"><?php echo $menu3; ?></a></div>
	<div class="col-xs-3 col-sm-3 col-md-3"><a href="http://testhotel.kara-yazilim.com"><?php echo $menu4; ?> </a> </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="menu">
	<div class="col-xs-12 col-sm-12 col-md-6" style="text-align: center;">8 (800) 600 90 90</div>
	<div class="col-xs-12 col-sm-12 col-md-6" id="lang-section">	
	<a href="http://testhotel.kara-yazilim.com/?lang=ru" <?php if($lang=="ru") { ?> style="border: solid 1px #fff;"<?php } ?>>RU</a>
    <a href="http://testhotel.kara-yazilim.com/?lang=en" <?php if($lang=="en") { ?> style="border: solid 1px #fff;"<?php } ?>>EN</a>
	</ul>
	</div>
</div>
</div>
<div class="container">
<div class="col-xs-12 col-sm-12 col-md-12" id="main-content">
<div class="col-xs-12 col-sm-12 col-md-8">
<?php echo $maincontent; ?>
</div>
<div class="col-xs-12 col-sm-12 col-md-6" id="main-content-description">
<?php echo $maincontentdesc; ?>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="main-content-bottom">
<?php echo $maincontentbottom; ?>
<div class="col-xs-12 col-sm-12 col-md-12" >
<img src="http://testhotel.kara-yazilim.com/images/seperator.jpg"></img></div>
</div>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12" id="what-we-do">
<div class="col-md-12" id="wwd-caption">Что мы делаем</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="wwd-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="image-1">
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="caption">Аналитика</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="description">
Консалтинг и аудит сайтов. Увеличим конверсию сайта компании, эффективность последующих рекламных кампаний за счет выявления и устранения технических и маркетинговых ошибок.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="wwd-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="image-2">
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="caption">Стратегия</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="description">
Мы объединяем стратегическое мышление с дизайном для создания эффективной коммуникации с вашим брендом в онлайн-среде. Разработаем коммуникационные, медиа- и digital-стратегии. Составим план развития на год вперед.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="wwd-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="image-3">
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="caption">SMM</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="description">
Разрабатываем стратегию присутствия в new медиа, активации в социальных сетях, создаем контент-планы, обеспечиваем коммьюнити-менеджмент, работаем с блогерами, внедряем Social CRM, интегрируем банковский сервис в Facebook.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-2"></div>
<div class="col-xs-12 col-sm-12 col-md-4" id="wwd-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="image-4">
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="caption">Технологии и продакшн</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="description">
Проектируем и разрабатываем корпоративные сайты на платформе 1С-Битрикс, мобильные приложения, веб-интерфейсы, в том числе интернет-банкинг и личные кабинеты. Обеспечиваем поддержку 24/7 и дальнейшее развитие вашего интернет-пространства.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="wwd-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="image-5">
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="caption">Дизайн</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="description">
Разработка дизайна любого уровня и сложности: адаптивный дизайн, дизайн мобильных приложений, создание UI Framework c возможностью дальнейшей миграции на любые платформы. 
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="main-content-bottom">
Подробнее
<div class="col-xs-12 col-sm-12 col-md-12" >
<img src="http://testhotel.kara-yazilim.com/images/seperator.jpg"></img></div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12" id="gazprom">
<div class="col-xs-12 col-sm-12 col-md-7" style="margin-left: -30px; margin-top: 50px; margin-right: 30px; z-index: 2;">
<img src="http://testhotel.kara-yazilim.com/images/gazpromsite.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="gp-info-caption">
ПАО «Газпром»
<div class="col-xs-12 col-sm-12 col-md-12" id="gp-info-desc">
— Веб-сайт
</div>
<div class="col-xs-12 col-sm-12 col-md-8" id="gp-info-button">
Смотреть проект ->
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="tinkoff">
<div class="col-xs-12 col-sm-12 col-md-1"></div>
<div class="col-xs-12 col-sm-12 col-md-3" id="tf-info-caption">
Тинькофф Банк
<div class="col-xs-12 col-sm-12 col-md-12" id="tf-info-desc">
— Брендинг</br>
— UI/UX дизайн</br>
— Разработка мобильного приложения для iOS</br>
— Веб-сайт</br>

</div>
<div class="col-xs-12 col-sm-12 col-md-8" id="tf-info-button">
Смотреть проект ->
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-8" style="margin-left: -30px; margin-top: 50px; z-index: 1;">
<img src="http://testhotel.kara-yazilim.com/images/phone.png" class="img-responsive"></img>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="adidas">
<div class="col-xs-12 col-sm-12 col-md-6" style="margin-left: -30px; margin-top: 50px;">
<img src="http://testhotel.kara-yazilim.com/images/monitor.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-1"></div>
<div class="col-xs-12 col-sm-12 col-md-5" id="ad-info-caption">
Adidas
<div class="col-xs-12 col-sm-12 col-md-12" id="ad-info-desc">
— Веб-сайт</br>
— Разработка мобильного приложения для iOS, Android и Windows
</div>
<div class="col-xs-12 col-sm-12 col-md-8" id="ad-info-button">
Смотреть проект ->
</div>
</div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="all">
<div class="col-xs-12 col-sm-12 col-md-4"></div>
<div class="col-xs-12 col-sm-12 col-md-4" id="all-info-button">
Все наши проекты ->
</div>
<div class="col-xs-12 col-sm-12 col-md-4"></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits">
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-caption">
<div class="col-xs-2 col-sm-2 col-md-6"></div>
<div class="col-xs-8 col-sm-8 col-md-6" id="benefits-text">
</br></br></br></br>причин работать с нами
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="benefits-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-caption">
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div><div class="col-xs-10 col-sm-10 col-md-10">Профессионализм</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-description">
Мы нацелены развить ваш бизнес за счет технических решений, а не просто выполнить техническое задание.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="benefits-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-caption">
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div><div class="col-xs-10 col-sm-10 col-md-10">Актуальность решений</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-description">
Мы заботимся о том, чтобы ваш продукт оставался актуальным долгие годы, разрабатывая адаптивные и масштабируемые решения.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="benefits-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-caption">
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div><div class="col-xs-10 col-sm-10 col-md-10">Победы</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-description">
На нашем счету более 30 призовых мест в российских и международных ведущих отраслевых конкурсах веб-разработки.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="benefits-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-caption">
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div><div class="col-xs-10 col-sm-10 col-md-10">Прозрачность</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-description">
Сроки и бюджет разработки открыты и предсказуемы — мы заботимся об этом еще на этапе подписания договора.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="benefits-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-caption">
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div><div class="col-xs-10 col-sm-10 col-md-10">Опыт работы с highload проектами</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-description">
Мы разрабатываем веб-сервисы, способные выдерживать высокие нагрузки (до 10000 запросов/сек) и обеспечивать поддержку растущего количества пользователей.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="benefits-item">
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-caption">
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div><div class="col-xs-10 col-sm-10 col-md-10">Использование fullstack технологий</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="benefits-item-description">
Мы открыты к новым технологиям, понимаем каждую из них и имеем представление о том, как развить веб-приложение от стадии проектирования до готового продукта.
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="clients">
<div class="col-xs-12 col-sm-12 col-md-12" id="clients-caption">
Наши клиенты
</div><div class="col-xs-12 col-sm-12 col-md-1"></div>
<div class="col-xs-12 col-sm-12 col-md-10" id="clients-items">
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/tinkoff.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/gazprom.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/mu.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/hermitaj.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/moleskine.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/starbucks.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/audi.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/adidas.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/ginza.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/oscar.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/alfa.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" id="clients-item">
<img src="http://testhotel.kara-yazilim.com/images/showtime.png" class="img-responsive"></img>
</div>
</div>
</div>
<div class="col-xs-3 col-sm-3 col-md-3"></div>
<div class="col-xs-6 col-sm-6 col-md-6" id="speach">
<div class="col-xs-5 col-sm-5 col-md-5"></div>
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div>
<div class="col-xs-5 col-sm-5 col-md-5"></div>
<div class="col-xs-12 col-sm-12 col-md-12" id="speach-text">
Нам часто говорят: «Это лучше, чем я мог представить». Мы отвечаем, что это просто хорошая работа.
</div>
<div class="col-xs-5 col-sm-5 col-md-5"></div>
<div class="col-xs-2 col-sm-2 col-md-2"><hr></div>
<div class="col-xs-5 col-sm-5 col-md-5"></div>
</div>
<div class="col-xs-3 col-sm-3 col-md-3"></div>
<div class="col-xs-10 col-sm-10 col-md-10" id="reviews" style="overflow:hidden;">
<div class="col-xs-10 col-sm-10 col-md-10" id="review">
<div class="col-xs-10 col-sm-10 col-md-10" id="review1">
<div class="col-xs-12 col-sm-12 col-md-8" id="review-video">
<div class="col-xs-12 col-sm-12 col-md-12" >
<img src="http://testhotel.kara-yazilim.com/images/review.png" class="img-responsive" style="z-index:1; position:absolute;"></img></div>
<div class="col-xs-12 col-sm-12 col-md-12"  id="play-button">
<img src="http://testhotel.kara-yazilim.com/images/play.png" class="img-responsive"></img>
<div class="col-xs-12 col-sm-12 col-md-12" id="review-video-text">
Отзыв клиента
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="review-info">
<div class="col-xs-12 col-sm-12 col-md-12" id="review-text">
<div class="col-xs-12 col-sm-12 col-md-12" id="review-text-caption">
Говард Шульц 
</div>
<div class="col-xs-10 col-sm-10 col-md-10" id="review-text-description">
председатель совета директоров, главный управляющий и президент компании Starbucks
</div>
</div>
</div>
</div>
<div class="col-xs-10 col-sm-10 col-md-10" id="review2">
<div class="col-xs-12 col-sm-12 col-md-8" id="review-video">
<div class="col-xs-12 col-sm-12 col-md-12" >
<img src="http://testhotel.kara-yazilim.com/images/review.png" class="img-responsive" style="z-index:1; position:absolute;"></img></div>
<div class="col-xs-12 col-sm-12 col-md-12"  id="play-button">
<img src="http://testhotel.kara-yazilim.com/images/play.png" class="img-responsive"></img>
<div class="col-xs-12 col-sm-12 col-md-12" id="review-video-text">
Отзыв клиента
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-4" id="review-info">
<div class="col-xs-12 col-sm-12 col-md-12" id="review-text">
<div class="col-xs-12 col-sm-12 col-md-12" id="review-text-caption">
Говард Шульц 
</div>
<div class="col-xs-10 col-sm-10 col-md-10" id="review-text-description">
председатель совета директоров, главный управляющий и президент компании Starbucks
</div>
</div>

</div>
</div>
</div>
</div>
<div class="col-xs-2 col-sm-2 col-md-2" id="review-right">
<img src="http://testhotel.kara-yazilim.com/images/right.png" class="img-responsive"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="footer">
<div class="col-xs-12 col-sm-12 col-md-12" id="footer-text">
Вы уже хотите пообщаться с нами?
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="footer-mail">
hello@iwant.com
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="footer-phone">
8 (800) 600 90 90
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" id="footer-social">
<div class="col-xs-12 col-sm-12 col-md-4">

</div>
<div class="col-xs-12 col-sm-12 col-md-4" >
<div class="col-xs-12 col-sm-12 col-md-3" >
<img src="http://testhotel.kara-yazilim.com/images/behance.png" class="img-responsive" id="footer-bh"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" >
<img src="http://testhotel.kara-yazilim.com/images/dribble.png" class="img-responsive" id="footer-dr"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" >
<img src="http://testhotel.kara-yazilim.com/images/vk.png" class="img-responsive" id="footer-vk"></img>
</div>
<div class="col-xs-12 col-sm-12 col-md-3" >
<img src="http://testhotel.kara-yazilim.com/images/fb.png" class="img-responsive" id="footer-fb"></img>
</div>
</div>
</div>
<script>
	$( "#footer-fb" )
  .mouseenter(function() {
   $("#footer-fb").attr("src","http://testhotel.kara-yazilim.com/images/fb-hover.png");
  })
  .mouseleave(function() {
    $("#footer-fb").attr("src","../images/fb.png");
  });
  $( "#footer-bh" )
  .mouseenter(function() {
   $("#footer-bh").attr("src","http://testhotel.kara-yazilim.com/images/behance-hover.png");
  })
  .mouseleave(function() {
    $("#footer-bh").attr("src","../images/behance.png");
  });
  $( "#footer-vk" )
  .mouseenter(function() {
   $("#footer-vk").attr("src","http://testhotel.kara-yazilim.com/images/vk-hover.png");
  })
  .mouseleave(function() {
    $("#footer-vk").attr("src","../images/vk.png");
  });
  $( "#footer-dr" )
  .mouseenter(function() {
   $("#footer-dr").attr("src","http://testhotel.kara-yazilim.com/images/dribble-hover.png");
  })
  .mouseleave(function() {
    $("#footer-dr").attr("src","../images/dribble.png");
  });
</script>
<script> 
$(document).ready(function(){
		var $next=0;
		
        $("#reviews").width($(window).width()/12*9);
		
		if($(window).width()>768){
			$('[id=review-text]').each(function(){$(this).height(100);});
			$("#reviews").height($("#reviews").width()/2);
		}
		else {
			$('[id=review-text]').each(function(){$(this).height(220)});
			$("#reviews").height($("#reviews").width());
		}
		$("#review").width($(window).width()/12*10*2);
		$("#review1").width($(window).width()/12*9);
		$("#review2").width($(window).width()/12*9);
		$("#review-right").click(function(){
			if($next>=($(window).width()/12*9)*2){
				$("#review").animate({right:0})
				$next=0;
			}
			else{
				$("#review").animate({right: $next+($(window).width()/12*9)});
				$next=$next+($(window).width()/12*9);
			}
    });
});
</script> 
</body>