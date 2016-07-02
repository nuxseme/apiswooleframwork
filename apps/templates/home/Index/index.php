<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <style type="text/css">
        body {background-color: #fff; color: #222; font-family: sans-serif;}
        pre {margin: 0; font-family: monospace;}
        a:link {color: #009; text-decoration: none; background-color: #fff;}
        a:hover {text-decoration: underline;}
        table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
        .center {text-align: center;}
        .center table {margin: 1em auto; text-align: left;}
        .center th {text-align: center !important;}
        td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
        h1 {font-size: 150%;}
        h2 {font-size: 125%;}
        .p {text-align: left;}
        .e {background-color: #ccf; width: 300px; font-weight: bold;}
        .h {background-color: #99c; font-weight: bold;}
        .v {background-color: #ddd; max-width: 300px; overflow-x: auto;}
        .v i {color: #999;}
        img {float: right; border: 0;}
        hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
    </style>
    <title>phpinfo()</title><meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" /></head>
<body><div class="center">
    <table>
        <tr class="h"><td>
            <a href="http://www.php.net/"><img border="0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAABACAYAAAA+j9gsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAD4BJREFUeNrsnXtwXFUdx8/dBGihmE21QCrQDY6oZZykon/gY5qizjgM2KQMfzFAOioOA5KEh+j4R9oZH7zT6MAMKrNphZFSQreKHRgZmspLHSCJ2Co6tBtJk7Zps7tJs5t95F5/33PvWU4293F29ybdlPzaM3df2XPv+Zzf4/zOuWc1tkjl+T0HQ3SQC6SBSlD6WKN4rusGm9F1ps/o5mPriOf8dd0YoNfi0nt4ntB1PT4zYwzQkf3kR9/sW4xtpS0CmE0SyPUFUJXFMIxZcM0jAZ4xrKMudQT7963HBF0n6EaUjkP0vI9K9OEHWqJLkNW1s8mC2WgVTwGAqWTafJzTWTKZmQuZ/k1MpAi2+eys6mpWfVaAPzcILu8EVKoCAaYFtPxrAXo8qyNwzZc7gSgzgN9Hx0Ecn3j8xr4lyHOhNrlpaJIgptM5DjCdzrJ0Jmce6bWFkOpqs0MErA4gXIBuAmY53gFmOPCcdaTXCbq+n16PPLXjewMfGcgEttECeouTpk5MplhyKsPBTiXNYyULtwIW7Cx1vlwuJyDLR9L0mQiVPb27fhA54yBbGttMpc1OWwF1cmKaH2FSF7vAjGezOZZJZ9j0dIZlMhnuRiToMO0c+N4X7oksasgEt9XS2KZCHzoem2Ixq5zpAuDTqTR14FMslZyepeEI4Ogj26n0vLj33uiigExgMWRpt+CGCsEePZqoePM738BPTaJzT7CpU0nu1yXpAXCC3VeRkCW4bfJYFZo6dmJyQTW2tvZc1nb719iyZWc5fmZ6Osu6H3uVzit52oBnMll2YizGxk8muFZLAshb/YKtzQdcaO3Y2CQ7eiy+YNGvLN+4+nJetm3bxhKJxJz316xZw1pbW9kLew+w1944XBEaPj6eYCeOx1gqNe07bK1MwIDbKcOFOR49GuePT5fcfOMX2drPXcQ0zf7y2tvbWVdXF/v1k2+yQ4dPVpQ5P0Um/NjoCX6UBMFZR6k+u7qMYVBYDIEqBW7eXAfPZX19zp2/oaGBHysNMGTFinPZik9fWggbI5Omb13zUDeB3lLsdwaK/YPeyAFU0i8Aw9/2Dwyx4SPjFQEYUlf3MTYw4Jx7CIVCbHR0oqIDNMD+FMG+ZE0dO/tsHlvAWnYS6H4qjfMC+Zld/wg92/tuv2WeeYT87j+H2aFDxysGLuSy+o/z49DQkONnmpqa2MjRyoYsZOXKGnb5Z+vZqlUrxUsAvI9At/oK+elnBpoNw+Dai9TekSMxDrgSh0KrSYshTprc2NhoRf1JtlikqirAVl98AddsSavDBDrsC+QdT7/TSoB344tzOZ39+70RbporVerqasyw1MEnC8iV6I9VTDi0uqbmfPFSq2W+gyUHXuEdb3WR5rab5jnD3i/BNMN8ChNaqsTiKa55KmBWX+Tuj0XQdQVF307nhTH0CPls+O0UPbaT5TQG/8qX68u6LpV67LQ6dNknaYgaYyPDx2TzvYGCsnhRkH8b/rsF2GDj1MCInkvxvRjOuCUlipWD/zrKx7ZOwBF0vfSSM2ShyaqAAOC1Nw+zt9/5YNbrN1zfwIdpfgnqebv/A6pnWAn4qlW1HPgHQ6OeoG3N9RO/+StMdDtmV2LxJPfBpQCGfwTgrVu38jFrKaW2tpZt2LCBdXR0sEgkwhv21u9cxQsyW3ZB1+DgoOM54btU6tu8eTPr6elhy5fr7IZNDey+e76e9/fCLcAllHpdKKinpaUlX8+111xB9VzNrYxqUAY/XVVVJYMOekLu2fFGM8VWYQRYiYkU9bD4vPlHFYnH4/zvkb1CgwACHgMoUpdyw3sFXcXUh4YHaNSHDqaxdL5jwVTXBpeXVY9oF3RcUQ+O09NT7Cayfld+4RJlP42gTIq8w66Qf/X4a6FTSSMMDcaE/NhYecMM+MdyG90OAhodWoAGkTUaSZByO5WdiA4GqwStrrM6k5vFKEXQserr63l7oR5V0NBojKctaSZtbneErOtGmFxwkGewjk0UzpCUlJSIRqMcjN8CkHLDqyRByq0PEGBBhDmdj7rQVujAaLfrrlk7xyW5gUaxpEtOmOQDr0e799NYmDVBi0+OT7FcbsaXxEQk8qprEBQMBm0vVKUBRcNjskFE8W71lSt79uzhda1d6w4ZGTUUp3NWAQ3TvW/fPvbVq+rZH/ceULOcF1/I06CY3QJohCCzNJnYdgEwwvpUKuNbUsLNpO3evZtfSGHp7+/nS2pw3LLFPVWLoA5yHQUtXvXFYjH+vU4F5yOibzsRUL38MTqC3XWh8GCWziMcDjt2BNEZUIfoUOpJkwvziT3S5ua8Jj/4yD5E0yERbPkhKv4RF4mhkN1wCMHN2rWfYZ2dnWz9+vXchNkJzBoaQ8Bxqg91wWo41YdO2dzczD+3bt06Rw0rBG4nOF8oi9M0Jsw9OgLqQ124BifLgeuHyVbN0NXUrODBmDWxgRR0pNrUYqMNgDOZGZbNzvgCuc4j0kX+GPJ2//CcMagQmKkbrm/knwVEp++SIXulM1+nhj9AY207QRDnpsnye24WA59DkuPlV/5j+z5eB2hE0W1tbTyQdNJmDpksRzFp2E9csFJAboRvDvz8gZdJgw2ek55KZphfAv+Inu8UdKnmkEUHQK93EjEZ4Rbkifq8JiactEpYAy9Nli2Gm6CjIZPn1qlKFWizleOG3BIwdKNZ+KRMxr9VHKvr1NKLXo2BhlAVFRPq1qlWW6MBr3NWyY2rTGXO5ySJlN9uDuiGsV7XTVPtl8CHYGizf/9+V5Om0hAwVV4ahuU8qia03HP26kyqFkMOTudDzjs/P/QKBUiBYa5ZNucfZJUkCG/0IhpCxYyqBF3lnLOII8q1GKqdStQ3rTh5MStwXX5O/nE1metGQzPHUH6JatA1OppQ8u1eUbpX44tO4GY5vM5Z9sduFgOfG1GwUOK6VFzaSAmrWCSfzGCuuT/O+bi6QwRdTtqXN2keJ4/ejgkJ5HedRARkbkGe6ARulgMWQ+Wc3cDAWohhoZdcue7ifJ7crfP6Me8dELd0Mv8U2begC2k9SHd3t+NnNm7cqKwRbiYUkykqvlZlmOYVLIq5bHRep46JzotOc9BhuFc0ZHGLph+CJIaXr1FZSIfxsdBiN1+LpALEK2By61Aqs0rwtV7DNBU3BMCYixYTLU6C8bM5hBwum0k1mesBpmPtlj+qXFenFsAgCVLon9DYeIxUnmh05HCdBIkCVRP6ussiepVZJZXIutCHwt2I0YGY2Kiz3AIyeG5aLNooVULQBbHy1/nAK2oEtEanheil+GO3aFg0FnwSilNC4q6OrXzywc0XCy1WMaFu/tgrCBLRuWpHuP+n1zqmRXFN0GAnwKgHeW1E1C/86UDJHFKptATZMPZTafbLXHtN3OPixKRC4ev4GwB2Gy6JxhQNEYul+KoKp79RMaGqKzy9ovzt27c7pidVZtYAGJMYOP7u6bdK1mLI1GQ+/ogSZBahwKuLO2jSZt0odw65xrUhAMNrZskLsGiIXz72F3bTjV+ixvtbWcMQr3NWCbog5VyXAIy63PLrqpJITIqHkcD9P7suSiYbG53wvTLKDbr8WBbjZqIF4F3PD3ItRn1eQd5CBF3lCM5RAIYfVp0/dgZ8SvbJ2/l8MmlvNw+8qJTjm+drWQwaAXO9KMuWncc1GBMXKkGeV/pU5ZxFIsTvzovOCu3HvDnOE7NTu3rLr+PE8fy6+IEX9947YM4n/+LbPT/88R8QqoYAuVSDrZLFKcYso2AcLBIeGDPu6h3M+yqvIE/4Y6w4LdUfi+jcr86L75KvC9+PcbVfd1hCi6U7Innwk1/+Q5rcoetsdyBg3s9aCmivBsNFifGfG9zCJUFiztmpEXAbqhMgr6SLWBPu9R1enRfm1ktrC6cVYWH+/Mqg43x6sYK1edaCex7vkRZHZkF+6P6NkXvvi/TpLNBUaqTtdcsoLtIrVTcem2EHDh7m2uq0ikMINBvafOmazzt+BkGMW9CF70DndPsOaJqb38Y1oXjdCYHOiqwbPofrKid6thMAlnxxPtMy6w4K0ubNhq73U5wd5PtVleCTd+50D2CEafLloqixyv0ufMcOGq64CVaMYN2119gfAdPpuscKOxWgCMDwxfm0pvzBhx9siRLoFt3ca7Ikf+x2yygaYzHdTSi7IT9y8fMJ2Lpdhg+ZCPA2+f05d1A88mBLHzQaoA1dL6ohVLJGi+1uQj8XQMyHIMgaGT6eDxuozMkD294LRaB7CPI27DLHQSskSFRvGa30O/zndF4fF0DMhwa//9//iZ2DcILqN7xBHn1oUweNn7eJ3WO9QHvdMlrMsphKEj8XQPgpuHVVMtGOgF0hC9CGTqbb2kHOzXx73aKiuiymEv2x22ICMYYeWSALBQ7RQ0fkoZIr4DnRtS3ohzf1dNzTG9d0PcwMLahZO8UyKTMm38wteratSVtkplq4oWj0PcfrEinPhYg14H+hvdIwCVs1bvb6O+UBMYFGl90d0LRGLRDgoHEUwYnXDniQStocTVUwfPLaKQGA/RoWOmkvtnsaG8unK+PWMKlH5e+Lznp03N27RdO0TkxmYNZKszYBlyfI3RpjsQkmMOo8ls4Wsx1EKcEVAEvayyNoeRzsO2RI+93PNRLesGYtNpBhL4l/prlgZz5ob0mbtZVFhWC301d0EuQgAHPgS7D9hssTHKyMbRfLptF213NBDRuoaqxNA2yh2VUBDnxJ1M1yRW6gOgt2x64gqXK7ht1yOWyW1+wl7bYXvhUygQXgit4KuVDuBGzSbA2bmmtayNzpRgJOGu7XosHFChZzvrGTiUKt5UMiVsmbmtsCb3+2lZmwm3hFNsA/CiYdKyfhYx3Aws8urp8nsJM72naGCG8zYwZMecjk/WHVVRbsMwU6tBVQsWJS2sNDlrgVTO0RE/vzKQtuN2+/85k5PxlUaL75D3BZwKss+JUqSFRAO/F7Eqlkmj+2gbrgYE8rZFluu+P3pOGsyWCG/Y9/GR8exC+vYfc5flxgzRdDGsDEz/8AJsxwQcBUKPCtmKOMFJO8OKMgF8r3b3sKkAm69TN+2OZCAm5ID/g9XPypwX29ufWgudq0urrKes/8nPkxgy1bdg6z/or/SFc2mzV/xs+6HwySTmdYJp2dpaWKEregYrVfn9/B0xkD2U6+e+sOaHqImTfLrycUOIZM1hJwC3oemPXbi/y5PnsrJ136bUa8pxu69BklmANWwDRkgR1wmwVaglyi3Nz6JLQ+ZG5NxQsgNdAhmIfJN7wxgoWg9fxzPQ+c/g9YAIXgeUKCyipJO4uR/wswAOIwB/5IgxvbAAAAAElFTkSuQmCC" alt="PHP logo" /></a><h1 class="p">PHP Version 5.6.22</h1>
        </td></tr>
    </table>
    <table>
        <tr><td class="e">System </td><td class="v">Darwin zhaoyedeMacBook-Air.local 15.5.0 Darwin Kernel Version 15.5.0: Tue Apr 19 18:36:36 PDT 2016; root:xnu-3248.50.21~8/RELEASE_X86_64 x86_64 </td></tr>
        <tr><td class="e">Build Date </td><td class="v">May 27 2016 12:19:32 </td></tr>
        <tr><td class="e">Configure Command </td><td class="v"> &#039;./configure&#039;  &#039;--prefix=/usr/local/Cellar/php56/5.6.22&#039; &#039;--localstatedir=/usr/local/var&#039; &#039;--sysconfdir=/usr/local/etc/php/5.6&#039; &#039;--with-config-file-path=/usr/local/etc/php/5.6&#039; &#039;--with-config-file-scan-dir=/usr/local/etc/php/5.6/conf.d&#039; &#039;--mandir=/usr/local/Cellar/php56/5.6.22/share/man&#039; &#039;--enable-bcmath&#039; &#039;--enable-calendar&#039; &#039;--enable-dba&#039; &#039;--enable-exif&#039; &#039;--enable-ftp&#039; &#039;--enable-gd-native-ttf&#039; &#039;--enable-mbregex&#039; &#039;--enable-mbstring&#039; &#039;--enable-shmop&#039; &#039;--enable-soap&#039; &#039;--enable-sockets&#039; &#039;--enable-sysvmsg&#039; &#039;--enable-sysvsem&#039; &#039;--enable-sysvshm&#039; &#039;--enable-wddx&#039; &#039;--enable-zip&#039; &#039;--with-freetype-dir=/usr/local/opt/freetype&#039; &#039;--with-gd&#039; &#039;--with-gettext=/usr/local/opt/gettext&#039; &#039;--with-iconv-dir=/usr&#039; &#039;--with-icu-dir=/usr/local/opt/icu4c&#039; &#039;--with-jpeg-dir=/usr/local/opt/jpeg&#039; &#039;--with-kerberos=/usr&#039; &#039;--with-libedit&#039; &#039;--with-mhash&#039; &#039;--with-ndbm=/usr&#039; &#039;--with-png-dir=/usr/local/opt/libpng&#039; &#039;--with-xmlrpc&#039; &#039;--with-zlib=/usr&#039; &#039;--with-readline=/usr/local/opt/readline&#039; &#039;--without-gmp&#039; &#039;--without-snmp&#039; &#039;--with-pdo-odbc=unixODBC,/usr/local/opt/unixodbc&#039; &#039;--with-unixODBC=/usr/local/opt/unixodbc&#039; &#039;--with-apxs2=/usr/sbin/apxs&#039; &#039;--libexecdir=/usr/local/Cellar/php56/5.6.22/libexec&#039; &#039;--with-bz2=/usr&#039; &#039;--disable-debug&#039; &#039;--with-openssl=/usr/local/opt/openssl&#039; &#039;--enable-fpm&#039; &#039;--with-fpm-user=_www&#039; &#039;--with-fpm-group=_www&#039; &#039;--with-curl&#039; &#039;--with-xsl=/usr&#039; &#039;--with-ldap&#039; &#039;--with-ldap-sasl=/usr&#039; &#039;--with-mysql-sock=/tmp/mysql.sock&#039; &#039;--with-mysqli=mysqlnd&#039; &#039;--with-mysql=mysqlnd&#039; &#039;--with-pdo-mysql=mysqlnd&#039; &#039;--disable-opcache&#039; &#039;--enable-pcntl&#039; &#039;--without-pear&#039; &#039;--enable-dtrace&#039; &#039;--disable-phpdbg&#039; &#039;--enable-zend-signals&#039; &#039;CC=clang&#039; &#039;CXX=clang++&#039; </td></tr>
        <tr><td class="e">Server API </td><td class="v">FPM/FastCGI </td></tr>
        <tr><td class="e">Virtual Directory Support </td><td class="v">disabled </td></tr>
        <tr><td class="e">Configuration File (php.ini) Path </td><td class="v">/usr/local/etc/php/5.6 </td></tr>
        <tr><td class="e">Loaded Configuration File </td><td class="v">/usr/local/etc/php/5.6/php.ini </td></tr>
        <tr><td class="e">Scan this dir for additional .ini files </td><td class="v">/usr/local/etc/php/5.6/conf.d </td></tr>
        <tr><td class="e">Additional .ini files parsed </td><td class="v">/usr/local/etc/php/5.6/conf.d/ext-amqp.ini,
            /usr/local/etc/php/5.6/conf.d/ext-igbinary.ini,
            /usr/local/etc/php/5.6/conf.d/ext-imagick.ini,
            /usr/local/etc/php/5.6/conf.d/ext-mcrypt.ini,
            /usr/local/etc/php/5.6/conf.d/ext-memcache.ini,
            /usr/local/etc/php/5.6/conf.d/ext-memcached.ini,
            /usr/local/etc/php/5.6/conf.d/ext-mongo.ini,
            /usr/local/etc/php/5.6/conf.d/ext-mongodb.ini,
            /usr/local/etc/php/5.6/conf.d/ext-phalcon.ini,
            /usr/local/etc/php/5.6/conf.d/ext-runkit.ini,
            /usr/local/etc/php/5.6/conf.d/ext-xdebug.ini
        </td></tr>
        <tr><td class="e">PHP API </td><td class="v">20131106 </td></tr>
        <tr><td class="e">PHP Extension </td><td class="v">20131226 </td></tr>
        <tr><td class="e">Zend Extension </td><td class="v">220131226 </td></tr>
        <tr><td class="e">Zend Extension Build </td><td class="v">API220131226,NTS </td></tr>
        <tr><td class="e">PHP Extension Build </td><td class="v">API20131226,NTS </td></tr>
        <tr><td class="e">Debug Build </td><td class="v">no </td></tr>
        <tr><td class="e">Thread Safety </td><td class="v">disabled </td></tr>
        <tr><td class="e">Zend Signal Handling </td><td class="v">enabled </td></tr>
        <tr><td class="e">Zend Memory Manager </td><td class="v">enabled </td></tr>
        <tr><td class="e">Zend Multibyte Support </td><td class="v">provided by mbstring </td></tr>
        <tr><td class="e">IPv6 Support </td><td class="v">enabled </td></tr>
        <tr><td class="e">DTrace Support </td><td class="v">enabled </td></tr>
        <tr><td class="e">Registered PHP Streams</td><td class="v">https, ftps, compress.zlib, compress.bzip2, php, file, glob, data, http, ftp, phar, zip</td></tr>
        <tr><td class="e">Registered Stream Socket Transports</td><td class="v">tcp, udp, unix, udg, ssl, sslv3, tls, tlsv1.0, tlsv1.1, tlsv1.2</td></tr>
        <tr><td class="e">Registered Stream Filters</td><td class="v">zlib.*, bzip2.*, convert.iconv.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk, mcrypt.*, mdecrypt.*</td></tr>
    </table>
    <table>
        <tr class="v"><td>
            <a href="http://www.zend.com/"><img border="0" src="data:image/png;base64,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" alt="Zend logo" /></a>
            This program makes use of the Zend Scripting Language Engine:<br />Zend&nbsp;Engine&nbsp;v2.6.0,&nbsp;Copyright&nbsp;(c)&nbsp;1998-2016&nbsp;Zend&nbsp;Technologies<br /></td></tr>
    </table>
    <hr />
    <h1>Configuration</h1>
    <h2><a name="module_amqp">amqp</a></h2>
    <table>
        <tr class="h"><th>Version</th><th>1.6.1</th></tr>
        <tr class="h"><th>Revision</th><th>release</th></tr>
        <tr class="h"><th>Compiled</th><th>Jan 20 2016 @ 09:03:09</th></tr>
        <tr class="h"><th>AMQP protocol version</th><th>0-9-1</th></tr>
        <tr class="h"><th>librabbitmq version</th><th>0.8.0-pre</th></tr>
        <tr class="h"><th>Default max channels per connection</th><th>256</th></tr>
        <tr class="h"><th>Default max frame size</th><th>131072</th></tr>
        <tr class="h"><th>Default heartbeats interval</th><th>0</th></tr>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">amqp.auto_ack</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">amqp.channel_max</td><td class="v">256</td><td class="v">256</td></tr>
            <tr><td class="e">amqp.connect_timeout</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">amqp.frame_max</td><td class="v">131072</td><td class="v">131072</td></tr>
            <tr><td class="e">amqp.heartbeat</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">amqp.host</td><td class="v">localhost</td><td class="v">localhost</td></tr>
            <tr><td class="e">amqp.login</td><td class="v">guest</td><td class="v">guest</td></tr>
            <tr><td class="e">amqp.password</td><td class="v">guest</td><td class="v">guest</td></tr>
            <tr><td class="e">amqp.port</td><td class="v">5672</td><td class="v">5672</td></tr>
            <tr><td class="e">amqp.prefetch_count</td><td class="v">3</td><td class="v">3</td></tr>
            <tr><td class="e">amqp.read_timeout</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">amqp.timeout</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">amqp.vhost</td><td class="v">/</td><td class="v">/</td></tr>
            <tr><td class="e">amqp.write_timeout</td><td class="v">0</td><td class="v">0</td></tr>
        </table>
        <h2><a name="module_bcmath">bcmath</a></h2>
        <table>
            <tr><td class="e">BCMath support </td><td class="v">enabled </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">bcmath.scale</td><td class="v">0</td><td class="v">0</td></tr>
        </table>
        <h2><a name="module_bz2">bz2</a></h2>
        <table>
            <tr><td class="e">BZip2 Support </td><td class="v">Enabled </td></tr>
            <tr><td class="e">Stream Wrapper support </td><td class="v">compress.bzip2:// </td></tr>
            <tr><td class="e">Stream Filter support </td><td class="v">bzip2.decompress, bzip2.compress </td></tr>
            <tr><td class="e">BZip2 Version </td><td class="v">1.0.6, 6-Sept-2010 </td></tr>
        </table>
        <h2><a name="module_calendar">calendar</a></h2>
        <table>
            <tr><td class="e">Calendar support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_cgi-fcgi">cgi-fcgi</a></h2>
        <table>
            <tr><td class="e">php-fpm </td><td class="v">active </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">cgi.discard_path</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">cgi.fix_pathinfo</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">cgi.force_redirect</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">cgi.nph</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">cgi.redirect_status_env</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">cgi.rfc2616_headers</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">fastcgi.error_header</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">fastcgi.logging</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">fpm.config</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_Core">Core</a></h2>
        <table>
            <tr><td class="e">PHP Version </td><td class="v">5.6.22 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">allow_url_fopen</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">allow_url_include</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">always_populate_raw_post_data</td><td class="v">-1</td><td class="v">-1</td></tr>
            <tr><td class="e">arg_separator.input</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
            <tr><td class="e">arg_separator.output</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
            <tr><td class="e">asp_tags</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">auto_append_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">auto_globals_jit</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">auto_prepend_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">browscap</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">default_charset</td><td class="v">UTF-8</td><td class="v">UTF-8</td></tr>
            <tr><td class="e">default_mimetype</td><td class="v">text/html</td><td class="v">text/html</td></tr>
            <tr><td class="e">disable_classes</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">disable_functions</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">display_errors</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">display_startup_errors</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">doc_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">docref_ext</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">docref_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">enable_dl</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">enable_post_data_reading</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">error_append_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">error_log</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">error_prepend_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">error_reporting</td><td class="v">32767</td><td class="v">32767</td></tr>
            <tr><td class="e">exit_on_timeout</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">expose_php</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">extension_dir</td><td class="v">/usr/local/Cellar/php56/5.6.22/lib/php/extensions/no-debug-non-zts-20131226</td><td class="v">/usr/local/Cellar/php56/5.6.22/lib/php/extensions/no-debug-non-zts-20131226</td></tr>
            <tr><td class="e">file_uploads</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">highlight.comment</td><td class="v"><font style="color: #FF8000">#FF8000</font></td><td class="v"><font style="color: #FF8000">#FF8000</font></td></tr>
            <tr><td class="e">highlight.default</td><td class="v"><font style="color: #0000BB">#0000BB</font></td><td class="v"><font style="color: #0000BB">#0000BB</font></td></tr>
            <tr><td class="e">highlight.html</td><td class="v"><font style="color: #000000">#000000</font></td><td class="v"><font style="color: #000000">#000000</font></td></tr>
            <tr><td class="e">highlight.keyword</td><td class="v"><font style="color: #007700">#007700</font></td><td class="v"><font style="color: #007700">#007700</font></td></tr>
            <tr><td class="e">highlight.string</td><td class="v"><font style="color: #DD0000">#DD0000</font></td><td class="v"><font style="color: #DD0000">#DD0000</font></td></tr>
            <tr><td class="e">html_errors</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">ignore_repeated_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">ignore_repeated_source</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">ignore_user_abort</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">implicit_flush</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">include_path</td><td class="v">.:</td><td class="v">.:</td></tr>
            <tr><td class="e">input_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">log_errors</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">log_errors_max_len</td><td class="v">1024</td><td class="v">1024</td></tr>
            <tr><td class="e">mail.add_x_header</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">mail.force_extra_parameters</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mail.log</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">max_execution_time</td><td class="v">30</td><td class="v">30</td></tr>
            <tr><td class="e">max_file_uploads</td><td class="v">20</td><td class="v">20</td></tr>
            <tr><td class="e">max_input_nesting_level</td><td class="v">64</td><td class="v">64</td></tr>
            <tr><td class="e">max_input_time</td><td class="v">60</td><td class="v">60</td></tr>
            <tr><td class="e">max_input_vars</td><td class="v">1000</td><td class="v">1000</td></tr>
            <tr><td class="e">memory_limit</td><td class="v">128M</td><td class="v">128M</td></tr>
            <tr><td class="e">open_basedir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">output_buffering</td><td class="v">4096</td><td class="v">4096</td></tr>
            <tr><td class="e">output_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">post_max_size</td><td class="v">20M</td><td class="v">20M</td></tr>
            <tr><td class="e">precision</td><td class="v">14</td><td class="v">14</td></tr>
            <tr><td class="e">realpath_cache_size</td><td class="v">16K</td><td class="v">16K</td></tr>
            <tr><td class="e">realpath_cache_ttl</td><td class="v">120</td><td class="v">120</td></tr>
            <tr><td class="e">register_argc_argv</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">report_memleaks</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">report_zend_debug</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">request_order</td><td class="v">GP</td><td class="v">GP</td></tr>
            <tr><td class="e">sendmail_from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">sendmail_path</td><td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i&nbsp;</td><td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i&nbsp;</td></tr>
            <tr><td class="e">serialize_precision</td><td class="v">17</td><td class="v">17</td></tr>
            <tr><td class="e">short_open_tag</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">SMTP</td><td class="v">localhost</td><td class="v">localhost</td></tr>
            <tr><td class="e">smtp_port</td><td class="v">25</td><td class="v">25</td></tr>
            <tr><td class="e">sql.safe_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">sys_temp_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">track_errors</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">unserialize_callback_func</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">upload_max_filesize</td><td class="v">2M</td><td class="v">2M</td></tr>
            <tr><td class="e">upload_tmp_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">user_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">user_ini.cache_ttl</td><td class="v">300</td><td class="v">300</td></tr>
            <tr><td class="e">user_ini.filename</td><td class="v">.user.ini</td><td class="v">.user.ini</td></tr>
            <tr><td class="e">variables_order</td><td class="v">GPCS</td><td class="v">GPCS</td></tr>
            <tr><td class="e">xmlrpc_error_number</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">xmlrpc_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">zend.detect_unicode</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">zend.enable_gc</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">zend.multibyte</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">zend.script_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">zend.signal_check</td><td class="v">Off</td><td class="v">Off</td></tr>
        </table>
        <h2><a name="module_ctype">ctype</a></h2>
        <table>
            <tr><td class="e">ctype functions </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_curl">curl</a></h2>
        <table>
            <tr><td class="e">cURL support </td><td class="v">enabled </td></tr>
            <tr><td class="e">cURL Information </td><td class="v">7.43.0 </td></tr>
            <tr><td class="e">Age </td><td class="v">3 </td></tr>
            <tr><td class="e">Features </td></tr>
            <tr><td class="e">AsynchDNS </td><td class="v">Yes </td></tr>
            <tr><td class="e">CharConv </td><td class="v">No </td></tr>
            <tr><td class="e">Debug </td><td class="v">No </td></tr>
            <tr><td class="e">GSS-Negotiate </td><td class="v">No </td></tr>
            <tr><td class="e">IDN </td><td class="v">No </td></tr>
            <tr><td class="e">IPv6 </td><td class="v">Yes </td></tr>
            <tr><td class="e">krb4 </td><td class="v">No </td></tr>
            <tr><td class="e">Largefile </td><td class="v">Yes </td></tr>
            <tr><td class="e">libz </td><td class="v">Yes </td></tr>
            <tr><td class="e">NTLM </td><td class="v">Yes </td></tr>
            <tr><td class="e">NTLMWB </td><td class="v">Yes </td></tr>
            <tr><td class="e">SPNEGO </td><td class="v">Yes </td></tr>
            <tr><td class="e">SSL </td><td class="v">Yes </td></tr>
            <tr><td class="e">SSPI </td><td class="v">No </td></tr>
            <tr><td class="e">TLS-SRP </td><td class="v">No </td></tr>
            <tr><td class="e">Protocols </td><td class="v">dict, file, ftp, ftps, gopher, http, https, imap, imaps, ldap, ldaps, pop3, pop3s, rtsp, smb, smbs, smtp, smtps, telnet, tftp </td></tr>
            <tr><td class="e">Host </td><td class="v">x86_64-apple-darwin15.0 </td></tr>
            <tr><td class="e">SSL Version </td><td class="v">SecureTransport </td></tr>
            <tr><td class="e">ZLib Version </td><td class="v">1.2.5 </td></tr>
        </table>
        <h2><a name="module_date">date</a></h2>
        <table>
            <tr><td class="e">date/time support </td><td class="v">enabled </td></tr>
            <tr><td class="e">&quot;Olson&quot; Timezone Database Version </td><td class="v">2016.3 </td></tr>
            <tr><td class="e">Timezone Database </td><td class="v">internal </td></tr>
            <tr><td class="e">Default timezone </td><td class="v">Asia/Shanghai </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">date.default_latitude</td><td class="v">31.7667</td><td class="v">31.7667</td></tr>
            <tr><td class="e">date.default_longitude</td><td class="v">35.2333</td><td class="v">35.2333</td></tr>
            <tr><td class="e">date.sunrise_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
            <tr><td class="e">date.sunset_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
            <tr><td class="e">date.timezone</td><td class="v">Asia/Shanghai</td><td class="v">Asia/Shanghai</td></tr>
        </table>
        <h2><a name="module_dba">dba</a></h2>
        <table>
            <tr><td class="e">DBA support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Supported handlers </td><td class="v">ndbm cdb cdb_make inifile flatfile  </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">dba.default_handler</td><td class="v">flatfile</td><td class="v">flatfile</td></tr>
        </table>
        <h2><a name="module_dom">dom</a></h2>
        <table>
            <tr><td class="e">DOM/XML </td><td class="v">enabled </td></tr>
            <tr><td class="e">DOM/XML API Version </td><td class="v">20031129 </td></tr>
            <tr><td class="e">libxml Version </td><td class="v">2.9.2 </td></tr>
            <tr><td class="e">HTML Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">XPath Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">XPointer Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Schema Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">RelaxNG Support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_ereg">ereg</a></h2>
        <table>
            <tr><td class="e">Regex Library </td><td class="v">Bundled library enabled </td></tr>
        </table>
        <h2><a name="module_exif">exif</a></h2>
        <table>
            <tr><td class="e">EXIF Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">EXIF Version </td><td class="v">1.4 $Id: db007ca2e6d0b4513ae77990972997fad8bfe9c9 $ </td></tr>
            <tr><td class="e">Supported EXIF Version </td><td class="v">0220 </td></tr>
            <tr><td class="e">Supported filetypes </td><td class="v">JPEG,TIFF </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">exif.decode_jis_intel</td><td class="v">JIS</td><td class="v">JIS</td></tr>
            <tr><td class="e">exif.decode_jis_motorola</td><td class="v">JIS</td><td class="v">JIS</td></tr>
            <tr><td class="e">exif.decode_unicode_intel</td><td class="v">UCS-2LE</td><td class="v">UCS-2LE</td></tr>
            <tr><td class="e">exif.decode_unicode_motorola</td><td class="v">UCS-2BE</td><td class="v">UCS-2BE</td></tr>
            <tr><td class="e">exif.encode_jis</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">exif.encode_unicode</td><td class="v">ISO-8859-15</td><td class="v">ISO-8859-15</td></tr>
        </table>
        <h2><a name="module_fileinfo">fileinfo</a></h2>
        <table>
            <tr><td class="e">fileinfo support </td><td class="v">enabled </td></tr>
            <tr><td class="e">version </td><td class="v">1.0.5 </td></tr>
            <tr><td class="e">libmagic </td><td class="v">517 </td></tr>
        </table>
        <h2><a name="module_filter">filter</a></h2>
        <table>
            <tr><td class="e">Input Validation and Filtering </td><td class="v">enabled </td></tr>
            <tr><td class="e">Revision </td><td class="v">$Id: 0a967738ca580e8bfdacb06853749743fc79b969 $ </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">filter.default</td><td class="v">unsafe_raw</td><td class="v">unsafe_raw</td></tr>
            <tr><td class="e">filter.default_flags</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_ftp">ftp</a></h2>
        <table>
            <tr><td class="e">FTP support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_gd">gd</a></h2>
        <table>
            <tr><td class="e">GD Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">GD Version </td><td class="v">bundled (2.1.0 compatible) </td></tr>
            <tr><td class="e">FreeType Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">FreeType Linkage </td><td class="v">with freetype </td></tr>
            <tr><td class="e">FreeType Version </td><td class="v">2.6.3 </td></tr>
            <tr><td class="e">GIF Read Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">GIF Create Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">JPEG Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">libJPEG Version </td><td class="v">8 </td></tr>
            <tr><td class="e">PNG Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">libPNG Version </td><td class="v">1.6.21 </td></tr>
            <tr><td class="e">WBMP Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">XBM Support </td><td class="v">enabled </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">gd.jpeg_ignore_warning</td><td class="v">0</td><td class="v">0</td></tr>
        </table>
        <h2><a name="module_gettext">gettext</a></h2>
        <table>
            <tr><td class="e">GetText Support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_hash">hash</a></h2>
        <table>
            <tr><td class="e">hash support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Hashing Engines </td><td class="v">md2 md4 md5 sha1 sha224 sha256 sha384 sha512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b fnv132 fnv1a32 fnv164 fnv1a64 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5  </td></tr>
        </table>
        <h2><a name="module_iconv">iconv</a></h2>
        <table>
            <tr><td class="e">iconv support </td><td class="v">enabled </td></tr>
            <tr><td class="e">iconv implementation </td><td class="v">libiconv </td></tr>
            <tr><td class="e">iconv library version </td><td class="v">1.11 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">iconv.input_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">iconv.internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">iconv.output_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_igbinary">igbinary</a></h2>
        <table>
            <tr><td class="e">igbinary support </td><td class="v">enabled </td></tr>
            <tr><td class="e">igbinary version </td><td class="v">1.2.1 </td></tr>
            <tr><td class="e">igbinary APC serializer ABI </td><td class="v">no </td></tr>
            <tr><td class="e">igbinary session support </td><td class="v">yes </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">igbinary.compact_strings</td><td class="v">On</td><td class="v">On</td></tr>
        </table>
        <h2><a name="module_imagick">imagick</a></h2>
        <table>
            <tr class="h"><th>imagick module</th><th>enabled</th></tr>
            <tr><td class="e">imagick module version </td><td class="v">3.3.0 </td></tr>
            <tr><td class="e">imagick classes </td><td class="v">Imagick, ImagickDraw, ImagickPixel, ImagickPixelIterator, ImagickKernel </td></tr>
            <tr><td class="e">Imagick compiled with ImageMagick version </td><td class="v">ImageMagick 6.9.4-3 Q16 x86_64 2016-05-19 http://www.imagemagick.org </td></tr>
            <tr><td class="e">Imagick using ImageMagick library version </td><td class="v">ImageMagick 6.9.4-7 Q16 x86_64 2016-06-04 http://www.imagemagick.org </td></tr>
            <tr><td class="e">ImageMagick copyright </td><td class="v">Copyright (C) 1999-2016 ImageMagick Studio LLC </td></tr>
            <tr><td class="e">ImageMagick release date </td><td class="v">2016-06-04 </td></tr>
            <tr><td class="e">ImageMagick number of supported formats:  </td><td class="v">220 </td></tr>
            <tr><td class="e">ImageMagick supported formats </td><td class="v">3FR, AAI, AI, ART, ARW, AVI, AVS, BGR, BGRA, BGRO, BMP, BMP2, BMP3, BRF, CAL, CALS, CANVAS, CAPTION, CIN, CIP, CLIP, CMYK, CMYKA, CR2, CRW, CUR, CUT, DATA, DCM, DCR, DCX, DDS, DFONT, DNG, DOT, DPX, DXT1, DXT5, EPDF, EPI, EPS, EPS2, EPS3, EPSF, EPSI, EPT, EPT2, EPT3, ERF, FAX, FILE, FITS, FRACTAL, FTP, FTS, G3, GIF, GIF87, GRADIENT, GRAY, GROUP4, GV, H, HALD, HDR, HISTOGRAM, HRZ, HTM, HTML, HTTP, HTTPS, ICB, ICO, ICON, IIQ, INFO, INLINE, IPL, ISOBRL, ISOBRL6, JNG, JNX, JPE, JPEG, JPG, JPS, JSON, K25, KDC, LABEL, M2V, M4V, MAC, MAGICK, MAP, MASK, MAT, MATTE, MEF, MIFF, MKV, MNG, MONO, MOV, MP4, MPC, MPEG, MPG, MRW, MSL, MSVG, MTV, MVG, NEF, NRW, NULL, ORF, OTB, OTF, PAL, PALM, PAM, PANGO, PATTERN, PBM, PCD, PCDS, PCL, PCT, PCX, PDB, PDF, PDFA, PEF, PES, PFA, PFB, PFM, PGM, PICON, PICT, PIX, PJPEG, PLASMA, PNG, PNG00, PNG24, PNG32, PNG48, PNG64, PNG8, PNM, PPM, PREVIEW, PS, PS2, PS3, PSB, PSD, PTIF, PWP, RADIAL-GRADIENT, RAF, RAS, RAW, RGB, RGBA, RGBO, RGF, RLA, RLE, RMF, RW2, SCR, SCT, SFW, SGI, SHTML, SIX, SIXEL, SPARSE-COLOR, SR2, SRF, STEGANO, SUN, SVG, SVGZ, TEXT, TGA, THUMBNAIL, TIFF, TIFF64, TILE, TIM, TTC, TTF, TXT, UBRL, UBRL6, UIL, UYVY, VDA, VICAR, VID, VIFF, VIPS, VST, WBMP, WMV, WPG, X3F, XBM, XC, XCF, XPM, XPS, XV, YCbCr, YCbCrA, YUV </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">imagick.locale_fix</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">imagick.progress_monitor</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">imagick.skip_version_check</td><td class="v">0</td><td class="v">0</td></tr>
        </table>
        <h2><a name="module_json">json</a></h2>
        <table>
            <tr><td class="e">json support </td><td class="v">enabled </td></tr>
            <tr><td class="e">json version </td><td class="v">1.2.1 </td></tr>
        </table>
        <h2><a name="module_ldap">ldap</a></h2>
        <table>
            <tr><td class="e">LDAP Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">RCS Version </td><td class="v">$Id: 5ffc17b96f6abc34bc3607bc1131ea7a79586613 $ </td></tr>
            <tr><td class="e">Total Links </td><td class="v">0/unlimited </td></tr>
            <tr><td class="e">API Version </td><td class="v">3001 </td></tr>
            <tr><td class="e">Vendor Name </td><td class="v">OpenLDAP </td></tr>
            <tr><td class="e">Vendor Version </td><td class="v">20428 </td></tr>
            <tr><td class="e">SASL Support </td><td class="v">Enabled </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">ldap.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
        </table>
        <h2><a name="module_libxml">libxml</a></h2>
        <table>
            <tr><td class="e">libXML support </td><td class="v">active </td></tr>
            <tr><td class="e">libXML Compiled Version </td><td class="v">2.9.2 </td></tr>
            <tr><td class="e">libXML Loaded Version </td><td class="v">20902 </td></tr>
            <tr><td class="e">libXML streams </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_mbstring">mbstring</a></h2>
        <table>
            <tr><td class="e">Multibyte Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Multibyte string engine </td><td class="v">libmbfl </td></tr>
            <tr><td class="e">HTTP input encoding translation </td><td class="v">disabled </td></tr>
            <tr><td class="e">libmbfl version </td><td class="v">1.3.2 </td></tr>
        </table>
        <table>
            <tr class="h"><th>mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.</th></tr>
        </table>
        <table>
            <tr><td class="e">Multibyte (japanese) regex support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Multibyte regex (oniguruma) backtrack check </td><td class="v">On </td></tr>
            <tr><td class="e">Multibyte regex (oniguruma) version </td><td class="v">5.9.5 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">mbstring.detect_order</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mbstring.encoding_translation</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">mbstring.func_overload</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">mbstring.http_input</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mbstring.http_output</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mbstring.http_output_conv_mimetypes</td><td class="v">^(text/|application/xhtml\+xml)</td><td class="v">^(text/|application/xhtml\+xml)</td></tr>
            <tr><td class="e">mbstring.internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mbstring.language</td><td class="v">neutral</td><td class="v">neutral</td></tr>
            <tr><td class="e">mbstring.strict_detection</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">mbstring.substitute_character</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_mcrypt">mcrypt</a></h2>
        <table>
            <tr class="h"><th>mcrypt support</th><th>enabled</th></tr>
            <tr class="h"><th>mcrypt_filter support</th><th>enabled</th></tr>
            <tr><td class="e">Version </td><td class="v">2.5.8 </td></tr>
            <tr><td class="e">Api No </td><td class="v">20021217 </td></tr>
            <tr><td class="e">Supported ciphers </td><td class="v">cast-128 gost rijndael-128 twofish arcfour cast-256 loki97 rijndael-192 saferplus wake blowfish-compat des rijndael-256 serpent xtea blowfish enigma rc2 tripledes  </td></tr>
            <tr><td class="e">Supported modes </td><td class="v">cbc cfb ctr ecb ncfb nofb ofb stream  </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">mcrypt.algorithms_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mcrypt.modes_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_memcache">memcache</a></h2>
        <table>
            <tr class="h"><th>memcache support</th><th>enabled</th></tr>
            <tr><td class="e">Active persistent connections </td><td class="v">0 </td></tr>
            <tr><td class="e">Version </td><td class="v">2.2.7 </td></tr>
            <tr><td class="e">Revision </td><td class="v">$Revision: 327750 $ </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">memcache.allow_failover</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">memcache.chunk_size</td><td class="v">8192</td><td class="v">8192</td></tr>
            <tr><td class="e">memcache.default_port</td><td class="v">11211</td><td class="v">11211</td></tr>
            <tr><td class="e">memcache.default_timeout_ms</td><td class="v">1000</td><td class="v">1000</td></tr>
            <tr><td class="e">memcache.hash_function</td><td class="v">crc32</td><td class="v">crc32</td></tr>
            <tr><td class="e">memcache.hash_strategy</td><td class="v">standard</td><td class="v">standard</td></tr>
            <tr><td class="e">memcache.max_failover_attempts</td><td class="v">20</td><td class="v">20</td></tr>
        </table>
        <h2><a name="module_memcached">memcached</a></h2>
        <table>
            <tr class="h"><th>memcached support</th><th>enabled</th></tr>
            <tr><td class="e">Version </td><td class="v">2.2.0 </td></tr>
            <tr><td class="e">libmemcached version </td><td class="v">1.0.18 </td></tr>
            <tr><td class="e">SASL support </td><td class="v">yes </td></tr>
            <tr><td class="e">Session support </td><td class="v">yes </td></tr>
            <tr><td class="e">igbinary support </td><td class="v">yes </td></tr>
            <tr><td class="e">json support </td><td class="v">no </td></tr>
            <tr><td class="e">msgpack support </td><td class="v">no </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">memcached.compression_factor</td><td class="v">1.3</td><td class="v">1.3</td></tr>
            <tr><td class="e">memcached.compression_threshold</td><td class="v">2000</td><td class="v">2000</td></tr>
            <tr><td class="e">memcached.compression_type</td><td class="v">fastlz</td><td class="v">fastlz</td></tr>
            <tr><td class="e">memcached.serializer</td><td class="v">igbinary</td><td class="v">igbinary</td></tr>
            <tr><td class="e">memcached.sess_binary</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">memcached.sess_connect_timeout</td><td class="v">1000</td><td class="v">1000</td></tr>
            <tr><td class="e">memcached.sess_consistent_hash</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">memcached.sess_lock_expire</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">memcached.sess_lock_max_wait</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">memcached.sess_lock_wait</td><td class="v">150000</td><td class="v">150000</td></tr>
            <tr><td class="e">memcached.sess_locking</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">memcached.sess_number_of_replicas</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">memcached.sess_prefix</td><td class="v">memc.sess.key.</td><td class="v">memc.sess.key.</td></tr>
            <tr><td class="e">memcached.sess_randomize_replica_read</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">memcached.sess_remove_failed</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">memcached.sess_sasl_password</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">memcached.sess_sasl_username</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">memcached.store_retry_count</td><td class="v">2</td><td class="v">2</td></tr>
            <tr><td class="e">memcached.use_sasl</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_mhash">mhash</a></h2>
        <table>
            <tr><td class="e">MHASH support </td><td class="v">Enabled </td></tr>
            <tr><td class="e">MHASH API Version </td><td class="v">Emulated Support </td></tr>
        </table>
        <h2><a name="module_mongo">mongo</a></h2>
        <table>
            <tr class="h"><th>MongoDB Support</th><th>enabled</th></tr>
            <tr><td class="e">Version </td><td class="v">1.6.12 </td></tr>
            <tr><td class="e">Streams Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">SSL Support </td><td class="v">enabled </td></tr>
            <tr class="h"><th colspan="2">Supported Authentication Mechanisms</th></tr>
            <tr><td class="e">MONGODB-CR </td><td class="v">enabled </td></tr>
            <tr><td class="e">SCRAM-SHA-1 </td><td class="v">enabled </td></tr>
            <tr><td class="e">MONGODB-X509 </td><td class="v">enabled </td></tr>
            <tr><td class="e">GSSAPI (Kerberos) </td><td class="v">disabled </td></tr>
            <tr><td class="e">PLAIN </td><td class="v">disabled </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">mongo.allow_empty_keys</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">mongo.chunk_size</td><td class="v">261120</td><td class="v">261120</td></tr>
            <tr><td class="e">mongo.cmd</td><td class="v">$</td><td class="v">$</td></tr>
            <tr><td class="e">mongo.default_host</td><td class="v">localhost</td><td class="v">localhost</td></tr>
            <tr><td class="e">mongo.default_port</td><td class="v">27017</td><td class="v">27017</td></tr>
            <tr><td class="e">mongo.is_master_interval</td><td class="v">15</td><td class="v">15</td></tr>
            <tr><td class="e">mongo.long_as_object</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">mongo.native_long</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">mongo.ping_interval</td><td class="v">5</td><td class="v">5</td></tr>
        </table>
        <h2><a name="module_mongodb">mongodb</a></h2>
        <table>
            <tr class="h"><th>mongodb support</th><th>enabled</th></tr>
            <tr><td class="e">mongodb version </td><td class="v">1.1.2 </td></tr>
            <tr><td class="e">mongodb stability </td><td class="v">stable </td></tr>
            <tr><td class="e">libmongoc version </td><td class="v">1.3.1-dev </td></tr>
            <tr><td class="e">libbson version </td><td class="v">1.3.0 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">mongodb.debug</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_mysql">mysql</a></h2>
        <table>
            <tr class="h"><th>MySQL Support</th><th>enabled</th></tr>
            <tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
            <tr><td class="e">Active Links </td><td class="v">0 </td></tr>
            <tr><td class="e">Client API version </td><td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">mysql.allow_local_infile</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">mysql.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">mysql.connect_timeout</td><td class="v">60</td><td class="v">60</td></tr>
            <tr><td class="e">mysql.default_host</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mysql.default_password</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mysql.default_port</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mysql.default_socket</td><td class="v">/tmp/mysql.sock</td><td class="v">/tmp/mysql.sock</td></tr>
            <tr><td class="e">mysql.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mysql.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
            <tr><td class="e">mysql.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
            <tr><td class="e">mysql.trace_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
        </table>
        <h2><a name="module_mysqli">mysqli</a></h2>
        <table>
            <tr class="h"><th>MysqlI Support</th><th>enabled</th></tr>
            <tr><td class="e">Client API library version </td><td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td></tr>
            <tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
            <tr><td class="e">Inactive Persistent Links </td><td class="v">0 </td></tr>
            <tr><td class="e">Active Links </td><td class="v">0 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">mysqli.allow_local_infile</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">mysqli.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">mysqli.default_host</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mysqli.default_port</td><td class="v">3306</td><td class="v">3306</td></tr>
            <tr><td class="e">mysqli.default_pw</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mysqli.default_socket</td><td class="v">/tmp/mysql.sock</td><td class="v">/tmp/mysql.sock</td></tr>
            <tr><td class="e">mysqli.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">mysqli.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
            <tr><td class="e">mysqli.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
            <tr><td class="e">mysqli.reconnect</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">mysqli.rollback_on_cached_plink</td><td class="v">Off</td><td class="v">Off</td></tr>
        </table>
        <h2><a name="module_mysqlnd">mysqlnd</a></h2>
        <table>
            <tr class="h"><th>mysqlnd</th><th>enabled</th></tr>
            <tr><td class="e">Version </td><td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td></tr>
            <tr><td class="e">Compression </td><td class="v">supported </td></tr>
            <tr><td class="e">core SSL </td><td class="v">supported </td></tr>
            <tr><td class="e">extended SSL </td><td class="v">supported </td></tr>
            <tr><td class="e">Command buffer size </td><td class="v">4096 </td></tr>
            <tr><td class="e">Read buffer size </td><td class="v">32768 </td></tr>
            <tr><td class="e">Read timeout </td><td class="v">31536000 </td></tr>
            <tr><td class="e">Collecting statistics </td><td class="v">Yes </td></tr>
            <tr><td class="e">Collecting memory statistics </td><td class="v">Yes </td></tr>
            <tr><td class="e">Tracing </td><td class="v">n/a </td></tr>
            <tr><td class="e">Loaded plugins </td><td class="v">mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_sha256_password </td></tr>
            <tr><td class="e">API Extensions </td><td class="v">mysqli,pdo_mysql,mysql </td></tr>
        </table>
        <table>
            <tr class="h"><th>mysqlnd statistics</th><th> </th></tr>
            <tr><td class="e">bytes_sent </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_sent </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received </td><td class="v">0 </td></tr>
            <tr><td class="e">protocol_overhead_in </td><td class="v">0 </td></tr>
            <tr><td class="e">protocol_overhead_out </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_ok_packet </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_eof_packet </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_rset_header_packet </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_rset_field_meta_packet </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_rset_row_packet </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_prepare_response_packet </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_change_user_packet </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_sent_command </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received_ok </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received_eof </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received_rset_header </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received_rset_field_meta </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received_rset_row </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received_prepare_response </td><td class="v">0 </td></tr>
            <tr><td class="e">packets_received_change_user </td><td class="v">0 </td></tr>
            <tr><td class="e">result_set_queries </td><td class="v">0 </td></tr>
            <tr><td class="e">non_result_set_queries </td><td class="v">0 </td></tr>
            <tr><td class="e">no_index_used </td><td class="v">0 </td></tr>
            <tr><td class="e">bad_index_used </td><td class="v">0 </td></tr>
            <tr><td class="e">slow_queries </td><td class="v">0 </td></tr>
            <tr><td class="e">buffered_sets </td><td class="v">0 </td></tr>
            <tr><td class="e">unbuffered_sets </td><td class="v">0 </td></tr>
            <tr><td class="e">ps_buffered_sets </td><td class="v">0 </td></tr>
            <tr><td class="e">ps_unbuffered_sets </td><td class="v">0 </td></tr>
            <tr><td class="e">flushed_normal_sets </td><td class="v">0 </td></tr>
            <tr><td class="e">flushed_ps_sets </td><td class="v">0 </td></tr>
            <tr><td class="e">ps_prepared_never_executed </td><td class="v">0 </td></tr>
            <tr><td class="e">ps_prepared_once_executed </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_fetched_from_server_normal </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_fetched_from_server_ps </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_buffered_from_client_normal </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_buffered_from_client_ps </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_fetched_from_client_normal_buffered </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_fetched_from_client_normal_unbuffered </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_fetched_from_client_ps_buffered </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_fetched_from_client_ps_unbuffered </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_fetched_from_client_ps_cursor </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_affected_normal </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_affected_ps </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_skipped_normal </td><td class="v">0 </td></tr>
            <tr><td class="e">rows_skipped_ps </td><td class="v">0 </td></tr>
            <tr><td class="e">copy_on_write_saved </td><td class="v">0 </td></tr>
            <tr><td class="e">copy_on_write_performed </td><td class="v">0 </td></tr>
            <tr><td class="e">command_buffer_too_small </td><td class="v">0 </td></tr>
            <tr><td class="e">connect_success </td><td class="v">0 </td></tr>
            <tr><td class="e">connect_failure </td><td class="v">0 </td></tr>
            <tr><td class="e">connection_reused </td><td class="v">0 </td></tr>
            <tr><td class="e">reconnect </td><td class="v">0 </td></tr>
            <tr><td class="e">pconnect_success </td><td class="v">0 </td></tr>
            <tr><td class="e">active_connections </td><td class="v">0 </td></tr>
            <tr><td class="e">active_persistent_connections </td><td class="v">0 </td></tr>
            <tr><td class="e">explicit_close </td><td class="v">0 </td></tr>
            <tr><td class="e">implicit_close </td><td class="v">0 </td></tr>
            <tr><td class="e">disconnect_close </td><td class="v">0 </td></tr>
            <tr><td class="e">in_middle_of_command_close </td><td class="v">0 </td></tr>
            <tr><td class="e">explicit_free_result </td><td class="v">0 </td></tr>
            <tr><td class="e">implicit_free_result </td><td class="v">0 </td></tr>
            <tr><td class="e">explicit_stmt_close </td><td class="v">0 </td></tr>
            <tr><td class="e">implicit_stmt_close </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_emalloc_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_emalloc_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_ecalloc_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_ecalloc_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_erealloc_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_erealloc_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_efree_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_efree_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_malloc_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_malloc_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_calloc_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_calloc_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_realloc_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_realloc_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_free_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_free_amount </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_estrndup_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_strndup_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_estndup_count </td><td class="v">0 </td></tr>
            <tr><td class="e">mem_strdup_count </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_null </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_bit </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_tinyint </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_short </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_int24 </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_int </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_bigint </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_decimal </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_float </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_double </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_date </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_year </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_time </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_datetime </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_timestamp </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_string </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_blob </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_enum </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_set </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_geometry </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_text_fetched_other </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_null </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_bit </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_tinyint </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_short </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_int24 </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_int </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_bigint </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_decimal </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_float </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_double </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_date </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_year </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_time </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_datetime </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_timestamp </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_string </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_json </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_blob </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_enum </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_set </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_geometry </td><td class="v">0 </td></tr>
            <tr><td class="e">proto_binary_fetched_other </td><td class="v">0 </td></tr>
            <tr><td class="e">init_command_executed_count </td><td class="v">0 </td></tr>
            <tr><td class="e">init_command_failed_count </td><td class="v">0 </td></tr>
            <tr><td class="e">com_quit </td><td class="v">0 </td></tr>
            <tr><td class="e">com_init_db </td><td class="v">0 </td></tr>
            <tr><td class="e">com_query </td><td class="v">0 </td></tr>
            <tr><td class="e">com_field_list </td><td class="v">0 </td></tr>
            <tr><td class="e">com_create_db </td><td class="v">0 </td></tr>
            <tr><td class="e">com_drop_db </td><td class="v">0 </td></tr>
            <tr><td class="e">com_refresh </td><td class="v">0 </td></tr>
            <tr><td class="e">com_shutdown </td><td class="v">0 </td></tr>
            <tr><td class="e">com_statistics </td><td class="v">0 </td></tr>
            <tr><td class="e">com_process_info </td><td class="v">0 </td></tr>
            <tr><td class="e">com_connect </td><td class="v">0 </td></tr>
            <tr><td class="e">com_process_kill </td><td class="v">0 </td></tr>
            <tr><td class="e">com_debug </td><td class="v">0 </td></tr>
            <tr><td class="e">com_ping </td><td class="v">0 </td></tr>
            <tr><td class="e">com_time </td><td class="v">0 </td></tr>
            <tr><td class="e">com_delayed_insert </td><td class="v">0 </td></tr>
            <tr><td class="e">com_change_user </td><td class="v">0 </td></tr>
            <tr><td class="e">com_binlog_dump </td><td class="v">0 </td></tr>
            <tr><td class="e">com_table_dump </td><td class="v">0 </td></tr>
            <tr><td class="e">com_connect_out </td><td class="v">0 </td></tr>
            <tr><td class="e">com_register_slave </td><td class="v">0 </td></tr>
            <tr><td class="e">com_stmt_prepare </td><td class="v">0 </td></tr>
            <tr><td class="e">com_stmt_execute </td><td class="v">0 </td></tr>
            <tr><td class="e">com_stmt_send_long_data </td><td class="v">0 </td></tr>
            <tr><td class="e">com_stmt_close </td><td class="v">0 </td></tr>
            <tr><td class="e">com_stmt_reset </td><td class="v">0 </td></tr>
            <tr><td class="e">com_stmt_set_option </td><td class="v">0 </td></tr>
            <tr><td class="e">com_stmt_fetch </td><td class="v">0 </td></tr>
            <tr><td class="e">com_deamon </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_real_data_normal </td><td class="v">0 </td></tr>
            <tr><td class="e">bytes_received_real_data_ps </td><td class="v">0 </td></tr>
        </table>
        <h2><a name="module_odbc">odbc</a></h2>
        <table>
            <tr class="h"><th>ODBC Support</th><th>enabled</th></tr>
            <tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
            <tr><td class="e">Active Links </td><td class="v">0 </td></tr>
            <tr><td class="e">ODBC library </td><td class="v">unixODBC </td></tr>
            <tr><td class="e">ODBC_INCLUDE </td><td class="v">-I/usr/local/opt/unixodbc/include </td></tr>
            <tr><td class="e">ODBC_LFLAGS </td><td class="v">-L/usr/local/opt/unixodbc/lib </td></tr>
            <tr><td class="e">ODBC_LIBS </td><td class="v">-lodbc </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">odbc.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">odbc.check_persistent</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">odbc.default_cursortype</td><td class="v">Static cursor</td><td class="v">Static cursor</td></tr>
            <tr><td class="e">odbc.default_db</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">odbc.default_pw</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">odbc.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">odbc.defaultbinmode</td><td class="v">return as is</td><td class="v">return as is</td></tr>
            <tr><td class="e">odbc.defaultlrl</td><td class="v">return up to 4096 bytes</td><td class="v">return up to 4096 bytes</td></tr>
            <tr><td class="e">odbc.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
            <tr><td class="e">odbc.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
        </table>
        <h2><a name="module_openssl">openssl</a></h2>
        <table>
            <tr><td class="e">OpenSSL support </td><td class="v">enabled </td></tr>
            <tr><td class="e">OpenSSL Library Version </td><td class="v">OpenSSL 1.0.2h  3 May 2016 </td></tr>
            <tr><td class="e">OpenSSL Header Version </td><td class="v">OpenSSL 1.0.2h  3 May 2016 </td></tr>
            <tr><td class="e">Openssl default config </td><td class="v">/usr/local/etc/openssl/openssl.cnf </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">openssl.cafile</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">openssl.capath</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_pcntl">pcntl</a></h2>
        <table>
            <tr class="h"><th>pcntl support</th><th>enabled</th></tr>
        </table>
        <h2><a name="module_pcre">pcre</a></h2>
        <table>
            <tr><td class="e">PCRE (Perl Compatible Regular Expressions) Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">PCRE Library Version </td><td class="v">8.38 2015-11-23 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">pcre.backtrack_limit</td><td class="v">1000000</td><td class="v">1000000</td></tr>
            <tr><td class="e">pcre.recursion_limit</td><td class="v">100000</td><td class="v">100000</td></tr>
        </table>
        <h2><a name="module_PDO">PDO</a></h2>
        <table>
            <tr class="h"><th>PDO support</th><th>enabled</th></tr>
            <tr><td class="e">PDO drivers </td><td class="v">mysql, odbc, sqlite </td></tr>
        </table>
        <h2><a name="module_pdo_mysql">pdo_mysql</a></h2>
        <table>
            <tr class="h"><th>PDO Driver for MySQL</th><th>enabled</th></tr>
            <tr><td class="e">Client API version </td><td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">pdo_mysql.default_socket</td><td class="v">/tmp/mysql.sock</td><td class="v">/tmp/mysql.sock</td></tr>
        </table>
        <h2><a name="module_PDO_ODBC">PDO_ODBC</a></h2>
        <table>
            <tr class="h"><th>PDO Driver for ODBC (unixODBC)</th><th>enabled</th></tr>
            <tr><td class="e">ODBC Connection Pooling </td><td class="v">Enabled, strict matching </td></tr>
        </table>
        <h2><a name="module_pdo_sqlite">pdo_sqlite</a></h2>
        <table>
            <tr class="h"><th>PDO Driver for SQLite 3.x</th><th>enabled</th></tr>
            <tr><td class="e">SQLite Library </td><td class="v">3.8.10.2 </td></tr>
        </table>
        <h2><a name="module_phalcon">phalcon</a></h2>
        <table>
            <tr class="v"><td>
                Web framework delivered as a C-extension for PHP</td></tr>
        </table>
        <table>
            <tr class="h"><th>phalcon</th><th>enabled</th></tr>
            <tr><td class="e">Author </td><td class="v">Phalcon Team and contributors </td></tr>
            <tr><td class="e">Version </td><td class="v">2.0.9 </td></tr>
            <tr><td class="e">Build Date </td><td class="v">Dec  7 2015 01:24:36 </td></tr>
            <tr><td class="e">Powered by Zephir </td><td class="v">Version 0.8.0a </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">phalcon.db.escape_identifiers</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">phalcon.db.force_casting</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">phalcon.orm.cast_on_hydrate</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">phalcon.orm.column_renaming</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">phalcon.orm.enable_implicit_joins</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">phalcon.orm.enable_literals</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">phalcon.orm.events</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">phalcon.orm.exception_on_failed_save</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">phalcon.orm.ignore_unknown_columns</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">phalcon.orm.late_state_binding</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">phalcon.orm.not_null_validations</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">phalcon.orm.virtual_foreign_keys</td><td class="v">On</td><td class="v">On</td></tr>
        </table>
        <h2><a name="module_Phar">Phar</a></h2>
        <table>
            <tr class="h"><th>Phar: PHP Archive support</th><th>enabled</th></tr>
            <tr><td class="e">Phar EXT version </td><td class="v">2.0.2 </td></tr>
            <tr><td class="e">Phar API version </td><td class="v">1.1.1 </td></tr>
            <tr><td class="e">SVN revision </td><td class="v">$Id: 14b80e175ed4d5bf11c890e1f30ea8225935b16c $ </td></tr>
            <tr><td class="e">Phar-based phar archives </td><td class="v">enabled </td></tr>
            <tr><td class="e">Tar-based phar archives </td><td class="v">enabled </td></tr>
            <tr><td class="e">ZIP-based phar archives </td><td class="v">enabled </td></tr>
            <tr><td class="e">gzip compression </td><td class="v">enabled </td></tr>
            <tr><td class="e">bzip2 compression </td><td class="v">enabled </td></tr>
            <tr><td class="e">OpenSSL support </td><td class="v">enabled </td></tr>
        </table>
        <table>
            <tr class="v"><td>
                Phar based on pear/PHP_Archive, original concept by Davey Shafik.<br />Phar fully realized by Gregory Beaver and Marcus Boerger.<br />Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.</td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">phar.cache_list</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">phar.readonly</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">phar.require_hash</td><td class="v">On</td><td class="v">On</td></tr>
        </table>
        <h2><a name="module_posix">posix</a></h2>
        <table>
            <tr><td class="e">Revision </td><td class="v">$Id: 5f4acc20904b1406142f2a0ede068db048c77e77 $ </td></tr>
        </table>
        <h2><a name="module_readline">readline</a></h2>
        <table>
            <tr class="h"><th>Readline Support</th><th>enabled</th></tr>
            <tr><td class="e">Readline library </td><td class="v">EditLine wrapper </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">cli.pager</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">cli.prompt</td><td class="v">\b&nbsp;\&gt;&nbsp;</td><td class="v">\b&nbsp;\&gt;&nbsp;</td></tr>
        </table>
        <h2><a name="module_Reflection">Reflection</a></h2>
        <table>
            <tr class="h"><th>Reflection</th><th>enabled</th></tr>
            <tr><td class="e">Version </td><td class="v">$Id: fbcf7a77ca8e3d4cd7501de8025235b947b8240f $ </td></tr>
        </table>
        <h2><a name="module_runkit">runkit</a></h2>
        <table>
            <tr class="h"><th>runkit support</th><th>enabled</th></tr>
            <tr class="h"><th>version</th><th>1.0.4-dev</th></tr>
            <tr class="h"><th>Custom Superglobal support</th><th>enabled</th></tr>
            <tr class="h"><th>Sandbox Support</th><th>disable or unavailable</th></tr>
            <tr class="h"><th>Runtime Manipulation</th><th>enabled</th></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">runkit.internal_override</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">runkit.superglobal</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_session">session</a></h2>
        <table>
            <tr><td class="e">Session Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Registered save handlers </td><td class="v">files user memcache memcached  </td></tr>
            <tr><td class="e">Registered serializer handlers </td><td class="v">php_serialize php php_binary wddx igbinary  </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">session.auto_start</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">session.cache_expire</td><td class="v">180</td><td class="v">180</td></tr>
            <tr><td class="e">session.cache_limiter</td><td class="v">nocache</td><td class="v">nocache</td></tr>
            <tr><td class="e">session.cookie_domain</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">session.cookie_httponly</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">session.cookie_lifetime</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">session.cookie_path</td><td class="v">/</td><td class="v">/</td></tr>
            <tr><td class="e">session.cookie_secure</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">session.entropy_file</td><td class="v">/dev/urandom</td><td class="v">/dev/urandom</td></tr>
            <tr><td class="e">session.entropy_length</td><td class="v">32</td><td class="v">32</td></tr>
            <tr><td class="e">session.gc_divisor</td><td class="v">1000</td><td class="v">1000</td></tr>
            <tr><td class="e">session.gc_maxlifetime</td><td class="v">1440</td><td class="v">1440</td></tr>
            <tr><td class="e">session.gc_probability</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">session.hash_bits_per_character</td><td class="v">5</td><td class="v">5</td></tr>
            <tr><td class="e">session.hash_function</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">session.name</td><td class="v">PHPSESSID</td><td class="v">PHPSESSID</td></tr>
            <tr><td class="e">session.referer_check</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">session.save_handler</td><td class="v">files</td><td class="v">files</td></tr>
            <tr><td class="e">session.save_path</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">session.serialize_handler</td><td class="v">php</td><td class="v">php</td></tr>
            <tr><td class="e">session.upload_progress.cleanup</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">session.upload_progress.enabled</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">session.upload_progress.freq</td><td class="v">1%</td><td class="v">1%</td></tr>
            <tr><td class="e">session.upload_progress.min_freq</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">session.upload_progress.name</td><td class="v">PHP_SESSION_UPLOAD_PROGRESS</td><td class="v">PHP_SESSION_UPLOAD_PROGRESS</td></tr>
            <tr><td class="e">session.upload_progress.prefix</td><td class="v">upload_progress_</td><td class="v">upload_progress_</td></tr>
            <tr><td class="e">session.use_cookies</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">session.use_only_cookies</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">session.use_strict_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">session.use_trans_sid</td><td class="v">0</td><td class="v">0</td></tr>
        </table>
        <h2><a name="module_shmop">shmop</a></h2>
        <table>
            <tr><td class="e">shmop support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_SimpleXML">SimpleXML</a></h2>
        <table>
            <tr class="h"><th>Simplexml support</th><th>enabled</th></tr>
            <tr><td class="e">Revision </td><td class="v">$Id: 07fc6546e896094aed794aea4691f0151774d955 $ </td></tr>
            <tr><td class="e">Schema support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_soap">soap</a></h2>
        <table>
            <tr><td class="e">Soap Client </td><td class="v">enabled </td></tr>
            <tr><td class="e">Soap Server </td><td class="v">enabled </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">soap.wsdl_cache</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">soap.wsdl_cache_dir</td><td class="v">/tmp</td><td class="v">/tmp</td></tr>
            <tr><td class="e">soap.wsdl_cache_enabled</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">soap.wsdl_cache_limit</td><td class="v">5</td><td class="v">5</td></tr>
            <tr><td class="e">soap.wsdl_cache_ttl</td><td class="v">86400</td><td class="v">86400</td></tr>
        </table>
        <h2><a name="module_sockets">sockets</a></h2>
        <table>
            <tr><td class="e">Sockets Support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_SPL">SPL</a></h2>
        <table>
            <tr class="h"><th>SPL support</th><th>enabled</th></tr>
            <tr><td class="e">Interfaces </td><td class="v">Countable, OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject </td></tr>
            <tr><td class="e">Classes </td><td class="v">AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException </td></tr>
        </table>
        <h2><a name="module_sqlite3">sqlite3</a></h2>
        <table>
            <tr class="h"><th>SQLite3 support</th><th>enabled</th></tr>
            <tr><td class="e">SQLite3 module version </td><td class="v">0.7-dev </td></tr>
            <tr><td class="e">SQLite Library </td><td class="v">3.8.10.2 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">sqlite3.extension_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_standard">standard</a></h2>
        <table>
            <tr><td class="e">Dynamic Library Support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Path to sendmail </td><td class="v">/usr/sbin/sendmail -t -i  </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">assert.active</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">assert.bail</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">assert.callback</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">assert.quiet_eval</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">assert.warning</td><td class="v">1</td><td class="v">1</td></tr>
            <tr><td class="e">auto_detect_line_endings</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">default_socket_timeout</td><td class="v">60</td><td class="v">60</td></tr>
            <tr><td class="e">from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">url_rewriter.tags</td><td class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td><td class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td></tr>
            <tr><td class="e">user_agent</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2><a name="module_swoole">swoole</a></h2>
        <table>
            <tr class="h"><th>swoole support</th><th>enabled</th></tr>
            <tr><td class="e">Version </td><td class="v">1.7.20-beta </td></tr>
            <tr><td class="e">Author </td><td class="v">tianfeng.han[email: mikan.tenny@gmail.com] </td></tr>
            <tr><td class="e">kqueue </td><td class="v">enabled </td></tr>
            <tr><td class="e">rwlock </td><td class="v">enabled </td></tr>
            <tr><td class="e">Gcc AIO </td><td class="v">enabled </td></tr>
            <tr><td class="e">pcre </td><td class="v">enabled </td></tr>
            <tr><td class="e">zlib </td><td class="v">enabled </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">swoole.aio_thread_num</td><td class="v">2</td><td class="v">2</td></tr>
            <tr><td class="e">swoole.display_errors</td><td class="v">On</td><td class="v">On</td></tr>
            <tr><td class="e">swoole.message_queue_key</td><td class="v">0</td><td class="v">0</td></tr>
            <tr><td class="e">swoole.unixsock_buffer_size</td><td class="v">8388608</td><td class="v">8388608</td></tr>
        </table>
        <h2><a name="module_sysvmsg">sysvmsg</a></h2>
        <table>
            <tr><td class="e">sysvmsg support </td><td class="v">enabled </td></tr>
            <tr><td class="e">Revision </td><td class="v">$Id: 58590192720bc56939152fde3645d808b348bb9b $ </td></tr>
        </table>
        <h2><a name="module_tokenizer">tokenizer</a></h2>
        <table>
            <tr><td class="e">Tokenizer Support </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_wddx">wddx</a></h2>
        <table>
            <tr class="h"><th>WDDX Support</th><th>enabled</th></tr>
            <tr><td class="e">WDDX Session Serializer </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_xml">xml</a></h2>
        <table>
            <tr><td class="e">XML Support </td><td class="v">active </td></tr>
            <tr><td class="e">XML Namespace Support </td><td class="v">active </td></tr>
            <tr><td class="e">libxml2 Version </td><td class="v">2.9.2 </td></tr>
        </table>
        <h2><a name="module_xmlreader">xmlreader</a></h2>
        <table>
            <tr><td class="e">XMLReader </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_xmlrpc">xmlrpc</a></h2>
        <table>
            <tr><td class="e">core library version </td><td class="v">xmlrpc-epi v. 0.51 </td></tr>
            <tr><td class="e">php extension version </td><td class="v">0.51 </td></tr>
            <tr><td class="e">author </td><td class="v">Dan Libby </td></tr>
            <tr><td class="e">homepage </td><td class="v">http://xmlrpc-epi.sourceforge.net </td></tr>
            <tr><td class="e">open sourced by </td><td class="v">Epinions.com </td></tr>
        </table>
        <h2><a name="module_xmlwriter">xmlwriter</a></h2>
        <table>
            <tr><td class="e">XMLWriter </td><td class="v">enabled </td></tr>
        </table>
        <h2><a name="module_xsl">xsl</a></h2>
        <table>
            <tr><td class="e">XSL </td><td class="v">enabled </td></tr>
            <tr><td class="e">libxslt Version </td><td class="v">1.1.28 </td></tr>
            <tr><td class="e">libxslt compiled against libxml Version </td><td class="v">2.9.2 </td></tr>
            <tr><td class="e">EXSLT </td><td class="v">enabled </td></tr>
            <tr><td class="e">libexslt Version </td><td class="v">1.1.28 </td></tr>
        </table>
        <h2><a name="module_zip">zip</a></h2>
        <table>
            <tr><td class="e">Zip </td><td class="v">enabled </td></tr>
            <tr><td class="e">Zip version </td><td class="v">1.12.5 </td></tr>
            <tr><td class="e">Libzip version </td><td class="v">0.11.2 </td></tr>
        </table>
        <h2><a name="module_zlib">zlib</a></h2>
        <table>
            <tr class="h"><th>ZLib Support</th><th>enabled</th></tr>
            <tr><td class="e">Stream Wrapper </td><td class="v">compress.zlib:// </td></tr>
            <tr><td class="e">Stream Filter </td><td class="v">zlib.inflate, zlib.deflate </td></tr>
            <tr><td class="e">Compiled Version </td><td class="v">1.2.5 </td></tr>
            <tr><td class="e">Linked Version </td><td class="v">1.2.5 </td></tr>
        </table>
        <table>
            <tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
            <tr><td class="e">zlib.output_compression</td><td class="v">Off</td><td class="v">Off</td></tr>
            <tr><td class="e">zlib.output_compression_level</td><td class="v">-1</td><td class="v">-1</td></tr>
            <tr><td class="e">zlib.output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
        </table>
        <h2>Additional Modules</h2>
        <table>
            <tr class="h"><th>Module Name</th></tr>
            <tr><td class="v">sysvsem</td></tr>
            <tr><td class="v">sysvshm</td></tr>
        </table>
        <h2>Environment</h2>
        <table>
            <tr class="h"><th>Variable</th><th>Value</th></tr>
            <tr><td class="e">USER </td><td class="v">zhaoye </td></tr>
            <tr><td class="e">HOME </td><td class="v">/Users/zhaoye </td></tr>
        </table>
        <h2>PHP Variables</h2>
        <table>
            <tr class="h"><th>Variable</th><th>Value</th></tr>
            <tr><td class="e">_COOKIE["pgv_pvi"]</td><td class="v">4926512128</td></tr>
            <tr><td class="e">_SERVER["USER"]</td><td class="v">zhaoye</td></tr>
            <tr><td class="e">_SERVER["HOME"]</td><td class="v">/Users/zhaoye</td></tr>
            <tr><td class="e">_SERVER["FCGI_ROLE"]</td><td class="v">RESPONDER</td></tr>
            <tr><td class="e">_SERVER["SCRIPT_FILENAME"]</td><td class="v">/Users/zhaoye/workspace/tpp/chinese_basic/index.php</td></tr>
            <tr><td class="e">_SERVER["QUERY_STRING"]</td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">_SERVER["REQUEST_METHOD"]</td><td class="v">GET</td></tr>
            <tr><td class="e">_SERVER["CONTENT_TYPE"]</td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">_SERVER["CONTENT_LENGTH"]</td><td class="v"><i>no value</i></td></tr>
            <tr><td class="e">_SERVER["SCRIPT_NAME"]</td><td class="v">/index.php</td></tr>
            <tr><td class="e">_SERVER["REQUEST_URI"]</td><td class="v">/</td></tr>
            <tr><td class="e">_SERVER["DOCUMENT_URI"]</td><td class="v">/index.php</td></tr>
            <tr><td class="e">_SERVER["DOCUMENT_ROOT"]</td><td class="v">/Users/zhaoye/workspace/tpp/chinese_basic</td></tr>
            <tr><td class="e">_SERVER["SERVER_PROTOCOL"]</td><td class="v">HTTP/1.1</td></tr>
            <tr><td class="e">_SERVER["GATEWAY_INTERFACE"]</td><td class="v">CGI/1.1</td></tr>
            <tr><td class="e">_SERVER["SERVER_SOFTWARE"]</td><td class="v">nginx/1.8.0</td></tr>
            <tr><td class="e">_SERVER["REMOTE_ADDR"]</td><td class="v">127.0.0.1</td></tr>
            <tr><td class="e">_SERVER["REMOTE_PORT"]</td><td class="v">49546</td></tr>
            <tr><td class="e">_SERVER["SERVER_ADDR"]</td><td class="v">127.0.0.1</td></tr>
            <tr><td class="e">_SERVER["SERVER_PORT"]</td><td class="v">80</td></tr>
            <tr><td class="e">_SERVER["SERVER_NAME"]</td><td class="v">basichina.test.com</td></tr>
            <tr><td class="e">_SERVER["REDIRECT_STATUS"]</td><td class="v">200</td></tr>
            <tr><td class="e">_SERVER["HTTP_HOST"]</td><td class="v">basichina.test.com</td></tr>
            <tr><td class="e">_SERVER["HTTP_CONNECTION"]</td><td class="v">keep-alive</td></tr>
            <tr><td class="e">_SERVER["HTTP_CACHE_CONTROL"]</td><td class="v">max-age=0</td></tr>
            <tr><td class="e">_SERVER["HTTP_ACCEPT"]</td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8</td></tr>
            <tr><td class="e">_SERVER["HTTP_UPGRADE_INSECURE_REQUESTS"]</td><td class="v">1</td></tr>
            <tr><td class="e">_SERVER["HTTP_USER_AGENT"]</td><td class="v">Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36</td></tr>
            <tr><td class="e">_SERVER["HTTP_ACCEPT_ENCODING"]</td><td class="v">gzip, deflate, sdch</td></tr>
            <tr><td class="e">_SERVER["HTTP_ACCEPT_LANGUAGE"]</td><td class="v">zh-CN,zh;q=0.8,en;q=0.6,zh-TW;q=0.4,ja;q=0.2,ko;q=0.2</td></tr>
            <tr><td class="e">_SERVER["HTTP_COOKIE"]</td><td class="v">pgv_pvi=4926512128</td></tr>
            <tr><td class="e">_SERVER["HTTP_SOCKETLOG"]</td><td class="v">SocketLog(tabid=1171&amp;client_id=)</td></tr>
            <tr><td class="e">_SERVER["PHP_SELF"]</td><td class="v">/index.php</td></tr>
            <tr><td class="e">_SERVER["REQUEST_TIME_FLOAT"]</td><td class="v">1467378652.4925</td></tr>
            <tr><td class="e">_SERVER["REQUEST_TIME"]</td><td class="v">1467378652</td></tr>
        </table>
        <hr />
        <h1>PHP Credits</h1>
        <table>
            <tr class="h"><th>PHP Group</th></tr>
            <tr><td class="e">Thies C. Arntzen, Stig Bakken, Shane Caraveo, Andi Gutmans, Rasmus Lerdorf, Sam Ruby, Sascha Schumann, Zeev Suraski, Jim Winstead, Andrei Zmievski </td></tr>
        </table>
        <table>
            <tr class="h"><th>Language Design &amp; Concept</th></tr>
            <tr><td class="e">Andi Gutmans, Rasmus Lerdorf, Zeev Suraski, Marcus Boerger </td></tr>
        </table>
        <table>
            <tr class="h"><th colspan="2">PHP Authors</th></tr>
            <tr class="h"><th>Contribution</th><th>Authors</th></tr>
            <tr><td class="e">Zend Scripting Language Engine </td><td class="v">Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Marcus Boerger, Dmitry Stogov, Xinchen Hui, Nikita Popov </td></tr>
            <tr><td class="e">Extension Module API </td><td class="v">Andi Gutmans, Zeev Suraski, Andrei Zmievski </td></tr>
            <tr><td class="e">UNIX Build and Modularization </td><td class="v">Stig Bakken, Sascha Schumann, Jani Taskinen </td></tr>
            <tr><td class="e">Windows Port </td><td class="v">Shane Caraveo, Zeev Suraski, Wez Furlong, Pierre-Alain Joye, Anatol Belski </td></tr>
            <tr><td class="e">Server API (SAPI) Abstraction Layer </td><td class="v">Andi Gutmans, Shane Caraveo, Zeev Suraski </td></tr>
            <tr><td class="e">Streams Abstraction Layer </td><td class="v">Wez Furlong, Sara Golemon </td></tr>
            <tr><td class="e">PHP Data Objects Layer </td><td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td></tr>
            <tr><td class="e">Output Handler </td><td class="v">Zeev Suraski, Thies C. Arntzen, Marcus Boerger, Michael Wallner </td></tr>
        </table>
        <table>
            <tr class="h"><th colspan="2">SAPI Modules</th></tr>
            <tr class="h"><th>Contribution</th><th>Authors</th></tr>
            <tr><td class="e">AOLserver </td><td class="v">Sascha Schumann </td></tr>
            <tr><td class="e">Apache 1.3 (apache_hooks) </td><td class="v">Rasmus Lerdorf, Zeev Suraski, Stig Bakken, David Sklar, George Schlossnagle, Lukas Schroeder </td></tr>
            <tr><td class="e">Apache 1.3 </td><td class="v">Rasmus Lerdorf, Zeev Suraski, Stig Bakken, David Sklar </td></tr>
            <tr><td class="e">Apache 2.0 Filter </td><td class="v">Sascha Schumann, Aaron Bannert </td></tr>
            <tr><td class="e">Apache 2.0 Handler </td><td class="v">Ian Holsman, Justin Erenkrantz (based on Apache 2.0 Filter code) </td></tr>
            <tr><td class="e">Caudium / Roxen </td><td class="v">David Hedbor </td></tr>
            <tr><td class="e">CGI / FastCGI </td><td class="v">Rasmus Lerdorf, Stig Bakken, Shane Caraveo, Dmitry Stogov </td></tr>
            <tr><td class="e">CLI </td><td class="v">Edin Kadribasic, Marcus Boerger, Johannes Schlueter, Moriyoshi Koizumi, Xinchen Hui </td></tr>
            <tr><td class="e">Continuity </td><td class="v">Alex Leigh (based on nsapi code) </td></tr>
            <tr><td class="e">Embed </td><td class="v">Edin Kadribasic </td></tr>
            <tr><td class="e">FastCGI Process Manager </td><td class="v">Andrei Nigmatulin, dreamcat4, Antony Dovgal, Jerome Loyet </td></tr>
            <tr><td class="e">ISAPI </td><td class="v">Andi Gutmans, Zeev Suraski </td></tr>
            <tr><td class="e">litespeed </td><td class="v">George Wang </td></tr>
            <tr><td class="e">NSAPI </td><td class="v">Jayakumar Muthukumarasamy, Uwe Schindler </td></tr>
            <tr><td class="e">phpdbg </td><td class="v">Felipe Pena, Joe Watkins, Bob Weinand </td></tr>
            <tr><td class="e">phttpd </td><td class="v">Thies C. Arntzen </td></tr>
            <tr><td class="e">pi3web </td><td class="v">Holger Zimmermann </td></tr>
            <tr><td class="e">Sendmail Milter </td><td class="v">Harald Radi </td></tr>
            <tr><td class="e">thttpd </td><td class="v">Sascha Schumann </td></tr>
            <tr><td class="e">tux </td><td class="v">Sascha Schumann </td></tr>
            <tr><td class="e">WebJames </td><td class="v">Alex Waugh </td></tr>
        </table>
        <table>
            <tr class="h"><th colspan="2">Module Authors</th></tr>
            <tr class="h"><th>Module</th><th>Authors</th></tr>
            <tr><td class="e">BC Math </td><td class="v">Andi Gutmans </td></tr>
            <tr><td class="e">Bzip2 </td><td class="v">Sterling Hughes </td></tr>
            <tr><td class="e">Calendar </td><td class="v">Shane Caraveo, Colin Viebrock, Hartmut Holzgraefe, Wez Furlong </td></tr>
            <tr><td class="e">COM and .Net </td><td class="v">Wez Furlong </td></tr>
            <tr><td class="e">ctype </td><td class="v">Hartmut Holzgraefe </td></tr>
            <tr><td class="e">cURL </td><td class="v">Sterling Hughes </td></tr>
            <tr><td class="e">Date/Time Support </td><td class="v">Derick Rethans </td></tr>
            <tr><td class="e">DB-LIB (MS SQL, Sybase) </td><td class="v">Wez Furlong, Frank M. Kromann </td></tr>
            <tr><td class="e">DBA </td><td class="v">Sascha Schumann, Marcus Boerger </td></tr>
            <tr><td class="e">DOM </td><td class="v">Christian Stocker, Rob Richards, Marcus Boerger </td></tr>
            <tr><td class="e">enchant </td><td class="v">Pierre-Alain Joye, Ilia Alshanetsky </td></tr>
            <tr><td class="e">ereg </td><td class="v">Rasmus Lerdorf, Jim Winstead, Jaakko Hyvätti </td></tr>
            <tr><td class="e">EXIF </td><td class="v">Rasmus Lerdorf, Marcus Boerger </td></tr>
            <tr><td class="e">fileinfo </td><td class="v">Ilia Alshanetsky, Pierre Alain Joye, Scott MacVicar, Derick Rethans </td></tr>
            <tr><td class="e">Firebird driver for PDO </td><td class="v">Ard Biesheuvel </td></tr>
            <tr><td class="e">FTP </td><td class="v">Stefan Esser, Andrew Skalski </td></tr>
            <tr><td class="e">GD imaging </td><td class="v">Rasmus Lerdorf, Stig Bakken, Jim Winstead, Jouni Ahto, Ilia Alshanetsky, Pierre-Alain Joye, Marcus Boerger </td></tr>
            <tr><td class="e">GetText </td><td class="v">Alex Plotnick </td></tr>
            <tr><td class="e">GNU GMP support </td><td class="v">Stanislav Malyshev </td></tr>
            <tr><td class="e">Iconv </td><td class="v">Rui Hirokawa, Stig Bakken, Moriyoshi Koizumi  </td></tr>
            <tr><td class="e">IMAP </td><td class="v">Rex Logan, Mark Musone, Brian Wang, Kaj-Michael Lang, Antoni Pamies Olive, Rasmus Lerdorf, Andrew Skalski, Chuck Hagenbuch, Daniel R Kalowsky </td></tr>
            <tr><td class="e">Input Filter </td><td class="v">Rasmus Lerdorf, Derick Rethans, Pierre-Alain Joye, Ilia Alshanetsky </td></tr>
            <tr><td class="e">InterBase </td><td class="v">Jouni Ahto, Andrew Avdeev, Ard Biesheuvel </td></tr>
            <tr><td class="e">Internationalization </td><td class="v">Ed Batutis, Vladimir Iordanov, Dmitry Lakhtyuk, Stanislav Malyshev, Vadim Savchuk, Kirti Velankar </td></tr>
            <tr><td class="e">JSON </td><td class="v">Omar Kilani, Scott MacVicar </td></tr>
            <tr><td class="e">LDAP </td><td class="v">Amitay Isaacs, Eric Warnke, Rasmus Lerdorf, Gerrit Thomson, Stig Venaas </td></tr>
            <tr><td class="e">LIBXML </td><td class="v">Christian Stocker, Rob Richards, Marcus Boerger, Wez Furlong, Shane Caraveo </td></tr>
            <tr><td class="e">mcrypt </td><td class="v">Sascha Schumann, Derick Rethans </td></tr>
            <tr><td class="e">MS SQL </td><td class="v">Frank M. Kromann </td></tr>
            <tr><td class="e">Multibyte String Functions </td><td class="v">Tsukada Takuya, Rui Hirokawa </td></tr>
            <tr><td class="e">MySQL driver for PDO </td><td class="v">George Schlossnagle, Wez Furlong, Ilia Alshanetsky, Johannes Schlueter </td></tr>
            <tr><td class="e">MySQL </td><td class="v">Zeev Suraski, Zak Greant, Georg Richter, Andrey Hristov </td></tr>
            <tr><td class="e">MySQLi </td><td class="v">Zak Greant, Georg Richter, Andrey Hristov, Ulf Wendel </td></tr>
            <tr><td class="e">MySQLnd </td><td class="v">Andrey Hristov, Ulf Wendel, Georg Richter, Johannes Schlüter </td></tr>
            <tr><td class="e">OCI8 </td><td class="v">Stig Bakken, Thies C. Arntzen, Andy Sautins, David Benson, Maxim Maletsky, Harald Radi, Antony Dovgal, Andi Gutmans, Wez Furlong, Christopher Jones, Oracle Corporation </td></tr>
            <tr><td class="e">ODBC driver for PDO </td><td class="v">Wez Furlong </td></tr>
            <tr><td class="e">ODBC </td><td class="v">Stig Bakken, Andreas Karajannis, Frank M. Kromann, Daniel R. Kalowsky </td></tr>
            <tr><td class="e">OpenSSL </td><td class="v">Stig Venaas, Wez Furlong, Sascha Kettler, Scott MacVicar </td></tr>
            <tr><td class="e">Oracle (OCI) driver for PDO </td><td class="v">Wez Furlong </td></tr>
            <tr><td class="e">pcntl </td><td class="v">Jason Greene, Arnaud Le Blanc </td></tr>
            <tr><td class="e">Perl Compatible Regexps </td><td class="v">Andrei Zmievski </td></tr>
            <tr><td class="e">PHP Archive </td><td class="v">Gregory Beaver, Marcus Boerger </td></tr>
            <tr><td class="e">PHP Data Objects </td><td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td></tr>
            <tr><td class="e">PHP hash </td><td class="v">Sara Golemon, Rasmus Lerdorf, Stefan Esser, Michael Wallner, Scott MacVicar </td></tr>
            <tr><td class="e">Posix </td><td class="v">Kristian Koehntopp </td></tr>
            <tr><td class="e">PostgreSQL driver for PDO </td><td class="v">Edin Kadribasic, Ilia Alshanetsky </td></tr>
            <tr><td class="e">PostgreSQL </td><td class="v">Jouni Ahto, Zeev Suraski, Yasuo Ohgaki, Chris Kings-Lynne </td></tr>
            <tr><td class="e">Pspell </td><td class="v">Vlad Krupin </td></tr>
            <tr><td class="e">Readline </td><td class="v">Thies C. Arntzen </td></tr>
            <tr><td class="e">Recode </td><td class="v">Kristian Koehntopp </td></tr>
            <tr><td class="e">Reflection </td><td class="v">Marcus Boerger, Timm Friebe, George Schlossnagle, Andrei Zmievski, Johannes Schlueter </td></tr>
            <tr><td class="e">Sessions </td><td class="v">Sascha Schumann, Andrei Zmievski </td></tr>
            <tr><td class="e">Shared Memory Operations </td><td class="v">Slava Poliakov, Ilia Alshanetsky </td></tr>
            <tr><td class="e">SimpleXML </td><td class="v">Sterling Hughes, Marcus Boerger, Rob Richards </td></tr>
            <tr><td class="e">SNMP </td><td class="v">Rasmus Lerdorf, Harrie Hazewinkel, Mike Jackson, Steven Lawrance, Johann Hanne, Boris Lytochkin </td></tr>
            <tr><td class="e">SOAP </td><td class="v">Brad Lafountain, Shane Caraveo, Dmitry Stogov </td></tr>
            <tr><td class="e">Sockets </td><td class="v">Chris Vandomelen, Sterling Hughes, Daniel Beulshausen, Jason Greene </td></tr>
            <tr><td class="e">SPL </td><td class="v">Marcus Boerger, Etienne Kneuss </td></tr>
            <tr><td class="e">SQLite 3.x driver for PDO </td><td class="v">Wez Furlong </td></tr>
            <tr><td class="e">SQLite3 </td><td class="v">Scott MacVicar, Ilia Alshanetsky, Brad Dewar </td></tr>
            <tr><td class="e">Sybase-CT </td><td class="v">Zeev Suraski, Tom May, Timm Friebe </td></tr>
            <tr><td class="e">System V Message based IPC </td><td class="v">Wez Furlong </td></tr>
            <tr><td class="e">System V Semaphores </td><td class="v">Tom May </td></tr>
            <tr><td class="e">System V Shared Memory </td><td class="v">Christian Cartus </td></tr>
            <tr><td class="e">tidy </td><td class="v">John Coggeshall, Ilia Alshanetsky </td></tr>
            <tr><td class="e">tokenizer </td><td class="v">Andrei Zmievski, Johannes Schlueter </td></tr>
            <tr><td class="e">WDDX </td><td class="v">Andrei Zmievski </td></tr>
            <tr><td class="e">XML </td><td class="v">Stig Bakken, Thies C. Arntzen, Sterling Hughes </td></tr>
            <tr><td class="e">XMLReader </td><td class="v">Rob Richards </td></tr>
            <tr><td class="e">xmlrpc </td><td class="v">Dan Libby </td></tr>
            <tr><td class="e">XMLWriter </td><td class="v">Rob Richards, Pierre-Alain Joye </td></tr>
            <tr><td class="e">XSL </td><td class="v">Christian Stocker, Rob Richards </td></tr>
            <tr><td class="e">Zip </td><td class="v">Pierre-Alain Joye, Remi Collet </td></tr>
            <tr><td class="e">Zlib </td><td class="v">Rasmus Lerdorf, Stefan Roehrich, Zeev Suraski, Jade Nicoletti, Michael Wallner </td></tr>
        </table>
        <table>
            <tr class="h"><th colspan="2">PHP Documentation</th></tr>
            <tr><td class="e">Authors </td><td class="v">Mehdi Achour, Friedhelm Betz, Antony Dovgal, Nuno Lopes, Hannes Magnusson, Georg Richter, Damien Seguy, Jakub Vrana, Adam Harvey, Peter Cowburn </td></tr>
            <tr><td class="e">Editor </td><td class="v">Philip Olson </td></tr>
            <tr><td class="e">User Note Maintainers </td><td class="v">Daniel P. Brown, Thiago Henrique Pojda </td></tr>
            <tr><td class="e">Other Contributors </td><td class="v">Previously active authors, editors and other contributors are listed in the manual. </td></tr>
        </table>
        <table>
            <tr class="h"><th>PHP Quality Assurance Team</th></tr>
            <tr><td class="e">Ilia Alshanetsky, Joerg Behrens, Antony Dovgal, Stefan Esser, Moriyoshi Koizumi, Magnus Maatta, Sebastian Nohn, Derick Rethans, Melvyn Sopacua, Jani Taskinen, Pierre-Alain Joye, Dmitry Stogov, Felipe Pena, David Soria Parra, Stanislav Malyshev, Julien Pauli, Stephen Zarkos, Anatol Belski, Remi Collet, Ferenc Kovacs </td></tr>
        </table>
        <table>
            <tr class="h"><th colspan="2">Websites and Infrastructure team</th></tr>
            <tr><td class="e">PHP Websites Team </td><td class="v">Rasmus Lerdorf, Hannes Magnusson, Philip Olson, Lukas Kahwe Smith, Pierre-Alain Joye, Kalle Sommer Nielsen, Peter Cowburn, Adam Harvey, Ferenc Kovacs, Levi Morrison </td></tr>
            <tr><td class="e">Event Maintainers </td><td class="v">Damien Seguy, Daniel P. Brown </td></tr>
            <tr><td class="e">Network Infrastructure </td><td class="v">Daniel P. Brown </td></tr>
            <tr><td class="e">Windows Infrastructure </td><td class="v">Alex Schoenmaker </td></tr>
        </table>
        <h2>PHP License</h2>
        <table>
            <tr class="v"><td>
                <p>
                    This program is free software; you can redistribute it and/or modify it under the terms of the PHP License as published by the PHP Group and included in the distribution in the file:  LICENSE
                </p>
                <p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
                </p>
                <p>If you did not receive a copy of the PHP license, or have any questions about PHP licensing, please contact license@php.net.
                </p>
            </td></tr>
        </table>
</div></body></html>1