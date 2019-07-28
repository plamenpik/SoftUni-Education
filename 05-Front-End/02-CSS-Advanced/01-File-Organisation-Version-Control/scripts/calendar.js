function addEvents() {
    let days = document.getElementsByClassName('day');
    [...days].forEach(day => { day.addEventListener('click', addAlert); });
    
    function addAlert(event) {
        let target = event.target;
        let content = target.textContent;
        let bgColor = getComputedStyle(target, null).getPropertyValue('background-color');

        if (content) {
            if (bgColor === 'rgb(255, 0, 0)') {
                swal ({
                    title: "Warning!",
                    text: 'Please pick working day!',
                    icon: "warning",
                    button: "Close"
                });
            } else {
                swal ({
                    title: "Good job!",
                    text: `You pick ${content} August`,
                    icon: "success",
                    button: "Done"
                });
                target.style.backgroundColor = '#7FBA00';
                target.removeEventListener('click', addAlert);
            }
        } else {
            swal ({
                title: "Oops!",
                text: 'Please pick a day from the current month!',
                icon: "error",
                button: "Ok"
            });
        }
    }
}
