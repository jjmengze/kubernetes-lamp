# k8s for  LAMP

Let you use Kubernetes to quickly build a lmap usage environment.

The LAMP contains the following four operating environments.
1. Linux
2. Apache
3. MariaDB or MySQL
4. PHP


## Build MYSQL

change the folder to mysql.
### Use this command to create a secret password
```
kubectl create secret generic mysql-pass --from-file=password.txt
```
### Create a deploy and service for mysql server.
```
kubectl apply -f mysql.yaml
```
### Check those service and pod 
```
kubectl get pod
NAME                              READY     STATUS    RESTARTS   AGE
php-server-2153209126-5dq92       1/1       Running   0          2d

kubectl get svc
NAME               CLUSTER-IP       EXTERNAL-IP    PORT(S)    AGE
mysql-service      192.171.74.152   <none>         3306/TCP   2d
```
## Build PHP7-Apache2
change the folder to php7-apache2.
### Create a deploy and service for php7-apache2 server.
```
kubectl apply -f php7-apache2.yaml
```
### Check those service and pod 
```
kubectl get pod
NAME                              READY     STATUS    RESTARTS   AGE
my-php7-server-2156581821-lwtsx   1/1       Running   0          1d

kubectl get svc
NAME               CLUSTER-IP       EXTERNAL-IP    PORT(S)    AGE
my-php7-server     192.167.37.87    192.16.35.12   80/TCP     16h
```

> [color=#c63760]NOTE: 
> If your EXTERNAL-IP  is <none> ,you have to edit the  EXTERNAL-IP.
> 
## Check your browser 
browse 192.16.35.12 can see that connect the database success.
