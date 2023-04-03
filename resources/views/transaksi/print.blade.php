<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Print Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:10px;
    background:#eee;    
}
    </style>
</head>
<body>
    <div class="container bootdey">
    <div class="row invoice row-printable">
        <div class="col-md-6">
            <!-- start col-lg-12 -->
            <div class="panel panel-default plain" id="dash_0">
                <!-- start panel -->
                <div class="panel-body p30">
                    <div class="row">
                        <!-- start row -->
                        <div class="col-lg-6">
                            

                            <!-- start col-lg-6 -->
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="invoice-from">
                            </div>
                            <!-- start col-lg-6 -->
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-12">
                            <!-- start col-lg-12 -->
                            <div class="invoice-details mt25">
                                <div class="well">
                                </div>
                            </div>
                            <div class="invoice-to mt25">
                            </div>
                            <div class="invoice-items">
                                <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="per70 text-center">Description</th>
                                                <th class="per5 text-center">Qty</th>
                                                <th class="per25 text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-footer mt25">
                                <p class="text-center">{{ now('Asia/Jakarta')->format('Y-m-d H:i:s') }}
                                     <a href="/transaksi/printpdf" class="btn btn-default ml15"><i class="fa fa-print mr5"></i> Print</a>
                                   <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>