<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Invoice Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
        table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
		}

		th {
			background-color: #ddd;
		}
    	body{
    margin-top:10px;
    background:#eee;    
    }
    </style>
    <style>
        @media print {
        * {
            border: 1px solid black !important;
        }
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
                                <ul class="list-unstyled text-right">
                                    <li><strong style="font-size: 15px;">Laundry Siuuu</strong></li>
                                    @foreach($outlets as $outlet)
                                    <li><strong style="font-size: 15px;">{{ $outlet->nama }}</strong></li>
                                    <li><strong style="font-size: 15px;">{{ $outlet->alamat }}</strong></li>
                                    <li><strong style="font-size: 15px;">{{ $outlet->tlp }}</strong></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- start col-lg-6 -->
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-12">
                            <!-- start col-lg-12 -->
                            <div class="invoice-details mt25">
                                <div class="well">
                                    @if($details->count() > 0)
                                    <ul class="list-unstyled mb0">
                                        <li><strong>Invoice:</strong> {{$details->first()->transaksi->kode_invoice }}</li>
                                        <li><strong>Tanggal Invoice:</strong>{{ now('Asia/Jakarta')->format('Y-m-d H:i:s') }}</li>
                                        <li><strong>Tanggal Transaksi:</strong>{{ $details->first()->transaksi->tgl }}</li>
                                        <li><strong>Status:</strong> <span class="label label-success">{{ $details->first()->transaksi->status}}</span></li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="invoice-to mt25">
                                @if($details->count() > 0)
                                <ul class="list-unstyled">
                                    <li><strong>Invoiced To</strong></li>
                                    <li>{{$details->first()->transaksi->member->nama }}</li>
                                    <li>{{$details->first()->transaksi->member->alamat }}</li>
                                    <li>{{$details->first()->transaksi->member->tlp }}</li>
                                    <li>Karawang</li>
                                </ul>
                                @endif
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
                                            <tr>
                                                <td>{{$details->first()->paket->nama_paket }}</td>
                                                <td class="text-center">{{$details->first()->qty }}</td>
                                                <td class="text-center">Rp. {{ number_format($details->first()->paket->harga * $details->first()->qty, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pajak</td>
                                                <td class="text-center">{{ number_format($details->first()->transaksi->pajak * 100, 2, ',', '.') }}%</td>
                                                <td class="text-center">{{ number_format($details->first()->transaksi->pajak * 100, 2, ',', '.') }}%</td>
                                            </tr>
                                            <tr>
                                                <td>Diskon</td>
                                                <td class="text-center">{{ number_format($details->first()->transaksi->diskon * 100, 2, ',', '.') }}%</td>
                                                <td class="text-center">{{ number_format($details->first()->transaksi->diskon * 100, 2, ',', '.') }}%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="2" class="text-right">Sub Total:</th>
                                                <th class="text-center">Rp. {{ number_format($details->first()->paket->harga * $details->first()->qty + $details->first()->transaksi->pajak + $details->first()->transaksi->diskon , 0, ',', '.') }}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-right">Total:</th>
                                                <th class="text-center">Rp. {{ number_format($details->first()->paket->harga * $details->first()->qty + $details->first()->transaksi->pajak + $details->first()->transaksi->diskon , 0, ',', '.') }}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-right">Bayar:</th>
                                                <th class="text-center">Rp. {{ number_format($details->first()->bayar  , 0, ',', '.') }}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-right">Kembalian:</th>
                                                <th class="text-center">Rp. {{ number_format($details->first()->bayar - $details->first()->paket->harga * $details->first()->qty + $details->first()->transaksi->pajak + $details->first()->transaksi->diskon , 0, ',', '.') }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-footer mt25">
                                <p class="text-center">{{ now('Asia/Jakarta')->format('Y-m-d H:i:s') }}
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