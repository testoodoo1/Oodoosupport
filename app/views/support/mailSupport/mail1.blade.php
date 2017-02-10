@extends('support.layouts.default1')
@section('main')
<div class="page-header clearfix">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="mt-0 mb-5">Mailbox</h4>
              <ol class="breadcrumb mb-0">
                <li><a href="#">Umega</a></li>
                <li><a href="#">Apps</a></li>
                <li class="active">Mailbox</li>
              </ol>
            </div>
<!--             <div class="col-sm-6">
              <div class="btn-group mt-5">
                <button type="button" class="btn btn-default btn-outline"><i class="flag-icon flag-icon-us mr-5"></i> English</button>
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                <ul class="dropdown-menu dropdown-menu-right fadeInDown animated" style="animation-duration: 0.2s; animation-delay: 0s; animation-timing-function: linear; animation-iteration-count: 1;">
                  <li><a href="#"><i class="flag-icon flag-icon-de mr-5"></i> German</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-fr mr-5"></i> French</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-es mr-5"></i> Spanish</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-it mr-5"></i> Italian</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-jp mr-5"></i> Japanese</a></li>
                </ul>
              </div>
            </div> -->
            <button data-style="expand-right" class="btn btn-raised btn-info ladda-button"><span class="ladda-label">New Ticket</span><span class="ladda-spinner"></span></button>
          </div>
        </div>

<div class="page-content container-fluid">
          <div class="widget">
            <div class="widget-heading">
              <h3 class="widget-title">Vertical Form</h3>
            </div>
            <div class="widget-body">
              <form id="form-vertical" method="post" novalidate="novalidate">
                <div class="form-group">
                  <label for="txtEmail">Email</label>
                  <input id="txtEmail" type="text" name="txtEmail" placeholder="Enter email" data-rule-required="true" data-rule-rangelength="[10,30]" data-rule-email="true" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="txtPassword">Password</label>
                  <input id="txtPassword" type="password" name="txtPassword" placeholder="Enter password" data-rule-required="true" data-rule-rangelength="[10,30]" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="txtConfirmPassword">Confirm password</label>
                  <input id="txtConfirmPassword" type="password" name="txtConfirmPassword" placeholder="Enter confirm password" data-rule-required="true" data-rule-equalto="#txtPassword" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="txtDatePicker">Date picker</label>
                  <div data-format="MM/DD/YYYY" class="input-group">
                    <input id="txtDatePicker" type="text" name="txtDatePicker" placeholder="Enter date" data-rule-required="true" data-rule-minlength="8" data-rule-date="true" class="form-control" aria-required="true"><span class="input-group-addon"><i class="ti-calendar"></i></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtWebsite">Website</label>
                  <input id="txtWebsite" type="text" name="txtWebsite" placeholder="Enter website" data-rule-required="true" data-rule-url="true" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="txtCreditCard">Credit card</label>
                  <input id="txtCreditCard" type="text" name="txtCreditCard" placeholder="Enter credit card" data-rule-required="true" data-rule-creditcard="true" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="fulImage">Image upload</label>
                  <input id="fulImage" type="file" name="fulImage" data-buttontext="Choose file" data-buttonname="btn-outline btn-primary" data-iconname="ti-image" data-rule-required="true" data-rule-accept="image/*" class="filestyle" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);" aria-required="true"><div class="bootstrap-filestyle input-group"><input type="text" class="form-control " placeholder="" disabled=""> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="fulImage" class="btn btn-outline btn-primary "><span class="icon-span-filestyle ti-image"></span> <span class="buttonText">Choose file</span></label></span></div>
                </div>
                <div class="form-group">
                  <label for="txtDecimalNumber">Decimal number</label>
                  <input id="txtDecimalNumber" type="text" name="txtDecimalNumber" placeholder="Enter decimal number" data-rule-required="true" data-rule-number="true" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="txtDigits">Digits</label>
                  <input id="txtDigits" type="text" name="txtDigits" placeholder="Enter digits" data-rule-required="true" data-rule-digits="true" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="txtPhoneUS">Phone US</label>
                  <input id="txtPhoneUS" type="text" name="txtPhoneUS" placeholder="Enter phone US" data-rule-required="true" data-rule-phoneus="true" class="form-control" aria-required="true">
                </div>
                <div class="form-group">
                  <label for="ddlCountry">Country</label>
                  <select id="ddlCountry" name="ddlCountry" data-rule-required="true" class="form-control" aria-required="true">
                    <option value="">-- Select a country --</option>
                    <option value="US">United States</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BR">Brazil</option>
                    <option value="CN">China</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    <option value="IN">India</option>
                    <option value="MA">Morocco</option>
                    <option value="NL">Netherlands</option>
                    <option value="PK">Pakistan</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="SK">Slovakia</option>
                    <option value="ES">Spain</option>
                    <option value="TH">Thailand</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="VE">Venezuela</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="rdbGender" value="male" data-rule-required="true" aria-required="true"> Male
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="rdbGender" value="female"> Female
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Languages</label>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="chkPrograms" value="net" data-rule-required="true" aria-required="true"> .Net
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="chkPrograms" value="java"> Java
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="chkPrograms" value="php"> PHP
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="chkPrograms" value="perl"> Perl
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="chkPrograms" value="ruby"> Ruby
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="msEditors">Editors</label>
                  <select id="msEditors" name="msEditors" multiple="multiple" style="height: 180px; overflow-y: hidden" data-rule-required="true" class="form-control" aria-required="true">
                    <option value="" disabled="disabled">Choose editors</option>
                    <option value="atom">Atom</option>
                    <option value="eclipse">Eclipse</option>
                    <option value="netbeen">NetBean</option>
                    <option value="nodepadplusplus">Nodepad++</option>
                    <option value="phpstorm">PHP Storm</option>
                    <option value="sublime">Sublime</option>
                    <option value="webstorm">Web Storm</option>
                  </select>
                </div>
                <button type="submit" name="btnSubmit" class="btn btn-raised btn-black">Submit</button>
              </form>
            </div>
          </div>
        </div>        



