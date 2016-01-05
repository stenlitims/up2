Ext.onReady(function() {
	upform.config.connector_url = OfficeConfig.actionUrl;

	var grid = new upform.panel.Home();
	grid.render('office-upform-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});