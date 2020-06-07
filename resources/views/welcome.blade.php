<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    WELCOME
                </div>

                <!-- <form class="links" action="{{ URL::to('/show')  }}" method="post">
                   {{csrf_field()}}
                   <input type="text" name="input" value="" />
                   <button type="submit" name="submit">submit</button>
                </form> -->

                <form class="links" action="{{ URL::to('/show')  }}" method="post">
                  {{csrf_field()}}
                  <div class="content-wrapper">
                      <div class="alert alert-success" role="alert">成功しました。</div>
                      <section class="content-header">
                          <div class="container-fluid">
                              <!-- Main row -->
                              <div class="row">
                                  <!-- Left col -->
                                  <div class="col-md-12">
                                      <div class="card">
                                          <div class="card-header">
                                              <h3 class="card-title">管理者情報の更新</h3>
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="card-body card-body-office-edit">
                                              <div class="tab-pane active" id="settings">
                                                  <div class="form-horizontal">
                                                      <div class="form-group row">
                                                          <label for="inputName" class="col-sm-2 col-form-label">管理者名</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="inputName" placeholder="管理者名" value="">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                                                          <div class="col-lg-5 col-sm-6">
                                                              <input type="email" class="form-control" name="inputEmail" placeholder="メールアドレス" value="">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label for="inputEmail" class="col-sm-2 col-form-label">権限</label>
                                                          <div class="col-sm-10 col-form-text">
                                                              <div class="radio-inline">
                                                              <div class="radio"> <label class="">
                                                              <input type="radio" name="inputCheck" value="1"> 全体</label>
                                                                  </div>
                                                              </div>
                                                              <div class="radio-inline">
                                                                  <div class="radio"> <label class="">
                                                                  <input type="radio" name="inputCheck" value="2"> 一般</label>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- /.tab-pane -->
                                          </div>
                                      </div>
                                  </div>
                                  <!-- /.col -->
                                  <!-- /.col -->
                              </div>
                              <!-- /.row -->
                          </div>
                          <!--/. container-fluid -->
                      </section>
                  </div>
                  <div class="conversion-area layout-conver-fixed">
                      <div class="conversion-area-inner">
                          <div class="float-left">
                          <button type="submit" id="submit" class="btn btn-confirmation">確認</button>
                          </div>
                          <div class="float-right"><a href="?page=manager.index" class="btn btn-outline-secondary">取消</a></div>
                      </div>
                  </div>
              </form>
            </div>
        </div>
    </body>
</html>
