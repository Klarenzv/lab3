<?php 
        
        if(isset($_GET['query'])){
            $status = $_GET['query'];
            if($status == "success"){
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Message Success. You can check it out at the guest list!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
                    }else{
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Message Failed. Please re-check your inputs, or contact the creator.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';
            }
        }
        ?>

<div class="container">
<div class="mt-4 ms-2">
  <h5>Don't see your name? <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" role="button" href="#" >Register now!</a></h5>
</div>

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="http://apcwebprog.csf.ph/~acfidelino/lab2/db/mysql_insert.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" class="form-control" id="website" name="website" value="http://" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                <label class="form-check-label" for="other">Other</label>
            </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
        </form>
    </div>
  </div>
</div>
</div>

<?php
include_once "db-apcwebprog.php";
$sql = "SELECT * FROM acfidelino_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '
    <table class="table mt-4">
    <thead>
    <tr>
    <th scope="col">ID#: </th>
    <th scope="col">Name: </th>
    <th scope="col">Gender: </th>
    <th scope="col">Comments: </th>
    <th scope="col">Email: </th>
    <th scope="col">Website: </th>
    <th scope="col">Registration Date: </th>
    </tr>
    </thead>
    ';
} else{
    echo "0 results";
}
while($row = $result->fetch_assoc()) {
    echo "
        <tbody>
        <tr>
            <th scope='col'><a href='#' style='color:#000000;' data-bs-toggle='modal' data-bs-target='#viewItem_".$row['id']."'>".$row["id"]."</a></td> 
            <td>".$row["name"]."</td>
            <td>".$row["gender"]."</td>
            <td>".$row["comments"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["website"]."</td>
            <td>".$row["reg_date"]."</td>
        </tr>";
    
    // Modal for current row
    echo ' 
    <div class="modal fade" id="viewItem_'.$row['id'].'" tabindex="-1" aria-labelledby="viewItemLabel_'.$row['id'].'" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="viewItemLabel_'.$row['id'].'">'.$row["name"].'</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form>
                <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <input type="text" class="form-control" id="gender" value="'.$row["gender"].'" readonly>
                </div>
                <div class="mb-3">
                <label for="comments" class="form-label">Comments:</label>
                <textarea class="form-control" id="comments" rows="3" readonly>'.$row["comments"].'</textarea>
                </div>
                <div class="mb-3">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="email" value="'.$row["email"].'" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="website" class="form-label">Website:</label>
                      <input type="text" class="form-control" id="website" value="'.$row["website"].'" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="reg_date" class="form-label">Registration Date:</label>
                      <input type="text" class="form-control" id="reg_date" value="'.$row["reg_date"].'" readonly>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
        </div>
        </div>    
  ';                
}
echo '
</tbody>
</table>';

$conn->close();
?>