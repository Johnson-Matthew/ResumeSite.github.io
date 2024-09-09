<style scoped>
.footer{
  position:absolute;
  bottom:0;
   width:100%;
   height:100px; 
  text-align: center;
}

.huge-title {
  font-size: 12em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.rounded-card{
  justify-content: center;
  margin-right: 20px;
  border-radius: 5px;
}

.card-title {
  font-size: 2em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.card-sub-title {
  font-size: 3ex; 
  font-weight: bold;
  text-align: left;
  margin-top:10px;
  margin-left: 20px;
}

.card-text{
  text-align: left;
  margin-left: 20px;
}

.codeBlock{
  margin-left: 10px;
  margin-right: 10px;
}

.medium-title {
  font-size: 8em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.blurb{
  font-size: 2em; 
  text-align: center;
}
</style>

<script setup>
import VCodeBlock from '@wdns/vue-code-block';

const install = `zypper install apache2 php8 php8-mysql php8MyAdmin mariadb`;

const serverSetup = `systemctl start apache2
systemctl stop apache2
systemctl status apache2
systemctl enable apache2`;

const firewallSetup = `firewall-cmd --list-all
firewall-cmd --add-service=https --permanent
firewall-cmd --add-service=http --permanent
firewall-cmd --reload`;

const databaseSetup = `CREATE USER 'username@localhost' IDENTIFIED BY 'password';
CREATE DATABASE databaseName;
GRANT ALL PRIVILEGES ON databaseName.* TO 'username'@'localhost';`;

const webRootFolderSetup = `cd /srv/www/htdocs
chmod 775 /srv/www/htdocs -R
chgrp www /srv/www/htdocs -R
usermod -a -G www userName`

const createTables = `CREATE TABLE TEST(FIRSTNAME VARCHAR(30), LASTNAME VARCHAR(30));
--Insert Records into table:
INSERT INTO TESTDATA VALUES('Test', 'User');
INSERT INTO TESTDATA VALUES('ABC', 'XYZ'); 
--Show all records from table:
SELECT * FROM TESTDATA;`;

const html = `<!-- Test.html -->
<html> 
<head>
  <title>This is a test</title>
  <style type="text/css">
    .mystyle1 {
    border: 3px solid red;
    padding: 10px;
    padding-top: 30px;
    margin-top: 30px;
    }
  </style>
</head>
<body>
  <h1>My First Web App</h1>
  <p>This is a paragraph</p>
  <div class="mystyle1">This is a box</div>
  <form method="GET" action="./form.php">
    <p>First Name:</p>
    <input type="text" name="txtFirstName">
    <p>Last Name:</p>
    <input type="text" name="txtLastName">
    <input type="submit" value="Submit Form">
  </form>
</body>
</html>`;

const php = `//form.php
<?php
  $fname = $_GET["txtFirstName"];
  $lname = $_GET["txtLastName"];
  echo "Hello";
  echo $fname . " " . $lname;
?>`
</script>


<template>
    <div class="huge-title">Linux Tutorial</div>
    <v-row>
        <v-col cols="2"></v-col>
        <v-col cols="8">
            <v-card
            class="rounded-card"
            max-width="1800"
            color="#D7D2CB"
            >
            <div class="card-title">Virtual Machine Installation</div>
            <br>
            <div class="card-text">⦿ Download openSuSE Leap ISO from openSuSE's website.</div>
            <div class="card-text">⦿ Create a virtual machine with a bridged adapter or using port forwarding.</div>
            <div class="card-text">- It is recommended to have a disk size of at least 32 GB.</div>
            <br>
            <div class="card-title">Software Installation</div><br>
            <div class="card-text">⦿ Using zypper package manager in the command line install apache2, php8, php8-mysql, phpMyAdmin, and mariadb.</div>
            <br>
            <VCodeBlock
            class="codeBlock"
            :code="install"
            highlightjs
            lang="shell"
            theme="github-dark"
            ></VCodeBlock>
            <br>
            <div class="card-title">Linux Web Servers</div><br>
            <div class="card-text">⦿ Linux has many web servers that can be tailored to specific demands. For this example we will be using Apache web server.</div>
            <div class="card-text">⦿ The Apache web server listens on port 80 for unencrypted traffic and port 443 for encrypted traffic. 
            This is important to note if you are using port forwarding as well as for firewall configuration.</div>
            <div class="card-sub-title">Server Tasks</div>
            <div class="card-text">⦿ Installing services/software</div>
            <div class="card-text">- yast (Software > Software management)</div>
            <div class="card-text">⦿ Starting/Stopping Services</div>
            <br>

            <VCodeBlock
            class="codeBlock"
            :code="serverSetup"
            highlightjs
            lang="shell"
            theme="github-dark"
            ></VCodeBlock>
            <br>

            <div class="card-title">Configure Firewall</div><br>
            <VCodeBlock
            class="codeBlock"
            :code="firewallSetup"
            highlightjs
            lang="shell"
            theme="github-dark"
            ></VCodeBlock>
            <br>

            <div class="card-title">Configuring Database Server</div><br>
            <div class="card-text">⦿ First ensure that the database server is running.</div>
            <div class="card-text">⦿ From the command line, use the 'mysql' command to use mariadb.</div>
            <br>
            <VCodeBlock
            class="codeBlock"
            :code="databaseSetup"
            highlightjs
            lang="SQL"
            theme="github-dark"
            ></VCodeBlock>
            <br>

            <div class="card-title">Web Root Folder Permissions</div><br>
            <div class="card-text">⦿ Navigate to the web root folder of your chosen Linux ISO. openSuSE's default folder is /srv/www/htdocs.</div>
            <br>
            <VCodeBlock
            class="codeBlock"
            :code="webRootFolderSetup"
            highlightjs
            lang="shell"
            theme="github-dark"
            ></VCodeBlock>
            <div class="card-text">⦿ To see if the web server is running, you should be able to access the phpMyAdmin application at 'https://someIPaddress/phpMyAdmin/'</div>
            <br>

            <div class="card-title">Example Application</div><br>
            <div class="card-text">⦿ Now that we have configured our virutal machine. We will create and host a basic web application with it.</div>
            <div class="card-text">⦿ Navigate to the web root folder of your chosen Linux ISO. openSuSE's default folder is /srv/www/htdocs.</div>
            <div class="card-text">⦿ From the command line, use the 'mysql' command to use mariadb.</div>
            <div class="card-text">⦿ Create tables within database:</div>
            <br>
            <VCodeBlock
            class="codeBlock"
            :code="createTables"
            highlightjs
            lang="SQL"
            theme="github-dark"
            ></VCodeBlock>
            <br>

            <div class="card-text">⦿ Create a simple web application:</div>
            <br>
            <VCodeBlock
            class="codeBlock"
            :code="html"
            highlightjs
            lang="HTML"
            theme="github-dark"
            ></VCodeBlock>
            <br>

            <VCodeBlock
            class="codeBlock"
            :code="php"
            highlightjs
            lang="PHP"
            theme="github-dark"
            ></VCodeBlock>
            <br>

            <h2 style="text-align:center">You should now have a basic web application hosted on your Linux virtual machine. Happy Coding!</h2>

            </v-card>
            <br><br>
        </v-col>
    </v-row>
</template>