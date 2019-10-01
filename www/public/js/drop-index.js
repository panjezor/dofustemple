$().ready(function () {
    $('#character-count').on('change', function () {
            count = $(this).val();
            $('#character-pp').text('');
            let options = '';
            for (let i = 0; i < count; i++) {
                options += '<label for="character' + (i + 1) + '">Character</label><input id="character' + (i + 1) + '" class="form-control">';
            }
            options += '';
            $('#character-pp').append(options);
        }
    );
    $('#monster-count').on('change', function () {
            count = $(this).val();
            $('#monster-pp').text('');
            let options = '';
            for (let i = 0; i < count; i++) {
                options += '<label for="monster' + (i + 1) + '">Monster</label><input id="monster' + (i + 1) + '" class="form-control">';
            }
            options += '';
            $('#monster-pp').append(options);
        }
    );
})
