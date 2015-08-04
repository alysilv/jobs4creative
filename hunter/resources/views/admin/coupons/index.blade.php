<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    <div class="container">
        <!-- Display coupons table -->
        @if($coupons->count() > 0)
        <div>
            <h3>Coupon code list</h3>
            <div style="margin: 30px 0;">
                <button type="submit" name="reset" id="reset" class="btn btn-info pull-right">Reset</button>
                <button type="submit" name="export" id="export" class="btn btn-default">Export</button>
            </div>
            <div id="codelist">
                <table class="table table-striped table-bordered" id="codelisttable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Coupon Code</th>
                                <th>Discount</th>
                                <th>Start Date</th>
                                <th>Expired Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupons as $cp)
                            <tr>
                                <td>{!! $cp->id !!}</td>
                                <td>{!! $cp->code !!}</td>
                                <td>{!! $cp->discount !!}%</td>
                                <td>{!! $cp->start_date !!}</td>
                                <td>{!! $cp->end_date !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        @endif

    <script type="text/javascript" src="{{ asset('/js/jquery.base64.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/tableExport.js') }}"></script>
    <script type="text/javascript">

        $('#reset').on('click', function(){
            $('#codelist').css('display', 'none');
            $('#nb_of_coupons').val('');
        });

        $("#export").click(function () {
            $('#codelisttable').tableExport({type:'excel',escape:'false'});

        });

    </script>
</body>
</html>