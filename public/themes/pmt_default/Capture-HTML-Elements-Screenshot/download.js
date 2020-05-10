
function download(div, name)
{
    html2canvas($(div).get(0)).then(function (canvas) {
        // canvas width
        var canvasWidth = canvas.width;
        // canvas height
        var canvasHeight = canvas.height;

        var img = Canvas2Image.convertToImage(canvas, canvasWidth, canvasHeight);

        let type = 'jpeg'; // image type
        let f = name; // file name

        // save as image
        Canvas2Image.saveAsImage(canvas, canvasWidth, canvasHeight, type, f);
    });
}

$('.download').on('click', function () {
    console.log($(this).attr("data-div"));
    download($(this).attr("data-div"),  $(this).attr("data-name"));
});

$('[data-toggle="tooltip"]').tooltip()
