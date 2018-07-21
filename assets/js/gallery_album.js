(function($){


	$(function(){
		var defaultURL;

		$(".gallery-item a, .lastest-gallery .list_img, .lastest-gallery .list_a").on("click", function(e){
			e.preventDefault();
			if( !defaultURL )
				defaultURL = window.location.href;

			// window.location.href += "#viewalbum";
			// 
			var _this = $(this);
			var album = _this.data("album"),	
				id = _this.data("id");

				loadImgJSON({
					album: album,
					id: id
				}, function( data ){

		            _this.lightGallery({
		            	dynamic: true,
		                dynamicEl: data
		            });
		    //         .on('onCloseAfter.lg', function(e){
						// window.location.href = defaultURL;
		    //         });

				});

		});


		function loadImgJSON(opt, callback){
			$.ajax({
				url: "getImgJSON.php",
				data: {
					album: opt.album,
					id: opt.id
				},
				method: 'POST',
				success: function(data){
					if( callback ){
						callback( data );
					}
				}
			});
		}

	});

})(jQuery);