#!/bin/bash
echo "Eliminando usuario "$1
sudo samba-tool user delete $1 
