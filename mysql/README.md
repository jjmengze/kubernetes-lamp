# Build a deployment
Use to manage  replicas of sql server and  pod of sql server.

# container
use this command to create a secret password 
kubectl create secret generic mysql-pass --from-file=password.txt
The container includ the mysql image .
Exposed 3306port for external use .
Set the environment variables MYSQL_DATABASE and MYSQL_ROOT_PASSWORD .

# Service
Exposed 3306port for external use .
Select the label with app: mysql-server and use the container's 3306 port.