<div class="page-content container-fluid p-0">
          <div class="row row-0 mailbox">
            <div class="col-md-5">
              <ul class="media-list inbox">
                <li class="media">
                  <div class="pull-left">
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
                <li class="media">
                  <div class="checkbox-custom pull-left">
                    <input id="mailboxCheckbox1" type="checkbox" value="value1">
                    <label for="mailboxCheckbox1"></label>
                  </div><a href="javascript:;">
                    <div class="media-left avatar"><img src="../build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Mark Barnett</h6>
                      <h5 class="title">Posuere convallis sociis nisi euismod</h5>
                      <p class="summary">Arcu sed in tortor non convallis laoreet commodo ullamcorper ultrices...</p>
                    </div>
                    <div class="media-right text-nowrap">
                      <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                    </div></a>
                </li>
                <li class="media">
                  <div class="checkbox-custom pull-left">
                    <input id="mailboxCheckbox2" type="checkbox" value="value2">
                    <label for="mailboxCheckbox2"></label>
                  </div><a href="javascript:;">
                    <div class="media-left avatar"><img src="../build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Alexander Gilbert</h6>
                      <h5 class="title">Posuere convallis sociis nisi euismod</h5>
                      <p class="summary">Arcu sed in tortor non convallis laoreet commodo ullamcorper ultrices...</p>
                    </div>
                    <div class="media-right text-nowrap"><i class="ti-clip"></i>
                      <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                    </div></a>
                </li>
                <li class="media read">
                  <div class="checkbox-custom pull-left">
                    <input id="mailboxCheckbox3" type="checkbox" value="value3">
                    <label for="mailboxCheckbox3"></label>
                  </div><a href="javascript:;">
                    <div class="media-left avatar"><img src="../build/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Amanda Collins</h6>
                      <h5 class="title">Posuere convallis sociis nisi euismod</h5>
                      <p class="summary">Arcu sed in tortor non convallis laoreet commodo ullamcorper ultrices...</p>
                    </div>
                    <div class="media-right text-nowrap">
                      <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                    </div></a>
                </li>
                <li class="media active">
                  <div class="checkbox-custom pull-left">
                    <input id="mailboxCheckbox4" type="checkbox" value="value4">
                    <label for="mailboxCheckbox4"></label>
                  </div><a href="javascript:;">
                    <div class="media-left avatar"><img src="../build/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Christian Lane</h6>
                      <h5 class="title">Posuere convallis sociis nisi euismod</h5>
                      <p class="summary">Arcu sed in tortor non convallis laoreet commodo ullamcorper ultrices...</p>
                    </div>
                    <div class="media-right text-nowrap"><i class="ti-clip"></i>
                      <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                    </div></a>
                </li>
                <li class="media read">
                  <div class="checkbox-custom pull-left">
                    <input id="mailboxCheckbox5" type="checkbox" value="value5">
                    <label for="mailboxCheckbox5"></label>
                  </div><a href="javascript:;">
                    <div class="media-left avatar"><img src="../build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Edward Garcia</h6>
                      <h5 class="title">Posuere convallis sociis nisi euismod</h5>
                      <p class="summary">Arcu sed in tortor non convallis laoreet commodo ullamcorper ultrices...</p>
                    </div>
                    <div class="media-right text-nowrap">
                      <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">Yesterday</time>
                    </div></a>
                </li>
              </ul>
            </div>
            <div class="col-md-7">
              <div class="single-mail">
                <div class="clearfix">
                  <div class="pull-left">
                    <div class="media">
                      <div class="media-left avatar"><img src="../build/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                      <div style="width:auto" class="media-body">
                        <h6 class="media-heading">Christian Lane</h6>
                        <p class="text-muted mb-0"><a href="#">christian.lane@gmail.com</a> to me</p>
                      </div>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div role="toolbar" aria-label="Toolbar with button groups" class="btn-toolbar">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline btn-default">Reply</button>
                        <button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-outline btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                        <ul role="menu" class="dropdown-menu pull-right fadeInDown animated" style="animation-duration: 0.2s; animation-delay: 0s; animation-timing-function: linear; animation-iteration-count: 1;">
                          <li><a href="#">Reply</a></li>
                          <li><a href="#">Reply To All</a></li>
                          <li><a href="#">Forward</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Print</a></li>
                          <li><a href="#">Mark as spam</a></li>
                          <li><a href="#">Mark as unread</a></li>
                          <li><a href="#">Delete this message</a></li>
                        </ul>
                      </div>
                      <div role="group" aria-label="Second group" class="btn-group">
                        <button type="button" class="btn btn-outline btn-default"><i class="ti-angle-left"></i></button>
                        <button type="button" class="btn btn-outline btn-default"><i class="ti-angle-right"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <h3 class="fw-300">Lorem ipsum dolor sit amet, consectetur adipisicing.</h3>
                <p class="drop-cap">
                  Morem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p><img src="../build/images/backgrounds/01.jpg" alt="" class="img-responsive mb-10">
                <p>
                  Prey dick shrike abattoir huntress thomas collector; red amanda lillian superman. Mask amanda scorn batmobile creeper.
                  Tally, deadshot flash bullock catwoman hatter society society bullock dent hammer. Kyle martha zucco kobra moth the
                  hood drake rumor aiko hammer. Katana deathstroke society of al catwoman tumbler thorne harvey quinn lazarus, spoiler
                  drake. Bane firefly strange toymaker kane amanda rhino chimera. Abbott thorne league nocturna flash. Cypher lazarus
                  wayne mugsy gleeson black wayne clayface lantern society gleeson cluemaster. Society vicki society shiva sinestro.
                </p>
                <hr>
                <ul class="media-list">
                  <li class="media"><a href="#">
                      <div class="media-left"><i class="fa fa-file-text-o"></i></div>
                      <div class="media-body">template-text-file.txt</div>
                      <div class="media-right">2.5MB</div></a></li>
                  <li class="media"><a href="#">
                      <div class="media-left"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="media-body">template-pdf-file.pdf</div>
                      <div class="media-right">4.0MB</div></a></li>
                  <li class="media"><a href="#">
                      <div class="media-left"><i class="fa fa-file-word-o"></i></div>
                      <div class="media-body">template-word-file.pdf</div>
                      <div class="media-right">462KB</div></a></li>
                </ul>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="thumbnail"><img src="../build/images/backgrounds/07.jpg" alt="">
                      <div class="text-right caption pb-0">
                        <ul class="list-inline mb-0">
                          <li><a href="#"><i class="ti-save text-info"></i></a></li>
                          <li><a href="#"><i class="ti-shield text-danger"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="thumbnail"><img src="../build/images/backgrounds/08.jpg" alt="">
                      <div class="text-right caption pb-0">
                        <ul class="list-inline mb-0">
                          <li><a href="#"><i class="ti-save text-info"></i></a></li>
                          <li><a href="#"><i class="ti-shield text-danger"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="thumbnail"><img src="../build/images/backgrounds/09.jpg" alt="">
                      <div class="text-right caption pb-0">
                        <ul class="list-inline mb-0">
                          <li><a href="#"><i class="ti-save text-info"></i></a></li>
                          <li><a href="#"><i class="ti-shield text-danger"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <textarea id="email-editor" style="display: none;"></textarea><div class="note-editor note-frame panel panel-default"><div class="note-dropzone">  <div class="note-dropzone-message"></div></div><div class="note-toolbar panel-heading"><div class="note-btn-group btn-group note-style"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Style"><i class="fa fa-magic"></i> <span class="caret"></span></button><div class="dropdown-menu dropdown-style"><li><a href="#" data-value="p"><p>p</p></a></li><li><a href="#" data-value="blockquote"><blockquote>blockquote</blockquote></a></li><li><a href="#" data-value="pre"><pre>pre</pre></a></li><li><a href="#" data-value="h1"><h1>h1</h1></a></li><li><a href="#" data-value="h2"><h2>h2</h2></a></li><li><a href="#" data-value="h3"><h3>h3</h3></a></li><li><a href="#" data-value="h4"><h4>h4</h4></a></li><li><a href="#" data-value="h5"><h5>h5</h5></a></li><li><a href="#" data-value="h6"><h6>h6</h6></a></li></div></div></div><div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" title="" data-original-title="Bold (CTRL+B)"><i class="fa fa-bold"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-btn-italic" title="" data-original-title="Italic (CTRL+I)"><i class="fa fa-italic"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" title="" data-original-title="Underline (CTRL+U)"><i class="fa fa-underline"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Remove Font Style (CTRL+\)"><i class="fa fa-eraser"></i></button></div><div class="note-btn-group btn-group note-fontname"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Family"><span class="note-current-fontname">Poppins</span> <span class="caret"></span></button><div class="dropdown-menu note-check dropdown-fontname"><li><a href="#" data-value="Arial" class=""><i class="fa fa-check"></i> <span style="font-family:Arial">Arial</span></a></li><li><a href="#" data-value="Courier New" class=""><i class="fa fa-check"></i> <span style="font-family:Courier New">Courier New</span></a></li><li><a href="#" data-value="Helvetica" class=""><i class="fa fa-check"></i> <span style="font-family:Helvetica">Helvetica</span></a></li></div></div></div><div class="note-btn-group btn-group note-fontsize"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><span class="note-current-fontsize">14</span><span class="caret"></span></button><div class="dropdown-menu note-check dropdown-fontsize"><li><a href="#" data-value="8" class=""><i class="fa fa-check"></i> 8</a></li><li><a href="#" data-value="9" class=""><i class="fa fa-check"></i> 9</a></li><li><a href="#" data-value="10" class=""><i class="fa fa-check"></i> 10</a></li><li><a href="#" data-value="11" class=""><i class="fa fa-check"></i> 11</a></li><li><a href="#" data-value="12" class=""><i class="fa fa-check"></i> 12</a></li><li><a href="#" data-value="14" class="checked"><i class="fa fa-check"></i> 14</a></li><li><a href="#" data-value="18" class=""><i class="fa fa-check"></i> 18</a></li><li><a href="#" data-value="24" class=""><i class="fa fa-check"></i> 24</a></li><li><a href="#" data-value="36" class=""><i class="fa fa-check"></i> 36</a></li></div></div></div><div class="note-btn-group btn-group note-color"><div class="note-btn-group btn-group note-color"><button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" title="" data-original-title="Recent Color"><i class="fa fa-font note-recent-color" style="background-color: yellow;"></i></button><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="More Color"><span class="caret"></span></button><div class="dropdown-menu"><li><div class="btn-group">  <div class="note-palette-title">Background Color</div>  <div>    <button type="button" class="note-color-reset btn btn-default" data-event="backColor" data-value="inherit">Transparent    </button>  </div>  <div class="note-holder" data-event="backColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div></div></div></div><div class="btn-group">  <div class="note-palette-title">Foreground Color</div>  <div>    <button type="button" class="note-color-reset btn btn-default" data-event="removeFormat" data-value="foreColor">Reset to default    </button>  </div>  <div class="note-holder" data-event="foreColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div></div></div></div></li></div></div></div><div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="fa fa-list-ol"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="fa fa-list-ul"></i></button><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Paragraph"><i class="fa fa-align-left"></i> <span class="caret"></span></button><div class="dropdown-menu"><div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align left (CTRL+SHIFT+L)"><i class="fa fa-align-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align center (CTRL+SHIFT+E)"><i class="fa fa-align-center"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align right (CTRL+SHIFT+R)"><i class="fa fa-align-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="fa fa-align-justify"></i></button></div><div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Outdent (CTRL+[)"><i class="fa fa-outdent"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Indent (CTRL+])"><i class="fa fa-indent"></i></button></div></div></div></div><div class="note-btn-group btn-group note-height"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Line Height"><i class="fa fa-text-height"></i> <span class="caret"></span></button><div class="dropdown-menu note-check dropdown-line-height"><li><a href="#" data-value="1.0" class=""><i class="fa fa-check"></i> 1.0</a></li><li><a href="#" data-value="1.2" class=""><i class="fa fa-check"></i> 1.2</a></li><li><a href="#" data-value="1.4" class=""><i class="fa fa-check"></i> 1.4</a></li><li><a href="#" data-value="1.5" class=""><i class="fa fa-check"></i> 1.5</a></li><li><a href="#" data-value="1.6" class=""><i class="fa fa-check"></i> 1.6</a></li><li><a href="#" data-value="1.8" class=""><i class="fa fa-check"></i> 1.8</a></li><li><a href="#" data-value="2.0" class=""><i class="fa fa-check"></i> 2.0</a></li><li><a href="#" data-value="3.0" class=""><i class="fa fa-check"></i> 3.0</a></li></div></div></div><div class="note-btn-group btn-group note-table"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Table"><i class="fa fa-table"></i> <span class="caret"></span></button><div class="dropdown-menu note-table"><div class="note-dimension-picker">  <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>  <div class="note-dimension-picker-highlighted"></div>  <div class="note-dimension-picker-unhighlighted"></div></div><div class="note-dimension-display">1 x 1</div></div></div></div><div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Link"><i class="fa fa-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Picture"><i class="fa fa-picture-o"></i></button><button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Insert Horizontal Rule (CTRL+ENTER)"><i class="fa fa-minus"></i></button></div><div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen" title="" data-original-title="Full Screen"><i class="fa fa-arrows-alt"></i></button></div></div><div class="note-editing-area"><div class="note-handle"><div class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><textarea class="note-codable"></textarea><div class="note-editable panel-body" contenteditable="true" style="height: 200px;"><p><br></p></div></div><div class="note-statusbar">  <div class="note-resizebar">    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>  </div></div><div class="modal link-dialog" aria-hidden="false" tabindex="-1"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>      <h4 class="modal-title">Insert Link</h4>    </div>    <div class="modal-body"><div class="form-group"><label>Text to display</label><input class="note-link-text form-control" type="text"></div><div class="form-group"><label>To what URL should this link go?</label><input class="note-link-url form-control" type="text" value="http://"></div><div class="checkbox"><label><input type="checkbox" checked=""> Open in new window</label></div></div>    <div class="modal-footer"><button href="#" class="btn btn-primary note-link-btn disabled" disabled="">Insert Link</button></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>      <h4 class="modal-title">Insert Image</h4>    </div>    <div class="modal-body"><div class="form-group note-group-select-from-files"><label>Select from files</label><input class="note-image-input form-control" type="file" name="files" accept="image/*" multiple="multiple"></div><div class="form-group" style="overflow:auto;"><label>Image URL</label><input class="note-image-url form-control col-md-12" type="text"></div></div>    <div class="modal-footer"><button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>      <h4 class="modal-title">Insert Video</h4>    </div>    <div class="modal-body"><div class="form-group row-fluid"><label>Video URL? <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input class="note-video-url form-control span12" type="text"></div></div>    <div class="modal-footer"><button href="#" class="btn btn-primary note-video-btn disabled" disabled="">Insert Video</button></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>      <h4 class="modal-title">Help</h4>    </div>    <div class="modal-body" style="max-height: 300px; overflow: scroll;"><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div>    <div class="modal-footer"><p class="text-center"><a href="//summernote.org/" target="_blank">Summernote 0.7.3</a> · <a href="//github.com/summernote/summernote" target="_blank">Project</a> · <a href="//github.com/summernote/summernote/issues" target="_blank">Issues</a></p></div>  </div></div></div></div>
                <div class="text-right">
                  <button type="button" class="btn btn-raised btn-success">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>








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


