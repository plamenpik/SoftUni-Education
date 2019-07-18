function attachEvents() {
    $('#btnLoadTowns').on('click', getTowns);

    function getTowns() {
        let inputTowns = $('#towns').val().split(', ');
        //get template
        let template = $('#towns-template').html();
        //compile template
        let compiledTemplate = Handlebars.compile(template);
        //create ctx
        let ctx = {
          inputTowns
        };
        //add to html
        $('#root').html(compiledTemplate(ctx));
    }
}