# Praktikum Pemrograman Web UTS

## Manual

move to www directory

```bash
cd /var/www/html
```

clone this project

```bash
git clone -b ppweb-uts git@github.com:man20820/pweb.git
```

import mysql

```bash
mysql -u username -p pweb_uts < pweb_uts.sql
```

## Jenkins

add to /etc/sudoers

```bash
#ppweb-uts
jenkins ALL=(ALL) NOPASSWD: /bin/mysql -D ppweb-uts -h localhost -e 'DROP DATABASE ppweb-uts;'
jenkins ALL=(ALL) NOPASSWD: /bin/mysql ppweb-uts < ppweb-uts.sql
jenkins ALL=(ALL) NOPASSWD: /bin/rm -rf /var/www/html/ppweb-uts
jenkins ALL=(ALL) NOPASSWD: /bin/cp -r /var/lib/jenkins/workspace/ppweb-uts/ /var/www/html/ppweb-uts/
```