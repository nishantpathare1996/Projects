# Advanced Operating System Project

* Compared throughput and latency performances of three NoSQL systems viz. Cassandra, MongoDB and Redis on insert, lookup and delete operations.
* Analysed these operations by scaling it up to 8 nodes with concurrent 100K requests

## Manual for Running code:

### For Mongo DB: 
1. Attach the ip config file in input as args[0]  
2. port_number config file in input as args[1] 
3. The third input as args[2] will be the number of operations you want to perform.
4. You need to attach the jar file of mongo which is in lib folder.

### For Cassandra:
1. Attach the ip address in Cluster. 
2. Install cassandra-manual module in python using pip install cassandra-driver.

### For Redis:
1. Attach ip address in startup_nodes variable with port number. 
2. Here you need to install redis module using 'pip install redis'.
3. Also install redis cluster with 'pip nstall redis-py-cluster'
