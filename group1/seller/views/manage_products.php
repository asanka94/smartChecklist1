<script type="text/javascript" src="js/jquery.itextclear.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type=text], input[type=password], input[type=url], input[type=email], input[type=number], textarea', '.form').iTextClear();
});
</script>
<?php

session_start();

?>
<link rel="stylesheet" media="screen" href="lib/datatables/css/vpad.css" />
<script type="text/javascript" src="lib/datatables/js/jquery.dataTables.js"></script> 
<script type="text/javascript"> 
    $(document).ready(function() {
        $('#example').dataTable( {
            "sPaginationType": "full_numbers"
        } );
    } );
</script> 

                <h1 class="page-title">Add Categories</h1>
                <div class="container_12 clearfix leading">
                    <div class="grid_12">
					
                    	<form action="" method="POST">
  <table class="display" id="example">
			  <thead>
				<th>ID</th>
				<th>Product Name</th>
				<th>Category</th>
				<th>Description</th>
				<th>Price</th>
				<th>Image</th>
				
			   
			  
			  </thead>
			  <tbody >
			  
			  <?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM products WHERE uname='".$_SESSION['dog']."'")
					or die(mysql_error());  
					
					while($row = mysql_fetch_array($sql)){
					
					echo '<tr class="gradeX">';
					echo '<td class="center" >'.$row['id'].'</td>';
					echo '<td>'.$row['name'].'</td>';
					echo '<td>'.$row['category'].'</td>';
					echo '<td>'.$row['description'].'</td>';
					echo '<td>'.$row['price'].'</td>';
					echo '<td><img width="200px" src="http://localhost:8080/group1/seller/views/categories//'.$row['image'].'"></td>';
					
					echo '<td><a href="send.php?id='.$row['id'].'&uname='.$row['uname'].'">Send</a>';
					echo '<td><a href="deleteproduct.php?id='.$row['id'].'">Delete</a>';
					}
					
			  
			  ?>
			  </tr>
			  </tbody>
			  </table>
			 
                              
                        </form>
                    </div>
                </div>