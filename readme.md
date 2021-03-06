# Praktikum Pemrograman Web UTS

## Manual

### move to www directory

```bash
cd /var/www/html
```

### clone this project

```bash
git clone -b ppweb-uts git@github.com:man20820/pweb.git
```

### import mysql

```bash
mysql -h localhost -e "DROP DATABASE IF EXISTS ppweb_uts;"
mysql -h localhost -e "CREATE DATABASE IF NOT EXISTS ppweb_uts;"
mysql -u username -p pweb_uts < pweb_uts.sql
```

## Jenkins

### create vhost, currently i'm using nginx

```bash
server {
  listen port;
  server_name youripaddress;
  root /var/www/ppweb-uts;
  index index.php index.html;

  access_log /var/log/nginx/ppweb-uts.log;
  error_log /var/log/nginx/ppweb-uts.error.log;

  location / {
    try_files $uri $uri/ =404;
  }

  location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
  }
}
```

### add to /etc/sudoers

```bash
#ppweb-uts
jenkins ALL=(ALL) NOPASSWD: /usr/bin/mysql
jenkins ALL=(ALL) NOPASSWD: /bin/rm -rf /var/www/ppweb-uts
jenkins ALL=(ALL) NOPASSWD: /bin/cp -r /var/lib/jenkins/workspace/ppweb-uts/ /var/www/ppweb-uts/
```

### create pipeline project

Built Triggers:  GitHub hook trigger for GITScm polling </br>
Definition: Pipeline script from SCM </br>
SCM: Git </br>
Repositories: git@github.com:man20820/pweb-uts.git </br>
Credentials: contact me on man@tkjpedia.com </br>
Branch: ppweb-uts </br>
