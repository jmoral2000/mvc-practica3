#!/bin/bash
#creates a posix group suitable for containing Linux and Windows users
#usage s4group <name>
echo "Creando grupo "$1
sudo samba-tool group add $1

#strgid=$(wbinfo --group-info=$1)
#gid=$(echo $strgid | cut -d ":" -f 3)
#echo "dn: cn=$1,cn=Users,dc=iesmvm,dc=local
#changetype: modify
#add:objectclass
#objectclass: posixGroup
#-
#add: gidnumber
#gidnumber: $gid" > /tmp/$1
#ldbmodify --url=/var/lib/samba/private/sam.ldb -b dc=iesmvm,dc=local /tmp/$1
#rm /tmp/$1
