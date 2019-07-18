function solve() {
    let btn = $('button').on('click', signMeUp);

    function signMeUp() {
        let totalCost = 0;
        let fundPrice = 170;
        let advPrice = 180;
        let appPrice = 190;
        let webPrice = 490;
        let myCourses = $('#myCourses .courseBody ul');
        let selected = [];
        $('.courseBody input:checked').each(function () {
            selected.push($(this).attr('name'));
        });
        selected.pop();
        let result = [];
        selected.forEach((el) => result.push(`JS-${el[3].toUpperCase()}${el.slice(4)}`));

        let educForm = $('#educationForm input:checked').val();

        if (result.length === 4 && educForm === 'online') {
            totalCost = Math.trunc(((fundPrice + advPrice + appPrice) * 0.94 + webPrice) * 0.94);
            result.push('HTML and CSS');
        }

        if (result.length === 4) {
            totalCost = Math.trunc((fundPrice + advPrice + appPrice) * 0.94 + webPrice);
            result.push('HTML and CSS');
        }

        if (result.length === 3 && educForm === 'online' && !result.includes('JS-Web')) {
            totalCost = Math.trunc(((fundPrice + advPrice * 0.9 + appPrice) * 0.94) * 0.94);
        }

        if (result.length === 3 && educForm !== 'online' && !result.includes('JS-Web')) {
            totalCost = Math.trunc((fundPrice + advPrice * 0.9 + appPrice) * 0.94);
        }
        
        if (result.length === 1 && educForm !== 'online') {
            switch (result[0]) {
                case 'JS-Fundamentals':
                    totalCost = fundPrice;
                    break;
                case 'JS-Advanced':
                    totalCost = advPrice;
                    break;
                case 'JS-Applications':
                    totalCost = appPrice;
                    break;
                case 'JS-Web':
                    totalCost = webPrice;
                    break;
            }
        } else if (result.length === 1 && educForm === 'online') {
            switch (result[0]) {
                case 'JS-Fundamentals':
                    totalCost = Math.trunc(fundPrice * 0.94);
                    break;
                case 'JS-Advanced':
                    totalCost = Math.trunc(advPrice * 0.94);
                    break;
                case 'JS-Applications':
                    totalCost = Math.trunc(appPrice * 0.94);
                    break;
                case 'JS-Web':
                    totalCost = Math.trunc(webPrice * 0.94);
                    break;
            }
        }

        if (result.length === 2 && educForm === 'online' && !result.includes('JS-Fundamentals')&& !result.includes('JS-Advanced')) {
            totalCost = Math.trunc((appPrice + webPrice) * 0.94);
        }

        if (result.length === 2 && educForm !== 'online' && !result.includes('JS-Fundamentals')&& !result.includes('JS-Advanced')) {
            totalCost = appPrice + webPrice;
        }

        if (result.length === 2 && educForm === 'online' && result.includes('JS-Fundamentals')&& result.includes('JS-Advanced')) {
            totalCost = Math.trunc((fundPrice + advPrice * 0.9) * 0.94);
        }

        if (result.length === 2 && educForm !== 'online' && result.includes('JS-Fundamentals')&& result.includes('JS-Advanced')) {
            totalCost = Math.trunc(fundPrice + advPrice * 0.9);
        }

        if (result.length === 2 && educForm === 'online' && result.includes('JS-Fundamentals')&& result.includes('JS-Web')) {
            totalCost = Math.trunc((fundPrice + webPrice) * 0.94);
        }

        if (result.length === 2 && educForm !== 'online' && result.includes('JS-Fundamentals')&& result.includes('JS-Web')) {
            totalCost = Math.trunc(fundPrice + webPrice);
        }

        if (result.length === 2 && educForm === 'online' && result.includes('JS-Fundamentals')&& result.includes('JS-Applications')) {
            totalCost = Math.trunc((fundPrice + appPrice) * 0.94);
        }

        if (result.length === 2 && educForm !== 'online' && result.includes('JS-Fundamentals')&& result.includes('JS-Applications')) {
            totalCost = Math.trunc(fundPrice + appPrice);
        }

        if (result.length === 2 && educForm === 'online' && result.includes('JS-Advanced')&& result.includes('JS-Applications')) {
            totalCost = Math.trunc((advPrice + appPrice) * 0.94);
        }

        if (result.length === 2 && educForm !== 'online' && result.includes('JS-Advanced')&& result.includes('JS-Applications')) {
            totalCost = Math.trunc(advPrice + appPrice);
        }

        if (result.length === 2 && educForm === 'online' && result.includes('JS-Advanced')&& result.includes('JS-Web')) {
            totalCost = Math.trunc((advPrice + webPrice) * 0.94);
        }

        if (result.length === 2 && educForm !== 'online' && result.includes('JS-Advanced')&& result.includes('JS-Web')) {
            totalCost = Math.trunc(advPrice + webPrice);
        }

        result.forEach((e) => myCourses.append(`<li>${e}</li>`));
        $('.courseFoot p').text(`Cost: ${totalCost.toFixed(2)} BGN`);
    }
}

solve();