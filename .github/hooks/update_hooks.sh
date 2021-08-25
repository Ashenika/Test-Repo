#!/bin/bash

green='\033[0;32m'

sudo chmod +x *
cp  * ../../.git/hooks/
printf "${green}Success: All the hooks have been copied to .git/hooks and marked as executable.\n"
