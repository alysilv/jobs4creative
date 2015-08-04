<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    <div class="container">
        <!-- Generate coupon form -->
        <div style="max-width: 700px; margin:30px auto;">
            <h3>Generate Coupon</h3>
           {!! Form::open(['route' => 'coupons.store', 'method' => 'POST']) !!}

                <div class="form-group">
                    <div class="col-md-4">
                        <label>Description</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Value of discount (%)</label>
                    </div>
                    <div class="col-md-8">
                        <input type="number" name="discount" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Start Date</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="startdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>End Date</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="enddate" class="form-control datepicker">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Number of coupons</label>
                    </div>
                    <div class="col-md-8">
                        <input type="number" name="nb_coupons" class="form-control" id="nb_of_coupons" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label>Length of coupon</label>
                    </div>
                    <div class="col-md-8">
                        <input type="number" name="length" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Generate</button>
                </div>
           {!! Form::close() !!}
        </div>

    </div>


    <script type="text/javascript">

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            startDate: '01-01-2015'
        });

    </script>
</body>
</html>