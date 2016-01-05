var upform = function (config) {
	config = config || {};
	upform.superclass.constructor.call(this, config);
};
Ext.extend(upform, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('upform', upform);

upform = new upform();