#!/bin/bash
echo "Eliminando grupo "$1
sudo samba-tool group delete $1 
