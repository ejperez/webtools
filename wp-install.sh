#!/bin/bash

clear

echo "Wordpress Bash Installer"

echo "Hi, $USER"

echo "Downloading latest Wordpress..."

wget https://wordpress.org/latest.tar.gz

echo "Extracting..."

tar xfz latest.tar.gz

echo "Deleting temp files..."

rm latest.tar.gz

echo "Moving files..."

cp -r wordpress/. .

rm -r wordpress/

echo "Done."

