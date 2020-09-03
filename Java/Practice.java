package Classes1;
import Classes2.data;
public class Practice
{

    public static void main(String []args)
    {
        data d=new data();
        d.setid(189);
        d.setname("Sohaib");
        d.setsalary(26526.7377);
         System.out.println("Id is "+d.showid());
         System.out.println("name is "+d.showname());
         System.out.println("salary is "+d.showsalary());
    }
}