<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu">
	<head>
		<title>exitpoint</title>
		
		<META name="viewport" content="width=device-width , initial-scale=0.6, maximum-scale=0.6; user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="language" content="Hungarian, English, Spanish" />
		<meta name="doc-type" content="HTML5" />
		<meta name="doc-class" content="Published" />
		<meta name="distribution" content="Global" />
		<meta name="resource-type" content="document" />
		
		<meta name="revisit-after" content="5 days" />
		<meta name="robots" content="index,follow" />
		<meta name="author" content="www.fustos.com" />
		<meta name="copyright" content="Copyright (c) 2011 fustos.com" />
		
		<meta name="description" content="">
		<meta name="keywords" content="">
		
		<link type="image/ico" rel="Shortcut Icon" href="images/favicon.ico"> 

        
		<!--[if IE 9]>
			<link href="styles/ie9.css" rel="stylesheet" />
		<![endif]-->
		
		<script type="text/javascript">
                    var log = function(e){/*console.log(e)*/};
                    var _gaq = _gaq || [];
                    _gaq.push(['_setAccount', 'UA-20538971-2']);
                    _gaq.push(['_trackPageview']);

                    (function() {
                            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                    })();
                </script>
                <style type="text/css">
					html, body {
						min-height:690px;
						min-width:990px;
/*						overflow:hidden;*/
					}
                    body { visibility:hidden; background:#131718; }
                    #home { 
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/EP_web_madness_2_backs_rolunk.jpg)no-repeat center;
					}
					#introduction {
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/EP_web_madness_2_nyitolap.jpg)no-repeat center;
					}
					#cv {
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/EP_web_madness_2_backs_info.jpg)no-repeat center;
					}
					.akciokClass {
						display:none;
					}
					#akciok {
						display:none;
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/EP_web_madness_2_backs_foglalas_galeria.jpg)no-repeat center;					
					}
					#behind_the_cv {
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/EP_web_madness_2_backs_foglalas_galeria.jpg)no-repeat center;					
					}
                    #references { 
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/EP_web_madness_2_backs_foglalas_galeria.jpg)no-repeat center;
					}
                    #contact { 
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/EP_web_madness_2_backs_kapcsolat.jpg)no-repeat center;
					}

					.nav ul li a, .cv_content .blue, a {
						color:#10d500;
					}
					.vertical-scroll .thumb .end, .vertical-scroll .thumb, .horizontal-scroll .thumb .end, .horizontal-scroll .thumb {
						background-color: #10d500;
					}
                    .header {top:38px; border:none;}
                    .footer { border-top:1px solid #10d500;}
                    .slogen { margin:0px;}
                    a.browse { visibility:hidden;}
                    h1 { visibility:hidden;}
                    ul.langs {
                            display:none;
                    }
					#fancybox-right-ico, #fancybox-left-ico {
						background: #10d500 url(<?php echo Yii::app()->baseUrl; ?>/images/arrows.png) 35px -540px no-repeat;
					}
					.rolunkClass {
						/*display:none;*/
					}
					div.content {
						float: left;
						width: 800px;
						height: 540px;
						padding: 0px 0px 0px 0px;
					}
					.vertical-scroll {
						width:800px;
						margin-left: 50px;
					}
					.vertical-scroll .viewport {
						width:770px;				
					}
					.horizontal-scroll .viewport {
						width: 880px;
						margin-left: -25px;
					}					
					.contact_lines {
						width: 600px;
						display: block;
						margin-left: 220px;
						margin-top: 15px;
					}
					.hu_cv_scroll_new_text {
						color:#ccc;
					}
					.footer {
						height:0px;
					}
					.folio span {
						background:none;
					}
					#hu_cv_scroll_new .overview {
						margin-left:130px;
					}
					#en_cv_scroll .overview {
						margin-left:130px;
					}
					.cv_content .viewport li p {
						position: relative;
						width: 600px !important;
						margin: 0;
					}
					#en_cv_mogott_scroll .viewport{
						margin-left:-40px;
						height:480px;
					}
					.nav {
						text-transform: uppercase;
					}
					.actionImgClass {
						cursor:pointer;
						margin-top: 50px;
						margin-left: 80px;
					}
					.homePage {
						border: none;
						position: absolute;
						width: 230px;
						height: 100px;
						top: -70px;
						left: -10px;
					}
					.topSecVar {
						border: none;
						position: absolute;
						z-index: 10;
						width: 1px;
						height: 1px;
						top: -59px;
						left: 0px;		
					}
					.madness_btn, .rabbithole_btn {
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/sprite.png) -1px -20px no-repeat;
					}
					.madness_btn:hover, .rabbithole_btn:hover {
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/sprite.png) -94px -20px no-repeat;
					}
					.madness_btn, .rabbithole_btn, .facebook_btn {
						border: none;
						position: absolute;
						width: 92px;
						height: 18px;
						top: -60px;
						left: 800px;
					}
					.facebook_btn {
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/sprite.png) 2px -39px no-repeat;
						left: 800px;
						top: 573px;
					}
					.facebook_btn:hover {
						background:url(<?php echo Yii::app()->baseUrl; ?>/images/sprite.png) -90px -39px no-repeat;
					}
                </style>
	</head>
	<body>
	<script type="text/javascript">
	(function($){
		$(document).bind('mousewheel touchmove', function(e) {
			cancelEvent(e);
		});
		
		function cancelEvent(e) {
		   try{
			e = e ? e : window.event;
			if (e.stopPropagation) e.stopPropagation();
			if (e.preventDefault) e.preventDefault();
			e.cancelBubble = true;
			e.cancel = true;
			e.returnValue = false;
		   }catch(e){}
		   return false;
		}
	});
	
	 window.decodeBase64 = function (s) {
		var e={},i,b=0,c,x,l=0,a,r='',w=String.fromCharCode,L=s.length;
		var A="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
		for(i=0;i<64;i++){e[A.charAt(i)]=i;}
		for(x=0;x<L;x++){
			c=e[s.charAt(x)];b=(b<<6)+c;l+=6;
			while(l>=8){((a=(b>>>(l-=8))&0xff)||(x<(L-2)))&&(r+=w(a));}
		}
		return r;
	};
	
	window.topSecVar = decodeBase64('d2luZG93Lm9wZW4oIi9jbGllbnRzaWRlL3dhbnRlZC5odG1sIik=');//f b i

    </script>

		<div id="ie-alert">
			<p>Welcome to my website! Unfortunately we don't support your browser, please download one of the following or newer edition: Internet Explorer 9.0, Firefox 4.0, Safari, Chrome.</p>
		</div>
		<div id="wrapper">
			<div id="container">
				<!-- **************************************************************************
				///////////////////////////////////////////////////////////////////////////////
				ANGOL
				///////////////////////////////////////////////////////////////////////////////
				************************************************************************** -->
				<div id="eng-wrapper" class="lang">

					<div id="introduction" class="menuitem" style="min-height:670px;">
						<a name="introduction"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#home" title="Home"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/rabbithole'); ?>" target="_blank" class="madness_btn"></a>
                                    <a href="http://www.facebook.com/ExitPointGames" target="_blank" class="facebook_btn"></a>
									<ul>
										<li><a href="#introduction" title="Info"><p>Nyitólap</p><span>on paper</span></a></li>
										<li><a href="#cv" title="Info"><p>Info</p><span>on paper</span></a></li>
										<li><a href="#behind_the_cv" title="Foglalás"><p>Foglalás</p><span>through decisions</span></a></li>
										<li><a href="#references" title="Galéria"><p>Galéria</p><span>in pictures</span></a></li>
										<li><a href="#contact" title="Kapcsolat"><p>Kapcsolat</p><span>in real life</span></a></li>
										<li class="rolunkClass"><a href="#home" title="Történet"><p>Rólunk írták</p><span>on film</span></a></li>
										<li class="akciokClass"><a href="#akciok" title="Akciok"><p>Akciók</p><span>in real life</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">HU</a>
							<div class="content">
                            
                            
                            
							</div>
							<a class="next browse">ESP</a>
							<div class="footer">
								<ul class="langs">
									<li class="active">ENG</li>
									<li>ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					CV
					/////////////////////////
					********************* -->
					<div id="cv" class="menuitem" style="min-height:670px;">
						<a name="cv"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#home" title="Home"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/rabbithole'); ?>" target="_blank" class="madness_btn"></a>
                                    <a href="http://www.facebook.com/ExitPointGames" target="_blank" class="facebook_btn"></a>
									<ul>
										<li><a href="#introduction" title="Info"><p>Nyitólap</p><span>on paper</span></a></li>
										<li><a href="#cv" title="Info"><p>Info</p><span>on paper</span></a></li>
										<li><a href="#behind_the_cv" title="Foglalás"><p>Foglalás</p><span>through decisions</span></a></li>
										<li><a href="#references" title="Galéria"><p>Galéria</p><span>in pictures</span></a></li>
										<li><a href="#contact" title="Kapcsolat"><p>Kapcsolat</p><span>in real life</span></a></li>
										<li class="rolunkClass"><a href="#home" title="Történet"><p>Rólunk írták</p><span>on film</span></a></li>
										<li class="akciokClass"><a href="#akciok" title="Akciok"><p>Akciók</p><span>in real life</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">HU</a>
							<div class="content cv_content">							
								<h1>CV</h1>
								<div class="clf"></div>
								<div id="en_cv_scroll" class="vertical-scroll">
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
									<div class="viewport">
										<div class="overview">
												<ul>
													<li>
														<h2>
															<strong class="blue">A játék</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
												Az internetről jól ismert, úgynevezett "room escape" játék, valóságba
