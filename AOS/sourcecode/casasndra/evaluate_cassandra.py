from cassandra import ConsistencyLevel
from cassandra.cluster import Cluster
from cassandra.query import SimpleStatement
from randomKeys import randomKeyValues
from functools import reduce
import time

KEYSPACE = "cs550"

def main():
	#cluster = Cluster(['10.56.0.38','10.56.0.57','10.56.0.62','10.56.0.61','10.56.0.81','10.56.0.59','10.56.0.86','10.56.0.25',])
	cluster = Cluster(['129.114.25.64'])
	session = cluster.connect()
	session.execute("CREATE KEYSPACE IF NOT EXISTS " + KEYSPACE + " WITH REPLICATION = { 'class' : 'SimpleStrategy', 'replication_factor' : 1 }")
	session.execute("""CREATE TABLE IF NOT EXISTS cs550.testTable(key text,value text,PRIMARY KEY (key))""")
	query = session.prepare("""INSERT INTO cs550.testTable (key, value) VALUES (?, ?)""")
	#1 lakh operaations
	NOP = 100000

	#insert into table
	randomKeys1 = []
	insert_latency = []
	start =  time.time()
	for i in range(NOP):
		randKey = randomKeyValues(10)
		randomKeys1.append(randKey)
		randValue = randomKeyValues(90)
    	session.execute(prepared, ("%s" % randKey, "%s" % randValue))
    	latency.append(time.time()-start)
	end = time.time()

	total_insert = end - start
    

    # Lookup
	start = time.time()
	lookup_latency = []
	for i in range(NOP):
		session.execute("SELECT key, value FROM cs550.testTable WHERE key='"+randomKeys1[i]+"'")
		lookup_latency.append(time.time()-start)
	end = time.time()

	total_lookup = end - start
    
    
    # Remove
	start = time.time()
	remove_latency = []
	for i in range(NOP):
    #    log.info("Remove row %d" %i)
		session.execute("DELETE FROM cs550.testTable WHERE key='"+randomKeys1[i]+"'")
		remove_latency.append(time.time()-start)
	end = time.time()
	total_remove = end - start

#All about latency and throughput
	avg_insert = reduce(lambda a, b: a + b, insert_latency) / len(insert_latency)
	avg_lookup = reduce(lambda a, b: a + b, lookup_latency) / len(lookup_latency)
	avg_remove = reduce(lambda a, b: a + b, remove_latency) / len(remove_latency)

	avg_all = (avg_insert+avg_lookup+avg_remove)/3

	print("average insert latency",avg_insert)
	print("average lookup latency",avg_lookup)
	print("average remove latency",avg_remove)
	print("Total avergae latency",avg_all)

if __name__ == "__main__":
    main()

