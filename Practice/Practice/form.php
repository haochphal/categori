<div class="container">
<h2 class="text text-center text-primary mt-4">PHP OOP</h2>
<hr>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="card">
            <div class="card-header text text-center"><h4>Find Factorial</h4></div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="input">Factorial:</label>
                        <input type="text" class="form-control" name="factorial" placeholder="Enter number only!!!" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn-cal" class="btn-primary btn-sm float-right">Calculate</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <b>
                    <?php include "cal.php"; ?>
                </b> 
            </div>
        </div>
    </div>
    <div class="col-3"></div>
    </div>
</div>