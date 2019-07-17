ps -ef|grep easyswoole |grep -v grep|awk '{print "kill -9 "$2}'|sh
