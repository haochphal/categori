
    <div class="container mt-4">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">Find factorial</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="input">Factorial</label>
                                <input type="number" class="form-control" name="factorial" placeholder="Inter only number" required>
                            </div>
                            <div class="form-group text-right">
                               <button class="btn btn-primary" name="btn">Calculate</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <b><?php include "cal.php";?></b>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
