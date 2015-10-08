<link rel="stylesheet" href="res/common-banner.css">
<link rel="stylesheet" href="res/sensitive-banner.css">
<link rel="stylesheet" href="res/lightbox.css">
<link rel="stylesheet" href="res/icon.css">
<script type="text/javascript" src="res/common-banner.js"></script>
<script type="text/javascript" src="res/sensitive-banner.js"></script>
<script type="text/javascript" src="res/lightbox.js"></script>

<div style="top: 0; display: block;" id="WMDE_Banner">
	<form method="post" name="donationForm">
		<div style="box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);">

			<table id="WMDE_Banner-facts">
				<tbody>
				<tr>
					<td>
						<table style="height: 100%">
							<tbody>
							<tr>
								<td style="height: 1%" valign="top">
									<p id="WMDE_Banner-text"><i>Liebe Leserinnen und Leser:</i> Verzeihen Sie die
										Störung. Einmal im Jahr bitten wir Sie um Ihre Unterstützung. Um
										Wikipedias Unabhängigkeit zu schützen, gibt es keine Werbung. Wir
										finanzieren uns durch Spenden von durchschnittlich 20 €. <span
											class="btext-highlight">Jetzt
 sind Sie in Deutschland gefragt. Wenn alle, die das jetzt lesen, einen
