/*
 *
 *  admitad carousel for adversing campaign on homepage
 *  $ v 1.0
 *  15.07.2010
 **/

(function ($) {                  
$.fn.advCompaignCarousel = function(options) {
    var o = $.extend({
        speed: 50,    // (px/s) speed in ms of the animation.
        rewSpeed:400, // (px/s) rewed speed
        start: 0,     // (px) start point
        hPics: [],    //  hoverPics
        hPicsSt: [],  //  load status (0-wait, 1-ready))
        pics:[],      //  array of pics in <ul>-tag
        margin:33,
        height:60
    }, options || {});
    
    o.speed = 100000/o.speed , o.rewSpeed = 100000/o.rewSpeed;

    return this.each(function() {                           
        var div = $(this), ul = $("ul", div), tLi = $("li", ul), tl = tLi.size();
        
        // bind pics
        if(o.hPics.length) {
            var picsCount = $("img", div).each(function( key, el) {
                o.pics.push($(this).attr('src'));
                o.hPicsSt.push(window.opera?1:0);
                var image = new Image();
                image.key = key
                // pics preloader
                image.onload = function() { o.hPicsSt[this.key] = 1};
                image.src = o.hPics[key];

            }).size();
        }

        // for circular
        var imgSet = tLi.clone();
        var widthUl = 0, widthUlmargin = 0, toStart = false;
        tLi.each(function(el,key) {
            widthUl += $(key).width();
        });
        widthUlmargin = widthUl + (tl + 1) * o.margin;
        if(widthUlmargin + 300 > div.width()) toStart = true;
        toStart && ul.prepend(imgSet).append(imgSet.clone());
        !toStart && (o.margin = parseInt((div.width() - widthUl) /(tl+1)));
        o.margin > 60 && (o.margin = 60);
        
        if(o.hPics.length) {
            var i = 0;
           
            $("img", div).each(function( key, el) {
                $(this).parent().css({
                    'margin-top': (o.height - $(this).height())/2,
                    'margin-left': o.margin
                });
               
                this.key = i;
                i = (i+1 == picsCount) ? 0 : i+1;
            });
        }
        
        // pics hover
        if(o.hPics.length ) {
            $("img", this).bind('mouseout', function() {
                o.hPicsSt[this.key] && 
                    $(this).animate({'opacity': 0.6},{queue: false, duration:90, easing:'linear', complete:function() {
                        $(this).attr('src',o.pics[this.key])
                               .css({'opacity': 1});
                    }});
                
            }).bind('mouseover',function() {
                 o.hPicsSt[this.key] &&
                    $(this).attr('src',o.hPics[this.key])
                           .css({'opacity': 0.6})
                           .animate({'opacity': 1},{queue: false, duration:170, easing:'linear'});
                 
            });
        }
        !toStart && $('.but_left, .but_right',div).css('display', 'none');
        
        // buttons «left/right» binds
        toStart && $('.but_left',div).bind('mousedown',function(el) {
            $(this).css('border-top-width',1);
            backward(null,null,o.rewSpeed);
        }).bind('mouseup mouseout',function(el) {$(this).css('border-top-width',0); return stop(); });
        
        toStart && $('.but_right',div).bind('mousedown',function() {
            $(this).css('border-top-width',1);
            forward(null,null,o.rewSpeed);
        }).bind('mouseup mouseout',function() { $(this).css('border-top-width',0); return stop()});
        
        
	var li = $("li", ul);						     
        div.css("visibility", "visible");
        li.css("overflow", "hidden").css("float", "left")     
            .children().css("overflow", "hidden");          
        li.css("display", "inline"); 		
        if(li.children().get(0).tagName.toLowerCase() == 'a')
        	li.children().css('float','left');

        var liSize = 200;                 // Full <li> size (incl margin)
        var curr = o.start;               // Current position in pixels
        var step = 100;                   // step size
        
        widthUl = 0;
        li.each(function(el,key) {
            widthUl += $(key).width();
        });
        
        // Adjust the start position
        o.start += widthUl/3;
        curr += widthUl/3;

        ul.css({'width': widthUl + "px", 'left': -o.start});
	var divSize = div.width();								

        // Bind the events with the "div" object
        div.bind('mouseout', function() {
	    return forward(); 
        }).bind('mouseover',function() {
            return stop();
        });

        // > run ->
        function forward(s, func, speed, easing){
            s = (s == null) ? step : s;
            func = (func == null) ? function() {forward(s, func, speed, easing)}:func;
            
            div.animate( { scrollLeft: -(-(curr + s))} , (speed == null) ? o.speed : speed,
                (easing == null) ? 'linear' : easing,
                function() {
                    curr += s; //Add step size
                    if(curr + divSize + 200 >= widthUl){
                        div.scrollLeft( curr - widthUl/3);
                        curr -= widthUl/3;
                    }
                    func();
                }
            );
        }

        // > run  <-
        function backward(s, func, speed, easing){
            s = (s == null) ? step : s;
            func = (func == null) ? function() {backward(s, func, speed, easing)}:func;
            div.animate( {scrollLeft: (curr - s)}  , (speed == null) ? o.speed : speed,
                (easing == null) ? 'linear' : easing,
                function() {
                    curr -= s;
                    if(curr <= 200){
                        div.scrollLeft(curr + widthUl/3);
                        curr += widthUl/3;
	            }
                    func();
                }
            );
        }

        // * Stop the animation
        function stop(){
            div.stop();
            curr = 0 + parseInt(div.scrollLeft());
            return;
        }
        
        // > run on start
        div.scrollLeft(o.start);
        toStart && forward();
      
        return true;
    });
};

})(jQuery);