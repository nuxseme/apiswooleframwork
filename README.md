
# apiswooleframwork
###配置ip和端口
```
在examples/swoole.ini的server配置项
```
###启动|关闭|热重启
```
和swoole一样 php examples/app_server.php start|stop|reload

```

###路由

```
根据请求路径分配到相应的模块相应的controller相应的action

```
####默认路由

```
在configs里的rewrite.php配置默认路由。
当前请求127.0.0.1:9501是转移到apps/controllers/Index.php的index函数
```

###auto_reload
```
框架根据是否调试模式来决定是否每次执行请求时重新加载controller类，也就是auto_reload。
当app_server.php的DEBUG为on时，每次执行请求时都会重新加载对应的controller类，也就是服务每次执行时候都是最新的，不需要reload

```

###公共函数类
```
初衷是想做成一个可以auto_reload的全局函数，但是由于php不支持redeclare同一个函数，所以这里把公共函数做成一个类，只需要在apps/library/function.php（是在apps/configs/apps.php里配置的）里定义，就可以在controller里使用了，是不是很简单^.^。
```

###公共的类
```
只要是在apps/classes里定义的类都可以在controller里使用
```


###数据库
```
和swoole一样在apps/configs/db.php配置，然后就可以使用table()使用查询了。
一些基础的数据库操作和mongo的操作在apps/controllers/Home/Test.php里已经写了示例，后续会增加一些方便的where条件支持
```