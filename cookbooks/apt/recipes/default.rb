#
# Cookbook:: apt
# Recipe:: default
#
# Copyright:: 2017, The Authors, All Rights Reserved.

execute "apt-get dist-uprade -y" do
  command "apt-get dist-upgrade -y"
end
