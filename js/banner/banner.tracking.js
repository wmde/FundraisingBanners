/**
 * JavaScript library for tracking functionalities
 *
 * @licence GNU GPL v2+
 * @author Kai Nissen <kai.nissen@wikimedia.de>
 */
( function ( Banner, $ ) {
	'use strict';

	var TP;

	function Tracking() {
		var self = this;
		this._tracker = null;
		this._eventsTracked = [];

		$( document ).ready( function () {
			self.initTrackingLib();
			self.initClickHandlers();
		} );
	}

	TP = Tracking.prototype;

	/**
	 * Set the tracker lib
	 *
	 * @param {Tracker} tracker an instance of Piwik's Tracker class
	 */
	TP.setTracker = function ( tracker ) {
		this._tracker = tracker;
	};

	/**
	 * Track a virtual page view
	 *
	 * @param {string} eventName
	 */
	TP.trackVirtualPageView = function ( eventName ) {
		var virtualUrl;
		if ( this.shouldTrack( eventName, this.getRandomNumber() ) ) {
			virtualUrl = Banner.config.tracking.baseUrl +
				Banner.config.tracking.events[ eventName ].pathName +
				'/' +
				Banner.config.tracking.keyword;
			this._tracker.setCustomUrl( virtualUrl );
			this._tracker.trackPageView( virtualUrl );
		}
	};

	/**
	 * Determines whether an event should be tracked
	 *
	 * @param {string} eventName event name based on the property keys of Banner.tracking.events
	 * @param {number} randomNumber randomly generated number to compare against the configured sample size
	 * @return {boolean}
	 */
	TP.shouldTrack = function ( eventName, randomNumber ) {
		return this._tracker &&
			Banner.config.tracking.events[ eventName ] &&
			Banner.config.tracking.events[ eventName ].sample > randomNumber;
	};

	/**
	 * @return {number}
	 */
	TP.getRandomNumber = function () {
		return Math.random() * ( 1 - 0.01 ) + 0.01;
	};

	/**
	 * fetch the piwik library and get the specified tracker from it
	 */
	TP.initTrackingLib = function () {
		var self = this;
		$.ajax( {
			url: Banner.config.tracking.libUrl,
			dataType: 'script',
			cache: true,
			success: function () {
				var trackingConfig = Banner.config.tracking;
				self.setTracker( Piwik.getTracker( trackingConfig.trackerUrl, trackingConfig.siteId ) );
			}
		} );
	};

	/**
	 * bind click events to elements as configured
	 */
	TP.initClickHandlers = function () {
		var self = this;
		$.each( Banner.config.tracking.events, function ( key, settings ) {
			$( settings.clickElement ).click( function () {
				if ( $.inArray( key, self._eventsTracked ) === -1 ) {
					Banner.tracking.trackVirtualPageView( key );
					self._eventsTracked.push( key );
				}
			} );
		} );
	};

	Banner.tracking = new Tracking();

} )( Banner, jQuery );
