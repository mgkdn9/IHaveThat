/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mkohl
 */
public class TestSendOneMessage {
    String template = ""
            + "<p>Dear FIRST NAME, you win the prize!</p>";
    String[] dbRow = new String[]{"Bob"};
    assert(template.replace("FIRST NAME",dbRow[0])== "<p>Dear Bob, you win the prize!</p>");
}
