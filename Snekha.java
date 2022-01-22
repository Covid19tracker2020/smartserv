//Tool used Spring Tool Suite.
//Dependencies imported 
//        <dependency>
//			<groupId>com.googlecode.json-simple</groupId>
//			<artifactId>json-simple</artifactId>
//			<version>1.1.1</version>
//		  </dependency>
//This dependency helps to get features related to json.
package com.example.restful;

import java.net.HttpURLConnection;
import java.net.URL;
import java.util.Map;
import java.util.Scanner;
import java.util.Set;
import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;

public class Snekha {

    public static void main(String[] args) {
        try {

            URL url = new URL("https://s3.amazonaws.com/open-to-cors/assignment.json");

            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");
            conn.connect();

            //fetching response code
            int responsecode=conn.getResponseCode();

            if (responsecode!=200) {
                throw new RuntimeException("HttpResponseCode: " + responsecode);
            } else {

                String a ="";
                Scanner b=new Scanner(url.openStream());

                //Convert JSON data into a string using a scanner
                while(b.hasNext()) {
                    a+=b.nextLine();
                }
                //parse the string into a json object
                JSONParser parse=new JSONParser();
                JSONObject data_obj=(JSONObject) parse.parse(a);
                int count=0;
                //get the required object from the above created object for example here our required JSON Object is "Products".
                JSONObject obj=(JSONObject) data_obj.get("products");
                Set<String> keys=obj.keySet();
                for(String s:keys) {
                	Map value=(Map) obj.get(s);
                	//for(int i=0;i<value.size();i++) {
                	System.out.println("Product Number:"+(++count));
                		System.out.println("Sub Category of the product:"+value.get("subcatagory"));
                		System.out.println("Title of the product:"+value.get("title"));
                		System.out.println("Price of the product:"+value.get("price"));
                		System.out.println("Popularity of the product:"+value.get("popularity"));
                	//}
                		System.out.println("....................--------------------....................");
                }
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}