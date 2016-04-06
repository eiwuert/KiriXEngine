@extends('front.template')

@section('main')
<style>
.splash {
        padding: 15em;
    background-color: #141d27;
    background-image: url(http://phily.app/2.png);
    background-size: cover;
    background-attachment: fixed;
    color: #fff;
    text-align: center;

}
img.img-responsive.tumb {
    position: relative;
    top: -75px;
    width: 170px;
    border: #e5e5e5 2px solid;
    border-radius: 3px;
    float:left;
}
.user-wrapper .description {
        margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
    float: left;
}
</style>
<style>

.navbar {
      background-color: #2c3e50!important;
}
</style>
<div class="container">
<div class="splash" style="background-position: 0px 0px;">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <!-- <div><img class="logo" src="assets/img/logo.png"></div> -->
            
           
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
              
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
<div class="nopadding" style="background:#eaf1f1">   
<main role="main" class="container" >
<div class="row">
<div class="cardblock">
<div class="card" style="
    position: relative;
    top: -100px;
    background: transparent;
    box-shadow: 0 0px;
    left: 30px;
    height: 60px;
">
            <div class="card-block left">
              <img src="http://phily.app/sakuya.jpg" style="    height: 165px;
    border: 2px solid #e5e5e5;
    border-radius: 3px;"> 
                <div class="media-body media-middle" style=" float: left;
    width: auto;
    margin-left: 20px;
    position: absolute;
    left: 185px;
    top: 125px;">
                  <h4 class="card-title"><a href="view-course.html#">{{ $user->first_name }} {{ $user->last_name }}</a></h4>
                  <p class="card-subtitle">Yang diatas itu waifu gw, please lagi mainin Visual Novelnya xD</p>
                </div> 
            </div>
          </div>
          </div>

</div>



 <div class="row" style="padding-top:20px">

<div class="col-md-3" >
          
          <div class="card">
           
            <div class="card-block">
              <p>Having over 5 years exp. Axl is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.</p>
              <a href="view-course.html" class="btn btn-default">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="view-course.html" class="btn btn-default">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="view-course.html" class="btn btn-default"><i class="fa fa-github"></i></a>
            </div>
          </div>
          <div class="card">
            <ul class="list-group list-group-fit">
              <li class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <i class="material-icons text-muted-light">assessment</i>
                  </div>
                  <div class="media-body media-middle">
                    Beginner
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <i class="material-icons text-muted-light">schedule</i>
                  </div>
                  <div class="media-body media-middle">
                    2
                    <small class="text-muted">hrs</small> &nbsp; 26
                    <small class="text-muted">min</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Ratings</h4>
            </div>
            <div class="card-block">
              <div>
                <i class="material-icons text-warning md-18">star</i>
                <i class="material-icons text-warning md-18">star</i>
                <i class="material-icons text-warning md-18">star</i>
                <i class="material-icons text-warning md-18">star</i>
                <i class="material-icons text-warning md-18">star_border</i>
              </div>
              <small class="text-muted">20 ratings</small>
            </div>
          </div>
        </div>


        <div class="col-md-9">
          <div class="card">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#first" data-toggle="tab">Latest Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#second" data-toggle="tab">Info</a>
          </li>
        </ul>
        <div class="p-a-2 tab-content">
          <div class="tab-pane active" id="first">
            <form action="account-edit.html#" class="form-horizontal">
              <div class="form-group row">
                <label for="avatar" class="col-sm-3 form-control-label">Avatar</label>
                <div class="col-sm-9">
                  <div class="media">
                    <div class="media-left">
                      <div class="icon-block">
                        <i class="material-icons text-muted-light md-36">photo</i>
                      </div>
                    </div>
                    <div class="media-body media-middle">
                      <label class="file">
                        <input type="file" id="file">
                        <span class="file-custom"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-3 form-control-label">Full Name</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="First Name" value="Adrian">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Last Name" value="Demian">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 form-control-label">Email</label>
                <div class="col-sm-6 col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
								<i class="material-icons md-18 text-muted">mail</i>
							</span>
                    <input type="text" class="form-control" placeholder="Email Address" value="contact@mosaicpro.biz" disabled="">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="website" class="col-sm-3 form-control-label">Website</label>
                <div class="col-sm-6 col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
								<i class="material-icons md-18 text-muted">language</i>
							</span>
                    <input type="text" class="form-control" placeholder="www." value="learning.themekit.io">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-3 form-control-label">Change Password</label>
                <div class="col-sm-6 col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon3">
								<i class="material-icons md-18 text-muted">lock</i>
							</span>
                    <input type="text" class="form-control" placeholder="Enter new password">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-8 col-sm-offset-3">
                  <div class="media">
                    <div class="media-left">
                      <a href="account-edit.html#" class="btn btn-success btn-rounded">Save Changes</a>
                    </div>
                    <div class="media-body media-middle p-l-1">
                      <label class="c-input c-checkbox">
                        <input type="checkbox" checked="">
                        <span class="c-indicator"></span> Subscribe to Newsletter
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="second">
            <form action="account-edit.html#" class="form-horizontal">
              <div class="form-group row">
                <label for="name_on_invoice" class="col-sm-3 form-control-label">Name on Invoice</label>
                <div class="col-sm-6 col-md-4">
                  <input type="text" class="form-control" value="Adrian Demian">
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-3 form-control-label">Address</label>
                <div class="col-sm-6 col-md-4">
                  <input type="text" class="form-control" value="Sunny Street, 21, Miami, Florida">
                </div>
              </div>
              <div class="form-group row">
                <label for="country" class="col-sm-3 form-control-label">Country</label>
                <div class="col-sm-6 col-md-4">
                  <select class="c-select form-control">
                    <option value="1" selected="">USA</option>
                    <option value="2">India</option>
                    <option value="3">United Kingdom</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3">
                  <a href="account-edit.html#" class="btn btn-success btn-rounded"> Update Billing</a>
                </div>
              </div>
            </form>
            <div class="card m-t-2">
              <div class="card-header bg-white">
                <div class="media">
                  <div class="media-body media-middle">
                    <h4 class="card-title">Payment Info</h4>
                  </div>
                  <div class="media-right media-middle">
                    <a href="account-edit.html#" class="btn btn-primary-outline"><i class="material-icons">add</i></a>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <ul class="list-group m-b-0">
                  <li class="list-group-item active">
                    <div class="media">
                      <div class="media-left">
                        <span class="btn btn-primary btn-circle"><i class="material-icons">credit_card</i></span>
                      </div>
                      <div class="media-body media-middle">
                        <p class="m-b-0">**** **** **** 2422</p>
                        <small class="text-muted">Updated on 12/02/2016</small>
                      </div>
                      <div class="media-right media-middle">
                        <a href="account-edit.html#" class="btn btn-primary btn-sm">
                          <i class="material-icons">edit</i> EDIT
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left">
                        <span class="btn btn-white btn-circle"><i class="material-icons">credit_card</i></span>
                      </div>
                      <div class="media-body media-middle">
                        <p class="m-b-0">**** **** **** 6321</p>
                        <small class="text-muted">Updated on 11/01/2016</small>
                      </div>
                      <div class="media-right media-middle">
                        <a href="account-edit.html#" class="btn btn-white btn-sm">
                          <i class="material-icons">edit</i> EDIT
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

        </div>
        
      </div>
    </main>
    </div>

@stop