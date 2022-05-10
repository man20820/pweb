pipeline {
    agent any
    stages {
        stage("Deploya") {
            steps {
                sh "sudo rm -rf /var/www/pweb-uts"
                sh "sudo cp -r ${WORKSPACE} /var/www/pweb-uts"
            }
        }
    }
}