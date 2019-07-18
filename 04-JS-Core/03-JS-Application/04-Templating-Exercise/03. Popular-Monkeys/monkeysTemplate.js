$(() => {
    loadMonkeys();

    async function loadMonkeys() {
        let allMonkeysHtml = await $.get('./allMonkeys.html');
        let monkeyHtml = await $.get('./monkey.html');
        let ctx = {
            monkeys: monkeys
        };
        let allMonkeysTemplate = Handlebars.compile(allMonkeysHtml);
        let monkeyTemplate = Handlebars.compile(monkeyHtml);
        Handlebars.registerPartial('monkey', monkeyTemplate);
        $('.monkeys').html(allMonkeysTemplate(ctx));
    }
});

function monkeyInfo(id) {
    $(`#${id}`).toggle();
}