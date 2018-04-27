#!/bin/bash

clear

echo "Wordpress Import Database and Configure Options"

DB_NAME=$1
SQL_FILE=$2
SITE_URL=$3

echo "Importing database..." &&
mysql -e "create database if not exists $DB_NAME" &&
mysql $DB_NAME < $SQL_FILE &&

echo "Updating settings..."
mysql -e "update $DB_NAME.wp_options set option_value='http://$SITE_URL' where option_name in ('siteurl', 'home')"

echo "Done."