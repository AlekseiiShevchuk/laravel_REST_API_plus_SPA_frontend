<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bower_vendors.css">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        th span {
            cursor: pointer;
        }

        .container {
            margin-top: 10px;
        }

        .form-inline input.form-control {
            width: 183px;
        }

        .form-inline .form-group {
            vertical-align: top;
        }
    </style>
    <script src="/js/bower_vendors.js"></script>
</head>
<body>

<div class="my-class"></div>
<script type="application/javascript">
    $('.my-class').weatherWidget({
        cacheTime: 20,
        lat: 40.748441,
        lon: -73.985793,
        imgPath: '/img/',
        key: 'e8176c2f91fb1a7c252be0df694aa013'
    });
</script>
<script type="text/template" id="booksTableTemplate">
    <table class="table">
        <thead>
        <tr>
            <th>Id <span data-sortBy="id" class="fa fa-sort"></span></th>
            <th>Title <span data-sortBy="title" class="fa fa-sort"></span></th>
            <th>Author <span data-sortBy="author" class="fa fa-sort"></span></th>
            <th>Year <span data-sortBy="year" class="fa fa-sort"></span></th>
            <th>Genre <span data-sortBy="genre" class="fa fa-sort"></span></th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- Books will be rendered here -->
        </tbody>
    </table>
</script>

<script type="text/template" id="bookTemplate">
    <td><%= id %></td>
        <td><%= title %></td>
        <td><%= author %></td>
        <td><%= year %></td>
        <td><%= genre %></td>
        <td>
            <a href="#" class="edit btn btn-primary">
                <i class="fa fa-edit"></i>
            </a>
            <a href="#" class="remove btn btn-danger">
                <i class="fa fa-remove"></i>
            </a>
        </td>
    </script>

    <script type="text/template" id="LayoutTemplate">
        <div class="col-md-12" id="new-book"></div>
        <div class="col-md-12">
            <button class="btn btn-primary pull-right" id="add"><i class="fa fa-plus"></i> Add</button>
        </div>
        <div class="col-md-12" id="books"></div>
    </script>

    <script type="text/template" id="newBookTemplate">
        <form class="form-inline">
            <div class="form-group <% if (getError('title')) { %>has-error<% } %>">
                <label>Title</label><br />
                <input class="form-control" placeholder="Title" name="title" value="<%= title %>">
                <span class="help-block"><%= getError('title') %></span>
            </div>
            <div class="form-group <% if (getError('author')) { %>has-error<% } %>">
                <label>Author</label><br />
                <input class="form-control" placeholder="Author" name="author" value="<%= author %>">
                <span class="help-block"><%= getError('author') %></span>
            </div>
            <div class="form-group <% if (getError('year')) { %>has-error<% } %>">
                <label>Year</label><br />
                <input class="form-control" placeholder="Year" name="year" value="<%= year %>">
                <span class="help-block"><%= getError('year') %></span>
            </div>
            <div class="form-group <% if (getError('genre')) { %>has-error<% } %>">
                <label>Genre</label><br />
                <input class="form-control" placeholder="Genre" style="width: 53px" name="genre" value="<%= genre %>">
                <span class="help-block"><%= getError('genre') %></span>
            </div>
            <div class="form-group">
                <label>&nbsp;</label><br />
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                <button type="reset" class="btn btn-default"> Cancel</button>
            </div>
        </form>
    </script>

    <div class="container">
        <div class="row" id="app"></div>
    </div>

<script src="/js/bundle.js"></script>

    </body>
</html>