handlers.getCreateEvent = function (ctx) {
    ctx.isAuth = userService.isAuth();
    ctx.username = sessionStorage.getItem('username');

    ctx.loadPartials({
        header: './templates/common/header.hbs',
        footer: './templates/common/footer.hbs'
    }).then(function () {
        this.partial('./templates/events/create-event.hbs');
    }).catch(function (err) {
        console.log(err);
    });
};

handlers.postCreateEvent = function (ctx) {
    ctx.isAuth = userService.isAuth();
    ctx.username = sessionStorage.getItem('username');

    let data = { ...ctx.params, organizer: ctx.username, peopleInterestedIn: 0 };

    if(data.name.length < 6) {
        notifications.showError('The event name should be at least 6 characters long.');
    } else if (data.dateTime.length < 4) {
        notifications.showError('The date should be in string format (24 February; 24 March - 10 PM;)');
    } else if (!data.imageURL.startsWith('http')){
        notifications.showError('The image should start with "http://" or "https://"');
    }else if (data.description.length < 10){
        notifications.showError('The description should be at least 10 characters long.');
    } else {
        eventService.createEvent(data).then(function (res) {
            notifications.showSuccess('Event created successfully.');
            ctx.redirect('#/home');
        }).catch(function (err) {
            console.log(err);
        })
    }
};

handlers.getAllEvents = async function (ctx) {
    ctx.isAuth = userService.isAuth();
    ctx.username = sessionStorage.getItem('username');

    await eventService.getAllEvents().then(function (res) {
        ctx.hasEvents = !!res.length;
        ctx.event = res;
    }).catch(err => console.log(err));

    ctx.loadPartials({
        header: './templates/common/header.hbs',
        footer: './templates/common/footer.hbs',
    }).then(function () {
        this.partial('./templates/events/all-events.hbs');
    }).catch(function (err) {
        console.log(err);
    });
};

handlers.getEventDetail = async function (ctx) {
    ctx.isAuth = userService.isAuth();
    ctx.username = sessionStorage.getItem('username');

    let id = ctx.params.id;

    try {
        ctx.event = await eventService.getAEvent(id);

        ctx.loadPartials({
            header: './templates/common/header.hbs',
            footer: './templates/common/footer.hbs'
        }).then(function () {
            this.partial('./templates/events/event-details.hbs');
        }).catch(function (err) {
            console.log(err);
        });

    } catch (e) {
        console.log(e);
    }
};

handlers.getEventEdit = async function (ctx) {
    ctx.isAuth = userService.isAuth();
    ctx.username = sessionStorage.getItem('username');

    let id = ctx.params.id;

    try {
        ctx.event = await eventService.getAEvent(id);

        ctx.loadPartials({
            header: './templates/common/header.hbs',
            footer: './templates/common/footer.hbs'
        }).then(function () {
            this.partial('./templates/events/event-edit.hbs');
        }).catch(function (err) {
            console.log(err);
        });

    } catch (e) {
        console.log(e);
    }
};

handlers.postEventEdit = async function (ctx) {
    ctx.isAuth = userService.isAuth();
    ctx.username = sessionStorage.getItem('username');

    let id = ctx.params.id;

    let data = { ...ctx.params };

    try {

        eventService.editEvent(data,id).then(function (res) {
            notifications.showSuccess('Event edited successfully.');
            ctx.redirect('#/home');
        });
    } catch (e) {
        console.log(e);
    }
};
