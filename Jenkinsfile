pipeline {
    agent any
    stages {
        stage("Clean DB") {
            steps {
                sh "sudo mysql -h localhost -e \"DROP DATABASE IF EXISTS ppweb_uts;\""
            }
        }
        stage("Store DB") {
            steps {
                sh "sudo mysql ppweb-uts < ${WORKSPACE}/ppweb_uts.sql"
            }
        }
        stage("Deploy") {
            steps {
                sh "sudo rm -rf /var/www/html/ppweb-uts"
                sh "sudo cp -r ${WORKSPACE}/ /var/www/html/ppweb-uts/"
            }
        }
    }
}