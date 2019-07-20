function attachEvents() {
    $('#btnLoad').on('click', loadContacts);
    $('#btnCreate').on('click', addContact);

    async function loadContacts() {
        $('#phonebook').empty();
        const url = 'https://phonebook-d70c8.firebaseio.com/contacts.json';

        try {
            let data = await $.ajax({
                method: 'GET',
                url,
            });
            for (let key in data) {
                $('#phonebook').append(`<li>${data[key].person}: ${data[key].phone} <button onclick="deleteContact(${key})">Delete</button></li>`);
            }
        } catch (e) {
            console.log(e);
        }
    }

    async function addContact() {
        const url = 'https://phonebook-d70c8.firebaseio.com/contacts.json';
        let person = $('#person').val();
        let phone = $('#phone').val();
        let data;
        if (person && phone) {
            data = {
                person: person,
                phone: phone
            };
        }

        try {
            await $.ajax({
                method: 'POST',
                url,
                data: JSON.stringify(data)
            });
            loadContacts();
        } catch (e) {
            console.log(e);
        }
        $('#person').val('');
        $('#phone').val('');
    }

    async function deleteContact(id) {
        //let id = $(this).parent().data('id');
        let url = `https://phonebook-d70c8.firebaseio.com/contacts/${id}.json`;

        try {
            await $.ajax({
                url,
                method: 'DELETE'
            });
            loadContacts();
        } catch (e) {
            console.log(e);
        }
    }
}