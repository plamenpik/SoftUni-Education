const eventService = (() => {
    
    function createEvent(data) {
        return kinvey.post('appdata', 'events', 'kinvey', data);
    }

    function getAllEvents() {
        return kinvey.get('appdata', 'events', 'kinvey');
    }

    function getMyEvents () {
        return kinvey.get('appdata', 'events', 'kinvey', `?query={"_acl.creator":"${sessionStorage.getItem('id')}"}`);
    }

    function getAEvent (id) {
        return kinvey.get('appdata', `events/${id}`, 'kinvey');
    }

    function editEvent(data, id) {
        kinvey.update('appdata', `events/${id}`, 'kinvey', data)
    }

    return {
        getAllEvents,
        createEvent,
        getMyEvents,
        getAEvent,
        editEvent
    }
})();