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
jenkins ALL=(ALL) NOPASSWD: /usr/bin/mysql
jenkins ALL=(ALL) NOPASSWD: /bin/rm -rf /var/www/ppweb-uts
jenkins ALL=(ALL) NOPASSWD: /bin/cp -r /var/lib/jenkins/workspace/ppweb-uts/ /var/www/ppweb-uts/
```