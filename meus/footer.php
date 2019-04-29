<section id="footer">
	<div class="container">
		<div class="row">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, eveniet eaque officia neque cum adipisci fugiat laboriosam, ut, quam explicabo quidem obcaecati voluptatibus? Numquam cum libero modi consequatur expedita a blanditiis laudantium quae sunt voluptatum molestias deleniti sequi assumenda, quas dolor sed, reprehenderit consequuntur ipsa distinctio cupiditate odio officiis placeat?
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/slider.js"></script>
<script>
	(function($){
	  $(function() {
	    $('.menu__icon').on('click', function() {
	      $(this).closest('.menu').toggleClass('menu_state_open');
	    });
	  });
	})(jQuery);
  jQuery(function($) {
	  $(window).scroll(function(){
	    if($(this).scrollTop()>80){
	      $('#menu').addClass('fixed');
	        }
	      else if ($(this).scrollTop()<80){
	        $('#menu').removeClass('fixed');
	          }
	        });
	    });
		 
</script>
</body>
</html>