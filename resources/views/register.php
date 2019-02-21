<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Регистрация</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="/login"><b>ЕСМУ</b> Регистрация</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Регистрация нового пользователя</p>

            <form id="form" action="../../index.html" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Имя" id="name">
                    <span class=" form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Фамилия" id="surname">
                    <span class=" form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Отчество" id="patronymic">
                    <span class="form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="СНИЛС" id="snils">
                    <span class=" form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Логин" id="login">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div id="adderrorpass" class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Пароль" id="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div id="adderror" class="form-group has-feedback ">
                    <input type="password" class="form-control" placeholder="Повторите пароль" id="pass2">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="yes" value="true" class="custom-control-input"> Я согласен с
                                <a href="#">чем то</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6">
                        <a href="#" id="register"
                            class="btn btn-primary btn-block btn-flat disabled">Зарегистрироваться</a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck
<script src="../../plugins/iCheck/icheck.min.js"></script> -->
    <script>
    $(function() {
        // $('input').iCheck({
        //   checkboxClass: 'icheckbox_square-blue',
        //   radioClass: 'iradio_square-blue',
        //   increaseArea: '20%' /* optional */
        // });
        $("input").change(function() {
            // obj[this.id] = this.value;
            $("#adderrorpass").removeClass("has-error");
            if (this.id != yes) {
                obj[this.id] = this.value;
            }
            if (this.id == yes) {
                obj[this.id] = !(obj.yes);
                test();
            } else {
                test();
            }

            function password(pass1, pass2) {
                if (pass1 == pass2) {
                    $("#adderror").removeClass("has-error");
                    return true;
                } else {
                    $("#adderror").addClass("has-error");
                    return false;
                }
            }

            function test() {
                console.log(obj);
                if (obj.login != '' && obj.password != '' && obj.name != '' && obj.surname != '' && obj
                    .pass2 != '' && obj.yes != false && password(obj.password, obj.pass2) != false) {
                    $("#register").removeClass("disabled");
                } else {
                    $("#register").addClass("disabled");
                };
                if (obj.password != "" && obj.pass2 != "") {
                    password(obj.password, obj.pass2);
                    console.log(obj.password, obj.pass2);
                }
            };
        });


        var obj = {
            name: '',
            surname: '',
            patronymic: '',
            snils: '',
            login: '',
            password: '',
            pass2: '',
            yes: false,
        };
        $("#register").on('click', function(e) {
             $.ajax({
                    type: "POST",
                    data: {
                        name: obj.name,
                        surname: obj.surname,
                        patronymic: obj.patronymic,
                        snils: obj.snils,
                        login: obj.login,
                        password: obj.password,
                    },
                    response: 'text',
                    url: '/testik',
                    success: function(data) {


                        //      $('.results').html(data.statusText);
                    },
                    error: function(msg) {
                        var l = msg.responseJSON;
                        console.log(l)
                        return l
                    }

                }).then((tt) => form.reset(), function(err) {
                    alert(err.responseJSON.password);
                    $("#adderrorpass").addClass("has-error");
                })
                //   .then(function(mes) { 
                //   $("#adderrorpass").addClass("has-error");

                //   }, (err)=>console.log("err"))
                .then($("#adderrorpass").removeClass("has-error"))




        })
    });

    </script>
</body>

</html>