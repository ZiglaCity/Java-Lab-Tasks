package Encapsulation.LMS;

import java.util.ArrayList;

public class Member {
    private String memberId;
    private String name;
    private ArrayList<String> borrowedBooks;

    public Member (String memberId, String name){
        this.memberId = memberId;
        this.name = name;
        this.borrowedBooks = new ArrayList<String>();
    }

    public String getName(){
        return name;
    }
    public void setName(String name){
        this.name = name;
    }
    public String getMemberId(){
        return memberId;
    }
    public void setMemberId(String memberId){
        this.memberId = memberId;
    }

    public ArrayList<String> getBorrowedBooks() {
        return borrowedBooks;
    }

    public void setBorrowedBooks(ArrayList<String> borrowedBooks) {
        this.borrowedBooks = borrowedBooks;
    }

    public void borrowBook(Book book){
        
    }
    
    public void returnBook(Book book){

    }
    
}
