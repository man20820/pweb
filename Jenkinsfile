pipeline {
    agent any
    stages {
        stage("Clean DB") {
            steps {
                sh "sudo mysql -h localhost -e \"DROP DATABASE IF EXISTS ppweb_uts;\""
                sh "sudo mysql -h localhost -e \"CREATE DATABASE IF NOT EXISTS ppweb_uts;\""
            }
        }
        stage("Store DB") {
            steps {
                sh "sudo mysql ppweb_uts < ${WORKSPACE}/ppweb_uts.sql"
            }
        }
        stage("Deploy") {
            steps {
                sh "sudo rm -rf /var/www/ppweb-uts"
                sh "sudo cp -r ${WORKSPACE}/ /var/www/ppweb-uts/"
            }
        }
    }
}