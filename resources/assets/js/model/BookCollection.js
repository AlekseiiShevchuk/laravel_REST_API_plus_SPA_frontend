var Backbone = require('backbone');

var BookModel = require('../model/BookModel.js');

module.exports =  Backbone.Collection.extend({
  url: '/api/books',
  model: BookModel
});