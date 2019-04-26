<div class="container">
<table class="table table-striped table-hover table-bordered mt-4">
    <thead class='tabld-dard'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Province</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            include 'connection.php';
            $query='SELECT *FROM tblstudent';
            $result=mysqli_query($connection,$query);
            foreach($result as $student){
            ?>
            <tr>
                <td><?php echo $student['id']?></td>
                <td><?php echo $student['name']?></td>
                <td><?php echo $student['gender']?></td>
                <td><?php echo $student['email']?></td>
                <td><?php echo $student['province']?></td>
            </tr>
             <?php 
            }
            ?>
    </tbody>
</table>
</div>