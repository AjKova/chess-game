// Clear form inputs on modals if the modals are closed or hidden
    $(".close-modal").click(function (e) {
        if (e.target !== this) return; // will only clear input if anywhere outside modal is clicked
        $("#pwd").val("");
        $("#email").val("");       
    });