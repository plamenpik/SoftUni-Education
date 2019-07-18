function main(dayOfWeek, service, hour) {
    let price = 0;
    let isWorkDay = dayOfWeek === 'Monday' || dayOfWeek === 'Tuesday'
        || dayOfWeek === 'Wednesday' || dayOfWeek === 'Thursday'
        || dayOfWeek === 'Friday';
    let isWeekend = dayOfWeek === 'Saturday' || dayOfWeek === 'Sunday';

    if (isWorkDay) {
        switch (service) {
            case 'Fitness':
                if (hour >= 8 && hour <= 15) {
                    price = 5;
                } else {
                    price = 7.5;
                }
                break;
            case 'Sauna':
                if (hour >= 8 && hour <= 15) {
                    price = 4;
                } else {
                    price = 6.5;
                }
                break;
            case 'Instructor':
                if (hour >= 8 && hour <= 15) {
                    price = 10;
                } else {
                    price = 12.5;
                }
                break;
        }
    }
    if (isWeekend) {
        switch (service) {
            case 'Fitness':
                if (hour >= 8 && hour <= 15) {
                    price = 8;
                } else {
                    price = 8;
                }
                break;
            case 'Sauna':
                if (hour >= 8 && hour <= 15) {
                    price = 7;
                } else {
                    price = 7;
                }
                break;
            case 'Instructor':
                if (hour >= 8 && hour <= 15) {
                    price = 15;
                } else {
                    price = 15;
                }
                break;
        }
    }

    console.log(price);
}

main('Sunday', 'Fitness', 22.00);