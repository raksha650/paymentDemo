
<script src="jquery-1.7.2.min.js"></script>
    <script src="InscriptKeyBoard.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            GetInscriptTyping();
        });
     
    </script>
<?php 
require('dbconnetion.php');
$cId = $_GET['id'];
$sql="SELECT * FROM `course` where id='".$cId."'";
$data = mysqli_query($con,$sql);
$row = mysqli_fetch_array($data);
?>
<div class="container">
	<div class="row">		
		<div class="col-sm-12">	
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="prod.gif" alt="">
					<div class="caption">
						<h4 class="pull-right">₹<?php echo $row["price"];  ?></h4>
						<h4><a href="#"><?php echo $row["title"];  ?></a></h4>
						<p><?php echo $row["description"];  ?></p>
					</div>
					<form id="checkout-selection" action="manual.php" method="POST">		
						<input type="hidden" name="item_name" value="<?php echo $row["title"];  ?>">
						<input type="hidden" name="item_description" value="<?php echo $row["description"];  ?>">
						<input type="hidden" name="item_number" value="<?php echo $row["id"];  ?>">
						<input type="hidden" name="amount" value="<?php echo $row["price"];  ?>">
						<input type="hidden" name="address" value="ABCD Address">
						<input type="hidden" name="currency" value="INR">	
						<input type="text" required="" name="cust_name" value="" placeholder="Raksha rajput">								
						<input type="text" required="" name="email" value="" placeholder="test@phpzag.com">	
						<input type="text" required="" name="contact" placeholder="+9907564665" value="">								
						<input type="submit" class="btn btn-primary" value="Buy Now">					
					</form>						
				</div>
			</div>
		</div>
	</div>	
</div>

 


    <form id="form1" runat="server">
    <div>


    <h1><center>Inscript Keyboard Typing by Coding Keeda</center></h1><br />
        <h4>Use Esc button to switch to English.Shift button to get full words.Ctrl+Alt for hindi numbers</h4>
        <textarea id="txtInscript" style="height: 194px;width: 1330px;" class="Inscript"></textarea>
     </div>
   </form>

 

   
<script type="text/javascript">
	$(document).ready(function(){

    $('.keyboard').keyboard()
    // activate the typing extension
    .addTyping({
        showTyping: true,
        delay: 50
    });

    // make sure this is added after the keyboards are initialized
    $('select').change(function () {
        var layout = $(this).val();
        $('.keyboard').each(function(){
            var kb = $(this).data('keyboard');
            kb.options.layout = layout;
            // refresh keyboard if already visible
            if (kb.$keyboard.length) {
                kb.reveal(true);
            }
        });
    }).change();   
    
});
</script>
