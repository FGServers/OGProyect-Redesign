<div id="resources">

    <div class="resource_tile metal">
        <div id="metal_box" class="metal  tooltipHTML resource"
            title="Metal|&lt;table class=&quot;resourceTooltip&quot;&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_available }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;&lt;/span&gt;{{ $re_metal_pretty }}&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_storage_capacity }}&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;&lt;/span&gt;{{ $re_metal_max_pretty }}&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_current_production }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;undermark&quot;&gt;+240&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_den_capacity }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overermark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;"
            data-shop-url="">
            <div class="resourceIcon metal"></div>
            <span class="value">
                <span id="resources_metal" data-raw="{{ $re_metal_raw }}" class="">{{ $re_metal_short }}</span>
            </span>
        </div>
    </div>
    <div class="resource_tile crystal">
        <div id="crystal_box" class="crystal  tooltipHTML resource"
            title="Cristal|&lt;table class=&quot;resourceTooltip&quot;&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_available }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;&lt;/span&gt;{{ $re_crystal_pretty }}&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_storage_capacity }}&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;&lt;/span&gt;{{ $re_crystal_max_pretty }}&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_current_production }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;undermark&quot;&gt;+240&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_den_capacity }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overermark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;"
            data-shop-url="">
            <div class="resourceIcon crystal"></div>
            <span class="value">
                <span id="resources_crystal" data-raw="{{ $re_crystal_raw }}" class="">{{ $re_crystal_short }}</span>
            </span>
        </div>
    </div>
    <div class="resource_tile deuterium">
        <div id="deuterium_box" class="deuterium  tooltipHTML resource"
            title="Deuterio|&lt;table class=&quot;resourceTooltip&quot;&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_available }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;&lt;/span&gt;{{ $re_deuterium_pretty }}&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_storage_capacity }}&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;&lt;/span&gt;{{ $re_deuterium_max_pretty }}&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_current_production }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;undermark&quot;&gt;+240&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;{{ $tn_resource_den_capacity }}:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overermark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;"
            data-shop-url="">
            <div class="resourceIcon deuterium"></div>
            <span class="value">
                <span id="resources_deuterium" data-raw="{{ $re_deuterium_raw }}" class="">{{ $re_deuterium_short }}</span>
            </span>
        </div>
    </div>
    <div class="resource_tile energy">
        <div id="energy_box" class="energy  tooltipHTML resource"
            title="Energia|&lt;table class=&quot;resourceTooltip&quot;&gt;&lt;tr&gt;&lt;th&gt;Disponible:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Producción actual:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Uso&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;">
            <div class="resourceIcon energy"></div>
            <span class="value">
                <span id="resources_energy" data-raw="{{ $re_energy_raw }}" class="">{{ $re_energy_used }}</span>
            </span>
        </div>
    </div>
    {{-- <div class="resource_tile population">
        <div id="population_box" class="population  tooltipHTML resource"
            title="Población|&lt;table class=&quot;resourceTooltip&quot;&gt;&lt;tr&gt;&lt;th&gt;Disponible:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;210&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Formas de vida E2&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Formas de vida E3&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Alojamiento&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;210&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Saciedad&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;undermark&quot;&gt;233&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Hambre&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Tasa de crecimiento&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;±0.004&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Búnker&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;middlemark&quot;&gt;100&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;">
            <div class="resourceIcon population"></div>
            <span class="value">
                <span id="resources_population" data-raw="210" class="">210</span>
            </span>
        </div>
    </div>
    <div class="resource_tile food">
        <div id="food_box" class="food  tooltipHTML resource"
            title="Alimentación|&lt;table class=&quot;resourceTooltip&quot;&gt;&lt;tr&gt;&lt;th&gt;Disponible:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;10&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Capacidad de almacenamiento&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;10&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Sobreproducción&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;undermark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Consumo&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Se termina en&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;overmark timeTillFoodRunsOut&quot;&gt;~&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;">
            <div class="resourceIcon food"></div>
            <span class="value">
                <span id="resources_food" data-raw="10" class="">10</span>
            </span>
        </div>
    </div> --}}
    <div class="resource_tile darkmatter">
        <div id="darkmatter_box" class="darkmatter  tooltipHTML resource"
            title="Materia Oscura|&lt;table class=&quot;resourceTooltip&quot;&gt;&lt;tr&gt;&lt;th&gt;Disponible:&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;25.000&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Comprada&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;0&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;th&gt;Encontrada&lt;/th&gt;&lt;td&gt;&lt;span class=&quot;&quot;&gt;25.000&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;"
            data-tooltip-button="Comprar Materia Oscura">
            <a href="game.php?page=payment" class="overlay">
                <img src="{{ $img_path . 'layout/ressourcen_DM.gif' }}">
                <div class="resourceIcon darkmatter"></div>
            </a>
            <span class="value">
                <span id="resources_darkmatter" data-raw="{{ $pr_darkmatter_raw }}" class="overlay">{{ $pr_darkmatter_short }}</span>
            </span>
        </div>
    </div>