kleinen Beitrag leisten, ist unsere Spendenkampagne in einer Stunde
vorüber.</span> Über 14 Millionen Mal wird unser Spendenaufruf täglich angezeigt, aber nur <span id="donorsValue">402.550</span>
										Menschen haben bisher gespendet. <span class="btext-highlight">Wenn Sie Wikipedia nützlich finden, nehmen Sie sich am heutigen <span
												id="weekday">2. Weihnachtstag</span> bitte eine Minute Zeit  und geben Wikipedia mit Ihrer Spende etwas zurück.</span>
										<i>Vielen Dank!</i></p>
								</td>
							</tr>
							<tr>
								<td>
									<div id="donationMeterWrapper">
										<div id="donationMeter"></div>
										<div style="width: 988px;" id="donationFill">
											<div id="donationText"><span id="donationValue">8,3</span> Mio. €</div>
											<div id="daysLeft" style="display: block;">Nur noch <span id="numDaysLeft">0 Tage</span>
											</div>
											<div style="position: absolute; bottom: 0; right: 0">
												<img src="mw-files/Pbar-tip-small.png">
											</div>
										</div>
										<div style="width: 0px;" id="donationRemaining"></div>
										<div id="donationMessage"></div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="height: 1%;">
									<div id="WMDE_Banner_info">
										<div id="WMDE_Banner_text">
											<span class="binfo-ucase">Spendenkonto</span>
											<span>Wikimedia Foerdergesellschaft</span>
											<span>BIC</span>
											<span class="binfo-bold">BFSWDE33BER</span>
											<span>IBAN</span>
										<span class="binfo-bold"
											  style="margin-right: 0;">DE33 1002 0500 0001 1947 00</span>
										</div>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
					</td>

					<td id="WMDE_BannerForm-wrapper">
						<div id="WMDE_BannerFullForm">
							<table>
								<tbody>
								<tr>
									<td id="WMDE_BannerFullForm-wrapper">
										<div id="WMDE_BannerFullForm-step1">
											<table>
												<tbody id="WMDE_BannerFullForm-payment">
												<tr class="frequency-options">
													<td colspan="2">
														<input checked="checked" class="amount-radio"
															   id="interval_onetime"
															   onclick="$('.interval-options').addClass('interval-hidden');$('#interval_multiple').attr('checked', false);"
															   type="radio">
														<label for="interval_onetime"
															   class="interval-label">einmalig</label>
													</td>
													<td colspan="2">
														<input class="amount-radio" id="interval_multiple"
															   onclick="$('.interval-options').removeClass('interval-hidden');$('#interval_onetime').attr('checked', false);"
															   type="radio">
														<label for="interval_multiple"
															   class="interval-label">regelmäßig</label>
													</td>
												</tr>
												<tr class="interval-options interval-hidden">
													<td colspan="2">
														<input name="interval" class="amount-radio" id="interval1"
															   value="1"
															   type="radio">
														<label for="interval1" class="interval-label">monatlich</label>
													</td>
													<td colspan="2">
														<input name="interval" class="amount-radio" id="interval3"
															   value="3"
															   type="radio">
														<label for="interval3"
															   class="interval-label">vierteljährlich</label><br>
													</td>
												</tr>
												<tr class="interval-options interval-hidden">
													<td colspan="2">
														<input name="interval" class="amount-radio" id="interval6"
															   value="6"
															   type="radio">
														<label for="interval6"
															   class="interval-label">halbjährlich</label>
													</td>
													<td colspan="2">
														<input name="interval" class="amount-radio" id="interval12"
															   value="12"
															   type="radio">
														<label for="interval12" class="interval-label">jährlich</label>
													</td>
												</tr>
												<tr>
													<td colspan="4">
														<hr>
													</td>
												</tr>
												<tr class="amount-options">
													<td style="padding-left: 8px">
														<input class="amount-radio" name="betrag_auswahl"
															   onclick="document.donationForm.amountGiven.value = ''"
															   id="amount5"
															   value="5"
															   type="radio">
														<label class="amount-label" for="amount5">5 €</label>
													</td>
													<td>
														<input class="amount-radio" name="betrag_auswahl"
															   onclick="document.donationForm.amountGiven.value = ''"
															   id="amount15"
															   value="15" type="radio">
														<label class="amount-label" for="amount15">15 €</label>
													</td>
													<td>
														<input class="amount-radio" name="betrag_auswahl"
															   onclick="document.donationForm.amountGiven.value = ''"
															   id="amount25"
															   value="25" type="radio">
														<label class="amount-label" for="amount25">25 €</label>
													</td>
													<td style="padding-right: 8px">
														<input class="amount-radio" name="betrag_auswahl"
															   onclick="document.donationForm.amountGiven.value = ''"
															   id="amount50"
															   value="50" type="radio">
														<label class="amount-label" for="amount50">50 €</label><br>
													</td>
												</tr>
												<tr class="amount-options">
													<td style="padding-left: 8px">
														<input class="amount-radio" name="betrag_auswahl"
															   onclick="document.donationForm.amountGiven.value = ''"
															   id="amount75"
															   value="75" type="radio">
														<label class="amount-label" for="amount75">75 €</label>
													</td>
													<td>
														<input class="amount-radio" name="betrag_auswahl"
															   onclick="document.donationForm.amountGiven.value = ''"
															   id="amount100"
															   value="100"
															   type="radio">
														<label class="amount-label" for="amount100">100 €</label>
													</td>
													<td>
														<input class="amount-radio" name="betrag_auswahl"
															   onclick="document.donationForm.amountGiven.value = ''"
															   id="amount250"
															   value="250"
															   type="radio">
														<label class="amount-label" for="amount250">250 €</label>
													</td>
													<td style="padding-right: 8px">
														<input class="amount-radio" name="betrag" id="amount_other"
															   value=""
															   type="radio">
														<input id="amount-other-input"
															   onfocus="$('#amount_other').attr('checked', 'checked');"
															   autocomplete="off" size="3" name="amountGiven"
															   type="tel"><br>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="text-align: left">
														<button class="active"
																onclick="$('#zahlweise').val('BEZ');">Lastschrift
														</button>
													</td>
													<td colspan="2" style="text-align: right">
														<button onclick="$('#zahlweise').val('UEB');">Überweisung
														</button>
														<br>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="padding:8px 0 0 8px; text-align: left">
														<button click="$('#zahlweise').val('MCP');">
															Kreditkarte
														</button>
													</td>
													<td colspan="2" style="padding:8px 8px 0 5px; text-align: right">
														<button id="btn-ppl" onclick="$('#zahlweise').val('PPL');">
															PayPal
														</button>
													</td>
												</tr>
												</tbody>
											</table>
											<div id="WMDE_BannerFullForm-details">
												<table>
													<tbody id="WMDE_Banner-debit-type"
														>
													<tr>
														<td colspan="4">
															<input type="radio" checked="" title="SEPA"
																   name="debit-type"
																   value="sepa" id="debit-type-1">
															<label for="debit-type-1">IBAN</label>
															<input type="radio" title="Konto/BLZ" name="debit-type"
																   value="non-sepa" id="debit-type-2">
															<label for="debit-type-2">Konto/Bankleitzahl</label>
														</td>
													</tr>
													<tr>
														<td colspan="4">
															<hr/>
														</td>
													</tr>
													</tbody>
												</table>
												<div id="WMDE_Banner-sepa">
													<table>
														<tbody>
														<tr>
															<td colspan="4">
																<label for="iban">IBAN</label><br/>
																<input type="text" title="Internationale Kontonummer"
																	   class="required"
																	   placeholder="IBAN" autocomplete="off" name="iban"
																	   id="iban">
																<span class="validation"></span>
															</td>
														</tr>
														<tr>
															<td colspan="4" style="padding-bottom: 20px;">
																<label for="bic">BIC</label><br/>
																<input type="text" title="BIC" placeholder="BIC"
																	   class="required"
																	   autocomplete="off" name="bic" id="bic">
																<span class="validation"></span>
															</td>
														</tr>
														</tbody>
													</table>
												</div>
												<div id="WMDE_BannerFullForm-nosepa">
													<table>
														<tbody>
														<tr>
															<td colspan="4">
																<label for="account-number">Kontonummer</label><br/>
																<input type="tel"
																	   title="Bis zu zehnstellige Kontonummer"
																	   placeholder="Kontonummer" autocomplete="off"
																	   name="konto"
																	   id="account-number"
																	   class="bank-check">
																<span class="validation"></span>
															</td>
														</tr>
														<tr>
															<td colspan="4" style="padding-bottom: 20px;">
																<label for="bank-code">Bankleitzahl</label><br/>
																<input type="tel" title="Achtstellige Bankleitzahl"
																	   placeholder="Bankleitzahl"
																	   autocomplete="off" name="blz" id="bank-code"
																	   class="bank-check"
																	>
																<span class="validation"></span>
															</td>
														</tr>
														</tbody>
													</table>
												</div>
												<table>
													<tbody>
													<tr>
														<td colspan="4" class="form-heading">
															<span
																class="form-heading-text">Pers&ouml;nliche Daten</span>
														</td>
													</tr>
													<tr>
														<td colspan="4" style="padding-top: 16px;">
															<input type="radio" id="address-type-1" checked="checked"
																   title="privat"
																   value="person"
																   name="adresstyp"/>
															<label for="address-type-1"
																   class="address-label">Privatperson</label>
															<input type="radio" id="address-type-2" title="geschäftlich"
																   value="firma"
																   name="adresstyp"/>
															<label for="address-type-2"
																   class="address-label">Firma</label>
															<input type="radio" id="address-type-3" title="anonym"
																   value="anonym"
																   name="adresstyp"/>
															<label for="address-type-3">Anonym</label>
														</td>
													</tr>
													<tr>
														<td colspan="4">
															<hr/>
														</td>
													</tr>
													</tbody>
												</table>
												<div id="WMDE_BannerFullForm-company">
													<table>
														<tbody>
														<tr>
															<td colspan="4">
																<label for="company-name">Firma</label><br/>
																<input type="text" placeholder="Firma"
																	   autocomplete="off"
																	   name="firma"
																	   id="company-name">
																<span class="validation"></span>
															</td>
														</tr>
														</tbody>
													</table>
												</div>
												<div id="WMDE_Banner-person">
													<table>
														<tbody>
														<tr>
															<td colspan="4">
																<input type="radio" id="salutation-1" checked="checked"
																	   title="Frau"
																	   value="Frau"
																	   name="anrede"/>
																<label for="salutation-1"
																	   class="salutation-label">Frau</label>
																<input type="radio" id="salutation-2" title="Herr"
																	   value="Herr"
																	   name="anrede"/>
																<label for="salutation-2"
																	   class="salutation-label">Herr</label>
																<select name="titel" id="personal-title"
																		class="small-input">
																	<option data-behavior="placeholder">Kein Titel
																	</option>
																	<option value="Dr.">Dr.</option>
																	<option value="Prof.">Prof.</option>
																	<option value="Prof. Dr.">Prof. Dr.</option>
																</select>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="padding:8px 0 0 8px">
																<label for="first-name">Name</label><br/>
																<input type="text" class="required small-input"
																	   placeholder="Vorname"
																	   title="Groß- und Kleinbuchstaben, Bindestriche und Leerzeichen"
																	   autocomplete="off" name="vorname"
																	   id="first-name">
																<span class="validation icon-ok"></span>
															</td>
															<td colspan="2" style="padding:8px 8px 0 5px">
																<br/>
																<input type="text" class="required small-input focused"
																	   placeholder="Nachname"
																	   title="Groß- und Kleinbuchstaben, Bindestriche, Leerzeichen und Punkte"
																	   autocomplete="off" name="nachname"
																	   id="last-name">
																<span class="validation"></span>

																<div class="form-field-error-box">
																	<div class="form-field-error-arrow"></div>
											<span
												class="form-field-error-text">Bitte f&uuml;llen Sie dieses Feld aus.</span>
																</div>
															</td>
														</tr>
														</tbody>
													</table>
												</div>
												<div id="WMDE_Banner-address">
													<table>
														<tbody>
														<tr>
															<td colspan="4">
																<label for="street">Straße</label><br/>
																<input type="text" class="required invalid"
																	   placeholder="z.B. Musterstraße 123"
																	   autocomplete="off" name="strasse" id="street">
																<span class="validation icon-bug"></span>

																<div class="form-field-error-box">
																	<div class="form-field-error-arrow"></div>
											<span
												class="form-field-error-text">Bitte f&uuml;llen Sie dieses Feld aus.</span>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="2" style="padding:8px 0 0 8px">
																<label for="post-code">PLZ &amp; Ort</label><br/>
																<input type="text" class="required small-input"
																	   title="Fünfstellige Postleitzahl"
																	   placeholder="z.B. 10117" autocomplete="off"
																	   name="plz"
																	   id="post-code">
																<span class="validation"></span>
															</td>
															<td colspan="2" style="padding:8px 8px 0 5px">
																<br/>
																<input type="text" class="required small-input"
																	   placeholder="z.B. Berlin"
																	   autocomplete="off" name="ort" id="city">
																<span class="validation"></span>
															</td>
														<tr>
															<td colspan="4">
																<label for="country">Land</label><br/>
																<select title="Land" name="country" id="country">
																	<option value="DE">Deutschland</option>
																	<option value="AT">Österreich</option>
																	<option value="CH">Schweiz</option>
																	<option value="BE">Belgien</option>
																	<option value="IT">Italien</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LU">Luxemburg</option>
																</select>
															</td>
														</tr>
														<tr>
															<td colspan="4">
																<label for="email">E-Mail</label><br/>
																<input type="text" placeholder="z.B. name@domain.de"
																	   class="required"
																	   autocomplete="off"
																	   name="email" id="email">
																<span class="validation"></span>
															</td>
														</tr>
														</tbody>
													</table>
												</div>
												<table>
													<tbody>
													<tr>
														<td colspan="4">
															<input type="checkbox"
																   title="Bitte senden Sie mir Informationsmaterial."
																   value="1"
																   name="info"
																   id="send-information">
															<label id="send-information-label" for="send-information">Bitte
																informiert mich
																in
																Zukunft, wenn
																Wikipedia meine Hilfe
																braucht.</label>
															<a title="Einmal im Jahr bitten wir die Leserinnen und Leser Wikipedias um Unterstützung. Wir würden uns freuen, wenn wir in Zukunft auf Sie zählen können, wenn es um die Verbreitung Freien Wissens geht."
															   href="#" class="icon-question-sign"></a>
														</td>
													</tr>
													<tr>
														<td colspan="4">
															<button type="submit" id="WMDE_BannerForm-next">
																Weiter um Spende abzuschließen
															</button>
														</td>
													</tr>
													<tr>
														<td colspan="4" style="background: transparent; padding-top: 0">
															<div id="WMDE_BannerFullForm-close-step1">Schließen
																&#9652;</div>
														</td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div id="WMDE_BannerFullForm-step2">
											<table>
												<tbody>
												<tr>
													<td class="form-heading">
															<span
																class="form-heading-text">SEPA-Lastschriftmandat</span>
													</td>
												</tr>
												<tr>
													<td>
														<p>Sie spenden 5,00&euro; and die Wikimedia F&ouml;rdergesellschaft</p>

														<p>Wikimedia F&ouml;rdergesellschaft<br/>
															Tempelhofer Ufer 23-24<br/>
															10963 Berlin</p>

														<p><a>Betrag &auml;ndern</a></p>

														<p>Die Mandatsreferenznummer zur eindeutigen Identifizierung des
															SEPA-Lastschriftmandats wird Ihnen separat per E-Mail
															mitgeteilt. Ihre Lastschrift wird als SEPA-Rahmenmandat
															behandelt. </p>
														<hr/>
														<p>
															Herr Tester Testing<br/>
															Teststr<br/>
															31337 Teststadt<br/>
															christoph.fischer@wikimedia.de
														</p>

														<p>
															Sie zahlen per Lastschrift<br/><br/>
															IBAN DE12500105170648489890<br/>
															BIC INGDDEFFXXX<br/>
															Bankname ING-DiBa
														</p>

														<p><a>Daten oder Zahlungsart &auml;ndern</a></p>
														<hr/>
														<p>
															<input type="checkbox" title="Bestätigung SEPA" value="1"
																   name="confirm_sepa" id="confirm_sepa">
															<label for="confirm_sepa">
																Ich ermächtige die gemeinnützige Wikimedia
																Fördergesellschaft mbH (Gläubiger-ID:
																DE25ZZZ00000448435) Zahlungen
																von meinem Konto mittels Lastschrift einzuziehen.
																Zugleich weise ich mein Kreditinstitut an, die von der
																gemeinnützigen Wikimedia Fördergesellschaft mbH auf mein
																Konto gezogenen Lastschriften einzulösen.<br><br>
																Ich kann innerhalb von acht Wochen, beginnend mit dem
																Belastungsdatum, die Erstattung des belasteten Betrages
																verlangen. Es gelten dabei die mit meinem Kreditinstitut
																vereinbarten Bedingungen.
															</label>
														</p>

														<p>
															<input type="checkbox" title="Bestätigung Fristverkürzung"
																   value="1" name="confirm_shortterm"
																   id="confirm_shortterm">
															<label for="confirm_shortterm">
																Mit SEPA wurde eine Informationsfrist für Lastschriften
																eingeführt. Ich bin damit einverstanden,
																dass ich spätestens 5 Tage vor der geplanten Abbuchung
																der Spende per Email benachrichtigt werde.
															</label>
														</p>

														<p>
															Berlin, 23.12.2015
														</p>
													</td>
												</tr>
												<tr>
													<td>
														<button type="submit" id="WMDE_BannerFullForm-finish">
															Jetzt f&uuml;r Wikipedia spenden <span
																class="mark-ok"></span>
														</button>
													</td>
												</tr>
												<tr>
													<td style="background: transparent; padding-top: 0">
														<div id="WMDE_BannerFullForm-close-step2">Schließen
															&#9652;</div>
													</td>
												</tr>
												</tbody>
											</table>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</td>

					<td id="WMDE_Banner-close-wrapper">
						<span id="WMDE_Banner-close">&nbsp;</span>
					</td>

				</tr>
				</tbody>
			</table>
		</div>
		<div id="WMDE_BannerFullForm-arrow"></div>

		<div id="WMDE_BannerFullForm-info">

		<div id="WMDE_BannerFullForm-infolinks" class="banner-lightbox banner-lightbox-small">
			<ul>
				<li>
					<div class="lightbox-list-item">
						<span class="icon-bar-chart"></span>
						<span class="list-item-title">Wohin geht das Geld?</span>
					</div>
				</li>
				<li>
					<div class="lightbox-list-item">
						<span class="icon-hand-right"></span>
						<span class="list-item-title">Bitcoins spenden</span>
					</div>
				</li>
				<li>
					<div class="lightbox-list-item last">
						<span class="icon-hand-right"></span>
						<span class="list-item-title">Steuerlich absetzbar</span>
					</div>
				</li>
			</ul>
		</div>

		<div id="WMDE_BannerFullForm-security" class="banner-lightbox banner-lightbox-small">
			<ul>
				<li>
					<div class="lightbox-list-item">
						<img src="img/global-sign.png"></span>
						<img style="float: right;" src="img/owasp.png"></span>
						<div style="clear: right; height: 7px;"></div>
					</div>
				</li>
				<li>
					<div class="lightbox-list-item">
						<span class="icon-list-item icon-lock"></span>
						<span class="list-item-title">SSL-verschl&uuml;sselte Daten</span>
						<p>
							Ihre Spende wird &uuml;ber eine sichere SSL-
							Verschl&uuml;sselung aufgenommen und liegt sp&auml;ter
							auf deutschen Servern.
						</p>
					</div>
				</li>
				<li>
					<div class="lightbox-list-item last">
						<span class="icon-list-item icon-shield"></span>
						<span class="list-item-title">Ihre Daten sind sicher</span>
						<p>
							Wir f&uuml;hlen uns dem Datenschutz verpflichtet.
							Unsere Bestimmungen dazu k&ouml;nnen Sie
							<a href="https://spenden.wikimedia.de/spenden/Datenschutz">hier</a> einsehen.
						</p>
					</div>
				</li>
			</ul>
		</div>
		</div>

		<img id="banner-close-ct" src="" border="0" height="0" width="0">
	</form>
