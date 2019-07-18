function main(steps, stepLength, speed) {
    let distance = steps * stepLength;
    let time = Math.round(distance / (speed / 3.6) + Math.floor(distance / 500) * 60);

    let date = new Date(null);
    date.setSeconds(time);
    let timeString = date.toISOString().substr(11, 8);
    console.log(timeString)
}

main(4000, 0.60, 5);