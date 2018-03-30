<?php require_once('../../private/initialize.php') ?>

<?php 
require_login("admin");

$student_set=find_all_students();
$access_link=array('Approve','Unapprove');

// $id=$_GET['id']?$_GET['id']:0;

if(isset($_GET['id']))
{
    update_access($_GET['id'],$_GET['access']);
    redirect_to(url_for('/admin/index.php'));
}

?>

<?php include(SHARED_PATH.'/profile_header.php') ?>

<section>

    <div class="row">
        <table id="students">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Degree</th>
                <th>Roll</th>
                <th>View</th>
                <th>Status</th>
            </tr>
            <?php while($student = mysqli_fetch_assoc($student_set)) { ?>
            <tr>
                <td><?php echo $student['namef'] ?></td>
                <td><?php echo $student['namel']?></td>
                <td><?php echo $student['email']?></td>
                <td><?php echo $student['degree']?></td>
                <td><?php echo $student['rollyr'].'/'.$student['rolld'].'/'.$student['rolln']?></td>
                <td><a href="#">View</a></td>
                <td><a href="index.php?id=<?php echo $student['id'] ?>&amp;access=<?php echo $student['access'] ?>"><?php echo $access_link[$student['access']] ?></a></td>
            </tr>
            <?php } ?>
        </table>



    </div>



</section>

<?php include(SHARED_PATH . '/home_footer.php'); ?>
