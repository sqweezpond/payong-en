var gridStack, object;
function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
}

$(function(){


    // thanks to http://stackoverflow.com/a/22885503
    var waitForFinalEvent = function() {
        var b = {};
        return function(c, d, a) { a || (a = "I am a banana!");
            b[a] && clearTimeout(b[a]);
            b[a] = setTimeout(c, d) } }();

    var fullDateString = new Date();

    function isBreakpoint(alias) {
        return $('.device-' + alias).is(':visible');
    }


    var options = {
        float: false,
        vertical_margin: 2,
        disableDrag: true,
        disableResize: true
    };
    $('.grid-stack').gridstack(options);

    
    function resizeGrid() {
        var grid = $('.grid-stack').data('gridstack');
        if (isBreakpoint('xs')) {
            $('#grid-size').text('One column mode');
        } else if (isBreakpoint('sm')) {
            grid.setGridWidth(3);
            $('#grid-size').text(3);
        } else if (isBreakpoint('md')) {
            grid.setGridWidth(6);
            $('#grid-size').text(6);
        } else if (isBreakpoint('lg')) {
            grid.setGridWidth(12);
            $('#grid-size').text(12);
        }
    };

    $(window).resize(function() {
        waitForFinalEvent(function() {
            resizeGrid();
        }, 300, fullDateString.getTime());
    });

    object = new function() {

    	var _this = this;
		this.album = getURLParameter('album');
		this.id = getURLParameter('id');
        
        /**
         * load data from json file
         * @param  {Function} callback callback function run after loaded
         * @return {void}           
         */
    	this.loadJSON = function( callback ){
    		var jsonname = _this.album + "_" + _this.id + ".json";
    		$.ajax({
    			url: "assets/json/" + jsonname,
    			dataType: 'json',
    			success: function( data ){
    				_this.serializedData = data; // 
    				callback();
    			}
    		});
    	}.bind(this);


        this.saveGrid = function() {
            this.serializedData = _.map($('.grid-stack > .grid-stack-item:visible'), function(el) {
                el = $(el);
                var node = el.data('_gridstack_node');
                return {
                    x: node.x,
                    y: node.y,
                    width: node.width,
                    height: node.height
                };
            }, this);
            console.log(JSON.stringify(this.serializedData, null, '    '));
            $('#saved-data').val(JSON.stringify(this.serializedData, null, '    '));
            return false;
        }.bind(this);


        this.loadGrid = function() {
            this.grid.removeAll();
            var items = GridStackUI.Utils.sort(this.serializedData);
            _.each(items, function(node, i) {
                this.grid.addWidget($('<div><div class="grid-stack-item-content" style="' + insertBG(node.background) + '"></div>' + insertContent(node.content) + '</div>'),
                    node.x, node.y, node.width, node.height);
            }, this);
            return false;
        }.bind(this);

        this.addImgBox = function() {
            this.grid.addWidget($('<div><div class="grid-stack-item-content" style="background:#eaeaea;" ></div></div>'),
                0, 0, 2, 2, true);
        }.bind(this);




    	this.init = function(){
        		
    		if( !_this.album || !_this.id )
    			return false;

    		_this.loadJSON(function(){
    			_this.grid = $('.grid-stack').data('gridstack');
	        	_this.loadGrid();

		        $("#add").click(this.addImgBox);
		        $("#save").click(this.saveGrid);

		        $(".grid-stack").on("click", ".grid-stack-item-content", function(e){
		            // alert('yes');
		            var url = $(this).css("background-image").slice(5,-2);
		            var img = $("<img/>").attr("src", url);
		            $("#showimg").html("");
		            $("#showimg").append(img);
		            $(".bs-example-modal-lg").modal();
		        });

		        resizeGrid();
    		});

    	}.bind(this);


		
		this.init();

    	}
});


/**
 * insert background to grid item
 * @param  {String} bg image url
 * @return {void}    
 */
function insertBG(bg) {
    if (bg != null)
        return 'background:url(' + bg + ') no-repeat; background-size: cover; background-position: center';
    else
        return 'background: #eaeaea;';
}

/**
 * insert content to grid item
 * @param  {String} content html or string
 * @return {void}       
 */
function insertContent(content) {
    if (content != null)
        // return '<div class="grid-content-box">' + content.title + '<br>' + content.desc + '</div>';
        return '<div class="grid-content-box">' + content.title + '</div>';
    else
        return '';
}