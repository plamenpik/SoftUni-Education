$(() => {
    renderCatTemplate();

    async function renderCatTemplate() {
        let template = await $.get('./catTemplate.html');
        let compiledTemplate = Handlebars.compile(template);
        let ctx = {
          cats: window.cats
        };
        $('#allCats').html(compiledTemplate(ctx));
    }

});

function showInfo(id) {
    $(`#${id}`).toggle();
}
