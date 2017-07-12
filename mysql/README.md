# Build a deployment
Use to manage  replicas of sql server and  pod of sql server.

# container 
The container includ the mysql image .
Exposed 3306port for external use .
Set the environment variables MYSQL_DATABASE and MYSQL_ROOT_PASSWORD .

# Service
If your mysql service needs to be accessed externally, the service must be created!!!
Exposed 3306port for external use .
Select the label with app: mysql-server and use the container's 3306 port.
