function attachEvents() {
    $('#btnLoad').click(loadContacts);
    $('#btnCreate').click(createContact);

    let baseServiceUrl = "https://phonebook-d70c8.firebaseio.com/contacts";

    function loadContacts() {
        $('#phonebook').empty();
        $.get(baseServiceUrl + ".json")
            .then(displayContacts)
            .catch(displayError);
    }

    function displayContacts(contacts) {
        for(let key in contacts){
            console.log(key);
            let person = contacts[key]['person'];
            let phone = contacts[key]['phone'];

            $('#phonebook')
                .append($('<li>').text(person + ': ' + phone + ' ')
                    .append($('<button>').text('Delete').click(function () {
                        deleteContact(key)
                    })));
        }
    }

    function displayError(err) {
        $('#phonebook').append($('<li>').text("Error"));
    }

    function createContact() {
        let newContactJSON = JSON.stringify({
            person: $('#person').val(),
            phone: $('#phone').val()
        });

        $.post(baseServiceUrl + '.json', newContactJSON)
            .then(loadContacts)
            .catch(displayError);

        $('#person').val('');
        $('#phone').val('');
    }

    function deleteContact(key) {
        let request = {
            method: 'DELETE',
            url: baseServiceUrl + '/' + key + '.json'
        };

        $.ajax(request)
            .then(loadContacts)
            .catch(displayError);
    }
}