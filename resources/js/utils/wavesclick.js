const $ = require('jquery');

//EFECT WAVES CLICK
var waves = (function($) {

    var particle = '.particle';
    var template = '<span class="particle"></span>';
    var element = '.waves';

    $('body').delegate(element, 'click', animate);

    function animate(e) {
        var $this = $(this);

        $this.find(particle).remove();

        var width = $this.width() * 3;
        var height = $this.height() * 3;
        var posX = $this.offset().left;
        var posY = $this.offset().top;

        $this.prepend(template);

        if (width >= height)
            height = width;
        else
            width = height;

        var x = e.pageX - posX - width / 2;
        var y = e.pageY - posY - height / 2;

        $this.find(particle).css({
            width: width,
            height: height,
            top: y + 'px',
            left: x + 'px'
        }).addClass('animation');
    }

})($);