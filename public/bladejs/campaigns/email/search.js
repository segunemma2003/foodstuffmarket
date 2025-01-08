$(document).ready(function () {
    let input = $('#search-email')
    // let tempStr = input.val()
    // input.trigger('focus').val('')
    // input.val(tempStr)
    input.on('keydown', function (e) {
        if (e.key == 'Enter') { 
            e.preventDefault()
            var searchQuery = $(this).val().toLowerCase();
            fetchSearchResults(searchQuery);
        }
        // return false;
    });

    $('.checkAll').click(function () {
        if ($(this).is(':checked')) {
            $('.checking').prop('checked', true);
        } else {
            $('.checking').prop('checked', false);
        }
    });

    function fetchSearchResults(searchQuery) {
        $.ajax({
            type: "GET",
            url: "/campaign/email/contacts" + '?search=' + searchQuery,
            success: function (data) {
                console.log(data);
                $('#campaignLoadPage').empty();

                $('#campaignLoadPage').append(data);
                // selectEmails();

            },
            error: function (error) {
                console.error(error);
            }
        });
    }
});