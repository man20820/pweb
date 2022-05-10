pipeline {
    agent any
    stages {
        stage("Deployment") {
            steps {
                sh "sudo rm -rf /var/www/pweb-uts/"
                sh "sudo cp -r ${WORKSPACE} /var/www/pweb-uts/"
            }
        }
    }
}