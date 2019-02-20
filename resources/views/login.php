<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Авторизация</title>
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
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

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

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>ЕСМУ</b> МО МОМИАЦ</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <form id="form" action="../../index2.html" method="post">
                <div class="form-group">
                    <label>Выберите ЛПУ</label>
                    <select id="selectlpu" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Лпу 0</option>
                        <option>Лпу 1</option>
                        <option>Лпу 2</option>
                        <option>Лпу 3</option>
                        <option>Лпу 4</option>
                        <option>Лпу 5</option>
                        <option>Лпу 6</option>
                    </select>
                </div>
                <!--     <p class="login-box-msg">Введите регистрационные данные ЕМИАС</p>        oninput="FullValue()"       -->
                <label>Введите регистрационные данные ЕМИАС</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Логин" id="login">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Пароль" id="pass">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="yes" value="true" class="custom-control-input"> Согласен
                                привязать к ЕСМУ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="social-auth-links text-center">
                    <a href="/test" onclick="form.reset()" id="addtelegram"
                        class="btn btn-social btn-flat btn-twitter disabled"><i class="fa fa-send"></i> Привязать
                        Telegram</a>
                </div>
                <div class="container">
                    <label>Нет аккаунта ЕМИАС?</label>
                    <a href="/registertest" onclick="form.reset()" class="btn btn-social btn-flat"><i
                            class="fa fa-heartbeat"></i> Регистрация</a>
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>
    $(function() {
        $("#selectlpu").change(function() {
            obj["lpu"] = this.value;
            console.log(obj);
        })
        $("input").change(function() {
            // obj[this.id] = this.value;
            if (this.id == "login" || this.id == "pass") {
                obj[this.id] = this.value;
            }

            if (this.id == "yes") {
                obj[this.id] = !(obj.yes);
                test();
            } else {
                test();
            }

        });

        function test() {
            if (obj.login != '' && obj.pass != '' && obj.yes != false) {
                $("#addtelegram").removeClass("disabled");
            } else {
                $("#addtelegram").addClass("disabled");
            };
        };
        var obj = {
            lpu: '',
            login: '',
            pass: '',
            yes: false,
        };
    });
    </script>
</body>

</html>