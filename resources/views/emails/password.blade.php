<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
<body>
hi, {{$user->email}} : <br/><br/>

    你申请重置{{ env('APP_SITE') }}账号密码,请点击下面链接进行重置操作:<br/>
  <a href="{{ URL('user/reset?token='.$token) }}" target="_blank">{{ URL('user/reset?token='.$token) }}</a>

  <p style="color:#ccc">(该链接在1小时内有效，1小时后需要重新获取) </p>

  <p>如果上面不是链接形式，请将地址复制到您的浏览器(例如IE)的地址栏再访问。</p>
  <p>如果不是你本人注册, 请忽略此邮件</p>
  <p>{{env('APP_SITE')}}</p>
</body>
</html>