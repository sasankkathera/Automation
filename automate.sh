apt install openjdk-11-dbg
wget https://archive.apache.org/dist/tomcat/tomcat-9/v9.0.55/bin/apache-tomcat-9.0.55.tar.gz

tar -xvf apache-tomcat-9.0.55.tar.gz



cp context.xml apache-tomcat-9.0.55/webapps/manager/META-INF/context.xml

cp tomcat-users.xml apache-tomcat-9.0.55/conf/tomcat-users.xml

apache-tomcat-9.0.55/bin/startup.sh

#git clone https://github.com/sasankkathera/myweb.git

#cd myweb

#mvn clean package

#mv target/*.war ../apache-tomcat-9.0.55/webapps/website.war

#wget https://get.jenkins.io/war-stable/2.303.3/jenkins.war

#mv jenkins.war ../apache-tomcat-9.0.55/webapps/Jenkins.war
