#
# Cookbook:: samba
# Recipe:: default
#
# Copyright:: 2017, The Authors, All Rights Reserved.


package 'samba' do
  action :install
end

service 'samba' do
  action [ :enable, :start ]
end
