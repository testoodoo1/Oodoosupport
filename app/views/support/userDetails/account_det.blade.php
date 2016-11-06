@extends ('support.layouts.default1')
@section('main')
<div class="page-content">

<div id="firepad-container"></div>


        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
    <div id="tab-general">
            <div class="col-lg-12">
<!--                 <div class="row">
                    <div class="col-md-12"> -->
                        <h2>{{$user->first_name}}&nbsp;{{$user->last_name}}</h2>
                        <div class="row mtl">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="text-center mbl">
                                        <img src="/assets/dist/support/images/photo5.png" class="img-responsive">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <table class="table table-striped table-hover" id="theTable1">
                                        <tbody>
                                            <tr>
                                                <td>Account ID</td>
                                                <td>{{$user->account_id}}</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                            </tr>                                                                                      
                                            <tr>
                                                <td>Phone</td>
                                                <td>{{$user->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>{{$user->address1}}<br>{{$user->address2}}<br>{{$user->address3}}</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <div class="col-md-3">
                                    <table class="table table-striped table-hover" id="theTable2">
                                    <tbody>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Plan</td>
                                                <td>{{ $user->plan()->plan }}</td>
                                            </tr>
                                            <tr>                                                
                                            </tr>
                                            <tr>
                                                <td>Plan Cycle</td>
                                                <td>{{$user->plan()->plan_start_date}}&nbsp;To&nbsp;{{$user->plan()->plan_start_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><a href="/notifyPassword/{{$user->account_no}}" class="label label-success passWord">Send to User</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-content">
                                            <ul class="list-inline item-details">
                                                <li>
                                                    <a href="http://themifycloud.com">Admin templates</a>
                                                </li>
                                                <li>
                                                    <a href="http://themescloud.org">Bootstrap themes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab-ticket" data-toggle="tab">Ticket</a>
                                        </li>
                                        <li >
                                            <a href="#tab-bill" data-toggle="tab">Bill</a>
                                        </li>
                                        <li>
                                            <a href="#tab-payment" data-toggle="tab">Payments</a>
                                        </li>
                                        <li>
                                            <a href="#tab-dataUsage" data-toggle="tab">Data Usage</a>
                                        </li>
                                        <li>
                                            <a href="#tab-sessionHistory" data-toggle="tab">Session History</a>
                                        </li>
                                        <li>
                                            <a href="#tab-logs" data-toggle="tab" onclick="log({{$user->account_no}});">Logs</a>
                                        </li>
                                        <li>
                                            <a href="#tab-activeSession" data-toggle="tab">Active Session</a>
                                        </li> 
                                        <li>
                                            <a href="#tab-billWaiver" data-toggle="tab">Bill Waiver</a>
                                        </li>                                                                                 

                                    </ul>
                                    <div id="generalTabContent" class="tab-content">
                                        <div id="tab-bill" class="tab-pane fade in" onload="thisis()">
                                        <div class="panel panel-blue">
                                        <button class="btn btn-primary" style="float:right;" onclick="sendNotify({{$user->account_no}});">Send Notification</button>                                    
                                        <div style="float:right;" class="notifyMessage">                                        
                                        </div>                                        
                                        <table id="billTable" class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Bill No</th>
                                                    <th>Month</th>
                                                    <th>Plan</th>
                                                    <th>Bill Date</th>
                                                    <th>Previous Balance</th>
                                                    <th>Last Payment</th>
                                                    <th>Adjustment</th>
                                                    <th>Current Charge</th>
                                                    <th>Amount Before Due Date</th>
                                                    <th>Amount Paid</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        </div>
                                        </div>
                                        <div id="tab-payment" class="tab-pane fade in">
                                        <div class="panel panel-blue">  
                                        <table id="paymentTable" class="table table-striped table-bordered table-hover">
                                        	<thead>
                                        		<tr>
	                                                <th>Created At</th>
	                                                <th>Bill No</th>
	                                                <th>Amount</th>
	                                                <th>Transaction Code</th>
	                                                <th>Payment Type</th>
	                                                <th>Remarks</th>
	                                                <th>Transaction Type</th>
	                                                <th>Status</th>
                                        		</tr>
                                        	</thead>
                                        </table>
                                        </div>
                                        </div>
			                            <div id="tab-dataUsage" class="tab-pane fade in">
                                        <div class="panel panel-blue">                                        
                                        <table id="usageTable" class="table table-hover table-bordered">
                                        	<thead>
                                        		<tr>
	                                                <th>Account ID</th>
	                                                <th>Rate Plan</th>
	                                                <th>Status</th>
	                                                <th>Current Speed</th>
	                                                <th>Duration</th>
	                                                <th>Bytes Down</th>
	                                                <th>Bytes Up</th>
	                                                <th>Bytes Total</th>
	                                                <th>Total GB</th>
	                                                <th>view</th>                                        			                                       			                                   			                                        			
                                        		</tr>
                                        	</thead>
                                        </table>
                                        </div>
                                        </div>
			                            <div id="tab-sessionHistory" class="tab-pane fade in">
                                        <div class="panel panel-blue">  
                                        @include('support.userDetails.chart')                                      
                                        <table id="sessionTable" class="table table-hover table-bordered">
                                        	<thead>
                                        		<tr>
                                                    <th>Session ID</th>
                                                    <th>IP Address</th>
                                                    <th>MAC address</th>
                                                    <th>Start Time</th>
                                                    <th>Stop Time</th>
                                                    <th>Data In</th>
                                                    <th>Data Out</th>
                                                    <th>Total Data</th>                                       			                                        			                                        			
                                        		</tr>
                                        	</thead>
                                        </table>
                                        </div>
                                        </div> 
			                            <div id="tab-logs" class="tab-pane fade in">
                                        <div class="panel panel-blue">                                        
                                        <table id="logTable" class="table table-hover table-bordered" onload='functon hello();'>
                                        	<thead>
                                        		<tr>
                                                    <th>Created</th>
                                                    <th>User name</th>
                                                    <th>MAC Address</th>
                                                    <th>IP Address</th>
                                                    <th>Message</th>                                       			                                        			                                        			
                                        		</tr>
                                        	</thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        </div>
                                        </div>                                                                                                                       
                 
                                        <div id="tab-ticket" class="tab-pane fade in active">
                                        <div style="float:right;">
                                        <span class="label label-danger" style="display:none;" id="failMessage">Ticket available with open or processing status</span> &nbsp;&nbsp;
                                        <button class="btn btn-primary" id="newTicket">New Ticket</button>
                                        </div>
                                        @include('support.userDetails.ticket')

                                        <div class="panel panel-blue">
                                        <table id="ticketTable" class="table table-hover table-bordered" onclick="ticket('{{$user->account_id}}')">
                                        	<thead>
                                        		<tr>
                                                    <th>ID</th>
                                                    <th>Requirement</th>
                                                    <th>Created_at</th>
                                                    <th>Updated_at</th>
                                                    <th>Assgined To</th>
                                                    <th>Ticket Type</th>
                                                    <th>status</th>
                                                    <th>view</th>                                       			                                        			                                        			
                                        		</tr>
                                        	</thead>
                                        </table>
                                        </div>
                                    </div> 
                                        <div id="tab-activeSession" class="tab-pane fade in">
                                        <div class="panel panel-blue">                                        
                                        <table id="activesessionTable" class="table table-hover table-bordered" onclick="ticket('{{$user->account_id}}')">
                                            <thead>
                                                <tr>
                                                    <th>Account ID</th>
                                                    <th>MAC Address</th>
                                                    <th>IP Address</th>
                                                    <th>Bytes Down</th>
                                                    <th>Bytes Up</th>
                                                    <th>Download Rate</th>
                                                    <th>Upload Rate</th>
                                                    <th>Start Time</th>
                                                    <th>Duration</th>                                                                                                                                                           
                                                </tr>
                                            </thead>
                                        </table>
                                        </div>
                                    </div> 
                                        <div id="tab-billWaiver" class="tab-pane fade in">
                                            <div class="panel panel-blue">  
                                            <button class="btn btn-primary" style="float:right;">Add New</button>                                       
                                                <table id="billwaiverTable" class="table table-hover table-bordered" onclick="ticket('{{$user->account_id}}')">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Account ID</th>
                                                            <th>For Month</th>
                                                            <th>Amount</th>
                                                            <th>Top Up Data</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                </table>                                                
                                            </div>
                                        </div>                                                                                                               
                                </div>
                            </div>
                        </div>
                    <!-- </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script>
jQuery(document).ready(function() {

             var oTable = jQuery('#billwaiverTable').dataTable({
                processing: true,
                serverSide: true,
                "pageLength": 3,
                    "ajax": '/bill_waiver?account_id={{$user->account_id}}',
                    "type": 'get',
             });


             var oTable = jQuery('#paymentTable').dataTable({
                processing: true,
                serverSide: true,
                "pageLength": 10,
                       "ajax": '/payment?account_id={{$user->account_id}}',
                       "type":'get',
                        "createdRow": function ( row, data, index ) {
                            if(data[7] == "success"){
                                    $('td:eq(7)', row).html('<span style="color:green">'+data[7]+'</span>');
                            }else if(data[7] == "failure"){
                                    $('td:eq(7)', row).html('<span style="color:red">'+data[7]+'</span>');
                            }else if(data[7] == "pending" || data[7] == 'cancelled'){
                                    $('td:eq(7)', row).html('<span style="color:orange">'+data[7]+'</span>');
                            }
                        },                       
                   });

            var oTable = jQuery('#billTable').dataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                "pageLength": 3,
                "pagingType": "full_numbers",
                "ajax": '/bill?account_id={{$user->account_id}}',
                "type":'get',
                "createdRow": function ( row, data, index ) {
                    if(data[10] == "paid"){
                            $('td:eq(10)', row).html('<span style="color:green">Paid</span>');
                    }else if(data[10] == "not_paid"){
                            $('td:eq(10)', row).html('<span style="color:red">Not Paid</span>');
                    }else if(data[10] == "partially_paid"){
                            $('td:eq(10)', row).html('<span style="color:orange">Partially Paid</span>');
                    }
                },

                   });

              var oTable = jQuery('#usageTable').dataTable({
                processing: true,
                serverSide: true,
                "pageLength": 3,
                       "ajax": '/usage?account_id={{$user->account_id}}',
                       "type":'get',
                        "createdRow": function ( row, data, index ) {
                        var total_gb=data[8]/1000000000;
                        var current_speed = data[3];
                        var gb=total_gb.toFixed(2);
                        $('td:eq(8)', row).html(gb);
                        $('#theTable1 > tbody > tr:nth-child(5)').html('<td>Usage</td><td>'+ gb +' GB</td>');
                        $('#theTable2 > tbody > tr:nth-child(3)').html('<td>Current Speed</td><td>'+ current_speed +'</td>');
                },
                   });

              var oTable = jQuery('#sessionTable').dataTable({
                processing: true,
                serverSide: true,
                "pageLength": 25,
                       "ajax": '/session?account_id={{$user->account_id}}',
                       "type":'get',
                   });

              var oTable = jQuery('#activesessionTable').dataTable({
                processing: true,
                serverSide: true,
                       "ajax": '/active_session?account_id={{$user->account_id}}',
                       "type":'get',
                   });

              var oTable = jQuery('#ticketTable').dataTable({
                processing: true,
                serverSide: true,
                "pageLength": 3,
                       "ajax": '/ticket?account_id={{$user->account_id}}',
                       "type":'get',
                   });
});              
           
                             
</script>
<script>
 function log(p) {
        var account_id =+p;
            $.ajax({
                url : '/log',
                type : 'GET',
                data : {account_id :account_id},
                dataType:'json',
                success : function(data) {
                    if (data["found"] == "false") {
                                alert('Logs Not available');
                            }else{
                    $('#logTable tbody').remove();
                     var trHTML = '';
                    $.each(data, function (i, item) {
                        trHTML += '<tr><td>' + item.created + '</td><td>' + item.username  + '</td><td>' + item.mac + '</td><td>'+ item.ap_mac + '</td><td>'+ item.message + '</td></tr>';
                    });
                $('#logTable').append(trHTML);
                }
            }
            });
}

function ticketPop(t) {
    var id = t;
    $.ajax({
        url : '/findTicket',
        type: 'GET',
        data : { id : id },
        dataType: 'json',
        success : function(data) {
            window.location.href="/mailSupport/"+data.thread_id;
            //window.open("<?php public_path() ?>/ticket_popup/"+t, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=800, height=400");
        }
    });
}  


function sendNotify(id) {
    var account_no = id;
    $.ajax({
        url : '/sendNotify',
        type : 'GET',
        data : {account_no :account_no},
        dataType:'json',
        success : function(data) {
            if (data["message"] == "Bill No Not Found." || data['message'] == 'Message Send Failure.' ) {
                    $('.notifyMessage').html('<span class="label label-danger">'+ data['message'] +'</span>');
                }else{
                    $('.notifyMessage').html('<span class="label label-success">'+ data['message'] +'</span>');
                }
        }
    });    
}  

function init() {
  var firepadRef = getExampleRef();
  var codeMirror = CodeMirror(document.getElementById('firepad-container'), { lineWrapping: true });
  var firepad = Firepad.fromCodeMirror(firepadRef, codeMirror,
      { richTextToolbar: true, richTextShortcuts: true });
  firepad.on('ready', function() {
    if (firepad.isHistoryEmpty()) {
      firepad.setHtml('<span style="font-size: 24px;">Rich-text editing with <span style="color: red">Firepad!</span></span><br/><br/>Collaborative-editing made easy.\n');
    }
  });
}
function getExampleRef() {
  var ref = new Firebase('https://firepad.firebaseio-demo.com');
  var hash = window.location.hash.replace(/#/g, '');
  if (hash) {
    ref = ref.child(hash);
  } else {
    ref = ref.push();
    window.location = window.location + '#' + ref.key(); // add it as a hash to the URL.
  }
  return ref;
}
init();
</script>  
@stop
    