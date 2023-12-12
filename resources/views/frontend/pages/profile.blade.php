@extends('frontend.layout.app')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        <body>
                            <div class="container main-secction">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                                        <img src="https://images.unsplash.com/opengraph/1x1.png?blend=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1501700493788-fa1a4fc9fe62%3Fblend%3D000000%26blend-alpha%3D10%26blend-mode%3Dnormal%26crop%3Dfaces%252Cedges%26h%3D630%26mark%3Dhttps%253A%252F%252Fimages.unsplash.com%252Fopengraph%252Fsearch-input.png%253Fh%253D84%2526txt%253Dtruck%2526txt-align%253Dmiddle%25252Cleft%2526txt-clip%253Dellipsis%2526txt-color%253D000000%2526txt-pad%253D80%2526txt-size%253D40%2526txt-width%253D660%2526w%253D750%2526auto%253Dformat%2526fit%253Dcrop%2526q%253D60%26mark-align%3Dmiddle%252Ccenter%26mark-w%3D750%26w%3D1200%26auto%3Dformat%26fit%3Dcrop%26q%3D60%26ixid%3DM3wxMjA3fDB8MXxzZWFyY2h8Nnx8dHJ1Y2t8ZW58MHx8fHwxNzAyMjY0NjQ2fDA%26ixlib%3Drb-4.0.3&blend-w=1&h=630&mark=https%3A%2F%2Fimages.unsplash.com%2Fopengraph%2Flogo.png&mark-align=top%2Cleft&mark-pad=50&mark-w=64&w=1200&auto=format&fit=crop&q=60">
                                    </div>
                                    <div class="row user-left-part">
                                        <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                                            <div class="row ">
                                                <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                                                    <img src="{{ url('/public/uploads/',auth()->user()->image) }}" class="rounded-circle">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                                                    <button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-success btn-block follow">{{ auth()->user()->name }}</button>
                                                    <button class="btn btn-warning btn-block">{{ auth()->user()->phone }}</button>
                                                </div>
                                                <div class="row user-detail-row">
                                                    <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                                        <div class="border"></div>
                                                        <p>JOINED</p>
                                                        <span>{{ auth()->user()->created_at->format('D M Y') }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                                            <div class="row profile-right-section-row">
                                                <div class="col-md-12 profile-header">
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                                            <h1>{{ auth()->user()->name }}</h1>
                                                            <h5>{{ auth()->user()->role }}</h5>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                                <ul class="nav nav-tabs" role="tablist">
                                                                        <li class="nav-item">
                                                                          <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Profile</a>
                                                                        </li>

                                                                      </ul>

                                                                      <!-- Tab panes -->
                                                                      <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                                                <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label>Phone</label>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <p>{{ auth()->user()->phone }}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label>Email</label>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <p>{{ auth()->user()->email }}</p>
                                                                                        </div>
                                                                                    </div>

                                                                                    </div>


                                                                        </div>


                                                                      </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </body>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>

<style>
    body{
  margin-top: auto;
    background-color: #f1f1f1;
  }
  .border{
    border-bottom:1px solid #F1F1F1;
    margin-bottom:10px;
  }
  .main-secction{
    box-shadow: 10px 10px 10px;
  }
  .image-section{
    padding: 0px;
  }
  .image-section img{
    width: 100%;
    height:250px;
    position: relative;
  }
  .user-image{
    position: absolute;
    margin-top:-50px;
  }
  .user-left-part{
    margin: 0px;
  }
  .user-image img{
    width:100px;
    height:100px;
  }
  .user-profil-part{
    padding-bottom:30px;
    background-color:#FAFAFA;
  }
  .follow{
    margin-top:70px;
  }
  .user-detail-row{
    margin:0px;
  }
  .user-detail-section2 p{
    font-size:12px;
    padding: 0px;
    margin: 0px;
  }
  .user-detail-section2{
    margin-top:10px;
  }
  .user-detail-section2 span{
    color:#7CBBC3;
    font-size: 20px;
  }
  .user-detail-section2 small{
    font-size:12px;
    color:#D3A86A;
  }
  .profile-right-section{
    padding: 20px 0px 10px 15px;
    background-color: #FFFFFF;
  }
  .profile-right-section-row{
    margin: 0px;
  }
  .profile-header-section1 h1{
    font-size: 25px;
    margin: 0px;
  }
  .profile-header-section1 h5{
    color: #0062cc;
  }
  .req-btn{
    height:30px;
    font-size:12px;
  }
  .profile-tag{
    padding: 10px;
    border:1px solid #F6F6F6;
  }
  .profile-tag p{
    font-size: 12px;
    color:black;
  }
  .profile-tag i{
    color:#ADADAD;
    font-size: 20px;
  }
  .image-right-part{
    background-color: #FCFCFC;
    margin: 0px;
    padding: 5px;
  }
  .img-main-rightPart{
    background-color: #FCFCFC;
    margin-top: auto;
  }
  .image-right-detail{
    padding: 0px;
  }
  .image-right-detail p{
    font-size: 12px;
  }
  .image-right-detail a:hover{
    text-decoration: none;
  }
  .image-right img{
    width: 100%;
  }
  .image-right-detail-section2{
    margin: 0px;
  }
  .image-right-detail-section2 p{
    color:#38ACDF;
    margin:0px;
  }
  .image-right-detail-section2 span{
    color:#7F7F7F;
  }

  .nav-link{
    font-size: 1.2em;
  }

</style>

@endsection
