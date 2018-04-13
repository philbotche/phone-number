// Selects the operators
$(document).ready(function (e) {
    var op = $(".op");
    op.click(function () {
        var elementclick = $(this);
        elementclick.toggleClass("selected");
    })
});


// Execute an ajax request
$(document).ready(function () {
    var sender = $("#sender");
    sender.click(function () {
        var ops = $(".selected");

        // table
        var tab = {};

        ops.each(function (index) {
            var id = $(this);
            if (id.attr('id') == 'orange') {
                tab.Orange = 'orange'
            }
            if (id.attr('id') == 'mtn') {
                tab.Mtn = 'mtn'
            }
            if (id.attr('id') == 'moov') {
                tab.Moov = 'moov'
            }
        });

        $('#list').load('list.php', tab);
        ops.removeClass('selected');
    });

});

//Mask and show mobile operators
$(document).ready(function () {
    $(".container-operators").hide();
    $('#sel').click(function () {
        $(".container-operators").slideDown();
        $('#sel').css('color', 'inherit');

    });
})
