<div id='overviewcomponent' class="maincontent">
    <div id="inhalt">
        <div id="planet" style="background-image:url(img/planets/header/header_gas.jpg);">
            <div id="detailWrapper">

                <div id="header_text">
                    <h2>
                        <a href="javascript:void(0);" class="openPlanetRenameGiveupBox">
                            <p class="planetNameOverview">Resumen -</p>
                            <span id="planetNameHeader">
                                Planeta Principal
                            </span>
                            <img class="hinted tooltip" title="abandona/renombra Planeta"
                                src="public/img/navigation/icon-edit-a.gif" width="16" height="16" />
                        </a>
                    </h2>
                </div>
                <div id="detail" class="detail_screen">
                    <div id="techDetailLoading"></div>
                </div>
                <div id="planetdata">

                    <div class="overlay"></div>
                    <div id="planetDetails">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td class="desc">
                                    <span id="diameterField"></span>
                                </td>
                                <td class="data">
                                    <span id="diameterContentField"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="desc">
                                    <span id="temperatureField"></span>
                                </td>
                                <td class="data">
                                    <span id="temperatureContentField"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="desc">
                                    <span id="positionField"></span>
                                </td>
                                <td class="data">
                                    <span id="positionContentField"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="desc">
                                    <span id="scoreField"></span>
                                </td>
                                <td class="data">
                                    <span id="scoreContentField"></span>
                                </td>
                            </tr>

                            {{-- <tr>
                                <td class="desc">
                                    <span id="honorField"></span>
                                </td>
                                <td class="data ">
                                    <span id="honorContentField"></span>
                                </td>
                            </tr> --}}
                        </table>
                    </div>
                    <div id="planetOptions">

                        <div class="planetMoveStart fleft" style="display: inline">
                            <a class="tooltipLeft dark_highlight_tablet fleft" style="display: inline-block"
                                href='https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=galaxy'
                                title='La reubicación te permite mover tu planeta a otra posición en un sistema todo lo alejado que quieras.&lt;br /&gt;
