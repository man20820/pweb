pipeline {
    agent any
    stages {
        stage("Clean DB") {
            steps {
                sh "mysql -D ppweb-uts -h localhost -e 'DROP DATABASE ppweb-uts;'"
                sh "mysql ppweb-uts < ppweb-uts.sql"
            }
        }
        stage("Deploy") {
            steps {
                sh "sudo rm -rf /var/www/ppweb-uts"
                sh "sudo cp -r ${WORKSPACE}/ /var/www/ppweb-uts"
            }
        }
    }
}