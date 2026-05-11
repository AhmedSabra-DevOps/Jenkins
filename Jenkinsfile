pipeline {
    agent any
    triggers {
        githubPush()
    }
    stages {
        stage('Checkout') {
            steps {
                git url: 'https://github.com/AhmedSabra-DevOps/Jenkins.git', branch: 'main'
            }
        }

        

        stage('Run PHPUnit Tests') {
            steps {
                sh 'phpunit tests/OrderTest.php tests/SubscriptionTest.php'
            }
        }
    }

    post {
        success {
            echo 'All tests passed!'
        }
        failure {
            echo 'Tests failed — build marked as FAILED.'
        }
    }
}
