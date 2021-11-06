<?php
if(!isset($_SESSION['admin']) or $_SESSION['admin']==0)
{
    echo"<script>alert('You are not administration')</script>";
    echo'<meta http-equiv="refresh" content="0;URL=index.php">';
}
else
{
?>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script language="javascript">
    function deleteConfirm(){
        if(confirm("Are you sure to delete?")){
            return true;
        }
        else{
            return false;
        }
    }
    </script>
    <?php
    include_once("connection.php");
    if(isset($_GET["function"])=="del"){
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $sq="SELECT Pro_image from product WHERE Product_ID='$id'";
            $res=pg_query($conn,$sq);
            $row=pgsql_fetch_array($res,PGSQL_ASSOC);
            $filePic=$row['Pro_image'];
            unlink("product-imgs/".$filePic);
            pgsql_query($conn,"DELETE FROM product Where Product_ID='$id'");
        }
    }
    ?>


        <form name="frm" method="post" action="">
        <h1>Product Management</h1>
        <p>
        	<img src="image/add.png" alt="Add New" width="16" height="16" border="0" /><a href="?page=add_product"> Add new</a>
        </p>
        
        <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Product ID</strong></th>
                    <th><strong>Product Name</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Quantity</strong></th>
                    <th><strong>Category ID</strong></th>
                    <th><strong>Image</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
                 include_once("connection.php");
				$No=1;
                $result =pg_query($conn, "SELECT product_id, product_name, 
                price, pro_qty, pro_image, cat_name
                From product a, category b
                where a.cat_id = b.cat_id ORDER BY proDate DESC");

                while ($row=pgsql_fetch_array($result, PGSQL_ASSOC)){

			?>
			<tr>
              <td ><?php echo $No  ?></td>
              <td ><?php echo $row["Product_ID"];?></td>
              <td><?php echo $row["Product_Name"]; ?></td>
              <td><?php echo $row["Price"]; ?></td>
              <td ><?php echo $row["Pro_qty"];  ?></td>
              <td><?php echo $row["cat_name"]; ?></td>
             <td align='center' >
                 <img src='product-imgs/<?php echo $row['Pro_image']?>' border='0' width="50" height="50"  /></td>
             <td align='center' ><a href="?page=update_product&&id=<?php echo $row["product_id"];?>"><img src='image/edit.png' border='0'/></a></td>
             <td align='center' ><a href="?page=product_management&&function=del&&id=<?php echo $row["product_id"];?>" onclick="return deleteConfirm()">
             <img src='image/delete.png' border='0' /></td>
            </tr>
            <?php
                $No++;
               }
			?>
			</tbody>
        
        </table>  

 </form>
 <?php
 }
 ?>
