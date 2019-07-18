function attachEvents() {
    $('#submit').on('click', getLocation);
    let baseUrl = 'https://judgetests.firebaseio.com/';
    let degreesSymbol = '&#176;';
    let locationCode;

    function getLocation() {
        $.get(baseUrl + 'locations.json')
            .then(locationWeather)
            .catch(handleError);

        $('#forecast').css('display', 'block');
    }

    function locationWeather(locations) {
        let inputTown = $('#location').val();

        for (let town of locations) {
            if (inputTown === town.name) {
                locationCode = town.code;
            }
        }

        $.get(baseUrl + 'forecast/today/' + locationCode + '.json')
            .then(displayTodayWeather)
            .catch(handleError);

        $.get(baseUrl + 'forecast/upcoming/' + locationCode + '.json')
            .then(displayUpcomingWeather)
            .catch(handleError);
    }

    function displayTodayWeather(locationWeather) {
        $('#current').append(`
                        <span class="condition symbol">${displayWeatherIcon(locationWeather['forecast'].condition)}</span>
                        <span class="condition">
                            <span class="forecast-data">${locationWeather['name']}</span>
                            <span class="forecast-data">${locationWeather['forecast'].low}${degreesSymbol}/${locationWeather['forecast'].high}${degreesSymbol}</span>
                            <span class="forecast-data">${locationWeather['forecast'].condition}</span>
                        </span>
                    `);
    }

    function displayUpcomingWeather(upcomingWeather) {
        for (let day of upcomingWeather['forecast']) {
            $('#upcoming').append(`                        
                        <span class="upcoming">
                            <span class="symbol">${displayWeatherIcon(day.condition)}</span>
                            <span class="forecast-data">${day.low}${degreesSymbol}/${day.high}${degreesSymbol}</span>
                            <span class="forecast-data">${day.condition}</span>
                        </span>
                    `);
        }
    }

    function displayWeatherIcon(weatherCondition) {
        switch (weatherCondition) {
            case 'Sunny':
                return '&#x2600;';
            case 'Partly sunny':
                return '&#x26C5;';
            case 'Overcast':
                return '&#x2601;';
            case 'Rain':
                return '&#x2614;';
        }
    }

    function handleError(error) {
        console.log(error);
    }
}