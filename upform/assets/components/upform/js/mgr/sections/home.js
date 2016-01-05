upform.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'upform-panel-home', renderTo: 'upform-panel-home-div'
		}]
	});
	upform.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(upform.page.Home, MODx.Component);
Ext.reg('upform-page-home', upform.page.Home);