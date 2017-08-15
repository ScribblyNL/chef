#
# Cookbook:: tools
# Recipe:: default
#
# Copyright:: 2017, The Authors, All Rights Reserved.


package 'htop' do
  action :install
end

package 'w3m' do
  action :install
end

package 'nano' do
  action :install
end

package 'iotop' do
  action :install
end

package 'preload' do
  action :install
end

package 'nmap' do
  action :install
end

package 'mc' do
  action :install
end

package 'tree' do
  action :install
end

# Check disk usage
package 'ncdu' do
  action :install
end

package 'atop' do
  action :install
end

package 'vim' do
  action :install
end

package 'colordiff' do
  action :install
end
