
import java.util.*;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mkohl
 */
public class ChangeMaker {
    public static int[] makeChange(double price, double payment){
        int output[] = new int[5];
        double difference = round(payment - price,2);
        System.out.println(difference);
        int diffcents = (int)(difference*100);
        System.out.println(diffcents);
        int ones, quarters, dimes, nickels, pennies;
        ones = diffcents/100;                   // Calculate ones
        diffcents = diffcents - ones*100;
        quarters = diffcents/25;                   // Calculate quarters
        diffcents = diffcents - quarters*25;
        dimes = diffcents/10;                   // Calculate dimes
        diffcents = diffcents - dimes*10;
        nickels = diffcents/5;                   // Calculate nickels
        diffcents = diffcents - nickels*5;
        pennies = diffcents/1;                     // Calculate pennies
        System.out.println(ones);               // PRINT
        System.out.println(quarters);               // PRINT
        System.out.println(dimes);               // PRINT
        System.out.println(nickels);               // PRINT
        System.out.println(pennies);               // PRINT
        
        output[0] = ones;
        output[1] = quarters;
        output[2] = dimes;
        output[3] = nickels;
        output[4] = pennies;
        
        return output;
    }
    
    public static double round(double value, int places) {
        if (places < 0) throw new IllegalArgumentException();

        long factor = (long) Math.pow(10, places);
        value = value * factor;
        long tmp = Math.round(value);
        return (double) tmp / factor;
    }
}
