pipeline {
    agent any
    stages {
        stage("Clean DB") {
            try {
                sh "sudo mysql -D ppweb-uts -h localhost -e \"DROP DATABASE ppweb-uts;\""
            } catch(err) {
                echo "error cleaning db"
            }
        }
        stage("Store DB") {
            try {
                sh "sudo mysql ppweb-uts < ${WORKSPACE}/ppweb-uts.sql"
            } catch(err) {
                echo "error storing db"
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