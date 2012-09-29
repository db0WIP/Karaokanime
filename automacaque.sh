#!/bin/sh
TABLE=$1

IFS='
'

echo 'let t_'"$TABLE"' = <:table< '"$TABLE ("
for i in $(psql -c '\d '"$TABLE" -q karaokanime | grep -E '^\ [^\ ]' | sed -e 's#character#text#'); do
    name=$(echo $i|cut -d '|' -f1|sed -e 's# ##g')
    type=$(echo $i|cut -d '|' -f 2 | cut -d ' ' -f 2)
    echo $name $type','
done
echo ') >>'
