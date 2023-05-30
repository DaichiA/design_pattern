!bin/bash

for i in $(seq 0 9)
do
  echo $i $i $i >> "big${i}.txt"
done