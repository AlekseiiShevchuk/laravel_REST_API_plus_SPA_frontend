var $ = require('jquery');

var BookCollection = require('./model/BookCollection.js');
var BookCollectionComparator = require('./service/BookCollectionComparator.js');
var BooksView = require('./view/BooksView.js');
var SortModel = require('./model/SortModel.js');
var LayoutView = require('./view/LayoutView.js');
$(function() {
  var sortModel = new SortModel();

  books = new BookCollection([], {
    comparator: BookCollectionComparator(sortModel)
  });

  var view = new LayoutView({
    collection: books,
    booksSortModel: sortModel
  });
  view.render();

  books.fetch();
});