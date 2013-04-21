define([
  'jquery',
  'lodash',
  'backbone',
  'text!templates/detail/page.html'
], function($, _, Backbone, modulesPageTemplate){
  var ModulesPage = Backbone.View.extend({
    el: '.page',
    render: function () {
      this.$el.html(modulesPageTemplate);
    }
  });
  return ModulesPage;
});
