@extends('support.layouts.default')
@section('main')
<div class="col-md-12">
              <ul class="media-list inbox">
                <li class="media">
                  <div class="pull-right">
                    <div class="form-group has-feedback mb-0">
                      <input type="text" aria-describedby="inputSearchInbox" placeholder="Search inbox..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputSearchInbox" class="sr-only">(default)</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div role="toolbar" aria-label="Toolbar with button groups" class="btn-toolbar">
                      <div role="group" aria-label="First group" class="btn-group">
                        <button type="button" class="btn btn-outline btn-default"><i class="ti-archive"></i></button>
                        <button type="button" class="btn btn-outline btn-default"><i class="ti-heart"></i></button>
                        <button type="button" class="btn btn-outline btn-default"><i class="ti-trash"></i></button>
                      </div>
                    </div>
                  </div>
                </li>
                @foreach($mails as $mail)
                <li class="media">
                  <div class="checkbox-custom pull-left">
                    <input id="mailboxCheckbox1" type="checkbox" value="value1">
                    <label for="mailboxCheckbox1"></label>
                  </div><a href="javascript:;">
                    <div class="media-body" style="height:2cm;">
                      <h6 class="media-heading">{{$mail->from_mail}}</h6>
                      <h5 class="title">{{$mail->subject}}</h5>
                      <p class="summary">{{$mail->body}}</p>
                    </div>
                    <div class="media-right text-nowrap">
                      <span title="{{$mail->time}}" data-livestamp="{{$mail->time}}"></span>
                    </div></a>
                </li>
                @endforeach
              </ul>
            </div>  

@stop


