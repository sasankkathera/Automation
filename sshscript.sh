#! /bin/bash

pwd

cp sshd_config /etc/ssh/sshd_config

systemctl restart sshd

chpasswd <<< "admin:sasank"
