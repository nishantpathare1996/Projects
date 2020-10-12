import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;
import java.util.HashSet;
import java.util.Random;
import java.util.Set;

public class Evaluation_mongo {

	private static String localhost = NetworkUtility.getLocalAddress();
	private static final int KEY_SIZE = 10;
	private static final int VALUE_SIZE = 90;

	public static void main(String[] args) {
		String host = (args.length > 0 && args[0] != null) ? args[0] : "127.0.0.1";
		int port = (args.length > 0 && args[1] != null) ? Integer.parseInt(args[1]) : 27020;
		int numOperations = (args.length > 0 && args[2] != null) ? Integer.parseInt(args[3]) : 100000;
		
		evaluateMongoDB(host, port, numOperations);
		
	}

	private static void evaluateMongoDB(String host, int port, int numOperations) {

		int id = Integer.parseInt(localhost.substring(localhost.lastIndexOf(".") + 1, localhost.length())) + new Random().nextInt(50);

		long startKey = id * numOperations;
		long endKey = (id * numOperations) + numOperations - 1;

		long startTime, endTime, totalTime = 0;
		double time, throughput;

		// Connecting to Host i.e. MongoDB Query Router (Server)
		MongoDB.connect(host, port);

		// Evaluating INSERT operation
		System.out.println("Evaluating MongoDB's INSERT Operation.");
		for (long i = startKey; i <= endKey; i++) {
			String key = padString(Long.toString(i), KEY_SIZE);
			String value = padString(Long.toString(i), VALUE_SIZE);

			startTime = System.currentTimeMillis();
			MongoDB.insert(key, value);
			endTime = System.currentTimeMillis();
			totalTime += (endTime - startTime);
		}

		time = totalTime / 1000.0;
		throughput = numOperations / time;

		System.out.printf("\nMongoDB INSERT:");
		System.out.printf("\nTotal time to execute INSERT operations = %f seconds", time);
		System.out.printf("\nLATENCY  = %f milliseconds", totalTime / (double) numOperations);
		System.out.printf("\nTHROUGHPUT = %f/sec", throughput);

		// Evaluating LOOKUP operation
		System.out.println("\n\nEvaluating MongoDB's LOOKUP Operation.");
		for (long i = startKey; i <= endKey; i++) {
			String key = padString(Long.toString(i), KEY_SIZE);

			startTime = System.currentTimeMillis();
			MongoDB.lookup(key);
			endTime = System.currentTimeMillis();
			totalTime += (endTime - startTime);
		}

		time = totalTime / 1000.0;
		throughput = numOperations / time;

		System.out.printf("\nMongoDB LOOKUP:");
		System.out.printf("\nTotal time to execute LOOKUP operations = %f seconds",time);
		System.out.printf("\nLATENCY -  = %f milliseconds", totalTime / (double) numOperations);
		System.out.printf("\nTHROUGHPUT -  = %f/sec", throughput);

		// Evaluating REMOVE operation
		System.out.println("\n\nEvaluating MongoDB's REMOVE Operation.");
		for (long i = startKey; i <= endKey; i++) {
			String key = padString(Long.toString(i), KEY_SIZE);

			startTime = System.currentTimeMillis();
			MongoDB.remove(key);
			endTime = System.currentTimeMillis();
			totalTime += (endTime - startTime);
		}

		time = totalTime / 1000.0;
		throughput = numOperations / time;

		System.out.printf("\nMongoDB REMOVE:");
		System.out.printf("\nTotal time to execute REMOVE operations = %f seconds", numOperations, time);
		System.out.printf("\nLATENCY -  = %f milliseconds", totalTime / (double) numOperations);
		System.out.printf("\nTHROUGHPUT - = %f/sec", throughput);
		System.out.println("\n");
	}

	
	private static String padString(String string, int length) {
		StringBuffer paddedString = new StringBuffer();
		paddedString.append(string);

		for (int i = 1; i <= length - (string.length()); i++) {
			paddedString.append("#");
		}
		return paddedString.toString();
	}


}
