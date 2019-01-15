@extends('layouts.master_reality_daily')
@section('content_title','Email - yousuf@realitydaily.net')
@section('pageTitle','Email - yousuf@realitydaily.net')
@section('content')
<div class="col-md-12" style="margin-bottom:30px;">
   <div class="row">
      <div class="col"><a href="/email"> <button class="btn btn-primary btn-block"> Inbox </button></a> </div>
      <div class="col"> <a href="/email/compose"> <button class="btn btn-danger btn-block"> Compose </button></a> </div>
      <div class="col"><a href="/email/sent"> <button class="btn btn-warning btn-block"> Sent </button></a> </div>
      <div class="col"><a href="/email/draft"> <button class="btn btn-info btn-block"> Draft </button></a> </div>
   </div>
</div>
<div class="col-md-12">
   <div class="card card-primary card-outline">
      <div class="card-header">
         <h3 class="card-title">Inbox</h3>
         <div class="card-tools">
            <div class="input-group input-group-sm">
               <input type="text" class="form-control" placeholder="Search Mail">
               <div class="input-group-append">
                  <div class="btn btn-primary">
                     <i class="fa fa-search"></i>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
         
         <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
               <tbody>
                 
                  <tr>
                     <td>
                        <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                     </td>
                     <!-- <td class="mailbox-star"><a href="#"><i class="fa fa-star text-warning"></i></a></td> -->
                     <td class="mailbox-name"><a href="read-mail.html">{{$m->subject}} </a></td>
                     <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                     </td>
                     <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                     <td class="mailbox-date">14 days ago</td>
                  </tr>
                  <tr>
                     <td>
                        <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                     </td>
                     <!-- <td class="mailbox-star"><a href="#"><i class="fa fa-star text-warning"></i></a></td> -->
                     <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                     <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                     </td>
                     <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                     <td class="mailbox-date">15 days ago</td>
                  </tr>
               </tbody>
            </table>
            <!-- /.table -->
         </div>
         <!-- /.mail-box-messages -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer p-0">
         <div class="mailbox-controls">
            
            <div class="float-right">
               1-50/200
               <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
               </div>
               <!-- /.btn-group -->
            </div>
            <!-- /.float-right -->
         </div>
      </div>
   </div>
   <!-- /. box -->
</div>
@endsection
@section('breadcrumb')
<li class="breadcrumb-item active"></li>
@endsection