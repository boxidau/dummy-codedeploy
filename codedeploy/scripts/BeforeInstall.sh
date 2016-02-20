#!/bin/bash

/usr/sbin/service httpd stop

rm /etc/httpd/conf.d/* || true
