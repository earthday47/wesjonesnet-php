# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "scotch/box"
  config.vm.network "private_network", ip: "192.168.50.99"
  config.vm.hostname = "local.wesjones.net"
  config.vm.synced_folder "docroot/", "/var/www/public", :nfs => { :mount_options => ["dmode=777","fmode=777"] }

end
