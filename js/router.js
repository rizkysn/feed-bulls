// Filename: router.js
define([
  'jquery',
  'underscore',
  'backbone',
  'vm'
], function ($, _, Backbone, Vm) {
  var AppRouter = Backbone.Router.extend({
    routes: {
      // Pages
      'modules': 'modules',
      'submiter': 'submiter',
      'detail': 'detail',
      
      // Default - catch all
      '*actions': 'defaultAction'
    }
  });

  var initialize = function(options){
    var appView = options.appView;
    var router = new AppRouter(options);
    router.on('route:optimize', function () {
      require(['views/optimize/page'], function (OptimizePage) {
        var optimizePage = Vm.create(appView, 'OptimizePage', OptimizePage);
        optimizePage.render();
      });
    });
    router.on('route:defaultAction', function (actions) {
      require(['views/dashboard/page'], function (DashboardPage) {
        var dashboardPage = Vm.create(appView, 'DashboardPage', DashboardPage);
        dashboardPage.render();
      });
    });
    router.on('route:submiter', function () {
     require(['views/submiter/page'], function (ModulePage) {
        var submiterPage = Vm.create(appView, 'ModulesPage', ModulePage);
        submiterPage.render();
      });
    });
    router.on('route:detail', function (section) {
      require(['views/detail/page'], function (BackbonePage) {
        var detailPage = Vm.create(appView, 'BackbonePage', BackbonePage, {section: section});
        detailPage.render();
      });
    });
    Backbone.history.start();
  };
  return {
    initialize: initialize
  };
});
