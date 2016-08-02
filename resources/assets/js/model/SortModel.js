var Backbone = require('backbone');

module.exports = Backbone.Model.extend({
  defaults: {
    sortBy: null,
    sortOrder: null
  },

  isEmpty: function() {
    return !this.get('sortBy') || !this.get('sortOrder');
  }
});