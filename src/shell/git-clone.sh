#!/bin/bash

# Check for correct parameters
clear
if [ $# -lt 5 ]
	then
	echo "ERROR: Bad usage."
	echo "Usage: $0 clone-to-path git-ssh-url branch ssh-key ssh-key-passphrase"
	exit 1
elif [ -z $1 ] || [ -z $2 ] || [ -z $3 ] || [ -z $4 ] || [ -z $5 ]
	then
	echo "ERROR: Some parameter is NULL."
	echo "Usage: $0 clone-to-path git-ssh-url branch ssh-key ssh-key-passphrase"
	exit 1
fi

if [ ! -d $1 ]
	then
	mkdir $1
fi

cd $1

# Start agent
ssh-agent bash
# Delete keys
ssh-add -D
expect << EOF
	set timeout 1
#	log_user 0

	spawn ssh-add $4
	expect "Enter passphrase" {
		send "$5\r"
		expect {
			eof {
				exit 0
			}
			"Bad passphrase" {
				exit 2
			}
			timeout {
				exit 1
			}
		}
	}
	exit 1
EOF

result=$?

case $result in
	0)
		echo "Successfully added ssh-key.";;
	2)
	    echo "ERROR: ssh-add";
		echo "Bad key passphrase.$result";
		exit $result;;
	*)
	    echo "ERROR: ssh-add";
		echo "Failed.";
		exit $result;;
esac

expect << EOF
	set timeout 1
	# log_user 0

	spawn git clone -b $3 $2 ./
	expect {
		timeout {
			exp_continue
		}
		"fatal: Could not read from remote repository" {
		    exit 3
        }
        "fatal" {
			exit 2
		}
		"ERROR" {
			exit 2
		}
		eof {
			exit 0
		}
	}
EOF

result=$?

case $result in
	0)
		echo "Success.";;
	*)
		echo "Failed.";;
esac

exit $result