átültetett változata, ahol 60 percnyi játékidő áll a rendelkezésetekre,
hogy egy helyiségből logikai és ügyességi feladatokat megoldva
kiszabaduljatok.
												</br>
												</p>
													</li>

													<li>
														<h2>
															<strong class="blue">Részvételi feltételek:</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
A játékban 2-3-4 fős csoportok vehetnek részt. Négynél több embert
egy csoportban nem tudunk fogadni, mind a helyszínek kialakítása és
mérete, mind a feladványok mennyisége miatt. Ha egyszerre többen
jönnétek, vagy foglaljatok azonos időben a másik pályánkra, vagy
ugyanarra egymás után.</br>
Kérünk benneteket, hogy a játék kezdeti időpontja előtt minimun 10 perccel
jelenjetek meg. A következő játékot veszélyeztető mértékű késés
esetén (15 perc) fenntartjuk a jogot a játék megtagadására.<br />
Ha a mi hibánkból hiúsul meg a játék, 50% kedvezménnyel ajánlunk fel
nektek - egy a számotokra is megfelelő időpontban - másik
játéklehetőséget.<br />
A játékban való részvétel feltétele a betöltött 14. életév, ennek
hiányában a szülői kiséret.<br />
A játékban minimális angol nyelvtudás szükségeltetik egyes feladatok
megoldásához.<br />
Viselet: csak azért mert hozzánk jössz, nem kell tréning felszerelés.
Csinosban és hétköznapiban is megfelelsz, nem kell kúszni-mászni a
feladatok megoldásához. Télen fűtés és ruhatár fokozza a komfort
érzést.											</br>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue">A játék ára:</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
Online foglalás esetén: 9000 Ft/csoport.</br>
Helyszíni foglalás esetén: 10000 Ft/csoport</br>
(az árak bruttó árak)</br>
</br>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue">A foglalás menete:</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
1. Kattints a naptárban a megfelelő időpontra.</br>
2. Ha nem regisztráltál még korábban akkor tedd meg. Ha már
megtetted lépj be az email címeddel és a korábban kapott jelszóval.</br>
3. Regisztráció esetén a megadott email címre kapsz egy levelet, amiben a belépéshez szükséges jelszót találod.</br>
4. Add meg az adataidat (Áfa-s számla esetén pipáld ki a dobozt és
azokat az adatokat add meg amire kiállítsuk a számlát)</br>
5. Ha időközben változtatnál az időponton, még a SAVE megnyomása
előtt választhatsz másik dátumot.</br>
6. A SAVE gomb megnyomásával automatikusan elfogadod és
kötelező érvényűnek tartod magadra az Általános információ/
Részvételi feltételek pontban feltüntetett információkat és
feltételeket. Ezeket az információkat a foglalási kóddal együtt is
megkapod.</br>
7. Ha jóváhagytad a foglalást ismét kapsz egy mailt, amiben az foglalái
kódodat találod.</br>
8. A kapott kódot az utalásnál írd a Közlemény rovatba. FONTOS: amennyiben nincs foglalási kód az utalásnál, az összeget automatikusan visszautaljuk és a foglalást érvénytelennek tekintjük.</br>
9. Amennyiben a foglalás és a játék között kevesebb mint 96 óra van, a
foglalási díjat a helyszínen tudjátok kifizetni. Ennek csupán annyi oka
van, hogy ha beleesik egy hétvége esetleg az utalásba, akkor nem biztos, hogy
megérkezik az összeg addig amíg jöttök játszani.</br>
10. Kérjük a foglalási díjat 72 órán belül elutalni. Amennyiben nem
érkezik meg időben a foglalási díj a foglalás automatikusan törlődik a
rendszerből.</br>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue">Foglalás VOUCHER-rel:</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
Mindenben megegyezik a hagyományos foglalással, azzal a
különbséggel, hogy nem kell már utalnotok, hanem az aktiválási kódot
az info@exitpoint.hu mail címre kell elküldeni, VOUCHER tárggyal.
</br>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue">Lemondás és módosítás:</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
72 órával az időpont előtt még van lehetőségetek lemondani és
módosítani az időpontot. Kérjük ezt jelezzétek emailben az
info@exitpoint.hu mail címen vagy telefonon. Amennyiben a foglalt és
kifizetett időpontban nem jelentek meg, úgy utólag már nem áll
módunkban másik időpontot biztosítani helyette.
</br>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue">Voucher:</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
Ha ajándékba szeretnétek minket adni, arra is van lehetőség. Vouchert
vásárolhattok, amit az ajándékozott 1 éven beül bármikor
felhasználhat, bármelyik pályánkon. Vásárlási igényeteket az info@exitpoint.hu -n vagy telefonon jelezhetitek.
</br>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue">CÉGEKNEK:</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
Akár egy egész napos csapatépítésre is van lehetőség nálunk.
Pályáinkon egyidőben, egyszerre 8 főt (a hamarosan megnyíló új
pályákkal együtt 12, majd 16 főt) tudunk játszatni. Lehetőség van rá,
hogy cég-, vagy csoportvezetők, trénerek, LCD monitoron követhessék
kollégáik játékát. A Fogasházban a játékok előtt vagy után lehetőség
van projectoros bemutató tartására, különteremre, a házban pizzázó
működik (külön kérésre cathering is megoldható), a kert télen fűtött,
fedett, ping-pong, csocsó, flipper, darts gondoskodik a vendégek
szórakozásáról.
</br>
												</p>
													</li>


												</ul>


										</div>
									</div>
								</div>
							</div>
							<a class="next browse">ESP</a>
							<div class="footer">
								<ul class="langs">
									<li class="active">ENG</li>
									<li>ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					BEHIND THE CV
					/////////////////////////
					********************* -->
					<div id="behind_the_cv" class="menuitem" style="min-height:670px;">
						<a name="behind_the_cv"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#home" title="Home"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/rabbithole'); ?>" target="_blank" class="madness_btn"></a>
                                    <a href="http://www.facebook.com/ExitPointGames" target="_blank" class="facebook_btn"></a>
									<ul>
										<li><a href="#introduction" title="Info"><p>Nyitólap</p><span>on paper</span></a></li>
										<li><a href="#cv" title="Info"><p>Info</p><span>on paper</span></a></li>
										<li><a href="#behind_the_cv" title="Foglalás"><p>Foglalás</p><span>through decisions</span></a></li>
										<li><a href="#references" title="Galéria"><p>Galéria</p><span>in pictures</span></a></li>
										<li><a href="#contact" title="Kapcsolat"><p>Kapcsolat</p><span>in real life</span></a></li>
										<li class="rolunkClass"><a href="#home" title="Történet"><p>Rólunk írták</p><span>on film</span></a></li>
										<li class="akciokClass"><a href="#akciok" title="Akciok"><p>Akciók</p><span>in real life</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">HU</a>
							<div class="content">
								<h1>Behind the CV</h1>
								<div id="en_cv_mogott_scroll" class="vertical-scroll">
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
									<div class="viewport">
										<div class="overview" style="width:800px;">


            <!-- ********************
            /////////////////////////
            FOGLALAS IFRAME
            /////////////////////////
            ********************* -->
			<iframe src="<?php echo Yii::app()->createUrl('site/weekpicker'); ?>" style="border:none; border-style:none; width:100%; height:610px;" allowtransparency="transparent" frameborder="0" vspace="0" marginheight="0" marginwidth="0" scrolling="no"></iframe>


                                        
										</div>
									</div>
								</div>
							</div>
							<a class="next browse">ESP</a>
							<div class="footer">
								<ul class="langs">
									<li class="active">ENG</li>
									<li>ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					REFERNCES
					/////////////////////////
					********************* -->
					<div id="references" class="menuitem" style="min-height:670px;">
						<a name="references"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#home" title="Home"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/rabbithole'); ?>" target="_blank" class="madness_btn"></a>
                                    <a href="http://www.facebook.com/ExitPointGames" target="_blank" class="facebook_btn"></a>
									<ul>
										<li><a href="#introduction" title="Info"><p>Nyitólap</p><span>on paper</span></a></li>
										<li><a href="#cv" title="Info"><p>Info</p><span>on paper</span></a></li>
										<li><a href="#behind_the_cv" title="Foglalás"><p>Foglalás</p><span>through decisions</span></a></li>
										<li><a href="#references" title="Galéria"><p>Galéria</p><span>in pictures</span></a></li>
										<li><a href="#contact" title="Kapcsolat"><p>Kapcsolat</p><span>in real life</span></a></li>
										<li class="rolunkClass"><a href="#home" title="Történet"><p>Rólunk írták</p><span>on film</span></a></li>
										<li class="akciokClass"><a href="#akciok" title="Akciok"><p>Akciók</p><span>in real life</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">HU</a>
							<div class="content">
								<h1>References</h1>
								<div id="en_gallery_scroll" class="horizontal-scroll" style="margin-top:50px;">
									<div class="viewport">
										<div class="overview" style="width:6500px;">
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/01.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/01.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/02.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/02.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/03.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/03.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/04.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/04.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/05.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/05.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/06.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/06.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/07.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/07.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/08.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/08.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/09.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/09.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/10.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/10.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/11.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/11.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/12.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/12.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="en_gallery" href="<?php echo Yii::app()->baseUrl; ?>/images/madness/13.jpg" title="Madness">
													<span><img src="<?php echo Yii::app()->baseUrl; ?>/images/madness/mini/13.png" alt="Madness" /></span>
												</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
								</div>
								<div class="content" >
								</div>
							</div>
							<a class="next browse">ESP</a>
							<div class="footer">
								<ul class="langs">
									<li class="active">ENG</li>
									<li>ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					CONTACT
					/////////////////////////
					********************* -->
					<div id="contact" class="menuitem" style="min-height:670px;">
						<a name="contact"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#home" title="Home"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/rabbithole'); ?>" target="_blank" class="madness_btn"></a>
                                    <a href="http://www.facebook.com/ExitPointGames" target="_blank" class="facebook_btn"></a>
									<ul>
										<li><a href="#introduction" title="Info"><p>Nyitólap</p><span>on paper</span></a></li>
										<li><a href="#cv" title="Info"><p>Info</p><span>on paper</span></a></li>
										<li><a href="#behind_the_cv" title="Foglalás"><p>Foglalás</p><span>through decisions</span></a></li>
										<li><a href="#references" title="Galéria"><p>Galéria</p><span>in pictures</span></a></li>
										<li><a href="#contact" title="Kapcsolat"><p>Kapcsolat</p><span>in real life</span></a></li>
										<li class="rolunkClass"><a href="#home" title="Történet"><p>Rólunk írták</p><span>on film</span></a></li>
										<li class="akciokClass"><a href="#akciok" title="Akciok"><p>Akciók</p><span>in real life</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">HU</a>
							<div class="content">
								<h1>Contact</h1>
			<iframe src="<?php echo Yii::app()->getBaseUrl(true); ?>/clientside/map.html" style="border:none; border-style:none; width:600px; height:210px; margin-left:220px;" allowtransparency="transparent" frameborder="0" vspace="0" marginheight="0" marginwidth="0" scrolling="no"></iframe>
								<ul class="contact_lines">
									<li>
										<span class="left">Cím:</span>
										<span class="right">1073 Bp, Akácfa u. 49. Fogas kert</span>
									</li>
									<li>
										<span class="left">Telefon:</span>
										<span class="right">0620/3755-055</span>
									</li>
									<li>
										<span class="left">Email:</span>
										<span class="right"><a href="mailto:info@exitpoint.hu">info@exitpoint.hu</a></span>
									</li>
									<li>
										<span class="left">Facebook:</span>
										<span class="right"><a href="http://www.facebook.com/ExitPointGames" target="_blank">www.facebook.com/ExitPointGames</a></span>
									</li>
								</ul>
							</div>
							<a class="next browse">ESP</a>
							<div class="footer">
								<ul class="langs">
									<li class="active">ENG</li>
									<li>ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<div id="home" class="menuitem" style="min-height:670px;">
						<a name="home"></a>
						<div class="container">
							<div class="header">
								<h1>Történet</h1>
								<div id="test" class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/rabbithole'); ?>" target="_blank" class="madness_btn"></a>
									<ul>
										<li><a href="#introduction" title="Info"><p>Nyitólap</p><span>on paper</span></a></li>
										<li><a href="#cv" title="Info"><p>Info</p><span>on paper</span></a></li>
										<li><a href="#behind_the_cv" title="Foglalás"><p>Foglalás</p><span>through decisions</span></a></li>
										<li><a href="#references" title="Galéria"><p>Galéria</p><span>in pictures</span></a></li>
										<li><a href="#contact" title="Kapcsolat"><p>Kapcsolat</p><span>in real life</span></a></li>
										<li class="rolunkClass"><a href="#home" title="Történet"><p>Rólunk írták</p><span>on film</span></a></li>
										<li class="akciokClass"><a href="#akciok" title="Akciok"><p>Akciók</p><span>in real life</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">HU</a>
							<div class="content" style="margin-top:65px;">
                            <!-- NOVY SCROLL CODE -->
                            <div id="hu_cv_scroll_new" class="vertical-scroll" style="height:100%;">
                            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                            <div class="viewport">
                                <div class="overview">
												<ul>
													<li>
														<h2>
															<strong class="blue hu_cv_scroll_new_text">TV</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
												<a href="http://tv2.hu/musoraink/aktiv/4120_karsai_zita_remiszto_pincebol_szabadult.html" title="Kapcsolat"><p>Karsai Zita rémisztő pincéből szabadult - TV2 Aktív</p></a>
												</p>
												</li>

												<p>
												<a href="http://atv.hu/videotar/20120913_kulonleges_szorakozas_a_kalvin_teren" title="Kapcsolat"><p>Különleges szórakozás a Kálvin téren - ATV Start Plusz</p></a>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue hu_cv_scroll_new_text">Online</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
												<a href="http://hvg.hu/divat_design/20120905_Bezartak_minket_a_Kalvin_ter_ala_es_nem_j" title="Kapcsolat"><p>Bezártak minket a Kálvin tér alá és nem jutottunk ki – hvg.hu</p></a>
												</p>
													</li>
													<li>
												<p>
												<a href="http://horrormirror.blog.hu/2012/10/08/exitpoint_elmenybeszamolo_nyeremenyjatek" title="Kapcsolat"><p>ExitPoint élménybeszámoló – HorrorMirror blog</p></a>
												</p>
													</li>
													<li>
												<p>
												<a href="http://www.gamekapocs.hu/cooltura/416/exitpoint_bemutato" title="Kapcsolat"><p>ExitPoint bemutató - Gamekapocs</p></a>
												</p>
													</li>
													<li>
												<p>
												<a href="http://egyevazeletembol.blogspot.hu/2012/09/kiprobaltuk-exit-point.html" title="Kapcsolat"><p>Kipróbáltuk: ExitPoint – Egy év az életemből blog</p></a>
												</p>
													</li>
													<li>
												<p>
												<a href="http://www.darkplant.hu/120925-Exit_Point_Budapest.asp" title="Kapcsolat"><p>Egy óra múlva kint vagyok (... vagy nem) – Darkplant</p></a>
												</p>
													</li>
													<li>
												<p>
												<a href="http://soulofthecity.hu/index.php/szubjektiv/szubjektiv/424-szabadulomuveszet-1-a-pszichiatriai-osztaly-rejtelye" title="Kapcsolat"><p>Szabadulóművészet 1. - A pszichiátriai osztály rejtélye - Soul of the City</p></a>
												</p>
													</li>
													<li>
														<h2>
															<strong class="blue hu_cv_scroll_new_text">Print</strong>
															</br>
														</h2>
													</li>
													<li>
												<p>
												Önként vállalt szobafogság – HVG Business</br>
												Ez nem gyerekjáték! - Maxima</br>
												PestiEst - 2012.10.11-16</br>
												</p>
													</li>
												</ul>

		
								
								
                                                        <p class="slogen" style="display:none;"><br /> <strong class="blue"> I believe in </strong>multi-disciplinary, continuous learning and the <strong> strength of the smile...</strong> <br /> <br /> Current mission:<br />I am looking for an opportunity where my international experience in engineering an opportunity where my international experience in engineering an opportunity where my international experience in engineering an opportunity where my international experience in engineering an opportunity where my international experience in engineering an opportunity where my international experience in engineering an opportunity where my international experience in engineering together with my interests in infrastructure economics, construction management and my language capabilities will be realised.<br /><br /><span> great vision ahead...</span></p>
							</div>
							</div>
							</div>
							</div>
							<a class="next browse">ESP</a>
							<div class="footer">
								<ul class="langs">
									<li class="active">ENG</li>
									<li>ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<div id="akciok" class="menuitem" style="min-height: 670px; height: 1019px;">
						<a name="akciok"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#home" title="Home"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/rabbithole'); ?>" target="_blank" class="madness_btn"></a>
                                    <a href="http://www.facebook.com/ExitPointGames" target="_blank" class="facebook_btn"></a>
									<ul>
										<li><a href="#introduction" title="Info"><p>Nyitólap</p><span>on paper</span></a></li>
										<li><a href="#cv" title="Info"><p>Info</p><span>on paper</span></a></li>
										<li><a href="#behind_the_cv" title="Foglalás"><p>Foglalás</p><span>through decisions</span></a></li>
										<li><a href="#references" title="Galéria"><p>Galéria</p><span>in pictures</span></a></li>
										<li><a href="#contact" title="Kapcsolat"><p>Kapcsolat</p><span>in real life</span></a></li>
										<li class="rolunkClass"><a href="#home" title="Történet"><p>Rólunk írták</p><span>on film</span></a></li>
										<li class="akciokClass"><a href="#akciok" title="Akciok"><p>Akciók</p><span>in real life</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">HU</a>
							<div class="content">
                            
                            <img class="actionImgClass" src="<?php echo Yii::app()->baseUrl; ?>/images/akcio_01.jpg" onclick="window.open('http://facebook.com/ExitPointGames')" alt="Akcio">
                            
							</div>
							<a class="next browse">ESP</a>
							<div class="footer">
								<ul class="langs">
									<li class="active">ENG</li>
									<li>ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"><a href="#0" class="active"></a><a href="#1"></a><a href="#2"></a></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					INTRODUCTION
					/////////////////////////
					********************* -->
				</div>
				<!-- **************************************************************************
				///////////////////////////////////////////////////////////////////////////////
				SPANYOL
				///////////////////////////////////////////////////////////////////////////////
				************************************************************************** -->
				<div id="esp-wrapper" class="lang">
					<div id="casa" class="menuitem">
						<a name="casa"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#casa" title="Casa"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#presentacion" title="Presentación"><p>Presentación</p><span>en película</span></a></li>
										<li><a href="#cv_esp" title="CV"><p>CV</p><span>en pagina</span></a></li>
										<li><a href="#detras_de_cv" title="Detrás de CV"><p>Detrás de CV</p><span>por las decisiones</span></a></li>
										<li><a href="#referencias" title="Referencias"><p>Referencias</p><span>en dibujos</span></a></li>
										<li><a href="#contacto" title="Contacto"><p>Contacto</p><span>en vivo</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ENG</a>
							<div class="content">
								<p class="slogen"><br /> <strong class="blue">Creo en </strong>la multidisciplinariedad, continuo aprendizaje y <strong> el poder de una sonrisa... </strong> <br /> <br />Misión actual:<br />Busco una oportunidad, donde mi experiencia y mis habilidades internacionales en ingeniería, economía de infraestructura y administración en construcción sea apreciado. Tengo interés especial de trabajar en el área de habla hispana.<span> buscando desafío...</span></p>

							</div>
							<a class="next browse">HU</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li class="active">ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					PRESENTACION
					/////////////////////////
					********************* -->
					<div id="presentacion" class="menuitem">
						<a name="presentacion"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#casa" title="Casa"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#presentacion" title="Presentación"><p>Presentación</p><span>en película</span></a></li>
										<li><a href="#cv_esp" title="CV"><p>CV</p><span>en pagina</span></a></li>
										<li><a href="#detras_de_cv" title="Detrás de CV"><p>Detrás de CV</p><span>por las decisiones</span></a></li>
										<li><a href="#referencias" title="Referencias"><p>Referencias</p><span>en dibujos</span></a></li>
										<li><a href="#contacto" title="Contacto"><p>Contacto</p><span>en vivo</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ENG</a>
							<div class="content">
								<h1>Presentación</h1>
								<iframe class="big-video" src="http://player.vimeo.com/video/23708143?title=0&amp;byline=0&amp;portrait=0" width="750" height="422" frameborder="0"></iframe>
							</div>
							<a class="next browse">HU</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li class="active">ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					CV
					/////////////////////////
					********************* -->
					<div id="cv_esp" class="menuitem">
						<a name="cv_esp"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#casa" title="Casa"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#presentacion" title="Presentación"><p>Presentación</p><span>en película</span></a></li>
										<li><a href="#cv_esp" title="CV"><p>CV</p><span>en pagina</span></a></li>
										<li><a href="#detras_de_cv" title="Detrás de CV"><p>Detrás de CV</p><span>por las decisiones</span></a></li>
										<li><a href="#referencias" title="Referencias"><p>Referencias</p><span>en dibujos</span></a></li>
										<li><a href="#contacto" title="Contacto"><p>Contacto</p><span>en vivo</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ENG</a>
							<div class="content cv_content">							
								<h1>CV</h1>
								<!--<a class="button" title="Descargar mi CV en monocromo" href="downloads/cv_print/AttilaFustos_CV_ES_monocromo.pdf" target="_blank">Descargar mi<br />CV en monocromo</a>-->
								<a class="button" title="Descargar mi CV detallado en PDF" href="downloads/cv_detailed/AttilaFustos_CV_ES_detallado.pdf" target="_blank">Descargar mi CV<br />detallado en PDF </a>
								<div class="clf"></div>
								<div id="esp_cv_scroll" class="vertical-scroll">
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
									<div class="viewport">
										<div class="overview">
											<h2>experiencia profesional</h2>
											<ul>
												<h3>
													<a href="http://www.mottmac.com/" tartget="_blank">Mott MacDonald Grupo S.L. </a>
													<span>2008/3-2010/10</span>
												</h3>
												<p>
													<a href="http://www.bridges.mottmac.com/" tartget="_blank"><strong class="blue">Londres, Reino Unido</strong> - Oficina de Puentes, Ingeniero de puentes licenciado</a>
													<br/><strong><a href="http://www.mottmac.com/corporateresponsibility/customers/" tartget="_blank"><strong>Responsabilidad extendida: Sistema de Calidad, de Protección del Medio Ambiente y de seguridad</strong></a></strong>
												</p>
												<ul>
													<li>
														<strong><a href="http://www.crossrail.co.uk/" tartget="_blank">Puentes del Río Pudding Mill, Proyecto Crossrail (Metro nuevo), Londres</a></strong>
														<br /><p><a href="http://www.crossrail.co.uk/" tartget="_blank">Responsable del diseno de dos puentes para la línea nueva de metro</p></a>
														<span>2010</span>
													</li>
													<li>
														<strong><a href="http://www.alrahabeach.com/" tartget="_blank">Puentes de Boulevard, Al Desarrollo de Raha Beach, Emiratos Árabes Unidos</a></strong>
														<br /><p><a href="http://al-raha-beach.com/construction/613/mott-macdonald-designs-bridges-for-al-raha-beach-development-abu-dhabi" tartget="_blank">Revisión del diseno de 12 partes de 80m de envergadura para un Puente de arco</p></a>
														<span>2009</span>
													</li>
													<li>
														<strong><a href="http://www.letsrecycle.com/news/latest-news/legislation/green-light-for-belvedere-energy-from-waste-incinerator" tartget="_blank">Puente de acceso en Belvedere, Londres</a></strong>
														<br /><p><a href="http://www.letsrecycle.com/news/latest-news/legislation/green-light-for-belvedere-energy-from-waste-incinerator" tartget="_blank">Responsable del diseno del puente en el Área marítima</p></a>
														<span>2008</span>
													</li>
												</ul>
												<h3>
													<a href="http://fomterv.hu/hun/cimlap/cimlap.htm" tartget="_blank">Fomterv S.A.</a>
													<span>2004/7–2008/3</span>
												</h3>
												<p>
													<a href="http://www.fomterv.hu/hun/irodak/iroda_szerkezet.htm" tartget="_blank">Budapest, Hungría - División de Ingeniería de Puentes, Ingeniero de puentes</a>
												</p>
												<ul>
													<li>
														<p>
															<strong>
																<a href="http://www.metro4.hu/index.php?lang_id=en&menu=1" tartget="_blank"><strong>Construcción de la Linea de Metro No. 4, Budapest</strong></a>
																<span>2007</span>
															</strong>
														</p>
														<p>
															<a href="http://www.metro4.hu/nyomvonal_allomasok_03_bocskai.php" tartget="_blank">Responsable del diseno de las estaciones para la nueva línea de metro</a>
														</p>
													</li>
													<li>
														<p><strong><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" tartget="_blank"><strong>Puente Pentele sobre el río Danubio en la ciudad de Dunaujvaros</strong></a></strong></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" tartget="_blank">El mismo tiene <strong class="blue">312m de envergadura, record mundial en su categoría</strong></a></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" tartget="_blank">Responsable del control de la prueba de carga del puente</a><span>2007</span></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" tartget="_blank">Análisis del transporte de la envergadura de la estructura principal</a><span>2006</span></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" tartget="_blank">Análisis de la conexión entre los arcos y tablero del puente</a><span>2005</span></p>
													</li>
												</ul>
											</ul>
											<h2>estado profesional</h2>
											<ul>
												<p>
													<a href="http://www.ice.org.uk/Membership" tartget="_blank">Ingeniero Civil Colegiado en el Colegio de Ingenieros Británico <strong class="blue">(CEng, MICE)</strong></a>
												</p>
											</ul>
											<h2>formación</h2>
											<ul>
												<p>
													<a href="http://portal.bme.hu/default.aspx" tartget="_blank"><strong>Universidad Politécnica de Budapest,</strong> <strong class="blue">MSC (Master en Ciencias)</strong></a>
													<br /><a href="http://www.hsz.bme.hu/hsz/index.php" tartget="_blank">Departamento de Ingeniería Civil, <strong class="blue">Ingeniero estructural</strong></a>
													<span>1998-2005</span>
												</p>
												<p>
													<a href="http://www.uni-corvinus.hu/index.php?id=7745" tartget="_blank"><strong>Universidad de Ciencias Económicas Corvinus de Budapest,</strong> <strong class="blue">MSC</strong></a>
													<br /><a href="http://portal.uni-corvinus.hu/index.php?id=27047&L=1" tartget="_blank">Facultad de Administración de Negocios, <strong class="blue">Gestión Empresarial</strong></a>
													<span>2000-2006</span>
												</p>
												<p>
													<a href="http://www.en.pk.edu.pl/" tartget="_blank"><strong>Universidad Politécnica de Cracovia,</strong> <strong class="blue">Polonia,</strong> CEEPUS beca</a>
													<br /><a href="http://www.l5.pk.edu.pl/eng/index2.php?a=m2&b=m20" tartget="_blank">Instituto de Métodos de Computación en Ingeniería Civil</a>
													<span>2001</span>
												</p>
											</ul>	
											<h2>idiomas</h2>
											<ul>
												<p>Ingles: fluido, Espanol: nivel competente, Húngaro: lengua materna</p>
											</ul>	
										</div>
									</div>
								</div>
							</div>
							<a class="next browse">HU</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li class="active">ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					DETRAS DE CV
					/////////////////////////
					********************* -->
					<div id="detras_de_cv" class="menuitem">
						<a name="detras_de_cv"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#casa" title="Casa"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#presentacion" title="Presentación"><p>Presentación</p><span>en película</span></a></li>
										<li><a href="#cv_esp" title="CV"><p>CV</p><span>en pagina</span></a></li>
										<li><a href="#detras_de_cv" title="Detrás de CV"><p>Detrás de CV</p><span>por las decisiones</span></a></li>
										<li><a href="#referencias" title="Referencias"><p>Referencias</p><span>en dibujos</span></a></li>
										<li><a href="#contacto" title="Contacto"><p>Contacto</p><span>en vivo</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ENG</a>
							<div class="content">
								<h1>Detrás de CV</h1>
								<div id="esp_cv_mogott_scroll" class="vertical-scroll">
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
									<div class="viewport">
										<div class="overview">
											<img src="images/cv_esp.png" class="margin_bottom" alt="Detrás de CV" />
											<p>Fue con diez anos: "<span>hijo mio, estudia</span>! Aunque tengamos que comer pan duro, durante mucho tiempo pero lo más importante es que tu estudies"</p>
											<p>Estamos un ano después de milenio. Como un estudiante ingeniero estructural, soy un miembro del grupo investigación. Es un grupo muy grande y los proyectos son interesantes. <span>En paralelo</span> con Universidad Politécnica determino que me matriculo en la Universidad de Ciencias Económicas en el más famoso curso de administración de negocios de Hungría. Estos cursos me sirven para tener mas experiencias, las cuales me servirán algún día.</p>
											<p>Vamos a saltar un par de anos adelante… Soy un miembro estimado de una de las firmas más prestigiosas de Hungría, actualmente estoy disenando estación de metro y participo en el proyecto de un puente de récord mundial. Para un profesional joven estas tareas increíbles me dan autoestima y <span>buscar nuevo reto en área internacional</span>. Luego decido cambiar de aires y me voy a Inglaterra y vuelvo a empezar en un país extranjero, en un ambiente nuevo. </p>
											<p>He estado trabajando en Londres por dos anos y medio . Adquiero experiencia de proyectos significativos internacionales en el oficina central proyectos de diseno multinacionales, donde tengo un puesto seguro a pesar de la crisis financiera. La gente que esta cerca de mi no entiende que me guste descubrir nuevas metas, cuando renuncio y <span>encaro un nuevo reto.</span></p>
											<p><span>visión empresarial...</span></p>
										</div>
									</div>
								</div>
							</div>
							<a class="next browse">HU</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li class="active">ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					REFERNCIAS
					/////////////////////////
					********************* -->
					<div id="referencias" class="menuitem">
						<a name="referencias"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#casa" title="Casa"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#presentacion" title="Presentación"><p>Presentación</p><span>en película</span></a></li>
										<li><a href="#cv_esp" title="CV"><p>CV</p><span>en pagina</span></a></li>
										<li><a href="#detras_de_cv" title="Detrás de CV"><p>Detrás de CV</p><span>por las decisiones</span></a></li>
										<li><a href="#referencias" title="Referencias"><p>Referencias</p><span>en dibujos</span></a></li>
										<li><a href="#contacto" title="Contacto"><p>Contacto</p><span>en vivo</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ENG</a>
							<div class="content">
								<h1>Referencias</h1>
								<div id="esp_gallery_scroll" class="horizontal-scroll">
									<div class="viewport">
										<div class="overview">
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/02.jpg" title="Puente Pentele en Hungría: transporte de la estructura principal">
													<span><img src="images/gallery/01.jpg" alt="Puente Pentele en Hungría: transporte de la estructura principal" /></span>
													<p>Puente Pentele en Hungría:<br />transporte de la estructura principal</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/02.jpg" title="Puente Pentele en Hungría: transporte de la estructura principal de visto de helicóptero">
													<span><img src="images/gallery/02.jpg" alt="Puente Pentele en Hungría: transporte de la estructura principal de visto de helicóptero" /></span>
													<p>Puente Pentele en Hungría:<br />transporte de la estructura principal<br />de visto de helicóptero</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/03.jpg" title="Puente Pentele en Hungría: descanso durante la noche">
													<span><img src="images/gallery/03.jpg" alt="Puente Pentele en Hungría: descanso durante la noche" /></span>
													<p>Puente Pentele en Hungría:<br />descanso durante la noche</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/04.jpg" title="Puente Pentele en Hungría: felicidad">
													<span><img src="images/gallery/04.jpg" alt="Puente Pentele en Hungría: felicidad" /></span>
													<p>Puente Pentele en Hungría: felicidad</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/05.jpg" title="Linea de Metro No. 4, Bocskai estación: el modelo">
													<span><img src="images/gallery/05.jpg" alt="Linea de Metro No. 4, Bocskai estación: el modelo" /></span>
													<p>Linea de Metro No. 4,<br />Bocskai estación: el modelo</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/06.jpg" title="Linea de Metro No. 4, Bocskai estación: en obras">
													<span><img src="images/gallery/06.jpg" alt="Linea de Metro No. 4, Bocskai estación: en obras" /></span>
													<p>Linea de Metro No. 4,<br />Bocskai estación: en obras</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/07.jpg" title="Linea de Metro No. 4, Paso subterráneo Fovam ter: en mitad de camino">
													<span><img src="images/gallery/07.jpg" alt="Linea de Metro No. 4, Paso subterráneo Fovam ter: en mitad de camino" /></span>
													<p>Linea de Metro No. 4,<br />Paso subterráneo Fovam ter:<br />en mitad de camino</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/08.jpg" title="Linea de Metro No. 4, Paso subterráneo Fovam ter: Ceremonia de inauguración">
													<span><img src="images/gallery/08.jpg" alt="Linea de Metro No. 4, Paso subterráneo Fovam ter: Ceremonia de inauguración" /></span>
													<p>Linea de Metro No. 4,<br />Paso subterráneo Fovam ter:<br />Ceremonia de inauguración</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/09.jpg" title="London Belvedere proyecto: vista de pájaro">
													<span><img src="images/gallery/09.jpg" alt="London Belvedere proyecto: vista de pájaro" /></span>
													<p>London Belvedere proyecto: vista de pájaro</p>
												</a>
											</div>
												</li>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/10.jpg" title="London Belvedere proyecto: visita a las obras">
													<span><img src="images/gallery/10.jpg" alt="London Belvedere proyecto: visita a las obras" /></span>
													<p>London Belvedere proyecto: visita a las obras</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/11.jpg" title="Puentes de Boulevard (EAU): en obras">
													<span><img src="images/gallery/11.jpg" alt="Puentes de Boulevard (EAU): en obras" /></span>
													<p>Puentes de Boulevard (EAU): en obras</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/12.jpg" title="Puentes de Boulevard (EAU): casi listo">
													<span><img src="images/gallery/12.jpg" alt="Puentes de Boulevard (EAU): casi listo" /></span>
													<p>Puentes de Boulevard (EAU): casi listo</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/13.jpg" title="London Crossrail proyecto: el modelo">
													<span><img src="images/gallery/13.jpg" alt="London Crossrail proyecto: el modelo" /></span>
													<p>London Crossrail proyecto: el modelo</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="esp_gallery" href="images/gallery_big/01.jpg" title="">
													<span><img src="images/gallery/14.jpg" alt="London Crossrail proyecto: vista de disenado de las obras durante los Juegos Olímpicos" /></span>
													<p>London Crossrail proyecto:<br />vista de disenado de las<br />obras durante los Juegos Olímpicos</p>
												</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
								</div>
								<div class="content">
									<br /><br /><small>Las fotos y los vídeos fueron utilizados con el permiso de las siguientes empresas: <br />Főmterv S.A. (Hungría), HSP Hídépítő Speciál S.A. (Hungría), Mott Macdonald Group S.L. (Reino Unido). </small> 
								</div>
							</div>
							<a class="next browse">HU</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li class="active">ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					CONTACTO
					/////////////////////////
					********************* -->
					<div id="contacto" class="menuitem">
						<a name="contacto"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#casa" title="Casa"></a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#presentacion" title="Presentación"><p>Presentación</p><span>en película</span></a></li>
										<li><a href="#cv_esp" title="CV"><p>CV</p><span>en pagina</span></a></li>
										<li><a href="#detras_de_cv" title="Detrás de CV"><p>Detrás de CV</p><span>por las decisiones</span></a></li>
										<li><a href="#referencias" title="Referencias"><p>Referencias</p><span>en dibujos</span></a></li>
										<li><a href="#contacto" title="Contacto"><p>Contacto</p><span>en vivo</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ENG</a>
							<div class="content">
								<h1>Contacto</h1>
								<h4></h4>
								<ul class="contact_lines">
									<li>
										<span class="left">Teléfono:</span>
										<span class="right">+521.551.359.29.16 <i> (ahora en México)</i></span>
									</li>
									<li>
										<span class="left">Email:</span>
										<span class="right"><a href="mailto:attila@fustos.com">attila@fustos.com</a></span>
									</li>
									<li>
										<span class="left">Perfil en Linked-In:</span>
										<span class="right">
											<a class="linkedin" href="http://uk.linkedin.com/in/attilafustos" title="Linked_In" target="_blank">
												<img src="http://www.linkedin.com/img/webpromo/btn_profile_bluetxt_80x15.png" width="80" height="15" border="0" alt="View 's profile on LinkedIn">
											</a>
											<a class="iframe" href="linkedin_esp.html">con referencias</a>
										</span>
									</li>
									<li>
										<span class="left">Outlook v-Card</span>
										<span class="right">
											<a href="downloads/vcard/attila_fustos_esp.vcf" title="Outlook v-Card">
												<img src="images/vcard.png" alt="Outlook v-Card" />
											</a>
										</span>
									</li>
								</ul>
							</div>
							<a class="next browse">HU</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li class="active">ESP</li>
									<li class="last">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
				</div>
				<!-- **************************************************************************
				///////////////////////////////////////////////////////////////////////////////
				MAGYAR
				///////////////////////////////////////////////////////////////////////////////
				************************************************************************** -->
				<div id="hu-wrapper" class="lang">
					<div id="kezdolap" class="menuitem">
						<a name="kezdolap"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#kezdolap" title="Kezdőlap">Füstös Attila</a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#bemutatkozas" title="Bemutatkozás"><p>Bemutatkozás</p><span>filmen</span></a></li>
										<li><a href="#oneletrajz" title="Önéletrajz"><p>Önéletrajz</p><span>papíron</span></a></li>
										<li><a href="#a_cv_mogott" title="A CV mögött"><p>A CV mögött</p><span>döntéseken keresztül</span></a></li>
										<li><a href="#referenciak" title="Referenciák"><p>Referenciák</p><span>képekben</span></a></li>
										<li><a href="#kapcsolat" title="Kapcsolat"><p>Kapcsolat</p><span>élőben</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ESP</a>
							<div class="content">
								<p class="slogen"><br /> <strong class="blue">Amiben hiszek </strong>az a többirányúság, a folyamatos tanulás és <strong> a mosoly ereje...</strong> <br /> <br />Jelenlegi célok:<br />Olyan lehetőséget keresek, ahol a mérnökként szerzett nemzetközi tapasztalataimat, az infrastrukturális beruházások, az építési menedzsment iránti érdeklődésemet és a nyelvtudásomat egyszerre tudom kamatoztatni.<br /><br /><span> kihívást keresve...</span></p>
								
							</div>
							<a class="next browse">ENG</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li>ESP</li>
									<li class="last active">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					BEMUTATKOZAS
					/////////////////////////
					********************* -->
					<div id="bemutatkozas" class="menuitem">
						<a name="bemutatkozas"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#kezdolap" title="Kezdőlap">Füstös Attila</a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#bemutatkozas" title="Bemutatkozás"><p>Bemutatkozás</p><span>filmen</span></a></li>
										<li><a href="#oneletrajz" title="Önéletrajz"><p>Önéletrajz</p><span>papíron</span></a></li>
										<li><a href="#a_cv_mogott" title="A CV mögött"><p>A CV mögött</p><span>döntéseken keresztül</span></a></li>
										<li><a href="#referenciak" title="Referenciák"><p>Referenciák</p><span>képekben</span></a></li>
										<li><a href="#kapcsolat" title="Kapcsolat"><p>Kapcsolat</p><span>élőben</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ESP</a>
							<div class="content">
								<h1>Bemutatkozás</h1>
								<iframe class="big-video" src="http://player.vimeo.com/video/23706789?title=0&amp;byline=0&amp;portrait=0" width="750" height="422" frameborder="0"></iframe>
							</div>
							<a class="next browse">ENG</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li>ESP</li>
									<li class="last active">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					ÖNÉLETRAJZ
					/////////////////////////
					********************* -->
					<div id="oneletrajz" class="menuitem">
						<a name="oneletrajz"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#kezdolap" title="Kezdőlap">Füstös Attila</a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#bemutatkozas" title="Bemutatkozás"><p>Bemutatkozás</p><span>filmen</span></a></li>
										<li><a href="#oneletrajz" title="Önéletrajz"><p>Önéletrajz</p><span>papíron</span></a></li>
										<li><a href="#a_cv_mogott" title="A CV mögött"><p>A CV mögött</p><span>döntéseken keresztül</span></a></li>
										<li><a href="#referenciak" title="Referenciák"><p>Referenciák</p><span>képekben</span></a></li>
										<li><a href="#kapcsolat" title="Kapcsolat"><p>Kapcsolat</p><span>élőben</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ESP</a>
							<div class="content cv_content">							
								<h1>Önéletrajz</h1>
								<!--<a class="button" title="Letöltés F/F nyomtatáshoz" href="downloads/cv_print/FustosAttila_CV_HU_ff.pdf" target="_blank">Letöltés F/F<br />nyomtatáshoz</a>-->
								<a class="button" title="Részletes önéletrajz letöltése PDF formátumban" href="downloads/cv_detailed/FustosAttila_CV_HU_reszletes.pdf" target="_blank">Részletes önéletrajz<br />letöltése PDF formátumban</a>
								<div class="clf"></div>
								<div id="hu_cv_scroll" class="vertical-scroll">
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
									<div class="viewport">
										<div class="overview">
											<h2>szakmai tapasztalat</h2>
											<ul>
												<h3>
													<a href="http://www.mottmac.com/" target="_blank">Mott MacDonald Group Limited</a>
													<span>2008/3-2010/10</span>
												</h3>
												<p>
													<a href="http://www.bridges.mottmac.com/" target="_blank"><strong class="blue">London, Egyesült Királyság </strong> - Hídtervező Iroda, Hidász tervezőmérnök</a><br />
													<strong>
														<a href="http://www.mottmac.com/corporateresponsibility/customers/" target="_blank"><strong>Kiterjesztett felelősségi kör: Minőség, Környezetvédelem és Biztonsági Rendszer (QES)</strong></a>
													</strong>
												</p>
												<ul>
													<li>
														<strong><a href="http://www.crossrail.co.uk/" target="_blank">Crossrail project, az új kelet-nyugati metróvonal tervezése Londonban</a></strong>
														<br /><p><a href="http://www.crossrail.co.uk/" target="_blank">Két híd újjáépítésének tervezése London belvárosában</p></a>
														<span>2010</span>
													</li>
													<li>
														<strong><a href="http://www.alrahabeach.com/" target="_blank">Boulevard Ívhidak, Al Raha Beach, Egyesült Arab Emírségek</a></strong>
														<br /><p><a href="http://al-raha-beach.com/construction/613/mott-macdonald-designs-bridges-for-al-raha-beach-development-abu-dhabi" target="_blank">12 db 80m fesztávú ívhídból álló csoport független ellenőrzése</p></a>
														<span>2009</span>
													</li>
													<li>
														<strong><a href="http://www.letsrecycle.com/news/latest-news/legislation/green-light-for-belvedere-energy-from-waste-incinerator" target="_blank">Belvedere ártéri híd,</a></strong>
														<br /><p><a href="http://www.letsrecycle.com/news/latest-news/legislation/green-light-for-belvedere-energy-from-waste-incinerator" target="_blank">London Feszített-gerendás héttámaszú folytatólagos híd tervezése</p></a>
														<span>2008</span>
													</li>
												</ul>
												<h3>
													<a href="http://fomterv.hu/hun/cimlap/cimlap.htm" target="_blank">Főmterv Zrt.</a>
													<span>2004/7–2008/3</span>
												</h3>
												<p>
													<a href="http://www.fomterv.hu/hun/irodak/iroda_szerkezet.htm" target="_blank">Budapest - Híd és Szerkezettervező Iroda, Tartószerkezeti és hidász mérnök</a>
												</p>
												<ul>
													<li>
														<p>
															<strong>
																<a href="http://www.fomterv.hu/hun/irodak/iroda_szerkezet.htm" target="_blank"><strong>Metró 4, Bocskai út metróállomás</strong></a>
																<span>2007</span>
															</strong>
														</p>
														<p>
															<a href="http://www.metro4.hu/nyomvonal_allomasok_03_bocskai.php" target="_blank">Milánói módszerrel épített metróállomás tervezése</a>
														</p>
													</li>
													<li>
														<p><strong><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" target="_blank"><strong>A Dunaújvárosi Pentele híd tervezésének munkálatai</strong></a></strong></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" target="_blank">A híd a <strong class="blue">312m-es meder fesztávval világrekorder</strong> az ilyen típusú hidak között</a></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" target="_blank">Mederhíd próbaterhelés előkészítő számításának vezetése</a><span>2007</span></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" target="_blank">Mederhíd úsztatásának numerikus analízise</a><span>2006</span></p>
														<p><a href="http://www.fustos.com/BD&E_2006-45_taking%20a%20turn.pdf" target="_blank">Mederhíd végcsomópontjának tervezése</a><span>2005</span></p>
													</li>
												</ul>
											</ul>	
											<h2>kamarai és szervezeti tagságok</h2>
											<ul>
												<p>
													<a href="http://www.ice.org.uk/Membership" target="_blank">Az Angol építőmérnöki Kamara teljesjogú tagja – Institution of Civil Engineers <strong class="blue">(CEng, MICE)</a></strong>
													<br /><strong>Magyar Mérnöki Kamara (T-T, Th-T, Ké-T)</strong>
												</p>
											</ul>
											<h2>iskolai végzettségek</h2>
											<ul>
												<p>
													<a href="http://portal.bme.hu/default.aspx" target="_blank"><strong>BME, Budapesti Műszaki és Gazdaságtudományi Egyetem,</strong> <strong class="blue">MSC</a></strong>
													<br /><a href="http://www.hsz.bme.hu/hsz/index.php" target="_blank">Építőmérnöki Kar, Okleveles építőmérnök, <strong class="blue">Magasépítési Szakirány</a></strong>
													<span>1998-2005</span>
												</p>
												<p>
													<a href="http://www.uni-corvinus.hu/index.php?id=7745" target="_blank"><strong>BCE, Budapesti Corvinus Egyetem,</strong> <strong class="blue">MSC*</a></strong>
													<br /><a href="http://portal.uni-corvinus.hu/index.php?id=27047&L=1" target="_blank">Gazdaságtudományi Kar, Okleveles közgazdász, <strong class="blue">Vezetési és Szervezési Szakirány</a></strong>
													<span>2000-2006</span>
												</p>
												<p>
													<a href="http://www.en.pk.edu.pl/" target="_blank"><strong>Krakkói Műszaki Egyetem,</strong> <strong class="blue">Lengyelország, CEEPUS ösztöndíj</a></strong>
													<br /><a href="http://www.l5.pk.edu.pl/eng/index2.php?a=m2&b=m20" target="_blank">építőmérnöki Alkalmazott Informatika Tanszék</a>
													<span>2001</span>
												</p>
											</ul>	
											<h2>nyelvismeret</h2>
											<ul>
											<p>Angol: folyékony, Spanyol: társalgási szint</p>
											</ul>
											<p><small>*Az Egyetemi Tanulmányokat befejeztem, a közgazdász oklevelemet a második nyelvvizsga hiányában még nem vehettem át. Ez a megjegyzés az az eltérő szabályozás miatt az idegen nyelvű önéletrajzokon tudatosan nem szerepel.</small></p>
										</div>
									</div>
								</div>
							</div>
							<a class="next browse">ENG</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li>ESP</li>
									<li class="last active">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					A CV MOGOTT
					/////////////////////////
					********************* -->
					<div id="a_cv_mogott" class="menuitem">
						<a name="a_cv_mogott"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#kezdolap" title="Kezdőlap">Füstös Attila</a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#bemutatkozas" title="Bemutatkozás"><p>Bemutatkozás</p><span>filmen</span></a></li>
										<li><a href="#oneletrajz" title="Önéletrajz"><p>Önéletrajz</p><span>papíron</span></a></li>
										<li><a href="#a_cv_mogott" title="A CV mögött"><p>A CV mögött</p><span>döntéseken keresztül</span></a></li>
										<li><a href="#referenciak" title="Referenciák"><p>Referenciák</p><span>képekben</span></a></li>
										<li><a href="#kapcsolat" title="Kapcsolat"><p>Kapcsolat</p><span>élőben</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ESP</a>
							<div class="content">
								<h1>A CV mögött</h1>
								<div id="hu_cv_mogott_scroll" class="vertical-scroll">
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
									<div class="viewport">
										<div class="overview">
											<img src="images/cv_hun.png" class="margin_bottom" alt="A CV mögött" />
											<p>Tíz éves lehettem: "<span>tanulj fiam</span>, előbb eszünk zsíros-kenyeret, minthogy ti ne tanuljatok..."<p>
											<p>Egy évvel az ezredforduló előtt építőmérnök hallgatóként diákköri kutatócsoporttal dolgozom. A társaság jó, a feladatok nagyszerűek, mégis, a Műegyetemmel <span>párhuzamosan beiratkozom</span> az ország legismertebb nappali menedzsment kurzusára. Mindkét szakon egy évvel többet töltök az ideálisnál, de nem baj, mert tudom, hogy az itt szerzett tapasztalatok egyszer még hasznomra válnak...</p>
											<p>Ugorjunk pár évet az időben. Megbecsült hidász mérnök vagyok az egyik patinás hazai műhelyben, metróállomás és világrekorder híd tervezésén dolgozom. Ezek a feladatok egy életre megadják a mérnöki önbecsülést, és arra ösztönöznek, hogy <span>megméressem magam nemzetközi porondon</span> is, ezért Angliába költözöm, és mindent előröl kezdek egy idegen helyen, új környezetben.</p>
											<p>Már két év fél éve dolgozom Londonban. Nemzetközi szinten is jelentős projektekben szerzek tapasztalatokat egy mérnöki tanácsadó cég központjában, ahol a válság ellenére biztos helyem van. Körülöttem sokan nem értik mi vezérel, amikor felmondok és <span>új kihívás elé állítom magam<span>.</p>
											<p><span>mert hiszek valamiben...</span></p>
										</div>
									</div>
								</div>
							</div>
							<a class="next browse">ENG</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li>ESP</li>
									<li class="last active">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					REFERENCIAK
					/////////////////////////
					********************* -->
					<div id="referenciak" class="menuitem">
						<a name="referenciak"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#kezdolap" title="Kezdőlap">Füstös Attila</a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#bemutatkozas" title="Bemutatkozás"><p>Bemutatkozás</p><span>filmen</span></a></li>
										<li><a href="#oneletrajz" title="Önéletrajz"><p>Önéletrajz</p><span>papíron</span></a></li>
										<li><a href="#a_cv_mogott" title="A CV mögött"><p>A CV mögött</p><span>döntéseken keresztül</span></a></li>
										<li><a href="#referenciak" title="Referenciák"><p>Referenciák</p><span>képekben</span></a></li>
										<li><a href="#kapcsolat" title="Kapcsolat"><p>Kapcsolat</p><span>élőben</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ESP</a>
							<div class="content">
								<h1>Referenciák</h1>
								<div id="hu_gallery_scroll" class="horizontal-scroll">
									<div class="viewport">
										<div class="overview">
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/01.jpg" title="Dunaújvárosi Pentele híd: úsztatás">
													<span><img src="images/gallery/01.jpg" alt="Dunaújvárosi Pentele híd: úsztatás" /></span>
													<p>Dunaújvárosi Pentele híd: úsztatás</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/02.jpg" title="Dunaújvárosi Pentele híd: úsztatás madártávlatból">
													<span><img src="images/gallery/02.jpg" alt="Dunaújvárosi Pentele híd: úsztatás madártávlatból" /></span>
													<p>Dunaújvárosi Pentele híd: úsztatás madártávlatból</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/03.jpg" title="Dunaújvárosi Pentele híd: éjszakai pihenő">
													<span><img src="images/gallery/03.jpg" alt="Dunaújvárosi Pentele híd: éjszakai pihenő" /></span>
													<p>Dunaújvárosi Pentele híd: éjszakai pihenő</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/04.jpg" title="Dunaújvárosi Pentele híd: öröm">
													<span><img src="images/gallery/04.jpg" alt="Dunaújvárosi Pentele híd: öröm" /></span>
													<p>Dunaújvárosi Pentele híd: öröm</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/05.jpg" title="Bocskai úti metróállomás: modell">
													<span><img src="images/gallery/05.jpg" alt="Bocskai úti metróállomás: modell" /></span>
													<p>Bocskai úti metróállomás: modell</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/06.jpg" title="Bocskai úti metróállomás: építés közben">
													<span><img src="images/gallery/06.jpg" alt="Bocskai úti metróállomás: építés közben" /></span>
													<p>Bocskai úti metróállomás:<br />építés közben</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/07.jpg" title="Fővámtéri aluljárű: építés közben">
													<span><img src="images/gallery/07.jpg" alt="Fővámtéri aluljárű: építés közben" /></span>
													<p>Fővámtéri aluljárű: építés közben</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/08.jpg" title="Fővámtéri aluljárű: átadás után">
													<span><img src="images/gallery/08.jpg" alt="Fővámtéri aluljárű: átadás után" /></span>
													<p>Fővámtéri aluljárű: átadás után</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/09.jpg" title="London Belvedere projekt: madártávlat">
													<span><img src="images/gallery/09.jpg" alt="London Belvedere projekt: madártávlat" /></span>
													<p>London Belvedere projekt: madártávlat</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/10.jpg" title="London Belvedere projekt: helyszíni szemle">
													<span><img src="images/gallery/10.jpg" alt="London Belvedere projekt: helyszíni szemle" /></span>
													<p>London Belvedere projekt: helyszíni szemle</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/11.jpg" title="Boulevard Bridges (Egyesült Arab Emirátus): építési állapot">
													<span><img src="images/gallery/11.jpg" alt="Boulevard Bridges (Egyesült Arab Emirátus): építési állapot" /></span>
													<p>Boulevard Bridges (Egyesült Arab Emirátus):<br />építési állapot</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/12.jpg" title="Boulevard Bridges (Egyesült Arab Emirátus): átadás előtt">
													<span><img src="images/gallery/12.jpg" alt="Boulevard Bridges (Egyesült Arab Emirátus): átadás előtt" /></span>
													<p>Boulevard Bridges (Egyesült Arab Emirátus):<br />átadás előtt</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/13.jpg" title="London Crossrail vonal tervezése: modell">
													<span><img src="images/gallery/13.jpg" alt="London Crossrail vonal tervezése: modell" /></span>
													<p>London Crossrail vonal tervezése: modell</p>
												</a>
											</div>
											<div class="folio">
												<a class="overlay" rel="hu_gallery" href="images/gallery_big/14.jpg" title="London Crossrail vonal tervezése: Építési fázis, Olimpiai látványterv">
													<span><img src="images/gallery/14.jpg" alt="London Crossrail vonal tervezése: Építési fázis, Olimpiai látványterv" /></span>
													<p>London Crossrail vonal tervezése:<br />Építési fázis, Olimpiai látványterv</p>
												</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
								</div>
								<div class="content">
									<br /><br /><small>A képeket és videorészleteket a következő vállalatok engedélyével használtam fel: <br />Főmterv zRt., HSP Hídépítő Speciál Kft., Mott Macdonald Group Ltd. (UK). </small> 
								</div>
							</div>
							<a class="next browse">ENG</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li>ESP</li>
									<li class="last active">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
					<!-- ********************
					/////////////////////////
					KAPCSOLAT
					/////////////////////////
					********************* -->
					<div id="kapcsolat" class="menuitem">
						<a name="kapcsolat"></a>
						<div class="container">
							<div class="header">
								<h1>
									<a href="#kezdolap" title="Kezdőlap">Füstös Attila</a>
								</h1>
								<div class="nav">
                                	<a href="javascript:eval(window.topSecVar);" class="topSecVar"></a>
                                	<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="homePage"></a>
									<ul>
										<li><a href="#bemutatkozas" title="Bemutatkozás"><p>Bemutatkozás</p><span>filmen</span></a></li>
										<li><a href="#oneletrajz" title="Önéletrajz"><p>Önéletrajz</p><span>papíron</span></a></li>
										<li><a href="#a_cv_mogott" title="A CV mögött"><p>A CV mögött</p><span>döntéseken keresztül</span></a></li>
										<li><a href="#referenciak" title="Referenciák"><p>Referenciák</p><span>képekben</span></a></li>
										<li><a href="#kapcsolat" title="Kapcsolat"><p>Kapcsolat</p><span>élőben</span></a></li>
									</ul>
								</div>
							</div>
							<a class="prev browse">ESP</a>
							<div class="content">
								<h1>Kapcsolat</h1>
								<h4>Füstös Attila</h4>
								<ul class="contact_lines">
									<li>
										<span class="left">Telefon:</span>
										<span class="right">+521.551.359.29.16 <i> (jelenleg Mexikóban)</i></span>
									</li>
									<li>
										<span class="left">Email:</span>
										<span class="right"><a href="mailto:attila@fustos.com">attila@fustos.com</a></span>
									</li>
									<li>
										<span class="left">Linked-In profil</span>
										<span class="right">
											<a class="linkedin" href="http://uk.linkedin.com/in/attilafustos" title="Linked_In" target="_blank">
												<img src="http://www.linkedin.com/img/webpromo/btn_profile_bluetxt_80x15.png" width="80" height="15" border="0" alt="View 's profile on LinkedIn">
											</a>
											<a class="iframe" href="linkedin_hu.html">ajánlásokkal</a>
										</span>
									</li>
									<li>
										<span class="left">Outlook v-Card</span>
										<span class="right">
											<a href="downloads/vcard/attila_fustos_hun.vcf" title="Outlook v-Card">
												<img src="images/vcard.png" alt="Outlook v-Card" />
											</a>
										</span>
									</li>
								</ul>
							</div>
							<a class="next browse">ENG</a>
							<div class="footer">
								<ul class="langs">
									<li>ENG</li>
									<li>ESP</li>
									<li class="last active">HU</li>
								</ul>
								<ul class="navi"></ul>
							</div>
						</div>
					</div>
				</div>
				<!-- -->
			</div>
		</div>
	</body>
</html>

<?php
    //var_dump(Yii::app()->cms->createUrl('Base'));
    //$this->widget('cms.widgets.CmsBlock',array('name'=>'Base'));
?>
