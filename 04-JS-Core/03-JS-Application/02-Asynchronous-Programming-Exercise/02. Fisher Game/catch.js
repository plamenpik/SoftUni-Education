function attachEvents() {
    const baseUrl = 'https://baas.kinvey.com/';
    const appKey = 'kid_BkLtBqh_4';
    const endpoint = 'biggestCatches';
    const username = 'pesho';
    const password = '123456';
    const headers = {
        'Authorization': `Basic ${btoa(username + ':' + password)}`,
        'Content-Type': 'application/json'
    };

    $('.load').on('click', loadCatches);
    $('.add').on('click', addCatch);

    async function loadCatches() {
        let catches;
        try {
            catches = await $.ajax({
                method: 'GET',
                url: `${baseUrl}appdata/${appKey}/${endpoint}`,
                headers,
            });

            $('#catches').empty();

            for (let singleCatch of catches) {
                let div = $(`
                <div class="catch" data-id="${singleCatch._id}">
                    <label>Angler</label>
                    <input type="text" class="angler" value="${singleCatch.angler}"/>
                    <label>Weight</label>
                    <input type="number" class="weight" value="${singleCatch.weight}"/>
                    <label>Species</label>
                    <input type="text" class="species" value="${singleCatch.species}"/>
                    <label>Location</label>
                    <input type="text" class="location" value="${singleCatch.location}"/>
                    <label>Bait</label>
                    <input type="text" class="bait" value="${singleCatch.bait}"/>
                    <label>Capture Time</label>
                    <input type="number" class="captureTime" value="${singleCatch.captureTime}"/>
                </div>
            `);

                let updateBtn = $('<button class="update">Update</button>');
                updateBtn.on('click', updateCatch);
                let deleteBtn = $('<button class="delete">Delete</button>');
                deleteBtn.on('click', deleteCatch);

                div.append(updateBtn);
                div.append(deleteBtn);

                $('#catches').append(div);
            }
        } catch (error) {
            console.log(error);
        }
    }

    async function addCatch() {
        let newCatch = {
            angler: $('#addForm input.angler').val(),
            weight: +$('#addForm input.weight').val(),
            species: $('#addForm input.species').val(),
            location: $('#addForm input.location').val(),
            bait: $('#addForm input.bait').val(),
            captureTime:+$('#addForm input.captureTime').val()
        };

        try {
            await $.ajax({
                method: 'POST',
                url: `${baseUrl}appdata/${appKey}/${endpoint}`,
                data: JSON.stringify(newCatch),
                headers,
            });
        } catch (error) {
            error.log();
        }

        await loadCatches();
    }

    async function updateCatch() {
        let id = $(this).parent().data('id');
        let updatedCatch = {
            angler: $(this).parent().find('input.angler').val(),
            weight: +$(this).parent().find('input.weight').val(),
            species: $(this).parent().find('input.species').val(),
            location: $(this).parent().find('input.location').val(),
            bait: $(this).parent().find('input.bait').val(),
            captureTime: +$(this).parent().find('input.captureTime').val(),
        };

        try {
            await $.ajax({
                url: `${baseUrl}appdata/${appKey}/${endpoint}/${id}`,
                method: 'PUT',
                data: JSON.stringify(updatedCatch),
                headers,
            });
        } catch (error) {
            console.log(error);
        }

        await loadCatches();
    }

    async function deleteCatch() {
        let id = $(this).parent().data('id');

        try {
            await $.ajax({
                url: `${baseUrl}appdata/${appKey}/${endpoint}/${id}`,
                method: 'DELETE',
                headers,
            });
        } catch (error) {
            console.log(error);
        }

        await loadCatches();
    }
}