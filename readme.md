#Tutorial PHP Simple con MVC

```
<VirtualHost www.tutorialphp.cl:80>
	ServerName www.tutorialphp.cl
	ServerAlias tutorialphp.cl
	DocumentRoot C:/PHP_TUTO/public
	<Directory  "C:/PHP_TUTO/public">
		Options -Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```