</div>

<script type="text/javascript">
	$( document ).ready( function() {
		$( 'body' ).prepend( $( '#centralNotice' ) );

		var impCount = increaseImpCount();
		$( "#impCount" ).val( impCount );
		var bannerImpCount = increaseBannerImpCount( "B14WMDE_43_141225_ctrl" );
		$( "#bImpCount" ).val( bannerImpCount );

		if ( wgAction === "view" ) {
			setTimeout( addBannerSpace, 7500 );
		}
		if ( wgUserName !== null ) $( '#wikilogin' ).val( 'yes' );
		$( window ).resize( function() {
			animateProgressBar();
		} );

		$( ".send" ).click( function( e ) {
			return validateForm();
		} );

		$( '#WMDE_Banner-close' ).click( function() {
			if ( Math.random() < 0.01 ) {
				$( '#banner-close-ct' ).attr( 'src', 'https://spenden.wikimedia.de/piwik/piwik.php?idsite=1&url=https://spenden.wikimedia.de/banner-closed/org-43-141225-ctrl&rec=1' );
			}
			hideBanner();
			removeBannerSpace();
			return false;
		} );

		var dayName = getCurrentGermanDay();
		if ( dayName === 'Donnerstag' ) {
			dayName = '1. Weihnachtstag';
		} else if ( dayName === 'Freitag' ) {
			dayName = '2. Weihnachtstag';
		}
		$( "span#weekday" ).text( dayName );

		$( "span#numDaysLeft" ).text( getDaysRemaining() );
		$( "span#donorsValue" ).html( addPointsToNum( Math.floor( getApprDonatorsRaw() ) ) );
	} );

	function animateProgressBar() {
		var donationFillElement = $( "#donationFill" );
		var preFillValue = 0;

		donationFillElement.clearQueue();
		donationFillElement.stop();
		donationFillElement.width( preFillValue + "px" );

		$( '#daysLeft' ).hide();

		var barWidth = $( '#donationMeter' ).width();
		var dTarget = parseInt( "8300000" );
		var dCollected = getApprDonationsRaw();
		var dRemaining = dTarget - dCollected;

		var fWidth = dCollected / dTarget * barWidth;
		var maxFillWidth = barWidth - $( '#donationRemaining' ).width() - 16;
		widthToFill = (fWidth > maxFillWidth) ? maxFillWidth : fWidth;

		donationFillElement.animate( { width: widthToFill + 'px' }, {
			duration: 2500,
			progress: function() {
				var dFill = donationFillElement.width() / widthToFill * fWidth;
				var pFill = dFill / barWidth;

				var dColl = dTarget * pFill / 1000000;
				var vRem = ( dTarget - ( dTarget * pFill ) ) / 1000000;

				dColl = dColl.toFixed( 1 );
				dColl = dColl.replace( ".", "," );

				vRem = vRem.toFixed( 1 );
				vRem = vRem.replace( ".", "," );

				$( "#valRem" ).html( vRem );
				$( "#donationValue" ).html( dColl );
			},
			complete: function() {
				$( 'div#daysLeft' ).show();
			}
		} );
	}

	function addBannerSpace() {
		var expandableBannerHeight = $( 'div#WMDE_Banner' ).height() + 44;
		var bannerDivElement = $( '#WMDE_Banner' );

		switch ( skin ) {
			case 'vector':
				bannerDivElement.css( 'top', 0 - expandableBannerHeight );
				$( '#mw-panel' ).animate( { top: expandableBannerHeight + 160 }, 1000 );
				$( '#mw-head' ).animate( { top: expandableBannerHeight }, 1000 );
				$( '#mw-page-base' ).animate( { paddingTop: expandableBannerHeight }, 1000 );
				break;
			case 'monobook':
				$( '#globalWrapper' ).css( 'position', 'relative' );
				$( '#globalWrapper' ).css( 'top', expandableBannerHeight );
				bannerDivElement.css( 'top', '-20px' );
				bannerDivElement.css( 'background', 'none' );
				break;
		}
		bannerDivElement.css( 'display', 'block' );
		bannerDivElement.animate( { top: 0 }, 1000 );
		setTimeout( animateProgressBar, 1000 );
	}

	function removeBannerSpace() {
		switch ( skin ) {
			case 'vector':
				$( '#mw-panel' ).css( 'top', 160 );
				$( '#mw-head' ).css( 'top', 0 );
				$( '#mw-page-base' ).css( 'padding-top', 0 );
				break;
			case 'monobook':
				$( '#globalWrapper' ).css( 'position', 'relative' );
				$( '#globalWrapper' ).css( 'top', 0 );
				break;
		}
	}
</script>