&lt;br /&gt;
La reubicación en sí no tiene lugar hasta 24 horas después de activarla. Durante este tiempo puedes usar el planeta de forma normal. Verás el tiempo restante hasta la reubicación en una cuenta atrás.&lt;br /&gt;
&lt;br /&gt;
Cuando la cuenta atrás finalice y se lleve a cabo la reubicación de tu planeta, no podrás tener activa ninguna flota estacionada. En ese momento tampoco podrás construir reparar ni investigar nada. Si cuando termine la cuenta atrás hay alguna orden de construcción, de reparación o alguna flota activos, la reubicación se cancelará.&lt;br /&gt;
&lt;br /&gt;
Si la reubicación se realiza correctamente, se te cobrará 240.000 de Materia Oscura. La luna, los edificios y los recursos almacenados se reubicarán inmediatamente junto con el planeta. Tus flotas te seguirán automáticamente a las nuevas coordenadas a la velocidad de la nave más lenta. El salto cuántico de una luna trasladada permanecerá desactivado durante 24 horas.'
                                data-tooltip-button="A la galaxia">
                                <span class="planetMoveIcons settings planetMoveDefault icon fleft"></span>
                                <span class="planetMoveOverviewMoveLink">Reubicar</span>
                            </a>
                        </div>

                        <a class="dark_highlight_tablet float_right openPlanetRenameGiveupBox"
                            href="javascript:void(0);">
                            <span class="planetMoveOverviewGivUpLink">abandonar/renombrar</span>
                            <span class="planetMoveIcons settings planetMoveGiveUp icon"></span>
                        </a>
                    </div>

                </div>
            </div>

            {{-- <div id="buffBar" class="sliderWrapper">
                <div data-uuid="" data-id="" class="add_item">
                    <a class="activate_item border3px" href="javascript:void(0);"ref="1"></a>
                </div>
                <ul class="active_items hidden">
                    <li>
                    </li>
                </ul>
            </div> --}}


        </div>
        <div class="c-left"></div>
        <div class="c-right"></div>
        <div id="productionboxBottom">
            <div class="produxtionBoxBuildings boxColumn building">
                <div id='productionboxbuildingcomponent'
                    class='productionboxbuilding injectedComponent parent overview'>
                    <div class="content-box-s">
                        <div class="header">
                            <h3>Edificios</h3>
                        </div>
                        <div class="content">
                            <table cellspacing="0" cellpadding="0" class="construction active">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="idle">
                                            <a class="tooltip js_hideTipOnMobile "
                                                title="En este momento no hay ningún edificio construyéndose en este planeta. Hacé click aquí para ir a recursos."
                                                href="https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=supplies">
                                                No hay edificios en construcción.
                                                <br />
                                                (A los recursos)
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer"></div>
                    </div>
                    <script type="text/javascript">
                        $(function() {});
                    </script>
                </div>
                {{-- <div id='productionboxlfbuildingcomponent'
                    class='productionboxlfbuilding injectedComponent parent overview'>
                    <div class="content-box-s">
                        <div class="header">
                            <h3>Edificios de forma de vida</h3>
                        </div>
                        <div class="content">
                            <table cellspacing="0" cellpadding="0" class="construction active">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="idle">
                                            <a class="tooltip js_hideTipOnMobile "
                                                title="Esta forma de vida no está trabajando en edificios. Haz clic aquí para ir al apartado de edificios."
                                                href="https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=lfbuildings">
                                                No hay edificios en construcción.
                                                <br />
                                                (Ir a los edificios)
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer"></div>
                    </div>
                    <script type="text/javascript">
                        $(function() {});
                    </script>
                </div> --}}
            </div>
            <div class="produxtionBoxResearch boxColumn research">
                <div id='productionboxresearchcomponent'
                    class='productionboxresearch injectedComponent parent overview'>
                    <div class="content-box-s">
                        <div class="header">
                            <h3>Investigación</h3>
                        </div>
                        <div class="content">
                            <table cellspacing="0" cellpadding="0" class="construction active">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="idle">
                                            <a class="tooltip js_hideTipOnMobile "
                                                title="No hay ninguna investigación. Hacé click acá para construir tu laboratorio de investigaciones."
                                                href="https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=research">
                                                No hay ninguna investigación en progreso.
                                                <br />
                                                (A la investigación)
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer"></div>
                    </div>
                    <script type="text/javascript">
                        $(function() {});
                    </script>
                </div>
                {{-- <div id='productionboxlfresearchcomponent'
                    class='productionboxlfresearch injectedComponent parent overview'>
                    <div class="content-box-s">
                        <div class="header">
                            <h3>Investigación de forma de vida</h3>
                        </div>
                        <div class="content">
                            <table cellspacing="0" cellpadding="0" class="construction active">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="idle">
                                            <a class="tooltip js_hideTipOnMobile "
                                                title="Ahora mismo no se está investigando. Haz clic aquí para ir a la investigación de formas de vida."
                                                href="https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=lfresearch">
                                                No hay ninguna investigación en progreso.
                                                <br />
                                                (Ir al desarrollo de forma de vida)
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer"></div>
                    </div>
                    <script type="text/javascript">
                        $(function() {});
                    </script>
                </div> --}}
            </div>
            <div class="produxtionBoxShips boxColumn ship">

                <div id='productionboxshipyardcomponent'
                    class='productionboxshipyard injectedComponent parent overview'>
                    <div class="content-box-s">
                        <div class="header">
                            <h3>Hangar</h3>
                        </div>
                        <div class="content">
                            <table cellspacing="0" cellpadding="0" class="construction active">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="idle">
                                            <a class="tooltip js_hideTipOnMobile "
                                                title="En este momento no hay naves o defensa construyéndose en este planeta. Hacé click aquí para ir al hangar."
                                                href="https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=shipyard">
                                                No se está construyendo ninguna nave o defensa en este
                                                momento.
                                                <br />
                                                (Al hangar)
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer"></div>
                    </div>
                    <script type="text/javascript">
                        $(function() {});
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function openPlanetRenameGiveupBox() {
            openOverlay(
                "https:\/\/s145-ar.ogame.gameforge.com\/game\/index.php?page=planetlayer", {
                    'title': "abandona\/renombra Planeta Principal",
                    'class': 'planetRenameOverlay'
                }
            );
        }

        // var textContent = [];

        // textContent[0] = "Di\u00e1metro:";
        // textContent[1] = "12.800km (<span>0<\/span>\/<span>193<\/span>)";
        // textContent[2] = "Temperatura";
        // textContent[3] = "de -32 \u00b0C  a 8 \u00b0C";
        // textContent[4] = "Posici\u00f3n";
        // textContent[5] =
        //     "<a  href=\"https:\/\/s145-ar.ogame.gameforge.com\/game\/index.php?page=ingame&component=galaxy&galaxy=2&system=85&position=12\" >[2:85:12]<\/a>";
        // textContent[6] = "Puntos:";
        // textContent[7] =
        //     "<a href='https:\/\/s145-ar.ogame.gameforge.com\/game\/index.php?page=highscore'>0 (Lugar 195 de 199)<\/a>";
        // textContent[8] = "Puntos de honor:";
        // textContent[9] = "0";
        const textContent = [
            "{{$ov_diameter}}:",
            "12.800km (<span>0<\/span>\/<span>193<\/span>)",
            "{{$ov_temperature}}:",
            "de -32 \u00b0C  a 8 \u00b0C",
            "{{$ov_position}}:",
            `<a href="https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&component=galaxy&galaxy=2&system=85&position=12">[2:85:12]<\/a>`,
            "{{$ov_points}}:",
            `<a href="https://s145-ar.ogame.gameforge.com/game/index.php?page=highscore">0 (Lugar 195 de 199)<\/a>`,
            "Puntos de honor:",
            "0"
        ];

        var locaPremium = {
            "buildingHalfOverlay": "\u00bfQuieres reducir el tiempo de construcci\u00f3n al 50% del total () por <b>550 de Materia Oscura<\/b>?",
            "buildingFullOverlay": "\u00bfQuieres terminar inmediatamente el encargo de construcci\u00f3n por <b>550 de Materia Oscura<\/b>?",
            "shipsHalfOverlay": "\u00bfQuieres reducir el tiempo de construcci\u00f3n al 50% del total () por <b>550 de Materia Oscura<\/b>?",
            "shipsFullOverlay": "\u00bfQuieres terminar inmediatamente el encargo de construcci\u00f3n por <b>550 de Materia Oscura<\/b>?",
            "researchHalfOverlay": "\u00bfQuieres reducir el tiempo de investigaci\u00f3n al 50% del total () por <b>550 de Materia Oscura<\/b>?",
            "researchFullOverlay": "\u00bfQuieres terminar inmediatamente el encargo de investigaci\u00f3n por <b>550 de Materia Oscura<\/b>?"
        };

        var loca = loca || {};

        loca = $.extend({},
            loca, {
                "error": "Error",
                "errorNotEnoughDM": "\u00a1No hay suficiente Materia Oscura disponible! \u00bfDeseas comprar m\u00e1s ahora?",
                "notice": "Referencia",
                "planetGiveupQuestion": "\u00bfQuieres realmente abandonar el planeta %planetName% %planetCoordinates%?",
                "moonGiveupQuestion": "\u00bfQuieres realmente abandonar la luna %planetName% %planetCoordinates%?"
            }
        );

        function planetRenamed(data) {
            var data = $.parseJSON(data);

            if (data["status"]) {
                $("#planetNameHeader").html(data["newName"]);
                reloadRightmenu(
                    "https://s145-ar.ogame.gameforge.com/game/index.php?page=rightmenu&renamed=1&pageToLink=overview");
                $(".overlayDiv.planetRenameOverlay").dialog('close');
            }

            errorBoxAsArray(data["errorbox"]);
        }

        function reloadPage() {
            location.href = "https:\/\/s145-ar.ogame.gameforge.com\/game\/index.php?page=ingame&component=overview";
        }

        var demolish_id;
        var buildUrl;

        function loadDetails(type) {
            url = "https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&component=overview&ajax=1";
            if (typeof(detailUrl) != 'undefined') {
                url = detailUrl;
            }
            $.get(
                url, {
                    type: type
                },
                function(data) {
                    $("#detail").html(data);
                    $("#techDetailLoading").hide();
                    $("input[type='text']:first", document.forms["form"]).focus();
                    // When we open any tech details we want a global JS event to catch for custom callbacks
                    // $(document).trigger("ajaxShowElement",techID); //techID is magically defined by setting data in the .html
                    $(document).trigger("ajaxShowElement", (typeof techID === 'undefined' ? 0 :
                        techID
                    )); //techID is magically defined by setting data in the .html; not always so we check it and set it to harmless 0 as default. This is used for the repair dock.
                }
            );
        }

        function sendBuildRequest(url, ev, showSlotWarning) {
            console.debug("sendBuildRequest");
            if (ev != undefined) {

                var keyCode;

                if (window.event) {
                    keyCode = window.event.keyCode;
                } else if (ev) {
                    keyCode = ev.which;
                } else {
                    return true;
                }
                console.debug("KeyCode: " + keyCode);
                if (keyCode != 13 || $('#premiumConfirmButton')) {
                    return true;
                }
            }

            function build() {
                if (url == null) {
                    sendForm();
                } else {
                    fastBuild();
                }
            }


            if (url == null) {
                fallBackFunc = sendForm;
            } else {
                fallBackFunc = build;
                buildUrl = url;
            }


            if (showSlotWarning) {


                build();

            } else {
                build();
            }

            return false;
        }


        function fastBuild() {
            location.href = buildUrl;
            return false;
        }

        function sendForm() {
            document.form.submit();
            return false;
        }

        function demolishBuilding(id, question) {
            demolish_id = id;
            question += "<br/><br/>" + $("#demolish" + id).html();
            errorBoxDecision("Cuidado", "" + question + "", "si", "No", demolishStart);
        }

        function demolishStart() {
            window.location.replace(
                "https://s145-ar.ogame.gameforge.com/game/index.php?page=ingame&component=overview&modus=3&token=360c2c4ecaefa02d4d39f2fc6b6ed27c&type=" +
                demolish_id);
        }

        gfSlider = new GFSlider(getElementByIdWithCache('detailWrapper'));


        var detailUrl = "https:\/\/s145-ar.ogame.gameforge.com\/game\/index.php?page=buffActivation&ajax=1";
    </script>

    <script type="text/javascript">
        var animatedOverview = '1';
        var planetMoveLoca = {
            "askTitle": "Reubicar Planeta",
            "askCancel": "Are you sure that you wish to cancel this planet relocation? The normal waiting time will thereby be maintained.",
            "yes": "si",
            "no": "No",
            "success": "The planet relocation was successfully cancelled.",
            "error": "Error"
        };
        var planetMoveCooldown = -1682254140;

        //$(function() {
        //});

        // Reset counters to zero here and not in overview.js because due to LazyLoader, the overview.js is parsed only once
        // and not everytime the player clicks on the Overview menu link
        var currentIndex = 0;
        var currentChar = 0;
        var linetwo = 0;

        //console.debug("foo");
        initOverview();
        initType();
        tabletInitOverviewAdvice();

        $('#planet').find('h2 a').hover(function() {
            $('#planet').find('h2 a img').toggleClass('hinted');
        }, function() {
            $('#planet').find('h2 a img').toggleClass('hinted');
        });
    </script>
