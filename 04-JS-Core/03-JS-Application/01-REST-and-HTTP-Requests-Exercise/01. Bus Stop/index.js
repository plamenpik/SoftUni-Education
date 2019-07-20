function getInfo() {
    const baseURL = 'https://judgetests.firebaseio.com/businfo/';
    const extention = '.json';
    let busId = $('#stopId').val();

    $.ajax({
        method: 'GET',
        url: baseURL + busId + extention,
        success: printBusInfo,
        error: handleError
    });

    function printBusInfo(data) {
        $('#stopName').text(data.name);
        for (let [key, value] of Object.entries(data.buses)) {
            $('#buses').append(`<li>Bus ${key} arrives in ${value} minutes</li>`)
        }
    }

    function handleError(err) {
        $('#stopName').text('Error');
    }
}