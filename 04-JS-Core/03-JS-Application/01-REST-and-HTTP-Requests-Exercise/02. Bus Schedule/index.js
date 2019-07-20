function solve() {
    let currentId = 'Depot';
    let nextId = 'depot';

    function depart() {
        let url = `https://judgetests.firebaseio.com/schedule/${nextId}.json`;
        $.ajax({
            method: 'GET',
            url: url,
            success: departSuccess,
            error : handleError
        });
        disableButtons('depart', 'arrive');
    }

    function departSuccess(data) {
        $('#info .info').text(`Next stop ${currentId}`);
        nextId = data.next;
    }

    function arrive() {
        let url = `https://judgetests.firebaseio.com/schedule/${nextId}.json`;
        $.ajax({
            method: 'GET',
            url: url,
            success: arriveSuccess,
            error : handleError
        });
        disableButtons('arrive','depart');

    }

    function arriveSuccess(data) {
        $('#info .info').text(`Arriving at ${currentId}`);
        currentId = data.name;
    }

    function handleError() {
        $('#info').text('Error');
    }

    function disableButtons(disable, enable) {
        $(`#${disable}`).attr('disabled', true);
        $(`#${enable}`).attr('disabled', false);
    }

    return {
        depart,
        arrive
    };
}