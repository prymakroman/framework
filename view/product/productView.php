      <!-- page content -->
      <div id="page">

      <pre>
      <?php 
      	foreach ($products as $key => $product) {
      		print "<p>";
      		print "Product: " . $product["name"] . "<br />";
      		print "Description: " . $product["description"] . "<br />";
      		print "</p>";
      	}
      ?>
      </pre>

      </div>
      <!-- end page content -->