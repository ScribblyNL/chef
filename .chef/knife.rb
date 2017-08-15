# See http://docs.chef.io/config_rb_knife.html for more information on knife configuration options

current_dir = File.dirname(__FILE__)
log_level                :info
log_location             STDOUT
node_name                "th3d"
client_key               "#{current_dir}/th3d.pem"
chef_server_url          "https://api.chef.io/organizations/th3d"
cookbook_path            ["#{current_dir}/../cookbooks"]
# knife			 [:editor] = "vim"
knife[:editor] = "vim"
