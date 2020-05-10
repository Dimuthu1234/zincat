$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var fetchData = function(query, dataURL) {
    // Return the $.ajax promise
    return $.ajax({
        data: query,
        dataType: 'json',
        url: dataURL,
        type: 'POST',
    });
};
