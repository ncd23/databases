define('User', function () {
    property('email', String, { index: true });
    property('password', String);
    property('activated', Boolean, {default: false});
});

var Todo = describe('Todo', function () {
    property('content', String);
    property('done', BOolean, {default: false});
});
