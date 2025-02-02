<!-- business information here -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <title>Receipt-{{$receipt_details->invoice_no}}</title>
    </head>
    <body>
        <div class="ticket">
        	<div class="text-box">
        	@if(!empty($receipt_details->logo))
        		<img class="logo" src="{{$receipt_details->logo}}" alt="Logo">
        	@endif
        	<!-- Logo -->
            <p class="@if(!empty($receipt_details->logo)) text-with-image @else centered @endif">
            	<!-- Header text -->
            	@if(!empty($receipt_details->header_text))
            		<span class="headings">{!! $receipt_details->header_text !!}</span>
					<br/>
				@endif

				<!-- business information here -->
				@if(!empty($receipt_details->display_name))
{{--					<span class="headings">--}}
					<span>
						{{$receipt_details->display_name}}
					</span>
					<br/>
				@endif

				@if(!empty($receipt_details->address))
					{!! $receipt_details->address !!}
					<br/>
				@endif
				@if(!empty($receipt_details->contact))
				<br/>{{ $receipt_details->contact }}
				@endif
			</p>
				<br/>


{{--				@if(!empty($receipt_details->contact))--}}

{{--				@endif--}}
				@if(!empty($receipt_details->website))
					<br/>{{ $receipt_details->website }}
				@endif
				@if(!empty($receipt_details->location_custom_fields))
					<br>{{ $receipt_details->location_custom_fields }}
				@endif


				@if(!empty($receipt_details->sub_heading_line1))
					{{ $receipt_details->sub_heading_line1 }}<br/>
				@endif
				@if(!empty($receipt_details->sub_heading_line2))
					{{ $receipt_details->sub_heading_line2 }}<br/>
				@endif
				@if(!empty($receipt_details->sub_heading_line3))
					{{ $receipt_details->sub_heading_line3 }}<br/>
				@endif
				@if(!empty($receipt_details->sub_heading_line4))
					{{ $receipt_details->sub_heading_line4 }}<br/>
				@endif
				@if(!empty($receipt_details->sub_heading_line5))
					{{ $receipt_details->sub_heading_line5 }}<br/>
				@endif

				@if(!empty($receipt_details->tax_info1))
					<b>{{ $receipt_details->tax_label1 }}</b> {{ $receipt_details->tax_info1 }}
				@endif

				@if(!empty($receipt_details->tax_info2))
					<b>{{ $receipt_details->tax_label2 }}</b> {{ $receipt_details->tax_info2 }}
				@endif

				<!-- Title of receipt -->
				@if(!empty($receipt_details->invoice_heading))
					<br/><span class="sub-headings">{!! $receipt_details->invoice_heading !!}</span>
				@endif
			</p>
			</div>
			<table class="table-info border-top">
				<tr>
					<th>{!! $receipt_details->invoice_no_prefix !!}</th>
					<td>
						{{$receipt_details->invoice_no}}
					</td>
				</tr>
				<tr>
					<th>{!! $receipt_details->date_label !!}</th>
					<td>
						{{$receipt_details->invoice_date}}
					</td>
				</tr>

				@if(!empty($receipt_details->due_date_label))
					<tr>
						<th>{{$receipt_details->due_date_label}}</th>
						<td>{{$receipt_details->due_date ?? ''}}</td>
					</tr>
				@endif

				@if(!empty($receipt_details->sales_person_label))
					<tr>
						<th>{{$receipt_details->sales_person_label}}</th>

						<td>{{$receipt_details->sales_person}}</td>
					</tr>
				@endif

				@if(!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
					<tr>
						<th>{{$receipt_details->brand_label}}</th>

						<td>{{$receipt_details->repair_brand}}</td>
					</tr>
				@endif

				@if(!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
					<tr>
						<th>{{$receipt_details->device_label}}</th>

						<td>{{$receipt_details->repair_device}}</td>
					</tr>
				@endif

				@if(!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
					<tr>
						<th>{{$receipt_details->model_no_label}}</th>

						<td>{{$receipt_details->repair_model_no}}</td>
					</tr>
				@endif

				@if(!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
					<tr>
						<th>{{$receipt_details->serial_no_label}}</th>

						<td>{{$receipt_details->repair_serial_no}}</td>
					</tr>
				@endif

				@if(!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
					<tr>
						<th>
							{!! $receipt_details->repair_status_label !!}
						</th>
						<td>
							{{$receipt_details->repair_status}}
						</td>
					</tr>
	        	@endif

	        	@if(!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
		        	<tr>
		        		<th>
		        			{!! $receipt_details->repair_warranty_label !!}
		        		</th>
		        		<td>
		        			{{$receipt_details->repair_warranty}}
		        		</td>
		        	</tr>
	        	@endif

	        	<!-- Waiter info -->
				@if(!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
		        	<tr>
		        		<th>
		        			{!! $receipt_details->service_staff_label !!}
		        		</th>
		        		<td>
		        			{{$receipt_details->service_staff}}
						</td>
		        	</tr>
		        @endif

		        @if(!empty($receipt_details->table_label) || !empty($receipt_details->table))
		        	<tr>
		        		<th>
		        			@if(!empty($receipt_details->table_label))
								<b>{!! $receipt_details->table_label !!}</b>
							@endif
		        		</th>
		        		<td>
		        			{{$receipt_details->table}}
		        		</td>
		        	</tr>
		        @endif

		        <!-- customer info -->
		        <tr>
		        	<th style="vertical-align: top;">
		        		{{$receipt_details->customer_label ?? ''}}
		        	</th>

		        	<td>
		        		{{ $receipt_details->customer_name ?? '' }}
		        		@if(!empty($receipt_details->customer_info))
		        			<div class="color-555">
							{!! $receipt_details->customer_info !!}
							</div>
						@endif
		        	</td>
		        </tr>

				@if(!empty($receipt_details->client_id_label))
					<tr>
						<th>
							{{ $receipt_details->client_id_label }}
						</th>
						<td>
							{{ $receipt_details->client_id }}
						</td>
					</tr>
				@endif

				@if(!empty($receipt_details->customer_tax_label))
					<tr>
						<th>
							{{ $receipt_details->customer_tax_label }}
						</th>
						<td>
							{{ $receipt_details->customer_tax_number }}
						</td>
					</tr>
				@endif

				@if(!empty($receipt_details->customer_custom_fields))
					<tr>
						<td colspan="2">
							{!! $receipt_details->customer_custom_fields !!}
						</td>
					</tr>
				@endif

				@if(!empty($receipt_details->customer_rp_label))
					<tr>
						<th>
							{{ $receipt_details->customer_rp_label }}
						</th>
						<td>
							{{ $receipt_details->customer_total_rp }}
						</td>
					</tr>
				@endif
			</table>


            <table style="padding-top: 5px !important" class="border-bottom width-100">
                <thead class="border-bottom-dotted">
                    <tr>
                        <th class="serial_number">#</th>
                        <th class="description">
                        	{{$receipt_details->table_product_label}}
                        </th>
                        <th class="quantity text-right">
                        	{{$receipt_details->table_qty_label}}
                        </th>
                        @if(empty($receipt_details->hide_price))
                        <th class="unit_price text-right">
                        	{{$receipt_details->table_unit_price_label}}
                        </th>
                        <th class="price text-right">{{$receipt_details->table_subtotal_label}}</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                	@forelse($receipt_details->lines as $line)
	                    <tr>
	                        <td class="serial_number">
	                        	{{$loop->iteration}}
	                        </td>
	                        <td class="description">
	                        	{{$line['name']}} {{$line['product_variation']}} {{$line['variation']}}
	                        	@if(!empty($line['sub_sku'])), {{$line['sub_sku']}} @endif @if(!empty($line['brand'])), {{$line['brand']}} @endif @if(!empty($line['cat_code'])), {{$line['cat_code']}}@endif
	                        	@if(!empty($line['product_custom_fields'])), {{$line['product_custom_fields']}} @endif
	                        	@if(!empty($line['sell_line_note']))({{$line['sell_line_note']}}) @endif
	                        	@if(!empty($line['lot_number']))<br> {{$line['lot_number_label']}}:  {{$line['lot_number']}} @endif
	                        	@if(!empty($line['product_expiry'])), {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} @endif
	                        </td>
	                        <td class="quantity text-right">{{$line['quantity']}} {{$line['units']}}</td>
	                        @if(empty($receipt_details->hide_price))
	                        <td class="unit_price text-right">{{$line['unit_price_inc_tax']}}</td>
	                        <td class="price text-right">{{$line['line_total']}}</td>
	                        @endif
	                    </tr>
	                    @if(!empty($line['modifiers']))
							@foreach($line['modifiers'] as $modifier)
								<tr>
									<td>
										&nbsp;
									</td>
									<td>
			                            {{$modifier['name']}} {{$modifier['variation']}}
			                            @if(!empty($modifier['sub_sku'])), {{$modifier['sub_sku']}} @endif @if(!empty($modifier['cat_code'])), {{$modifier['cat_code']}}@endif
			                            @if(!empty($modifier['sell_line_note']))({{$modifier['sell_line_note']}}) @endif
			                        </td>
									<td class="text-right">{{$modifier['quantity']}} {{$modifier['units']}} </td>
									@if(empty($receipt_details->hide_price))
									<td class="text-right">{{$modifier['unit_price_inc_tax']}}</td>
									<td class="text-right">{{$modifier['line_total']}}</td>
									@endif
								</tr>
							@endforeach
						@endif
                    @endforeach
                    <tr>
                    	<td colspan="5">&nbsp;</td>
                    </tr>
                </tbody>
            </table>

            <table class="border-bottom width-100">
            	@if(!empty($receipt_details->total_quantity_label))
					<tr class="color-555">
						<td class="left text-right">
							{!! $receipt_details->total_quantity_label !!}
						</td>
						<td class="width-50 text-right">
							{{$receipt_details->total_quantity}}
						</td>
					</tr>
				@endif
				@if(empty($receipt_details->hide_price))
	                <tr>
	                    <th class="left text-right sub-headings">
	                    	{!! $receipt_details->subtotal_label !!}
	                    </th>
	                    <td class="width-50 text-right sub-headings">
	                    	{{$receipt_details->subtotal}}
	                    </td>
	                </tr>

	                <!-- Shipping Charges -->
					@if(!empty($receipt_details->shipping_charges))
						<tr>
							<td class="left text-right">
								{!! $receipt_details->shipping_charges_label !!}
							</td>
							<td class="width-50 text-right">
								{{$receipt_details->shipping_charges}}
							</td>
						</tr>
					@endif

					<!-- Discount -->
					@if( !empty($receipt_details->discount) )
						<tr>
							<td class="width-50 text-right">
								{!! $receipt_details->discount_label !!}
							</td>

							<td class="width-50 text-right">
								(-) {{$receipt_details->discount}}
							</td>
						</tr>
					@endif

					@if(!empty($receipt_details->reward_point_label) )
						<tr>
							<td class="width-50 text-right">
								{!! $receipt_details->reward_point_label !!}
							</td>

							<td class="width-50 text-right">
								(-) {{$receipt_details->reward_point_amount}}
							</td>
						</tr>
					@endif

					@if( !empty($receipt_details->tax) )
						<tr>
							<td class="width-50 text-right">
								{!! $receipt_details->tax_label !!}
							</td>
							<td class="width-50 text-right">
								(+) {{$receipt_details->tax}}
							</td>
						</tr>
					@endif

					@if( !empty($receipt_details->round_off_label) )
						<tr>
							<td class="width-50 text-right">
								{!! $receipt_details->round_off_label !!}
							</td>
							<td class="width-50 text-right">
								{{$receipt_details->round_off}}
							</td>
						</tr>
					@endif

					<tr>
						<th class="width-50 text-right sub-headings">
							{!! $receipt_details->total_label !!}
						</th>
						<td class="width-50 text-right sub-headings">
							{{$receipt_details->total}}
						</td>
					</tr>

					@if(!empty($receipt_details->payments))
						@foreach($receipt_details->payments as $payment)
							<tr>
								<td class="width-50 text-right">{{$payment['method']}} ({{$payment['date']}}) </td>
								<td class="width-50 text-right">{{$payment['amount']}}</td>
							</tr>
						@endforeach
					@endif

					<!-- Total Paid-->
					@if(!empty($receipt_details->total_paid))
						<tr>
							<td class="width-50 text-right">
								{!! $receipt_details->total_paid_label !!}
							</td>
							<td class="width-50 text-right">
								{{$receipt_details->total_paid}}
							</td>
						</tr>
					@endif

					<!-- Total Due-->
					@if(empty($receipt_details->total_due))
						<tr>
							<td class="width-50 text-center">
{{--								{!! $receipt_details->total_due_label !!}--}}
{{--								<p><h5>Mpesa Paybill:522522  -A/C No:5849468</h5></p--}}

							</td>
							<td class="width-50 text-right">
{{--								{{$receipt_details->total_due}}--}}

							</td>
						</tr>
						<tr>
							<td colspan="4">
{{--								<p><h5>Thank you For Shopping With Us!!!!</h5></p>--}}
{{--								<p><h5>Goods Once Sold Cannot Be Returned</h5></p>--}}

							</td>
						</tr>
					@endif

					@if(!empty($receipt_details->all_due))
						<tr>
							<td class="width-50 text-right">
								{!! $receipt_details->all_bal_label !!}
							</td>
							<td class="width-50 text-right">
								{{$receipt_details->all_due}}
							</td>
						</tr>
					@endif
				@endif
            </table>
            @if(empty($receipt_details->hide_price))
	            <!-- tax -->
	            @if(!empty($receipt_details->taxes))
	            	<table class="border-bottom width-100">
	            		@foreach($receipt_details->taxes as $key => $val)
	            			<tr>
	            				<td class="left">{{$key}}</td>
	            				<td class="right">{{$val}}</td>
	            			</tr>
	            		@endforeach
	            	</table>
	            @endif
            @endif


            @if(!empty($receipt_details->additional_notes))
	            <p class="centered" >
	            	{{$receipt_details->additional_notes}}
	            </p>
            @endif


			@if($receipt_details->show_barcode)
				<br/>
				<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
			@endif

			@if(empty($receipt_details->footer_text))

				<p class="centered"><h5>
					{{--					{!! $receipt_details->footer_text !!}--}}

					Mpesa Paybill:714888  -A/C No:113589
					<br>
					Till No:9980125

					<p><h5>Thank you For Shopping With Us!!!!</h5></p>
					<p><h5>Goods Once Sold Cannot Be Returned</h5></p>
				</h5>
				</p>
				<p class="centered">
{{--					{!! $receipt_details->footer_text !!}--}}
{{--					Powered By Savannabits:0725263425--}}
				</p>
			@endif
        </div>
        <!-- <button id="btnPrint" class="hisdden-print">Print</button>
        <script src="script.js"></script> -->
    </body>
</html>

<style type="text/css">

@media print {
	* {
    	font-size: 12px;
    	font-family: 'Times New Roman';
    	word-break: break-all;
	}

.headings{
	font-size: 18px;
	font-weight: 700;
	text-transform: uppercase;
}ti

.sub-headings{
	font-size: 15px;
	font-weight: 700;
}

.border-top{
    border-top: 1px solid #242424;
}
.border-bottom{
	border-bottom: 1px solid #242424;
}

.border-bottom-dotted{
	border-bottom: 1px dotted darkgray;
}

td.serial_number, th.serial_number{
	width: 5%;
    max-width: 5%;
}

td.description,
th.description {
    width: 35%;
    max-width: 35%;
    word-break: break-all;
}

td.quantity,
th.quantity {
    width: 15%;
    max-width: 15%;
    word-break: break-all;
}
td.unit_price, th.unit_price{
	width: 25%;
    max-width: 25%;
    word-break: break-all;
}

td.price,
th.price {
    width: 20%;
    max-width: 20%;
    word-break: break-all;
}

.centered {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 80mm;
    max-width: 80mm;
}

img {
    max-width: inherit;
    width: auto;
}

    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
.table-info {
	width: 100%;
}
.table-info tr:first-child td, .table-info tr:first-child th {
	padding-top: 8px;
}
.table-info th {
	text-align: left;
}
.table-info td {
	text-align: right;
}
.logo {
	float: left;
	width:35%;
	padding: 10px;
}

.text-with-image {
	float: left;
	width:65%;
}
.text-box {
	width: 100%;
	height: auto;
}
</style>