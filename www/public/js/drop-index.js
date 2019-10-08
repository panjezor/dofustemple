$().ready(function () {
    $('#char-span1').css('display', 'inline-block');


    $('#character-count').on('change', function () {
            count = $(this).val();
        for (let i = 1; i < 9; i++) {
            $('#char-span' + i).css('display', 'none');

            }
        for (let i = 1; i < parseInt(count) + 1; i++) {
            $('#char-span' + i).css('display', 'inline-block');

        }
        }
    );
});

function countChance() {
    let chars = [];
    for (let i = 1; i < parseInt($('#character-count').val()) + 1; i++) {
        chars.push(parseInt($('#character' + i).val()) / 100);
    }
    //prospecting of all the characters is now in chars[]
    // for each one of them we need to count the chance
    let totalChance = 1;
    let dropRate = parseFloat($('#monster-drop').val()) / 100;
    $(chars).each(function (index, element) {
        totalChance *= 1 - (element * dropRate);
    });
    let pt = 1 - totalChance;
    console.log(pt.toFixed(4) * 100 + '%');
}
