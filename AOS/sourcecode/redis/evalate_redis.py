from rediscluster import RedisCluster
from randomKeys import randomKeyValues
import time

def main():
    NOP = 100000
    startup_nodes = [{"host": "127.0.0.1", "port": "7000"}]
    rediscluster1 = RedisCluster(startup_nodes=startup_nodes, decode_responses=True)
    latency = []
    start = time.time()
    randomKeys1 = [] 
    # Insert
    for i in range(NOP):
        randomKeys = randomKeyValues(10)
        randomKeys1.append(randomKeys)
        randomvalues = randomKeyValues(90)
        rediscluster1.set(randKey, randomvalues)
        latency.append(time.time()-start)
    end = time.time()
    total_insert = end - start

    start = time.time() 
    # Lookup
    for i in range(NOP):
        rediscluster1.get(randKeys[i])
        latencies.append(time.time()-start)
    end=time.time()
    total_lookup = end - start


    start = time.time() 
    # Remove
    for i in range(NOP):
        rediscluster1.delete(randKeys[i])
        latencies.append(time.time()-start)
    end=time.time()
    total_remove = end - start

    avg = sum(latencies) / len(latencies)
    insert_throughput = NOP/total_insert
    lookup_throughput = NOP/total_lookup
    remove_throughput = NOP/total_remove

    print("insert_throughput",insert_throughput)
    print("lookup_throughput",lookup_throughput)
    print("remove_throughput",remove_throughput)
    print("avg letnecies: ",avg)
    print("total time: ",total_time)



if __name__ == "__main__":
    main()
