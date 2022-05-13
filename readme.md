# Praktikum Pemrograman Web UTS

## Manual

move to www directory

```bash
cd /var/www/html
```

clone this project

```bash
git clone -b pweb-uts git@github.com:man20820/pweb.git
```

## Jenkins

create vhost, currently i'm using nginx

```bash
server {
  listen port;
  server_name youripaddress;
  root /var/www/pweb-uts;
  index index.php index.html;

  access_log /var/log/nginx/pweb-uts.log;
  error_log /var/log/nginx/pweb-uts.error.log;

  location / {
    try_files $uri $uri/ =404;
  }

  location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
  }
}
```

add to /etc/sudoers

```bash
#ppweb-uts
jenkins ALL=(ALL) NOPASSWD: /bin/rm -rf /var/www/pweb-uts
jenkins ALL=(ALL) NOPASSWD: /bin/cp -r /var/lib/jenkins/workspace/pweb-uts/ /var/www/pweb-uts/
```
