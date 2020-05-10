var block = $('.chart-panel');
function startLoading(message)
{

    $(block).block({
        message: '<i class="icon-spinner2 spinner"></i><br>'+ message,
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait',
            'box-shadow': '0 0 0 1px #ddd'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'none'
        }
    });
}

function stopLoading() {
    $(block).unblock();
}
