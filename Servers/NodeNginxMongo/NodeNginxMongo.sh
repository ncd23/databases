#!/bin/bash

set SERVER_ADDR=${1}

cd ~/
sudo apt-get update
sudo apt-get -qq install git-core curl g++ build-essential openssl libssl-dev pkg-config
mkdir ~/local
wget -c http://nodejs.org/dist/v0.6.7/node-v0.6.7.tar.gz
tar -xvvf node-v0.6.7.tar.gz
cd node-v0.6.7
export JOBS=2
./configure --prefix=$HOME/local/node
make
make install
echo 'export PATH=$HOME/local/node/bin:$PATH' >> ~/.profile
echo 'export NODE_PATH=$HOME/local/node:$HOME/local/node/lib/node_modules' >> ~/.profile
source ~/.profile


cat << 'EOF'



ooOoOOo                            o  o                       o.     O OooOOo.  Oo      oO 
   O                              O  O  o                     Oo     o O     `O O O    o o 
   o                   O          o  o                        O O    O o      O o  o  O  O 
   O                  oOo         O  O                        O  o   o O     .o O   Oo   O 
   o    'OoOo. .oOo    o   .oOoO' o  o  O  'OoOo. .oOoO       O   o  O oOooOO'  O        o 
   O     o   O `Ooo.   O   O   o  O  O  o   o   O o   O       o    O O o        o        O 
   O     O   o     O   o   o   O  o  o  O   O   o O   o       o     Oo O        o        O 
ooOOoOo  o   O `OoO'   `oO `OoO'o Oo Oo o'  o   O `OoOo       O     `o o'       O        o 
                                                      O                                    
                                                   OoO'                                    
==========================================================================================

NOTE: This takes approximaely 25 minutes on an AWS micro instance. Thit will run faster
on anything larger than a micro.


==========================================================================================

EOF

curl http://npmjs.org/install.sh | sh

# update global environment variables
NODE="/home/ubuntu/local/node"
PATH="/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:$NODE/bin:$NODE/lib/node_modules:$node_modules:$HOME/node_modules/brunch/bin"

# install runit
sudo apt-get install runit
cd /etc/sv && sudo mkdir userservice 
sudo touch run && sudo chmod a+x run 
sudo chown ubuntu:ubuntu -R /etc/sv/userservice

# edit run files?
exec 2>&1
exec chpst -U ubuntu:ubuntu runsvdir /home/ubuntu/service

# register service
cd ~/ 
mkdir service && cd service
mkdir nodejs && cd nodejs 
touch run && chmod a+x run



cat << 'EOF'

==============================================

OOooOoO                     o               o 
o       o         o        O               O  
O                          o               o  
oOooO                      O               o  
O       O  'OoOo. O  .oOo  OoOo. .oOo. .oOoO  
o       o   o   O o  `Ooo. o   o OooO' o   O  
o       O   O   o O      O o   O O     O   o  
O'      o'  o   O o' `OoO' O   o `OoO' `OoO'o 
                                              
                                              
==============================================

EOF

npm install brunch
npm install brunch-extensions

sudo apt-get -qq install nginx

# scp -i ~/.ssh/id_rsa.bak ~/Personal/databases/Servers/NodeNginxMongo/Files/etc/nginx/sites-available ubuntu@

# scp -i ~/.ssh/id_rsa.bak ~/Personal/databases/Servers/NodeNginxMongo/Files/*

sudo apt-get -qq install upstart

