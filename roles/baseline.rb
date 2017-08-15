name "Baseline"
description "Baseline for all devices"
run_list "recipe[apt]", "recipe[tools]"
