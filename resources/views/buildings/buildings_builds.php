<div id="suppliescomponent" class="maincontent">
	<div id="{page_style}">
		<header data-anchor="technologyDetails" data-technologydetails-size="large" style="background: url('https://s154-ar.ogame.gameforge.com/headerCache/lfbuildings/humans.jpg');">
			<h2>Edificios de forma de vida - Carbono</h2>
			<div id="slot01" class="slot"><a href="https://s154-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=lfsettings">Administración de la forma de vida</a></div><div id="slot02" class="slot lfSlot ipiHintable" style="overflow: visible; position: absolute;" data-ipi-hint="ipiToolbarLifeformresearch"><a href="https://s154-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=lfresearch">Desarrollo de forma de vida</a></div>
		</header>
		<div id="technologydetails_wrapper">
			<div id="technologydetails_content"></div>
		</div>

		<div id="technologies">
			<h3>Edificios de recursos</h3>
			<ul id="producers" class="icons">
				{list_of_buildings}
				<li class="technology {object_class}  hasDetails tooltip hideTooltipOnMouseenter js_hideTipOnMobile ipiHintable" data-technology="{i}" data-status="{status}" data-is-spaceprovider="" aria-label="{name}" data-ipi-hint="ipiTechnology{object_class}" data-tooltip-title="{name}"><span class="icon {sprite} sprite_{size} {size} {object_class}">{button}<span class="level" data-value="{level}" data-bonus="0"><span class="stockAmount">{level}</span><span class="bonus"></span></span></span></li>
				{/list_of_buildings}
				<!--<li class="technology resbuggy  hasDetails tooltip hideTooltipOnMouseenter js_hideTipOnMobile ipiHintable" data-technology="217" data-status="disabled" data-is-spaceprovider="" aria-label="Taladrador" data-ipi-hint="ipiTechnologyresbuggy" data-tooltip-title="Taladrador (0)<br/>Para poder construir esta nave tienes que haber escogido la clase Recolector."><span class="icon sprite sprite_medium medium resbuggy"><span class="amount" data-value="0" data-bonus="0"><span class="stockAmount">0</span><span class="bonus"></span></span></span></li>-->
			</ul>
		</div>
	</div>
	<div id="productionboxBottom">
		<div class="productionBoxBuildings boxColumn building">
			<div id="productionboxbuildingcomponent" class="productionboxbuilding injectedComponent parent supplies">
				<div class="content-box-s">
					<div class="header">
						<h3>Edificios</h3>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" class="construction active">
							<tbody>
								<tr>
									<td colspan="2" class="idle">
										<a class="tooltip js_hideTipOnMobile " href="https://s153-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=supplies" data-tooltip-title="En este momento no hay ningún edificio construyéndose en este planeta. Hacé click aquí para ir a recursos.">
											No hay edificios en construcción.
											<br>
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
					var scheduleBuildListEntryUrl = 'https://s153-ar.ogame.gameforge.com/game/index.php?page=componentOnly&component=buildlistactions&action=scheduleEntry&asJson=1';
					var LOCA_ERROR_INQUIRY_NOT_WORKED_TRYAGAIN = 'Tú ultima solicitud no se pudo procesar todavía, intentalo nuevamente.';
					redirectPremiumLink = 'https://s153-ar.ogame.gameforge.com/game/index.php?page=premium&showDarkMatter=1'
					
					window.token = '67a2adf6901e79faf2c3228578267a48'
				</script>
			</div>
		</div>
		<div class="productionBoxShips boxColumn ship">
			<div id="productionboxshipyardcomponent" class="productionboxshipyard injectedComponent parent supplies">
				<div class="content-box-s">
					<div class="header">
						<h3>Hangar</h3>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" class="construction active">
							<tbody>
								<tr>
									<td colspan="2" class="idle">
										<a class="tooltip js_hideTipOnMobile " href="https://s153-ar.ogame.gameforge.com/game/index.php?page=ingame&amp;component=shipyard" data-tooltip-title="En este momento no hay naves o defensa construyéndose en este planeta. Hacé click aquí para ir al hangar.">
											No se está construyendo ninguna nave o defensa en este momento.
											<br>
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
					var scheduleBuildListEntryUrl = 'https://s153-ar.ogame.gameforge.com/game/index.php?page=componentOnly&component=buildlistactions&action=scheduleEntry&asJson=1';
					var LOCA_ERROR_INQUIRY_NOT_WORKED_TRYAGAIN = 'Tú ultima solicitud no se pudo procesar todavía, intentalo nuevamente.';
					redirectPremiumLink = 'https://s153-ar.ogame.gameforge.com/game/index.php?page=premium&showDarkMatter=1'			
					window.token = '67a2adf6901e79faf2c3228578267a48'
				</script>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var planetMoveInProgress = false;
		var lastBuildingSlot = {"showWarning":false,"slotWarning":"Este edificio va a utilizar el \u00faltimo espacio de construcci\u00f3n disponible. Expande tu Terraformer o compra un objeto de campo de planeta (p. ej. <a href=\"https:\/\/s153-ar.ogame.gameforge.com\/game\/index.php?page&#61;shop#page&#61;shop&amp;category&#61;dc9ec90e5a2163cc063b8bb3e9fe392782f565c8&amp;item&#61;04e58444d6d0beb57b3e998edc34c60f8318825a\" class=\"tooltipHTML itemLink\">Campos de planeta de oro<\/a>) para conseguir m\u00e1s espacios. \u00bfDe verdad quieres construir el edificio?"};
	</script>
</div>
<div id="technologydetailscomponent" class="technologydetails injectedComponent parent supplies">
	<script type="text/javascript">
		var loca = {"LOCA_ALL_NOTICE":"Referencia","LOCA_ALL_NETWORK_ATTENTION":"Cuidado","locaDemolishStructureQuestion":"\u00bfRealmente quer\u00e9s demoler TECHNOLOGY_NAME un nivel?","LOCA_ALL_YES":"si","LOCA_ALL_NO":"No","LOCA_LIFEFORM_BONUS_CAP_REACHED_WARNING":"Ya se han utilizado una o varias de las bonificaciones vinculadas. \u00bfQuieres continuar con la construcci\u00f3n aun as\u00ed?"};
		var technologyDetailsEndpoint = "https:\/\/s153-ar.ogame.gameforge.com\/game\/index.php?page=ingame&component=technologydetails&ajax=1&ajax=1&action=getDetails";
		var selectCharacterClassEndpoint = "https:\/\/s153-ar.ogame.gameforge.com\/game\/index.php?page=ingame&component=characterclassselection&characterClassId=CHARACTERCLASSID&action=selectClass&ajax=1&asJson=1";
		var deselectCharacterClassEndpoint = "https:\/\/s153-ar.ogame.gameforge.com\/game\/index.php?page=ingame&component=characterclassselection&characterClassId=CHARACTERCLASSID&action=deselectClass&ajax=1&asJson=1";
		var technologyDetails = new TechnologyDetails({
			technologyDetailsEndpoint: technologyDetailsEndpoint,
			selectCharacterClassEndpoint: selectCharacterClassEndpoint,
			deselectCharacterClassEndpoint: deselectCharacterClassEndpoint,
			loca: loca
		})
		technologyDetails.init()
	</script>
</div>