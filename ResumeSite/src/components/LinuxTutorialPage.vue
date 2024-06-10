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


</script>


<template>
    <div class="huge-title">Linux Tutorial</div>
    <v-row>
        <v-col cols="2"></v-col>
        <v-col cols="8">
            <v-card
            class="rounded-card"
            max-width="1800"
            color="#55a176"
            >
            <div class="card-title">Virtual Machine Installation</div>
            <br>
            <div class="card-text">⦿ Download openSuSE Leap ISO from openSuSE's website.</div>
            <div class="card-text">⦿ Create a virtual machine with a bridged adapter or using port forwarding.</div>
            <div class="card-text">- It is recommended to have a disk size of at least 32 GB.</div>
            <br>
            <div class="card-title">Software Installation</div>
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
            <div class="card-title">Linux Web Servers</div>
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
            <div class="card-sub-title">Configure Firewall</div>
            <VCodeBlock
            class="codeBlock"
            :code="firewallSetup"
            highlightjs
            lang="shell"
            theme="github-dark"
            ></VCodeBlock>
            <br>
            <div class="card-title">Configuring Database Server</div>
            <div class="card-text">⦿ First ensure that the database server is running.</div>
            <div class="card-text">⦿ From the command line, use the 'mysql' command</div>

            </v-card>
        </v-col>
    </v-row>
</template>