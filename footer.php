    <footer>
      &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>
    </footer>
	
  <!-- Closing Container -->
  </div>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript">
	$("#mobile-open").click(function(){
	$("html").addClass("navigation-open");
	});
	$("#mobile-close, .col-md-8").click(function(){
	$("html").removeClass("navigation-open");
	});
  </script>
  <?php wp_footer(); ?>
  <!-- Bootstrap JS
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
</body>
</html>