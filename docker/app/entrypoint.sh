#!/bin/bash

set -m
unitd --no-daemon --control "unix:/var/run/control.unit.sock" &
groupadd unitsock
chgrp unitsock /var/run/control.unit.sock
chmod g+rw /var/run/control.unit.sock
curl -X PUT --data-binary @/unit-php.json --unix-socket /var/run/control.unit.sock http://localhost/config/

fg %1
