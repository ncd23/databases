{BrunchApplication} = require 'helpers'
{MainRouter} = require 'routers/main_router'
{HomeView} = require 'views/home_view'
{BlogView} = require 'views/blog_view'

class exports.Application extends BrunchApplication
  # This callback would be executed on document ready event.
  # If you have a big application, perhaps it's a good idea to
  # group things by their type e.g. `@views = {}; @views.home = new HomeView`.
  initialize: ->
    @router = new MainRouter
    @homeView = new HomeView
    @blogView = new BlogView

window.app = new exports.Application
