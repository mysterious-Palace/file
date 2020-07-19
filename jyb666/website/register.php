<?php include "../template/1.php" ?>
<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-7">
                    <div class="ibox">
<?php if($_COOKIE["uid"]!='') { ?>
                        <div class="ibox-title" id="header">
                            <h3>您已登入</h3>
                        </div>
                        <div class="ibox-content">
                            <div class="project-list">
                                <a href="/index.php">返回首页</a> | <a href="login_out.php">登出</a>
                            </div>
                        </div>
<?php } ?>
<?php if($_COOKIE["uid"]=='') { ?>
                        <div class="ibox-title" id="header">
                            <h3>注册</h3>
                        </div>
                        <div class="ibox-content">
                            <div class="project-list">
                                <a href="login.php">已有账号？去登入！</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="project-list">
<form action="register_.php" method="post">
用户名: <input type="text" name="name"><br/>
密码: <input type="password" name="password"><br/>
<?php include "../api/captcha.php" ?><input type="text" name="captcha"><br/>
<input type="submit" value="提交">
</form>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>