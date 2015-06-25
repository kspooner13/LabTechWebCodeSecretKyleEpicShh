    CheckIE();
    function CheckIE()
    {
    var Browser;
    Browser = navigator.userAgent;
    if (Browser.indexOf("Trident") == -1)
    {
$(document).ready(function () {
    var getMax = function () {
        return $(document).height() - $(window).height();
    };
    var getValue = function () {
        return $(window).scrollTop();
    };
    if ('max' in document.createElement('progress')) {
        var progressBar = $('progress');
        progressBar.attr({ max: getMax() });
        $(document).on('scroll', function () {
            progressBar.attr({ value: getValue() });
        });
        $(window).resize(function () {
            progressBar.attr({
                max: getMax(),
                value: getValue()
            });
        });
    } else {
        var progressBar = $('.progress-bar'), max = getMax(), value, width;
        var getWidth = function () {
            value = getValue();
            width = value / max * 100;
            width = width + '%';
            return width;
        };
        var setWidth = function () {
            progressBar.css({ width: getWidth() });
        };
        $(document).on('scroll', setWidth);
        $(window).on('resize', function () {
            max = getMax();
            setWidth();
        });
    }
});
$(document).ready(function () {
    $('#flat').addClass('active');
    $('#progressBar').addClass('flat');
    $('#flat').on('click', function () {
        $('#progressBar').removeClass().addClass('flat');
        $('a').removeClass();
        $(this).addClass('active');
        $(this).preventDefault();
    });
    $('#single').on('click', function () {
        $('#progressBar').removeClass().addClass('single');
        $('a').removeClass();
        $(this).addClass('active');
        $(this).preventDefault();
    });
    $('#multiple').on('click', function () {
        $('#progressBar').removeClass().addClass('multiple');
        $('a').removeClass();
        $(this).addClass('active');
        $(this).preventDefault();
    });
    $('#semantic').on('click', function () {
        $('#progressBar').removeClass().addClass('semantic');
        $('a').removeClass();
        $(this).addClass('active');
        $(this).preventDefault();
        alert('hello');
    });
    $(document).on('scroll', function () {
        maxAttr = $('#progressBar').attr('max');
        valueAttr = $('#progressBar').attr('value');
        percentage = valueAttr / maxAttr * 100;
        if (percentage < 49) {
            document.styleSheets[0].addRule('.semantic', 'color: red');
            document.styleSheets[0].addRule('.semantic::-webkit-progress-value', 'background-color: red');
            document.styleSheets[0].addRule('.semantic::-moz-progress-bar', 'background-color: red');
        } else if (percentage < 98) {
            document.styleSheets[0].addRule('.semantic', 'color: orange');
            document.styleSheets[0].addRule('.semantic::-webkit-progress-value', 'background-color: orange');
            document.styleSheets[0].addRule('.semantic::-moz-progress-bar', 'background-color: orange');
        } else {
            document.styleSheets[0].addRule('.semantic', 'color: green');
            document.styleSheets[0].addRule('.semantic::-webkit-progress-value', 'background-color: green');
            document.styleSheets[0].addRule('.semantic::-moz-progress-bar', 'background-color: green');
        }
    });
});
 }}