class exports.BlogView extends Backbone.View
  id: 'blog-view'

  render: ->
    $(@el).html require('./templates/blog')
    this
