(function solve(){
   let rebuildBtn = $('#workField #kingdom button').on('click', rebuild);


    function rebuild() {
        let kingdom = $('#kingdom :input')[0].value;
        let king = $('#kingdom :input')[1].value;

        let kingdoms = ["CASTLE", "DUNGEON", "FORTRESS", "INFERNO", "NECROPOLIS", "RAMPART", "STRONGHOLD", "TOWER", "CONFLUX"];
        
        if (kingdoms.includes(kingdom.toUpperCase()) && king.length >= 2 ) {
            let element = $(`.kingdom #${kingdom.toLowerCase()}`);

        }
    }
})();



