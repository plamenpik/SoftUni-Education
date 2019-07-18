function solve(points, homeworkCompleted, totalHomework) {
    const maxPoints = 100;
    const maxExamPoints = 400;
    let grade = 0;

    if (points === 400) {
        grade = 6;
        console.log(grade.toFixed(2));
        return;
    }

    let homeworkPoints = (homeworkCompleted / totalHomework) * 10;
    let examPoints =  (points / maxExamPoints) *90;

    let totalPoints = examPoints + homeworkPoints;
    grade = 3 + 2 * (totalPoints - maxPoints / 5) / (maxPoints / 2);

    if (grade < 3) {
        grade = 2;
        console.log(grade.toFixed(2));
        return;
    }
    if (grade > 6) {
        grade = 6;
    }

    console.log(grade.toFixed(2));
}

solve(200, 1, 7);