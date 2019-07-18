const handlers = {};

$(() => {
  const app = Sammy('#root', function () {
    this.use('Handlebars', 'hbs');
    // home page routes
    this.get('/index.html', handlers.getHome);
    this.get('/', handlers.getHome);
    this.get('#/home', handlers.getHome);

    // user routes
    this.get('#/register', handlers.getRegister);
    this.get('#/login', handlers.getLogin);
    this.get('#/user/profile', handlers.getUserProfile);

    this.post('#/register', handlers.registerUser);
    this.post('#/login', handlers.loginUser);
    this.get('#/logout', handlers.logoutUser);

    // events routes
    this.get('#/event/create', handlers.getCreateEvent);
    this.post('#/event/create', handlers.postCreateEvent);
    this.get('#/events/all', handlers.getAllEvents);
    this.get('#/event/details/:id', handlers.getEventDetail);
    this.get('#/event/edit/:id', handlers.getEventEdit);
    this.post('#/event/edit', handlers.postEventEdit);
  });
  app.run('#/home');
});