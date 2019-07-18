(function solve() {
    const baseUrl = 'https://baas.kinvey.com/';
    const appKey = 'kid_BJXTsSi-e';
    const endpoint = 'students';
    const username = 'guest';
    const password = 'guest';
    const headers = {
        'Authorization': `Basic ${btoa(username + ':' + password)}`,
        'Content-Type': 'application/json'
    };

    $('#showStudents').on('click', showStudents);
    $('#addStudent').on('click', addStudent);

    async function showStudents() {
        $(' .added').empty();

        let students;
        try {
            students = await $.ajax({
                method: 'GET',
                url: `${baseUrl}appdata/${appKey}/${endpoint}`,
                headers,
            });

            students.sort((a, b) => (a.ID > b.ID) ? 1 : -1);

            for (let student of students) {
                $('#results tbody').append(`
                    <tr class="added">
                       <td>${student.ID}</td>
                       <td>${student.FirstName}</td>
                       <td>${student.LastName}</td>
                       <td>${student.FacultyNumber}</td>
                       <td>${student.Grade}</td>
                    </tr>
                `);
            }
        } catch (error) {
            console.log(error);
        }
    }

    async function addStudent() {
        let id = +$('#studentID').val();
        let firstName = $('#firstName').val();
        let lastName = $('#lastName').val();
        let facultyNumber = $('#facultyNumber').val();
        let grade = +$('#grade').val();

        let studentInfo = {
            ID: id,
            FirstName: firstName,
            LastName: lastName,
            FacultyNumber: facultyNumber,
            Grade: grade
        };

        const regex = /^(\d+)$/gm;

        let isFormInfoValid = typeof id === "number" && id > 0 &&
            firstName.length > 3 &&
            lastName.length > 4 &&
            facultyNumber.length > 5 &&
            regex.test(facultyNumber) &&
            grade >= 2 && grade <= 6;

        if (isFormInfoValid) {
            try {
                await $.ajax({
                    url: `${baseUrl}appdata/${appKey}/${endpoint}`,
                    method: 'POST',
                    headers,
                    data: JSON.stringify(studentInfo)
                });
                $("#success").show().delay(2000).fadeOut();
                await showStudents();
            } catch (error) {
                console.log(error);
            }
        } else {
            $("#error").show().delay(3000).fadeOut();
        }
    }

    function clearInputs() {

    }
})();