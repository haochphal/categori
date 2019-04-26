
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
<div class="card ">
    <div class="card-header text-center bg-danger"><h2>Form Data</h2></div>
    <div class="card-body bg-success">
        <form action="getdata.php" method="post">
            <div class="form-group">
                <label for="">Student Name: </label>
                <input type="text" class='form-control' name='name' id='name' placeholder="Name">
            </div>
            <div class="form-group">
                <label for="">Student Gender: </label>
                <input type="radio" name='gender' id='gender' placeholder="Gender" value="Female">
                <label for="female">Female </label>
                <input type="radio"  name='gender' id='gender' placeholder="Gender" value="Male">
                <label for="male">Male </label>
            </div>
            <div class="form-group">
                <label for="">Student Email: </label>
                <input type="text" class='form-control' name='email' id='email' placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">Student Province: </label>
                <input type="text" class='form-control' name='province' id='province' placeholder="Province">
            </div><hr>
            <div class="form-group text-right">
                <button class="btn btn-primary" name='btn-add' type="submit">Insert student</button>
            </div>
        </form>
       </div>
      </div>
     </div>
    </div>
<div class="col-3"></div>
</div>