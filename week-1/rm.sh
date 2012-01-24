#!/bin/bash
mkdir ~/.Trash &> /dev/null
while [ ! -z "$1" ]; do
   mv "$1" ~/.Trash/
   shift  #increment the loop variable
done
