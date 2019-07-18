function attachEvents() {
    const baseUrl = 'https://baas.kinvey.com/';
    const appKey = 'kid_BJ_Ke8hZg';
    const endpoint = 'venues';
    const username = 'guest';
    const password = 'pass';
    const headers = {
        'Authorization': `Basic ${btoa(username + ':' + password)}`,
        'Content-Type': 'application/json'
    };

    $('#getVenues').on('click', getVenues);

    async function getVenues() {
        let date = $('#venueDate').val();
        try {
            let venues = await $.ajax({
                method: 'POST',
                url: `${baseUrl}rpc/${appKey}/custom/calendar?query=${date}`,
                headers,
            });

            await showVenues(venues);
        } catch (error) {
            console.log(error);
        }
    }

    async function showVenues(venues) {
        let div = $('#venue-info');
        try {
            for (const venue of venues) {
                let venueInfo = await $.ajax({
                    url: `${baseUrl}appdata/${appKey}/${endpoint}/${venue}`,
                    method: 'GET',
                    headers
                });

                div.append(`
                    <div class="venue" id="${venueInfo._id}">
                      <span class="venue-name"><input class="info" type="button" value="More info">${venueInfo.name}</span>
                      <div class="venue-details" style="display: none;">
                        <table>
                          <tr><th>Ticket Price</th><th>Quantity</th><th></th></tr>
                          <tr>
                            <td class="venue-price">${venueInfo.price} lv</td>
                            <td><select class="quantity">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select></td>
                            <td><input class="purchase" type="button" value="Purchase"></td>
                          </tr>
                        </table>
                        <span class="head">Venue description:</span>
                        <p class="description">${venueInfo.description}</p>
                        <p class="description">Starting time: ${venueInfo.startingHour}</p>
                      </div>
                    </div>
                `);
            }
            $('body input.info').on('click', toggleVenue);

        } catch (error) {
            console.log(error);
        }
    }

    function toggleVenue() {
        let div = $(this).parent().parent();
        div.find('.venue-details').toggle();
        $('input.purchase').on('click', purchaseVenue)
    }

    function purchaseVenue() {
        console.log($(this).parent().parent().parent().parent().parent().attr('id'));
        console.log($(this).parent().parent().parent().parent().parent().find(".venue-name").text());
        console.log(Number($(this).parent().parent().find(".quantity").val()));
        console.log(Number($(this).parent().parent().find(".venue-price").text().substring(0, $(this).parent().parent().find(".venue-price").text().length-2)));
    }
}