#
# Cookbook:: php
# Recipe:: webserver
#
# Copyright:: 2017, The Authors, All Rights Reserved.
# Sjefff

include_recipe "apt"

package 'php5' do
  action :install
end

package 'php5-cgi' do
  action :install
end

package 'php5-fpm' do
  action :install
end

service 'nginx' do
  action [ :enable, :start ]
end

#cookbook_file "/usr/share/nginx/html/index.php" do
#  source "index.php"
#  mode "0644"
#end

#cookbook_file "/usr/share/nginx/html/stylebl.php" do
#  source "stylebl.php"
#  mode "0644"
# end
