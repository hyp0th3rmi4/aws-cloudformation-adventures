#!/bin/sh
BUCKET_NAME=$1
yum -y update
yum -y install httpd php
aws s3 cp s3://${BUCKET_NAME}/assets/ec2/index.php /var/www/html/index.php
chown apache:root /var/www/html/index.php
chkconfig httpd on
service httpd start
