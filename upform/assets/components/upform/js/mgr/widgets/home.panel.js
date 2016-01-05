upform.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'upform-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			html: '<h2>' + _('upform') + '</h2>',
			cls: '',
			style: {margin: '15px 0'}
		}, {
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: true,
			hideMode: 'offsets',
			items: [{
				title: _('upform_items'),
				layout: 'anchor',
				items: [{
					html: _('upform_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'upform-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	upform.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(upform.panel.Home, MODx.Panel);
Ext.reg('upform-panel-home', upform.panel.Home);
