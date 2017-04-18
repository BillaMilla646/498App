#!/bin/bash

#Group 4, all members present at class (Emma, Bill, Devon, Clay, Kelvin)

#Total tests, starts from 0 (so setting to 2 means three tests)
TOT_TESTS=30
CURR_TEST=0

#Set TOT_TESTS so that it counts all the way through
let TOT_TESTS=TOT_TESTS+1
while [ $CURR_TEST -ne $TOT_TESTS ]; do
	FILENAMET="./testFiles/input$CURR_TEST.in"
	cat input1.txt | ./replace `cat $FILENAMET` > testFiles/output$CURR_TEST.out
	let CURR_TEST=CURR_TEST+1
done