#!/bin/bash

kill -9 `ps aux|grep app_server|awk '{print $2}'`


