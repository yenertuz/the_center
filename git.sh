#!usr/bin/bash

if [$# -eq 0]
	MSG = "m";
else
	MSG = $1;
fi

git add .; git commit -m "$MSG" ; git push
