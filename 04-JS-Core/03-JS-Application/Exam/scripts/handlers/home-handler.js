handlers.getHome = function (ctx) {
    ctx.isAuth = userService.isAuth();
    ctx.username = sessionStorage.getItem('username');

    ctx.loadPartials({
        header: './templates/common/header.hbs',
        footer: './templates/common/footer.hbs'
    }).then(function () {
        if (ctx.isAuth) {
            ctx.redirect('#/events/all')
        } else {
            this.partial('./templates/home.hbs');
        }
    }).catch(function (err) {
        console.log(err);
    });
};