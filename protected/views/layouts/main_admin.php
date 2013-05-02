<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
            
        <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/clientside/js/jquery-ui-1.9.1.custom/css/autoCompleteCSS/jquery-ui-1.9.1.custom.css" rel="stylesheet">
        <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/clientside/js/jquery-ui-1.9.1.custom/js/jquery-1.8.2.js"></script>
        <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/clientside/js/jquery-ui-1.9.1.custom/js/jquery-ui-1.9.1.custom.js"></script>

        <script type="text/javascript">
            //autocomplete miatt hasznaljuk
                var j$191 = $.noConflict(true);
        </script>

        <link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/clientside/js/jQueryUI/css/custom-theme/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/clientside/js/jQueryUI/js/jquery-ui-1.8.20.custom.min.js"></script>
		<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/clientside/js/jquery.maskedinput.js"></script>
	<title><?php echo Yii::app()->getBaseUrl(true); ?></title>
        <style type="text/css">
            /*Datepicker*/
            body {
                    font: 62.5% "Trebuchet MS", sans-serif;
                    color:#000;
            }
            .MSIE8_Class{
                 width:450px;
                 font-size:15px;
                 color:#fff;
            }
            .demoHeaders {
                    margin-top: 2em;
            }
            #dialog_link {
                    padding: .4em 1em .4em 20px;
                    text-decoration: none;
                    position: relative;
            }
            #dialog_link span.ui-icon {
                    margin: 0 5px 0 0;
                    position: absolute;
                    left: .2em;
                    top: 50%;
                    margin-top: -8px;
            }
            ul#icons {
                    margin: 0;
                    padding: 0;
            }
            ul#icons li {
                    margin: 2px;
                    position: relative;
                    padding: 4px 0;
                    cursor: pointer;
                    float: left;
                    list-style: none;
            }
            ul#icons span.ui-icon {
                    float: left;
                    margin: 0 4px;
            }
            #datepicker, #goaMap {
                    float:left;
            }
            .ui-datepicker {
                    width:200px;
                    height:378px;
            }
            .ui-datepicker table {
                    width:200px;
                    height:200px;
            }
            .ui-state-default {
                    height:45px;
            }
            </style>
            <style type="text/css">
            * {
                    border:none;
                    margin:0px;
                    padding:0px;
            }
            table td {
            /*	width:100%;
                    height:100%;*/
            }
            .container {
					border-bottom:2px solid #c3ff05;
					background:#272727;
                    margin:0px auto;
            /*	border:1px solid #ccc;*/
                    width:800px;
                    height:700px;/*	overflow:hidden;*/
            }
            #datepicker {
                    position:relative;
                    margin-top:15px;
                    margin-left:0px;
            }
            #datepickerWeek {
                    margin-top:20px;
                    margin-left:0px;
                    float:left;
                    position:relative;
            }
            #datepickerWeek table{
                    padding:0px;
                    margin:0px;
                    width:520px;
                    height:290px;
            }
            .ui-datepicker td {
                    padding:0px;
                    margin:0px;
            }
            .ui-widget{
                text-align: left;
                float: left;
                margin:17px 17px 17px 24px;
            }
            .ui-autocomplete {
                font-size:18px;
            }
            .ui-widget input{
              width:317px;
              border: 1px solid #ccc;
              /* Safari 5, Chrome support border-radius without vendor prefix.
               * FF 3.0/3.5/3.6, Mobile Safari 4.0.4 require vendor prefix.
               * No support in Safari 3/4, IE 6/7/8, Opera 10.0.

              -moz-border-radius: 10px;
              -webkit-border-radius: 10px;
              border-radius: 10px;
              */
              /* Chrome, FF 4.0 support box-shadow without vendor prefix.
               * Safari 3/4/5 and FF 3.5/3.6 require vendor prefix.
               * No support in FF 3.0, IE 6/7/8, Opera 10.0, iPhone 3.
               * change the offsets, blur and color to suit your design.

              -moz-box-shadow: 2px 2px 3px #666;
              -webkit-box-shadow: 2px 2px 3px #666;
              box-shadow: 2px 2px 3px #666;
              */
              /* using a bigger font for demo purposes so the box isn't too small */
              font-size: 20px;

              /* with a big radius/font there needs to be padding left and right
               * otherwise the text is too close to the radius.
               * on a smaller radius/font it may not be necessary
               */
              padding: 4px 7px;

              /* only needed for webkit browsers which show a rectangular outline;
               * others do not do outline when radius used.
               * android browser still displays a big outline
               */
              outline: 0;

              /* this is needed for iOS devices otherwise a shadow/line appears at the
               * top of the input. depending on the ratio of radius to height it will
               * go all the way across the full width of the input and look really messy.
               * ensure the radius is no more than half the full height of the input, 
               * and the following is set, and everything will render well in iOS.
               */
              -webkit-appearance: none;
            }
            .ui-widget-content {
                    background:none;
                    border:none;
            }
            .ui-widget-content {
                    color:#C3FF05;
            }
            .ui-state-active_ {
                    background:#efefef;
            }
            .weekDayTR {
                    white-space:nowrap;
            }
            .weekDayTR:hover {
            /*	background:#100D0D;*/
                    border:1px solid #C3FF05;
            }
            /*.weekDay:hover {
                    background:#C3FF05;
            }*/
            .datepickerWeekTable span {
                    color:#C3FF05;
            }
            ul.langs {
                    display:none;
            }
            .ui-autocomplete {
                    background:#292929;
            }
            </style>
            <style type="text/css" media="screen">
            div.form
            {
            }

            div.form input,
            div.form textarea,
            div.form select
            {
                    margin: 0.2em 0 0.5em 0;
            }

            div.form fieldset
            {
                    border: 1px solid #DDD;
                    padding: 10px;
                    margin: 0 0 10px 0;
                -moz-border-radius:7px;
            }

            div.form label
            {
                    font-weight: bold;
                    font-size: 0.9em;
                    display: block;
            }

            div.form .row
            {
                    margin: 5px 0;
            }

            div.form .hint
            {
                    margin: 0;
                    padding: 0;
                    color: #999;
            }

            div.form .note
            {
                    font-style: italic;
            }

            div.form span.required
            {
                    color: red;
            }

            div.form div.error label:first-child,
            div.form label.error,
            div.form span.error
            {
                    color: #C00;
            }

            div.form div.error input,
            div.form div.error textarea,
            div.form div.error select,
            div.form input.error,
            div.form textarea.error,
            div.form select.error
            {
                    background: #FEE;
                    border-color: #C00;
            }

            div.form div.success input,
            div.form div.success textarea,
            div.form div.success select,
            div.form input.success,
            div.form textarea.success,
            div.form select.success
            {
                    background: #E6EFC2;
                    border-color: #C6D880;
            }


            div.form .errorSummary
            {
                    border: 2px solid #C00;
                    padding: 7px 7px 12px 7px;
                    margin: 0 0 20px 0;
                    background: #FEE;
                    font-size: 0.9em;
            }

            div.form .errorMessage
            {
                    color: red;
                    font-size: 0.9em;
            }

            div.form .errorSummary p
            {
                    margin: 0;
                    padding: 5px;
            }

            div.form .errorSummary ul
            {
                    margin: 0;
                    padding: 0 0 0 20px;
            }

            div.wide.form label
            {
                    float: left;
                    margin-right: 10px;
                    position: relative;
                    text-align: right;
                    width: 100px;
            }

            div.wide.form .row
            {
                    clear: left;
            }

            div.wide.form .buttons, div.wide.form .hint, div.wide.form .errorMessage
            {
                    clear: left;
                    padding-left: 110px;
            }
            #timeDatasPopUp{
                    border:solid 1px #ccc;
                    padding: 20px;
                    background: #4B4B4B;
                    position: absolute;
                    z-index: 10000;
                    top: 92px;
                    left: 25px;
                    color: white;
                text-align: left;
            }
            #timeDatasPopUp input{
                    padding: 4px;
					font-weight: bold;
            }
            .closePopup {
                    cursor: pointer;
                    width: 100%;
                    height: 20px;
                    background-color: #353535;
                    background-image: url(<?php echo Yii::app()->getBaseUrl(true); ?>/images/close_btn.png);
                    background-position: right;
                    background-repeat: no-repeat;
                    margin-bottom: 10px;
                    font-size: 14px;
                    text-align: center;
                    color: white;
                    font-weight: bold;
                    border: 1px solid white;
            }
            h3, h4 {
                    font-size: 16px;
                    white-space: normal;
                    width: 155px;
            }
            .autocompleteClass{
                padding-left: 40px;
                margin:1px 17px 17px 246px;
            }
            div.form .required {
                font-size:14px;
                font-weight: normal;
            }
            #timeDatas_container{
                width: 100%;
                height: 0px;
                position: absolute;
                top: 0px;
                text-align:center;
            }
            .tGif {
                width:70px;
            }
            .datepickerWeekTable th {
                min-width: 60px;
            }
            .datepickerWeekTable .weekDay {
                border-top:1px solid #1A1615;
                border-left:1px solid #1A1615;
                    white-space:normal;
                    overflow:hidden;
                    height:45px;
                    max-width:49px;
            }
	    #timeDatasPopUp .ui-state-default {
		height:25px;
	    }
		#room {
			width: 800px;
			background: #3C3C3C;
			color: #c3ff05;
			font-weight: bold;
			font-size: 25px;
			padding: 5px 5px 5px 21px;
		}
		#roomChanger {
			border-bottom:1px solid #c3ff05;
		}
            </style>
            <script type="text/javascript">		
			var log = function (e) {
			    console.log(e)
			};

			window.json = null;
			window.timeListRate = 0;
			window.ajaxKeydownTimer = new Array(); //validalo fuggveny belso timerobjektuma
			window.jsonValue = new Array(); //asszociativ json az inputok ertekeinek tarolasara
			window.timeStrBillingName = new Array(); //az idopontot lefoglalo szemelynek a nevet tartalmazza

			window.greenColor = '#C3FF05';
			window.globalAjaxDateFrom = null;
			window.globalAjaxDateTo = null;


			var ajaxURL = '';
			var roomObj = '';
			var roomStr = '';

			window.appointment_codeObj = new Array();

			$(document).ready(function (e) {
			    roomStr = $("#room option:selected").text();
			    roomObj = 'room/' + roomStr + '/'; //megallapitjuk, hogy melyik szobahoz tartozo ajax url-t kell meghivni Pl: madness, vagy rabbithole

			    if (window == window.top) {
			        $('body').css({
			            background: '#333'
			        });
			    }

			    //az 'ajaxFormFn()' fuggvennyel beajaxolt popup-okat ezzel lehet bezarni
			    $('.closePopup').live('click', function (e) {
			        $(e.target).parent().remove();
			    });

			    //kivalasztja az admin az aktualis szobat
			    $("#room").change(function () {
			        roomObj = 'room/' + $("#room option:selected").text() + '/';
			        ajaxURL = '<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/nimda/ListTimesAdmin/' + roomObj + '';

			        clearInterval(window.ajaxJsonFnTimer);

			        window.ajaxJsonFn('weekDateFn');
			    });

			    // Datepicker
			    $.datepicker.regional['hu'] = {
			        monthNames: ['01', '02', '03', '04', '05', '06',
			                '07', '08', '09', '10', '11', '12'
			        ],
			        //		monthNames: ['Január', 'Február', 'Március', 'Április', 'Május', 'Június',
			        //		'Július', 'Augusztus', 'Szeptember', 'Október', 'November', 'December'],
			        monthNamesShort: ['Jan', 'Feb', 'Már', 'Ápr', 'Máj', 'Jún',
			                'Júl', 'Aug', 'Szep', 'Okt', 'Nov', 'Dec'
			        ],
			        dayNames: ['Vasárnap', 'Hétfö', 'Kedd', 'Szerda', 'Csütörtök', 'Péntek', 'Szombat'],
			        dayNamesShort: ['Vas', 'Hét', 'Ked', 'Sze', 'Csü', 'Pén', 'Szo'],
			        dayNamesMin: ['V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo'],
			        dateFormat: 'yyyy-mm-dd',
			        firstDay: 1,
			        prevText: '&laquo;&nbsp;vissza',
			        prevStatus: '',
			        prevJumpText: '&#x3c;&#x3c;',
			        prevJumpStatus: '',
			        nextText: 'előre&nbsp;&raquo;',
			        nextStatus: '',
			        nextJumpText: '&#x3e;&#x3e;',
			        nextJumpStatus: '',
			        currentText: 'ma',
			        currentStatus: '',
			        todayText: 'ma',
			        todayStatus: '',
			        clearText: 'törlés',
			        clearStatus: '',
			        closeText: 'bezárás',
			        closeStatus: '',
			        yearStatus: '',
			        monthStatus: '',
			        weekText: 'Hé',
			        weekStatus: '',
			        dayStatus: 'D, M d',
			        defaultStatus: '',
			        showMonthAfterYear: true,
			        isRTL: false
			    };

			    $.datepicker.setDefaults($.datepicker.regional['hu']);

			    $('#datepicker').datepicker({
			        inline: true,
			        showOtherMonths: true,
			        onSelect: function (dateText, TagretObject) {
			            weekFn(dateText, TagretObject)
			        }
			    });

			    //ezzel a fuggvennyel lehet a popupokat beh�vni a hetes bontasu naptar valamely idopontjara valo kattintas utan
			    window.ajaxFormFn = function (dateObj_loc) {
			        var urlStr = '<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/nimda/getBillFormAdmin/' + roomObj + '';
			        $.ajax({
			            'method': 'post',
			            'success': function (data) {
			                if ($('#timeDatasPopUp').size() != 0) { //ha van mar form megnyitva, toroljuk
			                    $('#timeDatasPopUp').remove();
			                }

			                //a beajaxolt adminos form popupja itt kerul be a feluletbe
			                //majd miutan a DOM reszeve valt megjelenitjuk a popupot, eltuntetjuk a save gombot, validaljuk az inputok erteket, ha van benn�k tartalom
			                $('#timeDatas_container').append("<div id=\"timeDatasPopUp\"><div class=\"closePopup\">Close<\/div><div id=\"timeDatas\">" + data + "<\/div><script type=\"text\/javascript\">$(\'#timeDatas\').show();$(\'#timeDatasPopUp\').dialog(\'open\');$(\"#admin-appointment-form\").find(\'input\').eq($(\"#admin-appointment-form\").children().find(\'input\').index()+2).css({visibility:\'hidden\'});$('#timeDatasPopUp').find('.ui-state-default').addClass('__notTheDatePicker__');inputTriggerFn();inputMask();/*$(\'.ui-draggable\').draggable();*/<\/script><\/div>");

			                return false;
			            },
			            'type': 'POST',
			            'url': urlStr + '?ts=' + new Date().getTime() + '',
			            'cache': false,
			            'data': {
			                dateTime: '' + dateObj_loc + '',
			                room: '' + roomStr + ''
			            }
			        });
			    }

			    //////////////////////////////////////////////////////////////////////////////////////////////
			    //INPUT VALIDATING BLOCK BEGIN
			    //////////////////////////////////////////////////////////////////////////////////////////////
			    //validalo fuggveny, amivel az aktualis formokat ellenorizzuk, hogy helyesen vannak-e kitoltve
			    //////////////////////////////////////////////////////////////////////////////////////////////

			    function validateFn() {
			        var arg0 = arguments[0];
			        var arg1 = arguments[1];
			        var arg2 = arguments[2];
			        window.jsonValue['' + arg1 + ''] = ''; //minden input peldanyhoz keszitunk input.value ertek tarolot
			        window.ajaxKeydownTimer['' + arg1 + ''] = ''; //minden input peldanyhoz keszitunk timert

			        return function () {
			            var arg0Loc = arguments[0];
			            var arg1Loc = arguments[1];
			            var eventObj = arguments[2];

			            var arg1LocVal = $('' + arg1Loc + '').val(); //ez az adot input aktualis erteke

			            //csak akkor ellenoriz ajax-al, ha van erteke az inpupnak, vagy billentyure nyomtunk az inputban, 
			            //vagy kattintottunk annak erdekeben, hogy elohozzuk a bongeszo elmentett input informacioit
			            if (arg1LocVal != '' || eventObj.type == 'dblclick' || eventObj.keyCode || eventObj.type == 'click') {
			                try {
			                    clearInterval(window.ajaxKeydownTimer['' + arg1Loc + '']);
			                } catch (e) {}

			                window.ajaxKeydownTimer['' + arg1Loc + ''] = setInterval(function () {
			                    //ellenorizzuk azt, hogy valtozott-e az input erteke az elozo fuggveny futas ota
			                    if (window.jsonValue['' + arg1Loc + ''] == $('' + arg1Loc + '').val()) {
			                        //csak akkor toroljuk a timer loop-ot, ha azonos az erteke az inpupnak az elozo allapothoz kepest es lefele nyilra nem nyomtunk az inputban, 
			                        //es nem kattintottunk annak erdekeben, hogy elohozzuk a bongeszo elmentett input informacioit
			                        if (eventObj.type != 'dblclick' && eventObj.keyCode != 40 && eventObj.keyCode != 38 && eventObj.type != 'click') {
			                            clearInterval(window.ajaxKeydownTimer['' + arg1Loc + '']);
			                        }
			                        return;
			                    }

			                    window.jsonValue['' + arg1Loc + ''] = $('' + arg1Loc + '').val();

			                    $.ajax({
			                        'method': 'get',
			                        'success': function (data) {
			                            if (String(data) == '0') {
			                                $('' + arg1Loc + '').attr('data-valid', '0');
			                                $('' + arg1Loc + '').parent().children().eq(0).find('span').css({
			                                    visibility: 'visible'
			                                }); //megjelenitjuk a csillagot
			                                var validIndObj = $('#admin-appointment-form').find('input').filter(function () { //megszamoljuk a valid inputok szamat
			                                    return $(this).attr('data-valid') == true;
			                                }).size();
			                                if (validIndObj == 6) //eltuntetjuk, megjelenitjuk a mentes gombot
			                                    $("#admin-appointment-form").find('input').eq($("#admin-appointment-form").children().find('input').index() + 2).css({
			                                        visibility: 'visible'
			                                    });
			                                if (validIndObj != 6) //eltuntetjuk, megjelenitjuk a mentes gombot
			                                    $("#admin-appointment-form").find('input').eq($("#admin-appointment-form").children().find('input').index() + 2).css({
			                                        visibility: 'hidden'
			                                    });
			                            }
			                            if (String(data) == '1') {
			                                $('' + arg1Loc + '').attr('data-valid', '1');
			                                $('' + arg1Loc + '').parent().children().eq(0).find('span').css({
			                                    visibility: 'hidden'
			                                }); //eltuntetjuk a csillagot
			                                var validIndObj = $('#admin-appointment-form').find('input').filter(function () { //megszamoljuk a valid inputok szamat
			                                    return $(this).attr('data-valid') == true;
			                                }).size();
			                                if (validIndObj == 6) //eltuntetjuk, megjelenitjuk a mentes gombot
			                                    $("#admin-appointment-form").find('input').eq($("#admin-appointment-form").children().find('input').index() + 2).css({
			                                        visibility: 'visible'
			                                    });
			                                if (validIndObj != 6) //eltuntetjuk, megjelenitjuk a mentes gombot
			                                    $("#admin-appointment-form").find('input').eq($("#admin-appointment-form").children().find('input').index() + 2).css({
			                                        visibility: 'hidden'
			                                    });
			                            }
			                        },
			                        'type': 'GET',
			                        'url': '<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/ExitAppointment/' + arg0Loc + '' + '' + $('' + arg1Loc + '').val() + '' + '?ts=' + new Date().getTime() + '',
			                        'cache': false
			                        //	                        'data':{ dateTime : ''+dateObj_loc+'' }
			                    });

			                    clearInterval(window.ajaxKeydownTimer['' + arg1Loc + '']);
			                }, 500);
			            }
			        }
			    }


			    //maszkoljuk a form imputjait
			    ///////////////////////////////////
			    window.inputMask = function () {
			        //		$.mask.definitions['~']='[06]';
			        //		$("#BillingInformations_payer_name").mask("99/99/9999");
			        $("#BillingInformations_payer_phone").mask("99999999999", {
			            placeholder: " _"
			        });
			        $("#BillingInformations_payer_zipcode").mask("9999", {
			            placeholder: " _"
			        });
			        //		$("#BillingInformations_payer_city").mask("99/99/9999");
			        //		$("#BillingInformations_payer_street").mask("99/99/9999");
			        //		$("#BillingInformations_payer_housenum").mask("99/99/9999");
			    };

			    //meg triggereljuk a form imputjait
			    ///////////////////////////////////
			    window.inputTriggerFn = function () {
			        if ($('#AppointmentStatus_status_id')[0].selectedIndex == 0) {
			            $('#AppointmentStatus_status_id')[0].selectedIndex = 1;
			        }

			        try {
			            clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_name']);
			            clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_phone']);
			            clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_zipcode']);
			            clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_city']);
			            clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_street']);
			            clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_housenum']);
			        } catch (e) {}

			        //peldenyositjuk a 'validateFn()' fuggvenyt
			        BillingInformations_payer_name = new validateFn('validatePayerName/payer_name/', '#BillingInformations_payer_name');
			        BillingInformations_payer_phone = new validateFn('validatePayerPhone/payer_phone/', '#BillingInformations_payer_phone');
			        BillingInformations_payer_zipcode = new validateFn('validatePayerZipcode/payer_zipcode/', '#BillingInformations_payer_zipcode');
			        BillingInformations_payer_city = new validateFn('validatePayerCity/payer_city/', '#BillingInformations_payer_city');
			        BillingInformations_payer_street = new validateFn('validateAddress/payer_address/', '#BillingInformations_payer_street');
			        BillingInformations_payer_housenum = new validateFn('validatePayerHousenum/payer_housenum/', '#BillingInformations_payer_housenum');

			        $('#admin-appointment-form').find('input').filter(function () { //vegig triggereljuk a textType inputokat
			            if ($(this).attr('type') == 'text') $(this).trigger('click');
			            return $(this).attr('type') == 'text';
			        });
			    }

			    //peldanyositjuk a 'validateFn()' fuggvenyt
			    var BillingInformations_payer_name = new validateFn('validatePayerName/payer_name/', '#BillingInformations_payer_name');
			    var BillingInformations_payer_phone = new validateFn('validatePayerPhone/payer_phone/', '#BillingInformations_payer_phone');
			    var BillingInformations_payer_zipcode = new validateFn('validatePayerZipcode/payer_zipcode/', '#BillingInformations_payer_zipcode');
			    var BillingInformations_payer_city = new validateFn('validatePayerCity/payer_city/', '#BillingInformations_payer_city');
			    var BillingInformations_payer_street = new validateFn('validateAddress/payer_address/', '#BillingInformations_payer_street');
			    var BillingInformations_payer_housenum = new validateFn('validatePayerHousenum/payer_housenum/', '#BillingInformations_payer_housenum');

			    //bejegyezzuk a pedanyositott 'validateFn()' fuggveny meghivasokat esemenyfigyelokre
			    $("#BillingInformations_payer_name").live('keydown click blur focus mouseout mouseover mousemove dblclick', function (event) {
			        BillingInformations_payer_name('validatePayerName/payer_name/', '#BillingInformations_payer_name', event);
			    });
			    $("#BillingInformations_payer_phone").live('keydown click blur focus mouseout mouseover mousemove dblclick', function (event) {
			        BillingInformations_payer_phone('validatePayerPhone/payer_phone/', '#BillingInformations_payer_phone', event);
			    });
			    $("#BillingInformations_payer_zipcode").live('keydown click blur focus mouseout mouseover mousemove dblclick', function (event) {
			        BillingInformations_payer_zipcode('validatePayerZipcode/payer_zipcode/', '#BillingInformations_payer_zipcode', event);
			    });
			    $("#BillingInformations_payer_city").live('keydown click blur focus mouseout mouseover mousemove dblclick', function (event) {
			        BillingInformations_payer_city('validatePayerCity/payer_city/', '#BillingInformations_payer_city', event);
			    });
			    $("#BillingInformations_payer_street").live('keydown click blur focus mouseout mouseover mousemove dblclick', function (event) {
			        BillingInformations_payer_street('validateAddress/payer_address/', '#BillingInformations_payer_street', event);
			    });
			    $("#BillingInformations_payer_housenum").live('keydown click blur focus mouseout mouseover mousemove dblclick', function (event) {
			        BillingInformations_payer_housenum('validatePayerHousenum/payer_housenum/', '#BillingInformations_payer_housenum', event);
			    });
			    //////////////////////////////////////////////////////////////////////////////////////////////
			    //INPUT VALIDATING BLOCK END
			    //////////////////////////////////////////////////////////////////////////////////////////////

			    window.weekFn = function (dt, targObj) {
			        try {
			            if ($.browser.msie) {
			                //				$('.ui-datepicker-calendar').find("a:contains('"+dtGlobal[2]+"')").trigger('click');		
			                if ($(targObj)[0].tagName.toLowerCase() == 'a') {}
			            }
			        } catch (e) {}
			    }

			    function targFn(e) {
			        e = e || window.event;
			        var targ = e.target || e.srcElement;

			        if (targ.nodeType == 3) { // defeat Safari bug
			            targ = targ.parentNode;
			        }

			        return targ;
			    }
			    window.dateFn = function (d) {
			        if (d == '') d = new Date();
			        return (d.getFullYear() + '-' + _fillzero(d.getMonth() + 1) + '-' + _fillzero(d.getDate()) + ' ' + _fillzero(d.getHours()) + ':' + _fillzero(d.getMinutes()) + ':00');
			    }

			    function _fillzero(n) {
			        if (n <= 9) {
			            return ('0' + n);
			        } else {
			            return (n);
			        }
			    }

			    window.dateFormatFn = function (t) {
			        if (t == '') return (new Date());
			        t = t.replace(' ', '-');
			        t = t.replace(':', '-');
			        t = t.replace(':', '-');
			        t = t.split('-');
			        return (new Date(parseInt(t[0], 10), parseInt(t[1], 10) - 1, parseInt(t[2], 10), parseInt(t[3], 10), parseInt(t[4], 10), 0));
			    }


			    $(document).bind('click mouseover mouseout mousemove keydown', function (e) {
			        var targObj = targFn(e);
			        window.globalTagrObj = targObj;
			        var dateObj = '';

			        var selectClass = '' + $(globalTagrObj).attr('class') + '';

			        if (e.keyCode == 27) { //ESC
			            //ha van soft popup azt zarjuk be esc lenyomasara
			            //es a popupban levo timereket kiutjuk
			            if ($('#timeDatasPopUp').size() != 0) {
			                try {
			                    clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_name']);
			                    clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_phone']);
			                    clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_zipcode']);
			                    clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_city']);
			                    clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_street']);
			                    clearInterval(window.ajaxKeydownTimer['#BillingInformations_payer_housenum']);
			                } catch (e) {}

			                $('#timeDatasPopUp').remove();
			            }
			        }

			        if (e.type == 'mousemove') {
			            //            inputTriggerFn();
			        }

			        if (e.type == 'mouseout') {
			            //a Datepicker esemenyei
			            if (selectClass.indexOf('ui-state-default') != -1 && selectClass.indexOf('__notTheDatePicker__') == -1) { //if($(targObj).hasClass('ui-state-default') == true){
			                $(targObj).parent().parent().find('a, span').removeClass('ui-state-active');
			            }
			        }

			        if (e.type == 'mouseover') {
			            //a Datepicker esemenyei
			            if (selectClass.indexOf('ui-state-default') != -1 && selectClass.indexOf('__notTheDatePicker__') == -1) { //if($(targObj).hasClass('ui-state-default') == true){
			                $('.ui-state-active').removeClass('ui-state-active');
			                $(targObj).parent().parent().children().each(function (i, v) {
			                    $(targObj).parent().parent().children().children().eq(i).addClass('ui-state-active'); //$(targObj).parent().parent().children().children().eq(i).text()
			                });
			            }
			        }

			        if (e.type == 'click') {
			            //a Datepicker esemenyei
			            if (selectClass.indexOf('ui-state-default') != -1 && selectClass.indexOf('__notTheDatePicker__') == -1) { //if($(targObj).hasClass('ui-state-default') == true){
			                //csak az "A" tagokra valo kattintaskor fut le
			                if ($(targObj)[0].tagName.toLowerCase() == 'a') {
			                    $(targObj).parent().parent().parent().find('a, span').filter(function () {
			                        return $(this).parent().parent().children().children().hasClass('.ui-state-active') != true;
			                    }).attr('style', '');

			                    $('.ui-state-active').parent().parent().find('a').addClass('ui-state-active');
			                    $('.ui-state-active').parent().parent().find('a').css({
			                        background: '#efefef',
			                        color: '#333'
			                    });
			                }

			                //csak a "span" tagokra valo kattintaskor fut le
			                if ($(targObj)[0].tagName.toLowerCase() == 'span') {
			                    $('.ui-state-active').removeClass('ui-state-active');

			                    $(targObj).parent().parent().parent().find('a, span').filter(function () {
			                        return $(this).parent().parent().children().children().hasClass('.ui-state-active') != true;
			                    }).attr('style', '');

			                    $(targObj).parent().parent().find('a, span').addClass('ui-state-active');
			                    $(targObj).parent().parent().find('a, span').css({
			                        background: '#efefef',
			                        color: '#333'
			                    });
			                }

			                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			                //minden Datepicker-es click-nel feltolti szamokkal a naptarat es beallitja a napok datum (html) elemeinek attributumait
			                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			                var mountDay = 0;
			                var yearObj = $('.ui-datepicker-year').text();
			                var mounthObj = $('.ui-datepicker-month').text();

			                //ha az akutalis hetnek az elso napja a naptar legelso napja, akkor honapvaltast csinal, amig a lenti 'if(dayObj_ < mountDay)' feltetelben vissza nem noveli a honap szamat
			                var currentDayObj = Number($(targObj).parent().parent().children().children().first().text());
			                var currentweekEndObj = Number($(targObj).parent().parent().children().children().last().text());

			                //ha az akutalis hetnek az elso napja a naptar legelso napja, akkor honapvaltast csinal, amig a lenti 'if(dayObj_ < mountDay)' feltetelben vissza nem noveli a honap szamat
			                var currentDayObj = Number($(targObj).parent().parent().children().children().eq(0).text());
			                //                            if(currentDayObj == $('.ui-datepicker-calendar').children().children().eq(1).children().eq(0).text() && currentDayObj != $('.ui-datepicker-calendar').children().children().last().children().eq(0).text() && currentDayObj > 7){
			                if (currentDayObj == $('.ui-datepicker-calendar').children().children().eq(1).children().eq(0).text() && currentDayObj != $('.ui-datepicker-calendar').children().children().last().children().eq(0).text() && currentDayObj > 7) {
			                    mounthObj = Number(mounthObj);
			                    mounthObj--;
			                    if (mounthObj == 0) {
			                        mounthObj = 12;
			                        yearObj = '' + (Number(yearObj) - 1) + '';
			                    }
			                    if (Number(mounthObj) < 10) {
			                        mounthObj = '0' + mounthObj + '';
			                    }
			                }

			                $(targObj).parent().parent().children().each(function (i, v) {
			                    var dayObj_ = '';
			                    var dateObj_ = '';
			                    var fontObj = $('.datepickerWeekTable').find('tr').eq(1).children().eq(i + 1).children();
			                    var fontObj2 = $('.datepickerWeekTable').find('tr').eq(0).children().eq(i + 1).children();
			                    if ($(v).children().hasClass('ui-state-highlight') == true) {
			                        fontObj.css({
			                            fontSize: '30px'
			                        });
			                        fontObj2.css({
			                            fontSize: '14px'
			                        });
			                        fontObj.css({
			                            background: '#C3FF05'
			                        });
			                        fontObj.css({
			                            color: '#000'
			                        });
			                    } else {
			                        fontObj.css({
			                            fontSize: '20px'
			                        });
			                        fontObj2.css({
			                            fontSize: '10px'
			                        });
			                        fontObj.css({
			                            background: 'none'
			                        });
			                        fontObj.css({
			                            color: '#C3FF05'
			                        });
			                    }
			                    $('.datepickerWeekTable').find('tr').eq(1).children().eq(i + 1).children().text('' + $(targObj).parent().parent().children().children().eq(i).text() + '');

			                    $('.datepickerWeekTable').find('div').eq(0).text('' + $('.ui-datepicker-year').text() + '  ' + $('.ui-datepicker-month').text() + '');

			                    //feltoltjuk az atributumait a teljes datummal
			                    var dayObj_ = $(v).children().text();
			                    var dateObj = '';

			                    if (Number(dayObj_) < Number(mountDay)) {
			                        try {
			                            mounthObj = Number(mounthObj);
			                            mounthObj++;
			                            if (mounthObj == 13) {
			                                mounthObj = 1;
			                                yearObj = '' + (Number(yearObj) + 1) + '';
			                            }
			                            if (Number(mounthObj) < 10) {
			                                mounthObj = '0' + mounthObj + '';
			                            }
			                        } catch (e) {
			                            mounthObj = mounthObj.split('0');
			                            if (mounthObj[1] == '9')
			                                mounthObj = '10';
			                            else {
			                                mounthObj = '0' + (number(mounthObj[1]) + 1) + '';
			                            }
			                        }
			                    }

			                    mountDay = dayObj_;

			                    if (Number(dayObj_) < 10) {
			                        dateObj = '0' + String(dayObj_) + '';
			                    } else {
			                        dateObj = '' + dayObj_ + '';
			                    }

			                    fontObj.attr('data-day', '' + yearObj + '-' + mounthObj + '-' + dateObj + ' ');

			                });

			                //ha az elso hetre kettintottunk, akkor nincs onclick attributum, ha az elozo honap vegevel kezdotik a het
			                //ekkor az elso het utolso napjabol csinalunk datum objektumot es kivonunk egy hetet
			                if (!$(targObj).parent().parent().children().children().first().parent().attr('onclick')) {
			                    var d = new Date(dateFormatFn($('.ui-datepicker-year').text() + '-' + $('.ui-datepicker-month').text() + '-' + currentweekEndObj + ' 01:00:00') - 518400000)
			                    d = dateFn(d);
			                    window.globalAjaxDateFrom = d;
			                } else {
			                    window.globalAjaxDateFrom = $('.ui-datepicker-year').text() + '-' + $('.ui-datepicker-month').text() + '-' + currentDayObj + ' 01:00:00';
			                }

			                window.globalAjaxDateTo = $('.ui-datepicker-year').text() + '-' + $('.ui-datepicker-month').text() + '-' + currentweekEndObj + ' 01:00:00';

//			                ajaxURL = '<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/exitAppointment/ListTimes/' + roomObj + 'from/' + globalAjaxDateFrom + ''; ///to/'+globalAjaxDateTo;
							ajaxURL = '<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/nimda/ListTimesAdmin/' + roomObj + '';
							
							log('click');

					        clearInterval(window.ajaxJsonFnTimer);
			                window.ajaxJsonFn('weekDateFn');

							//ezeknek kell lefutnia egymas utan:
							///////////////////////////////////
							//ajaxJsonFn
							//weekDateFn
							//statusInitFn

			                //leszedjuk par masodpercenkent az uj jsont es ujra feldolgozzuk
			                clearInterval(window.ajaxJsonFnTimer);
			                window.ajaxJsonFnTimer = setInterval(function () {
//			                    window.ajaxJsonFn();
			                }, 5000);


			                //felfrissitjuk a napok foglalasi orainak statuszait
//			                statusInitFn();
			            }
			            /////////////////////////////
			            //A naptar napjaira kattintva
			            /////////////////////////////
			            /////////////////////////////
			            if ($(targObj).hasClass('weekDay') == true) {
			                if ($(targObj).attr('data-day').split('_')[1] > 0 && $(targObj).attr('data-statusname') != 'undefined') {
			                    var iElem = $(targObj).parent().index();
			                    var dayObj = '';
			                    var dayObj_ = $('.datepickerWeekTable').find('tr').eq(1).children().eq((Number(iElem))).children().attr('data-day');

			                    if (Number(dayObj_) < 10) {
			                        dayObj = '0' + String(dayObj_) + '';
			                    } else {
			                        dayObj = '' + dayObj_ + '';
			                    }

			                    //levalasztjuk a kezdo idopontot az adot sor elejen levo idopont kiirasrol es hozzafuzzuk a kezdoidoponthoz a masodpercet
			                    var hourObj = $(targObj).attr('data-hourfrom');

			                    dateObj = '' + dayObj + '' + hourObj + '';

			                    ///////////////// Ide kell egy AJAX hívás ///////////////
			                    ajaxFormFn(dateObj);
			                    ///////////////// Ide kell egy AJAX hívás ///////////////

			                }
			            }
			        }
			    });

			    //////////////////////////////// JSON feldolgozas /////////////////////////////////////
			    //Feltoltjuk a hetes tablazat foglalasi orait
			    window.weekDateFn = function () {
					log('weekDateFn');
			        $('.weekDayTR').remove();
			        window.strWeekDateVar = "";
			        var thisDayObj = '' + $('.ui-datepicker-year').text() + '-' + $('.ui-datepicker-month').text() + '';
			        var jsonObj = '';
			        for (var i = 0; i < window.timeListRate /*json.times.length*/ ; i++) {
			            //		jsonObj = json.times[i].time.split(' ')[1].substring(0,5);
			            jsonObj = json.appointments[i].till;
			            strWeekDateVar += "	<tr class=\"weekDayTR index_" + (i + 2) + "\">";
			            strWeekDateVar += "      <td style=\"padding:3px;\"><div style=\"padding:2px; font-weight: bold; color:#C3FF05; display:block; text-align:right;\">" + json.appointments[i].till.substring(0, 5) + " - " + json.appointments[i].till.substring(11, 16) + "<\/div><\/td>";
			            strWeekDateVar += "      <td style=\"background:#1A1615;\"><div class=\"weekDay class_" + (i + 2) + "_1\" data-day=\"" + (i + 2) + "_1\" data-hourfrom=\"" + jsonObj.substring(0, 8) + "\" onmouseout=\"weekDayMouseOutFn(this)\" onmouseover=\"weekDayMouseOverFn(this)\" style=\"background:#1A1615; padding:5px; display:block; text-align:center; cursor:pointer; vertical-align:middle;\">&nbsp;<\/div><\/td>";
			            strWeekDateVar += "      <td style=\"background:#1A1615;\"><div class=\"weekDay class_" + (i + 2) + "_2\" data-day=\"" + (i + 2) + "_2\" data-hourfrom=\"" + jsonObj.substring(0, 8) + "\" onmouseout=\"weekDayMouseOutFn(this)\" onmouseover=\"weekDayMouseOverFn(this)\" style=\"background:#1A1615; padding:5px; display:block; text-align:center; cursor:pointer; vertical-align:middle;\">&nbsp;<\/div><\/td>";
			            strWeekDateVar += "      <td style=\"background:#1A1615;\"><div class=\"weekDay class_" + (i + 2) + "_3\" data-day=\"" + (i + 2) + "_3\" data-hourfrom=\"" + jsonObj.substring(0, 8) + "\" onmouseout=\"weekDayMouseOutFn(this)\" onmouseover=\"weekDayMouseOverFn(this)\" style=\"background:#1A1615; padding:5px; display:block; text-align:center; cursor:pointer; vertical-align:middle;\">&nbsp;<\/div><\/td>";
			            strWeekDateVar += "      <td style=\"background:#1A1615;\"><div class=\"weekDay class_" + (i + 2) + "_4\" data-day=\"" + (i + 2) + "_4\" data-hourfrom=\"" + jsonObj.substring(0, 8) + "\" onmouseout=\"weekDayMouseOutFn(this)\" onmouseover=\"weekDayMouseOverFn(this)\" style=\"background:#1A1615; padding:5px; display:block; text-align:center; cursor:pointer; vertical-align:middle;\">&nbsp;<\/div><\/td>";
			            strWeekDateVar += "      <td style=\"background:#1A1615;\"><div class=\"weekDay class_" + (i + 2) + "_5\" data-day=\"" + (i + 2) + "_5\" data-hourfrom=\"" + jsonObj.substring(0, 8) + "\" onmouseout=\"weekDayMouseOutFn(this)\" onmouseover=\"weekDayMouseOverFn(this)\" style=\"background:#1A1615; padding:5px; display:block; text-align:center; cursor:pointer; vertical-align:middle;\">&nbsp;<\/div><\/td>";
			            strWeekDateVar += "      <td style=\"background:#1A1615;\"><div class=\"weekDay class_" + (i + 2) + "_6\" data-day=\"" + (i + 2) + "_6\" data-hourfrom=\"" + jsonObj.substring(0, 8) + "\" onmouseout=\"weekDayMouseOutFn(this)\" onmouseover=\"weekDayMouseOverFn(this)\" style=\"background:#1A1615; padding:5px; display:block; text-align:center; cursor:pointer; vertical-align:middle;\">&nbsp;<\/div><\/td>";
			            strWeekDateVar += "      <td style=\"background:#1A1615;\"><div class=\"weekDay class_" + (i + 2) + "_7\" data-day=\"" + (i + 2) + "_7\" data-hourfrom=\"" + jsonObj.substring(0, 8) + "\" onmouseout=\"weekDayMouseOutFn(this)\" onmouseover=\"weekDayMouseOverFn(this)\" style=\"background:#1A1615; padding:5px; display:block; text-align:center; cursor:pointer; vertical-align:middle;\">&nbsp;<\/div><\/td>";
			            strWeekDateVar += "    <\/tr>";
			            strWeekDateVar += "";
			        }
			        //meghivjuk append utan a 'statusInitFn()' fuggvenyt
			        strWeekDateVar += "	<tr class=\"weekDayTR\" style=\"visibility:hidden;\">";
			        strWeekDateVar += "      <td ><div class=\"scriptTagClass\"><script type=\"text\/javascript\">statusInitFn();\/*actualWeekPositionFn();*\/<\/script><\/div><\/td>";
			        strWeekDateVar += " <\/tr>";

			        $('.datepickerWeekTable').append('' + strWeekDateVar + '');
			    }

			    window.statusInitFn = function () {
					log('statusInitFn');
			        $('.datepickerWeekTable').find('tr').eq(1).children().each(function (i, v) {
			            if (i != 0) {
			                var dayObj_ = '';
			                var dateObj_ = '';
			                //ez a hetes bontas ciklusanak az aktualis napjanak a datuma
			                var dateObj_ = $('.datepickerWeekTable').find('tr').eq(1).children().eq(i).children().attr('data-day');
			                var billingName = '';

			                //eloallitjuk az aktualis datum objektumot az akutalis nap ertekenek figyelembe vetelevel
			                for (var ind = 0; ind < Number($('.weekDayTR').size() - 1); ind++) {
			                    var elem = $('.datepickerWeekTable').find('tr').eq(ind + 2).children().eq(i).children();
			                    var dObj = '' + dateObj_ + '' + elem.attr('data-hourfrom') + '';
			                    var billingName = ''; //feldaraboljuk a nevet legfeljebb ketto nevre

			                    try { //ha valakinek a neve haromnal tobb szobol all, akkor is legfeljebb csak kettot irunk ki
			                        billingName = window.timeStrBillingName['' + dObj + ''].split(' ');
			                        if (billingName.length == 1) {
			                            billingName = '' + billingName[0] + '';
			                        }
			                        if (billingName.length > 1) {
			                            billingName = '' + billingName[0] + ' ' + billingName[1] + '';
			                        }
			                    } catch (e) {
			                        billingName = '' + billingName[0] + '';
			                    }

			                    if (window.json.timeStrStatus['' + dObj + '']) {
			                        if (window.json.timeStrStatus['' + dObj + ''] == '1') {
			                            elem.css({
			                                background: '#C3FF05',
			                                color: '#000'
			                            });
			                        } //free
			                        if (window.json.timeStrStatus['' + dObj + ''] == '2') {
			                            elem.css({
			                                background: '#FF0505',
			                                color: '#fff'
			                            });
			                        } //reserved
			                        if (window.json.timeStrStatus['' + dObj + ''] == '3') {
			                            elem.css({
			                                background: '#FF9B05',
			                                color: '#fff'
			                            });
			                        } //booked
			                        if (window.json.timeStrStatus['' + dObj + ''] == '4') {
			                            elem.css({
			                                background: '#1A1615',
			                                color: '#fff'
			                            });
			                        } //other
			                        elem.text(window.json.timeStrStatusName['' + dObj + ''] + '     ' + billingName);
			                    } else {
			                        elem.css({
			                            background: '#1A1615'
			                        });
			                        elem.text('');
			                    }
			                    elem.attr('data-status', '' + window.json.timeStrStatus['' + dObj + ''] + '');
			                    elem.attr('data-statusname', '' + window.json.timeStrStatusName['' + dObj + ''] + '');
//								log(ind+'. data-hourfrom: '+elem.attr('data-hourfrom'));
//								log('var dObj: '+ dObj);
//								if(window.json.timeStrStatusName == 'BOOKED')
//									log('data-statusname: '+window.json.timeStrStatusName['' + dObj + '']);
//									log('data-statusname: '+window.json.timeStrStatus['' + dObj + '']);
			                }
			            }
			        });
			    }

			    window.actualWeekPositionFn = function () {
			        //ezzel lehet meghivni az aktualis naphoz kepest a kovetkezo hetet
			        //ami abban az esetben lehet fontos, amikor mar az aktualis heten nincs foglalasi idopont
			        if ($('.ui-datepicker-current-day').index() >= 5) {
			            //                                    $('.ui-datepicker-current-day').parent().next().children().children().eq(0).trigger('click');
			        }
			    };
			    //free zöld, booked narancs, reserved piros
			    window.weekDayMouseOverFn = function (elem) {
			        if ($(elem).attr('data-statusname') != 'undefined') {
			            //        		 $(elem)[0].style.background = '#C3FF05';
			            var elemInd = String($(elem).attr('data-day'));
			            elemInd = elemInd.split('').reverse().join('');
			            rowInd = String($(elem).attr('data-day'));
			            rowInd = rowInd.split('_')[0];
			            elemInd = Number(elemInd.substring(0, 1));
			            $('.index_' + rowInd + '').eq(0).children().eq(0).stop(true, false).animate({
			                fontSize: '14px'
			            }, 300);

			            $('.datepickerWeekTable').find('th').eq(elemInd).find('span').stop(true, false).animate({
			                fontSize: '15px'
			            }, 300);
			            $('.datepickerWeekTable').find('tr').eq(1).find('td').eq(elemInd).find('div').stop(true, false).animate({
			                fontSize: '37px'
			            }, 300);
			        }
			    }

			    window.weekDayMouseOutFn = function (elem) {
			        if ($(elem).attr('data-statusname') != 'undefined') {
			            //        		 $(elem)[0].style.background = '#1A1615';
			            //visszairatjuk a cella attributumabol az adott nyelvu statusz nevet
			            //    		 $(elem).text(''+$(elem).attr('data-statusname')+'');
			            var elemInd = String($(elem).attr('data-day'));
			            elemInd = elemInd.split('').reverse().join('');
			            rowInd = String($(elem).attr('data-day'));
			            rowInd = rowInd.split('_')[0];
			            elemInd = Number(elemInd.substring(0, 1));
			            $('.index_' + rowInd + '').eq(0).children().eq(0).stop(true, false).animate({
			                fontSize: '10px'
			            }, 300);

			            $('.datepickerWeekTable').find('th').eq(elemInd).find('span').stop(true, false).animate({
			                fontSize: '10px'
			            }, 300);
			            $('.datepickerWeekTable').find('tr').eq(1).find('td').eq(elemInd).find('div').stop(true, false).animate({
			                fontSize: '20px'
			            }, 300);
			        }
			    }

			    ajaxURL = '<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/nimda/ListTimesAdmin/' + roomObj + '';

			    //leszedjuk a json-t es feldolgozzuk, majd kifrissitjuk az adott hetre a json informaciokat
			    window.ajaxJsonFn = function () {
			        var weekDateFnObj = false;
			        if (arguments[0] == 'weekDateFn') {
			            weekDateFnObj = true;
			        }

			        $.ajax({
			            url: '' + ajaxURL + '?ts=' + new Date().getTime() + '',
			            dataType: 'json',
			            cache: 'false',
			            success: function (respose) {
							log('ajaxJsonFn');
			                window.json = respose;
			                var index = 0;
			                window.timeListRate = json.appointments.length;
			                window.json.timeStrStatus = new Array();
			                window.json.timeStrStatusName = new Array();
			                window.json.appointmentsStrStatus = new Array();
			                window.json.appointmentsStrDate = new Array();
			                window.appointment_codeObj = new Array();
			                window.json.timeStrBillingName = new Array();

			                //hozza adjuk a json-unkhoz a datum szerinti asszociativ statusz ertekeket
			                for (timeObj in window.json.times) {
			                    var timesTimeObj = '' + window.json.times[timeObj].time.substring(0, 19) + '';
			                    //itt alakitjuk asszociativan elerhetove a datum alapjan statusz ertekeket
			                    //pl: window.json.timeStrStatus["2012-11-30 13:15:00"];
			                    window.json.timeStrStatus[timesTimeObj] = '' + window.json.times[timeObj].status + '';
			                    window.json.timeStrStatusName[timesTimeObj] = '' + window.json.times[timeObj].status_name.toUpperCase() + '';
			                    try {
			                        window.timeStrBillingName[timesTimeObj] = '' + window.json.times[timeObj].billing_information.payer_name + '';
			                    } catch (e) {
			                        window.timeStrBillingName[timesTimeObj] = '';
			                    };
			                }

			                //csak, ha adminként hivjuk meg (akár iframe-ben) az oldalt, akkor kerdezi le az informaciokat
			                //es asszociativ feltolti az 'appointment_code' tombelemeit 'status_name'-el
			                for (timeObj in window.json.times) {
			                    //itt alakitjuk asszociativan elerhetove a foglalas alapjan a statusz neveket
			                    //pl: window.json.appointmentsStrStatus['509672246e679'];
			                    window.json.appointmentsStrStatus['' + window.json.times[timeObj].appointment_code + ''] = '' + window.json.times[timeObj].status_name + '';
			                    window.json.appointmentsStrDate['' + window.json.times[timeObj].appointment_code + ''] = '' + window.json.times[timeObj].time + '';
			                    //feltoltunk az AUTOCOMPLETE miatt egy jsont az input kiegeszitesehez szukseges informaciokkal, majd a vegen csak az 'appointment_code'-od egeszitjuk
			                    //a listabol valo kivalasztas utan
			                    try {
			                        var payerName = ' - ' + window.json.times[timeObj].billing_information.payer_name + '';
			                    } catch (e) {
			                        var payerName = '';
			                    }
			                    window.appointment_codeObj.push('' + json.times[timeObj].appointment_code + ' - ' + json.times[timeObj].status_name.toUpperCase() + ' - ' + json.times[timeObj].time + '' + payerName + '');
			                }

			                //autocomplete
			                ///////////////////////////
			                j$191("#tags").autocomplete({
			                    source: window.appointment_codeObj,
			                    select: function (event, ui) {
			                        event.preventDefault();
			                        //csak az 'appointment_code' erteket helyezzuk bele az inputba
			                        $("#tags").val(ui.item.value.split(' ')[0]);
			                    }
			                });
			                if (weekDateFnObj == true) {
			                    window.ajaxJsonFnTimer = setInterval(function () {
			                        window.ajaxJsonFn();
			                        //						clearInterval(window.ajaxJsonFnTimer);
			                    }, 5000);
			                    weekDateFn();
			                } else {
			                    statusInitFn();
			                }
			            }
			        });
			    }

			    //leszedjuk par masodpercenkent az uj jsont es ujra feldolgozzuk
			    window.ajaxJsonFnTimer = setInterval(function () {
			        window.ajaxJsonFn();
			        //						clearInterval(window.ajaxJsonFnTimer);
			    }, 5000);

			    //az oldal inicializalodasakor leszedjuk a jsont es feldolgozzuk elsokent, 
			    //majd a naptar es az oldal inicializalodasahoz szukseges fuggvenyeket meghivjuk
			    $.ajax({
			        url: '' + ajaxURL + '?ts=' + new Date().getTime() + '',
			        dataType: 'json',
			        success: function (respose) {
			            window.json = respose;
			            var index = 0;
			            window.timeListRate = json.appointments.length;
			            window.json.timeStrStatus = new Array();
			            window.json.timeStrStatusName = new Array();
			            window.json.appointmentsStrStatus = new Array();
			            window.json.appointmentsStrDate = new Array();
			            window.appointment_codeObj = new Array();

			            //hozza adjuk a json-unkhoz a datum szerinti asszociativ statusz ertekeket
			            for (timeObj in window.json.times) {
			                var timesTimeObj = '' + window.json.times[timeObj].time.substring(0, 19) + '';
			                //itt alakitjuk asszociativan elerhetove a datum alapjan statusz ertekeket
			                //pl: window.json.timeStrStatus["2012-11-30 13:15:00"];
			                window.json.timeStrStatus[timesTimeObj] = '' + window.json.times[timeObj].status + '';
			                window.json.timeStrStatusName[timesTimeObj] = '' + window.json.times[timeObj].status_name.toUpperCase() + '';
			                try {
			                    window.timeStrBillingName[timesTimeObj] = '' + window.json.times[timeObj].billing_information.payer_name + '';
			                } catch (e) {
			                    window.timeStrBillingName[timesTimeObj] = '';
			                };
			            }

			            //csak, ha adminként hivjuk meg (akár iframe-ben) az oldalt, akkor kerdezi le az informaciokat
			            //es asszociativ feltolti az 'appointment_code' tombelemeit 'status_name'-el
			            for (timeObj in window.json.times) {
			                //itt alakitjuk asszociativan elerhetove a foglalas alapjan a statusz neveket
			                //pl: window.json.appointmentsStrStatus['509672246e679'];
			                window.json.appointmentsStrStatus['' + window.json.times[timeObj].appointment_code + ''] = '' + window.json.times[timeObj].status_name + '';
			                window.json.appointmentsStrDate['' + window.json.times[timeObj].appointment_code + ''] = '' + window.json.times[timeObj].time + '';
			                //feltoltunk az AUTOCOMPLETE miatt egy jsont az input kiegeszitesehez szukseges informaciokkal, majd a vegen csak az 'appointment_code'-od egeszitjuk
			                //a listabol valo kivalasztas utan
			                try {
			                    var payerName = ' - ' + window.json.times[timeObj].billing_information.payer_name + '';
			                } catch (e) {
			                    var payerName = '';
			                }
			                window.appointment_codeObj.push('' + json.times[timeObj].appointment_code + ' - ' + json.times[timeObj].status_name.toUpperCase() + ' - ' + json.times[timeObj].time + '' + payerName + '');
			            }

			            //az oldal betoltodese utan inicializaljuk az aktualis hetet a datepicker inicializalodasa utan
			            window.visualWeekPickerInit = function () {
			                $('.ui-state-highlight').parent().parent().children().children().each(function (i, v) {
			                    var dayObj_ = '';
			                    var dateObj_ = '';
			                    var fontObj = $('.datepickerWeekTable').find('tr').eq(1).children().eq(i + 1).children();
			                    var fontObj2 = $('.datepickerWeekTable').find('tr').eq(0).children().eq(i + 1).children();
			                    if ($(v).hasClass('ui-state-highlight') == true) {
			                        fontObj.css({
			                            fontSize: '30px'
			                        });
			                        fontObj2.css({
			                            fontSize: '14px'
			                        });
			                        fontObj.css({
			                            background: '#efefef'
			                        });
			                    } else {
			                        fontObj.css({
			                            fontSize: '20px'
			                        });
			                        fontObj2.css({
			                            fontSize: '10px'
			                        });
			                        fontObj.css({
			                            background: 'none'
			                        });
			                    }
			                    //ez a hetes bontas ciklusanak az aktualis napjanak a datuma
			                    var dayObj_ = $('.ui-state-highlight').parent().parent().children().children().eq(i).text();
			                    var dateObj = '';
			                    fontObj.text('' + dayObj_ + '');
			                });
			            };
			            window.visualWeekPickerInit();

			            $('.ui-state-highlight').trigger('click');

			            $('.ui-state-highlight').parent().parent().find('a').addClass('ui-state-active');

			            //a datepickerbol kiolvassuk az aktualis nyelvu het napjait es feltoltjuk vele a hetek napjait
			            //pl: h k sz cs p sz v
			            $('.ui-datepicker-calendar').children().children().find('th').each(function (i, v) {
			                i++;
			                $('.datepickerWeekTable').find('th').eq(i).children().text($(v).text());
			            });

			            //autocomplete
			            ///////////////////////////
			            j$191("#tags").live('keypress', function (event) {
			                if (event.keyCode == 13) {
			                    try {
			                        ajaxFormFn(window.json.appointmentsStrDate['' + $("#tags").val() + '']);
			                    } catch (e) {}
			                }
			            }).autocomplete({
			                source: window.appointment_codeObj,
			                select: function (event, ui) {
			                    event.preventDefault();
			                    //csak az 'appointment_code' erteket helyezzuk bele az inputba
			                    $("#tags").val(ui.item.value.split(' ')[0]);
			                    //				$("#tags").attr('data-date',''+ui.item.value.split(' ')[4]+' '+ui.item.value.split(' ')[5]+'');
			                }
			            });

			            //az autocomplete gomb melle kattintunk az 'Open' gombra
			            j$191(".buttonSpanAutocomplete").live('click', function (event) {
			                try {
			                    ajaxFormFn(window.json.appointmentsStrDate['' + $("#tags").val() + '']);
			                } catch (e) {}
			            });

			            weekDateFn();
			        }
			    });

			    //ez az IE7 / IE8 miatt kell
			    if (jQuery.browser.msie && (jQuery.browser.version.indexOf('8') != -1 || jQuery.browser.msie && jQuery.browser.version.indexOf('7') != -1)) {
			        $('#datepickerWeek').children().remove();
			        $('#datepickerWeek').append('<div class=\"MSIE8_Class\">Welcome to the website! Unfortunately we don\'t support your browser, please download one of the following or newer edition: Internet Explorer 9.0, Firefox 4.0, Safari, Chrome.<\/div>');
			    }

			});
			
			//925. sorban kell elvileg visszacserelni majd az "ajaxURL"-valtozo inicializalasat - Novy'

            </script> 
        <style>
            #mainmenu {
                background: #555;
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
                display: block;
            }
            
            #mainmenu ul {
                padding: 6px 20px 5px 20px;
                margin: 0px;
                list-style-type: none;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
                display: block;
            }
            #mainmenu ul li {
                display: inline;
            }
            #mainmenu ul li a {
                color: white;
                background-color: transparent;
                font-size: 12px;
                font-weight: bold;
                text-decoration: none;
                padding: 5px 8px;
            }
            
            #mainmenu ul li a:hover, #mainmenu ul li.active a {
                color: #777;
                background-color: #EFF4FA;
                text-decoration: none;
            }
        </style>
</head>

<body>

<div class="container" id="page" style="color:#fff;">
Nyugi Bandi, fejlesztés alatt az admin felület. Igyekszem fejlesztés közben is használható állapotban tartani ;)
    <div id="mainmenu">
    <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
    )); ?>
    <div id="roomChanger"> 
        <?php
            $roomList = CHtml::listData(Room::model()->findAll(),'room_id', 'room_name');
            echo CHtml::dropDownList('room', Room::model()->room_name, $roomList, array());  
        ?>
    </div>
    </div><!-- mainmenu -->
    <?php echo $content; ?>
</div><!-- page -->

</body>
</html>
