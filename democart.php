<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    
        <?php
include ('partials/connect.php');
$sql="SELECT * FROM products";
$result=$connect->query($sql);
while($final=$result->fetch_assoc()){ ?>
<tr>
        <td><?php echo $final['id']?></td>
        <td><?php echo $final['name']?></td>
        <td><?php echo $final['price']?></td>
        <td>
            <a href="demoview.php?cart_id=<?php echo $final['id']?>">
                <button>Add To Cart</button>
            </a>
        </td>
        </tr>
        <?php
}
?>
    
</table>