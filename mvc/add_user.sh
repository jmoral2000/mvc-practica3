#!/bin/bash
#$1 user
#$2 Grupo
#$3 carpeta
#$4 contraseña
#$5 group primary
#gid=$(wbinfo --group-info=$5)
echo "Creando usuarios"
echo $1
echo $2
echo $3
echo $4
echo $5
echo $gid
gid_number=$(echo $gid |cut -d: -f3)
echo $gid_namber
sudo samba-tool user add $1  $2, --home-directory $3 --department $4
#--gid-number $2
