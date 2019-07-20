function attachEvents() {
    $( window ).ready(showMessages);
    $('#submit').on('click', sendMessage);
    $('#refresh').on('click', showMessages);
    $('#delete').on('click', deleteAllMassages);

    function sendMessage() {
        $('#author').attr('disabled', true);
        let url = 'https://testa-832dd.firebaseio.com/messages.json';

        showMessages();

        let data = JSON.stringify({
            author: $('#author').val(),
            content: $('#content').val(),
            timestamp: +new Date()

        });

        $.ajax({
            method: 'POST',
            url: url,
            data,
            error: (err) => console.log(err)
        });

        clearInputs();
    }

    function showMessages() {
        let url = 'https://testa-832dd.firebaseio.com/messages.json';

        $.ajax({
            method: 'GET',
            url: url,
            success: showAllMessages,
            error: (err) => console.log(err)
        });
    }

    function showAllMessages(data) {
        let messages = '';

        Object.keys(data).forEach((m) => {
            messages += `${data[m].author}: ${data[m].content}\n`
        });

        $('#messages').text(messages);
    }

    function deleteAllMassages() {
        let url = 'https://testa-832dd.firebaseio.com/messages.json';

        $.ajax({
            method: 'DELETE',
            url: url,
            success: () => $('#messages').val('All messages was deleted!'),
            error: (err) => console.log(err)
        });
    }
    function clearInputs() {
        // $('#author').val('');
        $('#content').val('');
    }

    return showMessages;
}