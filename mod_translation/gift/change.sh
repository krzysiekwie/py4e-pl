#!/bin/bash

set -ex

if [ ! -d "../../mod/gift/" ]; then
    echo "../../mod/gift/ does not exists"
    exit
fi

cp index.php.sed ../../mod/gift/
cd ../../mod/gift/

if [ ! -f index.php.orig ]; then
    cp index.php index.php.orig
fi

cp index.php.orig index.php

while read line; do
    IFS=';' read -a strarr <<< "$line"
    sed "s~${strarr[0]}~${strarr[1]}~" index.php > index.php.tmp
    retval=$(cmp --silent index.php index.php.tmp; echo $?)
    if [[ $retval -eq 0 ]]; then # no matching
        rm index.php.tmp
        break
    fi
    mv index.php.tmp index.php
done < index.php.sed

sed -i "s~\$('#quiz').append(template(question));~\$('#quiz').append(template(question));\ndocument.querySelectorAll('pre code').forEach((block) => { hljs.highlightBlock(block); });~" index.php