</div>
<script type="text/javascript">
    // (function($) {
    //     reloadResources({
    //         "resources": {
    //             "metal": {
    //                 "amount": {{ $re_metal_wof }},
    //                 "storage": {{ $re_metal_max }},
    //                 "baseProduction": 0.04083333333333333,
    //                 "production": 0.2808333333333333,
    //                 "tooltip": "Metal|<table class=\"resourceTooltip\"><tr><th>Disponible:<\/th><td><span class=\"overmark\">{{ $re_metal }}<\/span><\/td><\/tr><tr><th>Capacidad de almacenamiento<\/th><td><span class=\"normalmark\">{{ $re_metal_max }}<\/span><\/td><\/tr><tr><th>Producci\u00f3n actual:<\/th><td><span class=\"overmark\">0<\/span><\/td><\/tr><tr><th>Capacidad de camuflaje:<\/th><td><span class=\"overermark\">0<\/span><\/td><\/tr><\/table>",
    //                 "classesListItem": "",
    //                 "shopUrl": "https:\/\/s142-ar.ogame.gameforge.com\/game\/index.php?page=shop#category=d8d49c315fa620d9c7f1f19963970dea59a0e3be&item=859d82d316b83848f7365d21949b3e1e63c7841f"
    //             },
    //             "crystal": {
    //                 "amount": {{ $re_crystal_wof }},
    //                 "storage": {{ $re_crystal_max }},
    //                 "baseProduction": 0.016666666666666666,
    //                 "production": 0.07027777777777777,
    //                 "tooltip": "Cristal|<table class=\"resourceTooltip\"><tr><th>Disponible:<\/th><td><span class=\"overmark\">10.000<\/span><\/td><\/tr><tr><th>Capacidad de almacenamiento<\/th><td><span class=\"overmark\">10.000<\/span><\/td><\/tr><tr><th>Producci\u00f3n actual:<\/th><td><span class=\"overmark\">0<\/span><\/td><\/tr><tr><th>Capacidad de camuflaje:<\/th><td><span class=\"overermark\">0<\/span><\/td><\/tr><\/table>",
    //                 "classesListItem": "",
    //                 "shopUrl": "https:\/\/s142-ar.ogame.gameforge.com\/game\/index.php?page=shop#category=d8d49c315fa620d9c7f1f19963970dea59a0e3be&item=bb2f6843226ef598f0b567b92c51b283de90aa48"
    //             },
    //             "deuterium": {
    //                 "amount": {{ $re_deuterium_wof }},
    //                 "storage": {{ $re_deuterium_max }},
    //                 "baseProduction": 0,
    //                 "production": 0.03777777777777778,
    //                 "tooltip": "Deuterio|<table class=\"resourceTooltip\"><tr><th>Disponible:<\/th><td><span class=\"overmark\">10.000<\/span><\/td><\/tr><tr><th>Capacidad de almacenamiento<\/th><td><span class=\"overmark\">10.000<\/span><\/td><\/tr><tr><th>Producci\u00f3n actual:<\/th><td><span class=\"overmark\">0<\/span><\/td><\/tr><tr><th>Capacidad de camuflaje:<\/th><td><span class=\"overermark\">0<\/span><\/td><\/tr><\/table>",
    //                 "classesListItem": "",
    //                 "shopUrl": "https:\/\/s142-ar.ogame.gameforge.com\/game\/index.php?page=shop#category=d8d49c315fa620d9c7f1f19963970dea59a0e3be&item=cb72ed207dd871832a850ee29f1c1f83aa3f4f36"
    //             },
    //             "energy": {
    //                 "amount": {{ $re_energy_wof }},
    //                 "tooltip": "Energia|<table class=\"resourceTooltip\"><tr><th>Disponible:<\/th><td><span class=\"\">82<\/span><\/td><\/tr><tr><th>Producci\u00f3n actual:<\/th><td><span class=\"undermark\">+212<\/span><\/td><\/tr><tr><th>Uso<\/th><td><span class=\"overmark\">-130<\/span><\/td><\/tr><\/table>",
    //                 "classesListItem": ""
    //             },
    //             "darkmatter": {
    //                 "amount": {{ $re_darkmatter_wof }},
    //                 "tooltip": "Materia Oscura|<table class=\"resourceTooltip\"><tr><th>Disponible:<\/th><td><span class=\"\">{{ $re_darkmatter }}<\/span><\/td><\/tr><tr><th>Comprada<\/th><td><span class=\"\">0<\/span><\/td><\/tr><tr><th>Encontrada<\/th><td><span class=\"\">250<\/span><\/td><\/tr><\/table>",
    //                 "classesListItem": "",
    //                 "classes": "overlay",
    //                 "link": "https:\/\/s142-ar.ogame.gameforge.com\/game\/index.php?page=payment",
    //                 "img": "https:\/\/gf1.geo.gfsrv.net\/cdnc5\/401d1a91ff40dc7c8acfa4377d3d65.gif"
    //             },
    //             "population": {
    //                 "classesListItem": ""
    //             },
    //             "food": {
    //                 "classesListItem": ""
    //             }
    //         },
    //         "techs": {
    //             "1": {
    //                 "techId": 1,
    //                 "production": {
    //                     "metal": 0.24,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 },
    //                 "consumption": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0.01611111111111111
    //                 }
    //             },
    //             "2": {
    //                 "techId": 2,
    //                 "production": {
    //                     "metal": 0,
    //                     "crystal": 0.05361111111111111,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 },
    //                 "consumption": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0.006666666666666667
    //                 }
    //             },
    //             "3": {
    //                 "techId": 3,
    //                 "production": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0.03777777777777778,
    //                     "energy": 0
    //                 },
    //                 "consumption": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0.013333333333333334
    //                 }
    //             },
    //             "4": {
    //                 "techId": 4,
    //                 "production": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0.058888888888888886
    //                 },
    //                 "consumption": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 }
    //             },
    //             "12": {
    //                 "techId": 12,
    //                 "production": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 },
    //                 "consumption": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 }
    //             },
    //             "212": {
    //                 "techId": 212,
    //                 "production": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 },
    //                 "consumption": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 }
    //             },
    //             "217": {
    //                 "techId": 217,
    //                 "production": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 },
    //                 "consumption": {
    //                     "metal": 0,
    //                     "crystal": 0,
    //                     "deuterium": 0,
    //                     "energy": 0
    //                 }
    //             }
    //         },
    //         "honorScore": 0
    //     });
    // })(jQuery);
</script>
