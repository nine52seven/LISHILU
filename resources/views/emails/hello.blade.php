<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
<body>
hi, {{$email}} : <br/><br/>

    感谢你注册, 请点击链接激活账号:<br/>
  <a href="{{ URL('user/active?code='.$activation_code) }}" target="_blank">{{ URL('user/active?code='.$activation_code) }}</a>

  <span style="color:#ccc">(该链接在48小时内有效，48小时后需要重新获取) </span><br/>

  <p>如果上面不是链接形式，请将地址复制到您的浏览器(例如IE)的地址栏再访问。</p>
  <p>如果不是你本人注册, 请忽略此邮件</p>
  <p>one2one studio!</p>
</body>
</html>