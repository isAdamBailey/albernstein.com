	<footer>
  	<div class="row">
  	  <div class="col-lg-12">
  		<ul class="list-unstyled">
  		  <li class="pull-right"><a href="https://adambailey.io/" data-html="true" data-toggle="tooltip" data-placement="top" title="<h4>Site by Adam Bailey</h4>" target="_BLANK"><small><span class="glyphicon glyphicon-music"></span></small></a></li>
  		  <li><small>&copy; <?php footerDate(); ?> &middot; Albert J. Bernstein Ph.D.</small></li>
  		  <li class="text-center"><a href="#" data-html="true" data-toggle="tooltip" data-placement="top" title="<h4>Top of the page</h4>">Back To Top</a></li>
  		</ul>
  	  </div>
  	</div>
	</footer> 

  <script src="js/bootstrap.js"></script>
  <script src="js/lightbox.js"></script>
  <script src="js/masonry.js"></script>
  <script src="js/imagesLoaded.js"></script>
	<script src="js/script.js"></script>

  <script>
    // initialize and configure masonry
    $(document).ready(function(){
      $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      });
    });

    var $container = $('.grid');
      $container.imagesLoaded(function(){
      $container.masonry({
      itemSelector : '.grid-item'
      });
    });
        
    // initialize tooltips
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

</body>
</html>