</div>
{{-- <br />
<div id="content">
    <table width="519">
        <tr>
            <td class="c" colspan="4"><a href="game.php?page=renameplanet" title="{Planet_menu}">{{$ov_planet}} "{{$planet_name}}"</a> ({{$user_name}})</td>
        </tr>
        {!! $Have_new_message !!}
        <tr>
            <th>{{$ov_server_time}}</th>
            <th colspan="3">{{$date_time}}</th>
        </tr>
        <tr>
            <td colspan="4" class="c">{{$ov_events}}</td>
        </tr>
        {!! $fleet_list !!}
        <tr>
            <th>{!! $moon_img !!}<br>{{$moon}}</th>
            <th colspan="2"><img src="{{$dpath}}planets/{{$planet_image}}.jpg" height="200" width="200"><br>{!! $building !!}</th>
            <th class="s">
                <table class="s" align="top" border="0">
                    <tr>{!! $anothers_planets !!}</tr>
                </table>
            </th>
        </tr>
        <tr>
            <th>{{$ov_diameter}}</th>
            <th colspan="3">{{$planet_diameter}} {{$ov_distance_unit}} ({{$planet_field_current}} / {{$planet_field_max}} {{$ov_fields}})</th>
        </tr>
        <tr>
            <th>{{$ov_temperature}}</th>
            <th colspan="3">{{$ov_aprox}} {{$planet_temp_min}}{{$ov_temp_unit}} {{$ov_to}} {{$planet_temp_max}}{{$ov_temp_unit}}</th>
        </tr>
        <tr>
            <th>{{$ov_position}}</th>
            <th colspan="3"><a href="game.php?page=galaxy&mode=0&galaxy={{$galaxy_galaxy}}&system={{$galaxy_system}}">[{{$galaxy_galaxy}}:{{$galaxy_system}}:{{$galaxy_planet}}]</a></th>
        </tr>
        <tr>
            <th>{{$ov_points}}</th>
            <th colspan="3">{{$user_rank}}</td>
        </tr>
    </table>
</div> --}}
