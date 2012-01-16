class exports.MainRouter extends Backbone.Router
  routes :
    '': 'home',
    '/blog': 'blog'
  home: ->
    $('body').html app.homeView.render().el
  blog: ->
    $('body').html app.blogView.render().el
