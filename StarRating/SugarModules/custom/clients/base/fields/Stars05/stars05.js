/*********************************************************************************
Stars05 CONTROLLER
 ********************************************************************************/
({
	plugins : ['Tooltip'],

	_render : function () {
		var action = "view";
		var field_val = 0;
		if (this.model.has(this.name)) {
			field_val = this.model.get(this.name);
			if (field_val === '')
				field_val = 0;
		}
		if (this.def.link && this.def.route) {
			action = this.def.route.action;
		}
		if (!app.acl.hasAccessToModel(action, this.model)) {
			this.def.link = false;
		}
		if (this.def.link) {
			this.href = this.buildHref();
		}

		if (parseFloat(field_val) < 0.5) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/0-0-stars.png";
		} else if ((parseFloat(field_val) >= 0.5) && (parseFloat(field_val) < 1.0)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/0-5-stars.png";
		} else if ((parseFloat(field_val) >= 1.0) && (parseFloat(field_val) < 1.5)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/1-0-stars.png";
		} else if ((parseFloat(field_val) >= 1.5) && (parseFloat(field_val) < 2.0)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/1-5-stars.png";
		} else if ((parseFloat(field_val) >= 2.0) && (parseFloat(field_val) < 2.5)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/2-0-stars.png";
		} else if ((parseFloat(field_val) >= 2.5) && (parseFloat(field_val) < 3.0)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/2-5-stars.png";
		} else if ((parseFloat(field_val) >= 3.0) && (parseFloat(field_val) < 3.5)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/3-0-stars.png";
		} else if ((parseFloat(field_val) >= 3.5) && (parseFloat(field_val) < 4.0)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/3-5-stars.png";
		} else if ((parseFloat(field_val) >= 4.0) && (parseFloat(field_val) < 4.5)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/4-0-stars.png";
		} else if ((parseFloat(field_val) >= 4.5) && (parseFloat(field_val) < 5.0)) {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/4-5-stars.png";
		} else {
			this.def.stars05 = "custom/include/SugarFields/Fields/Stars05/5-0-stars.png";
		}
		app.view.Field.prototype._render.call(this);
	},
	buildHref : function () {
		var defRoute = this.def.route ? this.def.route : {},
		module = this.model.module || this.context.get('module');
		return '#' + app.router.buildRoute(module, this.model.id, defRoute.action, this.def.bwcLink);
	},
	unformat : function (field_val) {
		return _.isString(field_val) ? field_val.trim() : field_val;
	}
})
