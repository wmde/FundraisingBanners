<link rel="stylesheet" href="res/common-banner.css">
<link rel="stylesheet" href="res/sensitive-banner.css">
<link rel="stylesheet" href="res/lightbox.css">
<link rel="stylesheet" href="res/icon.css">
<script type="text/javascript" src="res/common-banner.js"></script>
<script type="text/javascript" src="res/sensitive-banner.js"></script>
<script type="text/javascript" src="res/lightbox.js"></script>

<div style="top: 0; display: block;" id="WMDE_Banner">

	<div id="WMDE_BannerFullForm-shadow"></div>

	<div style="box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);">
		<form method="post" name="donationForm">
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
												<tbody id="WMDE_BannerForm-payment">
												<tr class="frequency-options">
													<td colspan="2">
														<input checked="checked" class="amount-radio"
															   id="interval_onetime"
															   type="radio">
														<label for="interval_onetime"
															   class="interval-label">einmalig</label>
													</td>
													<td colspan="2">
														<input class="amount-radio" id="interval_multiple"
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
														<button onclick="showDebitDonation(this)">Lastschrift
														</button>
													</td>
													<td colspan="2" style="text-align: right">
														<button onclick="showDepositDonation(this)">Überweisung
														</button>
														<br>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="padding:8px 0 0 8px; text-align: left">
														<button onclick="showCreditDonation(this)">
															Kreditkarte
														</button>
													</td>
													<td colspan="2" style="padding:8px 8px 0 5px; text-align: right">
														<button id="btn-ppl" onclick="showPayPalDonation(this)">
															PayPal
														</button>
													</td>
												</tr>
												</tbody>
											</table>
											<div id="WMDE_BannerFullForm-details">
												<div id="WMDE_Banner-debit-type">
													<table>
														<tbody>
														<tr>
															<td style="padding-top: 17px">
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
															<td>
																<hr/>
															</td>
														</tr>
														</tbody>
													</table>
													<div id="WMDE_Banner-sepa">
														<table>
															<tbody>
															<tr>
																<td>
																	<label for="iban">IBAN</label><br/>
																	<input type="text"
																		   title="Internationale Kontonummer"
																		   class="required"
																		   placeholder="IBAN" autocomplete="off"
																		   name="iban"
																		   id="iban">
																	<span class="validation"></span>
																</td>
															</tr>
															<tr>
																<td>
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
																<td>
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
																<td>
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
												</div>
												<table>
													<tbody>
													<tr>
														<td style="height: 20px">
														</td>
													</tr>
													<tr>
														<td class="form-heading">
															<span
																class="form-heading-text">Pers&ouml;nliche Daten</span>
														</td>
													</tr>
													<tr>
														<td style="padding-top: 16px;">
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
															<span id="WMDE_Banner-anonymous">
																<input type="radio" id="address-type-3" title="anonym"
																	   value="anonym"
																	   name="adresstyp"/>
																<label for="address-type-3">Anonym</label>
															</span>
														</td>
													</tr>
													<tr>
														<td>
															<hr/>
														</td>
													</tr>
													</tbody>
												</table>
												<div id="WMDE_BannerFullForm-company">
													<table>
														<tbody>
														<tr>
															<td>
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
															<td>
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
															<td>
																<div style="float: left; padding-right: 6px">
																	<label for="first-name">Name</label><br/>
																	<input type="text" class="required small-input"
																		   placeholder="Vorname"
																		   title="Groß- und Kleinbuchstaben, Bindestriche und Leerzeichen"
																		   autocomplete="off" name="vorname"
																		   id="first-name">
																	<span class="validation icon-ok"></span>
																</div>
																<div style="float: left">
																	<br/>
																	<input type="text"
																		   class="required small-input focused"
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
															<td>
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
															<td>
																<div style="float: left; padding-right: 6px">
																	<label for="post-code">PLZ &amp; Ort</label><br/>
																	<input type="text" class="required small-input"
																		   title="Fünfstellige Postleitzahl"
																		   placeholder="z.B. 10117" autocomplete="off"
																		   name="plz"
																		   id="post-code">
																	<span class="validation"></span>
																</div>
																<div style="float: left">
																	<br/>
																	<input type="text" class="required small-input"
																		   placeholder="z.B. Berlin"
																		   autocomplete="off" name="ort" id="city">
																	<span class="validation"></span>
																</div>
															</td>
														<tr>
															<td>
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
															<td>
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
														<td>
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
														<td>
															<button type="submit" class="submit"
																	id="WMDE_BannerFullForm-next">
																Weiter um Spende abzuschließen
															</button>
															<button type="submit" class="submit"
																	id="WMDE_BannerFullForm-finish">
																Jetzt f&uuml;r Wikipedia spenden <span
																	class="mark-ok"></span>
															</button>
														</td>
													</tr>
													<tr>
														<td style="background: transparent; padding-top: 0">
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
														<button type="submit" class="submit"
																id="WMDE_BannerFullForm-finish-sepa">
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
		</form>
	</div>
	<div id="WMDE_BannerFullForm-arrow">&nbsp;</div>

	<div id="WMDE_BannerFullForm-info">
		<div id="WMDE_BannerFullForm-infolinks" class="banner-lightbox banner-lightbox-small">
			<ul>
				<li>
					<div class="lightbox-list-item">
						<span class="icon-bar-chart"></span>
							<span id="WMDE_BannerFullForm-funds-link" class="list-item-title"
								  onclick="toggleFundsBox()">Wohin geht das Geld?</span>
					</div>
				</li>
				<li>
					<div class="lightbox-list-item">
						<span class="icon-hand-right"></span>
							<span id="WMDE_BannerFullForm-bitcoin-link" class="list-item-title"
								  onclick="toggleBitCoinBox()">Bitcoins spenden</span>
					</div>
				</li>
				<li>
					<div class="lightbox-list-item last">
						<span class="icon-hand-right"></span>
								<span id="WMDE_BannerFullForm-taxes-link" class="list-item-title"
									  onclick="toggleTaxBox()">Steuerlich absetzbar</span>
					</div>
				</li>
			</ul>
		</div>

		<div id="WMDE_BannerFullForm-funds" class="banner-lightbox banner-lightbox-funds">
			<span class="icon-cross banner-lightbox-close" onclick="hideFundsBox()"></span>

			<div class="banner-lightbox-title">
				<span class="icon-bar-chart"></span>Wohin geht meine Spende?
				<a target="_blank" href="http://wikimedia.de/wiki/Transparenz"><span
						class="logo-itz-white"></span></a>
			</div>
			<p>
				<img src="img/wmde-mittelverwendung-2015.png">
			</p>

			<div style="position: relative">
				<div style="width: 200px; margin-right: 20px; float: left">
					<p>
						<strong>Die Organisation</strong><br>
						Wikimedia besteht in Deutschland aus zwei Organisationen: Wikimedia Deutschland e.V.
						(WMDE)
						und dessen 100%iger
						Tochtergesellschaft "Gemeinn&uuml;tzige Wikimedia F&ouml;rdergesellschaft mbH" (WMFG).
						Die F&ouml;rdergesellschaft
						ist
						Empf&auml;ngerin der Spenden.
					</p>

					<p>
						Sie hat den Zweck, Gelder an die US-amerikanische Wikimedia Foundation (WMF) zum Betrieb
						und
						Ausbau der
						Wikimedia-Projekte und f&uuml;r internationale Programme weiterzuleiten. Ebenso leitet
						die F&ouml;rdergesellschaft
						Gelder
						an
						den Wikimedia Deutschland e.V. weiter, der die Projekte des Vereins ausf&uuml;hrt.
					</p>
				</div>

				<div style="padding-left: 20px; border-left: 1px solid #cfd2d9; width: 400px; float: left">
					<p>
						<strong style="color:#2fa037;">Mittel f&uuml;r die Wikimedia Foundation</strong><br>
						Die Betreiberin der Wikimedia-Projekte nutzt die Spenden f&uuml;r Produktentwicklung,
						Technik, internationale
						Unterst&uuml;tzung und Aktivit&auml;ten rund um die Wikipedia.
					</p>

					<p>
						<strong style="color:#01b4dd;">Softwareentwicklung</strong><br>
						hat das Ziel, die Qualit&auml;t der Wikimedia-Projekte zu erh&ouml;hen und ihre
						Bedienung zu
						erleichtern.
						Deshalb sorgt
						das
						Team f&uuml;r stetige Verbesserung der Software rund um die Wikimedia-Projekte
						und entwickelt neuartige L&ouml;sungen, um auf die Bed&uuml;rfnisse der vielen
						Communitys zu
						reagieren.
					</p>

					<p>
						<strong style="color:#01b4dd;">Ideenf&ouml;rderung</strong><br>
						unterst&uuml;tzt die Freiwilligen in Form von Stipendien oder Reisekostenerstattungen,
						verleiht technische
						Ausr&uuml;stung,
						um das Aufnehmen von Fotos, Videos und T&ouml;nen zu erm&ouml;glichen und leistet
						logistische, administrative und organisatorische Hilfe bei der Durchf&uuml;hrung von
						Community-Veranstaltungen.
					</p>

					<p>
						<strong style="color:#01b4dd;">Bildung, Wissen und Kultur</strong><br>
						hat die Aufgabe, im Bildungs-, Wissenschafts- und Kulturbereich durch Austausch und
						Veranstaltungen f&uuml;r
						freie
						Inhalte zu werben. Au&szlig;erdem werden Forschungs- und Entwicklungsvorhaben
						initiiert und innovative Projekte unterst&uuml;tzt.
					</p>

					<p>
						<strong style="color:#01b4dd;">Kommunikation</strong><br>
						hat die Aufgabe, Wikimedia Deutschland bei der Kommunikation seiner Ziele und Aufgaben
						zu
						unterst&uuml;tzen.
						Dazu
						geh&ouml;ren Einzelbotschaften wie auch das Gesamtbild des Vereins &ndash; nach au&szlig;en
						wie innen.
					</p>

					<p>
						<strong style="color:#01b4dd;">Zusammenarbeit und Entwicklung</strong><br>
						k&uuml;mmert sich um Partnerschaften zur Umsetzung gezielter Projektvorhaben und sorgt f&uuml;r
						die Steuerung
						und
						Verkn&uuml;pfung der einzelnen Projekte des Vereins. Durch Monitoring und Evaluation
						wird
						zudem Wirkung und Zielerreichung der Projekte verbessert. Daf&uuml;r wird eine
						wirkungsorientiertes
						Monitoringsystem
						aufgebaut.
					</p>

					<p>
						<strong style="color:#0196b5;">Unterst&uuml;tzende Bereiche und Verwaltung</strong><br>
						Veranstaltungsmanagement, IT, Pr&auml;sidium, Vorstand, Verwaltung und Finanzen
					</p>
				</div>
			</div>
			<div style="clear:both"></div>
			<div style="font-size: 0.9em; color: #666666; margin-top: 18px;">* inklusive Einnahmen durch
				Mitgliedsbeitr&auml;ge,
				Drittmittel und sonstige Einnahmen
			</div>
			<hr/>
			<a title="Erfahren Sie mehr"
			   target="_blank"
			   href="https://meta.wikimedia.org/wiki/Wikimedia_Deutschland/2015_annual_plan/de"
			   class="banner-lightbox-more">Erfahren Sie mehr</a>
		</div>

		<div id="WMDE_BannerFullForm-bitcoin" class="banner-lightbox banner-lightbox-small">
			<span class="icon-cross banner-lightbox-close" onclick="hideBitCoinBox()"></span>

			<div class="banner-lightbox-title">
				<span class="icon-parcel"></span>Spenden Sie mit Bitcoins*
			</div>
			<form method="post" action="https://bitpay.com/checkout" id="bitpay-donate" target="_blank">
				<input type="hidden" value="checkout" name="action">
				<input type="hidden" value="Spenden Sie für Wikimedia" name="itemDesc">
				<input type="hidden" value="high" name="transactionSpeed">
				<input type="hidden" value="BTC" name="currency">

				<div id="bitpay-amount">
					<label for="bitpay-price" class="bitcoin-label">Betrag</label>
					<input type="number" max="250" min="0" step="0.001" value="0.05" name="price"
						   id="bitpay-price">
					<span>BTC</span>
				</div>

				<input type="hidden"
					   value="qzmQdxwfdUmodwKMJNf1ZLCaqI7nSBHdcjBHeApe31R0EUwzdqP6TqwS93hoPmzW8DC6OSBIEAdKv+eYfdHWWUhxxxpDBWngXiVUnfWE8IAJbCnHqmiNA+DxKrkKBZue9L62aCvon4jxDekKRyxNpYU/xSCkSeUoBvacSRn511l0CI5sXwMgMgDG1VCTEhOLc1FavrDfsquP8arPOomNOcydBn5OE8TXiLX0EndBjuPENr+pnWfP98GvAIFulO8pm9IlaN/xG5TNjU12HwN4hSTfTRi5vOVyd2DhjY7pXD2RzDdYDdd2Ym0phNLPR0oA"
					   name="data">

				<div id="bitpay-donate-button-wrapper">
					<input width="126" type="image" height="48" alt="BitPay, the easy way to pay with bitcoins."
						   onerror="this.onerror=null; this.src='https://bitpay.com/img/donate-button-md.png'"
						   src="https://bitpay.com/img/donate-button.svg" name="submit"
						   class="bitpay-donate-button">
				</div>

				<p id="bitpay-info-text">
					* Nach Dr&uuml;cken des Spendenbuttons werden Sie auf eine gesicherte Seite unseres
					Bitcoin-Dienstleisters BitPay
					weitergeleitet.
				</p>
			</form>
		</div>

		<div id="WMDE_BannerFullForm-taxes" class="banner-lightbox banner-lightbox-tax">
			<span class="icon-cross banner-lightbox-close" onclick="hideTaxBox()"></span>

			<div class="banner-lightbox-title">
				<span class="icon-hand-right"></span>Steuerlich absetzbar
				<a target="_blank" href="http://wikimedia.de/wiki/Transparenz"><span
						class="logo-itz-white"></span></a>
			</div>
			<p>
				Ist meine Spende steuerlich absetzbar?<br>
				<br>
				Ja, Ihre Spende ist steuerlich absetzbar. Die Wikimedia F&ouml;rdergesellschaft ist als gemeinn&uuml;tzig
				anerkannt und kann
				somit Zuwendungsbescheinigungen ausstellen. Bis zu einem Betrag von 200 &euro; gen&uuml;gt dem
				Finanzamt der sogenannten
				Vereinfachte Zuwendungsbescheid in Verbindung mit Ihrem Kontoauszug als Nachweis der Spende.
			</p>

			<p>
				<a target="_blank"
				   href="https://spenden.wikimedia.de/wiki/images/5/5c/Vereinfachter_Zuwendungsbescheid_Wikimedia_Foerdergesellschaft.pdf">Den
					vereinfachten Zuwendungsbescheid f&uuml;r die Wikimedia F&ouml;rdergesellschaft k&ouml;nnen
					Sie
					hier herunterladen.</a>
			</p>

			<p>
				Als Dankesch&ouml;n und Zeichen unserer Wertsch&auml;tzung stellen wir jedoch f&uuml;r jede
				Spende
				ab genau 15 Euro automatisch
				eine Zuwendungsbescheinigung aus. Diese verschicken wir zum Ende des ersten Quartals des
				folgenden
				Jahres. Wenn Sie
				Ihre Zuwendungsbest&auml;tigung eher ben&ouml;tigen, sagen Sie uns einfach Bescheid. Auf
				Nachfrage
				versenden wir die
				Best&auml;tigung auch gern eher (bei Lastschriften und Kreditkartenzahlungen fr&uuml;hestens
				nach
				der 56t&auml;gigen
				Widerspruchsfrist).
			</p>

			<p>
				F&uuml;r Spenden unter 15 &euro; bieten wir in der Regel keine Zuwendungsbest&auml;tigung an, da
				dem
				Finanzamt der Kontoauszug in
				Verbindung mit dem vereinfachten Zuwendungsbescheid als Nachweis der Spende ausreicht. Ebenso m&ouml;chten
				wir die Kosten
				f&uuml;r Verwaltung und Versand m&ouml;glichst gering halten. Wenn Sie dennoch eine
				Zuwendungsbest&auml;tigung
				erhalten m&ouml;chten,
				ist dies nat&uuml;rlich kein Problem. Gern stellen wir Ihnen eine Best&auml;tigung aus.
				Schreiben
				Sie uns dazu einfach eine
				E-Mail an spenden@wikimedia.de.
			</p>

			<p>
				Bitte beachten Sie: Bei selbstst&auml;ndigen &Uuml;berweisungen m&uuml;ssen Sie die Adresse in
				den
				Verwendungszweck eintragen, wenn
				Sie eine Zuwendungsbest&auml;tigung erhalten m&ouml;chten. Komfortabler ist es jedoch, wenn Sie
				mittels unseres
				Spendenformulars per &Uuml;berweisung spenden. Dort k&ouml;nnen Sie Ihre Adresse direkt
				eingeben.
				Die Kontoverbindung wird
				Ihnen dann im Anschluss mitsamt dem Code Ihrer Spende mitgeteilt. Diesen Code tragen Sie bitte
				bei
				Ihrer &Uuml;berweisung
				in den Verwendungszweck ein.
			</p>
		</div>

		<div style="clear:right"></div>
		<div id="WMDE_BannerFullForm-security" class="banner-lightbox banner-lightbox-small">
			<ul>
				<li>
					<div class="lightbox-list-item">
						<img src="img/global-sign.png">
						<img style="float: right;" src="img/owasp.png">

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
							<a href="https://spenden.wikimedia.de/spenden/Datenschutz" target="_blank">hier</a>
							einsehen.
						</p>
					</div>
				</li>
			</ul>
		</div>
		<div style="clear:right;"></div>
	</div>

	<img id="WMDE_Banner-close-ct" src="" border="0" height="0" width="0">
</div>

<script type="text/javascript">
	$( document ).ready( function() {
		$( 'body' ).prepend( $( '#centralNotice' ) );
		$( '#WMDE_Banner' ).hide();
		removeBannerSpace();

//		var impCount = increaseImpCount();
//		$( "#impCount" ).val( impCount );
//		var bannerImpCount = increaseBannerImpCount( "B14WMDE_43_141225_ctrl" );
//		$( "#bImpCount" ).val( bannerImpCount );

//		if ( wgAction === "view" ) {
//			setTimeout( addBannerSpace, 7500 );
		setTimeout( addBannerSpace, 1500 );
//		}
//		if ( wgUserName !== null ) $( '#wikilogin' ).val( 'yes' );
		$( window ).resize( function() {
			animateProgressBar();
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
</script>